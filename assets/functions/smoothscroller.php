<?php
add_action( 'admin_menu', 'sms_add_admin_menu' );
add_action( 'admin_init', 'sms_settings_init' );


function sms_add_admin_menu(  ) { 

	add_options_page( 'Smooth Scroller', 'Smooth Scroller', 'manage_options', 'smooth_scroller', 'sms_options_page' );

}


function sms_settings_init(  ) { 

	register_setting( 'pluginPage', 'sms_settings' );

	add_settings_section(
		'sms_pluginPage_section', 
		__( 'WORK IN PROGRESS', 'wordpress' ), 
		'sms_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'sms_checkbox_field_0', 
		__( 'Enable Smooth Scrolling!', 'wordpress' ), 
		'sms_checkbox_field_0_render', 
		'pluginPage', 
		'sms_pluginPage_section' 
	);


}


function sms_checkbox_field_0_render(  ) { 

	$options = get_option( 'sms_settings' );
	?>
	<input type='checkbox' name='sms_settings[sms_checkbox_field_0]' <?php checked( $options['sms_checkbox_field_0'], 1 ); ?> value='1'>
	<?php

}


function sms_settings_section_callback(  ) { 

	echo __( 'This quick plugin will enable smooth scrolling on any website this theme is connected too.', 'wordpress' );

}


function sms_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>Smooth Scroller</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>