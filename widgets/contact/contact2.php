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

class FT_Contact2_Widget extends \Elementor\Widget_Base
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
        return 'ft-contact2';
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
        return esc_html__('FT Contact 2', 'ftelements');
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
            'contact2_content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'contact_subtitle',
            [
                'label'       => esc_html__('Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Contact with Us', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact_title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('How May We Help You!', 'ftelements'),
                'rows'        => 3,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact_form_shortcode',
            [
                'label'       => esc_html__('Form Shortcode', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => '[contact-form-7 id="123" title="Contact form"]',
                'rows'        => 3,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact_line_one_image',
            [
                'label'   => esc_html__('Line Shape 1', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/line-1.png',
                ],
            ]
        );

        $this->add_control(
            'contact_line_two_image',
            [
                'label'   => esc_html__('Line Shape 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/line-2.png',
                ],
            ]
        );

        $this->add_control(
            'contact_main_image',
            [
                'label'   => esc_html__('Contact Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/contact.png',
                ],
            ]
        );

        $this->add_control(
            'contact_circle_image',
            [
                'label'   => esc_html__('Circle Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/circle-2.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact2_style_subtitle_section',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'contact_subtitle_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content5 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact_subtitle_typography',
                'selector' => '{{WRAPPER}} .contact-content5 .section-title .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'contact_subtitle_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content5 .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact2_style_title_section',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'contact_title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-content5 .section-title .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact_title_typography',
                'selector' => '{{WRAPPER}} .contact-content5 .section-title .sec_title',
            ]
        );

        $this->add_responsive_control(
            'contact_title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content5 .section-title .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact2_style_form_wrapper_section',
            [
                'label' => esc_html__('Form Wrapper', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'contact_form_wrapper_background',
                'selector' => '{{WRAPPER}} .contact-content5 .contact-form-items5',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact_form_wrapper_border',
                'selector' => '{{WRAPPER}} .contact-content5 .contact-form-items5',
            ]
        );

        $this->add_responsive_control(
            'contact_form_wrapper_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content5 .contact-form-items5' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact_form_wrapper_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content5 .contact-form-items5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact_form_wrapper_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-content5 .contact-form-items5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact2_style_image_section',
            [
                'label' => esc_html__('Right Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'contact_image_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-image5 > img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'contact_image_css_filter',
                'selector' => '{{WRAPPER}} .contact-image5 > img',
            ]
        );

        $this->add_responsive_control(
            'contact_image_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-image5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact_image_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-image5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $subtitle = !empty($settings['contact_subtitle']) ? $settings['contact_subtitle'] : '';
        $title = !empty($settings['contact_title']) ? $settings['contact_title'] : '';
        $form_shortcode = !empty($settings['contact_form_shortcode']) ? $settings['contact_form_shortcode'] : '';
        $line_one_image = !empty($settings['contact_line_one_image']['url']) ? $settings['contact_line_one_image']['url'] : '';
        $line_two_image = !empty($settings['contact_line_two_image']['url']) ? $settings['contact_line_two_image']['url'] : '';
        $main_image = !empty($settings['contact_main_image']['url']) ? $settings['contact_main_image']['url'] : '';
        $circle_image = !empty($settings['contact_circle_image']['url']) ? $settings['contact_circle_image']['url'] : '';

        ?>



        <section class="contact-section5 section-padding">
            <div class="line-1">
                <?php if (!empty($line_one_image)) : ?>
                    <img src="<?php echo esc_url($line_one_image); ?>" alt="shape-img">
                <?php endif; ?>
            </div>
            <div class="line-2">
                <?php if (!empty($line_two_image)) : ?>
                    <img src="<?php echo esc_url($line_two_image); ?>" alt="shape-img">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="contact-wrapper5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-content5">
                                <div class="section-title mb-0">
                                    <span class="text-white sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($subtitle); ?></span>
                                    <h2 class="text-white tx-title sec_title  tz-itm-title tz-itm-anim">
                                        <?php echo esc_html($title); ?>
                                    </h2>
                                </div>
                                <?php if (!empty($form_shortcode)) : ?>
                                    <div class="contact-form-items5">
                                        <?php echo do_shortcode($form_shortcode); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-image5 wow fadeInUp" data-wow-delay=".4s">
                                <?php if (!empty($main_image)) : ?>
                                    <img src="<?php echo esc_url($main_image); ?>" alt="contact-img">
                                <?php endif; ?>
                                <div class="cricle-shape">
                                    <?php if (!empty($circle_image)) : ?>
                                        <img src="<?php echo esc_url($circle_image); ?>" alt="shape-img">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>










<?php
    }
} ?>