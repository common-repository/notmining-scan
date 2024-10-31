<?php

if (! Defined ('ABSPATH')) exit;

add_action( 'admin_menu', 'nmp_NotMiningMenu' );
function nmp_NotMiningMenu()
{
 add_menu_page(
 'NotMining Scan', 
 'NotMining Scan', 
 'manage_options', 
 plugin_dir_path(__FILE__) . 'nmpNotMiningScan.php',
 '',
 plugins_url( 'img/logo.png', dirname(__FILE__))

 );
}

function nmp_scan(){
	
	$nmp_SCurlWeb = home_url( '/' );	
	$nmp_BodyContent = wp_remote_retrieve_body( wp_remote_get( 'https://notmining.es/plugin/scan.php?domain=http://'.$nmp_SCurlWeb.'&&action=1' ) );
	print($nmp_BodyContent."</br>");

}

