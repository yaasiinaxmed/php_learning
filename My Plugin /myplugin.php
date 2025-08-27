<?php
/**
 * @package My Plugin
 * @version 1.7.2
 */
/*
Plugin Name: My Plugin
Plugin URI: http://wordpress.org/plugins/my-plugin/
Description: this my first plugin for wordpress
Version: 1.7.2
Author URI: http://ma.tt/
*/

function hello_myplugin_get_lyric() {
	/** These are the lyrics to Hello MyPlugin */
	$lyrics = "my plugin is working 
	yey is working yey
	hello my plugin
	testing my plugin
	lets go
	this my plugin is working
	my first plugin
	hello my plugin
	testing my plugin
	lets go
	this my plugin is working
	my first plugin
	hello my plugin
	testing my plugin
	lets go
	this my plugin is working
	my first plugin
	";

	// Here we split it into lines.
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line.
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later.
function hello_myplugin() {
	$chosen = hello_myplugin_get_lyric();
	$lang   = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}

	printf(
		'<p id="myplugin"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
		__( 'Quote from Hello MyPlugin song, by Jerry Herman:', 'hello-dolly' ),
		$lang,
		$chosen
	);
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'hello_myplugin' );

// We need some CSS to position the paragraph.
function myplugin_css() {
	echo "
	<style type='text/css'>
	#myplugin {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl #myplugin {
		float: left;
	}
	.block-editor-page #myplugin {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#myplugin,
		.rtl #myplugin {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'myplugin_css' );
