<?php
/**
 * Initialize the custom Theme Options.
 *
 * @package OptionTree
 */

add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @since 2.0
 */
function custom_theme_options() {

	// OptionTree is not loaded yet, or this is not an admin request.
	if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() ) {
		return false;
	}

	/**
	 * Get a copy of the saved settings array.
	 */
	$saved_settings = get_option( ot_settings_id(), array() );

	/**
	 * Custom settings array that will eventually be
	 * passes to the OptionTree Settings API Class.
	 */
	$custom_settings = array(
		'contextual_help' => array(
			'content' => array(
				array(
					'id'      => 'option_types_help',
					'title'   => __( 'Option Types', 'theme-text-domain' ),
					'content' => '<p>' . __( 'Help content goes here!', 'theme-text-domain' ) . '</p>',
				),
			),
			'sidebar' => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>',
		),
		'sections'        => array(			
			array(
				'id'    => 'my_jobs',
				'title' => __( 'Мои работы', 'theme-text-domain' ),
			),
			array(
				'id'    => 'about_me',
				'title' => __( 'Мои контакты и коротко о себе', 'theme-text-domain' ),
			),
		),
		'settings'        => array(
			// Мои работы
			// Первая работа
			
			array(
				'id'           => 'info_text_jobs_1',
				'label'        => __( 'Поясняющий текст к работе 1', 'theme-text-domain' ),
				'desc'         => __( 'Короткий поясняющий текст', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'text',
				'section'      => 'my_jobs',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'img_upload_1',
				'label'        => __( 'Загрузка миниатюры работы 1', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Загрузка миниатюры работы', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),
				'std'          => '',
				'type'         => 'upload',
				'section'      => 'my_jobs',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'url_job_site_1',
				'label'        => __( 'Ссылка на сайт работы 1', 'theme-text-domain' ),
				'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'text',
				'section'      => 'my_jobs',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),

			// Вторая работа
			array(
				'id'           => 'info_text_jobs_2',
				'label'        => __( 'Поясняющий текст к работе 2', 'theme-text-domain' ),
				'desc'         => __( 'Короткий поясняющий текст', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'text',
				'section'      => 'my_jobs',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'img_upload_2',
				'label'        => __( 'Загрузка миниатюры работы 2', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Загрузка миниатюры работы', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),
				'std'          => '',
				'type'         => 'upload',
				'section'      => 'my_jobs',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'url_job_site_2',
				'label'        => __( 'Ссылка на сайт работы 2', 'theme-text-domain' ),
				'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'text',
				'section'      => 'my_jobs',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),

		
			// Дестяая работа
			array(
				'id'           => 'info_text_jobs_10',
				'label'        => __( 'Поясняющий текст к работе 10', 'theme-text-domain' ),
				'desc'         => __( 'Короткий поясняющий текст', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'text',
				'section'      => 'my_jobs',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'img_upload_10',
				'label'        => __( 'Загрузка миниатюры работы 10', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Загрузка миниатюры работы', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),
				'std'          => '',
				'type'         => 'upload',
				'section'      => 'my_jobs',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
			array(
				'id'           => 'url_job_site_10',
				'label'        => __( 'Ссылка на сайт работы 10', 'theme-text-domain' ),
				'desc'         => __( 'Ссылка на сайт', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'text',
				'section'      => 'my_jobs',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
		
			
			// Мои контакты и коротко о себе
			array(
				'id'           => 'vandraren_title',
				'label'        => __( 'Заголовок', 'theme-text-domain' ),
				'desc'         => __( 'Заголовок', 'theme-text-domain' ),
				'std'          => '',
				'type'         => 'text',
				'section'      => 'about_me',
				'rows'         => '',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),

			array(
				'id'           => 'vandraren_textarea',
				'label'        => __( 'Текст', 'theme-text-domain' ),
				'desc'         => sprintf( __( 'Текст контакты и обо мне', 'theme-text-domain' ) ),
				'std'          => '',
				'type'         => 'textarea',
				'section'      => 'about_me',
				'rows'         => '15',
				'post_type'    => '',
				'taxonomy'     => '',
				'min_max_step' => '',
				'class'        => '',
				'condition'    => '',
				'operator'     => 'and',
			),
		),
	);

	// Allow settings to be filtered before saving.
	$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

	// Settings are not the same update the DB.
	if ( $saved_settings !== $custom_settings ) {
		update_option( ot_settings_id(), $custom_settings );
	}

	// Lets OptionTree know the UI Builder is being overridden.
	global $ot_has_custom_theme_options;
	$ot_has_custom_theme_options = true;
}
