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

class FT_Team_1_Widget extends \Elementor\Widget_Base
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
        return 'ft-team-1';
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
        return esc_html__('FT Team 1', 'ftelements');
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
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'name',
            [
                'label' => esc_html__('Name', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Shikhon Islam', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'designation',
            [
                'label' => esc_html__('Designation', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Co founder', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'image',
            [
                'label' => esc_html__('Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'image_hover',
            [
                'label' => esc_html__('Hover Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'link',
            [
                'label' => esc_html__('Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $repeater->add_control(
            'social_icons_heading',
            [
                'label' => esc_html__('Social Icons', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $repeater->add_control(
            'facebook_link',
            [
                'label' => esc_html__('Facebook Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://facebook.com', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'twitter_link',
            [
                'label' => esc_html__('Twitter Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://twitter.com', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'vimeo_link',
            [
                'label' => esc_html__('Vimeo Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://vimeo.com', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'pinterest_link',
            [
                'label' => esc_html__('Pinterest Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://pinterest.com', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'linkedin_link',
            [
                'label' => esc_html__('LinkedIn (Bottom Icon) Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://linkedin.com', 'ftelements'),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'team_list',
            [
                'label' => esc_html__('Team List', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'name' => esc_html__('Shikhon Islam', 'ftelements'),
                        'designation' => esc_html__('Co founder', 'ftelements'),
                    ],
                    [
                        'name' => esc_html__('Kathryn Murphy', 'ftelements'),
                        'designation' => esc_html__('Co founder', 'ftelements'),
                    ],
                    [
                        'name' => esc_html__('Ralph Edwards', 'ftelements'),
                        'designation' => esc_html__('Co founder', 'ftelements'),
                    ],
                    [
                        'name' => esc_html__('Annette Black', 'ftelements'),
                        'designation' => esc_html__('Co founder', 'ftelements'),
                    ],
                    [
                        'name' => esc_html__('Miller Endrew', 'ftelements'),
                        'designation' => esc_html__('Co founder', 'ftelements'),
                    ],
                    [
                        'name' => esc_html__('Cody Fisher', 'ftelements'),
                        'designation' => esc_html__('Co founder', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ name }}}',
            ]
        );

        $this->add_control(
            'show_pagination',
            [
                'label' => esc_html__('Show Pagination', 'ftelements'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'ftelements'),
                'label_off' => esc_html__('Hide', 'ftelements'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'posts_per_page',
            [
                'label' => esc_html__('Posts Per Page', 'ftelements'),
                'type' => Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 50,
                'step' => 1,
                'default' => 6,
                'condition' => [
                    'show_pagination' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

        // Style Section
        $this->start_controls_section(
            'section_style',
            [
                'label' => esc_html__('Section Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => esc_html__('Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .team-section-6',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'item_style',
            [
                'label' => esc_html__('Item Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'item_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'item_border',
                'selector' => '{{WRAPPER}} .team-box-item-3',
            ]
        );

        $this->add_responsive_control(
            'item_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'image_style',
            [
                'label' => esc_html__('Image Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'image_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .team-box-item-3 .thumb' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'image_css_filters',
                'selector' => '{{WRAPPER}} .team-box-item-3 .thumb img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'social_style',
            [
                'label' => esc_html__('Social Icon Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('social_tabs');

        $this->start_controls_tab(
            'social_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'social_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .thumb .social-icon a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .thumb .social-icon a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'social_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'social_hover_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .thumb .social-icon a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_hover_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .thumb .social-icon a:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'social_size',
            [
                'label' => esc_html__('Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .thumb .social-icon a' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'social_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .thumb .social-icon a i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'content_style',
            [
                'label' => esc_html__('Content Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'content_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .content' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'title_heading',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .team-box-item-3 .content .title, {{WRAPPER}} .team-box-item-3 .content .title a',
            ]
        );

        $this->start_controls_tabs('title_color_tabs');

        $this->start_controls_tab(
            'title_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .content .title, {{WRAPPER}} .team-box-item-3 .content .title a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'title_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'title_hover_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .content .title a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .content .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'designation_heading',
            [
                'label' => esc_html__('Designation', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'designation_typography',
                'selector' => '{{WRAPPER}} .team-box-item-3 .content p',
            ]
        );

        $this->add_control(
            'designation_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'designation_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'linkedin_heading',
            [
                'label' => esc_html__('LinkedIn Icon', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'linkedin_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .content .icon i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'linkedin_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .content .icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'linkedin_size',
            [
                'label' => esc_html__('Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-box-item-3 .content .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'pagination_style',
            [
                'label' => esc_html__('Pagination Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'show_pagination' => 'yes',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'pagination_typography',
                'selector' => '{{WRAPPER}} .page-nav-wrap ul li a',
            ]
        );

        $this->start_controls_tabs('pagination_color_tabs');

        $this->start_controls_tab(
            'pagination_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'pagination_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page-nav-wrap ul li a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'pagination_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page-nav-wrap ul li a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'pagination_border',
                'selector' => '{{WRAPPER}} .page-nav-wrap ul li a',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'pagination_hover',
            [
                'label' => esc_html__('Hover / Active', 'ftelements'),
            ]
        );

        $this->add_control(
            'pagination_hover_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page-nav-wrap ul li a:hover, {{WRAPPER}} .page-nav-wrap ul li.active a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'pagination_hover_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page-nav-wrap ul li a:hover, {{WRAPPER}} .page-nav-wrap ul li.active a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'pagination_hover_border_color',
            [
                'label' => esc_html__('Border Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page-nav-wrap ul li a:hover, {{WRAPPER}} .page-nav-wrap ul li.active a' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'pagination_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .page-nav-wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

        if (empty($settings['team_list'])) {
            return;
        }
        ?>

        <section class="team-section-6 section-padding fix">
            <div class="container">
                <div class="row g-4">
                    <?php
                    $all_items = $settings['team_list'];
                    $total_items = count($all_items);
                    $ppp = !empty($settings['posts_per_page']) ? (int) $settings['posts_per_page'] : 6;
                    $show_pagination = $settings['show_pagination'] === 'yes';

                    $current_page = max(1, get_query_var('paged'), get_query_var('page'), (isset($_GET['paged']) ? (int) $_GET['paged'] : 1));
                    $total_pages = ceil($total_items / $ppp);

                    if ($show_pagination) {
                        $offset = ($current_page - 1) * $ppp;
                        $items = array_slice($all_items, $offset, $ppp);
                    } else {
                        $items = $all_items;
                    }

                    $delay = 0.3;
                    foreach ($items as $item):
                        $image_url = !empty($item['image']['url']) ? $item['image']['url'] : '';
                        $image_hover_url = !empty($item['image_hover']['url']) ? $item['image_hover']['url'] : $image_url;
                        $link_url = !empty($item['link']['url']) ? $item['link']['url'] : '#';
                        $linkedin_url = !empty($item['linkedin_link']['url']) ? $item['linkedin_link']['url'] : '#';

                        $target = $item['link']['is_external'] ? ' target="_blank"' : '';
                        $nofollow = $item['link']['nofollow'] ? ' rel="nofollow"' : '';
                        ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                            <div class="team-box-item-3 style-2">
                                <div class="thumb">
                                    <?php if ($image_url): ?>
                                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($item['name']); ?>">
                                    <?php endif; ?>
                                    <?php if ($image_hover_url): ?>
                                        <img src="<?php echo esc_url($image_hover_url); ?>"
                                            alt="<?php echo esc_attr($item['name']); ?>">
                                    <?php endif; ?>

                                    <div class="social-icon d-flex align-items-center">
                                        <?php if (!empty($item['facebook_link']['url'])): ?>
                                            <a href="<?php echo esc_url($item['facebook_link']['url']); ?>" <?php echo $item['facebook_link']['is_external'] ? 'target="_blank"' : ''; ?>><i
                                                    class="fab fa-facebook-f"></i></a>
                                        <?php endif; ?>
                                        <?php if (!empty($item['twitter_link']['url'])): ?>
                                            <a href="<?php echo esc_url($item['twitter_link']['url']); ?>" <?php echo $item['twitter_link']['is_external'] ? 'target="_blank"' : ''; ?>><i
                                                    class="fab fa-twitter"></i></a>
                                        <?php endif; ?>
                                        <?php if (!empty($item['vimeo_link']['url'])): ?>
                                            <a href="<?php echo esc_url($item['vimeo_link']['url']); ?>" <?php echo $item['vimeo_link']['is_external'] ? 'target="_blank"' : ''; ?>><i
                                                    class="fab fa-vimeo-v"></i></a>
                                        <?php endif; ?>
                                        <?php if (!empty($item['pinterest_link']['url'])): ?>
                                            <a href="<?php echo esc_url($item['pinterest_link']['url']); ?>" <?php echo $item['pinterest_link']['is_external'] ? 'target="_blank"' : ''; ?>><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="content">
                                    <h2 class="title">
                                        <a href="<?php echo esc_url($link_url); ?>" <?php echo $target . $nofollow; ?>><?php echo esc_html($item['name']); ?></a>
                                    </h2>
                                    <p>
                                        <?php echo esc_html($item['designation']); ?>
                                    </p>
                                    <?php if (!empty($item['linkedin_link']['url'])): ?>
                                        <a href="<?php echo esc_url($linkedin_url); ?>" class="icon" <?php echo $item['linkedin_link']['is_external'] ? 'target="_blank"' : ''; ?>>
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $delay += 0.2;
                        if ($delay > 0.7)
                            $delay = 0.3; // Reset delay for row pattern if needed
                    endforeach; ?>
                </div>

                <?php if ($show_pagination && $total_items > $ppp): ?>
                    <div class="page-nav-wrap text-center">
                        <ul>
                            <?php if ($current_page > 1): ?>
                                <li><a class="page-numbers" href="<?php echo esc_url(add_query_arg('paged', $current_page - 1)); ?>"><i
                                            class="fa-solid fa-arrow-up-left"></i></a></li>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <li class="<?php echo ($i == $current_page) ? 'active' : ''; ?>">
                                    <a class="page-numbers" href="<?php echo esc_url(add_query_arg('paged', $i)); ?>">
                                        <?php echo sprintf('%02d', $i); ?>
                                    </a>
                                </li>
                            <?php endfor; ?>

                            <?php if ($current_page < $total_pages): ?>
                                <li><a class="page-numbers" href="<?php echo esc_url(add_query_arg('paged', $current_page + 1)); ?>"><i
                                            class="fa-solid fa-arrow-up-right"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </section>










        <?php
    }
} ?>