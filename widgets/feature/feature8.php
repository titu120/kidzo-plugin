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

class FT_Feature8_Widget extends \Elementor\Widget_Base
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
        return 'ft-feature8';
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
        return esc_html__('FT Feature 8', 'ftelements');
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
            'ft_feature8_content_section',
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
                'default'     => esc_html__('Our Values', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('Our Program Nurtures Your Child\'s Inner Confidence, Equipping Them With The Essential Skills To Shine Beyond School', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'section_description',
            [
                'label'       => esc_html__('Description', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('A nurturing sanctuary where curiosity takes root, confidence blooms, and every child is joyfully celebrated for who they are and the bright future they will someday become together', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label'       => esc_html__('Button Text', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Book a Consultation', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label'         => esc_html__('Button Link', 'ftelements'),
                'type'          => Controls_Manager::URL,
                'placeholder'   => esc_url(home_url('/')),
                'show_external' => true,
                'default'       => [
                    'url' => '#',
                ],
            ]
        );

        $this->add_control(
            'call_label',
            [
                'label'       => esc_html__('Call Label', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Call Us Now', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'call_number',
            [
                'label'       => esc_html__('Call Number', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('+11 123 0654 98', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'call_link',
            [
                'label'         => esc_html__('Call Link', 'ftelements'),
                'type'          => Controls_Manager::URL,
                'placeholder'   => esc_html__('tel:+11123065498', 'ftelements'),
                'show_external' => false,
                'default'       => [
                    'url' => 'tel:+11123065498',
                ],
            ]
        );

        $this->add_control(
            'top_bg_image',
            [
                'label'   => esc_html__('Top Background Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'bottom_bg_image',
            [
                'label'   => esc_html__('Bottom Background Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        for ($i = 1; $i <= 9; $i++) {
            $this->add_control(
                'shape' . $i . '_image',
                [
                    'label'   => sprintf(esc_html__('Shape %d Image', 'ftelements'), $i),
                    'type'    => Controls_Manager::MEDIA,
                    'default' => [
                        'url' => Utils::get_placeholder_image_src(),
                    ],
                ]
            );
        }

        $this->add_control(
            'button_arrow_image',
            [
                'label'   => esc_html__('Button Arrow Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'phone_icon_image',
            [
                'label'   => esc_html__('Phone Icon Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature8_style_section',
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
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .value-text-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .value-text-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .value-text-section',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature8_style_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .value-text-section .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .value-text-section .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .value-text-section .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature8_style_title',
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
                    '{{WRAPPER}} .value-text-section .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .value-text-section .sec_title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .value-text-section .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature8_style_description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .value-text-section .section-title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'description_typography',
                'selector' => '{{WRAPPER}} .value-text-section .section-title p',
            ]
        );

        $this->add_responsive_control(
            'description_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .value-text-section .section-title p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature8_style_button',
            [
                'label' => esc_html__('Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'button_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .value-text-section .theme-btn' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .value-text-section .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'button_border',
                'selector' => '{{WRAPPER}} .value-text-section .theme-btn',
            ]
        );

        $this->add_responsive_control(
            'button_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .value-text-section .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('button_text_tabs');

        $this->start_controls_tab(
            'button_text_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .value-text-section .theme-btn .theme-text'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .value-text-section .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'button_text_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'button_text_hover_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .value-text-section .theme-btn:hover .theme-text'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .value-text-section .theme-btn:hover .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature8_style_call',
            [
                'label' => esc_html__('Call Info', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'call_label_color',
            [
                'label'     => esc_html__('Label Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .value-text-section .author-icon .content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'call_label_typography',
                'selector' => '{{WRAPPER}} .value-text-section .author-icon .content span',
            ]
        );

        $this->add_control(
            'call_number_color',
            [
                'label'     => esc_html__('Number Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .value-text-section .author-icon .content h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'call_number_hover_color',
            [
                'label'     => esc_html__('Number Hover Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .value-text-section .author-icon .content h3 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'call_number_typography',
                'selector' => '{{WRAPPER}} .value-text-section .author-icon .content h3 a',
            ]
        );

        $this->add_responsive_control(
            'call_icon_size',
            [
                'label'      => esc_html__('Phone Icon Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .value-text-section .author-icon .icon img' => 'width: {{SIZE}}{{UNIT}};',
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
        $top_bg_image      = !empty($settings['top_bg_image']['url']) ? $settings['top_bg_image']['url'] : 'assets/img/inner-page/top-bg.png';
        $bottom_bg_image   = !empty($settings['bottom_bg_image']['url']) ? $settings['bottom_bg_image']['url'] : 'assets/img/inner-page/bottom-bg.png';
        $shape1_image      = !empty($settings['shape1_image']['url']) ? $settings['shape1_image']['url'] : 'assets/img/inner-page/s1.png';
        $shape2_image      = !empty($settings['shape2_image']['url']) ? $settings['shape2_image']['url'] : 'assets/img/inner-page/s2.png';
        $shape3_image      = !empty($settings['shape3_image']['url']) ? $settings['shape3_image']['url'] : 'assets/img/inner-page/s3.png';
        $shape4_image      = !empty($settings['shape4_image']['url']) ? $settings['shape4_image']['url'] : 'assets/img/inner-page/s4.png';
        $shape5_image      = !empty($settings['shape5_image']['url']) ? $settings['shape5_image']['url'] : 'assets/img/inner-page/s5.png';
        $shape6_image      = !empty($settings['shape6_image']['url']) ? $settings['shape6_image']['url'] : 'assets/img/inner-page/s6.png';
        $shape7_image      = !empty($settings['shape7_image']['url']) ? $settings['shape7_image']['url'] : 'assets/img/inner-page/s8.png';
        $shape8_image      = !empty($settings['shape8_image']['url']) ? $settings['shape8_image']['url'] : 'assets/img/inner-page/s9.png';
        $shape9_image      = !empty($settings['shape9_image']['url']) ? $settings['shape9_image']['url'] : 'assets/img/inner-page/s10.png';
        $button_arrow_image = !empty($settings['button_arrow_image']['url']) ? $settings['button_arrow_image']['url'] : 'assets/img/icon/arrow1.svg';
        $phone_icon_image  = !empty($settings['phone_icon_image']['url']) ? $settings['phone_icon_image']['url'] : 'assets/img/home-1/icon/telephone.svg';

        if (!empty($settings['button_link']['url'])) {
            $this->add_link_attributes('ft_feature8_button_link', $settings['button_link']);
        } else {
            $this->add_render_attribute('ft_feature8_button_link', 'href', '#');
        }

        if (!empty($settings['call_link']['url'])) {
            $this->add_link_attributes('ft_feature8_call_link', $settings['call_link']);
        } else {
            $this->add_render_attribute('ft_feature8_call_link', 'href', 'tel:+11123065498');
        }

        ?>



        <section class="value-text-section">
            <div class="top-bg">
                <img src="<?php echo esc_url($top_bg_image); ?>" alt="img">
            </div>
            <div class="bottom-bg">
                <img src="<?php echo esc_url($bottom_bg_image); ?>" alt="img">
            </div>
            <div class="shape1 bz-gsap-animate-circle d-none d-xxl-block">
                <img src="<?php echo esc_url($shape1_image); ?>" alt="img">
            </div>
            <div class="shape2 bz-gsap-animate-circle d-none d-xxl-block">
                <img src="<?php echo esc_url($shape2_image); ?>" alt="img">
            </div>
            <div class="shape3 bz-gsap-animate-circle d-none d-xxl-block">
                <img src="<?php echo esc_url($shape3_image); ?>" alt="img">
            </div>
            <div class="shape4 bz-gsap-animate-circle d-none d-xxl-block">
                <img src="<?php echo esc_url($shape4_image); ?>" alt="img">
            </div>
            <div class="shape5 bz-gsap-animate-circle d-none d-xxl-block">
                <img src="<?php echo esc_url($shape5_image); ?>" alt="img">
            </div>
            <div class="shape6 bz-gsap-animate-circle d-none d-xxl-block">
                <img src="<?php echo esc_url($shape6_image); ?>" alt="img">
            </div>
            <div class="shape7 bz-gsap-animate-circle d-none d-xxl-block">
                <img src="<?php echo esc_url($shape7_image); ?>" alt="img">
            </div>
            <div class="shape8 bz-gsap-animate-circle d-none d-xxl-block">
                <img src="<?php echo esc_url($shape8_image); ?>" alt="img">
            </div>
            <div class="shape9">
                <img src="<?php echo esc_url($shape9_image); ?>" alt="img">
            </div>
            <div class="container">
                <div class="section-title text-center mb-0">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['section_subtitle']); ?></span>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                        <?php echo wp_kses_post($settings['section_title']); ?>
                    </h2>
                    <p class="text-center mt-3 wow fadeInUp" data-wow-delay=".3s">
                        <?php echo wp_kses_post($settings['section_description']); ?>
                    </p>
                </div>
                <div class="about-button wow fadeInUp" data-wow-delay=".5s">
                    <a class="theme-btn" <?php echo $this->get_render_attribute_string('ft_feature8_button_link'); ?>>
                        <span class="theme-bg">
                            <svg width="225" height="59" viewBox="0 0 225 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 20.1062C0 11.6265 6.61558 4.6195 15.0813 4.13258L86.9318 0L209.579 4.44155C218.185 4.75319 225 11.8198 225 20.4311V39.4568C225 48.1129 218.116 55.1994 209.463 55.4501L86.9318 59L15.2646 55.7024C6.72303 55.3093 0 48.2699 0 39.7193V20.1062Z" fill="#F39F5F" />
                            </svg>

                        </span>
                        <span class="theme-text"><?php echo esc_html($settings['button_text']); ?><img src="<?php echo esc_url($button_arrow_image); ?>" alt="img"></span>
                        <span class="theme-text2"><?php echo esc_html($settings['button_text']); ?><img src="<?php echo esc_url($button_arrow_image); ?>" alt="img"></span>
                    </a>
                    <div class="author-icon">
                        <div class="icon">
                            <img src="<?php echo esc_url($phone_icon_image); ?>" alt="img">
                        </div>
                        <div class="content">
                            <span><?php echo esc_html($settings['call_label']); ?></span>
                            <h3>
                                <a <?php echo $this->get_render_attribute_string('ft_feature8_call_link'); ?>><?php echo esc_html($settings['call_number']); ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>










<?php
    }
} ?>