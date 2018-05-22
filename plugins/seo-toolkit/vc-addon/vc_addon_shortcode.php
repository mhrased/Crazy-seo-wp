<?php
if (!defined('ABSPATH')) die('-1');


// Class started
class stockVCExtendAddonClass {
    function __construct() {
        // We safely integrate with VC with this hook
        add_action( 'init', array( $this, 'stockIntegrateWithVC' ) );
    }
 
    public function stockIntegrateWithVC() {
        // Checks if Visual composer is not installed
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            add_action('admin_notices', array( $this, 'stockShowVcVersionNotice' ));
            return;
        }
 
        // visual composer addons.
        include SEO_ACC_PATH . '/vc-addon/vc-slides.php';
        include SEO_ACC_PATH . '/vc-addon/vc-service.php';
        include SEO_ACC_PATH . '/vc-addon/vc-team.php';
        include SEO_ACC_PATH . '/vc-addon/vc-service-two.php';
        include SEO_ACC_PATH . '/vc-addon/vc-map.php';
        include SEO_ACC_PATH . '/vc-addon/vc-testimonial.php';
        include SEO_ACC_PATH . '/vc-addon/vc-cta.php';
        include SEO_ACC_PATH . '/vc-addon/vc-logo-carosol.php';
        include SEO_ACC_PATH . '/vc-addon/vc_counter.php';
        include SEO_ACC_PATH . '/vc-addon/vc_counter_btn.php';
        include SEO_ACC_PATH . '/vc-addon/vc-tile-gallery.php';
        include SEO_ACC_PATH . '/vc-addon/vc-promo-box.php';
        include SEO_ACC_PATH . '/vc-addon/vc-cta-two.php';
        include SEO_ACC_PATH . '/vc-addon/vc-portfolio.php';
        // Templates
        include SEO_ACC_PATH . '/vc-addon/vc-templates.php';
    }
    // show visual composer version
    public function stockShowVcVersionNotice() {
        $theme_data = wp_get_theme();
        echo '
        <div class="notice notice-warning">
          <p>'.sprintf(__('<strong>%s</strong> recommends <strong><a href="'.site_url().'/wp-admin/themes.php?page=tgmpa-install-plugins" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'stock-crazycafe'), $theme_data->get('Name')).'</p>
        </div>';
    }
}
// Finally initialize code
new stockVCExtendAddonClass();
