<?php

use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Typography;

defined('ABSPATH') || die();

class FT_Choose4_Widget extends \Elementor\Widget_Base
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
        return 'ft-choose4';
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
        return esc_html__('FT Choose 4', 'ftelements');
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
            'choose4_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_bg',
            [
                'label'   => esc_html__('Section Background', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/inner-page/choose-us-bg.png',
                ],
            ]
        );

        $this->add_control(
            'img_shape_ball',
            [
                'label'   => esc_html__('Decor: Ball Shape', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/ball.png',
                ],
            ]
        );

        $this->add_control(
            'img_shape_girl',
            [
                'label'   => esc_html__('Decor: Girl Shape', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/girl.png',
                ],
            ]
        );

        $this->add_control(
            'img_main',
            [
                'label'   => esc_html__('Center Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/choose-us.png',
                ],
            ]
        );

        $this->add_control(
            'img_check_icon',
            [
                'label'   => esc_html__('Default List Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/icon/check3.svg',
                ],
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label'   => esc_html__('Subtitle', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Why choose us', 'ftelements'),
            ]
        );

        $this->add_control(
            'title_line1',
            [
                'label'   => esc_html__('Title Line 1', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Why Families Choose Us', 'ftelements'),
            ]
        );

        $this->add_control(
            'title_line2',
            [
                'label'   => esc_html__('Title Line 2', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Our Nannies', 'ftelements'),
            ]
        );

        $list_repeater = new Repeater();

        $list_repeater->add_control(
            'item_icon',
            [
                'label'       => esc_html__('Icon (optional)', 'ftelements'),
                'type'        => Controls_Manager::MEDIA,
                'description' => esc_html__('Overrides the default list icon for this row.', 'ftelements'),
            ]
        );

        $list_repeater->add_control(
            'item_title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__("Focus on child-friendly,\nsafe, & quality education", 'ftelements'),
                'description' => esc_html__('Line breaks are preserved.', 'ftelements'),
            ]
        );

        $list_repeater->add_control(
            'item_highlight',
            [
                'label'        => esc_html__('Highlighted', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__('Yes', 'ftelements'),
                'label_off'    => esc_html__('No', 'ftelements'),
                'return_value' => 'yes',
                'default'      => '',
            ]
        );

        $this->add_control(
            'list_items',
            [
                'label'       => esc_html__('Feature List', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $list_repeater->get_controls(),
                'default'     => [
                    [
                        'item_title' => esc_html__("Focus on child-friendly,\nsafe, & quality education", 'ftelements'),
                    ],
                    [
                        'item_title'     => esc_html__("Carefully screened &\nbackground-checked", 'ftelements'),
                        'item_highlight' => 'yes',
                    ],
                    [
                        'item_title' => esc_html__("Child-first safety and\ncare approach", 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ item_title }}}',
            ]
        );

        $this->end_controls_section();

        /* ------------------------------------------------------------------
         * Style tab — no default values on style controls; no box shadow groups.
         * ------------------------------------------------------------------ */

        $this->start_controls_section(
            'choose4_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'style_section_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .ft-choose4',
            ]
        );

        $this->add_responsive_control(
            'style_section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_section_min_height',
            [
                'label'      => esc_html__('Min Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', '%'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 2000],
                    'vh' => ['min' => 0, 'max' => 100],
                    '%'  => ['min' => 0, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'style_section_border',
                'selector' => '{{WRAPPER}} .ft-choose4',
            ]
        );

        $this->add_responsive_control(
            'style_section_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_section_overflow',
            [
                'label'     => esc_html__('Overflow', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''         => esc_html__('Default', 'ftelements'),
                    'visible'  => esc_html__('Visible', 'ftelements'),
                    'hidden'   => esc_html__('Hidden', 'ftelements'),
                    'clip'     => esc_html__('Clip', 'ftelements'),
                    'scroll'   => esc_html__('Scroll', 'ftelements'),
                    'auto'     => esc_html__('Auto', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4' => 'overflow: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'style_section_extra_bg_size',
            [
                'label'     => esc_html__('Background Image Size (extra)', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''        => esc_html__('Default', 'ftelements'),
                    'auto'    => esc_html__('Auto', 'ftelements'),
                    'cover'   => esc_html__('Cover', 'ftelements'),
                    'contain' => esc_html__('Contain', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4' => 'background-size: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'style_section_extra_bg_position',
            [
                'label'     => esc_html__('Background Image Position (extra)', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''              => esc_html__('Default', 'ftelements'),
                    'center center' => esc_html__('Center Center', 'ftelements'),
                    'center top'    => esc_html__('Center Top', 'ftelements'),
                    'center bottom' => esc_html__('Center Bottom', 'ftelements'),
                    'left top'      => esc_html__('Left Top', 'ftelements'),
                    'right top'     => esc_html__('Right Top', 'ftelements'),
                    'left bottom'   => esc_html__('Left Bottom', 'ftelements'),
                    'right bottom'  => esc_html__('Right Bottom', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4' => 'background-position: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose4_style_shapes',
            [
                'label' => esc_html__('Decor Shapes', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_ball_width',
            [
                'label'      => esc_html__('Ball Image Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%'  => ['min' => 0, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .doll-shape img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_control(
            'style_ball_opacity',
            [
                'label'     => esc_html__('Ball Opacity', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4 .doll-shape' => 'opacity: calc({{SIZE}} * 0.01);',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_girl_width',
            [
                'label'      => esc_html__('Girl Image Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%'  => ['min' => 0, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .girl-shape img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_control(
            'style_girl_opacity',
            [
                'label'     => esc_html__('Girl Opacity', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4 .girl-shape' => 'opacity: calc({{SIZE}} * 0.01);',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose4_style_heading_area',
            [
                'label' => esc_html__('Heading Area', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_heading_align',
            [
                'label'     => esc_html__('Alignment', 'ftelements'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'   => [
                        'title' => esc_html__('Left', 'ftelements'),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'right'  => [
                        'title' => esc_html__('Right', 'ftelements'),
                        'icon'  => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4 .section-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_heading_margin',
            [
                'label'      => esc_html__('Heading Block Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_heading_padding',
            [
                'label'      => esc_html__('Heading Block Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose4_style_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'style_subtitle_typography',
                'selector' => '{{WRAPPER}} .ft-choose4 .section-title .sec-sub',
            ]
        );

        $this->add_control(
            'style_subtitle_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_subtitle_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose4_style_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'style_title_typography',
                'selector' => '{{WRAPPER}} .ft-choose4 .section-title .sec_title',
            ]
        );

        $this->add_control(
            'style_title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4 .section-title .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .section-title .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose4_style_center_image',
            [
                'label' => esc_html__('Center Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_center_image_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 1200],
                    '%'  => ['min' => 0, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .choose-us-image img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_center_image_max_width',
            [
                'label'      => esc_html__('Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 1200],
                    '%'  => ['min' => 0, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .choose-us-image img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_center_image_align',
            [
                'label'     => esc_html__('Alignment', 'ftelements'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'   => [
                        'title' => esc_html__('Left', 'ftelements'),
                        'icon'  => 'eicon-h-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon'  => 'eicon-h-align-center',
                    ],
                    'right'  => [
                        'title' => esc_html__('Right', 'ftelements'),
                        'icon'  => 'eicon-h-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4 .choose-us-image' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'style_center_image_border',
                'selector' => '{{WRAPPER}} .ft-choose4 .choose-us-image img',
            ]
        );

        $this->add_responsive_control(
            'style_center_image_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .choose-us-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_center_image_padding',
            [
                'label'      => esc_html__('Image Wrap Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .choose-us-image' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose4_style_list',
            [
                'label' => esc_html__('Feature List', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_list_gap',
            [
                'label'      => esc_html__('Space Between Items', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 120],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .values-list li + li' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_list_item_padding',
            [
                'label'      => esc_html__('Item Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .values-list li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'style_list_item_border',
                'selector' => '{{WRAPPER}} .ft-choose4 .values-list li',
            ]
        );

        $this->add_responsive_control(
            'style_list_item_radius',
            [
                'label'      => esc_html__('Item Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .values-list li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_list_item_bg',
            [
                'label'     => esc_html__('Item Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4 .values-list li' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'style_list_item_bg_active',
            [
                'label'     => esc_html__('Active Item Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4 .values-list li.active' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose4_style_list_icon',
            [
                'label' => esc_html__('List Icons', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_list_icon_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 200],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .values-list .icon img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_list_icon_box_width',
            [
                'label'      => esc_html__('Icon Box Min Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 200],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .values-list .icon' => 'min-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_list_icon_margin',
            [
                'label'      => esc_html__('Icon Box Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .values-list .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose4_style_list_text',
            [
                'label' => esc_html__('List Text', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'style_list_text_typography',
                'selector' => '{{WRAPPER}} .ft-choose4 .values-list .title',
            ]
        );

        $this->add_control(
            'style_list_text_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4 .values-list .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'style_list_text_color_active',
            [
                'label'     => esc_html__('Active Item Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4 .values-list li.active .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_list_text_margin',
            [
                'label'      => esc_html__('Title Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .values-list .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose4_style_row',
            [
                'label' => esc_html__('Content Row', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_row_vertical_align',
            [
                'label'     => esc_html__('Vertical Align', 'ftelements'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'flex-start' => [
                        'title' => esc_html__('Top', 'ftelements'),
                        'icon'  => 'eicon-v-align-top',
                    ],
                    'center'     => [
                        'title' => esc_html__('Middle', 'ftelements'),
                        'icon'  => 'eicon-v-align-middle',
                    ],
                    'flex-end'   => [
                        'title' => esc_html__('Bottom', 'ftelements'),
                        'icon'  => 'eicon-v-align-bottom',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ft-choose4 .why-choose-wrapper-3 .row' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_row_gap',
            [
                'label'      => esc_html__('Columns Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 120],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .ft-choose4 .why-choose-wrapper-3 .row' => 'row-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    /**
     * @param array $settings
     * @param string $default_icon
     * @param string $ul_class
     */
    protected function render_values_list($settings, $default_icon, $ul_class = '')
    {
        $items = isset($settings['list_items']) ? $settings['list_items'] : [];
        if (empty($items)) {
            return;
        }
        $ul_classes = trim('values-list ' . $ul_class);
        ?>
        <ul class="<?php echo esc_attr($ul_classes); ?>">
            <?php foreach ($items as $item) :
                $icon = !empty($item['item_icon']['url']) ? $item['item_icon']['url'] : $default_icon;
                $li_class = (!empty($item['item_highlight']) && 'yes' === $item['item_highlight']) ? 'active' : '';
                ?>
                <li<?php echo $li_class ? ' class="' . esc_attr($li_class) . '"' : ''; ?>>
                    <div class="icon">
                        <?php if ($icon) : ?>
                            <img src="<?php echo esc_url($icon); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="content">
                        <h3 class="title"><?php echo nl2br(esc_html($item['item_title'] ?? '')); ?></h3>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php
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

        $section_bg = !empty($settings['section_bg']['url']) ? $settings['section_bg']['url'] : '';
        $shape_ball = !empty($settings['img_shape_ball']['url']) ? $settings['img_shape_ball']['url'] : '';
        $shape_girl = !empty($settings['img_shape_girl']['url']) ? $settings['img_shape_girl']['url'] : '';
        $main_img   = !empty($settings['img_main']['url']) ? $settings['img_main']['url'] : '';
        $check_icon = !empty($settings['img_check_icon']['url']) ? $settings['img_check_icon']['url'] : '';

        $section_style = '';
        if ($section_bg) {
            $section_style = 'background-image: url(' . esc_url($section_bg) . ');';
        }

        ?>

        <section class="ft-choose4 why-choose-us-section-3 inner-style fix section-padding how-work-section-3 bg-cover"<?php echo $section_style ? ' style="' . esc_attr($section_style) . '"' : ''; ?>>
            <div class="doll-shape bz-gsap-animate-circle">
                <?php if ($shape_ball) : ?>
                    <img src="<?php echo esc_url($shape_ball); ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="girl-shape bz-gsap-animate-circle">
                <?php if ($shape_girl) : ?>
                    <img src="<?php echo esc_url($shape_girl); ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <?php if (!empty($settings['sub_title'])) : ?>
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['sub_title']); ?></span>
                    <?php endif; ?>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                        <?php echo esc_html($settings['title_line1'] ?? ''); ?>
                        <?php if (!empty($settings['title_line2'])) : ?>
                            <br>
                            <?php echo esc_html($settings['title_line2']); ?>
                        <?php endif; ?>
                    </h2>
                </div>
                <div class="why-choose-wrapper-3">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <?php $this->render_values_list($settings, $check_icon, ''); ?>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 order-2 order-xl-1 wow fadeInUp" data-wow-delay=".5s">
                            <div class="choose-us-image">
                                <?php if ($main_img) : ?>
                                    <img src="<?php echo esc_url($main_img); ?>" alt="">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 order-1 order-xl-2 wow fadeInUp" data-wow-delay=".7s">
                            <?php $this->render_values_list($settings, $check_icon, 'style-2'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
    }
}
