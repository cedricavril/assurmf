<?php
/*
https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form
THIS FILE USES PHPMAILER INSTEAD OF THE PHP MAIL() FUNCTION
*/
//        echo file_get_contents("../../templates/mail.php");
require '../../includes/forms/contact/PHPMailer-master/PHPMailerAutoload.php';

/*
*  CONFIGURE EVERYTHING HERE
*/

$from = "contact@assurmf.fr";

// an email address that will be in the From field of the email.
$fromEmail = 'contact@assurmf.fr';
$fromName = 'Assur & MF';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Prénom', 'surname' => 'Nom', 'phone' => 'Téléphone', 'email' => 'E-mail', 'message' => 'Message');

// message that will be displayed when everything is OK :)
$okMessage = 'Newsletter envoyée par mail.';

// If something goes wrong, we will display this message.
$errorMessage = 'Une erreur est apparue suite à l\'envoi de la newsletter.';
/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try {
    if (!empty($_POST)) {

        if(count($_POST) == 0) throw new \Exception('POST vide.');
        else {
            // subject of the email
            $subject = $_POST['title'];

// notice : can't use usercontroller from elsewhere than object to get the list
            include('../private/PDOFactory.class.php');
            $sql = 'SELECT * FROM amf_users WHERE newsletter = 1';

            $db = PDOFactory::getMysqlConnexion();
            $requete = $db->query($sql);
            $requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'User');

            $amfUsers = $requete->fetchAll();
            foreach ($amfUsers as $user)
            {
                $mail = new PHPMailer;
            // newsletter
                $news = $_POST['news'];

                $userMail = $user['email'];
                include '../../includes/templates/newsletterMail.php';
            // body of the email
                $emailTextHtml = $template;
                $mail->setFrom($fromEmail, $fromName);

// email addresses that will receive the email with the output of the form
                $sendToEmail = $user['email'];
                $sendToName = $user['prenom']." ".$user['nom'];
                $mail->addAddress($sendToEmail, $sendToName); 

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
                    throw new \Exception('Je n\'ai pas pu envoyer ce mail.' . $mail->ErrorInfo);
                }
            }
            $responseArray = array('type' => 'success', 'message' => $okMessage);
        }
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