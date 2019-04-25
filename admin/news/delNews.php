<!DOCTYPE html>
<html lang="fr">
<head>
  <title>ASSUR & MF - admin - supprimer des news</title>
  <meta charset="utf-8">    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <meta name = "format-detection" content = "telephone=no" />
  <meta name="author" content="Cédric Avril">
  <link rel="stylesheet" href="css/bootstrap.css" >
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">    

  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>
  <script src="js/superfish.js"></script>
  <script src="js/jquery.mobilemenu.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.ui.totop.js"></script>
  <script src="js/jquery.touchSwipe.min.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
  <?php
  include "../private/PDOFactory.class.php";
  $db = PDOFactory::getMysqlConnexion();

  foreach ($_POST as $key => $value) {
    $idToDel[] = $key;
  }
  if (isset($idToDel)) {
    $idToDel = '('.implode(',', $idToDel).')';
    var_dump($idToDel);
    $db->exec('DELETE FROM amf_news WHERE id in '. $idToDel);
  }

  
  $res = $db->query("SELECT * FROM amf_news ORDER BY id DESC LIMIT 0, 10");
  $res->execute();
  ?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Supprimer des news</h5>
    <form method="POST" class="border border-light p-5">
        <?php
        while($news = $res->fetch(PDO::FETCH_ASSOC))
          {?>
            <div class="form-group custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="<?= $news['id']; ?>" name="<?= $news['id']; ?>">
              <label class="custom-control-label" for="<?= $news['id']; ?>"><?= $news['title']; ?></label>
            </div>
          <?php   }?>
          <div class="row">
            <div class="form-group">
              <input class="btn btn-danger" id="submit" type="submit" value="Supprimer la sélection" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>