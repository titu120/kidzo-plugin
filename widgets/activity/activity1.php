<?php
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Typography;
defined('ABSPATH') || die();

class FT_Activity1_Widget extends \Elementor\Widget_Base {
    public function get_name() { return 'ft-activity'; }
    public function get_title() { return esc_html__('FT Activity', 'ftelements'); }
    public function get_icon() { return 'tp-icon'; }
    public function get_categories() { return ['pielements_category']; }

    protected function register_controls() {
        $theme_uri = get_template_directory_uri();

        $this->start_controls_section('activity_section_content', ['label' => esc_html__('Section Content', 'ftelements'),'tab' => Controls_Manager::TAB_CONTENT]);
        $this->add_control('section_subtitle', ['label' => esc_html__('Subtitle', 'ftelements'),'type' => Controls_Manager::TEXT,'default' => esc_html__('Our Extra Activities', 'ftelements'),'label_block' => true]);
        $this->add_control('section_title', ['label' => esc_html__('Title', 'ftelements'),'type' => Controls_Manager::TEXTAREA,'default' => esc_html__('Our Extra Activities For Kids', 'ftelements'),'rows' => 2]);
        $this->add_control('section_bg_image', ['label' => esc_html__('Section Background Image', 'ftelements'),'type' => Controls_Manager::MEDIA,'default' => ['url' => $theme_uri . '/assets/img/home-1/classes-bg.png']]);
        $this->add_control('fallback_activity_image', ['label' => esc_html__('Fallback Activity Image', 'ftelements'),'type' => Controls_Manager::MEDIA,'default' => ['url' => $theme_uri . '/assets/img/home-1/activities-image.jpg']]);
        $this->end_controls_section();

        $this->start_controls_section('activity_query_settings', ['label' => esc_html__('Query Options', 'ftelements'),'tab' => Controls_Manager::TAB_CONTENT]);
        $this->add_control('posts_per_page', ['label' => esc_html__('Posts Per Page', 'ftelements'),'type' => Controls_Manager::NUMBER,'default' => 3,'min' => 1,'max' => 50]);
        $this->add_control('offset', ['label' => esc_html__('Offset', 'ftelements'),'type' => Controls_Manager::NUMBER,'default' => 0,'min' => 0]);
        $this->add_control('orderby', ['label' => esc_html__('Order By', 'ftelements'),'type' => Controls_Manager::SELECT,'default' => 'date','options' => ['date' => esc_html__('Date', 'ftelements'),'title' => esc_html__('Title', 'ftelements'),'menu_order' => esc_html__('Menu Order', 'ftelements'),'rand' => esc_html__('Random', 'ftelements')]]);
        $this->add_control('order', ['label' => esc_html__('Order', 'ftelements'),'type' => Controls_Manager::SELECT,'default' => 'DESC','options' => ['DESC' => esc_html__('Descending', 'ftelements'),'ASC' => esc_html__('Ascending', 'ftelements')]]);
        $this->add_control('exclude_ids', ['label' => esc_html__('Exclude Post IDs', 'ftelements'),'description' => esc_html__('Example: 12, 45, 108', 'ftelements'),'type' => Controls_Manager::TEXT,'label_block' => true]);
        $this->end_controls_section();

        $this->start_controls_section('activity_display_options', ['label' => esc_html__('Display Options', 'ftelements'),'tab' => Controls_Manager::TAB_CONTENT]);
        $this->add_control('show_number', ['label' => esc_html__('Show Item Number', 'ftelements'),'type' => Controls_Manager::SWITCHER,'return_value' => 'yes','default' => 'yes']);
        $this->add_control('number_prefix', ['label' => esc_html__('Number Prefix', 'ftelements'),'type' => Controls_Manager::TEXT,'default' => '0','condition' => ['show_number' => 'yes']]);
        $this->add_control('active_item', ['label' => esc_html__('Active Item Index', 'ftelements'),'type' => Controls_Manager::NUMBER,'default' => 2,'min' => 1]);
        $this->add_control('excerpt_length', ['label' => esc_html__('Excerpt Word Limit', 'ftelements'),'type' => Controls_Manager::NUMBER,'default' => 18,'min' => 5,'max' => 100]);
        $this->add_control('show_empty_excerpt', ['label' => esc_html__('Show Empty Excerpt', 'ftelements'),'type' => Controls_Manager::SWITCHER,'return_value' => 'yes','default' => 'yes']);
        $this->add_control('wow_start_delay', ['label' => esc_html__('Animation Start Delay (s)', 'ftelements'),'type' => Controls_Manager::NUMBER,'default' => 0.3,'min' => 0,'step' => 0.1]);
        $this->add_control('wow_delay_step', ['label' => esc_html__('Animation Delay Step (s)', 'ftelements'),'type' => Controls_Manager::NUMBER,'default' => 0.2,'min' => 0,'step' => 0.1]);
        $this->end_controls_section();

        $this->register_style_controls();
    }

    protected function register_style_controls() {
        $this->start_controls_section(
            'activity_style_section_header',
            ['label' => esc_html__('Header', 'ftelements'), 'tab' => Controls_Manager::TAB_STYLE]
        );
        $this->add_control('style_subtitle_color', [
            'label' => esc_html__('Subtitle Color', 'ftelements'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .tx-subTitle' => 'color: {{VALUE}};'],
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'style_subtitle_typography',
            'selector' => '{{WRAPPER}} .tx-subTitle',
        ]);
        $this->add_responsive_control('style_subtitle_margin', [
            'label' => esc_html__('Subtitle Margin', 'ftelements'),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em', 'rem'],
            'selectors' => ['{{WRAPPER}} .tx-subTitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
        ]);
        $this->add_control('style_title_color', [
            'label' => esc_html__('Title Color', 'ftelements'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .sec_title' => 'color: {{VALUE}};'],
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'style_title_typography',
            'selector' => '{{WRAPPER}} .sec_title',
        ]);
        $this->add_responsive_control('style_title_margin', [
            'label' => esc_html__('Title Margin', 'ftelements'),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em', 'rem'],
            'selectors' => ['{{WRAPPER}} .sec_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
        ]);
        $this->end_controls_section();

        $this->start_controls_section(
            'activity_style_section_item',
            ['label' => esc_html__('Item Box', 'ftelements'), 'tab' => Controls_Manager::TAB_STYLE]
        );
        $this->add_control('style_item_bg_color', [
            'label' => esc_html__('Background Color', 'ftelements'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items' => 'background-color: {{VALUE}};'],
        ]);
        $this->add_control('style_item_active_bg_color', [
            'label' => esc_html__('Active Background Color', 'ftelements'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items.active' => 'background-color: {{VALUE}};'],
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'style_item_border',
            'selector' => '{{WRAPPER}} .activities-wrapper-items',
        ]);
        $this->add_responsive_control('style_item_radius', [
            'label' => esc_html__('Border Radius', 'ftelements'),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%'],
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
        ]);
        $this->add_responsive_control('style_item_padding', [
            'label' => esc_html__('Padding', 'ftelements'),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em', 'rem'],
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
        ]);
        $this->add_responsive_control('style_item_margin', [
            'label' => esc_html__('Margin', 'ftelements'),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em', 'rem'],
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
        ]);
        $this->add_responsive_control('style_item_gap', [
            'label' => esc_html__('Items Gap', 'ftelements'),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['px', 'em', 'rem'],
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items' => 'margin-bottom: {{SIZE}}{{UNIT}};'],
        ]);
        $this->end_controls_section();

        $this->start_controls_section(
            'activity_style_section_title',
            ['label' => esc_html__('Item Title', 'ftelements'), 'tab' => Controls_Manager::TAB_STYLE]
        );
        $this->add_control('style_item_title_color', [
            'label' => esc_html__('Color', 'ftelements'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items h3 a' => 'color: {{VALUE}};'],
        ]);
        $this->add_control('style_item_title_hover_color', [
            'label' => esc_html__('Hover Color', 'ftelements'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items h3 a:hover' => 'color: {{VALUE}};'],
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'style_item_title_typography',
            'selector' => '{{WRAPPER}} .activities-wrapper-items h3 a',
        ]);
        $this->end_controls_section();

        $this->start_controls_section(
            'activity_style_section_excerpt',
            ['label' => esc_html__('Excerpt', 'ftelements'), 'tab' => Controls_Manager::TAB_STYLE]
        );
        $this->add_control('style_excerpt_color', [
            'label' => esc_html__('Color', 'ftelements'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items .text' => 'color: {{VALUE}};'],
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'style_excerpt_typography',
            'selector' => '{{WRAPPER}} .activities-wrapper-items .text',
        ]);
        $this->add_responsive_control('style_excerpt_margin', [
            'label' => esc_html__('Margin', 'ftelements'),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em', 'rem'],
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items .text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
        ]);
        $this->end_controls_section();

        $this->start_controls_section(
            'activity_style_section_number',
            ['label' => esc_html__('Number', 'ftelements'), 'tab' => Controls_Manager::TAB_STYLE]
        );
        $this->add_control('style_number_color', [
            'label' => esc_html__('Color', 'ftelements'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items .content > span' => 'color: {{VALUE}};'],
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'style_number_typography',
            'selector' => '{{WRAPPER}} .activities-wrapper-items .content > span',
        ]);
        $this->end_controls_section();

        $this->start_controls_section(
            'activity_style_section_image',
            ['label' => esc_html__('Image', 'ftelements'), 'tab' => Controls_Manager::TAB_STYLE]
        );
        $this->add_responsive_control('style_image_height', [
            'label' => esc_html__('Image Height', 'ftelements'),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['px', '%', 'vh'],
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items .thumb img' => 'height: {{SIZE}}{{UNIT}}; object-fit: cover;'],
        ]);
        $this->add_responsive_control('style_image_radius', [
            'label' => esc_html__('Image Border Radius', 'ftelements'),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%'],
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items .thumb img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'],
        ]);
        $this->end_controls_section();

        $this->start_controls_section(
            'activity_style_section_arrow',
            ['label' => esc_html__('Arrow Button', 'ftelements'), 'tab' => Controls_Manager::TAB_STYLE]
        );
        $this->add_control('style_arrow_bg_color', [
            'label' => esc_html__('Background Color', 'ftelements'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items .icon .bg' => 'background-color: {{VALUE}};'],
        ]);
        $this->add_control('style_arrow_icon_color', [
            'label' => esc_html__('Icon Color', 'ftelements'),
            'type' => Controls_Manager::COLOR,
            'selectors' => ['{{WRAPPER}} .activities-wrapper-items .icon svg path' => 'stroke: {{VALUE}};'],
        ]);
        $this->add_responsive_control('style_arrow_size', [
            'label' => esc_html__('Button Size', 'ftelements'),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'selectors' => [
                '{{WRAPPER}} .activities-wrapper-items .icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .activities-wrapper-items .icon .bg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
            ],
        ]);
        $this->end_controls_section();
    }

    private function get_activity_excerpt($length) {
        $excerpt = trim(get_the_excerpt());
        if ($excerpt === '') { $excerpt = trim(wp_strip_all_tags(get_the_content())); }
        if ($excerpt === '') { return ''; }
        return wp_trim_words($excerpt, absint($length), '...');
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $exclude_ids = !empty($settings['exclude_ids']) ? array_filter(array_map('absint', explode(',', $settings['exclude_ids']))) : [];

        $query = new \WP_Query([
            'post_type' => 'activity',
            'post_status' => 'publish',
            'posts_per_page' => !empty($settings['posts_per_page']) ? absint($settings['posts_per_page']) : 3,
            'offset' => !empty($settings['offset']) ? absint($settings['offset']) : 0,
            'orderby' => !empty($settings['orderby']) ? sanitize_text_field($settings['orderby']) : 'date',
            'order' => !empty($settings['order']) ? sanitize_text_field($settings['order']) : 'DESC',
            'ignore_sticky_posts' => true,
            'post__not_in' => $exclude_ids,
        ]);

        $fallback_image = !empty($settings['fallback_activity_image']['url']) ? $settings['fallback_activity_image']['url'] : '';
        $section_bg = !empty($settings['section_bg_image']['url']) ? $settings['section_bg_image']['url'] : '';
        $active_item = !empty($settings['active_item']) ? absint($settings['active_item']) : 0;
        $wow_start = isset($settings['wow_start_delay']) ? (float) $settings['wow_start_delay'] : 0.3;
        $wow_step = isset($settings['wow_delay_step']) ? (float) $settings['wow_delay_step'] : 0.2;
        ?>
        <section class="activities-section fix section-padding bg-cover" <?php echo $section_bg ? 'style="background-image:url(' . esc_url($section_bg) . ');"' : ''; ?>>
            <div class="container">
                <div class="section-title text-center">
                    <?php if (!empty($settings['section_subtitle'])) : ?><span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['section_subtitle']); ?></span><?php endif; ?>
                    <?php if (!empty($settings['section_title'])) : ?><h2 class="tx-title sec_title tz-itm-title tz-itm-anim"><?php echo esc_html($settings['section_title']); ?></h2><?php endif; ?>
                </div>
                <?php $i = 0; if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    $excerpt = $this->get_activity_excerpt($settings['excerpt_length']);
                    if ($excerpt === '' && $settings['show_empty_excerpt'] !== 'yes') { continue; }
                    $i++;
                    $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    if (!$thumb_url) { $thumb_url = $fallback_image; }
                    $cls = 'activities-wrapper-items wow fadeInUp' . (($active_item > 0 && $active_item === $i) ? ' active' : '');
                    $num = !empty($settings['number_prefix']) ? $settings['number_prefix'] . $i : $i;
                    $delay = $wow_start + (($i - 1) * $wow_step);
                ?>
                    <div class="<?php echo esc_attr($cls); ?>" data-wow-delay="<?php echo esc_attr(number_format($delay, 1)); ?>s">
                        <div class="bg-shape"></div>
                        <div class="content">
                            <?php if ($settings['show_number'] === 'yes') : ?><span><?php echo esc_html($num); ?></span><?php endif; ?>
                            <h3><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a></h3>
                        </div>
                        <div class="right-items">
                            <div class="thumb-items">
                                <div class="thumb">
                                    <?php if ($thumb_url) : ?>
                                        <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                        <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                    <?php endif; ?>
                                </div>
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="icon" aria-label="<?php echo esc_attr(get_the_title()); ?>">
                                    <span class="bg"></span>
                                    <div class="arrow-icon">
                                        <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M13.5 1L19 6L13.5 11M19 6H1" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </a>
                            </div>
                            <?php if ($excerpt !== '') : ?><p class="text"><?php echo esc_html($excerpt); ?></p><?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </section>
        <?php
    }
}
