<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_Blog3_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'ft-blog3';
    }

    public function get_title()
    {
        return esc_html__('FT Blog 3', 'ftelements');
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
            'content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control('section_subtitle', [
            'label'       => esc_html__('Subtitle', 'ftelements'),
            'type'        => Controls_Manager::TEXT,
            'default'     => esc_html__('Latest News', 'ftelements'),
            'label_block' => true,
        ]);

        $this->add_control('section_title', [
            'label'       => esc_html__('Title', 'ftelements'),
            'type'        => Controls_Manager::TEXT,
            'default'     => esc_html__('Latest News And Blog', 'ftelements'),
            'label_block' => true,
        ]);

        $this->add_control('show_header', [
            'label'        => esc_html__('Show Header', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
        ]);

        $this->add_control('show_subtitle', [
            'label'        => esc_html__('Show Subtitle', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
            'condition'    => ['show_header' => 'yes'],
        ]);

        $this->add_control('show_view_all_button', [
            'label'        => esc_html__('Show "View All" Button', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
            'condition'    => ['show_header' => 'yes'],
        ]);

        $this->add_control('view_all_text', [
            'label'       => esc_html__('Button Text', 'ftelements'),
            'type'        => Controls_Manager::TEXT,
            'default'     => esc_html__('View All Blog', 'ftelements'),
            'label_block' => true,
            'condition'   => ['show_view_all_button' => 'yes'],
        ]);

        $this->add_control('view_all_link', [
            'label'       => esc_html__('Button Link', 'ftelements'),
            'type'        => Controls_Manager::URL,
            'options'     => ['url', 'is_external', 'nofollow'],
            'label_block' => true,
            'default'     => [
                'url' => '#',
            ],
            'condition'   => ['show_view_all_button' => 'yes'],
        ]);

        $this->add_control('view_all_button_icon', [
            'label'     => esc_html__('Button Icon Image', 'ftelements'),
            'type'      => Controls_Manager::MEDIA,
            'default'   => [
                'url' => $theme_uri . '/assets/img/icon/arrow1.svg',
            ],
            'condition' => ['show_view_all_button' => 'yes'],
        ]);

        $this->add_control('posts_per_page', [
            'label'   => esc_html__('Posts Count', 'ftelements'),
            'type'    => Controls_Manager::NUMBER,
            'default' => 3,
            'min'     => 1,
            'max'     => 30,
        ]);

        $this->add_control('offset', [
            'label'   => esc_html__('Offset', 'ftelements'),
            'type'    => Controls_Manager::NUMBER,
            'default' => 0,
            'min'     => 0,
        ]);

        $this->add_control('order', [
            'label'   => esc_html__('Order', 'ftelements'),
            'type'    => Controls_Manager::SELECT,
            'default' => 'DESC',
            'options' => [
                'DESC' => esc_html__('Descending', 'ftelements'),
                'ASC'  => esc_html__('Ascending', 'ftelements'),
            ],
        ]);

        $this->add_control('orderby', [
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
        ]);

        $this->add_control('excerpt_length', [
            'label'   => esc_html__('Excerpt Length (Words)', 'ftelements'),
            'type'    => Controls_Manager::NUMBER,
            'default' => 14,
            'min'     => 0,
            'max'     => 200,
        ]);

        $this->add_control('words_per_minute', [
            'label'       => esc_html__('Reading Speed (Words / Min)', 'ftelements'),
            'type'        => Controls_Manager::NUMBER,
            'default'     => 200,
            'min'         => 1,
            'max'         => 600,
            'description' => esc_html__('Used to calculate read time.', 'ftelements'),
        ]);

        $this->add_control('show_featured_image', [
            'label'        => esc_html__('Featured Image', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
        ]);

        $this->add_control('show_title', [
            'label'        => esc_html__('Post Title', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
        ]);

        $this->add_control('show_excerpt', [
            'label'        => esc_html__('Excerpt', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'no',
        ]);

        $this->add_control('show_date', [
            'label'        => esc_html__('Date', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
        ]);

        $this->add_control('show_comments', [
            'label'        => esc_html__('Comment Count', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
        ]);

        $this->add_control('show_word_count', [
            'label'        => esc_html__('Word Count', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'no',
        ]);

        $this->add_control('show_read_time', [
            'label'        => esc_html__('Read Time', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'no',
        ]);

        $this->add_control('word_count_suffix', [
            'label'       => esc_html__('Word Count Suffix', 'ftelements'),
            'type'        => Controls_Manager::TEXT,
            'default'     => esc_html__('words', 'ftelements'),
            'label_block' => true,
            'condition'   => ['show_word_count' => 'yes'],
        ]);

        $this->add_control('read_time_suffix', [
            'label'       => esc_html__('Read Time Suffix', 'ftelements'),
            'type'        => Controls_Manager::TEXT,
            'default'     => esc_html__('min read', 'ftelements'),
            'label_block' => true,
            'condition'   => ['show_read_time' => 'yes'],
        ]);

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_layout',
            [
                'label' => esc_html__('Layout', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'row_gap',
            [
                'label'      => esc_html__('Row Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-3 .row' => 'row-gap: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .news-section-3 .row' => 'column-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Section Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_header',
            [
                'label' => esc_html__('Header', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'header_margin',
            [
                'label'      => esc_html__('Header Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-3 .section-title-area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-3 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'label'    => esc_html__('Subtitle Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .news-section-3 .section-title .sec-sub',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-3 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'label'    => esc_html__('Title Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .news-section-3 .section-title h2',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_card',
            [
                'label' => esc_html__('Card', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'card_background',
                'selector' => '{{WRAPPER}} .news-section-3 .news-box-items-3',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'card_border',
                'selector' => '{{WRAPPER}} .news-section-3 .news-box-items-3',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-3 .news-box-items-3' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-3 .news-box-items-3 .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_margin',
            [
                'label'      => esc_html__('Card Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-3 .news-box-items-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_image',
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
                    '{{WRAPPER}} .news-section-3 .news-box-items-3 .thumb img' => 'height: {{SIZE}}{{UNIT}}; object-fit: cover;',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-3 .news-box-items-3 .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'image_border',
                'selector' => '{{WRAPPER}} .news-section-3 .news-box-items-3 .thumb img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_meta',
            [
                'label' => esc_html__('Meta', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'meta_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-3 .news-box-items-3 .content ul li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'meta_icon_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-3 .news-box-items-3 .content ul li i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'meta_typography',
                'label'    => esc_html__('Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .news-section-3 .news-box-items-3 .content ul li',
            ]
        );

        $this->add_responsive_control(
            'meta_gap',
            [
                'label'      => esc_html__('Item Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-3 .news-box-items-3 .content ul' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'meta_margin',
            [
                'label'      => esc_html__('Meta Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-3 .news-box-items-3 .content ul' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_post_title',
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
                    '{{WRAPPER}} .news-section-3 .news-box-items-3 .content h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'post_title_hover_color',
            [
                'label'     => esc_html__('Hover Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-3 .news-box-items-3 .content h3 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'post_title_typography',
                'label'    => esc_html__('Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .news-section-3 .news-box-items-3 .content h3',
            ]
        );

        $this->add_responsive_control(
            'post_title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-3 .news-box-items-3 .content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_excerpt',
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
                    '{{WRAPPER}} .news-section-3 .news-box-items-3 .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'excerpt_typography',
                'label'    => esc_html__('Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .news-section-3 .news-box-items-3 .content p',
            ]
        );

        $this->add_responsive_control(
            'excerpt_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-3 .news-box-items-3 .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_button',
            [
                'label' => esc_html__('View All Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-3 .section-title-area .theme-btn .theme-text'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .news-section-3 .section-title-area .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-3 .section-title-area .theme-btn .theme-bg svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'button_typography',
                'label'    => esc_html__('Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .news-section-3 .section-title-area .theme-btn .theme-text',
            ]
        );

        $this->add_responsive_control(
            'button_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-3 .section-title-area .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .news-section-3 .section-title-area .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'button_border',
                'selector' => '{{WRAPPER}} .news-section-3 .section-title-area .theme-btn',
            ]
        );

        $this->end_controls_section();
    }

    private function get_post_word_count($post_id)
    {
        $content = get_post_field('post_content', $post_id);
        $text    = wp_strip_all_tags((string) $content);
        if (function_exists('mb_strlen')) {
            return count(preg_split('/\s+/u', $text, -1, PREG_SPLIT_NO_EMPTY));
        }
        return str_word_count($text);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

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

        $blog_query     = new \WP_Query($query_args);
        $excerpt_words  = isset($settings['excerpt_length']) ? absint($settings['excerpt_length']) : 14;
        $wpm            = ! empty($settings['words_per_minute']) ? max(1, absint($settings['words_per_minute'])) : 200;
        $word_suffix    = ! empty($settings['word_count_suffix']) ? $settings['word_count_suffix'] : __('words', 'ftelements');
        $read_suffix    = ! empty($settings['read_time_suffix']) ? $settings['read_time_suffix'] : __('min read', 'ftelements');
        $view_all_text  = ! empty($settings['view_all_text']) ? $settings['view_all_text'] : __('View All Blog', 'ftelements');
        $view_all_link  = ! empty($settings['view_all_link']['url']) ? $settings['view_all_link']['url'] : '#';
        $theme_uri      = get_template_directory_uri();
        $view_all_icon  = ! empty($settings['view_all_button_icon']['url']) ? $settings['view_all_button_icon']['url'] : $theme_uri . '/assets/img/icon/arrow1.svg';
        $is_external    = ! empty($settings['view_all_link']['is_external']) ? ' target="_blank"' : '';
        $nofollow       = ! empty($settings['view_all_link']['nofollow']) ? ' rel="nofollow"' : '';
        $animation_sets = ['.3s', '.5s', '.7s'];

        ?>
        <section class="news-section-3 fix section-padding pt-0">
            <div class="container">
                <?php if ('yes' === $settings['show_header']) : ?>
                    <div class="section-title-area">
                        <div class="section-title">
                            <?php if ('yes' === $settings['show_subtitle'] && ! empty($settings['section_subtitle'])) : ?>
                                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['section_subtitle']); ?></span>
                            <?php endif; ?>
                            <?php if (! empty($settings['section_title'])) : ?>
                                <h2 class="tx-title sec_title tz-itm-title tz-itm-anim"><?php echo esc_html($settings['section_title']); ?></h2>
                            <?php endif; ?>
                        </div>
                        <?php if ('yes' === $settings['show_view_all_button']) : ?>
                            <a href="<?php echo esc_url($view_all_link); ?>" class="theme-btn wow fadeInUp"<?php echo $is_external . $nofollow; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                                <span class="theme-bg">
                                    <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"></path>
                                    </svg>
                                </span>
                                <span class="theme-text"><?php echo esc_html($view_all_text); ?> <img src="<?php echo esc_url($view_all_icon); ?>" alt=""></span>
                                <span class="theme-text2"><?php echo esc_html($view_all_text); ?> <img src="<?php echo esc_url($view_all_icon); ?>" alt=""></span>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <?php if ($blog_query->have_posts()) : ?>
                        <?php
                        $index = 0;
                        while ($blog_query->have_posts()) :
                            $blog_query->the_post();
                            $post_id      = get_the_ID();
                            $thumb_id     = get_post_thumbnail_id($post_id);
                            $word_count   = $this->get_post_word_count($post_id);
                            $read_mins    = max(1, (int) ceil($word_count / $wpm));
                            $delay        = isset($animation_sets[$index]) ? $animation_sets[$index] : '.3s';
                            $item_classes = 'news-box-items-3';
                            if (1 === ($index % 3)) {
                                $item_classes .= ' style-2';
                            }
                            $has_meta_row = ('yes' === $settings['show_date'])
                                || ('yes' === $settings['show_comments'])
                                || ('yes' === $settings['show_word_count'])
                                || ('yes' === $settings['show_read_time']);
                            ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                                <div class="<?php echo esc_attr($item_classes); ?>">
                                    <?php if ('yes' === $settings['show_featured_image']) : ?>
                                        <div class="thumb">
                                            <?php if ($thumb_id) : ?>
                                                <?php echo Group_Control_Image_Size::get_attachment_image_html($settings, 'thumbnail', $thumb_id); ?>
                                                <?php echo Group_Control_Image_Size::get_attachment_image_html($settings, 'thumbnail', $thumb_id); ?>
                                            <?php else : ?>
                                                <?php $placeholder = Utils::get_placeholder_image_src(); ?>
                                                <img src="<?php echo esc_url($placeholder); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                                <img src="<?php echo esc_url($placeholder); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="content">
                                        <?php if ($has_meta_row) : ?>
                                            <ul>
                                                <?php if ('yes' === $settings['show_date']) : ?>
                                                    <li><i class="fa-regular fa-calendar"></i> <?php echo esc_html(get_the_date()); ?></li>
                                                <?php endif; ?>
                                                <?php if ('yes' === $settings['show_comments']) : ?>
                                                    <li>
                                                        <i class="fa-regular fa-comments"></i>
                                                        <?php
                                                        $num = get_comments_number($post_id);
                                                        echo esc_html(sprintf(_n('%s Comment', '%s Comments', $num, 'ftelements'), number_format_i18n($num)));
                                                        ?>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if ('yes' === $settings['show_word_count']) : ?>
                                                    <li><i class="fa-solid fa-align-left"></i> <?php echo esc_html(number_format_i18n($word_count) . ' ' . $word_suffix); ?></li>
                                                <?php endif; ?>
                                                <?php if ('yes' === $settings['show_read_time']) : ?>
                                                    <li><i class="fa-regular fa-clock"></i> <?php echo esc_html($read_mins . ' ' . $read_suffix); ?></li>
                                                <?php endif; ?>
                                            </ul>
                                        <?php endif; ?>

                                        <?php if ('yes' === $settings['show_title']) : ?>
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <?php endif; ?>
                                        <?php if ('yes' === $settings['show_excerpt'] && $excerpt_words > 0) : ?>
                                            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), $excerpt_words, '...')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $index++;
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    <?php else : ?>
                        <div class="col-12">
                            <div class="news-box-items-3">
                                <div class="content">
                                    <p><?php esc_html_e('No posts found.', 'ftelements'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
<?php
    }
}
?>
