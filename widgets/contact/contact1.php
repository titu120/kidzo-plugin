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

class FT_Contact1_Widget extends \Elementor\Widget_Base 
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
        return 'ft-contact1';
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
        return esc_html__('FT Contact 1', 'ftelements');
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
            'contact_form_section',
            [
                'label' => esc_html__('Contact Form', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'contact_form_shortcode',
            [
                'label'       => esc_html__('Form Shortcode', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 3,
                'placeholder' => esc_html__('[contact-form-7 id="123" title="Contact form"]', 'ftelements'),
                'default'     => '',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact_images_section',
            [
                'label' => esc_html__('Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'contact_section_bg_image',
            [
                'label'   => esc_html__('Section Background', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/contact-book-bg.jpg',
                ],
            ]
        );

        $this->add_control(
            'contact_shape_1_image',
            [
                'label'   => esc_html__('Shape 1', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/shape2.png',
                ],
            ]
        );

        $this->add_control(
            'contact_shape_2_image',
            [
                'label'   => esc_html__('Shape 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/shape3.png',
                ],
            ]
        );

        $this->add_control(
            'contact_shape_3_image',
            [
                'label'   => esc_html__('Shape 3', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/shape4.png',
                ],
            ]
        );

        $this->add_control(
            'contact_phone_icon_image',
            [
                'label'   => esc_html__('Phone Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/icon/phone.svg',
                ],
            ]
        );

        $this->add_control(
            'contact_form_bg_image',
            [
                'label'   => esc_html__('Form Background Shape', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/contact-bg.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact_section_style',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'contact_section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .book-contact-section-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact_section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .book-contact-section-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'contact_section_background',
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .book-contact-section-3',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact_section_border',
                'label'    => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .book-contact-section-3',
            ]
        );

        $this->add_responsive_control(
            'contact_section_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .book-contact-section-3' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact_content_style',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'contact_subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-contact-section-3 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact_subtitle_typography',
                'label'    => esc_html__('Subtitle Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .book-contact-section-3 .section-title .sec-sub',
            ]
        );

        $this->add_control(
            'contact_title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-contact-section-3 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact_title_typography',
                'label'    => esc_html__('Title Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .book-contact-section-3 .section-title h2',
            ]
        );

        $this->add_control(
            'contact_description_color',
            [
                'label'     => esc_html__('Description Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-contact-section-3 .content > .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact_description_typography',
                'label'    => esc_html__('Description Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .book-contact-section-3 .content > .text',
            ]
        );

        $this->add_control(
            'contact_phone_label_color',
            [
                'label'     => esc_html__('Phone Label Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-contact-section-3 .info-cont p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact_phone_color',
            [
                'label'     => esc_html__('Phone Number Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-contact-section-3 .info-cont h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact_phone_typography',
                'label'    => esc_html__('Phone Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .book-contact-section-3 .info-cont h3 a',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact_form_box_style',
            [
                'label' => esc_html__('Form Box', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'contact_form_title_color',
            [
                'label'     => esc_html__('Form Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact_form_title_typography',
                'label'    => esc_html__('Form Title Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .book-contact-section-3 .form-box .title',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'contact_form_box_background',
                'label'    => esc_html__('Form Box Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .book-contact-section-3 .form-box',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact_form_box_border',
                'label'    => esc_html__('Form Box Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .book-contact-section-3 .form-box',
            ]
        );

        $this->add_responsive_control(
            'contact_form_box_radius',
            [
                'label'      => esc_html__('Form Box Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact_form_box_padding',
            [
                'label'      => esc_html__('Form Box Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact_form_box_margin',
            [
                'label'      => esc_html__('Form Box Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact_form_fields_style',
            [
                'label' => esc_html__('Form Fields', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'contact_form_field_text_color',
            [
                'label'     => esc_html__('Field Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box input:not([type="submit"]), {{WRAPPER}} .book-contact-section-3 .form-box textarea, {{WRAPPER}} .book-contact-section-3 .form-box select' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact_form_field_placeholder_color',
            [
                'label'     => esc_html__('Placeholder Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box input::placeholder, {{WRAPPER}} .book-contact-section-3 .form-box textarea::placeholder' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact_form_field_bg_color',
            [
                'label'     => esc_html__('Field Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box input:not([type="submit"]), {{WRAPPER}} .book-contact-section-3 .form-box textarea, {{WRAPPER}} .book-contact-section-3 .form-box select' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact_form_field_typography',
                'label'    => esc_html__('Field Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .book-contact-section-3 .form-box input:not([type="submit"]), {{WRAPPER}} .book-contact-section-3 .form-box textarea, {{WRAPPER}} .book-contact-section-3 .form-box select',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact_form_field_border',
                'label'    => esc_html__('Field Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .book-contact-section-3 .form-box input:not([type="submit"]), {{WRAPPER}} .book-contact-section-3 .form-box textarea, {{WRAPPER}} .book-contact-section-3 .form-box select',
            ]
        );

        $this->add_responsive_control(
            'contact_form_field_radius',
            [
                'label'      => esc_html__('Field Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box input:not([type="submit"]), {{WRAPPER}} .book-contact-section-3 .form-box textarea, {{WRAPPER}} .book-contact-section-3 .form-box select' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact_form_field_padding',
            [
                'label'      => esc_html__('Field Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box input:not([type="submit"]), {{WRAPPER}} .book-contact-section-3 .form-box textarea, {{WRAPPER}} .book-contact-section-3 .form-box select' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact_form_field_margin',
            [
                'label'      => esc_html__('Field Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box input:not([type="submit"]), {{WRAPPER}} .book-contact-section-3 .form-box textarea, {{WRAPPER}} .book-contact-section-3 .form-box select' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact_form_button_style',
            [
                'label' => esc_html__('Form Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'contact_form_button_text_color',
            [
                'label'     => esc_html__('Button Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box button, {{WRAPPER}} .book-contact-section-3 .form-box input[type="submit"]' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact_form_button_bg_color',
            [
                'label'     => esc_html__('Button Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box button, {{WRAPPER}} .book-contact-section-3 .form-box input[type="submit"]' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact_form_button_typography',
                'label'    => esc_html__('Button Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .book-contact-section-3 .form-box button, {{WRAPPER}} .book-contact-section-3 .form-box input[type="submit"]',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact_form_button_border',
                'label'    => esc_html__('Button Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .book-contact-section-3 .form-box button, {{WRAPPER}} .book-contact-section-3 .form-box input[type="submit"]',
            ]
        );

        $this->add_responsive_control(
            'contact_form_button_radius',
            [
                'label'      => esc_html__('Button Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box button, {{WRAPPER}} .book-contact-section-3 .form-box input[type="submit"]' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact_form_button_padding',
            [
                'label'      => esc_html__('Button Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box button, {{WRAPPER}} .book-contact-section-3 .form-box input[type="submit"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact_form_button_margin',
            [
                'label'      => esc_html__('Button Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .book-contact-section-3 .form-box button, {{WRAPPER}} .book-contact-section-3 .form-box input[type="submit"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

        $contact_section_bg_image = !empty($settings['contact_section_bg_image']['url']) ? $settings['contact_section_bg_image']['url'] : $theme_uri . '/assets/img/home-3/contact-book-bg.jpg';
        $contact_shape_1_image = !empty($settings['contact_shape_1_image']['url']) ? $settings['contact_shape_1_image']['url'] : $theme_uri . '/assets/img/home-3/shape2.png';
        $contact_shape_2_image = !empty($settings['contact_shape_2_image']['url']) ? $settings['contact_shape_2_image']['url'] : $theme_uri . '/assets/img/home-3/shape3.png';
        $contact_shape_3_image = !empty($settings['contact_shape_3_image']['url']) ? $settings['contact_shape_3_image']['url'] : $theme_uri . '/assets/img/home-3/shape4.png';
        $contact_phone_icon_image = !empty($settings['contact_phone_icon_image']['url']) ? $settings['contact_phone_icon_image']['url'] : $theme_uri . '/assets/img/home-1/icon/phone.svg';
        $contact_form_bg_image = !empty($settings['contact_form_bg_image']['url']) ? $settings['contact_form_bg_image']['url'] : $theme_uri . '/assets/img/home-3/contact-bg.png';

        ?>




        <section class="book-contact-section-3 fix section-padding bg-cover" style="background-image: url('<?php echo esc_url($contact_section_bg_image); ?>');">
            <div class="shape-1 bz-gsap-animate-circle">
                <img src="<?php echo esc_url($contact_shape_1_image); ?>" alt="img">
            </div>
            <div class="shape-2 float-bob-x">
                <img src="<?php echo esc_url($contact_shape_2_image); ?>" alt="img">
            </div>
            <div class="shape-3 bz-gsap-animate-circle">
                <img src="<?php echo esc_url($contact_shape_3_image); ?>" alt="img">
            </div>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="content">
                            <div class="section-title mb-0">
                                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle text-white">Book Now</span>
                                <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim text-white">
                                    Book Nanny For <br>
                                    Your Child
                                </h2>
                            </div>
                            <p class="text wow fadeInUp" data-wow-delay=".3s">
                                Qualified teachers who understand children’s needs and focus on personal attention. through play-based and academic learning.
                            </p>
                            <div class="info-content wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <img src="<?php echo esc_url($contact_phone_icon_image); ?>" alt="img">
                                </div>
                                <div class="info-cont">
                                    <p>
                                        Call Us Now
                                    </p>
                                    <h3>
                                        <a href="tel:+11123065498">+11 123 0654 98</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-form-items-3">
                            <div class="contact-bg">
                                <img src="<?php echo esc_url($contact_form_bg_image); ?>" alt="img">
                            </div>
                            <div class="form-box">
                                <h2 class="title">get in touhc</h2>
                                <?php if (!empty($settings['contact_form_shortcode'])) : ?>
                                    <?php echo do_shortcode(wp_kses_post($settings['contact_form_shortcode'])); ?>
                                <?php else : ?>
                                    <p><?php echo esc_html__('Please add a form shortcode from widget settings.', 'ftelements'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>









<?php
    }
} ?>