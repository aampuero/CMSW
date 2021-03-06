<?php
$radio_field = get_user_meta( get_current_user_id(), 'billing_'.$this->generate_name( $field[ 'woocommerce_extra_fields_setting_id_name' ] ), TRUE );
?>
<p class="form-row form-row-<?php echo $field[ 'woocommerce_extra_fields_setting_id_position' ] ?>">
    <label for="reg_<?php echo $field_name ?>">
        <?php _e( $field[ 'woocommerce_extra_fields_setting_id_name' ], $this->text_domain ); ?>
        <?php if( $field[ 'woocommerce_extra_fields_setting_id_required' ] == 'yes' ) : ?>
            <span class="required">*</span>
        <?php endif; ?>
    </label>
                       
    <?php 
    foreach( $field as $f ): ?>
        <?php if( is_array( $f ) ): ?>
            <?php if ($f[ 'woocommerce_extra_fields_setting_name_value' ] != ''): ?>
            <input type="radio"
                    id="billing_<?php echo $f[ 'woocommerce_extra_fields_setting_name_value' ];?>"
                    name="billing_<?php echo $this->generate_name( $field[ 'woocommerce_extra_fields_setting_id_name' ] ) ?>"
                       value="<?php echo $f[ 'woocommerce_extra_fields_setting_name_value' ] ?>"
	                <?php
    	                if( isset($radio_field) )
	                        checked($f[ 'woocommerce_extra_fields_setting_name_value' ], $radio_field)
	                    ?>
	            >           
            <?php else : ?>
            <label for=<?php echo 'billing_'.$f[ 'woocommerce_extra_fields_setting_name_label' ]; ?>>
                <?php echo $f[ 'woocommerce_extra_fields_setting_name_label' ]; ?> 
            </label>
        <?php endif; ?>
        
        <?php endif;?>
    <?php endforeach; ?>


</p>