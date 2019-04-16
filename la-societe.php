<?php
$title = "ASSUR & MF - La société";
$style = "indexStyle.css";
$menu["laSociete"] = "active";
include ("includes/head.php");
?>
  <div class="partenaire">
    <div class="grey-bg">
    <div class="n module-type-googlemaps diyfeLiveArea " style="/*padding: 15px; */padding-left: 0;"> 
        <div id="map_canvas_4554543" style="width:100%; height:400px;"></div>
        <script src="https://maps.google.com/maps/api/js?v=3&amp;client=gme-11internet&amp;channel=mws-visit&amp;language=fr_FR" type="text/javascript"></script>
    </div>
      <div class="container" style="padding-top:40px;">
        <div class="row">
<?php include "includes/sideMenu.php"; ?>
          <div class="col-md-9 grey-content" id="background-content">
            <div class="row">
              <main class="page-content">
<?php include "includes/forms/contact/index.html" ?>
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
<script type="text/javascript" src="js/googleMap.js"></script>
</body>
