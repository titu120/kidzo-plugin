<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Typography;

defined('ABSPATH') || die();

class FT_Brand2_Widget extends \Elementor\Widget_Base
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
        return 'ft-brand2';
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
        return esc_html__('FT Brand 2', 'ftelements');
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
            'section_brand2_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'marquee_text',
            [
                'label' => esc_html__('Marquee Text', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Safe • Fun • Learning • Caring Environment for Every Child', 'ftelements'),
                'rows' => 3,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'star_icon',
            [
                'label' => esc_html__('Star Icon', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-2/shape/marque-star.svg',
                ],
            ]
        );

        $this->add_control(
            'bg_shape',
            [
                'label' => esc_html__('Background Shape', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-2/shape/marque-bg.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_wrap',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_section_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 2000],
                    '%' => ['min' => 0, 'max' => 100],
                    'vw' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2' => 'width: {{SIZE}}{{UNIT}};',
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
                    'px' => ['min' => 0, 'max' => 800],
                    'vh' => ['min' => 0, 'max' => 100],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .marquee-section2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_section_overflow',
            [
                'label' => esc_html__('Overflow', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'inherit' => esc_html__('Inherit', 'ftelements'),
                    'visible' => esc_html__('Visible', 'ftelements'),
                    'hidden' => esc_html__('Hidden', 'ftelements'),
                    'clip' => esc_html__('Clip', 'ftelements'),
                    'scroll' => esc_html__('Scroll', 'ftelements'),
                    'auto' => esc_html__('Auto', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2' => 'overflow: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'style_section_zindex',
            [
                'label' => esc_html__('Z-Index', 'ftelements'),
                'type' => Controls_Manager::NUMBER,
                'min' => 0,
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2' => 'z-index: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'style_section_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .marquee-section2',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'style_section_border',
                'selector' => '{{WRAPPER}} .marquee-section2',
            ]
        );

        $this->add_responsive_control(
            'style_section_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_section_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_bg_shape',
            [
                'label' => esc_html__('Background Shape', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_bg_shape_position_type',
            [
                'label' => esc_html__('Position', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'static' => esc_html__('Static', 'ftelements'),
                    'relative' => esc_html__('Relative', 'ftelements'),
                    'absolute' => esc_html__('Absolute', 'ftelements'),
                    'fixed' => esc_html__('Fixed', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .bg-shape' => 'position: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_bg_shape_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 2000],
                    '%' => ['min' => 0, 'max' => 100],
                    'vw' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .bg-shape' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_bg_shape_max_width',
            [
                'label' => esc_html__('Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 2000],
                    '%' => ['min' => 0, 'max' => 100],
                    'vw' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .bg-shape' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_bg_shape_height',
            [
                'label' => esc_html__('Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vh'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1200],
                    '%' => ['min' => 0, 'max' => 100],
                    'vh' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .bg-shape' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_bg_shape_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .bg-shape' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_bg_shape_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .bg-shape' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_bg_shape_position_top',
            [
                'label' => esc_html__('Position Top', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => -500, 'max' => 500],
                    '%' => ['min' => -100, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .bg-shape' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_bg_shape_position_left',
            [
                'label' => esc_html__('Position Left', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => -500, 'max' => 500],
                    '%' => ['min' => -100, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .bg-shape' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_bg_shape_position_right',
            [
                'label' => esc_html__('Position Right', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => -500, 'max' => 500],
                    '%' => ['min' => -100, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .bg-shape' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_bg_shape_position_bottom',
            [
                'label' => esc_html__('Position Bottom', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => -500, 'max' => 500],
                    '%' => ['min' => -100, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .bg-shape' => 'bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_bg_shape_zindex',
            [
                'label' => esc_html__('Z-Index', 'ftelements'),
                'type' => Controls_Manager::NUMBER,
                'min' => 0,
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .bg-shape' => 'z-index: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'style_bg_shape_img_css',
                'selector' => '{{WRAPPER}} .marquee-section2 .bg-shape img',
            ]
        );

        $this->add_responsive_control(
            'style_bg_shape_img_opacity',
            [
                'label' => esc_html__('Image Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .bg-shape img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_marquee',
            [
                'label' => esc_html__('Marquee', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_marquee_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .marquee' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_marquee_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .marquee' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_marquee_gap',
            [
                'label' => esc_html__('Column Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 200],
                    'em' => ['min' => 0, 'max' => 10],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .marquee' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'style_marquee_zindex',
            [
                'label' => esc_html__('Z-Index', 'ftelements'),
                'type' => Controls_Manager::NUMBER,
                'min' => 0,
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .marquee' => 'z-index: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'style_marquee_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .marquee-section2 .marquee',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_marquee_text',
            [
                'label' => esc_html__('Marquee Text', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'style_text_typography',
                'selector' => '{{WRAPPER}} .marquee-section2 .text2',
            ]
        );

        $this->add_control(
            'style_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_text_align',
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
                    '{{WRAPPER}} .marquee-section2 .text2' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_text_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .text2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_text_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .text2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_text_display',
            [
                'label' => esc_html__('Display', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'inline-flex' => esc_html__('Inline Flex', 'ftelements'),
                    'flex' => esc_html__('Flex', 'ftelements'),
                    'inline' => esc_html__('Inline', 'ftelements'),
                    'block' => esc_html__('Block', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .text2' => 'display: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_text_align_items',
            [
                'label' => esc_html__('Vertical Align (Flex)', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => esc_html__('Top', 'ftelements'),
                        'icon' => 'eicon-v-align-top',
                    ],
                    'center' => [
                        'title' => esc_html__('Middle', 'ftelements'),
                        'icon' => 'eicon-v-align-middle',
                    ],
                    'flex-end' => [
                        'title' => esc_html__('Bottom', 'ftelements'),
                        'icon' => 'eicon-v-align-bottom',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .text2' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_text_gap',
            [
                'label' => esc_html__('Icon & Text Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                    'em' => ['min' => 0, 'max' => 5],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .text2' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'style_text_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .marquee-section2 .text2',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'style_text_border',
                'selector' => '{{WRAPPER}} .marquee-section2 .text2',
            ]
        );

        $this->add_responsive_control(
            'style_text_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .text2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_star_icon',
            [
                'label' => esc_html__('Star Icon', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'style_star_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 200],
                    '%' => ['min' => 0, 'max' => 100],
                    'em' => ['min' => 0, 'max' => 10],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .text2 .ft-brand2__star' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_star_height',
            [
                'label' => esc_html__('Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 200],
                    '%' => ['min' => 0, 'max' => 100],
                    'em' => ['min' => 0, 'max' => 10],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .text2 .ft-brand2__star' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_star_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .text2 .ft-brand2__star' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'style_star_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .text2 .ft-brand2__star' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'style_star_css',
                'selector' => '{{WRAPPER}} .marquee-section2 .text2 .ft-brand2__star',
            ]
        );

        $this->add_responsive_control(
            'style_star_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .marquee-section2 .text2 .ft-brand2__star' => 'opacity: {{SIZE}};',
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

        $theme_shape_base = trailingslashit(get_template_directory_uri()) . 'assets/img/home-2/shape/';

        $marquee_text = isset($settings['marquee_text']) ? trim((string) $settings['marquee_text']) : '';
        if ($marquee_text === '') {
            $marquee_text = esc_html__('Safe • Fun • Learning • Caring Environment for Every Child', 'ftelements');
        }

        $star_url = !empty($settings['star_icon']['url']) ? $settings['star_icon']['url'] : $theme_shape_base . 'marque-star.svg';
        $bg_url = !empty($settings['bg_shape']['url']) ? $settings['bg_shape']['url'] : $theme_shape_base . 'marque-bg.png';

        $repeat_count = 8;
        $group_count = 4;

        ?>

        <div class="marquee-section2">
            <?php if ($bg_url) : ?>
            <div class="bg-shape">
                <img src="<?php echo esc_url($bg_url); ?>" alt="">
            </div>
            <?php endif; ?>
            <div class="marquee">
                <?php
                for ($g = 0; $g < $group_count; $g++) :
                    ?>
                <div class="marquee-group">
                    <?php
                    for ($i = 0; $i < $repeat_count; $i++) :
                        ?>
                    <div class="text2">
                        <?php if ($star_url) : ?>
                        <img class="ft-brand2__star" src="<?php echo esc_url($star_url); ?>" alt="">
                        <?php endif; ?>
                        <?php echo esc_html($marquee_text); ?>
                    </div>
                        <?php
                    endfor;
                    ?>
                </div>
                    <?php
                endfor;
                ?>
            </div>
        </div>

        <?php
    }
}
