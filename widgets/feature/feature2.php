<?php

use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;

defined('ABSPATH') || die();

class FT_Feature2_Widget extends \Elementor\Widget_Base
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
        return 'ft-feature2';
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
        return esc_html__('FT Feature 2', 'ftelements');
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
            'ft_feature2_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_heading',
            [
                'label' => esc_html__('Section Heading', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('our school facilities', 'ftelements'),
                'label_block' => true,
            ]
        );

        $theme_uri = get_template_directory_uri();

        $repeater = new Repeater();

        $repeater->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Feature', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'thumb',
            [
                'label' => esc_html__('Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/box-1.png',
                ],
            ]
        );

        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/icon1.svg',
                ],
            ]
        );

        $repeater->add_control(
            'animation_delay',
            [
                'label' => esc_html__('Animation Delay', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'description' => esc_html__('e.g. .2s — leave empty for no delay', 'ftelements'),
            ]
        );

        $this->add_control(
            'facility_items',
            [
                'label' => esc_html__('Facility Items', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => esc_html__('online class', 'ftelements'),
                        'thumb' => ['url' => $theme_uri . '/assets/img/home-2/shape/box-1.png'],
                        'icon' => ['url' => $theme_uri . '/assets/img/icon/icon1.svg'],
                        'animation_delay' => '',
                    ],
                    [
                        'title' => esc_html__('healthy foods', 'ftelements'),
                        'thumb' => ['url' => $theme_uri . '/assets/img/home-2/shape/box-2.png'],
                        'icon' => ['url' => $theme_uri . '/assets/img/icon/icon2.svg'],
                        'animation_delay' => '.2s',
                    ],
                    [
                        'title' => esc_html__('Pickup & drop', 'ftelements'),
                        'thumb' => ['url' => $theme_uri . '/assets/img/home-2/shape/box-3.png'],
                        'icon' => ['url' => $theme_uri . '/assets/img/icon/icon3.svg'],
                        'animation_delay' => '.4s',
                    ],
                    [
                        'title' => esc_html__('play ground', 'ftelements'),
                        'thumb' => ['url' => $theme_uri . '/assets/img/home-2/shape/box-4.png'],
                        'icon' => ['url' => $theme_uri . '/assets/img/icon/icon4.svg'],
                        'animation_delay' => '.6s',
                    ],
                    [
                        'title' => esc_html__('100% safety', 'ftelements'),
                        'thumb' => ['url' => $theme_uri . '/assets/img/home-2/shape/box-5.png'],
                        'icon' => ['url' => $theme_uri . '/assets/img/icon/icon5.svg'],
                        'animation_delay' => '.7s',
                    ],
                    [
                        'title' => esc_html__('best quality', 'ftelements'),
                        'thumb' => ['url' => $theme_uri . '/assets/img/home-2/shape/box-6.png'],
                        'icon' => ['url' => $theme_uri . '/assets/img/icon/icon6.svg'],
                        'animation_delay' => '.9s',
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature2_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .school-facilities-section',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'section_border',
                'selector' => '{{WRAPPER}} .school-facilities-section',
            ]
        );

        $this->add_responsive_control(
            'section_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_min_height',
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
                    '{{WRAPPER}} .school-facilities-section' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature2_style_heading_row',
            [
                'label' => esc_html__('Heading Row', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'heading_row_align',
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
                    '{{WRAPPER}} .school-facilities-section .facilities-text' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_row_gap',
            [
                'label' => esc_html__('Gap Between Lines & Text', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 100],
                    'em' => ['min' => 0, 'max' => 5],
                    'rem' => ['min' => 0, 'max' => 5],
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .facilities-text' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_row_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .facilities-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_row_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .facilities-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature2_style_heading_lines',
            [
                'label' => esc_html__('Heading Lines', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'heading_line_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 600],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .facilities-text .line' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_line_height',
            [
                'label' => esc_html__('Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 20],
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .facilities-text .line' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'heading_line_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .facilities-text .line' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_line_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .facilities-text .line' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature2_style_heading_text',
            [
                'label' => esc_html__('Heading Text', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'heading_text_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .facilities-text p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'heading_text_typography',
                'selector' => '{{WRAPPER}} .school-facilities-section .facilities-text p',
            ]
        );

        $this->add_control(
            'heading_text_transform',
            [
                'label' => esc_html__('Transform', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'inherit' => esc_html__('Default', 'ftelements'),
                    'none' => esc_html__('None', 'ftelements'),
                    'uppercase' => esc_html__('Uppercase', 'ftelements'),
                    'lowercase' => esc_html__('Lowercase', 'ftelements'),
                    'capitalize' => esc_html__('Capitalize', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .facilities-text p' => 'text-transform: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_text_align',
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
                    '{{WRAPPER}} .school-facilities-section .facilities-text p' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_text_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .facilities-text p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_text_max_width',
            [
                'label' => esc_html__('Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1200],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .facilities-text p' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature2_style_grid',
            [
                'label' => esc_html__('Grid', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'grid_columns',
            [
                'label' => esc_html__('Columns', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-wrapper' => 'grid-template-columns: repeat({{VALUE}}, 1fr);',
                ],
            ]
        );

        $this->add_responsive_control(
            'grid_gap',
            [
                'label' => esc_html__('Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 100],
                    'em' => ['min' => 0, 'max' => 5],
                    'rem' => ['min' => 0, 'max' => 5],
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-wrapper' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'grid_align_items',
            [
                'label' => esc_html__('Align Items', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'inherit' => esc_html__('Default', 'ftelements'),
                    'start' => esc_html__('Start', 'ftelements'),
                    'center' => esc_html__('Center', 'ftelements'),
                    'end' => esc_html__('End', 'ftelements'),
                    'stretch' => esc_html__('Stretch', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-wrapper' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'grid_justify_items',
            [
                'label' => esc_html__('Justify Items', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'inherit' => esc_html__('Default', 'ftelements'),
                    'start' => esc_html__('Start', 'ftelements'),
                    'center' => esc_html__('Center', 'ftelements'),
                    'end' => esc_html__('End', 'ftelements'),
                    'stretch' => esc_html__('Stretch', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-wrapper' => 'justify-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'grid_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'grid_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature2_style_box',
            [
                'label' => esc_html__('Facility Box', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'box_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .school-facilities-box-items',
            ]
        );

        $this->add_responsive_control(
            'box_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'box_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'box_border',
                'selector' => '{{WRAPPER}} .school-facilities-box-items',
            ]
        );

        $this->add_responsive_control(
            'box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'box_text_align',
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
                    '{{WRAPPER}} .school-facilities-box-items' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'box_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature2_style_thumb',
            [
                'label' => esc_html__('Shape Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'thumb_max_width',
            [
                'label' => esc_html__('Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 500],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .thumb' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'thumb_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .thumb' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'thumb_img_border_radius',
            [
                'label' => esc_html__('Image Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .thumb > img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'thumb_img_opacity',
            [
                'label' => esc_html__('Image Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .thumb > img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'thumb_img_border',
                'selector' => '{{WRAPPER}} .school-facilities-box-items .thumb > img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature2_style_icon',
            [
                'label' => esc_html__('Icon', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 200],
                    '%' => ['min' => 0, 'max' => 100],
                    'vw' => ['min' => 0, 'max' => 50],
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .thumb .icon img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_position_top',
            [
                'label' => esc_html__('Vertical Position', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['%', 'px'],
                'range' => [
                    '%' => ['min' => 0, 'max' => 100],
                    'px' => ['min' => -200, 'max' => 200],
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .thumb .icon' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_position_left',
            [
                'label' => esc_html__('Horizontal Position', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['%', 'px'],
                'range' => [
                    '%' => ['min' => 0, 'max' => 100],
                    'px' => ['min' => -200, 'max' => 200],
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .thumb .icon' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .thumb .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'icon_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .school-facilities-box-items .thumb .icon',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'icon_border',
                'selector' => '{{WRAPPER}} .school-facilities-box-items .thumb .icon',
            ]
        );

        $this->add_responsive_control(
            'icon_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .thumb .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_z_index',
            [
                'label' => esc_html__('Z-Index', 'ftelements'),
                'type' => Controls_Manager::NUMBER,
                'min' => -10,
                'max' => 100,
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .thumb .icon' => 'z-index: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature2_style_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('ft_feature2_title_style_tabs');

        $this->start_controls_tab(
            'ft_feature2_title_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'ft_feature2_title_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'title_color_hover',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items:hover .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .school-facilities-box-items .title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-box-items .title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature2_style_container',
            [
                'label' => esc_html__('Inner Container', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'inner_container_max_width',
            [
                'label' => esc_html__('Content Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1920],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .container' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'inner_container_padding',
            [
                'label' => esc_html__('Horizontal Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'allowed_dimensions' => ['left', 'right'],
                'selectors' => [
                    '{{WRAPPER}} .school-facilities-section .container' => 'padding-left: {{LEFT}}{{UNIT}}; padding-right: {{RIGHT}}{{UNIT}};',
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
        $heading = isset($settings['section_heading']) ? $settings['section_heading'] : '';
        $items = !empty($settings['facility_items']) && is_array($settings['facility_items']) ? $settings['facility_items'] : [];

        ?>



        <section class="school-facilities-section fix section-padding pt-0">
            <div class="container">
                <?php if ($heading !== '') : ?>
                <div class="facilities-text wow fadeInUp">
                    <div class="line"></div>
                    <p>
                        <?php echo esc_html($heading); ?>
                    </p>
                    <div class="line"></div>
                </div>
                <?php endif; ?>
                <div class="school-facilities-wrapper">
                    <?php foreach ($items as $item) : ?>
                        <?php
                        $title = isset($item['title']) ? $item['title'] : '';
                        $thumb_url = !empty($item['thumb']['url']) ? $item['thumb']['url'] : '';
                        $icon_url = !empty($item['icon']['url']) ? $item['icon']['url'] : '';
                        $delay = isset($item['animation_delay']) ? trim((string) $item['animation_delay']) : '';
                        ?>
                    <div class="school-facilities-box-items wow fadeInUp"<?php echo $delay !== '' ? ' data-wow-delay="' . esc_attr($delay) . '"' : ''; ?>>
                        <div class="thumb">
                            <?php if ($thumb_url !== '') : ?>
                            <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr($title); ?>">
                            <?php endif; ?>
                            <div class="icon">
                                <?php if ($icon_url !== '') : ?>
                                <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($title); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if ($title !== '') : ?>
                        <h2 class="title"><?php echo esc_html($title); ?></h2>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>








<?php
    }
}
