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
			<div class="col-md-3">
				<p class="d-inline-flex gap-1">
					<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
						aria-expanded="false" aria-controls="collapseExample">
						Link with href
					</a>
					<button class="btn btn-primary" type="button" data-bs-toggle="collapse"
						data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						Button with data-bs-target
					</button>
				</p>
			</div>
			<div class="col-md-8">
				<div class="collapse" id="collapseExample">
					<div class="card card-body">
						Some placeholder content for the collapse component. This panel is hidden by default but
						revealed when the user activates the relevant trigger.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>