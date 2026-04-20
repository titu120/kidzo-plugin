<?php

use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Css_Filter;

defined('ABSPATH') || die();

class FT_Testimonial7_Widget extends \Elementor\Widget_Base
{

    /*
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
    public function get_name()
    {
        return 'ft-testimonial7';
    }

    /**
     * Get widget title.
     *
     * Retrieve rsgallery widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title()
    {
        return esc_html__('FT Testimonial 7', 'ftelements');
    }

    /**
     * Get widget icon.
     *
     * Retrieve rsgallery widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'tp-icon';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the rsgallery widget belongs to.
     *
     * @since 1.0.0
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories()
    {
        return ['pielements_category'];
    }

    /**
     * Register rsgallery widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls()
    {
        $theme_uri = get_template_directory_uri();

        $this->start_controls_section(
            'testimonial7_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Testimonials', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Parents' Words Are The Key\nTo Happy Kids", 'ftelements'),
                'rows' => 3,
            ]
        );

        $this->add_control(
            'img_girl_shape',
            [
                'label' => esc_html__('Decor: Girl Shape', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/girl-shape.png',
                ],
            ]
        );

        $this->add_control(
            'img_zirap',
            [
                'label' => esc_html__('Decor: Zirap Shape', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/zirap.png',
                ],
            ]
        );

        $this->add_control(
            'img_card_bg',
            [
                'label' => esc_html__('Card Background Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/inner-page/testi-bg.png',
                ],
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'client_image',
            [
                'label' => esc_html__('Client Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'client_title',
            [
                'label' => esc_html__('Client Title', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Parent of Nursery Student', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'client_review',
            [
                'label' => esc_html__('Review', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('This school has provided a safe, caring, and joyful environment for my child.', 'ftelements'),
            ]
        );

        $this->add_control(
            'testimonial_items',
            [
                'label' => esc_html__('Testimonials', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ client_title }}}',
                'default' => [
                    [
                        'client_image' => ['url' => $theme_uri . '/assets/img/home-2/client-1.png'],
                        'client_title' => esc_html__('Parent of Nursery Student', 'ftelements'),
                        'client_review' => esc_html__('This school has provided a safe, caring, and joyful environment for my child.', 'ftelements'),
                    ],
                    [
                        'client_image' => ['url' => $theme_uri . '/assets/img/home-2/client-2.png'],
                        'client_title' => esc_html__('Parent of Nursery Student', 'ftelements'),
                        'client_review' => esc_html__('This school has provided a safe, caring, and joyful environment for my child.', 'ftelements'),
                    ],
                    [
                        'client_image' => ['url' => $theme_uri . '/assets/img/home-2/client-3.png'],
                        'client_title' => esc_html__('Parent of Nursery Student', 'ftelements'),
                        'client_review' => esc_html__('This school has provided a safe, caring, and joyful environment for my child.', 'ftelements'),
                    ],
                    [
                        'client_image' => ['url' => $theme_uri . '/assets/img/home-2/client-4.png'],
                        'client_title' => esc_html__('Parent of Nursery Student', 'ftelements'),
                        'client_review' => esc_html__('This school has provided a safe, caring, and joyful environment for my child.', 'ftelements'),
                    ],
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_section_align',
            [
                'label' => esc_html__('Content Alignment', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => esc_html__('Left', 'ftelements'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'flex-end' => [
                        'title' => esc_html__('Right', 'ftelements'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .container' => 'display: flex; flex-direction: column; align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'style_section_background',
                'selector' => '{{WRAPPER}} .testimonial-section-2',
            ]
        );

        $this->add_responsive_control(
            'style_section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_section_min_height',
            [
                'label' => esc_html__('Min Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1200],
                    'vh' => ['min' => 0, 'max' => 100],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_container_max_width',
            [
                'label' => esc_html__('Container Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 200, 'max' => 1920],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .container' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_container_padding',
            [
                'label' => esc_html__('Container Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_heading',
            [
                'label' => esc_html__('Heading', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_heading_text_align',
            [
                'label' => esc_html__('Text Align', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'ftelements'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'ftelements'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .section-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_heading_width',
            [
                'label' => esc_html__('Heading Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1400],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .section-title' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_heading_margin_bottom',
            [
                'label' => esc_html__('Heading Bottom Spacing', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 200],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .section-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_subtitle_heading',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'style_subtitle_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'style_subtitle_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'style_subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_title_heading',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'style_title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .tx-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'style_title_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .tx-title',
            ]
        );

        $this->add_responsive_control(
            'style_title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .tx-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_decor',
            [
                'label' => esc_html__('Decorative Shapes', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'style_girl_heading',
            [
                'label' => esc_html__('Girl Shape', 'ftelements'),
                'type' => Controls_Manager::HEADING,
            ]
        );

        $this->add_responsive_control(
            'style_girl_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .girl-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_girl_max_width',
            [
                'label' => esc_html__('Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .girl-shape img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_girl_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.05,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .girl-shape' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_girl_offset_x',
            [
                'label' => esc_html__('Horizontal Offset', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => -500, 'max' => 500],
                    '%' => ['min' => -100, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .girl-shape' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_girl_offset_y',
            [
                'label' => esc_html__('Vertical Offset', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => -500, 'max' => 500],
                    '%' => ['min' => -100, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .girl-shape' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_zirap_heading',
            [
                'label' => esc_html__('Zirap Shape', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'style_zirap_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .zirap-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_zirap_max_width',
            [
                'label' => esc_html__('Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .zirap-shape img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_zirap_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.05,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .zirap-shape' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_zirap_offset_x',
            [
                'label' => esc_html__('Horizontal Offset', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => -500, 'max' => 500],
                    '%' => ['min' => -100, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .zirap-shape' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_zirap_offset_y',
            [
                'label' => esc_html__('Vertical Offset', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => -500, 'max' => 500],
                    '%' => ['min' => -100, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .zirap-shape' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_slider',
            [
                'label' => esc_html__('Slider', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_slider_margin_top',
            [
                'label' => esc_html__('Slider Top Spacing', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 200],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-slider-2' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_slide_padding',
            [
                'label' => esc_html__('Slide Inner Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-slider-2 .swiper-slide' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_slider_padding',
            [
                'label' => esc_html__('Slider Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-slider-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_slider_border_radius',
            [
                'label' => esc_html__('Slider Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-slider-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_slider_overflow',
            [
                'label' => esc_html__('Slider Overflow', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'visible' => esc_html__('Visible', 'ftelements'),
                    'hidden' => esc_html__('Hidden', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-slider-2' => 'overflow: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_slide_gap',
            [
                'label' => esc_html__('Gap Between Slides', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-slider-2 .swiper-wrapper' => 'column-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_slide_vertical_align',
            [
                'label' => esc_html__('Slide Vertical Align', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'stretch' => esc_html__('Stretch', 'ftelements'),
                    'flex-start' => esc_html__('Top', 'ftelements'),
                    'center' => esc_html__('Center', 'ftelements'),
                    'flex-end' => esc_html__('Bottom', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-slider-2 .swiper-wrapper' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_pagination',
            [
                'label' => esc_html__('Pagination Dots', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_pagination_margin_top',
            [
                'label' => esc_html__('Spacing Above Dots', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 120],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .swiper-dot' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_pagination_align',
            [
                'label' => esc_html__('Alignment', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => esc_html__('Left', 'ftelements'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'flex-end' => [
                        'title' => esc_html__('Right', 'ftelements'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .swiper-dot' => 'display: flex; justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'style_bullet_color',
            [
                'label' => esc_html__('Bullet Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .dot01 .swiper-pagination-bullet' => 'background-color: {{VALUE}}; opacity: 1;',
                ],
            ]
        );

        $this->add_control(
            'style_bullet_color_active',
            [
                'label' => esc_html__('Active Bullet Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .dot01 .swiper-pagination-bullet-active' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_bullet_size',
            [
                'label' => esc_html__('Bullet Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 4, 'max' => 40],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .dot01 .swiper-pagination-bullet' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_bullet_gap',
            [
                'label' => esc_html__('Gap Between Bullets', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 40],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .dot01' => 'display: flex; flex-wrap: wrap; align-items: center; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_bullet_border_radius',
            [
                'label' => esc_html__('Bullet Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .dot01 .swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'style_bullet_border',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .dot01 .swiper-pagination-bullet',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_card',
            [
                'label' => esc_html__('Testimonial Card', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'style_card_background',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'style_card_border',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2',
            ]
        );

        $this->add_responsive_control(
            'style_card_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_card_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_card_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_card_min_height',
            [
                'label' => esc_html__('Min Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_bg_thumb',
            [
                'label' => esc_html__('Card Background Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_bg_thumb_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.05,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .bg-thumb img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'style_bg_thumb_css_filters',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .bg-thumb img',
            ]
        );

        $this->add_responsive_control(
            'style_bg_thumb_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .bg-thumb' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; overflow: hidden;',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_content_inner',
            [
                'label' => esc_html__('Card Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'style_content_background',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content',
            ]
        );

        $this->add_responsive_control(
            'style_content_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_content_align',
            [
                'label' => esc_html__('Text Align', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'ftelements'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'ftelements'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_content_gap',
            [
                'label' => esc_html__('Content Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content' => 'display: flex; flex-direction: column; row-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_content_min_height',
            [
                'label' => esc_html__('Content Min Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 700],
                    'vh' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_client_image',
            [
                'label' => esc_html__('Client Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_client_img_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 20, 'max' => 400],
                    '%' => ['min' => 5, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .client-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_client_img_height',
            [
                'label' => esc_html__('Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 20, 'max' => 400],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .client-image img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_client_img_object_fit',
            [
                'label' => esc_html__('Object Fit', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'initial' => esc_html__('Default', 'ftelements'),
                    'fill' => esc_html__('Fill', 'ftelements'),
                    'cover' => esc_html__('Cover', 'ftelements'),
                    'contain' => esc_html__('Contain', 'ftelements'),
                    'none' => esc_html__('None', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .client-image img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_client_img_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .client-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'style_client_img_border',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .client-image img',
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'style_client_img_css_filters',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .client-image img',
            ]
        );

        $this->add_responsive_control(
            'style_client_img_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .client-image' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_client_img_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .client-image img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_client_name',
            [
                'label' => esc_html__('Client Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'style_client_name_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content h3.title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'style_client_name_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content h3.title',
            ]
        );

        $this->add_responsive_control(
            'style_client_name_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content h3.title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_client_name_transform',
            [
                'label' => esc_html__('Text Transform', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'none' => esc_html__('None', 'ftelements'),
                    'uppercase' => esc_html__('UPPERCASE', 'ftelements'),
                    'lowercase' => esc_html__('lowercase', 'ftelements'),
                    'capitalize' => esc_html__('Capitalize', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content h3.title' => 'text-transform: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_client_name_letter_spacing',
            [
                'label' => esc_html__('Letter Spacing', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => -5, 'max' => 20],
                    'em' => ['min' => -1, 'max' => 2],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content h3.title' => 'letter-spacing: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_review',
            [
                'label' => esc_html__('Review Text', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'style_review_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'style_review_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content p',
            ]
        );

        $this->add_responsive_control(
            'style_review_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_review_line_height',
            [
                'label' => esc_html__('Line Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 10, 'max' => 100],
                    'em' => ['min' => 0.5, 'max' => 5],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content p' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_review_letter_spacing',
            [
                'label' => esc_html__('Letter Spacing', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => -3, 'max' => 10],
                    'em' => ['min' => -1, 'max' => 2],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content p' => 'letter-spacing: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    /**
     * Render rsgallery widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $theme_uri = get_template_directory_uri();
        $widget_id = 'ft-testimonial7-' . $this->get_id();

        $img_girl = !empty($settings['img_girl_shape']['url']) ? $settings['img_girl_shape']['url'] : $theme_uri . '/assets/img/home-2/girl-shape.png';
        $img_zirap = !empty($settings['img_zirap']['url']) ? $settings['img_zirap']['url'] : $theme_uri . '/assets/img/home-2/zirap.png';
        $img_card_bg = !empty($settings['img_card_bg']['url']) ? $settings['img_card_bg']['url'] : $theme_uri . '/assets/img/inner-page/testi-bg.png';

        $section_subtitle = isset($settings['section_subtitle']) ? $settings['section_subtitle'] : '';
        $section_title = isset($settings['section_title']) ? $settings['section_title'] : '';
        $testimonial_items = !empty($settings['testimonial_items']) && is_array($settings['testimonial_items']) ? $settings['testimonial_items'] : [];

        ?>




        <section id="<?php echo esc_attr($widget_id); ?>" class="testimonial-section-2 testimonial-inner-page fix section-padding">
            <div class="girl-shape float-bob-y">
                <img src="<?php echo esc_url($img_girl); ?>" alt="">
            </div>
            <div class="zirap-shape float-bob-y">
                <img src="<?php echo esc_url($img_zirap); ?>" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($section_subtitle); ?></span>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                        <?php echo wp_kses_post(nl2br(esc_html($section_title))); ?>
                    </h2>
                </div>
                <div class="swiper testimonial-slider-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="swiper-wrapper">
                        <?php foreach ($testimonial_items as $item) : ?>
                            <?php
                            $client_title = !empty($item['client_title']) ? $item['client_title'] : '';
                            $client_review = !empty($item['client_review']) ? $item['client_review'] : '';
                            $client_image = !empty($item['client_image']['url']) ? $item['client_image']['url'] : Utils::get_placeholder_image_src();
                            ?>
                        <div class="swiper-slide">
                            <div class="testimonial-box-items-2">
                                <div class="bg-thumb">
                                    <img src="<?php echo esc_url($img_card_bg); ?>" alt="">
                                </div>
                                <div class="content">
                                    <div class="client-image">
                                        <img src="<?php echo esc_url($client_image); ?>" alt="<?php echo esc_attr($client_title); ?>">
                                    </div>
                                    <h3 class="title"><?php echo esc_html($client_title); ?></h3>
                                    <p><?php echo esc_html($client_review); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-dot text-center mt-5">
                        <div class="dot01"></div>
                    </div>
                </div>
            </div>
        </section>

        <?php if (\Elementor\Plugin::$instance->editor->is_edit_mode()) : ?>
            <script>
                (function ($) {
                    "use strict";

                    const widgetSelector = "#<?php echo esc_js($widget_id); ?>";

                    const initTestimonialSlider7 = function ($scope) {
                        if (typeof Swiper === "undefined") {
                            return;
                        }

                        const $widget = $scope && $scope.length ? $scope.find(widgetSelector) : $(widgetSelector);
                        if (!$widget.length) {
                            return;
                        }

                        $widget.each(function () {
                            const sliderEl = this.querySelector(".testimonial-slider-2");
                            if (!sliderEl) {
                                return;
                            }

                            if (sliderEl.swiper) {
                                sliderEl.swiper.destroy(true, true);
                            }

                            const paginationEl = this.querySelector(".dot01");
                            new Swiper(sliderEl, {
                                spaceBetween: 30,
                                speed: 1300,
                                loop: true,
                                autoplay: {
                                    delay: 1500,
                                    disableOnInteraction: false,
                                },
                                pagination: {
                                    el: paginationEl,
                                    clickable: true,
                                },
                                breakpoints: {
                                    1399: { slidesPerView: 4 },
                                    1199: { slidesPerView: 3 },
                                    991: { slidesPerView: 3 },
                                    767: { slidesPerView: 2 },
                                    575: { slidesPerView: 1.4 },
                                    0: { slidesPerView: 1 },
                                },
                            });
                        });
                    };

                    $(window).on("elementor/frontend/init", function () {
                        elementorFrontend.hooks.addAction("frontend/element_ready/ft-testimonial7.default", initTestimonialSlider7);
                    });

                    $(function () {
                        initTestimonialSlider7($(document));
                    });
                })(jQuery);
            </script>
        <?php endif; ?>








<?php
    }
}
