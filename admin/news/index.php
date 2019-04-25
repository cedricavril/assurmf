<!DOCTYPE html>
<html lang="fr">

<head>
    <title>ASSUR & MF - admin - générateur de news</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="author" content="Cédric Avril">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">


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
    <script>tinymce.init({ 
        selector:'textarea',
        setup:function(ed) {
            ed.on('change', function(e) {
                title = ed.getContent();
                $("#title").val($.parseHTML(title.split('<h1>')[1].split('</h1>')[0])[0].data);
           });
        }
    });
</script>
  
    
    
    <!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
    <link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">
    <script src="assets/assets/js/html5shiv.js"></script> 
    <script src="assets/assets/js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div id="content">
    <a href="delNews.php" target="_blank"><button type="button" class="btn btn-danger">Supprimer des news</button></a>    
    <a href="../../news.php" target="_blank"><button type="button" class="btn btn-success">Voir les news</button></a>
    <div class="container">
        <div class="row_1">
            Copier coller une news si nécessaire - le titre généré peut être modifié manuellement.
        </div>
        <div class="row">
            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" name="title" id="title" style="width: 1000px;" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group" style="width: 100%;">
                <label for="message">Message :</label>
                <textarea style="height: 1000px;" name="message" id="message"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <input class="btn btn-default" id="submit" type="submit" value="Envoyer" />
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<script>
$(function(){
    $("#submit").click(function() {

alert($(tinyMCE.activeEditor.getContainer()).height());

        var message = tinyMCE.activeEditor.getContent(),
            title = $('input#title').val();

        // Get the HTML contents of the currently active editor
        console.debug(tinyMCE.activeEditor.getContent());

        $.ajax({
            url : 'newsManager.php',
            type : 'POST',
            data : {news: message, title: title},
            success : function(code_html, statut){
                alert('news bien enregistrée.');
                window.open('creationFluxRss.php','Mise à jour du flux rss','menubar=no, scrollbars=no, top=100, left=100, width=300, height=200');
            },
            error : function(resultat, statut, erreur){
                alert('error'+erreur+" "+resultat+" "+statut);
            }
        });
    });
});
</script>

</body>
</html>