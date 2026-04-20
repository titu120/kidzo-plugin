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



		require_once( __DIR__ . '/widgets/banner/banner1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Kidzu_Banner1_Widget() );

		require_once( __DIR__ . '/widgets/feature/feature1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Kidzu_Feature1_Widget() );

		require_once( __DIR__ . '/widgets/about/about1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Kidzu_About1_Widget() );

		require_once( __DIR__ . '/widgets/choose/choose1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \Kidzu_Choose1_Widget() );

		require_once( __DIR__ . '/widgets/counter/counter1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Counter1_Widget() );

		require_once( __DIR__ . '/widgets/schedule/schedule1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Schedule1_Widget() );

		require_once( __DIR__ . '/widgets/cta/cta1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Cta1_Widget() );

		require_once( __DIR__ . '/widgets/accordion/accordion1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Accordion1_Widget() );

		require_once( __DIR__ . '/widgets/testimonial/testimonial1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial1_Widget() );

		require_once( __DIR__ . '/widgets/newsletter/newsletter1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Newsletter1_Widget() );

		require_once( __DIR__ . '/widgets/blog/blog1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Blog1_Widget() );

		require_once( __DIR__ . '/widgets/brand/brand1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Brand1_Widget() );

		require_once( __DIR__ . '/widgets/gallery/gallery1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Gallery1_Widget() );

		require_once( __DIR__ . '/widgets/banner/banner2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Banner2_Widget() );

		require_once( __DIR__ . '/widgets/about/about2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_About2_Widget() );

		require_once( __DIR__ . '/widgets/feature/feature2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature2_Widget() );

		require_once( __DIR__ . '/widgets/feature/feature3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature3_Widget() );

		require_once( __DIR__ . '/widgets/feature/feature4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature4_Widget() );
		
		require_once( __DIR__ . '/widgets/cta/cta2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Cta2_Widget() );

		require_once( __DIR__ . '/widgets/accordion/accordion2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Accordion2_Widget() );

		require_once( __DIR__ . '/widgets/testimonial/testimonial2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial2_Widget() );

		require_once( __DIR__ . '/widgets/blog/blog2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Blog2_Widget() );

		require_once( __DIR__ . '/widgets/brand/brand3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Brand3_Widget() );

		require_once( __DIR__ . '/widgets/choose/choose2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Choose2_Widget() );

		require_once( __DIR__ . '/widgets/brand/brand2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Brand2_Widget() );

		require_once( __DIR__ . '/widgets/cta/cta3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Cta3_Widget() );

		require_once( __DIR__ . '/widgets/banner/banner3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Banner3_Widget() );

		require_once( __DIR__ . '/widgets/about/about3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_About3_Widget() );

		require_once( __DIR__ . '/widgets/choose/choose3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Choose3_Widget() );

		require_once( __DIR__ . '/widgets/how-work/how-work1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_HowWork1_Widget() );

		require_once( __DIR__ . '/widgets/contact/contact1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Contact1_Widget() );

		require_once( __DIR__ . '/widgets/accordion/accordion3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Accordion3_Widget() );

		require_once( __DIR__ . '/widgets/testimonial/testimonial3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial3_Widget() );

		require_once( __DIR__ . '/widgets/brand/brand4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Brand4_Widget() );

		require_once( __DIR__ . '/widgets/gallery/gallery2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Gallery2_Widget() );

		require_once( __DIR__ . '/widgets/cta/cta4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Cta4_Widget() );

		require_once( __DIR__ . '/widgets/blog/blog3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Blog3_Widget() );

		require_once( __DIR__ . '/widgets/banner/banner4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Banner4_Widget() );

		require_once( __DIR__ . '/widgets/how-work/how-work2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_HowWork2_Widget() );

		require_once( __DIR__ . '/widgets/about/about4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_About4_Widget() );

		require_once( __DIR__ . '/widgets/feature/feature5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature5_Widget() );

		require_once( __DIR__ . '/widgets/testimonial/testimonial4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial4_Widget() );

		require_once( __DIR__ . '/widgets/about/about5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_About5_Widget() );

		require_once( __DIR__ . '/widgets/blog/blog4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Blog4_Widget() );

		require_once( __DIR__ . '/widgets/cta/cta5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Cta5_Widget() );

		require_once( __DIR__ . '/widgets/brand/brand5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Brand5_Widget() );

		require_once( __DIR__ . '/widgets/banner/banner5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Banner5_Widget() );

		require_once( __DIR__ . '/widgets/feature/feature6.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature6_Widget() );

		require_once( __DIR__ . '/widgets/about/about6.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_About6_Widget() );

		require_once( __DIR__ . '/widgets/feature/feature7.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature7_Widget() );

		require_once( __DIR__ . '/widgets/counter/counter2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Counter2_Widget() );

		require_once( __DIR__ . '/widgets/contact/contact2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Contact2_Widget() );

		require_once( __DIR__ . '/widgets/price/price1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Price1_Widget() );

		require_once( __DIR__ . '/widgets/testimonial/testimonial5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial5_Widget() );

		require_once( __DIR__ . '/widgets/blog/blog5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Blog5_Widget() );

		require_once( __DIR__ . '/widgets/contact/contact3.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Contact3_Widget() );

		require_once( __DIR__ . '/widgets/choose/choose4.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Choose4_Widget() );

		require_once( __DIR__ . '/widgets/testimonial/testimonial6.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial6_Widget() );

		require_once( __DIR__ . '/widgets/about/about7.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_About7_Widget() );

		require_once( __DIR__ . '/widgets/about/about8.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_About8_Widget() );

		require_once( __DIR__ . '/widgets/schedule/schedule2.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Schedule2_Widget() );

		require_once( __DIR__ . '/widgets/testimonial/testimonial7.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Testimonial7_Widget() );

		require_once( __DIR__ . '/widgets/video/video1.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Video1_Widget() );

		require_once( __DIR__ . '/widgets/feature/feature8.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Feature8_Widget() );

		require_once( __DIR__ . '/widgets/contact/contact5.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Contact5_Widget() );

		require_once( __DIR__ . '/widgets/contact/contact6.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Contact6_Widget() );

		require_once( __DIR__ . '/widgets/blog/blog6.php' );
		\Elementor\Plugin::instance()->widgets_manager->register( new \FT_Blog6_Widget() );

		



		


































		











		
		



		// Register widget				
		add_action( 'elementor/elements/categories_registered', [$this, 'add_category'] );
        add_action( 'elementor/elements/categories_registered', [$this, 'resgister_tpaddon_category'] );
		add_action( 'elementor/elements/categories_registered', [$this, 'resgister_header_footer_category'] );
		
	}
}
TPelements_Elementor_Extension::instance();