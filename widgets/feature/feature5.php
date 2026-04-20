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

class FT_Feature5_Widget extends \Elementor\Widget_Base
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
        return 'ft-feature5';
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
        return esc_html__('FT Feature 5', 'ftelements');
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
            'feature5_content',
            [
                'label' => esc_html__('Content', 'kidzu'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__('Sub Title', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our Best Activities', 'kidzu'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Let Us Know About Our <br> Reading And Cultural',
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse gravida vitae nisi in tincidunt.',
            ]
        );

        $this->add_control(
            'pencil_shape',
            [
                'label' => esc_html__('Pencil Shape', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/about/pencil.png',
                ],
            ]
        );

        $this->add_control(
            'zebra_shape',
            [
                'label' => esc_html__('Zebra Shape', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/about/zebra.png',
                ],
            ]
        );

        $this->add_control(
            'main_image',
            [
                'label' => esc_html__('Main Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/about/03.jpg',
                ],
            ]
        );

        $this->add_control(
            'radius_shape',
            [
                'label' => esc_html__('Radius Shape', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/about/radius-shape-1.png',
                ],
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'item_icon',
            [
                'label' => esc_html__('Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/01.png',
                ],
            ]
        );

        $repeater->add_control(
            'item_box_color',
            [
                'label' => esc_html__('Icon Box Color Class', 'kidzu'),
                'type' => Controls_Manager::SELECT,
                'default' => 'box-color-1',
                'options' => [
                    'box-color-1' => esc_html__('Box Color 1', 'kidzu'),
                    'box-color-2' => esc_html__('Box Color 2', 'kidzu'),
                    'box-color-3' => esc_html__('Box Color 3', 'kidzu'),
                    'box-color-4' => esc_html__('Box Color 4', 'kidzu'),
                ],
            ]
        );

        $repeater->add_control(
            'item_title',
            [
                'label' => esc_html__('Item Title', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Feature Title', 'kidzu'),
            ]
        );

        $repeater->add_control(
            'item_description',
            [
                'label' => esc_html__('Item Description', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Elit Aenean scelerisque <br> vitae consequat the.',
            ]
        );

        $this->add_control(
            'feature_items',
            [
                'label' => esc_html__('Feature Items', 'kidzu'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'item_title' => esc_html__('Early Learning', 'kidzu'),
                        'item_description' => 'Elit Aenean scelerisque <br> vitae consequat the.',
                        'item_box_color' => 'box-color-1',
                        'item_icon' => ['url' => $theme_uri . '/assets/img/icon/01.png'],
                    ],
                    [
                        'item_title' => esc_html__('Art and Craft', 'kidzu'),
                        'item_description' => 'Elit Aenean scelerisque <br> vitae consequat the.',
                        'item_box_color' => 'box-color-3',
                        'item_icon' => ['url' => $theme_uri . '/assets/img/icon/02.png'],
                    ],
                    [
                        'item_title' => esc_html__('Brain Train', 'kidzu'),
                        'item_description' => 'Elit Aenean scelerisque <br> vitae consequat the.',
                        'item_box_color' => 'box-color-2',
                        'item_icon' => ['url' => $theme_uri . '/assets/img/icon/03.png'],
                    ],
                    [
                        'item_title' => esc_html__('Music Area', 'kidzu'),
                        'item_description' => 'Elit Aenean scelerisque <br> vitae consequat the.',
                        'item_box_color' => 'box-color-4',
                        'item_icon' => ['url' => $theme_uri . '/assets/img/icon/04.png'],
                    ],
                ],
                'title_field' => '{{{ item_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature5_style_section',
            [
                'label' => esc_html__('Section', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .about-activities-section',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'section_border',
                'selector' => '{{WRAPPER}} .about-activities-section',
            ]
        );

        $this->add_responsive_control(
            'section_border_radius',
            [
                'label' => esc_html__('Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'container_max_width',
            [
                'label' => esc_html__('Container Max Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1920],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section > .container' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_overflow',
            [
                'label' => esc_html__('Overflow', 'kidzu'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'inherit' => esc_html__('Default', 'kidzu'),
                    'visible' => esc_html__('Visible', 'kidzu'),
                    'hidden' => esc_html__('Hidden', 'kidzu'),
                    'clip' => esc_html__('Clip', 'kidzu'),
                    'scroll' => esc_html__('Scroll', 'kidzu'),
                    'auto' => esc_html__('Auto', 'kidzu'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section' => 'overflow: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature5_style_heading',
            [
                'label' => esc_html__('Heading Area', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'heading_align',
            [
                'label' => esc_html__('Alignment', 'kidzu'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'kidzu'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'kidzu'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'kidzu'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .section-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature5_style_sub_title',
            [
                'label' => esc_html__('Sub Title', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'sub_title_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'sub_title_typography',
                'selector' => '{{WRAPPER}} .about-activities-section .activities-content .section-title .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'sub_title_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'sub_title_transform',
            [
                'label' => esc_html__('Transform', 'kidzu'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'inherit' => esc_html__('Default', 'kidzu'),
                    'none' => esc_html__('None', 'kidzu'),
                    'uppercase' => esc_html__('Uppercase', 'kidzu'),
                    'lowercase' => esc_html__('Lowercase', 'kidzu'),
                    'capitalize' => esc_html__('Capitalize', 'kidzu'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .section-title .sec-sub' => 'text-transform: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature5_style_title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .section-title .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .about-activities-section .activities-content .section-title .sec_title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .section-title .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature5_style_description',
            [
                'label' => esc_html__('Description', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content > .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_typography',
                'selector' => '{{WRAPPER}} .about-activities-section .activities-content > .text',
            ]
        );

        $this->add_responsive_control(
            'description_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content > .text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature5_style_card_area',
            [
                'label' => esc_html__('Feature Card Area', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'card_row_gap',
            [
                'label' => esc_html__('Card Row Gap', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .row.g-4' => 'row-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_column_gap',
            [
                'label' => esc_html__('Card Column Gap', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .row.g-4' => 'column-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_area_margin',
            [
                'label' => esc_html__('Area Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .row.g-4.mt-4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_area_padding',
            [
                'label' => esc_html__('Area Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .row.g-4.mt-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature5_style_card',
            [
                'label' => esc_html__('Feature Card', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'card_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .about-activities-section .activities-content .icon-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'card_border',
                'selector' => '{{WRAPPER}} .about-activities-section .activities-content .icon-items',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label' => esc_html__('Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_content_gap',
            [
                'label' => esc_html__('Icon/Text Gap', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature5_style_icon',
            [
                'label' => esc_html__('Icon', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_box_size',
            [
                'label' => esc_html__('Icon Box Size', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 20, 'max' => 200],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_box_border_radius',
            [
                'label' => esc_html__('Icon Box Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_box_padding',
            [
                'label' => esc_html__('Icon Box Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_image_width',
            [
                'label' => esc_html__('Icon Image Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 10, 'max' => 180],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_image_height',
            [
                'label' => esc_html__('Icon Image Height', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 10, 'max' => 180],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items .icon img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'icon_css_filters',
                'selector' => '{{WRAPPER}} .about-activities-section .activities-content .icon-items .icon img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature5_style_item_title',
            [
                'label' => esc_html__('Item Title', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'item_title_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items .content h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'item_title_typography',
                'selector' => '{{WRAPPER}} .about-activities-section .activities-content .icon-items .content h3',
            ]
        );

        $this->add_responsive_control(
            'item_title_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items .content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature5_style_item_desc',
            [
                'label' => esc_html__('Item Description', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'item_desc_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'item_desc_typography',
                'selector' => '{{WRAPPER}} .about-activities-section .activities-content .icon-items .content p',
            ]
        );

        $this->add_responsive_control(
            'item_desc_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-content .icon-items .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature5_style_images',
            [
                'label' => esc_html__('Images', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'main_image_width',
            [
                'label' => esc_html__('Main Image Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 50, 'max' => 1200],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'main_image_border_radius',
            [
                'label' => esc_html__('Main Image Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'main_image_border',
                'selector' => '{{WRAPPER}} .about-activities-section .activities-image img',
            ]
        );

        $this->add_responsive_control(
            'radius_shape_width',
            [
                'label' => esc_html__('Radius Shape Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 20, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .activities-img-items .radius-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape_opacity',
            [
                'label' => esc_html__('Top Shapes Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.01],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-activities-section .pencil-shape, {{WRAPPER}} .about-activities-section .zebra-shape' => 'opacity: {{SIZE}};',
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
        $pencil_shape = !empty($settings['pencil_shape']['url']) ? $settings['pencil_shape']['url'] : $theme_uri . '/assets/img/about/pencil.png';
        $zebra_shape = !empty($settings['zebra_shape']['url']) ? $settings['zebra_shape']['url'] : $theme_uri . '/assets/img/about/zebra.png';
        $main_image = !empty($settings['main_image']['url']) ? $settings['main_image']['url'] : $theme_uri . '/assets/img/about/03.jpg';
        $radius_shape = !empty($settings['radius_shape']['url']) ? $settings['radius_shape']['url'] : $theme_uri . '/assets/img/about/radius-shape-1.png';
        $feature_items = !empty($settings['feature_items']) && is_array($settings['feature_items']) ? $settings['feature_items'] : [];

        ?>




        <section class="about-activities-section section-padding pt-0">
            <div class="pencil-shape">
                <img src="<?php echo esc_url($pencil_shape); ?>" alt="shape-img">
            </div>
            <div class="zebra-shape float-bob-y">
                <img src="<?php echo esc_url($zebra_shape); ?>" alt="shape-img">
            </div>
            <div class="container">
                <div class="about-activities-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="activities-img-items">
                                <div class="activities-image">
                                    <img src="<?php echo esc_url($main_image); ?>" alt="img">
                                </div>
                                <div class="radius-shape">
                                    <img src="<?php echo esc_url($radius_shape); ?>" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="activities-content">
                                <div class="section-title mb-0">
                                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['sub_title']); ?></span>
                                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                        <?php echo wp_kses_post($settings['title']); ?>
                                    </h2>
                                </div>
                                <p class="text wow fadeInUp" data-wow-delay=".5s">
                                    <?php echo wp_kses_post($settings['description']); ?>
                                </p>
                                <div class="row g-4 mt-4">
                                    <?php foreach ($feature_items as $index => $item) : ?>
                                        <?php $delay = 0.3 + ($index * 0.2); ?>
                                        <div class="col-xl-6 col-lg-8 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr(number_format($delay, 1)); ?>s">
                                            <div class="icon-items">
                                                <div class="icon <?php echo esc_attr($item['item_box_color']); ?>">
                                                    <img src="<?php echo esc_url($item['item_icon']['url']); ?>" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h3><?php echo esc_html($item['item_title']); ?></h3>
                                                    <p><?php echo wp_kses_post($item['item_description']); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
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