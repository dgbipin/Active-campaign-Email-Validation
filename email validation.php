add_action( 'elementor_pro/forms/validation/email', function( $field, $record, $ajax_handler ) {

   $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

    if ( preg_match( $pattern, $field['value'] ) !== 1 ) {
        $ajax_handler->add_error( $field['id'], 'Please make sure the email format is valid, eg: care@wellnessrelief.co' );
    }
}, 10, 3 );