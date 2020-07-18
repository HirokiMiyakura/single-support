<?php

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 150, 110, 1 );

function path_completion($arg) {
	$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
	$content = preg_replace('#(href|action)="/#', '$1="' . get_bloginfo('url') . '/', $content);
	return $content;
}
add_action('the_content', 'path_completion');


function get_slug() {
	global $post;

	if (strstr($_SERVER['REQUEST_URI'], '/contact_form/')) {
		$slug = 'contact_form';
	} else if(is_home() || is_front_page()) {
		$slug = 'index';
	} else if (is_single()) {
		$slug = $post->post_type;
	} else if (is_page()) {
		$slug = get_post(get_the_ID())->post_name;
	} else if (is_category()) {
		$cat  = get_the_category();
		$slug = $cat[0]->category_nicename;
	} else {
		$slug = get_post_type();
	}

	return $slug;
}


function wp_pagination() {
	global $max_num_pages;
	global $paged;
	$range = 3;

	if ( empty( $paged ) ) {
		$paged = 1;
	}
	$pages = $max_num_pages;
	if ( ! $pages ) {
		$pages = 1;
	}

	if ( 1 != $pages ) {
		echo '<ul class="pagination">';
		if ( $paged > 1) {
			echo "<li><a href=\"" . get_pagenum_link( $paged - 1 ) . "\">前へ</a></li>";
		}
		for ( $i = 1; $i <= $pages; $i ++ ) {
			if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) ) ) {
				echo ( $paged == $i ) ? "<li class='active'><a href='javascript:void(0);'>" . $i . "</a></li>" : "<li><a href='" . get_pagenum_link( $i ) . "'>" . $i . "</a></li>";
			}
		}
		if ( $paged < $pages) {
			echo "<li><a href=\"" . get_pagenum_link( $paged + 1 ) . "\">次へ</a></li>";
		}
		echo "</ul>\n";
	}
}


// お知らせ
function get_news_list($num = null) {
	global $paged;
	global $max_num_pages;

	if (is_null($num)) {
		$num = get_option('posts_per_page');
	}
	$wp_post = new WP_Query(array(
		'post_type' => 'post',
		'posts_per_page' => $num,
		'paged' => $paged
	));
	$max_num_pages = $wp_post->max_num_pages;

	$html = '';
	while ($wp_post->have_posts()) {
		$wp_post->the_post();

		$post_time  = get_post_time( 'Y/m/d' );
		$premalink  = get_the_permalink();
		$post_title = wp_trim_words( get_the_title(), 50, '' );
		$thumb = get_the_post_thumbnail(get_the_ID(), 'post-thumbnail');
		if (empty($thumb)) {
			$thumb = '<img src="' . get_bloginfo('template_directory') . '/img/noimage.png" alt="no image">';
		}

		$html .= <<<EOD
<li class="media col-md-6">
    <a class="pull-left" href="{$premalink}">{$thumb}</a>
    <div class="media-body">
        <p class="media-heading">{$post_time}</p>
        <p>$post_title</p>
    </div>
</li>

EOD;
	}
	wp_reset_postdata();
	return $html;
}
function include_news_list($atts){
	$atts = shortcode_atts( array(
		'num' => 4
	), $atts, 'include_news_list' );

	return get_news_list($atts['num']);
}
add_shortcode('include_news_list', 'include_news_list');
