<?php 
// assuming this post exists 
//$_POST['message'] = nl2br($_POST['message']);

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
					<span style= \"color:#000080;font-family: Verdana;\">Bonjour Khalissa,</span></p>
		<p>Ces informations ont été envoyées suite à une demande de devis : ";
        $template .= "<table style='border-collapse: separate;' width= \"800\">
		<tbody>" . $emailTextHtmlData;
        $template .= "</tbody></table></p>
        				<p>
					<span style = \"color:#000080;font-family: Verdana;\"><a href='".$lienImages."'>Lien vers les images envoyées</a></span>
				</p>
			</td>
		</tr></tbody></table>
		</div>
    </center>
</body>

</html>";
?>