<?php get_header(); ?>



<div id="main">
	<div id="content">
		<div id="page">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { 
					
					
					
					?>
                    <!--
						<h1><?php //the_title(); ?></h1>
                    -->
                    
                    
        
        
					<?php } else { ?>	
						<h1><?php the_title(); ?></h1>
					<?php } ?>				

						<?php the_content(); ?>
						<div class="clear"></div>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'ari' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit this page &rarr;', 'ari' ), '', '' ); ?>

				<?php comments_template( '', true ); ?>
                


<?php 

// AKTUELT - arrangement_dato

if (is_front_page()){
?>
<div align="center" style="margin:0 0 20px 0;"><img src="http://www.idpf.dk/wp-content/themes/idpf/images/skiller.gif" alt="Skiller" ></div>
<h2  style="font-size:24px;color:#84a374;">Aktuelt</h2>
<?php

$recent = new WP_Query("cat=9&showposts=100&orderby=meta_value&meta_key=arrangement_dato&order=ASC"); 
while($recent->have_posts()) : $recent->the_post();
global $more;
$more = 0;

$key="arrangement_dato";
$arr_dato = get_post_meta($post->ID, $key, true); 
//echo $arr_dato;
//echo get_post_meta($post->ID, $key, true);

$test = "2011-03-04";
$today = date("Y-m-d"); 
//echo "<br>i dag: $today";

if ($arr_dato < $today){
//echo "<br>tester: for gammel - ud";
}
else {
 
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            
			<!--
            <div class="entry-meta">
				&nbsp;<?php //twentyten_posted_on(); ?>
			</div> .entry-meta -->

    <?php the_content('L&aelig;s mere <span class="meta-nav">&rarr;</span>'); ?>
  </div>  
<?php 
} // dato
endwhile; 
}
?>


<!--

<?php 
if ( is_front_page() ) {
?>

<div align="center" style="margin:0 0 20px 0;"><img src="http://www.idpf.dk/wp-content/themes/idpf/images/skiller.gif" alt="Skiller" ></div>
<h2 style="font-size:24px;color:#84a374;">Aktuelt</h2>

<?php

// gammel

// KATEGORI 9 - Arrangementer
$displayposts = new WP_Query();
$displayposts->query('cat=9');
while ($displayposts->have_posts()) : $displayposts->the_post();
?>
<div style="border-top:1px dotted #4C4C4C;">&nbsp;</div>
<?php //the_content('read more...'); ?>
<?php //the_post_thumbnail('thumbnail'); ?>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php //the_excerpt(); ?>
<?php
global $more;
$more = 0;
the_content('L&aelig;s mere <span class="meta-nav">&rarr;</span>');
?>

<?php endwhile; ?>
<?php
}
?> 
-->

		<?php endwhile; ?>
		</div>
		<!--end Page-->
	</div>
	<!--end Content-->

<?php get_sidebar('secondary'); ?>

</div>
<!--end Main-->

<?php get_footer(); ?>