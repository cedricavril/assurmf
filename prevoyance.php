<?php
$title = "ASSUR & MF - Prévoyance Protection des proches";
$style = "indexStyle.css";
$menu['prevoyance'] = "active";
include ("includes/head.php");
include ("includes/prevoyanceHead.php");
// mettre plutôt le prevFoot pour éviter redondance ci dessous
?>
<div id="GO" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <iframe src="https://assurmf.oggo-data.net/iform/decease" width="100%" height="450px" frameborder="0"></iframe>
        </div>
    </div>
</div>

<div id="CD" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <iframe src="https://assurmf.oggo-data.net/iform/deces" width="100%" height="450px" frameborder="0"></iframe>
        </div>
    </div>
</div>

<div id="AD" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <iframe src="https://assurmf.oggo-data.net/iform/dependence" width="100%" height="450px" frameborder="0"></iframe>
        </div>
    </div>
</div>

<div id="IH" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <iframe src="https://assurmf.oggo-data.net/iform/ijh" width="100%" height="450px" frameborder="0"></iframe>
        </div>
    </div>
</div>

<div id="PP" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <iframe src="https://assurmf.oggo-data.net/iform/ij" width="100%" height="450px" frameborder="0"></iframe>
        </div>
    </div>
</div>


<div class="partenaire">
    <div class="grey-bg">
      <div class="container" style="padding-top:40px;">
        <div class="row">
<?php // include "includes/sideMenu.php"; ?>
          <div class="col-md-12 grey-content" id="background-content">
            <div class="row">
              <main class="page-content">
<?php include "includes/prevoyance.html" ?>
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
