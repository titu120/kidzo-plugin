<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Typography;

defined('ABSPATH') || die();

class FT_Cta3_Widget extends \Elementor\Widget_Base
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
        return 'ft-cta3';
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
        return esc_html__('FT CTA 3', 'ftelements');
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
            'cta3_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label'       => esc_html__('Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Newsletter', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('Sign Up To Our Newsletter', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'email_placeholder',
            [
                'label'       => esc_html__('Email Placeholder', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Email Address', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label'       => esc_html__('Button Text', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Subscribe Now', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'form_action',
            [
                'label'       => esc_html__('Form Action URL', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'default'     => [
                    'url' => '#',
                ],
                'description' => esc_html__('Set your newsletter handler or mailing list endpoint.', 'ftelements'),
            ]
        );

        $this->add_control(
            'form_method',
            [
                'label'   => esc_html__('Form Method', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'post' => 'POST',
                    'get'  => 'GET',
                ],
                'default' => 'post',
            ]
        );

        $this->add_control(
            'img_line_shape',
            [
                'label'   => esc_html__('Decor: Line Shape 1', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/line-shape.png',
                ],
            ]
        );

        $this->add_control(
            'img_line_shape2',
            [
                'label'   => esc_html__('Decor: Line Shape 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/line-shape2.png',
                ],
            ]
        );

        $this->add_control(
            'img_plane',
            [
                'label'   => esc_html__('Decor: Plane', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/plane.png',
                ],
            ]
        );

        $this->add_control(
            'img_flower',
            [
                'label'   => esc_html__('Decor: Flower', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/flower.png',
                ],
            ]
        );

        $this->add_control(
            'img_vec1',
            [
                'label'   => esc_html__('Decor: Vector 1', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/vec2.png',
                ],
            ]
        );

        $this->add_control(
            'img_vec2',
            [
                'label'   => esc_html__('Decor: Vector 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/vec3.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta3_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_min_height',
            [
                'label'      => esc_html__('Min Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                    ],
                    'vh' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-section' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range'      => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-section' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'section_overflow',
            [
                'label'     => esc_html__('Overflow', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''        => esc_html__('Default', 'ftelements'),
                    'visible' => esc_html__('Visible', 'ftelements'),
                    'hidden'  => esc_html__('Hidden', 'ftelements'),
                    'auto'    => esc_html__('Auto', 'ftelements'),
                    'clip'    => esc_html__('Clip', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .newsletter-section' => 'overflow: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'section_position',
            [
                'label'     => esc_html__('Position', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''         => esc_html__('Default', 'ftelements'),
                    'relative' => esc_html__('Relative', 'ftelements'),
                    'absolute' => esc_html__('Absolute', 'ftelements'),
                    'fixed'    => esc_html__('Fixed', 'ftelements'),
                    'sticky'   => esc_html__('Sticky', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .newsletter-section' => 'position: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_z_index',
            [
                'label'     => esc_html__('Z-Index', 'ftelements'),
                'type'      => Controls_Manager::NUMBER,
                'min'       => -9999,
                'max'       => 99999,
                'selectors' => [
                    '{{WRAPPER}} .newsletter-section' => 'z-index: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_align',
            [
                'label'     => esc_html__('Text Align', 'ftelements'),
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
                    '{{WRAPPER}} .newsletter-section' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .newsletter-section',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'section_border',
                'selector' => '{{WRAPPER}} .newsletter-section',
            ]
        );

        $this->add_responsive_control(
            'section_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-section' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta3_style_wrapper',
            [
                'label' => esc_html__('Newsletter Wrapper', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'wrapper_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-wrapper.style-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'wrapper_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-wrapper.style-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'wrapper_min_height',
            [
                'label'      => esc_html__('Min Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-wrapper.style-2' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'wrapper_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .newsletter-wrapper.style-2',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'wrapper_border',
                'selector' => '{{WRAPPER}} .newsletter-wrapper.style-2',
            ]
        );

        $this->add_responsive_control(
            'wrapper_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-wrapper.style-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta3_style_container',
            [
                'label' => esc_html__('Container', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'container_max_width',
            [
                'label'      => esc_html__('Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1920,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-section .container' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'container_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-section .container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'container_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-section .container' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta3_style_newsletter_bg',
            [
                'label' => esc_html__('Newsletter Background Layer', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'newsletter_bg_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-bg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'newsletter_bg_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vh'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-bg' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'newsletter_bg_opacity',
            [
                'label'      => esc_html__('Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => 0.01,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-bg' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'newsletter_bg_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .newsletter-bg',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'newsletter_bg_border',
                'selector' => '{{WRAPPER}} .newsletter-bg',
            ]
        );

        $this->add_responsive_control(
            'newsletter_bg_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-bg' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta3_style_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'content_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-wrapper.style-2 .content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-wrapper.style-2 .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_align',
            [
                'label'     => esc_html__('Text Align', 'ftelements'),
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
                    '{{WRAPPER}} .newsletter-wrapper.style-2 .content' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta3_style_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .newsletter-wrapper.style-2 .sec-sub',
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newsletter-wrapper.style-2 .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-wrapper.style-2 .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_spacing_below',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-wrapper.style-2 .sec-sub' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta3_style_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .newsletter-wrapper.style-2 .tx-title.sec_title',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newsletter-wrapper.style-2 .tx-title.sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-wrapper.style-2 .tx-title.sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_spacing_below',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-wrapper.style-2 .tx-title.sec_title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta3_style_form',
            [
                'label' => esc_html__('Form', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'form_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'form_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'form_gap',
            [
                'label'      => esc_html__('Gap Between Items', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-items' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'form_display',
            [
                'label'     => esc_html__('Display', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''            => esc_html__('Default', 'ftelements'),
                    'flex'        => esc_html__('Flex', 'ftelements'),
                    'inline-flex' => esc_html__('Inline Flex', 'ftelements'),
                    'block'       => esc_html__('Block', 'ftelements'),
                    'grid'        => esc_html__('Grid', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .newsletter-items' => 'display: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'form_flex_wrap',
            [
                'label'     => esc_html__('Flex Wrap', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''           => esc_html__('Default', 'ftelements'),
                    'nowrap'     => esc_html__('No Wrap', 'ftelements'),
                    'wrap'       => esc_html__('Wrap', 'ftelements'),
                    'wrap-reverse' => esc_html__('Wrap Reverse', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .newsletter-items' => 'flex-wrap: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'form_align_items',
            [
                'label'     => esc_html__('Align Items', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''             => esc_html__('Default', 'ftelements'),
                    'stretch'      => esc_html__('Stretch', 'ftelements'),
                    'flex-start'   => esc_html__('Start', 'ftelements'),
                    'center'       => esc_html__('Center', 'ftelements'),
                    'flex-end'     => esc_html__('End', 'ftelements'),
                    'baseline'     => esc_html__('Baseline', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .newsletter-items' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'form_justify_content',
            [
                'label'     => esc_html__('Justify Content', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''              => esc_html__('Default', 'ftelements'),
                    'flex-start'    => esc_html__('Start', 'ftelements'),
                    'center'        => esc_html__('Center', 'ftelements'),
                    'flex-end'      => esc_html__('End', 'ftelements'),
                    'space-between' => esc_html__('Space Between', 'ftelements'),
                    'space-around'  => esc_html__('Space Around', 'ftelements'),
                    'space-evenly'  => esc_html__('Space Evenly', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .newsletter-items' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'form_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .newsletter-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'form_border',
                'selector' => '{{WRAPPER}} .newsletter-items',
            ]
        );

        $this->add_responsive_control(
            'form_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta3_style_icon',
            [
                'label' => esc_html__('Envelope Icon', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_size',
            [
                'label'      => esc_html__('Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-items .icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'icon_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newsletter-items .icon i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-items .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-items .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta3_style_input',
            [
                'label' => esc_html__('Email Field', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'input_typography',
                'selector' => '{{WRAPPER}} .newsletter-items .form-clt input',
            ]
        );

        $this->add_control(
            'input_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newsletter-items .form-clt input' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'input_placeholder_color',
            [
                'label'     => esc_html__('Placeholder Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newsletter-items .form-clt input::placeholder' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'input_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .newsletter-items .form-clt input',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'input_border',
                'selector' => '{{WRAPPER}} .newsletter-items .form-clt input',
            ]
        );

        $this->add_responsive_control(
            'input_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-items .form-clt input' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'input_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-items .form-clt input' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'input_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-items .form-clt input' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'input_min_height',
            [
                'label'      => esc_html__('Min Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-items .form-clt input' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta3_style_button',
            [
                'label' => esc_html__('Subscribe Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'button_typography',
                'selector' => '{{WRAPPER}} .subscribe-btn',
            ]
        );

        $this->start_controls_tabs('cta3_button_style_tabs');

        $this->start_controls_tab(
            'cta3_button_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'button_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .subscribe-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'button_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .subscribe-btn',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'button_border',
                'selector' => '{{WRAPPER}} .subscribe-btn',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'cta3_button_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'button_hover_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .subscribe-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'button_background_hover',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .subscribe-btn:hover',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'button_border_hover',
                'selector' => '{{WRAPPER}} .subscribe-btn:hover',
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'button_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .subscribe-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .subscribe-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .subscribe-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_min_width',
            [
                'label'      => esc_html__('Min Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .subscribe-btn' => 'min-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $decor_sections = [
            'line_shape' => [
                'label'    => esc_html__('Decor: Line Shape 1', 'ftelements'),
                'wrapper'  => '{{WRAPPER}} .line-shape',
                'img'      => '{{WRAPPER}} .line-shape img',
            ],
            'line_shape2' => [
                'label'    => esc_html__('Decor: Line Shape 2', 'ftelements'),
                'wrapper'  => '{{WRAPPER}} .line-shape2',
                'img'      => '{{WRAPPER}} .line-shape2 img',
            ],
            'plane' => [
                'label'    => esc_html__('Decor: Plane', 'ftelements'),
                'wrapper'  => '{{WRAPPER}} .plane-1',
                'img'      => '{{WRAPPER}} .plane-1 img',
            ],
            'flower' => [
                'label'    => esc_html__('Decor: Flower', 'ftelements'),
                'wrapper'  => '{{WRAPPER}} .flower-shape',
                'img'      => '{{WRAPPER}} .flower-shape img',
            ],
            'vec1' => [
                'label'    => esc_html__('Decor: Vector 1', 'ftelements'),
                'wrapper'  => '{{WRAPPER}} .vec-1',
                'img'      => '{{WRAPPER}} .vec-1 img',
            ],
            'vec2' => [
                'label'    => esc_html__('Decor: Vector 2', 'ftelements'),
                'wrapper'  => '{{WRAPPER}} .vec-2',
                'img'      => '{{WRAPPER}} .vec-2 img',
            ],
        ];

        foreach ($decor_sections as $key => $decor) {
            $this->start_controls_section(
                'cta3_style_' . $key,
                [
                    'label' => $decor['label'],
                    'tab'   => Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                $key . '_width',
                [
                    'label'      => esc_html__('Width', 'ftelements'),
                    'type'       => Controls_Manager::SLIDER,
                    'size_units' => ['px', '%'],
                    'selectors'  => [
                        $decor['img'] => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $key . '_max_width',
                [
                    'label'      => esc_html__('Max Width', 'ftelements'),
                    'type'       => Controls_Manager::SLIDER,
                    'size_units' => ['px', '%'],
                    'selectors'  => [
                        $decor['img'] => 'max-width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $key . '_height',
                [
                    'label'      => esc_html__('Height', 'ftelements'),
                    'type'       => Controls_Manager::SLIDER,
                    'size_units' => ['px', '%', 'vh'],
                    'selectors'  => [
                        $decor['img'] => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $key . '_opacity',
                [
                    'label'      => esc_html__('Opacity', 'ftelements'),
                    'type'       => Controls_Manager::SLIDER,
                    'range'      => [
                        'px' => [
                            'min'  => 0,
                            'max'  => 1,
                            'step' => 0.01,
                        ],
                    ],
                    'selectors'  => [
                        $decor['img'] => 'opacity: {{SIZE}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $key . '_margin',
                [
                    'label'      => esc_html__('Margin', 'ftelements'),
                    'type'       => Controls_Manager::DIMENSIONS,
                    'size_units' => ['px', '%', 'em', 'rem'],
                    'selectors'  => [
                        $decor['wrapper'] => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $key . '_z_index',
                [
                    'label'     => esc_html__('Z-Index', 'ftelements'),
                    'type'      => Controls_Manager::NUMBER,
                    'min'       => -9999,
                    'max'       => 99999,
                    'selectors' => [
                        $decor['wrapper'] => 'z-index: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Css_Filter::get_type(),
                [
                    'name'     => $key . '_css_filters',
                    'selector' => $decor['img'],
                ]
            );

            $this->end_controls_section();
        }
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

        $img_line_shape = !empty($settings['img_line_shape']['url']) ? $settings['img_line_shape']['url'] : $theme_uri . '/assets/img/home-2/line-shape.png';
        $img_line_shape2 = !empty($settings['img_line_shape2']['url']) ? $settings['img_line_shape2']['url'] : $theme_uri . '/assets/img/home-2/line-shape2.png';
        $img_plane = !empty($settings['img_plane']['url']) ? $settings['img_plane']['url'] : $theme_uri . '/assets/img/home-2/shape/plane.png';
        $img_flower = !empty($settings['img_flower']['url']) ? $settings['img_flower']['url'] : $theme_uri . '/assets/img/home-2/shape/flower.png';
        $img_vec1 = !empty($settings['img_vec1']['url']) ? $settings['img_vec1']['url'] : $theme_uri . '/assets/img/home-1/vec2.png';
        $img_vec2 = !empty($settings['img_vec2']['url']) ? $settings['img_vec2']['url'] : $theme_uri . '/assets/img/home-1/vec3.png';

        $subtitle = isset($settings['subtitle']) ? $settings['subtitle'] : '';
        $title = isset($settings['title']) ? $settings['title'] : '';
        $email_placeholder = isset($settings['email_placeholder']) ? $settings['email_placeholder'] : '';
        $button_text = isset($settings['button_text']) ? $settings['button_text'] : '';

        $form_method = !empty($settings['form_method']) ? strtoupper($settings['form_method']) : 'POST';
        $form_action = '#';
        if (!empty($settings['form_action']['url'])) {
            $form_action = $settings['form_action']['url'];
        }

        $this->add_render_attribute('cta3_form', 'class', 'newsletter-items wow fadeInUp');
        $this->add_render_attribute('cta3_form', 'data-wow-delay', '.3s');
        $this->add_render_attribute('cta3_form', 'method', $form_method);
        $this->add_render_attribute('cta3_form', 'action', esc_url($form_action));

        ?>

        <section class="newsletter-section section-padding pt-0">
            <div class="line-shape">
                <img src="<?php echo esc_url($img_line_shape); ?>" alt="<?php echo esc_attr($subtitle); ?>">
            </div>
            <div class="line-shape2">
                <img src="<?php echo esc_url($img_line_shape2); ?>" alt="<?php echo esc_attr($subtitle); ?>">
            </div>
            <div class="container">
                <div class="newsletter-wrapper style-2">
                    <div class="plane-1">
                        <img src="<?php echo esc_url($img_plane); ?>" alt="<?php echo esc_attr($subtitle); ?>">
                    </div>
                    <div class="flower-shape">
                        <img src="<?php echo esc_url($img_flower); ?>" alt="<?php echo esc_attr($subtitle); ?>">
                    </div>
                    <div class="newsletter-bg"></div>
                    <div class="vec-1">
                        <img src="<?php echo esc_url($img_vec1); ?>" alt="<?php echo esc_attr($subtitle); ?>">
                    </div>
                    <div class="vec-2">
                        <img src="<?php echo esc_url($img_vec2); ?>" alt="<?php echo esc_attr($subtitle); ?>">
                    </div>
                    <div class="content">
                        <div class="section-title mb-0">
                            <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($subtitle); ?></span>
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                <?php echo wp_kses_post($title); ?>
                            </h2>
                        </div>
                        <form <?php $this->print_render_attribute_string('cta3_form'); ?>>
                            <div class="icon">
                                <i class="fa-light fa-envelope"></i>
                            </div>
                            <div class="form-clt">
                                <input type="text" name="email" placeholder="<?php echo esc_attr($email_placeholder); ?>">
                            </div>
                            <button type="submit" class="subscribe-btn">
                                <?php echo esc_html($button_text); ?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>










<?php
    }
}