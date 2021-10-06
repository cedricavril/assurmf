<?php
$title = "ASSUR & MF - désabonnement";
$style = "indexStyle.css";
$menu["news"] = "active";
include ("includes/head.php");
?>
  <div class="partenaire">
    <div class="grey-bg">
      <div class="container" style="padding-top:40px;">
        <div class="row">
          <div class="col-md-12 grey-content" id="background-content">
            <div class="row">

<?php
  $sql = "UPDATE amf_users SET newsletter=? WHERE email=?";
  $db->prepare($sql)->execute([0, $_GET['mail']]);
?>
            <p>Désabonnement réussi. Vous ne recevrez plus d'actualité de notre part.</p>

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
</html>