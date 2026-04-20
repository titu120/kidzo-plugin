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

class FT_Choose3_Widget extends \Elementor\Widget_Base
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
        return 'ft-choose3';
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
        return esc_html__('FT Choose 3', 'ftelements');
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
            'choose3_content',
            [
                'label' => esc_html__('Content', 'ftelements'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'img_shape_ball',
            [
                'label'   => esc_html__('Top Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/ball.png',
                ],
            ]
        );

        $this->add_control(
            'img_shape_girl',
            [
                'label'   => esc_html__('Side Shape Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/girl.png',
                ],
            ]
        );

        $this->add_control(
            'img_main',
            [
                'label'   => esc_html__('Main Image', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-3/choose-us.png',
                ],
            ]
        );

        $this->add_control(
            'img_check_icon',
            [
                'label'   => esc_html__('List Icon', 'ftelements'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => $theme_uri . '/assets/img/home-2/icon/check3.svg',
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
        $shape_ball = !empty($settings['img_shape_ball']['url']) ? $settings['img_shape_ball']['url'] : '';
        $shape_girl = !empty($settings['img_shape_girl']['url']) ? $settings['img_shape_girl']['url'] : '';
        $main_img = !empty($settings['img_main']['url']) ? $settings['img_main']['url'] : '';
        $check_icon = !empty($settings['img_check_icon']['url']) ? $settings['img_check_icon']['url'] : '';

        ?>




        <section class="why-choose-us-section-3 fix section-padding">
            <div class="doll-shape bz-gsap-animate-circle">
                <?php if ($shape_ball) : ?>
                    <img src="<?php echo esc_url($shape_ball); ?>" alt="img">
                <?php endif; ?>
            </div>
            <div class="girl-shape bz-gsap-animate-circle">
                <?php if ($shape_girl) : ?>
                    <img src="<?php echo esc_url($shape_girl); ?>" alt="img">
                <?php endif; ?>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="sec-sub tz-sub-tilte tz-sub-anim tx-subTitle">Why choose us</span>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                        Why Families Choose Us <br>
                        Our Nannies
                    </h2>
                </div>
                <div class="why-choose-wrapper-3">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <ul class="values-list">
                                <li>
                                    <div class="icon">
                                        <?php if ($check_icon) : ?>
                                            <img src="<?php echo esc_url($check_icon); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">
                                            Focus on child-friendly,
                                            safe, & quality education
                                        </h3>
                                    </div>
                                </li>
                                <li class="active">
                                    <div class="icon">
                                        <?php if ($check_icon) : ?>
                                            <img src="<?php echo esc_url($check_icon); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">
                                            Carefully screened &
                                            background-checked
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <?php if ($check_icon) : ?>
                                            <img src="<?php echo esc_url($check_icon); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">
                                            Child-first safety and
                                            care approach
                                        </h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 order-2 order-xl-1 wow fadeInUp" data-wow-delay=".5s">
                            <div class="choose-us-image">
                                <?php if ($main_img) : ?>
                                    <img src="<?php echo esc_url($main_img); ?>" alt="img">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 order-1 order-xl-2 wow fadeInUp" data-wow-delay=".7s">
                            <ul class="values-list style-2">
                                <li>
                                    <div class="icon">
                                        <?php if ($check_icon) : ?>
                                            <img src="<?php echo esc_url($check_icon); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">
                                            Focus on child-friendly,
                                            safe, & quality education
                                        </h3>
                                    </div>
                                </li>
                                <li class="active">
                                    <div class="icon">
                                        <?php if ($check_icon) : ?>
                                            <img src="<?php echo esc_url($check_icon); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">
                                            Carefully screened &
                                            background-checked
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <?php if ($check_icon) : ?>
                                            <img src="<?php echo esc_url($check_icon); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">
                                            Child-first safety and
                                            care approach
                                        </h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>









<?php
    }
} ?>