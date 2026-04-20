<?php

use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Typography;

defined('ABSPATH') || die();

class FT_About8_Widget extends \Elementor\Widget_Base
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
        return 'ft-about8';
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
        return esc_html__('FT About 8', 'ftelements');
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
            'about8_images_section',
            [
                'label' => esc_html__('Images', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'about8_shape_1',
            [
                'label' => esc_html__('Decorative Shape 1', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/inner-page/shape2.png',
                ],
            ]
        );

        $this->add_control(
            'about8_shape_2',
            [
                'label' => esc_html__('Decorative Shape 2', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/inner-page/shape3.png',
                ],
            ]
        );

        $this->add_control(
            'about8_main_image',
            [
                'label' => esc_html__('Main Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/inner-page/vision.png',
                ],
            ]
        );

        $this->add_control(
            'about8_list_icon',
            [
                'label' => esc_html__('List Item Icon (default)', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-2/icon/check3.svg',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'about8_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our Vision', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'about8_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Our Vision Is To Inspire \n Young Minds", 'ftelements'),
                'rows' => 3,
            ]
        );

        $this->add_control(
            'about8_description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our mission is to create a joyful, safe, and inspiring environment where every child feels valued, supported, and encouraged to learn, grow, and explore with confidence Our Four Steps', 'ftelements'),
                'rows' => 5,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'item_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("To learn new things with \n joy every day.", 'ftelements'),
                'rows' => 2,
            ]
        );

        $repeater->add_control(
            'item_icon',
            [
                'label' => esc_html__('Custom Icon', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'description' => esc_html__('Leave empty to use the default list icon.', 'ftelements'),
            ]
        );

        $this->add_control(
            'about8_list_items',
            [
                'label' => esc_html__('Vision List', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'item_title' => esc_html__("To learn new things with \n joy every day.", 'ftelements'),
                    ],
                    [
                        'item_title' => esc_html__("To grow play and achieve \n their dreams", 'ftelements'),
                    ],
                    [
                        'item_title' => esc_html__("best Nanny Selection \n in 24/7 ", 'ftelements'),
                    ],
                    [
                        'item_title' => esc_html__("To explore creativity \n and express freely", 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ item_title }}}',
            ]
        );

        $this->end_controls_section();

        $s = '{{WRAPPER}} .vision-section-inner';

        $this->start_controls_section(
            'about8_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about8_section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about8_section_background',
                'types' => ['classic', 'gradient'],
                'selector' => $s,
            ]
        );

        $this->add_responsive_control(
            'about8_section_min_height',
            [
                'label' => esc_html__('Min Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 2000],
                    'vh' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    $s => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'about8_section_overflow',
            [
                'label' => esc_html__('Overflow', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__('Default', 'ftelements'),
                    'inherit' => esc_html__('Inherit', 'ftelements'),
                    'visible' => esc_html__('Visible', 'ftelements'),
                    'hidden' => esc_html__('Hidden', 'ftelements'),
                    'clip' => esc_html__('Clip', 'ftelements'),
                    'scroll' => esc_html__('Scroll', 'ftelements'),
                    'auto' => esc_html__('Auto', 'ftelements'),
                ],
                'selectors' => [
                    $s => 'overflow: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_section_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about8_section_border',
                'selector' => $s,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_style_shapes',
            [
                'label' => esc_html__('Decorative Shapes', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about8_shape1_heading',
            [
                'type' => Controls_Manager::HEADING,
                'label' => esc_html__('Shape 1', 'ftelements'),
            ]
        );

        $this->add_responsive_control(
            'about8_shape1_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors' => [
                    $s . ' .shape-1 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_shape1_max_width',
            [
                'label' => esc_html__('Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors' => [
                    $s . ' .shape-1 img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_shape1_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 100, 'step' => 1],
                ],
                'selectors' => [
                    $s . ' .shape-1 img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_shape1_zindex',
            [
                'label' => esc_html__('Z-Index', 'ftelements'),
                'type' => Controls_Manager::NUMBER,
                'selectors' => [
                    $s . ' .shape-1' => 'z-index: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'about8_shape1_css_filters',
                'selector' => $s . ' .shape-1 img',
            ]
        );

        $this->add_control(
            'about8_shape2_heading',
            [
                'type' => Controls_Manager::HEADING,
                'label' => esc_html__('Shape 2', 'ftelements'),
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            'about8_shape2_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors' => [
                    $s . ' .shape-2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_shape2_max_width',
            [
                'label' => esc_html__('Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors' => [
                    $s . ' .shape-2 img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_shape2_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 100, 'step' => 1],
                ],
                'selectors' => [
                    $s . ' .shape-2 img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_shape2_zindex',
            [
                'label' => esc_html__('Z-Index', 'ftelements'),
                'type' => Controls_Manager::NUMBER,
                'selectors' => [
                    $s . ' .shape-2' => 'z-index: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'about8_shape2_css_filters',
                'selector' => $s . ' .shape-2 img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_style_main_image',
            [
                'label' => esc_html__('Main Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about8_thumb_wrapper_align',
            [
                'label' => esc_html__('Image Column Alignment', 'ftelements'),
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
                    $s . ' .vision-thumb' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_thumb_wrapper_margin',
            [
                'label' => esc_html__('Image Wrapper Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .vision-thumb' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_thumb_wrapper_padding',
            [
                'label' => esc_html__('Image Wrapper Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .vision-thumb' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_main_img_width',
            [
                'label' => esc_html__('Image Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors' => [
                    $s . ' .vision-thumb img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_main_img_max_width',
            [
                'label' => esc_html__('Image Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors' => [
                    $s . ' .vision-thumb img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_main_img_height',
            [
                'label' => esc_html__('Image Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', 'em', 'rem'],
                'selectors' => [
                    $s . ' .vision-thumb img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'about8_main_img_object_fit',
            [
                'label' => esc_html__('Object Fit', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__('Default', 'ftelements'),
                    'fill' => esc_html__('Fill', 'ftelements'),
                    'contain' => esc_html__('Contain', 'ftelements'),
                    'cover' => esc_html__('Cover', 'ftelements'),
                    'none' => esc_html__('None', 'ftelements'),
                    'scale-down' => esc_html__('Scale Down', 'ftelements'),
                ],
                'selectors' => [
                    $s . ' .vision-thumb img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'about8_main_img_css_filters',
                'selector' => $s . ' .vision-thumb img',
            ]
        );

        $this->add_responsive_control(
            'about8_main_img_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .vision-thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about8_main_img_border',
                'selector' => $s . ' .vision-thumb img',
            ]
        );

        $this->add_responsive_control(
            'about8_main_img_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 100, 'step' => 1],
                ],
                'selectors' => [
                    $s . ' .vision-thumb img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_style_content_column',
            [
                'label' => esc_html__('Content Column', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about8_vision_content_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .vision-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_vision_content_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .vision-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about8_vision_content_background',
                'types' => ['classic', 'gradient'],
                'selector' => $s . ' .vision-content',
            ]
        );

        $this->add_responsive_control(
            'about8_vision_content_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .vision-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about8_vision_content_border',
                'selector' => $s . ' .vision-content',
            ]
        );

        $this->add_responsive_control(
            'about8_row_vertical_align',
            [
                'label' => esc_html__('Row Vertical Align', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => esc_html__('Top', 'ftelements'),
                        'icon' => 'eicon-v-align-top',
                    ],
                    'center' => [
                        'title' => esc_html__('Middle', 'ftelements'),
                        'icon' => 'eicon-v-align-middle',
                    ],
                    'flex-end' => [
                        'title' => esc_html__('Bottom', 'ftelements'),
                        'icon' => 'eicon-v-align-bottom',
                    ],
                    'stretch' => [
                        'title' => esc_html__('Stretch', 'ftelements'),
                        'icon' => 'eicon-v-align-stretch',
                    ],
                ],
                'selectors' => [
                    $s . ' .row' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_style_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about8_subtitle_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    $s . ' .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about8_subtitle_typography',
                'selector' => $s . ' .section-title .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'about8_subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_subtitle_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .section-title .sec-sub' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_subtitle_align',
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
                    $s . ' .section-title .sec-sub' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_style_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about8_title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    $s . ' .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about8_title_typography',
                'selector' => $s . ' .section-title h2',
            ]
        );

        $this->add_responsive_control(
            'about8_title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_title_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .section-title h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_title_align',
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
                    $s . ' .section-title h2' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_style_description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about8_description_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    $s . ' .about-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about8_description_typography',
                'selector' => $s . ' .about-text',
            ]
        );

        $this->add_responsive_control(
            'about8_description_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .about-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_description_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .about-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_description_align',
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
                    'justify' => [
                        'title' => esc_html__('Justify', 'ftelements'),
                        'icon' => 'eicon-text-align-justify',
                    ],
                ],
                'selectors' => [
                    $s . ' .about-text' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_style_list_wrapper',
            [
                'label' => esc_html__('List Container', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about8_list_items_display',
            [
                'label' => esc_html__('Display', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__('Default', 'ftelements'),
                    'flex' => esc_html__('Flex', 'ftelements'),
                    'inline-flex' => esc_html__('Inline Flex', 'ftelements'),
                    'block' => esc_html__('Block', 'ftelements'),
                    'grid' => esc_html__('Grid', 'ftelements'),
                ],
                'selectors' => [
                    $s . ' .list-items' => 'display: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_list_items_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .list-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_list_items_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .list-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about8_list_items_background',
                'types' => ['classic', 'gradient'],
                'selector' => $s . ' .list-items',
            ]
        );

        $this->add_responsive_control(
            'about8_list_items_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .list-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about8_list_items_border',
                'selector' => $s . ' .list-items',
            ]
        );

        $this->add_responsive_control(
            'about8_list_items_gap',
            [
                'label' => esc_html__('Gap Between Columns', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    $s . ' .list-items' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_list_items_flex_direction',
            [
                'label' => esc_html__('Flex Direction', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'row' => [
                        'title' => esc_html__('Row', 'ftelements'),
                        'icon' => 'eicon-arrow-right',
                    ],
                    'column' => [
                        'title' => esc_html__('Column', 'ftelements'),
                        'icon' => 'eicon-arrow-down',
                    ],
                ],
                'selectors' => [
                    $s . ' .list-items' => 'flex-direction: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'about8_list_items_flex_wrap',
            [
                'label' => esc_html__('Flex Wrap', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__('Default', 'ftelements'),
                    'nowrap' => esc_html__('No Wrap', 'ftelements'),
                    'wrap' => esc_html__('Wrap', 'ftelements'),
                    'wrap-reverse' => esc_html__('Wrap Reverse', 'ftelements'),
                ],
                'selectors' => [
                    $s . ' .list-items' => 'flex-wrap: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_list_items_justify',
            [
                'label' => esc_html__('Justify Content', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => esc_html__('Start', 'ftelements'),
                        'icon' => 'eicon-h-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon' => 'eicon-h-align-center',
                    ],
                    'flex-end' => [
                        'title' => esc_html__('End', 'ftelements'),
                        'icon' => 'eicon-h-align-right',
                    ],
                    'space-between' => [
                        'title' => esc_html__('Space Between', 'ftelements'),
                        'icon' => 'eicon-justify-space-between-h',
                    ],
                    'space-around' => [
                        'title' => esc_html__('Space Around', 'ftelements'),
                        'icon' => 'eicon-justify-space-around-h',
                    ],
                ],
                'selectors' => [
                    $s . ' .list-items' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_list_items_align_items',
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
                    'stretch' => [
                        'title' => esc_html__('Stretch', 'ftelements'),
                        'icon' => 'eicon-v-align-stretch',
                    ],
                ],
                'selectors' => [
                    $s . ' .list-items' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_style_values_ul',
            [
                'label' => esc_html__('List Columns (UL)', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about8_values_ul_display',
            [
                'label' => esc_html__('Display', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__('Default', 'ftelements'),
                    'flex' => esc_html__('Flex', 'ftelements'),
                    'inline-flex' => esc_html__('Inline Flex', 'ftelements'),
                    'block' => esc_html__('Block', 'ftelements'),
                    'grid' => esc_html__('Grid', 'ftelements'),
                ],
                'selectors' => [
                    $s . ' .values-list' => 'display: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_values_ul_flex_direction',
            [
                'label' => esc_html__('Flex Direction', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'row' => [
                        'title' => esc_html__('Row', 'ftelements'),
                        'icon' => 'eicon-arrow-right',
                    ],
                    'column' => [
                        'title' => esc_html__('Column', 'ftelements'),
                        'icon' => 'eicon-arrow-down',
                    ],
                ],
                'selectors' => [
                    $s . ' .values-list' => 'flex-direction: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_values_ul_margin',
            [
                'label' => esc_html__('UL Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .values-list' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_values_ul_padding',
            [
                'label' => esc_html__('UL Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .values-list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_values_ul_gap',
            [
                'label' => esc_html__('Space Between List Items', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    $s . ' .values-list' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_style_list_item',
            [
                'label' => esc_html__('List Item', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about8_li_display',
            [
                'label' => esc_html__('Display', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__('Default', 'ftelements'),
                    'flex' => esc_html__('Flex', 'ftelements'),
                    'inline-flex' => esc_html__('Inline Flex', 'ftelements'),
                    'block' => esc_html__('Block', 'ftelements'),
                    'grid' => esc_html__('Grid', 'ftelements'),
                ],
                'selectors' => [
                    $s . ' .values-list li' => 'display: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_li_align_items',
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
                    'stretch' => [
                        'title' => esc_html__('Stretch', 'ftelements'),
                        'icon' => 'eicon-v-align-stretch',
                    ],
                ],
                'selectors' => [
                    $s . ' .values-list li' => 'align-items: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_li_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .values-list li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_li_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .values-list li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_li_gap',
            [
                'label' => esc_html__('Icon & Text Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    $s . ' .values-list li' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about8_li_background',
                'types' => ['classic', 'gradient'],
                'selector' => $s . ' .values-list li',
            ]
        );

        $this->add_responsive_control(
            'about8_li_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .values-list li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'about8_li_border',
                'selector' => $s . ' .values-list li',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_style_list_active',
            [
                'label' => esc_html__('Active List Item', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about8_li_active_background',
                'types' => ['classic', 'gradient'],
                'selector' => $s . ' .values-list li.active',
            ]
        );

        $this->add_control(
            'about8_li_active_border_color',
            [
                'label' => esc_html__('Border Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    $s . ' .values-list li.active' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'about8_li_active_title_color',
            [
                'label' => esc_html__('Title Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    $s . ' .values-list li.active .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_style_list_icon',
            [
                'label' => esc_html__('List Icon', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'about8_list_icon_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    $s . ' .values-list li .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_list_icon_height',
            [
                'label' => esc_html__('Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    $s . ' .values-list li .icon img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_list_icon_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => ['min' => 0, 'max' => 100, 'step' => 1],
                ],
                'selectors' => [
                    $s . ' .values-list li .icon img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_icon_box_min_width',
            [
                'label' => esc_html__('Icon Box Min Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors' => [
                    $s . ' .values-list li .icon' => 'min-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'about8_list_icon_css_filters',
                'selector' => $s . ' .values-list li .icon img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'about8_style_list_title',
            [
                'label' => esc_html__('List Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'about8_list_title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    $s . ' .values-list li .content .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'about8_list_title_typography',
                'selector' => $s . ' .values-list li .content .title',
            ]
        );

        $this->add_responsive_control(
            'about8_list_title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    $s . ' .values-list li .content .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about8_list_title_align',
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
                    $s . ' .values-list li .content' => 'text-align: {{VALUE}};',
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

        $shape_1 = !empty($settings['about8_shape_1']['url']) ? $settings['about8_shape_1']['url'] : '';
        $shape_2 = !empty($settings['about8_shape_2']['url']) ? $settings['about8_shape_2']['url'] : '';
        $main_image = !empty($settings['about8_main_image']['url']) ? $settings['about8_main_image']['url'] : '';
        $default_icon = !empty($settings['about8_list_icon']['url']) ? $settings['about8_list_icon']['url'] : '';

        $subtitle = isset($settings['about8_subtitle']) ? $settings['about8_subtitle'] : '';
        $title = isset($settings['about8_title']) ? $settings['about8_title'] : '';
        $description = isset($settings['about8_description']) ? $settings['about8_description'] : '';

        $list_items = !empty($settings['about8_list_items']) && is_array($settings['about8_list_items'])
            ? $settings['about8_list_items']
            : [];

        $title_html = nl2br(esc_html($title));
        $columns = array_chunk($list_items, 2);

        ?>

        <section class="vision-section-inner fix section-padding">
            <div class="shape-1 float-bob-y d-none d-xxl-block">
                <img src="<?php echo esc_url($shape_1); ?>" alt="<?php echo esc_attr($subtitle); ?>">
            </div>
            <div class="shape-2 float-bob-y d-none d-xxl-block">
                <img src="<?php echo esc_url($shape_2); ?>" alt="<?php echo esc_attr($subtitle); ?>">
            </div>
            <div class="container">
                <div class="vision-wrapper-inner">
                    <div class="row g-4 align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="vision-thumb">
                                <img src="<?php echo esc_url($main_image); ?>" alt="<?php echo esc_attr($subtitle); ?>">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="vision-content">
                                <div class="section-title mb-0">
                                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($subtitle); ?></span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        <?php echo wp_kses_post($title_html); ?>
                                    </h2>
                                </div>
                                <p class="about-text wow fadeInUp" data-wow-delay=".5s">
                                    <?php echo esc_html($description); ?>
                                </p>
                                <div class="list-items">
                                    <?php
                                    $global_index = 0;
                                    foreach ($columns as $column_items) {
                                        ?>
                                        <ul class="values-list">
                                            <?php
                                            foreach ($column_items as $item) {
                                                $item_title = isset($item['item_title']) ? $item['item_title'] : '';
                                                $item_icon = !empty($item['item_icon']['url']) ? $item['item_icon']['url'] : $default_icon;
                                                $li_class = (0 === $global_index) ? 'active' : '';
                                                $item_title_html = nl2br(esc_html($item_title));
                                                ?>
                                                <li class="<?php echo esc_attr($li_class); ?>">
                                                    <div class="icon">
                                                        <img src="<?php echo esc_url($item_icon); ?>" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="title"><?php echo wp_kses_post($item_title_html); ?></h3>
                                                    </div>
                                                </li>
                                                <?php
                                                $global_index++;
                                            }
                                            ?>
                                        </ul>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
    }
}
