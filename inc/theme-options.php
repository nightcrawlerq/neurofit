<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'my_options', 'my_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( 'Theme Options', 'Theme Options', 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create the options page
 */
function theme_options_do_page() {

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() .  ' Theme Options' . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong>Options saved</strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'my_options' ); ?>
			<?php $options = get_option( 'my_theme_options' ); ?>
			<?php $contact_urls = $options['contact_urls']; //print_r($top_urls); ?>
			<?php $top_urls = $options['top_urls']; //print_r($top_urls); ?>
			<table class="form-table">
				
				<?php
				/**
				 * Facebook url
				 */
				?>
				<tr valign="top"><th scope="row">Facebook url</th>
					<td>
						<input id="my_theme_options[top_urls][fb]" class="regular-text" type="text" name="my_theme_options[top_urls][fb]" value="<?php echo $top_urls['fb']; ?>" />
					</td>
				</tr>
				
				<?php
				/**
				 * Twitter url
				 */
				?>
				<tr valign="top"><th scope="row">Twitter url</th>
					<td>
						<input id="my_theme_options[top_urls][tw]" class="regular-text" type="text" name="my_theme_options[top_urls][tw]" value="<?php echo $top_urls['tw'] ; ?>" />
					</td>
				</tr>
				
				<?php
				/**
				 * Youtube url
				 */
				?>
				<tr valign="top"><th scope="row">Youtube url</th>
					<td>
						<input id="my_theme_options[top_urls][yt]" class="regular-text" type="text" name="my_theme_options[top_urls][yt]" value="<?php echo $top_urls['yt']; ?>" />
					</td>
				</tr>

				<?php
				/**
				 * Contact url
				 */
				?>
				<tr valign="top"><th scope="row">Contact url</th>
					<td>
						<input id="my_theme_options[contact_urls][contact]" class="regular-text" type="text" name="my_theme_options[contact_urls][contact]" value="<?php echo $contact_urls['contact']; ?>" />
					</td>
				</tr>

				<?php
				/**
				 * Brochure url
				 */
				?>
				<tr valign="top"><th scope="row">Brochure url</th>
					<td>
						<input id="my_theme_options[contact_urls][brochure]" class="regular-text" type="text" name="my_theme_options[contact_urls][brochure]" value="<?php echo $contact_urls['brochure']; ?>" />
					</td>
				</tr>
				
				<?php
				/**
				 * Members url
				 */
				 $header_options = $options['header_options'];
				?>
				<tr valign="top"><th scope="row">Header button url</th>
					<td>
						<input id="my_theme_options[header_options][header_url]" class="regular-text" type="text" name="my_theme_options[header_options][header_url]" value="<?php esc_attr_e( $header_options['header_url'] ); ?>" />
					</td>
				</tr>
				
				<?php
				/**
				 * Members url
				 */
				?>
				<tr valign="top"><th scope="row">Header button text</th>
					<td>
						<input id="my_theme_options[header_options][header_text]" class="regular-text" type="text" name="my_theme_options[header_options][header_text]" value="<?php esc_attr_e( $header_options['header_text'] ); ?>" />
					</td>
				</tr>
				

				<?php
				/**
				 * Footer Copy text
				 */
				?>
				<tr valign="top"><th scope="row">Footer Copy text</th>
					<td>
						<input id="my_theme_options[footer_copy]" class="regular-text" type="text" name="my_theme_options[footer_copy]" value="<?php esc_attr_e( $options['footer_copy'] ); ?>" />
						<label class="description" for="my_theme_options[footer_copy]">&copy; {footer copy text}</label>
					</td>
				</tr>
				
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="Save Options" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {

	$return['top_urls'] = $input['top_urls'];
	$return['contact_urls'] = $input['contact_urls'];
	$return['header_options'] = $input['header_options'];
	$return['footer_copy'] = wp_filter_nohtml_kses( $input['footer_copy'] );


	return $return;
}
