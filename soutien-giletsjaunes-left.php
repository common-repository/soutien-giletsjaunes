<?php
/*
Plugin Name: Soutien GiletsJaunes (côté gauche)
Plugin URI: https://wordpress.org/plugins/soutien-giletsjaunes/
Description: Une fois activé, ce plugin mettra un ruban #GiletsJaunes dans le coin <b>gauche</b> de votre site Web. Montrez votre soutien aux GiletsJaunes! Je vous remercie
Author: giletsjaunes
Author URI: https://profiles.wordpress.org/giletsjaunes
Version: 1.0
License: GPLv2
*/

if ( ! function_exists( 'giletsjaunes_ruban_gauche' ) ) {
	add_action( 'wp_footer', 'giletsjaunes_ruban_gauche', PHP_INT_MAX );
	function giletsjaunes_ruban_gauche() {
		$ruban = plugins_url( 'soutien-giletsjaunes-left.png', __FILE__ );
		?>
        <a target="_blank" class="giletsjaunes-left-ruban" href="https://www.facebook.com/groups/357767044781992/"><img
                    src="<?php echo $ruban; ?>" alt="#GiletsJaunes"
                    style="position: fixed; top: 0; left: 0; z-index: 100000;"></a>
		<?php
	}
}