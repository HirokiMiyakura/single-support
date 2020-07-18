<?php
/*
Template Name: GOTOキャンペーンページ（gotocampaign-page.php）
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
<!----- favicon----->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico"/>
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.png">
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
			<li><a href="<?php echo home_url(); ?>/ss-contact">お問い合わせ</a></li>
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
<p>
  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/ss/main_pc.png" alt="メイン画像" />
  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/ss/main_pc.png" alt="メイン画像" />
</p>

<!-- section -->
<section id="NAV">
<ul class="list">
  <li class="list__item">
    <a href="#ABOUT" class="list__item__link">
		Go To Travel<br>キャンペーン<br>とは？
    </a>
  </li>
  <li class="list__item">
    <a href="#OTOKU" class="list__item__link">
		お得度
    </a>
  </li>
  <li class="list__item">
    <a href="#PERIOD_LOCATION" class="list__item__link">
		期間・場所
    </a>
  </li>
  <li class="list__item">
    <a href="#HOWTO" class="list__item__link">
		利用方法
    </a>
	</li>
	<li class="list__item">
    <a href="<?php echo home_url(); ?>/ss-contact/" target="_blank" class="list__item__link">
		お問い合わせ
    </a>
  </li>
</ul>
</section>
<!-- /section -->

<!-- section -->
<section id="ABOUT">
<h2 class="centering aboutTitle">
	<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/ss/about.svg" alt="Go To Travelキャンペーンとは" />
	<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/ss/about_sp.svg" alt="Go To Travelキャンペーンとは" />
</h2>
<p class="aboutDescription">新型コロナウイルスの収束後に、観光需要を喚起させ、地域の再活性化を目指すキャンペーンが「Go To Travel キャンペーン」です。<br/><br/>
期間中に旅行商品を購入した消費者に対して、国が旅行代金の最大半額（50%）分を、旅行代金で35%、土産物店、飲食店、観光施設、 アクティビティ、交通機関などで使えるクーポンで15%補助する制度です。（最大1人あたり1泊2万円分まで 、日帰りの場合1万円まで）<br/><br/>
7/22〜8/31は旅行代金の最大35%が割引となります。9/1より旅行代金の最大35%割引＋クーポン15%分が補助されます。<br/><br/>
「Go To Travel キャンペーン」期間中は、利用回数や宿泊日数に制限はないので、何度でも何泊でも利用できる、たいへんお得でメリットのあるキャンペーンになっています。コロナの影響で予定していた旅行をキャンセルしたり、旅行に行きたい気持ちを我慢してきた旅行好きの方にとっては、魅力的なキャンペーンですね。</p>
<!-- </section> -->

<!-- <section id="OBJECT"> -->
<p>
	<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/ss/object_title.svg" alt="割引対象となる旅行商品" />
	<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/ss/object_title_sp.svg" alt="割引対象となる旅行商品" />
</p>
<div class="object__container">
<div class="object__container__item">
<p><img src="<?php echo get_template_directory_uri(); ?>/img/ss/kojin.svg" alt="個人旅行" /></p>
<ul>
<li>※宿泊に準ずるもの：クルーズ・夜行フェリー・寝台列車</li>
<li>※個人で手配した交通機関は割引対象外</li>
</ul>
</div>
<div class="object__container__item">
<p><img src="<?php echo get_template_directory_uri(); ?>/img/ss/dantai.svg" alt="団体旅行" /></p>
</div>
</div>
<p class="cvImage">
<a href="<?php echo home_url(); ?>/ss-contact/" target="_blank">
<img src="<?php echo get_template_directory_uri(); ?>/img/ss/cv.png" alt="お問い合わせはこちらより" />
</a>
</p>
</section>
<!-- /section -->

<!-- section -->
<section class="otoku_outer">
<div id="OTOKU">
<p class="ribbon"><img src="<?php echo get_template_directory_uri(); ?>/img/ss/ribbon.png" alt="リボン" /></p>
<h3 class="subTitle">Go To Travelで<br class="sp">どれくらいお得になるの？</h3>
<h4 class="colorPink">1人につき1泊あたり2万円まで、日帰り旅行は1万円までを上限に旅行代金の最大半額（50%）分が補助されます。</h4>
<p>単純に旅行代金の半額が割り引かれるわけではなく、旅行代金の半分のうち、70%が割引（補助）、残りの30%は、旅行先の土産物店、飲食店、観光施設、アクティビティ、交通機関などで使用できるクーポンで補助されることになります。</p>
<h5><span>補助額</span>旅行代金の半額で最大補助額以内</h5>
<p><img src="<?php echo get_template_directory_uri(); ?>/img/ss/hojo_table.svg" alt="補助額テーブル" /></p>
<p class="miniText">※4泊以降も1泊ごとに2万円加算されます。</p>
<p class="sample1">
	<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/ss/hojo_sample1.svg" alt="補助額サンプル1" />
	<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/ss/hojo_sample1_sp.svg" alt="補助額サンプル1" />
</p>
<h3 class="subTitle">旅行日数（宿泊日数）が<br class="sp">多いほどお得に！</h3>
<p>
	<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/ss/hojo_sample2.svg" alt="補助額サンプル2" />
	<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/ss/hojo_sample2_sp_new.svg" alt="補助額サンプル2" />
</p>
</div>
<p class="cvImage">
<a href="<?php echo home_url(); ?>/ss-contact/" target="_blank">
<img src="<?php echo get_template_directory_uri(); ?>/img/ss/cv.png" alt="お問い合わせはこちらより" />
</a>
</p>
</section>
<!-- /section -->

<!-- section -->
<section id="PERIOD_LOCATION">
<h2 class="mainTitle">期間・場所</h2>
<div class="space">
<h3 class="subTitle">「Go To Travel キャンペーン」は<br class="sp">どこに行けるの？</h3>
<p>日本国内であれば、沖縄から北海道までどこでもOKです。沖縄の離島や北海道をドライブで1周など、キャンペーンを利用して今まで訪れたことのない場所や長期間の旅行など、計画してみるのもいいですね。</p>
</div>
<h3 class="subTitle">「Go To Travel キャンペーン」は<br class="sp">いつまで？</h3>
<p>7/22から旅行会社での受付が開始され、2021年3月までキャンペーンは続く予定です。</p>
</section>
<!-- /section -->

<!-- section -->
<section id="HOWTO">
<h2 class="mainTitle">利用方法</h2>
<div class="space">
<h3 class="subTitle">「Go To Travel キャンペーン」の<br class="sp">利用方法は？</h3>
<p>「Go To Travel キャンペーン」は<span>旅行会社（旅行代理店）等を経由した旅行商品の購入、または旅行会社（旅行代理店）等の宿泊予約サイト・宿泊施設の予約サイトの利用での予約が対象となっています。「Go To Travel キャンペーン」の適用を受けるための申請手続等は基本的に旅行業者側が行ってくれるので、個人で書類を提出する必要はありません。<br/><br/>
ご希望の航空券と宿泊ホテルなどを組み合わせたオーダーメイドの旅行の場合も、オーダーメイドの旅行の取扱いをしている旅行会社で申込み、「Go To Travel キャンペーン」の適用を受けて、補助を受けることができます。</span></p>
</div>
<h3 class="subTitle">「パッケージツアー」と<br class="sp">「オーダーメイド旅行」の違いは？</h3>
<p>パッケージツアーは、航空券と宿泊施設（さらに現地の観光など）がセットになった旅行のことをいいます。各旅行会社のパンフレットなどに掲載した添乗員が同行するツアーや個人で行く旅行でもあらかじめ用意された航空機やホテル、観光地の中から決められていているプランを選ぶものなどがあります。料金が記載されているので、わかりやすい反面、プランのアレンジができない、自分のペースで旅ができないなどの面があります。<br/><br/>
一方、オーダーメイド旅行は、お客様の旅行の希望や要望をかなえるために一から旅行プラン（日程表・見積）を作成、修正など加え、旅行プラン（日程表・見積）が決まった後に予約・手配を行います。旅行先でしたいことがある、複数の場所をまわりたいなど、目的をもって旅行をする方や団体ではなく自由に旅行をしたい方に向いています。オーダーメイド旅行は、お客様と旅行会社が共同で旅を創り上げる、こだわりのオリジナルツアーです。</p>
<p class="cvImage">
<a href="<?php echo home_url(); ?>/ss-contact/" target="_blank">
<img src="<?php echo get_template_directory_uri(); ?>/img/ss/cv.png" alt="お問い合わせはこちらより" />
</a>
</p>
</section>
<!-- /section -->

<!-- section -->
<section id="MESSAGE">
<h3>シングルサポートでは、「Go To Travel キャンペーン」を利用した<br class="pc">
オーダーメイド旅行プランを通じて、<br class="pc">
あなただけの旅の希望をかなえ、サポートしています。</h3>
<p>シングルサポート（株）では「Go To Travel キャンペーン」を利用したオーダーメイド旅行の相談・旅行プラン（日程表・見積）の作成・予約・手配をおこなっています。</p>
<ul>
<li>あなたの旅行のご要望をかなえる旅行プランを作成します。</li>
<li>パッケージツアーではかなえられない、あなただけのオリジナルの旅行プランを作成します。</li>
<li>特に沖縄、離島、北海道、九州など、航空機を利用して周遊するプランを得意としています。</li>
<li>オーダーメイド旅行の相談・旅行プラン（日程表・見積）は無料です。</li>
<li>メールや電話、オンラインで相談しながら、旅行プランを作成することも可能です。是非ご相談ください。</li>
</ul>
<p>「Go To Travel キャンペーン」を利用したオーダーメイドの旅行のご相談、お申し込みは下記「お問い合わせ」よりお問い合わせください。また、電話、オンライン相談にてもうけたまわっております。</p>
</section>
<!-- /section -->

<!-- section -->
<section id="RYOTEI">
<h3>【シングルサポート ご旅行のお問い合わせから、お申込み・ご出発まで】</h3>
<ol>
<li>ご希望やご予定をもとに旅行プラン（日程表）、旅行見積を作成し、ご提案をさせていただきます。旅行プラン（日程表）・見積をもとに修正、追加希望などありましたらお知らせください。修正プランを作成させていただきます。</li>
<li>旅のプラン（日程表）・見積が決まりましたら、お申込書をお送りさせていただきます。</li>
<li>お申込書に必要事項をご記入の上、メール又は郵送にてお送りください。</li>
<li>旅行プラン（日程）、見積が決まりましたら旅行の予約・手配をさせていただきます。合わせて、お申込金、旅行代金など弊社指定の銀行口座にお振込みください。</li>
<li>予約・手配ができましたら、航空券予約確認書（イーチケット）、ホテル予約確認書、その他予約確認書をお送りさせていただきます。</li>
<li>集合場所・時間・現地宿泊先など記載をした「最終日程表」と航空券（イーチケット）、ホテル予約・宿泊券、その他必要書類などをお送りさせていただきます。</li>
<li>ご出発
</ol>
<p class="cvImage">
<a href="<?php echo home_url(); ?>/ss-contact/" target="_blank">
<img src="<?php echo get_template_directory_uri(); ?>/img/ss/cv.png" alt="お問い合わせはこちらより" />
</a>
</p>
</section>
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

