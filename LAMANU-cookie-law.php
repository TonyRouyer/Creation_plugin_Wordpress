<?php
/*
Plugin Name: LAMANU-cookie-law
Version: 0.1
Plugin URI: https://github.com/TonyRouyer
Description: WordPress Plugin for european cookie law.
Author: Tony R 
Author URI: https://github.com/TonyRouyer
*/ 
function LAMANU_scripts() { 
    //chargement des script 
    wp_enqueue_script( 'tarteaucitron',  plugin_dir_url( __FILE__ ) . 'js/tarteaucitron/tarteaucitron.js' );

    wp_register_script( 'tarteaucitroninit',  plugin_dir_url( __FILE__ ) . 'js/tarteaucitron/tarteaucitroninit.js' );
    $lang_array = array('lang' => get_option('lang'));
    //attache des datas au script selectioner
    wp_localize_script( 'tarteaucitroninit', 'object_name', $lang_array );
    //met le script en file d'attente
    wp_enqueue_script( 'tarteaucitroninit' );


    //enregistre le script
    wp_register_script( 'googleAnalytics',  plugin_dir_url( __FILE__ ) . '/js/googleAnalytics.js' );
    //recuperation de la data id dans la DB
    $id_array = array( 'id' => get_option('id'));
    //attache des data au script selectioner
    wp_localize_script( 'googleAnalytics', 'object_name', $id_array );
    //met le script en file d'attente
    wp_enqueue_script( 'googleAnalytics' );
} 

//execute le script dans le head du projet
add_action('wp_head', 'LAMANU_scripts');
//ajoute le liens vers le plugin dans le back office de wordpress
add_action('admin_menu','tarteAuCitron_menu');
function tarteAuCitron_menu(){
      add_menu_page('Cookie gestion Page', 'Cookie gestion', 'manage_options', 'cookie-gestion', 'cookie_init' );
}
function cookie_init(){
    include 'view/mfp_option.php';
}
