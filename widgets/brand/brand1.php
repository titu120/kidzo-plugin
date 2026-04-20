<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_Brand1_Widget extends \Elementor\Widget_Base
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
        return 'ft-brand1';
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
        return esc_html__('FT Brand 1', 'ftelements');
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
            'section_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => esc_html__('Section Title', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our other\'s brand', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'brand_image',
            [
                'label' => esc_html__('Brand Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'brand_hover_image',
            [
                'label' => esc_html__('Brand Hover Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'brand_alt_text',
            [
                'label' => esc_html__('Alt Text', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Brand logo', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'brand_list',
            [
                'label' => esc_html__('Brand Items', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ brand_alt_text }}}',
                'default' => [
                    [
                        'brand_image' => ['url' => Utils::get_placeholder_image_src()],
                        'brand_hover_image' => ['url' => Utils::get_placeholder_image_src()],
                        'brand_alt_text' => esc_html__('Brand 1', 'ftelements'),
                    ],
                    [
                        'brand_image' => ['url' => Utils::get_placeholder_image_src()],
                        'brand_hover_image' => ['url' => Utils::get_placeholder_image_src()],
                        'brand_alt_text' => esc_html__('Brand 2', 'ftelements'),
                    ],
                    [
                        'brand_image' => ['url' => Utils::get_placeholder_image_src()],
                        'brand_hover_image' => ['url' => Utils::get_placeholder_image_src()],
                        'brand_alt_text' => esc_html__('Brand 3', 'ftelements'),
                    ],
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
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
                    '{{WRAPPER}} .brand-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .brand-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .brand-section',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .brand-title',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .brand-title' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .brand-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_item',
            [
                'label' => esc_html__('Brand Item', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'item_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .brand-box-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .brand-box-1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'item_border',
                'selector' => '{{WRAPPER}} .brand-box-1',
            ]
        );

        $this->add_responsive_control(
            'item_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .brand-box-1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'item_background_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .brand-box-1' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_image',
            [
                'label' => esc_html__('Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'image_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1000],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .brand-img-1 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_height',
            [
                'label' => esc_html__('Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1000],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .brand-img-1 img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'image_object_fit',
            [
                'label' => esc_html__('Object Fit', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'cover' => esc_html__('Cover', 'ftelements'),
                    'contain' => esc_html__('Contain', 'ftelements'),
                    'fill' => esc_html__('Fill', 'ftelements'),
                    'none' => esc_html__('None', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .brand-img-1 img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->start_controls_tabs('image_effect_tabs');

        $this->start_controls_tab(
            'image_effect_tab_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'image_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0.1, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .brand-img-1 img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'image_css_filters',
                'selector' => '{{WRAPPER}} .brand-img-1 img',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'image_effect_tab_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'image_hover_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0.1, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .brand-box-1:hover .brand-img-1 img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'image_hover_css_filters',
                'selector' => '{{WRAPPER}} .brand-box-1:hover .brand-img-1 img',
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
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
        $title = !empty($settings['section_title']) ? $settings['section_title'] : '';
        $brands = !empty($settings['brand_list']) ? $settings['brand_list'] : [];
        $widget_id = 'ft-brand1-' . $this->get_id();

        ?>




        <div id="<?php echo esc_attr($widget_id); ?>" class="brand-section fix section-padding section-padding">
            <div class="container">
                <?php if (!empty($title)) : ?>
                    <p class="brand-title text-center wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html($title); ?></p>
                <?php endif; ?>
                <div class="swiper brand-slider wow fadeInUp" data-wow-delay=".5s">
                    <div class="swiper-wrapper">
                        <?php foreach ($brands as $brand) :
                            $brand_image = !empty($brand['brand_image']['url']) ? $brand['brand_image']['url'] : Utils::get_placeholder_image_src();
                            $brand_hover_image = !empty($brand['brand_hover_image']['url']) ? $brand['brand_hover_image']['url'] : $brand_image;
                            $brand_alt_text = !empty($brand['brand_alt_text']) ? $brand['brand_alt_text'] : esc_html__('Brand logo', 'ftelements');
                        ?>
                            <div class="swiper-slide">
                                <div class="brand-box-1">
                                    <span class="brand-img-1">
                                        <img src="<?php echo esc_url($brand_image); ?>" alt="<?php echo esc_attr($brand_alt_text); ?>">
                                    </span>
                                    <span class="brand-img-1">
                                        <img src="<?php echo esc_url($brand_hover_image); ?>" alt="<?php echo esc_attr($brand_alt_text); ?>">
                                    </span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if (\Elementor\Plugin::$instance->editor->is_edit_mode()) : ?>
            <script type="text/javascript">
                (function ($) {
                    "use strict";

                    const widgetSelector = "#<?php echo esc_js($widget_id); ?>";

                    var initBrandSlider = function ($scope) {
                        if (typeof Swiper === "undefined") {
                            return;
                        }

                        const $widget = $scope && $scope.length ? $scope.find(widgetSelector) : $(widgetSelector);
                        if (!$widget.length) {
                            return;
                        }

                        $widget.each(function () {
                            const sliderEl = this.querySelector(".brand-slider");
                            if (!sliderEl) {
                                return;
                            }

                            if (sliderEl.swiper) {
                                sliderEl.swiper.destroy(true, true);
                            }

                            new Swiper(sliderEl, {
                                spaceBetween: 50,
                                speed: 1300,
                                loop: true,
                                autoplay: {
                                    delay: 2000,
                                    disableOnInteraction: false
                                },
                                breakpoints: {
                                    1399: { slidesPerView: 7 },
                                    1199: { slidesPerView: 5.5 },
                                    991: { slidesPerView: 4.5 },
                                    767: { slidesPerView: 3.3 },
                                    575: { slidesPerView: 2 },
                                    0: { slidesPerView: 1 }
                                }
                            });
                        });
                    };

                    $(window).on("elementor/frontend/init", function () {
                        elementorFrontend.hooks.addAction("frontend/element_ready/ft-brand1.default", initBrandSlider);
                    });

                    $(function () {
                        initBrandSlider($(document));
                    });
                })(jQuery);
            </script>
        <?php endif; ?>









<?php
    }
} ?>