<?php if (!defined('FLUX_ROOT'))
	exit; ?>

<div class="row center block-top">
	<div class="col">
		<div class="bloco-index">
			<i class="fas fa-shield-virus"></i>
			<p>Gepard Shield</p>
		</div>
	</div>
	<div class="col">
		<div class="bloco-index">
			<i class="fas fa-khanda blue"></i>
			<p>Hard Mod</p>
		</div>
	</div>
	<div class="col">
		<div class="bloco-index online">
			<p>Online</p>
			<p>352</p>
			<p>Players</p>
		</div>
	</div>
	<div class="col">
		<div class="bloco-index">
			<i class="fas fa-comments-dollar"></i>
			<p>RMT System</p>
		</div>
	</div>
	<div class="col">
		<div class="bloco-index">
			<i class="fas fa-gamepad"></i>
			<p>For Fun</p>
		</div>
	</div>
</div>

<div class="row center espaco">
	<h3>Welcome</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat augue a luctus rhoncus. Sed eget
		felis at magna scelerisque vehicula ac elementum magna. Donec sollicitudin, ipsum et sodales euismod, ligula
		magna congue dolor, sed sodales elit mauris quis eros.</p>
</div>

<div class="row center">
	<div class="col-md-4">
		<img class="md-img" src="<?php echo $this->themePath('img/img03.png'); ?>" alt="Ragnarok Online Kawaii" />
	</div>
	<div class="col-md-4">
		<button type="button" class="btn btn-secondary">
			<p>Register</p>
			<i class="fas fa-user-plus"></i>
			<br>
			<p>Criar uma conta</p>
		</button>
		<button type="button" class="btn btn-secondary">
			<p>Download</p>
			<i class="fas fa-cloud-download-alt"></i>
			<br>
			<p>Baixe o Jogo</p>
		</button>
		<button type="button" class="btn btn-secondary">
			<p>Discord</p>
			<i class="fab fa-discord"></i>
			<br>
			<p>Acesse a Comunidade</p>
		</button>
	</div>
	<div class="col-md-4">
		<iframe src="https://discord.com/widget?id=1180339850109517926&theme=white" width="380" height="253"
			allowtransparency="true" frameborder="0"
			sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
	</div>
</div>

<!-- CMSNews -->
<div class="row center espaco">
	<div class="col-md-4">
		<h3>Novidades</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat augue a luctus rhoncus.</p>
		<button type="button" class="btn btn-info">Ver todas as Novidades</button>
	</div>
	<div class="col-md-8">
		<div class="box-container">
			<div class="box">
				<div class="overlay"></div>
			</div>
			<div class="box">
				<div class="overlay"></div>
			</div>
			<div class="box">
				<div class="overlay"></div>
			</div>
			<div class="box">
				<div class="overlay"></div>
			</div>
			<div class="box">
				<div class="overlay"></div>
			</div>
		</div>
	</div>
</div>

<!-- Instâncias -->

<div class="container-fluid">
	<div class="row espaco center">
		<h3>Instâncias</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat augue a luctus rhoncus.</p>
	</div>
	<div class="container">
		<div class="row">
			<!-- Seleção -->
			<div class="col-md-3">
				<ul class="list-group">
					<li class="list-group-item instanciado btn" data-bs-toggle="collapse" data-bs-target="#instance01" aria-expanded="false" aria-controls="instance01">
						<img class="in-img" src="<?php echo $this->themePath('img/land.png'); ?>" alt="" />
						<a class="btn">Nome da Instância</a>
						<small class="sub">Instância</small>
					</li>
					<li class="list-group-item instanciado btn" data-bs-toggle="collapse" data-bs-target="#instance01" aria-expanded="false" aria-controls="instance01">
						<img class="in-img" src="<?php echo $this->themePath('img/land.png'); ?>" alt="" />
						<a class="btn">Nome da Instância 02</a>
						<small class="sub">Instância</small>
					</li>
					<li class="list-group-item instanciado btn" data-bs-toggle="collapse" data-bs-target="#instance01" aria-expanded="false" aria-controls="instance01">
						<img class="in-img" src="<?php echo $this->themePath('img/land.png'); ?>" alt="" />
						<a class="btn">Nome da Instância 03</a>
						<small class="sub">Instância</small>
					</li>
					<li class="list-group-item instanciado btn" data-bs-toggle="collapse" data-bs-target="#instance01" aria-expanded="false" aria-controls="instance01">
						<img class="in-img" src="<?php echo $this->themePath('img/land.png'); ?>" alt="" />
						<a class="btn">Nome da Instância 04</a>
						<small class="sub">Instância</small>
					</li>
					<li class="list-group-item more-inst btn">
						<a href="https://www.google.com.br" target="_blank" class="btn">Mais <i class="fab fa-wikipedia-w"></i></a>
					</li>
				</ul>
			</div>
			<!-- Mostruario -->
			<div class="col-md-8">
				<div class="row">
				
				
					<div class="col-md-4 collapse" id="instance01">
					<div class="box-instance">
						<div class="img-overlay">
						<img class="box-img" src="<?php echo $this->themePath('img/god.png'); ?>" alt="" />
						</div>
						<p>Descrição aquo</p>
						<small>Instância: <span style="color: green;">Disponível</span></small>
						<hr>
						<p>Descrição aquodes maior aqui tatatat lslslsl</p>
					</div>
					</div>

					<div class="col-md-4 g-col-md-4 collapse" id="instance01">
					<div class="box-instance">
						<div class="img-overlay">
						<img class="box-img" src="<?php echo $this->themePath('img/god.png'); ?>" alt="" />
						</div>
						<p>Descrição aquo</p>
						<small>Instância: <span style="color: green;">Disponível</span></small>
						<hr>
						<p>Descrição aquodes maior aqui tatatat lslslsl</p>
					</div>
					</div>

					<div class="col-md-4 g-col-md-4 collapse" id="instance01">
					<div class="box-instance">
						<div class="img-overlay">
						<img class="box-img" src="<?php echo $this->themePath('img/god.png'); ?>" alt="" />
						</div>
						<p>Descrição aquo</p>
						<small>Instância: <span style="color: red;">Indisponível</span></small>
						<hr>
						<p>Descrição aquodes maior aqui tatatat lslslsl</p>
					</div>
					</div>

				
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Estatisticas do servidor -->
		</div>
<div class="container contei-info">
	<div class="row center estati">
		<div class="col">
			<div class="box-info">
			<small><i class="fas fa-circle"></i>Total Personagens</small>
			<p class="count-info">1,256</p>
			</div>
		</div>
		<div class="col">
			<div class="box-info">
			<small><i class="fas fa-circle"></i>Total Contas</small>
			<p class="count-info">593</p>
			</div>
		</div>
		<div class="col">
			<div class="box-info">
			<small><i class="fas fa-circle"></i>Total Clãs</small>
			<p class="count-info">102</p>
			</div>
		</div>
		<div class="col">
			<div class="box-info">
			<small><i class="fas fa-circle"></i>Pico Online</small>
			<p class="count-info">982</p>
			</div>
		</div>
	</div>
</div>
<!-- Separador -->
<svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 280" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(94, 215, 253, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,252L80,210C160,168,320,84,480,65.3C640,47,800,93,960,135.3C1120,177,1280,215,1440,219.3C1600,224,1760,196,1920,186.7C2080,177,2240,187,2400,163.3C2560,140,2720,84,2880,79.3C3040,75,3200,121,3360,116.7C3520,112,3680,56,3840,60.7C4000,65,4160,131,4320,154C4480,177,4640,159,4800,144.7C4960,131,5120,121,5280,102.7C5440,84,5600,56,5760,74.7C5920,93,6080,159,6240,186.7C6400,215,6560,205,6720,182C6880,159,7040,121,7200,126C7360,131,7520,177,7680,205.3C7840,233,8000,243,8160,228.7C8320,215,8480,177,8640,144.7C8800,112,8960,84,9120,93.3C9280,103,9440,149,9600,144.7C9760,140,9920,84,10080,56C10240,28,10400,28,10560,42C10720,56,10880,84,11040,79.3C11200,75,11360,37,11440,18.7L11520,0L11520,280L11440,280C11360,280,11200,280,11040,280C10880,280,10720,280,10560,280C10400,280,10240,280,10080,280C9920,280,9760,280,9600,280C9440,280,9280,280,9120,280C8960,280,8800,280,8640,280C8480,280,8320,280,8160,280C8000,280,7840,280,7680,280C7520,280,7360,280,7200,280C7040,280,6880,280,6720,280C6560,280,6400,280,6240,280C6080,280,5920,280,5760,280C5600,280,5440,280,5280,280C5120,280,4960,280,4800,280C4640,280,4480,280,4320,280C4160,280,4000,280,3840,280C3680,280,3520,280,3360,280C3200,280,3040,280,2880,280C2720,280,2560,280,2400,280C2240,280,2080,280,1920,280C1760,280,1600,280,1440,280C1280,280,1120,280,960,280C800,280,640,280,480,280C320,280,160,280,80,280L0,280Z"></path></svg>
<!-- Informações da WOE -->
<div class="container-fluid opaca pxEspac">
<div class="container woe">
	<div class="row">
		<div class="col-md-4">
			<h3>Guerra do Emperium</h3>
			<p>Junte seu clã e venha competir com os melhores</p>
			<ul>
				<li>Domingo</li>
				<li>Terça</li>
				<li>Sexta</li>
			</ul>
		</div>
		<div class="col-md-4">

		</div>
		<div class="col-md-4">

		</div>
	</div>
</div>
</div>
<!-- Separador -->
<svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><defs><linearGradient id="gradient" x1="10%" y1="20%" x2="90%" y2="80%"><stop offset="5%" stop-color="#47c9fd"></stop><stop offset="95%" stop-color="#77e8fe"></stop></linearGradient></defs><path d="M 0,400 C 0,400 0,100 0,100 C 107.75,84.89285714285714 215.5,69.78571428571428 344,63 C 472.5,56.214285714285715 621.7499999999999,57.75 734,73 C 846.2500000000001,88.25 921.5,117.21428571428572 1033,124 C 1144.5,130.78571428571428 1292.25,115.39285714285714 1440,100 C 1440,100 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.4" class="transition-all duration-300 ease-in-out delay-150 path-0"></path><defs><linearGradient id="gradient" x1="10%" y1="20%" x2="90%" y2="80%"><stop offset="5%" stop-color="#47c9fd"></stop><stop offset="95%" stop-color="#77e8fe"></stop></linearGradient></defs><path d="M 0,400 C 0,400 0,200 0,200 C 119.07142857142858,216.46428571428572 238.14285714285717,232.92857142857142 362,236 C 485.85714285714283,239.07142857142858 614.5,228.75000000000003 724,224 C 833.5,219.24999999999997 923.8571428571429,220.07142857142856 1040,217 C 1156.142857142857,213.92857142857144 1298.0714285714284,206.96428571428572 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-1"></path><defs><linearGradient id="gradient" x1="10%" y1="20%" x2="90%" y2="80%"><stop offset="5%" stop-color="#47c9fd"></stop><stop offset="95%" stop-color="#77e8fe"></stop></linearGradient></defs><path d="M 0,400 C 0,400 0,300 0,300 C 103.21428571428572,319.6071428571429 206.42857142857144,339.2142857142857 318,337 C 429.57142857142856,334.7857142857143 549.5000000000001,310.75000000000006 683,292 C 816.4999999999999,273.24999999999994 963.5714285714284,259.7857142857143 1092,262 C 1220.4285714285716,264.2142857142857 1330.2142857142858,282.1071428571429 1440,300 C 1440,300 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-2"></path></svg>
<!-- Continuação do Container do Header -->
<div class="container">