<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'ari' ), max( $paged, $page ) );
	?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<!--<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="all" />-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.min.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" media="all" />
	<?php if (get_option('ari_dark-style') == 'checked') : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dark.css" type="text/css">
	<?php endif; ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="top_bjaelke" style="background-color:#661c2d;">&nbsp;</div>

<div id="wrap" class="clearfix">
	<div id="header c2">
    
    
<!-- fjern header -->
<!--
	<div class="logo">
	<?php if (get_option('ari_logo-image') ) : ?>
	<a href="<?php echo home_url(); ?>"><img src="<?php echo (get_option('ari_logo-image')) ? get_option('ari_logo-image') : get_template_directory_uri() . '/images/logo.png' ?>" alt="<?php bloginfo('name'); ?>" /></a>

	<?php else : ?>

	<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1><p><?php bloginfo( 'description' ); ?></p>
	<?php endif; ?>
	</div>
    
-->

<div class="logo">
<!--
<div class="logo_img">&nbsp;</div>
-->
<a href="http://www.idpf.dk"><img class="logo-img" src="http://www.idpf.dk/wp-content/themes/idpf/images/idpf-logo-280.png" alt="IDPF Psykoterapeutisk Forening"  border="0"></a>

<div class="logo-tekst">
<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1><p class="blog_beskriv"><?php bloginfo( 'description' ); ?></p>
</div>
</div>
    
<?php 
// FORSIDEBANNER
//if ( is_front_page() ) { 
?>
<!--
    <div class="logo">
      <a href="http://www.idpf.dk"><img src="http://www.idpf.dk/wp-content/themes/idpf/images/idpf-banner.jpg" alt="IDPF Psykoterapeutisk Forening" width="1040" height="160" border="0"></a>
    </div>
    -->
<?php
//} else {
?>

<!--
    <div class="logo">
      <a href="http://www.idpf.dk"><img src="http://www.idpf.dk/wp-content/themes/idpf/images/idpf-banner-spiral.jpg" alt="IDPF Psykoterapeutisk Forening" width="1040" height="160" border="0"></a>
    </div>
-->
<?php
//}
// SLUT FORSIDEBANNER
?>  

  
    <div id="centeredmenu">
    <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'depth' => '1' ) ); ?>
	</div><!--end Menu-->
    
	</div><!--end Header-->
    
<?php 
// SLIDER
if ( is_front_page() ) { 
//include ('slider.php'); TODO: include when ready for slider! JON
?>
    
	<div id="sidebar-primary-forside">

	

	<ul class="sidebar">

	<?php if ( ! dynamic_sidebar( 'primary-widget-area-forside' ) ) : ?>
			
			<?php //wp_list_pages('title_li=<h3 class="widget-title">' . __('Pages', 'ari') . '</h3>'); ?>
			<?php //dynamic_sidebar( 'primary-widget-area-forside' ); ?>

	<?php endif; // end primary widget area ?>
	</ul>
	<!--end Sidebar -->

	</div>
	<!--end Sidebar One-->
    
<?php
}



else {

?>
    
<div id="sidebar-primary">
<?php
  if($post->post_parent)
  $children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$post->ID."&echo=0");
  if ($children) { ?>
  <ul id="undermenu" >
  <?php echo $children; ?>
  </ul>
  <?php } ?>

	<?php get_sidebar('primary'); ?>

	</div>
	<!--end Sidebar One-->
    
    <?php
	
}
?>