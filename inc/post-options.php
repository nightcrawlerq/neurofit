<?php
/* Define the custom box */

add_action( 'add_meta_boxes', 'myplugin_add_custom_box' );

add_action( 'save_post', 'mybox_save_postdata' );

function myplugin_add_custom_box() {
    add_meta_box( 
        'eventdata',
        'Event data',
        'eventdata_box',
        'events' 
    );
}

/* Prints the box content */
function eventdata_box( $post, $metabox ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'noncename' );

  $value = json_decode(get_post_meta($post->ID,'boxoption',true));
	//print_r($value);
	//echo date('n/j/y',$value->date);
	echo '<p><label for="event_date">Date</label>  <input type="date" id="event_date" name="boxoption[date]" value="'.date('y-m-d',$value->date).'" size="25" /></p>';
	echo '<p><label for="event_time">Time</label>  <input type="text" id="event_time" name="boxoption[time]" value="'.$value->time.'" size="25" /></p>';
	echo '<p><label for="event_location">Location</label>  <input type="text" id="event_location" name="boxoption[location]" value="'.$value->location.'" size="25" /></p>';
}

/* When the post is saved, saves our custom data */
function mybox_save_postdata( $post_id ) {

  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  if ( !wp_verify_nonce( $_POST['noncename'], plugin_basename( __FILE__ ) ) )
      return;

  if ( 'page' == $_POST['post_type'] ) 
  {
    if ( !current_user_can( 'edit_page', $post_id ) )
        return;
  }
  else
  {
    if ( !current_user_can( 'edit_post', $post_id ) )
        return;
  }

  // OK, we're authenticated: we need to find and save the data

  //if saving in a custom table, get post_ID
  $post_ID = $_POST['post_ID'];
  //sanitize user input
  $mydata['date'] = strtotime(sanitize_text_field( $_POST['boxoption']['date'] ));
  $mydata['time'] = sanitize_text_field( $_POST['boxoption']['time'] );
  $mydata['location'] = sanitize_text_field( $_POST['boxoption']['location'] );
  $save = json_encode($mydata);

	add_post_meta($post_ID, 'boxoption', $save, true) or
    update_post_meta($post_ID, 'boxoption', $save);
}
