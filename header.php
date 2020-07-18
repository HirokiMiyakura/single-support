<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<?php $slug = get_slug();?>
	<title>
		<?php if ($slug == 'contact_form'):?>お問い合わせ
		<?php else:?>トップページ
		<?php endif;?>
	</title>
	<?php wp_head(); ?>

	<!----- favicon----->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico"/>
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.png">

	<!-- BootstrapのCSS読み込み -->
	<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory'); ?>/css/drawer.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory'); ?>/css/animate.css" rel="stylesheet" type="text/css">
	<?php if ($slug=="contact"):?>
	<link href="<?php bloginfo('template_directory'); ?>/css/validationEngine.jquery.css" rel="stylesheet" type="text/css"/>
	<?php endif; ?>
	<link href="<?php echo get_template_directory_uri();?>/css/stay.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">


	
	<!-- jQuery読み込み -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/main.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.biggerlink.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128944952-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128944952-1');
</script>
<?php wp_head(); ?>
</head>

<body class="drawer drawer--right">
	<header class="drawer-navbar navbar-fixed-top" role="banner">
		<div class="drawer-container">
			<div class="drawer-navbar-header">

				<a class="drawer-brand" href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="シングルサポート株式会社" /></a>
				<div class="contact_btn_tbsp"><a class="drawer-menu-item btn btn-danger btn-round btn-hover" href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a></div>
				<button type="button" class="drawer-toggle drawer-hamburger">
				<span class="sr-only">toggle navigation</span>
				<span class="drawer-hamburger-icon"></span>
			</button>
			

			</div>

			<nav class="drawer-nav" role="navigation">
				<ul class="drawer-menu drawer-menu--right">
					<li<?php if($slug=="index" ):?> class="active"
						<?php endif; ?>><a class="drawer-menu-item" href="<?php bloginfo('url'); ?>/">HOME</a>
						</li>
						<li><a class="drawer-menu-item" href="<?php bloginfo('url'); ?>/news/">新着情報</a>
						</li>
						<li <?php if($slug=="service" ):?> class="drawer-dropdown active"<?php else: ?> class="drawer-dropdown"
						<?php endif; ?>><a class="drawer-menu-item" href="<?php bloginfo('url'); ?>/service/">事業紹介<span class="drawer-caret"></span></a>
							<ul class="drawer-dropdown-menu">
								<li><a class="drawer-dropdown-menu-item" href="service/travel/">旅</a>
								</li>
								<li><a class="drawer-dropdown-menu-item" href="service/living/">暮らし</a>
								</li>
								<li><a class="drawer-dropdown-menu-item" href="service/lifeconsulting/">ライフコンサルティング</a>
								</li>
								<li><a class="drawer-dropdown-menu-item" href="service/business/">副業・起業支援</a></li>
								<li><a class="drawer-dropdown-menu-item" href="service/sales/">提携販売</a></li>
							</ul>
						</li>
						<li <?php if($slug=="about" ):?> class="drawer-dropdown active"<?php else: ?> class="drawer-dropdown"
						<?php endif; ?>><a class="drawer-menu-item" href="<?php bloginfo('url'); ?>/about/">会社情報<span class="drawer-caret"></span></a>
							<ul class="drawer-dropdown-menu">
								<li><a class="drawer-dropdown-menu-item" href="about/message/">理念・ご挨拶</a></li>
								<li><a class="drawer-dropdown-menu-item" href="about/profile/">代表プロフィール</a></li>
								<li><a class="drawer-dropdown-menu-item" href="about/overview/">会社概要</a></li>
							</ul>
						</li>
						<li><a class="drawer-menu-item btn btn-danger btn-round btn-hover" href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a>
						</li>
				</ul>
			</nav>
		</div>
	</header>