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

class FT_Banner4_Widget extends \Elementor\Widget_Base
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
        return 'ft-banner4';
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
        return esc_html__('FT Banner 4', 'ftelements');
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
            'banner_content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'hero_subtitle',
            [
                'label'       => esc_html__('Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Kindergarten & Baby Care', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'hero_title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('We Prepare Your Child <br> For <span>Lifetime</span>', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'hero_description',
            [
                'label'       => esc_html__('Description', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('Suspendisse non blandit sapien Nunc eleifend, enim et porta porta <br> eros risus tincidunt diam, vel sodales', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label'       => esc_html__('Button Text', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Apply Today', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label'       => esc_html__('Button Link', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'placeholder' => 'https://your-link.com',
                'default'     => [
                    'url'         => '#',
                    'is_external' => false,
                    'nofollow'    => false,
                ],
            ]
        );

        $this->add_control(
            'video_link',
            [
                'label'       => esc_html__('Video Link', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'placeholder' => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
                'default'     => [
                    'url'         => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
                    'is_external' => true,
                    'nofollow'    => true,
                ],
            ]
        );

        $this->add_control(
            'video_text',
            [
                'label'       => esc_html__('Video Text', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Play Video', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'banner_images_section',
            [
                'label' => esc_html__('Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $image_controls = [
            'parasuit_image' => esc_html__('Parasuit Image', 'ftelements'),
            'left_shape_image' => esc_html__('Left Shape Image', 'ftelements'),
            'book_shape_image' => esc_html__('Book Shape Image', 'ftelements'),
            'pencil_shape_image' => esc_html__('Pencil Shape Image', 'ftelements'),
            'bee_shape_image' => esc_html__('Bee Shape Image', 'ftelements'),
            'arrow_icon_image' => esc_html__('Arrow Icon Image', 'ftelements'),
            'hero_main_image' => esc_html__('Hero Main Image', 'ftelements'),
            'hero_secondary_image' => esc_html__('Hero Secondary Image', 'ftelements'),
        ];

        foreach ($image_controls as $control_id => $label) {
            $this->add_control(
                $control_id,
                [
                    'label'   => $label,
                    'type'    => Controls_Manager::MEDIA,
                    'default' => [
                        'url' => Utils::get_placeholder_image_src(),
                    ],
                ]
            );
        }

        $this->end_controls_section();

        $this->start_controls_section(
            'banner_section_style',
            [
                'label' => esc_html__('Section Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'banner_section_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .hero-section.hero-4',
            ]
        );

        $this->add_responsive_control(
            'banner_section_padding',
            [
                'label'      => esc_html__('Section Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .hero-section.hero-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'banner_section_margin',
            [
                'label'      => esc_html__('Section Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .hero-section.hero-4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'banner_subtitle_style',
            [
                'label' => esc_html__('Subtitle Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'hero_subtitle_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'hero_subtitle_typography',
                'selector' => '{{WRAPPER}} .hero-content .hero-sub',
            ]
        );

        $this->add_responsive_control(
            'hero_subtitle_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .hero-content .hero-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'banner_title_style',
            [
                'label' => esc_html__('Title Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'hero_title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'hero_title_highlight_color',
            [
                'label'     => esc_html__('Highlight Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content h1 span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'hero_title_typography',
                'selector' => '{{WRAPPER}} .hero-content h1',
            ]
        );

        $this->add_responsive_control(
            'hero_title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .hero-content h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'banner_description_style',
            [
                'label' => esc_html__('Description Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'hero_description_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'hero_description_typography',
                'selector' => '{{WRAPPER}} .hero-content p',
            ]
        );

        $this->add_responsive_control(
            'hero_description_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .hero-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'banner_button_style',
            [
                'label' => esc_html__('Button Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .theme-btn .theme-text, {{WRAPPER}} .hero-content .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_bg_shape_color',
            [
                'label'     => esc_html__('Shape Fill Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .theme-btn .theme-bg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'button_typography',
                'selector' => '{{WRAPPER}} .hero-content .theme-btn .theme-text, {{WRAPPER}} .hero-content .theme-btn .theme-text2',
            ]
        );

        $this->add_responsive_control(
            'button_icon_size',
            [
                'label'      => esc_html__('Arrow Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .hero-content .theme-btn .theme-text img, {{WRAPPER}} .hero-content .theme-btn .theme-text2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_wrapper_margin',
            [
                'label'      => esc_html__('Button Wrapper Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .hero-content .hero-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'banner_video_style',
            [
                'label' => esc_html__('Video Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'video_button_color',
            [
                'label'     => esc_html__('Video Button Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .button-text .video-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'video_text_color',
            [
                'label'     => esc_html__('Video Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .button-text .d-line' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'video_text_typography',
                'selector' => '{{WRAPPER}} .hero-content .button-text .d-line',
            ]
        );

        $this->add_responsive_control(
            'video_icon_size',
            [
                'label'      => esc_html__('Video Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors'  => [
                    '{{WRAPPER}} .hero-content .button-text .video-btn i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'banner_images_style',
            [
                'label' => esc_html__('Hero Images Style', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'hero_main_image_width',
            [
                'label'      => esc_html__('Main Image Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .hero-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'hero_secondary_image_width',
            [
                'label'      => esc_html__('Secondary Image Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .hero-image-2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape_images_opacity',
            [
                'label'      => esc_html__('Shape Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['%'],
                'selectors'  => [
                    '{{WRAPPER}} .parasuit-shape img, {{WRAPPER}} .left-shape img, {{WRAPPER}} .book-shape img, {{WRAPPER}} .pencil-shape img, {{WRAPPER}} .bee-shape img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'hero_images_css_filters',
                'selector' => '{{WRAPPER}} .hero-image img, {{WRAPPER}} .hero-image-2 img, {{WRAPPER}} .parasuit-shape img, {{WRAPPER}} .left-shape img, {{WRAPPER}} .book-shape img, {{WRAPPER}} .pencil-shape img, {{WRAPPER}} .bee-shape img',
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
        $allowed_title_tags = [
            'br'   => [],
            'span' => [],
        ];

        $button_link_url = !empty($settings['button_link']['url']) ? $settings['button_link']['url'] : '#';
        $button_target = !empty($settings['button_link']['is_external']) ? ' target="_blank"' : '';
        $button_nofollow = !empty($settings['button_link']['nofollow']) ? ' rel="nofollow"' : '';

        $video_link_url = !empty($settings['video_link']['url']) ? $settings['video_link']['url'] : '#';

        $parasuit_image = !empty($settings['parasuit_image']['url']) ? $settings['parasuit_image']['url'] : Utils::get_placeholder_image_src();
        $left_shape_image = !empty($settings['left_shape_image']['url']) ? $settings['left_shape_image']['url'] : Utils::get_placeholder_image_src();
        $book_shape_image = !empty($settings['book_shape_image']['url']) ? $settings['book_shape_image']['url'] : Utils::get_placeholder_image_src();
        $pencil_shape_image = !empty($settings['pencil_shape_image']['url']) ? $settings['pencil_shape_image']['url'] : Utils::get_placeholder_image_src();
        $bee_shape_image = !empty($settings['bee_shape_image']['url']) ? $settings['bee_shape_image']['url'] : Utils::get_placeholder_image_src();
        $arrow_icon_image = !empty($settings['arrow_icon_image']['url']) ? $settings['arrow_icon_image']['url'] : Utils::get_placeholder_image_src();
        $hero_main_image = !empty($settings['hero_main_image']['url']) ? $settings['hero_main_image']['url'] : Utils::get_placeholder_image_src();
        $hero_secondary_image = !empty($settings['hero_secondary_image']['url']) ? $settings['hero_secondary_image']['url'] : Utils::get_placeholder_image_src();

        ?>



        <section class="hero-section hero-4 fix">
            <div class="parasuit-shape float-bob-y">
                <img src="<?php echo esc_url($parasuit_image); ?>" alt="shape-img">
            </div>
            <div class="left-shape">
                <img src="<?php echo esc_url($left_shape_image); ?>" alt="shape-img">
            </div>
            <div class="book-shape float-bob-x">
                <img src="<?php echo esc_url($book_shape_image); ?>" alt="shape-img">
            </div>
            <div class="pencil-shape">
                <img src="<?php echo esc_url($pencil_shape_image); ?>" alt="shape-img">
            </div>
            <div class="bee-shape float-bob-y">
                <img src="<?php echo esc_url($bee_shape_image); ?>" alt="shape-img">
            </div>
            <div class="container">
                <div class="row g-4 align-items-center justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero-content">
                            <span class="hero-sub wow fadeInUp"><?php echo esc_html($settings['hero_subtitle']); ?></span>
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">
                                <?php echo wp_kses($settings['hero_title'], $allowed_title_tags); ?>
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".5s"><?php echo wp_kses($settings['hero_description'], $allowed_title_tags); ?></p>
                            <div class="hero-button wow fadeInUp" data-wow-delay=".7s">
                                <a href="<?php echo esc_url($button_link_url); ?>" class="theme-btn"<?php echo $button_target . $button_nofollow; ?>>
                                    <span class="theme-bg">
                                        <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"></path>
                                        </svg>
                                    </span>
                                    <span class="theme-text"><?php echo esc_html($settings['button_text']); ?> <img src="<?php echo esc_url($arrow_icon_image); ?>" alt="icon"></span>
                                    <span class="theme-text2"><?php echo esc_html($settings['button_text']); ?> <img src="<?php echo esc_url($arrow_icon_image); ?>" alt="icon"></span>
                                </a>
                                <span class="button-text">
                                    <a href="<?php echo esc_url($video_link_url); ?>" class="video-btn video-popup">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                    <span class="ms-4 d-line"><?php echo esc_html($settings['video_text']); ?></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-image float-bob-y">
                <img src="<?php echo esc_url($hero_main_image); ?>" alt="img">
            </div>
            <div class="hero-image-2 float-bob-x">
                <img src="<?php echo esc_url($hero_secondary_image); ?>" alt="img">
            </div>
        </section>










<?php
    }
} ?>