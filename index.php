<?php

require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();
$geoplugin->locate();
$country_code = $geoplugin->countryCode;

switch( $country_code ) {
	case 'NL':
		header('Location: ' . get_option('redirect_NL', 'http://google.nl'));
		exit;
	case 'BE':
		header('Location: ' . get_option('redirect_BE', 'http://google.be'));
		exit;
	default:
		header('Location: ' . get_option('redirect_default', 'http://google.com'));
		exit;
}

?>