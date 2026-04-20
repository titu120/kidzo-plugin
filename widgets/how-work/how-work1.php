<?php

use Elementor\Repeater;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Typography;

defined('ABSPATH') || die();

class FT_HowWork1_Widget extends \Elementor\Widget_Base
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
        return 'ft-howwork1';
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
        return esc_html__('FT How Work 1', 'ftelements');
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
            'howwork1_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'img_section_bg',
            [
                'label'   => esc_html__('Section Background', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/how-work-bg.png',
                ],
            ]
        );

        $this->add_control(
            'img_shape',
            [
                'label'   => esc_html__('Corner Shape', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/shape6.png',
                ],
            ]
        );

        $this->add_control(
            'img_line',
            [
                'label'   => esc_html__('Divider Line', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/how-line.png',
                ],
            ]
        );

        $this->add_control(
            'img_arrow',
            [
                'label'   => esc_html__('Button Arrow Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/arrow1.svg',
                ],
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label'   => esc_html__('Sub Title', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__('How It Works', 'ftelements'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => esc_html__('Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__("Simple & Stress-Free \n Booking Process", 'ftelements'),
                'description' => esc_html__('Line breaks are preserved.', 'ftelements'),
            ]
        );

        $this->add_control(
            'show_cta_row',
            [
                'label'        => esc_html__('Show Button & Phone', 'ftelements'),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__('Yes', 'ftelements'),
                'label_off'    => esc_html__('No', 'ftelements'),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_control(
            'btn_text',
            [
                'label'     => esc_html__('Button Text', 'ftelements'),
                'type'      => Controls_Manager::TEXT,
                'default'   => esc_html__('know more', 'ftelements'),
                'condition' => [
                    'show_cta_row' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'btn_url',
            [
                'label'       => esc_html__('Button URL', 'ftelements'),
                'type'        => Controls_Manager::URL,
                'placeholder' => home_url('/'),
                'default'     => [
                    'url' => home_url('/about/'),
                ],
                'condition'   => [
                    'show_cta_row' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'phone_label',
            [
                'label'     => esc_html__('Phone Label', 'ftelements'),
                'type'      => Controls_Manager::TEXT,
                'default'   => esc_html__('Call Us Now', 'ftelements'),
                'condition' => [
                    'show_cta_row' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'phone_number',
            [
                'label'       => esc_html__('Phone Number (display)', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => '+11 123 0654 98',
                'description' => esc_html__('Spaces are kept for display.', 'ftelements'),
                'condition'   => [
                    'show_cta_row' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'phone_tel',
            [
                'label'       => esc_html__('Phone Tel (href)', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => '+11123065498',
                'description' => esc_html__('Digits / + for tel: link.', 'ftelements'),
                'condition'   => [
                    'show_cta_row' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'img_phone_icon',
            [
                'label'     => esc_html__('Phone Icon', 'ftelements'),
                'type'      => Controls_Manager::MEDIA,
                'default'   => [
                    'url' => $theme_uri . '/assets/img/home-1/icon/telephone.svg',
                ],
                'condition' => [
                    'show_cta_row' => 'yes',
                ],
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'step_title',
            [
                'label'       => esc_html__('Step Title', 'ftelements'),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__('Step title', 'ftelements'),
                'description' => esc_html__('Use &lt;br&gt; for line breaks.', 'ftelements'),
            ]
        );

        $repeater->add_control(
            'step_number',
            [
                'label'   => esc_html__('Step Number', 'ftelements'),
                'type'    => Controls_Manager::TEXT,
                'default' => '01',
            ]
        );

        $repeater->add_control(
            'step_bg',
            [
                'label'   => esc_html__('Step Box Background', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    ''      => esc_html__('Default', 'ftelements'),
                    'bg-2'  => esc_html__('Accent 2', 'ftelements'),
                    'bg-3'  => esc_html__('Accent 3', 'ftelements'),
                    'bg-4'  => esc_html__('Accent 4', 'ftelements'),
                ],
            ]
        );

        $repeater->add_control(
            'content_order',
            [
                'label'   => esc_html__('Block Order', 'ftelements'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'title_first',
                'options' => [
                    'title_first' => esc_html__('Title then step', 'ftelements'),
                    'step_first'  => esc_html__('Step then title', 'ftelements'),
                ],
            ]
        );

        $repeater->add_control(
            'box_extra_class',
            [
                'label'       => esc_html__('Extra box classes', 'ftelements'),
                'type'        => Controls_Manager::TEXT,
                'default'     => '',
                'description' => esc_html__('e.g. style-box-1 or style-2 style-box-2', 'ftelements'),
            ]
        );

        $this->add_control(
            'steps',
            [
                'label'       => esc_html__('Steps', 'ftelements'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    [
                        'step_title'      => esc_html__('Tell us about your <br> childcare needs', 'ftelements'),
                        'step_number'     => '01',
                        'step_bg'         => '',
                        'content_order'   => 'title_first',
                        'box_extra_class' => 'style-box-1',
                    ],
                    [
                        'step_title'      => esc_html__('Get matched with <br> qualified nannies', 'ftelements'),
                        'step_number'     => '02',
                        'step_bg'         => 'bg-2',
                        'content_order'   => 'step_first',
                        'box_extra_class' => 'style-2 style-box-2',
                    ],
                    [
                        'step_title'      => esc_html__('Interview and select <br> your nanny', 'ftelements'),
                        'step_number'     => '03',
                        'step_bg'         => 'bg-3',
                        'content_order'   => 'title_first',
                        'box_extra_class' => '',
                    ],
                    [
                        'step_title'      => esc_html__('Enjoy reliable and <br> loving childcare <br> support', 'ftelements'),
                        'step_number'     => '04',
                        'step_bg'         => 'bg-4',
                        'content_order'   => 'step_first',
                        'box_extra_class' => 'style-2 style-box-3',
                    ],
                ],
                'title_field' => '{{{ step_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'howwork1_style_section',
            [
                'label' => esc_html__('Section', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'section_bg_style',
                'types'    => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .how-work-section-3',
            ]
        );

        $this->add_responsive_control(
            'section_padding',
            [
                'label'      => esc_html__('Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .how-work-section-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .how-work-section-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'howwork1_style_heading',
            [
                'label' => esc_html__('Heading', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'sub_title_color',
            [
                'label'     => esc_html__('Sub Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-work-section-3 .sec-sub' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'sub_title_typo',
                'label'    => esc_html__('Sub Title Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .how-work-section-3 .sec-sub',
            ]
        );

        $this->add_responsive_control(
            'sub_title_spacing',
            [
                'label'      => esc_html__('Sub Title Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .how-work-section-3 .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__('Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-work-section-3 .section-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typo',
                'label'    => esc_html__('Title Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .how-work-section-3 .section-title h2',
            ]
        );

        $this->add_responsive_control(
            'title_spacing',
            [
                'label'      => esc_html__('Title Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .how-work-section-3 .section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'howwork1_style_cta',
            [
                'label' => esc_html__('CTA Button', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'cta_text_color',
            [
                'label'     => esc_html__('Text Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-work-section-3 .theme-btn .theme-text, {{WRAPPER}} .how-work-section-3 .theme-btn .theme-text2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'cta_bg_color',
            [
                'label'     => esc_html__('Background Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-work-section-3 .theme-btn .theme-bg path' => 'fill: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'cta_typography',
                'selector' => '{{WRAPPER}} .how-work-section-3 .theme-btn .theme-text, {{WRAPPER}} .how-work-section-3 .theme-btn .theme-text2',
            ]
        );

        $this->add_responsive_control(
            'cta_width',
            [
                'label'      => esc_html__('Button Width', 'ftelements'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range'      => [
                    'px' => [
                        'min' => 80,
                        'max' => 400,
                    ],
                    '%'  => [
                        'min' => 10,
                        'max' => 100,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .how-work-section-3 .theme-btn' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'cta_spacing',
            [
                'label'      => esc_html__('Button Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .how-work-section-3 .theme-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'howwork1_style_phone',
            [
                'label' => esc_html__('Phone Block', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'phone_label_color',
            [
                'label'     => esc_html__('Label Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-work-section-3 .author-icon .content span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'phone_number_color',
            [
                'label'     => esc_html__('Number Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-work-section-3 .author-icon .content .number, {{WRAPPER}} .how-work-section-3 .author-icon .content .number a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'phone_label_typography',
                'label'    => esc_html__('Label Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .how-work-section-3 .author-icon .content span',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'phone_number_typography',
                'label'    => esc_html__('Number Typography', 'ftelements'),
                'selector' => '{{WRAPPER}} .how-work-section-3 .author-icon .content .number, {{WRAPPER}} .how-work-section-3 .author-icon .content .number a',
            ]
        );

        $this->add_control(
            'phone_icon_bg',
            [
                'label'     => esc_html__('Icon Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-work-section-3 .author-icon .icon' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'phone_icon_border',
                'selector' => '{{WRAPPER}} .how-work-section-3 .author-icon .icon',
            ]
        );

        $this->add_responsive_control(
            'phone_spacing',
            [
                'label'      => esc_html__('Phone Block Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .how-work-section-3 .author-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'howwork1_style_steps',
            [
                'label' => esc_html__('Steps', 'ftelements'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'step_title_color',
            [
                'label'     => esc_html__('Step Title Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-work-section-3 .how-work-box-3 .title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'step_title_typography',
                'selector' => '{{WRAPPER}} .how-work-section-3 .how-work-box-3 .title',
            ]
        );

        $this->add_control(
            'step_number_color',
            [
                'label'     => esc_html__('Step Number Color', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-work-section-3 .how-work-box-3 .step-box h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'step_number_typography',
                'selector' => '{{WRAPPER}} .how-work-section-3 .how-work-box-3 .step-box h3',
            ]
        );

        $this->add_control(
            'step_box_bg',
            [
                'label'     => esc_html__('Step Box Background', 'ftelements'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .how-work-section-3 .how-work-box-3 .step-box' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'step_box_border',
                'selector' => '{{WRAPPER}} .how-work-section-3 .how-work-box-3 .step-box',
            ]
        );

        $this->add_responsive_control(
            'step_box_radius',
            [
                'label'      => esc_html__('Step Box Border Radius', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .how-work-section-3 .how-work-box-3 .step-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'step_title_spacing',
            [
                'label'      => esc_html__('Step Title Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .how-work-section-3 .how-work-box-3 .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'step_box_padding',
            [
                'label'      => esc_html__('Step Box Padding', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .how-work-section-3 .how-work-box-3 .step-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'step_item_spacing',
            [
                'label'      => esc_html__('Each Item Margin', 'ftelements'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem'],
                'selectors'  => [
                    '{{WRAPPER}} .how-work-section-3 .how-work-box-3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

        $bg_url    = ! empty($settings['img_section_bg']['url']) ? $settings['img_section_bg']['url'] : '';
        $shape_url = ! empty($settings['img_shape']['url']) ? $settings['img_shape']['url'] : '';
        $line_url  = ! empty($settings['img_line']['url']) ? $settings['img_line']['url'] : '';
        $arrow_url = ! empty($settings['img_arrow']['url']) ? $settings['img_arrow']['url'] : '';

        $section_style = '';
        if ($bg_url) {
            $section_style = 'background-image: url(' . esc_url($bg_url) . ');';
        }

        $title_lines = isset($settings['title']) ? preg_split('/\r\n|\r|\n/', $settings['title']) : [];
        $title_html  = '';
        if (! empty($title_lines)) {
            $parts = [];
            foreach ($title_lines as $line) {
                $parts[] = esc_html($line);
            }
            $title_html = implode('<br>', $parts);
        }

        $btn_url     = $settings['btn_url']['url'] ?? '#';
        $btn_target  = ! empty($settings['btn_url']['is_external']) ? ' target="_blank"' : '';
        $btn_nofollow = ! empty($settings['btn_url']['nofollow']) ? ' rel="nofollow"' : '';

        $phone_icon = ! empty($settings['img_phone_icon']['url']) ? $settings['img_phone_icon']['url'] : '';
        $tel_href   = ! empty($settings['phone_tel']) ? 'tel:' . preg_replace('/\s+/', '', $settings['phone_tel']) : '';

        $steps = ! empty($settings['steps']) && is_array($settings['steps']) ? $settings['steps'] : [];
        ?>

        <section class="how-work-section-3 fix section-padding bg-cover"<?php echo $section_style ? ' style="' . esc_attr($section_style) . '"' : ''; ?>>
            <?php if ($shape_url) : ?>
            <div class="shape-1">
                <img src="<?php echo esc_url($shape_url); ?>" alt="">
            </div>
            <?php endif; ?>
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <?php if (! empty($settings['sub_title'])) : ?>
                        <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['sub_title']); ?></span>
                        <?php endif; ?>
                        <?php if ($title_html) : ?>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim"><?php echo wp_kses_post($title_html); ?></h2>
                        <?php endif; ?>
                    </div>
                    <?php if (! empty($settings['show_cta_row']) && 'yes' === $settings['show_cta_row']) : ?>
                    <div class="info-box wow fadeInUp" data-wow-delay=".3s">
                        <a href="<?php echo esc_url($btn_url); ?>" class="theme-btn hover-header"<?php echo $btn_target . $btn_nofollow; ?>>
                            <span class="theme-bg">
                                <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#385469"></path>
                                </svg>
                            </span>
                            <?php if ($arrow_url) : ?>
                            <span class="theme-text"><?php echo esc_html($settings['btn_text']); ?> <img src="<?php echo esc_url($arrow_url); ?>" alt=""></span>
                            <span class="theme-text2"><?php echo esc_html($settings['btn_text']); ?> <img src="<?php echo esc_url($arrow_url); ?>" alt=""></span>
                            <?php else : ?>
                            <span class="theme-text"><?php echo esc_html($settings['btn_text']); ?></span>
                            <span class="theme-text2"><?php echo esc_html($settings['btn_text']); ?></span>
                            <?php endif; ?>
                        </a>
                        <div class="author-icon">
                            <?php if ($phone_icon) : ?>
                            <div class="icon">
                                <img src="<?php echo esc_url($phone_icon); ?>" alt="">
                            </div>
                            <?php endif; ?>
                            <div class="content">
                                <?php if (! empty($settings['phone_label'])) : ?>
                                <span><?php echo esc_html($settings['phone_label']); ?></span>
                                <?php endif; ?>
                                <?php if (! empty($settings['phone_number']) && $tel_href) : ?>
                                <h3 class="number">
                                    <a href="<?php echo esc_url($tel_href); ?>"><?php echo esc_html($settings['phone_number']); ?></a>
                                </h3>
                                <?php elseif (! empty($settings['phone_number'])) : ?>
                                <h3 class="number"><?php echo esc_html($settings['phone_number']); ?></h3>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if ($line_url) : ?>
                <div class="line-shape">
                    <img src="<?php echo esc_url($line_url); ?>" alt="">
                </div>
                <?php endif; ?>
                <div class="row">
                    <?php
                    $i = 0;
                    foreach ($steps as $item) {
                        $delay     = 0.2 + ($i * 0.2);
                        $step_html = isset($item['step_title']) ? $item['step_title'] : '';
                        $num       = isset($item['step_number']) ? $item['step_number'] : '';
                        $bg        = isset($item['step_bg']) ? trim((string) $item['step_bg']) : '';
                        $order     = isset($item['content_order']) ? $item['content_order'] : 'title_first';
                        $extra     = isset($item['box_extra_class']) ? trim((string) $item['box_extra_class']) : '';

                        $step_box_class = 'step-box';
                        if ($bg) {
                            $step_box_class .= ' ' . sanitize_html_class($bg);
                        }

                        $box_classes = 'how-work-box-3';
                        if ($extra) {
                            $parts = preg_split('/\s+/', $extra);
                            foreach ($parts as $p) {
                                if ($p !== '') {
                                    $box_classes .= ' ' . sanitize_html_class($p);
                                }
                            }
                        }

                        $title_markup = $step_html ? '<h3 class="title">' . wp_kses_post($step_html) . '</h3>' : '';
                        $num_esc      = esc_html($num);
                        $step_inner   = '<div class="' . esc_attr($step_box_class) . '"><h3>' . esc_html__('step', 'ftelements') . ' <br>' . $num_esc . '</h3></div>';
                        ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr((string) $delay); ?>s">
                        <div class="<?php echo esc_attr($box_classes); ?>">
                            <?php
                            if ('step_first' === $order) {
                                echo $step_inner; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — built with escapes above
                                echo $title_markup; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                            } else {
                                echo $title_markup; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                echo $step_inner; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                            }
                            ?>
                        </div>
                    </div>
                        <?php
                        $i++;
                    }
                    ?>
                </div>
            </div>
        </section>

        <?php
    }
}
