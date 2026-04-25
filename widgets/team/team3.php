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

class FT_Team3_Widget extends \Elementor\Widget_Base
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
        return 'ft-team-3';
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
        return esc_html__('FT Team 3', 'ftelements');
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
            'team3_content_section',
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
                'default' => esc_html__('Our Experts', 'ftelements'),
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our Expert Instructors', 'ftelements'),
            ]
        );

        $this->add_control(
            'top_shape_image',
            [
                'label' => esc_html__('Top Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'love_shape_image',
            [
                'label' => esc_html__('Love Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'frame_shape_image',
            [
                'label' => esc_html__('Frame Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'team_shape',
            [
                'label' => esc_html__('Card Shape Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'team_image',
            [
                'label' => esc_html__('Member Image', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'team_name',
            [
                'label' => esc_html__('Name', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Kristin Watson', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'team_designation',
            [
                'label' => esc_html__('Designation', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Instructors', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'team_link',
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
            'instagram_link',
            [
                'label' => esc_html__('Instagram Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://instagram.com/',
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $repeater->add_control(
            'linkedin_link',
            [
                'label' => esc_html__('LinkedIn Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://linkedin.com/',
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
                        'team_name' => esc_html__('Kristin Watson', 'ftelements'),
                        'team_designation' => esc_html__('Instructors', 'ftelements'),
                    ],
                    [
                        'team_name' => esc_html__('Leslie Alexander', 'ftelements'),
                        'team_designation' => esc_html__('Instructors', 'ftelements'),
                    ],
                    [
                        'team_name' => esc_html__('Kristin Watson', 'ftelements'),
                        'team_designation' => esc_html__('Instructors', 'ftelements'),
                    ],
                    [
                        'team_name' => esc_html__('Ronald Richards', 'ftelements'),
                        'team_designation' => esc_html__('Instructors', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ team_name }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team3_style_section',
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
                'selector' => '{{WRAPPER}} .team-section-4',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .team-section-4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team3_style_subtitle',
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
                    '{{WRAPPER}} .team-section-4 .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .team-section-4 .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team3_style_title',
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
                    '{{WRAPPER}} .team-section-4 .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .team-section-4 .sec_title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team3_style_card',
            [
                'label' => esc_html__('Team Card', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'card_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .team-section-4 .team-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'card_border',
                'selector' => '{{WRAPPER}} .team-section-4 .team-items',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .team-section-4 .team-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team3_style_image',
            [
                'label' => esc_html__('Team Image', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'image_height',
            [
                'label' => esc_html__('Height', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vh'],
                'range' => [
                    'px' => ['min' => 50, 'max' => 800],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-image > img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_width',
            [
                'label' => esc_html__('Width', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 50, 'max' => 800],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-image > img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'image_border_radius',
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
                'name' => 'team_image_css_filters',
                'selector' => '{{WRAPPER}} .team-section-4 .team-image > img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team3_style_name',
            [
                'label' => esc_html__('Name', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'name_color',
            [
                'label' => esc_html__('Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-content h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'name_hover_color',
            [
                'label' => esc_html__('Hover Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .team-content h3 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'name_typography',
                'selector' => '{{WRAPPER}} .team-section-4 .team-content h3 a',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team3_style_designation',
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
                    '{{WRAPPER}} .team-section-4 .team-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'designation_typography',
                'selector' => '{{WRAPPER}} .team-section-4 .team-content p',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team3_style_social',
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
                    'px' => ['min' => 8, 'max' => 80],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .social-profile ul li a i' => 'font-size: {{SIZE}}{{UNIT}};',
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
                    'px' => ['min' => 20, 'max' => 120],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .social-profile ul li a' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}}; text-align: center;',
                ],
            ]
        );

        $this->start_controls_tabs('social_icon_tabs');

        $this->start_controls_tab(
            'social_icon_normal_tab',
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
                    '{{WRAPPER}} .team-section-4 .social-profile ul li a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_icon_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .social-profile ul li a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'social_icon_hover_tab',
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
                    '{{WRAPPER}} .team-section-4 .social-profile ul li a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'social_icon_hover_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .social-profile ul li a:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'social_icon_border',
                'selector' => '{{WRAPPER}} .team-section-4 .social-profile ul li a',
            ]
        );

        $this->add_responsive_control(
            'social_icon_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .social-profile ul li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'social_icon_gap',
            [
                'label' => esc_html__('Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 40],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .social-profile ul' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'team3_style_navigation',
            [
                'label' => esc_html__('Slider Arrows', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'arrow_size',
            [
                'label' => esc_html__('Arrow Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 10, 'max' => 80],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .array-button button i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'arrow_box_size',
            [
                'label' => esc_html__('Button Size', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 24, 'max' => 120],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .array-button button' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('arrow_tabs');

        $this->start_controls_tab(
            'arrow_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'arrow_color',
            [
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .array-button button' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'arrow_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .array-button button' => 'background-color: {{VALUE}};',
                ],
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
                'label' => esc_html__('Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .array-button button:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'arrow_hover_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .array-button button:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'arrow_border',
                'selector' => '{{WRAPPER}} .team-section-4 .array-button button',
            ]
        );

        $this->add_responsive_control(
            'arrow_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .array-button button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'arrow_gap',
            [
                'label' => esc_html__('Gap', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 40],
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-section-4 .array-button' => 'gap: {{SIZE}}{{UNIT}};',
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
        $wow_delays = ['.2s', '.4s', '.6s', '.8s'];

        ?>







        <section id="ft-team3-<?php echo esc_attr($this->get_id()); ?>" class="team-section-4 fix section-bg section-padding">
            <div class="top-shape">
                <?php if (!empty($settings['top_shape_image']['url'])) : ?>
                    <img src="<?php echo esc_url($settings['top_shape_image']['url']); ?>" alt="shape-img">
                <?php endif; ?>
            </div>
            <div class="love-shape float-bob-x">
                <?php if (!empty($settings['love_shape_image']['url'])) : ?>
                    <img src="<?php echo esc_url($settings['love_shape_image']['url']); ?>" alt="shape-img">
                <?php endif; ?>
            </div>
            <div class="frame-shape">
                <?php if (!empty($settings['frame_shape_image']['url'])) : ?>
                    <img src="<?php echo esc_url($settings['frame_shape_image']['url']); ?>" alt="shape-img">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title mb-0">
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['section_subtitle']); ?></span>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                            <?php echo esc_html($settings['section_title']); ?>
                        </h2>
                    </div>
                    <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                        <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                        <button class="array-next"><i class="fal fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="swiper team-slider-inner2">
                    <div class="swiper-wrapper">
                        <?php foreach ($team_members as $index => $member) :
                            $wow_delay = isset($wow_delays[$index]) ? $wow_delays[$index] : '.2s';
                            $name = !empty($member['team_name']) ? $member['team_name'] : '';
                            $designation = !empty($member['team_designation']) ? $member['team_designation'] : '';
                        ?>
                            <div class="swiper-slide wow fadeInUp" data-wow-delay="<?php echo esc_attr($wow_delay); ?>">
                            <div class="team-items">
                                <div class="team-image">
                                    <div class="shape-img">
                                            <?php if (!empty($member['team_shape']['url'])) : ?>
                                                <img src="<?php echo esc_url($member['team_shape']['url']); ?>" alt="img">
                                            <?php endif; ?>
                                    </div>
                                        <?php if (!empty($member['team_image']['url'])) : ?>
                                            <img src="<?php echo esc_url($member['team_image']['url']); ?>" alt="team-img">
                                        <?php endif; ?>
                                    <div class="social-profile">
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                        <ul>
                                                <li><a href="<?php echo esc_url(!empty($member['facebook_link']['url']) ? $member['facebook_link']['url'] : '#'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="<?php echo esc_url(!empty($member['instagram_link']['url']) ? $member['instagram_link']['url'] : '#'); ?>"><i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="<?php echo esc_url(!empty($member['linkedin_link']['url']) ? $member['linkedin_link']['url'] : '#'); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3>
                                            <a href="<?php echo esc_url(!empty($member['team_link']['url']) ? $member['team_link']['url'] : '#'); ?>"><?php echo esc_html($name); ?></a>
                                    </h3>
                                        <p><?php echo esc_html($designation); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <script>
            (function($) {
                "use strict";

                var initTeamSliderInner2 = function($scope) {
                    if (!$scope || !$scope.length || typeof Swiper === 'undefined') {
                        return;
                    }

                    var $slider = $scope.find('.team-slider-inner2');
                    if (!$slider.length) {
                        return;
                    }

                    if ($slider[0] && $slider[0].swiper) {
                        $slider[0].swiper.destroy(true, true);
                    }

                    new Swiper($slider[0], {
                        spaceBetween: 30,
                        speed: 1300,
                        loop: true,
                        autoplay: {
                            delay: 2000,
                            disableOnInteraction: false,
                        },
                        navigation: {
                            nextEl: $scope.find('.array-next').get(0),
                            prevEl: $scope.find('.array-prev').get(0),
                        },
                        breakpoints: {
                            1199: {
                                slidesPerView: 4,
                            },
                            991: {
                                slidesPerView: 3,
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

                var $currentScope = $('#ft-team3-<?php echo esc_js($this->get_id()); ?>');

                if (window.elementorFrontend && window.elementorFrontend.isEditMode && window.elementorFrontend.isEditMode()) {
                    initTeamSliderInner2($currentScope);
                }

                $(window).on('elementor/frontend/init', function() {
                    if (!window.elementorFrontend || !window.elementorFrontend.hooks) {
                        return;
                    }

                    elementorFrontend.hooks.addAction('frontend/element_ready/ft-team-3.default', function($scope) {
                        initTeamSliderInner2($scope);
                    });
                });
            })(jQuery);
        </script>






<?php
    }
} ?>