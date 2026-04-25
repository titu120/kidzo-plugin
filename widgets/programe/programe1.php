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

class FT_Program1_Widget extends \Elementor\Widget_Base
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
        return 'ft-program';
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
        return esc_html__('FT Program', 'ftelements');
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
            'program_images_section',
            [
                'label' => esc_html__('Content & Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_subtitle',
            [
                'label'       => esc_html__('Section Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Our Programs', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'marquee_text',
            [
                'label'       => esc_html__('Marquee Text', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Our Programs / Classes', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'top_line_image',
            [
                'label'   => esc_html__('Top Line Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/top-line-1.png',
                ],
            ]
        );

        $this->add_control(
            'bottom_line_image',
            [
                'label'   => esc_html__('Bottom Line Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/bottom-line-1.png',
                ],
            ]
        );

        $this->add_control(
            'cat_shape_image',
            [
                'label'   => esc_html__('Cat Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/cat1.png',
                ],
            ]
        );

        $this->add_control(
            'star_shape_image',
            [
                'label'   => esc_html__('Star Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/star1-1.png',
                ],
            ]
        );

        $this->add_control(
            'marquee_icon_image',
            [
                'label'   => esc_html__('Marquee Icon Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/star.svg',
                ],
            ]
        );

        $this->add_control(
            'border_shape_image',
            [
                'label'   => esc_html__('Border Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/border-shape.png',
                ],
            ]
        );

        $this->add_control(
            'fallback_program_image_1',
            [
                'label'   => esc_html__('Fallback Program Image 1', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/program-01.jpg',
                ],
            ]
        );

        $this->add_control(
            'fallback_program_image_2',
            [
                'label'   => esc_html__('Fallback Program Image 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/program-02.jpg',
                ],
            ]
        );

        $this->add_control(
            'fallback_program_image_3',
            [
                'label'   => esc_html__('Fallback Program Image 3', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/program-03.jpg',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program_section_title_style',
            [
                'label' => esc_html__('Section Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'section_subtitle_typography',
                'selector' => '{{WRAPPER}} .program-section .sec-sub',
            ]
        );

        $this->add_control(
            'section_subtitle_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_subtitle_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_subtitle_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section .sec-sub' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program_marquee_style',
            [
                'label' => esc_html__('Marquee', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'marquee_typography',
                'selector' => '{{WRAPPER}} .program-section .marquee .text',
            ]
        );

        $this->add_control(
            'marquee_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section .marquee .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'marquee_gap',
            [
                'label'      => esc_html__('Item Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 150,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section .marquee .text' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'marquee_margin',
            [
                'label'      => esc_html__('Section Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section .marquee-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program_card_style',
            [
                'label' => esc_html__('Program Card', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'program_card_background',
                'selector' => '{{WRAPPER}} .program-section .program-box-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'program_card_border',
                'selector' => '{{WRAPPER}} .program-section .program-box-items',
            ]
        );

        $this->add_responsive_control(
            'program_card_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section .program-box-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program_card_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section .program-box-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program_card_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section .program-main-box-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program_content_style',
            [
                'label' => esc_html__('Program Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'program_label_heading',
            [
                'label' => esc_html__('Label', 'ftelements'),
                'type'  => Controls_Manager::HEADING,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program_label_typography',
                'selector' => '{{WRAPPER}} .program-section .program-box-items .post-box',
            ]
        );

        $this->add_control(
            'program_label_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section .program-box-items .post-box' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'program_title_heading',
            [
                'label'     => esc_html__('Title', 'ftelements'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program_title_typography',
                'selector' => '{{WRAPPER}} .program-section .program-box-items .content h2, {{WRAPPER}} .program-section .program-box-items .content h2 a',
            ]
        );

        $this->add_control(
            'program_title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section .program-box-items .content h2, {{WRAPPER}} .program-section .program-box-items .content h2 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'program_description_heading',
            [
                'label'     => esc_html__('Description', 'ftelements'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program_description_typography',
                'selector' => '{{WRAPPER}} .program-section .program-box-items .content p',
            ]
        );

        $this->add_control(
            'program_description_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section .program-box-items .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'program_duration_heading',
            [
                'label'     => esc_html__('Duration', 'ftelements'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'program_duration_typography',
                'selector' => '{{WRAPPER}} .program-section .program-box-items .duration-text',
            ]
        );

        $this->add_control(
            'program_duration_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section .program-box-items .duration-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'program_content_spacing',
            [
                'label'      => esc_html__('Content Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 80,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section .program-box-items .content > *:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program_button_style',
            [
                'label' => esc_html__('Arrow Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'program_button_size',
            [
                'label'      => esc_html__('Button Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min' => 20,
                        'max' => 120,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section .arrow-btn .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'program_button_icon_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section .arrow-btn .arrow-icon svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'program_button_background',
                'selector' => '{{WRAPPER}} .program-section .arrow-btn .icon .bg',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'program_button_border',
                'selector' => '{{WRAPPER}} .program-section .arrow-btn .icon',
            ]
        );

        $this->add_responsive_control(
            'program_button_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section .arrow-btn .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $widget_id = 'ft-program-' . $this->get_id();
        $theme_uri = get_template_directory_uri();
        $get_media_url = static function ($value, $fallback) {
            return !empty($value['url']) ? $value['url'] : $fallback;
        };

        $top_line_image = $get_media_url($settings['top_line_image'] ?? [], $theme_uri . '/assets/img/home-1/top-line-1.png');
        $bottom_line_image = $get_media_url($settings['bottom_line_image'] ?? [], $theme_uri . '/assets/img/home-1/bottom-line-1.png');
        $cat_shape_image = $get_media_url($settings['cat_shape_image'] ?? [], $theme_uri . '/assets/img/home-1/cat1.png');
        $star_shape_image = $get_media_url($settings['star_shape_image'] ?? [], $theme_uri . '/assets/img/home-1/star1-1.png');
        $marquee_icon_image = $get_media_url($settings['marquee_icon_image'] ?? [], $theme_uri . '/assets/img/home-1/star.svg');
        $border_shape_image = $get_media_url($settings['border_shape_image'] ?? [], $theme_uri . '/assets/img/home-1/border-shape.png');
        $fallback_program_image_1 = $get_media_url($settings['fallback_program_image_1'] ?? [], $theme_uri . '/assets/img/home-1/program-01.jpg');
        $fallback_program_image_2 = $get_media_url($settings['fallback_program_image_2'] ?? [], $theme_uri . '/assets/img/home-1/program-02.jpg');
        $fallback_program_image_3 = $get_media_url($settings['fallback_program_image_3'] ?? [], $theme_uri . '/assets/img/home-1/program-03.jpg');
        $section_subtitle = !empty($settings['section_subtitle']) ? $settings['section_subtitle'] : esc_html__('Our Programs', 'ftelements');
        $marquee_text = !empty($settings['marquee_text']) ? $settings['marquee_text'] : esc_html__('Our Programs / Classes', 'ftelements');
        $default_image = $fallback_program_image_1;
        $programs = [];
        $normalize_text = static function ($value, $fallback = '') {
            if (is_array($value)) {
                $value = implode(', ', array_filter(array_map('strval', $value)));
            }

            if (is_object($value)) {
                $value = '';
            }

            $value = is_scalar($value) ? (string) $value : '';
            return $value !== '' ? $value : $fallback;
        };
        $format_duration = static function ($value, $fallback = '') use ($normalize_text) {
            if (is_string($value) && is_serialized($value)) {
                $value = maybe_unserialize($value);
            }

            if (is_string($value) && ($value[0] ?? '') === '[') {
                $decoded = json_decode($value, true);
                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                    $value = $decoded;
                }
            }

            if (is_array($value) && count($value) >= 2) {
                $hours = 0;
                $minutes = 0;

                if (isset($value[0]) || isset($value[1])) {
                    $hours = (int) ($value[0] ?? 0);
                    $minutes = (int) ($value[1] ?? 0);
                } elseif (isset($value['hours']) || isset($value['minutes'])) {
                    $hours = (int) ($value['hours'] ?? 0);
                    $minutes = (int) ($value['minutes'] ?? 0);
                } else {
                    $duration_values = array_values($value);
                    $hours = (int) ($duration_values[0] ?? 0);
                    $minutes = (int) ($duration_values[1] ?? 0);
                }

                $parts = [];

                if ($hours > 0) {
                    $parts[] = sprintf(_n('%d Hour', '%d Hours', $hours, 'ftelements'), $hours);
                }
                if ($minutes > 0) {
                    $parts[] = sprintf(_n('%d Minute', '%d Minutes', $minutes, 'ftelements'), $minutes);
                }

                if (!empty($parts)) {
                    return implode(' ', $parts);
                }
            }

            if (is_string($value)) {
                $value = trim($value);
                if ($value !== '' && preg_match('/^\s*(\d+)\s*hour(?:s)?\s+(\d+)\s*min(?:ute)?(?:s)?\s*$/i', $value, $matches)) {
                    $value = $matches[1] . ',' . $matches[2];
                }
                if ($value !== '' && preg_match('/^\s*(\d+)\s*[,:\-]\s*(\d+)\s*$/', $value, $matches)) {
                    $hours = (int) $matches[1];
                    $minutes = (int) $matches[2];
                    $parts = [];

                    if ($hours > 0) {
                        $parts[] = sprintf(_n('%d Hour', '%d Hours', $hours, 'ftelements'), $hours);
                    }
                    if ($minutes > 0) {
                        $parts[] = sprintf(_n('%d Minute', '%d Minutes', $minutes, 'ftelements'), $minutes);
                    }

                    if (!empty($parts)) {
                        return implode(' ', $parts);
                    }
                }
            }

            if (is_numeric($value)) {
                $minutes = (int) $value;
                if ($minutes > 0) {
                    return sprintf(_n('%d Minute', '%d Minutes', $minutes, 'ftelements'), $minutes);
                }
            }

            return $normalize_text($value, $fallback);
        };

        $is_tutor_active = function_exists('tutor') || class_exists('\TUTOR\Tutor');
        if ($is_tutor_active) {
            $course_post_types = ['courses', 'tutor_course'];
            if (function_exists('tutor') && isset(tutor()->course_post_type) && !empty(tutor()->course_post_type)) {
                $course_post_types = [tutor()->course_post_type];
            }

            $query = new \WP_Query([
                'post_type'      => $course_post_types,
                'post_status'    => 'publish',
                'posts_per_page' => 6,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $course_id = get_the_ID();
                    $duration = get_post_meta($course_id, '_course_duration', true);
                    if (empty($duration)) {
                        $hours = (int) get_post_meta($course_id, '_tutor_course_duration_hours', true);
                        $minutes = (int) get_post_meta($course_id, '_tutor_course_duration_minutes', true);
                        $duration_parts = [];

                        if ($hours > 0) {
                            $duration_parts[] = sprintf(_n('%d Hour', '%d Hours', $hours, 'ftelements'), $hours);
                        }
                        if ($minutes > 0) {
                            $duration_parts[] = sprintf(_n('%d Minute', '%d Minutes', $minutes, 'ftelements'), $minutes);
                        }

                        if (!empty($duration_parts)) {
                            $duration = implode(' ', $duration_parts);
                        }
                    }
                    $duration = $format_duration($duration, __('Flexible', 'ftelements'));

                    $terms = get_the_terms($course_id, 'course-category');
                    $label = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : __('Program', 'ftelements');
                    $label = $normalize_text($label, __('Program', 'ftelements'));

                    $programs[] = [
                        'title'       => get_the_title(),
                        'url'         => get_permalink(),
                        'description' => wp_trim_words(get_the_excerpt(), 18, '...'),
                        'duration'    => $duration,
                        'label'       => $label,
                        'image'       => get_the_post_thumbnail_url($course_id, 'full') ?: $default_image,
                    ];
                }
                wp_reset_postdata();
            }
        }

        if (empty($programs)) {
            $programs = [
                [
                    'title'       => __('Play Group Program', 'ftelements'),
                    'url'         => '#',
                    'description' => __('Fun-based learning through games, music, and activities to develop social skills and confidence.', 'ftelements'),
                    'duration'    => __('2.5 Hr', 'ftelements'),
                    'label'       => __('3-5 Years', 'ftelements'),
                    'image'       => $fallback_program_image_1,
                ],
                [
                    'title'       => __('Nursery Program', 'ftelements'),
                    'url'         => '#',
                    'description' => __('Fun-based learning through games, music, and activities to develop social skills and confidence.', 'ftelements'),
                    'duration'    => __('2.5 Hr', 'ftelements'),
                    'label'       => __('7-10 Years', 'ftelements'),
                    'image'       => $fallback_program_image_2,
                ],
                [
                    'title'       => __('Kindergarten (KG) Program', 'ftelements'),
                    'url'         => '#',
                    'description' => __('Fun-based learning through games, music, and activities to develop social skills and confidence.', 'ftelements'),
                    'duration'    => __('2.5 Hr', 'ftelements'),
                    'label'       => __('10-12 Years', 'ftelements'),
                    'image'       => $fallback_program_image_3,
                ],
            ];
        }
        ?>

        <section id="<?php echo esc_attr($widget_id); ?>" class="program-section">
            <div class="top-line">
                <img src="<?php echo esc_url($top_line_image); ?>" alt="img">
            </div>
            <div class="bottom-line">
                <img src="<?php echo esc_url($bottom_line_image); ?>" alt="img">
            </div>
            <div class="cat-shape">
                <img src="<?php echo esc_url($cat_shape_image); ?>" alt="img">
            </div>
            <div class="star-shape">
                <img src="<?php echo esc_url($star_shape_image); ?>" alt="img">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($section_subtitle); ?></span>
                </div>
            </div>
            <div class="marquee-section mt-3 mt-md-0">
                <div class="marquee wow fadeInUp" data-wow-delay=".3s">
                    <div class="marquee-group">
                        <div class="text"><span><img src="<?php echo esc_url($marquee_icon_image); ?>" alt="img"></span><?php echo esc_html($marquee_text); ?></div>
                        <div class="text"><span><img src="<?php echo esc_url($marquee_icon_image); ?>" alt="img"></span><?php echo esc_html($marquee_text); ?></div>
                        <div class="text"><span><img src="<?php echo esc_url($marquee_icon_image); ?>" alt="img"></span><?php echo esc_html($marquee_text); ?></div>
                        <div class="text"><span><img src="<?php echo esc_url($marquee_icon_image); ?>" alt="img"></span><?php echo esc_html($marquee_text); ?></div>
                        <div class="text"><span><img src="<?php echo esc_url($marquee_icon_image); ?>" alt="img"></span><?php echo esc_html($marquee_text); ?></div>
                    </div>
                    <div class="marquee-group">
                        <div class="text"><span><img src="<?php echo esc_url($marquee_icon_image); ?>" alt="img"></span><?php echo esc_html($marquee_text); ?></div>
                        <div class="text"><span><img src="<?php echo esc_url($marquee_icon_image); ?>" alt="img"></span><?php echo esc_html($marquee_text); ?></div>
                        <div class="text"><span><img src="<?php echo esc_url($marquee_icon_image); ?>" alt="img"></span><?php echo esc_html($marquee_text); ?></div>
                        <div class="text"><span><img src="<?php echo esc_url($marquee_icon_image); ?>" alt="img"></span><?php echo esc_html($marquee_text); ?></div>
                        <div class="text"><span><img src="<?php echo esc_url($marquee_icon_image); ?>" alt="img"></span><?php echo esc_html($marquee_text); ?></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="program-wrapper">
                    <div class="border-shape">
                        <img src="<?php echo esc_url($border_shape_image); ?>" alt="">
                    </div>
                    <div class="program-bg"></div>
                    <div class="program-wrap-items swiper program-slider">
                        <div class="swiper-wrapper wow fadeInUp" data-wow-delay=".3s">
                            <?php foreach ($programs as $index => $program) :
                                $variant = ($index % 3) + 1;
                                $item_bg_class = $variant > 1 ? ' bg-' . $variant : '';
                                $duration_class = $variant > 1 ? ' color-' . $variant : '';
                                $button_bg_class = $variant > 1 ? ' bg-' . $variant : '';
                                ?>
                                <div class="swiper-slide">
                                    <div class="program-main-box-items">
                                        <div class="program-box-items">
                                            <div class="item-bg<?php echo esc_attr($item_bg_class); ?>"></div>
                                            <div class="thumb">
                                                <img src="<?php echo esc_url($program['image']); ?>" alt="<?php echo esc_attr($program['title']); ?>">
                                                <img src="<?php echo esc_url($program['image']); ?>" alt="<?php echo esc_attr($program['title']); ?>">
                                            </div>
                                            <div class="content">
                                                <span class="post-box"><?php echo esc_html($program['label']); ?></span>
                                                <h2><a href="<?php echo esc_url($program['url']); ?>"><?php echo esc_html($program['title']); ?></a></h2>
                                                <p><?php echo esc_html($program['description']); ?></p>
                                                <span class="duration-text<?php echo esc_attr($duration_class); ?>">
                                                    <?php echo esc_html__('duration : ', 'ftelements') . esc_html($program['duration']); ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="arrow-btn">
                                            <a href="<?php echo esc_url($program['url']); ?>" class="icon">
                                                <span class="bg<?php echo esc_attr($button_bg_class); ?>"></span>
                                                <div class="arrow-icon">
                                                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.9" d="M10.4774 0.235515C10.4486 0.324309 10.3906 0.401968 10.3481 0.413358C10.3039 0.425186 10.2772 0.456482 10.2854 0.487064C10.2932 0.516037 10.3487 0.527039 10.4092 0.51083C10.5024 0.48586 10.5282 0.516891 10.5826 0.719701C10.6417 0.940217 10.6354 0.962599 10.5003 1.01432C10.4052 1.05187 10.3572 1.10788 10.3643 1.18016C10.3684 1.24118 10.334 1.34182 10.2881 1.40588C10.1502 1.59118 10.2828 1.69366 10.5608 1.61919C10.7684 1.56355 10.7947 1.5703 10.7964 1.66818C10.7973 1.73694 10.7444 1.80114 10.6604 1.83402C10.551 1.87712 10.5242 1.92744 10.5304 2.08794C10.5331 2.19592 10.5645 2.33932 10.5969 2.40137C10.6469 2.49664 10.6946 2.50456 10.9022 2.44893C11.1802 2.37446 11.2363 2.43359 11.042 2.5978C10.885 2.73129 10.8869 2.90847 11.0481 2.96708C11.1124 2.99125 11.1439 3.01731 11.1161 3.02476C10.9858 3.06142 7.91162 4.06627 6.70975 4.46594C4.75645 5.11526 0.833265 6.46321 0.706193 6.53176C0.568108 6.60499 0.554427 6.75012 0.680896 6.82319C0.755711 6.86698 0.865862 6.85299 1.09001 6.77395C1.37008 6.67475 1.36156 6.68221 0.982483 6.86314C0.458688 7.11218 0.32957 7.21233 0.386872 7.32809C0.446671 7.44663 0.61575 7.39098 2.14734 6.73734C2.85502 6.43558 3.69849 6.10434 4.02443 5.99975L4.61668 5.81001L3.82596 6.12884C3.1397 6.40588 1.19342 7.27759 0.669029 7.54404C0.534555 7.61113 0.495859 7.6629 0.517423 7.74338C0.554083 7.8802 0.574906 7.87289 2.06431 7.1926C2.7509 6.87752 3.76737 6.44644 4.31993 6.23283C5.44304 5.80078 8.64131 4.72298 9.27782 4.56106L9.68827 4.45798L9.3738 4.59227C8.90884 4.79276 5.0965 6.27317 2.94114 7.0905C1.48737 7.6422 1.01337 7.84166 0.868177 7.96683C0.658035 8.1439 0.510962 8.43863 0.605576 8.49091C0.675827 8.53074 2.90589 7.71755 6.77693 6.24039C8.52083 5.57472 9.57125 5.19838 9.73587 5.17842L9.9906 5.14812L9.69969 5.26575C9.54017 5.33092 7.88996 5.94733 6.0348 6.63592C4.17963 7.3245 2.34985 8.00973 1.97032 8.15628C1.58958 8.30488 1.13433 8.46309 0.94958 8.5126C0.601343 8.60591 0.351623 8.79876 0.553279 8.81891C0.605436 8.82391 1.91433 8.35933 3.46215 7.78587C7.37985 6.33244 8.39974 6.00568 5.65794 7.0802C4.86997 7.38967 4.01929 7.7332 3.75867 7.84616C3.50013 7.96029 2.67446 8.27296 1.92778 8.54032C-0.077117 9.25867 -0.0192129 9.2328 0.00731647 9.41029C0.0360925 9.6027 0.137387 9.60143 0.658203 9.40668C0.997382 9.27957 1.08412 9.26322 1.14148 9.32031C1.20133 9.38018 1.26543 9.35783 1.65886 9.14545C2.26815 8.81658 2.2555 8.82169 5.04582 7.84975C9.12026 6.43195 9.55635 6.31338 6.35332 7.49769C3.6095 8.51237 1.19337 9.46167 1.13017 9.55279C1.1024 9.59301 0.971624 9.66083 0.838514 9.70685C0.602494 9.78734 0.598883 9.79348 0.64805 9.97698L0.698512 10.1653L1.20068 10.0187L1.70122 9.87248L1.79541 10.0801C1.84651 10.1924 1.92575 10.2919 1.96723 10.2963C2.01035 10.3003 3.02498 9.94734 4.2178 9.51386C6.92919 8.52857 9.53322 7.61346 10.4829 7.31241C10.882 7.1865 11.3173 7.03881 11.447 6.98679C11.6257 6.91475 11.6737 6.91054 11.6404 6.96948C11.6144 7.01614 10.5803 7.42087 9.04874 7.98307C4.4149 9.68705 1.45548 10.8061 1.40225 10.8756C1.37361 10.9126 1.38273 11.0447 1.42204 11.1652C1.47895 11.3449 1.51599 11.3851 1.61263 11.373C1.67734 11.366 3.98261 10.5326 6.72815 9.52438C9.4737 8.51614 11.8504 7.65504 12.0048 7.6102C12.1953 7.55573 12.3338 7.54966 12.4414 7.59156C12.62 7.66275 12.8203 7.9265 12.8738 8.15887C12.8934 8.24505 12.9699 8.35395 13.0439 8.40139C13.118 8.44883 13.2256 8.55627 13.2842 8.64409C13.38 8.78576 13.3798 8.80478 13.2817 8.83107C13.2212 8.84728 13.1686 8.89934 13.1643 8.94879C13.1501 9.08543 13.324 9.17857 13.4551 9.10549C13.5479 9.05301 13.5863 9.07205 13.6851 9.21812C13.7964 9.38496 13.8132 9.38907 14.0025 9.31075C14.1649 9.24309 14.2129 9.24575 14.2566 9.32375C14.3254 9.44332 14.5385 9.39486 14.5539 9.25617C14.5597 9.1994 14.5225 9.14554 14.4566 9.12181C14.363 9.0865 14.3887 9.04511 14.6663 8.79302C14.8394 8.63451 15.1032 8.45513 15.2468 8.39595C15.3937 8.33589 15.5499 8.26472 15.6012 8.23373C15.6964 8.17716 15.6742 8.01577 15.561 7.95294C15.5072 7.92248 15.5325 7.87948 15.6472 7.8039C15.7367 7.74543 15.8552 7.68433 15.9124 7.669C16.0073 7.64359 16.0208 7.58303 15.9608 7.44386C15.9464 7.40976 16.0319 7.32992 16.154 7.26268C16.6041 7.01961 16.6275 6.99606 16.6023 6.82341C16.5893 6.73547 16.6192 6.61185 16.6709 6.5497C17.3886 5.67077 17.6967 5.36222 17.9656 5.25394C18.2659 5.13208 18.425 4.94108 18.331 4.81272C18.2784 4.74057 18.4645 4.45434 18.5839 4.42236C18.6133 4.41447 18.7131 4.29631 18.8004 4.16424C19.1129 3.69578 19.8074 2.82824 19.8859 2.80721C20.0592 2.76078 19.9105 2.61776 19.5482 2.48195C19.2501 2.3703 19.1583 2.30866 19.1335 2.20316C19.1056 2.07952 19.0863 2.07263 18.909 2.13048C18.7591 2.17926 18.6556 2.1656 18.4476 2.06952C17.5219 1.63611 15.0025 0.905172 12.5915 0.36946C12.1628 0.273845 11.7681 0.16742 11.7189 0.134037C11.6696 0.100653 11.5567 0.091231 11.4684 0.114887C11.3703 0.141171 11.2478 0.122234 11.1556 0.0658578C10.922 -0.0734017 10.5508 0.0191645 10.4774 0.235515ZM11.6236 0.471811C11.7039 0.496872 11.7069 0.508139 11.641 0.549949C11.4718 0.657397 11.0153 0.810782 11.0023 0.762494C10.992 0.723863 11.0868 0.665682 11.5053 0.455217C11.5191 0.448055 11.5721 0.456276 11.6236 0.471811ZM12.514 0.623116C12.6986 0.65818 12.8568 0.705519 12.8632 0.729663C12.8697 0.753807 12.7899 0.795902 12.6869 0.823501C12.5348 0.864242 12.4895 0.852221 12.4502 0.75754C12.415 0.672078 12.3593 0.647323 12.2467 0.665407C12.1628 0.679263 12.0991 0.663575 12.1085 0.63344C12.132 0.551228 12.132 0.551227 12.514 0.623116ZM13.3623 0.84609C13.3658 0.858967 13.3197 0.883377 13.2592 0.899585C13.1987 0.915794 13.1398 0.891915 13.1273 0.845237C13.1096 0.779243 13.1295 0.768719 13.2303 0.791741C13.2995 0.807725 13.3588 0.833213 13.3623 0.84609ZM13.857 0.946421C13.8601 0.957688 13.8103 0.981364 13.7515 0.997135C13.691 1.01334 13.6486 0.998838 13.6588 0.965046C13.6753 0.908872 13.8428 0.893304 13.857 0.946421ZM12.182 2.11118C12.0246 2.17753 11.7935 2.2567 11.6737 2.28707L11.4554 2.34212L11.6629 2.24683C11.7767 2.19393 12.0078 2.11475 12.1713 2.07094L12.4721 1.99034L12.182 2.11118ZM16.1386 1.52201C16.8109 1.71621 17.5822 1.9788 17.5925 2.01743C17.6132 2.09469 17.3816 2.07394 17.3359 1.99476C17.2998 1.93198 17.2121 1.90545 17.0752 1.91796C16.9605 1.928 16.8609 1.90293 16.8497 1.86108C16.8131 1.72426 16.5872 1.73131 15.869 1.88925C15.1954 2.03696 15.1509 2.05405 15.1387 2.1591C15.1224 2.32047 15.0567 2.37603 14.8101 2.43691L14.5914 2.49035L14.7607 2.38977C14.8576 2.33276 14.9303 2.24429 14.9299 2.18401C14.9305 2.10793 15.0015 2.04578 15.1744 1.97184C15.3111 1.9128 15.4421 1.83284 15.4727 1.79014C15.546 1.69112 15.4729 1.46402 15.3649 1.45328C15.3165 1.44901 15.2828 1.41491 15.293 1.38111C15.3189 1.29481 15.4164 1.31183 16.1386 1.52201ZM15.0064 1.54761C14.9787 1.59471 13.8057 2.06257 12.974 2.35959C11.688 2.81803 11.9881 2.64964 13.4105 2.11153C14.881 1.55705 15.0317 1.50461 15.0064 1.54761ZM11.98 2.71738C11.9328 2.74383 11.8318 2.7726 11.7618 2.7793C11.6917 2.78599 11.7312 2.76333 11.8518 2.72931C11.9707 2.69572 12.0289 2.69048 11.98 2.71738ZM14.2095 2.64099C14.1144 2.67854 13.9558 2.72104 13.8547 2.73605C13.7536 2.75107 13.8295 2.72038 14.0257 2.66782C14.2235 2.61481 14.3045 2.60344 14.2095 2.64099ZM13.2884 2.96371C13.07 3.04465 12.7408 3.15011 12.5622 3.19625L12.2343 3.28065L12.6082 3.14594C12.816 3.07129 13.1371 2.96802 13.3345 2.9134L13.6884 2.81512L13.2884 2.96371ZM12.016 3.40124C11.9807 3.42624 11.9104 3.44507 11.8525 3.44504C11.7947 3.44501 11.8207 3.42425 11.9139 3.39928C12.0075 3.37592 12.0514 3.37624 12.016 3.40124ZM5.02797 5.67737C4.99262 5.70237 4.92231 5.72121 4.86448 5.72118C4.80622 5.71954 4.83263 5.70039 4.92582 5.67542C5.01901 5.65045 5.0629 5.65076 5.02797 5.67737ZM9.99157 4.34738C9.95622 4.37238 9.88591 4.39122 9.82808 4.39119C9.76982 4.38955 9.79623 4.3704 9.88942 4.34543C9.98097 4.32089 10.0249 4.32121 9.99157 4.34738ZM18.3215 2.27238C18.4369 2.31736 18.4361 2.32102 18.3373 2.38373C18.2787 2.42013 18.1775 2.42827 18.1 2.40072C17.9706 2.35603 17.9694 2.3512 18.0589 2.2996C18.109 2.27066 18.1644 2.24201 18.1787 2.23646C18.193 2.23091 18.2567 2.2466 18.3215 2.27238ZM11.4969 4.13206C11.4317 4.19611 11.0722 4.33214 10.9398 4.34173C10.8279 4.34928 11.1379 4.18513 11.3496 4.12497C11.4947 4.08437 11.5439 4.08498 11.4969 4.13206ZM17.0765 2.94929C17.0488 2.99638 16.1948 3.36668 14.2754 4.16218C13.2865 4.57206 12.4624 4.91019 12.4477 4.91413C12.433 4.91808 12.4209 4.87301 12.4197 4.80951C12.4192 4.74235 12.4749 4.67567 12.559 4.64279C12.6541 4.60524 12.6887 4.558 12.667 4.49654C12.6479 4.44474 12.6551 4.39968 12.6828 4.39223C12.709 4.38522 13.2206 4.20845 13.813 3.99969C14.4059 3.79253 15.3206 3.48532 15.8378 3.3226C16.3545 3.15828 16.8503 3.00125 16.9373 2.97277C17.0227 2.94472 17.0865 2.93451 17.0765 2.94929ZM19.2198 2.59063L19.6128 2.72339L19.5079 2.85501C19.4123 2.97552 19.3992 2.97902 19.3588 2.90014C19.2843 2.75277 19.1417 2.7306 18.8927 2.82835C18.6663 2.91836 18.6589 2.91689 18.6294 2.76092C18.6087 2.65776 18.6335 2.58037 18.6978 2.539C18.7531 2.50348 18.804 2.47088 18.8129 2.46503C18.8207 2.46123 19.0002 2.51663 19.2198 2.59063ZM11.2489 4.57978C11.2357 4.60231 11.1887 4.61662 11.1472 4.61221C11.0983 4.60633 11.1067 4.592 11.1713 4.57126C11.2248 4.55519 11.2609 4.55931 11.2489 4.57978ZM7.56668 6.31688C7.51945 6.34334 7.41851 6.37211 7.3501 6.37837C7.28005 6.38506 7.31954 6.3624 7.43846 6.32881C7.55901 6.29479 7.61555 6.28999 7.56668 6.31688ZM15.525 4.18273C15.5118 4.20525 15.4648 4.21957 15.4233 4.21516C15.3749 4.21089 15.3828 4.19495 15.4474 4.1742C15.5005 4.15653 15.5383 4.16021 15.525 4.18273ZM19.1191 3.32665C19.0138 3.45666 18.9381 3.5011 18.8428 3.49212C18.697 3.47771 18.6146 3.51015 15.9069 4.62039C13.7695 5.49844 13.6834 5.53014 13.664 5.45771C13.6506 5.40781 15.828 4.48282 17.521 3.81697C19.4597 3.05425 19.3024 3.10158 19.1191 3.32665ZM15.189 4.33486C15.1537 4.35986 15.0834 4.3787 15.0255 4.37867C14.9677 4.37864 14.9937 4.35788 15.0869 4.33291C15.1789 4.30998 15.2244 4.30986 15.189 4.33486ZM14.7941 4.49589C14.744 4.52483 14.6623 4.54673 14.6028 4.54714C14.5471 4.54828 14.5882 4.52519 14.6912 4.49759C14.7958 4.46955 14.843 4.46899 14.7941 4.49589ZM14.126 4.78186C13.6828 4.98515 13.5167 5.04519 13.5544 4.98333C13.5861 4.9317 14.0752 4.72302 14.3249 4.65439C14.4295 4.62635 14.338 4.68365 14.126 4.78186ZM13.3763 5.1035C13.3631 5.12602 13.3161 5.14034 13.2746 5.13592C13.2262 5.13166 13.2342 5.11571 13.2987 5.09497C13.3518 5.0773 13.3879 5.08141 13.3763 5.1035ZM13.0034 5.28107C12.775 5.40955 12.6 5.45643 12.6212 5.38519C12.6315 5.35139 12.7546 5.29425 12.8977 5.25936C13.1279 5.20286 13.139 5.20506 13.0034 5.28107ZM11.6086 5.92219C11.5954 5.94472 11.5484 5.95903 11.5069 5.95462C11.458 5.94874 11.4664 5.93441 11.531 5.91367C11.5841 5.89599 11.6202 5.90011 11.6086 5.92219ZM11.2326 6.0885C11.1433 6.12795 11.0538 6.18643 11.024 6.22548C10.9954 6.26248 10.4959 6.45842 9.91363 6.65929C7.86346 7.36562 7.68258 7.39684 9.36651 6.75586C10.2999 6.40053 11.1367 6.09006 11.2266 6.06596L11.3901 6.02216L11.2326 6.0885ZM16.2061 4.97841C16.1928 5.00093 16.1459 5.01525 16.1044 5.01084C16.0555 5.00496 16.0639 4.99063 16.1284 4.96988C16.1815 4.95221 16.2193 4.95589 16.2061 4.97841ZM15.8161 5.145C15.7824 5.16956 15.7219 5.18577 15.6804 5.18136C15.639 5.17695 15.6649 5.15619 15.7418 5.1356C15.8174 5.11705 15.8499 5.12044 15.8161 5.145ZM15.4482 5.30223C15.4133 5.32884 15.343 5.34768 15.2847 5.34604C15.2269 5.34601 15.2529 5.32525 15.3461 5.30028C15.4376 5.27575 15.4832 5.27562 15.4482 5.30223ZM7.50044 7.48877C7.43806 7.51756 7.32362 7.54823 7.2552 7.55448C7.18352 7.56161 7.23652 7.53706 7.37221 7.5007C7.50955 7.4639 7.56609 7.4591 7.50044 7.48877ZM15.0259 5.47232C14.9906 5.49732 14.9203 5.51615 14.8625 5.51612C14.8046 5.51609 14.8306 5.49533 14.9238 5.47036C15.017 5.44539 15.0613 5.44732 15.0259 5.47232ZM6.88807 7.70806C6.84084 7.73452 6.7399 7.76329 6.66985 7.76998C6.5998 7.77668 6.63929 7.75402 6.75984 7.71999C6.87833 7.68479 6.9365 7.67956 6.88807 7.70806ZM10.8338 6.67323C10.6437 6.74833 10.1283 6.91749 9.6797 7.05493C9.23071 7.19076 8.97609 7.26071 9.10791 7.20987C9.52625 7.05119 10.6219 6.68687 10.9048 6.61108C11.1598 6.54274 11.1558 6.54728 10.8338 6.67323ZM14.6592 5.6275C14.6239 5.6525 14.5536 5.67134 14.4958 5.67131C14.4379 5.67128 14.4639 5.65052 14.5571 5.62555C14.6491 5.60263 14.693 5.60294 14.6592 5.6275ZM6.35624 7.90749C6.30901 7.93395 6.20807 7.96272 6.13966 7.96898C6.06961 7.97567 6.1091 7.95301 6.22801 7.91943C6.34857 7.8854 6.40674 7.88016 6.35624 7.90749ZM14.2643 5.78853C14.2142 5.81747 14.1325 5.83938 14.073 5.83979C14.0173 5.84093 14.0584 5.81783 14.1614 5.79023C14.266 5.7622 14.3116 5.76207 14.2643 5.78853ZM5.79911 8.11716C5.73674 8.14595 5.62229 8.17661 5.55388 8.18287C5.48219 8.19 5.53519 8.16545 5.67089 8.12909C5.80659 8.09273 5.86476 8.08749 5.79911 8.11716ZM13.5946 6.07495C13.1734 6.26888 12.9301 6.35478 12.9638 6.29744C12.9915 6.25035 13.5601 6.01172 13.7935 5.94747C13.8981 5.91943 13.8082 5.9763 13.5946 6.07495ZM5.26892 8.31615C5.20654 8.34494 5.0921 8.37561 5.02368 8.38186C4.952 8.389 5.005 8.36444 5.1407 8.32808C5.27639 8.29172 5.33293 8.28692 5.26892 8.31615ZM8.67608 7.40321C8.56466 7.44514 8.38482 7.49333 8.26735 7.51272C8.15316 7.53125 8.24213 7.49706 8.46611 7.43704C8.69009 7.37702 8.78587 7.36171 8.67608 7.40321ZM4.79148 8.50274C4.72746 8.53197 4.60321 8.56526 4.51844 8.5759C4.43041 8.58741 4.48341 8.56286 4.63546 8.52212C4.78871 8.47933 4.85669 8.47146 4.79148 8.50274ZM7.73759 7.71333C7.67521 7.74212 7.56077 7.77279 7.49235 7.77904C7.42067 7.78617 7.47367 7.76162 7.60937 7.72526C7.74463 7.68729 7.80117 7.68249 7.73759 7.71333ZM3.98725 8.82347C3.77318 8.9205 3.31604 9.0913 2.97702 9.19939L2.35698 9.39658L3.1224 9.08798C4.05018 8.71172 4.59313 8.54726 3.98725 8.82347ZM3.44944 9.37989C3.41408 9.40489 3.34378 9.42373 3.28595 9.4237C3.22812 9.42367 3.25409 9.4029 3.34728 9.37793C3.43884 9.3534 3.48316 9.35533 3.44944 9.37989ZM16.5922 6.243C16.5486 6.29609 16.4692 6.33979 16.4135 6.34093C16.3593 6.34164 16.0466 6.45647 15.7163 6.59676C15.3875 6.7366 14.778 6.9534 14.3608 7.07726L13.6029 7.30276L14.4275 6.99902C14.8785 6.83158 15.5258 6.58568 15.8604 6.45462C16.7206 6.11373 16.6928 6.12118 16.5922 6.243ZM13.2468 7.83119C13.2611 7.8843 13.1082 7.9546 13.0658 7.91419C13.0401 7.89004 13.0696 7.85626 13.1301 7.84005C13.1901 7.82223 13.2438 7.81992 13.2468 7.83119ZM15.287 7.64336C15.2369 7.67231 15.1552 7.69421 15.0957 7.69462C15.04 7.69576 15.0811 7.67266 15.1841 7.64506C15.2887 7.61703 15.3359 7.61647 15.287 7.64336ZM14.8647 7.81344C14.8146 7.84239 14.7329 7.86429 14.6734 7.8647C14.6177 7.86584 14.6588 7.84275 14.7618 7.81515C14.8664 7.78711 14.9136 7.78655 14.8647 7.81344ZM14.4171 7.99376C14.3531 8.02298 14.2289 8.05628 14.1441 8.06691C14.0577 8.07799 14.1091 8.05387 14.2611 8.01313C14.4132 7.97239 14.4811 7.96453 14.4171 7.99376ZM13.804 8.2167C13.7253 8.24987 13.5896 8.28623 13.5048 8.29687C13.42 8.30751 13.4861 8.27945 13.6496 8.23564C13.811 8.19066 13.8827 8.18353 13.804 8.2167ZM15.0073 8.11681C14.9744 8.17049 14.0473 8.56899 13.7976 8.63763C13.4237 8.73955 13.5641 8.59669 13.9862 8.44562C14.2104 8.36659 14.4442 8.27805 14.5026 8.25379C14.6938 8.16976 15.0302 8.07791 15.0073 8.11681ZM14.1323 8.95163C13.9184 9.15386 13.8248 9.17722 13.9962 8.98638C14.073 8.90024 14.1672 8.8267 14.2134 8.81604C14.2584 8.80744 14.2207 8.8693 14.1323 8.95163Z" fill="#385469"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="swiper-dot">
                        <div class="dot2"></div>
                    </div>
                </div>
            </div>
        </section>
        <?php if (\Elementor\Plugin::$instance->editor->is_edit_mode()) : ?>
            <script>
                (function ($) {
                    "use strict";

                    const widgetSelector = "#<?php echo esc_js($widget_id); ?>";

                    const initProgramSlider = function ($scope) {
                        if (typeof Swiper === "undefined") {
                            return;
                        }

                        const $widget = $scope && $scope.length ? $scope.find(widgetSelector) : $(widgetSelector);
                        if (!$widget.length) {
                            return;
                        }

                        $widget.each(function () {
                            const sliderEl = this.querySelector(".program-slider");
                            if (!sliderEl) {
                                return;
                            }

                            if (sliderEl.swiper) {
                                sliderEl.swiper.destroy(true, true);
                            }

                            const paginationEl = this.querySelector(".dot2");
                            new Swiper(sliderEl, {
                                spaceBetween: 30,
                                speed: 1300,
                                loop: true,
                                autoplay: {
                                    delay: 2000,
                                    disableOnInteraction: false
                                },
                                pagination: {
                                    el: paginationEl,
                                    clickable: true
                                },
                                breakpoints: {
                                    1399: { slidesPerView: 3 },
                                    1199: { slidesPerView: 2.5 },
                                    991: { slidesPerView: 2 },
                                    767: { slidesPerView: 1.5 },
                                    575: { slidesPerView: 1 },
                                    0: { slidesPerView: 1 }
                                }
                            });
                        });
                    };

                    $(window).on("elementor/frontend/init", function () {
                        elementorFrontend.hooks.addAction("frontend/element_ready/ft-program.default", initProgramSlider);
                    });

                    $(function () {
                        initProgramSlider($(document));
                    });
                })(jQuery);
            </script>
        <?php endif; ?>
<?php
    }
} ?>