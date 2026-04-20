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

class FT_Cta5_Widget extends \Elementor\Widget_Base
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
        return 'ft-cta5';
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
        return esc_html__('FT Cta 5', 'ftelements');
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
            'content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label'       => esc_html__('Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Newsletter', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('Subscribe To Our Newsletter <br> For Daily Updates', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'form_mode',
            [
                'label'   => esc_html__('Form Type', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'default',
                'options' => [
                    'default'   => esc_html__('Default Form', 'ftelements'),
                    'shortcode' => esc_html__('Shortcode', 'ftelements'),
                ],
            ]
        );

        $this->add_control(
            'form_shortcode',
            [
                'label'       => esc_html__('Form Shortcode', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__('[contact-form-7 id="123" title="Newsletter"]', 'ftelements'),
                'condition'   => [
                    'form_mode' => 'shortcode',
                ],
            ]
        );

        $this->add_control(
            'email_placeholder',
            [
                'label'     => esc_html__('Email Placeholder', 'ftelements'),
                'type'      => Controls_Manager::TEXT,
                'default'   => esc_html__('Email Address', 'ftelements'),
                'condition' => [
                    'form_mode' => 'default',
                ],
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label'     => esc_html__('Button Text', 'ftelements'),
                'type'      => Controls_Manager::TEXT,
                'default'   => esc_html__('Subscribe Now', 'ftelements'),
                'condition' => [
                    'form_mode' => 'default',
                ],
            ]
        );

        $this->add_control(
            'img_main_plane',
            [
                'label'   => esc_html__('Decor: Top Plane', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/plane.png',
                ],
            ]
        );

        $this->add_control(
            'img_pencil',
            [
                'label'   => esc_html__('Decor: Pencil', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/cta/pencil-2.png',
                ],
            ]
        );

        $this->add_control(
            'img_plane_inner',
            [
                'label'   => esc_html__('Decor: Inner Plane', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/cta/plane.png',
                ],
            ]
        );

        $this->add_control(
            'img_shape',
            [
                'label'   => esc_html__('Decor: Shape', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/cta/shape.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_cta_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'cta_section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cta_section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'cta_section_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-cta-section',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'cta_section_border',
                'selector' => '{{WRAPPER}} .main-cta-section',
            ]
        );

        $this->add_responsive_control(
            'cta_section_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-section' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_cta_wrapper',
            [
                'label' => esc_html__('Wrapper', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'cta_wrapper_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cta_wrapper_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'cta_wrapper_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-cta-wrapper',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'cta_wrapper_border',
                'selector' => '{{WRAPPER}} .main-cta-wrapper',
            ]
        );

        $this->add_responsive_control(
            'cta_wrapper_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_cta_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'cta_subtitle_typography',
                'selector' => '{{WRAPPER}} .main-cta-wrapper .sec-sub',
            ]
        );

        $this->add_control(
            'cta_subtitle_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cta_subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_cta_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'cta_title_typography',
                'selector' => '{{WRAPPER}} .main-cta-wrapper .sec_title',
            ]
        );

        $this->add_control(
            'cta_title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cta_title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_cta_form_wrap',
            [
                'label' => esc_html__('Form Wrapper', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'cta_form_wrap_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .newsletter-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cta_form_wrap_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .newsletter-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'cta_form_wrap_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-cta-wrapper .newsletter-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'cta_form_wrap_border',
                'selector' => '{{WRAPPER}} .main-cta-wrapper .newsletter-items',
            ]
        );

        $this->add_responsive_control(
            'cta_form_wrap_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .newsletter-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_cta_input',
            [
                'label' => esc_html__('Input', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'cta_input_typography',
                'selector' => '{{WRAPPER}} .main-cta-wrapper .form-clt input',
            ]
        );

        $this->add_control(
            'cta_input_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .form-clt input' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'cta_input_placeholder_color',
            [
                'label' => esc_html__('Placeholder Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .form-clt input::placeholder' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'cta_input_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-cta-wrapper .form-clt input',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'cta_input_border',
                'selector' => '{{WRAPPER}} .main-cta-wrapper .form-clt input',
            ]
        );

        $this->add_responsive_control(
            'cta_input_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .form-clt input' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cta_input_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .form-clt input' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_cta_button',
            [
                'label' => esc_html__('Button', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'cta_button_typography',
                'selector' => '{{WRAPPER}} .main-cta-wrapper .subscribe-btn',
            ]
        );

        $this->add_control(
            'cta_button_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .subscribe-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'cta_button_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .main-cta-wrapper .subscribe-btn',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'cta_button_border',
                'selector' => '{{WRAPPER}} .main-cta-wrapper .subscribe-btn',
            ]
        );

        $this->add_responsive_control(
            'cta_button_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .subscribe-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cta_button_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .subscribe-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cta_button_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .main-cta-wrapper .subscribe-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

        $subtitle = !empty($settings['subtitle']) ? $settings['subtitle'] : '';
        $title = !empty($settings['title']) ? $settings['title'] : '';
        $form_mode = !empty($settings['form_mode']) ? $settings['form_mode'] : 'default';
        $form_shortcode = !empty($settings['form_shortcode']) ? $settings['form_shortcode'] : '';
        $email_placeholder = !empty($settings['email_placeholder']) ? $settings['email_placeholder'] : esc_html__('Email Address', 'ftelements');
        $button_text = !empty($settings['button_text']) ? $settings['button_text'] : esc_html__('Subscribe Now', 'ftelements');

        $img_main_plane = !empty($settings['img_main_plane']['url']) ? $settings['img_main_plane']['url'] : $theme_uri . '/assets/img/plane.png';
        $img_pencil = !empty($settings['img_pencil']['url']) ? $settings['img_pencil']['url'] : $theme_uri . '/assets/img/cta/pencil-2.png';
        $img_plane_inner = !empty($settings['img_plane_inner']['url']) ? $settings['img_plane_inner']['url'] : $theme_uri . '/assets/img/cta/plane.png';
        $img_shape = !empty($settings['img_shape']['url']) ? $settings['img_shape']['url'] : $theme_uri . '/assets/img/cta/shape.png';

        ?>




        <section class="main-cta-section">
            <div class="plane-shape float-bob-y">
                <img src="<?php echo esc_url($img_main_plane); ?>" alt="<?php echo esc_attr($subtitle); ?>">
            </div>
            <div class="container">
                <div class="main-cta-wrapper section-padding">
                    <div class="pencil-shape">
                        <img src="<?php echo esc_url($img_pencil); ?>" alt="<?php echo esc_attr($subtitle); ?>">
                    </div>
                    <div class="plane-shape float-bob-y">
                        <img src="<?php echo esc_url($img_plane_inner); ?>" alt="<?php echo esc_attr($subtitle); ?>">
                    </div>
                    <div class="cta-shape float-bob-x">
                        <img src="<?php echo esc_url($img_shape); ?>" alt="<?php echo esc_attr($subtitle); ?>">
                    </div>
                    <div class="cta-bg"></div>
                    <div class="section-title text-center mb-0">
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle text-white"><?php echo esc_html($subtitle); ?></span>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim text-white">
                            <?php echo wp_kses_post($title); ?>
                        </h2>
                    </div>
                    <?php if ('shortcode' === $form_mode && !empty($form_shortcode)) : ?>
                        <div class="newsletter-items">
                            <?php echo do_shortcode($form_shortcode); ?>
                        </div>
                    <?php else : ?>
                        <div class="newsletter-items">
                            <div class="form-clt wow fadeInUp" data-wow-delay=".5s">
                                <input type="text" name="email" id="email" placeholder="<?php echo esc_attr($email_placeholder); ?>">
                            </div>
                            <button class="subscribe-btn wow fadeInUp" data-wow-delay=".7s" type="submit">
                                <?php echo esc_html($button_text); ?>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>









<?php
    }
} ?>