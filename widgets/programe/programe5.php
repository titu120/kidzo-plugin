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

class FT_Program5_Widget extends \Elementor\Widget_Base
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
        return 'ft-program-5';
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
        return esc_html__('FT Program 5', 'ftelements');
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

        $this->add_control(
            'section_subtitle',
            [
                'label'       => esc_html__('Section Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => esc_html__('Section Title', 'ftelements'),
                'type'  => Controls_Manager::TEXTAREA,
            ]
        );

        $this->add_control(
            'posts_per_page',
            [
                'label' => esc_html__('Courses To Show', 'ftelements'),
                'type'  => Controls_Manager::NUMBER,
                'min'   => 1,
                'max'   => 12,
            ]
        );

        $this->add_control(
            'title_word_count',
            [
                'label' => esc_html__('Title Word Limit', 'ftelements'),
                'type'  => Controls_Manager::NUMBER,
                'min'   => 1,
                'max'   => 20,
            ]
        );

        $this->add_control(
            'description_word_count',
            [
                'label' => esc_html__('Description Word Limit', 'ftelements'),
                'type'  => Controls_Manager::NUMBER,
                'min'   => 1,
                'max'   => 60,
            ]
        );

        $this->add_control(
            'icon_image_1',
            [
                'label' => esc_html__('Program Icon 1', 'ftelements'),
                'type'  => Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'line_shape_image',
            [
                'label' => esc_html__('Top Line Shape Image', 'ftelements'),
                'type'  => Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'icon_image_2',
            [
                'label' => esc_html__('Program Icon 2', 'ftelements'),
                'type'  => Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'icon_image_3',
            [
                'label' => esc_html__('Program Icon 3', 'ftelements'),
                'type'  => Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'icon_image_4',
            [
                'label' => esc_html__('Program Icon 4', 'ftelements'),
                'type'  => Controls_Manager::MEDIA,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'selector' => '{{WRAPPER}} .program-section-5',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_heading_style',
            [
                'label' => esc_html__('Heading', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-5 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .program-section-5 .section-title .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label'      => esc_html__('Subtitle Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-5 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .program-section-5 .section-title h2',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Title Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'heading_spacing',
            [
                'label'      => esc_html__('Heading Bottom Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .section-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'card_style',
            [
                'label' => esc_html__('Program Card', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'card_background',
                'selector' => '{{WRAPPER}} .program-section-5 .program-box-items-22',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'card_border',
                'selector' => '{{WRAPPER}} .program-section-5 .program-box-items-22',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'icon_style',
            [
                'label' => esc_html__('Icon', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_wrap_size',
            [
                'label'      => esc_html__('Wrapper Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_width',
            [
                'label'      => esc_html__('Icon Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'icon_background',
                'selector' => '{{WRAPPER}} .program-section-5 .program-box-items-22 .icon',
            ]
        );

        $this->add_responsive_control(
            'icon_padding',
            [
                'label'      => esc_html__('Icon Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_border_radius',
            [
                'label'      => esc_html__('Icon Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'icon_filter',
                'selector' => '{{WRAPPER}} .program-section-5 .program-box-items-22 .icon img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_style',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'card_title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .content h4 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'card_title_hover_color',
            [
                'label'     => esc_html__('Title Hover Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .content h4 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'card_title_typography',
                'selector' => '{{WRAPPER}} .program-section-5 .program-box-items-22 .content h4',
            ]
        );

        $this->add_responsive_control(
            'card_title_margin',
            [
                'label'      => esc_html__('Title Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .content h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'meta_color',
            [
                'label'     => esc_html__('Meta Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'meta_typography',
                'selector' => '{{WRAPPER}} .program-section-5 .program-box-items-22 .content span',
            ]
        );

        $this->add_responsive_control(
            'meta_margin',
            [
                'label'      => esc_html__('Meta Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .content span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label'     => esc_html__('Description Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'description_typography',
                'selector' => '{{WRAPPER}} .program-section-5 .program-box-items-22 .content p',
            ]
        );

        $this->add_responsive_control(
            'description_margin',
            [
                'label'      => esc_html__('Description Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'arrow_style',
            [
                'label' => esc_html__('Arrow', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'arrow_size',
            [
                'label'      => esc_html__('Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .arrow-icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'arrow_box_size',
            [
                'label'      => esc_html__('Box Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .arrow-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'arrow_border',
                'selector' => '{{WRAPPER}} .program-section-5 .program-box-items-22 .arrow-icon',
            ]
        );

        $this->add_responsive_control(
            'arrow_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .arrow-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('arrow_style_tabs');

        $this->start_controls_tab(
            'arrow_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'arrow_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .arrow-icon, {{WRAPPER}} .program-section-5 .program-box-items-22 .arrow-icon i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'arrow_background',
                'selector' => '{{WRAPPER}} .program-section-5 .program-box-items-22 .arrow-icon',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'arrow_hover_tab',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'arrow_hover_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-5 .program-box-items-22 .arrow-icon:hover, {{WRAPPER}} .program-section-5 .program-box-items-22 .arrow-icon:hover i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'arrow_hover_background',
                'selector' => '{{WRAPPER}} .program-section-5 .program-box-items-22 .arrow-icon:hover',
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

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
        $section_subtitle = !empty($settings['section_subtitle']) ? $settings['section_subtitle'] : '';
        $section_title = !empty($settings['section_title']) ? $settings['section_title'] : '';
        $posts_per_page = !empty($settings['posts_per_page']) ? (int) $settings['posts_per_page'] : 4;
        $title_word_count = !empty($settings['title_word_count']) ? (int) $settings['title_word_count'] : 3;
        $description_word_count = !empty($settings['description_word_count']) ? (int) $settings['description_word_count'] : 8;

        $programs = [];
        $course_post_types = ['courses', 'tutor_course'];
        if (function_exists('tutor') && isset(tutor()->course_post_type) && !empty(tutor()->course_post_type)) {
            $course_post_types = [tutor()->course_post_type];
        }

        $query = new \WP_Query([
            'post_type'      => $course_post_types,
            'post_status'    => 'publish',
            'posts_per_page' => $posts_per_page,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ]);

        $default_icons = [
            $theme_uri . '/assets/img/icon/07.svg',
            $theme_uri . '/assets/img/icon/08.svg',
            $theme_uri . '/assets/img/icon/09.svg',
            $theme_uri . '/assets/img/icon/10.svg',
        ];

        $custom_icons = [
            !empty($settings['icon_image_1']['url']) ? $settings['icon_image_1']['url'] : $default_icons[0],
            !empty($settings['icon_image_2']['url']) ? $settings['icon_image_2']['url'] : $default_icons[1],
            !empty($settings['icon_image_3']['url']) ? $settings['icon_image_3']['url'] : $default_icons[2],
            !empty($settings['icon_image_4']['url']) ? $settings['icon_image_4']['url'] : $default_icons[3],
        ];
        $line_shape_image = !empty($settings['line_shape_image']['url']) ? $settings['line_shape_image']['url'] : ($theme_uri . '/assets/img/line-1.png');

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $course_id = get_the_ID();
                $terms = get_the_terms($course_id, 'course-category');
                $label = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : __('Course', 'ftelements');

                $programs[] = [
                    'title'       => wp_trim_words(get_the_title(), $title_word_count, '...'),
                    'url'         => get_permalink(),
                    'description' => wp_trim_words(get_the_excerpt(), $description_word_count, '...'),
                    'label'       => $label,
                ];
            }
            wp_reset_postdata();
        }

        if (empty($programs)) {
            $programs[] = [
                'title'       => __('No Courses Found', 'ftelements'),
                'url'         => '#',
                'description' => __('No Tutor LMS courses found. Please add courses to show them here.', 'ftelements'),
                'label'       => __('Course', 'ftelements'),
            ];
        }

        ?>




        <section class="program-section-5 section-padding fix">
            <div class="line-1">
                <img src="<?php echo esc_url($line_shape_image); ?>" alt="shape-img">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <?php if (!empty($section_subtitle)) : ?>
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($section_subtitle); ?></span>
                    <?php endif; ?>
                    <?php if (!empty($section_title)) : ?>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                            <?php echo wp_kses($section_title, ['br' => []]); ?>
                        </h2>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <?php foreach ($programs as $index => $program) :
                        $delay = number_format(0.2 + ($index * 0.2), 1);
                        $program_bg_class = $index > 0 ? ' bg-' . ($index + 1) : '';
                        $arrow_class = $index > 0 ? ' color-' . ($index + 1) : '';
                        $icon = $custom_icons[$index % count($custom_icons)] ?? $default_icons[0];
                        ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                            <div class="program-box-items-22">
                                <div class="program-bg<?php echo esc_attr($program_bg_class); ?>"></div>
                                <div class="icon">
                                    <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($program['title']); ?>">
                                </div>
                                <div class="content text-center">
                                    <h4>
                                        <a href="<?php echo esc_url($program['url']); ?>"><?php echo esc_html($program['title']); ?></a>
                                    </h4>
                                    <span>(<?php echo esc_html($program['label']); ?>)</span>
                                    <p>
                                        <?php echo esc_html($program['description']); ?>
                                    </p>
                                    <a href="<?php echo esc_url($program['url']); ?>" class="arrow-icon<?php echo esc_attr($arrow_class); ?>">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>









<?php
    }
} ?>