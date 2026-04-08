<?php

use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_Donation_7_Widget extends \Elementor\Widget_Base
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
        return 'ft-donation-7';
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
        return esc_html__('FT Donation 7', 'ftelements');
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
        // Section heading
        $this->start_controls_section(
            'content_heading',
            [
                'label' => esc_html__('Section Heading', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'subtitle_icon',
            [
                'label'   => esc_html__('Subtitle Icon', 'ftelements'),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fa-sharp fa-solid fa-heart',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label'       => esc_html__('Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Support Those in Need', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => "Recent initiatives\nthat impacted lives",
                'description' => esc_html__('Use new lines for line breaks.', 'ftelements'),
            ]
        );

        $this->end_controls_section();

        // Causes repeater
        $repeater = new Repeater();

        $repeater->add_control(
            'image',
            [
                'label'   => esc_html__('Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'category',
            [
                'label'       => esc_html__('Category / Tag', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Education', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'category_link',
            [
                'label'       => esc_html__('Category Link', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
                'default'     => ['url' => '#'],
            ]
        );

        $repeater->add_control(
            'goal',
            [
                'label'   => esc_html__('Goal Amount', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => '$30,000',
            ]
        );

        $repeater->add_control(
            'raised',
            [
                'label'   => esc_html__('Raised Amount', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => '$24,370',
            ]
        );

        $repeater->add_control(
            'progress',
            [
                'label'   => esc_html__('Progress (%)', 'ftelements'),
                'type'    => Controls_Manager::NUMBER,
                'default' => 85,
                'min'     => 0,
                'max'     => 100,
            ]
        );

        $repeater->add_control(
            'item_title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Changing futures', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'title_link',
            [
                'label'       => esc_html__('Title Link', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
                'default'     => ['url' => '#'],
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label'   => esc_html__('Description', 'ftelements'),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dolor consectetur adipiscing eiusmod tempor.', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'button_text',
            [
                'label'   => esc_html__('Button Text', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Donate now', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'button_link',
            [
                'label'       => esc_html__('Button Link', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
                'default'     => ['url' => '#'],
            ]
        );

        $this->start_controls_section(
            'content_causes',
            [
                'label' => esc_html__('Causes', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'causes',
            [
                'label'       => esc_html__('Causes List', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    [
                        'category'    => esc_html__('Education', 'ftelements'),
                        'item_title'  => esc_html__('Changing futures', 'ftelements'),
                        'goal'        => '$30,000',
                        'raised'      => '$24,370',
                        'progress'    => 85,
                        'description' => esc_html__('Lorem ipsum dolor consectetur adipiscing eiusmod tempor.', 'ftelements'),
                    ],
                    [
                        'category'    => esc_html__('SUPPORT', 'ftelements'),
                        'item_title'  => esc_html__('Supportive programs', 'ftelements'),
                        'goal'        => '$30,000',
                        'raised'      => '$24,370',
                        'progress'    => 95,
                        'description' => esc_html__('Lorem ipsum dolor consectetur adipiscing eiusmod tempor.', 'ftelements'),
                    ],
                    [
                        'category'    => esc_html__('CHILDHOOD', 'ftelements'),
                        'item_title'  => esc_html__('Empowering youth', 'ftelements'),
                        'goal'        => '$30,000',
                        'raised'      => '$24,370',
                        'progress'    => 75,
                        'description' => esc_html__('Lorem ipsum dolor consectetur adipiscing eiusmod tempor.', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ category }}}',
            ]
        );

        $this->end_controls_section();

        // Style: Section
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
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-causes-section-2',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'section_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-section-2',
            ]
        );
        $this->add_responsive_control(
            'section_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Subtitle
        $this->start_controls_section(
            'style_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .grt-section-title .grt-sub-title',
            ]
        );
        $this->add_control(
            'subtitle_icon_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title i, {{WRAPPER}} .grt-section-title .grt-sub-title svg' => 'color: {{VALUE}}; fill: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'subtitle_icon_size',
            [
                'label'      => esc_html__('Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title i, {{WRAPPER}} .grt-section-title .grt-sub-title svg' => 'font-size: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );
        $this->add_responsive_control(
            'subtitle_icon_gap',
            [
                'label'      => esc_html__('Icon Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title i, {{WRAPPER}} .grt-section-title .grt-sub-title svg' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'subtitle_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'subtitle_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'subtitle_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-section-title .grt-sub-title',
            ]
        );
        $this->add_responsive_control(
            'subtitle_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'subtitle_spacing_below',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'subtitle_color_hover',
            [
                'label'     => esc_html__('Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Title
        $this->start_controls_section(
            'style_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .split-title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .grt-section-title .split-title',
            ]
        );
        $this->add_responsive_control(
            'title_alignment',
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
                    '{{WRAPPER}} .grt-section-title .split-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title .split-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title .split-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_spacing_below',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title .split-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'title_color_hover',
            [
                'label'     => esc_html__('Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .split-title:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Section Title Wrapper
        $this->start_controls_section(
            'style_section_title_wrapper',
            [
                'label' => esc_html__('Section Title Wrapper', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'section_title_alignment',
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
                    '{{WRAPPER}} .grt-section-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_title_wrapper_bg',
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-section-title',
            ]
        );
        $this->add_responsive_control(
            'section_title_wrapper_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_title_wrapper_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'section_title_wrapper_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-section-title',
            ]
        );
        $this->add_responsive_control(
            'section_title_wrapper_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_title_spacing_below',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Cause Box
        $this->start_controls_section(
            'style_cause_box',
            [
                'label' => esc_html__('Cause Box', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'cause_box_background',
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2',
            ]
        );
        $this->add_responsive_control(
            'cause_box_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'cause_box_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'cause_box_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2',
            ]
        );
        $this->add_responsive_control(
            'cause_box_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'cause_box_bg_hover',
            [
                'label'     => esc_html__('Background Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'cause_box_border_color_hover',
            [
                'label'     => esc_html__('Border Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Cause Image / Thumb
        $this->start_controls_section(
            'style_cause_thumb',
            [
                'label' => esc_html__('Cause Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'cause_thumb_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'cause_thumb_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb',
            ]
        );
        $this->add_responsive_control(
            'cause_thumb_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'cause_thumb_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'cause_thumb_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'cause_thumb_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'cause_thumb_overlay',
            [
                'label'     => esc_html__('Overlay Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb::after' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Category / Tag
        $this->start_controls_section(
            'style_category',
            [
                'label' => esc_html__('Category / Tag', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'category_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .tag' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'category_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .tag' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'category_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .tag',
            ]
        );
        $this->add_responsive_control(
            'category_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'category_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'category_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .tag',
            ]
        );
        $this->add_responsive_control(
            'category_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'category_color_hover',
            [
                'label'     => esc_html__('Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .tag:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'category_bg_color_hover',
            [
                'label'     => esc_html__('Background Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .tag:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'category_border_color_hover',
            [
                'label'     => esc_html__('Border Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .tag:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Cause Content Wrapper
        $this->start_controls_section(
            'style_cause_content_wrapper',
            [
                'label' => esc_html__('Cause Content Wrapper', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'cause_content_wrapper_bg',
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-content.style-2',
            ]
        );
        $this->add_responsive_control(
            'cause_content_wrapper_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-content.style-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'cause_content_wrapper_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-content.style-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'cause_content_wrapper_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-content.style-2',
            ]
        );
        $this->add_responsive_control(
            'cause_content_wrapper_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-content.style-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Progress Bar
        $this->start_controls_section(
            'style_progress',
            [
                'label' => esc_html__('Progress Bar', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'progress_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .progress' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'progress_track_bg',
            [
                'label'     => esc_html__('Track Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .progress' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'progress_track_border_radius',
            [
                'label'      => esc_html__('Track Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .progress' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'progress_track_border',
                'label'    => esc_html__('Track Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .progress',
            ]
        );
        $this->add_control(
            'progress_bar_color',
            [
                'label'     => esc_html__('Bar Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .progress-bar' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'progress_bar_border_radius',
            [
                'label'      => esc_html__('Bar Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .progress-bar' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'progress_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .skill-feature .progress' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'progress_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .skill-feature' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Progress Value (percentage text)
        $this->start_controls_section(
            'style_progress_value',
            [
                'label' => esc_html__('Progress Value (Percentage)', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'progress_value_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .progress-value' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'progress_value_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .progress-value',
            ]
        );
        $this->add_responsive_control(
            'progress_value_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .progress-value' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'progress_value_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .progress-value' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Price List
        $this->start_controls_section(
            'style_price_list',
            [
                'label' => esc_html__('Price List', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'price_list_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .price-list' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'price_list_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .price-list',
            ]
        );
        $this->add_responsive_control(
            'price_list_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .price-list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'price_list_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .price-list' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'price_list_gap',
            [
                'label'      => esc_html__('Gap Between Items', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .price-list span' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'price_list_color_hover',
            [
                'label'     => esc_html__('Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .price-list:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Cause Title (card title)
        $this->start_controls_section(
            'style_cause_title',
            [
                'label' => esc_html__('Cause Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'cause_title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .title-2 a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'cause_title_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .title-2 a',
            ]
        );
        $this->add_responsive_control(
            'cause_title_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .title-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'cause_title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .title-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'cause_title_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .title-2',
            ]
        );
        $this->add_control(
            'cause_title_color_hover',
            [
                'label'     => esc_html__('Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .title-2 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Description (text-2)
        $this->start_controls_section(
            'style_description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'description_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .text-2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'description_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .text-2',
            ]
        );
        $this->add_responsive_control(
            'description_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .text-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'description_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .text-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'description_spacing_below',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .text-2' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'description_color_hover',
            [
                'label'     => esc_html__('Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .text-2:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Button (theme-btn)
        $this->start_controls_section(
            'style_button',
            [
                'label' => esc_html__('Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'button_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'button_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'button_background',
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn',
            ]
        );
        $this->add_responsive_control(
            'button_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'button_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'button_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn',
            ]
        );
        $this->add_responsive_control(
            'button_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'button_icon_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn i, {{WRAPPER}} .grt-causes-box-items-2 .theme-btn svg' => 'color: {{VALUE}}; fill: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'button_icon_size',
            [
                'label'      => esc_html__('Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn i, {{WRAPPER}} .grt-causes-box-items-2 .theme-btn svg' => 'font-size: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );
        $this->add_responsive_control(
            'button_icon_gap',
            [
                'label'      => esc_html__('Icon Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn i, {{WRAPPER}} .grt-causes-box-items-2 .theme-btn svg' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'button_color_hover',
            [
                'label'     => esc_html__('Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'button_bg_hover',
            [
                'label'     => esc_html__('Background Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'button_border_color_hover',
            [
                'label'     => esc_html__('Border Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'button_icon_color_hover',
            [
                'label'     => esc_html__('Icon Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .theme-btn:hover i, {{WRAPPER}} .grt-causes-box-items-2 .theme-btn:hover svg' => 'color: {{VALUE}}; fill: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Row / Grid
        $this->start_controls_section(
            'style_row',
            [
                'label' => esc_html__('Row / Grid', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'row_gap',
            [
                'label'      => esc_html__('Gap Between Columns', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section-2 .row' => 'margin-left: calc(-{{SIZE}}{{UNIT}} / 2); margin-right: calc(-{{SIZE}}{{UNIT}} / 2);',
                    '{{WRAPPER}} .grt-causes-section-2 .row > [class*="col-"]' => 'padding-left: calc({{SIZE}}{{UNIT}} / 2); padding-right: calc({{SIZE}}{{UNIT}} / 2); margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'row_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section-2 .row' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'row_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section-2 .row' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $settings       = $this->get_settings_for_display();
        $causes         = !empty($settings['causes']) ? $settings['causes'] : [];
        $subtitle_icon  = $settings['subtitle_icon'];
        $title_text     = wp_kses_post(nl2br($settings['title']));
        ?>
        <section class="grt-causes-section-2 fix section-padding">
            <div class="container">
                <div class="grt-section-title text-center">
                    <span class="grt-sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                        <?php \Elementor\Icons_Manager::render_icon($subtitle_icon, ['aria-hidden' => 'true']); ?>
                        <?php echo esc_html($settings['subtitle']); ?>
                    </span>
                    <h2 class="split-title"><?php echo $title_text; ?></h2>
                </div>
                <div class="row">
                    <?php
                    foreach ($causes as $index => $item) {
                        $cat_link = !empty($item['category_link']['url']) ? $item['category_link']['url'] : '#';
                        $cat_attr = ' href="' . esc_url($cat_link) . '"';
                        if (!empty($item['category_link']['is_external'])) {
                            $cat_attr .= ' target="_blank"';
                        }
                        if (!empty($item['category_link']['nofollow'])) {
                            $cat_attr .= ' rel="nofollow"';
                        }
                        $title_link = !empty($item['title_link']['url']) ? $item['title_link']['url'] : '#';
                        $title_attr = ' href="' . esc_url($title_link) . '"';
                        if (!empty($item['title_link']['is_external'])) {
                            $title_attr .= ' target="_blank"';
                        }
                        if (!empty($item['title_link']['nofollow'])) {
                            $title_attr .= ' rel="nofollow"';
                        }
                        $btn_link = !empty($item['button_link']['url']) ? $item['button_link']['url'] : '#';
                        $btn_attr = ' href="' . esc_url($btn_link) . '"';
                        if (!empty($item['button_link']['is_external'])) {
                            $btn_attr .= ' target="_blank"';
                        }
                        if (!empty($item['button_link']['nofollow'])) {
                            $btn_attr .= ' rel="nofollow"';
                        }
                        $image_url = !empty($item['image']['url']) ? $item['image']['url'] : Utils::get_placeholder_image_src();
                        $progress  = isset($item['progress']) ? (int) $item['progress'] : 0;
                        $delay     = '.3s';
                        if ($index === 1) {
                            $delay = '.5s';
                        } elseif ($index >= 2) {
                            $delay = '.7s';
                        }
                        ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                            <div class="grt-causes-box-items-2">
                                <div class="grt-causes-thumb">
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($item['category']); ?>">
                                    <a<?php echo $cat_attr; ?> class="tag"><?php echo esc_html($item['category']); ?></a>
                                </div>
                                <div class="grt-causes-content style-2">
                                    <div class="skill-feature">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: <?php echo esc_attr($progress); ?>%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                                <div class="progress-value"><span class="counter-number2"><?php echo esc_html($progress); ?></span>%</div>
                                            </div>
                                        </div>
                                        <div class="price-list">
                                            <span><?php echo esc_html($item['goal']); ?></span>
                                            <span><?php echo esc_html($item['raised']); ?></span>
                                        </div>
                                    </div>
                                    <h3 class="title-2">
                                        <a<?php echo $title_attr; ?>><?php echo esc_html($item['item_title']); ?></a>
                                    </h3>
                                    <p class="text-2">
                                        <?php echo esc_html($item['description']); ?>
                                    </p>
                                    <a<?php echo $btn_attr; ?> class="theme-btn"><?php echo esc_html($item['button_text']); ?> <i class="fa-sharp fa-solid fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>










<?php
    }
} ?>