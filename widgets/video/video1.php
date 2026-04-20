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

class FT_Video1_Widget extends \Elementor\Widget_Base
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
        return 'ft-video1';
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
        return esc_html__('FT Video 1', 'ftelements');
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
            'video_content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'video_bg_image',
            [
                'label'   => esc_html__('Background Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'video_url',
            [
                'label'         => esc_html__('Video URL', 'ftelements'),
                'type'          => Controls_Manager::URL,
                'placeholder'   => esc_url('https://www.youtube.com/watch?v=Cn4G2lZ_g2I'),
                'default'       => [
                    'url'         => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
                    'is_external' => true,
                    'nofollow'    => true,
                ],
                'label_block'   => true,
                'show_external' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'video_section_style',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'video_section_alignment',
            [
                'label'     => esc_html__('Alignment', 'ftelements'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'   => [
                        'title' => esc_html__('Left', 'ftelements'),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'right'  => [
                        'title' => esc_html__('Right', 'ftelements'),
                        'icon'  => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .program-video-section' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'video_section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-video-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'video_section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-video-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'video_image_style',
            [
                'label' => esc_html__('Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'video_image_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vh'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 1200],
                    '%'  => ['min' => 0, 'max' => 100],
                    'vh' => ['min' => 0, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-video-section .thumb img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'video_image_max_width',
            [
                'label'      => esc_html__('Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 2000],
                    '%'  => ['min' => 0, 'max' => 100],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-video-section .thumb img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'video_image_object_fit',
            [
                'label'     => esc_html__('Object Fit', 'ftelements'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    ''        => esc_html__('Default', 'ftelements'),
                    'cover'   => esc_html__('Cover', 'ftelements'),
                    'contain' => esc_html__('Contain', 'ftelements'),
                    'fill'    => esc_html__('Fill', 'ftelements'),
                    'none'    => esc_html__('None', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .program-video-section .thumb img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'video_image_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-video-section .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'video_image_border',
                'selector' => '{{WRAPPER}} .program-video-section .thumb img',
            ]
        );

        $this->add_responsive_control(
            'video_image_spacing',
            [
                'label'      => esc_html__('Bottom Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'range'      => [
                    'px' => ['min' => -200, 'max' => 400],
                    '%'  => ['min' => -100, 'max' => 100],
                    'em' => ['min' => -10, 'max' => 20],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-video-section .thumb img' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'video_button_style',
            [
                'label' => esc_html__('Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'video_button_size',
            [
                'label'      => esc_html__('Button Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 300],
                    'em' => ['min' => 0, 'max' => 20],
                    'rem' => ['min' => 0, 'max' => 20],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-video-section .video-btn' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'video_button_line_height',
            [
                'label'      => esc_html__('Line Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 300],
                    'em' => ['min' => 0, 'max' => 20],
                    'rem' => ['min' => 0, 'max' => 20],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-video-section .video-btn' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'video_button_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .program-video-section .video-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'video_button_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .program-video-section .video-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'video_button_border',
                'selector' => '{{WRAPPER}} .program-video-section .video-btn',
            ]
        );

        $this->start_controls_tabs('video_button_style_tabs');

        $this->start_controls_tab(
            'video_button_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'video_button_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-video-section .video-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'video_button_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-video-section .video-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'video_button_hover_tab',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'video_button_hover_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-video-section .video-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'video_button_hover_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-video-section .video-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'video_button_hover_border_color',
            [
                'label'     => esc_html__('Border Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-video-section .video-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'video_icon_style',
            [
                'label' => esc_html__('Icon', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'video_icon_size',
            [
                'label'      => esc_html__('Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'range'      => [
                    'px' => ['min' => 0, 'max' => 200],
                    'em' => ['min' => 0, 'max' => 20],
                    'rem' => ['min' => 0, 'max' => 20],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-video-section .video-btn i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'video_icon_custom_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .program-video-section .video-btn i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'video_icon_rotate',
            [
                'label'      => esc_html__('Rotate', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['deg'],
                'range'      => [
                    'deg' => ['min' => 0, 'max' => 360],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .program-video-section .video-btn i' => 'transform: rotate({{SIZE}}{{UNIT}});',
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
        $bg_image_url = !empty($settings['video_bg_image']['url']) ? $settings['video_bg_image']['url'] : Utils::get_placeholder_image_src();

        $video_url = !empty($settings['video_url']['url']) ? $settings['video_url']['url'] : '';
        $this->add_render_attribute('video_link', 'class', 'video-btn video-popup');

        if (!empty($video_url)) {
            $this->add_render_attribute('video_link', 'href', esc_url($video_url));
        }

        if (!empty($settings['video_url']['is_external'])) {
            $this->add_render_attribute('video_link', 'target', '_blank');
        }

        if (!empty($settings['video_url']['nofollow'])) {
            $this->add_render_attribute('video_link', 'rel', 'nofollow');
        }

        ?>





        <div class="program-video-section">
            <div class="thumb fix">
                <img src="<?php echo esc_url($bg_image_url); ?>" alt="<?php echo esc_attr__('video', 'ftelements'); ?>">
                <a <?php echo $this->get_render_attribute_string('video_link'); ?>>
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>








<?php
    }
} ?>