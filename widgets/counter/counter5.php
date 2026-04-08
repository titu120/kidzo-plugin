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

class FT_Counter_5_Widget extends \Elementor\Widget_Base
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
        return 'ft-counter-5';
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
        return esc_html__('FT Counter 5', 'ftelements');
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
        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Header Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('About our charities', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'sub_icon',
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
                'default' => esc_html__("We're a charitable group \n that improves lives", 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("We work with babies, children and young people in their families,\nschools and communities to ensure.", 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        // Skill Section
        $this->start_controls_section(
            'skill_section',
            [
                'label' => esc_html__('Skill Features', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'skill_title',
            [
                'label' => esc_html__('Skill Title', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Funding', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'skill_number',
            [
                'label' => esc_html__('Skill Percentage', 'ftelements'),
                'type' => Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'step' => 1,
                'default' => 85,
            ]
        );

        $this->add_control(
            'skill_list',
            [
                'label' => esc_html__('Skill List', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'skill_title' => esc_html__('Funding', 'ftelements'),
                        'skill_number' => 85,
                    ],
                    [
                        'skill_title' => esc_html__('Donations', 'ftelements'),
                        'skill_number' => 75,
                    ],
                    [
                        'skill_title' => esc_html__('Humanity', 'ftelements'),
                        'skill_number' => 65,
                    ],
                ],
                'title_field' => '{{{ skill_title }}}',
            ]
        );

        $this->end_controls_section();

        // CTA Section
        $this->start_controls_section(
            'cta_section',
            [
                'label' => esc_html__('CTA Banner', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'cta_image',
            [
                'label' => esc_html__('CTA Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'cta_title',
            [
                'label' => esc_html__('CTA Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Bringing hope to\nvictims Fires", 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'btn_text',
            [
                'label' => esc_html__('Button Text', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Read more stories', 'ftelements'),
            ]
        );

        $this->add_control(
            'btn_link',
            [
                'label' => esc_html__('Button Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
                'default' => [
                    'url' => '#',
                    'is_external' => false,
                    'nofollow' => false,
                ],
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
                    '{{WRAPPER}} .grt-cta-banner-section4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-cta-banner-section4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => esc_html__('Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .grt-cta-banner-section4',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'section_border',
                'selector' => '{{WRAPPER}} .grt-cta-banner-section4',
            ]
        );

        $this->add_responsive_control(
            'section_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-cta-banner-section4' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Background Shape Style
        $this->start_controls_section(
            'bg_shape_style',
            [
                'label' => esc_html__('Background Shape', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'show_bg_shape',
            [
                'label' => esc_html__('Show Shape', 'ftelements'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'ftelements'),
                'label_off' => esc_html__('Hide', 'ftelements'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'bg_shape_color',
            [
                'label' => esc_html__('Shape Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'default' => '#FBF3E6',
                'selectors' => [
                    '{{WRAPPER}} .grt-cta-banner-section4::before' => 'background-color: {{VALUE}} !important; display: block !important;',
                ],
                'condition' => [
                    'show_bg_shape' => 'yes',
                ],
            ]
        );

        $this->add_responsive_control(
            'bg_shape_height',
            [
                'label' => esc_html__('Shape Height (%)', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['%'],
                'default' => [
                    'size' => 50,
                    'unit' => '%',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-cta-banner-section4::before' => 'height: {{SIZE}}{{UNIT}} !important;',
                ],
                'condition' => [
                    'show_bg_shape' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

        // Header Style (Shared)
        $this->start_controls_section(
            'header_common_style',
            [
                'label' => esc_html__('Header Global Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'header_align',
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
                    '{{WRAPPER}} .grt-section-title' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
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
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'subtitle_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .grt-section-title .grt-sub-title',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title .grt-sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .grt-section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .grt-section-title h2',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Description Style
        $this->start_controls_section(
            'description_style',
            [
                'label' => esc_html__('Description Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_typography',
                'selector' => '{{WRAPPER}} .grt-section-title p',
            ]
        );

        $this->add_responsive_control(
            'description_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .grt-section-title p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Skill Style
        $this->start_controls_section(
            'skill_style',
            [
                'label' => esc_html__('Skill Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'skill_label_color',
            [
                'label' => esc_html__('Label Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skill-feature p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'skill_label_typography',
                'label' => esc_html__('Label Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .skill-feature p',
            ]
        );

        $this->add_responsive_control(
            'skill_label_margin',
            [
                'label' => esc_html__('Label Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .skill-feature p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'skill_bar_color',
            [
                'label' => esc_html__('Bar Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skill-feature .progress-bar' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'skill_bar_bg_color',
            [
                'label' => esc_html__('Bar Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skill-feature .progress' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'skill_bar_height',
            [
                'label' => esc_html__('Bar Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 50,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .skill-feature .progress' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'skill_bar_radius',
            [
                'label' => esc_html__('Bar Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .skill-feature .progress' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .skill-feature .progress-bar' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'skill_value_color',
            [
                'label' => esc_html__('Percentage Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skill-feature .progress-value' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'skill_value_typography',
                'label' => esc_html__('Percentage Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .skill-feature .progress-value',
            ]
        );

        $this->add_responsive_control(
            'skill_item_margin',
            [
                'label' => esc_html__('Item Spacing', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .skill-feature:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // CTA Banner Style
        $this->start_controls_section(
            'cta_banner_style',
            [
                'label' => esc_html__('CTA Banner Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'cta_title_color',
            [
                'label' => esc_html__('CTA Title Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .thumb .grt-section-title-area h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'cta_title_typography',
                'selector' => '{{WRAPPER}} .thumb .grt-section-title-area h2',
            ]
        );

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'cta_image_size',
                'default' => 'full',
                'separator' => 'none',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'cta_image_border',
                'selector' => '{{WRAPPER}} .thumb img',
            ]
        );

        $this->add_responsive_control(
            'cta_image_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .thumb' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'cta_overlay_bg',
                'label' => esc_html__('Overlay Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .thumb .grt-section-title-area',
            ]
        );

        $this->add_responsive_control(
            'cta_overlay_padding',
            [
                'label' => esc_html__('Overlay Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thumb .grt-section-title-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cta_overlay_radius',
            [
                'label' => esc_html__('Overlay Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thumb .grt-section-title-area' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cta_banner_height',
            [
                'label' => esc_html__('Banner Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', 'em'],
                'range' => [
                    'px' => [
                        'min' => 100,
                        'max' => 2000,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .thumb' => 'height: {{SIZE}}{{UNIT}} !important;',
                    '{{WRAPPER}} .thumb img' => 'height: 100%; object-fit: cover;',
                ],
            ]
        );

        $this->add_control(
            'cta_overlay_color',
            [
                'label' => esc_html__('Overlay Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'default' => '#16333B',
                'selectors' => [
                    '{{WRAPPER}} .thumb::before' => 'background: linear-gradient(180deg, rgba(22, 51, 59, 0) {{cta_overlay_start.SIZE}}%, {{VALUE}} 100%) !important;',
                ],
            ]
        );

        $this->add_control(
            'cta_overlay_start',
            [
                'label' => esc_html__('Overlay Start (%)', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['%'],
                'default' => [
                    'size' => 30,
                    'unit' => '%',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .thumb::before' => 'background: linear-gradient(180deg, rgba(22, 51, 59, 0) {{SIZE}}%, {{cta_overlay_color.VALUE}} 100%) !important;',
                ],
            ]
        );

        $this->end_controls_section();

        // Button Style
        $this->start_controls_section(
            'btn_style',
            [
                'label' => esc_html__('Button Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('btn_tabs');

        $this->start_controls_tab(
            'btn_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'btn_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg_color',
                'label' => esc_html__('Background Color', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .theme-btn',
            ]
        );

        $this->add_control(
            'btn_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-btn i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'btn_hover_tab',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'btn_hover_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btn_hover_bg_color',
                'label' => esc_html__('Background Color', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .theme-btn:hover',
            ]
        );

        $this->add_control(
            'btn_hover_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme-btn:hover i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'btn_typography',
                'selector' => '{{WRAPPER}} .theme-btn',
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'btn_border',
                'selector' => '{{WRAPPER}} .theme-btn',
            ]
        );

        $this->add_responsive_control(
            'btn_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'btn_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'btn_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .theme-btn i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'btn_icon_spacing',
            [
                'label' => esc_html__('Icon Spacing', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .theme-btn i' => 'margin-left: {{SIZE}}{{UNIT}};',
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

        if (!empty($settings['btn_link']['url'])) {
            $this->add_link_attributes('btn_link', $settings['btn_link']);
        }
        $this->add_render_attribute('btn_link', 'class', 'theme-btn wow fadeInUp');
        $this->add_render_attribute('btn_link', 'data-wow-delay', '.5s');
        ?>

        <section class="grt-cta-banner-section4 grt-cta-banner-section42 fix section-padding">
            <div class="container">
                <div class="row g-4 align-items-center mb-5">
                    <div class="col-lg-8">
                        <div class="grt-section-title mb-0">
                            <?php if (!empty($settings['sub_title'])): ?>
                                <span class="grt-sub-title tz-sub-tilte tz-sub-anim tx-subTitle">
                                    <?php if (!empty($settings['sub_icon']['value'])): ?>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['sub_icon'], ['aria-hidden' => 'true']); ?>
                                    <?php endif; ?>
                                    <?php echo esc_html(str_replace('\n', "\n", (string) $settings['sub_title'])); ?>
                                </span>
                            <?php endif; ?>

                            <?php if (!empty($settings['title'])): ?>
                                <h2 class="split-title">
                                    <?php echo wp_kses_post(nl2br(str_replace('\n', "\n", (string) $settings['title']))); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if (!empty($settings['description'])): ?>
                                <p class="mt-4">
                                    <?php echo wp_kses_post(nl2br(str_replace('\n', "\n", (string) $settings['description']))); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?php
                        $index = 0;
                        foreach ($settings['skill_list'] as $item):
                            $index++;
                            $mt_class = ($index == 1) ? 'mt-0' : '';
                            ?>
                            <div class="skill-feature <?php echo esc_attr($mt_class); ?>">
                                <p>
                                    <?php echo esc_html($item['skill_title']); ?>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar"
                                        style="width: <?php echo esc_attr($item['skill_number']); ?>%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                        <div class="progress-value"><span
                                                class="counter-number2"><?php echo esc_html($item['skill_number']); ?></span>%</div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <style>
                    .elementor-element-<?php echo $this->get_id(); ?> .thumb {
                        height: 480px;
                        /* Fallback height */
                        overflow: hidden;
                        position: relative;
                        display: flex;
                        align-items: flex-end;
                    }

                    .elementor-element-<?php echo $this->get_id(); ?>.thumb img {
                        height: 100% !important;
                        width: 100% !important;
                        object-fit: cover !important;
                        position: absolute;
                        top: 0;
                        left: 0;
                        z-index: 1;
                    }

                    /* Background overlay for text readability */
                    .elementor-element-<?php echo $this->get_id(); ?> .thumb::before {
                        z-index: 2 !important;
                        background: linear-gradient(180deg, rgba(22, 51, 59, 0) 30%, #16333B 100%) !important;
                    }

                    .elementor-element-<?php echo $this->get_id(); ?> .thumb .grt-section-title-area {
                        z-index: 3 !important;
                        position: relative;
                        width: 100%;
                    }
                </style>
                <div class="thumb fix">
                    <?php if (!empty($settings['cta_image']['url'])): ?>
                        <?php echo Group_Control_Image_Size::get_attachment_image_html($settings, 'cta_image_size', 'cta_image'); ?>
                    <?php endif; ?>
                    <div
                        class="grt-section-title-area align-items-end mb-0 text-center text-sm-start justify-content-center justify-content-sm-between">
                        <div class="grt-section-title">
                            <?php if (!empty($settings['cta_title'])): ?>
                                <h2 class="split-title text-white">
                                    <?php echo wp_kses_post(nl2br(str_replace('\n', "\n", (string) $settings['cta_title']))); ?>
                                </h2>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($settings['btn_text'])): ?>
                            <a <?php echo $this->get_render_attribute_string('btn_link'); ?>>
                                <?php echo esc_html($settings['btn_text']); ?>
                                <i class="fa-regular fa-arrow-up-right"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>









        <?php
    }
} ?>