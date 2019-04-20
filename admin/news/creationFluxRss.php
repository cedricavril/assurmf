<?php
//Cf. https://openclassrooms.com/courses/domxml-flux-rss-de-news

function &init_news_rss(&$xml_file)
{
        $root = $xml_file->createElement("rss"); // création de l'élément
        $root->setAttribute("version", "2.0"); // on lui ajoute un attribut
        $root = $xml_file->appendChild($root); // on l'insère dans le nœud parent (ici root qui est "rss")
       
        $channel = $xml_file->createElement("channel");
        $channel = $root->appendChild($channel);
               
        $desc = $xml_file->createElement("description");
        $desc = $channel->appendChild($desc);
        $text_desc = $xml_file->createTextNode("ASSUR & MF - News"); // on insère du texte entre les balises <description></description>
        $text_desc = $desc->appendChild($text_desc);
       
        $link = $xml_file->createElement("link");
        $link = $channel->appendChild($link);
        $text_link = $xml_file->createTextNode("https://assurmf.fr");
        $text_link = $link->appendChild($text_link);
       
        $title = $xml_file->createElement("title");
        $title = $channel->appendChild($title);
        $text_title = $xml_file->createTextNode("News");
        $text_title = $title->appendChild($text_title);
       
        return $channel;
}
 
function add_news_node(&$parent, $root, $date, $news)
{
        $item = $parent->createElement("item");
        $item = $root->appendChild($item);

        $titre = "Actualité de $date";
        $texteDuLien = "https://assurmf.fr/news.php?date=$date";
       
        $title = $parent->createElement("title");
        $title = $item->appendChild($title);
        $text_title = $parent->createTextNode($titre);
        $text_title = $title->appendChild($text_title);
       
        $link = $parent->createElement("link");
        $link = $item->appendChild($link);
        $text_link = $parent->createTextNode($texteDuLien);
        $text_link = $link->appendChild($text_link);
              
        $pubdate = $parent->createElement("pubDate");
        $pubdate = $item->appendChild($pubdate);
        $text_date = $parent->createTextNode($date);
        $text_date = $pubdate->appendChild($text_date);
       
        $src = $parent->createElement("source");
        $src = $item->appendChild($src);
        $text_src = $parent->createTextNode("https://assurm.fr");
        $text_src = $src->appendChild($text_src);
}
 
function rebuild_rss()
{
         // on récupère les news
//        $nws = mysql_query("SELECT nws_id, nws_pseudo, nws_titre, nws_contenu, nws_date FROM news WHERE ORDER BY nws_date DESC LIMIT 0 OFFSET 10");

    //=============================== pdo connexion ==================================//
  include '../private/PDOFactory.class.php';
  $db = PDOFactory::getMysqlConnexion();

  $res = $db->query("SELECT * FROM amf_news ORDER BY date DESC LIMIT 0, 10");

  $res->execute();

        // on crée le fichier XML
        $xml_file = new DOMDocument("1.0"); 
        // on initialise le fichier XML pour le flux RSS
        $channel = init_news_rss($xml_file);
 
        // on ajoute chaque news au fichier RSS
        while($news = $res->fetch(PDO::FETCH_ASSOC))
        {
                add_news_node($xml_file, $channel, $news["date"], $news["news"]);
        }  
     
        // on écrit le fichier dans la racine
        $xml_file->save("../../news.xml");
}
echo "Le flux rss a été mis à jour - vous pouvez maintenant fermer cette fenêtre.";
rebuild_rss();
?>
