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

class FT_Contact_2_Widget extends \Elementor\Widget_Base
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
        return 'ft-contact-2';
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
        return esc_html__('FT Contact 2', 'ftelements');
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
        // Content Tab
        $this->start_controls_section(
            'general_content',
            [
                'label' => esc_html__('General', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__('Contact With Us Now', 'ftelements'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__('Write us a message for donation help', 'ftelements'),
            ]
        );

        $this->add_control(
            'map_url',
            [
                'label' => esc_html__('Map Iframe URL', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__('https://www.google.com/maps/embed?...', 'ftelements'),
                'description' => esc_html__('Paste only the src URL from the Google Maps embed code.', 'ftelements'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact_info_section',
            [
                'label' => esc_html__('Contact Info', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'info_icon',
            [
                'label' => esc_html__('Icon', 'ftelements'),
                'type' => Controls_Manager::ICONS,
            ]
        );

        $repeater->add_control(
            'info_text',
            [
                'label' => esc_html__('Info / Link Text', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__('+1 (800) 555-0123', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'info_link',
            [
                'label' => esc_html__('Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('tel:+18005550123', 'ftelements'),
            ]
        );

        $this->add_control(
            'contact_info_list',
            [
                'label' => esc_html__('Contact Info List', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ info_text }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'social_section',
            [
                'label' => esc_html__('Social Links', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'social_title',
            [
                'label' => esc_html__('Social Label', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__('Follow us:', 'ftelements'),
            ]
        );

        $social_repeater = new Repeater();

        $social_repeater->add_control(
            'social_icon',
            [
                'label' => esc_html__('Icon', 'ftelements'),
                'type' => Controls_Manager::ICONS,
            ]
        );

        $social_repeater->add_control(
            'social_link',
            [
                'label' => esc_html__('Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://facebook.com', 'ftelements'),
            ]
        );

        $this->add_control(
            'social_links',
            [
                'label' => esc_html__('Social Links', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $social_repeater->get_controls(),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'form_content',
            [
                'label' => esc_html__('Form', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'form_title',
            [
                'label' => esc_html__('Form Title', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__('Fill up the form', 'ftelements'),
            ]
        );

        $this->add_control(
            'form_desc',
            [
                'label' => esc_html__('Form Description', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__('A results-driven IT professional...', 'ftelements'),
            ]
        );

        $this->add_control(
            'shortcode',
            [
                'label' => esc_html__('Shortcode', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__('[contact-form-7 id="..."]', 'ftelements'),
                'description' => esc_html__('If you add a shortcode, the static form will be replaced.', 'ftelements'),
            ]
        );

        $this->end_controls_section();

        // Style Tab
        // Section Style
        $this->start_controls_section(
            'section_style',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .contact-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .contact-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => esc_html__('Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .contact-section',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'section_border',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .contact-section',
            ]
        );

        $this->end_controls_section();

        // Header Style
        $this->start_controls_section(
            'header_style',
            [
                'label' => esc_html__('Header', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'header_alignment',
            [
                'label' => esc_html__('Alignment', 'ftelements'),
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

        $this->add_responsive_control(
            'header_max_width',
            [
                'label' => esc_html__('Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'range' => [
                    'px' => ['max' => 1200],
                    '%' => ['max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title' => 'max-width: {{SIZE}}{{UNIT}}; margin-left: auto; margin-right: auto;',
                ],
            ]
        );

        $this->add_control(
            'subtitle_style_heading',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
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

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .grt-section-title .grt-sub-title',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

        $this->add_control(
            'title_style_heading',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
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
                'selector' => '{{WRAPPER}} .grt-section-title h2',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Map Style
        $this->start_controls_section(
            'map_style',
            [
                'label' => esc_html__('Map', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'map_height',
            [
                'label' => esc_html__('Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'range' => [
                    'px' => ['max' => 800],
                ],
                'selectors' => [
                    '{{WRAPPER}} .contact-map iframe' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'map_border',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .contact-map',
            ]
        );

        $this->add_responsive_control(
            'map_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .contact-map' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; overflow: hidden;',
                ],
            ]
        );

        $this->end_controls_section();

        // Contact Info Style
        $this->start_controls_section(
            'contact_info_style',
            [
                'label' => esc_html__('Contact Info', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'info_item_bg',
            [
                'label' => esc_html__('Item Background', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'info_item_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .contact-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'info_icon_style_heading',
            [
                'label' => esc_html__('Icon', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'info_icon_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info .icon i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'info_icon_bg',
            [
                'label' => esc_html__('Background', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info .icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'info_icon_size',
            [
                'label' => esc_html__('Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .contact-info .icon i' => 'font-size: {{SIZE}}px;',
                ],
            ]
        );

        $this->add_responsive_control(
            'info_icon_box_size',
            [
                'label' => esc_html__('Box Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .contact-info .icon' => 'width: {{SIZE}}px; height: {{SIZE}}px; line-height: {{SIZE}}px;',
                ],
            ]
        );

        $this->add_control(
            'info_text_style_heading',
            [
                'label' => esc_html__('Text', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'info_text_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info .info p, {{WRAPPER}} .contact-info .info p a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_text_typography',
                'selector' => '{{WRAPPER}} .contact-info .info p',
            ]
        );

        $this->end_controls_section();

        // Social Style
        $this->start_controls_section(
            'social_style_section',
            [
                'label' => esc_html__('Social Links', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'social_label_color',
            [
                'label' => esc_html__('Label Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icon span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'social_label_typography',
                'selector' => '{{WRAPPER}} .social-icon span',
            ]
        );

        $this->start_controls_tabs('social_tabs');

        $this->start_controls_tab(
            'social_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'social_icon_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icon a i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_icon_bg',
            [
                'label' => esc_html__('Background', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icon a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'social_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'social_icon_hover_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icon a:hover i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_icon_hover_bg',
            [
                'label' => esc_html__('Background', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icon a:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'social_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .social-icon a i' => 'font-size: {{SIZE}}px;',
                ],
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'social_gap',
            [
                'label' => esc_html__('Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .social-icon a' => 'margin-right: {{SIZE}}px;',
                    '{{WRAPPER}} .social-icon a:last-child' => 'margin-right: 0;',
                ],
            ]
        );

        $this->end_controls_section();

        // Form Style
        $this->start_controls_section(
            'form_style_section',
            [
                'label' => esc_html__('Form Box', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'form_box_bg',
                'label' => esc_html__('Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .contact-form2',
            ]
        );

        $this->add_responsive_control(
            'form_box_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .contact-form2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'form_box_border',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .contact-form2',
            ]
        );

        $this->add_responsive_control(
            'form_box_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .contact-form2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'form_title_heading',
            [
                'label' => esc_html__('Form Title', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'form_title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-form2 h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'form_title_typography',
                'selector' => '{{WRAPPER}} .contact-form2 h2',
            ]
        );

        $this->add_responsive_control(
            'form_title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .contact-form2 h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'form_desc_heading',
            [
                'label' => esc_html__('Form Description', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'form_desc_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-form2 p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'form_desc_typography',
                'selector' => '{{WRAPPER}} .contact-form2 p',
            ]
        );

        $this->add_responsive_control(
            'form_desc_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .contact-form2 p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Form Fields Style
        $this->start_controls_section(
            'form_fields_style',
            [
                'label' => esc_html__('Form Fields', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'field_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-form-box input, {{WRAPPER}} .contact-form-box textarea, {{WRAPPER}} .contact-form-box .form select' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'field_bg',
            [
                'label' => esc_html__('Background', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-form-box input, {{WRAPPER}} .contact-form-box textarea, {{WRAPPER}} .contact-form-box .form select' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'field_border',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .contact-form-box input, {{WRAPPER}} .contact-form-box textarea, {{WRAPPER}} .contact-form-box .form select',
            ]
        );

        $this->add_responsive_control(
            'field_radius',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .form-clt' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'form_button_heading',
            [
                'label' => esc_html__('Submit Button', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->start_controls_tabs('form_btn_tabs');

        $this->start_controls_tab(
            'form_btn_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'form_btn_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'form_btn_bg',
            [
                'label' => esc_html__('Background', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'form_btn_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'form_btn_hover_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'form_btn_hover_bg',
            [
                'label' => esc_html__('Background', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

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

        $subtitle = !empty($settings['subtitle']) ? $settings['subtitle'] : 'Contact With Us Now';
        $title = !empty($settings['title']) ? $settings['title'] : 'Write us a message for <br> donation help';
        $map_url = !empty($settings['map_url']) ? $settings['map_url'] : 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd';

        $form_title = !empty($settings['form_title']) ? $settings['form_title'] : 'Fill up the form';
        $form_desc = !empty($settings['form_desc']) ? $settings['form_desc'] : 'A results-driven IT professional with strong expertise in modern web technologies, system architecture.';
        ?>

                <section class="contact-section fix section-padding">
                    <div class="container">
                        <div class="grt-section-title text-center">
                            <?php if (!empty($subtitle)): ?>
                                    <span class="grt-sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                        <i class="fa-sharp fa-solid fa-heart"></i> <?php echo esc_html($subtitle); ?>
                                    </span>
                            <?php endif; ?>
                            <?php if (!empty($title)): ?>
                                    <h2 class="split-title">
                                        <?php echo wp_kses_post($title); ?>
                                    </h2>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-left-items">
                                    <?php if (!empty($map_url)): ?>
                                            <div class="contact-map">
                                                <iframe
                                                    src="<?php echo esc_url($map_url); ?>"
                                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                    <?php endif; ?>
                                    <?php if (!empty($settings['contact_info_list'])): ?>
                                            <ul class="contact-info-list">
                                                <li>
                                                    <?php
                                                    $count = 0;
                                                    foreach ($settings['contact_info_list'] as $info):
                                                        $count++;
                                                        $link_url = !empty($info['info_link']['url']) ? $info['info_link']['url'] : '';
                                                        $target = !empty($info['info_link']['is_external']) ? 'target="_blank"' : '';
                                                        $nofollow = !empty($info['info_link']['nofollow']) ? 'rel="nofollow"' : '';
                                                        ?>
                                                            <div class="contact-info">
                                                                <div class="icon">
                                                                    <?php \Elementor\Icons_Manager::render_icon($info['info_icon'], ['aria-hidden' => 'true']); ?>
                                                                </div>
                                                                <div class="info">
                                                                    <p>
                                                                        <?php if (!empty($link_url)): ?>
                                                                                <a href="<?php echo esc_url($link_url); ?>" <?php echo $target; ?>                     <?php echo $nofollow; ?>>
                                                                                    <?php echo esc_html($info['info_text']); ?>
                                                                                </a>
                                                                        <?php else: ?>
                                                                                <?php echo esc_html($info['info_text']); ?>
                                                                        <?php endif; ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <?php if ($count % 2 == 0 && $count < count($settings['contact_info_list'])): ?>
                                                                    </li><li>
                                                            <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </li>
                                                <li>
                                                    <div class="social-icon d-flex align-items-center">
                                                        <?php if (!empty($settings['social_title'])): ?>
                                                                <span>
                                                                    <?php echo esc_html($settings['social_title']); ?>
                                                                </span>
                                                        <?php endif; ?>
                                                        <?php if (!empty($settings['social_links'])): ?>
                                                                <?php foreach ($settings['social_links'] as $social):
                                                                    $social_url = !empty($social['social_link']['url']) ? $social['social_link']['url'] : '#';
                                                                    $s_target = !empty($social['social_link']['is_external']) ? 'target="_blank"' : '';
                                                                    $s_nofollow = !empty($social['social_link']['nofollow']) ? 'rel="nofollow"' : '';
                                                                    ?>
                                                                        <a href="<?php echo esc_url($social_url); ?>" <?php echo $s_target; ?>                     <?php echo $s_nofollow; ?>>
                                                                            <?php \Elementor\Icons_Manager::render_icon($social['social_icon'], ['aria-hidden' => 'true']); ?>
                                                                        </a>
                                                                <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </li>
                                            </ul>
                                    <?php else: ?>
                                            <ul class="contact-info-list">
                                                <li>
                                                    <div class="contact-info">
                                                        <div class="icon">
                                                            <i class="fa-sharp fa-solid fa-phone"></i>
                                                        </div>
                                                        <div class="info">
                                                            <p>
                                                                <a href="tel:+18005550123">+1 (800) 555-0123</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="contact-info">
                                                        <div class="icon">
                                                            <i class="fa-solid fa-envelope"></i>
                                                        </div>
                                                        <div class="info">
                                                            <p>
                                                                <a href="mailto:hello@heartly.com">hello@heartly.com</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="contact-info">
                                                        <div class="icon">
                                                            <i class="fa-solid fa-location-dot"></i>
                                                        </div>
                                                        <div class="info">
                                                            <p>
                                                                374 William S Canning Blvd, <br> Fall River MA 2721, USA
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="social-icon d-flex align-items-center">
                                                        <span>
                                                            Follow us:
                                                        </span>
                                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form2">
                                    <?php if (!empty($form_title)): ?>
                                            <h2>
                                                <?php echo esc_html($form_title); ?>
                                            </h2>
                                    <?php endif; ?>
                                    <?php if (!empty($form_desc)): ?>
                                            <p>
                                                <?php echo esc_html($form_desc); ?>
                                            </p>
                                    <?php endif; ?>

                                    <?php if (!empty($settings['shortcode'])): ?>
                                            <div class="grt-shortcode-form">
                                                <?php echo do_shortcode($settings['shortcode']); ?>
                                            </div>
                                    <?php else: ?>
                                            <form action="#" id="contact-form" class="contact-form-box">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-lg-12">
                                                        <div class="form-clt">
                                                            <input type="text" placeholder="Full name *">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-clt">
                                                            <input type="text" placeholder="Email address *">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-clt">
                                                            <input type="text" placeholder="Phone number *">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-clt">
                                                            <div class="form">
                                                                <select class="single-select w-100">
                                                                    <option>Chose a option</option>
                                                                    <option>Digital Marketing</option>
                                                                    <option>Software & IT Service</option>
                                                                    <option>Finance & Investment</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-clt">
                                                            <textarea name="message" placeholder="Type your message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="theme-btn">
                                                            Submit now <i class="fa-solid fa-arrow-up-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php
    }
} ?>