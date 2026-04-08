<?php

use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_Banner_5_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'ft-banner5';
    }

    public function get_title()
    {
        return esc_html__('FT Banner 5', 'ftelements');
    }

    public function get_icon()
    {
        return 'tp-icon';
    }

    public function get_categories()
    {
        return ['pielements_category'];
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'section_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 3,
                'default' => __('Be the reason someone <span>smiles</span> from today', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 3,
                'default' => esc_html__('Your generous support helps us provide vital resources, ensures every child can thrive.', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'btn_text',
            [
                'label' => esc_html__('Button Text', 'ftelements'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Donate now', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'btn_link',
            [
                'label' => esc_html__('Button Link', 'ftelements'),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => ['url' => '#'],
            ]
        );

        $repeater->add_control(
            'btn_icon',
            [
                'label' => esc_html__('Button Icon', 'ftelements'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fa-sharp fa-solid fa-heart',
                    'library' => 'solid',
                ],
            ]
        );

        $repeater->add_control(
            'image',
            [
                'label' => esc_html__('Slide Image', 'ftelements'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'banner_list',
            [
                'label' => esc_html__('Banner Items', 'ftelements'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => esc_html__('Slide 1: Help Others', 'ftelements'),
                        'description' => esc_html__('Your generous support helps us provide vital resources.', 'ftelements'),
                    ],
                    [
                        'title' => esc_html__('Slide 2: Change Lives', 'ftelements'),
                        'description' => esc_html__('Every donation makes a difference in someone\'s life.', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );



        $this->add_control(
            'show_shape',
            [
                'label' => esc_html__('Show Bottom Shape', 'ftelements'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'ftelements'),
                'label_off' => esc_html__('Hide', 'ftelements'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'shape_image',
            [
                'label' => esc_html__('Shape Image', 'ftelements'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'show_shape' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

        // Style Tab
        $this->start_controls_section(
            'section_style_content',
            [
                'label' => esc_html__('Style', 'ftelements'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'ftelements'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .hero-content h1',
            ]
        );

        $this->add_control(
            'desc_color',
            [
                'label' => esc_html__('Description Color', 'ftelements'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'desc_typography',
                'selector' => '{{WRAPPER}} .hero-content p',
            ]
        );

        $this->add_control(
            'section_bg_color',
            [
                'label' => esc_html__('Section Background Color', 'ftelements'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0C1D24',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $banner_list = $settings['banner_list'];
        $widget_id = $this->get_id();

        if (empty($banner_list)) {
            return;
        }

        ?>
        <div id="ft-banner5-<?php echo esc_attr($widget_id); ?>" class="showcase-slider-wrappper p-relative"
            data-bg-color="<?php echo esc_attr($settings['section_bg_color']); ?>"
            style="background-color: <?php echo esc_attr($settings['section_bg_color']); ?> !important; min-height: 800px;">

            <div class="swiper-container swiper ft-banner5-active" style="height: 100%;">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($banner_list as $item) {
                        $btn_url = !empty($item['btn_link']['url']) ? $item['btn_link']['url'] : '#';
                        $target = $item['btn_link']['is_external'] ? ' target="_blank"' : '';
                        $nofollow = $item['btn_link']['nofollow'] ? ' rel="nofollow"' : '';
                        $img_url = !empty($item['image']['url']) ? $item['image']['url'] : '';
                        ?>
                        <div class="swiper-slide"
                            style="height: 100%; background-image: url(<?php echo esc_url($img_url); ?>); background-size: cover; background-position: center;">
                            <div class="hero-5"
                                style="height: 100%; padding-top: 150px; padding-bottom: 150px; display: flex; align-items: center;">
                                <div class="container text-center">
                                    <div class="hero-content">
                                        <?php if (!empty($item['title'])): ?>
                                            <h1><?php echo wp_kses_post($item['title']); ?></h1>
                                        <?php endif; ?>
                                        <?php if (!empty($item['description'])): ?>
                                            <p><?php echo wp_kses_post($item['description']); ?></p>
                                        <?php endif; ?>
                                        <?php if (!empty($item['btn_text'])): ?>
                                            <div class="hero-button">
                                                <a href="<?php echo esc_url($btn_url); ?>" <?php echo $target . $nofollow; ?>
                                                    class="theme-btn">
                                                    <?php echo esc_html($item['btn_text']); ?>
                                                    <?php if (!empty($item['btn_icon']['value'])): ?>
                                                        <?php \Elementor\Icons_Manager::render_icon($item['btn_icon'], ['aria-hidden' => 'true']); ?>
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <!-- Navigation Arrows -->
                <div class="tp-hero-7-slider-arrow">
                    <button class="tp-hero-prev"><i class="fa-regular fa-arrow-left"></i></button>
                    <button class="tp-hero-next"><i class="fa-regular fa-arrow-right"></i></button>
                </div>

                <!-- Pagination Dots -->
                <div class="tp-slider-dot swiper-pagination"></div>
            </div>

            <?php if ($settings['show_shape'] === 'yes' && !empty($settings['shape_image']['url'])): ?>
                <div class="hero-line" style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 10;">
                    <img src="<?php echo esc_url($settings['shape_image']['url']); ?>" alt="shape"
                        style="width: 100%; display: block;">
                </div>
            <?php endif; ?>

        </div>
        <?php
    }
}
