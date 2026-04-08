<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_Feature_2_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'ft-feature-2';
    }

    public function get_title()
    {
        return esc_html__('FT Feature 2', 'ftelements');
    }

    public function get_icon()
    {
        return 'tp-icon';
    }

    public function get_categories()
    {
        return ['pielements_category'];
    }

    protected function register_controls()
    {
        // ========================
        // CONTENT TAB
        // ========================

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Section Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label'   => esc_html__('Sub Title', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('WAYS WE HELP', 'ftelements'),
            ]
        );

        $this->add_control(
            'sub_title_icon',
            [
                'label'   => esc_html__('Sub Title Icon', 'ftelements'),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fa-sharp fa-solid fa-heart',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label'   => esc_html__('Title', 'ftelements'),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__("We're a charitable group <br> that improves lives", 'ftelements'),
            ]
        );

        $this->add_responsive_control(
            'title_align',
            [
                'label'     => esc_html__('Alignment', 'ftelements'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'   => ['title' => esc_html__('Left', 'ftelements'), 'icon' => 'eicon-text-align-left'],
                    'center' => ['title' => esc_html__('Center', 'ftelements'), 'icon' => 'eicon-text-align-center'],
                    'right'  => ['title' => esc_html__('Right', 'ftelements'), 'icon' => 'eicon-text-align-right'],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        // ========================
        // FEATURES REPEATER
        // ========================

        $this->start_controls_section(
            'feature_section',
            [
                'label' => esc_html__('Features', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        // FIX: Give unique control IDs and use consistent naming
        $repeater->add_control(
            'item_hover_image',
            [
                'label'   => esc_html__('Thumbnail', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // FIX: Renamed from 'item_icon' to 'item_icon_image' to avoid
        // internal Elementor key collision with icon-type controls
        $repeater->add_control(
            'item_icon_image',
            [
                'label'   => esc_html__('Icon Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'item_title',
            [
                'label'   => esc_html__('Title', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Child assistance', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'item_description',
            [
                'label'   => esc_html__('Description', 'ftelements'),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Health care are essential for a child\'s growth.', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'animation_delay',
            [
                'label'   => esc_html__('Animation Delay (.s)', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => '2',
            ]
        );

        $this->add_control(
            'feature_list',
            [
                'label'       => esc_html__('Features', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    ['item_title' => esc_html__('Child assistance', 'ftelements'), 'animation_delay' => '2'],
                    ['item_title' => esc_html__('Disaster relief', 'ftelements'), 'animation_delay' => '4'],
                    ['item_title' => esc_html__('Animal welfare', 'ftelements'), 'animation_delay' => '6'],
                    ['item_title' => esc_html__('Health care', 'ftelements'), 'animation_delay' => '8'],
                ],
                'title_field' => '{{{ item_title }}}',
            ]
        );

        $this->end_controls_section();

        // ========================
        // RAISING TEXT
        // ========================

        $this->start_controls_section(
            'raising_section',
            [
                'label' => esc_html__('Raising Text', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'raising_icon',
            [
                'label'   => esc_html__('Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'raising_pre_text',
            [
                'label'   => esc_html__('Pre Text', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Total raising money in this year > ', 'ftelements'),
            ]
        );

        $this->add_control(
            'raising_highlight_text',
            [
                'label'   => esc_html__('Highlighted Text', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('$4,50,000', 'ftelements'),
            ]
        );

        $this->end_controls_section();

        // ========================
        // STYLE TAB
        // ========================

        // Section Style
        $this->start_controls_section(
            'section_style',
            [
                'label' => esc_html__('Section Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-section-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-section-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-mission-section-2',
            ]
        );

        $this->end_controls_section();

        // Sub Title Style
        $this->start_controls_section(
            'subtitle_style',
            [
                'label' => esc_html__('Sub Title Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-sub-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .grt-sub-title',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'subtitle_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-sub-title',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'subtitle_border',
                'selector' => '{{WRAPPER}} .grt-sub-title',
            ]
        );

        $this->add_responsive_control(
            'subtitle_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'subtitle_icon_heading',
            [
                'label'     => esc_html__('Icon', 'ftelements'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'subtitle_icon_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-sub-title i'   => 'color: {{VALUE}};',
                    '{{WRAPPER}} .grt-sub-title svg' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_icon_size',
            [
                'label'      => esc_html__('Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-sub-title i'   => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .grt-sub-title svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_icon_spacing',
            [
                'label'      => esc_html__('Icon Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-sub-title i'   => 'margin-right: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .grt-sub-title svg' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Title Style
        $this->start_controls_section(
            'title_style',
            [
                'label' => esc_html__('Title Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .grt-section-title h2',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Item Box Style
        $this->start_controls_section(
            'item_box_style',
            [
                'label' => esc_html__('Item Box Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'item_alignment',
            [
                'label'     => esc_html__('Alignment', 'ftelements'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'   => ['title' => esc_html__('Left', 'ftelements'), 'icon' => 'eicon-text-align-left'],
                    'center' => ['title' => esc_html__('Center', 'ftelements'), 'icon' => 'eicon-text-align-center'],
                    'right'  => ['title' => esc_html__('Right', 'ftelements'), 'icon' => 'eicon-text-align-right'],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-mission-box-items-2' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'item_transition',
            [
                'label'      => esc_html__('Transition Duration (s)', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['s'],
                'range'      => ['s' => ['min' => 0, 'max' => 2, 'step' => 0.1]],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2' => 'transition: all {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('item_box_tabs');

        $this->start_controls_tab('item_box_normal', ['label' => esc_html__('Normal', 'ftelements')]);

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'item_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-mission-box-items-2',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'item_border',
                'selector' => '{{WRAPPER}} .grt-mission-box-items-2',
            ]
        );

        $this->add_control(
            'item_opacity',
            [
                'label'      => esc_html__('Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => ['px' => ['min' => 0, 'max' => 1, 'step' => 0.01]],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab('item_box_hover', ['label' => esc_html__('Hover', 'ftelements')]);

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'item_hover_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-mission-box-items-2:hover',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'item_hover_border',
                'selector' => '{{WRAPPER}} .grt-mission-box-items-2:hover',
            ]
        );

        $this->add_responsive_control(
            'item_hover_transform',
            [
                'label'      => esc_html__('Translate Y on Hover', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => ['px' => ['min' => -50, 'max' => 50]],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2:hover' => 'transform: translateY({{SIZE}}{{UNIT}});',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        // Thumbnail Style
        $this->start_controls_section(
            'thumb_style',
            [
                'label' => esc_html__('Thumbnail Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'thumb_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .thumb img.hover-image' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'thumb_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .thumb img.hover-image' => 'height: {{SIZE}}{{UNIT}}; object-fit: cover;',
                ],
            ]
        );

        $this->add_responsive_control(
            'thumb_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .thumb' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'thumb_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .thumb, {{WRAPPER}} .grt-mission-box-items-2 .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'thumb_border',
                'selector' => '{{WRAPPER}} .grt-mission-box-items-2 .thumb',
            ]
        );

        $this->start_controls_tabs('thumb_filter_tabs');

        $this->start_controls_tab('thumb_filter_normal', ['label' => esc_html__('Normal', 'ftelements')]);

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'thumb_css_filter',
                'selector' => '{{WRAPPER}} .grt-mission-box-items-2 .thumb img.hover-image',
            ]
        );

        $this->add_control(
            'thumb_opacity',
            [
                'label'      => esc_html__('Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => ['px' => ['min' => 0, 'max' => 1, 'step' => 0.01]],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .thumb img.hover-image' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab('thumb_filter_hover', ['label' => esc_html__('Hover', 'ftelements')]);

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'thumb_css_filter_hover',
                'selector' => '{{WRAPPER}} .grt-mission-box-items-2:hover .thumb img.hover-image',
            ]
        );

        $this->add_control(
            'thumb_hover_scale',
            [
                'label'      => esc_html__('Scale', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => ['px' => ['min' => 0.5, 'max' => 2, 'step' => 0.01]],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2:hover .thumb img.hover-image' => 'transform: scale({{SIZE}});',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_control(
            'thumb_transition',
            [
                'label'      => esc_html__('Transition Duration (s)', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['s'],
                'range'      => ['s' => ['min' => 0, 'max' => 2, 'step' => 0.1]],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .thumb img' => 'transition: all {{SIZE}}{{UNIT}};',
                ],
                'separator'  => 'before',
            ]
        );

        $this->end_controls_section();

        // Icon Style
        $this->start_controls_section(
            'item_icon_style',
            [
                'label' => esc_html__('Icon Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => ['px' => ['min' => 0, 'max' => 200]],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .thumb .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => ['px' => ['min' => 0, 'max' => 200]],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .thumb .icon img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .thumb .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .thumb .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'icon_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-mission-box-items-2 .thumb .icon',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'icon_border',
                'selector' => '{{WRAPPER}} .grt-mission-box-items-2 .thumb .icon',
            ]
        );

        $this->add_responsive_control(
            'icon_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .thumb .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Item Content Style
        $this->start_controls_section(
            'item_content_style',
            [
                'label' => esc_html__('Item Content Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'content_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        // Item Title
        $this->add_control(
            'item_title_heading',
            [
                'label'     => esc_html__('Title', 'ftelements'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'item_title_typography',
                'selector' => '{{WRAPPER}} .grt-mission-box-items-2 .content .title',
            ]
        );

        $this->add_responsive_control(
            'item_title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .content .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('item_title_tabs');

        $this->start_controls_tab('item_title_normal', ['label' => esc_html__('Normal', 'ftelements')]);

        $this->add_control(
            'item_title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .content .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab('item_title_hover', ['label' => esc_html__('Hover', 'ftelements')]);

        $this->add_control(
            'item_title_hover_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-mission-box-items-2:hover .content .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        // Item Description
        $this->add_control(
            'item_description_heading',
            [
                'label'     => esc_html__('Description', 'ftelements'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'item_description_typography',
                'selector' => '{{WRAPPER}} .grt-mission-box-items-2 .content p',
            ]
        );

        $this->add_responsive_control(
            'item_description_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('item_desc_tabs');

        $this->start_controls_tab('item_desc_normal', ['label' => esc_html__('Normal', 'ftelements')]);

        $this->add_control(
            'item_description_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-mission-box-items-2 .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab('item_desc_hover', ['label' => esc_html__('Hover', 'ftelements')]);

        $this->add_control(
            'item_description_hover_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-mission-box-items-2:hover .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        // Raising Text Style
        $this->start_controls_section(
            'raising_style',
            [
                'label' => esc_html__('Raising Text Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'raising_alignment',
            [
                'label'     => esc_html__('Alignment', 'ftelements'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'   => ['title' => esc_html__('Left', 'ftelements'), 'icon' => 'eicon-text-align-left'],
                    'center' => ['title' => esc_html__('Center', 'ftelements'), 'icon' => 'eicon-text-align-center'],
                    'right'  => ['title' => esc_html__('Right', 'ftelements'), 'icon' => 'eicon-text-align-right'],
                ],
                'selectors' => [
                    '{{WRAPPER}} .raising-text' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'raising_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .raising-text',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'raising_border',
                'selector' => '{{WRAPPER}} .raising-text',
            ]
        );

        $this->add_responsive_control(
            'raising_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .raising-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'raising_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .raising-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'raising_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .raising-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'raising_text_heading',
            [
                'label'     => esc_html__('Pre Text', 'ftelements'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'raising_text_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .raising-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'raising_text_typography',
                'selector' => '{{WRAPPER}} .raising-text',
            ]
        );

        $this->add_control(
            'raising_highlight_heading',
            [
                'label'     => esc_html__('Highlighted Text', 'ftelements'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'raising_highlight_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .raising-text b' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'raising_highlight_typography',
                'selector' => '{{WRAPPER}} .raising-text b',
            ]
        );

        $this->add_control(
            'raising_icon_heading',
            [
                'label'     => esc_html__('Icon', 'ftelements'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'raising_icon_width',
            [
                'label'      => esc_html__('Icon Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .raising-text img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'raising_icon_spacing',
            [
                'label'      => esc_html__('Icon Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .raising-text img' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="grt-mission-section-2 fix section-padding">
            <div class="container">
                <div class="grt-section-title text-center">
                    <?php if (!empty($settings['sub_title'])): ?>
                        <span class="grt-sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                            <?php \Elementor\Icons_Manager::render_icon($settings['sub_title_icon'], ['aria-hidden' => 'true']); ?>
                            <?php echo esc_html($settings['sub_title']); ?>
                        </span>
                    <?php endif; ?>
                    <?php if (!empty($settings['title'])): ?>
                        <h2 class="split-title">
                            <?php echo wp_kses_post($settings['title']); ?>
                        </h2>
                    <?php endif; ?>
                </div>

                <div class="row">
                    <?php if (!empty($settings['feature_list'])): ?>
                        <?php foreach ($settings['feature_list'] as $item): ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
                                data-wow-delay=".<?php echo esc_attr($item['animation_delay'] ?? '2'); ?>s">
                                <div class="grt-mission-box-items-2">

                                    <div class="thumb">
                                        <?php
                                        // FIX: Safe check using null coalescing for image url
                                        $hover_img_url = $item['item_hover_image']['url'] ?? '';
                                        $icon_img_url  = $item['item_icon_image']['url'] ?? '';
                                        ?>
                                        <?php if (!empty($hover_img_url)): ?>
                                            <img class="hover-image"
                                                src="<?php echo esc_url($hover_img_url); ?>"
                                                alt="<?php echo esc_attr($item['item_title'] ?? ''); ?>">
                                        <?php endif; ?>
                                        <?php if (!empty($icon_img_url)): ?>
                                            <div class="icon">
                                                <img src="<?php echo esc_url($icon_img_url); ?>"
                                                    alt="<?php echo esc_attr($item['item_title'] ?? ''); ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="content">
                                        <?php if (!empty($item['item_title'])): ?>
                                            <h3 class="title"><?php echo esc_html($item['item_title']); ?></h3>
                                        <?php endif; ?>
                                        <?php if (!empty($item['item_description'])): ?>
                                            <p><?php echo wp_kses_post($item['item_description']); ?></p>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <?php if (!empty($settings['raising_pre_text']) || !empty($settings['raising_highlight_text'])): ?>
                    <p class="raising-text wow fadeInUp" data-wow-delay=".3s">
                        <?php
                        $raising_icon_url = $settings['raising_icon']['url'] ?? '';
                        if (!empty($raising_icon_url)):
                        ?>
                            <img src="<?php echo esc_url($raising_icon_url); ?>" alt="">
                        <?php endif; ?>
                        <?php echo esc_html($settings['raising_pre_text'] ?? ''); ?>
                        <?php if (!empty($settings['raising_highlight_text'])): ?>
                            <b><?php echo esc_html($settings['raising_highlight_text']); ?></b>
                        <?php endif; ?>
                    </p>
                <?php endif; ?>

            </div>
        </section>
        <?php
    }
}
