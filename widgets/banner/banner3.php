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

class FT_Banner3_Widget extends \Elementor\Widget_Base
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
        return 'ft-banner3';
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
        return esc_html__('FT Banner 3', 'ftelements');
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
        $theme_uri = get_template_directory_uri();

        $this->start_controls_section(
            'ft_banner3_section_settings',
            [
                'label' => esc_html__('Section Settings', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_class',
            [
                'label' => esc_html__('Section Class', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => 'hero-section-3',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner3_images',
            [
                'label' => esc_html__('Images', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'slider_bg_1',
            [
                'label' => esc_html__('Slider Background 1', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/hero-slider-bg.jpg',
                ],
            ]
        );

        $this->add_control(
            'slider_bg_2',
            [
                'label' => esc_html__('Slider Background 2', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/hero-slider-bg2.jpg',
                ],
            ]
        );

        $this->add_control(
            'slider_bg_3',
            [
                'label' => esc_html__('Slider Background 3', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/hero-slider-bg3.jpg',
                ],
            ]
        );

        $this->add_control(
            'button_arrow_image',
            [
                'label' => esc_html__('Button Arrow Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/arrow1.svg',
                ],
            ]
        );

        $this->add_control(
            'phone_icon_image',
            [
                'label' => esc_html__('Phone Icon Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/telephone.svg',
                ],
            ]
        );

        $this->add_control(
            'line_shape_image',
            [
                'label' => esc_html__('Line Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/line.png',
                ],
            ]
        );

        $this->add_control(
            'hero_line_image',
            [
                'label' => esc_html__('Hero Line Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/hero-line.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner3_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'banner_min_height',
            [
                'label' => esc_html__('Min Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'range' => [
                    'px' => ['min' => 300, 'max' => 1400],
                    'vh' => ['min' => 40, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-3' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_max_width',
            [
                'label' => esc_html__('Content Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 300, 'max' => 1200],
                    '%' => ['min' => 30, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_alignment',
            [
                'label' => esc_html__('Content Alignment', 'ftelements'),
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
                    '{{WRAPPER}} .hero-content' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Section Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .hero-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner3_subtitle_style',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .sub-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .hero-content .sub-text',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .sub-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner3_title_style',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .hero-content h1',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner3_description_style',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
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
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner3_button_style',
            [
                'label' => esc_html__('Button', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-button .theme-btn .theme-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .hero-button .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_hover_text_color',
            [
                'label' => esc_html__('Hover Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-button .theme-btn:hover .theme-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .hero-button .theme-btn:hover .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_text_typography',
                'selector' => '{{WRAPPER}} .hero-button .theme-btn .theme-text, {{WRAPPER}} .hero-button .theme-btn .theme-text2',
            ]
        );

        $this->add_control(
            'button_bg_fill',
            [
                'label' => esc_html__('Button Background Fill', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-button .theme-btn .theme-bg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_icon_size',
            [
                'label' => esc_html__('Arrow Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 10, 'max' => 60],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-button .theme-btn img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_icon_spacing',
            [
                'label' => esc_html__('Arrow Spacing', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 40],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-button .theme-btn img' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner3_call_style',
            [
                'label' => esc_html__('Call Box', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'call_label_color',
            [
                'label' => esc_html__('Label Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .author-icon .content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'call_label_typography',
                'selector' => '{{WRAPPER}} .author-icon .content span',
            ]
        );

        $this->add_control(
            'call_number_color',
            [
                'label' => esc_html__('Number Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .author-icon .content .number' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'call_number_hover_color',
            [
                'label' => esc_html__('Number Hover Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .author-icon .content .number:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'call_number_typography',
                'selector' => '{{WRAPPER}} .author-icon .content .number',
            ]
        );

        $this->add_control(
            'call_icon_bg_color',
            [
                'label' => esc_html__('Icon Background', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .author-icon .icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'call_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 16, 'max' => 120],
                ],
                'selectors' => [
                    '{{WRAPPER}} .author-icon .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'call_icon_radius',
            [
                'label' => esc_html__('Icon Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .author-icon .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner3_social_style',
            [
                'label' => esc_html__('Social Icons', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'social_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icon a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_icon_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icon a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_icon_hover_color',
            [
                'label' => esc_html__('Hover Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icon a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_icon_hover_bg_color',
            [
                'label' => esc_html__('Hover Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icon a:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'social_icon_typography',
                'selector' => '{{WRAPPER}} .social-icon a',
            ]
        );

        $this->add_responsive_control(
            'social_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 10, 'max' => 60],
                ],
                'selectors' => [
                    '{{WRAPPER}} .social-icon a' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'social_icon_box_size',
            [
                'label' => esc_html__('Box Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 24, 'max' => 120],
                ],
                'selectors' => [
                    '{{WRAPPER}} .social-icon a' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'social_icon_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .social-icon a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $widget_id = 'ft-banner3-' . $this->get_id();

        $section_class = !empty($settings['section_class']) ? $settings['section_class'] : 'hero-section-3';

        $slider_bg_1 = !empty($settings['slider_bg_1']['url']) ? $settings['slider_bg_1']['url'] : $theme_uri . '/assets/img/home-3/hero-slider-bg.jpg';
        $slider_bg_2 = !empty($settings['slider_bg_2']['url']) ? $settings['slider_bg_2']['url'] : $theme_uri . '/assets/img/home-3/hero-slider-bg2.jpg';
        $slider_bg_3 = !empty($settings['slider_bg_3']['url']) ? $settings['slider_bg_3']['url'] : $theme_uri . '/assets/img/home-3/hero-slider-bg3.jpg';
        $button_arrow_image = !empty($settings['button_arrow_image']['url']) ? $settings['button_arrow_image']['url'] : $theme_uri . '/assets/img/icon/arrow1.svg';
        $phone_icon_image = !empty($settings['phone_icon_image']['url']) ? $settings['phone_icon_image']['url'] : $theme_uri . '/assets/img/icon/telephone.svg';
        $line_shape_image = !empty($settings['line_shape_image']['url']) ? $settings['line_shape_image']['url'] : $theme_uri . '/assets/img/home-3/line.png';
        $hero_line_image = !empty($settings['hero_line_image']['url']) ? $settings['hero_line_image']['url'] : $theme_uri . '/assets/img/home-3/hero-line.png';

        ?>





        <section id="<?php echo esc_attr($widget_id); ?>" class="<?php echo esc_attr($section_class); ?>">
            <div class="swiper banner-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-3">
                            <div class="hero-bg bg-cover" style="background-image: url('<?php echo esc_url($slider_bg_1); ?>');">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="hero-content">
                                            <span class="sub-text">First impression & quick trust</span>
                                            <h1>
                                                Trusted & Loving <br>
                                                Private Nannies for Your
                                                Little Ones
                                            </h1>
                                            <p>
                                                Professional, background-checked nannies providing safe, caring & personalized grow in a safe, loving, and stimulating environment. childcare at your home.
                                            </p>
                                        </div>
                                        <div class="hero-button">
                                            <a href="contact.html" class="theme-btn">
                                                <span class="theme-bg">
                                                    <svg width="225" height="59" viewBox="0 0 225 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 20.1062C0 11.6265 6.61558 4.6195 15.0813 4.13258L86.9318 0L209.579 4.44155C218.185 4.75319 225 11.8198 225 20.4311V39.4568C225 48.1129 218.116 55.1994 209.463 55.4501L86.9318 59L15.2646 55.7024C6.72303 55.3093 0 48.2699 0 39.7193V20.1062Z" fill="#F39F5F" />
                                                    </svg>

                                                </span>
                                                <span class="theme-text">Book a Consultation<img src="<?php echo esc_url($button_arrow_image); ?>" alt=""></span>
                                                <span class="theme-text2">Book a Consultation<img src="<?php echo esc_url($button_arrow_image); ?>" alt=""></span>
                                            </a>
                                            <div class="author-icon">
                                                <div class="icon">
                                                    <img src="<?php echo esc_url($phone_icon_image); ?>" alt="img">
                                                </div>
                                                <div class="content">
                                                    <span>Call Us Now</span>
                                                    <a class="number" href="tel:+11123065498">+11 123 0654 98</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-3">
                            <div class="hero-bg bg-cover" style="background-image: url('<?php echo esc_url($slider_bg_2); ?>');">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="hero-content">
                                            <span class="sub-text">First impression & quick trust</span>
                                            <h1>
                                                Trusted & Loving <br>
                                                Private Nannies for Your
                                                Little Ones
                                            </h1>
                                            <p>
                                                Professional, background-checked nannies providing safe, caring & personalized grow in a safe, loving, and stimulating environment. childcare at your home.
                                            </p>
                                        </div>
                                        <div class="hero-button">
                                            <a href="contact.html" class="theme-btn">
                                                <span class="theme-bg">
                                                    <svg width="225" height="59" viewBox="0 0 225 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 20.1062C0 11.6265 6.61558 4.6195 15.0813 4.13258L86.9318 0L209.579 4.44155C218.185 4.75319 225 11.8198 225 20.4311V39.4568C225 48.1129 218.116 55.1994 209.463 55.4501L86.9318 59L15.2646 55.7024C6.72303 55.3093 0 48.2699 0 39.7193V20.1062Z" fill="#F39F5F" />
                                                    </svg>

                                                </span>
                                                <span class="theme-text">Book a Consultation<img src="<?php echo esc_url($button_arrow_image); ?>" alt=""></span>
                                                <span class="theme-text2">Book a Consultation<img src="<?php echo esc_url($button_arrow_image); ?>" alt=""></span>
                                            </a>
                                            <div class="author-icon">
                                                <div class="icon">
                                                    <img src="<?php echo esc_url($phone_icon_image); ?>" alt="img">
                                                </div>
                                                <div class="content">
                                                    <span>Call Us Now</span>
                                                    <a class="number" href="tel:+11123065498">+11 123 0654 98</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-3">
                            <div class="hero-bg bg-cover" style="background-image: url('<?php echo esc_url($slider_bg_3); ?>');">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="hero-content">
                                            <span class="sub-text">First impression & quick trust</span>
                                            <h1>
                                                Trusted & Loving <br>
                                                Private Nannies for Your
                                                Little Ones
                                            </h1>
                                            <p>
                                                Professional, background-checked nannies providing safe, caring & personalized grow in a safe, loving, and stimulating environment. childcare at your home.
                                            </p>
                                        </div>
                                        <div class="hero-button">
                                            <a href="contact.html" class="theme-btn">
                                                <span class="theme-bg">
                                                    <svg width="225" height="59" viewBox="0 0 225 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 20.1062C0 11.6265 6.61558 4.6195 15.0813 4.13258L86.9318 0L209.579 4.44155C218.185 4.75319 225 11.8198 225 20.4311V39.4568C225 48.1129 218.116 55.1994 209.463 55.4501L86.9318 59L15.2646 55.7024C6.72303 55.3093 0 48.2699 0 39.7193V20.1062Z" fill="#F39F5F" />
                                                    </svg>

                                                </span>
                                                <span class="theme-text">Book a Consultation<img src="<?php echo esc_url($button_arrow_image); ?>" alt=""></span>
                                                <span class="theme-text2">Book a Consultation<img src="<?php echo esc_url($button_arrow_image); ?>" alt=""></span>
                                            </a>
                                            <div class="author-icon">
                                                <div class="icon">
                                                    <img src="<?php echo esc_url($phone_icon_image); ?>" alt="img">
                                                </div>
                                                <div class="content">
                                                    <span>Call Us Now</span>
                                                    <a class="number" href="tel:+11123065498">+11 123 0654 98</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-icon d-grid align-items-center">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
            <div class="line-shape">
                <img src="<?php echo esc_url($line_shape_image); ?>" alt="img">
            </div>
            <div class="hero-line">
                <img src="<?php echo esc_url($hero_line_image); ?>" alt="">
            </div>
            <div class="swiper-dots">
                <div class="hero-dot"></div>
            </div>
        </section>

        <?php if (\Elementor\Plugin::$instance->editor->is_edit_mode()) : ?>
            <script>
                (function ($) {
                    "use strict";

                    const widgetSelector = "#<?php echo esc_js($widget_id); ?>";

                    const initBanner3Slider = function ($scope) {
                        if (typeof Swiper === "undefined") {
                            return;
                        }

                        const $widget = $scope && $scope.length ? $scope.find(widgetSelector) : $(widgetSelector);
                        if (!$widget.length) {
                            return;
                        }

                        $widget.each(function () {
                            const sliderEl = this.querySelector(".banner-active");
                            if (!sliderEl) {
                                return;
                            }

                            // Re-init safely when Elementor re-renders live preview.
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
                                speed: 500
                            });
                        });
                    };

                    $(window).on("elementor/frontend/init", function () {
                        elementorFrontend.hooks.addAction("frontend/element_ready/ft-banner3.default", initBanner3Slider);
                    });

                    $(function () {
                        initBanner3Slider($(document));
                    });
                })(jQuery);
            </script>
        <?php endif; ?>








<?php
    }
} ?>