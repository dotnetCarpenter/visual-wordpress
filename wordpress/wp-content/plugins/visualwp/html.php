<?php
// add_action( 'admin_enqueue_scripts', 'my_enqueue' );
// function my_enqueue($hook) {
//     if( 'index.php' != $hook ) return;	// Only applies to dashboard panel
        
// 	wp_enqueue_script( 'white-space', plugins_url( '/js/white-space.modern.js', __FILE__ ), array(), "13.4.2", true);
// }
?>
<div class="wrap">
<?php screen_icon(); ?>
<h2>Visual Wordpress</h2>

<iframe id="visualWpFrame" src="<?php print plugins_url("html.html", __FILE__); ?>" style="width:100%;">
	<pre>LOADING</pre>
</iframe>
<script>
(function() {
	var iframe = document.getElementById('visualWpFrame');
	iframe.addEventListener('load', function() {
		setIframeHeight( iframe, document.getElementById('wpbody'), function(height) {
			var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
			iframeWin.postMessage(height-10, location.protocol + '//' + location.host);
		});
	});
	function setIframeHeight(iframe, container, cb) {
		var height;
	    if (iframe && container) {
	        iframe.height = height = container.scrollHeight;
	    }
	    cb(height);
	};
}());
</script>