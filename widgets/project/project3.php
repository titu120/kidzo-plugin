<?php

use Elementor\Group_Control_Css_Filter;
use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_Project_3_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'ft-project-3';
    }

    public function get_title()
    {
        return esc_html__('FT Project 3', 'ftelements');
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
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'image',
            [
                'label' => esc_html__('Choose Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'tag',
            [
                'label' => esc_html__('Tag', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__('Giving', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'tag_link',
            [
                'label' => esc_html__('Tag Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'rows' => 3,
                'default' => esc_html__('Nourishing families, ending hunger daily', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'title_link',
            [
                'label' => esc_html__('Title Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
            ]
        );

        $this->add_control(
            'items',
            [
                'label' => esc_html__('Project Items', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'tag' => esc_html__('Giving', 'ftelements'),
                        'title' => esc_html__('Nourishing families, ending hunger daily', 'ftelements'),
                    ],
                    [
                        'tag' => esc_html__('Medical', 'ftelements'),
                        'title' => esc_html__('Caring hearts, lifesaving medical support', 'ftelements'),
                    ],
                    [
                        'tag' => esc_html__('Shelter', 'ftelements'),
                        'title' => esc_html__('Safe homes, brighter futures together', 'ftelements'),
                    ],
                    [
                        'tag' => esc_html__('Medical', 'ftelements'),
                        'title' => esc_html__('Providing are for everyone always needs', 'ftelements'),
                    ],
                    [
                        'tag' => esc_html__('Hope', 'ftelements'),
                        'title' => esc_html__('Spreading hope, lighting every life', 'ftelements'),
                    ],
                    [
                        'tag' => esc_html__('Shelter', 'ftelements'),
                        'title' => esc_html__('Providing shelter, protecting families always', 'ftelements'),
                    ],
                    [
                        'tag' => esc_html__('Giving', 'ftelements'),
                        'title' => esc_html__('Nourishing families, ending hunger daily', 'ftelements'),
                    ],
                    [
                        'tag' => esc_html__('Medical', 'ftelements'),
                        'title' => esc_html__('Caring hearts, lifesaving medical support', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ tag }}}',
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
                'default' => 8,
                'condition' => [
                    'show_pagination' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

        // Section Style
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
                    '{{WRAPPER}} .project-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .project-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => esc_html__('Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .project-section',
            ]
        );

        $this->end_controls_section();

        // Item Style
        $this->start_controls_section(
            'item_style',
            [
                'label' => esc_html__('Item Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'item_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .project-box-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_background',
                'label' => esc_html__('Background', 'ftelements'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .project-box-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'item_border',
                'label' => esc_html__('Border', 'ftelements'),
                'selector' => '{{WRAPPER}} .project-box-items',
            ]
        );

        $this->add_responsive_control(
            'item_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .project-box-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Image Style
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
                    '{{WRAPPER}} .project-box-items .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .project-box-items .thumb' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'image_filters',
                'selector' => '{{WRAPPER}} .project-box-items .thumb img',
            ]
        );

        $this->end_controls_section();

        // Tag Style
        $this->start_controls_section(
            'tag_style',
            [
                'label' => esc_html__('Tag Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tag_typography',
                'selector' => '{{WRAPPER}} .project-box-items .content .tag-box',
            ]
        );

        $this->start_controls_tabs('tag_tabs');

        $this->start_controls_tab('tag_normal', ['label' => esc_html__('Normal', 'ftelements')]);

        $this->add_control(
            'tag_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .content .tag-box' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tag_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .content .tag-box' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab('tag_hover', ['label' => esc_html__('Hover', 'ftelements')]);

        $this->add_control(
            'tag_hover_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .content .tag-box:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tag_hover_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .content .tag-box:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'tag_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .content .tag-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tag_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .content .tag-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Title Style
        $this->start_controls_section(
            'title_style',
            [
                'label' => esc_html__('Title Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .project-box-items .content .title, {{WRAPPER}} .project-box-items .content .title a',
            ]
        );

        $this->start_controls_tabs('title_tabs');

        $this->start_controls_tab('title_normal', ['label' => esc_html__('Normal', 'ftelements')]);

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .content .title a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab('title_hover', ['label' => esc_html__('Hover', 'ftelements')]);

        $this->add_control(
            'title_hover_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .content .title a:hover' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .project-box-items .content .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Icon Style
        $this->start_controls_section(
            'icon_style',
            [
                'label' => esc_html__('Icon Style', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_size',
            [
                'label' => esc_html__('Icon Box Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => ['px' => ['min' => 10, 'max' => 150]],
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .thumb .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_font_size',
            [
                'label' => esc_html__('Icon Font Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => ['px' => ['min' => 10, 'max' => 100]],
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .thumb .icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('icon_tabs');

        $this->start_controls_tab('icon_normal', ['label' => esc_html__('Normal', 'ftelements')]);

        $this->add_control(
            'icon_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .thumb .icon i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'icon_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .thumb .icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab('icon_hover', ['label' => esc_html__('Hover', 'ftelements')]);

        $this->add_control(
            'icon_hover_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .thumb .icon:hover i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'icon_hover_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .thumb .icon:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'icon_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .project-box-items .thumb .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Pagination Style
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
                'selector' => '{{WRAPPER}} .page-numbers',
            ]
        );

        $this->start_controls_tabs('pagination_tabs');

        $this->start_controls_tab('pagination_normal', ['label' => esc_html__('Normal', 'ftelements')]);

        $this->add_control(
            'pagination_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page-numbers' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'pagination_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page-numbers' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab('pagination_hover_active', ['label' => esc_html__('Hover / Active', 'ftelements')]);

        $this->add_control(
            'pagination_active_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page-numbers:hover, {{WRAPPER}} .page-nav-wrap ul li.active a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'pagination_active_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page-numbers:hover, {{WRAPPER}} .page-nav-wrap ul li.active a' => 'background-color: {{VALUE}};',
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

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        if (empty($settings['items'])) {
            return;
        }

        $all_items = $settings['items'];
        $total_items = count($all_items);
        $ppp = !empty($settings['posts_per_page']) ? (int) $settings['posts_per_page'] : 8;
        $show_pagination = $settings['show_pagination'] === 'yes';

        $current_page = max(1, get_query_var('paged'), get_query_var('page'), (isset($_GET['paged']) ? (int) $_GET['paged'] : 1));
        $total_pages = ceil($total_items / $ppp);

        if ($show_pagination) {
            $offset = ($current_page - 1) * $ppp;
            $items = array_slice($all_items, $offset, $ppp);
        } else {
            $items = $all_items;
        }
        ?>

                <section class="project-section project-section-4 section-padding fix">
                    <div class="container">
                        <div class="row g-4">
                            <?php foreach ($items as $index => $item):
                                $tag_url = !empty($item['tag_link']['url']) ? $item['tag_link']['url'] : '#';
                                $title_url = !empty($item['title_link']['url']) ? $item['title_link']['url'] : '#';

                                $image_id = $item['image']['id'];
                                $image_url = !empty($item['image']['url']) ? $item['image']['url'] : Utils::get_placeholder_image_src();
                                $image_alt = !empty($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : 'img';

                                if (empty($image_alt)) {
                                    $image_alt = 'img';
                                }
                                $wow_delay = ($index % 4 + 1) * 0.2;
                                ?>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($wow_delay); ?>s">
                                        <div class="project-box-items style-2">
                                            <div class="thumb">
                                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                                <a href="<?php echo esc_url($title_url); ?>" class="icon">
                                                    <i class="fa-regular fa-arrow-up-right"></i>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <?php if (!empty($item['tag'])): ?>
                                                        <a href="<?php echo esc_url($tag_url); ?>" class="tag-box">
                                                            <?php echo esc_html($item['tag']); ?>
                                                        </a>
                                                <?php endif; ?>

                                                <?php if (!empty($item['title'])): ?>
                                                        <h2 class="title">
                                                            <a href="<?php echo esc_url($title_url); ?>">
                                                                <?php echo wp_kses_post($item['title']); ?>
                                                            </a>
                                                        </h2>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                            <?php endforeach; ?>
                        </div>

                        <?php if ($show_pagination && $total_items > $ppp): ?>
                                <div class="page-nav-wrap text-center">
                                    <ul>
                                        <?php if ($current_page > 1): ?>
                                                <li><a class="page-numbers" href="<?php echo esc_url(add_query_arg('paged', $current_page - 1)); ?>"><i class="fa-solid fa-arrow-up-left"></i></a></li>
                                        <?php endif; ?>

                                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                                <li class="<?php echo ($i == $current_page) ? 'active' : ''; ?>">
                                                    <a class="page-numbers" href="<?php echo esc_url(add_query_arg('paged', $i)); ?>">
                                                        <?php echo sprintf('%02d', $i); ?>
                                                    </a>
                                                </li>
                                        <?php endfor; ?>

                                        <?php if ($current_page < $total_pages): ?>
                                                <li><a class="page-numbers" href="<?php echo esc_url(add_query_arg('paged', $current_page + 1)); ?>"><i class="fa-solid fa-arrow-up-right"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                        <?php endif; ?>
                    </div>
                </section>

                <?php
    }
}