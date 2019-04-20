<?php
$title = "ASSUR & MF - Actualités";
$style = "indexStyle.css";
$menu["news"] = "active";
include ("includes/head.php");
?>
  <div class="partenaire">
    <div class="grey-bg">
      <div class="container" style="padding-top:40px;">
        <div class="row">
<?php // include "includes/sideMenu.php"; ?>
          <div class="col-md-12 grey-content" id="background-content">
            <div class="row">
<?php // include "includes/news.html" 

  include 'includes/private/bddConnexion.php';
  
  $res = $db->query("SELECT * FROM amf_news ORDER BY id DESC LIMIT 0, 10");
  $res->execute();

        // on ajoute chaque news au fichier RSS
        while($news = $res->fetch(PDO::FETCH_ASSOC))
        {
?>          <main class="page-content jumbotron"><?php
                echo $news['news'];
?>          </main><?php
        }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
include "includes/modal-view-error.php";
?>
  <div class="blueurContainer">
    &nbsp;
  </div>

<?php include "includes/footer.php"; ?>
  </body>
