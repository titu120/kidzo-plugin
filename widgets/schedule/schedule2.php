<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Text_Shadow;

defined('ABSPATH') || die();

class FT_Schedule2_Widget extends \Elementor\Widget_Base
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
        return 'ft-schedule2';
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
        return esc_html__('FT Schedule 2', 'ftelements');
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
            'content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_subtitle',
            [
                'label'       => esc_html__('Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Daily Schedule', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Our Daily Schedule', 'ftelements'),
                'label_block' => true,
            ]
        );

        $item_repeater = new Repeater();

        $item_repeater->add_control(
            'time',
            [
                'label'       => esc_html__('Time', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('7:00 - 8:00', 'ftelements'),
                'label_block' => true,
            ]
        );

        $item_repeater->add_control(
            'description',
            [
                'label'   => esc_html__('Description', 'ftelements'),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
            ]
        );

        $item_repeater->add_control(
            'bg_shape_class',
            [
                'label'   => esc_html__('Background Shape Variant', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    ''     => esc_html__('Default', 'ftelements'),
                    'bg-2' => esc_html__('Variant 2', 'ftelements'),
                    'bg-3' => esc_html__('Variant 3', 'ftelements'),
                    'bg-4' => esc_html__('Variant 4', 'ftelements'),
                ],
            ]
        );

        $item_repeater->add_control(
            'item_icon_override',
            [
                'label'       => esc_html__('Item Icon', 'ftelements'),
                'type'        => Controls_Manager::MEDIA,
                'description' => esc_html__('Leave empty to use the default item icon below.', 'ftelements'),
            ]
        );

        $item_repeater->add_control(
            'item_shape_override',
            [
                'label'       => esc_html__('Card Shape Image', 'ftelements'),
                'type'        => Controls_Manager::MEDIA,
                'description' => esc_html__('Leave empty to use the default card shape image below.', 'ftelements'),
            ]
        );

        $item_repeater->add_control(
            'animation_delay',
            [
                'label'       => esc_html__('Animation Delay', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => '.2s',
                'description' => esc_html__('Example: .2s, .4s, .6s', 'ftelements'),
            ]
        );

        $tab_repeater = new Repeater();

        $tab_repeater->add_control(
            'tab_title',
            [
                'label'       => esc_html__('Tab Title', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Play Group', 'ftelements'),
                'label_block' => true,
            ]
        );

        $tab_repeater->add_control(
            'schedule_items',
            [
                'label'       => esc_html__('Schedule Items', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $item_repeater->get_controls(),
                'title_field' => '{{{ time }}}',
                'default'     => [
                    [
                        'time'            => esc_html__('7:00 - 8:00', 'ftelements'),
                        'description'     => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
                        'bg_shape_class'  => '',
                        'animation_delay' => '.2s',
                    ],
                    [
                        'time'            => esc_html__('8:00 - 8:30', 'ftelements'),
                        'description'     => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
                        'bg_shape_class'  => 'bg-2',
                        'animation_delay' => '.4s',
                    ],
                    [
                        'time'            => esc_html__('8:30 - 10:30', 'ftelements'),
                        'description'     => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
                        'bg_shape_class'  => 'bg-3',
                        'animation_delay' => '.6s',
                    ],
                    [
                        'time'            => esc_html__('10:30 - 12:00', 'ftelements'),
                        'description'     => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
                        'bg_shape_class'  => 'bg-4',
                        'animation_delay' => '.8s',
                    ],
                ],
            ]
        );

        $default_schedule_items = [
            [
                'time'            => esc_html__('7:00 - 8:00', 'ftelements'),
                'description'     => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
                'bg_shape_class'  => '',
                'animation_delay' => '.2s',
            ],
            [
                'time'            => esc_html__('8:00 - 8:30', 'ftelements'),
                'description'     => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
                'bg_shape_class'  => 'bg-2',
                'animation_delay' => '.4s',
            ],
            [
                'time'            => esc_html__('8:30 - 10:30', 'ftelements'),
                'description'     => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
                'bg_shape_class'  => 'bg-3',
                'animation_delay' => '.6s',
            ],
            [
                'time'            => esc_html__('10:30 - 12:00', 'ftelements'),
                'description'     => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
                'bg_shape_class'  => 'bg-4',
                'animation_delay' => '.8s',
            ],
        ];

        $this->add_control(
            'schedule_tabs',
            [
                'label'       => esc_html__('Schedule Tabs', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $tab_repeater->get_controls(),
                'title_field' => '{{{ tab_title }}}',
                'default'     => [
                    [
                        'tab_title'       => esc_html__('Play Group', 'ftelements'),
                        'schedule_items'  => $default_schedule_items,
                    ],
                    [
                        'tab_title'       => esc_html__('Nursery Group', 'ftelements'),
                        'schedule_items'  => $default_schedule_items,
                    ],
                    [
                        'tab_title'       => esc_html__('Kindergarten (KG)', 'ftelements'),
                        'schedule_items'  => $default_schedule_items,
                    ],
                ],
            ]
        );

        $this->add_control(
            'item_icon',
            [
                'label'       => esc_html__('Default Item Icon', 'ftelements'),
                'type'        => Controls_Manager::MEDIA,
                'default'     => [
                    'url' => 'assets/img/home-1/pocket-watch.png',
                ],
                'description' => esc_html__('Used when a row has no custom item icon.', 'ftelements'),
            ]
        );

        $this->add_control(
            'item_shape_image',
            [
                'label'       => esc_html__('Default Card Shape Image', 'ftelements'),
                'type'        => Controls_Manager::MEDIA,
                'description' => esc_html__('Optional. Shown inside each card background when set, unless overridden per row.', 'ftelements'),
            ]
        );

        $this->add_control(
            'section_shape_image',
            [
                'label'   => esc_html__('Section Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-1/vec5.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_wrapper_style',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_wrapper_background',
                'selector' => '{{WRAPPER}} .schedule-section',
            ]
        );

        $this->add_responsive_control(
            'section_wrapper_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_wrapper_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_min_height',
            [
                'label'      => esc_html__('Min Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1500,
                    ],
                    'vh' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'section_overflow',
            [
                'label'     => esc_html__('Overflow', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''        => esc_html__('Default', 'ftelements'),
                    'hidden'  => esc_html__('Hidden', 'ftelements'),
                    'visible' => esc_html__('Visible', 'ftelements'),
                    'auto'    => esc_html__('Auto', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section' => 'overflow: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'section_position',
            [
                'label'     => esc_html__('Position', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''         => esc_html__('Default', 'ftelements'),
                    'relative' => esc_html__('Relative', 'ftelements'),
                    'static'   => esc_html__('Static', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section' => 'position: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'section_z_index',
            [
                'label'     => esc_html__('Z-Index', 'ftelements'),
                'type'      => Controls_Manager::NUMBER,
                'min'       => -99999,
                'max'       => 999999,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section' => 'z-index: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'section_wrapper_border',
                'selector' => '{{WRAPPER}} .schedule-section',
            ]
        );

        $this->add_responsive_control(
            'section_wrapper_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_heading_style',
            [
                'label' => esc_html__('Section Heading', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'heading_title_area_display',
            [
                'label'     => esc_html__('Title Area Display', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''       => esc_html__('Default', 'ftelements'),
                    'block'  => esc_html__('Block', 'ftelements'),
                    'flex'   => esc_html__('Flex', 'ftelements'),
                    'grid'   => esc_html__('Grid', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .section-title-area' => 'display: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_title_area_padding',
            [
                'label'      => esc_html__('Title Area Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .section-title-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_title_area_margin',
            [
                'label'      => esc_html__('Title Area Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .section-title-area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_title_area_align_items',
            [
                'label'     => esc_html__('Title Row Vertical Align', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''            => esc_html__('Default', 'ftelements'),
                    'flex-start'  => esc_html__('Start', 'ftelements'),
                    'center'      => esc_html__('Center', 'ftelements'),
                    'flex-end'    => esc_html__('End', 'ftelements'),
                    'stretch'     => esc_html__('Stretch', 'ftelements'),
                    'baseline'    => esc_html__('Baseline', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .section-title-area' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_title_area_justify',
            [
                'label'     => esc_html__('Title Row Horizontal Align', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''              => esc_html__('Default', 'ftelements'),
                    'flex-start'    => esc_html__('Start', 'ftelements'),
                    'center'        => esc_html__('Center', 'ftelements'),
                    'flex-end'      => esc_html__('End', 'ftelements'),
                    'space-between' => esc_html__('Space Between', 'ftelements'),
                    'space-around'  => esc_html__('Space Around', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .section-title-area' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_title_area_gap',
            [
                'label'     => esc_html__('Title Row Gap', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 120,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .section-title-area' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'heading_title_area_border',
                'selector' => '{{WRAPPER}} .schedule-section .section-title-area',
            ]
        );

        $this->add_responsive_control(
            'heading_block_text_align',
            [
                'label'     => esc_html__('Heading Block Alignment', 'ftelements'),
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
                    '{{WRAPPER}} .schedule-section .section-title-area .section-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_block_max_width',
            [
                'label'      => esc_html__('Heading Block Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .section-title-area .section-title' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .schedule-section .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label'      => esc_html__('Subtitle Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .schedule-section .sec_title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Title Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_inner_padding',
            [
                'label'      => esc_html__('Heading Inner Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .section-title-area .section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(),
            [
                'name'     => 'subtitle_text_shadow',
                'label'    => esc_html__('Subtitle Text Shadow', 'ftelements'),
                'selector' => '{{WRAPPER}} .schedule-section .sec-sub',
            ]
        );

        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(),
            [
                'name'     => 'title_text_shadow',
                'label'    => esc_html__('Title Text Shadow', 'ftelements'),
                'selector' => '{{WRAPPER}} .schedule-section .sec_title',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'tabs_style_section',
            [
                'label' => esc_html__('Tabs', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'tabs_gap',
            [
                'label'     => esc_html__('Tabs Gap', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 60,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'tab_text_color',
            [
                'label'     => esc_html__('Tab Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tab_text_color_active',
            [
                'label'     => esc_html__('Active Tab Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link.active' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tab_bg_color',
            [
                'label'     => esc_html__('Tab Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tab_bg_color_active',
            [
                'label'     => esc_html__('Active Tab Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link.active' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'tab_typography',
                'selector' => '{{WRAPPER}} .schedule-section .nav .nav-link',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'tab_border',
                'selector' => '{{WRAPPER}} .schedule-section .nav .nav-link',
            ]
        );

        $this->add_responsive_control(
            'tab_border_radius',
            [
                'label'      => esc_html__('Tab Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tab_padding',
            [
                'label'      => esc_html__('Tab Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tabs_nav_margin',
            [
                'label'      => esc_html__('Tabs Nav Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .nav' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tabs_nav_padding',
            [
                'label'      => esc_html__('Tabs Nav Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .nav' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tabs_nav_width',
            [
                'label'      => esc_html__('Tabs Nav Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .nav' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tabs_nav_justify',
            [
                'label'     => esc_html__('Tabs Nav Justify', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''              => esc_html__('Default', 'ftelements'),
                    'flex-start'    => esc_html__('Start', 'ftelements'),
                    'center'        => esc_html__('Center', 'ftelements'),
                    'flex-end'      => esc_html__('End', 'ftelements'),
                    'space-between' => esc_html__('Space Between', 'ftelements'),
                    'space-around'  => esc_html__('Space Around', 'ftelements'),
                    'space-evenly'  => esc_html__('Space Evenly', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tabs_nav_align_items',
            [
                'label'     => esc_html__('Tabs Nav Align Items', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''           => esc_html__('Default', 'ftelements'),
                    'flex-start' => esc_html__('Start', 'ftelements'),
                    'center'     => esc_html__('Center', 'ftelements'),
                    'flex-end'   => esc_html__('End', 'ftelements'),
                    'stretch'    => esc_html__('Stretch', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tabs_nav_flex_wrap',
            [
                'label'     => esc_html__('Tabs Nav Flex Wrap', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''         => esc_html__('Default', 'ftelements'),
                    'nowrap'   => esc_html__('No Wrap', 'ftelements'),
                    'wrap'     => esc_html__('Wrap', 'ftelements'),
                    'wrap-reverse' => esc_html__('Wrap Reverse', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav' => 'flex-wrap: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tab_link_min_width',
            [
                'label'      => esc_html__('Tab Min Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link' => 'min-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'tab_text_color_hover',
            [
                'label'     => esc_html__('Tab Text Color (Hover)', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tab_bg_color_hover',
            [
                'label'     => esc_html__('Tab Background (Hover)', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tab_border_color_hover',
            [
                'label'     => esc_html__('Tab Border Color (Hover)', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(),
            [
                'name'     => 'tab_text_shadow',
                'label'    => esc_html__('Tab Text Shadow', 'ftelements'),
                'selector' => '{{WRAPPER}} .schedule-section .nav .nav-link',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'tab_content_style_section',
            [
                'label' => esc_html__('Tab Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'tab_content_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .tab-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tab_content_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .tab-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'tab_content_background',
                'selector' => '{{WRAPPER}} .schedule-section .tab-content',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'tab_content_border',
                'selector' => '{{WRAPPER}} .schedule-section .tab-content',
            ]
        );

        $this->add_responsive_control(
            'tab_content_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .tab-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'card_style_section',
            [
                'label' => esc_html__('Schedule Card', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'card_background',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'card_border',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label'      => esc_html__('Card Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label'      => esc_html__('Card Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_margin',
            [
                'label'      => esc_html__('Card Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_min_height',
            [
                'label'      => esc_html__('Min Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 800,
                    ],
                    'vh' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_align_items',
            [
                'label'     => esc_html__('Card Align Items', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''            => esc_html__('Default', 'ftelements'),
                    'flex-start'  => esc_html__('Start', 'ftelements'),
                    'center'      => esc_html__('Center', 'ftelements'),
                    'flex-end'    => esc_html__('End', 'ftelements'),
                    'stretch'     => esc_html__('Stretch', 'ftelements'),
                    'baseline'    => esc_html__('Baseline', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_justify_content',
            [
                'label'     => esc_html__('Card Justify Content', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''              => esc_html__('Default', 'ftelements'),
                    'flex-start'    => esc_html__('Start', 'ftelements'),
                    'center'        => esc_html__('Center', 'ftelements'),
                    'flex-end'      => esc_html__('End', 'ftelements'),
                    'space-between' => esc_html__('Space Between', 'ftelements'),
                    'space-around'  => esc_html__('Space Around', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'card_flex_direction',
            [
                'label'     => esc_html__('Card Flex Direction', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''            => esc_html__('Default', 'ftelements'),
                    'row'         => esc_html__('Row', 'ftelements'),
                    'row-reverse' => esc_html__('Row Reverse', 'ftelements'),
                    'column'      => esc_html__('Column', 'ftelements'),
                    'column-reverse' => esc_html__('Column Reverse', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'flex-direction: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'card_display',
            [
                'label'     => esc_html__('Card Display', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''       => esc_html__('Default', 'ftelements'),
                    'block'  => esc_html__('Block', 'ftelements'),
                    'flex'   => esc_html__('Flex', 'ftelements'),
                    'grid'   => esc_html__('Grid', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'display: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_gap',
            [
                'label'     => esc_html__('Card Inner Gap', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 80,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'schedule_row_gap',
            [
                'label'     => esc_html__('Row Gap (Cards)', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 80,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .tab-content .row' => 'row-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'schedule_column_gap',
            [
                'label'     => esc_html__('Column Gap (Cards)', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 80,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .tab-content .row' => 'column-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'schedule_column_padding',
            [
                'label'      => esc_html__('Column Inner Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .tab-content .row > [class*="col-"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'item_icon_style_section',
            [
                'label' => esc_html__('Item Icon', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_size',
            [
                'label'      => esc_html__('Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 10,
                        'max' => 200,
                    ],
                    '%'  => [
                        'min' => 10,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_margin',
            [
                'label'      => esc_html__('Icon Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'icon_css_filters',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items .icon img',
            ]
        );

        $this->add_responsive_control(
            'icon_height',
            [
                'label'      => esc_html__('Icon Image Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 300,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .icon img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'icon_object_fit',
            [
                'label'     => esc_html__('Icon Object Fit', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''        => esc_html__('Default', 'ftelements'),
                    'fill'    => esc_html__('Fill', 'ftelements'),
                    'contain' => esc_html__('Contain', 'ftelements'),
                    'cover'   => esc_html__('Cover', 'ftelements'),
                    'none'    => esc_html__('None', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .icon img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_opacity',
            [
                'label'      => esc_html__('Icon Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['%'],
                'range'      => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .icon img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_wrapper_text_align',
            [
                'label'     => esc_html__('Icon Alignment', 'ftelements'),
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
                    '{{WRAPPER}} .schedule-section .schedule-box-items .icon' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_wrapper_width',
            [
                'label'      => esc_html__('Icon Wrapper Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .icon' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_padding',
            [
                'label'      => esc_html__('Icon Wrapper Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'icon_wrapper_background',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items .icon',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'icon_wrapper_border',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items .icon',
            ]
        );

        $this->add_responsive_control(
            'icon_wrapper_border_radius',
            [
                'label'      => esc_html__('Icon Wrapper Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'shape_images_style_section',
            [
                'label' => esc_html__('Shape Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_shape_width',
            [
                'label'      => esc_html__('Section Shape Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 10,
                        'max' => 600,
                    ],
                    '%'  => [
                        'min' => 5,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .vec-5 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_shape_width',
            [
                'label'      => esc_html__('Item Shape Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 10,
                        'max' => 600,
                    ],
                    '%'  => [
                        'min' => 5,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .bg-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_shape_height',
            [
                'label'      => esc_html__('Item Shape Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 10,
                        'max' => 600,
                    ],
                    '%'  => [
                        'min' => 5,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .bg-shape img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_shape_opacity',
            [
                'label'      => esc_html__('Section Shape Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['%'],
                'range'      => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .vec-5 img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_shape_position_top',
            [
                'label'      => esc_html__('Section Shape Top', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                    ],
                    '%'  => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .vec-5' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_shape_position_left',
            [
                'label'      => esc_html__('Section Shape Left', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                    ],
                    '%'  => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .vec-5' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_shape_position_right',
            [
                'label'      => esc_html__('Section Shape Right', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                    ],
                    '%'  => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .vec-5' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'section_shape_position_mode',
            [
                'label'     => esc_html__('Section Shape Position', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''         => esc_html__('Default', 'ftelements'),
                    'relative' => esc_html__('Relative', 'ftelements'),
                    'absolute' => esc_html__('Absolute', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .vec-5' => 'position: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'section_shape_z_index',
            [
                'label'     => esc_html__('Section Shape Z-Index', 'ftelements'),
                'type'      => Controls_Manager::NUMBER,
                'min'       => -99999,
                'max'       => 999999,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .vec-5' => 'z-index: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_shape_opacity',
            [
                'label'      => esc_html__('Card Shape Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['%'],
                'range'      => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .bg-shape img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_responsive_control(
            'bg_shape_padding',
            [
                'label'      => esc_html__('Card Shape Container Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .bg-shape' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bg_shape_margin',
            [
                'label'      => esc_html__('Card Shape Container Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .bg-shape' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bg_shape_overflow',
            [
                'label'     => esc_html__('Card Shape Overflow', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''        => esc_html__('Default', 'ftelements'),
                    'hidden'  => esc_html__('Hidden', 'ftelements'),
                    'visible' => esc_html__('Visible', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .bg-shape' => 'overflow: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'shape_image_css_filters',
                'selector' => '{{WRAPPER}} .schedule-section .vec-5 img, {{WRAPPER}} .schedule-section .schedule-box-items .bg-shape img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'item_content_style_section',
            [
                'label' => esc_html__('Item Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'content_wrapper_padding',
            [
                'label'      => esc_html__('Content Area Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_wrapper_margin',
            [
                'label'      => esc_html__('Content Area Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'content_wrapper_background',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items .content',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'content_wrapper_border',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items .content',
            ]
        );

        $this->add_responsive_control(
            'content_wrapper_border_radius',
            [
                'label'      => esc_html__('Content Area Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_text_align',
            [
                'label'     => esc_html__('Content Text Align', 'ftelements'),
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
                    'justify' => [
                        'title' => esc_html__('Justify', 'ftelements'),
                        'icon'  => 'eicon-text-align-justify',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_max_width',
            [
                'label'      => esc_html__('Content Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_inner_gap',
            [
                'label'     => esc_html__('Gap Between Time & Description', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 80,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content h3' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'time_color',
            [
                'label'     => esc_html__('Time Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'time_typography',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items .content h3',
            ]
        );

        $this->add_responsive_control(
            'time_margin',
            [
                'label'      => esc_html__('Time Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'time_padding',
            [
                'label'      => esc_html__('Time Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(),
            [
                'name'     => 'time_text_shadow',
                'label'    => esc_html__('Time Text Shadow', 'ftelements'),
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items .content h3',
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label'     => esc_html__('Description Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'description_typography',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items .content p',
            ]
        );

        $this->add_responsive_control(
            'description_margin',
            [
                'label'      => esc_html__('Description Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'description_padding',
            [
                'label'      => esc_html__('Description Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(),
            [
                'name'     => 'description_text_shadow',
                'label'    => esc_html__('Description Text Shadow', 'ftelements'),
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items .content p',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'container_style_section',
            [
                'label' => esc_html__('Container', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'container_padding',
            [
                'label'      => esc_html__('Container Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'container_max_width',
            [
                'label'      => esc_html__('Container Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1920,
                    ],
                    '%'  => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .container' => 'max-width: {{SIZE}}{{UNIT}};',
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
        $schedule_tabs = !empty($settings['schedule_tabs']) ? $settings['schedule_tabs'] : [];

        if (empty($schedule_tabs)) {
            return;
        }

        $subtitle = !empty($settings['section_subtitle']) ? $settings['section_subtitle'] : '';
        $title = !empty($settings['section_title']) ? $settings['section_title'] : '';
        $default_item_icon = !empty($settings['item_icon']['url']) ? $settings['item_icon']['url'] : 'assets/img/home-1/pocket-watch.png';
        $default_item_shape = !empty($settings['item_shape_image']['url']) ? $settings['item_shape_image']['url'] : '';
        $section_shape_image = !empty($settings['section_shape_image']['url']) ? $settings['section_shape_image']['url'] : 'assets/img/home-1/vec5.png';

        ?>



        <section class="schedule-section schedule-section-inner fix section-padding">
            <div class="vec-5 bz-gsap-animate-circle d-none d-xl-block">
                <img src="<?php echo esc_url($section_shape_image); ?>" alt="">
            </div>
            <div class="container">
                <div class="section-title-area bb-bottom align-items-end">
                    <div class="section-title">
                        <?php if (!empty($subtitle)) : ?>
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($subtitle); ?></span>
                        <?php endif; ?>
                        <?php if (!empty($title)) : ?>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                            <?php echo esc_html($title); ?>
                        </h2>
                        <?php endif; ?>
                    </div>
                    <ul class="nav mt-0 justify-content-center justify-content-lg-start wow fadeInUp" data-wow-delay=".3s">
                        <?php foreach ($schedule_tabs as $tab_index => $tab) :
                            $tab_id = 'schedule-tab-' . esc_attr($this->get_id()) . '-' . ($tab_index + 1);
                            $tab_title = !empty($tab['tab_title']) ? $tab['tab_title'] : '';
                            ?>
                        <li class="nav-item">
                            <a href="#<?php echo esc_attr($tab_id); ?>" data-bs-toggle="tab" class="nav-link <?php echo $tab_index === 0 ? 'active' : ''; ?>">
                                <?php echo esc_html($tab_title); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="tab-content">
                    <?php foreach ($schedule_tabs as $tab_index => $tab) :
                        $tab_id = 'schedule-tab-' . $this->get_id() . '-' . ($tab_index + 1);
                        $items = !empty($tab['schedule_items']) ? $tab['schedule_items'] : [];
                        ?>
                    <div id="<?php echo esc_attr($tab_id); ?>" class="tab-pane fade <?php echo $tab_index === 0 ? 'show active' : ''; ?>">
                        <div class="row">
                            <?php foreach ($items as $item_index => $item) :
                                $time = !empty($item['time']) ? $item['time'] : '';
                                $description = !empty($item['description']) ? $item['description'] : '';
                                $bg_shape_class = !empty($item['bg_shape_class']) ? $item['bg_shape_class'] : '';
                                $animation_delay = !empty($item['animation_delay']) ? $item['animation_delay'] : '';
                                $row_icon = !empty($item['item_icon_override']['url']) ? $item['item_icon_override']['url'] : $default_item_icon;
                                $row_shape = !empty($item['item_shape_override']['url']) ? $item['item_shape_override']['url'] : $default_item_shape;
                                ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" <?php echo !empty($animation_delay) ? 'data-wow-delay="' . esc_attr($animation_delay) . '"' : ''; ?>>
                                <div class="schedule-box-items">
                                    <div class="bg-shape <?php echo esc_attr($bg_shape_class); ?>">
                                        <?php if (!empty($row_shape)) : ?>
                                        <img src="<?php echo esc_url($row_shape); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="icon">
                                        <?php if (!empty($row_icon)) : ?>
                                        <img src="<?php echo esc_url($row_icon); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="content">
                                        <?php if (!empty($time)) : ?>
                                        <h3>
                                            <?php echo esc_html($time); ?>
                                        </h3>
                                        <?php endif; ?>
                                        <?php if (!empty($description)) : ?>
                                        <p>
                                            <?php echo esc_html($description); ?>
                                        </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>








<?php
    }
}
