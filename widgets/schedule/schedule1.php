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

class FT_Schedule1_Widget extends \Elementor\Widget_Base
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
        return 'ft-schedule1';
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
        return esc_html__('FT Schedule 1', 'ftelements');
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
            'content_section',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_subtitle',
            [
                'label'       => esc_html__('Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Daily Schedule', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Our Daily Schedule', 'ftelements'),
                'label_block' => true,
            ]
        );

        $item_repeater = new Repeater();

        $item_repeater->add_control(
            'time',
            [
                'label'       => esc_html__('Time', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('7:00 - 8:00', 'ftelements'),
                'label_block' => true,
            ]
        );

        $item_repeater->add_control(
            'description',
            [
                'label'   => esc_html__('Description', 'ftelements'),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
            ]
        );

        $item_repeater->add_control(
            'bg_shape_class',
            [
                'label'   => esc_html__('Background Shape Variant', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    ''     => esc_html__('Default', 'ftelements'),
                    'bg-2' => esc_html__('Variant 2', 'ftelements'),
                    'bg-3' => esc_html__('Variant 3', 'ftelements'),
                    'bg-4' => esc_html__('Variant 4', 'ftelements'),
                ],
            ]
        );

        $item_repeater->add_control(
            'animation_delay',
            [
                'label'       => esc_html__('Animation Delay', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => '.2s',
                'description' => esc_html__('Example: .2s, .4s, .6s', 'ftelements'),
            ]
        );

        $tab_repeater = new Repeater();

        $tab_repeater->add_control(
            'tab_title',
            [
                'label'       => esc_html__('Tab Title', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Play Group', 'ftelements'),
                'label_block' => true,
            ]
        );

        $tab_repeater->add_control(
            'schedule_items',
            [
                'label'       => esc_html__('Schedule Items', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $item_repeater->get_controls(),
                'title_field' => '{{{ time }}}',
                'default'     => [
                    [
                        'time'            => esc_html__('7:00 - 8:00', 'ftelements'),
                        'description'     => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
                        'bg_shape_class'  => '',
                        'animation_delay' => '.2s',
                    ],
                    [
                        'time'            => esc_html__('8:00 - 8:30', 'ftelements'),
                        'description'     => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
                        'bg_shape_class'  => 'bg-2',
                        'animation_delay' => '.4s',
                    ],
                    [
                        'time'            => esc_html__('8:30 - 10:30', 'ftelements'),
                        'description'     => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
                        'bg_shape_class'  => 'bg-3',
                        'animation_delay' => '.6s',
                    ],
                    [
                        'time'            => esc_html__('10:30 - 12:00', 'ftelements'),
                        'description'     => esc_html__('Amet, in vitae, mauris volutpat. Fermentum rhoncus sed morbi feugiat.', 'ftelements'),
                        'bg_shape_class'  => 'bg-4',
                        'animation_delay' => '.8s',
                    ],
                ],
            ]
        );

        $this->add_control(
            'schedule_tabs',
            [
                'label'       => esc_html__('Schedule Tabs', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $tab_repeater->get_controls(),
                'title_field' => '{{{ tab_title }}}',
                'default'     => [
                    [
                        'tab_title' => esc_html__('Play Group', 'ftelements'),
                    ],
                    [
                        'tab_title' => esc_html__('Nursery Group', 'ftelements'),
                    ],
                    [
                        'tab_title' => esc_html__('Kindergarten (KG)', 'ftelements'),
                    ],
                ],
            ]
        );

        $this->add_control(
            'item_icon',
            [
                'label'   => esc_html__('Item Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-1/pocket-watch.png',
                ],
            ]
        );

        $this->add_control(
            'item_shape_image',
            [
                'label' => esc_html__('Item Shape Image', 'ftelements'),
                'type'  => Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'section_shape_image',
            [
                'label'   => esc_html__('Section Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'assets/img/home-1/vec5.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_heading_style',
            [
                'label' => esc_html__('Section Heading', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Subtitle Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .schedule-section .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label'      => esc_html__('Subtitle Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .schedule-section .sec_title',
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Title Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'tabs_style_section',
            [
                'label' => esc_html__('Tabs', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'tabs_gap',
            [
                'label'     => esc_html__('Tabs Gap', 'ftelements'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 60,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav' => 'gap: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'tab_text_color',
            [
                'label'     => esc_html__('Tab Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tab_text_color_active',
            [
                'label'     => esc_html__('Active Tab Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link.active' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tab_bg_color',
            [
                'label'     => esc_html__('Tab Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'tab_bg_color_active',
            [
                'label'     => esc_html__('Active Tab Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link.active' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'tab_typography',
                'selector' => '{{WRAPPER}} .schedule-section .nav .nav-link',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'tab_border',
                'selector' => '{{WRAPPER}} .schedule-section .nav .nav-link',
            ]
        );

        $this->add_responsive_control(
            'tab_border_radius',
            [
                'label'      => esc_html__('Tab Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'tab_padding',
            [
                'label'      => esc_html__('Tab Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .nav .nav-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'card_style_section',
            [
                'label' => esc_html__('Schedule Card', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'card_background',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'card_border',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items',
            ]
        );

        $this->add_responsive_control(
            'card_border_radius',
            [
                'label'      => esc_html__('Card Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_padding',
            [
                'label'      => esc_html__('Card Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'card_margin',
            [
                'label'      => esc_html__('Card Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'item_icon_style_section',
            [
                'label' => esc_html__('Item Icon', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_size',
            [
                'label'      => esc_html__('Icon Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 10,
                        'max' => 200,
                    ],
                    '%'  => [
                        'min' => 10,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_margin',
            [
                'label'      => esc_html__('Icon Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'icon_css_filters',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items .icon img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'shape_images_style_section',
            [
                'label' => esc_html__('Shape Images', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'section_shape_width',
            [
                'label'      => esc_html__('Section Shape Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 10,
                        'max' => 600,
                    ],
                    '%'  => [
                        'min' => 5,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .vec-5 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_shape_width',
            [
                'label'      => esc_html__('Item Shape Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 10,
                        'max' => 600,
                    ],
                    '%'  => [
                        'min' => 5,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .bg-shape img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_shape_height',
            [
                'label'      => esc_html__('Item Shape Height', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 10,
                        'max' => 600,
                    ],
                    '%'  => [
                        'min' => 5,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .bg-shape img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'shape_image_css_filters',
                'selector' => '{{WRAPPER}} .schedule-section .vec-5 img, {{WRAPPER}} .schedule-section .schedule-box-items .bg-shape img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'item_content_style_section',
            [
                'label' => esc_html__('Item Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'time_color',
            [
                'label'     => esc_html__('Time Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'time_typography',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items .content h3',
            ]
        );

        $this->add_responsive_control(
            'time_margin',
            [
                'label'      => esc_html__('Time Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'description_color',
            [
                'label'     => esc_html__('Description Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'description_typography',
                'selector' => '{{WRAPPER}} .schedule-section .schedule-box-items .content p',
            ]
        );

        $this->add_responsive_control(
            'description_margin',
            [
                'label'      => esc_html__('Description Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .schedule-section .schedule-box-items .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $schedule_tabs = !empty($settings['schedule_tabs']) ? $settings['schedule_tabs'] : [];

        if (empty($schedule_tabs)) {
            return;
        }

        $subtitle = !empty($settings['section_subtitle']) ? $settings['section_subtitle'] : '';
        $title = !empty($settings['section_title']) ? $settings['section_title'] : '';
        $item_icon = !empty($settings['item_icon']['url']) ? $settings['item_icon']['url'] : 'assets/img/home-1/pocket-watch.png';
        $item_shape_image = !empty($settings['item_shape_image']['url']) ? $settings['item_shape_image']['url'] : '';
        $section_shape_image = !empty($settings['section_shape_image']['url']) ? $settings['section_shape_image']['url'] : 'assets/img/home-1/vec5.png';

        ?>



        <section class="schedule-section fix section-padding">
            <div class="vec-5 bz-gsap-animate-circle d-none d-xl-block">
                <img src="<?php echo esc_url($section_shape_image); ?>" alt="img">
            </div>
            <div class="container">
                <div class="section-title-area bb-bottom align-items-end">
                    <div class="section-title">
                        <?php if (!empty($subtitle)) : ?>
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($subtitle); ?></span>
                        <?php endif; ?>
                        <?php if (!empty($title)) : ?>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                            <?php echo esc_html($title); ?>
                        </h2>
                        <?php endif; ?>
                    </div>
                    <ul class="nav mt-0 justify-content-center justify-content-lg-start wow fadeInUp" data-wow-delay=".3s">
                        <?php foreach ($schedule_tabs as $tab_index => $tab) :
                            $tab_id = 'schedule-tab-' . esc_attr($this->get_id()) . '-' . ($tab_index + 1);
                            $tab_title = !empty($tab['tab_title']) ? $tab['tab_title'] : '';
                            ?>
                        <li class="nav-item">
                            <a href="#<?php echo esc_attr($tab_id); ?>" data-bs-toggle="tab" class="nav-link <?php echo $tab_index === 0 ? 'active' : ''; ?>">
                                <?php echo esc_html($tab_title); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="tab-content">
                    <?php foreach ($schedule_tabs as $tab_index => $tab) :
                        $tab_id = 'schedule-tab-' . $this->get_id() . '-' . ($tab_index + 1);
                        $items = !empty($tab['schedule_items']) ? $tab['schedule_items'] : [];
                        ?>
                    <div id="<?php echo esc_attr($tab_id); ?>" class="tab-pane fade <?php echo $tab_index === 0 ? 'show active' : ''; ?>">
                        <div class="row">
                            <?php foreach ($items as $item_index => $item) :
                                $time = !empty($item['time']) ? $item['time'] : '';
                                $description = !empty($item['description']) ? $item['description'] : '';
                                $bg_shape_class = !empty($item['bg_shape_class']) ? $item['bg_shape_class'] : '';
                                $animation_delay = !empty($item['animation_delay']) ? $item['animation_delay'] : '';
                                ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" <?php echo !empty($animation_delay) ? 'data-wow-delay="' . esc_attr($animation_delay) . '"' : ''; ?>>
                                <div class="schedule-box-items">
                                    <div class="bg-shape <?php echo esc_attr($bg_shape_class); ?>">
                                        <?php if (!empty($item_shape_image)) : ?>
                                        <img src="<?php echo esc_url($item_shape_image); ?>" alt="shape">
                                        <?php endif; ?>
                                    </div>
                                    <div class="icon">
                                        <img src="<?php echo esc_url($item_icon); ?>" alt="img">
                                    </div>
                                    <div class="content">
                                        <?php if (!empty($time)) : ?>
                                        <h3>
                                            <?php echo esc_html($time); ?>
                                        </h3>
                                        <?php endif; ?>
                                        <?php if (!empty($description)) : ?>
                                        <p>
                                            <?php echo esc_html($description); ?>
                                        </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>










<?php
    }
} ?>