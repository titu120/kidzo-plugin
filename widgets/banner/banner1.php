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

class Kidzu_Banner1_Widget extends \Elementor\Widget_Base
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
        return 'kidzu-banner';
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
        return esc_html__('Banner 1', 'kidzu');
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
            'kidzu_banner_content',
            [
                'label' => esc_html__('Banner Content', 'kidzu'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'sub_title',
            [
                'label' => esc_html__('Sub Title', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('A safe, joyful learning environment.', 'kidzu'),
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Nurturing Young Minds for a Bright Future', 'kidzu'),
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('We are a caring kindergarten & school dedicated to building strong foundations through play-based and academic learning.', 'kidzu'),
            ]
        );

        $repeater->add_control(
            'primary_button_text',
            [
                'label' => esc_html__('Primary Button Text', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Enroll Now', 'kidzu'),
            ]
        );

        $repeater->add_control(
            'primary_button_link',
            [
                'label' => esc_html__('Primary Button Link', 'kidzu'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://your-link.com',
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $repeater->add_control(
            'secondary_button_text',
            [
                'label' => esc_html__('Secondary Button Text', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Book a Visit', 'kidzu'),
            ]
        );

        $repeater->add_control(
            'secondary_button_link',
            [
                'label' => esc_html__('Secondary Button Link', 'kidzu'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://your-link.com',
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $repeater->add_control(
            'hero_image',
            [
                'label' => esc_html__('Hero Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-1/hero-1.png',
                ],
            ]
        );

        $this->add_control(
            'slides',
            [
                'label' => esc_html__('Slides', 'kidzu'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'sub_title' => esc_html__('A safe, joyful learning environment.', 'kidzu'),
                        'title' => esc_html__('Nurturing Young Minds for a Bright Future', 'kidzu'),
                        'description' => esc_html__('We are a caring kindergarten & school dedicated to building strong foundations through play-based and academic learning.', 'kidzu'),
                        'primary_button_text' => esc_html__('Enroll Now', 'kidzu'),
                        'primary_button_link' => ['url' => '#'],
                        'secondary_button_text' => esc_html__('Book a Visit', 'kidzu'),
                        'secondary_button_link' => ['url' => '#'],
                        'hero_image' => ['url' => get_template_directory_uri() . '/assets/img/home-1/hero-1.png'],
                    ],
                    [
                        'sub_title' => esc_html__('A safe, joyful learning environment.', 'kidzu'),
                        'title' => esc_html__('Nurturing Young Minds for a Bright Future', 'kidzu'),
                        'description' => esc_html__('We are a caring kindergarten & school dedicated to building strong foundations through play-based and academic learning.', 'kidzu'),
                        'primary_button_text' => esc_html__('Enroll Now', 'kidzu'),
                        'primary_button_link' => ['url' => '#'],
                        'secondary_button_text' => esc_html__('Book a Visit', 'kidzu'),
                        'secondary_button_link' => ['url' => '#'],
                        'hero_image' => ['url' => get_template_directory_uri() . '/assets/img/home-1/hero-2.png'],
                    ],
                    [
                        'sub_title' => esc_html__('A safe, joyful learning environment.', 'kidzu'),
                        'title' => esc_html__('Nurturing Young Minds for a Bright Future', 'kidzu'),
                        'description' => esc_html__('We are a caring kindergarten & school dedicated to building strong foundations through play-based and academic learning.', 'kidzu'),
                        'primary_button_text' => esc_html__('Enroll Now', 'kidzu'),
                        'primary_button_link' => ['url' => '#'],
                        'secondary_button_text' => esc_html__('Book a Visit', 'kidzu'),
                        'secondary_button_link' => ['url' => '#'],
                        'hero_image' => ['url' => get_template_directory_uri() . '/assets/img/home-1/hero-3.png'],
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->add_control(
            'hero_line_image',
            [
                'label' => esc_html__('Hero Line Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-1/hero-line-2.png',
                ],
            ]
        );

        $this->add_control(
            'shape1_image',
            [
                'label' => esc_html__('Shape 1 Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-1/shape-1.png',
                ],
            ]
        );

        $this->add_control(
            'shape2_image',
            [
                'label' => esc_html__('Shape 2 Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-1/shape-2.png',
                ],
            ]
        );

        $this->add_control(
            'shape3_image',
            [
                'label' => esc_html__('Shape 3 Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-1/shape-3.png',
                ],
            ]
        );

        $this->add_control(
            'shape4_image',
            [
                'label' => esc_html__('Shape 4 Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-1/shape-4.png',
                ],
            ]
        );

        $this->add_control(
            'shape5_image',
            [
                'label' => esc_html__('Shape 5 Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/home-1/shape-5.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_banner_style_subtitle',
            [
                'label' => esc_html__('Sub Title', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .hero-content .hero-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_banner_style_title',
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
                    '{{WRAPPER}} .hero-content .hero-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .hero-content .hero-title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_banner_style_description',
            [
                'label' => esc_html__('Description', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_typography',
                'selector' => '{{WRAPPER}} .hero-content p',
            ]
        );

        $this->add_responsive_control(
            'description_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_banner_style_buttons',
            [
                'label' => esc_html__('Buttons', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typography',
                'selector' => '{{WRAPPER}} .hero-content .hero-button .theme-btn .theme-text, {{WRAPPER}} .hero-content .hero-button .theme-btn .theme-text2',
            ]
        );

        $this->add_responsive_control(
            'button_spacing',
            [
                'label' => esc_html__('Button Spacing', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 100],
                    'em' => ['min' => 0, 'max' => 10],
                    'rem' => ['min' => 0, 'max' => 10],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('buttons_style_tabs');

        $this->start_controls_tab(
            'button_primary_style_tab',
            [
                'label' => esc_html__('Primary Button', 'kidzu'),
            ]
        );

        $this->add_control(
            'button_primary_text_color',
            [
                'label' => esc_html__('Text Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header) .theme-text, {{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header) .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_primary_icon_size',
            [
                'label' => esc_html__('Arrow Size', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 8, 'max' => 40],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header) .theme-text img, {{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header) .theme-text2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'button_secondary_style_tab',
            [
                'label' => esc_html__('Secondary Button', 'kidzu'),
            ]
        );

        $this->add_control(
            'button_secondary_text_color',
            [
                'label' => esc_html__('Text Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header .theme-text, {{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_secondary_icon_size',
            [
                'label' => esc_html__('Arrow Size', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 8, 'max' => 40],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header .theme-text img, {{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header .theme-text2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'buttons_margin',
            [
                'label' => esc_html__('Buttons Wrapper Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_banner_style_image',
            [
                'label' => esc_html__('Hero Image', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'hero_image_width',
            [
                'label' => esc_html__('Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 50, 'max' => 1200],
                    '%' => ['min' => 10, 'max' => 100],
                    'vw' => ['min' => 5, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'hero_image_max_width',
            [
                'label' => esc_html__('Max Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 50, 'max' => 1400],
                    '%' => ['min' => 10, 'max' => 100],
                    'vw' => ['min' => 5, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-image img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'hero_image_border_radius',
            [
                'label' => esc_html__('Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .hero-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'hero_image_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-image img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    private function render_banner_button($button_class, $button_text, $button_link, $bg_color)
    {
        if (empty($button_text)) {
            return;
        }

        $url = !empty($button_link['url']) ? $button_link['url'] : '#';
        $target = !empty($button_link['is_external']) ? ' target="_blank"' : '';
        $nofollow = !empty($button_link['nofollow']) ? ' rel="nofollow"' : '';
        ?>
        <a href="<?php echo esc_url($url); ?>" class="<?php echo esc_attr($button_class); ?>"<?php echo $target . $nofollow; ?>>
            <span class="theme-bg">
                <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="<?php echo esc_attr($bg_color); ?>" />
                </svg>
            </span>
            <span class="theme-text"><?php echo esc_html($button_text); ?> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon/arrow1.svg'); ?>" alt=""></span>
            <span class="theme-text2"><?php echo esc_html($button_text); ?> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon/arrow1.svg'); ?>" alt=""></span>
        </a>
        <?php
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
        $slides = !empty($settings['slides']) ? $settings['slides'] : [];
        $widget_id = 'kidzu-banner-' . $this->get_id();
        $theme_uri = get_template_directory_uri();
        $hero_line_image = !empty($settings['hero_line_image']['url']) ? $settings['hero_line_image']['url'] : $theme_uri . '/assets/img/home-1/hero-line-2.png';
        $shape1_image = !empty($settings['shape1_image']['url']) ? $settings['shape1_image']['url'] : $theme_uri . '/assets/img/home-1/shape-1.png';
        $shape2_image = !empty($settings['shape2_image']['url']) ? $settings['shape2_image']['url'] : $theme_uri . '/assets/img/home-1/shape-2.png';
        $shape3_image = !empty($settings['shape3_image']['url']) ? $settings['shape3_image']['url'] : $theme_uri . '/assets/img/home-1/shape-3.png';
        $shape4_image = !empty($settings['shape4_image']['url']) ? $settings['shape4_image']['url'] : $theme_uri . '/assets/img/home-1/shape-4.png';
        $shape5_image = !empty($settings['shape5_image']['url']) ? $settings['shape5_image']['url'] : $theme_uri . '/assets/img/home-1/shape-5.png';

        ?>



        <section id="<?php echo esc_attr($widget_id); ?>" class="hero-section hero-1">
            <div class="hero-line">
                <img src="<?php echo esc_url($hero_line_image); ?>" alt="img">
            </div>
            <div class="shape1 float-bob-y">
                <img src="<?php echo esc_url($shape1_image); ?>" alt="img">
            </div>
            <div class="shape3 float-bob-x">
                <img src="<?php echo esc_url($shape3_image); ?>" alt="img">
            </div>
            <div class="shape2">
                <img src="<?php echo esc_url($shape2_image); ?>" alt="img">
            </div>
            <div class="shape4">
                <img src="<?php echo esc_url($shape4_image); ?>" alt="img">
            </div>
            <div class="shape5">
                <img src="<?php echo esc_url($shape5_image); ?>" alt="img">
            </div>
            <div class="swiper-dot">
                <div class="hero-dot"></div>
            </div>
            <div class="container">
                <div class="swiper hero-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($slides as $slide) : ?>
                            <?php
                            $sub_title = isset($slide['sub_title']) ? $slide['sub_title'] : '';
                            $title = isset($slide['title']) ? $slide['title'] : '';
                            $description = isset($slide['description']) ? $slide['description'] : '';
                            $primary_button_text = isset($slide['primary_button_text']) ? $slide['primary_button_text'] : '';
                            $primary_button_link = isset($slide['primary_button_link']) ? $slide['primary_button_link'] : [];
                            $secondary_button_text = isset($slide['secondary_button_text']) ? $slide['secondary_button_text'] : '';
                            $secondary_button_link = isset($slide['secondary_button_link']) ? $slide['secondary_button_link'] : [];
                            $hero_image_url = !empty($slide['hero_image']['url']) ? $slide['hero_image']['url'] : $theme_uri . '/assets/img/home-1/hero-1.png';
                            ?>
                            <div class="swiper-slide">
                                <div class="row align-items-center">
                                    <div class="col-lg-7">
                                        <div class="hero-content">
                                            <?php if (!empty($sub_title)) : ?>
                                                <span class="hero-sub"><?php echo esc_html($sub_title); ?></span>
                                            <?php endif; ?>
                                            <?php if (!empty($title)) : ?>
                                                <h1 class="hero-title"><?php echo wp_kses_post($title); ?></h1>
                                            <?php endif; ?>
                                            <?php if (!empty($description)) : ?>
                                                <p><?php echo esc_html($description); ?></p>
                                            <?php endif; ?>
                                            <div class="hero-button">
                                                <?php
                                                $this->render_banner_button('theme-btn', $primary_button_text, $primary_button_link, '#F39F5F');
                                                $this->render_banner_button('theme-btn hover-header', $secondary_button_text, $secondary_button_link, '#385469');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="hero-image">
                                            <img src="<?php echo esc_url($hero_image_url); ?>" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <?php if (\Elementor\Plugin::$instance->editor->is_edit_mode()) : ?>
            <script>
                (function ($) {
                    "use strict";

                    const widgetSelector = "#<?php echo esc_js($widget_id); ?>";

                    const initBannerSlider = function ($scope) {
                        if (typeof Swiper === "undefined") {
                            return;
                        }

                        const $widget = $scope && $scope.length ? $scope.find(widgetSelector) : $(widgetSelector);
                        if (!$widget.length) {
                            return;
                        }

                        $widget.each(function () {
                            const sliderEl = this.querySelector(".hero-slider");
                            if (!sliderEl) {
                                return;
                            }

                            // Prevent duplicate instances during Elementor live re-render.
                            if (sliderEl.swiper) {
                                sliderEl.swiper.destroy(true, true);
                            }

                            const paginationEl = this.querySelector(".hero-dot");
                            new Swiper(sliderEl, {
                                slidesPerView: 1,
                                spaceBetween: 0,
                                loop: true,
                                autoplay: {
                                    delay: 3000,
                                    disableOnInteraction: false
                                },
                                pagination: {
                                    el: paginationEl,
                                    clickable: true
                                },
                                speed: 500,
                                breakpoints: {
                                    1600: { slidesPerView: 1 },
                                    1200: { slidesPerView: 1 },
                                    992: { slidesPerView: 1 },
                                    768: { slidesPerView: 1 },
                                    576: { slidesPerView: 1 },
                                    0: { slidesPerView: 1 }
                                }
                            });
                        });
                    };

                    $(window).on("elementor/frontend/init", function () {
                        elementorFrontend.hooks.addAction("frontend/element_ready/kidzu-banner.default", initBannerSlider);
                    });

                    $(function () {
                        initBannerSlider($(document));
                    });
                })(jQuery);
            </script>
        <?php endif; ?>












<?php
    }
} ?>