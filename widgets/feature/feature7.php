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

class FT_Feature7_Widget extends \Elementor\Widget_Base
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
        return 'ft-feature7';
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
        return esc_html__('FT Feature 7', 'ftelements');
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
            'feature7_content',
            [
                'label' => esc_html__('Content', 'kidzu'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'section_class',
            [
                'label' => esc_html__('Section Class', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => 'feature-value-section5 fix section-padding section-bg-2',
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__('Subtitle', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our values', 'kidzu'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("The Best Playschool \nFor Your kid", 'kidzu'),
            ]
        );

        $this->add_control(
            'shape_1_image',
            [
                'label' => esc_html__('Shape 1 Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/value/shape-1.png',
                ],
            ]
        );

        $this->add_control(
            'shape_2_image',
            [
                'label' => esc_html__('Shape 2 Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/value/shape-2.png',
                ],
            ]
        );

        $left_repeater = new Repeater();

        $left_repeater->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Teacher Training and Progress', 'kidzu'),
            ]
        );

        $left_repeater->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Adipiscing elit Praesent luctus laoreet iaculis Curabitur rutrum lectus augue, ut pulvinar.', 'kidzu'),
            ]
        );

        $left_repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/03.svg',
                ],
            ]
        );

        $left_repeater->add_control(
            'icon_class',
            [
                'label' => esc_html__('Icon Extra Class', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => '',
            ]
        );

        $left_repeater->add_control(
            'wow_delay',
            [
                'label' => esc_html__('Animation Delay', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => '.3s',
            ]
        );

        $this->add_control(
            'left_items',
            [
                'label' => esc_html__('Left Items', 'kidzu'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $left_repeater->get_controls(),
                'default' => [
                    [
                        'title' => esc_html__('Teacher Training and Progress', 'kidzu'),
                        'description' => esc_html__('Adipiscing elit Praesent luctus laoreet iaculis Curabitur rutrum lectus augue, ut pulvinar.', 'kidzu'),
                        'icon' => ['url' => $theme_uri . '/assets/img/icon/03.svg'],
                        'icon_class' => '',
                        'wow_delay' => '.3s',
                    ],
                    [
                        'title' => esc_html__('Nanny Selection 24/7', 'kidzu'),
                        'description' => esc_html__('Adipiscing elit Praesent luctus laoreet iaculis Curabitur rutrum lectus augue, ut pulvinar.', 'kidzu'),
                        'icon' => ['url' => $theme_uri . '/assets/img/icon/04.svg'],
                        'icon_class' => 'color-2',
                        'wow_delay' => '.5s',
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->add_control(
            'center_main_image',
            [
                'label' => esc_html__('Center Main Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/cta/cta-2.png',
                ],
            ]
        );

        $this->add_control(
            'center_shape_image',
            [
                'label' => esc_html__('Center Shape Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/cta/cta-shape-2.png',
                ],
            ]
        );

        $right_repeater = new Repeater();

        $right_repeater->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Advanced Placement Courses', 'kidzu'),
            ]
        );

        $right_repeater->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Adipiscing elit Praesent luctus laoreet iaculis Curabitur rutrum lectus augue, ut pulvinar.', 'kidzu'),
            ]
        );

        $right_repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/05.svg',
                ],
            ]
        );

        $right_repeater->add_control(
            'icon_class',
            [
                'label' => esc_html__('Icon Extra Class', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => 'color-3',
            ]
        );

        $right_repeater->add_control(
            'wow_delay',
            [
                'label' => esc_html__('Animation Delay', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => '.3s',
            ]
        );

        $this->add_control(
            'right_items',
            [
                'label' => esc_html__('Right Items', 'kidzu'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $right_repeater->get_controls(),
                'default' => [
                    [
                        'title' => esc_html__('Advanced Placement Courses', 'kidzu'),
                        'description' => esc_html__('Adipiscing elit Praesent luctus laoreet iaculis Curabitur rutrum lectus augue, ut pulvinar.', 'kidzu'),
                        'icon' => ['url' => $theme_uri . '/assets/img/icon/05.svg'],
                        'icon_class' => 'color-3',
                        'wow_delay' => '.3s',
                    ],
                    [
                        'title' => esc_html__('Self-contained gifted programs', 'kidzu'),
                        'description' => esc_html__('Adipiscing elit Praesent luctus laoreet iaculis Curabitur rutrum lectus augue, ut pulvinar.', 'kidzu'),
                        'icon' => ['url' => $theme_uri . '/assets/img/icon/06.svg'],
                        'icon_class' => 'color-2 color-4',
                        'wow_delay' => '.5s',
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature7_style_section',
            [
                'label' => esc_html__('Section', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature7_section_bg',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .feature-value-section5',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'feature7_section_border',
                'selector' => '{{WRAPPER}} .feature-value-section5',
            ]
        );

        $this->add_responsive_control(
            'feature7_section_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'feature7_section_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'feature7_section_radius',
            [
                'label' => esc_html__('Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature7_style_heading',
            [
                'label' => esc_html__('Heading', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'feature7_subtitle_color',
            [
                'label' => esc_html__('Subtitle Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .tx-subTitle' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'feature7_subtitle_typography',
                'selector' => '{{WRAPPER}} .feature-value-section5 .tx-subTitle',
            ]
        );

        $this->add_responsive_control(
            'feature7_subtitle_margin',
            [
                'label' => esc_html__('Subtitle Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .tx-subTitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'feature7_title_color',
            [
                'label' => esc_html__('Title Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .sec_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'feature7_title_typography',
                'selector' => '{{WRAPPER}} .feature-value-section5 .sec_title',
            ]
        );

        $this->add_responsive_control(
            'feature7_title_margin',
            [
                'label' => esc_html__('Title Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature7_style_item_box',
            [
                'label' => esc_html__('Feature Item Box', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'feature7_item_box_bg',
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .feature-value-section5 .value-icon-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'feature7_item_box_border',
                'selector' => '{{WRAPPER}} .feature-value-section5 .value-icon-items',
            ]
        );

        $this->add_responsive_control(
            'feature7_item_box_padding',
            [
                'label' => esc_html__('Padding', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .value-icon-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'feature7_item_box_margin',
            [
                'label' => esc_html__('Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .value-icon-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'feature7_item_box_radius',
            [
                'label' => esc_html__('Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .value-icon-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature7_style_icon',
            [
                'label' => esc_html__('Icon', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'feature7_icon_bg_color',
            [
                'label' => esc_html__('Background Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .value-icon-items .icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'feature7_icon_border',
                'selector' => '{{WRAPPER}} .feature-value-section5 .value-icon-items .icon',
            ]
        );

        $this->add_responsive_control(
            'feature7_icon_size',
            [
                'label' => esc_html__('Icon Width', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .value-icon-items .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'feature7_icon_box_size',
            [
                'label' => esc_html__('Icon Box Size', 'kidzu'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .value-icon-items .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'feature7_icon_radius',
            [
                'label' => esc_html__('Border Radius', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .value-icon-items .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature7_style_text',
            [
                'label' => esc_html__('Text', 'kidzu'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'feature7_item_title_color',
            [
                'label' => esc_html__('Item Title Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .value-icon-items .content h5' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'feature7_item_title_typography',
                'selector' => '{{WRAPPER}} .feature-value-section5 .value-icon-items .content h5',
            ]
        );

        $this->add_responsive_control(
            'feature7_item_title_margin',
            [
                'label' => esc_html__('Item Title Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .value-icon-items .content h5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'feature7_item_desc_color',
            [
                'label' => esc_html__('Description Color', 'kidzu'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .value-icon-items .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'feature7_item_desc_typography',
                'selector' => '{{WRAPPER}} .feature-value-section5 .value-icon-items .content p',
            ]
        );

        $this->add_responsive_control(
            'feature7_item_desc_margin',
            [
                'label' => esc_html__('Description Margin', 'kidzu'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .feature-value-section5 .value-icon-items .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $section_class = !empty($settings['section_class']) ? $settings['section_class'] : 'feature-value-section5 fix section-padding section-bg-2';
?>
        <section class="<?php echo esc_attr($section_class); ?>">
            <div class="shape-1">
                <?php if (!empty($settings['shape_1_image']['url'])) : ?>
                    <img src="<?php echo esc_url($settings['shape_1_image']['url']); ?>" alt="shape-img">
                <?php endif; ?>
            </div>
            <div class="shape-2 float-bob-x">
                <?php if (!empty($settings['shape_2_image']['url'])) : ?>
                    <img src="<?php echo esc_url($settings['shape_2_image']['url']); ?>" alt="shape-img">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <?php if (!empty($settings['subtitle'])) : ?>
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['subtitle']); ?></span>
                    <?php endif; ?>
                    <?php if (!empty($settings['title'])) : ?>
                        <h2 class="tx-title sec_title tz-itm-title tz-itm-anim"><?php echo wp_kses_post(nl2br($settings['title'])); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="feature-value-items5">
                            <?php if (!empty($settings['left_items'])) :
                                foreach ($settings['left_items'] as $item) :
                                    $delay = !empty($item['wow_delay']) ? $item['wow_delay'] : '.3s';
                                    $icon_class = !empty($item['icon_class']) ? $item['icon_class'] : '';
                            ?>
                                    <div class="value-icon-items wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                                        <div class="icon <?php echo esc_attr($icon_class); ?>">
                                            <?php if (!empty($item['icon']['url'])) : ?>
                                                <img src="<?php echo esc_url($item['icon']['url']); ?>" alt="img">
                                            <?php endif; ?>
                                        </div>
                                        <div class="content">
                                            <?php if (!empty($item['title'])) : ?>
                                                <h5><?php echo esc_html($item['title']); ?></h5>
                                            <?php endif; ?>
                                            <?php if (!empty($item['description'])) : ?>
                                                <p><?php echo esc_html($item['description']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                            <?php
                                endforeach;
                            endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="feature-value-items5">
                            <div class="feature-value-image">
                                <?php if (!empty($settings['center_main_image']['url'])) : ?>
                                    <img src="<?php echo esc_url($settings['center_main_image']['url']); ?>" alt="img">
                                <?php endif; ?>
                                <div class="value-shape">
                                    <?php if (!empty($settings['center_shape_image']['url'])) : ?>
                                        <img src="<?php echo esc_url($settings['center_shape_image']['url']); ?>" alt="shape-img">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="feature-value-items5">
                            <?php if (!empty($settings['right_items'])) :
                                foreach ($settings['right_items'] as $item) :
                                    $delay = !empty($item['wow_delay']) ? $item['wow_delay'] : '.3s';
                                    $icon_class = !empty($item['icon_class']) ? $item['icon_class'] : '';
                            ?>
                                    <div class="value-icon-items style-2 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                                        <div class="content">
                                            <?php if (!empty($item['title'])) : ?>
                                                <h5><?php echo esc_html($item['title']); ?></h5>
                                            <?php endif; ?>
                                            <?php if (!empty($item['description'])) : ?>
                                                <p><?php echo esc_html($item['description']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="icon <?php echo esc_attr($icon_class); ?>">
                                            <?php if (!empty($item['icon']['url'])) : ?>
                                                <img src="<?php echo esc_url($item['icon']['url']); ?>" alt="img">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                            <?php
                                endforeach;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
} ?>