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

class FT_About3_Widget extends \Elementor\Widget_Base
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
        return 'ft-about3';
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
        return esc_html__('FT About 3', 'ftelements');
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
            'about3_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'img_shape_11',
            [
                'label'   => esc_html__('Shape Image 1', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/shape7.png',
                ],
            ]
        );

        $this->add_control(
            'img_shape_12',
            [
                'label'   => esc_html__('Shape Image 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/shape8.png',
                ],
            ]
        );

        $this->add_control(
            'img_main',
            [
                'label'   => esc_html__('Main Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/choose-us.jpg',
                ],
            ]
        );

        $this->add_control(
            'img_arrow',
            [
                'label'   => esc_html__('Button Arrow Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/arrow1.svg',
                ],
            ]
        );

        $this->add_control(
            'img_phone',
            [
                'label'   => esc_html__('Phone Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/icon/telephone.svg',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about3_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'label'    => esc_html__('Background', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .choose-us-section-3',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about3_style_shape_images',
            [
                'label' => esc_html__('Shape Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'shape_11_width',
            [
                'label'      => esc_html__('Shape 1 Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 1, 'max' => 800],
                    '%'  => ['min' => 1, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .shape-11 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape_12_width',
            [
                'label'      => esc_html__('Shape 2 Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 1, 'max' => 800],
                    '%'  => ['min' => 1, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .shape-12 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'shape_images_filter',
                'selector' => '{{WRAPPER}} .choose-us-section-3 .shape-11 img, {{WRAPPER}} .choose-us-section-3 .shape-12 img',
            ]
        );

        $this->add_control(
            'shape_images_opacity',
            [
                'label'     => esc_html__('Opacity', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'size_units' => ['%'],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-3 .shape-11 img, {{WRAPPER}} .choose-us-section-3 .shape-12 img' => 'opacity: {{SIZE}}%;',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about3_style_main_image',
            [
                'label' => esc_html__('Main Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'main_image_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 1, 'max' => 1200],
                    '%'  => ['min' => 1, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .choose-us-image-2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'main_image_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .choose-us-image-2 img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'main_image_border',
                'selector' => '{{WRAPPER}} .choose-us-section-3 .choose-us-image-2 img',
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'main_image_filter',
                'selector' => '{{WRAPPER}} .choose-us-section-3 .choose-us-image-2 img',
            ]
        );

        $this->add_control(
            'main_image_opacity',
            [
                'label'      => esc_html__('Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['%'],
                'range'      => [
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .choose-us-image-2 img' => 'opacity: {{SIZE}}%;',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about3_style_subtitle',
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
                    '{{WRAPPER}} .choose-us-section-3 .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .choose-us-section-3 .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about3_style_title',
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
                    '{{WRAPPER}} .choose-us-section-3 .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .choose-us-section-3 .sec_title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about3_style_description',
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
                    '{{WRAPPER}} .choose-us-section-3 .choose-items > p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'description_typography',
                'selector' => '{{WRAPPER}} .choose-us-section-3 .choose-items > p',
            ]
        );

        $this->add_responsive_control(
            'description_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .choose-items > p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about3_style_list',
            [
                'label' => esc_html__('List Items', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'list_item_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-3 .about-list-items li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'list_item_typography',
                'selector' => '{{WRAPPER}} .choose-us-section-3 .about-list-items li',
            ]
        );

        $this->add_responsive_control(
            'list_item_gap',
            [
                'label'      => esc_html__('Item Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .about-list-items li' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'list_icon_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-3 .about-list-items li .icon svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about3_style_button',
            [
                'label' => esc_html__('Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-3 .theme-btn .theme-text, {{WRAPPER}} .choose-us-section-3 .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_bg_svg_color',
            [
                'label'     => esc_html__('Background Shape Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-3 .theme-btn .theme-bg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_arrow_size',
            [
                'label'      => esc_html__('Arrow Icon Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 1, 'max' => 80],
                    '%'  => ['min' => 1, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .theme-btn .theme-text img, {{WRAPPER}} .choose-us-section-3 .theme-btn .theme-text2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about3_style_contact',
            [
                'label' => esc_html__('Contact Box', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'contact_label_color',
            [
                'label'     => esc_html__('Label Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-3 .author-icon .content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact_phone_color',
            [
                'label'     => esc_html__('Phone Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-3 .author-icon .content h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact_label_typography',
                'selector' => '{{WRAPPER}} .choose-us-section-3 .author-icon .content span',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact_phone_typography',
                'selector' => '{{WRAPPER}} .choose-us-section-3 .author-icon .content h3 a',
            ]
        );

        $this->add_responsive_control(
            'contact_icon_width',
            [
                'label'      => esc_html__('Phone Icon Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 1, 'max' => 120],
                    '%'  => ['min' => 1, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .author-icon .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact_box_gap',
            [
                'label'      => esc_html__('Box Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .choose-us-section-3 .author-icon' => 'gap: {{SIZE}}{{UNIT}};',
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
        $shape_11 = !empty($settings['img_shape_11']['url']) ? $settings['img_shape_11']['url'] : '';
        $shape_12 = !empty($settings['img_shape_12']['url']) ? $settings['img_shape_12']['url'] : '';
        $main_img = !empty($settings['img_main']['url']) ? $settings['img_main']['url'] : '';
        $arrow_img = !empty($settings['img_arrow']['url']) ? $settings['img_arrow']['url'] : '';
        $phone_img = !empty($settings['img_phone']['url']) ? $settings['img_phone']['url'] : '';

        ?>




        <section class="choose-us-section choose-us-section-3 fix section-padding">
            <div class="shape-11 bz-gsap-animate-circle">
                <?php if ($shape_11) : ?>
                    <img src="<?php echo esc_url($shape_11); ?>" alt="img">
                <?php endif; ?>
            </div>
            <div class="shape-12 bz-gsap-animate-circle">
                <?php if ($shape_12) : ?>
                    <img src="<?php echo esc_url($shape_12); ?>" alt="img">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="choose-us-wrapper style-about-3">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="choose-us-image-items wow fadeInUp" data-wow-delay=".3s">
                                <div class="choose-us-image-2">
                                    <?php if ($main_img) : ?>
                                        <img src="<?php echo esc_url($main_img); ?>" alt="img">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="choose-us-content">
                                <div class="section-title mb-0">
                                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Who We Are</span>
                                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                        We Are A Professional Nanny Service For Your Kids
                                    </h2>
                                </div>
                                <div class="choose-items wow fadeInUp" data-wow-delay=".3s">
                                    <p>
                                        Qualified teachers who understand children’s needs and focus on personal attention. through play-based and academic learning.
                                    </p>
                                    <div class="about-list-items">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.8836 2.14995C19.8708 2.0905 19.8439 2.03311 19.782 1.98439C19.2172 1.53727 17.882 -0.265658 17.0051 0.0332479C15.7819 0.450643 9.05689 9.29809 7.56608 11.248C7.04547 10.504 2.70927 4.55606 2.4917 4.68941C1.7465 5.14479 0.977351 5.53411 0.265592 6.04811C0.185911 6.10591 0.145039 6.18063 0.133066 6.25701C0.0356327 6.33298 -0.0267081 6.4589 0.0112744 6.61289C0.622297 9.09414 2.69978 11.0482 4.18357 13.0026C5.0452 14.1376 6.2466 16.9945 7.86622 15.6457C7.89388 15.6226 7.9104 15.5962 7.92856 15.5693C8.24646 15.4397 8.51853 15.1874 8.8034 14.8803C10.0378 13.5509 11.1245 12.0902 12.2697 10.6816C13.4938 9.17547 14.8517 7.76558 16.1964 6.37509C17.3705 5.16089 18.4134 3.55324 19.7973 2.60367C19.9698 2.48436 19.9703 2.28743 19.8836 2.14995ZM3.89911 6.52826C3.51103 6.18518 3.10891 5.85159 2.68904 5.53039C3.14153 5.81072 3.54076 6.14802 3.89911 6.52826ZM2.03838 6.81313C1.9554 6.73468 1.86251 6.71858 1.77787 6.73799C1.72462 6.58936 1.68044 6.43991 1.65649 6.29169C1.64081 6.19591 1.59374 6.12531 1.53264 6.07783C1.55741 6.05926 1.58053 6.04068 1.60613 6.02251C1.61067 6.09146 1.63544 6.1604 1.68787 6.22316C2.62546 7.3325 3.68195 8.32252 4.63523 9.41699C4.74464 9.54291 4.85157 9.67007 4.95891 9.7964C3.94618 8.83693 3.05318 7.76723 2.03838 6.81313ZM5.83746 14.2197C5.932 14.3287 6.02613 14.4381 6.12274 14.545C6.23463 14.6978 6.34775 14.8506 6.46458 15.0012C6.465 15.0029 6.46541 15.005 6.46582 15.0062C6.23669 14.7998 6.02613 14.5083 5.83746 14.2197ZM6.14091 11.8008C6.41876 12.046 6.70941 12.2797 7.01492 12.4672C7.00749 12.5159 7.0112 12.5633 7.02318 12.6092C7.02689 12.6294 7.03515 12.6496 7.04299 12.6694C6.75111 12.3722 6.44683 12.0861 6.14091 11.8008ZM7.49218 14.9884C7.49135 14.9856 7.49176 14.9827 7.49053 14.9806C7.48062 14.9579 7.46906 14.9377 7.45915 14.9154C7.74237 14.9121 8.11311 14.7019 8.52018 14.3745C8.16059 14.7139 7.80512 14.9529 7.49218 14.9884ZM17.1385 0.825926C16.8743 0.941112 16.6542 1.11864 16.4573 1.32713C16.6522 1.04887 16.8586 0.835009 17.1385 0.825926ZM10.601 9.38768C10.4433 9.55323 10.1609 9.80384 9.82026 10.111C10.1212 9.81003 10.4333 9.52392 10.7137 9.23823C11.6281 8.30848 12.3362 7.16818 13.0744 6.07825C13.9116 5.25667 14.779 4.47472 15.5791 3.61103C16.1055 3.04212 16.4296 2.13013 17.0452 1.6442C16.6348 2.07687 16.3107 2.70193 16.0341 3.30263C15.5953 3.76503 15.2072 4.2877 14.8001 4.79386C13.5075 6.40316 12.0208 7.89769 10.601 9.38768ZM16.0081 5.53989C15.357 6.32885 14.6263 7.04721 13.9314 7.79696C14.4558 7.13969 14.9764 6.47913 15.4545 5.78306C15.492 5.72815 15.5374 5.65094 15.5874 5.5564C15.7554 5.38837 15.9235 5.22075 16.0882 5.04983C16.5655 4.55275 17.1327 4.00655 17.4808 3.37075C17.7586 2.99712 18.0629 2.62638 18.4068 2.40344C17.9085 3.53424 16.7 4.70221 16.0081 5.53989Z" fill="#F39F5F" />
                                                    </svg>

                                                </div>
                                                Experienced & caring teachers
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.8836 2.14995C19.8708 2.0905 19.8439 2.03311 19.782 1.98439C19.2172 1.53727 17.882 -0.265658 17.0051 0.0332479C15.7819 0.450643 9.05689 9.29809 7.56608 11.248C7.04547 10.504 2.70927 4.55606 2.4917 4.68941C1.7465 5.14479 0.977351 5.53411 0.265592 6.04811C0.185911 6.10591 0.145039 6.18063 0.133066 6.25701C0.0356327 6.33298 -0.0267081 6.4589 0.0112744 6.61289C0.622297 9.09414 2.69978 11.0482 4.18357 13.0026C5.0452 14.1376 6.2466 16.9945 7.86622 15.6457C7.89388 15.6226 7.9104 15.5962 7.92856 15.5693C8.24646 15.4397 8.51853 15.1874 8.8034 14.8803C10.0378 13.5509 11.1245 12.0902 12.2697 10.6816C13.4938 9.17547 14.8517 7.76558 16.1964 6.37509C17.3705 5.16089 18.4134 3.55324 19.7973 2.60367C19.9698 2.48436 19.9703 2.28743 19.8836 2.14995ZM3.89911 6.52826C3.51103 6.18518 3.10891 5.85159 2.68904 5.53039C3.14153 5.81072 3.54076 6.14802 3.89911 6.52826ZM2.03838 6.81313C1.9554 6.73468 1.86251 6.71858 1.77787 6.73799C1.72462 6.58936 1.68044 6.43991 1.65649 6.29169C1.64081 6.19591 1.59374 6.12531 1.53264 6.07783C1.55741 6.05926 1.58053 6.04068 1.60613 6.02251C1.61067 6.09146 1.63544 6.1604 1.68787 6.22316C2.62546 7.3325 3.68195 8.32252 4.63523 9.41699C4.74464 9.54291 4.85157 9.67007 4.95891 9.7964C3.94618 8.83693 3.05318 7.76723 2.03838 6.81313ZM5.83746 14.2197C5.932 14.3287 6.02613 14.4381 6.12274 14.545C6.23463 14.6978 6.34775 14.8506 6.46458 15.0012C6.465 15.0029 6.46541 15.005 6.46582 15.0062C6.23669 14.7998 6.02613 14.5083 5.83746 14.2197ZM6.14091 11.8008C6.41876 12.046 6.70941 12.2797 7.01492 12.4672C7.00749 12.5159 7.0112 12.5633 7.02318 12.6092C7.02689 12.6294 7.03515 12.6496 7.04299 12.6694C6.75111 12.3722 6.44683 12.0861 6.14091 11.8008ZM7.49218 14.9884C7.49135 14.9856 7.49176 14.9827 7.49053 14.9806C7.48062 14.9579 7.46906 14.9377 7.45915 14.9154C7.74237 14.9121 8.11311 14.7019 8.52018 14.3745C8.16059 14.7139 7.80512 14.9529 7.49218 14.9884ZM17.1385 0.825926C16.8743 0.941112 16.6542 1.11864 16.4573 1.32713C16.6522 1.04887 16.8586 0.835009 17.1385 0.825926ZM10.601 9.38768C10.4433 9.55323 10.1609 9.80384 9.82026 10.111C10.1212 9.81003 10.4333 9.52392 10.7137 9.23823C11.6281 8.30848 12.3362 7.16818 13.0744 6.07825C13.9116 5.25667 14.779 4.47472 15.5791 3.61103C16.1055 3.04212 16.4296 2.13013 17.0452 1.6442C16.6348 2.07687 16.3107 2.70193 16.0341 3.30263C15.5953 3.76503 15.2072 4.2877 14.8001 4.79386C13.5075 6.40316 12.0208 7.89769 10.601 9.38768ZM16.0081 5.53989C15.357 6.32885 14.6263 7.04721 13.9314 7.79696C14.4558 7.13969 14.9764 6.47913 15.4545 5.78306C15.492 5.72815 15.5374 5.65094 15.5874 5.5564C15.7554 5.38837 15.9235 5.22075 16.0882 5.04983C16.5655 4.55275 17.1327 4.00655 17.4808 3.37075C17.7586 2.99712 18.0629 2.62638 18.4068 2.40344C17.9085 3.53424 16.7 4.70221 16.0081 5.53989Z" fill="#F39F5F" />
                                                    </svg>

                                                </div>
                                                Modern learning methods
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.8836 2.14995C19.8708 2.0905 19.8439 2.03311 19.782 1.98439C19.2172 1.53727 17.882 -0.265658 17.0051 0.0332479C15.7819 0.450643 9.05689 9.29809 7.56608 11.248C7.04547 10.504 2.70927 4.55606 2.4917 4.68941C1.7465 5.14479 0.977351 5.53411 0.265592 6.04811C0.185911 6.10591 0.145039 6.18063 0.133066 6.25701C0.0356327 6.33298 -0.0267081 6.4589 0.0112744 6.61289C0.622297 9.09414 2.69978 11.0482 4.18357 13.0026C5.0452 14.1376 6.2466 16.9945 7.86622 15.6457C7.89388 15.6226 7.9104 15.5962 7.92856 15.5693C8.24646 15.4397 8.51853 15.1874 8.8034 14.8803C10.0378 13.5509 11.1245 12.0902 12.2697 10.6816C13.4938 9.17547 14.8517 7.76558 16.1964 6.37509C17.3705 5.16089 18.4134 3.55324 19.7973 2.60367C19.9698 2.48436 19.9703 2.28743 19.8836 2.14995ZM3.89911 6.52826C3.51103 6.18518 3.10891 5.85159 2.68904 5.53039C3.14153 5.81072 3.54076 6.14802 3.89911 6.52826ZM2.03838 6.81313C1.9554 6.73468 1.86251 6.71858 1.77787 6.73799C1.72462 6.58936 1.68044 6.43991 1.65649 6.29169C1.64081 6.19591 1.59374 6.12531 1.53264 6.07783C1.55741 6.05926 1.58053 6.04068 1.60613 6.02251C1.61067 6.09146 1.63544 6.1604 1.68787 6.22316C2.62546 7.3325 3.68195 8.32252 4.63523 9.41699C4.74464 9.54291 4.85157 9.67007 4.95891 9.7964C3.94618 8.83693 3.05318 7.76723 2.03838 6.81313ZM5.83746 14.2197C5.932 14.3287 6.02613 14.4381 6.12274 14.545C6.23463 14.6978 6.34775 14.8506 6.46458 15.0012C6.465 15.0029 6.46541 15.005 6.46582 15.0062C6.23669 14.7998 6.02613 14.5083 5.83746 14.2197ZM6.14091 11.8008C6.41876 12.046 6.70941 12.2797 7.01492 12.4672C7.00749 12.5159 7.0112 12.5633 7.02318 12.6092C7.02689 12.6294 7.03515 12.6496 7.04299 12.6694C6.75111 12.3722 6.44683 12.0861 6.14091 11.8008ZM7.49218 14.9884C7.49135 14.9856 7.49176 14.9827 7.49053 14.9806C7.48062 14.9579 7.46906 14.9377 7.45915 14.9154C7.74237 14.9121 8.11311 14.7019 8.52018 14.3745C8.16059 14.7139 7.80512 14.9529 7.49218 14.9884ZM17.1385 0.825926C16.8743 0.941112 16.6542 1.11864 16.4573 1.32713C16.6522 1.04887 16.8586 0.835009 17.1385 0.825926ZM10.601 9.38768C10.4433 9.55323 10.1609 9.80384 9.82026 10.111C10.1212 9.81003 10.4333 9.52392 10.7137 9.23823C11.6281 8.30848 12.3362 7.16818 13.0744 6.07825C13.9116 5.25667 14.779 4.47472 15.5791 3.61103C16.1055 3.04212 16.4296 2.13013 17.0452 1.6442C16.6348 2.07687 16.3107 2.70193 16.0341 3.30263C15.5953 3.76503 15.2072 4.2877 14.8001 4.79386C13.5075 6.40316 12.0208 7.89769 10.601 9.38768ZM16.0081 5.53989C15.357 6.32885 14.6263 7.04721 13.9314 7.79696C14.4558 7.13969 14.9764 6.47913 15.4545 5.78306C15.492 5.72815 15.5374 5.65094 15.5874 5.5564C15.7554 5.38837 15.9235 5.22075 16.0882 5.04983C16.5655 4.55275 17.1327 4.00655 17.4808 3.37075C17.7586 2.99712 18.0629 2.62638 18.4068 2.40344C17.9085 3.53424 16.7 4.70221 16.0081 5.53989Z" fill="#F39F5F" />
                                                    </svg>

                                                </div>
                                                Safe & friendly environment
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.8836 2.14995C19.8708 2.0905 19.8439 2.03311 19.782 1.98439C19.2172 1.53727 17.882 -0.265658 17.0051 0.0332479C15.7819 0.450643 9.05689 9.29809 7.56608 11.248C7.04547 10.504 2.70927 4.55606 2.4917 4.68941C1.7465 5.14479 0.977351 5.53411 0.265592 6.04811C0.185911 6.10591 0.145039 6.18063 0.133066 6.25701C0.0356327 6.33298 -0.0267081 6.4589 0.0112744 6.61289C0.622297 9.09414 2.69978 11.0482 4.18357 13.0026C5.0452 14.1376 6.2466 16.9945 7.86622 15.6457C7.89388 15.6226 7.9104 15.5962 7.92856 15.5693C8.24646 15.4397 8.51853 15.1874 8.8034 14.8803C10.0378 13.5509 11.1245 12.0902 12.2697 10.6816C13.4938 9.17547 14.8517 7.76558 16.1964 6.37509C17.3705 5.16089 18.4134 3.55324 19.7973 2.60367C19.9698 2.48436 19.9703 2.28743 19.8836 2.14995ZM3.89911 6.52826C3.51103 6.18518 3.10891 5.85159 2.68904 5.53039C3.14153 5.81072 3.54076 6.14802 3.89911 6.52826ZM2.03838 6.81313C1.9554 6.73468 1.86251 6.71858 1.77787 6.73799C1.72462 6.58936 1.68044 6.43991 1.65649 6.29169C1.64081 6.19591 1.59374 6.12531 1.53264 6.07783C1.55741 6.05926 1.58053 6.04068 1.60613 6.02251C1.61067 6.09146 1.63544 6.1604 1.68787 6.22316C2.62546 7.3325 3.68195 8.32252 4.63523 9.41699C4.74464 9.54291 4.85157 9.67007 4.95891 9.7964C3.94618 8.83693 3.05318 7.76723 2.03838 6.81313ZM5.83746 14.2197C5.932 14.3287 6.02613 14.4381 6.12274 14.545C6.23463 14.6978 6.34775 14.8506 6.46458 15.0012C6.465 15.0029 6.46541 15.005 6.46582 15.0062C6.23669 14.7998 6.02613 14.5083 5.83746 14.2197ZM6.14091 11.8008C6.41876 12.046 6.70941 12.2797 7.01492 12.4672C7.00749 12.5159 7.0112 12.5633 7.02318 12.6092C7.02689 12.6294 7.03515 12.6496 7.04299 12.6694C6.75111 12.3722 6.44683 12.0861 6.14091 11.8008ZM7.49218 14.9884C7.49135 14.9856 7.49176 14.9827 7.49053 14.9806C7.48062 14.9579 7.46906 14.9377 7.45915 14.9154C7.74237 14.9121 8.11311 14.7019 8.52018 14.3745C8.16059 14.7139 7.80512 14.9529 7.49218 14.9884ZM17.1385 0.825926C16.8743 0.941112 16.6542 1.11864 16.4573 1.32713C16.6522 1.04887 16.8586 0.835009 17.1385 0.825926ZM10.601 9.38768C10.4433 9.55323 10.1609 9.80384 9.82026 10.111C10.1212 9.81003 10.4333 9.52392 10.7137 9.23823C11.6281 8.30848 12.3362 7.16818 13.0744 6.07825C13.9116 5.25667 14.779 4.47472 15.5791 3.61103C16.1055 3.04212 16.4296 2.13013 17.0452 1.6442C16.6348 2.07687 16.3107 2.70193 16.0341 3.30263C15.5953 3.76503 15.2072 4.2877 14.8001 4.79386C13.5075 6.40316 12.0208 7.89769 10.601 9.38768ZM16.0081 5.53989C15.357 6.32885 14.6263 7.04721 13.9314 7.79696C14.4558 7.13969 14.9764 6.47913 15.4545 5.78306C15.492 5.72815 15.5374 5.65094 15.5874 5.5564C15.7554 5.38837 15.9235 5.22075 16.0882 5.04983C16.5655 4.55275 17.1327 4.00655 17.4808 3.37075C17.7586 2.99712 18.0629 2.62638 18.4068 2.40344C17.9085 3.53424 16.7 4.70221 16.0081 5.53989Z" fill="#F39F5F" />
                                                    </svg>

                                                </div>
                                                Focus on moral & social values
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="about-button wow fadeInUp" data-wow-delay=".6s">
                                    <a href="about.html" class="theme-btn hover-header">
                                        <span class="theme-bg">
                                            <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#385469"></path>
                                            </svg>
                                        </span>
                                        <span class="theme-text">know more <?php if ($arrow_img) : ?><img src="<?php echo esc_url($arrow_img); ?>" alt=""><?php endif; ?></span>
                                        <span class="theme-text2">know more <?php if ($arrow_img) : ?><img src="<?php echo esc_url($arrow_img); ?>" alt=""><?php endif; ?></span>
                                    </a>
                                    <div class="author-icon">
                                        <div class="icon">
                                            <?php if ($phone_img) : ?>
                                                <img src="<?php echo esc_url($phone_img); ?>" alt="img">
                                            <?php endif; ?>
                                        </div>
                                        <div class="content">
                                            <span>Call Us Now</span>
                                            <h3>
                                                <a href="tel:+11123065498">+11 123 0654 98</a>
                                            </h3>
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