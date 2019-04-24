<div class="container-fluid">
  <div class="panels" id = "prevoyanceButtons">
      <div class="img-circle <?= $GAV ?>"><a href="#GAV" data-toggle="modal"><h2 style="margin-top: -80px;">GARANTIE ACCIDENT <span class="text-nowrap">DE LA VIE</span></h2></a></div>
      <div class="img-circle  <?= $PJ ?>"><a href="#PJ" data-toggle="modal"><h2 style="margin-top: -80px;">CAPITAL<br>PROTECTION JURIDIQUE</h2></a></div><div id="goThere"></div>
	</div>
</div>
<script type="text/javascript">
	if (window.location.href.indexOf('habitation') == -1) $("html, body").animate( { scrollTop: $('#goThere').offset().top }, 1500);
</script>