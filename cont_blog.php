<?php
include('includes/config.inc.php');
include('includes/funcoes.inc.php');
$titPag = $config['titleBase'];
$homeM = ' active';
include('includes/topo.inc.php');
?>

<div class="" style="background:#fff;">
	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
			<a class="navbar-brand" href="#"><img src="images/logo-noca.png" alt="" /></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse ml-sm-5" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown font-14">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							CATEGORIAS
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Categoria 01</a>
							<a class="dropdown-item" href="#">Categoria 02</a>
							<a class="dropdown-item" href="#">Categoria 03</a>
						</div>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0 position-relative border-1 lupa">
					<input class="form-control mr-sm-2 font-14 badge-pill line-height-100 pt-2 px-4" type="text" placeholder="BUSCA" aria-label="BUSCA">
				</form>
			</div>
		</nav>

	</div>

	<!-- ###################################### -->
	<!-- COM FOTO -->
	<!-- ###################################### -->
	<div class="" style="background:url(images/temp/blog.png) no-repeat center center;background-size:cover;">
		<div class="container blog-com-foto py-5">
			<div class="text-white font-14 font-weight-bold">CRIATIVIDADE</div>
			<div class="text-white font-60 line-height-100 my-4 font-weight-bold">Você acredita, a internet concorda. E a encrenca tá feita.</div>
			<div class="text-white font-16">Inspirada em bicicletas antigas, com visual mais clássico e futurista em muitos aspectos. Conheça a Yamaha Y125 Moegi.</div>
		</div>
	</div>
	<!-- ###################################### -->
	<!-- SEM FOTO -->
	<!-- ###################################### -->
	<div class="">
		<div class="container blog-sem-foto pt-5 pb-0">
			<div class="color-ff7a1a font-14 font-weight-bold">CRIATIVIDADE</div>
			<div class="text-body font-60 line-height-100 my-4 font-weight-bold">Você acredita, a internet concorda. E a encrenca tá feita.</div>
			<div class="text-secondary font-16">Inspirada em bicicletas antigas, com visual mais clássico e futurista em muitos aspectos. Conheça a Yamaha Y125 Moegi.</div>
		</div>
	</div>
	<!-- ###################################### -->
	<!-- ###################################### -->

	<div class="container py-5">
		<p>O Paul McCartney morreu em 1969 e esse que anda por aí é um substituto? Evidente que sim.
			<p>Tem alien morto lá na Área 51? Claro! Dois!</p>
			<p>Você tem certeza que aquela bolinha no seu pescoço é uma doença em estágio terminal? Putz, a internet lamenta, mas é sim, fazer o quê, foi um prazer te conhecer, tchau, até a próxima.</p>
			<p>Seja lá o que for, você sempre vai poder contar com a internet para mostrar ao mundo como você está certo.</p>
			<p>Seja através das ferramentas de pesquisa, como o bom amigo Google, ou mesmo com de pessoas de carne e osso em redes sociais.</p>
			<p>Mas peraí, tem uma turma que cai matando toda vez que comento alguma coisa!</p>
			<p>Tem, claro. Mas não se preocupe, porque com o tempo eles vão desaparecendo. A tendência é o prevalecimento dos que concordam. Ufa… assim sim, mais agradável.</p>
	</div>

	<div class="bg-e7e5df listagem-de-posts-aberto">
		<div class="container">
			<div class="row mt-5 pt-5">
				<div class="col-12 col-sm-4 mb-5">
					<img src="images/temp/post-1.png" alt="" class="w-100 mb-3" />
					<div class="text-uppercase mb-2 color-787469">trends</div>
					<div class="font-weight-bold font-24 line-height-120 mb-3 color-212121">O que está acontecendo em cores no mundo digital?</div>
					<div class=""><a href="blog" class="btn btn-outline-primary font-12 font-weight-bold">LEIA MAIS</a></div>
				</div>
				<div class="col-12 col-sm-4 mb-5">
					<img src="images/temp/post-1.png" alt="" class="w-100 mb-3" />
					<div class="text-uppercase mb-2 color-787469">trends</div>
					<div class="font-weight-bold font-24 line-height-120 mb-3 color-212121">O que está acontecendo em cores no mundo digital?</div>
					<div class=""><a href="blog" class="btn btn-outline-primary font-12 font-weight-bold">LEIA MAIS</a></div>
				</div>
				<div class="col-12 col-sm-4 mb-5">
					<img src="images/temp/post-1.png" alt="" class="w-100 mb-3" />
					<div class="text-uppercase mb-2 color-787469">trends</div>
					<div class="font-weight-bold font-24 line-height-120 mb-3 color-212121">O que está acontecendo em cores no mundo digital?</div>
					<div class=""><a href="blog" class="btn btn-outline-primary font-12 font-weight-bold">LEIA MAIS</a></div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php
include('includes/rodape.inc.php');
?>