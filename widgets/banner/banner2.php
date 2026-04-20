<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;

defined('ABSPATH') || die();

class FT_Banner2_Widget extends \Elementor\Widget_Base
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
        return 'ft-banner2';
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
        return esc_html__('FT Banner 2', 'ftelements');
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
            'ft_banner2_section_settings',
            [
                'label' => esc_html__('Section Settings', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_class',
            [
                'label' => esc_html__('Section Class', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => 'hero-section hero-2',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner2_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'subtitle_text',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => "student's admission\nin 2026",
            ]
        );

        $this->add_control(
            'title_text',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => "A Joyful Start to Your\nChild's Education",
            ]
        );

        $this->add_control(
            'description_text',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('We are a caring kindergarten & school dedicated to building strong foundations through play-based and academic learning.', 'ftelements'),
            ]
        );

        $this->add_control(
            'primary_button_text',
            [
                'label' => esc_html__('Primary Button Text', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Enroll Now', 'ftelements'),
            ]
        );

        $this->add_control(
            'primary_button_link',
            [
                'label' => esc_html__('Primary Button Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->add_control(
            'secondary_button_text',
            [
                'label' => esc_html__('Secondary Button Text', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Book a Visit', 'ftelements'),
            ]
        );

        $this->add_control(
            'secondary_button_link',
            [
                'label' => esc_html__('Secondary Button Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner2_images',
            [
                'label' => esc_html__('Images', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'star_image_1',
            [
                'label' => esc_html__('Star Image 1', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/star1.png',
                ],
            ]
        );

        $this->add_control(
            'star_image_2',
            [
                'label' => esc_html__('Star Image 2', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/star2.png',
                ],
            ]
        );

        $this->add_control(
            'star_image_3',
            [
                'label' => esc_html__('Star Image 3', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/star2.png',
                ],
            ]
        );

        $this->add_control(
            'vec_shape_1',
            [
                'label' => esc_html__('Vector Shape 1', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/vec-1.png',
                ],
            ]
        );

        $this->add_control(
            'vec_shape_2',
            [
                'label' => esc_html__('Vector Shape 2', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/vec-2.png',
                ],
            ]
        );

        $this->add_control(
            'vec_shape_3',
            [
                'label' => esc_html__('Vector Shape 3', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/vec-3.png',
                ],
            ]
        );

        $this->add_control(
            'zirap_shape',
            [
                'label' => esc_html__('Zirap Shape', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/zirap.png',
                ],
            ]
        );

        $this->add_control(
            'line_shape',
            [
                'label' => esc_html__('Line Shape', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/line.png',
                ],
            ]
        );

        $this->add_control(
            'hero_main_image',
            [
                'label' => esc_html__('Hero Main Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/hero-image.jpg',
                ],
            ]
        );

        $this->add_control(
            'hero_line_image',
            [
                'label' => esc_html__('Hero Line Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/hero-line.png',
                ],
            ]
        );

        $this->add_control(
            'hero_shape_1',
            [
                'label' => esc_html__('Hero Shape 1', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/hero-shape1.png',
                ],
            ]
        );

        $this->add_control(
            'hero_shape_2',
            [
                'label' => esc_html__('Hero Shape 2', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/hero-shape2.png',
                ],
            ]
        );

        $this->add_control(
            'hero_shape_3',
            [
                'label' => esc_html__('Hero Shape 3', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/hero-shape3.png',
                ],
            ]
        );

        $this->add_control(
            'hero_client_image',
            [
                'label' => esc_html__('Subtitle Icon Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/hero-client.png',
                ],
            ]
        );

        $this->add_control(
            'button_arrow_image',
            [
                'label' => esc_html__('Button Arrow Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/arrow1.svg',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner2_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_align',
            [
                'label' => esc_html__('Content Vertical Align', 'ftelements'),
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
                ],
                'selectors' => [
                    '{{WRAPPER}} section .row.align-items-center' => 'align-items: {{VALUE}} !important;',
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
                    '{{WRAPPER}} section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_min_height',
            [
                'label' => esc_html__('Min Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh', 'vw'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 2000],
                    'vh' => ['min' => 0, 'max' => 100],
                    'vw' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} section' => 'min-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} section' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} section',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'section_border',
                'selector' => '{{WRAPPER}} section',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner2_style_content_column',
            [
                'label' => esc_html__('Content Column', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'content_column_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_column_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_text_align',
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
                    '{{WRAPPER}} .hero-content' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner2_style_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-sub span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .hero-content .hero-sub span',
            ]
        );

        $this->add_responsive_control(
            'subtitle_gap',
            [
                'label' => esc_html__('Gap (Image & Text)', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                    'em' => ['min' => 0, 'max' => 5],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-sub' => 'display: flex; align-items: center; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_icon_width',
            [
                'label' => esc_html__('Icon Image Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 300],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-sub img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_icon_border_radius',
            [
                'label' => esc_html__('Icon Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-sub img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-sub' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner2_style_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .hero-content .hero-title',
            ]
        );

        $this->add_responsive_control(
            'title_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner2_style_description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content > p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_typography',
                'selector' => '{{WRAPPER}} .hero-content > p',
            ]
        );

        $this->add_responsive_control(
            'description_max_width',
            [
                'label' => esc_html__('Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1200],
                    '%' => ['min' => 0, 'max' => 100],
                    'vw' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content > p' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'description_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content > p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'description_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content > p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner2_style_hero_image',
            [
                'label' => esc_html__('Hero Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'hero_image_column_padding',
            [
                'label' => esc_html__('Column Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-image-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'hero_thumb_width',
            [
                'label' => esc_html__('Main Image Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1200],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-image-items .thumb img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'hero_thumb_max_width',
            [
                'label' => esc_html__('Main Image Max Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1400],
                    '%' => ['min' => 0, 'max' => 100],
                    'vw' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-image-items .thumb img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'hero_thumb_border_radius',
            [
                'label' => esc_html__('Main Image Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .hero-image-items .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'hero_thumb_border',
                'selector' => '{{WRAPPER}} .hero-image-items .thumb img',
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'hero_thumb_css_filters',
                'selector' => '{{WRAPPER}} .hero-image-items .thumb img',
            ]
        );

        $this->add_responsive_control(
            'hero_thumb_margin',
            [
                'label' => esc_html__('Main Image Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-image-items .thumb img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner2_style_decorations',
            [
                'label' => esc_html__('Decorations', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'decoration_stars_opacity',
            [
                'label' => esc_html__('Stars Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .star img, {{WRAPPER}} .star2 img, {{WRAPPER}} .star3 img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_responsive_control(
            'decoration_vec_opacity',
            [
                'label' => esc_html__('Vector Shapes Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .vec-shape img, {{WRAPPER}} .vec-shape2 img, {{WRAPPER}} .vec-shape3 img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->add_responsive_control(
            'decoration_zirap_line_opacity',
            [
                'label' => esc_html__('Zirap & Line Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .zirap-shape img, {{WRAPPER}} .line-shape img' => 'opacity: calc({{SIZE}} / 100);',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
            ]
        );

        $this->add_responsive_control(
            'decoration_hero_shapes_opacity',
            [
                'label' => esc_html__('Hero Overlay Shapes Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-line img, {{WRAPPER}} .hero-image-items .shape1 img, {{WRAPPER}} .hero-image-items .shape2 img, {{WRAPPER}} .hero-image-items .shape3 img' => 'opacity: calc({{SIZE}} / 100);',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'ft_banner2_style_buttons',
            [
                'label' => esc_html__('Buttons', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'buttons_gap',
            [
                'label' => esc_html__('Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                    'em' => ['min' => 0, 'max' => 5],
                    'rem' => ['min' => 0, 'max' => 5],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button' => 'display: flex; align-items: center; gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'buttons_justify',
            [
                'label' => esc_html__('Horizontal Align', 'ftelements'),
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
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'buttons_wrap',
            [
                'label' => esc_html__('Wrap', 'ftelements'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'nowrap' => [
                        'title' => esc_html__('No', 'ftelements'),
                        'icon' => 'eicon-wrap',
                    ],
                    'wrap' => [
                        'title' => esc_html__('Yes', 'ftelements'),
                        'icon' => 'eicon-wrap',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button' => 'flex-wrap: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'buttons_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'buttons_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('ft_banner2_buttons_style_tabs');

        $this->start_controls_tab(
            'ft_banner2_button_primary_tab',
            [
                'label' => esc_html__('Primary', 'ftelements'),
            ]
        );

        $this->add_control(
            'button_primary_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header) .theme-bg svg path' => 'fill: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'button_primary_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header) .theme-text, {{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header) .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_primary_typography',
                'selector' => '{{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header) .theme-text, {{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header) .theme-text2',
            ]
        );

        $this->add_responsive_control(
            'button_primary_arrow_size',
            [
                'label' => esc_html__('Arrow Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header) .theme-text img, {{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header) .theme-text2 img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_primary_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header)' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'button_primary_border',
                'selector' => '{{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header)',
            ]
        );

        $this->add_responsive_control(
            'button_primary_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn:not(.hover-header)' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'ft_banner2_button_secondary_tab',
            [
                'label' => esc_html__('Secondary', 'ftelements'),
            ]
        );

        $this->add_control(
            'button_secondary_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header .theme-bg svg path' => 'fill: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'button_secondary_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header .theme-text, {{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_secondary_typography',
                'selector' => '{{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header .theme-text, {{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header .theme-text2',
            ]
        );

        $this->add_responsive_control(
            'button_secondary_arrow_size',
            [
                'label' => esc_html__('Arrow Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header .theme-text img, {{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header .theme-text2 img' => 'width: {{SIZE}}{{UNIT}}; height: auto;',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_secondary_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'button_secondary_border',
                'selector' => '{{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header',
            ]
        );

        $this->add_responsive_control(
            'button_secondary_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content .hero-button .theme-btn.hover-header' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
    }

    private function render_button($button_class, $button_text, $button_link, $bg_color, $arrow_image)
    {
        if (empty($button_text)) {
            return;
        }

        $url = !empty($button_link['url']) ? $button_link['url'] : '#';
        $target = !empty($button_link['is_external']) ? ' target="_blank"' : '';
        $nofollow = !empty($button_link['nofollow']) ? ' rel="nofollow"' : '';
        ?>
        <a href="<?php echo esc_url($url); ?>" class="<?php echo esc_attr($button_class); ?>"<?php echo $target . $nofollow; ?>>
            <span class="theme-bg">
                <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="<?php echo esc_attr($bg_color); ?>" />
                </svg>
            </span>
            <span class="theme-text"><?php echo esc_html($button_text); ?> <img src="<?php echo esc_url($arrow_image); ?>" alt=""></span>
            <span class="theme-text2"><?php echo esc_html($button_text); ?> <img src="<?php echo esc_url($arrow_image); ?>" alt=""></span>
        </a>
        <?php
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
        $section_class = !empty($settings['section_class']) ? $settings['section_class'] : 'hero-section hero-2';

        $subtitle_text = !empty($settings['subtitle_text']) ? $settings['subtitle_text'] : "student's admission\nin 2026";
        $title_text = !empty($settings['title_text']) ? $settings['title_text'] : "A Joyful Start to Your\nChild's Education";
        $description_text = !empty($settings['description_text']) ? $settings['description_text'] : '';
        $primary_button_text = !empty($settings['primary_button_text']) ? $settings['primary_button_text'] : '';
        $primary_button_link = !empty($settings['primary_button_link']) ? $settings['primary_button_link'] : [];
        $secondary_button_text = !empty($settings['secondary_button_text']) ? $settings['secondary_button_text'] : '';
        $secondary_button_link = !empty($settings['secondary_button_link']) ? $settings['secondary_button_link'] : [];

        $star_image_1 = !empty($settings['star_image_1']['url']) ? $settings['star_image_1']['url'] : $theme_uri . '/assets/img/home-2/shape/star1.png';
        $star_image_2 = !empty($settings['star_image_2']['url']) ? $settings['star_image_2']['url'] : $theme_uri . '/assets/img/home-2/shape/star2.png';
        $star_image_3 = !empty($settings['star_image_3']['url']) ? $settings['star_image_3']['url'] : $theme_uri . '/assets/img/home-2/shape/star2.png';
        $vec_shape_1 = !empty($settings['vec_shape_1']['url']) ? $settings['vec_shape_1']['url'] : $theme_uri . '/assets/img/home-2/shape/vec-1.png';
        $vec_shape_2 = !empty($settings['vec_shape_2']['url']) ? $settings['vec_shape_2']['url'] : $theme_uri . '/assets/img/home-2/shape/vec-2.png';
        $vec_shape_3 = !empty($settings['vec_shape_3']['url']) ? $settings['vec_shape_3']['url'] : $theme_uri . '/assets/img/home-2/shape/vec-3.png';
        $zirap_shape = !empty($settings['zirap_shape']['url']) ? $settings['zirap_shape']['url'] : $theme_uri . '/assets/img/home-2/shape/zirap.png';
        $line_shape = !empty($settings['line_shape']['url']) ? $settings['line_shape']['url'] : $theme_uri . '/assets/img/home-2/shape/line.png';
        $hero_main_image = !empty($settings['hero_main_image']['url']) ? $settings['hero_main_image']['url'] : $theme_uri . '/assets/img/home-2/hero-image.jpg';
        $hero_line_image = !empty($settings['hero_line_image']['url']) ? $settings['hero_line_image']['url'] : $theme_uri . '/assets/img/home-2/hero-line.png';
        $hero_shape_1 = !empty($settings['hero_shape_1']['url']) ? $settings['hero_shape_1']['url'] : $theme_uri . '/assets/img/home-2/hero-shape1.png';
        $hero_shape_2 = !empty($settings['hero_shape_2']['url']) ? $settings['hero_shape_2']['url'] : $theme_uri . '/assets/img/home-2/hero-shape2.png';
        $hero_shape_3 = !empty($settings['hero_shape_3']['url']) ? $settings['hero_shape_3']['url'] : $theme_uri . '/assets/img/home-2/hero-shape3.png';
        $hero_client_image = !empty($settings['hero_client_image']['url']) ? $settings['hero_client_image']['url'] : $theme_uri . '/assets/img/home-2/hero-client.png';
        $button_arrow_image = !empty($settings['button_arrow_image']['url']) ? $settings['button_arrow_image']['url'] : $theme_uri . '/assets/img/icon/arrow1.svg';

        ?>




        <section class="<?php echo esc_attr($section_class); ?>">
            <div class="star">
                <img src="<?php echo esc_url($star_image_1); ?>" alt="img">
            </div>
            <div class="star2">
                <img src="<?php echo esc_url($star_image_2); ?>" alt="img">
            </div>
            <div class="star3">
                <img src="<?php echo esc_url($star_image_3); ?>" alt="img">
            </div>
            <div class="vec-shape float-bob-x">
                <img src="<?php echo esc_url($vec_shape_1); ?>" alt="img">
            </div>
            <div class="vec-shape2 float-bob-x">
                <img src="<?php echo esc_url($vec_shape_2); ?>" alt="img">
            </div>
            <div class="vec-shape3 float-bob-x">
                <img src="<?php echo esc_url($vec_shape_3); ?>" alt="img">
            </div>
            <div class="zirap-shape float-bob-y">
                <img src="<?php echo esc_url($zirap_shape); ?>" alt="img">
            </div>
            <div class="line-shape">
                <img src="<?php echo esc_url($line_shape); ?>" alt="img">
            </div>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="hero-image-items">
                            <div class="thumb">
                                <img src="<?php echo esc_url($hero_main_image); ?>" alt="img">
                            </div>
                            <div class="hero-line">
                                <img src="<?php echo esc_url($hero_line_image); ?>" alt="img">
                            </div>
                            <div class="shape1">
                                <img src="<?php echo esc_url($hero_shape_1); ?>" alt="img">
                            </div>
                            <div class="shape2">
                                <img src="<?php echo esc_url($hero_shape_2); ?>" alt="img">
                            </div>
                            <div class="shape3">
                                <img src="<?php echo esc_url($hero_shape_3); ?>" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="hero-content">
                            <div class="hero-sub wow fadeInUp" data-wow-delay=".3s">
                                <img src="<?php echo esc_url($hero_client_image); ?>" alt="img">
                                <span>
                                    <?php echo nl2br(esc_html($subtitle_text)); ?>
                                </span>
                            </div>
                            <h1 class="hero-title text-anim">
                                <?php echo nl2br(esc_html($title_text)); ?>
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".3s">
                                <?php echo esc_html($description_text); ?>
                            </p>
                            <div class="hero-button wow fadeInUp" data-wow-delay=".5s">
                                <?php
                                $this->render_button('theme-btn', $primary_button_text, $primary_button_link, '#F39F5F', $button_arrow_image);
                                $this->render_button('theme-btn hover-header', $secondary_button_text, $secondary_button_link, '#385469', $button_arrow_image);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>








<?php
    }
} ?>