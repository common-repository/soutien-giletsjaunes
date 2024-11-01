<?php
/*
Plugin Name: Soutien GiletsJaunes (côté droit)
Plugin URI: https://wordpress.org/plugins/soutien-giletsjaunes/
Description: Une fois activé, ce plugin mettra un ruban #GiletsJaunes dans le coin <b>droit</b> de votre site Web. Montrez votre soutien aux GiletsJaunes! Je vous remercie
Author: giletsjaunes
Author URI: https://profiles.wordpress.org/giletsjaunes
Version: 1.0
License: GPLv2
*/

if ( ! function_exists( 'giletsjaunes_ruban' ) ) {
	add_action( 'wp_footer', 'giletsjaunes_ruban', PHP_INT_MAX );
	function giletsjaunes_ruban() {
		$ruban = plugins_url( 'soutien-giletsjaunes.png', __FILE__ );
		?>
        <a target="_blank" class="giletsjaunes-ruban" href="https://www.facebook.com/groups/357767044781992/"><img
                    src="<?php echo $ruban; ?>" alt="#GiletsJaunes"
                    style="position: fixed; top: 0; right: 0; z-index: 100000;"></a>
		<?php
	}
}