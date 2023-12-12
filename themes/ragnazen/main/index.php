<?php if (!defined('FLUX_ROOT'))
	exit; ?>

<div class="row">
	<div class="col bloco-index">
		<i class="fas fa-shield-virus"></i>
		<p>Gepard Shield</p>
	</div>
	<div class="col bloco-index">
		<i class="fas fa-khanda"></i>
		<p>Hard Mod</p>
	</div>
	<div class="col bloco-index">
		<p>Online</p>
		<p>352</p>
		<p>Players</p>
	</div>
	<div class="col bloco-index">
		<i class="fas fa-comments-dollar"></i>
		<p>RMT System</p>
	</div>
	<div class="col bloco-index">
		<i class="fas fa-gamepad"></i>
		<p>For Fun</p>
	</div>
</div>
<!--
/*<?php if (Flux::config('CMSNewsOnHomepage')): ?>
/*	<h2><?php echo htmlspecialchars(sprintf(Flux::message('MainPageWelcome'), Flux::config('SiteTitle'))) ?></h2>
/*
/*	<?php if ($newstype == '1'): ?>
/*		<?php if ($news): ?>
/*			<div class="newsDiv">
/*			<?php foreach ($news as $nrow): ?>
/*				<h4><?php echo $nrow->title ?></h4>
/*				<div class="newsCont">
/*					<span class="newsDate"><small>by <?php echo $nrow->author ?> on <?php echo date(Flux::config('DateFormat'), strtotime($nrow->created)) ?></small></span>
/*					<p><?php echo $nrow->body ?></p>
/*					<?php if ($nrow->created != $nrow->modified && Flux::config('CMSDisplayModifiedBy')): ?>
/*						<small><?php echo htmlspecialchars(Flux::message('CMSModifiedLabel')) ?> : <?php echo date(Flux::config('DateFormat'), strtotime($nrow->modified)) ?></small>
/*					<?php endif; ?>
/*					<?php if ($nrow->link): ?>
/*						<a class="news_link" href="<?php echo $nrow->link ?>"><small><?php echo htmlspecialchars(Flux::message('CMSNewsLink')) ?></small></a>
/*						<div class="clear"></div>
/*					<?php endif; ?>
/*				</div>
/*			<?php endforeach; ?> 
/*			</div>
/*		<?php else: ?>
/*			<p><?php echo htmlspecialchars(Flux::message('CMSNewsEmpty')) ?></p>
/*		<?php endif ?>
/*
/*	<?php elseif ($newstype == '2'): ?>
/*		<?php if (isset($xml) && isset($xml->channel)): ?>
/*		<div class="newsDiv">
/*			<?php foreach ($xml->channel->item as $rssItem): ?>
/*				<?php $i++;
								if ($i <= $newslimit): ?>
/*					<h2><?php echo $rssItem->title ?></h2>
/*					<div class="newsCont">
/*						<span class="newsDate"><small>Posted on <?php echo date(Flux::config('DateFormat'), strtotime($rssItem->pubDate)) ?></small></span>
/*						<p><?php echo $rssItem->description ?></p>
/*						<a class="news_link" href="<?php echo $rssItem->link ?>"><small><?php echo htmlspecialchars(Flux::message('CMSNewsLink')) ?></small></a>
/*						<div class="clear"></div>
/*					</div>
/*				<?php endif ?>
/*			<?php endforeach; ?> 
/*		</div>
/*		<?php else: ?>
/*			<p>
/*				<?php echo htmlspecialchars(Flux::message('CMSNewsRSSNotFound')) ?><br/><br/>
/*			</p>
/*		<?php endif ?>
/*	<?php endif ?>
/*
/*
/*
/*
/*<?php else: ?>
/*	<h2><?php echo htmlspecialchars(Flux::message('MainPageHeading')) ?></h2>
/*	<p><strong><?php echo htmlspecialchars(Flux::message('MainPageInfo')) ?></strong></p>
/*	<p><?php echo htmlspecialchars(Flux::message('MainPageInfo2')) ?></p>
/*	<ol>
/*		<li><p class="green"><?php echo htmlspecialchars(sprintf(Flux::message('MainPageStep1'), __FILE__)) ?></p></li>
/*		<li><p class="green"><?php echo htmlspecialchars(Flux::message('MainPageStep2')) ?></p></li>
/*	</ol>
/*	<p style="text-align: right"><strong><em><?php echo htmlspecialchars(Flux::message('MainPageThanks')) ?></em></strong></p>
/*<?php endif ?>
-->