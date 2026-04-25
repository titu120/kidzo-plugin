<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Core\Schemes\Typography;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_Program4_Widget extends \Elementor\Widget_Base
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
        return 'ft-program-4';
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
        return esc_html__('FT Program 4', 'ftelements');
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
            'program4_content_section',
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
                'default'     => esc_html__('Our Programs', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'       => esc_html__('Section Title', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('We Meet kids At Their Level <br> Regardless Of Their Age', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'posts_per_page',
            [
                'label'   => esc_html__('Courses Count', 'ftelements'),
                'type'    => Controls_Manager::NUMBER,
                'min'     => 1,
                'max'     => 12,
                'step'    => 1,
                'default' => 3,
            ]
        );

        $this->add_control(
            'title_word_count',
            [
                'label'   => esc_html__('Title Word Count', 'ftelements'),
                'type'    => Controls_Manager::NUMBER,
                'min'     => 1,
                'max'     => 20,
                'step'    => 1,
                'default' => 4,
            ]
        );

        $this->add_control(
            'description_word_count',
            [
                'label'   => esc_html__('Description Word Count', 'ftelements'),
                'type'    => Controls_Manager::NUMBER,
                'min'     => 1,
                'max'     => 40,
                'step'    => 1,
                'default' => 12,
            ]
        );

        $this->add_control(
            'fallback_card_image',
            [
                'label'   => esc_html__('Fallback Card Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/program/01.jpg',
                ],
            ]
        );

        $this->add_control(
            'top_shape_image',
            [
                'label'   => esc_html__('Top Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/section-top-shape.png',
                ],
            ]
        );

        $this->add_control(
            'bottom_shape_image',
            [
                'label'   => esc_html__('Bottom Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/section-bottom-shape.png',
                ],
            ]
        );

        $this->add_control(
            'mask_shape_image',
            [
                'label'   => esc_html__('Mask Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/program/mask.png',
                ],
            ]
        );

        $this->add_control(
            'pencil_shape_image',
            [
                'label'   => esc_html__('Pencil Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/program/pencil.png',
                ],
            ]
        );

        $this->add_control(
            'mask_shape_image_2',
            [
                'label'   => esc_html__('Mask Shape Image 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/program/mask-2.png',
                ],
            ]
        );

        $this->add_control(
            'compass_shape_image',
            [
                'label'   => esc_html__('Compass Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/program/compass.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program4_section_style',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'selector' => '{{WRAPPER}} .program-section-4',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program4_section_title_style',
            [
                'label' => esc_html__('Section Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'section_subtitle_typography',
                'selector' => '{{WRAPPER}} .program-section-4 .section-title .sec-sub',
            ]
        );

        $this->add_control(
            'section_subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-4 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'section_title_typography',
                'selector' => '{{WRAPPER}} .program-section-4 .section-title .sec_title',
            ]
        );

        $this->add_control(
            'section_title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-4 .section-title .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_title_spacing',
            [
                'label'      => esc_html__('Bottom Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 200],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4 .section-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program4_card_style',
            [
                'label' => esc_html__('Program Card', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'card_background',
                'selector' => '{{WRAPPER}} .program-section-4 .program-box-items-4',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'card_border',
                'selector' => '{{WRAPPER}} .program-section-4 .program-box-items-4',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label'      => esc_html__('Content Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_gap_bottom',
            [
                'label'      => esc_html__('Card Bottom Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program4_image_style',
            [
                'label' => esc_html__('Card Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'card_image_filter',
                'selector' => '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-image img',
            ]
        );

        $this->add_responsive_control(
            'card_image_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'vh'],
                'range'      => [
                    'px' => ['min' => 100, 'max' => 700],
                    'vh' => ['min' => 10, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-image img' => 'height: {{SIZE}}{{UNIT}}; object-fit: cover;',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_image_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 80, 'max' => 600],
                    '%'  => ['min' => 20, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_image_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program4_card_content_style',
            [
                'label' => esc_html__('Card Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'card_title_typography',
                'selector' => '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-content h3, {{WRAPPER}} .program-section-4 .program-box-items-4 .program-content h3 a',
            ]
        );

        $this->add_control(
            'card_title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-content h3, {{WRAPPER}} .program-section-4 .program-box-items-4 .program-content h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'card_title_hover_color',
            [
                'label'     => esc_html__('Title Hover Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-content h3 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'card_label_typography',
                'selector' => '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-content span',
            ]
        );

        $this->add_control(
            'card_label_color',
            [
                'label'     => esc_html__('Label Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'card_description_typography',
                'selector' => '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-content p',
            ]
        );

        $this->add_control(
            'card_description_color',
            [
                'label'     => esc_html__('Description Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_content_item_spacing',
            [
                'label'      => esc_html__('Content Item Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 60],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .program-content > *:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'program4_arrow_style',
            [
                'label' => esc_html__('Arrow Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'arrow_icon_size',
            [
                'label'      => esc_html__('Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 10, 'max' => 60],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .arrow-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'arrow_button_size',
            [
                'label'      => esc_html__('Button Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => ['min' => 20, 'max' => 120],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .arrow-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; display: inline-flex; align-items: center; justify-content: center;',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'arrow_border',
                'selector' => '{{WRAPPER}} .program-section-4 .program-box-items-4 .arrow-icon',
            ]
        );

        $this->add_responsive_control(
            'arrow_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .arrow-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('arrow_color_tabs');

        $this->start_controls_tab(
            'arrow_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'arrow_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .arrow-icon, {{WRAPPER}} .program-section-4 .program-box-items-4 .arrow-icon i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'arrow_background',
                'selector' => '{{WRAPPER}} .program-section-4 .program-box-items-4 .arrow-icon',
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
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-section-4 .program-box-items-4 .arrow-icon:hover, {{WRAPPER}} .program-section-4 .program-box-items-4 .arrow-icon:hover i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'arrow_hover_background',
                'selector' => '{{WRAPPER}} .program-section-4 .program-box-items-4 .arrow-icon:hover',
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

        $section_subtitle = !empty($settings['section_subtitle']) ? $settings['section_subtitle'] : __('Our Programs', 'ftelements');
        $section_title = !empty($settings['section_title']) ? $settings['section_title'] : __('We Meet kids At Their Level <br> Regardless Of Their Age', 'ftelements');
        $posts_per_page = !empty($settings['posts_per_page']) ? (int) $settings['posts_per_page'] : 3;
        $title_word_count = !empty($settings['title_word_count']) ? (int) $settings['title_word_count'] : 4;
        $description_word_count = !empty($settings['description_word_count']) ? (int) $settings['description_word_count'] : 12;

        $fallback_card_image = !empty($settings['fallback_card_image']['url']) ? $settings['fallback_card_image']['url'] : ($theme_uri . '/assets/img/program/01.jpg');
        $top_shape_image = !empty($settings['top_shape_image']['url']) ? $settings['top_shape_image']['url'] : ($theme_uri . '/assets/img/section-top-shape.png');
        $bottom_shape_image = !empty($settings['bottom_shape_image']['url']) ? $settings['bottom_shape_image']['url'] : ($theme_uri . '/assets/img/section-bottom-shape.png');
        $mask_shape_image = !empty($settings['mask_shape_image']['url']) ? $settings['mask_shape_image']['url'] : ($theme_uri . '/assets/img/program/mask.png');
        $pencil_shape_image = !empty($settings['pencil_shape_image']['url']) ? $settings['pencil_shape_image']['url'] : ($theme_uri . '/assets/img/program/pencil.png');
        $mask_shape_image_2 = !empty($settings['mask_shape_image_2']['url']) ? $settings['mask_shape_image_2']['url'] : ($theme_uri . '/assets/img/program/mask-2.png');
        $compass_shape_image = !empty($settings['compass_shape_image']['url']) ? $settings['compass_shape_image']['url'] : ($theme_uri . '/assets/img/program/compass.png');

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
                    'image'       => get_the_post_thumbnail_url($course_id, 'large') ?: $fallback_card_image,
                ];
            }
            wp_reset_postdata();
        }

        if (empty($programs)) {
            $programs = [
                [
                    'title'       => __('Kindergarten', 'ftelements'),
                    'url'         => '#',
                    'description' => __('No Tutor LMS courses found. Please add courses to show them here.', 'ftelements'),
                    'label'       => __('4-5 Years', 'ftelements'),
                    'image'       => $fallback_card_image,
                ],
            ];
        }

        ?>

        <section class="program-section-4 section-padding section-bg-2 fix">
            <div class="top-shape">
                <img src="<?php echo esc_url($top_shape_image); ?>" alt="shape-img">
            </div>
            <div class="bottom-shape">
                <img src="<?php echo esc_url($bottom_shape_image); ?>" alt="shape-img">
            </div>
            <div class="mask-shape float-bob-x">
                <img src="<?php echo esc_url($mask_shape_image); ?>" alt="shape-img">
            </div>
            <div class="pencil-shape">
                <img src="<?php echo esc_url($pencil_shape_image); ?>" alt="shape-img">
            </div>
            <div class="mask-shape-2">
                <img src="<?php echo esc_url($mask_shape_image_2); ?>" alt="shape-img">
            </div>
            <div class="compass-shape">
                <img src="<?php echo esc_url($compass_shape_image); ?>" alt="shape-img">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($section_subtitle); ?></span>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                        <?php echo wp_kses($section_title, ['br' => []]); ?>
                    </h2>
                </div>
                <div class="row">
                    <?php foreach ($programs as $index => $program) :
                        $delay = number_format(0.3 + ($index * 0.2), 1);
                        $program_bg_class = $index > 0 ? ' bg-' . ($index + 1) : '';
                        $content_class = $index === 2 ? ' style-2' : '';
                        $arrow_class = $index === 1 ? ' color-2' : '';
                        ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                            <div class="program-box-items-4">
                                <div class="program-bg<?php echo esc_attr($program_bg_class); ?>"></div>
                                <div class="program-image">
                                    <img src="<?php echo esc_url($program['image']); ?>" alt="<?php echo esc_attr($program['title']); ?>">
                                </div>
                                <div class="program-content text-center<?php echo esc_attr($content_class); ?>">
                                    <h3>
                                        <a href="<?php echo esc_url($program['url']); ?>"><?php echo esc_html($program['title']); ?></a>
                                    </h3>
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