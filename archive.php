<?php get_header(); ?>
<div id="contents">

<div id="breadcrumbBox">
	<ul class="breadcrumb">
		<li><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
		<li class="active">滞在</li>
	</ul>
</div>

<div id="stay">
  <div class="stay-title">
    <img src="<?php bloginfo('template_directory'); ?>/img/stay/house_title.png" alt="">
  </div>
  <div class="stay-wrap">


<?php
$tax_slug = $wp_query->get_queried_object();
$tax_slug2= esc_html($tax_slug->slug);
?>
<div class="stay-category-img"><img src="<?php bloginfo('template_directory'); ?>/img/stay/<?php $tax_slug= $wp_query->get_queried_object(); echo esc_html($tax_slug->slug);?>_title.png" alt=""></div>



<ul class="stay-category-list">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <li>
            <div class="entry-title">
                <?php the_title(); ?>
                <?
                $txt = get_field('title_en');
                if($txt){ ?><span><? echo $txt; ?></span>
                <? } ?>
            </div>
            <div class="entry-box">
                <div class="img">
                    <?
                    $img = get_field('main_img');
                    $imgurl = wp_get_attachment_image_src($img, 'full');
                    if($imgurl){ ?><img src="<? echo $imgurl[0]; ?>" alt="">
                    <? } ?>
                </div>
                <div class="txt1">
                    <?
                    $area = get_field('main_img_txt1');
                    if($area){ ?><? echo $area; ?>
                    <? } ?>
                </div>
                <div class="txt2">
                    <?
                    $area = get_field('main_img_txt2');
                    if($area){ ?><? echo $area; ?>
                    <? } ?>
                </div>
            </div>
            <div class="entry-box">
                <div class="item-name"><span>■</span>写真 / photos</div>
                <ul class="img-list">

                        <?
                        $img = get_field('photo_img1');
                        $imgurl = wp_get_attachment_image_src($img, 'full');
                        if($imgurl){ ?><li><img src="<? echo $imgurl[0]; ?>" alt=""></li>
                        <? } ?>


                        <?
                        $img = get_field('photo_img2');
                        $imgurl = wp_get_attachment_image_src($img, 'full');
                        if($imgurl){ ?><li><img src="<? echo $imgurl[0]; ?>" alt=""></li>
                        <? } ?>


                        <?
                        $img = get_field('photo_img3');
                        $imgurl = wp_get_attachment_image_src($img, 'full');
                        if($imgurl){ ?><li><img src="<? echo $imgurl[0]; ?>" alt=""></li>
                        <? } ?>


                        <?
                        $img = get_field('photo_img4');
                        $imgurl = wp_get_attachment_image_src($img, 'full');
                        if($imgurl){ ?><li><img src="<? echo $imgurl[0]; ?>" alt=""></li>
                        <? } ?>

                </ul>
                <div class="txt2">
                    <?
                    $area = get_field('photo_txt');
                    if($area){ ?><? echo $area; ?>
                    <? } ?>
                </div>
            </div>
            <div class="entry-box">
                <div class="item-name"><span>■</span>情報 / informations</div>
                <div class="white-box">
                    <?
                    $area = get_field('informations_txt');
                    if($area){ ?><? echo $area; ?>
                    <? } ?>
                 </div>
            </div>
            <div class="entry-box">
                <div class="item-name"><span>■</span>アクセス / access</div>
                <div class="access-box">
                    <?
                    $area = get_field('access_txt');
                    if($area){ ?><? echo $area; ?>
                    <? } ?>
                 </div>
            </div>
            <div class="entry-box">
                <div class="item-name"><span>■</span>周辺スポット / What’s nearby</div>
                <div class="access-box">
                    <?
                    $area = get_field('nearby_txt');
                    if($area){ ?><? echo $area; ?>
                    <? } ?>
                </div>
            </div>
            <div class="entry-contact-btn">
                <a href="<?php echo home_url( '/' ); ?>service/stay/contact/"><img src="<?php bloginfo('template_directory'); ?>/img/stay/btn1.png" alt="お問い合わせはこちら"></a>
            </div>
        </li>
<?php endwhile; endif; ?>    </ul>
  </div>
<ul class="stay-btm-nav">
    <li><a href="<?php echo home_url( '/' ); ?>service/stay/about/"><img src="<?php bloginfo('template_directory'); ?>/img/stay/btn2.png" alt="会社情報"></a></li>
    <li><a href="<?php echo home_url( '/' ); ?>service/stay/privacy/"><img src="<?php bloginfo('template_directory'); ?>/img/stay/btn3.png" alt="プライバシーポリシー"></a></li>
</ul>
</div>


</div>
<?php get_footer(); ?>
