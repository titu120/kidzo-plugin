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

class FT_Counter2_Widget extends \Elementor\Widget_Base
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
        return 'ft-counter2';
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
        return esc_html__('FT Counter 2', 'ftelements');
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
            'line_shape_image',
            [
                'label'   => esc_html__('Line Shape', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/counter/line-shape.png',
                ],
            ]
        );

        $this->add_control(
            'box_shape_image',
            [
                'label'   => esc_html__('Box Shape', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/counter/box-shape.png',
                ],
            ]
        );

        $this->add_control(
            'show_counter_bg',
            [
                'label'        => esc_html__('Show Counter Background', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__('Show', 'ftelements'),
                'label_off'    => esc_html__('Hide', 'ftelements'),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'icon',
            [
                'label'   => esc_html__('Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'number',
            [
                'label'       => esc_html__('Number', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => '25',
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'suffix',
            [
                'label'       => esc_html__('Suffix', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => '+',
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Year of Experience', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'wow_delay',
            [
                'label'       => esc_html__('Animation Delay', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => '.2s',
                'description' => esc_html__('Example: .2s, .4s', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'counter_items',
            [
                'label'       => esc_html__('Counter Items', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
                'default'     => [
                    [
                        'icon'      => ['url' => 'assets/img/counter/icon-1.svg'],
                        'number'    => '25',
                        'suffix'    => '+',
                        'title'     => esc_html__('Year of Experience', 'ftelements'),
                        'wow_delay' => '.2s',
                    ],
                    [
                        'icon'      => ['url' => 'assets/img/counter/icon-2.svg'],
                        'number'    => '6,500',
                        'suffix'    => '+',
                        'title'     => esc_html__('Class Completed', 'ftelements'),
                        'wow_delay' => '.4s',
                    ],
                    [
                        'icon'      => ['url' => 'assets/img/counter/icon-3.svg'],
                        'number'    => '100',
                        'suffix'    => '+',
                        'title'     => esc_html__('Experts Instructors', 'ftelements'),
                        'wow_delay' => '.6s',
                    ],
                    [
                        'icon'      => ['url' => 'assets/img/counter/icon-4.svg'],
                        'number'    => '6,561',
                        'suffix'    => '+',
                        'title'     => esc_html__('Students Enroll', 'ftelements'),
                        'wow_delay' => '.8s',
                    ],
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_section',
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
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'counter_bg_color',
            [
                'label'     => esc_html__('Counter Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-section5 .counter-bg' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'shape_style_section',
            [
                'label' => esc_html__('Shapes', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'line_shape_width',
            [
                'label'      => esc_html__('Line Shape Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 2000],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .line-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'box_shape_width',
            [
                'label'      => esc_html__('Box Shape Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 1000],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .box-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'line_shape_opacity',
            [
                'label'      => esc_html__('Line Shape Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.1],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .line-shape' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_control(
            'box_shape_opacity',
            [
                'label'      => esc_html__('Box Shape Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.1],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .box-shape' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'line_shape_css_filters',
                'selector' => '{{WRAPPER}} .counter-section5 .line-shape img',
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'box_shape_css_filters',
                'selector' => '{{WRAPPER}} .counter-section5 .box-shape img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'counter_item_style_section',
            [
                'label' => esc_html__('Counter Item', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'counter_item_alignment',
            [
                'label'     => esc_html__('Content Alignment', 'ftelements'),
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
                    '{{WRAPPER}} .counter-section5 .counter-items .content' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'counter_item_bg',
            [
                'label'     => esc_html__('Item Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-section5 .counter-items' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'counter_item_border',
                'selector' => '{{WRAPPER}} .counter-section5 .counter-items',
            ]
        );

        $this->add_responsive_control(
            'counter_item_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .counter-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'counter_item_padding',
            [
                'label'      => esc_html__('Item Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .counter-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'counter_item_margin',
            [
                'label'      => esc_html__('Item Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .counter-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'counter_column_gap',
            [
                'label'      => esc_html__('Column Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .row.g-4' => '--bs-gutter-x: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'counter_row_gap',
            [
                'label'      => esc_html__('Row Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .row.g-4' => 'row-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'icon_style_section',
            [
                'label' => esc_html__('Icon', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 300],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .counter-items .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .counter-items .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'icon_css_filters',
                'selector' => '{{WRAPPER}} .counter-section5 .counter-items .icon img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'number_style_section',
            [
                'label' => esc_html__('Number', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'number_color',
            [
                'label'     => esc_html__('Number Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-section5 .counter-items .content h2 .count' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'number_typography',
                'selector' => '{{WRAPPER}} .counter-section5 .counter-items .content h2 .count',
            ]
        );

        $this->add_control(
            'suffix_color',
            [
                'label'     => esc_html__('Suffix Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-section5 .counter-items .content h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'suffix_typography',
                'selector' => '{{WRAPPER}} .counter-section5 .counter-items .content h2',
            ]
        );

        $this->add_responsive_control(
            'number_margin',
            [
                'label'      => esc_html__('Number Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .counter-items .content h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'title_style_section',
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
                    '{{WRAPPER}} .counter-section5 .counter-items .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .counter-section5 .counter-items .content p',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-section5 .counter-items .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $line_shape_image = !empty($settings['line_shape_image']['url']) ? $settings['line_shape_image']['url'] : 'assets/img/counter/line-shape.png';
        $box_shape_image = !empty($settings['box_shape_image']['url']) ? $settings['box_shape_image']['url'] : 'assets/img/counter/box-shape.png';
        $counter_items = !empty($settings['counter_items']) ? $settings['counter_items'] : [];
        $show_counter_bg = !empty($settings['show_counter_bg']) && 'yes' === $settings['show_counter_bg'];

        ?>



        <section class="counter-section5 fix">
            <div class="line-shape">
                <img src="<?php echo esc_url($line_shape_image); ?>" alt="shape-img">
            </div>
            <div class="box-shape float-bob-x">
                <img src="<?php echo esc_url($box_shape_image); ?>" alt="shape-img">
            </div>
            <?php if ($show_counter_bg) : ?>
                <div class="counter-bg"></div>
            <?php endif; ?>
            <div class="container">
                <div class="counter-wrapper5">
                    <div class="row g-4">
                        <?php foreach ($counter_items as $index => $item) :
                            $delay = !empty($item['wow_delay']) ? $item['wow_delay'] : '.2s';
                            $icon = !empty($item['icon']['url']) ? $item['icon']['url'] : '';
                            $item_class = (count($counter_items) - 1 === $index) ? ' border-none' : '';
                            ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                                <div class="counter-items<?php echo esc_attr($item_class); ?>">
                                    <?php if (!empty($icon)) : ?>
                                        <div class="icon">
                                            <img src="<?php echo esc_url($icon); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                    <div class="content">
                                        <h2><span class="count"><?php echo esc_html($item['number']); ?></span><?php echo esc_html($item['suffix']); ?></h2>
                                        <p><?php echo esc_html($item['title']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>










<?php
    }
} ?>