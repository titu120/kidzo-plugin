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

class FT_About6_Widget extends \Elementor\Widget_Base
{


    public function get_name()
    {
        return 'ft-about6';
    }


    public function get_title()
    {
        return esc_html__('FT About 6', 'ftelements');
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
            'about6_images_section',
            [
                'label' => esc_html__('Images', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'left_shape_image',
            [
                'label' => esc_html__('Left Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/about/left-shape.png',
                ],
            ]
        );

        $this->add_control(
            'zebra_shape_image',
            [
                'label' => esc_html__('Zebra Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/about/zebra.png',
                ],
            ]
        );

        $this->add_control(
            'bottom_shape_image',
            [
                'label' => esc_html__('Bottom Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/section-top-shape-2.png',
                ],
            ]
        );

        $this->add_control(
            'sun_shape_image',
            [
                'label' => esc_html__('Sun Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/client/shape-2.png',
                ],
            ]
        );

        $this->add_control(
            'main_about_image',
            [
                'label' => esc_html__('Main About Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/about/04.png',
                ],
            ]
        );

        $this->add_control(
            'radius_shape_image',
            [
                'label' => esc_html__('Radius Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/about/radius-shape.png',
                ],
            ]
        );

        $this->add_control(
            'circle_shape_image',
            [
                'label' => esc_html__('Circle Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/about/circle.png',
                ],
            ]
        );

        $this->add_control(
            'feature_icon_one',
            [
                'label' => esc_html__('Feature Icon One', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/icon/01.svg',
                ],
            ]
        );

        $this->add_control(
            'feature_icon_two',
            [
                'label' => esc_html__('Feature Icon Two', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/icon/02.svg',
                ],
            ]
        );

        $this->add_control(
            'author_image',
            [
                'label' => esc_html__('Author Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/about/author.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about6_content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'about6_subtitle_text',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('About Us', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'about6_title_text',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Learn To Play, Converse \nWith Confidence.", 'ftelements'),
                'rows' => 3,
            ]
        );

        $this->add_control(
            'about6_description_text',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Luctus. Curabitur nibh justo imperdiet non ex non tempus faucibus urna Aliquam at elit vitae dui sagittis maximus eget vitae diam In fermentum', 'ftelements'),
                'rows' => 4,
            ]
        );

        $this->add_control(
            'about6_feature_1_title',
            [
                'label' => esc_html__('Feature 1 Title', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Sport Program', 'ftelements'),
            ]
        );

        $this->add_control(
            'about6_feature_1_text',
            [
                'label' => esc_html__('Feature 1 Text', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Aliquam erat volutpat \nnullam imperdiet", 'ftelements'),
                'rows' => 2,
            ]
        );

        $this->add_control(
            'about6_feature_2_title',
            [
                'label' => esc_html__('Feature 2 Title', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Easy To Learn', 'ftelements'),
            ]
        );

        $this->add_control(
            'about6_feature_2_text',
            [
                'label' => esc_html__('Feature 2 Text', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Ut vehiculadictumst maecenas ante.', 'ftelements'),
                'rows' => 2,
            ]
        );

        $this->add_control(
            'about6_author_name',
            [
                'label' => esc_html__('Author Name', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Ronald Richards', 'ftelements'),
            ]
        );

        $this->add_control(
            'about6_author_role',
            [
                'label' => esc_html__('Author Role', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Co, Founder', 'ftelements'),
            ]
        );

        $this->add_control(
            'about6_call_label',
            [
                'label' => esc_html__('Call Label', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Call Us Now', 'ftelements'),
            ]
        );

        $this->add_control(
            'about6_phone',
            [
                'label' => esc_html__('Phone Number', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => '+208-555-0112',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about6_section_style',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about6_section_padding',
            [
                'label' => esc_html__('Section Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about6_wrapper_margin_bottom',
            [
                'label' => esc_html__('Wrapper Margin Bottom', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-wrapper.style-2' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about6_subtitle_style',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about6_subtitle_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about6_subtitle_typography',
                'selector' => '{{WRAPPER}} .about-activities-section-2 .section-title .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'about6_subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about6_title_style',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about6_title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about6_title_typography',
                'selector' => '{{WRAPPER}} .about-activities-section-2 .section-title h2',
            ]
        );

        $this->add_responsive_control(
            'about6_title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about6_description_style',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about6_description_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .activities-content > p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about6_description_typography',
                'selector' => '{{WRAPPER}} .about-activities-section-2 .activities-content > p',
            ]
        );

        $this->add_responsive_control(
            'about6_description_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .activities-content > p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about6_feature_box_style',
            [
                'label' => esc_html__('Feature Box', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about6_feature_box_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .about-activities-section-2 .icon-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about6_feature_box_border',
                'selector' => '{{WRAPPER}} .about-activities-section-2 .icon-items',
            ]
        );

        $this->add_responsive_control(
            'about6_feature_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .icon-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about6_feature_box_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .icon-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about6_feature_icon_style',
            [
                'label' => esc_html__('Feature Icon', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about6_feature_icon_image_width',
            [
                'label' => esc_html__('Icon Image Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .icon-items .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about6_feature_icon_gap',
            [
                'label' => esc_html__('Icon Right Space', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .icon-items .icon' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about6_feature_title_style',
            [
                'label' => esc_html__('Feature Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about6_feature_title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .icon-items .content h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about6_feature_title_typography',
                'selector' => '{{WRAPPER}} .about-activities-section-2 .icon-items .content h3',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about6_feature_text_style',
            [
                'label' => esc_html__('Feature Text', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about6_feature_text_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .icon-items .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about6_feature_text_typography',
                'selector' => '{{WRAPPER}} .about-activities-section-2 .icon-items .content p',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about6_author_style',
            [
                'label' => esc_html__('Author', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about6_author_image_width',
            [
                'label' => esc_html__('Author Image Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .author-image > img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'about6_author_name_color',
            [
                'label' => esc_html__('Author Name Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .author-image .content h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about6_author_name_typography',
                'selector' => '{{WRAPPER}} .about-activities-section-2 .author-image .content h4',
            ]
        );

        $this->add_control(
            'about6_author_designation_color',
            [
                'label' => esc_html__('Designation Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .author-image .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about6_author_designation_typography',
                'selector' => '{{WRAPPER}} .about-activities-section-2 .author-image .content p',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about6_call_style',
            [
                'label' => esc_html__('Call Info', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about6_call_label_color',
            [
                'label' => esc_html__('Label Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .author-icon .content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about6_call_label_typography',
                'selector' => '{{WRAPPER}} .about-activities-section-2 .author-icon .content span',
            ]
        );

        $this->add_control(
            'about6_call_number_color',
            [
                'label' => esc_html__('Number Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section-2 .author-icon .content h5 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about6_call_number_typography',
                'selector' => '{{WRAPPER}} .about-activities-section-2 .author-icon .content h5 a',
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
        $left_shape_image = !empty($settings['left_shape_image']['url']) ? $settings['left_shape_image']['url'] : '';
        $zebra_shape_image = !empty($settings['zebra_shape_image']['url']) ? $settings['zebra_shape_image']['url'] : '';
        $bottom_shape_image = !empty($settings['bottom_shape_image']['url']) ? $settings['bottom_shape_image']['url'] : '';
        $sun_shape_image = !empty($settings['sun_shape_image']['url']) ? $settings['sun_shape_image']['url'] : '';
        $main_about_image = !empty($settings['main_about_image']['url']) ? $settings['main_about_image']['url'] : '';
        $radius_shape_image = !empty($settings['radius_shape_image']['url']) ? $settings['radius_shape_image']['url'] : '';
        $circle_shape_image = !empty($settings['circle_shape_image']['url']) ? $settings['circle_shape_image']['url'] : '';
        $feature_icon_one = !empty($settings['feature_icon_one']['url']) ? $settings['feature_icon_one']['url'] : '';
        $feature_icon_two = !empty($settings['feature_icon_two']['url']) ? $settings['feature_icon_two']['url'] : '';
        $author_image = !empty($settings['author_image']['url']) ? $settings['author_image']['url'] : '';

        $subtitle = isset($settings['about6_subtitle_text']) ? $settings['about6_subtitle_text'] : '';
        $title = isset($settings['about6_title_text']) ? $settings['about6_title_text'] : '';
        $description = isset($settings['about6_description_text']) ? $settings['about6_description_text'] : '';
        $feature_1_title = isset($settings['about6_feature_1_title']) ? $settings['about6_feature_1_title'] : '';
        $feature_1_text = isset($settings['about6_feature_1_text']) ? $settings['about6_feature_1_text'] : '';
        $feature_2_title = isset($settings['about6_feature_2_title']) ? $settings['about6_feature_2_title'] : '';
        $feature_2_text = isset($settings['about6_feature_2_text']) ? $settings['about6_feature_2_text'] : '';
        $author_name = isset($settings['about6_author_name']) ? $settings['about6_author_name'] : '';
        $author_role = isset($settings['about6_author_role']) ? $settings['about6_author_role'] : '';
        $call_label = isset($settings['about6_call_label']) ? $settings['about6_call_label'] : '';
        $phone_display = isset($settings['about6_phone']) ? $settings['about6_phone'] : '';
        $phone_digits = $phone_display !== '' ? preg_replace('/[^\d+]/', '', $phone_display) : '';
        $phone_href = $phone_digits !== '' ? 'tel:' . $phone_digits : '';

        ?>




        <section class="about-activities-section-2 section-padding pt-0">
            <div class="left-shape">
                <img src="<?php echo esc_url($left_shape_image); ?>" alt="shape-img">
            </div>
            <div class="zebra-shape float-bob-y">
                <img src="<?php echo esc_url($zebra_shape_image); ?>" alt="shape-img">
            </div>
            <div class="bottom-shape">
                <img src="<?php echo esc_url($bottom_shape_image); ?>" alt="shape-img">
            </div>
            <div class="sun-shape">
                <img src="<?php echo esc_url($sun_shape_image); ?>" alt="shape-img">
            </div>
            <div class="container">
                <div class="about-activities-wrapper style-2 mb-55">
                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="activities-image-items">
                                <div class="activities-img">
                                    <img src="<?php echo esc_url($main_about_image); ?>" alt="img">
                                </div>
                                <div class="radius-shape">
                                    <img src="<?php echo esc_url($radius_shape_image); ?>" alt="shape-img">
                                </div>
                                <div class="circle-shape">
                                    <img src="<?php echo esc_url($circle_shape_image); ?>" alt="shape-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="activities-content">
                                <div class="section-title">
                                    <?php if ($subtitle !== '') : ?>
                                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($subtitle); ?></span>
                                    <?php endif; ?>
                                    <?php if ($title !== '') : ?>
                                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim"><?php echo nl2br(esc_html($title)); ?></h2>
                                    <?php endif; ?>
                                </div>
                                <?php if ($description !== '') : ?>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    <?php echo nl2br(esc_html($description)); ?>
                                </p>
                                <?php endif; ?>
                                <div class="row g-4 mt-4">
                                    <div class="col-xl-6 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="icon-items">
                                            <div class="icon">
                                            <img src="<?php echo esc_url($feature_icon_one); ?>" alt="img">
                                            </div>
                                            <div class="content">
                                                <?php if ($feature_1_title !== '') : ?>
                                                <h3><?php echo esc_html($feature_1_title); ?></h3>
                                                <?php endif; ?>
                                                <?php if ($feature_1_text !== '') : ?>
                                                <p><?php echo nl2br(esc_html($feature_1_text)); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon-items">
                                            <div class="icon">
                                            <img src="<?php echo esc_url($feature_icon_two); ?>" alt="img">
                                            </div>
                                            <div class="content">
                                                <?php if ($feature_2_title !== '') : ?>
                                                <h3><?php echo esc_html($feature_2_title); ?></h3>
                                                <?php endif; ?>
                                                <?php if ($feature_2_text !== '') : ?>
                                                <p><?php echo nl2br(esc_html($feature_2_text)); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-author">
                                    <div class="author-image wow fadeInUp" data-wow-delay=".3s">
                                        <img src="<?php echo esc_url($author_image); ?>" alt="author-img">
                                        <div class="content">
                                            <?php if ($author_name !== '') : ?>
                                            <h4><?php echo esc_html($author_name); ?></h4>
                                            <?php endif; ?>
                                            <?php if ($author_role !== '') : ?>
                                            <p><?php echo esc_html($author_role); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="author-icon wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <?php if ($call_label !== '') : ?>
                                            <span><?php echo esc_html($call_label); ?></span>
                                            <?php endif; ?>
                                            <?php if ($phone_display !== '' && $phone_href !== '') : ?>
                                            <h5>
                                                <a href="<?php echo esc_url($phone_href); ?>"><?php echo esc_html($phone_display); ?></a>
                                            </h5>
                                            <?php endif; ?>
                                        </div>
                                    </div>
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