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

class FT_Counter_1_Widget extends \Elementor\Widget_Base
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
        return 'ft-counter-1';
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
        return esc_html__('FT Counter 1', 'ftelements');
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
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('How organization works', 'ftelements'),
            ]
        );

        $this->add_control(
            'shape_image',
            [
                'label' => esc_html__('Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'counter_number',
            [
                'label' => esc_html__('Number', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('22', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'counter_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Programs initiated', 'ftelements'),
            ]
        );

        $this->add_control(
            'counters',
            [
                'label' => esc_html__('Counters', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_number' => '22',
                        'counter_title' => 'Programs initiated',
                    ],
                    [
                        'counter_number' => '53',
                        'counter_title' => 'Children supported',
                    ],
                    [
                        'counter_number' => '9',
                        'counter_title' => 'Years in operation',
                    ],
                    [
                        'counter_number' => '88',
                        'counter_title' => 'Projects accomplished',
                    ],
                ],
                'title_field' => '{{{ counter_title }}}',
            ]
        );

        $this->end_controls_section();

        // Section Style
        $this->start_controls_section(
            'section_style',
            [
                'label' => esc_html__('Section Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-section-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => esc_html__('Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-counter-section-2',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'section_border',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-counter-section-2',
            ]
        );

        $this->end_controls_section();

        // Shape Image Style
        $this->start_controls_section(
            'shape_image_style',
            [
                'label' => esc_html__('Shape Image Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'show_shape',
            [
                'label' => esc_html__('Show Shape', 'ftelements'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'ftelements'),
                'label_off' => esc_html__('Hide', 'ftelements'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_responsive_control(
            'shape_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-section-2 .line-1 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'shape_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'max' => 1,
                        'min' => 0.1,
                        'step' => 0.1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-section-2 .line-1 img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape_top',
            [
                'label' => esc_html__('Top Position', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-section-2 .line-1' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape_left',
            [
                'label' => esc_html__('Left Position', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-section-2 .line-1' => 'left: {{SIZE}}{{UNIT}}; right: auto; bottom: auto;',
                ],
            ]
        );

        $this->end_controls_section();

        // Title Style
        $this->start_controls_section(
            'title_style_section',
            [
                'label' => esc_html__('Main Title Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-wrapper-2 .titles' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => esc_html__('Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-counter-wrapper-2 .titles',
            ]
        );

        $this->add_responsive_control(
            'title_alignment',
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
                    '{{WRAPPER}} .grt-counter-wrapper-2 .titles' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-wrapper-2 .titles' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Counter Box Style
        $this->start_controls_section(
            'counter_box_style_section',
            [
                'label' => esc_html__('Counter Box Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('counter_box_tabs');

        $this->start_controls_tab(
            'counter_box_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'counter_box_background',
                'label' => esc_html__('Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-counter-box-2',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'counter_box_border',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-counter-box-2',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'counter_box_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'counter_box_background_hover',
                'label' => esc_html__('Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-counter-box-2:hover',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'counter_box_border_hover',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-counter-box-2:hover',
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'counter_box_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-box-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'counter_box_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-box-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'counter_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-box-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'counter_box_alignment',
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
                    '{{WRAPPER}} .grt-counter-box-2' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Counter Number Style
        $this->start_controls_section(
            'counter_number_style_section',
            [
                'label' => esc_html__('Counter Number Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'counter_number_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-box-2 .counter-title .count' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'counter_number_typography',
                'label' => esc_html__('Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-counter-box-2 .counter-title .count',
            ]
        );

        $this->add_responsive_control(
            'counter_number_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-box-2 .counter-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Counter Title Style
        $this->start_controls_section(
            'counter_title_style_section',
            [
                'label' => esc_html__('Counter Title Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'counter_title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-box-2 p' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'counter_title_typography',
                'label' => esc_html__('Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-counter-box-2 p',
            ]
        );

        $this->add_responsive_control(
            'counter_title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .grt-counter-box-2 p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

        $shape_image = !empty($settings['shape_image']['url']) ? $settings['shape_image']['url'] : '';
        $title = $settings['title'];
        $counters = $settings['counters'];
        ?>

                <section class="grt-counter-section-2 fix section-bg section-padding pt-0">
                    <?php if ('yes' === $settings['show_shape'] && !empty($shape_image)): ?>
                            <div class="line-1">
                                <img src="<?php echo esc_url($shape_image); ?>" alt="img">
                            </div>
                    <?php endif; ?>
                    <div class="container">
                        <div class="grt-counter-wrapper-2">
                            <?php if (!empty($title)): ?>
                                    <h2 class="titles split-title">
                                        <?php echo esc_html($title); ?>
                                    </h2>
                            <?php endif; ?>
                    
                            <?php if (!empty($counters)): ?>
                                    <div class="row g-4">
                                        <?php
                                        $delay_count = 2;
                                        foreach ($counters as $index => $item):
                                            $wow_delay = '.' . $delay_count . 's';
                                            ?>
                                                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($wow_delay); ?>">
                                                    <div class="grt-counter-box-2">
                                                        <h3 class="counter-title">
                                                            <span class="count"><?php echo esc_html($item['counter_number']); ?></span>
                                                        </h3>
                                                        <p><?php echo esc_html($item['counter_title']); ?></p>
                                                    </div>
                                                </div>
                                                <?php
                                                $delay_count += 2;
                                        endforeach;
                                        ?>
                                    </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
                <?php
    }
} ?>