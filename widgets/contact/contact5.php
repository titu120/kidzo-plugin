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

class FT_Contact5_Widget extends \Elementor\Widget_Base
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
        return 'ft-contact5';
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
        return esc_html__('FT Contact 5', 'ftelements');
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
            'contact5_content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'contact5_title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Ready To Get Started?', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact5_description',
            [
                'label'       => esc_html__('Description', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('Nullam varius, erat quis iaculis dictum, eros urna varius eros, ut blandit felis odio in turpis. Quisque rhoncus, eros in auctor ultrices,', 'ftelements'),
                'rows'        => 4,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact5_form_action',
            [
                'label'       => esc_html__('Form Action URL', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => 'contact.php',
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact5_form_shortcode',
            [
                'label'       => esc_html__('Form Shortcode', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 3,
                'placeholder' => esc_html__('[contact-form-7 id="123" title="Contact form"]', 'ftelements'),
                'description' => esc_html__('If added, shortcode output will replace the default form fields.', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact5_name_label',
            [
                'label'       => esc_html__('Name Field Label', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Your name*', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact5_name_placeholder',
            [
                'label'       => esc_html__('Name Placeholder', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Your Name', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact5_email_label',
            [
                'label'       => esc_html__('Email Field Label', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Your Email*', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact5_email_placeholder',
            [
                'label'       => esc_html__('Email Placeholder', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Your Email', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact5_message_label',
            [
                'label'       => esc_html__('Message Field Label', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Write Message*', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact5_message_placeholder',
            [
                'label'       => esc_html__('Message Placeholder', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Write Message', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact5_button_text',
            [
                'label'       => esc_html__('Button Text', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Send Now', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact5_button_arrow',
            [
                'label'   => esc_html__('Button Arrow Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/icon/arrow1.svg',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact5_style_wrapper_section',
            [
                'label' => esc_html__('Wrapper', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'contact5_wrapper_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .contact-wrapper-2',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact5_wrapper_border',
                'selector' => '{{WRAPPER}} .contact-wrapper-2',
            ]
        );

        $this->add_responsive_control(
            'contact5_wrapper_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-wrapper-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_wrapper_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-wrapper-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_wrapper_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-wrapper-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact5_style_content_section',
            [
                'label' => esc_html__('Content Area', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'contact5_content_max_width',
            [
                'label'      => esc_html__('Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_content_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_content_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_content_text_align',
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
                    '{{WRAPPER}} .contact-content' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_title_spacing',
            [
                'label'      => esc_html__('Title Bottom Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content h2' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_description_spacing',
            [
                'label'      => esc_html__('Description Bottom Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content p' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact5_style_title_section',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'contact5_title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact5_title_typography',
                'selector' => '{{WRAPPER}} .contact-content h2',
            ]
        );

        $this->add_responsive_control(
            'contact5_title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact5_style_description_section',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'contact5_description_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content > p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact5_description_typography',
                'selector' => '{{WRAPPER}} .contact-content > p',
            ]
        );

        $this->add_responsive_control(
            'contact5_description_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content > p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact5_style_label_section',
            [
                'label' => esc_html__('Field Labels', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'contact5_label_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content .contact-form-items .form-clt span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact5_label_typography',
                'selector' => '{{WRAPPER}} .contact-content .contact-form-items .form-clt span',
            ]
        );

        $this->add_responsive_control(
            'contact5_label_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content .contact-form-items .form-clt span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; display: inline-block;',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact5_style_field_section',
            [
                'label' => esc_html__('Fields', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact5_field_typography',
                'selector' => '{{WRAPPER}} .contact-content .contact-form-items input, {{WRAPPER}} .contact-content .contact-form-items textarea',
            ]
        );

        $this->add_responsive_control(
            'contact5_field_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content .contact-form-items input, {{WRAPPER}} .contact-content .contact-form-items textarea' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_field_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content .contact-form-items input, {{WRAPPER}} .contact-content .contact-form-items textarea' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_field_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content .contact-form-items input, {{WRAPPER}} .contact-content .contact-form-items textarea' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact5_field_border',
                'selector' => '{{WRAPPER}} .contact-content .contact-form-items input, {{WRAPPER}} .contact-content .contact-form-items textarea',
            ]
        );

        $this->start_controls_tabs('contact5_fields_tabs');

        $this->start_controls_tab(
            'contact5_fields_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'contact5_field_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content .contact-form-items input, {{WRAPPER}} .contact-content .contact-form-items textarea' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact5_field_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content .contact-form-items input, {{WRAPPER}} .contact-content .contact-form-items textarea' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact5_field_placeholder_color',
            [
                'label'     => esc_html__('Placeholder Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content .contact-form-items input::placeholder, {{WRAPPER}} .contact-content .contact-form-items textarea::placeholder' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'contact5_fields_focus_tab',
            [
                'label' => esc_html__('Focus', 'ftelements'),
            ]
        );

        $this->add_control(
            'contact5_field_focus_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content .contact-form-items input:focus, {{WRAPPER}} .contact-content .contact-form-items textarea:focus' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact5_field_focus_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content .contact-form-items input:focus, {{WRAPPER}} .contact-content .contact-form-items textarea:focus' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact5_field_focus_border_color',
            [
                'label'     => esc_html__('Border Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content .contact-form-items input:focus, {{WRAPPER}} .contact-content .contact-form-items textarea:focus' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'contact5_textarea_height',
            [
                'label'      => esc_html__('Textarea Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content .contact-form-items textarea' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_field_group_spacing',
            [
                'label'      => esc_html__('Field Group Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content .contact-form-items .form-clt' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact5_style_button_section',
            [
                'label' => esc_html__('Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact5_button_typography',
                'selector' => '{{WRAPPER}} .contact-content .theme-btn .theme-text, {{WRAPPER}} .contact-content .theme-btn .theme-text2',
            ]
        );

        $this->add_responsive_control(
            'contact5_button_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_button_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content .theme-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_button_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; overflow: hidden;',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact5_button_border',
                'selector' => '{{WRAPPER}} .contact-content .theme-btn',
            ]
        );

        $this->start_controls_tabs('contact5_button_tabs');

        $this->start_controls_tab(
            'contact5_button_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'contact5_button_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content .theme-btn .theme-text, {{WRAPPER}} .contact-content .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact5_button_arrow_opacity',
            [
                'label'      => esc_html__('Arrow Icon Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content .theme-btn .theme-text img, {{WRAPPER}} .contact-content .theme-btn .theme-text2 img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_control(
            'contact5_button_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content .theme-btn .theme-bg svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'contact5_button_hover_tab',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'contact5_button_hover_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content .theme-btn:hover .theme-text, {{WRAPPER}} .contact-content .theme-btn:hover .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact5_button_hover_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content .theme-btn:hover .theme-bg svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact5_button_hover_border_color',
            [
                'label'     => esc_html__('Border Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content .theme-btn:hover' => 'border-color: {{VALUE}};',
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
        $theme_uri = get_template_directory_uri();

        $title = !empty($settings['contact5_title']) ? $settings['contact5_title'] : '';
        $description = !empty($settings['contact5_description']) ? $settings['contact5_description'] : '';
        $form_action = !empty($settings['contact5_form_action']) ? $settings['contact5_form_action'] : 'contact.php';
        $form_shortcode = !empty($settings['contact5_form_shortcode']) ? $settings['contact5_form_shortcode'] : '';
        $name_label = !empty($settings['contact5_name_label']) ? $settings['contact5_name_label'] : '';
        $name_placeholder = !empty($settings['contact5_name_placeholder']) ? $settings['contact5_name_placeholder'] : '';
        $email_label = !empty($settings['contact5_email_label']) ? $settings['contact5_email_label'] : '';
        $email_placeholder = !empty($settings['contact5_email_placeholder']) ? $settings['contact5_email_placeholder'] : '';
        $message_label = !empty($settings['contact5_message_label']) ? $settings['contact5_message_label'] : '';
        $message_placeholder = !empty($settings['contact5_message_placeholder']) ? $settings['contact5_message_placeholder'] : '';
        $button_text = !empty($settings['contact5_button_text']) ? $settings['contact5_button_text'] : '';
        $button_arrow = !empty($settings['contact5_button_arrow']['url']) ? $settings['contact5_button_arrow']['url'] : $theme_uri . '/assets/img/icon/arrow1.svg';

        ?>



        <div class="contact-wrapper-2">





            <div class="contact-content">
                <h2><?php echo esc_html($title); ?></h2>
                <p><?php echo esc_html($description); ?></p>
                <?php if (!empty($form_shortcode)) : ?>
                    <div class="contact-form-items contact-form-shortcode">
                        <?php echo do_shortcode(wp_kses_post($form_shortcode)); ?>
                    </div>
                <?php else : ?>
                    <form action="<?php echo esc_url($form_action); ?>" id="contact-form" method="POST" class="contact-form-items">
                        <div class="row g-4">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="form-clt">
                                    <span><?php echo esc_html($name_label); ?></span>
                                    <input type="text" name="name" id="name" placeholder="<?php echo esc_attr($name_placeholder); ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <div class="form-clt">
                                    <span><?php echo esc_html($email_label); ?></span>
                                    <input type="text" name="email" id="email" placeholder="<?php echo esc_attr($email_placeholder); ?>">
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                <div class="form-clt">
                                    <span><?php echo esc_html($message_label); ?></span>
                                    <textarea name="message" id="message" placeholder="<?php echo esc_attr($message_placeholder); ?>"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                                <button type="submit" class="theme-btn">
                                    <span class="theme-bg">
                                        <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"></path>
                                        </svg>

                                    </span>
                                    <span class="theme-text"><?php echo esc_html($button_text); ?> <img src="<?php echo esc_url($button_arrow); ?>" alt="img"></span>
                                    <span class="theme-text2"><?php echo esc_html($button_text); ?> <img src="<?php echo esc_url($button_arrow); ?>" alt="img"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                <?php endif; ?>
            </div>





        </div>










<?php
    }
} ?>