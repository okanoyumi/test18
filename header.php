<?php
/**
 *
 * Header
 *
 * @package WordPress
 **/

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<p><?php bloginfo( 'description' ); ?></p>
		<div class="wrap">
				<ul class="slick-box">
					<li class="slide-bg"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_slide_01.jpg"></a></li>
					<li class="slide-bg"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_slide_02.jpg"></a></li>
					<li class="slide-bg"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_slide_03.jpg"></a></li>
				</ul>
		</div>
	</header>
<?php
get_template_part( 'template-parts/nav' );
