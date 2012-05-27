<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'rd-mkt_options', 'rd-mkt_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'wptheme-rd-mkt' ), __( 'Theme Options', 'wptheme-rd-mkt' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create the options page
 */
function theme_options_do_page() {

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . __( ' Theme Options', 'wptheme-rd-mkt' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'wptheme-rd-mkt' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'rd-mkt_options' ); ?>
			<?php 
				$default_options = array(
				  'header_title' => 'Tema de Wordpress para aprimorar seu blog',
				  'header_desc' => 'Tema <em>clean</em>, ajustes de SEO, engajamento com redes sociais, páginas otimizadas para conversão, etc.',
				  'footer_desc' => '<p>A Resultados Digitais é uma empresa especializada em <strong>Marketing Digital de resultado para Médias e Pequenas empresas</strong>.</p><p>Através de uma plataforma própria de software, o <a href="http://www.rdstation.com.br/" target="_blank">RD Station</a>, e de serviços de consultoria, ajudamos nossos clientes a gerar mais e melhores visitas e oportunidades (Leads) para seus negócios e a construir um sólido ativo de Marketing Digital.</p><a href="http://resultadosdigitais.com.br/sobre/">→ Clique aqui para conhecer mais</a>.',
				  'logo_url' => get_bloginfo( 'stylesheet_directory' ) . '/images/logo.png',
				  'logo_link' => get_bloginfo( 'siteurl' ),
				  'contact_link' => 'http://resultadosdigitais.com.br/contato/',
				  'webprofile_twitter' => 'ResDigitais',
				  'webprofile_facebook' => 'ResultadosDigitais',
				  'webprofile_linkedin_id' => '123456',
				  'webprofile_linkedin_url' => 'company/ResultadosDigitais',
				  'webprofile_feedburner' => 'ResDigitais'
				);
				$options = get_option( 'rd-mkt_theme_options' ); 
			?>

			<table class="form-table">

				<tr valign="top"><th scope="row"><?php _e( 'Logo Image URL', 'wptheme-rd-mkt' ); ?></th>
					<td>
						<input id="rd-mkt_theme_options[logo_url]" class="regular-text" type="text" name="rd-mkt_theme_options[logo_url]" value="<?php esc_attr_e( $options['logo_url'] ); ?>" />
						<label class="description" for="rd-mkt_theme_options[logo_url]"><small><?php _e( 'Company or product logo (360px x 110px)', 'wptheme-rd-mkt' ); ?></small></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Logo Link', 'wptheme-rd-mkt' ); ?></th>
					<td>
						<input id="rd-mkt_theme_options[logo_link]" class="regular-text" type="text" name="rd-mkt_theme_options[logo_link]" value="<?php esc_attr_e( $options['logo_link'] ); ?>" />
						<label class="description" for="rd-mkt_theme_options[logo_ink]"><small><?php _e( 'Home link at the logo', 'wptheme-rd-mkt' ); ?></small></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Blog header title', 'wptheme-rd-mkt' ); ?></th>
					<td>
						<input id="rd-mkt_theme_options[header_title]" class="regular-text" type="text" name="rd-mkt_theme_options[header_title]" value="<?php esc_attr_e( $options['header_title'] ); ?>" />
						<label class="description" for="rd-mkt_theme_options[header_title]"><small><?php _e( 'A short title about blog content', 'wptheme-rd-mkt' ); ?></small></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Blog header description', 'wptheme-rd-mkt' ); ?></th>
					<td>
						<input id="rd-mkt_theme_options[header_desc]" class="regular-text" type="text" name="rd-mkt_theme_options[header_desc]" value="<?php esc_attr_e( $options['header_desc'] ); ?>" />
						<label class="description" for="rd-mkt_theme_options[header_desc]"><small><?php _e( 'A more descriptive (but short) text about blog content', 'wptheme-rd-mkt' ); ?></small></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Blog footer description', 'wptheme-rd-mkt' ); ?></th>
					<td>
						<textarea id="rd-mkt_theme_options[footer_desc]" class="large-text" cols="50" rows="5" name="rd-mkt_theme_options[footer_desc]"><?php echo esc_textarea( $options['footer_desc'] ); ?></textarea>
						<label class="description" for="rd-mkt_theme_options[footer_desc]"><?php _e( 'An introduction text about the company or product', 'wptheme-rd-mkt' ); ?></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'URL to contact page', 'wptheme-rd-mkt' ); ?></th>
					<td>
						<input id="rd-mkt_theme_options[contact_link]" class="regular-text" type="text" name="rd-mkt_theme_options[contact_link]" value="<?php esc_attr_e( $options['contact_link'] ); ?>" />
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Twitter profile name', 'wptheme-rd-mkt' ); ?></th>
					<td>
						<input id="rd-mkt_theme_options[webprofile_twitter]" class="regular-text" type="text" name="rd-mkt_theme_options[webprofile_twitter]" value="<?php esc_attr_e( $options['webprofile_twitter'] ); ?>" />
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Facebook page slug', 'wptheme-rd-mkt' ); ?></th>
					<td>
						<input id="rd-mkt_theme_options[webprofile_facebook]" class="regular-text" type="text" name="rd-mkt_theme_options[webprofile_facebook]" value="<?php esc_attr_e( $options['webprofile_facebook'] ); ?>" />
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Linkedin page id', 'wptheme-rd-mkt' ); ?></th>
					<td>
						<input id="rd-mkt_theme_options[webprofile_linkedin_id]" class="regular-text" type="text" name="rd-mkt_theme_options[webprofile_linkedin_id]" value="<?php esc_attr_e( $options['webprofile_linkedin_id'] ); ?>" />
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Linkedin page slug', 'wptheme-rd-mkt' ); ?></th>
					<td>
						<input id="rd-mkt_theme_options[webprofile_linkedin_url]" class="regular-text" type="text" name="rd-mkt_theme_options[webprofile_linkedin_url]" value="<?php esc_attr_e( $options['webprofile_linkedin_url'] ); ?>" />
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Feedburner name', 'wptheme-rd-mkt' ); ?></th>
					<td>
						<input id="rd-mkt_theme_options[webprofile_feedburner]" class="regular-text" type="text" name="rd-mkt_theme_options[webprofile_feedburner]" value="<?php esc_attr_e( $options['webprofile_feedburner'] ); ?>" />
					</td>
				</tr>

			</table>

			<p class="submit">
				<input type="hidden" name="rd-mkt_theme_options[options_edited]" value="true" />
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'wptheme-rd-mkt' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {

	/**
	* // Our checkbox value is either 0 or 1
	* if ( ! isset( $input['option1'] ) )
	* 	$input['option1'] = null;
	* $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
	* 
	* // Say our text option must be safe text with no HTML tags
	* $input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );
	* 
	* // Our select option must actually be in our array of select options
	* if ( ! array_key_exists( $input['selectinput'], $select_options ) )
	* 	$input['selectinput'] = null;
	* 
	* // Our radio option must actually be in our array of radio options
	* if ( ! isset( $input['radioinput'] ) )
	* 	$input['radioinput'] = null;
	* if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
	* 	$input['radioinput'] = null;
	*/

	// Say our input and textarea options must be safe text with the allowed tags for posts
	$input['header_title'] = wp_filter_post_kses( $input['header_title'] );
	$input['header_desc'] = wp_filter_post_kses( $input['header_desc'] );
	$input['footer_desc'] = wp_filter_post_kses( $input['footer_desc'] );

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/