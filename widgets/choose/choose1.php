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

class Kidzu_Choose1_Widget extends \Elementor\Widget_Base
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
		return 'kidzu-choose1';
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
		return esc_html__('Choose 1', 'kidzu');
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
				'label' => esc_html__('Content', 'kidzu'),
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'section_subtitle',
			[
				'label'       => esc_html__('Subtitle', 'kidzu'),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__('Why choose us?', 'kidzu'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'section_title',
			[
				'label'       => esc_html__('Title', 'kidzu'),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__('Why Choose Our School', 'kidzu'),
				'label_block' => true,
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'tab_title',
			[
				'label'       => esc_html__('Tab Title', 'kidzu'),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__('Our Facilities', 'kidzu'),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'tab_description',
			[
				'label'   => esc_html__('Description', 'kidzu'),
				'type'    => Controls_Manager::TEXTAREA,
				'default' => esc_html__('Qualified teachers who understand children’s needs and focus on personal attention through play-based and academic learning.', 'kidzu'),
			]
		);

		$repeater->add_control(
			'tab_list_left',
			[
				'label'       => esc_html__('Left List Items', 'kidzu'),
				'type'        => Controls_Manager::TEXTAREA,
				'description' => esc_html__('One item per line.', 'kidzu'),
				'default'     => "Experienced & caring teachers\nModern learning methods",
			]
		);

		$repeater->add_control(
			'tab_list_right',
			[
				'label'       => esc_html__('Right List Items', 'kidzu'),
				'type'        => Controls_Manager::TEXTAREA,
				'description' => esc_html__('One item per line.', 'kidzu'),
				'default'     => "Safe & friendly environment\nFocus on moral & social values",
			]
		);

		$this->add_control(
			'choose_tabs',
			[
				'label'       => esc_html__('Tabs', 'kidzu'),
				'type'        => Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'title_field' => '{{{ tab_title }}}',
				'default'     => [
					[
						'tab_title'       => esc_html__('Our Facilities', 'kidzu'),
						'tab_description' => esc_html__('Qualified teachers who understand children’s needs and focus on personal attention through play-based and academic learning.', 'kidzu'),
						'tab_list_left'   => "Experienced & caring teachers\nModern learning methods",
						'tab_list_right'  => "Safe & friendly environment\nFocus on moral & social values",
					],
					[
						'tab_title'       => esc_html__('Curriculum & Learning', 'kidzu'),
						'tab_description' => esc_html__('Qualified teachers who understand children’s needs and focus on personal attention through play-based and academic learning.', 'kidzu'),
						'tab_list_left'   => "Experienced & caring teachers\nModern learning methods",
						'tab_list_right'  => "Safe & friendly environment\nFocus on moral & social values",
					],
					[
						'tab_title'       => esc_html__('Mission & Vision', 'kidzu'),
						'tab_description' => esc_html__('Qualified teachers who understand children’s needs and focus on personal attention through play-based and academic learning.', 'kidzu'),
						'tab_list_left'   => "Experienced & caring teachers\nModern learning methods",
						'tab_list_right'  => "Safe & friendly environment\nFocus on moral & social values",
					],
				],
			]
		);

		$this->add_control(
			'primary_button_text',
			[
				'label'       => esc_html__('Primary Button Text', 'kidzu'),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__('Enroll Now', 'kidzu'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'primary_button_link',
			[
				'label'       => esc_html__('Primary Button Link', 'kidzu'),
				'type'        => Controls_Manager::URL,
				'default'     => [
					'url' => '#',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'secondary_button_text',
			[
				'label'       => esc_html__('Secondary Button Text', 'kidzu'),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__('Book a Visit', 'kidzu'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'secondary_button_link',
			[
				'label'       => esc_html__('Secondary Button Link', 'kidzu'),
				'type'        => Controls_Manager::URL,
				'default'     => [
					'url' => '#',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'shape1_image',
			[
				'label'   => esc_html__('Shape 1 Image', 'kidzu'),
				'type'    => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'shape2_image',
			[
				'label'   => esc_html__('Shape 2 Image', 'kidzu'),
				'type'    => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'shape3_image',
			[
				'label'   => esc_html__('Shape 3 Image', 'kidzu'),
				'type'    => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'main_image',
			[
				'label'   => esc_html__('Main Image', 'kidzu'),
				'type'    => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'vector_shape_image',
			[
				'label'   => esc_html__('Vector Shape Image', 'kidzu'),
				'type'    => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_subtitle_section',
			[
				'label' => esc_html__('Subtitle Style', 'kidzu'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'subtitle_color',
			[
				'label'     => esc_html__('Color', 'kidzu'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .choose-us-content .sec-sub' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'subtitle_typography',
				'selector' => '{{WRAPPER}} .choose-us-content .sec-sub',
			]
		);

		$this->add_responsive_control(
			'subtitle_margin',
			[
				'label'      => esc_html__('Margin', 'kidzu'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem'],
				'selectors'  => [
					'{{WRAPPER}} .choose-us-content .sec-sub' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_title_section',
			[
				'label' => esc_html__('Title Style', 'kidzu'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => esc_html__('Color', 'kidzu'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .choose-us-content .sec_title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'title_typography',
				'selector' => '{{WRAPPER}} .choose-us-content .sec_title',
			]
		);

		$this->add_responsive_control(
			'title_margin',
			[
				'label'      => esc_html__('Margin', 'kidzu'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem'],
				'selectors'  => [
					'{{WRAPPER}} .choose-us-content .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_tabs_section',
			[
				'label' => esc_html__('Tabs Style', 'kidzu'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'tab_typography',
				'selector' => '{{WRAPPER}} .choose-us-content .nav .nav-link',
			]
		);

		$this->add_control(
			'tab_text_color',
			[
				'label'     => esc_html__('Text Color', 'kidzu'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .choose-us-content .nav .nav-link' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'tab_active_text_color',
			[
				'label'     => esc_html__('Active Text Color', 'kidzu'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .choose-us-content .nav .nav-link.active' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'tab_background_color',
			[
				'label'     => esc_html__('Background Color', 'kidzu'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .choose-us-content .nav .nav-link' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'tab_active_background_color',
			[
				'label'     => esc_html__('Active Background Color', 'kidzu'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .choose-us-content .nav .nav-link.active' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'     => 'tab_border',
				'selector' => '{{WRAPPER}} .choose-us-content .nav .nav-link',
			]
		);

		$this->add_responsive_control(
			'tab_border_radius',
			[
				'label'      => esc_html__('Border Radius', 'kidzu'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .choose-us-content .nav .nav-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'tab_padding',
			[
				'label'      => esc_html__('Padding', 'kidzu'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem'],
				'selectors'  => [
					'{{WRAPPER}} .choose-us-content .nav .nav-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'tab_gap',
			[
				'label'      => esc_html__('Tab Gap', 'kidzu'),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => ['px', 'em', 'rem'],
				'selectors'  => [
					'{{WRAPPER}} .choose-us-content .nav' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_text_content_section',
			[
				'label' => esc_html__('Description & List Style', 'kidzu'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'description_color',
			[
				'label'     => esc_html__('Description Color', 'kidzu'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .choose-items p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'description_typography',
				'selector' => '{{WRAPPER}} .choose-items p',
			]
		);

		$this->add_control(
			'list_color',
			[
				'label'     => esc_html__('List Color', 'kidzu'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .choose-items .about-list-items li' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'list_typography',
				'selector' => '{{WRAPPER}} .choose-items .about-list-items li',
			]
		);

		$this->add_responsive_control(
			'list_item_spacing',
			[
				'label'      => esc_html__('List Item Spacing', 'kidzu'),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => ['px', 'em', 'rem'],
				'selectors'  => [
					'{{WRAPPER}} .choose-items .about-list-items li:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_buttons_section',
			[
				'label' => esc_html__('Buttons Style', 'kidzu'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'button_typography',
				'selector' => '{{WRAPPER}} .choose-us-button .theme-btn .theme-text, {{WRAPPER}} .choose-us-button .theme-btn .theme-text2',
			]
		);

		$this->add_control(
			'button_text_color',
			[
				'label'     => esc_html__('Text Color', 'kidzu'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .choose-us-button .theme-btn .theme-text, {{WRAPPER}} .choose-us-button .theme-btn .theme-text2' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'button_hover_text_color',
			[
				'label'     => esc_html__('Hover Text Color', 'kidzu'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .choose-us-button .theme-btn:hover .theme-text, {{WRAPPER}} .choose-us-button .theme-btn:hover .theme-text2' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'button_svg_fill_color',
			[
				'label'     => esc_html__('Button Background Color', 'kidzu'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .choose-us-button .theme-btn .theme-bg svg path' => 'fill: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'button_width',
			[
				'label'      => esc_html__('Button Width', 'kidzu'),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .choose-us-button .theme-btn' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'button_border_radius',
			[
				'label'      => esc_html__('Button Border Radius', 'kidzu'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .choose-us-button .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'button_spacing',
			[
				'label'      => esc_html__('Button Gap', 'kidzu'),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => ['px', 'em', 'rem'],
				'selectors'  => [
					'{{WRAPPER}} .choose-us-button' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_layout_spacing_section',
			[
				'label' => esc_html__('Layout Spacing', 'kidzu'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'section_padding',
			[
				'label'      => esc_html__('Section Padding', 'kidzu'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem'],
				'selectors'  => [
					'{{WRAPPER}} .choose-us-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'content_margin',
			[
				'label'      => esc_html__('Content Box Margin', 'kidzu'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem'],
				'selectors'  => [
					'{{WRAPPER}} .choose-us-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'image_margin',
			[
				'label'      => esc_html__('Image Box Margin', 'kidzu'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem'],
				'selectors'  => [
					'{{WRAPPER}} .choose-us-image-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
		$tabs = !empty($settings['choose_tabs']) ? $settings['choose_tabs'] : [];

		$primary_link = '#';
		if (!empty($settings['primary_button_link']['url'])) {
			$primary_link = $settings['primary_button_link']['url'];
		}

		$secondary_link = '#';
		if (!empty($settings['secondary_button_link']['url'])) {
			$secondary_link = $settings['secondary_button_link']['url'];
		}

		$shape1_src = !empty($settings['shape1_image']['url']) ? $settings['shape1_image']['url'] : 'assets/img/home-1/choose-us-shape1.png';
		$shape2_src = !empty($settings['shape2_image']['url']) ? $settings['shape2_image']['url'] : 'assets/img/home-1/choose-us-shape2.png';
		$shape3_src = !empty($settings['shape3_image']['url']) ? $settings['shape3_image']['url'] : 'assets/img/home-1/choose-us-shape3.png';

		?>

		<section class="choose-us-section fix section-padding">
			<div class="shape1">
				<img src="<?php echo esc_url($shape1_src); ?>" alt="img">
			</div>
			<div class="shape2 float-bob-y">
				<img src="<?php echo esc_url($shape2_src); ?>" alt="img">
			</div>
			<div class="shape3 float-bob-y">
				<img src="<?php echo esc_url($shape3_src); ?>" alt="img">
			</div>
			<div class="container">
				<div class="choose-us-wrapper">
					<div class="row g-4 align-items-center">
						<div class="col-lg-6">
							<div class="choose-us-content">
								<div class="section-title mb-0">
									<span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['section_subtitle']); ?></span>
									<h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
										<?php echo esc_html($settings['section_title']); ?>
									</h2>
								</div>
								<ul class="nav wow fadeInUp" data-wow-delay=".3s">
									<?php foreach ($tabs as $index => $tab) :
										$tab_id = 'choose-tab-' . $this->get_id() . '-' . $index;
										?>
										<li class="nav-item">
											<a href="#<?php echo esc_attr($tab_id); ?>" data-bs-toggle="tab" class="nav-link <?php echo 0 === $index ? 'active' : ''; ?>">
												<?php echo esc_html($tab['tab_title']); ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
								<div class="tab-content">
									<?php foreach ($tabs as $index => $tab) :
										$tab_id = 'choose-tab-' . $this->get_id() . '-' . $index;
										$left_items = array_filter(array_map('trim', explode("\n", (string) $tab['tab_list_left'])));
										$right_items = array_filter(array_map('trim', explode("\n", (string) $tab['tab_list_right'])));
										?>
										<div id="<?php echo esc_attr($tab_id); ?>" class="tab-pane fade <?php echo 0 === $index ? 'show active' : ''; ?>">
											<div class="choose-items <?php echo 0 === $index ? 'wow fadeInUp' : ''; ?>" data-wow-delay=".3s">
												<p><?php echo esc_html($tab['tab_description']); ?></p>
												<div class="about-list-items">
													<ul>
														<?php foreach ($left_items as $item) : ?>
															<li><?php echo esc_html($item); ?></li>
														<?php endforeach; ?>
													</ul>
													<ul>
														<?php foreach ($right_items as $item) : ?>
															<li><?php echo esc_html($item); ?></li>
														<?php endforeach; ?>
													</ul>
												</div>
											</div>
											<div class="choose-us-button <?php echo 0 === $index ? 'wow fadeInUp' : ''; ?>" data-wow-delay=".5s">
												<a href="<?php echo esc_url($primary_link); ?>" class="theme-btn">
													<span class="theme-bg">
														<svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"></path>
														</svg>
													</span>
													<span class="theme-text"><?php echo esc_html($settings['primary_button_text']); ?> <img src="assets/img/icon/arrow1.svg" alt=""></span>
													<span class="theme-text2"><?php echo esc_html($settings['primary_button_text']); ?> <img src="assets/img/icon/arrow1.svg" alt=""></span>
												</a>
												<a href="<?php echo esc_url($secondary_link); ?>" class="theme-btn hover-header">
													<span class="theme-bg">
														<svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#385469"></path>
														</svg>
													</span>
													<span class="theme-text"><?php echo esc_html($settings['secondary_button_text']); ?> <img src="assets/img/icon/arrow1.svg" alt=""></span>
													<span class="theme-text2"><?php echo esc_html($settings['secondary_button_text']); ?> <img src="assets/img/icon/arrow1.svg" alt=""></span>
												</a>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="choose-us-image-items wow fadeInUp" data-wow-delay=".3s">
								<div class="choose-us-image">
									<img src="<?php echo esc_url($settings['main_image']['url']); ?>" alt="img">
								</div>
								<div class="vec-shape">
									<img src="<?php echo esc_url($settings['vector_shape_image']['url']); ?>" alt="">
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