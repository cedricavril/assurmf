<?php
$title = "ASSUR & MF - Santé";
$style = "indexStyle.css";
$menu['sante'] = "active";
include ("includes/head.php");
if (!isset($_GET['uuid'])) { ?>
<iframe src="https://assurmf.oggo-data.net/iform/health" width="100%" height="500px" frameborder="0"></iframe>
<?php } else {
?>
<iframe src="https://assurmf.oggo-data.net/icomparator/health" width="100%" height="15000px" frameborder="0"></iframe>
<?php } ?>
  <div class="partenaire">
    <div class="grey-bg">
      <div class="container" style="padding-top:40px;">
        <div class="row">
<?php // include "includes/sideMenu.php"; ?>
          <div class="col-md-12 grey-content" id="background-content">
            <div class="row">
              <main class="page-content">
<?php include "includes/sante.html" ?>
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
    &nbsp;
  </div>

<?php include "includes/footer.php"; ?>
  </body>
