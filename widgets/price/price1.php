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

class FT_Price1_Widget extends \Elementor\Widget_Base
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
        return 'ft-price1';
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
        return esc_html__('FT Price 1', 'ftelements');
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
            'price1_section_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_subtitle',
            [
                'label' => esc_html__('Section Subtitle', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our Pricing', 'ftelements'),
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label' => esc_html__('Section Title', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Select A Plan According To Your Requirements', 'ftelements'),
            ]
        );

        $this->add_control(
            'monthly_tab_label',
            [
                'label' => esc_html__('Monthly Tab Label', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Monthly', 'ftelements'),
            ]
        );

        $this->add_control(
            'yearly_tab_label',
            [
                'label' => esc_html__('Yearly Tab Label', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Yearly', 'ftelements'),
            ]
        );

        $this->end_controls_section();

        $plan_repeater = new Repeater();

        $plan_repeater->add_control(
            'plan_name',
            [
                'label' => esc_html__('Plan Name', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Basic Plan', 'ftelements'),
            ]
        );

        $plan_repeater->add_control(
            'plan_price',
            [
                'label' => esc_html__('Price', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('$39', 'ftelements'),
            ]
        );

        $plan_repeater->add_control(
            'plan_period',
            [
                'label' => esc_html__('Period', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('/monthly', 'ftelements'),
            ]
        );

        $plan_repeater->add_control(
            'plan_features',
            [
                'label' => esc_html__('Features (one per line)', 'ftelements'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => "Condimentum porttitor sem\nCondimentum lacinia quisque\nFusce sagittis est fringilla auctor\nLigula enim varius lacus et luctus\nPellentesque non massa sed elit",
            ]
        );

        $plan_repeater->add_control(
            'plan_button_text',
            [
                'label' => esc_html__('Button Text', 'ftelements'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Choose Plan', 'ftelements'),
            ]
        );

        $plan_repeater->add_control(
            'plan_button_link',
            [
                'label' => esc_html__('Button Link', 'ftelements'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'ftelements'),
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $plan_repeater->add_control(
            'plan_active',
            [
                'label' => esc_html__('Highlight Plan', 'ftelements'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'ftelements'),
                'label_off' => esc_html__('No', 'ftelements'),
                'return_value' => 'yes',
                'default' => '',
            ]
        );

        $this->start_controls_section(
            'price1_monthly_plans',
            [
                'label' => esc_html__('Monthly Plans', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'monthly_plans',
            [
                'label' => esc_html__('Monthly Plan List', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $plan_repeater->get_controls(),
                'default' => [
                    [
                        'plan_name' => esc_html__('Basic Plan', 'ftelements'),
                        'plan_price' => esc_html__('$39', 'ftelements'),
                        'plan_period' => esc_html__('/monthly', 'ftelements'),
                        'plan_button_text' => esc_html__('Choose Plan', 'ftelements'),
                    ],
                    [
                        'plan_name' => esc_html__('Premium Plan', 'ftelements'),
                        'plan_price' => esc_html__('$49', 'ftelements'),
                        'plan_period' => esc_html__('/monthly', 'ftelements'),
                        'plan_button_text' => esc_html__('Choose Plan', 'ftelements'),
                        'plan_active' => 'yes',
                    ],
                    [
                        'plan_name' => esc_html__('Advanced', 'ftelements'),
                        'plan_price' => esc_html__('$99', 'ftelements'),
                        'plan_period' => esc_html__('/monthly', 'ftelements'),
                        'plan_button_text' => esc_html__('Choose Plan', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ plan_name }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'price1_yearly_plans',
            [
                'label' => esc_html__('Yearly Plans', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'yearly_plans',
            [
                'label' => esc_html__('Yearly Plan List', 'ftelements'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $plan_repeater->get_controls(),
                'default' => [
                    [
                        'plan_name' => esc_html__('Basic Plan', 'ftelements'),
                        'plan_price' => esc_html__('$390', 'ftelements'),
                        'plan_period' => esc_html__('/yearly', 'ftelements'),
                        'plan_button_text' => esc_html__('Choose Plan', 'ftelements'),
                    ],
                    [
                        'plan_name' => esc_html__('Premium Plan', 'ftelements'),
                        'plan_price' => esc_html__('$490', 'ftelements'),
                        'plan_period' => esc_html__('/yearly', 'ftelements'),
                        'plan_button_text' => esc_html__('Choose Plan', 'ftelements'),
                        'plan_active' => 'yes',
                    ],
                    [
                        'plan_name' => esc_html__('Advanced', 'ftelements'),
                        'plan_price' => esc_html__('$990', 'ftelements'),
                        'plan_period' => esc_html__('/yearly', 'ftelements'),
                        'plan_button_text' => esc_html__('Choose Plan', 'ftelements'),
                    ],
                ],
                'title_field' => '{{{ plan_name }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'price1_shape_images',
            [
                'label' => esc_html__('Shape Images', 'ftelements'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'shape_tree_image',
            [
                'label' => esc_html__('Tree Shape', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/tree-shape.png',
                ],
            ]
        );

        $this->add_control(
            'shape_pencil_image',
            [
                'label' => esc_html__('Pencil Shape', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/pencil.png',
                ],
            ]
        );

        $this->add_control(
            'shape_top_image',
            [
                'label' => esc_html__('Top Shape', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/top-shape.png',
                ],
            ]
        );

        $this->add_control(
            'plan_icon_bg_image',
            [
                'label' => esc_html__('Plan Icon Background', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/pricing/icon-bg.png',
                ],
            ]
        );

        $this->add_control(
            'plan_icon_image',
            [
                'label' => esc_html__('Plan Icon', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/pricing/icon.png',
                ],
            ]
        );

        $this->add_control(
            'plan_element_shape_image',
            [
                'label' => esc_html__('Plan Corner Shape (Default)', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/pricing/element.png',
                ],
            ]
        );

        $this->add_control(
            'plan_element_shape_active_image',
            [
                'label' => esc_html__('Plan Corner Shape (Highlighted)', 'ftelements'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/pricing/element-2.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'price1_section_style',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'section_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-section' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label' => esc_html__('Section Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .pricing-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'price1_heading_style',
            [
                'label' => esc_html__('Heading', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .pricing-wrapper .sec-sub',
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label' => esc_html__('Subtitle Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-wrapper .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label' => esc_html__('Subtitle Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .pricing-wrapper .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .pricing-wrapper .sec_title',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-wrapper .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__('Title Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .pricing-wrapper .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'price1_tabs_style',
            [
                'label' => esc_html__('Tabs', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'tabs_typography',
                'selector' => '{{WRAPPER}} .pricing-wrapper .nav .nav-link',
            ]
        );

        $this->start_controls_tabs('tabs_nav_style_tabs');

        $this->start_controls_tab(
            'tabs_nav_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'tabs_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-wrapper .nav .nav-link' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tabs_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-wrapper .nav .nav-link' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tabs_nav_active',
            [
                'label' => esc_html__('Active', 'ftelements'),
            ]
        );

        $this->add_control(
            'tabs_active_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-wrapper .nav .nav-link.active' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tabs_active_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-wrapper .nav .nav-link.active' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'tabs_border',
                'selector' => '{{WRAPPER}} .pricing-wrapper .nav .nav-link',
            ]
        );

        $this->add_responsive_control(
            'tabs_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pricing-wrapper .nav .nav-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tabs_padding',
            [
                'label' => esc_html__('Padding', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .pricing-wrapper .nav .nav-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tabs_margin',
            [
                'label' => esc_html__('Margin', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .pricing-wrapper .nav .nav-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'price1_card_style',
            [
                'label' => esc_html__('Plan Card', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'card_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-items' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'card_active_bg_color',
            [
                'label' => esc_html__('Active Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-items.active' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'card_border',
                'selector' => '{{WRAPPER}} .pricing-items',
            ]
        );

        $this->add_control(
            'card_active_border_color',
            [
                'label' => esc_html__('Active Border Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-items.active' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pricing-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .pricing-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'price1_plan_text_style',
            [
                'label' => esc_html__('Plan Text', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'plan_name_typography',
                'selector' => '{{WRAPPER}} .pricing-header h4',
            ]
        );

        $this->add_control(
            'plan_name_color',
            [
                'label' => esc_html__('Plan Name Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-header h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'plan_price_typography',
                'selector' => '{{WRAPPER}} .pricing-header h2',
            ]
        );

        $this->add_control(
            'plan_price_color',
            [
                'label' => esc_html__('Price Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-header h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'plan_period_color',
            [
                'label' => esc_html__('Period Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-header h2 span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'features_typography',
                'selector' => '{{WRAPPER}} .pricing-list li',
            ]
        );

        $this->add_control(
            'features_text_color',
            [
                'label' => esc_html__('Features Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-list li' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'features_icon_color',
            [
                'label' => esc_html__('Features Icon Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-list li i' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'features_item_spacing',
            [
                'label' => esc_html__('Feature Item Spacing', 'ftelements'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 60,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 5,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-list li' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'price1_button_style',
            [
                'label' => esc_html__('Button', 'ftelements'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typography',
                'selector' => '{{WRAPPER}} .pricing-items .theme-btn',
            ]
        );

        $this->start_controls_tabs('button_style_tabs');

        $this->start_controls_tab(
            'button_normal',
            [
                'label' => esc_html__('Normal', 'ftelements'),
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-items .theme-btn' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-items .theme-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'button_hover',
            [
                'label' => esc_html__('Hover', 'ftelements'),
            ]
        );

        $this->add_control(
            'button_hover_text_color',
            [
                'label' => esc_html__('Text Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-items .theme-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_hover_bg_color',
            [
                'label' => esc_html__('Background Color', 'ftelements'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-items .theme-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'button_border',
                'selector' => '{{WRAPPER}} .pricing-items .theme-btn',
            ]
        );

        $this->add_responsive_control(
            'button_border_radius',
            [
                'label' => esc_html__('Border Radius', 'ftelements'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pricing-items .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .pricing-items .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    private function render_plan_cards($plans = [], $settings = [])
    {
        if (empty($plans) || !is_array($plans)) {
            return;
        }

        $theme_uri = get_template_directory_uri();
        $icon_bg_url = !empty($settings['plan_icon_bg_image']['url']) ? $settings['plan_icon_bg_image']['url'] : $theme_uri . '/assets/img/pricing/icon-bg.png';
        $icon_url = !empty($settings['plan_icon_image']['url']) ? $settings['plan_icon_image']['url'] : $theme_uri . '/assets/img/pricing/icon.png';
        $element_shape_url = !empty($settings['plan_element_shape_image']['url']) ? $settings['plan_element_shape_image']['url'] : $theme_uri . '/assets/img/pricing/element.png';
        $element_shape_active_url = !empty($settings['plan_element_shape_active_image']['url']) ? $settings['plan_element_shape_active_image']['url'] : $theme_uri . '/assets/img/pricing/element-2.png';

        foreach ($plans as $index => $plan) {
            $delay = '.3s';
            if ($index === 1) {
                $delay = '.5s';
            } elseif ($index >= 2) {
                $delay = '.7s';
            }

            $plan_name = !empty($plan['plan_name']) ? $plan['plan_name'] : '';
            $plan_price = !empty($plan['plan_price']) ? $plan['plan_price'] : '';
            $plan_period = !empty($plan['plan_period']) ? $plan['plan_period'] : '';
            $plan_button_text = !empty($plan['plan_button_text']) ? $plan['plan_button_text'] : esc_html__('Choose Plan', 'ftelements');
            $plan_active = !empty($plan['plan_active']) && 'yes' === $plan['plan_active'];
            $plan_button_link = !empty($plan['plan_button_link']['url']) ? $plan['plan_button_link']['url'] : '#';
            $features_raw = !empty($plan['plan_features']) ? $plan['plan_features'] : '';
            $features = array_filter(array_map('trim', preg_split("/\r\n|\n|\r/", $features_raw)));
            ?>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                <div class="pricing-items<?php echo $plan_active ? ' active' : ''; ?>">
                    <div class="icon bg-cover" style="background-image: url('<?php echo esc_url($icon_bg_url); ?>');">
                        <img src="<?php echo esc_url($icon_url); ?>" alt="">
                    </div>
                    <div class="element-shape">
                        <img src="<?php echo esc_url($plan_active ? $element_shape_active_url : $element_shape_url); ?>" alt="shape-img">
                    </div>
                    <div class="pricing-header">
                        <h4><?php echo esc_html($plan_name); ?></h4>
                        <h2><?php echo esc_html($plan_price); ?> <span><?php echo esc_html($plan_period); ?></span></h2>
                    </div>
                    <ul class="pricing-list list-unstyled">
                        <?php foreach ($features as $feature) : ?>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <?php echo esc_html($feature); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?php echo esc_url($plan_button_link); ?>" class="theme-btn">
                        <?php echo esc_html($plan_button_text); ?> <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
            <?php
        }
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
        $section_subtitle = !empty($settings['section_subtitle']) ? $settings['section_subtitle'] : '';
        $section_title = !empty($settings['section_title']) ? $settings['section_title'] : '';
        $monthly_tab_label = !empty($settings['monthly_tab_label']) ? $settings['monthly_tab_label'] : esc_html__('Monthly', 'ftelements');
        $yearly_tab_label = !empty($settings['yearly_tab_label']) ? $settings['yearly_tab_label'] : esc_html__('Yearly', 'ftelements');
        $monthly_plans = !empty($settings['monthly_plans']) ? $settings['monthly_plans'] : [];
        $yearly_plans = !empty($settings['yearly_plans']) ? $settings['yearly_plans'] : [];
        $theme_uri = get_template_directory_uri();
        $shape_tree_url = !empty($settings['shape_tree_image']['url']) ? $settings['shape_tree_image']['url'] : $theme_uri . '/assets/img/tree-shape.png';
        $shape_pencil_url = !empty($settings['shape_pencil_image']['url']) ? $settings['shape_pencil_image']['url'] : $theme_uri . '/assets/img/pencil.png';
        $shape_top_url = !empty($settings['shape_top_image']['url']) ? $settings['shape_top_image']['url'] : $theme_uri . '/assets/img/top-shape.png';

        ?>



        <section class="pricing-section section-bg section-padding">
            <div class="tree-shape float-bob-x">
                <img src="<?php echo esc_url($shape_tree_url); ?>" alt="shape-img">
            </div>
            <div class="pencil-shape">
                <img src="<?php echo esc_url($shape_pencil_url); ?>" alt="shape-img">
            </div>
            <div class="top-shape">
                <img src="<?php echo esc_url($shape_top_url); ?>" alt="shape-img">
            </div>
            <div class="container">
                <div class="pricing-wrapper">
                    <div class="section-title mb-0 text-center">
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($section_subtitle); ?></span>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                            <?php echo wp_kses_post(nl2br($section_title)); ?>
                        </h2>
                    </div>
                    <ul class="nav" role="tablist">
                        <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                            <a href="#monthly" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">
                                <?php echo esc_html($monthly_tab_label); ?>
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                            <a href="#yearly" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                <?php echo esc_html($yearly_tab_label); ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="monthly" class="tab-pane fade show active" role="tabpanel">
                        <div class="row">
                            <?php $this->render_plan_cards($monthly_plans, $settings); ?>
                        </div>
                    </div>
                    <div id="yearly" class="tab-pane fade" role="tabpanel">
                        <div class="row">
                            <?php $this->render_plan_cards($yearly_plans, $settings); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>










<?php
    }
} ?>