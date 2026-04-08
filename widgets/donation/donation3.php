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

class FT_Donation_3_Widget extends \Elementor\Widget_Base
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
        return 'ft-donation-3';
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
        return esc_html__('FT Donation 3', 'ftelements');
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
                'label' => esc_html__('Subtitle Icon', 'ftelements'),
                'type'  => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fa-sharp fa-solid fa-heart',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label'   => esc_html__('Subtitle', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Support Those in Need', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => "Recent initiatives <br>\nthat impacted lives",
                'description' => esc_html__('Use <br> for line breaks.', 'ftelements'),
            ]
        );

        $this->end_controls_section();

        // Causes repeater
        $repeater = new Repeater();

        $repeater->add_control(
            'cause_image',
            [
                'label'   => esc_html__('Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'cause_tag',
            [
                'label'   => esc_html__('Tag', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Education', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'cause_tag_link',
            [
                'label'   => esc_html__('Tag Link', 'ftelements'),
                'type'    => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
                'default' => [ 'url' => '#' ],
            ]
        );

        $repeater->add_control(
            'cause_title',
            [
                'label'   => esc_html__('Title', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Changing futures', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'cause_description',
            [
                'label'   => esc_html__('Description', 'ftelements'),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dolor consectetur adipiscing eiusmod tempor.', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'cause_progress',
            [
                'label'   => esc_html__('Progress (%)', 'ftelements'),
                'type'    => Controls_Manager::NUMBER,
                'min'     => 0,
                'max'     => 100,
                'default' => 85,
            ]
        );

        $repeater->add_control(
            'cause_goal',
            [
                'label'   => esc_html__('Goal Amount', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => '$30,000',
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'cause_raised',
            [
                'label'   => esc_html__('Raised Amount', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => '$24,370',
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'cause_link',
            [
                'label'   => esc_html__('Link', 'ftelements'),
                'type'    => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
                'default' => [ 'url' => '#' ],
            ]
        );

        $repeater->add_control(
            'cause_button_text',
            [
                'label'   => esc_html__('Button Text', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Donate now', 'ftelements'),
                'label_block' => true,
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
                        'cause_tag'       => esc_html__('Education', 'ftelements'),
                        'cause_title'     => esc_html__('Changing futures', 'ftelements'),
                        'cause_description' => esc_html__('Lorem ipsum dolor consectetur adipiscing eiusmod tempor.', 'ftelements'),
                        'cause_progress'  => 85,
                        'cause_goal'      => '$30,000',
                        'cause_raised'    => '$24,370',
                    ],
                    [
                        'cause_tag'       => esc_html__('SUPPORT', 'ftelements'),
                        'cause_title'     => esc_html__('Supportive programs', 'ftelements'),
                        'cause_description' => esc_html__('Lorem ipsum dolor consectetur adipiscing eiusmod tempor.', 'ftelements'),
                        'cause_progress'  => 81,
                        'cause_goal'      => '$30,000',
                        'cause_raised'    => '$24,370',
                    ],
                    [
                        'cause_tag'       => esc_html__('CHILDHOOD', 'ftelements'),
                        'cause_title'     => esc_html__('Empowering youth', 'ftelements'),
                        'cause_description' => esc_html__('Lorem ipsum dolor consectetur adipiscing eiusmod tempor.', 'ftelements'),
                        'cause_progress'  => 95,
                        'cause_goal'      => '$30,000',
                        'cause_raised'    => '$24,370',
                    ],
                ],
                'title_field' => '{{{ cause_title }}}',
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
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-causes-section-2',
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
                    '{{WRAPPER}} .grt-causes-section-2 .grt-sub-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .grt-causes-section-2 .grt-sub-title',
            ]
        );

        $this->add_control(
            'subtitle_icon_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-section-2 .grt-sub-title i, {{WRAPPER}} .grt-causes-section-2 .grt-sub-title svg' => 'color: {{VALUE}}; fill: {{VALUE}};',
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
                    '{{WRAPPER}} .grt-causes-section-2 .grt-sub-title i, {{WRAPPER}} .grt-causes-section-2 .grt-sub-title svg' => 'font-size: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; height: auto;',
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
                    '{{WRAPPER}} .grt-causes-section-2 .grt-sub-title i, {{WRAPPER}} .grt-causes-section-2 .grt-sub-title svg' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'subtitle_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-section-2 .grt-sub-title' => 'background-color: {{VALUE}};',
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
                    '{{WRAPPER}} .grt-causes-section-2 .grt-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; display: inline-block;',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section-2 .grt-sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-section-2 .grt-sub-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-section-2 .grt-section-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-section-2 .split-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .grt-causes-section-2 .split-title',
            ]
        );

        $this->add_responsive_control(
            'title_spacing',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section-2 .split-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_row_gap',
            [
                'label'      => esc_html__('Row Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section-2 .grt-section-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
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

        $this->add_control(
            'cause_box_bg',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2' => 'background-color: {{VALUE}};',
                ],
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

        $this->end_controls_section();

        // Style: Cause Image
        $this->start_controls_section(
            'style_cause_image',
            [
                'label' => esc_html__('Cause Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'cause_image_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cause_image_spacing',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'cause_image_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb img',
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'cause_image_css_filter',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb img',
            ]
        );

        $this->end_controls_section();

        // Style: Tag
        $this->start_controls_section(
            'style_tag',
            [
                'label' => esc_html__('Tag', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'tag_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb .tag' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tag_color_hover',
            [
                'label'     => esc_html__('Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb .tag:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'tag_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb .tag',
            ]
        );

        $this->add_control(
            'tag_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb .tag' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tag_bg_color_hover',
            [
                'label'     => esc_html__('Background Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb .tag:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tag_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb .tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'tag_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb .tag',
            ]
        );

        $this->add_responsive_control(
            'tag_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-thumb .tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style: Cause Title
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
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-content .title a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'cause_title_color_hover',
            [
                'label'     => esc_html__('Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-content .title a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'cause_title_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-content .title a',
            ]
        );

        $this->add_responsive_control(
            'cause_title_spacing',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-content .title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style: Cause Description
        $this->start_controls_section(
            'style_cause_description',
            [
                'label' => esc_html__('Cause Description', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'cause_description_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'cause_description_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-content p',
            ]
        );

        $this->add_responsive_control(
            'cause_description_spacing',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .grt-causes-content p' => 'margin-bottom: {{SIZE}}{{UNIT}};',
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

        $this->add_control(
            'progress_track_bg',
            [
                'label'     => esc_html__('Track Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .skill-feature .progress' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'progress_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .skill-feature .progress' => 'height: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-box-items-2 .skill-feature .progress' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'progress_track_margin',
            [
                'label'      => esc_html__('Track Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .skill-feature .progress' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'progress_bar_bg',
            [
                'label'     => esc_html__('Bar Fill Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .skill-feature .progress-bar' => 'background-color: {{VALUE}};',
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
                    '{{WRAPPER}} .grt-causes-box-items-2 .skill-feature .progress-bar' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'progress_value_color',
            [
                'label'     => esc_html__('Value Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .skill-feature .progress-value' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'progress_value_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .skill-feature .progress-value',
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
            'price_list_spacing',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .price-list' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'price_list_gap',
            [
                'label'      => esc_html__('Gap Between Amounts', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .price-list span' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style: Donate Button
        $this->start_controls_section(
            'style_donate_btn',
            [
                'label' => esc_html__('Donate Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'btn_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .donate-btn .text-default, {{WRAPPER}} .grt-causes-box-items-2 .donate-btn .text-hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_color_hover',
            [
                'label'     => esc_html__('Text Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .donate-btn:hover .text-default, {{WRAPPER}} .grt-causes-box-items-2 .donate-btn:hover .text-hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'btn_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .donate-btn',
            ]
        );

        $this->add_control(
            'btn_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .donate-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_bg_color_hover',
            [
                'label'     => esc_html__('Background Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .donate-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'btn_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .donate-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'btn_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items-2 .donate-btn',
            ]
        );

        $this->add_responsive_control(
            'btn_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .donate-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'btn_spacing',
            [
                'label'      => esc_html__('Spacing Above', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .donate-btn' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'btn_icon_size',
            [
                'label'      => esc_html__('Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .donate-btn i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'btn_icon_gap',
            [
                'label'      => esc_html__('Icon Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items-2 .donate-btn .text-default i, {{WRAPPER}} .grt-causes-box-items-2 .donate-btn .text-hover i' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style: Row
        $this->start_controls_section(
            'style_row',
            [
                'label' => esc_html__('Causes Row', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'row_gap',
            [
                'label'      => esc_html__('Gap Between Items', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-section-2 .row' => 'margin-left: calc(-{{SIZE}}{{UNIT}} / 2); margin-right: calc(-{{SIZE}}{{UNIT}} / 2);',
                    '{{WRAPPER}} .grt-causes-section-2 .row > [class*="col-"]' => 'padding-left: calc({{SIZE}}{{UNIT}} / 2); padding-right: calc({{SIZE}}{{UNIT}} / 2); margin-bottom: {{SIZE}}{{UNIT}};',
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
        $causes   = ! empty( $settings['causes'] ) ? $settings['causes'] : [];
        $subtitle_icon = ! empty( $settings['subtitle_icon']['value'] ) ? $settings['subtitle_icon'] : [ 'value' => 'fa-sharp fa-solid fa-heart', 'library' => 'solid' ];
        $delay_step = 0.2;
        $delay_start = 0.3;
        ?>
        <section class="grt-causes-section-2 fix section-padding section-bg-2">
            <div class="container">
                <div class="grt-section-title text-center">
                    <span class="grt-sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                        <?php \Elementor\Icons_Manager::render_icon( $subtitle_icon, [ 'aria-hidden' => 'true' ] ); ?>
                        <?php echo esc_html( $settings['subtitle'] ); ?>
                    </span>
                    <h2 class="split-title">
                        <?php echo wp_kses_post( $settings['title'] ); ?>
                    </h2>
                </div>
                <div class="row">
                    <?php foreach ( $causes as $index => $item ) :
                        $delay = $delay_start + ( $index * $delay_step );
                        $thumb_url = ! empty( $item['cause_image']['url'] ) ? $item['cause_image']['url'] : Utils::get_placeholder_image_src();
                        $progress = isset( $item['cause_progress'] ) ? max( 0, min( 100, (int) $item['cause_progress'] ) ) : 0;
                        $btn_text = ! empty( $item['cause_button_text'] ) ? $item['cause_button_text'] : esc_html__( 'Donate now', 'ftelements' );

                        $link_attr = ' href="#"';
                        if ( ! empty( $item['cause_link']['url'] ) ) {
                            $link_attr = ' href="' . esc_url( $item['cause_link']['url'] ) . '"';
                            if ( ! empty( $item['cause_link']['is_external'] ) ) {
                                $link_attr .= ' target="_blank"';
                            }
                            if ( ! empty( $item['cause_link']['nofollow'] ) ) {
                                $link_attr .= ' rel="nofollow"';
                            }
                        }

                        $tag_link_attr = ' href="#"';
                        if ( ! empty( $item['cause_tag_link']['url'] ) ) {
                            $tag_link_attr = ' href="' . esc_url( $item['cause_tag_link']['url'] ) . '"';
                            if ( ! empty( $item['cause_tag_link']['is_external'] ) ) {
                                $tag_link_attr .= ' target="_blank"';
                            }
                            if ( ! empty( $item['cause_tag_link']['nofollow'] ) ) {
                                $tag_link_attr .= ' rel="nofollow"';
                            }
                        }
                    ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr( $delay ); ?>s">
                        <div class="grt-causes-box-items-2">
                            <div class="grt-causes-thumb">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $item['cause_title'] ); ?>">
                                <?php if ( ! empty( $item['cause_tag'] ) ) : ?>
                                <a<?php echo $tag_link_attr; ?> class="tag"><?php echo esc_html( $item['cause_tag'] ); ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="grt-causes-content">
                                <h3 class="title">
                                    <a<?php echo $link_attr; ?>><?php echo esc_html( $item['cause_title'] ); ?></a>
                                </h3>
                                <?php if ( ! empty( $item['cause_description'] ) ) : ?>
                                <p><?php echo wp_kses_post( nl2br( $item['cause_description'] ) ); ?></p>
                                <?php endif; ?>
                                <div class="skill-feature">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: <?php echo esc_attr( $progress ); ?>%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                            <div class="progress-value"><span class="counter-number2"><?php echo (int) $progress; ?></span>%</div>
                                        </div>
                                    </div>
                                    <div class="price-list">
                                        <span><?php echo esc_html( $item['cause_goal'] ); ?></span>
                                        <span><?php echo esc_html( $item['cause_raised'] ); ?></span>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a<?php echo $link_attr; ?> class="donate-btn">
                                        <span class="text">
                                            <span class="text-default"><?php echo esc_html( $btn_text ); ?> <i class="fa-regular fa-arrow-up-right"></i></span>
                                            <span class="text-hover"><?php echo esc_html( $btn_text ); ?> <i class="fa-regular fa-arrow-up-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }
}