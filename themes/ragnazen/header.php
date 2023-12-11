<?php if (!defined('FLUX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="RagnaZen Low Rate">
		<meta name="author" content="Lumen">

		<?php if (isset($metaRefresh)): ?>
		<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
		<?php endif ?>
		<title><?php echo Flux::config('SiteTitle'); if (isset($title)) echo ": $title" ?></title>
        <link rel="icon" type="image/x-icon" href="./favicon.ico" />
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux/unitip.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<?php if (Flux::config('EnableReCaptcha')): ?>
			<script src='https://www.google.com/recaptcha/api.js'></script>
		<?php endif ?>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo $this->themePath('css/sticky-footer-navbar.css') ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>

    <!-- Fixed navbar -->
	<?php include $this->themePath('main/navbar.php', true) ?>

    <div class="container">
		<?php //include 'main/sidebar.php' ?>
		<?php include 'main/loginbox.php' ?>
		<?php if (Flux::config('DebugMode') && @gethostbyname(Flux::config('ServerAddress')) == '127.0.0.1'): ?>
			<p class="notice">Please change your <strong>ServerAddress</strong> directive in your application config to your server's real address (e.g., myserver.com).</p>
		<?php endif ?>

		<!-- Messages -->
		<?php if ($message=$session->getMessage()): ?>
			<p class="message"><?php echo htmlspecialchars($message) ?></p>
		<?php endif ?>

		<!-- Sub menu -->
		<?php include $this->themePath('main/submenu.php', true) ?>

		<!-- Page menu -->
		<?php include $this->themePath('main/pagemenu.php', true) ?>

		<!-- Credit balance -->
		<?php //if (in_array($params->get('module'), array('donate', 'purchase'))) include 'main/balance.php' ?>
