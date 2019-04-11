<?php
/*
https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form
THIS FILE USES PHPMAILER INSTEAD OF THE PHP MAIL() FUNCTION
*/
//        echo file_get_contents("../../templates/mail.php");
require 'PHPMailer-master/PHPMailerAutoload.php';

// require ReCaptcha class
require('recaptcha-master/src/autoload.php');

//include '../../includes/templates/mail.php';
/*
*  CONFIGURE EVERYTHING HERE
*/

$from = "contact@naytheet.fr";

// an email address that will be in the From field of the email.
$fromEmail = 'contact@naytheet.fr';
$fromName = 'Assur MF';

// email addresses that will receive the email with the output of the form
$sendToEmail1 = 'cabinet-amf@outlook.fr';
$sendToName1 = 'Assur & MF';
$sendToEmail2 = 'cedric_avril_pro@hotmail.fr';
$sendToName2 = 'Cédric';

// subject of the email
$subject = 'Nouveau message envoyé depuis le formulaire du site';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Prénom', 'surname' => 'Nom', 'phone' => 'Téléphone', 'email' => 'E-mail', 'message' => 'Message');

// message that will be displayed when everything is OK :)
$okMessage = 'Formulaire envoyé avec succès. Nous reprendrons contact avec vous.';

// If something goes wrong, we will display this message.
$errorMessage = 'Une erreur est apparue suite à l\'envoi du formulaire, ou vous n\'avez pas renseigné le ReCaptcha. Essayez ultérieurement.';

// ReCaptch Secret
$recaptchaSecret = '6LeFBJkUAAAAAFHsi-L22cLFgm77yTvjQZ5NjzbT';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try {
    if (!empty($_POST)) {

        // validate the ReCaptcha, if something is wrong, we throw an Exception,
        // i.e. code stops executing and goes to catch() block

//        if (!isset($_POST['g-recaptcha-response'])) {
//            throw new \Exception('ReCaptcha is not set.');
//        }

        // do not forget to enter your secret key from https://www.google.com/recaptcha/admin
        
        $recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());
        
        // we validate the ReCaptcha field together with the user's IP address
        
        $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

        if (!$response->isSuccess()) {
            throw new \Exception('Recaptcha non validé.');
        }
        
        // everything went well, we can compose the message, as usually
        if(count($_POST) == 0) throw new \Exception('Formulaire vide.');
        foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email
            if (isset($fields[$key])) {
//                $emailTextHtml = "<tr><th>$fields[$key]</th><td>$value</td></tr>";
            }
        }
        include ($_SERVER['DOCUMENT_ROOT']."/includes/templates/mail.php");
        $emailTextHtml .= $template;

        $mail = new PHPMailer;

        $mail->setFrom($fromEmail, $fromName);
// assuming these posts were sent
$sendToEmail3 = $_POST['email'];
$sendToName3 = $_POST['name'];
        $mail->addAddress($sendToEmail3, $sendToName3); 
        $mail->addBCC($sendToEmail1, $sendToName1); 
        $mail->addBCC($sendToEmail2, $sendToName2); 

        $mail->addReplyTo($from);


    // All the neccessary headers for the email.
        $headers = array('Content-Type: text/plain; charset="UTF-8";',
            'From: ' . $from,
            'Reply-To: ' . $from,
            'Return-Path: ' . $from,
        );


        $mail->isHTML(true);

        $mail->Subject = $subject;
        $mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
        $mail->CharSet = "UTF-8";

        if(!$mail->send()) {
            throw new \Exception('Je n\'ai pas pu envoyer le mail.' . $mail->ErrorInfo);
        }

        $responseArray = array('type' => 'success', 'message' => $okMessage);
    } else throw new \Exception('$_POST est vide');
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}
