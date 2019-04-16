<?php
// assuming this post exists 
$_POST['message'] = nl2br($_POST['message']);

$template = "<!-- use bootstrap grid to responsive it all -->
<html>
<head>
<meta http-equiv= \"Content-Type\" content= \"text/html; charset= utf-8\"></head>
<body style= \"background-color: #43BDD5 \">
    	<div style= \"margin:10px;width:800px;padding:35px;background:#FFFFFF; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; border: 1px solid #a5a1a6 !important;\">
<table cellpadding= \"0\" cellspacing= \"0\" width= \"800\">
	<tbody>
		<tr>
			<td align= \"center\">
				<img src= \"https://assurmf.fr/images/banner.svg\"><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					<br>
<table cellpadding= \"0\" cellspacing= \"0\" width= \"800\">
<!-- assuming this post exists -->
					<span style= \"color:#000080;font-family: Verdana;\">Bonjour ".$_POST['name'].",</span></p>
		<p>Vous avez saisi ces informations : ";
        $template .= "<table style='border-collapse: separate;' width= \"800\">
		<tbody>";
        foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email
            if (isset($fields[$key])) {
                $template .= "<tr><th style = 'text-align: right'>$fields[$key] :&nbsp;</th><td style = 'border: 1px solid'>$value</td></tr>";
            }
        };
        $template .= "</tbody></table></p>
				<p>
					<span style = \"color:#000080;font-family: Verdana;\">Vous pouvez aussi l'appeler directement au <b><a href=\"tel:+33557832810\">0557832810</a></b> ou répondre à ce mail.</span>
				</p>
				<p style = \"padding-top:25px;\">
					<span style = \"color:#000080;font-family: Verdana;\">A très bientôt et merci encore pour l'intérêt que vous portez à nos services.</span>
 				</p>
				<p>
					<br>
					<span style = \"color:#000080;font-family: Verdana;\">Bien Cordialement,	<br><br>Khalissa Merchela, <br>Directrice générale</span>
				</p>
			</td>
		</tr></tbody></table>
		</div>
    </center>
</body>

</html>";
?>