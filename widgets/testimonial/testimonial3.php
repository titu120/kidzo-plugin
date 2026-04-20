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

class FT_Testimonial3_Widget extends \Elementor\Widget_Base
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
        return 'ft-testimonial3';
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
        return esc_html__('FT Testimonial 3', 'ftelements');
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
            'content_heading',
            [
                'label' => esc_html__('Heading', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'subtitle_text',
            [
                'label'   => esc_html__('Subtitle', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Testimonials', 'ftelements'),
            ]
        );

        $this->add_control(
            'title_text',
            [
                'label'   => esc_html__('Title', 'ftelements'),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Parents' Words Are The Key\nTo Happy Kids", 'ftelements'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_navigation',
            [
                'label' => esc_html__('Navigation', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'prev_arrow_image',
            [
                'label'   => esc_html__('Prev Arrow Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-3/arrow-left.png',
                ],
            ]
        );

        $this->add_control(
            'next_arrow_image',
            [
                'label'   => esc_html__('Next Arrow Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-3/arrow-right.png',
                ],
            ]
        );

        $this->add_control(
            'video_icon_class',
            [
                'label'       => esc_html__('Video Icon Class', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => 'fa-solid fa-play',
                'placeholder' => esc_html__('fa-solid fa-play', 'ftelements'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_items',
            [
                'label' => esc_html__('Testimonial Items', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'review_text',
            [
                'label'   => esc_html__('Review Text', 'ftelements'),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__('We are so grateful to have found such an amazing nanny! She is kind, responsible, and truly cares about our children like family.', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'client_image',
            [
                'label'   => esc_html__('Client Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-3/client-1.png',
                ],
            ]
        );

        $repeater->add_control(
            'client_name',
            [
                'label'   => esc_html__('Client Name', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Fahima', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'client_location',
            [
                'label'   => esc_html__('Client Location', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Mirpur-29, Dhaka', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'video_url',
            [
                'label'       => esc_html__('Video URL', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'placeholder' => esc_html__('https://www.youtube.com/watch?v=Cn4G2lZ_g2I', 'ftelements'),
                'default'     => [
                    'url' => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
                ],
            ]
        );

        $this->add_control(
            'testimonial_items',
            [
                'label'       => esc_html__('Items', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    [],
                    [],
                    [],
                ],
                'title_field' => '{{{ client_name }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'selector' => '{{WRAPPER}} .testimonial-section-3',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_heading',
            [
                'label' => esc_html__('Heading', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-3 .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .sec-sub',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-3 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .section-title h2',
            ]
        );

        $this->add_responsive_control(
            'heading_bottom_space',
            [
                'label'      => esc_html__('Heading Bottom Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .section-title-area' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_arrows',
            [
                'label' => esc_html__('Arrow Buttons', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'arrow_background',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .array-button button',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'arrow_border',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .array-button button',
            ]
        );

        $this->add_responsive_control(
            'arrow_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .array-button button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'arrow_size',
            [
                'label'      => esc_html__('Button Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .array-button button' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'arrow_icon_width',
            [
                'label'      => esc_html__('Arrow Icon Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .array-button button img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'arrow_gap',
            [
                'label'      => esc_html__('Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .array-button' => 'display: flex; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_card',
            [
                'label' => esc_html__('Testimonial Card', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'card_background',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .testimonial-box-items-3',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'card_border',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .testimonial-box-items-3',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-box-items-3' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-box-items-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-box-items-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_review_text',
            [
                'label' => esc_html__('Review Text', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'review_text_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-box-items-3 .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'review_text_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .testimonial-box-items-3 .text',
            ]
        );

        $this->add_responsive_control(
            'review_text_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-box-items-3 .text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_client_image',
            [
                'label' => esc_html__('Client Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'client_image_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .client-img img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'client_image_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .client-img img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'client_image_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .client-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'client_image_border',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .client-img img',
            ]
        );

        $this->add_responsive_control(
            'client_image_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .client-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_client_info',
            [
                'label' => esc_html__('Client Info', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'client_info_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-3 .info-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'client_name_color',
            [
                'label'     => esc_html__('Name Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-3 .info-content p b' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'client_info_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .info-content p',
            ]
        );

        $this->add_responsive_control(
            'client_info_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .info-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_video_button',
            [
                'label' => esc_html__('Video Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'video_btn_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-3 .video-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'video_btn_background',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .video-btn',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'video_btn_border',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .video-btn',
            ]
        );

        $this->add_responsive_control(
            'video_btn_size',
            [
                'label'      => esc_html__('Button Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .video-btn' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'video_btn_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .video-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_quote_icon',
            [
                'label' => esc_html__('Quote Icon', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'quote_icon_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-3 .quote-icon svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'quote_icon_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .quote-icon svg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'quote_icon_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .quote-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_background_shape',
            [
                'label' => esc_html__('Background Shape', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'bg_shape_fill_color',
            [
                'label'     => esc_html__('Shape Fill Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-bg svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bg_shape_opacity',
            [
                'label'      => esc_html__('Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => 0.05,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-bg' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_wrapper_layout',
            [
                'label' => esc_html__('Wrapper Layout', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'wrapper_max_width',
            [
                'label'      => esc_html__('Wrapper Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-wrapper-3' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'wrapper_padding',
            [
                'label'      => esc_html__('Wrapper Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-wrapper-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'wrapper_margin',
            [
                'label'      => esc_html__('Wrapper Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-wrapper-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'wrapper_border',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .testimonial-wrapper-3',
            ]
        );

        $this->add_responsive_control(
            'wrapper_border_radius',
            [
                'label'      => esc_html__('Wrapper Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-wrapper-3' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_slider_area',
            [
                'label' => esc_html__('Slider Area', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'slider_margin_top',
            [
                'label'      => esc_html__('Top Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-slider-3' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'slider_padding',
            [
                'label'      => esc_html__('Slider Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-slider-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'slide_padding',
            [
                'label'      => esc_html__('Slide Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-slider-3 .swiper-slide' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'slide_min_height',
            [
                'label'      => esc_html__('Slide Min Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-slider-3 .swiper-slide' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_client_row',
            [
                'label' => esc_html__('Client Row', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'client_row_gap',
            [
                'label'      => esc_html__('Client Image/Info Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .client-info' => 'display: flex; align-items: center; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'testimonial_bottom_gap',
            [
                'label'      => esc_html__('Bottom Row Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-bottom' => 'display: flex; justify-content: space-between; align-items: center; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'testimonial_bottom_margin_top',
            [
                'label'      => esc_html__('Bottom Row Top Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-bottom' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_states',
            [
                'label' => esc_html__('Interactive States', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'arrow_icon_hover_filter',
            [
                'label'     => esc_html__('Arrow Icon Hover Filter', 'ftelements'),
                'type'      => Controls_Manager::TEXT,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-3 .array-button button:hover img' => 'filter: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'video_btn_hover_color',
            [
                'label'     => esc_html__('Video Button Hover Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-3 .video-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'video_btn_hover_background',
                'selector' => '{{WRAPPER}} .testimonial-section-3 .video-btn:hover',
            ]
        );

        $this->add_control(
            'card_hover_border_color',
            [
                'label'     => esc_html__('Card Hover Border Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-box-items-3:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'card_hover_transform',
            [
                'label'     => esc_html__('Card Hover Transform', 'ftelements'),
                'type'      => Controls_Manager::TEXT,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-3 .testimonial-box-items-3:hover' => 'transform: {{VALUE}};',
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
        $widget_id = 'ft-testimonial3-' . $this->get_id();
        $items = !empty($settings['testimonial_items']) ? $settings['testimonial_items'] : [];
        $prev_arrow = !empty($settings['prev_arrow_image']['url']) ? $settings['prev_arrow_image']['url'] : 'assets/img/home-3/arrow-left.png';
        $next_arrow = !empty($settings['next_arrow_image']['url']) ? $settings['next_arrow_image']['url'] : 'assets/img/home-3/arrow-right.png';
        $video_icon_class = !empty($settings['video_icon_class']) ? $settings['video_icon_class'] : 'fa-solid fa-play';

        ?>


        <section id="<?php echo esc_attr($widget_id); ?>" class="testimonial-section-3">
            <div class="container">
                <div class="testimonial-wrapper-3">
                    <div class="section-title-area">
                        <div class="section-title">
                            <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['subtitle_text']); ?></span>
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                <?php echo wp_kses_post(nl2br($settings['title_text'])); ?>
                            </h2>
                        </div>
                        <div class="array-button wow fadeInUp">
                            <button class="array-prev">
                                <img src="<?php echo esc_url($prev_arrow); ?>" alt="img">
                            </button>
                            <button class="array-next">
                                <img src="<?php echo esc_url($next_arrow); ?>" alt="img">
                            </button>
                        </div>
                    </div>
                    <div class="testimonial-bg">
                        <svg width="1410" height="654" viewBox="0 0 1410 654" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 50C0 22.3858 22.3858 0 50 0H1360C1387.61 0 1410 22.3858 1410 50V544.523C1410 568.474 1393.02 589.061 1369.5 593.612L1062.21 653.089C1059.08 653.695 1055.89 654 1052.71 654H705H357.294C354.105 654 350.924 653.695 347.793 653.089L40.4988 593.612C16.9843 589.061 0 568.474 0 544.523V50Z" fill="#FEDFEF" />
                        </svg>
                    </div>
                    <div class="swiper testimonial-slider-3">
                        <div class="swiper-wrapper">
                            <?php foreach ($items as $item) : ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items-3">
                                        <div class="quote-icon">
                                            <svg width="39" height="30" viewBox="0 0 39 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.64725 1.65902C10.0126 0.301374 11.2931 -0.225102 12.5042 0.0873093C13.7037 0.399721 14.4654 1.16148 14.7836 2.36677C15.096 3.57206 14.6236 4.85834 13.3662 6.21791C10.4311 9.36517 8.54119 12.4546 7.70809 15.4977C9.5922 15.7098 11.1099 16.4658 12.267 17.7772C13.4183 19.0885 13.9968 20.7431 13.9968 22.7333C13.9968 24.8295 13.3354 26.5613 12.0298 27.919C10.7184 29.2824 9.01173 29.9631 6.91548 29.9631C4.71896 29.9631 3.01034 29.2072 1.80697 27.6837C0.601682 26.166 0 24.1449 0 21.6283C0 17.8543 0.784887 14.2153 2.35659 10.7016C3.93407 7.18792 6.02454 4.17567 8.64725 1.65902ZM32.7107 1.65902C34.0683 0.301374 35.3565 -0.225102 36.5618 0.0873093C37.7671 0.399721 38.5289 1.16148 38.8413 2.36677C39.1537 3.57206 38.687 4.85834 37.4296 6.21791C34.4887 9.36517 32.6046 12.4546 31.7657 15.4977C33.6556 15.7098 35.1733 16.4658 36.3266 17.7772C37.4778 19.0885 38.0564 20.7431 38.0564 22.7333C38.0564 24.8295 37.4007 26.5613 36.0893 27.919C34.778 29.2824 33.0771 29.9631 30.9808 29.9631C28.7766 29.9631 27.0699 29.2072 25.8723 27.6837C24.6612 26.166 24.0596 24.1449 24.0596 21.6283C24.0596 17.8543 24.8502 14.2153 26.4219 10.7016C27.9917 7.18792 30.088 4.17567 32.7107 1.65902Z" fill="#F39F5F" />
                                            </svg>
                                        </div>
                                        <p class="text">
                                            <?php echo esc_html($item['review_text']); ?>
                                        </p>
                                        <div class="testimonial-bottom">
                                            <div class="client-info">
                                                <div class="client-img">
                                                    <img src="<?php echo esc_url($item['client_image']['url']); ?>" alt="img">
                                                </div>
                                                <div class="info-content">
                                                    <p>
                                                        <b><?php echo esc_html($item['client_name']); ?>,</b>
                                                        <?php echo esc_html($item['client_location']); ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <?php if (!empty($item['video_url']['url'])) : ?>
                                                <a href="<?php echo esc_url($item['video_url']['url']); ?>" class="video-btn video-popup">
                                                    <i class="<?php echo esc_attr($video_icon_class); ?>"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php if (\Elementor\Plugin::$instance->editor->is_edit_mode()) : ?>
            <script>
                (function ($) {
                    "use strict";

                    const widgetSelector = "#<?php echo esc_js($widget_id); ?>";

                    const initTestimonialSlider3 = function ($scope) {
                        if (typeof Swiper === "undefined") {
                            return;
                        }

                        const $widget = $scope && $scope.length ? $scope.find(widgetSelector) : $(widgetSelector);
                        if (!$widget.length) {
                            return;
                        }

                        $widget.each(function () {
                            const sliderEl = this.querySelector(".testimonial-slider-3");
                            if (!sliderEl) {
                                return;
                            }

                            if (sliderEl.swiper) {
                                sliderEl.swiper.destroy(true, true);
                            }

                            const prevEl = this.querySelector(".array-prev");
                            const nextEl = this.querySelector(".array-next");

                            new Swiper(sliderEl, {
                                spaceBetween: 30,
                                speed: 1000,
                                loop: true,
                                navigation: {
                                    prevEl: prevEl,
                                    nextEl: nextEl
                                },
                                breakpoints: {
                                    1399: {
                                        slidesPerView: 2.5
                                    },
                                    1199: {
                                        slidesPerView: 2
                                    },
                                    991: {
                                        slidesPerView: 1.8
                                    },
                                    767: {
                                        slidesPerView: 1.3
                                    },
                                    0: {
                                        slidesPerView: 1
                                    }
                                }
                            });
                        });
                    };

                    $(window).on("elementor/frontend/init", function () {
                        elementorFrontend.hooks.addAction("frontend/element_ready/ft-testimonial3.default", initTestimonialSlider3);
                    });

                    $(function () {
                        initTestimonialSlider3($(document));
                    });
                })(jQuery);
            </script>
        <?php endif; ?>











<?php
    }
} ?>