<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_Testimonial_5_Widget extends \Elementor\Widget_Base
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
        return 'ft-testimonial-5';
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
        return esc_html__('FT Testimonial 5', 'ftelements');
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
        // Content Section
        $this->start_controls_section(
            'section_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Clients Testimonials', 'ftelements'),
            ]
        );

        $this->add_control(
            'subtitle_icon',
            [
                'label' => esc_html__('Subtitle Icon', 'ftelements'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fa-sharp fa-solid fa-heart',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'left_image',
            [
                'label' => esc_html__('Left Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Your gift empower <br> generations', 'ftelements'),
            ]
        );

        $this->add_control(
            'global_quote_icon',
            [
                'label' => esc_html__('Global Quote Icon', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'rating',
            [
                'label' => esc_html__('Rating', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'default' => '5',
                'options' => [
                    '1' => esc_html__('1 Star', 'ftelements'),
                    '2' => esc_html__('2 Stars', 'ftelements'),
                    '3' => esc_html__('3 Stars', 'ftelements'),
                    '4' => esc_html__('4 Stars', 'ftelements'),
                    '5' => esc_html__('5 Stars', 'ftelements'),
                ],
            ]
        );

        $repeater->add_control(
            'feedback',
            [
                'label' => esc_html__('Feedback', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Heartly stepped in when our family was struggling the most. Their kindness and continuous support helped us rebuild.', 'ftelements'),
            ]
        );

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

        $repeater->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'client_image',
                'default' => 'full',
            ]
        );

        $repeater->add_control(
            'client_name',
            [
                'label' => esc_html__('Client Name', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Robert Allison', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'client_designation',
            [
                'label' => esc_html__('Designation', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Sales manager', 'ftelements'),
            ]
        );

        $this->add_control(
            'testimonials',
            [
                'label' => esc_html__('Testimonials', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'client_name' => esc_html__('Robert Allison', 'ftelements'),
                        'client_designation' => esc_html__('Sales manager', 'ftelements'),
                    ],
                    [
                        'client_name' => esc_html__('Shikhon Islam', 'ftelements'),
                        'client_designation' => esc_html__('CEO, Elementra', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ client_name }}}',
            ]
        );

        $this->end_controls_section();

        // Slider Settings Section
        $this->start_controls_section(
            'section_slider_settings',
            [
                'label' => esc_html__('Slider Settings', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'loop',
            [
                'label' => esc_html__('Loop', 'ftelements'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'ftelements'),
                'label_off' => esc_html__('No', 'ftelements'),
                'return_value' => 'true',
                'default' => 'true',
            ]
        );

        $this->add_control(
            'autoplay',
            [
                'label' => esc_html__('Autoplay', 'ftelements'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'ftelements'),
                'label_off' => esc_html__('No', 'ftelements'),
                'return_value' => 'true',
                'default' => 'true',
            ]
        );

        $this->add_control(
            'autoplay_speed',
            [
                'label' => esc_html__('Autoplay Speed (ms)', 'ftelements'),
                'type' => Controls_Manager::NUMBER,
                'default' => 5000,
                'condition' => [
                    'autoplay' => 'true',
                ],
            ]
        );

        $this->add_responsive_control(
            'slides_per_view',
            [
                'label' => esc_html__('Slides Per View', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                ],
                'default' => '2',
                'tablet_default' => '2',
                'mobile_default' => '1',
            ]
        );

        $this->add_responsive_control(
            'space_between',
            [
                'label' => esc_html__('Space Between', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
            ]
        );

        $this->end_controls_section();

        // Style Section
        $this->start_controls_section(
            'section_style',
            [
                'label' => esc_html__('Section Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-section-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-section-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => esc_html__('Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-testimonial-section-2',
            ]
        );

        $this->add_responsive_control(
            'header_alignment',
            [
                'label' => esc_html__('Header Alignment', 'ftelements'),
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
                    '{{WRAPPER}} .grt-section-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Subtitle Style
        $this->start_controls_section(
            'subtitle_style',
            [
                'label' => esc_html__('Subtitle Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'subtitle_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'label' => esc_html__('Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-section-title .grt-sub-title',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin Bottom', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Title Style
        $this->start_controls_section(
            'title_style',
            [
                'label' => esc_html__('Title Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => esc_html__('Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-section-title h2',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin Bottom', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title h2' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Testimonial Item Style
        $this->start_controls_section(
            'testimonial_item_style',
            [
                'label' => esc_html__('Testimonial Box', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('item_style_tabs');

        $this->start_controls_tab(
            'item_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'item_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'item_border',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-testimonial-box-items-2',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'item_hover_tab',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'item_bg_color_hover',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'item_border_hover',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-testimonial-box-items-2:hover',
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'item_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_margin_spacing',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Quote Icon Style
        $this->start_controls_section(
            'quote_icon_style',
            [
                'label' => esc_html__('Quote Icon Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'quote_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .quote-icon img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_control(
            'quote_icon_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .quote-icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'quote_icon_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .quote-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'quote_icon_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .quote-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'quote_icon_position',
            [
                'label' => esc_html__('Position', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .quote-icon' => 'top: {{TOP}}{{UNIT}}; right: {{RIGHT}}{{UNIT}}; bottom: {{BOTTOM}}{{UNIT}}; left: {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Feedback Style
        $this->start_controls_section(
            'feedback_style',
            [
                'label' => esc_html__('Feedback Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'feedback_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'feedback_typography',
                'label' => esc_html__('Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-testimonial-box-items-2 p',
            ]
        );

        $this->add_responsive_control(
            'feedback_margin_spacing',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Client Info Style
        $this->start_controls_section(
            'client_info_style',
            [
                'label' => esc_html__('Client Info Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'client_name_heading',
            [
                'label' => esc_html__('Name', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'client_name_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .client-info .info-content .name' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'client_name_typography',
                'label' => esc_html__('Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-testimonial-box-items-2 .client-info .info-content .name',
            ]
        );

        $this->add_control(
            'client_designation_heading',
            [
                'label' => esc_html__('Designation', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'client_designation_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .client-info .info-content .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'client_designation_typography',
                'label' => esc_html__('Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-testimonial-box-items-2 .client-info .info-content .text',
            ]
        );

        $this->add_control(
            'client_image_heading',
            [
                'label' => esc_html__('Image', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'client_image_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .client-info .thumb' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_responsive_control(
            'client_image_height',
            [
                'label' => esc_html__('Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .client-info .thumb' => 'height: {{SIZE}}{{UNIT}}; width: auto;',
                ],
            ]
        );

        $this->add_responsive_control(
            'client_image_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .client-info .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .client-info .thumb' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'client_image_border',
                'label' => esc_html__('Image Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-testimonial-box-items-2 .client-info .thumb',
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'client_image_filters',
                'selector' => '{{WRAPPER}} .grt-testimonial-box-items-2 .client-info .thumb img',
            ]
        );

        $this->end_controls_section();

        // Rating Star Style
        $this->start_controls_section(
            'rating_star_style',
            [
                'label' => esc_html__('Rating Stars', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'star_color',
            [
                'label' => esc_html__('Star Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .star i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'star_size',
            [
                'label' => esc_html__('Star Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .star i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'star_spacing',
            [
                'label' => esc_html__('Star Spacing', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .star i:not(:last-child)' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'star_margin_bottom',
            [
                'label' => esc_html__('Margin Bottom', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-testimonial-box-items-2 .star' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Navigation Style
        $this->start_controls_section(
            'nav_style',
            [
                'label' => esc_html__('Navigation Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('nav_buttons_tabs');

        $this->start_controls_tab(
            'nav_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'nav_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .array-buttons button' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'nav_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .array-buttons button i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'nav_border',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .array-buttons button',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'nav_hover_tab',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'nav_bg_color_hover',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .array-buttons button:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'nav_icon_color_hover',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .array-buttons button:hover i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'nav_border_color_hover',
            [
                'label' => esc_html__('Border Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .array-buttons button:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'nav_button_size',
            [
                'label' => esc_html__('Button Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .array-buttons button' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
                ],
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'nav_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .array-buttons button i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'nav_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .array-buttons button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'nav_gap',
            [
                'label' => esc_html__('Gap Between', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .array-buttons button:not(:last-child)' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'nav_margin_top',
            [
                'label' => esc_html__('Margin Top', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .array-buttons' => 'margin-top: {{SIZE}}{{UNIT}};',
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

        $slides_per_view = isset($settings['slides_per_view']) ? (int) $settings['slides_per_view'] : 2;
        $slides_per_view_tablet = isset($settings['slides_per_view_tablet']) ? (int) $settings['slides_per_view_tablet'] : 2;
        $slides_per_view_mobile = isset($settings['slides_per_view_mobile']) ? (int) $settings['slides_per_view_mobile'] : 1;

        $slider_settings = [
            'loop' => ('true' === $settings['loop']),
            'centeredSlides' => false,
            'speed' => 1300,
            'autoplay' => [
                'delay' => 2000,
                'disableOnInteraction' => false,
            ],
            'slidesPerView' => $slides_per_view,
            'spaceBetween' => isset($settings['space_between']['size']) ? (int) $settings['space_between']['size'] : 30,
            'breakpoints' => [
                1199 => [
                    'slidesPerView' => $slides_per_view,
                ],
                991 => [
                    'slidesPerView' => $slides_per_view_tablet,
                ],
                767 => [
                    'slidesPerView' => $slides_per_view_tablet,
                ],
                575 => [
                    'slidesPerView' => 1.4,
                ],
                0 => [
                    'slidesPerView' => 1,
                ],
            ],
        ];

        if ('true' !== $settings['autoplay']) {
            $slider_settings['autoplay'] = false;
        }

        $this->add_render_attribute('slider_options', 'data-settings', json_encode($slider_settings));
        ?>
        <section class="grt-testimonial-section-2 fix" style="overflow: hidden;">
            <div class="container">
                <div class="grt-section-title text-center">
                    <?php if (!empty($settings['subtitle'])): ?>
                        <span class="grt-sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                            <?php \Elementor\Icons_Manager::render_icon($settings['subtitle_icon'], ['aria-hidden' => 'true']); ?>
                            <?php echo esc_html($settings['subtitle']); ?>
                        </span>
                    <?php endif; ?>
                    <?php if (!empty($settings['title'])): ?>
                        <h2 class="split-title">
                            <?php echo wp_kses_post($settings['title']); ?>
                        </h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="swiper testimonial-slider-inner" style="margin-left: -20%; margin-right: -20%; overflow: visible;">
                <div class="swiper-wrapper">
                    <?php foreach ($settings['testimonials'] as $item): ?>
                        <div class="swiper-slide">
                            <div class="grt-testimonial-box-items-2">
                                <?php if (!empty($item['rating'])): ?>
                                    <div class="star">
                                        <?php for ($i = 0; $i < (int) $item['rating']; $i++): ?>
                                            <i class="fa-solid fa-star"></i>
                                        <?php endfor; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($item['feedback'])): ?>
                                    <p><?php echo esc_html($item['feedback']); ?></p>
                                <?php endif; ?>
                                <div class="client-info">
                                    <?php if (!empty($item['client_image']['url'])): ?>
                                        <div class="thumb">
                                            <img src="<?php echo esc_url($item['client_image']['url']); ?>"
                                                alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt($item['client_image'])); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="info-content">
                                        <?php if (!empty($item['client_name'])): ?>
                                            <span class="name"><?php echo esc_html($item['client_name']); ?></span>
                                        <?php endif; ?>
                                        <?php if (!empty($item['client_designation'])): ?>
                                            <span class="text"><?php echo esc_html($item['client_designation']); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if (!empty($settings['global_quote_icon']['url'])): ?>
                                    <div class="quote-icon">
                                        <img src="<?php echo esc_url($settings['global_quote_icon']['url']); ?>"
                                            alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt($settings['global_quote_icon'])); ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </section>
        <?php
    }
} ?>