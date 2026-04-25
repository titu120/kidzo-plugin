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

class FT_Team2_Widget extends \Elementor\Widget_Base
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
        return 'ft-team-2';
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
        return esc_html__('FT Team 2', 'ftelements');
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
            'team2_section_content',
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
                'default' => esc_html__('Our Nanny\'s', 'ftelements'),
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Why Families Choose Us\nOur Nannies", 'ftelements'),
            ]
        );

        $this->add_control(
            'section_shape_image',
            [
                'label' => esc_html__('Top Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'member_shape_image',
            [
                'label' => esc_html__('Member Dot Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

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
                'default' => esc_html__('Brian Marsh', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'member_designation',
            [
                'label' => esc_html__('Designation', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Super Nanny', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'profile_link',
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
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $repeater->add_control(
            'twitter_link',
            [
                'label' => esc_html__('Twitter Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://twitter.com/',
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $repeater->add_control(
            'vimeo_link',
            [
                'label' => esc_html__('Vimeo Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://vimeo.com/',
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $repeater->add_control(
            'pinterest_link',
            [
                'label' => esc_html__('Pinterest Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://pinterest.com/',
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->start_controls_section(
            'team2_members',
            [
                'label' => esc_html__('Team Members', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'team_members',
            [
                'label' => esc_html__('Members', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ member_name }}}',
                'default' => [
                    [
                        'member_name' => esc_html__('Brian Marsh', 'ftelements'),
                        'member_designation' => esc_html__('Super Nanny', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Brian Marsh', 'ftelements'),
                        'member_designation' => esc_html__('Super Nanny', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Brian Marsh', 'ftelements'),
                        'member_designation' => esc_html__('Super Nanny', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Brian Marsh', 'ftelements'),
                        'member_designation' => esc_html__('Super Nanny', 'ftelements'),
                    ],
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team2_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
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
                    '{{WRAPPER}} .team-section-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .team-section-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .team-section-3',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team2_style_subtitle',
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
                    '{{WRAPPER}} .team-section-3 .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .team-section-3 .section-title .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team2_style_title',
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
                    '{{WRAPPER}} .team-section-3 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .team-section-3 .section-title h2',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team2_style_card',
            [
                'label' => esc_html__('Card', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'card_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .team-section-3 .team-box-items-3',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'card_border',
                'selector' => '{{WRAPPER}} .team-section-3 .team-box-items-3',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team2_style_image',
            [
                'label' => esc_html__('Member Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'member_image_height',
            [
                'label' => esc_html__('Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vh'],
                'range' => [
                    'px' => ['min' => 80, 'max' => 800],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .thumb img' => 'height: {{SIZE}}{{UNIT}}; object-fit: cover;',
                ],
            ]
        );

        $this->add_responsive_control(
            'member_image_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'member_image_css_filters',
                'selector' => '{{WRAPPER}} .team-section-3 .team-box-items-3 .thumb img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team2_style_name',
            [
                'label' => esc_html__('Member Name', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'name_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .content .title a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'name_hover_color',
            [
                'label' => esc_html__('Hover Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .content .title a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'name_typography',
                'selector' => '{{WRAPPER}} .team-section-3 .team-box-items-3 .content .title',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team2_style_designation',
            [
                'label' => esc_html__('Designation', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'designation_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'designation_typography',
                'selector' => '{{WRAPPER}} .team-section-3 .team-box-items-3 .content p',
            ]
        );

        $this->add_responsive_control(
            'designation_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team2_style_social',
            [
                'label' => esc_html__('Social Icons', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'social_icon_size',
            [
                'label' => esc_html__('Icon Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 8, 'max' => 60],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .social-icon a i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'social_icon_box_size',
            [
                'label' => esc_html__('Box Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 20, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .social-icon a' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}}; text-align: center;',
                ],
            ]
        );

        $this->add_control(
            'social_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .social-icon a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_icon_hover_color',
            [
                'label' => esc_html__('Icon Hover Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .social-icon a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_icon_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .social-icon a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_icon_bg_hover_color',
            [
                'label' => esc_html__('Background Hover Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .social-icon a:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'social_icon_border',
                'selector' => '{{WRAPPER}} .team-section-3 .team-box-items-3 .social-icon a',
            ]
        );

        $this->add_responsive_control(
            'social_icon_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .social-icon a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'social_icon_gap',
            [
                'label' => esc_html__('Icon Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 40],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .team-box-items-3 .social-icon' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team2_style_navigation_dot',
            [
                'label' => esc_html__('Navigation Dot', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'dot_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .swiper-dot .dot .swiper-pagination-bullet' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'dot_active_color',
            [
                'label' => esc_html__('Active Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .swiper-dot .dot .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'dot_size',
            [
                'label' => esc_html__('Dot Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 4, 'max' => 30],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .swiper-dot .dot .swiper-pagination-bullet' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'dot_gap',
            [
                'label' => esc_html__('Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 30],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-3 .swiper-dot .dot .swiper-pagination-bullet' => 'margin: 0 {{SIZE}}{{UNIT}};',
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
        $section_shape_image = !empty($settings['section_shape_image']['url']) ? $settings['section_shape_image']['url'] : '';
        $member_shape_image = !empty($settings['member_shape_image']['url']) ? $settings['member_shape_image']['url'] : '';

        ?>

        <section id="ft-team2-<?php echo esc_attr($this->get_id()); ?>" class="team-section-3 fix section-padding">
            <div class="shape1 float-bob-x">
                <img src="<?php echo esc_url($section_shape_image); ?>" alt="<?php esc_attr_e('shape', 'ftelements'); ?>" />
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['section_subtitle']); ?></span>
                    <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                        <?php echo wp_kses_post(nl2br($settings['section_title'])); ?>
                    </h2>
                </div>
                <div class="swiper team-slider-3">
                    <div class="swiper-wrapper">
                        <?php foreach ($team_members as $member) :
                            $member_image = !empty($member['member_image']['url']) ? $member['member_image']['url'] : Utils::get_placeholder_image_src();
                            $profile_url = !empty($member['profile_link']['url']) ? $member['profile_link']['url'] : '#';
                            $facebook_url = !empty($member['facebook_link']['url']) ? $member['facebook_link']['url'] : '#';
                            $twitter_url = !empty($member['twitter_link']['url']) ? $member['twitter_link']['url'] : '#';
                            $vimeo_url = !empty($member['vimeo_link']['url']) ? $member['vimeo_link']['url'] : '#';
                            $pinterest_url = !empty($member['pinterest_link']['url']) ? $member['pinterest_link']['url'] : '#';
                        ?>
                            <div class="swiper-slide">
                                <div class="team-box-items-3">
                                    <div class="thumb">
                                        <img src="<?php echo esc_url($member_image); ?>" alt="<?php echo esc_attr($member['member_name']); ?>" />
                                        <img src="<?php echo esc_url($member_image); ?>" alt="<?php echo esc_attr($member['member_name']); ?>" />
                                    </div>
                                    <div class="social-icon">
                                        <a href="<?php echo esc_url($facebook_url); ?>"><i class="fab fa-facebook-f"></i></a>
                                        <a href="<?php echo esc_url($twitter_url); ?>"><i class="fab fa-twitter"></i></a>
                                        <a href="<?php echo esc_url($vimeo_url); ?>"><i class="fab fa-vimeo-v"></i></a>
                                        <a href="<?php echo esc_url($pinterest_url); ?>"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                    <div class="shape">
                                        <img src="<?php echo esc_url($member_shape_image); ?>" alt="<?php esc_attr_e('shape', 'ftelements'); ?>" />
                                    </div>
                                    <div class="content">
                                        <h3 class="title">
                                            <a href="<?php echo esc_url($profile_url); ?>"><?php echo esc_html($member['member_name']); ?></a>
                                        </h3>
                                        <p><?php echo esc_html($member['member_designation']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-dot text-center mt-5">
                    <div class="dot"></div>
                </div>
            </div>
        </section>

        <script>
            (function($) {
                "use strict";

                var initTeamSlider3 = function($scope) {
                    if (!$scope || !$scope.length || typeof Swiper === 'undefined') {
                        return;
                    }

                    var $slider = $scope.find('.team-slider-3');
                    if (!$slider.length) {
                        return;
                    }

                    if ($slider[0] && $slider[0].swiper) {
                        $slider[0].swiper.destroy(true, true);
                    }

                    var paginationEl = $scope.find('.swiper-dot .dot').get(0);

                    new Swiper($slider[0], {
                        spaceBetween: 30,
                        speed: 1300,
                        loop: true,
                        autoplay: {
                            delay: 2000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: paginationEl,
                            clickable: true,
                        },
                        breakpoints: {
                            1399: {
                                slidesPerView: 4,
                            },
                            1199: {
                                slidesPerView: 3,
                            },
                            991: {
                                slidesPerView: 2.5,
                            },
                            767: {
                                slidesPerView: 2,
                            },
                            575: {
                                slidesPerView: 1.4,
                            },
                            0: {
                                slidesPerView: 1,
                            },
                        },
                    });
                };

                var $currentScope = $('#ft-team2-<?php echo esc_js($this->get_id()); ?>');

                if (window.elementorFrontend && window.elementorFrontend.isEditMode && window.elementorFrontend.isEditMode()) {
                    initTeamSlider3($currentScope);
                }

                $(window).on('elementor/frontend/init', function() {
                    if (!window.elementorFrontend || !window.elementorFrontend.hooks) {
                        return;
                    }

                    elementorFrontend.hooks.addAction('frontend/element_ready/ft-team-2.default', function($scope) {
                        initTeamSlider3($scope);
                    });
                });
            })(jQuery);
        </script>

<?php
    }
} ?>