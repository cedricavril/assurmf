<?php
$title = "ASSUR & MF - Épargne Placement";
$style = "indexStyle.css";
$menu['epargne'] = "active";
include ("includes/head.php");
?>
  <div class="partenaire">
    <div class="grey-bg">
      <div class="container" style="padding-top:40px;">
        <div class="row">
<?php // include "includes/sideMenu.php"; ?>
          <div class="col-md-12 grey-content" id="background-content">
            <div class="row">
              <main class="page-content">
<?php include "includes/epargne.html" ?>
              </main>
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
  </div>

<?php include "includes/footer.php"; ?>
  </body>
