<?php
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Typography;
defined('ABSPATH') || die();

class FT_Program3_Widget extends \Elementor\Widget_Base {
    public function get_name() { return 'ft-program-3'; }
    public function get_title() { return esc_html__('FT Program 3', 'ftelements'); }
    public function get_icon() { return 'tp-icon'; }
    public function get_categories() { return ['pielements_category']; }

    protected function register_controls() {
        $this->start_controls_section('program_general_content', [
            'label' => esc_html__('Content', 'ftelements'),
            'tab'   => Controls_Manager::TAB_CONTENT,
        ]);

        $this->add_control('section_subtitle', [
            'label'       => esc_html__('Section Subtitle', 'ftelements'),
            'type'        => Controls_Manager::TEXT,
            'default'     => esc_html__('Our Courses', 'ftelements'),
            'label_block' => true,
        ]);

        $this->add_control('section_title', [
            'label'       => esc_html__('Section Title', 'ftelements'),
            'type'        => Controls_Manager::TEXT,
            'default'     => esc_html__('Our Childcare Courses', 'ftelements'),
            'label_block' => true,
        ]);

        $this->add_control('title_word_count', [
            'label'   => esc_html__('Title Word Count', 'ftelements'),
            'type'    => Controls_Manager::NUMBER,
            'min'     => 1,
            'max'     => 30,
            'step'    => 1,
            'default' => 6,
        ]);

        $this->add_control('description_word_count', [
            'label'   => esc_html__('Description Word Count', 'ftelements'),
            'type'    => Controls_Manager::NUMBER,
            'min'     => 1,
            'max'     => 60,
            'step'    => 1,
            'default' => 16,
        ]);

        $this->add_control('top_line_image', [
            'label' => esc_html__('Top Line Image', 'ftelements'),
            'type'  => Controls_Manager::MEDIA,
        ]);

        $this->add_control('cat_shape_image', [
            'label' => esc_html__('Cat Shape Image', 'ftelements'),
            'type'  => Controls_Manager::MEDIA,
        ]);

        $this->add_control('star_shape_image', [
            'label' => esc_html__('Star Shape Image', 'ftelements'),
            'type'  => Controls_Manager::MEDIA,
        ]);

        $this->add_control('arrow_prev_image', [
            'label' => esc_html__('Prev Arrow Image', 'ftelements'),
            'type'  => Controls_Manager::MEDIA,
        ]);

        $this->add_control('arrow_next_image', [
            'label' => esc_html__('Next Arrow Image', 'ftelements'),
            'type'  => Controls_Manager::MEDIA,
        ]);

        $this->add_control('happy_mother_image', [
            'label' => esc_html__('Happy Mother Image', 'ftelements'),
            'type'  => Controls_Manager::MEDIA,
        ]);

        $this->add_control('happy_mother_shape_image', [
            'label' => esc_html__('Happy Mother Shape Image', 'ftelements'),
            'type'  => Controls_Manager::MEDIA,
        ]);

        $this->end_controls_section();

        $this->start_controls_section('section_style', [
            'label' => esc_html__('Section', 'ftelements'),
            'tab'   => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_bg',
                'selector' => '{{WRAPPER}} .program-section-3',
            ]
        );

        $this->add_responsive_control('section_padding', [
            'label'      => esc_html__('Padding', 'ftelements'),
            'type'       => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em'],
            'selectors'  => [
                '{{WRAPPER}} .program-section-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]);

        $this->add_responsive_control('section_margin', [
            'label'      => esc_html__('Margin', 'ftelements'),
            'type'       => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em'],
            'selectors'  => [
                '{{WRAPPER}} .program-section-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]);

        $this->end_controls_section();

        $this->start_controls_section('section_title_style', [
            'label' => esc_html__('Section Title', 'ftelements'),
            'tab'   => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .program-section-3 .section-title .sec-sub',
            ]
        );

        $this->add_control('subtitle_color', [
            'label'     => esc_html__('Subtitle Color', 'ftelements'),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .program-section-3 .section-title .sec-sub' => 'color: {{VALUE}};',
            ],
        ]);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .program-section-3 .section-title .sec_title',
            ]
        );

        $this->add_control('title_color', [
            'label'     => esc_html__('Title Color', 'ftelements'),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .program-section-3 .section-title .sec_title' => 'color: {{VALUE}};',
            ],
        ]);

        $this->add_responsive_control('title_spacing', [
            'label'      => esc_html__('Bottom Spacing', 'ftelements'),
            'type'       => Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range'      => [
                'px' => ['min' => 0, 'max' => 150],
            ],
            'selectors'  => [
                '{{WRAPPER}} .program-section-3 .section-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
            ],
        ]);

        $this->end_controls_section();

        $this->start_controls_section('card_style', [
            'label' => esc_html__('Program Card', 'ftelements'),
            'tab'   => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'card_bg',
                'selector' => '{{WRAPPER}} .program-section-3 .program-box-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'card_border',
                'selector' => '{{WRAPPER}} .program-section-3 .program-box-items',
            ]
        );

        $this->add_responsive_control('card_radius', [
            'label'      => esc_html__('Border Radius', 'ftelements'),
            'type'       => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%'],
            'selectors'  => [
                '{{WRAPPER}} .program-section-3 .program-box-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]);

        $this->add_responsive_control('card_padding', [
            'label'      => esc_html__('Content Padding', 'ftelements'),
            'type'       => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em'],
            'selectors'  => [
                '{{WRAPPER}} .program-section-3 .program-box-items .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]);

        $this->end_controls_section();

        $this->start_controls_section('card_image_style', [
            'label' => esc_html__('Card Image', 'ftelements'),
            'tab'   => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'card_image_filter',
                'selector' => '{{WRAPPER}} .program-section-3 .program-box-items .thumb img',
            ]
        );

        $this->add_responsive_control('card_image_height', [
            'label'      => esc_html__('Height', 'ftelements'),
            'type'       => Controls_Manager::SLIDER,
            'size_units' => ['px', 'vh'],
            'range'      => [
                'px' => ['min' => 120, 'max' => 700],
                'vh' => ['min' => 10, 'max' => 100],
            ],
            'selectors'  => [
                '{{WRAPPER}} .program-section-3 .program-box-items .thumb img' => 'height: {{SIZE}}{{UNIT}}; object-fit: cover;',
            ],
        ]);

        $this->add_responsive_control('card_image_radius', [
            'label'      => esc_html__('Border Radius', 'ftelements'),
            'type'       => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%'],
            'selectors'  => [
                '{{WRAPPER}} .program-section-3 .program-box-items .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]);

        $this->end_controls_section();

        $this->start_controls_section('card_content_style', [
            'label' => esc_html__('Card Content', 'ftelements'),
            'tab'   => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'label_typography',
                'selector' => '{{WRAPPER}} .program-section-3 .program-box-items .post-box',
            ]
        );

        $this->add_control('label_color', [
            'label'     => esc_html__('Label Color', 'ftelements'),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .program-section-3 .program-box-items .post-box' => 'color: {{VALUE}};',
            ],
        ]);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'card_title_typography',
                'selector' => '{{WRAPPER}} .program-section-3 .program-box-items .content h2, {{WRAPPER}} .program-section-3 .program-box-items .content h2 a',
            ]
        );

        $this->add_control('card_title_color', [
            'label'     => esc_html__('Title Color', 'ftelements'),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .program-section-3 .program-box-items .content h2, {{WRAPPER}} .program-section-3 .program-box-items .content h2 a' => 'color: {{VALUE}};',
            ],
        ]);

        $this->add_control('card_title_hover_color', [
            'label'     => esc_html__('Title Hover Color', 'ftelements'),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .program-section-3 .program-box-items .content h2 a:hover' => 'color: {{VALUE}};',
            ],
        ]);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'card_desc_typography',
                'selector' => '{{WRAPPER}} .program-section-3 .program-box-items .content p',
            ]
        );

        $this->add_control('card_desc_color', [
            'label'     => esc_html__('Description Color', 'ftelements'),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .program-section-3 .program-box-items .content p' => 'color: {{VALUE}};',
            ],
        ]);

        $this->add_responsive_control('card_content_spacing', [
            'label'      => esc_html__('Content Spacing', 'ftelements'),
            'type'       => Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range'      => [
                'px' => ['min' => 0, 'max' => 80],
            ],
            'selectors'  => [
                '{{WRAPPER}} .program-section-3 .program-box-items .content > *:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
            ],
        ]);

        $this->end_controls_section();

        $this->start_controls_section('arrow_style', [
            'label' => esc_html__('Arrow Button', 'ftelements'),
            'tab'   => Controls_Manager::TAB_STYLE,
        ]);

        $this->add_responsive_control('arrow_size', [
            'label'      => esc_html__('Size', 'ftelements'),
            'type'       => Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range'      => [
                'px' => ['min' => 20, 'max' => 120],
            ],
            'selectors'  => [
                '{{WRAPPER}} .program-section-3 .arrow-btn .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
            ],
        ]);

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'arrow_border',
                'selector' => '{{WRAPPER}} .program-section-3 .arrow-btn .icon',
            ]
        );

        $this->add_responsive_control('arrow_radius', [
            'label'      => esc_html__('Border Radius', 'ftelements'),
            'type'       => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%'],
            'selectors'  => [
                '{{WRAPPER}} .program-section-3 .arrow-btn .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]);

        $this->start_controls_tabs('arrow_bg_tabs');

        $this->start_controls_tab('arrow_bg_normal', [
            'label' => esc_html__('Normal', 'ftelements'),
        ]);

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'arrow_bg_normal',
                'selector' => '{{WRAPPER}} .program-section-3 .arrow-btn .icon .bg',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab('arrow_bg_hover', [
            'label' => esc_html__('Hover', 'ftelements'),
        ]);

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'arrow_bg_hover',
                'selector' => '{{WRAPPER}} .program-section-3 .arrow-btn .icon:hover .bg',
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $widget_id = 'program3-widget-' . $this->get_id();
        $theme_uri = get_template_directory_uri();
        $section_subtitle = !empty($settings['section_subtitle']) ? $settings['section_subtitle'] : __('Our Courses', 'ftelements');
        $section_title = !empty($settings['section_title']) ? $settings['section_title'] : __('Our Childcare Courses', 'ftelements');
        $title_word_count = !empty($settings['title_word_count']) ? (int) $settings['title_word_count'] : 6;
        $description_word_count = !empty($settings['description_word_count']) ? (int) $settings['description_word_count'] : 16;
        $top_line_image = !empty($settings['top_line_image']['url']) ? $settings['top_line_image']['url'] : ($theme_uri . '/assets/img/home-3/top-line-2.png');
        $cat_shape_image = !empty($settings['cat_shape_image']['url']) ? $settings['cat_shape_image']['url'] : ($theme_uri . '/assets/img/home-3/cat.png');
        $star_shape_image = !empty($settings['star_shape_image']['url']) ? $settings['star_shape_image']['url'] : ($theme_uri . '/assets/img/home-3/star.png');
        $arrow_prev_image = !empty($settings['arrow_prev_image']['url']) ? $settings['arrow_prev_image']['url'] : ($theme_uri . '/assets/img/home-3/arrow-left.png');
        $arrow_next_image = !empty($settings['arrow_next_image']['url']) ? $settings['arrow_next_image']['url'] : ($theme_uri . '/assets/img/home-3/arrow-right.png');
        $happy_mother_image = !empty($settings['happy_mother_image']['url']) ? $settings['happy_mother_image']['url'] : ($theme_uri . '/assets/img/home-3/happy-mother.png');
        $happy_mother_shape_image = !empty($settings['happy_mother_shape_image']['url']) ? $settings['happy_mother_shape_image']['url'] : ($theme_uri . '/assets/img/home-3/shape-1.png');

        $programs = [];
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
                $terms = get_the_terms($course_id, 'course-category');
                $label = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : __('Course', 'ftelements');
                $programs[] = [
                    'title'       => wp_trim_words(get_the_title(), $title_word_count, '...'),
                    'url'         => get_permalink(),
                    'description' => wp_trim_words(get_the_excerpt(), $description_word_count, '...'),
                    'label'       => $label,
                    'image'       => get_the_post_thumbnail_url($course_id, 'large') ?: ($theme_uri . '/assets/img/home-1/program-01.jpg'),
                ];
            }
            wp_reset_postdata();
        }

        if (empty($programs)) {
            $programs = [[
                'title' => __('Special Needs Childcare', 'ftelements'),
                'url' => '#',
                'description' => __('Fun-based learning through games, music, and activities to develop social skills and confidence.', 'ftelements'),
                'label' => __('Course', 'ftelements'),
                'image' => $theme_uri . '/assets/img/home-1/program-01.jpg',
            ]];
        }
        ?>
        <section id="<?php echo esc_attr($widget_id); ?>" class="program-section-3 section-padding">
            <div class="top-line"><img src="<?php echo esc_url($top_line_image); ?>" alt="img" /></div>
            <div class="cat-shape bz-gsap-animate-circle"><img src="<?php echo esc_url($cat_shape_image); ?>" alt="img" /></div>
            <div class="star-shape bz-gsap-animate-circle"><img src="<?php echo esc_url($star_shape_image); ?>" alt="img" /></div>
            <div class="container">
                <div class="section-title">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($section_subtitle); ?></span>
                    <h2 class="tx-title sec_title tz-itm-title tz-itm-anim"><?php echo esc_html($section_title); ?></h2>
                </div>
                <div class="array-button wow fadeInUp">
                    <button class="array-prev"><img src="<?php echo esc_url($arrow_prev_image); ?>" alt="img" /></button>
                    <button class="array-next"><img src="<?php echo esc_url($arrow_next_image); ?>" alt="img" /></button>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-7">
                    <div class="program-wrapper-3">
                        <div class="swiper program-slider-3">
                            <div class="swiper-wrapper">
                                <?php foreach ($programs as $index => $program) : ?>
                                    <div class="swiper-slide wow fadeInUp" data-wow-delay="<?php echo esc_attr(number_format(0.2 + ($index * 0.2), 1)); ?>s">
                                        <div class="program-main-box-items style-page-3">
                                            <div class="program-box-items">
                                                <div class="item-bg"></div>
                                                <div class="thumb">
                                                    <img src="<?php echo esc_url($program['image']); ?>" alt="<?php echo esc_attr($program['title']); ?>" />
                                                    <img src="<?php echo esc_url($program['image']); ?>" alt="<?php echo esc_attr($program['title']); ?>" />
                                                </div>
                                                <div class="content">
                                                    <span class="post-box"><?php echo esc_html($program['label']); ?></span>
                                                    <h2><a href="<?php echo esc_url($program['url']); ?>"><?php echo esc_html($program['title']); ?></a></h2>
                                                    <p><?php echo esc_html($program['description']); ?></p>
                                                </div>
                                            </div>
                                            <div class="arrow-btn">
                                                <a href="<?php echo esc_url($program['url']); ?>" class="icon">
                                                    <span class="bg"></span>
                                                    <div class="arrow-icon">
                                                        <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.9" d="M10.4774 0.235515C10.4486 0.324309 10.3906 0.401968 10.3481 0.413358C10.3039 0.425186 10.2772 0.456482 10.2854 0.487064C10.2932 0.516037 10.3487 0.527039 10.4092 0.51083C10.5024 0.48586 10.5282 0.516891 10.5826 0.719701C10.6417 0.940217 10.6354 0.962599 10.5003 1.01432C10.4052 1.05187 10.3572 1.10788 10.3643 1.18016C10.3684 1.24118 10.334 1.34182 10.2881 1.40588C10.1502 1.59118 10.2828 1.69366 10.5608 1.61919C10.7684 1.56355 10.7947 1.5703 10.7964 1.66818C10.7973 1.73694 10.7444 1.80114 10.6604 1.83402C10.551 1.87712 10.5242 1.92744 10.5304 2.08794C10.5331 2.19592 10.5645 2.33932 10.5969 2.40137C10.6469 2.49664 10.6946 2.50456 10.9022 2.44893C11.1802 2.37446 11.2363 2.43359 11.042 2.5978C10.885 2.73129 10.8869 2.90847 11.0481 2.96708C11.1124 2.99125 11.1439 3.01731 11.1161 3.02476C10.9858 3.06142 7.91162 4.06627 6.70975 4.46594C4.75645 5.11526 0.833265 6.46321 0.706193 6.53176C0.568108 6.60499 0.554427 6.75012 0.680896 6.82319C0.755711 6.86698 0.865862 6.85299 1.09001 6.77395C1.37008 6.67475 1.36156 6.68221 0.982483 6.86314C0.458688 7.11218 0.32957 7.21233 0.386872 7.32809C0.446671 7.44663 0.61575 7.39098 2.14734 6.73734C2.85502 6.43558 3.69849 6.10434 4.02443 5.99975L4.61668 5.81001L3.82596 6.12884C3.1397 6.40588 1.19342 7.27759 0.669029 7.54404C0.534555 7.61113 0.495859 7.6629 0.517423 7.74338C0.554083 7.8802 0.574906 7.87289 2.06431 7.1926C2.7509 6.87752 3.76737 6.44644 4.31993 6.23283C5.44304 5.80078 8.64131 4.72298 9.27782 4.56106L9.68827 4.45798L9.3738 4.59227C8.90884 4.79276 5.0965 6.27317 2.94114 7.0905C1.48737 7.6422 1.01337 7.84166 0.868177 7.96683C0.658035 8.1439 0.510962 8.43863 0.605576 8.49091C0.675827 8.53074 2.90589 7.71755 6.77693 6.24039C8.52083 5.57472 9.57125 5.19838 9.73587 5.17842L9.9906 5.14812L9.69969 5.26575C9.54017 5.33092 7.88996 5.94733 6.0348 6.63592C4.17963 7.3245 2.34985 8.00973 1.97032 8.15628C1.58958 8.30488 1.13433 8.46309 0.94958 8.5126C0.601343 8.60591 0.351623 8.79876 0.553279 8.81891C0.605436 8.82391 1.91433 8.35933 3.46215 7.78587C7.37985 6.33244 8.39974 6.00568 5.65794 7.0802C4.86997 7.38967 4.01929 7.7332 3.75867 7.84616C3.50013 7.96029 2.67446 8.27296 1.92778 8.54032C-0.077117 9.25867 -0.0192129 9.2328 0.00731647 9.41029C0.0360925 9.6027 0.137387 9.60143 0.658203 9.40668C0.997382 9.27957 1.08412 9.26322 1.14148 9.32031C1.20133 9.38018 1.26543 9.35783 1.65886 9.14545C2.26815 8.81658 2.2555 8.82169 5.04582 7.84975C9.12026 6.43195 9.55635 6.31338 6.35332 7.49769C3.6095 8.51237 1.19337 9.46167 1.13017 9.55279C1.1024 9.59301 0.971624 9.66083 0.838514 9.70685C0.602494 9.78734 0.598883 9.79348 0.64805 9.97698L0.698512 10.1653L1.20068 10.0187L1.70122 9.87248L1.79541 10.0801C1.84651 10.1924 1.92575 10.2919 1.96723 10.2963C2.01035 10.3003 3.02498 9.94734 4.2178 9.51386C6.92919 8.52857 9.53322 7.61346 10.4829 7.31241C10.882 7.1865 11.3173 7.03881 11.447 6.98679C11.6257 6.91475 11.6737 6.91054 11.6404 6.96948C11.6144 7.01614 10.5803 7.42087 9.04874 7.98307C4.4149 9.68705 1.45548 10.8061 1.40225 10.8756C1.37361 10.9126 1.38273 11.0447 1.42204 11.1652C1.47895 11.3449 1.51599 11.3851 1.61263 11.373C1.67734 11.366 3.98261 10.5326 6.72815 9.52438C9.4737 8.51614 11.8504 7.65504 12.0048 7.6102C12.1953 7.55573 12.3338 7.54966 12.4414 7.59156C12.62 7.66275 12.8203 7.9265 12.8738 8.15887C12.8934 8.24505 12.9699 8.35395 13.0439 8.40139C13.118 8.44883 13.2256 8.55627 13.2842 8.64409C13.38 8.78576 13.3798 8.80478 13.2817 8.83107C13.2212 8.84728 13.1686 8.89934 13.1643 8.94879C13.1501 9.08543 13.324 9.17857 13.4551 9.10549C13.5479 9.05301 13.5863 9.07205 13.6851 9.21812C13.7964 9.38496 13.8132 9.38907 14.0025 9.31075C14.1649 9.24309 14.2129 9.24575 14.2566 9.32375C14.3254 9.44332 14.5385 9.39486 14.5539 9.25617C14.5597 9.1994 14.5225 9.14554 14.4566 9.12181C14.363 9.0865 14.3887 9.04511 14.6663 8.79302C14.8394 8.63451 15.1032 8.45513 15.2468 8.39595C15.3937 8.33589 15.5499 8.26472 15.6012 8.23373C15.6964 8.17716 15.6742 8.01577 15.561 7.95294C15.5072 7.92248 15.5325 7.87948 15.6472 7.8039C15.7367 7.74543 15.8552 7.68433 15.9124 7.669C16.0073 7.64359 16.0208 7.58303 15.9608 7.44386C15.9464 7.40976 16.0319 7.32992 16.154 7.26268C16.6041 7.01961 16.6275 6.99606 16.6023 6.82341C16.5893 6.73547 16.6192 6.61185 16.6709 6.5497C17.3886 5.67077 17.6967 5.36222 17.9656 5.25394C18.2659 5.13208 18.425 4.94108 18.331 4.81272C18.2784 4.74057 18.4645 4.45434 18.5839 4.42236C18.6133 4.41447 18.7131 4.29631 18.8004 4.16424C19.1129 3.69578 19.8074 2.82824 19.8859 2.80721C20.0592 2.76078 19.9105 2.61776 19.5482 2.48195C19.2501 2.3703 19.1583 2.30866 19.1335 2.20316C19.1056 2.07952 19.0863 2.07263 18.909 2.13048C18.7591 2.17926 18.6556 2.1656 18.4476 2.06952C17.5219 1.63611 15.0025 0.905172 12.5915 0.36946C12.1628 0.273845 11.7681 0.16742 11.7189 0.134037C11.6696 0.100653 11.5567 0.091231 11.4684 0.114887C11.3703 0.141171 11.2478 0.122234 11.1556 0.0658578C10.922 -0.0734017 10.5508 0.0191645 10.4774 0.235515Z" fill="#FFFFFF"></path>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4"></div>
            </div>
            <div class="happy-mother wow fadeInUp" data-wow-delay=".3s">
                <img src="<?php echo esc_url($happy_mother_image); ?>" alt="img" />
                <div class="shape"><img src="<?php echo esc_url($happy_mother_shape_image); ?>" alt="img" /></div>
            </div>
        </section>
        <?php if (\Elementor\Plugin::$instance->editor->is_edit_mode()) : ?>
            <script>
                (function ($) {
                    "use strict";

                    const widgetSelector = "#<?php echo esc_js($widget_id); ?>";

                    const initProgram3Slider = function ($scope) {
                        if (typeof Swiper === "undefined") {
                            return;
                        }

                        const $widget = $scope && $scope.length ? $scope.find(widgetSelector) : $(widgetSelector);
                        if (!$widget.length) {
                            return;
                        }

                        $widget.each(function () {
                            const sliderEl = this.querySelector(".program-slider-3");
                            if (!sliderEl) {
                                return;
                            }

                            if (sliderEl.swiper) {
                                sliderEl.swiper.destroy(true, true);
                            }

                            const nextEl = this.querySelector(".array-next");
                            const prevEl = this.querySelector(".array-prev");

                            new Swiper(sliderEl, {
                                spaceBetween: 30,
                                speed: 1300,
                                loop: true,
                                autoplay: {
                                    delay: 2000,
                                    disableOnInteraction: false
                                },
                                navigation: {
                                    nextEl: nextEl,
                                    prevEl: prevEl
                                },
                                breakpoints: {
                                    1399: { slidesPerView: 3 },
                                    1199: { slidesPerView: 2 },
                                    991: { slidesPerView: 2.6 },
                                    767: { slidesPerView: 2 },
                                    575: { slidesPerView: 1 },
                                    0: { slidesPerView: 1 }
                                }
                            });
                        });
                    };

                    $(window).on("elementor/frontend/init", function () {
                        elementorFrontend.hooks.addAction("frontend/element_ready/ft-program-3.default", initProgram3Slider);
                    });

                    $(function () {
                        initProgram3Slider($(document));
                    });
                })(jQuery);
            </script>
        <?php endif; ?>
<?php
    }
}
