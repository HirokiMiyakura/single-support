<?php get_header(); ?>
<div id="contents">
	
<div id="breadcrumbBox">
	<ul class="breadcrumb">
		<li><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
		<li class="active">新着情報</li>
	</ul>
</div>

<div class="section" id="title">
	<div class="background-image"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">新着情報</h1>
			</div>
		</div>
	</div>
</div>


<div class="section">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<ul class="media-list linkBox">
					<?php echo get_news_list(); ?>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<?php wp_pagination(); ?>
			</div>
		</div>
	</div>
</div>

</div>
<?php get_footer(); ?>
