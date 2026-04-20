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

class FT_Counter1_Widget extends \Elementor\Widget_Base
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
        return 'ft-counter1';
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
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'number',
            [
                'label'   => esc_html__('Number', 'ftelements'),
                'type'    => Controls_Manager::NUMBER,
                'default' => 100,
            ]
        );

        $repeater->add_control(
            'suffix',
            [
                'label'       => esc_html__('Suffix', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => '%',
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Smart classrooms', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'bg_color',
            [
                'label'   => esc_html__('Circle Background Color', 'ftelements'),
                'type'    => Controls_Manager::COLOR,
                'default' => '#FEF4DE',
            ]
        );

        $repeater->add_control(
            'bg_shape_class',
            [
                'label'       => esc_html__('Shape Class', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => '',
                'description' => esc_html__('Optional class like: bg-2, bg-3, bg-4', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'is_active',
            [
                'label'        => esc_html__('Active Item', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__('Yes', 'ftelements'),
                'label_off'    => esc_html__('No', 'ftelements'),
                'return_value' => 'yes',
                'default'      => '',
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
                        'number'         => 100,
                        'suffix'         => '%',
                        'title'          => esc_html__('Smart classrooms', 'ftelements'),
                        'bg_color'       => '#FEF4DE',
                        'bg_shape_class' => '',
                        'wow_delay'      => '.2s',
                    ],
                    [
                        'number'         => 95,
                        'suffix'         => '%',
                        'title'          => esc_html__('Safe playground', 'ftelements'),
                        'bg_color'       => '#C0EEFF',
                        'bg_shape_class' => 'bg-2',
                        'is_active'      => 'yes',
                        'wow_delay'      => '.4s',
                    ],
                    [
                        'number'         => 100,
                        'suffix'         => '%',
                        'title'          => esc_html__('child security', 'ftelements'),
                        'bg_color'       => '#E6E8FC',
                        'bg_shape_class' => 'bg-3',
                        'wow_delay'      => '.6s',
                    ],
                    [
                        'number'         => 99,
                        'suffix'         => '%',
                        'title'          => esc_html__('Clean environment', 'ftelements'),
                        'bg_color'       => '#FEDFEF',
                        'bg_shape_class' => 'bg-4',
                        'wow_delay'      => '.8s',
                    ],
                ],
            ]
        );

        $this->add_control(
            'background_image',
            [
                'label'   => esc_html__('Background Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
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
                    '{{WRAPPER}} .counter-box-items .counter-box' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'counter_item_background',
            [
                'label'     => esc_html__('Item Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-box-items' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'counter_item_border',
                'selector' => '{{WRAPPER}} .counter-box-items',
            ]
        );

        $this->add_responsive_control(
            'counter_item_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-box-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'counter_item_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-box-items .counter-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'counter_item_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-box-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'counter_number_style_section',
            [
                'label' => esc_html__('Number', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'counter_number_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-box-items .counter-box h2 .count' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'counter_number_typography',
                'selector' => '{{WRAPPER}} .counter-box-items .counter-box h2 .count',
            ]
        );

        $this->add_responsive_control(
            'counter_number_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-box-items .counter-box h2 .count' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'counter_suffix_style_section',
            [
                'label' => esc_html__('Suffix', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'counter_suffix_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-box-items .counter-box h2 .suffix' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'counter_suffix_typography',
                'selector' => '{{WRAPPER}} .counter-box-items .counter-box h2 .suffix',
            ]
        );

        $this->add_responsive_control(
            'counter_suffix_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-box-items .counter-box h2 .suffix' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'counter_title_style_section',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'counter_title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-box-items .counter-box .counter-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'counter_title_typography',
                'selector' => '{{WRAPPER}} .counter-box-items .counter-box .counter-title',
            ]
        );

        $this->add_responsive_control(
            'counter_title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .counter-box-items .counter-box .counter-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $counter_items = !empty($settings['counter_items']) ? $settings['counter_items'] : [];
        $background_image = !empty($settings['background_image']['url']) ? $settings['background_image']['url'] : 'assets/img/home-1/counter-bg.png';

        ?>



        <section class="counter-section fix section-padding pt-0">
            <div class="container">
                <div class="row g-4">
                    <?php foreach ($counter_items as $item) :
                        $delay = !empty($item['wow_delay']) ? $item['wow_delay'] : '.2s';
                        $fill_color = !empty($item['bg_color']) ? $item['bg_color'] : '#FEF4DE';
                        $shape_class = !empty($item['bg_shape_class']) ? ' ' . $item['bg_shape_class'] : '';
                        $active_class = !empty($item['is_active']) && 'yes' === $item['is_active'] ? ' active' : '';
                        ?>
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                            <div class="counter-box-items<?php echo esc_attr($active_class); ?>">
                                <svg width="330" height="330" viewBox="0 0 330 330" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M330 200.106C330 297.696 240.218 330 154.752 330C69.2846 330 0 297.696 0 200.106C0 102.516 69.2846 0 154.752 0C240.218 0 330 102.516 330 200.106Z" fill="<?php echo esc_attr($fill_color); ?>" />
                                </svg>
                                <div class="counter-box">
                                    <h2>
                                        <span class="count"><?php echo esc_html((string) $item['number']); ?></span><span class="suffix"><?php echo esc_html($item['suffix']); ?></span>
                                    </h2>
                                    <p class="counter-title"><?php echo esc_html($item['title']); ?></p>
                                    <div class="bg-shape<?php echo esc_attr($shape_class); ?>"></div>
                                </div>
                                <div class="bg-image">
                                    <img src="<?php echo esc_url($background_image); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>










<?php
    }
} ?>