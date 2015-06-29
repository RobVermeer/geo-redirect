<?php

require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();
$geoplugin->locate();
$country_code = $geoplugin->countryCode;

switch( $country_code ) {
	case 'NL':
		header('Location: http://subbacultcha.nl');
		exit;
	case 'BE':
		header('Location: http://subbacultcha.nl');
		exit;
	default:
		header('Location: http://subbacultcha.nl');
		exit;
}

?>