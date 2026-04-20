<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Typography;

defined('ABSPATH') || die();

class FT_Cta2_Widget extends \Elementor\Widget_Base
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
        return 'ft-cta2';
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
        return esc_html__('FT CTA 2', 'ftelements');
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
            'cta2_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label'       => esc_html__('Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Special Offer', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('Learn To Play, Converse <br> With Confidence', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label'       => esc_html__('Button Text', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Apply Now', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label'       => esc_html__('Button Link', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'default'     => [
                    'url' => '#',
                ],
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
            ]
        );

        $this->add_control(
            'img_tree',
            [
                'label'   => esc_html__('Decor: Tree', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/tree.png',
                ],
            ]
        );

        $this->add_control(
            'img_doll',
            [
                'label'   => esc_html__('Decor: Doll', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/doll.png',
                ],
            ]
        );

        $this->add_control(
            'img_border_shape',
            [
                'label'   => esc_html__('Border Shape', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/border-shape.png',
                ],
            ]
        );

        $this->add_control(
            'img_main',
            [
                'label'   => esc_html__('Main Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/special-image.jpg',
                ],
            ]
        );

        $this->add_control(
            'img_button_arrow',
            [
                'label'   => esc_html__('Button Arrow Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/arrow2.svg',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section',
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
                    '{{WRAPPER}} .special-offer-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .special-offer-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_min_height',
            [
                'label'      => esc_html__('Min Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', '%'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                    ],
                    'vh' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-section' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'section_overflow',
            [
                'label'     => esc_html__('Overflow', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'inherit' => esc_html__('Default', 'ftelements'),
                    'visible' => esc_html__('Visible', 'ftelements'),
                    'hidden'  => esc_html__('Hidden', 'ftelements'),
                    'auto'    => esc_html__('Auto', 'ftelements'),
                    'clip'    => esc_html__('Clip', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .special-offer-section' => 'overflow: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .special-offer-section',
            ]
        );

        $this->add_control(
            'section_z_index',
            [
                'label'     => esc_html__('Z-Index', 'ftelements'),
                'type'      => Controls_Manager::NUMBER,
                'min'       => -9999,
                'max'       => 99999,
                'selectors' => [
                    '{{WRAPPER}} .special-offer-section' => 'z-index: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_inner',
            [
                'label' => esc_html__('Inner Wrapper', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'inner_wrapper_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'inner_wrapper_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'inner_content_max_width',
            [
                'label'      => esc_html__('Content Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-wrapper .container' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_tree_shape',
            [
                'label' => esc_html__('Decor: Tree', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'tree_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .tree-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tree_max_width',
            [
                'label'      => esc_html__('Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .tree-shape img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tree_opacity',
            [
                'label'      => esc_html__('Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => 0.01,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .tree-shape img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tree_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .tree-shape' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'tree_css_filters',
                'selector' => '{{WRAPPER}} .tree-shape img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_doll_shape',
            [
                'label' => esc_html__('Decor: Doll', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'doll_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .doll-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'doll_max_width',
            [
                'label'      => esc_html__('Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .doll-shape img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'doll_opacity',
            [
                'label'      => esc_html__('Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => 0.01,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .doll-shape img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'doll_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .doll-shape' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'doll_css_filters',
                'selector' => '{{WRAPPER}} .doll-shape img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_border_shape',
            [
                'label' => esc_html__('Border Shape', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'border_shape_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .border-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'border_shape_max_width',
            [
                'label'      => esc_html__('Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .border-shape img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'border_shape_opacity',
            [
                'label'      => esc_html__('Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => 0.01,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .border-shape img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'border_shape_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .border-shape' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'border_shape_css_filters',
                'selector' => '{{WRAPPER}} .border-shape img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_main_image',
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
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .thumb img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'main_image_max_width',
            [
                'label'      => esc_html__('Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .thumb img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'main_image_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .thumb img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'main_image_object_fit',
            [
                'label'     => esc_html__('Object Fit', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'inherit' => esc_html__('Default', 'ftelements'),
                    'fill'    => esc_html__('Fill', 'ftelements'),
                    'contain' => esc_html__('Contain', 'ftelements'),
                    'cover'   => esc_html__('Cover', 'ftelements'),
                    'none'    => esc_html__('None', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .thumb img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'main_image_object_position',
            [
                'label'     => esc_html__('Object Position', 'ftelements'),
                'type'      => Controls_Manager::TEXT,
                'placeholder' => esc_html__('e.g. center center', 'ftelements'),
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .thumb img' => 'object-position: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'main_image_opacity',
            [
                'label'      => esc_html__('Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => 0.01,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .thumb img' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'thumb_padding',
            [
                'label'      => esc_html__('Thumb Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .thumb' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .special-offer-image .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'main_image_border',
                'selector' => '{{WRAPPER}} .special-offer-image .thumb img',
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'main_image_css_filters',
                'selector' => '{{WRAPPER}} .special-offer-image .thumb img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_content_box',
            [
                'label' => esc_html__('Content Box', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'content_box_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_box_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_box_max_width',
            [
                'label'      => esc_html__('Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .content' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'content_box_alignment',
            [
                'label'     => esc_html__('Text Align', 'ftelements'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'   => [
                        'title' => esc_html__('Left', 'ftelements'),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'right'  => [
                        'title' => esc_html__('Right', 'ftelements'),
                        'icon'  => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .content' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'content_box_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .special-offer-image .content',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'content_box_border',
                'selector' => '{{WRAPPER}} .special-offer-image .content',
            ]
        );

        $this->add_responsive_control(
            'content_box_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .special-offer-image .section-title .sec-sub',
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .section-title .sec-sub' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .special-offer-image .section-title .tx-title',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .section-title .tx-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .section-title .tx-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .section-title .tx-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_button_svg',
            [
                'label' => esc_html__('Button Shape (SVG)', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'button_svg_fill',
            [
                'label'     => esc_html__('Fill Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-bg svg path:first-of-type' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_svg_fill_opacity',
            [
                'label'      => esc_html__('Fill Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => 0.01,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-bg svg path:first-of-type' => 'fill-opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_control(
            'button_svg_stroke',
            [
                'label'     => esc_html__('Stroke Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-bg svg path:last-of-type' => 'stroke: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_svg_stroke_opacity',
            [
                'label'      => esc_html__('Stroke Opacity', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1,
                        'step' => 0.01,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-bg svg path:last-of-type' => 'stroke-opacity: {{SIZE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_svg_width',
            [
                'label'      => esc_html__('SVG Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-bg svg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_svg_height',
            [
                'label'      => esc_html__('SVG Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-bg svg' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_button',
            [
                'label' => esc_html__('Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'button_align',
            [
                'label'     => esc_html__('Column Align', 'ftelements'),
                'description' => esc_html__('Aligns the title block and button as a column (flex).', 'ftelements'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'flex-start' => [
                        'title' => esc_html__('Left', 'ftelements'),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center'     => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'flex-end'   => [
                        'title' => esc_html__('Right', 'ftelements'),
                        'icon'  => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .content' => 'display: flex; flex-direction: column; align-items: {{VALUE}};',
                ],
            ]
        );

        $this->start_controls_tabs('button_style_tabs');

        $this->start_controls_tab(
            'button_tab_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'button_typography',
                'selector' => '{{WRAPPER}} .special-offer-image .theme-btn .theme-text, {{WRAPPER}} .special-offer-image .theme-btn .theme-text2',
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-text2' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .special-offer-image .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .theme-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'button_border',
                'selector' => '{{WRAPPER}} .special-offer-image .theme-btn',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'button_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .special-offer-image .theme-btn',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'button_tab_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'button_hover_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .theme-btn:hover .theme-text' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .special-offer-image .theme-btn:hover .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'button_hover_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .special-offer-image .theme-btn:hover',
            ]
        );

        $this->add_control(
            'button_hover_border_color',
            [
                'label'     => esc_html__('Border Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .theme-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_hover_svg_fill',
            [
                'label'     => esc_html__('SVG Fill Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .theme-btn:hover .theme-bg svg path:first-of-type' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_hover_svg_stroke',
            [
                'label'     => esc_html__('SVG Stroke Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .theme-btn:hover .theme-bg svg path:last-of-type' => 'stroke: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'style_button_arrow',
            [
                'label' => esc_html__('Button Arrow Icon', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'button_arrow_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-text img' => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-text2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_arrow_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-text img' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-text2 img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_arrow_margin_left',
            [
                'label'      => esc_html__('Spacing (Left of icon)', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-text img' => 'margin-left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-text2 img' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'button_arrow_vertical_align',
            [
                'label'     => esc_html__('Vertical Align', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'inherit' => esc_html__('Default', 'ftelements'),
                    'baseline' => esc_html__('Baseline', 'ftelements'),
                    'middle'   => esc_html__('Middle', 'ftelements'),
                    'top'      => esc_html__('Top', 'ftelements'),
                    'bottom'   => esc_html__('Bottom', 'ftelements'),
                    'text-top' => esc_html__('Text Top', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-text img' => 'vertical-align: {{VALUE}};',
                    '{{WRAPPER}} .special-offer-image .theme-btn .theme-text2 img' => 'vertical-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'button_arrow_css_filters',
                'selector' => '{{WRAPPER}} .special-offer-image .theme-btn .theme-text img, {{WRAPPER}} .special-offer-image .theme-btn .theme-text2 img',
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

        $img_tree = !empty($settings['img_tree']['url']) ? $settings['img_tree']['url'] : $theme_uri . '/assets/img/home-2/tree.png';
        $img_doll = !empty($settings['img_doll']['url']) ? $settings['img_doll']['url'] : $theme_uri . '/assets/img/home-2/doll.png';
        $img_border_shape = !empty($settings['img_border_shape']['url']) ? $settings['img_border_shape']['url'] : $theme_uri . '/assets/img/home-2/border-shape.png';
        $img_main = !empty($settings['img_main']['url']) ? $settings['img_main']['url'] : $theme_uri . '/assets/img/home-2/special-image.jpg';
        $img_button_arrow = !empty($settings['img_button_arrow']['url']) ? $settings['img_button_arrow']['url'] : $theme_uri . '/assets/img/icon/arrow2.svg';

        $subtitle = isset($settings['subtitle']) ? $settings['subtitle'] : '';
        $title = isset($settings['title']) ? $settings['title'] : '';
        $button_text = isset($settings['button_text']) ? $settings['button_text'] : '';

        $this->add_render_attribute('cta2_button', 'class', 'theme-btn hover-header wow fadeInUp');
        $this->add_render_attribute('cta2_button', 'data-wow-delay', '.3s');
        if (!empty($settings['button_link']['url'])) {
            $this->add_link_attributes('cta2_button', $settings['button_link']);
        } else {
            $this->add_render_attribute('cta2_button', 'href', '#');
        }

        ?>




        <section class="special-offer-section">
            <div class="tree-shape bz-gsap-animate-circle">
                <img src="<?php echo esc_url($img_tree); ?>" alt="<?php echo esc_attr($subtitle); ?>">
            </div>
            <div class="doll-shape bz-gsap-animate-circle">
                <img src="<?php echo esc_url($img_doll); ?>" alt="<?php echo esc_attr($subtitle); ?>">
            </div>
            <div class="container">
                <div class="special-offer-wrapper">
                    <div class="border-shape">
                        <img src="<?php echo esc_url($img_border_shape); ?>" alt="<?php echo esc_attr($subtitle); ?>">
                    </div>
                    <div class="special-offer-image">
                        <div class="thumb fix">
                            <img data-speed=".8" src="<?php echo esc_url($img_main); ?>" alt="<?php echo esc_attr($subtitle); ?>">
                        </div>
                        <div class="content text-center">
                            <div class="section-title mb-0 text-center">
                                <span class="text-white sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($subtitle); ?></span>
                                <h2 class="text-white tx-title sec_title  tz-itm-title tz-itm-anim">
                                    <?php echo wp_kses_post($title); ?>
                                </h2>
                            </div>
                            <a <?php $this->print_render_attribute_string('cta2_button'); ?>>
                                <span class="theme-bg">
                                    <svg width="159" height="59" viewBox="0 0 159 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 20.0253C0 11.5787 6.56575 4.58706 14.9957 4.05687L79.5 0L144.004 4.05687C152.434 4.58706 159 11.5787 159 20.0253V39.7848C159 48.3088 152.317 55.3362 143.804 55.7646L79.5 59L15.196 55.7646C6.68271 55.3362 0 48.3088 0 39.7848V20.0253Z" fill="#F39F5F" fill-opacity="0.15" />
                                        <path d="M143.973 4.55566C152.139 5.06928 158.5 11.8428 158.5 20.0254V39.7852C158.5 48.0425 152.026 54.8505 143.779 55.2656L79.5 58.499L15.2207 55.2656C6.97377 54.8505 0.500189 48.0425 0.5 39.7852V20.0254C0.5 11.8428 6.86084 5.06928 15.0273 4.55566L79.5 0.500977L143.973 4.55566Z" stroke="#F39F5F" stroke-opacity="0.3" />
                                    </svg>
                                </span>
                                <span class="theme-text"><?php echo esc_html($button_text); ?> <img src="<?php echo esc_url($img_button_arrow); ?>" alt=""></span>
                                <span class="theme-text2"><?php echo esc_html($button_text); ?> <img src="<?php echo esc_url($img_button_arrow); ?>" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>








<?php
    }
}
