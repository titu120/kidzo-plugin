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

class FT_About_5_Widget extends \Elementor\Widget_Base
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
        return 'ft-about-5';
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
        return esc_html__('FT About 5', 'ftelements');
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
            'section_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__('Committed to Helping', 'ftelements'),
            ]
        );

        $this->add_control(
            'subtitle_icon',
            [
                'label' => esc_html__('Subtitle Icon', 'ftelements'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fa-sharp fa-solid fa-heart',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => esc_html__('Changing people lives, one step.', 'ftelements'),
            ]
        );

        $this->add_control(
            'desc1',
            [
                'label' => esc_html__('Description 1', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Since 1994, we have supported more than 1,000 local partners to reach more than 15 million children, and we’re working with new organizations.', 'ftelements'),
            ]
        );

        $this->add_control(
            'desc2',
            [
                'label' => esc_html__('Description 2', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('We work with babies, children and young people in their families, schools and communities to ensure they grow up to be healthy and happy. We work with babies, children.', 'ftelements'),
            ]
        );

        $this->add_control(
            'main_image',
            [
                'label' => esc_html__('Main Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'small_image',
            [
                'label' => esc_html__('Small Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'bottom_box_text',
            [
                'label' => esc_html__('Bottom Box Text', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__('Leading charity platform in world.', 'ftelements'),
            ]
        );

        $this->add_control(
            'bottom_box_icon',
            [
                'label' => esc_html__('Bottom Box Icon', 'ftelements'),
                'type' => Controls_Manager::ICONS,
            ]
        );

        $this->end_controls_section();

        // Style Section
        $this->start_controls_section(
            'section_style',
            [
                'label' => esc_html__('Section Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-about-section-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => esc_html__('Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-about-section-inner',
            ]
        );

        $this->end_controls_section();

        // Subtitle Style
        $this->start_controls_section(
            'subtitle_style',
            [
                'label' => esc_html__('Subtitle Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-sub-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .grt-sub-title',
            ]
        );

        $this->add_control(
            'subtitle_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-sub-title i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Title Style
        $this->start_controls_section(
            'title_style',
            [
                'label' => esc_html__('Title Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .split-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .split-title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .split-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Description Style
        $this->start_controls_section(
            'desc_style',
            [
                'label' => esc_html__('Description Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'desc_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .text, {{WRAPPER}} .about-content .text-2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'desc_typography',
                'selector' => '{{WRAPPER}} .about-content .text, {{WRAPPER}} .about-content .text-2',
            ]
        );

        $this->add_responsive_control(
            'desc_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-content .text, {{WRAPPER}} .about-content .text-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Image Style
        $this->start_controls_section(
            'image_style',
            [
                'label' => esc_html__('Image Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'main_image_heading',
            [
                'label' => esc_html__('Main Image', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'main_image_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-image img:not(.small-image img)' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'small_image_heading',
            [
                'label' => esc_html__('Small Image', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'small_image_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-image .small-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'small_image_position',
            [
                'label' => esc_html__('Position', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-image .small-image' => 'top: {{TOP}}{{UNIT}}; right: {{RIGHT}}{{UNIT}}; bottom: {{BOTTOM}}{{UNIT}}; left: {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Bottom Box Style
        $this->start_controls_section(
            'bottom_box_style',
            [
                'label' => esc_html__('Bottom Box Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'bottom_box_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bottom-box' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bottom_box_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bottom-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bottom_box_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bottom-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bottom_box_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bottom-box svg path, {{WRAPPER}} .bottom-box i' => 'fill: {{VALUE}}; color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bottom_box_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .bottom-box svg' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                    '{{WRAPPER}} .bottom-box i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'bottom_box_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .bottom-box' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'bottom_box_typography',
                'selector' => '{{WRAPPER}} .bottom-box',
            ]
        );

        $this->add_responsive_control(
            'bottom_box_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bottom-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

        ?>



        <section class="grt-about-section-inner section-padding fix">
            <div class="container">
                <div class="grt-about-inner-warpper">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-image">
                                <?php if (!empty($settings['main_image']['url'])): ?>
                                    <img src="<?php echo esc_url($settings['main_image']['url']); ?>"
                                        alt="<?php echo esc_attr(get_post_meta($settings['main_image']['id'], '_wp_attachment_image_alt', true)); ?>"
                                        class="wow fadeInUp" data-wow-delay=".3s">
                                <?php endif; ?>

                                <?php if (!empty($settings['small_image']['url'])): ?>
                                    <div class="small-image wow fadeInUp" data-wow-delay=".5s">
                                        <img src="<?php echo esc_url($settings['small_image']['url']); ?>"
                                            alt="<?php echo esc_attr(get_post_meta($settings['small_image']['id'], '_wp_attachment_image_alt', true)); ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="grt-section-title mb-0">
                                    <?php if (!empty($settings['subtitle'])): ?>
                                        <span class="grt-sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                            <?php \Elementor\Icons_Manager::render_icon($settings['subtitle_icon'], ['aria-hidden' => 'true']); ?>
                                            <?php echo esc_html($settings['subtitle']); ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if (!empty($settings['title'])): ?>
                                        <h2 class="split-title">
                                            <?php echo esc_html($settings['title']); ?>
                                        </h2>
                                    <?php endif; ?>
                                </div>

                                <?php if (!empty($settings['desc1'])): ?>
                                    <p class="text wow fadeInUp" data-wow-delay=".3s">
                                        <?php echo esc_html($settings['desc1']); ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (!empty($settings['desc2'])): ?>
                                    <p class="text-2 wow fadeInUp" data-wow-delay=".5s">
                                        <?php echo esc_html($settings['desc2']); ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (!empty($settings['bottom_box_text'])): ?>
                                    <div class="bottom-box wow fadeInUp" data-wow-delay=".7s">
                                        <?php if (!empty($settings['bottom_box_icon']['value'])): ?>
                                            <?php \Elementor\Icons_Manager::render_icon($settings['bottom_box_icon'], ['aria-hidden' => 'true']); ?>
                                        <?php else: ?>
                                            <svg width="37" height="35" viewBox="0 0 37 35" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.66667 34.8334H21.3033C22.3613 34.8339 23.4068 34.6053 24.368 34.1631C25.3292 33.721 26.1831 33.0759 26.8712 32.2722L36.2248 21.3602C36.4207 21.1321 36.5575 20.8593 36.6231 20.5659C36.6887 20.2725 36.6811 19.9675 36.6011 19.6777C36.521 19.3879 36.3709 19.1222 36.164 18.9041C35.9571 18.6859 35.6997 18.5221 35.4145 18.4269L31.8065 17.2242C30.9345 16.9407 30.006 16.8766 29.1033 17.0374C28.2006 17.1983 27.3514 17.5792 26.631 18.1463L20.7918 22.8159L19.6607 20.5517C19.0547 19.3312 18.119 18.3048 16.9597 17.5887C15.8003 16.8726 14.4636 16.4955 13.101 16.5H3.66667C1.6445 16.5 0 18.1445 0 20.1667V31.1667C0 33.1889 1.6445 34.8334 3.66667 34.8334ZM3.66667 20.1667H13.101C14.4998 20.1667 15.7557 20.9422 16.3808 22.1925L17.2003 23.8333H9.16667V27.5H20.1923C20.4744 27.4963 20.7518 27.4273 21.0027 27.2983L21.0082 27.2965L21.0155 27.2928H21.021L21.0247 27.291H21.032L21.0338 27.2892C21.0503 27.2947 21.0393 27.2874 21.0393 27.2874C21.0577 27.2874 21.043 27.2855 21.043 27.2855H21.0448L21.0485 27.2837L21.054 27.2819L21.0577 27.28L21.0613 27.2782L21.0668 27.2764L21.0705 27.2745C21.076 27.2745 21.0742 27.2727 21.0742 27.2727L21.0797 27.269L21.0833 27.2672L21.087 27.2654L21.0925 27.2635L21.0962 27.2617H21.098L21.1017 27.2598L21.1072 27.258L21.1108 27.2562C21.1273 27.2544 21.1163 27.2543 21.1163 27.2543L21.12 27.2525C21.1906 27.2099 21.2581 27.1621 21.3217 27.1095L28.9227 21.0284C29.403 20.647 30.0648 20.5279 30.646 20.7222L31.6672 21.0632L24.09 29.9053C23.7415 30.3011 23.3127 30.6182 22.8323 30.8357C22.3519 31.0532 21.8307 31.166 21.3033 31.1667H3.66667V20.1667ZM25.6667 1.72438e-05H25.6355C25.3367 0.00368391 23.7912 0.0715171 22 1.29252C20.2565 0.104517 18.7477 0.00918378 18.392 0.00185044L18.337 1.72438e-05H18.3297C16.8612 1.72438e-05 15.4788 0.573851 14.4448 1.60968C13.4072 2.64918 12.8333 4.02968 12.8333 5.50002C12.8333 6.97035 13.4072 8.35085 14.4118 9.35735L20.6708 15.9317C20.843 16.1104 21.0496 16.2526 21.278 16.3497C21.5065 16.4467 21.7522 16.4966 22.0004 16.4965C22.2486 16.4963 22.4942 16.446 22.7226 16.3487C22.9509 16.2513 23.1572 16.1089 23.3292 15.9299L29.5552 9.38852C30.5947 8.35085 31.1667 6.97035 31.1667 5.50002C31.1667 4.02968 30.5928 2.64918 29.557 1.61152C29.0479 1.09918 28.4423 0.692942 27.7751 0.416322C27.108 0.139702 26.3926 -0.00179788 25.6703 1.72438e-05H25.6667ZM27.5 5.50002C27.5 5.98952 27.3093 6.44968 26.9298 6.82918L22 12.0084L17.0372 6.79618C16.6907 6.44968 16.5 5.98952 16.5 5.50002C16.5 5.01052 16.6907 4.55035 17.039 4.20202C17.3705 3.86479 17.822 3.67235 18.2948 3.66668C18.3407 3.66852 19.2152 3.72535 20.251 4.55585C20.3995 4.67502 20.5498 4.81068 20.7038 4.96285L22 6.25902L23.2962 4.96285C23.4502 4.81068 23.6005 4.67502 23.749 4.55585C24.7188 3.77668 25.5383 3.67952 25.6777 3.66852C25.9166 3.66847 26.1532 3.71576 26.3738 3.80764C26.5944 3.89952 26.7946 4.03418 26.9628 4.20385C27.3093 4.55035 27.5 5.01052 27.5 5.50002Z"
                                                    fill="#16333B" />
                                            </svg>
                                        <?php endif; ?>
                                        <?php echo esc_html($settings['bottom_box_text']); ?>
                                    </div>
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