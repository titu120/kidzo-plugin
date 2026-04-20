<?php

use Elementor\Repeater;
use Elementor\Controls_Manager;

defined('ABSPATH') || die();

class FT_About2_Widget extends \Elementor\Widget_Base
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
        return 'ft-about2';
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
        return esc_html__('FT About 2', 'ftelements');
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
            'about2_content',
            [
                'label' => esc_html__('Content', 'kidzu'),
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
                'default' => esc_html__('A Safe, Joyful & Learning-Focused Environment for Your Child', 'kidzu'),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'kidzu'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('At Kidzu, our aim is to give everyone a chance to learn a new language. Our skilled team creates fun and useful lessons so each student can reach their goals. We\'re here to help you gain skills for both work and life.', 'kidzu'),
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'list_text',
            [
                'label' => esc_html__('Text', 'kidzu'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Feature', 'kidzu'),
            ]
        );

        $this->add_control(
            'list_items',
            [
                'label' => esc_html__('Feature List', 'kidzu'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    ['list_text' => esc_html__('Learn Through Fun', 'kidzu')],
                    ['list_text' => esc_html__('Secure Environment', 'kidzu')],
                    ['list_text' => esc_html__('Healthy Food Choices', 'kidzu')],
                    ['list_text' => esc_html__('Bright & Cheerful Environment', 'kidzu')],
                ],
                'title_field' => '{{{ list_text }}}',
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
            'img_pencil',
            [
                'label' => esc_html__('Decor: Pencil', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/about-pencil.png',
                ],
            ]
        );

        $this->add_control(
            'img_vec',
            [
                'label' => esc_html__('Decor: Vector 1', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/about-vec.png',
                ],
            ]
        );

        $this->add_control(
            'img_vec2',
            [
                'label' => esc_html__('Decor: Vector 2', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/about-shape3.png',
                ],
            ]
        );

        $this->add_control(
            'img_main',
            [
                'label' => esc_html__('Main Image', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/about-image.png',
                ],
            ]
        );

        $this->add_control(
            'img_shape1',
            [
                'label' => esc_html__('Overlay Shape 1', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/about-shape1.png',
                ],
            ]
        );

        $this->add_control(
            'img_shape2',
            [
                'label' => esc_html__('Overlay Shape 2', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/shape/about-shape2.png',
                ],
            ]
        );

        $this->add_control(
            'img_check',
            [
                'label' => esc_html__('List Check Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/icon/check.svg',
                ],
            ]
        );

        $this->add_control(
            'img_arrow',
            [
                'label' => esc_html__('Button Arrow Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/icon/arrow1.svg',
                ],
            ]
        );

        $this->add_control(
            'img_phone',
            [
                'label' => esc_html__('Phone Icon', 'kidzu'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-1/icon/telephone.svg',
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

        $img_pencil = !empty($settings['img_pencil']['url']) ? $settings['img_pencil']['url'] : $theme_uri . '/assets/img/home-2/shape/about-pencil.png';
        $img_vec = !empty($settings['img_vec']['url']) ? $settings['img_vec']['url'] : $theme_uri . '/assets/img/home-2/shape/about-vec.png';
        $img_vec2 = !empty($settings['img_vec2']['url']) ? $settings['img_vec2']['url'] : $theme_uri . '/assets/img/home-2/shape/about-shape3.png';
        $img_main = !empty($settings['img_main']['url']) ? $settings['img_main']['url'] : $theme_uri . '/assets/img/home-2/about-image.png';
        $img_shape1 = !empty($settings['img_shape1']['url']) ? $settings['img_shape1']['url'] : $theme_uri . '/assets/img/home-2/shape/about-shape1.png';
        $img_shape2 = !empty($settings['img_shape2']['url']) ? $settings['img_shape2']['url'] : $theme_uri . '/assets/img/home-2/shape/about-shape2.png';
        $img_check = !empty($settings['img_check']['url']) ? $settings['img_check']['url'] : $theme_uri . '/assets/img/home-2/icon/check.svg';
        $img_arrow = !empty($settings['img_arrow']['url']) ? $settings['img_arrow']['url'] : $theme_uri . '/assets/img/icon/arrow1.svg';
        $img_phone = !empty($settings['img_phone']['url']) ? $settings['img_phone']['url'] : $theme_uri . '/assets/img/home-1/icon/telephone.svg';

        $list_items = !empty($settings['list_items']) && is_array($settings['list_items']) ? $settings['list_items'] : [];
        $count = count($list_items);
        $mid = $count > 0 ? (int) ceil($count / 2) : 0;
        $col1 = $mid > 0 ? array_slice($list_items, 0, $mid) : [];
        $col2 = $mid > 0 ? array_slice($list_items, $mid) : [];

        $phone_number_raw = !empty($settings['phone_number']) ? $settings['phone_number'] : '';
        $phone_number_url = preg_replace('/[^0-9\+]/', '', $phone_number_raw);

        $this->add_render_attribute('about2_button', 'class', 'theme-btn');
        if (!empty($settings['button_link']['url'])) {
            $this->add_link_attributes('about2_button', $settings['button_link']);
        } else {
            $this->add_render_attribute('about2_button', 'href', '#');
        }

        ?>


        <section class="about-section-2 fix section-padding">
            <div class="about-pencil bz-gsap-animate-circle">
                <img src="<?php echo esc_url($img_pencil); ?>" alt="">
            </div>
            <div class="about-vec bz-gsap-animate-circle">
                <img src="<?php echo esc_url($img_vec); ?>" alt="">
            </div>
            <div class="about-vec2 bz-gsap-animate-circle">
                <img src="<?php echo esc_url($img_vec2); ?>" alt="">
            </div>
            <div class="container">
                <div class="about-wrapper-2">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-content-2">
                                <div class="section-title mb-0">
                                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle"><?php echo esc_html($settings['sub_title']); ?></span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        <?php echo esc_html($settings['title']); ?>
                                    </h2>
                                </div>
                                <p class="about-text wow fadeInUp" data-wow-delay=".5s">
                                    <?php echo esc_html($settings['description']); ?>
                                </p>
                                <div class="about-list wow fadeInUp" data-wow-delay=".7s">
                                    <?php if (!empty($col1)) : ?>
                                    <ul>
                                        <?php foreach ($col1 as $item) : ?>
                                        <li>
                                            <img src="<?php echo esc_url($img_check); ?>" alt="">
                                            <?php echo esc_html(!empty($item['list_text']) ? $item['list_text'] : ''); ?>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                    <?php if (!empty($col2)) : ?>
                                    <ul>
                                        <?php foreach ($col2 as $item) : ?>
                                        <li>
                                            <img src="<?php echo esc_url($img_check); ?>" alt="">
                                            <?php echo esc_html(!empty($item['list_text']) ? $item['list_text'] : ''); ?>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                                <div class="about-button wow fadeInUp" data-wow-delay=".6s">
                                    <a <?php echo $this->get_render_attribute_string('about2_button'); ?>>
                                        <span class="theme-bg">
                                            <svg width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 20.0865C0 11.6149 6.60344 4.61156 15.0604 4.11409L85 0L154.94 4.11409C163.397 4.61156 170 11.6149 170 20.0865V39.7352C170 48.2794 163.287 55.3159 154.752 55.7175L85 59L15.2479 55.7175C6.71321 55.3159 0 48.2794 0 39.7352V20.0865Z" fill="#F39F5F"></path>
                                            </svg>
                                        </span>
                                        <span class="theme-text"><?php echo esc_html($settings['button_text']); ?> <img src="<?php echo esc_url($img_arrow); ?>" alt=""></span>
                                        <span class="theme-text2"><?php echo esc_html($settings['button_text']); ?> <img src="<?php echo esc_url($img_arrow); ?>" alt=""></span>
                                    </a>
                                    <div class="author-icon">
                                        <div class="icon">
                                            <img src="<?php echo esc_url($img_phone); ?>" alt="">
                                        </div>
                                        <div class="content">
                                            <span><?php echo esc_html($settings['phone_label']); ?></span>
                                            <h3>
                                                <a href="tel:<?php echo esc_attr($phone_number_url); ?>"><?php echo esc_html($phone_number_raw); ?></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="about-image">
                                <img src="<?php echo esc_url($img_main); ?>" alt="">
                                <div class="shape1">
                                    <img src="<?php echo esc_url($img_shape1); ?>" alt="">
                                </div>
                                <div class="shape2">
                                    <img src="<?php echo esc_url($img_shape2); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>








<?php
    }
}
