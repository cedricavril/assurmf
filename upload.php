<?php
	$is_success = "success";
	$error_msg = "error";

$id = json_decode($_POST['id']);
//$id = 12;
$file = "images/$id/";

//Créer un dossier selon l'id
if (!file_exists($file)) mkdir($file, 0777, true);
chmod($file, 0777);

$arrayResult = array();

foreach ($_FILES as $key => $value) {
	if (upload($key, $file . $_FILES[$key]['name'])) $arrayResult[] = $_FILES[$key]['name']; else echo $error_msg;
};

echo json_encode($arrayResult);

//$image_sizes = getimagesize($_FILES['files']['tmp_name'][0]);
//if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "Image trop grande";


   //Test1: fichier correctement uploadé
//     if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;
   //Test2: taille limite
//     if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;
   //Test3: extension
//     $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
//     if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
   //Déplacement
//     return move_uploaded_file($_FILES[$index]['tmp_name'],$destination);





//$nom = "avatars/{$id_membre}.{$extension_upload}";
//$resultat = move_uploaded_file($_FILES['icone']['tmp_name'],$nom);
//if ($resultat) echo "Transfert réussi";







//var_dump($_FILES);

//$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' , 'pdf');




//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
/*$extension_upload = strtolower(  substr(  strrchr($filename, '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
else $error_msg = 'extension incorrecte. Veuillez envoyer une image ou un pdf.';

die(json_encode([ 'success'=> $is_success, 'error'=> $error_msg]));*/




















function upload($index,$destination,$maxsize=FALSE,$extensions=FALSE)
{
   //Test1: fichier correctement uploadé
     if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;
   //Test2: taille limite
     if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;
   //Test3: extension
     $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
     if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;

	//Déplacement
     if (move_uploaded_file($_FILES[$index]['tmp_name'],$destination)) return chmod($destination, 0777);
     else return FALSE;
}
 
//EXEMPLES
 // $upload1 = upload('icone','uploads/monicone1',15360, array('png','gif','jpg','jpeg') );
//  $upload2 = upload('mon_fichier','uploads/file112',1048576, FALSE );
 
//  if ($upload1) "Upload de l'icone réussi!<br />";
//  if ($upload2) "Upload du fichier réussi!<br />";







?>