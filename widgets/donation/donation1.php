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

class FT_Donation_1_Widget extends \Elementor\Widget_Base
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
        return 'ft-donation-1';
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
        return esc_html__('FT Donation 1', 'ftelements');
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
                'default' => esc_html__('Start donating poor people', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => "Recent initiatives that\nimpacted lives",
                'description' => esc_html__('Use new lines for line breaks in the title.', 'ftelements'),
            ]
        );

        $this->end_controls_section();

        // Decorative shapes (optional)
        $this->start_controls_section(
            'content_shapes',
            [
                'label' => esc_html__('Decorative Shapes', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'shape_hand',
            [
                'label'   => esc_html__('Hand Shape', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'shape_line1',
            [
                'label'   => esc_html__('Line Shape 1', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'shape_line2',
            [
                'label'   => esc_html__('Line Shape 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

        // Causes repeater
        $repeater_causes = new Repeater();

        $repeater_causes->add_control(
            'cause_title',
            [
                'label'   => esc_html__('Title', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Medical Help', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater_causes->add_control(
            'cause_description',
            [
                'label'   => esc_html__('Description', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Sed ut perspiciatis unde', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater_causes->add_control(
            'cause_image',
            [
                'label'   => esc_html__('Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater_causes->add_control(
            'cause_link',
            [
                'label'       => esc_html__('Link', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        $repeater_causes->add_control(
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
                'fields'      => $repeater_causes->get_controls(),
                'default'     => [
                    [
                        'cause_title'       => esc_html__('Medical Help', 'ftelements'),
                        'cause_description' => esc_html__('Sed ut perspiciatis unde', 'ftelements'),
                    ],
                    [
                        'cause_title'       => esc_html__('Changing futures', 'ftelements'),
                        'cause_description' => esc_html__('Sed ut perspiciatis unde', 'ftelements'),
                    ],
                    [
                        'cause_title'       => esc_html__('Supportive programs', 'ftelements'),
                        'cause_description' => esc_html__('Sed ut perspiciatis unde', 'ftelements'),
                    ],
                    [
                        'cause_title'       => esc_html__('Empowering youth', 'ftelements'),
                        'cause_description' => esc_html__('Sed ut perspiciatis unde', 'ftelements'),
                    ],
                    [
                        'cause_title'       => esc_html__('Need living support', 'ftelements'),
                        'cause_description' => esc_html__('Sed ut perspiciatis unde', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ cause_title }}}',
            ]
        );

        $this->end_controls_section();

        // Counters
        $repeater_counters = new Repeater();

        $repeater_counters->add_control(
            'counter_number',
            [
                'label'   => esc_html__('Number', 'ftelements'),
                'type'    => Controls_Manager::NUMBER,
                'default' => 22,
            ]
        );

        $repeater_counters->add_control(
            'counter_label',
            [
                'label'   => esc_html__('Label', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Programs initiated', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->start_controls_section(
            'content_counters',
            [
                'label' => esc_html__('Counters', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'counter_bg',
            [
                'label'   => esc_html__('Counter Background Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'counters',
            [
                'label'       => esc_html__('Counter Items', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater_counters->get_controls(),
                'default'     => [
                    [
                        'counter_number' => 22,
                        'counter_label'  => esc_html__('Programs initiated', 'ftelements'),
                    ],
                    [
                        'counter_number' => 53,
                        'counter_label'  => esc_html__('Children supported', 'ftelements'),
                    ],
                    [
                        'counter_number' => 9,
                        'counter_label'  => esc_html__('Years in operation', 'ftelements'),
                    ],
                    [
                        'counter_number' => 88,
                        'counter_label'  => esc_html__('Projects accomplished', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ counter_label }}}',
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
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-causes-section',
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
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; display: inline-block;',
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
                    '{{WRAPPER}} .grt-section-title' => 'text-align: {{VALUE}};',
                ],
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

        // Style: Decorative shapes
        $this->start_controls_section(
            'style_shapes',
            [
                'label' => esc_html__('Decorative Shapes', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'shape_hand_width',
            [
                'label'      => esc_html__('Hand Shape Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .hand-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'shape_hand_opacity',
            [
                'label'     => esc_html__('Hand Shape Opacity', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hand-shape img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape_line1_width',
            [
                'label'      => esc_html__('Line 1 Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .line-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'shape_line1_opacity',
            [
                'label'     => esc_html__('Line 1 Opacity', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .line-shape img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape_line2_width',
            [
                'label'      => esc_html__('Line 2 Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .line-shape2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'shape_line2_opacity',
            [
                'label'     => esc_html__('Line 2 Opacity', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .line-shape2 img' => 'opacity: {{SIZE}};',
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

        $this->add_control(
            'cause_box_bg',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'cause_box_background',
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-causes-box-items',
            ]
        );

        $this->add_responsive_control(
            'cause_box_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-box-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'cause_box_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items',
            ]
        );

        $this->add_responsive_control(
            'cause_box_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style: Cause title
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
                    '{{WRAPPER}} .grt-causes-box-items .grt-content .title a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'cause_title_color_hover',
            [
                'label'     => esc_html__('Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items .grt-content .title a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'cause_title_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items .grt-content .title a',
            ]
        );

        $this->add_responsive_control(
            'cause_title_spacing',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items .grt-content .title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style: Cause description
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
                    '{{WRAPPER}} .grt-causes-box-items .grt-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'cause_description_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items .grt-content p',
            ]
        );

        $this->add_responsive_control(
            'cause_description_spacing',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items .grt-content p' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style: Cause image
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
                    '{{WRAPPER}} .grt-causes-box-items .grt-thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-box-items .grt-thumb' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'cause_image_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items .grt-thumb img',
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'cause_image_css_filter',
                'selector' => '{{WRAPPER}} .grt-causes-box-items .grt-thumb img',
            ]
        );

        $this->end_controls_section();

        // Style: Donate button
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
                    '{{WRAPPER}} .grt-causes-box-items .donate-btn .text-default, {{WRAPPER}} .grt-causes-box-items .donate-btn .text-hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_color_hover',
            [
                'label'     => esc_html__('Text Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items .donate-btn:hover .text-default, {{WRAPPER}} .grt-causes-box-items .donate-btn:hover .text-hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'btn_typography',
                'selector' => '{{WRAPPER}} .grt-causes-box-items .donate-btn',
            ]
        );

        $this->add_control(
            'btn_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items .donate-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_bg_color_hover',
            [
                'label'     => esc_html__('Background Color Hover', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-causes-box-items .donate-btn:hover' => 'background-color: {{VALUE}};',
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
                    '{{WRAPPER}} .grt-causes-box-items .donate-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'btn_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-causes-box-items .donate-btn',
            ]
        );

        $this->add_responsive_control(
            'btn_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-causes-box-items .donate-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-box-items .donate-btn' => 'margin-top: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-box-items .donate-btn i' => 'font-size: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-causes-box-items .donate-btn .text-default i, {{WRAPPER}} .grt-causes-box-items .donate-btn .text-hover i' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style: Slider
        $this->start_controls_section(
            'style_slider',
            [
                'label' => esc_html__('Causes Slider', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'slider_spacing_top',
            [
                'label'      => esc_html__('Spacing Top', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .causes-slider' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'slider_spacing_bottom',
            [
                'label'      => esc_html__('Spacing Bottom', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .causes-slider' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style: Counter wrapper
        $this->start_controls_section(
            'style_counter_wrapper',
            [
                'label' => esc_html__('Counter Wrapper', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'counter_wrapper_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-counter-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'counter_wrapper_gap',
            [
                'label'      => esc_html__('Gap Between Items', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-counter-wrapper' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'counter_wrapper_alignment',
            [
                'label'     => esc_html__('Alignment', 'ftelements'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'flex-start' => [
                        'title' => esc_html__('Left', 'ftelements'),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center'     => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'flex-end'   => [
                        'title' => esc_html__('Right', 'ftelements'),
                        'icon'  => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-wrapper' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style: Counter number
        $this->start_controls_section(
            'style_counter_number',
            [
                'label' => esc_html__('Counter Number', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'counter_number_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-items .counter-bg .title .count' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'counter_number_typography',
                'selector' => '{{WRAPPER}} .grt-counter-items .counter-bg .title .count',
            ]
        );

        $this->add_responsive_control(
            'counter_number_spacing',
            [
                'label'      => esc_html__('Spacing Below', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-counter-items .counter-bg' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style: Counter label
        $this->start_controls_section(
            'style_counter_label',
            [
                'label' => esc_html__('Counter Label', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'counter_label_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-items p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'counter_label_typography',
                'selector' => '{{WRAPPER}} .grt-counter-items p',
            ]
        );

        $this->add_responsive_control(
            'counter_label_spacing',
            [
                'label'      => esc_html__('Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-counter-items p' => 'margin: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style: Counter background image
        $this->start_controls_section(
            'style_counter_bg',
            [
                'label' => esc_html__('Counter Background Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'counter_bg_size',
            [
                'label'      => esc_html__('Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .grt-counter-items .counter-bg img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_control(
            'counter_bg_opacity',
            [
                'label'     => esc_html__('Opacity', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-items .counter-bg img' => 'opacity: {{SIZE}};',
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
        $counters = $settings['counters'] ? $settings['counters'] : [];
        $subtitle_icon = $settings['subtitle_icon'];
        $counter_bg_url = ! empty( $settings['counter_bg']['url'] ) ? $settings['counter_bg']['url'] : '';
        ?>
        <section class="grt-causes-section section-padding section-bg">
            <?php if ( ! empty( $settings['shape_hand']['url'] ) ) : ?>
            <div class="hand-shape">
                <img src="<?php echo esc_url( $settings['shape_hand']['url'] ); ?>" alt="<?php echo esc_attr( $settings['subtitle'] ); ?>">
            </div>
            <?php endif; ?>
            <?php if ( ! empty( $settings['shape_line1']['url'] ) ) : ?>
            <div class="line-shape">
                <img src="<?php echo esc_url( $settings['shape_line1']['url'] ); ?>" alt="">
            </div>
            <?php endif; ?>
            <?php if ( ! empty( $settings['shape_line2']['url'] ) ) : ?>
            <div class="line-shape2">
                <img src="<?php echo esc_url( $settings['shape_line2']['url'] ); ?>" alt="">
            </div>
            <?php endif; ?>
            <div class="container">
                <div class="grt-section-title text-center">
                    <span class="grt-sub-title tz-sub-tilte tz-sub-anim tx-subTitle color-yellow">
                        <?php if ( ! empty( $subtitle_icon['value'] ) ) { \Elementor\Icons_Manager::render_icon( $subtitle_icon, [ 'aria-hidden' => 'true' ] ); ?> <?php } ?>
                        <?php echo esc_html( $settings['subtitle'] ); ?>
                    </span>
                    <h2 class="split-title text-white">
                        <?php
                        $title = isset( $settings['title'] ) ? $settings['title'] : '';
                        $title = preg_replace( '/<br\s*\/?>/i', "\n", $title );
                        $title = nl2br( esc_html( $title ) );
                        echo wp_kses_post( $title );
                        ?>
                    </h2>
                </div>
            </div>
            <div class="swiper causes-slider">
                <div class="swiper-wrapper">
                    <?php foreach ( $causes as $index => $item ) :
                        $link_url = ! empty( $item['cause_link']['url'] ) ? $item['cause_link']['url'] : '#';
                        $link_attr = ' href="' . esc_url( $link_url ) . '"';
                        if ( ! empty( $item['cause_link']['is_external'] ) ) {
                            $link_attr .= ' target="_blank"';
                        }
                        if ( ! empty( $item['cause_link']['nofollow'] ) ) {
                            $link_attr .= ' rel="nofollow"';
                        }
                        $thumb_url = ! empty( $item['cause_image']['url'] ) ? $item['cause_image']['url'] : Utils::get_placeholder_image_src();
                        $btn_text = ! empty( $item['cause_button_text'] ) ? $item['cause_button_text'] : esc_html__( 'Donate now', 'ftelements' );
                    ?>
                    <div class="swiper-slide">
                        <div class="grt-causes-box-items">
                            <div class="grt-content">
                                <h3 class="title">
                                    <a<?php echo $link_attr; ?>><?php echo esc_html( $item['cause_title'] ); ?></a>
                                </h3>
                                <?php if ( ! empty( $item['cause_description'] ) ) : ?>
                                <p><?php echo esc_html( $item['cause_description'] ); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="grt-thumb">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $item['cause_title'] ); ?>">
                            </div>
                            <a<?php echo $link_attr; ?> class="donate-btn">
                                <span class="text">
                                    <span class="text-default"><?php echo esc_html( $btn_text ); ?> <i class="fa-regular fa-arrow-up-right"></i></span>
                                    <span class="text-hover"><?php echo esc_html( $btn_text ); ?> <i class="fa-regular fa-arrow-up-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php if ( ! empty( $counters ) ) : ?>
            <div class="container">
                <div class="grt-counter-wrapper section-padding pb-0">
                    <?php foreach ( $counters as $index => $counter ) :
                        $delay = ( $index + 1 ) * 0.2;
                    ?>
                    <div class="grt-counter-items wow fadeInUp" data-wow-delay="<?php echo esc_attr( $delay ); ?>s">
                        <div class="counter-bg">
                            <?php if ( $counter_bg_url ) : ?>
                            <img src="<?php echo esc_url( $counter_bg_url ); ?>" alt="">
                            <?php endif; ?>
                            <h2 class="title"><span class="count"><?php echo esc_html( (string) $counter['counter_number'] ); ?></span></h2>
                        </div>
                        <?php if ( ! empty( $counter['counter_label'] ) ) : ?>
                        <p><?php echo esc_html( $counter['counter_label'] ); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </section>
        <script>
        (function() {
            var causesSliderConfig = {
                spaceBetween: 30,
                speed: 1300,
                loop: true,
                centeredSlides: true,
                autoplay: { delay: 2000, disableOnInteraction: false },
                breakpoints: {
                    1699: { slidesPerView: 4 },
                    1399: { slidesPerView: 3.5 },
                    1199: { slidesPerView: 3.1 },
                    991: { slidesPerView: 3 },
                    767: { slidesPerView: 2 },
                    575: { slidesPerView: 1.5 },
                    0: { slidesPerView: 1.2 }
                }
            };
            function initCausesSlider(scope) {
                var root = scope && scope.length ? scope[0] : document;
                var el = root.querySelector ? root.querySelector('.causes-slider') : (scope && scope.find ? scope.find('.causes-slider')[0] : null);
                if (!el || typeof Swiper === 'undefined') return;
                if (el.swiper) { el.swiper.destroy(true, true); el.swiper = null; }
                el.swiper = new Swiper(el, causesSliderConfig);
            }
            function runInWidgets() {
                var widgets = document.querySelectorAll('.elementor-widget-ft-donation-1');
                widgets.forEach(function(w) {
                    var slider = w.querySelector('.causes-slider');
                    if (slider && !slider.swiper) initCausesSlider(w);
                });
            }
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', runInWidgets);
            } else {
                runInWidgets();
            }
            if (typeof elementorFrontend !== 'undefined' && elementorFrontend.hooks) {
                elementorFrontend.hooks.addAction('frontend/element_ready/ft-donation-1.default', function($scope) {
                    var el = $scope[0] || $scope;
                    initCausesSlider(el);
                });
            }
        })();
        </script>








<?php
    }
} ?>