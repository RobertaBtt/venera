<?php
/**
 * Twenty Fourteen Customizer support
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Venera
 */

/**
 * Implement Customizer additions and adjustments.
 *
 * @since Venera
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function venera_customize_register( $wp_customize ) {
	// Add postMessage support for site title and description.
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector' => '.site-title a',
			'container_inclusive' => false,
			'render_callback' => 'venera_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector' => '.site-description',
			'container_inclusive' => false,
			'render_callback' => 'venera_customize_partial_blogdescription',
		) );
	}

	// Rename the label to "Site Title Color" because this only affects the site title in this theme.
	$wp_customize->get_control( 'header_textcolor' )->label = __( 'Site Title Color', 'venera' );

	// Rename the label to "Display Site Title & Tagline" in order to make this option extra clear.
	$wp_customize->get_control( 'display_header_text' )->label = __( 'Display Site Title &amp; Tagline', 'venera' );

	// Add custom description to Colors and Background controls or sections.
	if ( property_exists( $wp_customize->get_control( 'background_color' ), 'description' ) ) {
		$wp_customize->get_control( 'background_color' )->description = __( 'May only be visible on wide screens.', 'venera' );
		$wp_customize->get_control( 'background_image' )->description = __( 'May only be visible on wide screens.', 'venera' );
	} else {
		$wp_customize->get_section( 'colors' )->description           = __( 'Background may only be visible on wide screens.', 'venera' );
		$wp_customize->get_section( 'background_image' )->description = __( 'Background may only be visible on wide screens.', 'venera' );
	}

	// Add the featured content section in case it's not already there.
	$wp_customize->add_section( 'featured_content', array(
		'title'           => __( 'Featured Content', 'venera' ),
		'description'     => sprintf( __( 'Use a <a href="%1$s">tag</a> to feature your posts. If no posts match the tag, <a href="%2$s">sticky posts</a> will be displayed instead.', 'venera' ),
			esc_url( add_query_arg( 'tag', _x( 'featured', 'featured content default tag slug', 'venera' ), admin_url( 'edit.php' ) ) ),
			admin_url( 'edit.php?show_sticky=1' )
		),
		'priority'        => 130,
		'active_callback' => 'is_front_page',
	) );

	// Add the featured content layout setting and control.
	$wp_customize->add_setting( 'featured_content_layout', array(
		'default'           => 'grid',
		'sanitize_callback' => 'venera_sanitize_layout',
	) );

	$wp_customize->add_control( 'featured_content_layout', array(
		'label'   => __( 'Layout', 'venera' ),
		'section' => 'featured_content',
		'type'    => 'select',
		'choices' => array(
			'grid'   => __( 'Grid',   'venera' ),
			'slider' => __( 'Slider', 'venera' ),
		),
	) );
}
add_action( 'customize_register', 'venera_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Twenty Fourteen 1.7
 * @see venera_customize_register()
 *
 * @return void
 */
function venera_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Twenty Fourteen 1.7
 * @see venera_customize_register()
 *
 * @return void
 */
function venera_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Sanitize the Featured Content layout value.
 *
 * @since Venera
 *
 * @param string $layout Layout type.
 * @return string Filtered layout type (grid|slider).
 */
function venera_sanitize_layout( $layout ) {
	if ( ! in_array( $layout, array( 'grid', 'slider' ) ) ) {
		$layout = 'grid';
	}

	return $layout;
}

/**
 * Bind JS handlers to make Customizer preview reload changes asynchronously.
 *
 * @since Venera
 */
function venera_customize_preview_js() {
	wp_enqueue_script( 'venera_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20131205', true );
}
add_action( 'customize_preview_init', 'venera_customize_preview_js' );

/**
 * Add contextual help to the Themes and Post edit screens.
 *
 * @since Venera
 */
function venera_contextual_help() {
	if ( 'admin_head-edit.php' === current_filter() && 'post' !== $GLOBALS['typenow'] ) {
		return;
	}

	get_current_screen()->add_help_tab( array(
		'id'      => 'venera',
		'title'   => __( 'Twenty Fourteen', 'venera' ),
		'content' =>
			'<ul>' .
				'<li>' . sprintf( __( 'The home page features your choice of up to 6 posts prominently displayed in a grid or slider, controlled by a <a href="%1$s">tag</a>; you can change the tag and layout in <a href="%2$s">Appearance &rarr; Customize</a>. If no posts match the tag, <a href="%3$s">sticky posts</a> will be displayed instead.', 'venera' ), esc_url( add_query_arg( 'tag', _x( 'featured', 'featured content default tag slug', 'venera' ), admin_url( 'edit.php' ) ) ), admin_url( 'customize.php' ), admin_url( 'edit.php?show_sticky=1' ) ) . '</li>' .
				'<li>' . sprintf( __( 'Enhance your site design by using <a href="%s">Featured Images</a> for posts you&rsquo;d like to stand out (also known as post thumbnails). This allows you to associate an image with your post without inserting it. Twenty Fourteen uses featured images for posts and pages&mdash;above the title&mdash;and in the Featured Content area on the home page.', 'venera' ), 'https://codex.wordpress.org/Post_Thumbnails#Setting_a_Post_Thumbnail' ) . '</li>' .
				'<li>' . sprintf( __( 'For an in-depth tutorial, and more tips and tricks, visit the <a href="%s">Twenty Fourteen documentation</a>.', 'venera' ), 'https://codex.wordpress.org/Twenty_Fourteen' ) . '</li>' .
			'</ul>',
	) );
}
add_action( 'admin_head-themes.php', 'venera_contextual_help' );
add_action( 'admin_head-edit.php',   'venera_contextual_help' );
