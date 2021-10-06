<?php
$title = "ASSUR & MF";
$style = "indexStyle.css";
$menu["index"] = "active";
include ("includes/head.php");
?>
<div class="blueContainer gradientTheme">
    <?php if (!isset($_GET['uuid'])) { ?>
        <div class="container home">
            <div id="home-space" class="row">
                <div id="home-top-space" class="col-lg-5 col-md-10 col-lg-push-7">
                    <h3 class="mb-0">1<sup>er</sup> Comparateur Indépendant</h3>
                    <h1>en assurances</h1>
                    <div id="home-chiffres-space">
                        <div id="dixhuit_contrats" class="chiffre-cle mt-30">
                            <?php if (!($_SERVER['REMOTE_ADDR'] == '127.0.0.1') && !($_SERVER['REMOTE_ADDR'] == "::1")) {?>
                                <iframe src="https://assurmf.oggo-data.net/iform/health" width="100%" height="450px" frameborder="0"></iframe> <?php } ?>
                                <ul>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group chiffre-cle mt-30">
                        </div>
                    </div>
                    <div class="form-group chiffre-cle mt-30">
                        <div id="home-bottom-space" class="col-lg-7 hidden-xs col-lg-pull-5 text-center">
                            <img src="images/logo.svg" />
<!--        <a href="la-societe.php">
            <button class="btn btn-lg col-lg-offset-0 col-lg-9 col-xs-offset-2" style="white-space: nowrap; width: 100%">Cliquez ici</button>
        </a>-->
    </div>
</div>
<div class="sliderContainer">
    <h2 class="text-center" style="padding-bottom: 10px; color: #eb008b; padding: 0;">Comparez les leaders du marché</h2>
    <div class="marquee">


        <?php 

        $dirName = "images/partenaires/";
// arbitrarily create a -big image if doesn't exist in the server
        $d = dir($dirName);
        $images = Array();
        while (false !== ($entry = $d->read())) {
            if (!strpos($entry, '-big') && $entry != "." && $entry != "..") {
                $images[] = $entry;
                $big_image = explode('.', $entry);

                $big_suffix = '-big.'.$big_image[count($big_image) - 1];
                array_pop($big_image);
                $big_image = implode('.', $big_image).$big_suffix;
                if (!file_exists($dirName.$big_image)) {
                    copy($dirName.$entry, $dirName.$big_image);
                    chmod($dirName.$big_image, 0777);
                }

                $fileNamePiecesTogether = preg_replace('/(\.).*/', '', $entry);
            }
        }
$d->close(); // si ça marche et que c'est ok virer les scripts "wow"
for ($i = 0; $i < count($images); $i++) {
    ?>
    <div class="img1"><a><img class="img-responsive wow fadeIn animated zoomImage imgPartnerSlider" data-wow-duration="1000ms" data-wow-delay="100ms" src="images/partenaires/<?php echo $images[$i]; ?>"></a></div>

<?php } ?>
</div>
</div></div>
</div>
<?php } ?>
</div>

<div class="container-fluid">

    <?php if (!isset($_GET['uuid'])) { ?>
        <div class="panels">
            <div class="img-circle" data-bg = "images/hand-holding-usd.svg" id="boutonPrets"><h2>ASSURANCE DE PRÊT</h2></div>
            <div class="img-circle" data-bg = "images/car.svg" id="boutonAuto1"><h2>ASSURANCE AUTO</h2></div>
            <div class="img-circle" data-bg = "images/motorcycle.svg" id="bouton2roues1"><h2>ASSURANCE 2 ROUES</h2></div>
            <div class="img-circle" data-bg = "images/home.svg" id="boutonMRH"><h2>ASSURANCE HABITATION</h2></div>
            <div class="img-circle" data-bg = "images/paw.svg" id="boutonChienChat"><h2>ASSURANCE ANIMAUX</h2></div>
            <div class="img-circle" data-bg = "images/home.svg" id="boutonLI"><h2>ASSURANCE&nbsp;DES LOYERS&nbsp;IMPAYÉS</h2></div>
        </div>

        <div class="container mt-30" style="padding: 0;">
            <div class="col-md-3 text-center" style="padding: 0">
                <a href="moto.php"><div class="img-circle" style="background-color: #43bdd5; width: 190px; height: 190px; margin-top: 50px;"><h2 style="color: #eb008b; margin-top: inherit;">ASSURANCE TEMPORAIRE 2 ROUES</h2></div></a>
            </div>
            <div class="col-md-6 text-center">
                <div class="img-circle" style="background-color: transparent; width: auto; height: 190px; margin: 0; padding: 0; margin-top: 33px; cursor: default;">
                    <h2 style="color: #eb008b; margin-top: inherit;">Assurez-vous immédiatement</h2>
                    <p style="color: rgb(51,51,51); font-weight: bold; text-align: left;">Assur & MF propose une assurance temporaire auto de 1 à 90 jours.
                        Vous pouvez souscrire 7j/7 et obtenir votre attestation d'assurance provisoire en ligne.
                    Assur & MF est aussi le spécialiste de l'assurance frontière et import export ( targa di cartone ) pour une auto, un poids-lourd, une remorque ou un camping-car.</p>
                </div>
            </div>
            <div class="col-md-3 text-center" style="padding: 0">
                <a href="auto.php"><div class="img-circle" style="background-color: #43bdd5; width: 190px; height: 190px; margin-top: 50px;"><h2 style="color: #eb008b; margin-top: inherit;">ASSURANCE TEMPORAIRE AUTO</h2></div></a>
            </div>
        </div>


        <div class="row" id="responsiveFontSize" style="background-color: #43bdd5">
            <div class="col-md-4">
                <div class="well">
                    <h2 class="text-danger text-center"><span class="label label-danger" style="line-height: 0;">malussés</span>&nbsp;</h2>
                    <h2 class="text-danger text-center"><span class="label label-danger" style="line-height: 0;">sinistrés</span>&nbsp;</h2>
                    <h2 class="text-danger text-center"><span class="label label-danger" style="line-height: 0;">non paiements</span>&nbsp;</h2>
                    <h2 class="text-danger text-center"><span class="label label-danger" style="line-height: 0;">permis étrangers</span>&nbsp;</h2>
                </div>
            </div>
            <div class="col-md-4 mobileResponsive-pt20">
                <div class="well">
                    <h2 class="text-danger text-center secondColumn h1 mobileResponsive-lh0 mobileResponsive-mb0" style="height: 0; margin-top: 30px;"><span class="h1" style="line-height: 0; font-weight: bolder; margin: 0; color: white;">on a la solution</span></h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well" style="text-align: center;">
                    <a href="#addEmployeeModal" class="btn" data-toggle="modal"><button><h2 class="text-danger text-center mobileResponsive-lh0" style="margin: 0; color: #eb008b;"><strong>Demander <span style="white-space: nowrap">un devis</span></strong></h2></button></a>
                </div>
            </div>
        </div><!--/row-->
        <!--</div>-->

        <?php 
    } else {
        ?>
        <iframe src="https://assurmf.oggo-data.net/icomparator/health" width="100%" height="15000px" frameborder="0"></iframe>
        <?php
    }
    $res = $db->query("SELECT * FROM amf_news ORDER BY id DESC LIMIT 0, 3");
    $res->execute();

    while($news = $res->fetch(PDO::FETCH_ASSOC))
        {?>

    <div class="thumbnail col-sm-6 col-md-4 mt-50" style="min-height: 300px;">
<!--     <img src="images/photo01.jpg" alt="Nature">
   <div class="caption">-->
        <h3 style="color: #eb008b"><?= $news['title']; ?></h3>
        <p><?php 
$string = $news['news'];
$pattern = '/<.+>/U';
$replacement = '';
$string = preg_replace($pattern, $replacement, $string);
$string = substr_replace($string, '...', 150, strlen($string));
echo $string;
?></p>
        <p><a href="news.php?id=<?= $news['id']; ?>" class="btn btn-xs btn-primary" role="button" title="En savoir +">En savoir +</a></p>
    </div>
<?php  } ?>


</div>

<!--<div class="row text-center" style="margin: 0">-->
    <?php // include ("includes/forms/register/register.html"); ?>



<!--    <div class="blueContainer bg-city hidden-xs" style="padding-bottom: 50px;">
</div>-->
<!--    <div class="partenaire">
        <div class="gradientTheme">
            <div class="container" style="padding-top:40px;">
                <div class="row" style="margin: 0;">
                    <?php // include "includes/sideMenu.php"; ?>
                    <div class="col-md-12 grey-content" id="background-content">
                        <div class="row" id="info">
                            <?php // include "includes/home.html"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <?php
    include "includes/modal-view-error.php";
    include "includes/footer.php";
    ?>





    <!-- handling devis -->




    <script type="text/javascript">
        $(document).ready(function(){

    // (Center the modal and) focus on #highlight
    $("[id$='EmployeeModal']").on('shown.bs.modal', function(e) {
/*        var windowHeight = $(window).height();
        var boxHeight = $(e.target.childNodes[1]).height();
        $('.modal-dialog').animate({top: (windowHeight - boxHeight)/2});*/
        $('#highLight').focus();
    });

    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();
    
});
</script>


<!-- devis modal -->
<!--<div id="addEmployeeModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Demande de devis</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body" style="padding: 0;">
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Prénom</label>
                        <input type="text" class="form-control" data-user="prenom" required>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Nom</label>
                        <input type="text" class="form-control" data-user="nom" required>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>E-mail</label>
                        <input type="email" class="form-control" data-user="email" required>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Téléphone</label>
                        <input type="tel" class="form-control" data-user="tel" required>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Adresse</label>
                        <textarea class="form-control" data-user="adresse" required></textarea>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Date de naissance</label>
                        <input type="date" class="form-control" data-user="birthDate" required>
                    </div>
                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                        <label>Date d'obtention du permis</label>
                        <input type="date" class="form-control" data-user="licenceDate" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                    <input type="submit" class="btn btn-success" value="ajouter">
                </div>
            </form>
        </div>
    </div>
</div>-->




<div id="addEmployeeModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <?php include("addEmployee.php"); ?>

        </div>
    </div>
</div>

<div id="addFilesModal" class="modal fade" tabindex="-1" role="dialog" style="overflow: auto;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <?php include("addFiles.php"); ?>

        </div>
    </div>
</div>


<!--<script src="admin/js/jquery/main.js"></script>-->

    <!-- Global site tag (gtag.js) - Google Analytics 
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125888227-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-125888227-1');
        
        
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            var switchery = new Switchery(html, { size: 'small' });
        });
    </script>-->

    <script type="text/javascript">
        var user = Object();
        $( document ).ready(function() {
            $('.img-circle').each( function(index) {
                $(this).css('background-image', "url(" + $(this).attr('data-bg') + ")");
            });

            $("#boutonPrets").click( function(){
                window.open("https://www.simulassur.fr/iframer/9689/2", '_blank');
            });
            $("#boutonAuto1").click( function(){
//                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=2", '_blank');
                window.open("https://auto.sollyazarpro.com/produit/autos/?i=9c72a17d4e30f7090154c4e24cbcaebf70bf7244", '_blank');
            });
            $("#boutonAuto2").click( function(){
                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=62", '_blank');
            });
            $("#boutonAuto3").click( function(){
                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=42", '_blank');
            });
            $("#bouton2roues1").click( function(){
//                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=22", '_blank');
                window.open("http://moto.sollyazarpro.com/produit/motos/?i=9c72a17d4e30f7090154c4e24cbcaebf70bf7244", '_blank');
            });
            $("#bouton2roues2").click( function(){
                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=32", '_blank');
            });
            $("#boutonMRH").click( function(){
                window.open("https://gli2i.sollyazarpro.com/produit/gli2i/formulaire", '_blank');
            });
            $("#boutonChienChat").click( function(){
                window.open("https://quadrupaide.sollyazarpro.com/produit/quadrupaide/?i=9c72a17d4e30f7090154c4e24cbcaebf70bf7244", '_blank');
            });
            $("#boutonSante").click( function(){
                window.open("http://www.gestion-assurances.com/site_partenaire.aspx?code=OPE16861&dst=72", '_blank');
            });
            $("#boutonLI").click( function(){
                window.open("http://gli2i.sollyazarpro.com/produit/gli2i/?i=9c72a17d4e30f7090154c4e24cbcaebf70bf7244", '_blank');
            });

// scroll animation for anchors except # alone
$('a[href^="#"]').click(function(){
    var the_id = $(this).attr("href");
    if (the_id === '#') {
        return;
    }
    $('html, body').animate({
        scrollTop:$(the_id).offset().top
    }, 'slow');

    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();
    
    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function(){
        if(this.checked){
            checkbox.each(function(){
                this.checked = true;                        
            });
        } else{
            checkbox.each(function(){
                this.checked = false;                        
            });
        } 
    });
    checkbox.click(function(){
        if(!this.checked){
            $("#selectAll").prop("checked", false);
        }
    });
});


return false;
});
</script>
</body>
</html>