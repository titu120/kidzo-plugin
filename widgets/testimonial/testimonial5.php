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

class FT_Testimonial5_Widget extends \Elementor\Widget_Base
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
        return 'ft-testimonial5';
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
        return esc_html__('FT Testimonial 5', 'ftelements');
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
            'girl_shape_image',
            [
                'label'   => esc_html__('Girl Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-2/girl-shape.png',
                ],
            ]
        );

        $this->add_control(
            'zirap_shape_image',
            [
                'label'   => esc_html__('Zirap Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-2/zirap.png',
                ],
            ]
        );

        $this->add_control(
            'card_bg_image',
            [
                'label'   => esc_html__('Card Background Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-2/testi-bg.png',
                ],
            ]
        );

        $this->end_controls_section();

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
            'review_text',
            [
                'label'       => esc_html__('Review Text', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('This school has provided a safe, caring, and joyful environment for my child.', 'ftelements'),
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
                        'client_image' => ['url' => 'assets/img/home-2/client-1.png'],
                        'client_title' => esc_html__('Parent of Nursery Student', 'ftelements'),
                        'review_text'  => esc_html__('This school has provided a safe, caring, and joyful environment for my child.', 'ftelements'),
                    ],
                    [
                        'client_image' => ['url' => 'assets/img/home-2/client-2.png'],
                        'client_title' => esc_html__('Parent of Nursery Student', 'ftelements'),
                        'review_text'  => esc_html__('This school has provided a safe, caring, and joyful environment for my child.', 'ftelements'),
                    ],
                    [
                        'client_image' => ['url' => 'assets/img/home-2/client-3.png'],
                        'client_title' => esc_html__('Parent of Nursery Student', 'ftelements'),
                        'review_text'  => esc_html__('This school has provided a safe, caring, and joyful environment for my child.', 'ftelements'),
                    ],
                    [
                        'client_image' => ['url' => 'assets/img/home-2/client-4.png'],
                        'client_title' => esc_html__('Parent of Nursery Student', 'ftelements'),
                        'review_text'  => esc_html__('This school has provided a safe, caring, and joyful environment for my child.', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ client_title }}}',
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
                'selector' => '{{WRAPPER}} .testimonial-section-2',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-section-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-section-2 .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .sec-sub',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .section-title h2',
            ]
        );

        $this->add_responsive_control(
            'heading_margin',
            [
                'label'      => esc_html__('Heading Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'slider_margin',
            [
                'label'      => esc_html__('Slider Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-slider-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-slider-2 .swiper-slide' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-slider-2 .swiper-slide' => 'min-height: {{SIZE}}{{UNIT}};',
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
                'selector' => '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'card_border',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_client_image',
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
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .client-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'client_image_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .client-image img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'client_image_border',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .client-image img',
            ]
        );

        $this->add_responsive_control(
            'client_image_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .client-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'client_image_css_filters',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .client-image img',
            ]
        );

        $this->add_responsive_control(
            'client_image_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .client-image' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_card_content',
            [
                'label' => esc_html__('Card Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'client_title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'client_title_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content .title',
            ]
        );

        $this->add_responsive_control(
            'client_title_margin',
            [
                'label'      => esc_html__('Title Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'review_text_color',
            [
                'label'     => esc_html__('Review Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'review_text_typography',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content p',
            ]
        );

        $this->add_responsive_control(
            'review_text_margin',
            [
                'label'      => esc_html__('Review Text Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .testimonial-box-items-2 .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_background_image',
            [
                'label' => esc_html__('Card Background Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'card_bg_image_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .bg-thumb img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_bg_image_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .bg-thumb img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'card_bg_image_css_filters',
                'selector' => '{{WRAPPER}} .testimonial-section-2 .bg-thumb img',
            ]
        );

        $this->add_responsive_control(
            'card_bg_image_opacity',
            [
                'label'      => esc_html__('Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => 0.1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .bg-thumb img' => 'opacity: {{SIZE}};',
                ],
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
                    '{{WRAPPER}} .testimonial-section-2 .swiper-dot .dot01 .swiper-pagination-bullet' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'dot_active_color',
            [
                'label'     => esc_html__('Active Dot Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-section-2 .swiper-dot .dot01 .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background-color: {{VALUE}};',
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
                    '{{WRAPPER}} .testimonial-section-2 .swiper-dot .dot01 .swiper-pagination-bullet' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-section-2 .swiper-dot .dot01' => 'display: flex; justify-content: center; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'dot_margin',
            [
                'label'      => esc_html__('Dots Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .swiper-dot' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_shape_images',
            [
                'label' => esc_html__('Shape Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'girl_shape_width',
            [
                'label'      => esc_html__('Girl Shape Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .girl-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'zirap_shape_width',
            [
                'label'      => esc_html__('Zirap Shape Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .zirap-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape_opacity',
            [
                'label'      => esc_html__('Shape Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => 0.1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .testimonial-section-2 .girl-shape img, {{WRAPPER}} .testimonial-section-2 .zirap-shape img' => 'opacity: {{SIZE}};',
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
        $widget_id = 'ft-testimonial5-' . $this->get_id();
        $title = !empty($settings['title']) ? nl2br(esc_html($settings['title'])) : '';
        $testimonials = !empty($settings['testimonials']) && is_array($settings['testimonials']) ? $settings['testimonials'] : [];

        ?>



        <section id="<?php echo esc_attr($widget_id); ?>" class="testimonial-section-2 fix section-padding">
            <div class="girl-shape float-bob-y">
                <?php if (!empty($settings['girl_shape_image']['url'])) : ?>
                    <img src="<?php echo esc_url($settings['girl_shape_image']['url']); ?>" alt="<?php echo esc_attr__('Girl Shape', 'ftelements'); ?>">
                <?php endif; ?>
            </div>
            <div class="zirap-shape float-bob-y">
                <?php if (!empty($settings['zirap_shape_image']['url'])) : ?>
                    <img src="<?php echo esc_url($settings['zirap_shape_image']['url']); ?>" alt="<?php echo esc_attr__('Zirap Shape', 'ftelements'); ?>">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['subtitle']); ?></span>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                        <?php echo wp_kses($title, ['br' => []]); ?>
                    </h2>
                </div>
                <div class="swiper testimonial-slider-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="swiper-wrapper">
                        <?php foreach ($testimonials as $item) : ?>
                            <div class="swiper-slide">
                                <div class="testimonial-box-items-2">
                                    <div class="bg-thumb">
                                        <?php if (!empty($settings['card_bg_image']['url'])) : ?>
                                            <img src="<?php echo esc_url($settings['card_bg_image']['url']); ?>" alt="<?php echo esc_attr__('Testimonial Background', 'ftelements'); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="content">
                                        <div class="client-image">
                                            <?php if (!empty($item['client_image']['url'])) : ?>
                                                <img src="<?php echo esc_url($item['client_image']['url']); ?>" alt="<?php echo esc_attr($item['client_title']); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="title"><?php echo esc_html($item['client_title']); ?></h3>
                                        <p>
                                            <?php echo esc_html($item['review_text']); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-dot text-center mt-5">
                        <div class="dot01"></div>
                    </div>
                </div>
            </div>
        </section>

        <?php if (\Elementor\Plugin::$instance->editor->is_edit_mode()) : ?>
            <script>
                (function ($) {
                    "use strict";

                    const widgetSelector = "#<?php echo esc_js($widget_id); ?>";

                    const initTestimonialSlider5 = function ($scope) {
                        if (typeof Swiper === "undefined") {
                            return;
                        }

                        const $widget = $scope && $scope.length ? $scope.find(widgetSelector) : $(widgetSelector);
                        if (!$widget.length) {
                            return;
                        }

                        $widget.each(function () {
                            const sliderEl = this.querySelector(".testimonial-slider-2");
                            if (!sliderEl) {
                                return;
                            }

                            if (sliderEl.swiper) {
                                sliderEl.swiper.destroy(true, true);
                            }

                            const paginationEl = this.querySelector(".dot01");
                            new Swiper(sliderEl, {
                                spaceBetween: 30,
                                speed: 1300,
                                loop: true,
                                autoplay: {
                                    delay: 1500,
                                    disableOnInteraction: false,
                                },
                                pagination: {
                                    el: paginationEl,
                                    clickable: true,
                                },
                                breakpoints: {
                                    1399: { slidesPerView: 4 },
                                    1199: { slidesPerView: 3 },
                                    991: { slidesPerView: 3 },
                                    767: { slidesPerView: 2 },
                                    575: { slidesPerView: 1.4 },
                                    0: { slidesPerView: 1 },
                                },
                            });
                        });
                    };

                    $(window).on("elementor/frontend/init", function () {
                        elementorFrontend.hooks.addAction("frontend/element_ready/ft-testimonial5.default", initTestimonialSlider5);
                    });

                    $(function () {
                        initTestimonialSlider5($(document));
                    });
                })(jQuery);
            </script>
        <?php endif; ?>










<?php
    }
} ?>