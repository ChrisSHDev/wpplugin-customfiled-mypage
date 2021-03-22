<?php
      $wpplugin_plugin_basename = plugin_basename( __FILE__ );
      $wpplugin_plugin_dir_path = plugin_dir_path( __FILE__ );
      $wpplugin_plugins_url_default = plugins_url();
      $wpplugin_plugins_url = plugins_url( 'includes', __FILE__ );
      $wpplugin_plugin_dir_url = plugin_dir_url( __FILE__ );      
?>


<div class="wrap">
    <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
    <p><?php esc_html_e( 'Option:', 'wpcfmypage' ) ?></p>
    <p><?php esc_html_e( get_option( 'plugin_option' ) ); ?></p>

    <ul>
      <li>plugin_basename( __FILE__ ) - <?php echo $wpplugin_plugin_basename; ?></li>
      <li>plugin_dir_path( __FILE__ ) - <?php echo $wpplugin_plugin_dir_path; ?></li>
      <li>plugins_url() - <?php echo $wpplugin_plugins_url_default; ?></li>
      <li>plugins_url( 'includes', __FILE__ ) - <?php echo $wpplugin_plugins_url; ?></li>
      <li>plugin_dir_url( __FILE__ ) - <?php echo $wpplugin_plugin_dir_url; ?></li>
    </ul>

    <h1><?php esc_html_e( get_admin_page_title()); ?></h1>
    <h2><?php esc_html_e( 'All Options', 'plugin_option_1') ?></h2>

    <?php $options = get_option( 'plugin_option_1' ); ?>
    <ul>
    <?php foreach( $options as $option ): ?>
      <li><?php echo $option; ?></li>
    <?php endforeach; ?>
    </ul>

    <?php if( array_key_exists( 'name', $options ) ): ?>

      <h2><?php esc_html_e( 'Specific Option', 'wpcfmypage' ) ?></h2>
      <p><?php esc_html_e( $options['name'] ); ?></p>

    <?php endif; ?>

</div>