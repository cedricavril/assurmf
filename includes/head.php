<?php session_start(); 
include "visitCounter.php";
?>
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title><?= $title ?></title>

    <link rel="icon" href="images/logo.ico" />

    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="ASSURMF à LORMONT est votre courtier en assurance, avec une vaste offre d'assurances de personnes, de biens et à destination des entreprises.">
    <meta name="author" content="Cédric Avril">

    <link rel="stylesheet" href="css/normalize.css">

    <!-- Latest compiled and minified CSS -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

    <!-- Optional theme -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->

    <!-- carousel -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <script>
      function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
      }
    </script>
    <script type="text/javascript" src="js/jquery/wow.js"></script>
    <script type="text/javascript" src="js/jquery/wow.min.js"></script>

    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.ui.js"></script>
    <script src="js/jquery/jquery.mask.min.js"></script>
    <script src="js/script.extranet.js"></script>
    <script src="includes/banniere-cookie/cookie-consent.js"></script>
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">-->

    <!--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">-->

    <link rel="stylesheet" href="css/switchery.min.css"> <!-- Google analytics -->
    <link rel="stylesheet" href="css/jquery.ui.css">
    <link rel="stylesheet" href="css/extranet.css">
    <link rel="stylesheet" href="includes/banniere-cookie/cookie-consent.css">
    <link rel="stylesheet" href="css/<?= $style ?>">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <?php if(isset($style2)) { ?> <link rel="stylesheet" href="css/<?= $style2 ?>"> <?php } ?>

<style type="text/css">
    /* had to write this style here because of a jquery 3.3.1 CDN conflict */
hr{
  border:0;
  height:20px;
  margin-bottom: -20px;
  background:url(images/components/hr.svg);
  background-size: contain;
  background-position: center;
  background-repeat: no-repeat;
}

hr.bottom{
  margin-top: -20px;
  padding-bottom: 20px;
}
</style>
<style type="text/css">
/* layout.css Style */
.upload-drop-zone {
  height: 200px;
  border-width: 2px;
  margin-bottom: 20px;
}

/* skin.css Style*/
.upload-drop-zone {
  color: #ccc;
  border-style: dashed;
  border-color: #ccc;
  line-height: 200px;
  text-align: center
}
.upload-drop-zone.drop {
  color: #222;
  border-color: #222;
}
</style>


</head>
<body xmlns="http://www.w3.org/1999/html">
<!--    <div class="bg"><img src="images/BG.jpg"></div>-->
    <nav class="navbar" style="">
        <div class="container" id="navcontainer">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="padding: 0;"><img style="height: 100px;" src="<?= $urlHeadPrefix ?>images/banner.svg"></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul id="mainMenu" class="nav navbar-nav  navbar-right">
                    <li class="<?php echo $menu['index'];?>">
                        <a href="index.php">
                            <div class="rotation">
                                <i class="glyphicon glyphicon-home rotationBack"></i>Accueil
                            </div>
                        </a>
                    </li>
                    <li class="<?php echo $menu['auto'];?>">
                        <a href="auto.php">
                            <div class="rotation">
                                <i class="fa fa-car rotationBack"></i>Auto temporaire
                            </div>
                        </a>
                    </li>
                    <li class="<?php echo $menu['moto'];?>">
                        <a href="moto.php">
                            <div class="rotation">
                                <i class="fa fa-motorcycle rotationBack"></i>Moto temporaire
                            </div>
                        </a>
                    </li>
                    <li class="<?php echo $menu['habitation'];?>">
                        <a href="habitation.php">
                            <div class="rotation">
                                <i class="fa fa-home rotationBack"></i>Habitation
                            </div>
                        </a>
                    </li>
                    <li class="<?php echo $menu['sante'];?>">
                        <a href="sante.php">
                            <div class="rotation">
                                <i class="fa fa-medkit rotationBack"></i>Santé
                            </div>
                        </a>
                    </li>
                    <li class="<?php echo $menu['prevoyance'];?>">
                        <a href="prevoyance.php">
                            <div class="rotation">
                                <i class="fa fa-exclamation-triangle rotationBack"></i>Prevoyance
                            </div>
                        </a>
                    </li>
                    <li class="<?php echo $menu['epargne'];?>">
                        <a href="epargne.php">
                            <div class="rotation">
                                <i class="fa fa-money rotationBack"></i>Épargne
                            </div>
                        </a>
                    </li>
                    <li class="<?php echo $menu['retraite'];?>">
                        <a href="retraite.php">
                            <div class="rotation">
                                <i class="fa fa-blind rotationBack"></i>Retraite
                            </div>
                        </a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>