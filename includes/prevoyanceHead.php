<div class="container-fluid">
	<div class="panels" id = "prevoyanceButtons">
		<div class="img-circle <?= $GO ?>"><a href="#GO" data-toggle="modal"><h2 style="margin-top: -70px;">GARANTIE OBSÈQUES</h2></a></div>
		<div class="img-circle  <?= $CD ?>"><a href="#CD" data-toggle="modal"><h2 style="margin-top: -70px;">CAPITAL<br>DÉCÈS</h2></a></div>
		<div class="img-circle  <?= $AD ?>"><a href="#AD" data-toggle="modal"><h2 style="margin-top: -70px;">ASSURANCE DÉPENDANCE</h2></a></div>
		<div class="img-circle  <?= $IH ?>"><a href="#IH" data-toggle="modal"><h2 style="margin-top: -70px;">INDEMNITÉS HOSPITALIÈRES</h2></a></div>
		<div class="img-circle  <?= $PP ?>"><a href="#PP" data-toggle="modal"><h2 style="margin-top: -70px;">PRÉVOYANCE PRO</h2></a><div id="goThere"></div>
		</div>
	</div>
</div>
<script type="text/javascript">
	if (window.location.href.indexOf('prevoyance') == -1) $("html, body").animate( { scrollTop: $('#goThere').offset().top }, 1500);
</script>