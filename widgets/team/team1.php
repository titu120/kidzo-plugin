<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Typography;
use Elementor\Utils;

defined('ABSPATH') || die();

class FT_Team1_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'ft-team-1';
    }

    public function get_title()
    {
        return esc_html__('FT Team 1', 'ftelements');
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
            'team1_section_content',
            [
                'label' => esc_html__('Section Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our Expert Teacher\'s', 'ftelements'),
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our Expert Instructors', 'ftelements'),
            ]
        );

        $this->add_control(
            'section_button_text',
            [
                'label' => esc_html__('Button Text', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('view all expert', 'ftelements'),
            ]
        );

        $this->add_control(
            'section_button_link',
            [
                'label' => esc_html__('Button Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://your-link.com',
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->add_control(
            'pencil_image',
            [
                'label' => esc_html__('Top Pencil Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

        for ($i = 1; $i <= 4; $i++) {
            $shape_1_label = esc_html__('Main Decoration Image', 'ftelements');
            $shape_1_desc = esc_html__('Decorative image used on this card.', 'ftelements');
            $shape_2_label = esc_html__('Secondary Decoration Image', 'ftelements');
            $shape_2_desc = esc_html__('Second decorative image used on this card.', 'ftelements');

            if (1 === $i) {
                $shape_1_label = esc_html__('Team Shape Image', 'ftelements');
                $shape_1_desc = esc_html__('Image for .team-shape in item 1 (normal + hover).', 'ftelements');
                $shape_2_label = esc_html__('Unused For Item 1', 'ftelements');
                $shape_2_desc = esc_html__('Item 1 does not use this field in frontend.', 'ftelements');
            } elseif (2 === $i) {
                $shape_1_label = esc_html__('Star Image', 'ftelements');
                $shape_1_desc = esc_html__('Image for .star in item 2 (normal + hover).', 'ftelements');
                $shape_2_label = esc_html__('Star2 Image', 'ftelements');
                $shape_2_desc = esc_html__('Image for .star2 in item 2 (normal + hover).', 'ftelements');
            } elseif (3 === $i) {
                $shape_1_label = esc_html__('Shape-3 Image', 'ftelements');
                $shape_1_desc = esc_html__('Image for .shape-3 in item 3 (normal + hover).', 'ftelements');
                $shape_2_label = esc_html__('Shape-4 Image', 'ftelements');
                $shape_2_desc = esc_html__('Image for .shape-4 in item 3 (normal + hover).', 'ftelements');
            } elseif (4 === $i) {
                $shape_1_label = esc_html__('Shape-5 Image', 'ftelements');
                $shape_1_desc = esc_html__('Image for .shape-5 in item 4 (normal + hover).', 'ftelements');
                $shape_2_label = esc_html__('Unused For Item 4', 'ftelements');
                $shape_2_desc = esc_html__('Item 4 does not use this field in frontend.', 'ftelements');
            }

            $this->start_controls_section(
                'team_item_' . $i,
                [
                    'label' => sprintf(esc_html__('Team Item %d', 'ftelements'), $i),
                    'tab' => Controls_Manager::TAB_CONTENT,
                ]
            );

            $this->add_control(
                'member_name_small_' . $i,
                [
                    'label' => esc_html__('Small Card Name', 'ftelements'),
                    'type' => Controls_Manager::TEXT,
                    'default' => esc_html__('Team Member', 'ftelements'),
                ]
            );

            $this->add_control(
                'member_name_hover_' . $i,
                [
                    'label' => esc_html__('Hover Card Name', 'ftelements'),
                    'type' => Controls_Manager::TEXT,
                    'default' => esc_html__('Team Member', 'ftelements'),
                ]
            );

            $this->add_control(
                'member_designation_' . $i,
                [
                    'label' => esc_html__('Designation', 'ftelements'),
                    'type' => Controls_Manager::TEXT,
                    'default' => esc_html__('KG Teacher', 'ftelements'),
                ]
            );

            $this->add_control(
                'member_link_' . $i,
                [
                    'label' => esc_html__('Profile Link', 'ftelements'),
                    'type' => Controls_Manager::URL,
                    'placeholder' => 'https://your-link.com',
                    'default' => [
                        'url' => '#',
                    ],
                ]
            );

            $this->add_control(
                'member_small_image_' . $i,
                [
                    'label' => esc_html__('Normal Card Person Image', 'ftelements'),
                    'type' => Controls_Manager::MEDIA,
                    'description' => esc_html__('Image shown before hover.', 'ftelements'),
                    'default' => [
                        'url' => Utils::get_placeholder_image_src(),
                    ],
                ]
            );

            $this->add_control(
                'member_hover_image_' . $i,
                [
                    'label' => esc_html__('Hover Card Person Image', 'ftelements'),
                    'type' => Controls_Manager::MEDIA,
                    'description' => esc_html__('Image shown when hover is active.', 'ftelements'),
                    'default' => [
                        'url' => Utils::get_placeholder_image_src(),
                    ],
                ]
            );

            $this->add_control(
                'member_shape_1_' . $i,
                [
                    'label' => $shape_1_label,
                    'type' => Controls_Manager::MEDIA,
                    'description' => $shape_1_desc,
                    'default' => [
                        'url' => Utils::get_placeholder_image_src(),
                    ],
                ]
            );

            $this->add_control(
                'member_shape_2_' . $i,
                [
                    'label' => $shape_2_label,
                    'type' => Controls_Manager::MEDIA,
                    'description' => $shape_2_desc,
                    'default' => [
                        'url' => Utils::get_placeholder_image_src(),
                    ],
                ]
            );

            $this->end_controls_section();
        }

        $this->start_controls_section(
            'team1_style_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .team-section-2 .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team1_style_title',
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
                    '{{WRAPPER}} .team-section-2 .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .team-section-2 .sec_title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team1_style_button',
            [
                'label' => esc_html__('Button', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .link-btn' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-section-2 .link-btn svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .link-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typography',
                'selector' => '{{WRAPPER}} .team-section-2 .link-btn',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'button_border',
                'selector' => '{{WRAPPER}} .team-section-2 .link-btn',
            ]
        );

        $this->add_responsive_control(
            'button_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .link-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .link-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .link-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team1_style_card',
            [
                'label' => esc_html__('Team Card', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'card_name_color',
            [
                'label' => esc_html__('Name Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .team-items .title a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .team-section-2 .team-hover-items .title a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'card_name_typography',
                'selector' => '{{WRAPPER}} .team-section-2 .team-items .title a, {{WRAPPER}} .team-section-2 .team-hover-items .title a',
            ]
        );

        $this->add_control(
            'card_designation_color',
            [
                'label' => esc_html__('Designation Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .team-hover-items span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'card_designation_typography',
                'selector' => '{{WRAPPER}} .team-section-2 .team-hover-items span',
            ]
        );

        $this->add_responsive_control(
            'card_content_alignment',
            [
                'label' => esc_html__('Content Alignment', 'ftelements'),
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
                    '{{WRAPPER}} .team-section-2 .team-items .content, {{WRAPPER}} .team-section-2 .team-hover-items .content' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label' => esc_html__('Card Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .team-items, {{WRAPPER}} .team-section-2 .team-hover-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'card_border',
                'selector' => '{{WRAPPER}} .team-section-2 .team-items, {{WRAPPER}} .team-section-2 .team-hover-items',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label' => esc_html__('Card Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .team-items, {{WRAPPER}} .team-section-2 .team-hover-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team1_style_images',
            [
                'label' => esc_html__('Images', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'member_image_width',
            [
                'label' => esc_html__('Member Image Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 800,
                    ],
                    '%' => [
                        'min' => 5,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .team-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'member_image_height',
            [
                'label' => esc_html__('Member Image Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 800,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .team-image img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'member_image_object_fit',
            [
                'label' => esc_html__('Image Object Fit', 'ftelements'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__('Default', 'ftelements'),
                    'cover' => esc_html__('Cover', 'ftelements'),
                    'contain' => esc_html__('Contain', 'ftelements'),
                    'fill' => esc_html__('Fill', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .team-image img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'member_image_border',
                'selector' => '{{WRAPPER}} .team-section-2 .team-image img',
            ]
        );

        $this->add_responsive_control(
            'member_image_border_radius',
            [
                'label' => esc_html__('Image Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-2 .team-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $allowed_inline_html = [
            'br' => [],
        ];

        $button_target = !empty($settings['section_button_link']['is_external']) ? ' target="_blank"' : '';
        $button_nofollow = !empty($settings['section_button_link']['nofollow']) ? ' rel="nofollow"' : '';
        $button_url = !empty($settings['section_button_link']['url']) ? $settings['section_button_link']['url'] : '#';
        $pencil_image = !empty($settings['pencil_image']['url']) ? $settings['pencil_image']['url'] : '';

        ?>
        <section class="team-section-2 fix section-padding">
            <div class="pencil float-bob-y">
                <img src="<?php echo esc_url($pencil_image); ?>" alt="img">
            </div>
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['section_subtitle']); ?></span>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                            <?php echo esc_html($settings['section_title']); ?>
                        </h2>
                    </div>
                    <a href="<?php echo esc_url($button_url); ?>" class="link-btn wow fadeInUp" <?php echo wp_kses_post($button_target . $button_nofollow); ?>>
                        <?php echo esc_html($settings['section_button_text']); ?>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_204_688)">
                                <path d="M16.4364 7.42645C16.3381 6.53058 16.1111 5.64906 15.775 4.81355C15.4542 4.01604 15.0635 3.2147 14.4018 2.64599C13.465 1.84079 12.4199 1.13412 11.2294 0.771891C9.98805 0.394204 8.62081 0.51004 7.36874 0.783878C5.5021 1.19211 3.96336 2.23558 2.80527 3.76456C1.39288 5.62929 0.236545 8.28518 0.598172 10.6699C0.78781 11.9205 1.26726 13.1271 1.99179 14.163C2.76089 15.2626 3.73904 15.7949 5.02222 16.131C7.53346 16.7889 10.4314 16.5146 12.6216 15.0521C13.8369 14.2406 14.71 13.0964 15.3634 11.8005C16.0615 10.4159 16.6099 9.00644 16.4364 7.42645ZM14.7019 8.36096C14.6605 9.52849 14.3146 10.6807 13.6228 11.7184C12.5681 13.3002 10.8624 14.4284 8.96139 14.6336C7.006 14.8447 4.44567 14.9001 3.18185 13.0564C2.70836 12.3656 2.43683 11.5338 2.27729 10.7169C2.08426 9.7283 2.17304 8.68568 2.53098 7.7444C2.90041 6.77301 3.32529 5.76642 3.8616 4.8754C4.52424 3.77453 5.49248 2.85274 6.77773 2.58897C8.10846 2.31586 9.52072 2.08802 10.871 2.43916C12.0328 2.74132 13.2039 3.49468 13.7832 4.57438C14.4227 5.76652 14.7476 7.07307 14.7019 8.36096ZM12.8134 7.28668C12.3338 7.00498 11.1316 6.02672 10.6938 5.68331C10.2754 5.35505 8.92606 4.02909 7.94461 4.30137C7.31734 4.47539 7.24243 5.06768 7.5162 5.58009C7.72349 5.96807 8.14725 6.32767 8.51998 6.55002C8.69144 6.65232 9.53287 7.22258 9.90244 7.37814C8.98737 7.37814 7.55325 7.52376 6.65363 7.69005C5.84097 7.84026 4.8261 8.01111 4.08951 8.4024C3.60604 8.65923 3.41041 9.50049 3.98015 9.79388C4.65542 10.1416 5.57681 9.8478 6.44825 9.6759C7.56635 9.45532 9.30013 9.2357 10.1672 9.19106C9.55928 9.47893 8.925 10.209 8.47987 10.7071C8.21347 11.0052 7.89633 11.4751 8.07655 11.887C8.22138 12.218 8.89863 12.5848 9.5062 12.1788C9.94188 11.8876 10.3163 11.5199 10.7157 11.1791C11.2752 10.7017 11.8471 10.238 12.3855 9.73626C12.6419 9.49732 12.9626 9.2046 13.182 8.92871C13.6803 8.30238 13.4522 7.66182 12.8134 7.28668Z" fill="#F39F5F" />
                            </g>
                            <defs>
                                <clipPath id="clip0_204_688">
                                    <rect width="17" height="17" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="team-wrapper-2">
                    <?php for ($i = 1; $i <= 4; $i++) :
                        $item_class = 'team-main-items wow fadeInUp';
                        if (1 === $i) {
                            $item_class .= ' active';
                        } elseif ($i > 1) {
                            $item_class .= ' bg-' . $i;
                        }
                        $item_link = !empty($settings['member_link_' . $i]['url']) ? $settings['member_link_' . $i]['url'] : '#';
                        $item_target = !empty($settings['member_link_' . $i]['is_external']) ? ' target="_blank"' : '';
                        $item_nofollow = !empty($settings['member_link_' . $i]['nofollow']) ? ' rel="nofollow"' : '';
                        $small_image = !empty($settings['member_small_image_' . $i]['url']) ? $settings['member_small_image_' . $i]['url'] : '';
                        $hover_image = !empty($settings['member_hover_image_' . $i]['url']) ? $settings['member_hover_image_' . $i]['url'] : '';
                        $shape_1 = !empty($settings['member_shape_1_' . $i]['url']) ? $settings['member_shape_1_' . $i]['url'] : '';
                        $shape_2 = !empty($settings['member_shape_2_' . $i]['url']) ? $settings['member_shape_2_' . $i]['url'] : '';
                        $delay = '.' . (2 * $i) . 's';
                        ?>
                        <div class="<?php echo esc_attr($item_class); ?>" data-wow-delay="<?php echo esc_attr($delay); ?>">
                            <div class="team-items">
                                <div class="content">
                                    <h3 class="title">
                                        <a href="<?php echo esc_url($item_link); ?>" <?php echo wp_kses_post($item_target . $item_nofollow); ?>><?php echo wp_kses($settings['member_name_small_' . $i], $allowed_inline_html); ?></a>
                                    </h3>
                                </div>
                                <?php if (1 === $i) : ?>
                                    <div class="team-image">
                                        <img src="<?php echo esc_url($small_image); ?>" alt="img" style="display:block;">
                                    </div>
                                    <?php if ($shape_1) : ?>
                                        <div class="team-shape">
                                            <img src="<?php echo esc_url($shape_1); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                <?php elseif (2 === $i) : ?>
                                    <?php if ($shape_1) : ?>
                                        <div class="star">
                                            <img src="<?php echo esc_url($shape_1); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($shape_2) : ?>
                                        <div class="star2">
                                            <img src="<?php echo esc_url($shape_2); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                    <div class="team-image">
                                        <img src="<?php echo esc_url($small_image); ?>" alt="img" style="display:block;">
                                    </div>
                                <?php elseif (3 === $i) : ?>
                                    <div class="team-image">
                                        <img src="<?php echo esc_url($small_image); ?>" alt="img" style="display:block;">
                                    </div>
                                    <?php if ($shape_1) : ?>
                                        <div class="shape-3">
                                            <img src="<?php echo esc_url($shape_1); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($shape_2) : ?>
                                        <div class="shape-4">
                                            <img src="<?php echo esc_url($shape_2); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                <?php elseif (4 === $i) : ?>
                                    <?php if ($shape_1) : ?>
                                        <div class="shape-5">
                                            <img src="<?php echo esc_url($shape_1); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                    <div class="team-image">
                                        <img src="<?php echo esc_url($small_image); ?>" alt="img" style="display:block;">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="team-hover-items">
                                <div class="content">
                                    <h3 class="title"><a href="<?php echo esc_url($item_link); ?>" <?php echo wp_kses_post($item_target . $item_nofollow); ?>><?php echo wp_kses($settings['member_name_hover_' . $i], $allowed_inline_html); ?></a></h3>
                                    <span><?php echo esc_html($settings['member_designation_' . $i]); ?></span>
                                </div>
                                <?php if (1 === $i) : ?>
                                    <?php if ($shape_1) : ?>
                                        <div class="team-shape">
                                            <img src="<?php echo esc_url($shape_1); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                    <div class="team-image">
                                        <img src="<?php echo esc_url($hover_image); ?>" alt="img" style="display:block;">
                                    </div>
                                <?php elseif (2 === $i) : ?>
                                    <div class="team-image">
                                        <img src="<?php echo esc_url($hover_image); ?>" alt="img" style="display:block;">
                                    </div>
                                    <?php if ($shape_1) : ?>
                                        <div class="star">
                                            <img src="<?php echo esc_url($shape_1); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($shape_2) : ?>
                                        <div class="star2">
                                            <img src="<?php echo esc_url($shape_2); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                <?php elseif (3 === $i) : ?>
                                    <div class="team-image">
                                        <img src="<?php echo esc_url($hover_image); ?>" alt="img" style="display:block;">
                                    </div>
                                    <?php if ($shape_1) : ?>
                                        <div class="shape-3">
                                            <img src="<?php echo esc_url($shape_1); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($shape_2) : ?>
                                        <div class="shape-4">
                                            <img src="<?php echo esc_url($shape_2); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                <?php elseif (4 === $i) : ?>
                                    <div class="team-image">
                                        <img src="<?php echo esc_url($hover_image); ?>" alt="img" style="display:block;">
                                    </div>
                                    <?php if ($shape_1) : ?>
                                        <div class="shape-5">
                                            <img src="<?php echo esc_url($shape_1); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>
<?php
    }
}
?>