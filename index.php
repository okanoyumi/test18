<?php
/**
 *
 * Index
 *
 * @package WordPress
 **/

?>

<?php get_header(); ?>


<section class="section">
<!-- Default Posts -->
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content' );
	endwhile;
endif;
?>
</section>

<section class="section">
<!-- Custom Posts -->
<?php
$args      = array(
	'post_type'      => 'news',
	'posts_per_page' => 2,
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
?>
<ul class="article-content">
<li><?php echo get_the_date(); ?></li>
<li><?php the_category(); ?></li>
<li class="post-img"><a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail(); ?></a></li>
<li><?php the_content(); ?></li>
</ul>
<?php
endwhile;
endif;
?>


<?php
get_footer();
