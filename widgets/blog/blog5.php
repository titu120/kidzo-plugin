<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_Blog5_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'ft-blog5';
    }

    public function get_title()
    {
        return esc_html__('FT Blog 5', 'ftelements');
    }

    public function get_icon()
    {
        return 'tp-icon';
    }

    public function get_categories()
    {
        return ['pielements_category'];
    }

    protected function register_controls()
    {
        $theme_uri = get_template_directory_uri();

        $this->start_controls_section(
            'section_images',
            [
                'label' => esc_html__('Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_top_bg',
            [
                'label'        => esc_html__('Show Section Top Background', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_control(
            'section_top_bg_image',
            [
                'label'       => esc_html__('Section Top Background', 'ftelements'),
                'type'        => Controls_Manager::MEDIA,
                'description' => esc_html__('Replaces the theme strip behind the heading (default: CTA background).', 'ftelements'),
                'default'     => [
                    'url' => $theme_uri . '/assets/img/cta/cta-bg.jpg',
                ],
                'condition'   => ['show_section_top_bg' => 'yes'],
            ]
        );

        $this->add_control(
            'show_shape',
            [
                'label'        => esc_html__('Show Floating Shapes', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_control(
            'shape_image',
            [
                'label'     => esc_html__('Floating Shape 1', 'ftelements'),
                'type'      => Controls_Manager::MEDIA,
                'default'   => [
                    'url' => $theme_uri . '/assets/img/news/shape-1.png',
                ],
                'condition' => ['show_shape' => 'yes'],
            ]
        );

        $this->add_control(
            'show_shape_2',
            [
                'label'        => esc_html__('Show Shape 2', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => ['show_shape' => 'yes'],
            ]
        );

        $this->add_control(
            'shape_image_2',
            [
                'label'     => esc_html__('Floating Shape 2', 'ftelements'),
                'type'      => Controls_Manager::MEDIA,
                'condition' => [
                    'show_shape'   => 'yes',
                    'show_shape_2' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'show_shape_3',
            [
                'label'        => esc_html__('Show Shape 3', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => ['show_shape' => 'yes'],
            ]
        );

        $this->add_control(
            'shape_image_3',
            [
                'label'     => esc_html__('Floating Shape 3', 'ftelements'),
                'type'      => Controls_Manager::MEDIA,
                'condition' => [
                    'show_shape'   => 'yes',
                    'show_shape_3' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'use_custom_placeholder',
            [
                'label'        => esc_html__('Custom Placeholder (No Featured Image)', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

        $this->add_control(
            'fallback_thumbnail',
            [
                'label'       => esc_html__('Placeholder Image', 'ftelements'),
                'type'        => Controls_Manager::MEDIA,
                'description' => esc_html__('Shown when a post has no featured image.', 'ftelements'),
                'condition'   => ['use_custom_placeholder' => 'yes'],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_header',
            [
                'label'        => esc_html__('Show Header', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_control(
            'section_subtitle',
            [
                'label'     => esc_html__('Subtitle', 'ftelements'),
                'type'      => Controls_Manager::TEXT,
                'default'   => esc_html__('Blog And News', 'ftelements'),
                'condition' => ['show_header' => 'yes'],
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'     => esc_html__('Title', 'ftelements'),
                'type'      => Controls_Manager::TEXT,
                'default'   => esc_html__('Explore Blogs And News', 'ftelements'),
                'condition' => ['show_header' => 'yes'],
            ]
        );

        $this->add_control(
            'posts_per_page',
            [
                'label'   => esc_html__('Posts Count', 'ftelements'),
                'type'    => Controls_Manager::NUMBER,
                'default' => 3,
                'min'     => 1,
                'max'     => 30,
            ]
        );

        $this->add_control(
            'offset',
            [
                'label'   => esc_html__('Offset', 'ftelements'),
                'type'    => Controls_Manager::NUMBER,
                'default' => 0,
                'min'     => 0,
            ]
        );

        $this->add_control(
            'order',
            [
                'label'   => esc_html__('Order', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'DESC',
                'options' => [
                    'DESC' => esc_html__('Descending', 'ftelements'),
                    'ASC'  => esc_html__('Ascending', 'ftelements'),
                ],
            ]
        );

        $this->add_control(
            'orderby',
            [
                'label'   => esc_html__('Order By', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'date',
                'options' => [
                    'date'          => esc_html__('Date', 'ftelements'),
                    'title'         => esc_html__('Title', 'ftelements'),
                    'modified'      => esc_html__('Modified', 'ftelements'),
                    'comment_count' => esc_html__('Comment Count', 'ftelements'),
                    'rand'          => esc_html__('Random', 'ftelements'),
                ],
            ]
        );

        $this->add_control(
            'category_filter',
            [
                'label'       => esc_html__('Category Slugs', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'description' => esc_html__('Comma separated. Example: news,events', 'ftelements'),
            ]
        );

        $this->add_control(
            'columns',
            [
                'label'   => esc_html__('Columns', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => '3',
                'options' => [
                    '2' => esc_html__('2 Columns', 'ftelements'),
                    '3' => esc_html__('3 Columns', 'ftelements'),
                    '4' => esc_html__('4 Columns', 'ftelements'),
                ],
            ]
        );

        $this->add_control(
            'title_words',
            [
                'label'       => esc_html__('Title Word Count', 'ftelements'),
                'type'        => Controls_Manager::NUMBER,
                'default'     => 8,
                'min'         => 0,
                'max'         => 40,
                'description' => esc_html__('0 keeps full title.', 'ftelements'),
            ]
        );

        $this->add_control(
            'excerpt_words',
            [
                'label'       => esc_html__('Excerpt Word Count', 'ftelements'),
                'type'        => Controls_Manager::NUMBER,
                'default'     => 0,
                'min'         => 0,
                'max'         => 100,
                'description' => esc_html__('0 hides excerpt text output.', 'ftelements'),
            ]
        );

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name'    => 'thumbnail',
                'default' => 'large',
            ]
        );

        $this->add_control(
            'show_image',
            [
                'label'        => esc_html__('Show Featured Image', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_control(
            'show_layer_effect',
            [
                'label'        => esc_html__('Show Image Layer Effect', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => ['show_image' => 'yes'],
            ]
        );

        $this->add_control(
            'show_category_badge',
            [
                'label'        => esc_html__('Show Category Badge On Image', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_control(
            'show_meta',
            [
                'label'        => esc_html__('Show Meta List', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_control(
            'show_date',
            [
                'label'        => esc_html__('Show Date', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => ['show_meta' => 'yes'],
            ]
        );

        $this->add_control(
            'show_author',
            [
                'label'        => esc_html__('Show Author', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => ['show_meta' => 'yes'],
            ]
        );

        $this->add_control(
            'show_comments',
            [
                'label'        => esc_html__('Show Comment Count', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => ['show_meta' => 'yes'],
            ]
        );

        $this->add_control(
            'show_word_count',
            [
                'label'        => esc_html__('Show Word Count', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => ['show_meta' => 'yes'],
            ]
        );

        $this->add_control(
            'word_count_suffix',
            [
                'label'     => esc_html__('Word Count Suffix', 'ftelements'),
                'type'      => Controls_Manager::TEXT,
                'default'   => esc_html__('words', 'ftelements'),
                'condition' => ['show_word_count' => 'yes'],
            ]
        );

        $this->add_control(
            'show_excerpt',
            [
                'label'        => esc_html__('Show Excerpt', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

        $this->add_control(
            'show_button',
            [
                'label'        => esc_html__('Show Read More Arrow', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_control(
            'show_animation',
            [
                'label'        => esc_html__('Enable Card Animation', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_layout',
            [
                'label' => esc_html__('Layout', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Section Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label'      => esc_html__('Section Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'row_gap',
            [
                'label'      => esc_html__('Row Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .row' => 'row-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'column_gap',
            [
                'label'      => esc_html__('Column Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .row' => 'column-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_header',
            [
                'label' => esc_html__('Header', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-5 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .news-section-5 .section-title .sec-sub',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-5 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .news-section-5 .section-title h2',
            ]
        );

        $this->add_responsive_control(
            'header_margin',
            [
                'label'      => esc_html__('Header Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_card',
            [
                'label' => esc_html__('Card', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'card_background',
                'selector' => '{{WRAPPER}} .news-section-5 .news-card-items5',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'card_border',
                'selector' => '{{WRAPPER}} .news-section-5 .news-card-items5',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label'      => esc_html__('Card Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .news-card-items5' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label'      => esc_html__('Card Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .news-card-items5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_content_padding',
            [
                'label'      => esc_html__('Card Content Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .news-card-items5 .news-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_image',
            [
                'label' => esc_html__('Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'image_height',
            [
                'label'      => esc_html__('Image Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .news-image img' => 'height: {{SIZE}}{{UNIT}}; object-fit: cover;',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_border_radius',
            [
                'label'      => esc_html__('Image Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .news-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'image_border',
                'selector' => '{{WRAPPER}} .news-section-5 .news-image img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_badge',
            [
                'label' => esc_html__('Category Badge', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'badge_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-5 .news-image .post span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'badge_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-5 .news-image .post' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'badge_typography',
                'selector' => '{{WRAPPER}} .news-section-5 .news-image .post span',
            ]
        );

        $this->add_responsive_control(
            'badge_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .news-image .post' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_meta',
            [
                'label' => esc_html__('Meta', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'meta_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-5 .news-content ul li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'meta_icon_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-5 .news-content ul li i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'meta_typography',
                'selector' => '{{WRAPPER}} .news-section-5 .news-content ul li',
            ]
        );

        $this->add_responsive_control(
            'meta_gap',
            [
                'label'      => esc_html__('Items Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .news-content ul' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_post_title',
            [
                'label' => esc_html__('Post Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'post_title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-5 .news-content h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'post_title_hover_color',
            [
                'label'     => esc_html__('Hover Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-5 .news-content h3 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'post_title_typography',
                'selector' => '{{WRAPPER}} .news-section-5 .news-content h3',
            ]
        );

        $this->add_responsive_control(
            'post_title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .news-content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_excerpt',
            [
                'label' => esc_html__('Excerpt', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'excerpt_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-5 .news-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'excerpt_typography',
                'selector' => '{{WRAPPER}} .news-section-5 .news-content p',
            ]
        );

        $this->add_responsive_control(
            'excerpt_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .news-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_button',
            [
                'label' => esc_html__('Arrow Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'arrow_icon_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-5 .arrow-btn .icon svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'arrow_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-5 .arrow-btn .icon .bg' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'arrow_border',
                'selector' => '{{WRAPPER}} .news-section-5 .arrow-btn .icon',
            ]
        );

        $this->add_responsive_control(
            'arrow_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .arrow-btn .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'arrow_size',
            [
                'label'      => esc_html__('Button Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-5 .arrow-btn .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    private function get_post_word_count($post_id)
    {
        $content = get_post_field('post_content', $post_id);
        $text = wp_strip_all_tags((string) $content);
        return count(preg_split('/\s+/u', $text, -1, PREG_SPLIT_NO_EMPTY));
    }

    /**
     * @param array|string $image Media control value.
     * @param string       $default_url Full URL when control is empty (use '' for optional images).
     */
    private function resolve_media_url($image, $default_url)
    {
        $image = is_array($image) ? $image : [];
        $theme_uri = get_template_directory_uri();
        if (! empty($image['id'])) {
            $src = wp_get_attachment_image_url((int) $image['id'], 'full');
            if (! empty($src)) {
                return $src;
            }
        }
        if (! empty($image['url'])) {
            $url = $image['url'];
            if (preg_match('#^(https?:)?//#', $url)) {
                return $url;
            }

            return $theme_uri . '/' . ltrim($url, '/');
        }

        return $default_url;
    }

    /**
     * @param array|string $image Media control value.
     */
    private function get_media_alt($image, $fallback_alt)
    {
        $image = is_array($image) ? $image : [];
        if (! empty($image['id'])) {
            $attachment_alt = (string) get_post_meta((int) $image['id'], '_wp_attachment_image_alt', true);
            if ('' !== $attachment_alt) {
                return $attachment_alt;
            }
        }

        return $fallback_alt;
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $arrow_icon_svg = '<svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.9" d="M10.4774 0.235515C10.4486 0.324309 10.3906 0.401968 10.3481 0.413358C10.3039 0.425186 10.2772 0.456482 10.2854 0.487064C10.2932 0.516037 10.3487 0.527039 10.4092 0.51083C10.5024 0.48586 10.5282 0.516891 10.5826 0.719701C10.6417 0.940217 10.6354 0.962599 10.5003 1.01432C10.4052 1.05187 10.3572 1.10788 10.3643 1.18016C10.3684 1.24118 10.334 1.34182 10.2881 1.40588C10.1502 1.59118 10.2828 1.69366 10.5608 1.61919C10.7684 1.56355 10.7947 1.5703 10.7964 1.66818C10.7973 1.73694 10.7444 1.80114 10.6604 1.83402C10.551 1.87712 10.5242 1.92744 10.5304 2.08794C10.5331 2.19592 10.5645 2.33932 10.5969 2.40137C10.6469 2.49664 10.6946 2.50456 10.9022 2.44893C11.1802 2.37446 11.2363 2.43359 11.042 2.5978C10.885 2.73129 10.8869 2.90847 11.0481 2.96708C11.1124 2.99125 11.1439 3.01731 11.1161 3.02476C10.9858 3.06142 7.91162 4.06627 6.70975 4.46594C4.75645 5.11526 0.833265 6.46321 0.706193 6.53176C0.568108 6.60499 0.554427 6.75012 0.680896 6.82319C0.755711 6.86698 0.865862 6.85299 1.09001 6.77395C1.37008 6.67475 1.36156 6.68221 0.982483 6.86314C0.458688 7.11218 0.32957 7.21233 0.386872 7.32809C0.446671 7.44663 0.61575 7.39098 2.14734 6.73734C2.85502 6.43558 3.69849 6.10434 4.02443 5.99975L4.61668 5.81001L3.82596 6.12884C3.1397 6.40588 1.19342 7.27759 0.669029 7.54404C0.534555 7.61113 0.495859 7.6629 0.517423 7.74338C0.554083 7.8802 0.574906 7.87289 2.06431 7.1926C2.7509 6.87752 3.76737 6.44644 4.31993 6.23283C5.44304 5.80078 8.64131 4.72298 9.27782 4.56106L9.68827 4.45798L9.3738 4.59227C8.90884 4.79276 5.0965 6.27317 2.94114 7.0905C1.48737 7.6422 1.01337 7.84166 0.868177 7.96683C0.658035 8.1439 0.510962 8.43863 0.605576 8.49091C0.675827 8.53074 2.90589 7.71755 6.77693 6.24039C8.52083 5.57472 9.57125 5.19838 9.73587 5.17842L9.9906 5.14812L9.69969 5.26575C9.54017 5.33092 7.88996 5.94733 6.0348 6.63592C4.17963 7.3245 2.34985 8.00973 1.97032 8.15628C1.58958 8.30488 1.13433 8.46309 0.94958 8.5126C0.601343 8.60591 0.351623 8.79876 0.553279 8.81891C0.605436 8.82391 1.91433 8.35933 3.46215 7.78587C7.37985 6.33244 8.39974 6.00568 5.65794 7.0802C4.86997 7.38967 4.01929 7.7332 3.75867 7.84616C3.50013 7.96029 2.67446 8.27296 1.92778 8.54032C-0.077117 9.25867 -0.0192129 9.2328 0.00731647 9.41029C0.0360925 9.6027 0.137387 9.60143 0.658203 9.40668C0.997382 9.27957 1.08412 9.26322 1.14148 9.32031C1.20133 9.38018 1.26543 9.35783 1.65886 9.14545C2.26815 8.81658 2.2555 8.82169 5.04582 7.84975C9.12026 6.43195 9.55635 6.31338 6.35332 7.49769C3.6095 8.51237 1.19337 9.46167 1.13017 9.55279C1.1024 9.59301 0.971624 9.66083 0.838514 9.70685C0.602494 9.78734 0.598883 9.79348 0.64805 9.97698L0.698512 10.1653L1.20068 10.0187L1.70122 9.87248L1.79541 10.0801C1.84651 10.1924 1.92575 10.2919 1.96723 10.2963C2.01035 10.3003 3.02498 9.94734 4.2178 9.51386C6.92919 8.52857 9.53322 7.61346 10.4829 7.31241C10.882 7.1865 11.3173 7.03881 11.447 6.98679C11.6257 6.91475 11.6737 6.91054 11.6404 6.96948C11.6144 7.01614 10.5803 7.42087 9.04874 7.98307C4.4149 9.68705 1.45548 10.8061 1.40225 10.8756C1.37361 10.9126 1.38273 11.0447 1.42204 11.1652C1.47895 11.3449 1.51599 11.3851 1.61263 11.373C1.67734 11.366 3.98261 10.5326 6.72815 9.52438C9.4737 8.51614 11.8504 7.65504 12.0048 7.6102C12.1953 7.55573 12.3338 7.54966 12.4414 7.59156C12.62 7.66275 12.8203 7.9265 12.8738 8.15887C12.8934 8.24505 12.9699 8.35395 13.0439 8.40139C13.118 8.44883 13.2256 8.55627 13.2842 8.64409C13.38 8.78576 13.3798 8.80478 13.2817 8.83107C13.2212 8.84728 13.1686 8.89934 13.1643 8.94879C13.1501 9.08543 13.324 9.17857 13.4551 9.10549C13.5479 9.05301 13.5863 9.07205 13.6851 9.21812C13.7964 9.38496 13.8132 9.38907 14.0025 9.31075C14.1649 9.24309 14.2129 9.24575 14.2566 9.32375C14.3254 9.44332 14.5385 9.39486 14.5539 9.25617C14.5597 9.1994 14.5225 9.14554 14.4566 9.12181C14.363 9.0865 14.3887 9.04511 14.6663 8.79302C14.8394 8.63451 15.1032 8.45513 15.2468 8.39595C15.3937 8.33589 15.5499 8.26472 15.6012 8.23373C15.6964 8.17716 15.6742 8.01577 15.561 7.95294C15.5072 7.92248 15.5325 7.87948 15.6472 7.8039C15.7367 7.74543 15.8552 7.68433 15.9124 7.669C16.0073 7.64359 16.0208 7.58303 15.9608 7.44386C15.9464 7.40976 16.0319 7.32992 16.154 7.26268C16.6041 7.01961 16.6275 6.99606 16.6023 6.82341C16.5893 6.73547 16.6192 6.61185 16.6709 6.5497C17.3886 5.67077 17.6967 5.36222 17.9656 5.25394C18.2659 5.13208 18.425 4.94108 18.331 4.81272C18.2784 4.74057 18.4645 4.45434 18.5839 4.42236C18.6133 4.41447 18.7131 4.29631 18.8004 4.16424C19.1129 3.69578 19.8074 2.82824 19.8859 2.80721C20.0592 2.76078 19.9105 2.61776 19.5482 2.48195C19.2501 2.3703 19.1583 2.30866 19.1335 2.20316C19.1056 2.07952 19.0863 2.07263 18.909 2.13048C18.7591 2.17926 18.6556 2.1656 18.4476 2.06952C17.5219 1.63611 15.0025 0.905172 12.5915 0.36946C12.1628 0.273845 11.7681 0.16742 11.7189 0.134037C11.6696 0.100653 11.5567 0.091231 11.4684 0.114887C11.3703 0.141171 11.2478 0.122234 11.1556 0.0658578C10.922 -0.0734017 10.5508 0.0191645 10.4774 0.235515Z" fill="white"></path></svg>';

        $query_args = [
            'post_type'           => 'post',
            'post_status'         => 'publish',
            'posts_per_page'      => ! empty($settings['posts_per_page']) ? absint($settings['posts_per_page']) : 3,
            'ignore_sticky_posts' => true,
            'order'               => ! empty($settings['order']) ? $settings['order'] : 'DESC',
            'orderby'             => ! empty($settings['orderby']) ? $settings['orderby'] : 'date',
        ];

        if (! empty($settings['offset'])) {
            $query_args['offset'] = absint($settings['offset']);
        }

        if (! empty($settings['category_filter'])) {
            $slugs = array_filter(array_map('trim', explode(',', (string) $settings['category_filter'])));
            if (! empty($slugs)) {
                $query_args['category_name'] = implode(',', $slugs);
            }
        }

        $blog_query = new \WP_Query($query_args);
        $title_words = isset($settings['title_words']) ? absint($settings['title_words']) : 8;
        $excerpt_words = isset($settings['excerpt_words']) ? absint($settings['excerpt_words']) : 0;
        $word_suffix = ! empty($settings['word_count_suffix']) ? $settings['word_count_suffix'] : __('words', 'ftelements');

        $column_class = 'col-xl-4 col-lg-6 col-md-6';
        if ('2' === $settings['columns']) {
            $column_class = 'col-xl-6 col-lg-6 col-md-6';
        } elseif ('4' === $settings['columns']) {
            $column_class = 'col-xl-3 col-lg-6 col-md-6';
        }

        $theme_uri = get_template_directory_uri();
        $element_id = $this->get_id();

        $section_top_bg_url = '';
        if ('yes' === ($settings['show_section_top_bg'] ?? '')) {
            $section_top_bg_url = $this->resolve_media_url(
                isset($settings['section_top_bg_image']) ? $settings['section_top_bg_image'] : [],
                $theme_uri . '/assets/img/cta/cta-bg.jpg'
            );
        }

        $shape_default = $theme_uri . '/assets/img/news/shape-1.png';
        $shape_url = $this->resolve_media_url(
            isset($settings['shape_image']) ? $settings['shape_image'] : [],
            $shape_default
        );
        $shape_alt = $this->get_media_alt(
            isset($settings['shape_image']) ? $settings['shape_image'] : [],
            esc_attr__('Decorative shape', 'ftelements')
        );

        $shape_2_url = '';
        if ('yes' === ($settings['show_shape'] ?? '') && 'yes' === ($settings['show_shape_2'] ?? '')) {
            $shape_2_url = $this->resolve_media_url(isset($settings['shape_image_2']) ? $settings['shape_image_2'] : [], '');
        }
        $shape_2_alt = $this->get_media_alt(
            isset($settings['shape_image_2']) ? $settings['shape_image_2'] : [],
            esc_attr__('Decorative shape', 'ftelements')
        );

        $shape_3_url = '';
        if ('yes' === ($settings['show_shape'] ?? '') && 'yes' === ($settings['show_shape_3'] ?? '')) {
            $shape_3_url = $this->resolve_media_url(isset($settings['shape_image_3']) ? $settings['shape_image_3'] : [], '');
        }
        $shape_3_alt = $this->get_media_alt(
            isset($settings['shape_image_3']) ? $settings['shape_image_3'] : [],
            esc_attr__('Decorative shape', 'ftelements')
        );

        $custom_placeholder_url = '';
        if ('yes' === ($settings['use_custom_placeholder'] ?? '')) {
            $custom_placeholder_url = $this->resolve_media_url(isset($settings['fallback_thumbnail']) ? $settings['fallback_thumbnail'] : [], '');
        }
        ?>
        <section class="news-section-5 fix section-padding ft-blog5">
            <?php if (! empty($section_top_bg_url)) : ?>
                <style>
                .elementor-element-<?php echo esc_attr($element_id); ?> .news-section-5::before {
                    display: none !important;
                }
                </style>
                <div class="ft-blog5-section-top-bg" aria-hidden="true" style="position:absolute;top:0;left:0;right:0;width:100%;height:50%;z-index:-1;background-image:url('<?php echo esc_url($section_top_bg_url); ?>');background-size:cover;background-repeat:no-repeat;"></div>
            <?php endif; ?>
            <?php if ('yes' === ($settings['show_shape'] ?? '') && ! empty($shape_url)) : ?>
                <div class="shape-1 float-bob-y">
                    <img src="<?php echo esc_url($shape_url); ?>" alt="<?php echo esc_attr($shape_alt); ?>">
                </div>
            <?php endif; ?>
            <?php if ('yes' === ($settings['show_shape'] ?? '') && ! empty($shape_2_url)) : ?>
                <div class="ft-blog5-shape ft-blog5-shape-2 float-bob-y" style="position:absolute;top:12%;right:7%;z-index:1;">
                    <img src="<?php echo esc_url($shape_2_url); ?>" alt="<?php echo esc_attr($shape_2_alt); ?>">
                </div>
            <?php endif; ?>
            <?php if ('yes' === ($settings['show_shape'] ?? '') && ! empty($shape_3_url)) : ?>
                <div class="ft-blog5-shape ft-blog5-shape-3 float-bob-y" style="position:absolute;bottom:18%;left:10%;z-index:1;">
                    <img src="<?php echo esc_url($shape_3_url); ?>" alt="<?php echo esc_attr($shape_3_alt); ?>">
                </div>
            <?php endif; ?>
            <div class="container">
                <?php if ('yes' === $settings['show_header']) : ?>
                    <div class="section-title text-center">
                        <?php if (! empty($settings['section_subtitle'])) : ?>
                            <span class="text-white sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['section_subtitle']); ?></span>
                        <?php endif; ?>
                        <?php if (! empty($settings['section_title'])) : ?>
                            <h2 class="text-white tx-title sec_title tz-itm-title tz-itm-anim"><?php echo esc_html($settings['section_title']); ?></h2>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <?php
                    if ($blog_query->have_posts()) :
                        $index = 0;
                        while ($blog_query->have_posts()) :
                            $blog_query->the_post();
                            $post_id = get_the_ID();
                            $delay = '.3s';
                            if ($index > 0) {
                                $delay = '.' . (3 + ($index * 2)) . 's';
                            }
                            $wow_class = 'yes' === $settings['show_animation'] ? 'wow fadeInUp' : '';
                            $first_category = get_the_category($post_id);
                            $word_count = $this->get_post_word_count($post_id);
                            $thumb_id = get_post_thumbnail_id($post_id);
                            $layer_large = $thumb_id ? (string) get_the_post_thumbnail_url($post_id, 'large') : '';
                            if ('' === $layer_large && ! empty($custom_placeholder_url)) {
                                $layer_large = $custom_placeholder_url;
                            }
                            $placeholder_src = ! empty($custom_placeholder_url) ? $custom_placeholder_url : Utils::get_placeholder_image_src();
                            ?>
                            <div class="<?php echo esc_attr($column_class . ' ' . $wow_class); ?>" data-wow-delay="<?php echo esc_attr($delay); ?>">
                                <div class="news-card-items5">
                                    <?php if ('yes' === $settings['show_image']) : ?>
                                        <div class="news-image">
                                            <?php if (has_post_thumbnail($post_id)) : ?>
                                                <?php echo Group_Control_Image_Size::get_attachment_image_html($settings, 'thumbnail', $thumb_id); ?>
                                            <?php else : ?>
                                                <img src="<?php echo esc_url($placeholder_src); ?>" alt="<?php the_title_attribute(); ?>">
                                            <?php endif; ?>
                                            <?php if ('yes' === $settings['show_layer_effect'] && '' !== $layer_large) : ?>
                                                <div class="news-layer-wrapper">
                                                    <div class="news-layer-image" style="background-image: url('<?php echo esc_url($layer_large); ?>');"></div>
                                                    <div class="news-layer-image" style="background-image: url('<?php echo esc_url($layer_large); ?>');"></div>
                                                    <div class="news-layer-image" style="background-image: url('<?php echo esc_url($layer_large); ?>');"></div>
                                                    <div class="news-layer-image" style="background-image: url('<?php echo esc_url($layer_large); ?>');"></div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ('yes' === $settings['show_category_badge'] && ! empty($first_category)) : ?>
                                                <div class="post">
                                                    <span><?php echo esc_html($first_category[0]->name); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="news-content">
                                        <?php if ('yes' === $settings['show_meta']) : ?>
                                            <ul class="list-unstyled">
                                                <?php if ('yes' === $settings['show_date']) : ?>
                                                    <li><i class="fas fa-calendar-alt"></i><?php echo esc_html(get_the_date()); ?></li>
                                                <?php endif; ?>
                                                <?php if ('yes' === $settings['show_author']) : ?>
                                                    <li><i class="far fa-user"></i><?php echo esc_html(get_the_author()); ?></li>
                                                <?php endif; ?>
                                                <?php if ('yes' === $settings['show_comments']) : ?>
                                                    <li><i class="far fa-comments"></i><?php echo esc_html(number_format_i18n(get_comments_number())); ?></li>
                                                <?php endif; ?>
                                                <?php if ('yes' === $settings['show_word_count']) : ?>
                                                    <li><i class="fas fa-align-left"></i><?php echo esc_html(number_format_i18n($word_count) . ' ' . $word_suffix); ?></li>
                                                <?php endif; ?>
                                            </ul>
                                        <?php endif; ?>
                                        <h3>
                                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                                <?php echo esc_html($title_words > 0 ? wp_trim_words(get_the_title(), $title_words, '...') : get_the_title()); ?>
                                            </a>
                                        </h3>
                                        <?php if ('yes' === $settings['show_excerpt'] && $excerpt_words > 0) : ?>
                                            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), $excerpt_words, '...')); ?></p>
                                        <?php endif; ?>
                                        <?php if ('yes' === $settings['show_button']) : ?>
                                            <div class="arrow-btn">
                                                <a href="<?php echo esc_url(get_permalink()); ?>" class="icon" aria-label="<?php echo esc_attr(get_the_title()); ?>">
                                                    <span class="bg"></span>
                                                    <div class="arrow-icon"><?php echo $arrow_icon_svg; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $index++;
                        endwhile;
                    else :
                        ?>
                        <div class="col-12">
                            <p><?php esc_html_e('No posts found.', 'ftelements'); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php
        wp_reset_postdata();
    }
}
?>