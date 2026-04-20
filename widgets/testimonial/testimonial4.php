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

class FT_Testimonial4_Widget extends \Elementor\Widget_Base
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
        return 'ft-testimonial4';
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
        return esc_html__('FT Testimonial 4', 'ftelements');
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
                'label' => esc_html__('Section Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label'       => esc_html__('Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Testimonials', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__("Parents' Words Are The Key\nTo Happy Kids", 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'shape_images_section',
            [
                'label' => esc_html__('Shape Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'tree_shape_image',
            [
                'label'   => esc_html__('Tree Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'right_shape_image',
            [
                'label'   => esc_html__('Right Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'bee_shape_image',
            [
                'label'   => esc_html__('Bee Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

        $repeater = new Repeater();

        $repeater->add_control(
            'testimonial_style',
            [
                'label'   => esc_html__('Card Style', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    ''        => esc_html__('Style 1', 'ftelements'),
                    'style-2' => esc_html__('Style 2', 'ftelements'),
                    'style-3' => esc_html__('Style 3', 'ftelements'),
                ],
            ]
        );

        $repeater->add_control(
            'bg_class',
            [
                'label'   => esc_html__('Background Class', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    ''     => esc_html__('Default', 'ftelements'),
                    'bg-2' => esc_html__('BG 2', 'ftelements'),
                    'bg-3' => esc_html__('BG 3', 'ftelements'),
                ],
            ]
        );

        $repeater->add_control(
            'quote_image',
            [
                'label'   => esc_html__('Quote Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'review_text',
            [
                'label'       => esc_html__('Review Text', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('Corquent per conubia nostra, per inceptos himenaeos. Suspendisse gravida vitae nisi Class aptent taciti sociosqu ad litora', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'client_name',
            [
                'label'       => esc_html__('Client Name', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Esther Howard', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->start_controls_section(
            'testimonials_section',
            [
                'label' => esc_html__('Testimonials', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'testimonials',
            [
                'label'       => esc_html__('Items', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    [
                        'testimonial_style' => '',
                        'bg_class'          => '',
                        'review_text'       => esc_html__('Corquent per conubia nostra, per inceptos himenaeos. Suspendisse gravida vitae nisi Class aptent taciti sociosqu ad litora', 'ftelements'),
                        'client_name'       => esc_html__('Esther Howard', 'ftelements'),
                        'quote_image'       => ['url' => Utils::get_placeholder_image_src()],
                    ],
                    [
                        'testimonial_style' => 'style-2',
                        'bg_class'          => 'bg-2',
                        'review_text'       => esc_html__('Corquent per conubia nostra, per inceptos himenaeos. Suspendisse gravida vitae nisi Class aptent taciti sociosqu ad litora', 'ftelements'),
                        'client_name'       => esc_html__('Wade Warren', 'ftelements'),
                        'quote_image'       => ['url' => Utils::get_placeholder_image_src()],
                    ],
                    [
                        'testimonial_style' => 'style-3',
                        'bg_class'          => 'bg-3',
                        'review_text'       => esc_html__('Corquent per conubia nostra, per inceptos himenaeos. Suspendisse gravida vitae nisi Class aptent taciti sociosqu ad litora', 'ftelements'),
                        'client_name'       => esc_html__('Jenny Wilson', 'ftelements'),
                        'quote_image'       => ['url' => Utils::get_placeholder_image_src()],
                    ],
                ],
                'title_field' => '{{{ client_name }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'selector' => '{{WRAPPER}} .testimonial-section-4',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-section-4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_heading',
            [
                'label' => esc_html__('Heading', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-4 .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-4 .sec-sub',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-4 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-4 .section-title h2',
            ]
        );

        $this->add_responsive_control(
            'heading_space_bottom',
            [
                'label'      => esc_html__('Bottom Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .section-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_slider',
            [
                'label' => esc_html__('Slider', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'slider_padding',
            [
                'label'      => esc_html__('Slider Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .testimonial-slider-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'slide_padding',
            [
                'label'      => esc_html__('Slide Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .testimonial-slider-4 .swiper-slide' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'slide_min_height',
            [
                'label'      => esc_html__('Slide Min Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .testimonial-slider-4 .swiper-slide' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_card',
            [
                'label' => esc_html__('Testimonial Card', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'card_background',
                'selector' => '{{WRAPPER}} .testimonial-section-4 .testimonial-items-4',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'card_border',
                'selector' => '{{WRAPPER}} .testimonial-section-4 .testimonial-items-4',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .testimonial-items-4' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-section-4 .testimonial-items-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-section-4 .testimonial-items-4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_content',
            [
                'label' => esc_html__('Card Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'review_text_color',
            [
                'label'     => esc_html__('Review Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-4 .testimonial-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'review_text_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-4 .testimonial-content p',
            ]
        );

        $this->add_responsive_control(
            'review_text_margin',
            [
                'label'      => esc_html__('Review Text Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .testimonial-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'name_color',
            [
                'label'     => esc_html__('Name Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-4 .testimonial-content h6' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'name_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-4 .testimonial-content h6',
            ]
        );

        $this->add_responsive_control(
            'name_margin',
            [
                'label'      => esc_html__('Name Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .testimonial-content h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_quote_image',
            [
                'label' => esc_html__('Quote Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'quote_image_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'quote_image_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .icon img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'quote_image_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'quote_image_border',
                'selector' => '{{WRAPPER}} .testimonial-section-4 .icon img',
            ]
        );

        $this->add_responsive_control(
            'quote_image_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .icon img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'quote_image_css_filters',
                'selector' => '{{WRAPPER}} .testimonial-section-4 .icon img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_dots',
            [
                'label' => esc_html__('Slider Dots', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'dot_color',
            [
                'label'     => esc_html__('Dot Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-4 .swiper-dot .dot .swiper-pagination-bullet' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'dot_active_color',
            [
                'label'     => esc_html__('Active Dot Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-4 .swiper-dot .dot .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'dot_size',
            [
                'label'      => esc_html__('Dot Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .swiper-dot .dot .swiper-pagination-bullet' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'dot_gap',
            [
                'label'      => esc_html__('Dot Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .swiper-dot .dot' => 'display: flex; justify-content: center; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_shapes',
            [
                'label' => esc_html__('Shape Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'tree_shape_width',
            [
                'label'      => esc_html__('Tree Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .tree-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'right_shape_width',
            [
                'label'      => esc_html__('Right Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .right-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bee_shape_width',
            [
                'label'      => esc_html__('Bee Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-4 .bee-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'shape_opacity',
            [
                'label'     => esc_html__('Opacity', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 0.1,
                        'max'  => 1,
                        'step' => 0.1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-4 .tree-shape img, {{WRAPPER}} .testimonial-section-4 .right-shape img, {{WRAPPER}} .testimonial-section-4 .bee-shape img' => 'opacity: {{SIZE}};',
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
        $widget_id = 'ft-testimonial4-' . $this->get_id();
        $title = !empty($settings['title']) ? nl2br(esc_html($settings['title'])) : '';
        $testimonials = !empty($settings['testimonials']) && is_array($settings['testimonials']) ? $settings['testimonials'] : [];

        ?>
        <section id="<?php echo esc_attr($widget_id); ?>" class="testimonial-section-4 fix section-padding">
            <div class="tree-shape float-bob-y">
                <?php if (!empty($settings['tree_shape_image']['url'])) : ?>
                    <img src="<?php echo esc_url($settings['tree_shape_image']['url']); ?>" alt="<?php echo esc_attr__('Tree Shape', 'ftelements'); ?>">
                <?php endif; ?>
            </div>
            <div class="right-shape">
                <?php if (!empty($settings['right_shape_image']['url'])) : ?>
                    <img src="<?php echo esc_url($settings['right_shape_image']['url']); ?>" alt="<?php echo esc_attr__('Right Shape', 'ftelements'); ?>">
                <?php endif; ?>
            </div>
            <div class="bee-shape float-bob-y">
                <?php if (!empty($settings['bee_shape_image']['url'])) : ?>
                    <img src="<?php echo esc_url($settings['bee_shape_image']['url']); ?>" alt="<?php echo esc_attr__('Bee Shape', 'ftelements'); ?>">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['subtitle']); ?></span>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                        <?php echo wp_kses($title, ['br' => []]); ?>
                    </h2>
                </div>
                <div class="swiper testimonial-slider-4">
                    <div class="swiper-wrapper">
                        <?php foreach ($testimonials as $item) : ?>
                            <?php
                            $testimonial_style = !empty($item['testimonial_style']) ? ' ' . sanitize_html_class($item['testimonial_style']) : '';
                            $bg_class = !empty($item['bg_class']) ? ' ' . sanitize_html_class($item['bg_class']) : '';
                            ?>
                            <div class="swiper-slide">
                                <div class="testimonial-items-4<?php echo esc_attr($testimonial_style); ?>">
                                    <div class="icon">
                                        <?php if (!empty($item['quote_image']['url'])) : ?>
                                            <img src="<?php echo esc_url($item['quote_image']['url']); ?>" alt="<?php echo esc_attr($item['client_name']); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="testimonial-bg<?php echo esc_attr($bg_class); ?>"></div>
                                    <div class="testimonial-content">
                                        <p>
                                            <?php echo esc_html($item['review_text']); ?>
                                        </p>
                                        <h6><?php echo esc_html($item['client_name']); ?></h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-dot text-center pt-5">
                        <div class="dot"></div>
                    </div>
                </div>
            </div>
        </section>

        <?php if (\Elementor\Plugin::$instance->editor->is_edit_mode()) : ?>
            <script>
                (function ($) {
                    "use strict";

                    const widgetSelector = "#<?php echo esc_js($widget_id); ?>";

                    const initTestimonialSlider4 = function ($scope) {
                        if (typeof Swiper === "undefined") {
                            return;
                        }

                        const $widget = $scope && $scope.length ? $scope.find(widgetSelector) : $(widgetSelector);
                        if (!$widget.length) {
                            return;
                        }

                        $widget.each(function () {
                            const sliderEl = this.querySelector(".testimonial-slider-4");
                            if (!sliderEl) {
                                return;
                            }

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
                                    disableOnInteraction: false,
                                },
                                pagination: {
                                    el: paginationEl,
                                    clickable: true,
                                },
                                breakpoints: {
                                    1199: {
                                        slidesPerView: 3,
                                    },
                                    767: {
                                        slidesPerView: 2,
                                    },
                                    575: {
                                        slidesPerView: 1,
                                    },
                                    0: {
                                        slidesPerView: 1,
                                    },
                                },
                            });
                        });
                    };

                    $(window).on("elementor/frontend/init", function () {
                        elementorFrontend.hooks.addAction("frontend/element_ready/ft-testimonial4.default", initTestimonialSlider4);
                    });

                    $(function () {
                        initTestimonialSlider4($(document));
                    });
                })(jQuery);
            </script>
        <?php endif; ?>









<?php
    }
} ?>