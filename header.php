<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php $plxShow->template(); ?>/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php $plxShow->template(); ?>/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php $plxShow->template(); ?>/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php $plxShow->template(); ?>/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php $plxShow->template(); ?>/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php $plxShow->template(); ?>/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php $plxShow->template(); ?>/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php $plxShow->template(); ?>/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php $plxShow->template(); ?>/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php $plxShow->template(); ?>/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php $plxShow->template(); ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php $plxShow->template(); ?>/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php $plxShow->template(); ?>/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php $plxShow->template(); ?>/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php $plxShow->template(); ?>/img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/plucss.css" media="screen"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css" media="screen"/>
	<?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>

<body id="top" class="page mode-<?php $plxShow->mode(true) ?>">

	<nav class="nav">
			<div class="container">
				<div class="grid">
					<div class="col sml-6 med-2">
						picto-logo
					</div>
					<div class="col med-10">
						<div class="responsive-menu">
							<label for="menu"></label>
							<input id="menu" type="checkbox">
							<ul class="menu">
								<!--?php $plxShow--->staticList($plxShow-&gt;getLang('HOME'),'<li class="#static_class #static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?&gt;
								<li><a href="https://wiki.pluxml.ovh" title="Wiki PluXml">Documentation</a></li>
								<li><a href="https://ressources.pluxml.ovh" title="Ressources">Ressources</a></li>
								<li><a href="https://forum.pluxml.ovh" title="Forum">Forum</a></li>
								<!--?php $plxShow--->pageBlog('<li class="#page_class #page_status" id="#page_id"><a href="#page_url" title="#page_name">#page_name</a></li>'); ?&gt;
								<li><a href="http://plucss.pluxml.org/" title="PluCSS">PluCSS</a></li>
								<li><a href="http://visualwizard.pluxml.org/" title="Visual Wizard">Visual Wizard</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

	<header class="header">
		<div class="container">
			<h1 class="no-margin heading-small"><?php $plxShow->mainTitle('link'); ?></h1>
			<h2 class="h5 no-margin"><?php $plxShow->subTitle(); ?></h2>
		</div>
	</header>
