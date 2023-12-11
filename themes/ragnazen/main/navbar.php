<?php if (!defined('FLUX_ROOT')) exit; ?>

<div class="online-bar">
	<div class="container">
		<div class="row online-row">
			<p>Usuários: <span class="green">522</span> Server <span><i class="fa-solid fa-toggle-on"></i></span></p>
		</div>
	</div>
</div>
<div class="navbar navbar-dark bg-dark navbar-expand-lg" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
				<span class="visually-hidden">Toggle navigation</span>
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="./"><?php echo Flux::config('SiteTitle'); ?></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav ms-auto">
				<?php $menuItems = $this->getMenuItems(); ?>
				<?php if (!empty($menuItems)): ?>
					<?php foreach ($menuItems as $menuCategory => $menus): ?>
						<?php if (!empty($menus)): ?>
							<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo htmlspecialchars(Flux::message($menuCategory)) ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
							<?php foreach ($menus as $menuItem):  ?>
								<li>
									<a class="dropdown-item" href="<?php echo $menuItem['url'] ?>"><?php echo htmlspecialchars(Flux::message($menuItem['name'])) ?></a>
								</li>
							<?php endforeach ?>
							</ul>
							</li>
						<?php endif ?>
					<?php endforeach ?>
				<?php endif ?>

				<?php $adminMenuItems = $this->getAdminMenuItems(); ?>
				<?php if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')): ?>
							<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admin Menu <b class="caret"></b></a>
							<ul class="dropdown-menu">
							<?php foreach ($adminMenuItems as $menuItem): ?>
								<li>
									<a class="dropdown-item" href="<?php echo $this->url($menuItem['module'], $menuItem['action']) ?>"><?php echo htmlspecialchars(Flux::message($menuItem['name'])) ?></a>
								</li>
							<?php endforeach ?>
							</ul>
							</li>
				<?php endif ?>

			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>