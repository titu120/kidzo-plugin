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

class FT_Team4_Widget extends \Elementor\Widget_Base
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
        return 'ft-team4';
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
        return esc_html__('FT Team4', 'ftelements');
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
            'team4_content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Honorable Teacher\'s', 'ftelements'),
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('We Have Lot\'s Of Experience Teacher To Teach The Students', 'ftelements'),
            ]
        );

        $this->add_control(
            'top_line_image',
            [
                'label' => esc_html__('Top Line Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'bottom_line_image',
            [
                'label' => esc_html__('Bottom Line Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'member_bg_shape',
            [
                'label' => esc_html__('Card Background Shape', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

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
                'default' => esc_html__('Teacher Name', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'member_designation',
            [
                'label' => esc_html__('Designation', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Senior Teacher', 'ftelements'),
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
                'placeholder' => 'https://x.com/',
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

        $this->add_control(
            'team_members',
            [
                'label' => esc_html__('Team Members', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'member_name' => esc_html__('Dawson Timms', 'ftelements'),
                        'member_designation' => esc_html__('Sports Teacher', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Michele Bailey', 'ftelements'),
                        'member_designation' => esc_html__('Principle', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Brian Marsh', 'ftelements'),
                        'member_designation' => esc_html__('Senior Teacher', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Aria Sophia', 'ftelements'),
                        'member_designation' => esc_html__('Senior Teacher', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Scarlett Audrey', 'ftelements'),
                        'member_designation' => esc_html__('Senior Teacher', 'ftelements'),
                    ],
                    [
                        'member_name' => esc_html__('Ruby Nora', 'ftelements'),
                        'member_designation' => esc_html__('Senior Teacher', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ member_name }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team4_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .team-section-inner',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .team-section-inner' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team4_style_subtitle',
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
                    '{{WRAPPER}} .team-section-inner .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .team-section-inner .section-title .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team4_style_title',
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
                    '{{WRAPPER}} .team-section-inner .section-title .tx-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .team-section-inner .section-title .tx-title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .section-title .tx-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team4_style_card',
            [
                'label' => esc_html__('Team Card', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label' => esc_html__('Card Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_radius',
            [
                'label' => esc_html__('Card Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .bg-shape' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .team-section-inner .team-single-items .bg-shape > img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'card_border',
                'selector' => '{{WRAPPER}} .team-section-inner .team-single-items .bg-shape',
            ]
        );

        $this->add_control(
            'card_overlay_heading',
            [
                'label' => esc_html__('Card Overlay', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'card_overlay_color',
            [
                'label' => esc_html__('Overlay Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .bg-shape::before' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'card_overlay_opacity',
            [
                'label' => esc_html__('Overlay Opacity', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.01,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .bg-shape::before' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team4_style_member_image',
            [
                'label' => esc_html__('Member Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'member_image_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 600,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .thumb > img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'member_image_height',
            [
                'label' => esc_html__('Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 600,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .thumb > img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'member_image_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .thumb > img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'member_image_border',
                'selector' => '{{WRAPPER}} .team-section-inner .team-single-items .thumb > img',
            ]
        );

        $this->add_control(
            'member_image_css_filter',
            [
                'label' => esc_html__('CSS Filters', 'ftelements'),
                'type' => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'member_image_filter',
                'selector' => '{{WRAPPER}} .team-section-inner .team-single-items .thumb > img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team4_style_name',
            [
                'label' => esc_html__('Member Name', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('member_name_tabs');

        $this->start_controls_tab(
            'member_name_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'member_name_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .content h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'member_name_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'member_name_hover_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .content h3 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'member_name_typography',
                'selector' => '{{WRAPPER}} .team-section-inner .team-single-items .content h3 a',
            ]
        );

        $this->add_responsive_control(
            'member_name_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team4_style_designation',
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
                    '{{WRAPPER}} .team-section-inner .team-single-items .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'designation_typography',
                'selector' => '{{WRAPPER}} .team-section-inner .team-single-items .content p',
            ]
        );

        $this->add_responsive_control(
            'designation_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team4_style_social',
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
                    'px' => [
                        'min' => 8,
                        'max' => 80,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .social-icon a i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'social_box_size',
            [
                'label' => esc_html__('Box Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 120,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .social-icon a' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}}; text-align: center;',
                ],
            ]
        );

        $this->add_responsive_control(
            'social_gap',
            [
                'label' => esc_html__('Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 60,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .social-icon' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'social_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .social-icon a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'social_border',
                'selector' => '{{WRAPPER}} .team-section-inner .team-single-items .social-icon a',
            ]
        );

        $this->start_controls_tabs('social_icon_tabs');

        $this->start_controls_tab(
            'social_icon_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'social_icon_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .social-icon a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_icon_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .social-icon a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'social_icon_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'social_icon_hover_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .social-icon a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_icon_hover_bg',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-inner .team-single-items .social-icon a:hover' => 'background-color: {{VALUE}};',
                ],
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
        $team_members = !empty($settings['team_members']) ? $settings['team_members'] : [];
        $delay_steps = ['.3s', '.5s', '.7s'];

        ?>
        <section class="team-section-inner section-padding">
            <div class="top-line">
                <?php if (!empty($settings['top_line_image']['url'])) : ?>
                    <img src="<?php echo esc_url($settings['top_line_image']['url']); ?>" alt="<?php echo esc_attr__('Top line', 'ftelements'); ?>">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <?php if (!empty($settings['section_subtitle'])) : ?>
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['section_subtitle']); ?></span>
                    <?php endif; ?>
                    <?php if (!empty($settings['section_title'])) : ?>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim"><?php echo wp_kses_post(nl2br($settings['section_title'])); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <?php foreach ($team_members as $index => $member) :
                        $delay = $delay_steps[$index % count($delay_steps)];

                        $profile_link = !empty($member['member_profile_link']['url']) ? $member['member_profile_link'] : ['url' => '#'];
                        $profile_target = !empty($profile_link['is_external']) ? ' target="_blank"' : '';
                        $profile_rel = !empty($profile_link['nofollow']) ? ' rel="nofollow"' : '';

                        $facebook_link = !empty($member['facebook_link']['url']) ? $member['facebook_link'] : [];
                        $twitter_link = !empty($member['twitter_link']['url']) ? $member['twitter_link'] : [];
                        $vimeo_link = !empty($member['vimeo_link']['url']) ? $member['vimeo_link'] : [];
                        $pinterest_link = !empty($member['pinterest_link']['url']) ? $member['pinterest_link'] : [];
                    ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                            <div class="team-single-items">
                                <div class="bg-shape">
                                    <?php if (!empty($member['member_bg_shape']['url'])) : ?>
                                        <img src="<?php echo esc_url($member['member_bg_shape']['url']); ?>" alt="<?php echo esc_attr($member['member_name']); ?>">
                                    <?php endif; ?>
                                    <div class="items">
                                        <div class="thumb">
                                            <?php if (!empty($member['member_image']['url'])) : ?>
                                                <img src="<?php echo esc_url($member['member_image']['url']); ?>" alt="<?php echo esc_attr($member['member_name']); ?>">
                                            <?php endif; ?>
                                            <div class="social-icon d-flex align-items-center">
                                                <?php if (!empty($facebook_link)) : ?>
                                                    <a href="<?php echo esc_url($facebook_link['url']); ?>"><i class="fab fa-facebook-f"></i></a>
                                                <?php endif; ?>
                                                <?php if (!empty($twitter_link)) : ?>
                                                    <a href="<?php echo esc_url($twitter_link['url']); ?>"><i class="fab fa-twitter"></i></a>
                                                <?php endif; ?>
                                                <?php if (!empty($vimeo_link)) : ?>
                                                    <a href="<?php echo esc_url($vimeo_link['url']); ?>"><i class="fab fa-vimeo-v"></i></a>
                                                <?php endif; ?>
                                                <?php if (!empty($pinterest_link)) : ?>
                                                    <a href="<?php echo esc_url($pinterest_link['url']); ?>"><i class="fab fa-pinterest-p"></i></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <?php if (!empty($member['member_name'])) : ?>
                                                <h3>
                                                    <a href="<?php echo esc_url($profile_link['url']); ?>"<?php echo wp_kses_post($profile_target . $profile_rel); ?>><?php echo esc_html($member['member_name']); ?></a>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if (!empty($member['member_designation'])) : ?>
                                                <p><?php echo esc_html($member['member_designation']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="bottom-line">
                <?php if (!empty($settings['bottom_line_image']['url'])) : ?>
                    <img src="<?php echo esc_url($settings['bottom_line_image']['url']); ?>" alt="<?php echo esc_attr__('Bottom line', 'ftelements'); ?>">
                <?php endif; ?>
            </div>
        </section>
<?php
    }
} ?>