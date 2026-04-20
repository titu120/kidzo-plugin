<?php

use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Typography;

defined('ABSPATH') || die();

class FT_Feature4_Widget extends \Elementor\Widget_Base
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
        return 'ft-feature4';
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
        return esc_html__('FT Feature 4', 'ftelements');
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
            'feature4_content',
            [
                'label' => esc_html__('Content', 'kidzu'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__('Sub Title', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our Values', 'kidzu'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('The Best Playschool For Your Kids', 'kidzu'),
            ]
        );

        $this->add_control(
            'img_top_line',
            [
                'label' => esc_html__('Decor: Top Line', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/top-line.png',
                ],
            ]
        );

        $this->add_control(
            'img_bottom_line',
            [
                'label' => esc_html__('Decor: Bottom Line', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/bottom-line.png',
                ],
            ]
        );

        $this->add_control(
            'img_shape',
            [
                'label' => esc_html__('Decor: Shape', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape1.png',
                ],
            ]
        );

        $this->add_control(
            'img_love',
            [
                'label' => esc_html__('Decor: Love', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/love.png',
                ],
            ]
        );

        $this->add_control(
            'img_plane',
            [
                'label' => esc_html__('Decor: Plane', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/plane.png',
                ],
            ]
        );

        $this->add_control(
            'img_main',
            [
                'label' => esc_html__('Center: Main Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/girl-graduation.png',
                ],
            ]
        );

        $this->add_control(
            'img_line1',
            [
                'label' => esc_html__('Center: Line 1', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/line1.png',
                ],
            ]
        );

        $this->add_control(
            'img_line2',
            [
                'label' => esc_html__('Center: Line 2', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/line-2.png',
                ],
            ]
        );

        $this->add_control(
            'img_check',
            [
                'label' => esc_html__('List: Default Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/icon/check3.svg',
                ],
            ]
        );

        $repeater_left = new Repeater();

        $repeater_left->add_control(
            'item_title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('List item title', 'kidzu'),
                'description' => esc_html__('Use &lt;br&gt; for line breaks.', 'kidzu'),
            ]
        );

        $repeater_left->add_control(
            'item_icon',
            [
                'label' => esc_html__('Icon (optional)', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
            ]
        );

        $repeater_left->add_control(
            'is_active',
            [
                'label' => esc_html__('Highlight', 'kidzu'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'kidzu'),
                'label_off' => esc_html__('No', 'kidzu'),
                'return_value' => 'yes',
                'default' => '',
            ]
        );

        $this->add_control(
            'left_items',
            [
                'label' => esc_html__('Left Column', 'kidzu'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater_left->get_controls(),
                'default' => [
                    [
                        'item_title' => esc_html__('Teacher Training And <br> Progress', 'kidzu'),
                        'is_active' => '',
                    ],
                    [
                        'item_title' => esc_html__('Advanced Placement <br> Courses', 'kidzu'),
                        'is_active' => 'yes',
                    ],
                    [
                        'item_title' => esc_html__('best Nanny Selection <br> in 24/7 ', 'kidzu'),
                        'is_active' => '',
                    ],
                ],
                'title_field' => '{{{ item_title }}}',
            ]
        );

        $repeater_right = new Repeater();

        $repeater_right->add_control(
            'item_title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('List item title', 'kidzu'),
                'description' => esc_html__('Use &lt;br&gt; for line breaks.', 'kidzu'),
            ]
        );

        $repeater_right->add_control(
            'item_icon',
            [
                'label' => esc_html__('Icon (optional)', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
            ]
        );

        $repeater_right->add_control(
            'is_active',
            [
                'label' => esc_html__('Highlight', 'kidzu'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'kidzu'),
                'label_off' => esc_html__('No', 'kidzu'),
                'return_value' => 'yes',
                'default' => '',
            ]
        );

        $this->add_control(
            'right_items',
            [
                'label' => esc_html__('Right Column', 'kidzu'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater_right->get_controls(),
                'default' => [
                    [
                        'item_title' => esc_html__('Child-Friendly Learning <br> Environment ', 'kidzu'),
                        'is_active' => '',
                    ],
                    [
                        'item_title' => esc_html__('Self-Contained Gifted <br> Programs​', 'kidzu'),
                        'is_active' => 'yes',
                    ],
                    [
                        'item_title' => esc_html__('Free nanny on first <br> trial day ', 'kidzu'),
                        'is_active' => '',
                    ],
                ],
                'title_field' => '{{{ item_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature4_style_section',
            [
                'label' => esc_html__('Section', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .values-section-2',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'section_border',
                'selector' => '{{WRAPPER}} .values-section-2',
            ]
        );

        $this->add_responsive_control(
            'section_border_radius',
            [
                'label' => esc_html__('Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_min_height',
            [
                'label' => esc_html__('Min Height', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 2000],
                    'vh' => ['min' => 0, 'max' => 100],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_overflow',
            [
                'label' => esc_html__('Overflow', 'kidzu'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'inherit' => esc_html__('Default', 'kidzu'),
                    'visible' => esc_html__('Visible', 'kidzu'),
                    'hidden' => esc_html__('Hidden', 'kidzu'),
                    'clip' => esc_html__('Clip', 'kidzu'),
                    'scroll' => esc_html__('Scroll', 'kidzu'),
                    'auto' => esc_html__('Auto', 'kidzu'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2' => 'overflow: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature4_style_heading_area',
            [
                'label' => esc_html__('Heading Area', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'heading_area_align',
            [
                'label' => esc_html__('Alignment', 'kidzu'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'kidzu'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'kidzu'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'kidzu'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .section-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_area_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_area_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_area_max_width',
            [
                'label' => esc_html__('Max Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1400],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .section-title' => 'max-width: {{SIZE}}{{UNIT}}; margin-left: auto; margin-right: auto;',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature4_style_sub_title',
            [
                'label' => esc_html__('Sub Title', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'sub_title_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'sub_title_typography',
                'selector' => '{{WRAPPER}} .values-section-2 .section-title .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'sub_title_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'sub_title_transform',
            [
                'label' => esc_html__('Transform', 'kidzu'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'inherit' => esc_html__('Default', 'kidzu'),
                    'none' => esc_html__('None', 'kidzu'),
                    'uppercase' => esc_html__('Uppercase', 'kidzu'),
                    'lowercase' => esc_html__('Lowercase', 'kidzu'),
                    'capitalize' => esc_html__('Capitalize', 'kidzu'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .section-title .sec-sub' => 'text-transform: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sub_title_letter_spacing',
            [
                'label' => esc_html__('Letter Spacing', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => -5, 'max' => 50],
                    'em' => ['min' => -0.2, 'max' => 1],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .section-title .sec-sub' => 'letter-spacing: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature4_style_main_title',
            [
                'label' => esc_html__('Main Title', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'main_title_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .section-title .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'main_title_typography',
                'selector' => '{{WRAPPER}} .values-section-2 .section-title .sec_title',
            ]
        );

        $this->add_responsive_control(
            'main_title_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .section-title .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature4_style_decor',
            [
                'label' => esc_html__('Decorations', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'decor_top_line_opacity',
            [
                'label' => esc_html__('Top Line Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .top-line' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'decor_top_line_width',
            [
                'label' => esc_html__('Top Line Max Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 2000],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .top-line img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'decor_bottom_line_opacity',
            [
                'label' => esc_html__('Bottom Line Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .bottom-line' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'decor_shape_opacity',
            [
                'label' => esc_html__('Shape Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .shape' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'decor_love_opacity',
            [
                'label' => esc_html__('Love Shape Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .love-shape' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'decor_plane_opacity',
            [
                'label' => esc_html__('Plane Shape Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .plane-shape' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'decor_shapes_max_width',
            [
                'label' => esc_html__('Floating Shapes Max Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .shape img, {{WRAPPER}} .values-section-2 .love-shape img, {{WRAPPER}} .values-section-2 .plane-shape img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature4_style_thumb',
            [
                'label' => esc_html__('Center Image', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'thumb_main_max_width',
            [
                'label' => esc_html__('Main Image Max Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1200],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .thumb > img' => 'max-width: {{SIZE}}{{UNIT}}; width: 100%; height: auto;',
                ],
            ]
        );

        $this->add_responsive_control(
            'thumb_border_radius',
            [
                'label' => esc_html__('Main Image Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .thumb > img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'thumb_main_border',
                'selector' => '{{WRAPPER}} .values-section-2 .thumb > img',
            ]
        );

        $this->add_responsive_control(
            'thumb_padding',
            [
                'label' => esc_html__('Thumb Area Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .thumb' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'thumb_line1_opacity',
            [
                'label' => esc_html__('Line 1 Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .thumb .line-1' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'thumb_line2_opacity',
            [
                'label' => esc_html__('Line 2 Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .thumb .line-2' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature4_style_list',
            [
                'label' => esc_html__('Value Lists', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'list_gap',
            [
                'label' => esc_html__('Space Between Items', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                    'em' => ['min' => 0, 'max' => 5],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list > li + li' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_padding',
            [
                'label' => esc_html__('List Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_margin',
            [
                'label' => esc_html__('List Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature4_style_list_item',
            [
                'label' => esc_html__('List Item', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'list_item_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .values-section-2 .values-list > li',
            ]
        );

        $this->add_responsive_control(
            'list_item_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list > li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'list_item_border',
                'selector' => '{{WRAPPER}} .values-section-2 .values-list > li',
            ]
        );

        $this->add_responsive_control(
            'list_item_border_radius',
            [
                'label' => esc_html__('Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list > li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_item_gap',
            [
                'label' => esc_html__('Icon & Text Gap', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                    'em' => ['min' => 0, 'max' => 5],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list > li' => 'display: flex; align-items: center; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature4_style_list_item_active',
            [
                'label' => esc_html__('List Item (Highlight)', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'list_item_active_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .values-section-2 .values-list > li.active',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'list_item_active_border',
                'selector' => '{{WRAPPER}} .values-section-2 .values-list > li.active',
            ]
        );

        $this->add_responsive_control(
            'list_item_active_border_radius',
            [
                'label' => esc_html__('Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list > li.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature4_style_list_icon',
            [
                'label' => esc_html__('List Icon', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'list_icon_width',
            [
                'label' => esc_html__('Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 200],
                    'em' => ['min' => 0, 'max' => 10],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_icon_height',
            [
                'label' => esc_html__('Height', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 200],
                    'em' => ['min' => 0, 'max' => 10],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list .icon img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_icon_opacity',
            [
                'label' => esc_html__('Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list .icon img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_icon_margin',
            [
                'label' => esc_html__('Icon Box Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature4_style_list_title',
            [
                'label' => esc_html__('List Title', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'list_title_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'list_title_typography',
                'selector' => '{{WRAPPER}} .values-section-2 .values-list .title',
            ]
        );

        $this->add_control(
            'list_title_active_color',
            [
                'label' => esc_html__('Color (Highlight Row)', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list > li.active .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_title_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .values-list .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature4_style_container',
            [
                'label' => esc_html__('Inner Container', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'inner_container_max_width',
            [
                'label' => esc_html__('Content Max Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1920],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .container' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'inner_container_padding',
            [
                'label' => esc_html__('Horizontal Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .values-section-2 .container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    /**
     * @param array<string, mixed> $item
     * @param string $fallback
     */
    private function get_list_icon_url(array $item, $fallback)
    {
        if (!empty($item['item_icon']['url'])) {
            return $item['item_icon']['url'];
        }
        return $fallback;
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

        $img_top_line = !empty($settings['img_top_line']['url']) ? $settings['img_top_line']['url'] : $theme_uri . '/assets/img/home-2/top-line.png';
        $img_bottom_line = !empty($settings['img_bottom_line']['url']) ? $settings['img_bottom_line']['url'] : $theme_uri . '/assets/img/home-2/bottom-line.png';
        $img_shape = !empty($settings['img_shape']['url']) ? $settings['img_shape']['url'] : $theme_uri . '/assets/img/home-2/shape1.png';
        $img_love = !empty($settings['img_love']['url']) ? $settings['img_love']['url'] : $theme_uri . '/assets/img/home-2/love.png';
        $img_plane = !empty($settings['img_plane']['url']) ? $settings['img_plane']['url'] : $theme_uri . '/assets/img/home-2/plane.png';
        $img_main = !empty($settings['img_main']['url']) ? $settings['img_main']['url'] : $theme_uri . '/assets/img/home-2/girl-graduation.png';
        $img_line1 = !empty($settings['img_line1']['url']) ? $settings['img_line1']['url'] : $theme_uri . '/assets/img/home-2/line1.png';
        $img_line2 = !empty($settings['img_line2']['url']) ? $settings['img_line2']['url'] : $theme_uri . '/assets/img/home-2/line-2.png';
        $img_check = !empty($settings['img_check']['url']) ? $settings['img_check']['url'] : $theme_uri . '/assets/img/home-2/icon/check3.svg';

        $left_items = !empty($settings['left_items']) && is_array($settings['left_items']) ? $settings['left_items'] : [];
        $right_items = !empty($settings['right_items']) && is_array($settings['right_items']) ? $settings['right_items'] : [];

        ?>


        <section class="values-section-2 section-padding pt-0">
            <div class="top-line">
                <img src="<?php echo esc_url($img_top_line); ?>" alt="">
            </div>
            <div class="bottom-line">
                <img src="<?php echo esc_url($img_bottom_line); ?>" alt="">
            </div>
            <div class="shape bz-gsap-animate-circle">
                <img src="<?php echo esc_url($img_shape); ?>" alt="">
            </div>
            <div class="love-shape bz-gsap-animate-circle">
                <img src="<?php echo esc_url($img_love); ?>" alt="">
            </div>
            <div class="plane-shape bz-gsap-animate-circle">
                <img src="<?php echo esc_url($img_plane); ?>" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['sub_title']); ?></span>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                        <?php echo esc_html($settings['title']); ?>
                    </h2>
                </div>
                <div class="values-wrapper-2">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <ul class="values-list wow fadeInUp" data-wow-delay=".3s">
                                <?php foreach ($left_items as $item) : ?>
                                <li<?php echo (!empty($item['is_active']) && $item['is_active'] === 'yes') ? ' class="active"' : ''; ?>>
                                    <div class="icon">
                                        <img src="<?php echo esc_url($this->get_list_icon_url($item, $img_check)); ?>" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="title"><?php echo wp_kses_post($item['item_title']); ?></h3>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-xl-6 order-2 order-xl-1 wow fadeInUp" data-wow-delay=".5s">
                            <div class="thumb">
                                <img src="<?php echo esc_url($img_main); ?>" alt="">
                                <div class="line-1">
                                    <img src="<?php echo esc_url($img_line1); ?>" alt="">
                                </div>
                                <div class="line-2">
                                    <img src="<?php echo esc_url($img_line2); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 order-1 order-xl-2">
                            <ul class="values-list wow fadeInUp" data-wow-delay=".7s">
                                <?php foreach ($right_items as $item) : ?>
                                <li<?php echo (!empty($item['is_active']) && $item['is_active'] === 'yes') ? ' class="active"' : ''; ?>>
                                    <div class="icon">
                                        <img src="<?php echo esc_url($this->get_list_icon_url($item, $img_check)); ?>" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="title"><?php echo wp_kses_post($item['item_title']); ?></h3>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>








<?php
    }
}
