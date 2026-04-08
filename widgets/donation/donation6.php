<?php

use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_Donation_6_Widget extends \Elementor\Widget_Base
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
        return 'ft-donation-6';
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
        return esc_html__('FT Donation 6', 'ftelements');
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
                'label'   => esc_html__('Category', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Medical', 'ftelements'),
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
            'item_title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('Vigo Family Want More Medical Help', 'ftelements'),
                'description' => esc_html__('Use <br> for line breaks.', 'ftelements'),
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
            'raised',
            [
                'label'   => esc_html__('Raised Amount', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => '$2,000.00',
            ]
        );

        $repeater->add_control(
            'goal',
            [
                'label'   => esc_html__('Goal Amount', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => '$9,000.00',
            ]
        );

        $repeater->add_control(
            'time_to_go',
            [
                'label'   => esc_html__('Time to Go', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('1 year to go', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'progress',
            [
                'label'   => esc_html__('Progress (%)', 'ftelements'),
                'type'    => Controls_Manager::NUMBER,
                'default' => 35,
                'min'     => 0,
                'max'     => 100,
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
                        'category'    => esc_html__('Medical', 'ftelements'),
                        'item_title'  => "Vigo Family Want More\nMedical Help",
                        'raised'      => '$2,000.00',
                        'goal'        => '$9,000.00',
                        'time_to_go'  => esc_html__('1 year to go', 'ftelements'),
                        'progress'    => 35,
                    ],
                    [
                        'category'    => esc_html__('Food', 'ftelements'),
                        'item_title'  => "In Africa Need Clothing\nSupport Asap",
                        'raised'      => '$2,000.00',
                        'goal'        => '$9,000.00',
                        'time_to_go'  => esc_html__('1 year to go', 'ftelements'),
                        'progress'    => 35,
                    ],
                    [
                        'category'    => esc_html__('Protection', 'ftelements'),
                        'item_title'  => "Astro Child Home Need\nSupport",
                        'raised'      => '$2,000.00',
                        'goal'        => '$9,000.00',
                        'time_to_go'  => esc_html__('1 year to go', 'ftelements'),
                        'progress'    => 35,
                    ],
                    [
                        'category'    => esc_html__('Education', 'ftelements'),
                        'item_title'  => "Vigo Family Want More\nMedical Help",
                        'raised'      => '$2,000.00',
                        'goal'        => '$9,000.00',
                        'time_to_go'  => esc_html__('1 year to go', 'ftelements'),
                        'progress'    => 35,
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
                'selector' => '{{WRAPPER}} .grt-causes-section',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'section_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-section',
            ]
        );
        $this->add_responsive_control(
            'section_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'subtitle_spacing',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
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
            'title_spacing',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title .split-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Section title wrapper
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
        $this->add_responsive_control(
            'section_title_padding',
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
            'section_title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_title_spacing',
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

        // Style: Cause box
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
                'selector' => '{{WRAPPER}} .grt-causes-box-items-3',
            ]
        );
        $this->add_responsive_control(
            'cause_box_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-box-items-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'cause_box_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-3',
            ]
        );
        $this->add_responsive_control(
            'cause_box_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-3' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Cause thumb / image
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
                    '{{WRAPPER}} .grt-causes-box-items-3 .grt-thumb' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .grt-causes-box-items-3 .grt-thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'cause_thumb_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-3 .grt-thumb',
            ]
        );
        $this->add_responsive_control(
            'cause_thumb_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .grt-thumb' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Category (post-box)
        $this->start_controls_section(
            'style_category',
            [
                'label' => esc_html__('Category Badge', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'category_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .post-box' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'category_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .post-box' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'category_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-3 .post-box',
            ]
        );
        $this->add_responsive_control(
            'category_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .post-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-box-items-3 .post-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'category_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-3 .post-box',
            ]
        );
        $this->add_responsive_control(
            'category_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .post-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'category_color_hover',
            [
                'label'     => esc_html__('Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .post-box:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'category_bg_color_hover',
            [
                'label'     => esc_html__('Background Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .post-box:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'category_border_color_hover',
            [
                'label'     => esc_html__('Border Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .post-box:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Cause item title
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
                    '{{WRAPPER}} .grt-causes-box-items-3 .title a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'cause_title_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-3 .title a',
            ]
        );
        $this->add_responsive_control(
            'cause_title_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-box-items-3 .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'cause_title_color_hover',
            [
                'label'     => esc_html__('Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .title a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Progress bar
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
                    '{{WRAPPER}} .grt-causes-box-items-3 .progress' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'progress_bg_color',
            [
                'label'     => esc_html__('Track Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .progress' => 'background-color: {{VALUE}};',
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
                    '{{WRAPPER}} .grt-causes-box-items-3 .progress' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'progress_bar_color',
            [
                'label'     => esc_html__('Bar Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .progress-bar' => 'background-color: {{VALUE}};',
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
                    '{{WRAPPER}} .grt-causes-box-items-3 .progress-bar' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-box-items-3 .skill-feature .progress' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Price list
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
                    '{{WRAPPER}} .grt-causes-box-items-3 .price-list' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'price_list_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-3 .price-list',
            ]
        );
        $this->add_control(
            'price_list_bold_color',
            [
                'label'     => esc_html__('Bold Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .price-list b' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'price_list_bold_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-3 .price-list b',
            ]
        );
        $this->add_responsive_control(
            'price_list_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .price-list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-box-items-3 .price-list' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-box-items-3 .price-list span' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Skill feature wrapper
        $this->start_controls_section(
            'style_skill_feature',
            [
                'label' => esc_html__('Progress & Price Wrapper', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'skill_feature_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .skill-feature' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'skill_feature_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .skill-feature' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'skill_feature_background',
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-causes-box-items-3 .skill-feature',
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'skill_feature_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-3 .skill-feature',
            ]
        );
        $this->add_responsive_control(
            'skill_feature_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-3 .skill-feature' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Style: Row / column gap
        $this->start_controls_section(
            'style_row',
            [
                'label' => esc_html__('Row & Columns', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'row_gap',
            [
                'label'      => esc_html__('Row Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section .row' => 'margin-bottom: calc(-1 * {{SIZE}}{{UNIT}});',
                    '{{WRAPPER}} .grt-causes-section .row > [class*="col-"]' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'column_gap',
            [
                'label'      => esc_html__('Column Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section .row' => 'margin-left: calc(-1 * {{SIZE}}{{UNIT}} / 2); margin-right: calc(-1 * {{SIZE}}{{UNIT}} / 2);',
                    '{{WRAPPER}} .grt-causes-section .row > [class*="col-"]' => 'padding-left: calc({{SIZE}}{{UNIT}} / 2); padding-right: calc({{SIZE}}{{UNIT}} / 2);',
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
        $causes   = $settings['causes'] ? $settings['causes'] : [];
        $subtitle_icon = $settings['subtitle_icon'];
        $title_text    = wp_kses_post(nl2br($settings['title']));
        ?>
        <section class="grt-causes-section fix section-padding">
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
                        $image_url = !empty($item['image']['url']) ? $item['image']['url'] : Utils::get_placeholder_image_src();
                        $progress  = isset($item['progress']) ? (int) $item['progress'] : 0;
                        $item_delay = ($index % 2 === 0) ? '.3s' : '.5s';
                        ?>
                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($item_delay); ?>">
                            <div class="grt-causes-box-items-3">
                                <div class="grt-thumb">
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($item['category']); ?>">
                                    <div class="grt-content">
                                        <a<?php echo $cat_attr; ?> class="post-box"><?php echo esc_html($item['category']); ?></a>
                                        <h3 class="title">
                                            <a<?php echo $title_attr; ?>><?php echo wp_kses_post(nl2br($item['item_title'])); ?></a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="skill-feature">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: <?php echo esc_attr($progress); ?>%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;"></div>
                                    </div>
                                    <div class="price-list">
                                        <span><b><?php echo esc_html($item['raised']); ?></b> of <?php echo esc_html($item['goal']); ?></span>
                                        <span><b><?php echo esc_html($item['time_to_go']); ?></b></span>
                                    </div>
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