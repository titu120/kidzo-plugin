<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
defined('ABSPATH') || die();

class FT_About7_Widget extends \Elementor\Widget_Base
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
        return 'ft-about7';
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
        return esc_html__('FT About 7', 'ftelements');
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
            'about7_images_section',
            [
                'label' => esc_html__('Images', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'about7_pencil_shape',
            [
                'label' => esc_html__('Pencil Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-2/shape/about-pencil.png',
                ],
            ]
        );

        $this->add_control(
            'about7_vec_shape',
            [
                'label' => esc_html__('Vector Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-2/shape/about-vec.png',
                ],
            ]
        );

        $this->add_control(
            'about7_vec2_shape',
            [
                'label' => esc_html__('Vector Shape 2 Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-2/shape/about-shape3.png',
                ],
            ]
        );

        $this->add_control(
            'about7_main_image',
            [
                'label' => esc_html__('Main About Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/inner-page/about-01.png',
                ],
            ]
        );

        $this->add_control(
            'about7_check_icon',
            [
                'label' => esc_html__('List Check Icon', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-2/icon/check.svg',
                ],
            ]
        );

        $this->add_control(
            'about7_button_arrow_icon',
            [
                'label' => esc_html__('Button Arrow Icon', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/icon/arrow1.svg',
                ],
            ]
        );

        $this->add_control(
            'about7_phone_icon',
            [
                'label' => esc_html__('Phone Icon', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-1/icon/telephone.svg',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about7_content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'about7_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('About Us', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'about7_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Nurturing Your Child’s Growth Through Creative Learning', 'ftelements'),
                'rows' => 3,
            ]
        );

        $this->add_control(
            'about7_description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('At Kidzu, our aim is to give everyone a chance to learn a new language. Our skilled team creates fun and useful lessons so each student can reach their goals. We’re here to help you gain skills for both work and life.', 'ftelements'),
                'rows' => 5,
            ]
        );

        $this->add_control(
            'about7_list_one',
            [
                'label' => esc_html__('List Item 1', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Learn Through Fun', 'ftelements'),
            ]
        );

        $this->add_control(
            'about7_list_two',
            [
                'label' => esc_html__('List Item 2', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Secure Environment', 'ftelements'),
            ]
        );

        $this->add_control(
            'about7_list_three',
            [
                'label' => esc_html__('List Item 3', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Healthy Food Choices', 'ftelements'),
            ]
        );

        $this->add_control(
            'about7_list_four',
            [
                'label' => esc_html__('List Item 4', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Bright & Cheerful Environment', 'ftelements'),
            ]
        );

        $this->add_control(
            'about7_button_text',
            [
                'label' => esc_html__('Button Text', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('know more', 'ftelements'),
            ]
        );

        $this->add_control(
            'about7_button_link',
            [
                'label' => esc_html__('Button Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => 'about.html',
                    'is_external' => false,
                    'nofollow' => false,
                ],
                'show_external' => true,
            ]
        );

        $this->add_control(
            'about7_call_label',
            [
                'label' => esc_html__('Call Label', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Call Us Now', 'ftelements'),
            ]
        );

        $this->add_control(
            'about7_phone_number',
            [
                'label' => esc_html__('Phone Number', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => '+11 123 0654 98',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about7_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about7_section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about7_section_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .about-section-2',
            ]
        );

        $this->add_responsive_control(
            'about7_section_min_height',
            [
                'label' => esc_html__('Min Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 2000],
                    'vh' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'about7_section_overflow',
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
                    '{{WRAPPER}} .about-section-2' => 'overflow: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about7_style_shapes',
            [
                'label' => esc_html__('Decorative Shapes', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about7_shape_pencil_width',
            [
                'label' => esc_html__('Pencil Image Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-pencil img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_shape_pencil_opacity',
            [
                'label' => esc_html__('Pencil Image Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 100, 'step' => 1],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-pencil img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_shape_vec_width',
            [
                'label' => esc_html__('Vector 1 Image Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-vec img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_shape_vec_opacity',
            [
                'label' => esc_html__('Vector 1 Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 100, 'step' => 1],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-vec img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_shape_vec2_width',
            [
                'label' => esc_html__('Vector 2 Image Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-vec2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_shape_vec2_opacity',
            [
                'label' => esc_html__('Vector 2 Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 100, 'step' => 1],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-vec2 img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about7_style_main_image',
            [
                'label' => esc_html__('Main Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about7_main_img_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_main_img_max_width',
            [
                'label' => esc_html__('Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-image img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'about7_main_img_css_filters',
                'selector' => '{{WRAPPER}} .about-section-2 .about-image img',
            ]
        );

        $this->add_responsive_control(
            'about7_main_img_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about7_main_img_border',
                'selector' => '{{WRAPPER}} .about-section-2 .about-image img',
            ]
        );

        $this->add_responsive_control(
            'about7_main_img_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 100, 'step' => 1],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-image img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about7_style_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about7_subtitle_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about7_subtitle_typography',
                'selector' => '{{WRAPPER}} .about-section-2 .about-content-2 .section-title .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'about7_subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2 .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_subtitle_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2 .section-title .sec-sub' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about7_style_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about7_title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about7_title_typography',
                'selector' => '{{WRAPPER}} .about-section-2 .about-content-2 .section-title h2',
            ]
        );

        $this->add_responsive_control(
            'about7_title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2 .section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_title_align',
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
                    '{{WRAPPER}} .about-section-2 .about-content-2 .section-title h2' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about7_style_description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about7_description_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2 .about-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about7_description_typography',
                'selector' => '{{WRAPPER}} .about-section-2 .about-content-2 .about-text',
            ]
        );

        $this->add_responsive_control(
            'about7_description_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2 .about-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_description_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2 .about-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about7_style_list',
            [
                'label' => esc_html__('List', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about7_list_box_padding',
            [
                'label' => esc_html__('List Box Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2 .about-list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about7_list_box_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .about-section-2 .about-content-2 .about-list',
            ]
        );

        $this->add_responsive_control(
            'about7_list_box_border_radius',
            [
                'label' => esc_html__('List Box Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2 .about-list' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about7_list_box_border',
                'selector' => '{{WRAPPER}} .about-section-2 .about-content-2 .about-list',
            ]
        );

        $this->add_responsive_control(
            'about7_list_gap',
            [
                'label' => esc_html__('Flex Gap (Columns)', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2 .about-list' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_list_item_spacing',
            [
                'label' => esc_html__('Space Below List Items', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2 .about-list ul li:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'about7_list_item_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-list li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about7_list_typography',
                'selector' => '{{WRAPPER}} .about-section-2 .about-list li',
            ]
        );

        $this->add_responsive_control(
            'about7_list_icon_width',
            [
                'label' => esc_html__('Check Icon Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-list li img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_list_icon_gap',
            [
                'label' => esc_html__('Icon Right Space', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-list li img' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_list_margin',
            [
                'label' => esc_html__('List Block Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-list' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about7_style_button_row',
            [
                'label' => esc_html__('Button Row', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about7_button_row_gap',
            [
                'label' => esc_html__('Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-button' => 'column-gap: {{SIZE}}{{UNIT}}; row-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_button_row_align',
            [
                'label' => esc_html__('Vertical Alignment', 'ftelements'),
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
                    '{{WRAPPER}} .about-section-2 .about-button' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_button_row_margin_top',
            [
                'label' => esc_html__('Margin Top', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-button' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about7_style_theme_button',
            [
                'label' => esc_html__('Primary Button', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about7_btn_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-button .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_btn_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-button .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about7_btn_border',
                'selector' => '{{WRAPPER}} .about-section-2 .about-button .theme-btn',
            ]
        );

        $this->add_control(
            'about7_btn_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-button .theme-btn .theme-text,
					{{WRAPPER}} .about-section-2 .about-button .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about7_btn_typography',
                'selector' => '{{WRAPPER}} .about-section-2 .about-button .theme-btn .theme-text,
				{{WRAPPER}} .about-section-2 .about-button .theme-btn .theme-text2',
            ]
        );

        $this->add_responsive_control(
            'about7_btn_arrow_width',
            [
                'label' => esc_html__('Arrow Icon Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-button .theme-btn .theme-text img,
					{{WRAPPER}} .about-section-2 .about-button .theme-btn .theme-text2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'about7_btn_svg_fill',
            [
                'label' => esc_html__('Background Shape Color (SVG)', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-button .theme-btn .theme-bg svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about7_style_call',
            [
                'label' => esc_html__('Call / Phone', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about7_call_icon_width',
            [
                'label' => esc_html__('Phone Icon Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .author-icon .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_call_icon_gap',
            [
                'label' => esc_html__('Icon Right Space', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .author-icon .icon' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_call_icon_box_width',
            [
                'label' => esc_html__('Icon Box Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .author-icon .icon' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_call_icon_box_height',
            [
                'label' => esc_html__('Icon Box Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .author-icon .icon' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about7_call_icon_box_line_height',
            [
                'label' => esc_html__('Icon Box Line Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .author-icon .icon' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about7_call_icon_box_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .about-section-2 .author-icon .icon',
            ]
        );

        $this->add_responsive_control(
            'about7_call_icon_box_radius',
            [
                'label' => esc_html__('Icon Box Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .author-icon .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about7_call_icon_box_border',
                'selector' => '{{WRAPPER}} .about-section-2 .author-icon .icon',
            ]
        );

        $this->add_responsive_control(
            'about7_call_icon_box_padding',
            [
                'label' => esc_html__('Icon Box Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .author-icon .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'about7_call_label_color',
            [
                'label' => esc_html__('Label Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .author-icon .content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about7_call_label_typography',
                'selector' => '{{WRAPPER}} .about-section-2 .author-icon .content span',
            ]
        );

        $this->add_control(
            'about7_call_phone_color',
            [
                'label' => esc_html__('Phone Number Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .author-icon .content h3,
					{{WRAPPER}} .about-section-2 .author-icon .content h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about7_call_phone_typography',
                'selector' => '{{WRAPPER}} .about-section-2 .author-icon .content h3,
				{{WRAPPER}} .about-section-2 .author-icon .content h3 a',
            ]
        );

        $this->add_responsive_control(
            'about7_call_block_margin',
            [
                'label' => esc_html__('Block Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .author-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about7_style_content_column',
            [
                'label' => esc_html__('Content Column', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about7_content_padding',
            [
                'label' => esc_html__('Content Inner Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about7_content_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .about-section-2 .about-content-2',
            ]
        );

        $this->add_responsive_control(
            'about7_content_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-section-2 .about-content-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about7_content_border',
                'selector' => '{{WRAPPER}} .about-section-2 .about-content-2',
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
        $pencil_shape = !empty($settings['about7_pencil_shape']['url']) ? $settings['about7_pencil_shape']['url'] : '';
        $vec_shape = !empty($settings['about7_vec_shape']['url']) ? $settings['about7_vec_shape']['url'] : '';
        $vec2_shape = !empty($settings['about7_vec2_shape']['url']) ? $settings['about7_vec2_shape']['url'] : '';
        $main_image = !empty($settings['about7_main_image']['url']) ? $settings['about7_main_image']['url'] : '';
        $check_icon = !empty($settings['about7_check_icon']['url']) ? $settings['about7_check_icon']['url'] : '';
        $button_arrow_icon = !empty($settings['about7_button_arrow_icon']['url']) ? $settings['about7_button_arrow_icon']['url'] : '';
        $phone_icon = !empty($settings['about7_phone_icon']['url']) ? $settings['about7_phone_icon']['url'] : '';

        $subtitle = isset($settings['about7_subtitle']) ? $settings['about7_subtitle'] : '';
        $title = isset($settings['about7_title']) ? $settings['about7_title'] : '';
        $description = isset($settings['about7_description']) ? $settings['about7_description'] : '';
        $list_one = isset($settings['about7_list_one']) ? $settings['about7_list_one'] : '';
        $list_two = isset($settings['about7_list_two']) ? $settings['about7_list_two'] : '';
        $list_three = isset($settings['about7_list_three']) ? $settings['about7_list_three'] : '';
        $list_four = isset($settings['about7_list_four']) ? $settings['about7_list_four'] : '';
        $button_text = isset($settings['about7_button_text']) ? $settings['about7_button_text'] : '';
        $button_link = !empty($settings['about7_button_link']['url']) ? $settings['about7_button_link']['url'] : '';
        $button_is_external = !empty($settings['about7_button_link']['is_external']) ? ' target="_blank"' : '';
        $button_nofollow = !empty($settings['about7_button_link']['nofollow']) ? ' rel="nofollow"' : '';
        $call_label = isset($settings['about7_call_label']) ? $settings['about7_call_label'] : '';
        $phone_display = isset($settings['about7_phone_number']) ? $settings['about7_phone_number'] : '';
        $phone_digits = $phone_display !== '' ? preg_replace('/[^\d+]/', '', $phone_display) : '';
        $phone_href = $phone_digits !== '' ? 'tel:' . $phone_digits : '';

        ?>




        <section class="about-section-2 fix section-padding">
            <div class="about-pencil bz-gsap-animate-circle">
                <img src="<?php echo esc_url($pencil_shape); ?>" alt="img">
            </div>
            <div class="about-vec bz-gsap-animate-circle">
                <img src="<?php echo esc_url($vec_shape); ?>" alt="img">
            </div>
            <div class="about-vec2 bz-gsap-animate-circle">
                <img src="<?php echo esc_url($vec2_shape); ?>" alt="img">
            </div>
            <div class="container">
                <div class="about-wrapper-2 style-inner">
                    <div class="row g-4 align-items-center">
                        <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="about-image">
                                <img src="<?php echo esc_url($main_image); ?>" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="about-content-2">
                                <div class="section-title mb-0">
                                    <?php if ($subtitle !== '') : ?>
                                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($subtitle); ?></span>
                                    <?php endif; ?>
                                    <?php if ($title !== '') : ?>
                                        <h2 class="wow fadeInUp" data-wow-delay=".3s"><?php echo nl2br(esc_html($title)); ?></h2>
                                    <?php endif; ?>
                                </div>
                                <?php if ($description !== '') : ?>
                                    <p class="about-text wow fadeInUp" data-wow-delay=".5s"><?php echo nl2br(esc_html($description)); ?></p>
                                <?php endif; ?>
                                <div class="about-list wow fadeInUp" data-wow-delay=".7s">
                                    <ul>
                                        <?php if ($list_one !== '') : ?>
                                            <li>
                                                <img src="<?php echo esc_url($check_icon); ?>" alt="img">
                                                <?php echo esc_html($list_one); ?>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ($list_two !== '') : ?>
                                            <li>
                                                <img src="<?php echo esc_url($check_icon); ?>" alt="img">
                                                <?php echo esc_html($list_two); ?>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                    <ul>
                                        <?php if ($list_three !== '') : ?>
                                            <li>
                                                <img src="<?php echo esc_url($check_icon); ?>" alt="img">
                                                <?php echo esc_html($list_three); ?>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ($list_four !== '') : ?>
                                            <li>
                                                <img src="<?php echo esc_url($check_icon); ?>" alt="img">
                                                <?php echo esc_html($list_four); ?>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="about-button wow fadeInUp" data-wow-delay=".6s">
                                    <a href="<?php echo esc_url($button_link); ?>" class="theme-btn"<?php echo $button_is_external . $button_nofollow; ?>>
                                        <span class="theme-bg">
                                            <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"></path>
                                            </svg>
                                        </span>
                                        <span class="theme-text"><?php echo esc_html($button_text); ?> <img src="<?php echo esc_url($button_arrow_icon); ?>" alt=""></span>
                                        <span class="theme-text2"><?php echo esc_html($button_text); ?> <img src="<?php echo esc_url($button_arrow_icon); ?>" alt=""></span>
                                    </a>
                                    <div class="author-icon">
                                        <div class="icon">
                                            <img src="<?php echo esc_url($phone_icon); ?>" alt="img">
                                        </div>
                                        <div class="content">
                                            <?php if ($call_label !== '') : ?>
                                                <span><?php echo esc_html($call_label); ?></span>
                                            <?php endif; ?>
                                            <?php if ($phone_display !== '' && $phone_href !== '') : ?>
                                                <h3>
                                                    <a href="<?php echo esc_url($phone_href); ?>"><?php echo esc_html($phone_display); ?></a>
                                                </h3>
                                            <?php endif; ?>
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