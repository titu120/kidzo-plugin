<?php

use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;

defined('ABSPATH') || die();

class FT_Choose2_Widget extends \Elementor\Widget_Base
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
        return 'ft-choose2';
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
        return esc_html__('FT Choose 2', 'ftelements');
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
            'choose2_content',
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
                'default' => esc_html__('Why Choose Us?', 'kidzu'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Why Choose Our School', 'kidzu'),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Qualified teachers who understand children\'s needs and focus on personal attention. through play-based and academic learning.', 'kidzu'),
            ]
        );

        $list_repeater = new Repeater();

        $list_repeater->add_control(
            'item_icon',
            [
                'label' => esc_html__('Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/choose-icon1.png',
                ],
            ]
        );

        $list_repeater->add_control(
            'item_title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Child-Friendly Learning \nEnvironment", 'kidzu'),
                'description' => esc_html__('Line breaks are preserved.', 'kidzu'),
            ]
        );

        $this->add_control(
            'list_items',
            [
                'label' => esc_html__('Feature List', 'kidzu'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $list_repeater->get_controls(),
                'default' => [
                    [
                        'item_title' => esc_html__("Child-Friendly Learning \nEnvironment", 'kidzu'),
                    ],
                    [
                        'item_icon' => ['url' => $theme_uri . '/assets/img/home-2/choose-icon2.png'],
                        'item_title' => esc_html__("Focus on child-friendly, \nsafe, & quality education", 'kidzu'),
                    ],
                ],
                'title_field' => '{{{ item_title }}}',
            ]
        );

        $this->add_control(
            'skill_1_label',
            [
                'label' => esc_html__('Skill 1 Label', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Creativity', 'kidzu'),
            ]
        );

        $this->add_control(
            'skill_1_percent',
            [
                'label' => esc_html__('Skill 1 Percent', 'kidzu'),
                'type' => Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'default' => 90,
            ]
        );

        $this->add_control(
            'skill_2_label',
            [
                'label' => esc_html__('Skill 2 Label', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('expert teacher', 'kidzu'),
            ]
        );

        $this->add_control(
            'skill_2_percent',
            [
                'label' => esc_html__('Skill 2 Percent', 'kidzu'),
                'type' => Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'default' => 99,
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => esc_html__('Button Text', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Book a Visit', 'kidzu'),
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label' => esc_html__('Button Link', 'kidzu'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->add_control(
            'img_man',
            [
                'label' => esc_html__('Decor: Man Shape', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/man.png',
                ],
            ]
        );

        $this->add_control(
            'img_girl',
            [
                'label' => esc_html__('Decor: Girl Shape', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/girl.png',
                ],
            ]
        );

        $this->add_control(
            'img_choose_shape',
            [
                'label' => esc_html__('Thumb: Background Shape', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/choose-shape.png',
                ],
            ]
        );

        $this->add_control(
            'img_thumb',
            [
                'label' => esc_html__('Main Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/choose-us.jpg',
                ],
            ]
        );

        $this->add_control(
            'img_arrow',
            [
                'label' => esc_html__('Button Arrow Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/arrow1.svg',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose2_style_section',
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
                'selector' => '{{WRAPPER}} .choose-us-section-2',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .choose-us-section-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_min_height',
            [
                'label' => esc_html__('Min Height', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1500],
                    'vh' => ['min' => 0, 'max' => 100],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-2' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'section_border',
                'selector' => '{{WRAPPER}} .choose-us-section-2',
            ]
        );

        $this->add_responsive_control(
            'section_border_radius',
            [
                'label' => esc_html__('Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'section_overflow',
            [
                'label' => esc_html__('Overflow', 'kidzu'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'inherit' => esc_html__('Default', 'kidzu'),
                    'visible' => esc_html__('Visible', 'kidzu'),
                    'hidden' => esc_html__('Hidden', 'kidzu'),
                    'clip' => esc_html__('Clip', 'kidzu'),
                    'auto' => esc_html__('Auto', 'kidzu'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-2' => 'overflow: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose2_style_decor',
            [
                'label' => esc_html__('Decor Shapes', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'decor_man_width',
            [
                'label' => esc_html__('Man Shape Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-2 .men-shape img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_control(
            'decor_man_opacity',
            [
                'label' => esc_html__('Man Shape Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-2 .men-shape' => 'opacity: calc({{SIZE}} * 0.01);',
                ],
            ]
        );

        $this->add_responsive_control(
            'decor_girl_width',
            [
                'label' => esc_html__('Girl Shape Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-2 .girl-shape img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_control(
            'decor_girl_opacity',
            [
                'label' => esc_html__('Girl Shape Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-section-2 .girl-shape' => 'opacity: calc({{SIZE}} * 0.01);',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose2_style_thumb',
            [
                'label' => esc_html__('Thumb & Images', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'thumb_main_radius',
            [
                'label' => esc_html__('Main Image Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-thumb .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'thumb_main_border_group',
            [
                'label' => esc_html__('Main Image Border', 'kidzu'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'thumb_main_border',
                'selector' => '{{WRAPPER}} .choose-us-thumb .thumb img',
            ]
        );

        $this->add_responsive_control(
            'thumb_shape_width',
            [
                'label' => esc_html__('Overlay Shape Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 800],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-thumb .shape1 img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_control(
            'thumb_shape_opacity',
            [
                'label' => esc_html__('Overlay Shape Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-thumb .shape1' => 'opacity: calc({{SIZE}} * 0.01);',
                ],
            ]
        );

        $this->add_responsive_control(
            'thumb_column_align',
            [
                'label' => esc_html__('Thumb Column Vertical Align', 'kidzu'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => esc_html__('Top', 'kidzu'),
                        'icon' => 'eicon-v-align-top',
                    ],
                    'center' => [
                        'title' => esc_html__('Middle', 'kidzu'),
                        'icon' => 'eicon-v-align-middle',
                    ],
                    'flex-end' => [
                        'title' => esc_html__('Bottom', 'kidzu'),
                        'icon' => 'eicon-v-align-bottom',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-wrapper-2 .row > .col-lg-6:first-child' => 'align-self: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose2_style_subtitle',
            [
                'label' => esc_html__('Sub Title', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .choose-us-content .section-title .sec-sub',
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose2_style_title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .choose-us-content .section-title .sec_title',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .section-title .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .section-title .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose2_style_description',
            [
                'label' => esc_html__('Description', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_typography',
                'selector' => '{{WRAPPER}} .choose-us-content .choose-text',
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .choose-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'description_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .choose-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose2_style_list',
            [
                'label' => esc_html__('Feature List', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'list_gap_between_items',
            [
                'label' => esc_html__('Space Between Items', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 120],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content > ul' => 'display: flex; flex-direction: column; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_icon_width',
            [
                'label' => esc_html__('Icon Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 200],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content ul li .icon img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_icon_gap',
            [
                'label' => esc_html__('Icon & Text Gap', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content ul li' => 'display: flex; align-items: center; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'list_title_typography',
                'selector' => '{{WRAPPER}} .choose-us-content ul li .icon-title',
            ]
        );

        $this->add_control(
            'list_title_color',
            [
                'label' => esc_html__('Title Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content ul li .icon-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_margin_top',
            [
                'label' => esc_html__('List Margin Top', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 200],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content > ul' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose2_style_skills',
            [
                'label' => esc_html__('Skills / Progress', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'skill_label_typography',
                'selector' => '{{WRAPPER}} .skill-feature-items .skill-feature .box-title',
            ]
        );

        $this->add_control(
            'skill_label_color',
            [
                'label' => esc_html__('Label Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skill-feature-items .skill-feature .box-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'skill_block_gap',
            [
                'label' => esc_html__('Space Between Skill Rows', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors' => [
                    '{{WRAPPER}} .skill-feature-items' => 'display: flex; flex-direction: column; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'skill_track_height',
            [
                'label' => esc_html__('Bar Height', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 1, 'max' => 60],
                ],
                'selectors' => [
                    '{{WRAPPER}} .skill-feature-items .progress' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'skill_track_radius',
            [
                'label' => esc_html__('Bar Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .skill-feature-items .progress' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .skill-feature-items .progress-bar' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'skill_track_bg',
            [
                'label' => esc_html__('Track Background', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skill-feature-items .progress' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'skill_bar_bg',
            [
                'label' => esc_html__('Fill Background', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skill-feature-items .progress-bar' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'skill_value_typography',
                'selector' => '{{WRAPPER}} .skill-feature-items .progress-value',
            ]
        );

        $this->add_control(
            'skill_value_color',
            [
                'label' => esc_html__('Percentage Text Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skill-feature-items .progress-value' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'skills_margin_top',
            [
                'label' => esc_html__('Block Margin Top', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 120],
                ],
                'selectors' => [
                    '{{WRAPPER}} .skill-feature-items' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'choose2_style_button',
            [
                'label' => esc_html__('Button', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typography',
                'selector' => '{{WRAPPER}} .choose-us-content .theme-btn .theme-text, {{WRAPPER}} .choose-us-content .theme-btn .theme-text2',
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label' => esc_html__('Text Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .theme-btn .theme-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .choose-us-content .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_svg_fill',
            [
                'label' => esc_html__('Button Shape (SVG) Fill', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .theme-btn .theme-bg svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_margin_top',
            [
                'label' => esc_html__('Margin Top', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 120],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .theme-btn' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'button_border',
                'selector' => '{{WRAPPER}} .choose-us-content .theme-btn',
            ]
        );

        $this->add_responsive_control(
            'button_border_radius',
            [
                'label' => esc_html__('Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_arrow_width',
            [
                'label' => esc_html__('Arrow Icon Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .theme-btn .theme-text img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                    '{{WRAPPER}} .choose-us-content .theme-btn .theme-text2 img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_control(
            'button_hover_heading',
            [
                'label' => esc_html__('Hover', 'kidzu'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'button_hover_text_color',
            [
                'label' => esc_html__('Text Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .theme-btn:hover .theme-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .choose-us-content .theme-btn:hover .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_hover_svg_fill',
            [
                'label' => esc_html__('Shape Fill', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-us-content .theme-btn:hover .theme-bg svg path' => 'fill: {{VALUE}};',
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

        $img_man = !empty($settings['img_man']['url']) ? $settings['img_man']['url'] : $theme_uri . '/assets/img/home-2/shape/man.png';
        $img_girl = !empty($settings['img_girl']['url']) ? $settings['img_girl']['url'] : $theme_uri . '/assets/img/home-2/shape/girl.png';
        $img_choose_shape = !empty($settings['img_choose_shape']['url']) ? $settings['img_choose_shape']['url'] : $theme_uri . '/assets/img/home-2/shape/choose-shape.png';
        $img_thumb = !empty($settings['img_thumb']['url']) ? $settings['img_thumb']['url'] : $theme_uri . '/assets/img/home-2/choose-us.jpg';
        $img_arrow = !empty($settings['img_arrow']['url']) ? $settings['img_arrow']['url'] : $theme_uri . '/assets/img/icon/arrow1.svg';

        $skill_1 = isset($settings['skill_1_percent']) ? max(0, min(100, (int) $settings['skill_1_percent'])) : 90;
        $skill_2 = isset($settings['skill_2_percent']) ? max(0, min(100, (int) $settings['skill_2_percent'])) : 99;

        $list_items = !empty($settings['list_items']) && is_array($settings['list_items']) ? $settings['list_items'] : [];

        $default_icon = $theme_uri . '/assets/img/home-2/choose-icon1.png';

        $this->add_render_attribute('choose2_button', 'class', 'theme-btn hover-header wow fadeInUp');
        $this->add_render_attribute('choose2_button', 'data-wow-delay', '.3s');
        if (!empty($settings['button_link']['url'])) {
            $this->add_link_attributes('choose2_button', $settings['button_link']);
        } else {
            $this->add_render_attribute('choose2_button', 'href', '#');
        }

        ?>

        <section class="choose-us-section-2 fix section-padding">
            <div class="men-shape bz-gsap-animate-circle">
                <img src="<?php echo esc_url($img_man); ?>" alt="">
            </div>
            <div class="girl-shape bz-gsap-animate-circle">
                <img src="<?php echo esc_url($img_girl); ?>" alt="">
            </div>
            <div class="container">
                <div class="choose-us-wrapper-2">
                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="choose-us-thumb">
                                <div class="shape1">
                                    <img src="<?php echo esc_url($img_choose_shape); ?>" alt="">
                                </div>
                                <div class="thumb">
                                    <img src="<?php echo esc_url($img_thumb); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="choose-us-content">
                                <div class="section-title mb-0">
                                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['sub_title']); ?></span>
                                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                        <?php echo esc_html($settings['title']); ?>
                                    </h2>
                                </div>
                                <p class="choose-text wow fadeInUp" data-wow-delay=".3s">
                                    <?php echo esc_html($settings['description']); ?>
                                </p>
                                <ul class="wow fadeInUp" data-wow-delay=".5s">
                                    <?php foreach ($list_items as $item) :
                                        $icon_url = !empty($item['item_icon']['url']) ? $item['item_icon']['url'] : $default_icon;
                                        $title_raw = isset($item['item_title']) ? $item['item_title'] : '';
                                        ?>
                                    <li>
                                        <?php if (!empty($icon_url)) : ?>
                                        <div class="icon">
                                            <img src="<?php echo esc_url($icon_url); ?>" alt="">
                                        </div>
                                        <?php endif; ?>
                                        <div class="title">
                                            <h3 class="icon-title"><?php echo nl2br(esc_html($title_raw)); ?></h3>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <div class="skill-feature-items">
                                    <div class="skill-feature wow fadeInUp" data-wow-delay=".3s">
                                        <p class="box-title"><?php echo esc_html($settings['skill_1_label']); ?></p>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: <?php echo esc_attr((string) $skill_1); ?>%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                                <div class="progress-value"><span class="counter-number2"><?php echo esc_html((string) $skill_1); ?></span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-feature wow fadeInUp" data-wow-delay=".5s">
                                        <p class="box-title"><?php echo esc_html($settings['skill_2_label']); ?></p>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: <?php echo esc_attr((string) $skill_2); ?>%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                                <div class="progress-value"><span class="counter-number2"><?php echo esc_html((string) $skill_2); ?></span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a <?php echo $this->get_render_attribute_string('choose2_button'); ?>>
                                    <span class="theme-bg">
                                        <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#385469"></path>
                                        </svg>

                                    </span>
                                    <span class="theme-text"><?php echo esc_html($settings['button_text']); ?> <img src="<?php echo esc_url($img_arrow); ?>" alt=""></span>
                                    <span class="theme-text2"><?php echo esc_html($settings['button_text']); ?> <img src="<?php echo esc_url($img_arrow); ?>" alt=""></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
    }
}
