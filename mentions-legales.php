<?php
$including = true;
$title = "ASSURMF - Mentions légales";
$style = "indexStyle.css";
$style2 = "mentions-legalesStyle.css";
include "includes/head.php";
?>
  <div class="partenaire">
    <div class="grey-bg">
      <div class="container" style="padding-top:40px;">
        <div class="row">
<?php // include "includes/sideMenu.php"; ?>
          <div class="col-md-12 grey-content" id="background-content">
            <div class="row">
              <main class="page-content">
<?php include "includes/mentions-legales.html" ?>
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

<?php include "includes/footer.php"; ?>
  </body>




  <!-- Hotjar Tracking Code for https://www.simulassur.fr -->
  <script>
    (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:1078843,hjsv:6};
      a=o.getElementsByTagName('head')[0];
      r=ocreateElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
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
  </script>

  </html>