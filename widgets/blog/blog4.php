<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_Blog4_Widget extends \Elementor\Widget_Base
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
        return 'ft-blog4';
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
        return esc_html__('FT Blog 4', 'ftelements');
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
            'content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control('section_subtitle', [
            'label'       => esc_html__('Subtitle', 'ftelements'),
            'type'        => Controls_Manager::TEXT,
            'default'     => esc_html__('Our Blogs', 'ftelements'),
            'label_block' => true,
        ]);

        $this->add_control('section_title', [
            'label'       => esc_html__('Title', 'ftelements'),
            'type'        => Controls_Manager::TEXT,
            'default'     => esc_html__('Explore Blogs And News', 'ftelements'),
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
            'label'        => esc_html__('Show Header Button', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
            'condition'    => ['show_header' => 'yes'],
        ]);

        $this->add_control('view_all_text', [
            'label'       => esc_html__('Header Button Text', 'ftelements'),
            'type'        => Controls_Manager::TEXT,
            'default'     => esc_html__('See All Article', 'ftelements'),
            'label_block' => true,
            'condition'   => ['show_view_all_button' => 'yes'],
        ]);

        $this->add_control('view_all_link', [
            'label'       => esc_html__('Header Button Link', 'ftelements'),
            'type'        => Controls_Manager::URL,
            'options'     => ['url', 'is_external', 'nofollow'],
            'label_block' => true,
            'default'     => [
                'url' => '#',
            ],
            'condition'   => ['show_view_all_button' => 'yes'],
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

        $this->add_control('title_words_main', [
            'label'       => esc_html__('Main Post Title Words', 'ftelements'),
            'type'        => Controls_Manager::NUMBER,
            'default'     => 12,
            'min'         => 0,
            'max'         => 40,
            'description' => esc_html__('0 keeps full title.', 'ftelements'),
        ]);

        $this->add_control('title_words_small', [
            'label'       => esc_html__('Small Post Title Words', 'ftelements'),
            'type'        => Controls_Manager::NUMBER,
            'default'     => 8,
            'min'         => 0,
            'max'         => 40,
            'description' => esc_html__('0 keeps full title.', 'ftelements'),
        ]);

        $this->add_control('excerpt_length', [
            'label'   => esc_html__('Excerpt Length (Words)', 'ftelements'),
            'type'    => Controls_Manager::NUMBER,
            'default' => 20,
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

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name'    => 'thumbnail',
                'default' => 'large',
            ]
        );

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
            'label'        => esc_html__('Excerpt (Main Post)', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
        ]);

        $this->add_control('show_category', [
            'label'        => esc_html__('Category', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
        ]);

        $this->add_control('show_date', [
            'label'        => esc_html__('Date', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
        ]);

        $this->add_control('show_author', [
            'label'        => esc_html__('Author Name', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
        ]);

        $this->add_control('show_comments', [
            'label'        => esc_html__('Comment Count', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'no',
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

        $this->add_control('show_read_more_button', [
            'label'        => esc_html__('Main Post Read More Button', 'ftelements'),
            'type'         => Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default'      => 'yes',
        ]);

        $this->add_control('read_more_text', [
            'label'       => esc_html__('Read More Text', 'ftelements'),
            'type'        => Controls_Manager::TEXT,
            'default'     => esc_html__('Read More', 'ftelements'),
            'label_block' => true,
            'condition'   => ['show_read_more_button' => 'yes'],
        ]);

        $this->add_control(
            'button_arrow_image',
            [
                'label'       => esc_html__('Button Arrow Image', 'ftelements'),
                'type'        => Controls_Manager::MEDIA,
                'description' => esc_html__('Used on the header button and main post read more button.', 'ftelements'),
                'default'     => [
                    'url' => 'assets/img/icon/arrow1.svg',
                ],
            ]
        );

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
            'section_padding',
            [
                'label'      => esc_html__('Section Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .news-section-4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'header_area_margin',
            [
                'label'      => esc_html__('Header Area Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .section-title-area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .news-section-4 .row' => 'column-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'right_items_gap',
            [
                'label'      => esc_html__('Right Items Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .news-right-items + .news-right-items' => 'margin-top: {{SIZE}}{{UNIT}};',
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

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-4 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .news-section-4 .section-title .sec-sub',
            ]
        );

        $this->add_control(
            'section_title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-4 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'section_title_typography',
                'selector' => '{{WRAPPER}} .news-section-4 .section-title h2',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_main_card',
            [
                'label' => esc_html__('Main Card', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'main_card_background',
                'selector' => '{{WRAPPER}} .news-section-4 .news-single-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'main_card_border',
                'selector' => '{{WRAPPER}} .news-section-4 .news-single-items',
            ]
        );

        $this->add_responsive_control(
            'main_card_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .news-single-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'main_card_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .news-single-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_side_card',
            [
                'label' => esc_html__('Right Cards', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'side_card_background',
                'selector' => '{{WRAPPER}} .news-section-4 .news-right-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'side_card_border',
                'selector' => '{{WRAPPER}} .news-section-4 .news-right-items',
            ]
        );

        $this->add_responsive_control(
            'side_card_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .news-right-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'side_card_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .news-right-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_images',
            [
                'label' => esc_html__('Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'main_image_height',
            [
                'label'      => esc_html__('Main Image Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .news-single-items .news-image img' => 'height: {{SIZE}}{{UNIT}}; object-fit: cover;',
                ],
            ]
        );

        $this->add_responsive_control(
            'side_image_height',
            [
                'label'      => esc_html__('Right Image Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .news-right-items .news-thumb img' => 'height: {{SIZE}}{{UNIT}}; object-fit: cover;',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_radius',
            [
                'label'      => esc_html__('Image Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .news-single-items .news-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .news-section-4 .news-right-items .news-thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'image_border',
                'selector' => '{{WRAPPER}} .news-section-4 .news-single-items .news-image img, {{WRAPPER}} .news-section-4 .news-right-items .news-thumb img',
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
            'meta_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-4 .news-content ul li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'meta_icon_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-4 .news-content ul li i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'meta_typography',
                'selector' => '{{WRAPPER}} .news-section-4 .news-content ul li',
            ]
        );

        $this->add_responsive_control(
            'meta_gap',
            [
                'label'      => esc_html__('Meta Item Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .news-content ul' => 'gap: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .news-section-4 .news-content h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'post_title_hover_color',
            [
                'label'     => esc_html__('Hover Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-4 .news-content h3 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'post_title_typography',
                'selector' => '{{WRAPPER}} .news-section-4 .news-content h3',
            ]
        );

        $this->add_responsive_control(
            'post_title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .news-content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .news-section-4 .news-single-items .news-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'excerpt_typography',
                'selector' => '{{WRAPPER}} .news-section-4 .news-single-items .news-content p',
            ]
        );

        $this->add_responsive_control(
            'excerpt_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .news-single-items .news-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_author',
            [
                'label' => esc_html__('Author', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'author_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-4 .post-items .content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'author_name_color',
            [
                'label'     => esc_html__('Name Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-4 .post-items .content h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'author_text_typography',
                'selector' => '{{WRAPPER}} .news-section-4 .post-items .content span',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'author_name_typography',
                'selector' => '{{WRAPPER}} .news-section-4 .post-items .content h4',
            ]
        );

        $this->add_responsive_control(
            'author_avatar_radius',
            [
                'label'      => esc_html__('Avatar Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .post-items .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style_buttons',
            [
                'label' => esc_html__('Buttons', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-4 .theme-btn .theme-text'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .news-section-4 .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .news-section-4 .theme-btn .theme-bg svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'button_typography',
                'selector' => '{{WRAPPER}} .news-section-4 .theme-btn .theme-text',
            ]
        );

        $this->add_responsive_control(
            'button_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .news-section-4 .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'button_border',
                'selector' => '{{WRAPPER}} .news-section-4 .theme-btn',
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

    private function get_trimmed_title($post_id, $word_limit)
    {
        $title = get_the_title($post_id);
        if ($word_limit > 0) {
            return wp_trim_words($title, $word_limit, '...');
        }
        return $title;
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

        $blog_query        = new \WP_Query($query_args);
        $excerpt_words     = isset($settings['excerpt_length']) ? absint($settings['excerpt_length']) : 20;
        $wpm               = ! empty($settings['words_per_minute']) ? max(1, absint($settings['words_per_minute'])) : 200;
        $word_suffix       = ! empty($settings['word_count_suffix']) ? $settings['word_count_suffix'] : __('words', 'ftelements');
        $read_suffix       = ! empty($settings['read_time_suffix']) ? $settings['read_time_suffix'] : __('min read', 'ftelements');
        $view_all_text     = ! empty($settings['view_all_text']) ? $settings['view_all_text'] : __('See All Article', 'ftelements');
        $read_more_text    = ! empty($settings['read_more_text']) ? $settings['read_more_text'] : __('Read More', 'ftelements');
        $view_all_link     = ! empty($settings['view_all_link']['url']) ? $settings['view_all_link']['url'] : '#';
        $header_external   = ! empty($settings['view_all_link']['is_external']) ? ' target="_blank"' : '';
        $header_nofollow   = ! empty($settings['view_all_link']['nofollow']) ? ' rel="nofollow"' : '';
        $main_title_words  = isset($settings['title_words_main']) ? absint($settings['title_words_main']) : 12;
        $small_title_words = isset($settings['title_words_small']) ? absint($settings['title_words_small']) : 8;

        $default_base_url = plugin_dir_url(dirname(__FILE__, 3));

        $get_image_url = static function ($image, $fallback) use ($default_base_url) {
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

                return $default_base_url . ltrim($url, '/');
            }

            return $default_base_url . ltrim($fallback, '/');
        };

        $get_image_alt = static function ($image, $fallback_alt = '') {
            if (! empty($image['id'])) {
                $attachment_alt = get_post_meta($image['id'], '_wp_attachment_image_alt', true);
                if (! empty($attachment_alt)) {
                    return $attachment_alt;
                }
            }

            return $fallback_alt;
        };

        $button_arrow_image_url = $get_image_url(isset($settings['button_arrow_image']) ? $settings['button_arrow_image'] : [], 'assets/img/icon/arrow1.svg');
        $button_arrow_alt       = $get_image_alt(isset($settings['button_arrow_image']) ? $settings['button_arrow_image'] : [], '');

        $posts = $blog_query->posts;

        ?>
        <section class="news-section-4 section-padding fix">
            <div class="container">
                <?php if ('yes' === $settings['show_header']) : ?>
                    <div class="section-title-area">
                        <div class="section-title mb-0">
                            <?php if ('yes' === $settings['show_subtitle'] && ! empty($settings['section_subtitle'])) : ?>
                                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['section_subtitle']); ?></span>
                            <?php endif; ?>
                            <?php if (! empty($settings['section_title'])) : ?>
                                <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                    <?php echo esc_html($settings['section_title']); ?>
                                </h2>
                            <?php endif; ?>
                        </div>
                        <?php if ('yes' === $settings['show_view_all_button']) : ?>
                            <a href="<?php echo esc_url($view_all_link); ?>" class="theme-btn"<?php echo $header_external . $header_nofollow; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                                <span class="theme-bg">
                                    <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"></path>
                                    </svg>
                                </span>
                                <span class="theme-text"><?php echo esc_html($view_all_text); ?> <img src="<?php echo esc_url($button_arrow_image_url); ?>" alt="<?php echo esc_attr($button_arrow_alt); ?>"></span>
                                <span class="theme-text2"><?php echo esc_html($view_all_text); ?><img src="<?php echo esc_url($button_arrow_image_url); ?>" alt="<?php echo esc_attr($button_arrow_alt); ?>"></span>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="news-wrapper-4">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="news-single-items">
                                <?php if (! empty($posts[0])) : ?>
                                    <?php
                                    $post_id        = $posts[0]->ID;
                                    $word_count     = $this->get_post_word_count($post_id);
                                    $read_mins      = max(1, (int) ceil($word_count / $wpm));
                                    $first_category = get_the_category($post_id);
                                    ?>
                                    <?php if ('yes' === $settings['show_featured_image']) : ?>
                                        <div class="news-image">
                                            <?php if (has_post_thumbnail($post_id)) : ?>
                                                <?php echo Group_Control_Image_Size::get_attachment_image_html($settings, 'thumbnail', get_post_thumbnail_id($post_id)); ?>
                                            <?php else : ?>
                                                <?php $placeholder = Utils::get_placeholder_image_src(); ?>
                                                <img src="<?php echo esc_url($placeholder); ?>" alt="<?php echo esc_attr(get_the_title($post_id)); ?>">
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="news-content">
                                        <ul class="list-unstyled">
                                            <?php if ('yes' === $settings['show_category'] && ! empty($first_category)) : ?>
                                                <li>
                                                    <i class="fas fa-tag"></i> <?php echo esc_html($first_category[0]->name); ?>
                                                </li>
                                            <?php endif; ?>
                                            <?php if ('yes' === $settings['show_date']) : ?>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i> <?php echo esc_html(get_the_date('', $post_id)); ?>
                                                </li>
                                            <?php endif; ?>
                                            <?php if ('yes' === $settings['show_comments']) : ?>
                                                <li>
                                                    <i class="fa-regular fa-comments"></i> <?php echo esc_html(number_format_i18n(get_comments_number($post_id))); ?>
                                                </li>
                                            <?php endif; ?>
                                            <?php if ('yes' === $settings['show_word_count']) : ?>
                                                <li>
                                                    <i class="fa-solid fa-align-left"></i> <?php echo esc_html(number_format_i18n($word_count) . ' ' . $word_suffix); ?>
                                                </li>
                                            <?php endif; ?>
                                            <?php if ('yes' === $settings['show_read_time']) : ?>
                                                <li>
                                                    <i class="fa-regular fa-clock"></i> <?php echo esc_html($read_mins . ' ' . $read_suffix); ?>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                        <?php if ('yes' === $settings['show_title']) : ?>
                                            <h3>
                                                <a href="<?php echo esc_url(get_permalink($post_id)); ?>"><?php echo esc_html($this->get_trimmed_title($post_id, $main_title_words)); ?></a>
                                            </h3>
                                        <?php endif; ?>
                                        <?php if ('yes' === $settings['show_excerpt'] && $excerpt_words > 0) : ?>
                                            <p>
                                                <?php echo esc_html(wp_trim_words(get_the_excerpt($post_id), $excerpt_words, '...')); ?>
                                            </p>
                                        <?php endif; ?>
                                        <div class="post-author-items">
                                            <?php if ('yes' === $settings['show_author']) : ?>
                                                <div class="post-items">
                                                    <div class="thumb">
                                                        <?php echo get_avatar(get_the_author_meta('ID', $posts[0]->post_author), 55); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                                    </div>
                                                    <div class="content">
                                                        <span><?php esc_html_e('By Admin', 'ftelements'); ?></span>
                                                        <h4><?php echo esc_html(get_the_author_meta('display_name', $posts[0]->post_author)); ?></h4>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ('yes' === $settings['show_read_more_button']) : ?>
                                                <a href="<?php echo esc_url(get_permalink($post_id)); ?>" class="theme-btn">
                                                    <span class="theme-bg">
                                                        <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="theme-text"><?php echo esc_html($read_more_text); ?> <img src="<?php echo esc_url($button_arrow_image_url); ?>" alt="<?php echo esc_attr($button_arrow_alt); ?>"></span>
                                                    <span class="theme-text2"><?php echo esc_html($read_more_text); ?> <img src="<?php echo esc_url($button_arrow_image_url); ?>" alt="<?php echo esc_attr($button_arrow_alt); ?>"></span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="news-content">
                                        <p><?php esc_html_e('No posts found.', 'ftelements'); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 mt-5 mt-xl-0">
                            <?php for ($i = 1; $i <= 2; $i++) : ?>
                                <?php if (! empty($posts[$i])) : ?>
                                    <?php
                                    $post_id        = $posts[$i]->ID;
                                    $word_count     = $this->get_post_word_count($post_id);
                                    $read_mins      = max(1, (int) ceil($word_count / $wpm));
                                    $first_category = get_the_category($post_id);
                                    $delay          = 1 === $i ? '.4s' : '.6s';
                                    ?>
                                    <div class="news-right-items wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                                        <?php if ('yes' === $settings['show_featured_image']) : ?>
                                            <div class="news-thumb">
                                                <?php if (has_post_thumbnail($post_id)) : ?>
                                                    <?php echo Group_Control_Image_Size::get_attachment_image_html($settings, 'thumbnail', get_post_thumbnail_id($post_id)); ?>
                                                <?php else : ?>
                                                    <?php $placeholder = Utils::get_placeholder_image_src(); ?>
                                                    <img src="<?php echo esc_url($placeholder); ?>" alt="<?php echo esc_attr(get_the_title($post_id)); ?>">
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="news-content">
                                            <ul>
                                                <?php if ('yes' === $settings['show_category'] && ! empty($first_category)) : ?>
                                                    <li><i class="fas fa-tag"></i> <?php echo esc_html($first_category[0]->name); ?></li>
                                                <?php endif; ?>
                                                <?php if ('yes' === $settings['show_date']) : ?>
                                                    <li><i class="fa-solid fa-calendar-days"></i> <?php echo esc_html(get_the_date('', $post_id)); ?></li>
                                                <?php endif; ?>
                                                <?php if ('yes' === $settings['show_comments']) : ?>
                                                    <li><i class="fa-regular fa-comments"></i> <?php echo esc_html(number_format_i18n(get_comments_number($post_id))); ?></li>
                                                <?php endif; ?>
                                                <?php if ('yes' === $settings['show_word_count']) : ?>
                                                    <li><i class="fa-solid fa-align-left"></i> <?php echo esc_html(number_format_i18n($word_count) . ' ' . $word_suffix); ?></li>
                                                <?php endif; ?>
                                                <?php if ('yes' === $settings['show_read_time']) : ?>
                                                    <li><i class="fa-regular fa-clock"></i> <?php echo esc_html($read_mins . ' ' . $read_suffix); ?></li>
                                                <?php endif; ?>
                                            </ul>
                                            <?php if ('yes' === $settings['show_title']) : ?>
                                                <h3>
                                                    <a href="<?php echo esc_url(get_permalink($post_id)); ?>">
                                                        <?php echo esc_html($this->get_trimmed_title($post_id, $small_title_words)); ?>
                                                    </a>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if ('yes' === $settings['show_author']) : ?>
                                                <div class="post-items">
                                                    <div class="thumb">
                                                        <?php echo get_avatar(get_the_author_meta('ID', $posts[$i]->post_author), 55); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                                    </div>
                                                    <div class="content">
                                                        <span><?php esc_html_e('By Admin', 'ftelements'); ?></span>
                                                        <h4><?php echo esc_html(get_the_author_meta('display_name', $posts[$i]->post_author)); ?></h4>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
        wp_reset_postdata();
    }
} ?>