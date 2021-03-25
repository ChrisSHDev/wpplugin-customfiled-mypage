<?php 

$options = get_option( 'wpcfmypage_settings' );
$new_tab_name = esc_html( $options['custom_text']);
$new_tab_contents = esc_html( $options['textarea']);
$tab_url = formatUrl($new_tab_name, $sep='-');

var_dump($tab_url);
 
function new_tab_endpoint() {

    add_rewrite_endpoint('your-name', EP_ROOT | EP_PAGES );
}
  
add_action( 'init', 'new_tab_endpoint' );

function formatUrl($str, $sep='-')
{
        $res = strtolower($str);
        $res = preg_replace('/[^[:alnum:]]/', ' ', $res);
        $res = preg_replace('/[[:space:]]+/', $sep, $res);
        return trim($res, $sep);
}
  
function new_tab_query_vars( $vars ) {
    global $tab_url;
   
    $vars[] = 'your-name';
    return $vars;
}
  
add_filter( 'query_vars', 'new_tab_query_vars', 0 );
  
function new_tab_link_my_account( $items ) {

    global $new_tab_name;
    global $tab_url;
    $items['your-name'] = $new_tab_name;
    return $items;
}
  
add_filter( 'woocommerce_account_menu_items', 'new_tab_link_my_account' );
  
function new_tab_content() {

   global $new_tab_name;
   global $new_tab_contents;

   echo $new_tab_name;
   echo $new_tab_contents;
}
 
$new_endpoint_hook = 'woocommerce_account_' . $tab_url . '_endpoint';

add_action('woocommerce_account_your-name_endpoint', 'new_tab_content' );
