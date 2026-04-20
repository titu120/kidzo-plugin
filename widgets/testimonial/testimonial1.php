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

class FT_Testimonial1_Widget extends \Elementor\Widget_Base
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
        return 'ft-testimonial1';
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
        return esc_html__('FT Testimonial 1', 'ftelements');
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
                'default'     => esc_html__('Testimonials', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Parents Talk About Our School', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'client_image',
            [
                'label'   => esc_html__('Client Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'client_title',
            [
                'label'       => esc_html__('Client Title', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Parent of Nursery Student', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'client_review',
            [
                'label'   => esc_html__('Review', 'ftelements'),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__('This school has provided a safe, caring, and joyful environment for my child. The teachers are very supportive and attentive.', 'ftelements'),
            ]
        );

        $this->add_control(
            'testimonial_items',
            [
                'label'       => esc_html__('Testimonials', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ client_title }}}',
                'default'     => [
                    [
                        'client_title'  => esc_html__('Parent of Nursery Student', 'ftelements'),
                        'client_review' => esc_html__('This school has provided a safe, caring, and joyful environment for my child. The teachers are very supportive and attentive.', 'ftelements'),
                    ],
                    [
                        'client_title'  => esc_html__('Parent of Nursery Student', 'ftelements'),
                        'client_review' => esc_html__('This school has provided a safe, caring, and joyful environment for my child. The teachers are very supportive and attentive.', 'ftelements'),
                    ],
                    [
                        'client_title'  => esc_html__('Parent of Nursery Student', 'ftelements'),
                        'client_review' => esc_html__('This school has provided a safe, caring, and joyful environment for my child. The teachers are very supportive and attentive.', 'ftelements'),
                    ],
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
            'subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .testimonial-section .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label'      => esc_html__('Subtitle Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section .tx-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .testimonial-section .tx-title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Title Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .tx-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_spacing',
            [
                'label'      => esc_html__('Heading Bottom Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 200],
                    '%'  => ['min' => 0, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .section-title-area' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'dot_style_section',
            [
                'label' => esc_html__('Slider Dot', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'dot_color',
            [
                'label'     => esc_html__('Dot Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section .swiper-dot .dot' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'dot_size',
            [
                'label'      => esc_html__('Dot Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 4, 'max' => 60],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .swiper-dot .dot' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'dot_border_radius',
            [
                'label'      => esc_html__('Dot Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .swiper-dot .dot' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'card_style_section',
            [
                'label' => esc_html__('Testimonial Card', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'card_background',
                'selector' => '{{WRAPPER}} .testimonial-section .tetsimonial-box-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'card_border',
                'selector' => '{{WRAPPER}} .testimonial-section .tetsimonial-box-items',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .tetsimonial-box-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .tetsimonial-box-items .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .tetsimonial-box-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'image_style_section',
            [
                'label' => esc_html__('Client Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'client_image_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 20, 'max' => 400],
                    '%'  => ['min' => 10, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .client-img img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'client_image_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 20, 'max' => 400],
                    '%'  => ['min' => 10, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .client-img img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'client_image_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .client-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'client_image_border',
                'selector' => '{{WRAPPER}} .testimonial-section .client-img img',
            ]
        );

        $this->add_responsive_control(
            'client_image_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .client-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'name_style_section',
            [
                'label' => esc_html__('Client Name', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'name_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section .content h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'name_typography',
                'selector' => '{{WRAPPER}} .testimonial-section .content h3',
            ]
        );

        $this->add_responsive_control(
            'name_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'review_style_section',
            [
                'label' => esc_html__('Review Text', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'review_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'review_typography',
                'selector' => '{{WRAPPER}} .testimonial-section .content p',
            ]
        );

        $this->add_responsive_control(
            'review_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $widget_id = 'ft-testimonial1-' . $this->get_id();

        ?>




        <?php
        $section_subtitle  = !empty($settings['section_subtitle']) ? $settings['section_subtitle'] : '';
        $section_title     = !empty($settings['section_title']) ? $settings['section_title'] : '';
        $testimonial_items = !empty($settings['testimonial_items']) ? $settings['testimonial_items'] : [];
        ?>

        <section id="<?php echo esc_attr($widget_id); ?>" class="testimonial-section section-padding">
            <div class="container">
                <div class="section-title-area justify-content-center justify-content-md-between">
                    <div class="section-title text-center text-md-start">
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($section_subtitle); ?></span>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                            <?php echo esc_html($section_title); ?>
                        </h2>
                    </div>
                    <div class="swiper-dot">
                        <div class="dot"></div>
                    </div>
                </div>
            </div>
            <div class="swiper testimonial-slider wow fadeInUp" data-wow-delay=".3s">
                <div class="swiper-wrapper">
                    <?php foreach ($testimonial_items as $item) : ?>
                        <?php
                        $client_title  = !empty($item['client_title']) ? $item['client_title'] : '';
                        $client_review = !empty($item['client_review']) ? $item['client_review'] : '';
                        $client_image  = !empty($item['client_image']['url']) ? $item['client_image']['url'] : Utils::get_placeholder_image_src();
                        ?>
                        <div class="swiper-slide">
                            <div class="tetsimonial-box-items">
                                <div class="bg-shape">
                                    <svg width="450" height="300" viewBox="0 0 450 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M77.7685 247.017L284.532 240.901C304.533 293.733 351.651 300 389.691 300C353.7 279.414 341.525 253.992 337.398 239.338L385.784 237.906C408.797 238.889 429.115 221.682 433.91 197.155L448.955 120.229C454.074 94.0514 439.935 67.9614 416.414 60.1912L256.779 7.44649C231.174 -1.01557 204.019 -2.28806 177.84 3.74434L37.5302 36.0696C12.673 41.7958 -3.59179 67.8778 0.680723 95.1489L32.9692 204.201C36.7378 228.204 55.4236 246.062 77.7685 247.017Z" fill="#FEF4DE" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <div class="client-img">
                                        <img src="<?php echo esc_url($client_image); ?>" alt="<?php echo esc_attr($client_title); ?>">
                                    </div>
                                    <h3>
                                        <?php echo esc_html($client_title); ?>
                                    </h3>
                                    <p>
                                        <?php echo esc_html($client_review); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </section>

        <?php if (\Elementor\Plugin::$instance->editor->is_edit_mode()) : ?>
            <script>
                (function ($) {
                    "use strict";

                    const widgetSelector = "#<?php echo esc_js($widget_id); ?>";

                    const initTestimonialSlider = function ($scope) {
                        if (typeof Swiper === "undefined") {
                            return;
                        }

                        const $widget = $scope && $scope.length ? $scope.find(widgetSelector) : $(widgetSelector);
                        if (!$widget.length) {
                            return;
                        }

                        $widget.each(function () {
                            const sliderEl = this.querySelector(".testimonial-slider");
                            if (!sliderEl) {
                                return;
                            }

                            // Avoid stacked Swiper instances when Elementor live-refreshes this widget.
                            if (sliderEl.swiper) {
                                sliderEl.swiper.destroy(true, true);
                            }

                            const paginationEl = this.querySelector(".dot");
                            new Swiper(sliderEl, {
                                spaceBetween: 30,
                                speed: 1300,
                                loop: true,
                                centeredSlides: true,
                                autoplay: {
                                    delay: 1500,
                                    disableOnInteraction: false
                                },
                                pagination: {
                                    el: paginationEl,
                                    clickable: true
                                },
                                breakpoints: {
                                    1699: { slidesPerView: 4 },
                                    1399: { slidesPerView: 3.2 },
                                    1300: { slidesPerView: 2.8 },
                                    1199: { slidesPerView: 2.8 },
                                    991: { slidesPerView: 3 },
                                    767: { slidesPerView: 2.5 },
                                    575: { slidesPerView: 1.8 },
                                    0: { slidesPerView: 1.4 }
                                }
                            });
                        });
                    };

                    $(window).on("elementor/frontend/init", function () {
                        elementorFrontend.hooks.addAction("frontend/element_ready/ft-testimonial1.default", initTestimonialSlider);
                    });

                    $(function () {
                        initTestimonialSlider($(document));
                    });
                })(jQuery);
            </script>
        <?php endif; ?>









<?php
    }
} ?>