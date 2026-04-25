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

class FT_Program7_Widget extends \Elementor\Widget_Base
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
        return 'ft-program-7';
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
        return esc_html__('FT Program 7', 'ftelements');
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
            'program7_images_content',
            [
                'label' => esc_html__('Program Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'program_image_1',
            [
                'label'   => esc_html__('Program Image 1', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/program1.png',
                ],
            ]
        );

        $this->add_control(
            'program_image_2',
            [
                'label'   => esc_html__('Program Image 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/program2.png',
                ],
            ]
        );

        $this->add_control(
            'program_image_3',
            [
                'label'   => esc_html__('Program Image 3', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/program3.png',
                ],
            ]
        );

        $this->add_control(
            'program_image_4',
            [
                'label'   => esc_html__('Program Image 4', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/program4.png',
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
            'program7_content',
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
                'label'         => esc_html__('Button Link', 'ftelements'),
                'type'          => Controls_Manager::URL,
                'default'       => [
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

        $this->end_controls_section();

        $this->start_controls_section(
            'program7_section_style',
            [
                'label' => esc_html__('Section Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'program7_section_padding',
            [
                'label'      => esc_html__('Section Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_container_max_width',
            [
                'label'      => esc_html__('Container Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .container' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'program7_section_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .program-section-inner',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program7_header_style',
            [
                'label' => esc_html__('Header Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program7_subtitle_typography',
                'selector' => '{{WRAPPER}} .program-section-inner .section-title .sec-sub',
            ]
        );

        $this->add_control(
            'program7_subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-inner .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_subtitle_margin',
            [
                'label'      => esc_html__('Subtitle Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program7_title_typography',
                'selector' => '{{WRAPPER}} .program-section-inner .section-title .sec_title',
            ]
        );

        $this->add_control(
            'program7_title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-inner .section-title .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_title_margin',
            [
                'label'      => esc_html__('Title Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .section-title .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_header_spacing',
            [
                'label'      => esc_html__('Header Bottom Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .section-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program7_card_style',
            [
                'label' => esc_html__('Card Box Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'program7_card_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .program-section-inner .program-box-items-2 .content',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'program7_card_border',
                'selector' => '{{WRAPPER}} .program-section-inner .program-box-items-2 .content',
            ]
        );

        $this->add_responsive_control(
            'program7_card_border_radius',
            [
                'label'      => esc_html__('Card Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_card_padding',
            [
                'label'      => esc_html__('Card Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_card_gap',
            [
                'label'      => esc_html__('Card Bottom Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program7_thumb_style',
            [
                'label' => esc_html__('Card Image Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'program7_thumb_height',
            [
                'label'      => esc_html__('Image Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .thumb img' => 'height: {{SIZE}}{{UNIT}}; object-fit: cover;',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'program7_thumb_border',
                'selector' => '{{WRAPPER}} .program-section-inner .program-box-items-2 .thumb img',
            ]
        );

        $this->add_responsive_control(
            'program7_thumb_radius',
            [
                'label'      => esc_html__('Image Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_thumb_spacing',
            [
                'label'      => esc_html__('Image Bottom Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .thumb' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program7_label_style',
            [
                'label' => esc_html__('Label Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program7_label_typography',
                'selector' => '{{WRAPPER}} .program-section-inner .program-box-items-2 .year-text',
            ]
        );

        $this->add_control(
            'program7_label_color',
            [
                'label'     => esc_html__('Label Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .year-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'program7_label_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .program-section-inner .program-box-items-2 .year-text',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'program7_label_border',
                'selector' => '{{WRAPPER}} .program-section-inner .program-box-items-2 .year-text',
            ]
        );

        $this->add_responsive_control(
            'program7_label_radius',
            [
                'label'      => esc_html__('Label Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .year-text' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_label_padding',
            [
                'label'      => esc_html__('Label Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .year-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_label_margin',
            [
                'label'      => esc_html__('Label Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .year-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program7_title_style',
            [
                'label' => esc_html__('Card Title Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program7_card_title_typography',
                'selector' => '{{WRAPPER}} .program-section-inner .program-box-items-2 .title a',
            ]
        );

        $this->start_controls_tabs('program7_card_title_tabs');

        $this->start_controls_tab(
            'program7_card_title_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'program7_card_title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .title a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'program7_card_title_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'program7_card_title_hover_color',
            [
                'label'     => esc_html__('Title Hover Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .title a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'program7_card_title_margin',
            [
                'label'      => esc_html__('Title Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program7_desc_style',
            [
                'label' => esc_html__('Description Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program7_desc_typography',
                'selector' => '{{WRAPPER}} .program-section-inner .program-box-items-2 .content p',
            ]
        );

        $this->add_control(
            'program7_desc_color',
            [
                'label'     => esc_html__('Description Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_desc_margin',
            [
                'label'      => esc_html__('Description Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program7_duration_style',
            [
                'label' => esc_html__('Duration Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program7_duration_typography',
                'selector' => '{{WRAPPER}} .program-section-inner .program-box-items-2 .duration-text',
            ]
        );

        $this->add_control(
            'program7_duration_color',
            [
                'label'     => esc_html__('Duration Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .duration-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_duration_margin',
            [
                'label'      => esc_html__('Duration Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-box-items-2 .duration-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program7_bottom_area_style',
            [
                'label' => esc_html__('Bottom Area Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program7_bottom_title_typography',
                'selector' => '{{WRAPPER}} .program-section-inner .program-bottom-area .title',
            ]
        );

        $this->add_control(
            'program7_bottom_title_color',
            [
                'label'     => esc_html__('Bottom Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-inner .program-bottom-area .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_bottom_area_margin',
            [
                'label'      => esc_html__('Bottom Area Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-bottom-area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_bottom_area_padding',
            [
                'label'      => esc_html__('Bottom Area Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-bottom-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program7_button_style',
            [
                'label' => esc_html__('Button Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program7_button_typography',
                'selector' => '{{WRAPPER}} .program-section-inner .program-button .theme-btn .theme-text, {{WRAPPER}} .program-section-inner .program-button .theme-btn .theme-text2',
            ]
        );

        $this->start_controls_tabs('program7_button_tabs');

        $this->start_controls_tab(
            'program7_button_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'program7_button_text_color',
            [
                'label'     => esc_html__('Button Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-inner .program-button .theme-btn .theme-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .program-section-inner .program-button .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'program7_button_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .program-section-inner .program-button .theme-btn .theme-bg svg path',
                'fields_options' => [
                    'background' => [
                        'label' => esc_html__('Button Background Type', 'ftelements'),
                    ],
                    'color' => [
                        'label' => esc_html__('Button Background Color', 'ftelements'),
                    ],
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'program7_button_hover_tab',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'program7_button_hover_text_color',
            [
                'label'     => esc_html__('Button Hover Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-inner .program-button .theme-btn:hover .theme-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .program-section-inner .program-button .theme-btn:hover .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'program7_button_border',
                'selector' => '{{WRAPPER}} .program-section-inner .program-button .theme-btn',
            ]
        );

        $this->add_responsive_control(
            'program7_button_border_radius',
            [
                'label'      => esc_html__('Button Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-button .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; overflow: hidden;',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_button_padding',
            [
                'label'      => esc_html__('Button Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .program-button .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program7_phone_style',
            [
                'label' => esc_html__('Phone Box Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'program7_phone_box_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .program-section-inner .author-icon',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'program7_phone_box_border',
                'selector' => '{{WRAPPER}} .program-section-inner .author-icon',
            ]
        );

        $this->add_responsive_control(
            'program7_phone_box_radius',
            [
                'label'      => esc_html__('Phone Box Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .author-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program7_phone_box_padding',
            [
                'label'      => esc_html__('Phone Box Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .author-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program7_phone_label_typography',
                'selector' => '{{WRAPPER}} .program-section-inner .author-icon .content span',
            ]
        );

        $this->add_control(
            'program7_phone_label_color',
            [
                'label'     => esc_html__('Phone Label Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-inner .author-icon .content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program7_phone_number_typography',
                'selector' => '{{WRAPPER}} .program-section-inner .author-icon .content h4 a',
            ]
        );

        $this->add_control(
            'program7_phone_number_color',
            [
                'label'     => esc_html__('Phone Number Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-inner .author-icon .content h4 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'program7_phone_icon_size',
            [
                'label'      => esc_html__('Phone Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-inner .author-icon .icon img' => 'width: {{SIZE}}{{UNIT}};',
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

        $hand_images = [
            !empty($settings['hand_image_1']['url']) ? $settings['hand_image_1']['url'] : ($theme_uri . '/assets/img/home-2/hand-1.png'),
            !empty($settings['hand_image_2']['url']) ? $settings['hand_image_2']['url'] : ($theme_uri . '/assets/img/home-2/hand-2.png'),
            !empty($settings['hand_image_3']['url']) ? $settings['hand_image_3']['url'] : ($theme_uri . '/assets/img/home-2/hand-3.png'),
            !empty($settings['hand_image_4']['url']) ? $settings['hand_image_4']['url'] : ($theme_uri . '/assets/img/home-2/hand-4.png'),
        ];

        $card_arrow_icon = !empty($settings['card_arrow_icon']['url']) ? $settings['card_arrow_icon']['url'] : ($theme_uri . '/assets/img/home-2/icon/arrow.svg');
        $button_arrow_icon = !empty($settings['button_arrow_icon']['url']) ? $settings['button_arrow_icon']['url'] : ($theme_uri . '/assets/img/icon/arrow1.svg');
        $phone_icon = !empty($settings['phone_icon']['url']) ? $settings['phone_icon']['url'] : ($theme_uri . '/assets/img/home-1/icon/telephone.svg');

        $section_subtitle = !empty($settings['section_subtitle']) ? $settings['section_subtitle'] : __('Our Programs', 'ftelements');
        $section_title = !empty($settings['section_title']) ? $settings['section_title'] : __('Our Program / Classes', 'ftelements');
        $duration_prefix = isset($settings['duration_prefix']) ? (string) $settings['duration_prefix'] : __('duration : ', 'ftelements');
        $bottom_title = !empty($settings['bottom_title']) ? $settings['bottom_title'] : __('Explore All Our Exciting Programs - Find the Perfect Fit for Your Child\'s Growth!', 'ftelements');
        $button_text = !empty($settings['button_text']) ? $settings['button_text'] : __('know more', 'ftelements');
        $button_link = !empty($settings['button_link']['url']) ? $settings['button_link']['url'] : home_url('/about/');
        $button_target = !empty($settings['button_link']['is_external']) ? ' target="_blank"' : '';
        $button_rel = !empty($settings['button_link']['nofollow']) ? ' rel="nofollow"' : '';
        $phone_label = !empty($settings['phone_label']) ? $settings['phone_label'] : __('Call Us Now', 'ftelements');
        $phone_number = !empty($settings['phone_number']) ? $settings['phone_number'] : '+11 123 0654 98';

        $format_duration = static function ($duration) {
            $duration = is_scalar($duration) ? trim((string) $duration) : '';
            if ($duration !== '') {
                return $duration;
            }

            return __('Flexible', 'ftelements');
        };

        $programs = [];
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

                    $terms = get_the_terms($course_id, 'course-category');
                    $label = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : __('Program', 'ftelements');

                    $programs[] = [
                        'title'       => get_the_title(),
                        'url'         => get_permalink(),
                        'description' => wp_trim_words(get_the_excerpt(), 18, '...'),
                        'duration'    => $format_duration($duration),
                        'label'       => $label,
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
                ],
                [
                    'title'       => __('Nursery Program', 'ftelements'),
                    'url'         => '#',
                    'description' => __('Fun-based learning through games, music, and activities to develop social skills and confidence.', 'ftelements'),
                    'duration'    => __('2.5 Hr', 'ftelements'),
                    'label'       => __('5-7 Years', 'ftelements'),
                ],
                [
                    'title'       => __('Kindergarten Program', 'ftelements'),
                    'url'         => '#',
                    'description' => __('Fun-based learning through games, music, and activities to develop social skills and confidence.', 'ftelements'),
                    'duration'    => __('2.5 Hr', 'ftelements'),
                    'label'       => __('7-10 Years', 'ftelements'),
                ],
                [
                    'title'       => __('Junior School', 'ftelements'),
                    'url'         => '#',
                    'description' => __('Fun-based learning through games, music, and activities to develop social skills and confidence.', 'ftelements'),
                    'duration'    => __('2.5 Hr', 'ftelements'),
                    'label'       => __('10-15 Years', 'ftelements'),
                ],
            ];
        }

        ?>
        <section class="program-section-inner section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($section_subtitle); ?></span>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                        <?php echo esc_html($section_title); ?>
                    </h2>
                </div>
                <div class="row">
                    <?php foreach (array_slice($programs, 0, 4) as $index => $program) :
                        $delay = 0.2 + ($index * 0.2);
                        $card_class = ($index === 0) ? ' active' : '';
                        $content_style_class = ($index > 0) ? ' style-' . ($index + 1) : '';
                        $thumb_class = ($index === 2) ? ' style-left' : '';
                        $program_image = $custom_program_images[$index] ?? $default_program_images[0];
                        $hand_image = $hand_images[$index] ?? $hand_images[0];
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