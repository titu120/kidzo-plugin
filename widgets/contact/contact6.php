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
use Elementor\Icons_Manager;

defined('ABSPATH') || die();

class FT_Contact6_Widget extends \Elementor\Widget_Base
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
        return 'ft-contact6';
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
        return esc_html__('FT Contact 6', 'ftelements');
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
            'contact6_content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'item_icon',
            [
                'label'   => esc_html__('Icon', 'ftelements'),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fas fa-phone-alt',
                    'library' => 'fa-solid',
                ],
            ]
        );

        $repeater->add_control(
            'item_label',
            [
                'label'       => esc_html__('Label', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Call Us 7/24', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'item_text',
            [
                'label'       => esc_html__('Value', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('+208-555-0112', 'ftelements'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'item_link',
            [
                'label'       => esc_html__('Link', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'contact6_items',
            [
                'label'       => esc_html__('Contact Items', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    [
                        'item_label' => esc_html__('Call Us 7/24', 'ftelements'),
                        'item_text'  => esc_html__('+208-555-0112', 'ftelements'),
                        'item_link'  => [
                            'url' => 'tel:+2085550112',
                        ],
                    ],
                    [
                        'item_icon'  => [
                            'value'   => 'fas fa-envelope',
                            'library' => 'fa-solid',
                        ],
                        'item_label' => esc_html__('Make a Quote', 'ftelements'),
                        'item_text'  => esc_html__('kidzu@gmail.com', 'ftelements'),
                        'item_link'  => [
                            'url' => 'mailto:kidzu@gmail.com',
                        ],
                    ],
                    [
                        'item_icon'  => [
                            'value'   => 'fas fa-map-marker-alt',
                            'library' => 'fa-solid',
                        ],
                        'item_label' => esc_html__('Location', 'ftelements'),
                        'item_text'  => esc_html__('4517 Washington ave.', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ item_label }}}',
            ]
        );

        $this->add_control(
            'contact6_image',
            [
                'label'   => esc_html__('Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'contact6_video_url',
            [
                'label'       => esc_html__('Video URL', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'default'     => [
                    'url' => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
                ],
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact6_style_wrapper_section',
            [
                'label' => esc_html__('Wrapper', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'contact6_wrapper_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .contact-wrapper-2',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact6_wrapper_border',
                'selector' => '{{WRAPPER}} .contact-wrapper-2',
            ]
        );

        $this->add_responsive_control(
            'contact6_wrapper_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-wrapper-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact6_wrapper_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-wrapper-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact6_wrapper_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-wrapper-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact6_style_item_section',
            [
                'label' => esc_html__('Contact Items', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'contact6_items_gap',
            [
                'label'      => esc_html__('Items Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-info-area-2' => 'display: flex; flex-direction: column; gap: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items.mb-4' => 'margin-bottom: 0;',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'contact6_item_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .contact-info-area-2 .contact-info-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact6_item_border',
                'selector' => '{{WRAPPER}} .contact-info-area-2 .contact-info-items',
            ]
        );

        $this->add_responsive_control(
            'contact6_item_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact6_item_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact6_item_content_gap',
            [
                'label'      => esc_html__('Icon Content Gap', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact6_style_icon_section',
            [
                'label' => esc_html__('Icon', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'contact6_icon_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .icon i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .icon svg' => 'fill: {{VALUE}};',
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .icon svg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact6_icon_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact6_icon_size',
            [
                'label'      => esc_html__('Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .icon svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact6_icon_box_size',
            [
                'label'      => esc_html__('Box Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; display: inline-flex; align-items: center; justify-content: center;',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact6_icon_border',
                'selector' => '{{WRAPPER}} .contact-info-area-2 .contact-info-items .icon',
            ]
        );

        $this->add_responsive_control(
            'contact6_icon_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact6_icon_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact6_style_label_section',
            [
                'label' => esc_html__('Label', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact6_label_typography',
                'selector' => '{{WRAPPER}} .contact-info-area-2 .contact-info-items .content p',
            ]
        );

        $this->add_control(
            'contact6_label_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact6_label_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact6_style_value_section',
            [
                'label' => esc_html__('Value', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'contact6_value_typography',
                'selector' => '{{WRAPPER}} .contact-info-area-2 .contact-info-items .content h2, {{WRAPPER}} .contact-info-area-2 .contact-info-items .content h2 a',
            ]
        );

        $this->start_controls_tabs('contact6_value_color_tabs');

        $this->start_controls_tab(
            'contact6_value_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'contact6_value_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .content h2' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .content h2 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'contact6_value_hover_tab',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'contact6_value_hover_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .content h2 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'contact6_value_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .contact-info-area-2 .contact-info-items .content h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact6_style_image_section',
            [
                'label' => esc_html__('Image', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'contact6_image_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vw'],
                'selectors'  => [
                    '{{WRAPPER}} .video-image img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact6_image_height',
            [
                'label'      => esc_html__('Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'vh'],
                'selectors'  => [
                    '{{WRAPPER}} .video-image img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'contact6_image_object_fit',
            [
                'label'   => esc_html__('Object Fit', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'cover'   => esc_html__('Cover', 'ftelements'),
                    'contain' => esc_html__('Contain', 'ftelements'),
                    'fill'    => esc_html__('Fill', 'ftelements'),
                    'none'    => esc_html__('None', 'ftelements'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .video-image img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact6_image_border',
                'selector' => '{{WRAPPER}} .video-image img',
            ]
        );

        $this->add_responsive_control(
            'contact6_image_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .video-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact6_image_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .video-image img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'contact6_style_video_button_section',
            [
                'label' => esc_html__('Video Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('contact6_video_btn_tabs');

        $this->start_controls_tab(
            'contact6_video_btn_normal_tab',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'contact6_video_btn_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-image .video-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact6_video_btn_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-image .video-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'contact6_video_btn_hover_tab',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'contact6_video_btn_hover_color',
            [
                'label'     => esc_html__('Icon Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-image .video-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'contact6_video_btn_hover_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-image .video-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'contact6_video_btn_size',
            [
                'label'      => esc_html__('Button Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .video-image .video-btn' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}; display: inline-flex; align-items: center; justify-content: center;',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact6_video_btn_icon_size',
            [
                'label'      => esc_html__('Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .video-image .video-btn i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'contact6_video_btn_border',
                'selector' => '{{WRAPPER}} .video-image .video-btn',
            ]
        );

        $this->add_responsive_control(
            'contact6_video_btn_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .video-image .video-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'contact6_video_btn_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .video-image .video-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

        ?>



        <div class="contact-wrapper-2">
           
       
                    <div class="contact-left-items">
                        <div class="contact-info-area-2">
                            <?php if (!empty($settings['contact6_items'])) : ?>
                                <?php $total_items = count($settings['contact6_items']); ?>
                                <?php foreach ($settings['contact6_items'] as $index => $item) : ?>
                                    <?php
                                    $is_last = ($index === ($total_items - 1));
                                    $item_class = $is_last ? 'contact-info-items border-none' : 'contact-info-items mb-4';
                                    $link_key = 'contact6_item_link_' . $index;

                                    if (!empty($item['item_link']['url'])) {
                                        $this->add_link_attributes($link_key, $item['item_link']);
                                    }
                                    ?>
                                    <div class="<?php echo esc_attr($item_class); ?>">
                                        <div class="icon">
                                            <?php if (!empty($item['item_icon']['value'])) : ?>
                                                <?php Icons_Manager::render_icon($item['item_icon'], ['aria-hidden' => 'true']); ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="content">
                                            <?php if (!empty($item['item_label'])) : ?>
                                                <p><?php echo esc_html($item['item_label']); ?></p>
                                            <?php endif; ?>
                                            <?php if (!empty($item['item_text'])) : ?>
                                                <h2>
                                                    <?php if (!empty($item['item_link']['url'])) : ?>
                                                        <a <?php echo $this->get_render_attribute_string($link_key); ?>>
                                                            <?php echo esc_html($item['item_text']); ?>
                                                        </a>
                                                    <?php else : ?>
                                                        <?php echo esc_html($item['item_text']); ?>
                                                    <?php endif; ?>
                                                </h2>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="video-image">
                            <?php if (!empty($settings['contact6_image']['url'])) : ?>
                                <img src="<?php echo esc_url($settings['contact6_image']['url']); ?>" alt="<?php echo esc_attr__('Contact image', 'ftelements'); ?>">
                            <?php endif; ?>
                            <?php if (!empty($settings['contact6_video_url']['url'])) : ?>
                                <?php $this->add_link_attributes('contact6_video_link', $settings['contact6_video_url']); ?>
                                <div class="video-box">
                                    <a <?php echo $this->get_render_attribute_string('contact6_video_link'); ?> class="video-btn video-popup">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
           

          
        </div>










<?php
    }
} ?>