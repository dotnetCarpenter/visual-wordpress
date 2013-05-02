




<?php
	if ( is_active_sidebar( 'footer_2-widget-area' ) ) : ?>

			<ul class="footer-widger">
				<?php dynamic_sidebar( 'footer_2-widget-area' ); ?>
			</ul>

<?php endif; ?>

<?php
	if ( is_active_sidebar( 'footer_3-widget-area' ) ) : ?>

			<ul class="footer-widger">
				<?php dynamic_sidebar( 'footer_3-widget-area' ); ?>
			</ul>

<?php endif; ?>

<?php
	if ( is_active_sidebar( 'footer_4-widget-area' ) ) : ?>

			<ul class="footer-widger">
				<?php dynamic_sidebar( 'footer_4-widget-area' ); ?>
			</ul>

<?php endif; ?>
    
    
<?php wp_footer(); ?>





</div>
<!--end Wrap-->
<div align="center" id="footer_bg" >
<div class="footer-container">

<div class="footer-widget">

	<div class="footer_a">
	<?php
	if ( is_active_sidebar( 'footer_a-widget-area' ) ) : ?>

			<ul class="footer-widget-ul">
				<?php dynamic_sidebar( 'footer_a-widget-area' ); ?>
			</ul>

	<?php endif; ?>

    
	</div>

</div>

<div class="footer-widget">

	<div class="footer_b">
	<?php
	if ( is_active_sidebar( 'footer_b-widget-area' ) ) : ?>

			<ul class="footer-widget-ul">
				<?php dynamic_sidebar( 'footer_b-widget-area' ); ?>
			</ul>

	<?php endif; ?>

	</div>

</div>

<div class="footer-widget">

	<div class="footer_c">
	<?php
	if ( is_active_sidebar( 'footer_c-widget-area' ) ) : ?>

			<ul class="footer-widget-ul">
				<?php dynamic_sidebar( 'footer_c-widget-area' ); ?>
			</ul>

	<?php endif; ?>

	</div>

</div>

<div class="footer-widget">

	<div class="footer_d">
	<?php
	if ( is_active_sidebar( 'footer_d-widget-area' ) ) : ?>

			<ul class="footer-widget-ul">
				<?php dynamic_sidebar( 'footer_d-widget-area' ); ?>
			</ul>


	<?php endif; ?>
	</div>

</div>

</div>
</div>

<div align="center" class="footer-bund"></div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39174028-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>

