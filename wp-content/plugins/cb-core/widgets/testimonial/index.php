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
class CB_Core_Testimonial extends Widget_Base
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
		return 'cb-testimonial';
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
		return __('CB Testimonial', 'cb-core');
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
			'testimonial_content',
			[
				'label' => __('Testimonial Content', 'cb-core'),
			]
		);
		$this->add_control(
		'section_title',
		 [
			'label'       => esc_html__( 'Section Title', 'cb-core' ),
			'condition' => [
				'layout' => ['layout-1']
			],
			'type'        => \Elementor\Controls_Manager::TEXT,
			'label_block' => true,
			'placeholder' => esc_html__( 'Section Title', 'cb-core' ),
		 ]
		);
		$this->add_control(
		'section_excerpt',
		 [
			'label'       => esc_html__( 'Section Excerpt', 'cb-core' ),
			'condition' => [
				'layout' => ['layout-1']
			],
			'type'        => \Elementor\Controls_Manager::TEXTAREA,
			'label_block' => true,
			'placeholder' => esc_html__( 'Section Excerpt', 'cb-core' ),
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
		  'select_testimonial_source',
		  [
			'label'   => esc_html__( 'Testimonial Source', 'cb-core' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'options' => [
			  'play-store'  => esc_html__( 'Play Store', 'cb-core' ),
			  'app-store'  => esc_html__( 'App Store', 'cb-core' ),
			],
			'default' => 'app-store',
			'condition' => [
				'field_condition' => [
					'style-1'
				]
			]
		  ]
		 );
		 
		  $repeater->add_control(
		   'star_rating',
		   [
			 'label'   => esc_html__( 'Star Rating', 'Text-domain' ),
			 'type'    => \Elementor\Controls_Manager::NUMBER,
			 'min'     => 0,
			 'max'     => 5,
			 'step'    => 5,
			 'default' => 5,
			 'condition' => [
				'field_condition' => ['style-1']
			 ] 
		   ]
		  );
		  $repeater->add_control(
		   'testimonial_content',
		   [
			 'label'       => esc_html__( 'Testimonial Content', 'Text-domain' ),
			 'type'        => \Elementor\Controls_Manager::TEXTAREA,
			 'rows'        => 10,
			 'placeholder' => esc_html__( 'Testimonial Content', 'Text-domain' ),
			 'label_block' => true,
			 'condition' => [
				'field_condition' => ['style-1']
			 ]
		   ]
		  );
		  $repeater->add_control(
		   'testimonal_author_section',
		   [
			 'label'       => esc_html__( 'Author Settings', 'Text-domain' ),
			 'type'      => \Elementor\Controls_Manager::HEADING,
			 'separator' => 'after',
			 'condition' => [
				'field_condition' => ['style-1']
			 ]
		   ]
		  );
		  $repeater->add_control(
		   'author_image',
		   [
			 'label'   => esc_html__( 'Author Image', 'Text-domain' ),
			 'type'    => \Elementor\Controls_Manager::MEDIA,
			 'label_block' => true,
			 'condition' => [
				'field_condition' => ['style-1']
			 ]
		   ]
		  );
		  $repeater->add_control(
		  'author_name',
		   [
			  'label'       => esc_html__( 'Author Name', 'Text-domain' ),
			  'type'        => \Elementor\Controls_Manager::TEXT,
			  'placeholder' => esc_html__( 'Author Name', 'Text-domain' ),
			  'label_block' => true,
			 'condition' => [
				'field_condition' => ['style-1']
			 ]
		   ]
		  );
		 $this->add_control(
		   'slides',
		   [
			 'label'       => esc_html__( 'Slides', 'cb-core' ),
			 'type'        => \Elementor\Controls_Manager::REPEATER,
			 'fields'      => $repeater->get_controls(),
			 'title_field' => '{{{ select_testimonial_source }}}',
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

Plugin::instance()->widgets_manager->register(new CB_Core_Testimonial());
