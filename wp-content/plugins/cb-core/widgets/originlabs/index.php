<?php

namespace Elementor;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

if (!defined('ABSPATH') && !class_exists('WooCommerce'))
  exit; // Exit if accessed directly or not have woocommerece

/**
 * CB Core Demo
 *
 * CB Core widget for Demo.
 *
 * @since 1.0.0
 */
class CB_Core_Originlabs extends Widget_Base
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
    return 'cb-originlabs';
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
    return __('CB Originlabs', 'cb-core');
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
      'originlabs_content',
      [
        'label' => __('Originlabs Content', 'cb-core'),
      ]
    );
    $this->add_control(
      'reverce_originlabs',
      [
        'label' => esc_html__('Reverce originlabs?', 'Text-domain'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', 'Text-domain'),
        'label_off' => esc_html__('Hide', 'Text-domain'),
        'return_value' => 'yes',
      ]
    );
    $this->add_control(
      'originlabs_image',
      [
        'label' => esc_html__('Originlabs Image', 'cb-core'),
        'label_block' => true,
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
          'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
        'condition' => [
          'layout' => ['layout-1']
        ]
      ]
    );
    $this->add_control(
      'originlabs_button_image',
      [
        'label' => esc_html__('Originlabs Button Image h', 'cb-core'),
        'label_block' => true,
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
          'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
        'condition' => [
          'layout' => ['layout-1']
        ]
      ]
    );
    $this->add_control(
      'originlabs_button_image2',
      [
        'label' => esc_html__('Originlabs Button Image2', 'cb-core'),
        'label_block' => true,
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
          'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
        'condition' => [
          'layout' => ['layout-1']
        ]
      ]
    );

    $this->add_control(
      'originlabs_title',
      [
        'label' => esc_html__('Originlabs Title', 'cb-core'),
        'label_block' => true,
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [
          'layout' => ['layout-1']
        ]
      ]
    );
    $this->add_control(
      'button_link',
      [
        'label' => esc_html__('Button URL', 'cb-core'),
        'label_block' => true,
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => esc_html__('Button url here', 'cb-core'),
        'condition' => [
          'layout' => ['layout-1']
        ]
      ]
    );
    $this->add_control(
      'button_link2',
      [
        'label' => esc_html__('Button URL2', 'cb-core'),
        'label_block' => true,
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => esc_html__('Button url here', 'cb-core'),
        'condition' => [
          'layout' => ['layout-1']
        ]
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

Plugin::instance()->widgets_manager->register(new CB_Core_Originlabs());