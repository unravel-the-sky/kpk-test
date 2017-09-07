<?php
/**
 * @package Gridster
 */
?>

<div id="main">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail('post-full', array('class' => 'postimage')); ?>
</a>
<div id="content">


<?php the_content(); ?>

<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gridster-lite' ),
				'after'  => '</div>',
			) );
?>
<!-- content -->
