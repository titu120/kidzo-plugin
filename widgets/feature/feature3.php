<?php

use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;

defined('ABSPATH') || die();

class FT_Feature3_Widget extends \Elementor\Widget_Base
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
        return 'ft-feature3';
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
        return esc_html__('FT Feature 3', 'ftelements');
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
            'ft_feature3_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_bg',
            [
                'label' => esc_html__('Section Background', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/food-kids-bg.png',
                ],
            ]
        );

        $this->add_control(
            'shape_1',
            [
                'label' => esc_html__('Decorative Shape 1', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/food-shape.png',
                ],
            ]
        );

        $this->add_control(
            'shape_2',
            [
                'label' => esc_html__('Decorative Shape 2', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/food-shape-2.png',
                ],
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our Foods For Kids', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('What Do We Feed', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'client_image',
            [
                'label' => esc_html__('Client / Side Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/hero-client.png',
                ],
            ]
        );

        $this->add_control(
            'client_text',
            [
                'label' => esc_html__('Client Text', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("student's admission\nin 2026", 'ftelements'),
                'rows' => 3,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'check_icon',
            [
                'label' => esc_html__('List Check Icon', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/icon/check2.svg',
                ],
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'bg_thumb',
            [
                'label' => esc_html__('Card Background', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/food-kids-items.png',
                ],
            ]
        );

        $repeater->add_control(
            'food_img',
            [
                'label' => esc_html__('Food Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/breakfast.png',
                ],
            ]
        );

        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Title Icon', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/icon/icon1.svg',
                ],
            ]
        );

        $repeater->add_control(
            'item_title',
            [
                'label' => esc_html__('Menu Title', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Breakfast Menu', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'list_lines',
            [
                'label' => esc_html__('List Items (one per line)', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => implode("\n", [
                    esc_html__('Pancakes with Honey', 'ftelements'),
                    esc_html__('Scrambled Eggs & Toast', 'ftelements'),
                    esc_html__('Fruit Salad with Yogurt', 'ftelements'),
                    esc_html__('Oatmeal with Fresh Fruits', 'ftelements'),
                ]),
                'rows' => 8,
            ]
        );

        $repeater->add_control(
            'animation_delay',
            [
                'label' => esc_html__('Animation Delay', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => '.3s',
                'description' => esc_html__('e.g. .3s — leave empty for none', 'ftelements'),
            ]
        );

        $this->add_control(
            'menu_items',
            [
                'label' => esc_html__('Menu Items', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'item_title' => esc_html__('Breakfast Menu', 'ftelements'),
                        'bg_thumb' => ['url' => $theme_uri . '/assets/img/home-2/food-kids-items.png'],
                        'food_img' => ['url' => $theme_uri . '/assets/img/home-2/breakfast.png'],
                        'icon' => ['url' => $theme_uri . '/assets/img/home-2/icon/icon1.svg'],
                        'animation_delay' => '.3s',
                        'list_lines' => implode("\n", [
                            esc_html__('Pancakes with Honey', 'ftelements'),
                            esc_html__('Scrambled Eggs & Toast', 'ftelements'),
                            esc_html__('Fruit Salad with Yogurt', 'ftelements'),
                            esc_html__('Oatmeal with Fresh Fruits', 'ftelements'),
                        ]),
                    ],
                    [
                        'item_title' => esc_html__('Lunch Menu', 'ftelements'),
                        'bg_thumb' => ['url' => $theme_uri . '/assets/img/home-2/food-kids-items.png'],
                        'food_img' => ['url' => $theme_uri . '/assets/img/home-2/lunch.png'],
                        'icon' => ['url' => $theme_uri . '/assets/img/home-2/icon/icon2.svg'],
                        'animation_delay' => '.5s',
                        'list_lines' => implode("\n", [
                            esc_html__('Steamed Rice with Chicken', 'ftelements'),
                            esc_html__('Vegetable Khichdi', 'ftelements'),
                            esc_html__('Fish & Mixed Vegetables', 'ftelements'),
                            esc_html__('Pasta with Tomato Sauce', 'ftelements'),
                        ]),
                    ],
                    [
                        'item_title' => esc_html__('Dinner Menu', 'ftelements'),
                        'bg_thumb' => ['url' => $theme_uri . '/assets/img/home-2/food-kids-items.png'],
                        'food_img' => ['url' => $theme_uri . '/assets/img/home-2/breakfast.png'],
                        'icon' => ['url' => $theme_uri . '/assets/img/home-2/icon/icon3.svg'],
                        'animation_delay' => '.7s',
                        'list_lines' => implode("\n", [
                            esc_html__('Chicken Soup with Bread', 'ftelements'),
                            esc_html__('Fried Rice with Vegetables', 'ftelements'),
                            esc_html__('Roti & Mixed Vegetable', 'ftelements'),
                            esc_html__('Noodles Egg & Veggies', 'ftelements'),
                        ]),
                    ],
                ],
                'title_field' => '{{{ item_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_align',
            [
                'label' => esc_html__('Content Alignment', 'ftelements'),
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
                    '{{WRAPPER}} .footer-kids-section' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_min_height',
            [
                'label' => esc_html__('Min Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 2000],
                    'vh' => ['min' => 0, 'max' => 100],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'section_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_bg_size',
            [
                'label' => esc_html__('Background Size', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__('Default', 'ftelements'),
                    'auto' => esc_html__('Auto', 'ftelements'),
                    'cover' => esc_html__('Cover', 'ftelements'),
                    'contain' => esc_html__('Contain', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section' => 'background-size: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_bg_position',
            [
                'label' => esc_html__('Background Position', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__('Default', 'ftelements'),
                    'center center' => esc_html__('Center Center', 'ftelements'),
                    'center top' => esc_html__('Center Top', 'ftelements'),
                    'center bottom' => esc_html__('Center Bottom', 'ftelements'),
                    'left center' => esc_html__('Left Center', 'ftelements'),
                    'right center' => esc_html__('Right Center', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section' => 'background-position: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_bg_repeat',
            [
                'label' => esc_html__('Background Repeat', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__('Default', 'ftelements'),
                    'no-repeat' => esc_html__('No Repeat', 'ftelements'),
                    'repeat' => esc_html__('Repeat', 'ftelements'),
                    'repeat-x' => esc_html__('Repeat X', 'ftelements'),
                    'repeat-y' => esc_html__('Repeat Y', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section' => 'background-repeat: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'section_border',
                'selector' => '{{WRAPPER}} .footer-kids-section',
            ]
        );

        $this->add_responsive_control(
            'section_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_shapes',
            [
                'label' => esc_html__('Decorative Shapes', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'shape1_width',
            [
                'label' => esc_html__('Shape 1 Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1200],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .food-shape1 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'shape1_opacity',
            [
                'label' => esc_html__('Shape 1 Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.05],
                ],
                'selectors' => [
                    '{{WRAPPER}} .food-shape1' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape2_width',
            [
                'label' => esc_html__('Shape 2 Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1200],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .food-shape2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'shape2_opacity',
            [
                'label' => esc_html__('Shape 2 Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 1, 'step' => 0.05],
                ],
                'selectors' => [
                    '{{WRAPPER}} .food-shape2' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_title_area',
            [
                'label' => esc_html__('Title Row', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'title_area_direction',
            [
                'label' => esc_html__('Direction', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'row' => [
                        'title' => esc_html__('Row', 'ftelements'),
                        'icon' => 'eicon-h-align-stretch',
                    ],
                    'column' => [
                        'title' => esc_html__('Column', 'ftelements'),
                        'icon' => 'eicon-v-align-stretch',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .section-title-area' => 'display: flex; flex-direction: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_area_justify',
            [
                'label' => esc_html__('Justify Content', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => esc_html__('Start', 'ftelements'),
                        'icon' => 'eicon-justify-start-h',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon' => 'eicon-justify-center-h',
                    ],
                    'space-between' => [
                        'title' => esc_html__('Space Between', 'ftelements'),
                        'icon' => 'eicon-justify-space-between-h',
                    ],
                    'flex-end' => [
                        'title' => esc_html__('End', 'ftelements'),
                        'icon' => 'eicon-justify-end-h',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .section-title-area' => 'display: flex; justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_area_align',
            [
                'label' => esc_html__('Align Items', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => esc_html__('Start', 'ftelements'),
                        'icon' => 'eicon-v-align-top',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon' => 'eicon-v-align-middle',
                    ],
                    'flex-end' => [
                        'title' => esc_html__('End', 'ftelements'),
                        'icon' => 'eicon-v-align-bottom',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .section-title-area' => 'display: flex; align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_area_gap',
            [
                'label' => esc_html__('Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 120],
                    'em' => ['min' => 0, 'max' => 5],
                    'rem' => ['min' => 0, 'max' => 5],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .section-title-area' => 'display: flex; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_area_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .section-title-area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_area_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .section-title-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .footer-kids-section .section-title .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_align',
            [
                'label' => esc_html__('Text Align', 'ftelements'),
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
                    '{{WRAPPER}} .footer-kids-section .section-title .sec-sub' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_main_title',
            [
                'label' => esc_html__('Main Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'main_title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .section-title .tx-title.sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'main_title_typography',
                'selector' => '{{WRAPPER}} .footer-kids-section .section-title .tx-title.sec_title',
            ]
        );

        $this->add_responsive_control(
            'main_title_align',
            [
                'label' => esc_html__('Text Align', 'ftelements'),
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
                    '{{WRAPPER}} .footer-kids-section .section-title .tx-title.sec_title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'main_title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .section-title .tx-title.sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_client',
            [
                'label' => esc_html__('Client Block', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'client_flex_direction',
            [
                'label' => esc_html__('Direction', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'row' => [
                        'title' => esc_html__('Row', 'ftelements'),
                        'icon' => 'eicon-h-align-stretch',
                    ],
                    'column' => [
                        'title' => esc_html__('Column', 'ftelements'),
                        'icon' => 'eicon-v-align-stretch',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .client-sub' => 'display: flex; flex-direction: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'client_gap',
            [
                'label' => esc_html__('Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                    'em' => ['min' => 0, 'max' => 5],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .client-sub' => 'display: flex; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'client_image_width',
            [
                'label' => esc_html__('Image Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .client-sub img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'client_image_radius',
            [
                'label' => esc_html__('Image Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .client-sub img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'client_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .client-sub span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'client_text_typography',
                'selector' => '{{WRAPPER}} .footer-kids-section .client-sub span',
            ]
        );

        $this->add_responsive_control(
            'client_text_align',
            [
                'label' => esc_html__('Text Align', 'ftelements'),
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
                    '{{WRAPPER}} .footer-kids-section .client-sub span' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_grid',
            [
                'label' => esc_html__('Grid / Row', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'row_gap',
            [
                'label' => esc_html__('Row Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 100],
                    'em' => ['min' => 0, 'max' => 5],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .row' => 'row-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'column_gap',
            [
                'label' => esc_html__('Column Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 100],
                    'em' => ['min' => 0, 'max' => 5],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .row' => 'column-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'row_margin',
            [
                'label' => esc_html__('Row Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-section .row' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_cards',
            [
                'label' => esc_html__('Menu Cards', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'card_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'card_border',
                'selector' => '{{WRAPPER}} .footer-kids-box-items',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_card_thumb',
            [
                'label' => esc_html__('Card Thumbnail Area', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'bg_thumb_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .bg-thumb' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bg_thumb_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .bg-thumb' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'bg_thumb_img_height',
            [
                'label' => esc_html__('Background Image Max Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    'vh' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .bg-thumb > img' => 'max-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_food_img',
            [
                'label' => esc_html__('Food Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'food_img_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 600],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .food-img img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'food_img_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .food-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_card_icon',
            [
                'label' => esc_html__('Card Title Icon', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'card_icon_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 200],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .content .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_icon_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .content .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_card_title',
            [
                'label' => esc_html__('Card Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'card_title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .content h3.title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'card_title_typography',
                'selector' => '{{WRAPPER}} .footer-kids-box-items .content h3.title',
            ]
        );

        $this->add_responsive_control(
            'card_title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .content h3.title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_list',
            [
                'label' => esc_html__('List', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'list_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .content ul li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'list_typography',
                'selector' => '{{WRAPPER}} .footer-kids-box-items .content ul li',
            ]
        );

        $this->add_responsive_control(
            'list_padding',
            [
                'label' => esc_html__('List Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .content ul' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_item_gap',
            [
                'label' => esc_html__('Space Between Items', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 48],
                    'em' => ['min' => 0, 'max' => 3],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .content ul' => 'display: flex; flex-direction: column; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_check_width',
            [
                'label' => esc_html__('Check Icon Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 64],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .content ul li img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_check_spacing',
            [
                'label' => esc_html__('Check Icon Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 32],
                    'em' => ['min' => 0, 'max' => 2],
                ],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .content ul li' => 'display: flex; align-items: flex-start; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_feature3_style_content_area',
            [
                'label' => esc_html__('Card Content Area', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'card_content_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .footer-kids-box-items .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_content_align',
            [
                'label' => esc_html__('Text Align', 'ftelements'),
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
                    '{{WRAPPER}} .footer-kids-box-items .content' => 'text-align: {{VALUE}};',
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

        $section_bg_url = !empty($settings['section_bg']['url']) ? $settings['section_bg']['url'] : '';
        $shape1_url = !empty($settings['shape_1']['url']) ? $settings['shape_1']['url'] : '';
        $shape2_url = !empty($settings['shape_2']['url']) ? $settings['shape_2']['url'] : '';
        $client_img_url = !empty($settings['client_image']['url']) ? $settings['client_image']['url'] : '';
        $check_icon_url = !empty($settings['check_icon']['url']) ? $settings['check_icon']['url'] : '';

        $subtitle = isset($settings['subtitle']) ? $settings['subtitle'] : '';
        $title = isset($settings['title']) ? $settings['title'] : '';
        $client_text = isset($settings['client_text']) ? $settings['client_text'] : '';

        $menu_items = !empty($settings['menu_items']) && is_array($settings['menu_items']) ? $settings['menu_items'] : [];

        $section_style = $section_bg_url !== '' ? ' style="background-image: url(\'' . esc_url($section_bg_url) . '\');"' : '';

        ?>



        <section class="footer-kids-section section-padding bg-cover fix"<?php echo $section_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — built with esc_url() ?>>
            <?php if ($shape1_url !== '') : ?>
            <div class="food-shape1 float-bob-y">
                <img src="<?php echo esc_url($shape1_url); ?>" alt="">
            </div>
            <?php endif; ?>
            <?php if ($shape2_url !== '') : ?>
            <div class="food-shape2 float-bob-x">
                <img src="<?php echo esc_url($shape2_url); ?>" alt="">
            </div>
            <?php endif; ?>
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <?php if ($subtitle !== '') : ?>
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($subtitle); ?></span>
                        <?php endif; ?>
                        <?php if ($title !== '') : ?>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                            <?php echo esc_html($title); ?>
                        </h2>
                        <?php endif; ?>
                    </div>
                    <div class="client-sub">
                        <?php if ($client_img_url !== '') : ?>
                        <img src="<?php echo esc_url($client_img_url); ?>" alt="">
                        <?php endif; ?>
                        <?php if ($client_text !== '') : ?>
                        <span>
                            <?php echo nl2br(esc_html($client_text)); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($menu_items as $item) : ?>
                        <?php
                        $item_title = isset($item['item_title']) ? $item['item_title'] : '';
                        $bg_thumb_url = !empty($item['bg_thumb']['url']) ? $item['bg_thumb']['url'] : '';
                        $food_img_url = !empty($item['food_img']['url']) ? $item['food_img']['url'] : '';
                        $icon_url = !empty($item['icon']['url']) ? $item['icon']['url'] : '';
                        $list_raw = isset($item['list_lines']) ? $item['list_lines'] : '';
                        $delay = isset($item['animation_delay']) ? trim((string) $item['animation_delay']) : '';
                        $list_lines = array_filter(array_map('trim', preg_split("/\r\n|\n|\r/", (string) $list_raw)));
                        ?>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 wow fadeInUp"<?php echo $delay !== '' ? ' data-wow-delay="' . esc_attr($delay) . '"' : ''; ?>>
                        <div class="footer-kids-box-items">
                            <div class="bg-thumb">
                                <?php if ($bg_thumb_url !== '') : ?>
                                <img src="<?php echo esc_url($bg_thumb_url); ?>" alt="<?php echo esc_attr($item_title); ?>">
                                <?php endif; ?>
                                <?php if ($food_img_url !== '') : ?>
                                <div class="food-img">
                                    <img src="<?php echo esc_url($food_img_url); ?>" alt="<?php echo esc_attr($item_title); ?>">
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <?php if ($icon_url !== '') : ?>
                                <div class="icon">
                                    <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($item_title); ?>">
                                </div>
                                <?php endif; ?>
                                <?php if ($item_title !== '') : ?>
                                <h3 class="title"><?php echo esc_html($item_title); ?></h3>
                                <?php endif; ?>
                                <?php if (!empty($list_lines)) : ?>
                                <ul>
                                    <?php foreach ($list_lines as $line) : ?>
                                    <li>
                                        <?php if ($check_icon_url !== '') : ?>
                                        <img src="<?php echo esc_url($check_icon_url); ?>" alt="">
                                        <?php endif; ?>
                                        <?php echo esc_html($line); ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>








<?php
    }
}
