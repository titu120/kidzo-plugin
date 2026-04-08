<?php
/**
 * Main Elementor Extension Class
 *
 * The main class that initiates and runs the plugin.
 *
 * @since 1.0.0
 */
final class TPelements_Elementor_Extension {

	/**
	 * Plugin Version
	 *
	 * @since 1.0.0
	 *
	 * @var string The plugin version.
	 */
	const VERSION = '1.0.0';

	/**
	 * Minimum Elementor Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum Elementor version required to run the plugin.
	 */
	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

	/**
	 * Minimum PHP Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum PHP version required to run the plugin.
	 */
	const MINIMUM_PHP_VERSION = '7.4';

	/**
	 * Instance
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 * @static
	 *
	 * @var Elementor_Test_Extension The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @static
	 *
	 * @return Elementor_Test_Extension An instance of the class.
	 */
	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'i18n' ] );
		add_action( 'plugins_loaded', [ $this, 'init' ] );
	}

	/**
	 * Load Textdomain
	 *
	 * Load plugin localization files.
	 *
	 * Fired by `init` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function i18n() {
		load_plugin_textdomain( 'tp-elements' );
	}

	/**
	 * Initialize the plugin
	 *
	 * Load the plugin only after Elementor (and other plugins) are loaded.
	 * Checks for basic plugin requirements, if one check fail don't continue,
	 * if all check have passed load the files required to run the plugin.
	 *
	 * Fired by `plugins_loaded` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return;
		}
		// Add Plugin actions
		add_action( 'elementor/widgets/register', [ $this, 'init_widgets' ] );
		add_action( 'elementor/elements/categories_registered', [ $this, 'add_category' ] );
        add_action( 'elementor/elements/categories_registered', [ $this, 'resgister_tpaddon_category' ] );
		add_action( 'elementor/elements/categories_registered', [ $this, 'resgister_header_footer_category' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'tpelements_register_widget_styles' ] );	
		add_action( 'wp_enqueue_scripts', [ $this, 'tpaddon_register_plugin_styles' ] );		
		add_action( 'admin_enqueue_scripts', [ $this, 'tpaddon_admin_defualt_css' ] );		
		add_action( 'elementor/editor/before_enqueue_scripts', [ $this, 'tpaddon_register_plugin_admin_styles' ] );
		$this->include_files();		
	}

	public function tpelements_register_widget_styles() {		
		// Widget styles removed - files no longer exist
	}

	public function tpaddon_register_plugin_styles() {		
		$dir = plugin_dir_url(__FILE__);       
		   
        //enqueue javascript - only existing files
        wp_enqueue_script( 'tpaddons-custom-pro', $dir.'assets/js/custom.js', array('jquery', 'imagesloaded'), '201513434', true);       	
        
    }

    public function tpaddon_register_plugin_admin_styles(){
    	$dir = plugin_dir_url(__FILE__);
    	wp_enqueue_style( 'tpaddons-admin-pro', $dir.'assets/css/admin/admin.css' );
    } 

    public function tpaddon_admin_defualt_css(){
    	$dir = plugin_dir_url(__FILE__);
    	wp_enqueue_style( 'tpaddons-admin-pro-style', $dir.'assets/css/admin/style.css' );    	
    }

     public function include_files() {       
        require( __DIR__ . '/inc/tp-addon-icons.php' ); 
        require( __DIR__ . '/inc/form.php' );  
        require( __DIR__ . '/inc/helper.php' );  
        require( __DIR__ . '/inc/single-templates.php' );
        require( __DIR__ . '/inc/subscription-modal.php' );
    }

	public function add_category( $elements_manager ) {
        $elements_manager->add_category(
            'pielements_category',
            [
                'title' => esc_html__('TP Elementor Addons', 'tp-elements' ),
                'icon' => 'fa fa-smile-o',
            ]
        );
    }

    public function resgister_tpaddon_category( $elements_manager ) {
        $elements_manager->add_category(
            'tpaddon_category',
            [
                'title' => esc_html__('TP Elementor Pro Addons', 'tp-elements' ),
                'icon' => 'fa fa-smile-o',
            ]
        );
    }

    public function resgister_header_footer_category( $elements_manager ) {
        $elements_manager->add_category(
            'header_footer_category',
            [
                'title' => esc_html__('TP Header Footer Elements', 'tp-elements' ),
                'icon' => 'fa fa-smile-o',
            ]
        );
    }


	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have Elementor installed or activated.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'tp-elements' ),
			'<strong>' . esc_html__( 'TP Elementor Addon', 'tp-elements' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'tp-elements' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required Elementor version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'tp-elements' ),
			'<strong>' . esc_html__( 'TP Elementor Addon', 'tp-elements' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'tp-elements' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'tp-elements' ),
			'<strong>' . esc_html__( 'TP Elementor Addon', 'tp-elements' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'tp-elements' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Init Widgets
	 *
	 * Include widgets files and register them
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init_widgets() {
		$tpelements_addon_setting = get_option( 'tpelements_addon_option' );		

		//heading
		if( isset( $tpelements_addon_setting['tp_heading_setting'] ) == 'tp_element_heading' ) {
            require_once(__DIR__ . '/widgets/heading/heading.php');
            \Elementor\Plugin::instance()->widgets_manager->register(new \Themephi_Elementor_Heading_Widget());
        }

		//Logo Showcase
        if( isset( $tpelements_addon_setting['tp_logo_showcase_setting'] ) == 'tpelement_logo_showcase' ){
		require_once( __DIR__ . '/widgets/logo-widget/logo.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Themephi_Logo_Showcase_Widget() );
		}

		//image hover effect
		if( isset( $tpelements_addon_setting['tp_image_hover_effect_setting'] ) == 'tpelement_image_hover_effect' ){
		require_once( __DIR__ . '/widgets/image-hover-widget/image-hover-effect.php' );	
		\Elementor\Plugin::instance()->widgets_manager->register( new \Themephi_Pro_Image_Hover_Effect_Widget() );
		}

		//Site Logo
        if( isset( $tpelements_addon_setting['tp_site_logo_setting'] ) == 'tpelement_site_logo' ){
		require_once( __DIR__ . '/widgets/header-footer/site-logo.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Themephi_Site_Logo() );	
		}
			
		//Site Search
        if( isset( $tpelements_addon_setting['tp_site_search_setting'] ) == 'tpelement_site_search' ){
		require_once( __DIR__ . '/widgets/header-footer/site-search.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Themephi_Search_Button() );	
		}

		//Site Canvas
        if( isset( $tpelements_addon_setting['tp_site_canvas_setting'] ) == 'tpelement_site_canvas' ){
		require_once( __DIR__ . '/widgets/header-footer/site-canvas.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Themephi_Offcanvas() );	
		}

		//Site Navigation
        if( isset( $tpelements_addon_setting['tp_site_navigation_setting'] ) == 'tpelement_site_navigation' ){
		require_once( __DIR__ . '/widgets/header-footer/site-nav.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Themephi_Navigation_Menu() );	
		}

		//Scroll To Top
        if( isset( $tpelements_addon_setting['tp_scroll_to_top_setting'] ) == 'tpelement_scroll_to_top' ){
		require_once( __DIR__ . '/widgets/header-footer/scroll-to-top.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Themephi_Elementor_Scroll_To_Top_Widget() );	
		}

		//Single Page Navigation
        if( isset( $tpelements_addon_setting['tp_single_navigation_setting'] ) == 'tpelement_single_navigation' ){
		require_once( __DIR__ . '/widgets/header-footer/single-page-nav.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Themephi_Single_Navigation_Menu() );	
		}

		//Copyright
        if( isset( $tpelements_addon_setting['tp_copyright_setting'] ) == 'tpelement_copyright' ){
		require_once( __DIR__ . '/widgets/header-footer/copyright.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Themephi_Elementor_Copyright_Widget() );
		}

		//Cart
        if( isset( $tpelements_addon_setting['tp_cart_setting'] ) == 'tpelement_cart' ){
		require_once( __DIR__ . '/widgets/woocommerce/cart.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Themephi_Product_Cart() );
		}

		// About Widgets
		require_once( __DIR__ . '/widgets/about/about1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_About_1_Widget() );
		require_once( __DIR__ . '/widgets/about/about2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_About_2_Widget() );
		require_once( __DIR__ . '/widgets/about/about3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_About_3_Widget() );
		require_once( __DIR__ . '/widgets/about/about4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_About_4_Widget() );
		require_once( __DIR__ . '/widgets/about/about5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_About_5_Widget() );

		// Accordion Widgets
		require_once( __DIR__ . '/widgets/accordion/accordion1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Accordion_1_Widget() );
		require_once( __DIR__ . '/widgets/accordion/accordion2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Accordion_2_Widget() );

		// Banner Widgets
		require_once( __DIR__ . '/widgets/banner/banner1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Banner_1_Widget() );
		require_once( __DIR__ . '/widgets/banner/banner2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Banner_2_Widget() );
		require_once( __DIR__ . '/widgets/banner/banner3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Banner_3_Widget() );
		require_once( __DIR__ . '/widgets/banner/banner4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Banner_4_Widget() );
		require_once( __DIR__ . '/widgets/banner/banner5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Banner_5_Widget() );

		// Blog Widgets
		require_once( __DIR__ . '/widgets/blog/blog1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Blog_1_Widget() );
		require_once( __DIR__ . '/widgets/blog/blog2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Blog_2_Widget() );
		require_once( __DIR__ . '/widgets/blog/blog3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Blog_3_Widget() );
		require_once( __DIR__ . '/widgets/blog/blog4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Blog_4_Widget() );
		require_once( __DIR__ . '/widgets/blog/blog5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Blog_5_Widget() );

		// Brand Widgets
		require_once( __DIR__ . '/widgets/brand/brand1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Brand_1_Widget() );
		require_once( __DIR__ . '/widgets/brand/brand2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Brand_2_Widget() );
		require_once( __DIR__ . '/widgets/brand/brand3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Brand_3_Widget() );
		require_once( __DIR__ . '/widgets/brand/brand4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Brand_4_Widget() );
		require_once( __DIR__ . '/widgets/brand/brand5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Brand_5_Widget() );
		require_once( __DIR__ . '/widgets/brand/brand6.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Brand_6_Widget() );

		// Contact Widgets
		require_once( __DIR__ . '/widgets/contact/contact1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Contact_1_Widget() );
		require_once( __DIR__ . '/widgets/contact/contact2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Contact_2_Widget() );

		// Counter Widgets
		require_once( __DIR__ . '/widgets/counter/counter1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Counter_1_Widget() );
		require_once( __DIR__ . '/widgets/counter/counter2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Counter_2_Widget() );
		require_once( __DIR__ . '/widgets/counter/counter3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Counter_3_Widget() );
		require_once( __DIR__ . '/widgets/counter/counter4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Counter_4_Widget() );
		require_once( __DIR__ . '/widgets/counter/counter5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Counter_5_Widget() );

		// CTA Widgets
		require_once( __DIR__ . '/widgets/cta/cta1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_CTA_1_Widget() );
		require_once( __DIR__ . '/widgets/cta/cta2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_CTA_2_Widget() );

		// Donation Widgets
		require_once( __DIR__ . '/widgets/donation/donation1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Donation_1_Widget() );
		require_once( __DIR__ . '/widgets/donation/donation2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Donation_2_Widget() );
		require_once( __DIR__ . '/widgets/donation/donation3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Donation_3_Widget() );
		require_once( __DIR__ . '/widgets/donation/donation4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Donation_4_Widget() );
		require_once( __DIR__ . '/widgets/donation/donation5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Donation_5_Widget() );
		require_once( __DIR__ . '/widgets/donation/donation6.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Donation_6_Widget() );
		require_once( __DIR__ . '/widgets/donation/donation7.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Donation_7_Widget() );
		require_once( __DIR__ . '/widgets/donation/donation8.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Donation_8_Widget() );

		// Feature Widgets
		require_once( __DIR__ . '/widgets/feature/feature1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature_1_Widget() );
		require_once( __DIR__ . '/widgets/feature/feature2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature_2_Widget() );
		require_once( __DIR__ . '/widgets/feature/feature3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature_3_Widget() );
		require_once( __DIR__ . '/widgets/feature/feature4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature_4_Widget() );
		require_once( __DIR__ . '/widgets/feature/feature5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature_5_Widget() );
		require_once( __DIR__ . '/widgets/feature/feature6.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature_6_Widget() );

		// Gallery Widget
		require_once( __DIR__ . '/widgets/gallery/gallery.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Gallery_Widget() );

		// Info Widgets
		require_once( __DIR__ . '/widgets/info/info1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Info_1_Widget() );
		require_once( __DIR__ . '/widgets/info/info2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Info_2_Widget() );
		require_once( __DIR__ . '/widgets/info/info3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Info_3_Widget() );
		require_once( __DIR__ . '/widgets/info/info4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Info_4_Widget() );

		// Price Widget
		require_once( __DIR__ . '/widgets/price/price.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Price_Widget() );

		// Project Widgets
		require_once( __DIR__ . '/widgets/project/project1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Project_1_Widget() );
		require_once( __DIR__ . '/widgets/project/project2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Project_2_Widget() );
		require_once( __DIR__ . '/widgets/project/project3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Project_3_Widget() );

		// Team Widget
		require_once( __DIR__ . '/widgets/team/team1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Team_1_Widget() );

		// Testimonial Widgets
		require_once( __DIR__ . '/widgets/testimonial/testimonial1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial_1_Widget() );
		require_once( __DIR__ . '/widgets/testimonial/testimonial2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial_2_Widget() );
		require_once( __DIR__ . '/widgets/testimonial/testimonial3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial_3_Widget() );
		require_once( __DIR__ . '/widgets/testimonial/testimonial4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial_4_Widget() );
		require_once( __DIR__ . '/widgets/testimonial/testimonial5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial_5_Widget() );
		require_once( __DIR__ . '/widgets/testimonial/testimonial6.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial_6_Widget() );
		
		// Register widget				
		add_action( 'elementor/elements/categories_registered', [$this, 'add_category'] );
        add_action( 'elementor/elements/categories_registered', [$this, 'resgister_tpaddon_category'] );
		add_action( 'elementor/elements/categories_registered', [$this, 'resgister_header_footer_category'] );
		
	}
}
TPelements_Elementor_Extension::instance();