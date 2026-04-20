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

class Kidzu_About1_Widget extends \Elementor\Widget_Base
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
        return 'kidzu-about1';
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
        return esc_html__('About 1', 'kidzu');
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
            'kidzu_about_content',
            [
                'label' => esc_html__('About Content', 'kidzu'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__('Sub Title', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('About Us', 'kidzu'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Inspire Growth Through Learning Daily', 'kidzu'),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('We are a caring kindergarten & school dedicated to building strong foundations through play-based and academic learning.', 'kidzu'),
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'item_title',
            [
                'label' => esc_html__('Item Title', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Child-Friendly Learning Environment', 'kidzu'),
            ]
        );

        $repeater->add_control(
            'item_delay',
            [
                'label' => esc_html__('Animation Delay', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => '.3s',
            ]
        );

        $this->add_control(
            'feature_items',
            [
                'label' => esc_html__('Feature List', 'kidzu'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'item_title' => esc_html__('Child-Friendly Learning Environment', 'kidzu'),
                        'item_delay' => '.3s',
                    ],
                    [
                        'item_title' => esc_html__('Focus on child-friendly, safe, & quality education', 'kidzu'),
                        'item_delay' => '.5s',
                    ],
                ],
                'title_field' => '{{{ item_title }}}',
            ]
        );

        $this->add_control(
            'description_2',
            [
                'label' => esc_html__('Bottom Description', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('At Kidzu, our aim is to give everyone a chance to learn a new language. Our skilled team creates fun and useful lessons so each student can reach their goals. We\'re here to help you gain skills for both work and life.', 'kidzu'),
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => esc_html__('Button Text', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('know more', 'kidzu'),
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label' => esc_html__('Button Link', 'kidzu'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->add_control(
            'phone_label',
            [
                'label' => esc_html__('Phone Label', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Call Us Now', 'kidzu'),
            ]
        );

        $this->add_control(
            'phone_number',
            [
                'label' => esc_html__('Phone Number', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('+11 123 0654 98', 'kidzu'),
            ]
        );

        $this->add_control(
            'vector_1',
            [
                'label' => esc_html__('Top Vector 1', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/about-vec.png',
                ],
            ]
        );

        $this->add_control(
            'vector_2',
            [
                'label' => esc_html__('Top Vector 2', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/about-vec2.png',
                ],
            ]
        );

        $this->add_control(
            'vector_3',
            [
                'label' => esc_html__('Top Vector 3', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/about-3.png',
                ],
            ]
        );

        $this->add_control(
            'about_line',
            [
                'label' => esc_html__('About Line Shape', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/about-line.png',
                ],
            ]
        );

        $this->add_control(
            'bg_shape_mask',
            [
                'label' => esc_html__('Background Shape Mask (SVG)', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'description' => esc_html__('Upload an SVG mask for the background shape.', 'kidzu'),
            ]
        );

        $this->add_control(
            'main_image',
            [
                'label' => esc_html__('Main Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/about-1.png',
                ],
            ]
        );

        $this->add_control(
            'secondary_image',
            [
                'label' => esc_html__('Secondary Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/about-2.png',
                ],
            ]
        );

        $this->add_control(
            'check_icon',
            [
                'label' => esc_html__('Checklist Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/icon/check.svg',
                ],
            ]
        );

        $this->add_control(
            'button_arrow_icon',
            [
                'label' => esc_html__('Button Arrow Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/arrow1.svg',
                ],
            ]
        );

        $this->add_control(
            'phone_icon',
            [
                'label' => esc_html__('Phone Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/icon/telephone.svg',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_about_style_section',
            [
                'label' => esc_html__('Section', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about_section_background',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .about-section',
            ]
        );

        $this->add_responsive_control(
            'about_section_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about_section_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_about_style_shapes',
            [
                'label' => esc_html__('Shapes', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'shape_width_1',
            [
                'label' => esc_html__('Vector 1 Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 20, 'max' => 800],
                    '%' => ['min' => 5, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-vec img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape_width_2',
            [
                'label' => esc_html__('Vector 2 Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 20, 'max' => 800],
                    '%' => ['min' => 5, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-vec2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape_width_3',
            [
                'label' => esc_html__('Vector 3 Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 20, 'max' => 800],
                    '%' => ['min' => 5, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-vec3 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape_line_width',
            [
                'label' => esc_html__('Line Shape Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 20, 'max' => 800],
                    '%' => ['min' => 5, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-line img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'shapes_opacity',
            [
                'label' => esc_html__('Shapes Opacity', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['%'],
                'range' => [
                    '%' => ['min' => 0, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-vec, {{WRAPPER}} .about-vec2, {{WRAPPER}} .about-vec3, {{WRAPPER}} .about-line' => 'opacity: calc({{SIZE}}/100);',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_about_style_images',
            [
                'label' => esc_html__('About Images', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'main_image_width',
            [
                'label' => esc_html__('Main Image Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 50, 'max' => 1200],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-image > img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'secondary_image_width',
            [
                'label' => esc_html__('Secondary Image Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 50, 'max' => 1200],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-image-2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'about_images_border_radius',
            [
                'label' => esc_html__('Image Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .about-image > img, {{WRAPPER}} .about-image-2 img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name' => 'about_images_css_filters',
                'selector' => '{{WRAPPER}} .about-image > img, {{WRAPPER}} .about-image-2 img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_about_style_subtitle',
            [
                'label' => esc_html__('Sub Title', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .about-content .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-content .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_about_style_title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .about-content .sec_title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-content .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_about_style_descriptions',
            [
                'label' => esc_html__('Descriptions', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label' => esc_html__('Top Description Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .about-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_typography',
                'selector' => '{{WRAPPER}} .about-content .about-text',
            ]
        );

        $this->add_responsive_control(
            'description_margin',
            [
                'label' => esc_html__('Top Description Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-content .about-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'description_2_color',
            [
                'label' => esc_html__('Bottom Description Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .about-text-2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_2_typography',
                'selector' => '{{WRAPPER}} .about-content .about-text-2',
            ]
        );

        $this->add_responsive_control(
            'description_2_margin',
            [
                'label' => esc_html__('Bottom Description Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-content .about-text-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_about_style_list',
            [
                'label' => esc_html__('Feature List', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'list_item_gap',
            [
                'label' => esc_html__('Item Gap', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 80],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-content .icon-box' => 'row-gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'list_icon_size',
            [
                'label' => esc_html__('Icon Size', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 8, 'max' => 120],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-content .icon-box li .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'list_title_color',
            [
                'label' => esc_html__('Item Text Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .icon-box li .content h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'list_title_typography',
                'selector' => '{{WRAPPER}} .about-content .icon-box li .content h3',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_about_style_button',
            [
                'label' => esc_html__('Button', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label' => esc_html__('Text Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-button .theme-btn .theme-text, {{WRAPPER}} .about-button .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_text_typography',
                'selector' => '{{WRAPPER}} .about-button .theme-btn .theme-text, {{WRAPPER}} .about-button .theme-btn .theme-text2',
            ]
        );

        $this->add_responsive_control(
            'button_width',
            [
                'label' => esc_html__('Button Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 80, 'max' => 500],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-button .theme-btn' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_arrow_size',
            [
                'label' => esc_html__('Arrow Icon Size', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 8, 'max' => 80],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-button .theme-btn .theme-text img, {{WRAPPER}} .about-button .theme-btn .theme-text2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'kidzu_about_style_phone',
            [
                'label' => esc_html__('Phone Block', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'phone_icon_size',
            [
                'label' => esc_html__('Phone Icon Size', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => ['min' => 10, 'max' => 150],
                    '%' => ['min' => 10, 'max' => 100],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-button .author-icon .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'phone_label_color',
            [
                'label' => esc_html__('Label Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-button .author-icon .content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'phone_label_typography',
                'selector' => '{{WRAPPER}} .about-button .author-icon .content span',
            ]
        );

        $this->add_control(
            'phone_number_color',
            [
                'label' => esc_html__('Number Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-button .author-icon .content h4 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'phone_number_typography',
                'selector' => '{{WRAPPER}} .about-button .author-icon .content h4 a',
            ]
        );

        $this->add_responsive_control(
            'phone_block_spacing',
            [
                'label' => esc_html__('Block Top Spacing', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => ['min' => 0, 'max' => 120],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-button .author-icon' => 'margin-top: {{SIZE}}{{UNIT}};',
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
        $theme_uri = get_template_directory_uri();

        $vector_1 = !empty($settings['vector_1']['url']) ? $settings['vector_1']['url'] : $theme_uri . '/assets/img/home-1/about-vec.png';
        $vector_2 = !empty($settings['vector_2']['url']) ? $settings['vector_2']['url'] : $theme_uri . '/assets/img/home-1/about-vec2.png';
        $vector_3 = !empty($settings['vector_3']['url']) ? $settings['vector_3']['url'] : $theme_uri . '/assets/img/home-1/about-3.png';
        $about_line = !empty($settings['about_line']['url']) ? $settings['about_line']['url'] : $theme_uri . '/assets/img/home-2/about-line.png';
        $bg_shape_mask = !empty($settings['bg_shape_mask']['url']) ? $settings['bg_shape_mask']['url'] : '';
        $main_image = !empty($settings['main_image']['url']) ? $settings['main_image']['url'] : $theme_uri . '/assets/img/home-1/about-1.png';
        $secondary_image = !empty($settings['secondary_image']['url']) ? $settings['secondary_image']['url'] : $theme_uri . '/assets/img/home-1/about-2.png';
        $check_icon = !empty($settings['check_icon']['url']) ? $settings['check_icon']['url'] : $theme_uri . '/assets/img/home-1/icon/check.svg';
        $button_arrow_icon = !empty($settings['button_arrow_icon']['url']) ? $settings['button_arrow_icon']['url'] : $theme_uri . '/assets/img/icon/arrow1.svg';
        $phone_icon = !empty($settings['phone_icon']['url']) ? $settings['phone_icon']['url'] : $theme_uri . '/assets/img/home-1/icon/telephone.svg';

        $feature_items = !empty($settings['feature_items']) ? $settings['feature_items'] : [];
        $button_link = !empty($settings['button_link']['url']) ? $settings['button_link']['url'] : '#';
        $phone_number_raw = !empty($settings['phone_number']) ? $settings['phone_number'] : '';
        $phone_number_url = preg_replace('/[^0-9\+]/', '', $phone_number_raw);

        ?>



        <section class="about-section fix section-padding pt-0">
            <div class="about-vec">
                <img src="<?php echo esc_url($vector_1); ?>" alt="img">
            </div>
            <div class="about-vec2">
                <img src="<?php echo esc_url($vector_2); ?>" alt="img">
            </div>
            <div class="about-vec3">
                <img src="<?php echo esc_url($vector_3); ?>" alt="img">
            </div>
            <div class="about-wrapper">
                <div class="about-line">
                    <img src="<?php echo esc_url($about_line); ?>" alt="img">
                </div>
                <div class="bg-shape" <?php if (!empty($bg_shape_mask)) : ?>style="mask-image: url('<?php echo esc_url($bg_shape_mask); ?>'); -webkit-mask-image: url('<?php echo esc_url($bg_shape_mask); ?>');"<?php endif; ?>></div>
                <div class="row align-items-center">
                    <div class="col-xl-6 order-2 order-xl-1">
                        <div class="about-image">
                            <img src="<?php echo esc_url($main_image); ?>" alt="img" class="wow fadeInUp">
                            <div class="about-image-2">
                                <img src="<?php echo esc_url($secondary_image); ?>" alt="img" class="wow fadeInUp" data-wow-delay=".3s">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 order-1 order-xl-2">
                        <div class="about-content">
                            <div class="section-title mb-0">
                                <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['sub_title']); ?></span>
                                <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                    <?php echo esc_html($settings['title']); ?>
                                </h2>
                            </div>
                            <p class="about-text wow fadeInUp">
                                <?php echo esc_html($settings['description']); ?>
                            </p>
                            <ul class="icon-box">
                                <?php foreach ($feature_items as $item) : ?>
                                    <li class="wow fadeInUp" data-wow-delay="<?php echo esc_attr(!empty($item['item_delay']) ? $item['item_delay'] : '.3s'); ?>">
                                        <div class="icon">
                                            <img src="<?php echo esc_url($check_icon); ?>" alt="">
                                        </div>
                                        <div class="content">
                                            <h3><?php echo esc_html(!empty($item['item_title']) ? $item['item_title'] : ''); ?></h3>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <p class="about-text-2 wow fadeInUp" data-wow-delay=".4s">
                                <?php echo esc_html($settings['description_2']); ?>
                            </p>
                            <div class="about-button wow fadeInUp" data-wow-delay=".6s">
                                <a href="<?php echo esc_url($button_link); ?>" class="theme-btn">
                                    <span class="theme-bg">
                                        <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"></path>
                                        </svg>
                                    </span>
                                    <span class="theme-text"><?php echo esc_html($settings['button_text']); ?> <img src="<?php echo esc_url($button_arrow_icon); ?>" alt=""></span>
                                    <span class="theme-text2"><?php echo esc_html($settings['button_text']); ?> <img src="<?php echo esc_url($button_arrow_icon); ?>" alt=""></span>
                                </a>
                                <div class="author-icon">
                                    <div class="icon">
                                        <img src="<?php echo esc_url($phone_icon); ?>" alt="img">
                                    </div>
                                    <div class="content">
                                        <span><?php echo esc_html($settings['phone_label']); ?></span>
                                        <h4>
                                            <a href="tel:<?php echo esc_attr($phone_number_url); ?>"><?php echo esc_html($phone_number_raw); ?></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>










<?php
    }
} ?>