<?php
/**
 * Footer
 *
 * The footer template.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wp_footer(); ?>
<script>
		AOS.init({
			duration: 1900,
			easing: 'ease',
			once: true,
			mirror: false
		});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('a[data-rel^=lightcase]').lightcase();
	});
</script>
</body>
</html>
