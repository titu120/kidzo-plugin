<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_About4_Widget extends \Elementor\Widget_Base
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
        return 'ft-about4';
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
        return esc_html__('FT About 4', 'ftelements');
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
        $this->start_controls_section(
            'about4_images_section',
            [
                'label' => esc_html__('Images', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'shape_bus_image',
            [
                'label' => esc_html__('Bus Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/about/bus.png',
                ],
            ]
        );

        $this->add_control(
            'shape_girl_image',
            [
                'label' => esc_html__('Girl Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/about/girl.png',
                ],
            ]
        );

        $this->add_control(
            'shape_dot_image',
            [
                'label' => esc_html__('Dot Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/about/dot.png',
                ],
            ]
        );

        $this->add_control(
            'about_main_image',
            [
                'label' => esc_html__('Main About Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/about/02.jpg',
                ],
            ]
        );

        $this->add_control(
            'about_secondary_image',
            [
                'label' => esc_html__('Secondary About Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/about/02.png',
                ],
            ]
        );

        $this->add_control(
            'about_border_shape_image',
            [
                'label' => esc_html__('Border Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/about/border-shape-1.png',
                ],
            ]
        );

        $this->add_control(
            'button_arrow_image',
            [
                'label' => esc_html__('Button Arrow Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/icon/arrow1.svg',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about4_content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'about4_subtitle_text',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('About Us', 'ftelements'),
            ]
        );

        $this->add_control(
            'about4_title_text',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Top Choice for Children', 'ftelements'),
            ]
        );

        $this->add_control(
            'about4_description_text',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse gravida vitae nisi in tincidunt.', 'ftelements'),
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'item_text',
            [
                'label' => esc_html__('List Text', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Sports Training', 'ftelements'),
            ]
        );

        $this->add_control(
            'about4_list_items',
            [
                'label' => esc_html__('List Items', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    ['item_text' => esc_html__('Sports Training', 'ftelements')],
                    ['item_text' => esc_html__('Sports Training', 'ftelements')],
                    ['item_text' => esc_html__('Sports Training', 'ftelements')],
                    ['item_text' => esc_html__('Sports Training', 'ftelements')],
                ],
                'title_field' => '{{{ item_text }}}',
            ]
        );

        $this->add_control(
            'about4_button_text',
            [
                'label' => esc_html__('Button Text', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Explore More', 'ftelements'),
            ]
        );

        $this->add_control(
            'about4_button_link',
            [
                'label' => esc_html__('Button Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                    'is_external' => false,
                    'nofollow' => false,
                ],
                'show_external' => true,
            ]
        );

        $this->add_control(
            'about4_phone_label',
            [
                'label' => esc_html__('Phone Label', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Call Us Now', 'ftelements'),
            ]
        );

        $this->add_control(
            'about4_phone_number',
            [
                'label' => esc_html__('Phone Number', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('+208-555-0112', 'ftelements'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about4_style_section_wrapper',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about4_section_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .about-section-4',
            ]
        );

        $this->add_responsive_control(
            'about4_section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about4_section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about4_style_section_images',
            [
                'label' => esc_html__('Main Images', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about4_main_image_width',
            [
                'label' => esc_html__('Main Image Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1200],
                    '%' => ['min' => 0, 'max' => 100],
                    'vw' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about4_main_image_border_radius',
            [
                'label' => esc_html__('Main Image Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about4_main_image_border',
                'selector' => '{{WRAPPER}} .about-image img',
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'about4_main_image_filters',
                'selector' => '{{WRAPPER}} .about-image img',
            ]
        );

        $this->add_responsive_control(
            'about4_secondary_image_width',
            [
                'label' => esc_html__('Secondary Image Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1200],
                    '%' => ['min' => 0, 'max' => 100],
                    'vw' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-image-2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about4_secondary_image_border_radius',
            [
                'label' => esc_html__('Secondary Image Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-image-2 img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about4_secondary_image_border',
                'selector' => '{{WRAPPER}} .about-image-2 img',
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'about4_secondary_image_filters',
                'selector' => '{{WRAPPER}} .about-image-2 img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about4_style_section_shapes',
            [
                'label' => esc_html__('Shape Images', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about4_bus_shape_width',
            [
                'label' => esc_html__('Bus Shape Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                    'vw' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bus-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about4_girl_shape_width',
            [
                'label' => esc_html__('Girl Shape Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                    'vw' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .girl-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about4_dot_shape_width',
            [
                'label' => esc_html__('Dot Shape Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                    'vw' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .dot-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'about4_shape_filters',
                'selector' => '{{WRAPPER}} .bus-shape img, {{WRAPPER}} .girl-shape img, {{WRAPPER}} .dot-shape img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about4_style_section_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about4_subtitle_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about4_subtitle_typography',
                'selector' => '{{WRAPPER}} .about-content .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'about4_subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-content .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about4_style_section_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about4_title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about4_title_typography',
                'selector' => '{{WRAPPER}} .about-content .sec_title',
            ]
        );

        $this->add_responsive_control(
            'about4_title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-content .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about4_style_section_description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about4_description_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .about-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about4_description_typography',
                'selector' => '{{WRAPPER}} .about-content .about-text',
            ]
        );

        $this->add_responsive_control(
            'about4_description_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-content .about-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about4_style_section_list',
            [
                'label' => esc_html__('List', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about4_list_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-list ul li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'about4_list_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-list ul li i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about4_list_typography',
                'selector' => '{{WRAPPER}} .about-list ul li',
            ]
        );

        $this->add_responsive_control(
            'about4_list_item_spacing',
            [
                'label' => esc_html__('Item Spacing', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 100],
                    'em' => ['min' => 0, 'max' => 10],
                    'rem' => ['min' => 0, 'max' => 10],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-list ul li:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about4_list_column_gap',
            [
                'label' => esc_html__('Column Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 120],
                    '%' => ['min' => 0, 'max' => 100],
                    'em' => ['min' => 0, 'max' => 10],
                    'rem' => ['min' => 0, 'max' => 10],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-list' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about4_style_section_button',
            [
                'label' => esc_html__('Button', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about4_button_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-button .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about4_button_border',
                'selector' => '{{WRAPPER}} .about-button .theme-btn',
            ]
        );

        $this->add_responsive_control(
            'about4_button_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-button .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('about4_button_tabs');

        $this->start_controls_tab(
            'about4_button_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'about4_button_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-button .theme-btn .theme-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .about-button .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'about4_button_bg_shape_fill',
            [
                'label' => esc_html__('Background Shape Fill', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-button .theme-btn .theme-bg svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'about4_button_hover_tab',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'about4_button_text_hover_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-button .theme-btn:hover .theme-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .about-button .theme-btn:hover .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'about4_button_bg_shape_hover_fill',
            [
                'label' => esc_html__('Background Shape Fill', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-button .theme-btn:hover .theme-bg svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'about4_style_section_phone',
            [
                'label' => esc_html__('Call Box', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about4_phone_label_color',
            [
                'label' => esc_html__('Label Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .author-icon .content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'about4_phone_number_color',
            [
                'label' => esc_html__('Number Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .author-icon .content .number' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'about4_phone_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .author-icon .icon i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'about4_phone_icon_bg',
            [
                'label' => esc_html__('Icon Background', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .author-icon .icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about4_phone_label_typography',
                'selector' => '{{WRAPPER}} .author-icon .content span',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about4_phone_number_typography',
                'selector' => '{{WRAPPER}} .author-icon .content .number',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about4_phone_icon_border',
                'selector' => '{{WRAPPER}} .author-icon .icon',
            ]
        );

        $this->add_responsive_control(
            'about4_phone_icon_border_radius',
            [
                'label' => esc_html__('Icon Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .author-icon .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $default_base_url = plugin_dir_url(dirname(__FILE__, 2));

        $get_image_url = static function ($image, $fallback) use ($default_base_url) {
            if (!empty($image['url'])) {
                return $image['url'];
            }

            return $default_base_url . ltrim($fallback, '/');
        };

        $get_image_alt = static function ($image, $fallback_alt = '') {
            if (!empty($image['id'])) {
                $attachment_alt = get_post_meta($image['id'], '_wp_attachment_image_alt', true);
                if (!empty($attachment_alt)) {
                    return $attachment_alt;
                }
            }

            return $fallback_alt;
        };

        $shape_bus_image_url = $get_image_url($settings['shape_bus_image'], 'assets/img/about/bus.png');
        $shape_girl_image_url = $get_image_url($settings['shape_girl_image'], 'assets/img/about/girl.png');
        $shape_dot_image_url = $get_image_url($settings['shape_dot_image'], 'assets/img/about/dot.png');
        $about_main_image_url = $get_image_url($settings['about_main_image'], 'assets/img/about/02.jpg');
        $about_secondary_image_url = $get_image_url($settings['about_secondary_image'], 'assets/img/about/02.png');
        $about_border_shape_image_url = $get_image_url($settings['about_border_shape_image'], 'assets/img/about/border-shape-1.png');
        $button_arrow_image_url = $get_image_url($settings['button_arrow_image'], 'assets/img/icon/arrow1.svg');
        $about_list_items = !empty($settings['about4_list_items']) ? $settings['about4_list_items'] : [];
        $about_list_half = (int) ceil(count($about_list_items) / 2);
        $about_list_columns = [
            array_slice($about_list_items, 0, $about_list_half),
            array_slice($about_list_items, $about_list_half),
        ];

        $button_link_url = !empty($settings['about4_button_link']['url']) ? $settings['about4_button_link']['url'] : '#';
        $phone_number = !empty($settings['about4_phone_number']) ? $settings['about4_phone_number'] : '';
        $phone_href = preg_replace('/[^0-9+]/', '', $phone_number);

        ?>



        <section class="about-section-4 section-padding">
            <div class="bus-shape float-bob-x">
                <img src="<?php echo esc_url($shape_bus_image_url); ?>" alt="<?php echo esc_attr($get_image_alt($settings['shape_bus_image'], 'shape-img')); ?>">
            </div>
            <div class="girl-shape float-bob-y">
                <img src="<?php echo esc_url($shape_girl_image_url); ?>" alt="<?php echo esc_attr($get_image_alt($settings['shape_girl_image'], 'shape-img')); ?>">
            </div>
            <div class="dot-shape">
                <img src="<?php echo esc_url($shape_dot_image_url); ?>" alt="<?php echo esc_attr($get_image_alt($settings['shape_dot_image'], 'shape-img')); ?>">
            </div>
            <div class="container">
                <div class="about-wrapper-4 mb-40">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-image-items">
                                <div class="about-image wow fadeInUp" data-wow-delay=".3s">
                                    <img src="<?php echo esc_url($about_main_image_url); ?>" alt="<?php echo esc_attr($get_image_alt($settings['about_main_image'], 'about-img')); ?>">
                                </div>
                                <div class="about-image-2">
                                    <img src="<?php echo esc_url($about_secondary_image_url); ?>" alt="<?php echo esc_attr($get_image_alt($settings['about_secondary_image'], 'about-img')); ?>">
                                </div>
                                <div class="border-shape-1">
                                    <img src="<?php echo esc_url($about_border_shape_image_url); ?>" alt="<?php echo esc_attr($get_image_alt($settings['about_border_shape_image'], 'img')); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title mb-0">
                                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['about4_subtitle_text']); ?></span>
                                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                        <?php echo esc_html($settings['about4_title_text']); ?>
                                    </h2>
                                </div>
                                <p class="about-text wow fadeInUp" data-wow-delay=".5s">
                                    <?php echo esc_html($settings['about4_description_text']); ?>
                                </p>
                                <div class="about-list">
                                    <?php foreach ($about_list_columns as $column_index => $column_items) : ?>
                                        <ul class="wow fadeInUp list-unstyled" data-wow-delay="<?php echo esc_attr($column_index === 0 ? '.3s' : '.5s'); ?>">
                                            <?php foreach ($column_items as $item) : ?>
                                                <?php if (!empty($item['item_text'])) : ?>
                                                    <li>
                                                        <i class="fa-regular fa-circle-check"></i>
                                                        <?php echo esc_html($item['item_text']); ?>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endforeach; ?>
                                </div>
                                <div class="about-author">
                                    <div class="about-button wow fadeInUp" data-wow-delay=".3s">
                                        <a href="<?php echo esc_url($button_link_url); ?>" class="theme-btn" <?php echo !empty($settings['about4_button_link']['is_external']) ? 'target="_blank"' : ''; ?> <?php echo !empty($settings['about4_button_link']['nofollow']) ? 'rel="nofollow"' : ''; ?>>
                                            <span class="theme-bg">
                                                <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"></path>
                                                </svg>
                                            </span>
                                            <span class="theme-text"><?php echo esc_html($settings['about4_button_text']); ?> <img src="<?php echo esc_url($button_arrow_image_url); ?>" alt="<?php echo esc_attr($get_image_alt($settings['button_arrow_image'])); ?>"></span>
                                            <span class="theme-text2"><?php echo esc_html($settings['about4_button_text']); ?> <img src="<?php echo esc_url($button_arrow_image_url); ?>" alt="<?php echo esc_attr($get_image_alt($settings['button_arrow_image'])); ?>"></span>
                                        </a>
                                    </div>
                                    <div class="author-icon wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <span><?php echo esc_html($settings['about4_phone_label']); ?></span>
                                            <a class="number" href="tel:<?php echo esc_attr($phone_href); ?>"><?php echo esc_html($phone_number); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>










<?php
    }
} ?>