<?php
function storefit_upsale_setting( $wp_customize ) {
	
	$wp_customize->add_section(
        'retailsy_upsale',
        array(
            'title' 		=> __('More Features in Storefit Pro','storefit'),
			'priority'      => 1,
		)
    );
	
	/*=========================================
	 Buttons
	=========================================*/
	
	class Express_Store_Button_Customize_Control extends WP_Customize_Control {
	public $type = 'retailsy_upsale';

	   function render_content() {
		?>
			<div class="upsale_info">
				<ul>
					<li><a href="https://preview.sellerthemes.com/pro/storefit/" class="btn-secondary" target="_blank"><i class="dashicons dashicons-desktop"></i><?php _e( 'Pro Demo','storefit' ); ?> </a></li>
					
					<li><a href="https://sellerthemes.com/storefit-premium/" class="btn-primary" target="_blank"><i class="dashicons dashicons-cart"></i><?php _e( 'Purchase Now','storefit' ); ?> </a></li>
					
					<li><a href="https://sellerthemes.ticksy.com/" class="btn-secondary" target="_blank"><i class="dashicons dashicons-sos"></i><?php _e( 'Ask for Support','storefit' ); ?> </a></li>
					
					<li><a href="https://wordpress.org/support/theme/storefit/reviews/#new-post" class="btn-green" target="_blank"><i class="dashicons dashicons-heart"></i><?php _e( 'Give us Rating','storefit' ); ?> </a></li>
				</ul>
			</div>
		<?php
	   }
	}
	
	$wp_customize->add_setting(
		'retailsy_upsale_btns',
		array(
		   'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_text',
		)	
	);
	
	$wp_customize->add_control( new Express_Store_Button_Customize_Control( $wp_customize, 'retailsy_upsale_btns', array(
		'section' => 'retailsy_upsale',
    ))
);
}
add_action( 'customize_register', 'storefit_upsale_setting',9999 );