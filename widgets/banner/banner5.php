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

class FT_Banner5_Widget extends \Elementor\Widget_Base
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
        return 'ft-banner5';
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
        return esc_html__('FT Banner 5', 'ftelements');
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
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__('Sub Title', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Best Education Agency', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Free Nanny On', 'ftelements') . ' <span>' . esc_html__('First Trial Day', 'ftelements') . '</span>',
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Suspendisse eget lectus vitae elit malesuada lacinia Vestibulum scelerisque, ligula sit amet consequat', 'ftelements'),
            ]
        );

        $this->add_control(
            'btn_one_text',
            [
                'label' => esc_html__('Button One Text', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Enroll Now', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'btn_one_link',
            [
                'label' => esc_html__('Button One Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://your-link.com',
                'default' => [
                    'url' => '#',
                ],
                'show_external' => true,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'btn_two_text',
            [
                'label' => esc_html__('Button Two Text', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Book a Visit', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'btn_two_link',
            [
                'label' => esc_html__('Button Two Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://your-link.com',
                'default' => [
                    'url' => '#',
                ],
                'show_external' => true,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'doll_image',
            [
                'label' => esc_html__('Doll Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/hero/doll.png',
                ],
            ]
        );

        $this->add_control(
            'line_image',
            [
                'label' => esc_html__('Line Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/hero/line.png',
                ],
            ]
        );

        $this->add_control(
            'bee_image',
            [
                'label' => esc_html__('Bee Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/hero/bee-2.png',
                ],
            ]
        );

        $this->add_control(
            'line2_image',
            [
                'label' => esc_html__('Line 2 Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/line-1.png',
                ],
            ]
        );

        $this->add_control(
            'star_image',
            [
                'label' => esc_html__('Star Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/hero/star-2.png',
                ],
            ]
        );

        $this->add_control(
            'frame_image',
            [
                'label' => esc_html__('Frame Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/value/shape-1.png',
                ],
            ]
        );

        $this->add_control(
            'arrow_icon',
            [
                'label' => esc_html__('Arrow Icon', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/icon/arrow1.svg',
                ],
            ]
        );

        $this->add_control(
            'hero_bg_image',
            [
                'label' => esc_html__('Hero Background Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/hero/hero-4-bg.png',
                ],
            ]
        );

        $this->add_control(
            'hero_main_image',
            [
                'label' => esc_html__('Hero Main Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/hero/03.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_hero',
            [
                'label' => esc_html__('Hero Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'hero_section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .hero-section5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'hero_section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .hero-section5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'hero_section_min_height',
            [
                'label' => esc_html__('Min Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1400],
                    'vh' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-section5' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'hero_section_bg',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .hero-section5',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'hero_section_border',
                'selector' => '{{WRAPPER}} .hero-section5',
            ]
        );

        $this->add_responsive_control(
            'hero_section_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .hero-section5' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_subtitle',
            [
                'label' => esc_html__('Sub Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'sub_title_typography',
                'selector' => '{{WRAPPER}} .hero-content .hero-sub',
            ]
        );

        $this->add_control(
            'sub_title_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sub_title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
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
                'selector' => '{{WRAPPER}} .hero-content h1',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_typography',
                'selector' => '{{WRAPPER}} .hero-content p',
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'description_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_buttons_wrap',
            [
                'label' => esc_html__('Buttons Wrapper', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'buttons_wrap_gap',
            [
                'label' => esc_html__('Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 120],
                    'em' => ['min' => 0, 'max' => 10],
                    'rem' => ['min' => 0, 'max' => 10],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'buttons_wrap_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_button_text',
            [
                'label' => esc_html__('Button Text', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_text_typography',
                'selector' => '{{WRAPPER}} .hero-content .theme-btn .theme-text, {{WRAPPER}} .hero-content .theme-btn .theme-text2',
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .theme-btn .theme-text, {{WRAPPER}} .hero-content .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_text_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 100],
                    'em' => ['min' => 0, 'max' => 6],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .theme-btn .theme-text img, {{WRAPPER}} .hero-content .theme-btn .theme-text2 img' => 'width: {{SIZE}}{{UNIT}};',
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
        $sub_title = !empty($settings['sub_title']) ? $settings['sub_title'] : '';
        $title = !empty($settings['title']) ? $settings['title'] : '';
        $description = !empty($settings['description']) ? $settings['description'] : '';

        $btn_one_text = !empty($settings['btn_one_text']) ? $settings['btn_one_text'] : '';
        $btn_two_text = !empty($settings['btn_two_text']) ? $settings['btn_two_text'] : '';

        $btn_one_url = !empty($settings['btn_one_link']['url']) ? $settings['btn_one_link']['url'] : '#';
        $btn_one_target = !empty($settings['btn_one_link']['is_external']) ? ' target="_blank"' : '';
        $btn_one_nofollow = !empty($settings['btn_one_link']['nofollow']) ? ' rel="nofollow"' : '';

        $btn_two_url = !empty($settings['btn_two_link']['url']) ? $settings['btn_two_link']['url'] : '#';
        $btn_two_target = !empty($settings['btn_two_link']['is_external']) ? ' target="_blank"' : '';
        $btn_two_nofollow = !empty($settings['btn_two_link']['nofollow']) ? ' rel="nofollow"' : '';

        $doll_image = !empty($settings['doll_image']['url']) ? $settings['doll_image']['url'] : '';
        $line_image = !empty($settings['line_image']['url']) ? $settings['line_image']['url'] : '';
        $bee_image = !empty($settings['bee_image']['url']) ? $settings['bee_image']['url'] : '';
        $line2_image = !empty($settings['line2_image']['url']) ? $settings['line2_image']['url'] : '';
        $star_image = !empty($settings['star_image']['url']) ? $settings['star_image']['url'] : '';
        $frame_image = !empty($settings['frame_image']['url']) ? $settings['frame_image']['url'] : '';
        $arrow_icon = !empty($settings['arrow_icon']['url']) ? $settings['arrow_icon']['url'] : '';
        $hero_bg_image = !empty($settings['hero_bg_image']['url']) ? $settings['hero_bg_image']['url'] : '';
        $hero_main_image = !empty($settings['hero_main_image']['url']) ? $settings['hero_main_image']['url'] : '';

        ?>



        <section class="hero-section5 hero-5 bg-cover fix">
            <div class="ocean">
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
            <div class="doll-shape float-bob-x">
                <img src="<?php echo esc_url($doll_image); ?>" alt="shape-img">
            </div>
            <div class="line-shape">
                <img src="<?php echo esc_url($line_image); ?>" alt="shape-img">
            </div>
            <div class="bee-shape float-bob-y">
                <img src="<?php echo esc_url($bee_image); ?>" alt="shape-img">
            </div>
            <div class="line-2">
                <img src="<?php echo esc_url($line2_image); ?>" alt="shape-img">
            </div>
            <div class="star-shape">
                <img src="<?php echo esc_url($star_image); ?>" alt="shape-img">
            </div>
            <div class="frame-shape">
                <img src="<?php echo esc_url($frame_image); ?>" alt="shape-img">
            </div>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <span class="hero-sub wow fadeInUp"><?php echo esc_html($sub_title); ?></span>
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">
                                <?php
                                echo wp_kses(
                                    $title,
                                    [
                                        'br' => [],
                                        'span' => [
                                            'class' => [],
                                        ],
                                        'strong' => [],
                                        'em' => [],
                                        'b' => [],
                                        'i' => [],
                                    ]
                                );
                                ?>
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".5s"><?php echo wp_kses_post($description); ?></p>
                            <div class="hero-button">
                                <a href="<?php echo esc_url($btn_one_url); ?>" class="theme-btn"<?php echo $btn_one_target . $btn_one_nofollow; ?>>
                                    <span class="theme-bg">
                                        <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F" />
                                        </svg>
                                    </span>
                                    <span class="theme-text"><?php echo esc_html($btn_one_text); ?> <img src="<?php echo esc_url($arrow_icon); ?>" alt=""></span>
                                    <span class="theme-text2"><?php echo esc_html($btn_one_text); ?> <img src="<?php echo esc_url($arrow_icon); ?>" alt=""></span>
                                </a>
                                <a href="<?php echo esc_url($btn_two_url); ?>" class="theme-btn hover-header"<?php echo $btn_two_target . $btn_two_nofollow; ?>>
                                    <span class="theme-bg">
                                        <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#385469" />
                                        </svg>

                                    </span>
                                    <span class="theme-text"><?php echo esc_html($btn_two_text); ?> <img src="<?php echo esc_url($arrow_icon); ?>" alt=""></span>
                                    <span class="theme-text2"><?php echo esc_html($btn_two_text); ?> <img src="<?php echo esc_url($arrow_icon); ?>" alt=""></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image-area">
                            <div class="hero-bg wow fadeInRight" data-wow-delay=".3s">
                                <img src="<?php echo esc_url($hero_bg_image); ?>" alt="shape-img">
                            </div>
                            <div class="hero-image wow fadeInUp" data-wow-delay=".5s">
                                <img src="<?php echo esc_url($hero_main_image); ?>" alt="hero-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>










<?php
    }
} ?>