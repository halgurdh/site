<?php

namespace ElementorModula\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Modula_Elementor_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'modula_elementor_gallery';
	}

	public function get_title() {
		return esc_html__( 'Modula', 'modula-best-grid-gallery' );
	}

	public function get_icon() {
		return 'eicon-elementor-square';
	}

	public function get_categories() {
		return array( 'general' );

	}

	protected function _register_controls() {
		$this->start_controls_section(
			'content_section',
			array(
				'label' => esc_html__( 'Content', 'modula-best-grid-gallery' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'modula_gallery_select',
			array(
				'label'   => esc_html__( 'Select Gallery', 'modula-best-grid-gallery' ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'options' => $this->get_galleries(),
				'default' => 'none',
			)
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings   = $this->get_settings_for_display();
		$gallery_id = $settings['modula_gallery_select'];
		if ( 'none' != $gallery_id ) {
			echo do_shortcode( '[Modula id="' . esc_attr( $gallery_id ) . '"]' );
		}

	}


	public function get_galleries() {

		$galleries     = get_posts( array( 'post_type' => 'modula-gallery' ) );
		$gallery_array = array( 'none' => esc_html__( 'None', 'modula-best-grid-gallery' ) );
		foreach ( $galleries as $gallery ) {
			$gallery_array[ $gallery->ID ] = esc_html( $gallery->post_title );
		}

		return $gallery_array;
	}

}