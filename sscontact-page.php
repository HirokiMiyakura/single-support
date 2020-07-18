<?php
/*
Template Name: お問い合わせページ（sscontact-page.php）
*/
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ress.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<?php wp_head(); ?>
<script>
// conditionizr.com
// configure environment tests
conditionizr.config({
		assets: '<?php echo get_template_directory_uri(); ?>',
		tests: {}
});
</script>
</head>
<body id="ss_campaign" <?php body_class(); ?>>
<style>
@media all and (-ms-high-contrast: none) {
  header h1 img {
    margin-top: 0;
  }
}
</style>
<!-- header -->
<header class="header clear" role="banner">
<!-- logo -->
<div class="logo">
<h1>
<a href="<?php echo home_url(); ?>/go-to-campaign/">
<img src="<?php echo get_template_directory_uri(); ?>/img/ss/logo.svg" alt="Single Support" />
</a>
</h1>
</div>
<!-- /logo -->

<div class="sp" id="navArea">
<nav>
	<div class="inner">
		<ul>
			<li><a href="<?php echo home_url(); ?>/#ABOUT">Go To Travel<br class="sp">キャンペーンとは？</a></li>
			<li><a href="<?php echo home_url(); ?>/#OTOKU">お得度</a></li>
			<li><a href="<?php echo home_url(); ?>/#PERIOD_LOCATION">期間・場所</a></li>
			<li><a href="<?php echo home_url(); ?>/#HOWTO">利用方法</a></li>
			<li><a href="<?php echo home_url(); ?>/CONTACT">お問い合わせ</a></li>
		</ul>
	</div>
</nav>
<div class="toggle_btn">
	<span></span>
	<span></span>
	<span></span>
</div>
<div id="mask"></div>
</div>

<!-- div -->
<div class="nav" role="navigation">
<a href="<?php echo home_url(); ?>/ss-contact/" target="_blank">
<img src="<?php echo get_template_directory_uri(); ?>/img/ss/contact.svg" alt="お問い合わせボタン" />
</a>
</div>
<!-- /div -->
</header>
<!-- /header -->
<main role="main">
<h1 class="contact_title"><img src="<?php echo get_template_directory_uri(); ?>/img/ss/contact_title.svg" alt="お問い合わせ" /></h1>
<!-- section -->
<!-- <section id="CONTACT"> -->
  <div class="contact_inner">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
    <?php echo do_shortcode( '[contact-form-7 id="1033" title="コンタクトフォーム 1"]' ); ?>
  </div>
<!-- </section> -->
<!-- /section -->
</main>
<!-- footer -->
<footer class="footer" role="contentinfo">
<!-- copyright -->
<p class="copyright miniText centering">
&copy; <?php echo date('Y'); ?> Copyright Single Support
</p>
<!-- /copyright -->
</footer>
<!-- /footer -->
<?php wp_footer(); ?>
<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');

(function($) {
  var $nav   = $('#navArea');
  var $btn   = $('.toggle_btn');
  var $mask  = $('#mask');
  var open   = 'open'; // class
  // menu open close
  $btn.on( 'click', function() {
    if ( ! $nav.hasClass( open ) ) {
      $nav.addClass( open );
    } else {
      $nav.removeClass( open );
    }
  });
  // mask close
  $mask.on('click', function() {
    $nav.removeClass( open );
  });
} )(jQuery);

/* acordion */

jQuery(function($){
$(".accordion-wrap").on("click", function(){   
    $(this).children().eq(1).slideToggle(300);  
    $(this).children().eq(0).toggleClass("accordion-no-bar");
    $(this).siblings().find(".accordion-header").removeClass("accordion-gold");
    $(this).siblings().find(".accordion-header i").removeClass("rotate-fa");
    $(this).find(".accordion-header").toggleClass("accordion-gold");
    $(this).find(".fa").toggleClass("rotate-fa");

    $(".accordion-wrap .accordion-text").not($(this).children().eq(1)).slideUp(300);
});
});

document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '<?php echo home_url(); ?>/thanks-page/';
}, false );

// ページ内リンクをゆったりと
jQuery(function($){
  jQuery(function(){
   jQuery('a[href^="#"]').click(function() {
      var speed = 1200;
      var href= jQuery(this).attr("href");
      var target = jQuery(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});
});

</script>
</body>
</html>
