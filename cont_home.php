<?php
	include('includes/config.inc.php');
	include('includes/funcoes.inc.php');
	$titPag = $config['titleBase'];
	$homeM = ' active';
	include('includes/topo.inc.php');
?>

	<div id="carouselExampleControls" class="carousel slide noca-w-100 noca-h-100 d-block" data-ride="carousel">
		<div class="carousel-inner noca-w-100 noca-h-100">
			<div class="carousel-item noca-w-100 noca-h-100 active" style="background:url(images/temp/destaque.png) no-repeat center center;background-size:cover;">
				1111
			</div>
			<div class="carousel-item noca-w-100 noca-h-100" style="background:url(images/temp/destaque.png) no-repeat center center;background-size:cover;">
				2222
			</div>
			<div class="carousel-item noca-w-100 noca-h-100" style="background:url(images/temp/destaque.png) no-repeat center center;background-size:cover;">
				3333
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="" style="background:#CACACA;">
		<div class="container">
			asdfa
		</div>
	</div>
<?php
	include('includes/rodape.inc.php');	
?>