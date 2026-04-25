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

class FT_Program2_Widget extends \Elementor\Widget_Base
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
        return 'ft-program-2';
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
        return esc_html__('FT Program 2', 'ftelements');
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
            'program_images_content',
            [
                'label' => esc_html__('Program Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'program_image_1',
            [
                'label' => esc_html__('Program Image 1', 'ftelements'),
                'type'  => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/program1.png',
                ],
            ]
        );

        $this->add_control(
            'program_image_2',
            [
                'label' => esc_html__('Program Image 2', 'ftelements'),
                'type'  => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/program2.png',
                ],
            ]
        );

        $this->add_control(
            'program_image_3',
            [
                'label' => esc_html__('Program Image 3', 'ftelements'),
                'type'  => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/program3.png',
                ],
            ]
        );

        $this->add_control(
            'program_image_4',
            [
                'label' => esc_html__('Program Image 4', 'ftelements'),
                'type'  => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/program4.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program_general_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_subtitle',
            [
                'label'       => esc_html__('Section Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Our Programs', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'       => esc_html__('Section Title', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Our Program / Classes', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'duration_prefix',
            [
                'label'       => esc_html__('Duration Prefix', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('duration : ', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'bottom_title',
            [
                'label'       => esc_html__('Bottom Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('Explore All Our Exciting Programs - Find the Perfect Fit for Your Child\'s Growth!', 'ftelements'),
                'rows'        => 3,
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label'       => esc_html__('Button Text', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('know more', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label'       => esc_html__('Button Link', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'default'     => [
                    'url' => home_url('/about/'),
                ],
                'show_external' => true,
            ]
        );

        $this->add_control(
            'phone_label',
            [
                'label'       => esc_html__('Phone Label', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Call Us Now', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'phone_number',
            [
                'label'       => esc_html__('Phone Number', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => '+11 123 0654 98',
                'label_block' => true,
            ]
        );

        $this->add_control(
            'top_line_image',
            [
                'label'   => esc_html__('Top Line Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/top-line-1.png',
                ],
            ]
        );

        $this->add_control(
            'bottom_line_image',
            [
                'label'   => esc_html__('Bottom Line Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/bottom-line-2.png',
                ],
            ]
        );

        $this->add_control(
            'star_shape_image_1',
            [
                'label'   => esc_html__('Star Shape Image 1', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/star4.png',
                ],
            ]
        );

        $this->add_control(
            'star_shape_image_2',
            [
                'label'   => esc_html__('Star Shape Image 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/star5.png',
                ],
            ]
        );

        $this->add_control(
            'cat_shape_image',
            [
                'label'   => esc_html__('Cat Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/cat-1.png',
                ],
            ]
        );

        $this->add_control(
            'hand_image_1',
            [
                'label'   => esc_html__('Hand Image 1', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/hand-1.png',
                ],
            ]
        );

        $this->add_control(
            'hand_image_2',
            [
                'label'   => esc_html__('Hand Image 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/hand-2.png',
                ],
            ]
        );

        $this->add_control(
            'hand_image_3',
            [
                'label'   => esc_html__('Hand Image 3', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/hand-3.png',
                ],
            ]
        );

        $this->add_control(
            'hand_image_4',
            [
                'label'   => esc_html__('Hand Image 4', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/hand-4.png',
                ],
            ]
        );

        $this->add_control(
            'card_arrow_icon',
            [
                'label'   => esc_html__('Card Arrow Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/icon/arrow.svg',
                ],
            ]
        );

        $this->add_control(
            'button_arrow_icon',
            [
                'label'   => esc_html__('Button Arrow Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/arrow1.svg',
                ],
            ]
        );

        $this->add_control(
            'phone_icon',
            [
                'label'   => esc_html__('Phone Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/icon/telephone.svg',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'selector' => '{{WRAPPER}} .program-section-2',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .program-section-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_title_style',
            [
                'label' => esc_html__('Section Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .program-section-2 .section-title .sec-sub',
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-2 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .program-section-2 .section-title .sec_title',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-2 .section-title .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_title_spacing',
            [
                'label'      => esc_html__('Title Bottom Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 150],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-2 .section-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'card_style',
            [
                'label' => esc_html__('Program Card', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'card_background',
                'selector' => '{{WRAPPER}} .program-section-2 .program-box-items-2',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'card_border',
                'selector' => '{{WRAPPER}} .program-section-2 .program-box-items-2',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label'      => esc_html__('Card Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2 .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_gap',
            [
                'label'      => esc_html__('Card Bottom Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'card_content_style',
            [
                'label' => esc_html__('Card Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'label_typography',
                'selector' => '{{WRAPPER}} .program-section-2 .program-box-items-2 .year-text',
            ]
        );

        $this->add_control(
            'label_color',
            [
                'label'     => esc_html__('Label Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2 .year-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'card_title_typography',
                'selector' => '{{WRAPPER}} .program-section-2 .program-box-items-2 .title, {{WRAPPER}} .program-section-2 .program-box-items-2 .title a',
            ]
        );

        $this->add_control(
            'card_title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2 .title, {{WRAPPER}} .program-section-2 .program-box-items-2 .title a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'card_title_hover_color',
            [
                'label'     => esc_html__('Title Hover Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2 .title a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'description_typography',
                'selector' => '{{WRAPPER}} .program-section-2 .program-box-items-2 p',
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label'     => esc_html__('Description Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2 p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'duration_typography',
                'selector' => '{{WRAPPER}} .program-section-2 .program-box-items-2 .duration-text',
            ]
        );

        $this->add_control(
            'duration_color',
            [
                'label'     => esc_html__('Duration Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2 .duration-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_item_spacing',
            [
                'label'      => esc_html__('Content Item Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 60],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2 .content > *:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'thumb_style',
            [
                'label' => esc_html__('Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'thumb_css_filters',
                'selector' => '{{WRAPPER}} .program-section-2 .program-box-items-2 .thumb img',
            ]
        );

        $this->add_responsive_control(
            'thumb_border_radius',
            [
                'label'      => esc_html__('Image Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2 .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'thumb_height',
            [
                'label'      => esc_html__('Image Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'range'      => [
                    'px' => ['min' => 100, 'max' => 700],
                    'vh' => ['min' => 10, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2 .thumb img' => 'height: {{SIZE}}{{UNIT}}; object-fit: cover;',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'arrow_btn_style',
            [
                'label' => esc_html__('Arrow Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'arrow_btn_size',
            [
                'label'      => esc_html__('Button Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 20, 'max' => 120],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2 .arrow-btn .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'arrow_btn_border',
                'selector' => '{{WRAPPER}} .program-section-2 .program-box-items-2 .arrow-btn .icon',
            ]
        );

        $this->add_responsive_control(
            'arrow_btn_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-2 .program-box-items-2 .arrow-btn .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('arrow_btn_tabs');

        $this->start_controls_tab(
            'arrow_btn_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'arrow_btn_bg_normal',
                'selector' => '{{WRAPPER}} .program-section-2 .program-box-items-2 .arrow-btn .icon .bg',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'arrow_btn_hover_tab',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'arrow_btn_bg_hover',
                'selector' => '{{WRAPPER}} .program-section-2 .program-box-items-2 .arrow-btn .icon:hover .bg',
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'bottom_cta_style',
            [
                'label' => esc_html__('Bottom CTA', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'cta_title_typography',
                'selector' => '{{WRAPPER}} .program-section-2 .program-bottom-area .title',
            ]
        );

        $this->add_control(
            'cta_title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-2 .program-bottom-area .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'cta_phone_text_typography',
                'selector' => '{{WRAPPER}} .program-section-2 .program-bottom-area .author-icon .content span',
            ]
        );

        $this->add_control(
            'cta_phone_text_color',
            [
                'label'     => esc_html__('Phone Label Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-2 .program-bottom-area .author-icon .content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'cta_phone_number_typography',
                'selector' => '{{WRAPPER}} .program-section-2 .program-bottom-area .author-icon .content h4 a',
            ]
        );

        $this->add_control(
            'cta_phone_number_color',
            [
                'label'     => esc_html__('Phone Number Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-2 .program-bottom-area .author-icon .content h4 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bottom_area_spacing',
            [
                'label'      => esc_html__('Top Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 150],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-2 .program-bottom-area' => 'margin-top: {{SIZE}}{{UNIT}};',
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
        $theme_uri = get_template_directory_uri();
        $media_url = static function ($value, $fallback = '') {
            return !empty($value['url']) ? $value['url'] : $fallback;
        };
        $default_program_images = [
            $theme_uri . '/assets/img/home-2/program1.png',
            $theme_uri . '/assets/img/home-2/program2.png',
            $theme_uri . '/assets/img/home-2/program3.png',
            $theme_uri . '/assets/img/home-2/program4.png',
        ];
        $custom_program_images = [
            !empty($settings['program_image_1']['url']) ? $settings['program_image_1']['url'] : $default_program_images[0],
            !empty($settings['program_image_2']['url']) ? $settings['program_image_2']['url'] : $default_program_images[1],
            !empty($settings['program_image_3']['url']) ? $settings['program_image_3']['url'] : $default_program_images[2],
            !empty($settings['program_image_4']['url']) ? $settings['program_image_4']['url'] : $default_program_images[3],
        ];
        $top_line_image = $media_url($settings['top_line_image'] ?? [], $theme_uri . '/assets/img/home-2/shape/top-line-1.png');
        $bottom_line_image = $media_url($settings['bottom_line_image'] ?? [], $theme_uri . '/assets/img/home-2/shape/bottom-line-2.png');
        $star_shape_image_1 = $media_url($settings['star_shape_image_1'] ?? [], $theme_uri . '/assets/img/home-2/shape/star4.png');
        $star_shape_image_2 = $media_url($settings['star_shape_image_2'] ?? [], $theme_uri . '/assets/img/home-2/shape/star5.png');
        $cat_shape_image = $media_url($settings['cat_shape_image'] ?? [], $theme_uri . '/assets/img/home-2/shape/cat-1.png');
        $card_arrow_icon = $media_url($settings['card_arrow_icon'] ?? [], $theme_uri . '/assets/img/home-2/icon/arrow.svg');
        $button_arrow_icon = $media_url($settings['button_arrow_icon'] ?? [], $theme_uri . '/assets/img/icon/arrow1.svg');
        $phone_icon = $media_url($settings['phone_icon'] ?? [], $theme_uri . '/assets/img/home-1/icon/telephone.svg');
        $section_subtitle = !empty($settings['section_subtitle']) ? $settings['section_subtitle'] : __('Our Programs', 'ftelements');
        $section_title = !empty($settings['section_title']) ? $settings['section_title'] : __('Our Program / Classes', 'ftelements');
        $duration_prefix = isset($settings['duration_prefix']) ? (string) $settings['duration_prefix'] : __('duration : ', 'ftelements');
        $bottom_title = !empty($settings['bottom_title']) ? $settings['bottom_title'] : __('Explore All Our Exciting Programs - Find the Perfect Fit for Your Child\'s Growth!', 'ftelements');
        $button_text = !empty($settings['button_text']) ? $settings['button_text'] : __('know more', 'ftelements');
        $phone_label = !empty($settings['phone_label']) ? $settings['phone_label'] : __('Call Us Now', 'ftelements');
        $phone_number = !empty($settings['phone_number']) ? $settings['phone_number'] : '+11 123 0654 98';
        $button_link = !empty($settings['button_link']['url']) ? $settings['button_link']['url'] : home_url('/about/');
        $button_target = !empty($settings['button_link']['is_external']) ? ' target="_blank"' : '';
        $button_rel = !empty($settings['button_link']['nofollow']) ? ' rel="nofollow"' : '';
        $hand_images = [
            $media_url($settings['hand_image_1'] ?? [], $theme_uri . '/assets/img/home-2/hand-1.png'),
            $media_url($settings['hand_image_2'] ?? [], $theme_uri . '/assets/img/home-2/hand-2.png'),
            $media_url($settings['hand_image_3'] ?? [], $theme_uri . '/assets/img/home-2/hand-3.png'),
            $media_url($settings['hand_image_4'] ?? [], $theme_uri . '/assets/img/home-2/hand-4.png'),
        ];
        $programs = [];
        $normalize_text = static function ($value, $fallback = '') {
            if (is_array($value)) {
                $value = implode(', ', array_filter(array_map('strval', $value)));
            }

            if (is_object($value)) {
                $value = '';
            }

            $value = is_scalar($value) ? (string) $value : '';
            return $value !== '' ? $value : $fallback;
        };
        $format_duration = static function ($value, $fallback = '') use ($normalize_text) {
            if (is_string($value) && is_serialized($value)) {
                $value = maybe_unserialize($value);
            }

            if (is_string($value) && ($value[0] ?? '') === '[') {
                $decoded = json_decode($value, true);
                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                    $value = $decoded;
                }
            }

            if (is_array($value) && count($value) >= 2) {
                $hours = 0;
                $minutes = 0;

                if (isset($value[0]) || isset($value[1])) {
                    $hours = (int) ($value[0] ?? 0);
                    $minutes = (int) ($value[1] ?? 0);
                } elseif (isset($value['hours']) || isset($value['minutes'])) {
                    $hours = (int) ($value['hours'] ?? 0);
                    $minutes = (int) ($value['minutes'] ?? 0);
                } else {
                    $duration_values = array_values($value);
                    $hours = (int) ($duration_values[0] ?? 0);
                    $minutes = (int) ($duration_values[1] ?? 0);
                }

                $parts = [];

                if ($hours > 0) {
                    $parts[] = sprintf(_n('%d Hour', '%d Hours', $hours, 'ftelements'), $hours);
                }
                if ($minutes > 0) {
                    $parts[] = sprintf(_n('%d Minute', '%d Minutes', $minutes, 'ftelements'), $minutes);
                }

                if (!empty($parts)) {
                    return implode(' ', $parts);
                }
            }

            if (is_string($value)) {
                $value = trim($value);
                if ($value !== '' && preg_match('/^\s*(\d+)\s*hour(?:s)?\s+(\d+)\s*min(?:ute)?(?:s)?\s*$/i', $value, $matches)) {
                    $value = $matches[1] . ',' . $matches[2];
                }
                if ($value !== '' && preg_match('/^\s*(\d+)\s*[,:\-]\s*(\d+)\s*$/', $value, $matches)) {
                    $hours = (int) $matches[1];
                    $minutes = (int) $matches[2];
                    $parts = [];

                    if ($hours > 0) {
                        $parts[] = sprintf(_n('%d Hour', '%d Hours', $hours, 'ftelements'), $hours);
                    }
                    if ($minutes > 0) {
                        $parts[] = sprintf(_n('%d Minute', '%d Minutes', $minutes, 'ftelements'), $minutes);
                    }

                    if (!empty($parts)) {
                        return implode(' ', $parts);
                    }
                }
            }

            if (is_numeric($value)) {
                $minutes = (int) $value;
                if ($minutes > 0) {
                    return sprintf(_n('%d Minute', '%d Minutes', $minutes, 'ftelements'), $minutes);
                }
            }

            return $normalize_text($value, $fallback);
        };

        $is_tutor_active = function_exists('tutor') || class_exists('\TUTOR\Tutor');
        if ($is_tutor_active) {
            $course_post_types = ['courses', 'tutor_course'];
            if (function_exists('tutor') && isset(tutor()->course_post_type) && !empty(tutor()->course_post_type)) {
                $course_post_types = [tutor()->course_post_type];
            }

            $query = new \WP_Query([
                'post_type'      => $course_post_types,
                'post_status'    => 'publish',
                'posts_per_page' => 4,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $course_id = get_the_ID();
                    $duration = get_post_meta($course_id, '_course_duration', true);
                    if (empty($duration)) {
                        $hours = (int) get_post_meta($course_id, '_tutor_course_duration_hours', true);
                        $minutes = (int) get_post_meta($course_id, '_tutor_course_duration_minutes', true);
                        $duration_parts = [];

                        if ($hours > 0) {
                            $duration_parts[] = sprintf(_n('%d Hour', '%d Hours', $hours, 'ftelements'), $hours);
                        }
                        if ($minutes > 0) {
                            $duration_parts[] = sprintf(_n('%d Minute', '%d Minutes', $minutes, 'ftelements'), $minutes);
                        }

                        if (!empty($duration_parts)) {
                            $duration = implode(' ', $duration_parts);
                        }
                    }
                    $duration = $format_duration($duration, __('Flexible', 'ftelements'));

                    $terms = get_the_terms($course_id, 'course-category');
                    $label = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : __('Program', 'ftelements');
                    $label = $normalize_text($label, __('Program', 'ftelements'));

                    $programs[] = [
                        'title'       => get_the_title(),
                        'url'         => get_permalink(),
                        'description' => wp_trim_words(get_the_excerpt(), 18, '...'),
                        'duration'    => $duration,
                        'label'       => $label,
                        'image'       => '',
                    ];
                }
                wp_reset_postdata();
            }
        }

        if (empty($programs)) {
            $programs = [
                [
                    'title'       => __('Play Group Program', 'ftelements'),
                    'url'         => '#',
                    'description' => __('Fun-based learning through games, music, and activities to develop social skills and confidence.', 'ftelements'),
                    'duration'    => __('2.5 Hr', 'ftelements'),
                    'label'       => __('3-5 Years', 'ftelements'),
                    'image'       => $default_program_images[0],
                ],
                [
                    'title'       => __('Nursery Program', 'ftelements'),
                    'url'         => '#',
                    'description' => __('Fun-based learning through games, music, and activities to develop social skills and confidence.', 'ftelements'),
                    'duration'    => __('2.5 Hr', 'ftelements'),
                    'label'       => __('5-7 Years', 'ftelements'),
                    'image'       => $default_program_images[1],
                ],
                [
                    'title'       => __('Kindergarten Program', 'ftelements'),
                    'url'         => '#',
                    'description' => __('Fun-based learning through games, music, and activities to develop social skills and confidence.', 'ftelements'),
                    'duration'    => __('2.5 Hr', 'ftelements'),
                    'label'       => __('7-10 Years', 'ftelements'),
                    'image'       => $default_program_images[2],
                ],
                [
                    'title'       => __('Junior School', 'ftelements'),
                    'url'         => '#',
                    'description' => __('Fun-based learning through games, music, and activities to develop social skills and confidence.', 'ftelements'),
                    'duration'    => __('2.5 Hr', 'ftelements'),
                    'label'       => __('10-15 Years', 'ftelements'),
                    'image'       => $default_program_images[3],
                ],
            ];
        }

        ?>
        <section class="program-section-2 section-padding">
            <div class="top-line-1">
                <img src="<?php echo esc_url($top_line_image); ?>" alt="img">
            </div>
            <div class="bottom-line-1">
                <img src="<?php echo esc_url($bottom_line_image); ?>" alt="img">
            </div>
            <div class="star-shape bz-gsap-animate-circle">
                <img src="<?php echo esc_url($star_shape_image_1); ?>" alt="img">
            </div>
            <div class="star-shape2 bz-gsap-animate-circle">
                <img src="<?php echo esc_url($star_shape_image_2); ?>" alt="img">
            </div>
            <div class="cat-shape bz-gsap-animate-circle">
                <img src="<?php echo esc_url($cat_shape_image); ?>" alt="img">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($section_subtitle); ?></span>
                    <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                        <?php echo esc_html($section_title); ?>
                    </h2>
                </div>
                <div class="row">
                    <?php foreach ($programs as $index => $program) :
                        $delay = 0.2 + ($index * 0.2);
                        $card_class = ($index === 1) ? ' active' : '';
                        $content_style_class = ($index > 0) ? ' style-' . ($index + 1) : '';
                        $thumb_class = ($index === 2) ? ' style-left' : '';
                        $hand_image = $hand_images[$index] ?? $hand_images[0];
                        $program_image = $custom_program_images[$index] ?? $default_program_images[0];
                        ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr(number_format($delay, 1)); ?>s">
                            <div class="program-box-items-2<?php echo esc_attr($card_class); ?>">
                                <div class="thumb<?php echo esc_attr($thumb_class); ?>">
                                    <img src="<?php echo esc_url($program_image); ?>" alt="<?php echo esc_attr($program['title']); ?>">
                                </div>
                                <div class="content<?php echo esc_attr($content_style_class); ?>">
                                    <div class="hand-image">
                                        <img src="<?php echo esc_url($hand_image); ?>" alt="">
                                    </div>
                                    <div class="year-text">
                                        <?php echo esc_html($program['label']); ?>
                                    </div>
                                    <h3 class="title">
                                        <a href="<?php echo esc_url($program['url']); ?>"><?php echo esc_html($program['title']); ?></a>
                                    </h3>
                                    <p>
                                        <?php echo esc_html($program['description']); ?>
                                    </p>
                                    <div class="duration-text">
                                        <?php echo esc_html($duration_prefix) . esc_html($program['duration']); ?>
                                    </div>
                                    <div class="arrow-btn">
                                        <a href="<?php echo esc_url($program['url']); ?>" class="icon">
                                            <span class="bg"></span>
                                            <div class="arrow-icon">
                                                <img src="<?php echo esc_url($card_arrow_icon); ?>" alt="">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="program-bottom-area">
                    <h4 class="title wow fadeInUp" data-wow-delay=".3s">
                        <?php echo esc_html($bottom_title); ?>
                    </h4>
                    <div class="program-button wow fadeInUp" data-wow-delay=".5s">
                        <a href="<?php echo esc_url($button_link); ?>" class="theme-btn"<?php echo $button_target . $button_rel; ?>>
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
                                <span><?php echo esc_html($phone_label); ?></span>
                                <h4>
                                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9\+]/', '', $phone_number)); ?>"><?php echo esc_html($phone_number); ?></a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
} ?>