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

class FT_Cta4_Widget extends \Elementor\Widget_Base
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
        return 'ft-cta4';
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
        return esc_html__('FT CTA 4', 'ftelements');
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
            'cta4_content',
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
            'form_mode',
            [
                'label'   => esc_html__('Form Type', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'default',
                'options' => [
                    'default'   => esc_html__('Default Form', 'ftelements'),
                    'shortcode' => esc_html__('Shortcode', 'ftelements'),
                ],
            ]
        );

        $this->add_control(
            'form_shortcode',
            [
                'label'       => esc_html__('Form Shortcode', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__('[contact-form-7 id="123" title="Newsletter"]', 'ftelements'),
                'condition'   => [
                    'form_mode' => 'shortcode',
                ],
            ]
        );

        $this->add_control(
            'email_placeholder',
            [
                'label'       => esc_html__('Email Placeholder', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Email Address', 'ftelements'),
                'condition'   => [
                    'form_mode' => 'default',
                ],
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label'       => esc_html__('Button Text', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Subscribe Now', 'ftelements'),
                'condition'   => [
                    'form_mode' => 'default',
                ],
            ]
        );

        $this->add_control(
            'img_plane',
            [
                'label'   => esc_html__('Decor: Plane', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/plane.png',
                ],
            ]
        );

        $this->add_control(
            'img_flower',
            [
                'label'   => esc_html__('Decor: Flower', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/flower.png',
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
            'cta4_style_section',
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
            'cta4_style_wrapper',
            [
                'label' => esc_html__('Wrapper', 'ftelements'),
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
            'cta4_style_content',
            [
                'label' => esc_html__('Content Box', 'ftelements'),
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
                    '{{WRAPPER}} .newsletter-wrapper .content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .newsletter-wrapper .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .newsletter-wrapper .content' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta4_style_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .newsletter-wrapper .sec-sub',
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newsletter-wrapper .sec-sub' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .newsletter-wrapper .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta4_style_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .newsletter-wrapper .tx-title.sec_title',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newsletter-wrapper .tx-title.sec_title' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .newsletter-wrapper .tx-title.sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta4_style_form',
            [
                'label' => esc_html__('Form Wrap', 'ftelements'),
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

        $this->add_control(
            'form_background',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .newsletter-items' => 'background-color: {{VALUE}};',
                ],
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
            'cta4_style_icon',
            [
                'label'     => esc_html__('Form Icon', 'ftelements'),
                'tab'       => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'form_mode' => 'default',
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
            'icon_size',
            [
                'label'      => esc_html__('Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .newsletter-items .icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta4_style_input',
            [
                'label'     => esc_html__('Input Field', 'ftelements'),
                'tab'       => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'form_mode' => 'default',
                ],
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

        $this->end_controls_section();

        $this->start_controls_section(
            'cta4_style_button',
            [
                'label'     => esc_html__('Button', 'ftelements'),
                'tab'       => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'form_mode' => 'default',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'button_typography',
                'selector' => '{{WRAPPER}} .subscribe-btn',
            ]
        );

        $this->start_controls_tabs('cta4_button_tabs');

        $this->start_controls_tab(
            'cta4_button_normal',
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
            'cta4_button_hover',
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
                'name'     => 'button_hover_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .subscribe-btn:hover',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'button_hover_border',
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

        $this->end_controls_section();

        $decor_sections = [
            'plane' => [
                'label'   => esc_html__('Decor: Plane', 'ftelements'),
                'wrapper' => '{{WRAPPER}} .plane-1',
                'img'     => '{{WRAPPER}} .plane-1 img',
            ],
            'flower' => [
                'label'   => esc_html__('Decor: Flower', 'ftelements'),
                'wrapper' => '{{WRAPPER}} .flower-shape',
                'img'     => '{{WRAPPER}} .flower-shape img',
            ],
            'vec1' => [
                'label'   => esc_html__('Decor: Vector 1', 'ftelements'),
                'wrapper' => '{{WRAPPER}} .vec-1',
                'img'     => '{{WRAPPER}} .vec-1 img',
            ],
            'vec2' => [
                'label'   => esc_html__('Decor: Vector 2', 'ftelements'),
                'wrapper' => '{{WRAPPER}} .vec-2',
                'img'     => '{{WRAPPER}} .vec-2 img',
            ],
        ];

        foreach ($decor_sections as $key => $decor) {
            $this->start_controls_section(
                'cta4_style_' . $key,
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
                $key . '_opacity',
                [
                    'label'     => esc_html__('Opacity', 'ftelements'),
                    'type'      => Controls_Manager::SLIDER,
                    'range'     => [
                        'px' => [
                            'min'  => 0,
                            'max'  => 1,
                            'step' => 0.01,
                        ],
                    ],
                    'selectors' => [
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

            $this->add_group_control(
                Group_Control_Css_Filter::get_type(),
                [
                    'name'     => $key . '_filters',
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

        $subtitle = !empty($settings['subtitle']) ? $settings['subtitle'] : '';
        $title = !empty($settings['title']) ? $settings['title'] : '';
        $form_mode = !empty($settings['form_mode']) ? $settings['form_mode'] : 'default';
        $form_shortcode = !empty($settings['form_shortcode']) ? $settings['form_shortcode'] : '';
        $email_placeholder = !empty($settings['email_placeholder']) ? $settings['email_placeholder'] : esc_html__('Email Address', 'ftelements');
        $button_text = !empty($settings['button_text']) ? $settings['button_text'] : esc_html__('Subscribe Now', 'ftelements');

        $img_plane = !empty($settings['img_plane']['url']) ? $settings['img_plane']['url'] : $theme_uri . '/assets/img/home-3/plane.png';
        $img_flower = !empty($settings['img_flower']['url']) ? $settings['img_flower']['url'] : $theme_uri . '/assets/img/home-3/flower.png';
        $img_vec1 = !empty($settings['img_vec1']['url']) ? $settings['img_vec1']['url'] : $theme_uri . '/assets/img/home-1/vec2.png';
        $img_vec2 = !empty($settings['img_vec2']['url']) ? $settings['img_vec2']['url'] : $theme_uri . '/assets/img/home-1/vec3.png';

        ?>



        <section class="newsletter-section section-padding pt-0">
            <div class="container">
                <div class="newsletter-wrapper style-2 bg-new-add">
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
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim text-white">
                                <?php echo wp_kses_post($title); ?>
                            </h2>
                        </div>
                        <?php if ('shortcode' === $form_mode && !empty($form_shortcode)) : ?>
                            <div class="newsletter-items wow fadeInUp" data-wow-delay=".3s">
                                <?php echo do_shortcode($form_shortcode); ?>
                            </div>
                        <?php else : ?>
                            <form action="#" class="newsletter-items wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon">
                                    <i class="fa-light fa-envelope"></i>
                                </div>
                                <div class="form-clt">
                                    <input type="text" name="email" placeholder="<?php echo esc_attr($email_placeholder); ?>">
                                </div>
                                <button class="subscribe-btn">
                                    <?php echo esc_html($button_text); ?>
                                </button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>









<?php
    }
} ?>