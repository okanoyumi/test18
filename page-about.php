<?php
/**
 *
 * Page About
 *
 * @package WordPress
 **/

get_header(); ?>

<h2>テスト16について</h2>
<section>
	<h3>見出し1</h3>
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about.jpg" alt="画像A" width="**" height"**">
	<p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
</section>
<section>
	<h3>見出し2</h3>
	<p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
</section>
<section>
	<h3>見出し3</h3>
	<p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
</section>
<?php
get_footer();
