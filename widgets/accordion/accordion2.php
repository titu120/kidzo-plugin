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

class FT_Accordion_2_Widget extends \Elementor\Widget_Base
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
        return 'ft-accordion-2';
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
        return esc_html__('FT Accordion 2', 'ftelements');
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
                'default' => esc_html__('Still Have Questions?', 'ftelements'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('More questions, clear <br> answers', 'ftelements'),
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'question',
            [
                'label' => esc_html__('Question', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Accordion Question', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'answer',
            [
                'label' => esc_html__('Answer', 'ftelements'),
                'type' => Controls_Manager::WYSIWYG,
                'default' => esc_html__('Accordion Answer content goes here.', 'ftelements'),
            ]
        );

        $this->add_control(
            'accordion_items',
            [
                'label' => esc_html__('Accordion Items', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'question' => esc_html__('What is your mission as a charity organization?', 'ftelements'),
                        'answer' => esc_html__('Our mission is to support vulnerable individuals and families by providing essential resources such as food, healthcare, education, and emergency assistance. We work to improve quality of life and create long-term opportunities so people can become self-reliant and hopeful about their future. Every program we run is focused on dignity, compassion, and sustainable impact.', 'ftelements'),
                    ],
                    [
                        'question' => esc_html__('Who can receive help from your organization?', 'ftelements'),
                        'answer' => esc_html__('Our mission is to support vulnerable individuals and families by providing essential resources such as food, healthcare, education, and emergency assistance. We work to improve quality of life and create long-term opportunities so people can become self-reliant and hopeful about their future. Every program we run is focused on dignity, compassion, and sustainable impact.', 'ftelements'),
                    ],
                    [
                        'question' => esc_html__('Can I choose where my donation goes?', 'ftelements'),
                        'answer' => esc_html__('Our mission is to support vulnerable individuals and families by providing essential resources such as food, healthcare, education, and emergency assistance. We work to improve quality of life and create long-term opportunities so people can become self-reliant and hopeful about their future. Every program we run is focused on dignity, compassion, and sustainable impact.', 'ftelements'),
                    ],
                    [
                        'question' => esc_html__('Do you work with other organizations or partners?', 'ftelements'),
                        'answer' => esc_html__('Our mission is to support vulnerable individuals and families by providing essential resources such as food, healthcare, education, and emergency assistance. We work to improve quality of life and create long-term opportunities so people can become self-reliant and hopeful about their future. Every program we run is focused on dignity, compassion, and sustainable impact.', 'ftelements'),
                    ],
                    [
                        'question' => esc_html__('How do you ensure transparency and trust?', 'ftelements'),
                        'answer' => esc_html__('Our mission is to support vulnerable individuals and families by providing essential resources such as food, healthcare, education, and emergency assistance. We work to improve quality of life and create long-term opportunities so people can become self-reliant and hopeful about their future. Every program we run is focused on dignity, compassion, and sustainable impact.', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ question }}}',
            ]
        );

        $this->end_controls_section();

        // Style Tab
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
                    '{{WRAPPER}} .grt-faq-section-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-faq-section-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => esc_html__('Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-faq-section-2',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'section_border',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .grt-faq-section-2',
            ]
        );

        $this->end_controls_section();

        // Header Style
        $this->start_controls_section(
            'header_style',
            [
                'label' => esc_html__('Header Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'header_alignment',
            [
                'label' => esc_html__('Alignment', 'ftelements'),
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
                    '{{WRAPPER}} .grt-section-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'header_max_width',
            [
                'label' => esc_html__('Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title' => 'max-width: {{SIZE}}{{UNIT}}; margin-left: auto; margin-right: auto;',
                ],
            ]
        );

        $this->add_control(
            'subtitle_heading',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
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

        $this->add_control(
            'subtitle_icon_heading',
            [
                'label' => esc_html__('Subtitle Icon', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'subtitle_icon_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-sub-title i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_icon_size',
            [
                'label' => esc_html__('Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-sub-title i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_icon_spacing',
            [
                'label' => esc_html__('Spacing', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-sub-title i' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'title_heading',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
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

        // Accordion Style
        $this->start_controls_section(
            'accordion_style',
            [
                'label' => esc_html__('Accordion Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'accordion_box_heading',
            [
                'label' => esc_html__('Accordion Box', 'ftelements'),
                'type' => Controls_Manager::HEADING,
            ]
        );

        $this->add_responsive_control(
            'accordion_box_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .accordion-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_item_heading',
            [
                'label' => esc_html__('Accordion Item', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'accordion_item_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'accordion_item_border',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .accordion',
            ]
        );

        $this->add_responsive_control(
            'accordion_item_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .accordion' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_item_active_border_color',
            [
                'label' => esc_html__('Active Border Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion.active-block' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'accordion_item_width',
            [
                'label' => esc_html__('Item Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .accordion' => 'max-width: {{SIZE}}{{UNIT}}; margin-left: auto; margin-right: auto;',
                ],
            ]
        );

        $this->add_responsive_control(
            'accordion_item_margin',
            [
                'label' => esc_html__('Margin Bottom', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .accordion' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_header_heading',
            [
                'label' => esc_html__('Accordion Header', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->start_controls_tabs('accordion_header_tabs');

        $this->start_controls_tab(
            'accordion_header_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'accordion_header_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .acc-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_header_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .acc-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .acc-btn .icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_icon_bg',
            [
                'label' => esc_html__('Icon Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .acc-btn .icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'accordion_header_active',
            [
                'label' => esc_html__('Active', 'ftelements'),
            ]
        );

        $this->add_control(
            'accordion_header_active_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion.active-block .acc-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_header_active_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion.active-block .acc-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_icon_active_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion.active-block .acc-btn .icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_icon_active_bg',
            [
                'label' => esc_html__('Icon Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion.active-block .acc-btn .icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'accordion_header_typography',
                'selector' => '{{WRAPPER}} .acc-btn',
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'accordion_header_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .acc-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_icon_heading',
            [
                'label' => esc_html__('Icon Settings', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'accordion_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .acc-btn .icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'accordion_icon_box_size',
            [
                'label' => esc_html__('Icon Box Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 150,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .acc-btn .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}}; text-align: center;',
                ],
            ]
        );

        $this->add_responsive_control(
            'accordion_icon_radius',
            [
                'label' => esc_html__('Icon Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .acc-btn .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_content_heading',
            [
                'label' => esc_html__('Accordion Content', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'accordion_content_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .acc-content .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'accordion_content_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .acc-content' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'accordion_content_typography',
                'selector' => '{{WRAPPER}} .acc-content .text',
            ]
        );

        $this->add_responsive_control(
            'accordion_content_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .acc-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        <section class="grt-faq-section-2 fix section-padding">
            <div class="container">
                <?php if (!empty($settings['title']) || !empty($settings['subtitle'])): ?>
                    <div class="grt-section-title text-center">
                        <?php if (!empty($settings['subtitle'])): ?>
                            <span class="grt-sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                <i class="fa-sharp fa-solid fa-heart"></i> <?php echo esc_html($settings['subtitle']); ?>
                            </span>
                        <?php endif; ?>
                        <?php if (!empty($settings['title'])): ?>
                            <h2 class="split-title">
                                <?php echo wp_kses_post($settings['title']); ?>
                            </h2>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="grt-faq-content-1">
                            <?php if (!empty($settings['accordion_items'])): ?>
                                <ul class="accordion-box style-2 wow fadeInUp list-unstyled" data-wow-delay=".3s">
                                    <?php
                                    $i = 0;
                                    foreach ($settings['accordion_items'] as $item):
                                        $i++;
                                        $active_class = ($i == 1) ? 'active-block' : '';
                                        $btn_active_class = ($i == 1) ? 'active' : '';
                                        $content_current_class = ($i == 1) ? 'current' : '';
                                        $display_style = ($i == 1) ? 'display: block;' : '';
                                        ?>
                                        <!--Block-->
                                        <li
                                            class="accordion block <?php echo esc_attr($active_class); ?> elementor-repeater-item-<?php echo esc_attr($item['_id']); ?>">
                                            <div class="acc-btn <?php echo esc_attr($btn_active_class); ?>">
                                                <?php echo esc_html($item['question']); ?>
                                                <div class="icon fa-regular fa-plus"></div>
                                            </div>
                                            <div class="acc-content <?php echo esc_attr($content_current_class); ?>"
                                                style="<?php echo esc_attr($display_style); ?>">
                                                <div class="content">
                                                    <div class="text">
                                                        <?php echo wp_kses_post($item['answer']); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            jQuery(document).ready(function ($) {
                var initAccordion2 = function () {
                    $(".accordion-box.style-2").each(function () {
                        var $box = $(this);
                        $box.find(".acc-btn").off("click").on("click", function () {
                            var $target = $(this).closest(".accordion");
                            if ($target.hasClass("active-block")) {
                                $target.removeClass("active-block");
                                $(this).removeClass("active");
                                $target.find(".acc-content").slideUp(300);
                            } else {
                                $box.find(".accordion").removeClass("active-block");
                                $box.find(".acc-btn").removeClass("active");
                                $box.find(".acc-content").slideUp(300);
                                $target.addClass("active-block");
                                $(this).addClass("active");
                                $target.find(".acc-content").slideDown(300);
                            }
                        });
                    });
                };
                initAccordion2();
                if (typeof elementorFrontend !== "undefined") {
                    elementorFrontend.hooks.addAction("frontend/element_ready/ft-accordion-2.default", initAccordion2);
                }
            });
        </script>

        <?php
    }
} ?>