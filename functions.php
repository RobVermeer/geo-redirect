<?php

function my_general_section() {  
	add_settings_section(  
		'redirect_options',
		'Redirect options',
		'redirect_option_cb',
		'general'
	);

	add_settings_field(
		'redirect_default',
		'Redirect no match',
		'redirect_option_input_cb',
		'general',
		'redirect_options',
		array(
			'redirect_default'
		)  
	); 

	add_settings_field(
		'redirect_NL',
		'Redirect NL',
		'redirect_option_input_cb',
		'general',
		'redirect_options',
		array(
			'redirect_NL'
		)  
	); 

	add_settings_field(
		'redirect_BE',
		'Redirect BE',
		'redirect_option_input_cb',
		'general',
		'redirect_options',
		array(
			'redirect_BE'
		)  
	); 

	register_setting('general','redirect_default');
	register_setting('general','redirect_NL');
	register_setting('general','redirect_BE');
}
add_action('admin_init', 'my_general_section');  

function redirect_option_cb() {
	echo '<p>Set local redirects</p>';  
}

function redirect_option_input_cb( $args ) {
	$option = get_option($args[0]);
	?>
	<input class="regular-text" type="url" id="<?php echo $args[0]; ?>" name="<?php echo $args[0]; ?>" value="<?php echo $option; ?>">
	<?php
}

?>