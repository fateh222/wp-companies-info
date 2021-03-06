<?php
class CIAssets
{
  public static function ci_enqueue_scripts()
  {
    if(is_page( 'add-your-company' ) || is_page( 'impact-companies-directory' )){
      /* Adding css */
      self::add_css_files();
      /* Adding js */
      self::add_js_files();
    }
  }

  # Add css files function
  private  static function add_css_files()
  {
    wp_enqueue_style( 'ci',PLUGIN_URL . '/assets/css/custom.css');
    wp_enqueue_style( 'ci-bootstrap-min', PLUGIN_URL . '/assets/css/bootstrap.min.css' , array(), null, 'all' );
    wp_enqueue_style( 'ci-bootstrap-toggle', PLUGIN_URL . '/assets/css/bootstrap-toggle.min.css', array(), null, 'all' );
  }
  # Add js files function
  private static function add_js_files()
  {
    wp_enqueue_script('ci', PLUGIN_URL . '/assets/js/custom.js',array('jquery','jquery-ui-datepicker'),true);
  }
}
