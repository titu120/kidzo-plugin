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

class FT_HowWork2_Widget extends \Elementor\Widget_Base
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
        return 'ft-howwork2';
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
        return esc_html__('FT How Work 2', 'ftelements');
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
            'howwork2_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'item_title',
            [
                'label'   => esc_html__('Title', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('Choose A Service', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'item_desc',
            [
                'label'   => esc_html__('Description', 'ftelements'),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__('In a free hour, when our power of choice is untrammeled and', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'item_icon_bg',
            [
                'label'   => esc_html__('Icon Background Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/process/icon-bg.png',
                ],
            ]
        );

        $repeater->add_control(
            'item_icon',
            [
                'label'   => esc_html__('Icon Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/process/icon1.png',
                ],
            ]
        );

        $repeater->add_control(
            'item_line_image',
            [
                'label'   => esc_html__('Line Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/process/line.png',
                ],
            ]
        );

        $repeater->add_control(
            'item_line_type',
            [
                'label'   => esc_html__('Line Shape Type', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'line-shape',
                'options' => [
                    'line-shape'   => esc_html__('Line Shape 1', 'ftelements'),
                    'line-shape-2' => esc_html__('Line Shape 2', 'ftelements'),
                    'none'         => esc_html__('Hide', 'ftelements'),
                ],
            ]
        );

        $repeater->add_control(
            'item_box_class',
            [
                'label'   => esc_html__('Item Style', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    ''        => esc_html__('Default', 'ftelements'),
                    'style-2' => esc_html__('Style 2', 'ftelements'),
                ],
            ]
        );

        $repeater->add_control(
            'item_content_class',
            [
                'label'   => esc_html__('Content Style', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    ''          => esc_html__('Default', 'ftelements'),
                    'style-two' => esc_html__('Style Two', 'ftelements'),
                ],
            ]
        );

        $repeater->add_control(
            'item_delay',
            [
                'label'   => esc_html__('Animation Delay (s)', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => '.3',
            ]
        );

        $this->add_control(
            'process_items',
            [
                'label'       => esc_html__('Process Items', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    [
                        'item_title'       => esc_html__('Choose A Service', 'ftelements'),
                        'item_desc'        => esc_html__('In a free hour, when our power of choice is untrammeled and', 'ftelements'),
                        'item_icon_bg'     => ['url' => $theme_uri . '/assets/img/process/icon-bg.png'],
                        'item_icon'        => ['url' => $theme_uri . '/assets/img/process/icon1.png'],
                        'item_line_image'  => ['url' => $theme_uri . '/assets/img/process/line.png'],
                        'item_line_type'   => 'line-shape',
                        'item_box_class'   => '',
                        'item_content_class' => '',
                        'item_delay'       => '.3',
                    ],
                    [
                        'item_title'       => esc_html__('Expert Teachers', 'ftelements'),
                        'item_desc'        => esc_html__('In a free hour, when our power of choice is untrammeled and', 'ftelements'),
                        'item_icon_bg'     => ['url' => $theme_uri . '/assets/img/process/icon-bg.png'],
                        'item_icon'        => ['url' => $theme_uri . '/assets/img/process/icon2.png'],
                        'item_line_image'  => ['url' => $theme_uri . '/assets/img/process/line-2.png'],
                        'item_line_type'   => 'line-shape-2',
                        'item_box_class'   => 'style-2',
                        'item_content_class' => '',
                        'item_delay'       => '.5',
                    ],
                    [
                        'item_title'       => esc_html__('E-Learning Media', 'ftelements'),
                        'item_desc'        => esc_html__('In a free hour, when our power of choice is untrammeled and', 'ftelements'),
                        'item_icon_bg'     => ['url' => $theme_uri . '/assets/img/process/icon-bg.png'],
                        'item_icon'        => ['url' => $theme_uri . '/assets/img/process/icon3.png'],
                        'item_line_image'  => ['url' => $theme_uri . '/assets/img/process/line.png'],
                        'item_line_type'   => 'line-shape',
                        'item_box_class'   => '',
                        'item_content_class' => '',
                        'item_delay'       => '.7',
                    ],
                    [
                        'item_title'       => esc_html__('Full Day Programs', 'ftelements'),
                        'item_desc'        => esc_html__('In a free hour, when our power of choice is untrammeled and', 'ftelements'),
                        'item_icon_bg'     => ['url' => $theme_uri . '/assets/img/process/icon-bg.png'],
                        'item_icon'        => ['url' => $theme_uri . '/assets/img/process/icon4.png'],
                        'item_line_image'  => ['url' => $theme_uri . '/assets/img/process/line.png'],
                        'item_line_type'   => 'none',
                        'item_box_class'   => '',
                        'item_content_class' => 'style-two',
                        'item_delay'       => '.8',
                    ],
                ],
                'title_field' => '{{{ item_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'howwork2_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .work-process-section',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'howwork2_style_item',
            [
                'label' => esc_html__('Item Box', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'item_box_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .work-process-section .work-process-items',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'item_box_border',
                'selector' => '{{WRAPPER}} .work-process-section .work-process-items',
            ]
        );

        $this->add_responsive_control(
            'item_box_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section .work-process-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_box_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section .work-process-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_box_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section .work-process-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'item_content_alignment',
            [
                'label'     => esc_html__('Alignment', 'ftelements'),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left' => [
                        'title' => esc_html__('Left', 'ftelements'),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'ftelements'),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'ftelements'),
                        'icon'  => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .work-process-section .work-process-items' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'howwork2_style_icon',
            [
                'label' => esc_html__('Icon', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'icon_wrapper_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .work-process-section .work-process-items .icon',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'icon_wrapper_border',
                'selector' => '{{WRAPPER}} .work-process-section .work-process-items .icon',
            ]
        );

        $this->add_responsive_control(
            'icon_wrapper_radius',
            [
                'label'      => esc_html__('Wrapper Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section .work-process-items .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_wrapper_size',
            [
                'label'      => esc_html__('Wrapper Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 40,
                        'max' => 300,
                    ],
                    '%'  => [
                        'min' => 5,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section .work-process-items .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_image_width',
            [
                'label'      => esc_html__('Icon Image Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 10,
                        'max' => 250,
                    ],
                    '%'  => [
                        'min' => 5,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section .work-process-items .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'icon_image_css_filters',
                'selector' => '{{WRAPPER}} .work-process-section .work-process-items .icon img',
            ]
        );

        $this->add_responsive_control(
            'icon_spacing',
            [
                'label'      => esc_html__('Icon Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section .work-process-items .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'howwork2_style_line_shape',
            [
                'label' => esc_html__('Line Shape', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'line_shape_width',
            [
                'label'      => esc_html__('Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 10,
                        'max' => 500,
                    ],
                    '%'  => [
                        'min' => 5,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section .work-process-items .line-shape img, {{WRAPPER}} .work-process-section .work-process-items .line-shape-2 img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'line_shape_css_filters',
                'selector' => '{{WRAPPER}} .work-process-section .work-process-items .line-shape img, {{WRAPPER}} .work-process-section .work-process-items .line-shape-2 img',
            ]
        );

        $this->add_responsive_control(
            'line_shape_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section .work-process-items .line-shape, {{WRAPPER}} .work-process-section .work-process-items .line-shape-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'howwork2_style_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'item_title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .work-process-section .work-process-items .content h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'item_title_typography',
                'selector' => '{{WRAPPER}} .work-process-section .work-process-items .content h3',
            ]
        );

        $this->add_responsive_control(
            'item_title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section .work-process-items .content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'howwork2_style_description',
            [
                'label' => esc_html__('Description', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'item_description_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .work-process-section .work-process-items .content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'item_description_typography',
                'selector' => '{{WRAPPER}} .work-process-section .work-process-items .content p',
            ]
        );

        $this->add_responsive_control(
            'item_description_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .work-process-section .work-process-items .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $items    = ! empty($settings['process_items']) && is_array($settings['process_items']) ? $settings['process_items'] : [];

        ?>




        <section class="work-process-section fix section-padding fix">
            <div class="container">
                <div class="process-work-wrapper">
                    <div class="row g-4">
                        <?php foreach ($items as $item) :
                            $title         = isset($item['item_title']) ? $item['item_title'] : '';
                            $desc          = isset($item['item_desc']) ? $item['item_desc'] : '';
                            $icon_bg       = ! empty($item['item_icon_bg']['url']) ? $item['item_icon_bg']['url'] : '';
                            $icon          = ! empty($item['item_icon']['url']) ? $item['item_icon']['url'] : '';
                            $line_img      = ! empty($item['item_line_image']['url']) ? $item['item_line_image']['url'] : '';
                            $line_type     = isset($item['item_line_type']) ? $item['item_line_type'] : 'line-shape';
                            $item_box_class = isset($item['item_box_class']) ? trim((string) $item['item_box_class']) : '';
                            $content_class = isset($item['item_content_class']) ? trim((string) $item['item_content_class']) : '';
                            $delay         = isset($item['item_delay']) && '' !== trim((string) $item['item_delay']) ? trim((string) $item['item_delay']) : '.3';

                            $wrapper_classes = 'work-process-items text-center';
                            if ($item_box_class) {
                                $wrapper_classes .= ' ' . sanitize_html_class($item_box_class);
                            }
                            $content_class_attr = $content_class ? ' ' . esc_attr(sanitize_html_class($content_class)) : '';
                            $is_style_two       = ('style-two' === $content_class);
                            ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                            <div class="<?php echo esc_attr($wrapper_classes); ?>">
                                <?php if ('none' !== $line_type && $line_img) : ?>
                                <div class="<?php echo esc_attr(sanitize_html_class($line_type)); ?>">
                                    <img src="<?php echo esc_url($line_img); ?>" alt="shape-img">
                                </div>
                                <?php endif; ?>
                                <?php if ($is_style_two) : ?>
                                <div class="content<?php echo $content_class_attr; ?>">
                                    <?php if ($title) : ?>
                                    <h3><?php echo esc_html($title); ?></h3>
                                    <?php endif; ?>
                                    <?php if ($desc) : ?>
                                    <p><?php echo esc_html($desc); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="icon bg-cover"<?php echo $icon_bg ? ' style="background-image: url(\'' . esc_url($icon_bg) . '\');"' : ''; ?>>
                                    <?php if ($icon) : ?>
                                    <img src="<?php echo esc_url($icon); ?>" alt="img">
                                    <?php endif; ?>
                                </div>
                                <?php else : ?>
                                <div class="icon bg-cover"<?php echo $icon_bg ? ' style="background-image: url(\'' . esc_url($icon_bg) . '\');"' : ''; ?>>
                                    <?php if ($icon) : ?>
                                    <img src="<?php echo esc_url($icon); ?>" alt="img">
                                    <?php endif; ?>
                                </div>
                                <div class="content<?php echo $content_class_attr; ?>">
                                    <?php if ($title) : ?>
                                    <h3><?php echo esc_html($title); ?></h3>
                                    <?php endif; ?>
                                    <?php if ($desc) : ?>
                                    <p><?php echo esc_html($desc); ?></p>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>









<?php
    }
} ?>