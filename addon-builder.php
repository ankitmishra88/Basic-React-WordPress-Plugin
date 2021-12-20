<?php

defined('ABSPATH') || die('No Script kiddies please');

class AddonBuilder{

    public function __construct(){
        add_action('admin_menu',[$this,'admin_menu']);
    }

    public function getSavedOptions(){

    }

    public function saveNewOptions(){
        
    }

    public function admin_menu(){
        add_menu_page(
            'Addons',
            'Addons',
            'manage_options',
            'global-addons',
            [$this,'addon_builder']
        );
    }

    function addon_builder(){
        echo "<div id='addon_builder'></div>";
        wp_enqueue_script('global-addon-builder-admin',plugin_dir_url(__FILE__).'/build/index.js',array('wp-element'));
    }

}

function addons(){
    return $GLOBALS['addon_builder'];
}

global $addon_builder;
$addon_builder=new AddonBuilder();

?>