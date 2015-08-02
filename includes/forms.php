<?php
    
    // This function forces jQuery calls to be loaded in the footer after all other scripts
    if (!function_exists('init_scripts')) {
        function init_scripts(){
            return true;
        }
    }

    // if(!function_exists('gf_custom_class')){
    //        function gf_custom_class($input, $field, $value, $lead_id, $form_id){
    //         if( $form_id == 2 && $field['type'] == 'name'){
    //             $input = '<input name="input_1" id="input_2_1" type="text" value="Name" class="contact-form-line" tabindex="1">';
    //         }elseif($form_id == 2 && $field['type'] == 'email'){
    //             $input = '<input name="input_2" id="input_2_2" type="text" value="Email" class="contact-form-line" tabindex="2">';
    //         }elseif($form_id == 2 && $field['type'] == 'website'){
    //             $input = '<input name="input_1" id="input_2_3" type="text" value="Website" class="contact-form-line" tabindex="3">';
    //         }elseif($form_id == 2 && $field['type'] == 'textarea'){
    //             $input = '<textarea name="input_4" id="input_2_4" class="contact-form-line" tabindex="3" rows="9" cols="50">Message</textarea>';
    //         }
    //         return $input;
    //     }     
    // }

    // filter the Gravity Forms button type 
    // function form_submit_button($button, $form){
    //     return "<input type='submit' id='gform_submit_button_{$form["id"]}' value='Send' class='button-2 bold d-text-c d-text-c-h'>";
    // }

    