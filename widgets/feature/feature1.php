<?php

use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;

defined('ABSPATH') || die();

class Kidzu_Feature1_Widget extends \Elementor\Widget_Base
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
        return 'kidzu-feature1';
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
        return esc_html__('Feature 1', 'kidzu');
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
            'kidzu_feature_content',
            [
                'label' => esc_html__('Feature Content', 'kidzu'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Active Learning', 'kidzu'),
            ]
        );

        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-1/icon/icon-1.svg',
                ],
            ]
        );

        $repeater->add_control(
            'bg_class',
            [
                'label' => esc_html__('Background Style Class', 'kidzu'),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => esc_html__('Style 1', 'kidzu'),
                    'bg-2' => esc_html__('Style 2', 'kidzu'),
                    'bg-3' => esc_html__('Style 3', 'kidzu'),
                    'bg-4' => esc_html__('Style 4', 'kidzu'),
                ],
            ]
        );

        $repeater->add_control(
            'animation_delay',
            [
                'label' => esc_html__('Animation Delay', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => '.2s',
            ]
        );

        $this->add_control(
            'feature_items',
            [
                'label' => esc_html__('Feature Items', 'kidzu'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => esc_html__('Active Learning', 'kidzu'),
                        'icon' => ['url' => get_template_directory_uri() . '/assets/img/home-1/icon/icon-1.svg'],
                        'bg_class' => '',
                        'animation_delay' => '.2s',
                    ],
                    [
                        'title' => esc_html__('Expert Teachers', 'kidzu'),
                        'icon' => ['url' => get_template_directory_uri() . '/assets/img/home-1/icon/icon-2.svg'],
                        'bg_class' => 'bg-2',
                        'animation_delay' => '.4s',
                    ],
                    [
                        'title' => esc_html__('100% Safe Campus', 'kidzu'),
                        'icon' => ['url' => get_template_directory_uri() . '/assets/img/home-1/icon/icon-3.svg'],
                        'bg_class' => 'bg-3',
                        'animation_delay' => '.6s',
                    ],
                    [
                        'title' => esc_html__('Modern Curriculum', 'kidzu'),
                        'icon' => ['url' => get_template_directory_uri() . '/assets/img/home-1/icon/icon-4.svg'],
                        'bg_class' => 'bg-4',
                        'animation_delay' => '.8s',
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->add_control(
            'pencil_shape',
            [
                'label' => esc_html__('Pencil Shape Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-1/pencil1.png',
                ],
            ]
        );

        $this->add_control(
            'zirap_shape',
            [
                'label' => esc_html__('Zirap Shape Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-1/zirap1.png',
                ],
            ]
        );

        $this->add_control(
            'border_circle',
            [
                'label' => esc_html__('Border Circle Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-1/icon/border-circle.png',
                ],
            ]
        );

        $this->add_control(
            'icon_box_bg',
            [
                'label' => esc_html__('Icon Box Background Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-1/icon/icon-box.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_feature_style_section',
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
                'selector' => '{{WRAPPER}} .feature-section',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .feature-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .feature-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_feature_style_card',
            [
                'label' => esc_html__('Feature Card', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'card_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .feature-box-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'card_border',
                'selector' => '{{WRAPPER}} .feature-box-items',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label' => esc_html__('Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .feature-box-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .feature-box-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .feature-box-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_feature_style_title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-box-items h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .feature-box-items h2',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .feature-box-items h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_alignment',
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
                    '{{WRAPPER}} .feature-box-items h2' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_feature_style_icon',
            [
                'label' => esc_html__('Icon', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_size',
            [
                'label' => esc_html__('Icon Size', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 10, 'max' => 200],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .feature-box-items .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_box_width',
            [
                'label' => esc_html__('Icon Box Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 30, 'max' => 300],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .feature-box-items .icon-box > img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_box_margin',
            [
                'label' => esc_html__('Icon Box Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .feature-box-items .icon-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_feature_style_shapes',
            [
                'label' => esc_html__('Shapes', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'pencil_shape_width',
            [
                'label' => esc_html__('Pencil Shape Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 20, 'max' => 600],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .feature-section .penil-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'zirap_shape_width',
            [
                'label' => esc_html__('Zirap Shape Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 20, 'max' => 600],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .feature-section .zirap-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'shapes_opacity',
            [
                'label' => esc_html__('Shapes Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['%'],
                'range' => [
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .feature-section .penil-shape, {{WRAPPER}} .feature-section .zirap-shape' => 'opacity: calc({{SIZE}}/100);',
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
        $feature_items = !empty($settings['feature_items']) ? $settings['feature_items'] : [];
        $pencil_shape = !empty($settings['pencil_shape']['url']) ? $settings['pencil_shape']['url'] : $theme_uri . '/assets/img/home-1/pencil1.png';
        $zirap_shape = !empty($settings['zirap_shape']['url']) ? $settings['zirap_shape']['url'] : $theme_uri . '/assets/img/home-1/zirap1.png';
        $border_circle = !empty($settings['border_circle']['url']) ? $settings['border_circle']['url'] : $theme_uri . '/assets/img/home-1/icon/border-circle.png';
        $icon_box_bg = !empty($settings['icon_box_bg']['url']) ? $settings['icon_box_bg']['url'] : $theme_uri . '/assets/img/home-1/icon/icon-box.png';

        ?>



        <section class="feature-section fix section-padding">
            <div class="penil-shape">
                <img src="<?php echo esc_url($pencil_shape); ?>" alt="img">
            </div>
            <div class="zirap-shape float-bob-y">
                <img src="<?php echo esc_url($zirap_shape); ?>" alt="img">
            </div>
            <div class="container">
                <div class="row g-4">
                    <?php foreach ($feature_items as $item) : ?>
                        <?php
                        $title = isset($item['title']) ? $item['title'] : '';
                        $icon = !empty($item['icon']['url']) ? $item['icon']['url'] : $theme_uri . '/assets/img/home-1/icon/icon-1.svg';
                        $bg_class = !empty($item['bg_class']) ? $item['bg_class'] : '';
                        $animation_delay = !empty($item['animation_delay']) ? $item['animation_delay'] : '.2s';
                        ?>
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($animation_delay); ?>">
                            <div class="feature-box-items">
                                <div class="feature-bg <?php echo esc_attr($bg_class); ?>"></div>
                                <div class="border-circle">
                                    <img src="<?php echo esc_url($border_circle); ?>" alt="">
                                </div>
                                <div class="icon-box">
                                    <img src="<?php echo esc_url($icon_box_bg); ?>" alt="img">
                                    <div class="icon">
                                        <img src="<?php echo esc_url($icon); ?>" alt="">
                                    </div>
                                </div>
                                <?php if (!empty($title)) : ?>
                                    <h2><?php echo esc_html($title); ?></h2>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>








<?php
    }
} ?>