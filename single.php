<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
<div id="contents">
	
	<div id="breadcrumbBox">
		<ul class="breadcrumb">
			<li><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
			<li><a href="<?php bloginfo('url'); ?>/category/news/">新着情報</a></li>
			<li><?php echo wp_trim_words( get_the_title(), 50, '' ); ?></li>
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
				<div class="col-md-10 col-md-push-1">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-push-1">
					<div class="the_content"><?php the_content(); ?></div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-10 col-md-push-1">
					<hr>
					<ul class="pager">
						<li class="previous">
							<?php echo previous_post_link("%link", '<span class="btn btn-danger btn-sm btn-round btn-hover">←  前へ</span>'); ?>
						</li>
						<li class="next">
							<?php echo next_post_link("%link", '<span class="btn btn-danger btn-sm btn-round btn-hover">次へ  →</span>'); ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</div>
<?php endif; ?>
<?php get_footer(); ?>
