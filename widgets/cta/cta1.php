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

class FT_Cta1_Widget extends \Elementor\Widget_Base
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
        return 'ft-cta1';
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
        return esc_html__('FT CTA 1', 'ftelements');
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
            'background_image',
            [
                'label'   => esc_html__('Background Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'shape_image_1',
            [
                'label'   => esc_html__('Shape Image 1', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'shape_image_2',
            [
                'label'   => esc_html__('Shape Image 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label'       => esc_html__('Subtitle', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Daily Schedule', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('Book Admission <br> For Your Child', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'phone_icon',
            [
                'label'   => esc_html__('Phone Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'phone_label',
            [
                'label'       => esc_html__('Phone Label', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('Call Us Now', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'phone_number',
            [
                'label'       => esc_html__('Phone Number', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__('+11 123 0654 98', 'ftelements'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'vector_image_1',
            [
                'label'   => esc_html__('Vector Image 1', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'vector_image_2',
            [
                'label'   => esc_html__('Vector Image 2', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_wrapper',
            [
                'label' => esc_html__('Wrapper', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'wrapper_padding',
            [
                'label'      => esc_html__('Section Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .book-admission-banner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_max_width',
            [
                'label'      => esc_html__('Content Max Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .book-admission-banner .content' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'content_alignment',
            [
                'label'     => esc_html__('Content Alignment', 'ftelements'),
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
                    '{{WRAPPER}} .book-admission-banner .content' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'wrapper_overlay',
                'label'    => esc_html__('Overlay', 'ftelements'),
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .book-admission-banner',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_subtitle',
            [
                'label' => esc_html__('Subtitle', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .book-admission-banner .section-title .sec-sub',
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-admission-banner .section-title .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'subtitle_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .book-admission-banner .section-title .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_title',
            [
                'label' => esc_html__('Title', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .book-admission-banner .section-title .tx-title',
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-admission-banner .section-title .tx-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'title_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .book-admission-banner .section-title .tx-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_info_box',
            [
                'label' => esc_html__('Phone Info Box', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'info_box_margin',
            [
                'label'      => esc_html__('Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .book-admission-banner .info-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'info_box_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .book-admission-banner .info-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'info_box_border',
                'selector' => '{{WRAPPER}} .book-admission-banner .info-content',
            ]
        );

        $this->add_responsive_control(
            'info_box_border_radius',
            [
                'label'      => esc_html__('Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .book-admission-banner .info-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'info_box_background',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .book-admission-banner .info-content',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_phone_icon',
            [
                'label' => esc_html__('Phone Icon', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'phone_icon_size',
            [
                'label'      => esc_html__('Size', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .book-admission-banner .info-content .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'phone_icon_spacing',
            [
                'label'      => esc_html__('Right Spacing', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .book-admission-banner .info-content .icon' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Css_Filter::get_type(),
            [
                'name'     => 'phone_icon_css_filters',
                'selector' => '{{WRAPPER}} .book-admission-banner .info-content .icon img',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_section_phone_text',
            [
                'label' => esc_html__('Phone Text', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'phone_label_typography',
                'selector' => '{{WRAPPER}} .book-admission-banner .info-content .info-cont p',
            ]
        );

        $this->add_control(
            'phone_label_color',
            [
                'label'     => esc_html__('Label Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-admission-banner .info-content .info-cont p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'phone_number_typography',
                'selector' => '{{WRAPPER}} .book-admission-banner .info-content .info-cont h3 a',
            ]
        );

        $this->add_control(
            'phone_number_color',
            [
                'label'     => esc_html__('Number Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-admission-banner .info-content .info-cont h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'phone_number_hover_color',
            [
                'label'     => esc_html__('Number Hover Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .book-admission-banner .info-content .info-cont h3 a:hover' => 'color: {{VALUE}};',
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
        $background_image = !empty($settings['background_image']['url']) ? $settings['background_image']['url'] : '';
        $shape_image_1 = !empty($settings['shape_image_1']['url']) ? $settings['shape_image_1']['url'] : '';
        $shape_image_2 = !empty($settings['shape_image_2']['url']) ? $settings['shape_image_2']['url'] : '';
        $phone_icon = !empty($settings['phone_icon']['url']) ? $settings['phone_icon']['url'] : '';
        $vector_image_1 = !empty($settings['vector_image_1']['url']) ? $settings['vector_image_1']['url'] : '';
        $vector_image_2 = !empty($settings['vector_image_2']['url']) ? $settings['vector_image_2']['url'] : '';
        $phone_number = !empty($settings['phone_number']) ? $settings['phone_number'] : '';
        $phone_url = preg_replace('/[^0-9\+]/', '', $phone_number);

        ?>
        <section class="book-admission-banner  bg-cover section-padding" <?php if (!empty($background_image)) : ?>style="background-image: url('<?php echo esc_url($background_image); ?>');"<?php endif; ?>>
            <div class="container">
                <div class="book-admission-content">
                    <div class="bg-shape">
                        <?php if (!empty($shape_image_1)) : ?>
                            <img src="<?php echo esc_url($shape_image_1); ?>" alt="img">
                        <?php endif; ?>
                        <div class="bg-shape2">
                            <?php if (!empty($shape_image_2)) : ?>
                                <img src="<?php echo esc_url($shape_image_2); ?>" alt="img">
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="content">
                        <div class="section-title mb-0">
                            <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['subtitle']); ?></span>
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                <?php echo wp_kses_post($settings['title']); ?>
                            </h2>
                        </div>
                        <div class="info-content wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <?php if (!empty($phone_icon)) : ?>
                                    <img src="<?php echo esc_url($phone_icon); ?>" alt="img">
                                <?php endif; ?>
                            </div>
                            <div class="info-cont">
                                <p>
                                    <?php echo esc_html($settings['phone_label']); ?>
                                </p>
                                <h3>
                                    <a href="tel:<?php echo esc_attr($phone_url); ?>"><?php echo esc_html($phone_number); ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="vec-1">
                        <?php if (!empty($vector_image_1)) : ?>
                            <img src="<?php echo esc_url($vector_image_1); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="vec-2">
                        <?php if (!empty($vector_image_2)) : ?>
                            <img src="<?php echo esc_url($vector_image_2); ?>" alt="">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
} ?>