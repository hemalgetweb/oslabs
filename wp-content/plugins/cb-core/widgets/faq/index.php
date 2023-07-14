<?php

namespace Elementor;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use ELementor\Repeater;

if (!defined('ABSPATH') && !class_exists('WooCommerce')) exit; // Exit if accessed directly or not have woocommerece

/**
 * CB Core Demo
 *
 * CB Core widget for Demo.
 *
 * @since 1.0.0
 */
class CB_Core_Faq extends Widget_Base
{

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'cb-faq';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title()
	{
		return __('CB Faq', 'cb-core');
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon()
	{
		return 'eicon-post-list';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories()
	{
		return ['cb-cat'];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends()
	{
		return ['cb-core'];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function register_controls()
	{
		$this->start_controls_section(
			'section_select_layout',
			[
				'label' => __('Layout', 'cb-core'),
			]
		);
		$this->add_control(
			'layout',
			[
				'label' => __('Layout', 'cb-core'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'layout-1' => __('Layout 1', 'cb-core'),
				],
				'default' => 'layout-1',
				'toggle' => true,
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'faq_content',
			[
				'label' => __('Faq Content', 'cb-core'),
			]
		);
		
		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
		 'field_condition',
		 [
		   'label'   => esc_html__( 'Field Condition', 'cb-core' ),
		   'type' => \Elementor\Controls_Manager::SELECT,
		   'options' => [
			 'style-1'  => esc_html__( 'Style 1', 'cb-core' ),
		   ],
		   'default' => 'style-1',
		 ]
		); 
		$repeater->add_control(
			'faq_title',
			[
				'label'       => esc_html__( 'Faq Title', 'cb-core' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'Faq Title', 'cb-core' ),
				'condition' => [
					'field_condition' => ['style-1']
				]
			]
		);
		$repeater->add_control(
			'faq_content',
			[
				'label'       => esc_html__( 'Faq Content', 'cb-core' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'placeholder' => esc_html__( 'Faq Content', 'cb-core' ),
				'condition' => [
					'field_condition' => ['style-1']
				]
			]
		);
		 $this->add_control(
		   'slides',
		   [
			 'label'       => esc_html__( 'Section Label', 'cb-core' ),
			 'type'        => \Elementor\Controls_Manager::REPEATER,
			 'fields'      => $repeater->get_controls(),
			 'title_field' => '{{{ faq_title }}}',
		   ]
		 );


		$this->end_controls_section();
		$this->start_controls_section(
			'section_style',
			[
				'label' => __('Style', 'cb-core'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render()
	{

		$settings = $this->get_settings();
		global $product;
?>
        <?php include dirname(__FILE__) . '/' . $settings['layout'] . '.php';
	}
}

Plugin::instance()->widgets_manager->register(new CB_Core_Faq());
