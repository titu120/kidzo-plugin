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

class FT_Team5_Widget extends \Elementor\Widget_Base
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
        return 'ft-team5';
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
        return esc_html__('FT Team5', 'ftelements');
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
            'team5_content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'shape_image',
            [
                'label' => esc_html__('Card Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'member_image',
            [
                'label' => esc_html__('Member Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'member_name',
            [
                'label' => esc_html__('Name', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Kristin Watson', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'member_designation',
            [
                'label' => esc_html__('Designation', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Instructors', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'member_profile_link',
            [
                'label' => esc_html__('Profile Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://your-link.com',
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $repeater->add_control(
            'facebook_link',
            [
                'label' => esc_html__('Facebook Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://facebook.com/',
            ]
        );

        $repeater->add_control(
            'instagram_link',
            [
                'label' => esc_html__('Instagram Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://instagram.com/',
            ]
        );

        $repeater->add_control(
            'linkedin_link',
            [
                'label' => esc_html__('LinkedIn Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://linkedin.com/',
            ]
        );

        $this->add_control(
            'team_members',
            [
                'label' => esc_html__('Team Members', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => esc_html__('Kristin Watson', 'ftelements'),
                        'member_designation' => esc_html__('Instructors', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Leslie Alexander', 'ftelements'),
                        'member_designation' => esc_html__('Instructors', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Ronald Richards', 'ftelements'),
                        'member_designation' => esc_html__('Instructors', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Aria Sophia', 'ftelements'),
                        'member_designation' => esc_html__('Instructors', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Scarlett Audrey', 'ftelements'),
                        'member_designation' => esc_html__('Instructors', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Eleanor James', 'ftelements'),
                        'member_designation' => esc_html__('Instructors', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Lucas Oliver', 'ftelements'),
                        'member_designation' => esc_html__('Instructors', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Amelia Grace', 'ftelements'),
                        'member_designation' => esc_html__('Instructors', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ member_name }}}',
            ]
        );

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'member_thumbnail',
                'default' => 'full',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'show_pagination',
            [
                'label' => esc_html__('Show Pagination', 'ftelements'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'pagination_numbers',
            [
                'label' => esc_html__('Pagination Numbers', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => '01,02,03',
                'condition' => [
                    'show_pagination' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'pagination_prev_image',
            [
                'label' => esc_html__('Prev Arrow Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'show_pagination' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'pagination_next_image',
            [
                'label' => esc_html__('Next Arrow Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'show_pagination' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team5_section_style',
            [
                'label' => esc_html__('Card', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team5_card_background',
                'selector' => '{{WRAPPER}} .team-section-4 .team-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'team5_card_border',
                'selector' => '{{WRAPPER}} .team-section-4 .team-items',
            ]
        );

        $this->add_control(
            'team5_card_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'team5_card_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'team5_card_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team5_image_style',
            [
                'label' => esc_html__('Member Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'team5_image_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1000],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-image > img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'team5_image_height',
            [
                'label' => esc_html__('Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1000],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-image > img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'team5_image_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-image > img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'team5_image_css_filters',
                'selector' => '{{WRAPPER}} .team-section-4 .team-image > img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team5_shape_style',
            [
                'label' => esc_html__('Shape Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'team5_shape_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 1000],
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-image .shape-img img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'team5_shape_opacity',
            [
                'label' => esc_html__('Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-image .shape-img img' => 'opacity: calc({{SIZE}}/100);',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team5_name_style',
            [
                'label' => esc_html__('Name', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'team5_name_typography',
                'selector' => '{{WRAPPER}} .team-section-4 .team-content h2, {{WRAPPER}} .team-section-4 .team-content h2 a',
            ]
        );

        $this->add_control(
            'team5_name_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-content h2 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'team5_name_hover_color',
            [
                'label' => esc_html__('Hover Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-content h2 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'team5_name_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-content h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team5_designation_style',
            [
                'label' => esc_html__('Designation', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'team5_designation_typography',
                'selector' => '{{WRAPPER}} .team-section-4 .team-content p',
            ]
        );

        $this->add_control(
            'team5_designation_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'team5_designation_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team5_social_style',
            [
                'label' => esc_html__('Social Icons', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'team5_social_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .social-profile ul li a i, {{WRAPPER}} .team-section-4 .social-profile .plus-btn i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'team5_social_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .social-profile ul li a, {{WRAPPER}} .team-section-4 .social-profile .plus-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'team5_social_icon_hover_color',
            [
                'label' => esc_html__('Icon Hover Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .social-profile ul li a:hover, {{WRAPPER}} .team-section-4 .social-profile .plus-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team5_social_background',
                'selector' => '{{WRAPPER}} .team-section-4 .social-profile ul li a, {{WRAPPER}} .team-section-4 .social-profile .plus-btn',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'team5_social_border',
                'selector' => '{{WRAPPER}} .team-section-4 .social-profile ul li a, {{WRAPPER}} .team-section-4 .social-profile .plus-btn',
            ]
        );

        $this->add_responsive_control(
            'team5_social_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .social-profile ul li a, {{WRAPPER}} .team-section-4 .social-profile .plus-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team5_pagination_style',
            [
                'label' => esc_html__('Pagination', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'show_pagination' => 'yes',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'team5_pagination_typography',
                'selector' => '{{WRAPPER}} .team-section-4 .page-nav-wrap .page-numbers',
            ]
        );

        $this->add_control(
            'team5_pagination_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .page-nav-wrap .page-numbers' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'team5_pagination_active_color',
            [
                'label' => esc_html__('Active Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .page-nav-wrap li.active .page-numbers' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'team5_pagination_background',
                'selector' => '{{WRAPPER}} .team-section-4 .page-nav-wrap .page-numbers',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'team5_pagination_border',
                'selector' => '{{WRAPPER}} .team-section-4 .page-nav-wrap .page-numbers',
            ]
        );

        $this->add_responsive_control(
            'team5_pagination_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .page-nav-wrap .page-numbers' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'team5_pagination_spacing',
            [
                'label' => esc_html__('Item Spacing', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 60],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .page-nav-wrap ul' => 'gap: {{SIZE}}{{UNIT}};',
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
        $team_members = !empty($settings['team_members']) ? $settings['team_members'] : [];
        $pagination_numbers = !empty($settings['pagination_numbers']) ? array_filter(array_map('trim', explode(',', $settings['pagination_numbers']))) : [];
        $delay_steps = ['.2s', '.4s', '.6s', '.8s'];

        ?>
        <section class="team-section-4 fix section-padding">
            <div class="container">
                <div class="row g-4">
                    <?php foreach ($team_members as $index => $member) :
                        $delay = $delay_steps[$index % count($delay_steps)];
                        $profile_link = !empty($member['member_profile_link']['url']) ? $member['member_profile_link'] : ['url' => '#'];
                        $profile_target = !empty($profile_link['is_external']) ? ' target="_blank"' : '';
                        $profile_rel = !empty($profile_link['nofollow']) ? ' rel="nofollow"' : '';

                        $facebook_link = !empty($member['facebook_link']['url']) ? $member['facebook_link']['url'] : '';
                        $instagram_link = !empty($member['instagram_link']['url']) ? $member['instagram_link']['url'] : '';
                        $linkedin_link = !empty($member['linkedin_link']['url']) ? $member['linkedin_link']['url'] : '';
                    ?>
                        <div class="col-xl-3 col-lg-4 col-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                            <div class="team-items mt-0">
                                <div class="team-image">
                                    <?php if (!empty($settings['shape_image']['url'])) : ?>
                                        <div class="shape-img">
                                            <img src="<?php echo esc_url($settings['shape_image']['url']); ?>" alt="<?php echo esc_attr__('shape', 'ftelements'); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($member['member_image']['url'])) : ?>
                                        <?php
                                        $member_image_html = Group_Control_Image_Size::get_attachment_image_html($member, 'member_thumbnail', 'member_image');
                                        if (!empty($member_image_html)) {
                                            echo wp_kses_post($member_image_html);
                                        } else {
                                            ?>
                                            <img src="<?php echo esc_url($member['member_image']['url']); ?>" alt="<?php echo esc_attr($member['member_name']); ?>">
                                            <?php
                                        }
                                        ?>
                                    <?php endif; ?>
                                    <div class="social-profile">
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                        <ul>
                                            <?php if (!empty($facebook_link)) : ?>
                                                <li><a href="<?php echo esc_url($facebook_link); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($instagram_link)) : ?>
                                                <li><a href="<?php echo esc_url($instagram_link); ?>"><i class="fa-brands fa-instagram"></i></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($linkedin_link)) : ?>
                                                <li><a href="<?php echo esc_url($linkedin_link); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <?php if (!empty($member['member_name'])) : ?>
                                        <h2>
                                            <a href="<?php echo esc_url($profile_link['url']); ?>"<?php echo wp_kses_post($profile_target . $profile_rel); ?>><?php echo esc_html($member['member_name']); ?></a>
                                        </h2>
                                    <?php endif; ?>
                                    <?php if (!empty($member['member_designation'])) : ?>
                                        <p><?php echo esc_html($member['member_designation']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if ('yes' === $settings['show_pagination']) : ?>
                    <div class="page-nav-wrap text-center">
                        <ul>
                            <?php if (!empty($settings['pagination_prev_image']['url'])) : ?>
                                <li><a class="page-numbers" href="#"><img src="<?php echo esc_url($settings['pagination_prev_image']['url']); ?>" alt="<?php echo esc_attr__('Previous', 'ftelements'); ?>"></a></li>
                            <?php endif; ?>
                            <?php foreach ($pagination_numbers as $number_index => $number) : ?>
                                <li class="<?php echo 0 === $number_index ? 'active' : ''; ?>"><a class="page-numbers" href="#"><?php echo esc_html($number); ?></a></li>
                            <?php endforeach; ?>
                            <?php if (!empty($settings['pagination_next_image']['url'])) : ?>
                                <li><a class="page-numbers" href="#"><img src="<?php echo esc_url($settings['pagination_next_image']['url']); ?>" alt="<?php echo esc_attr__('Next', 'ftelements'); ?>"></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </section>










<?php
    }
} ?>