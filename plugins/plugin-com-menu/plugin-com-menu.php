<?php
    /*
    * Plugin Name: Plugin com Menu
    * Plugin URI: https://www.google.com.br
    * Description: Este é um plugin que mostra como trabalhar com menu do admin do Wordpress
    * Version: 0.0.1
    * Author: Henrique Pereira
    * Author URI: https://github.com/CelticSlash
    * License: CC BY
    */

    add_action('admin_menu', 'menu_do_plugin');

    function menu_do_plugin()
    {
        //Exemplo para criar item no primeiro nivel do menu
        add_menu_page(  'Configurações do meu Plugin', 
                        'Meu Plugin', 
                        'administrator', 
                        'meu-plugin-config',
                        'abre_config',
                        'dashicons-admin-generic');
        
        //Exemplo para criar item no segundo nivel do menu
        add_submenu_page(   'options-general.php',
                            'Configurações do meu Plugin',
                            'Meu Plugin',
                            'administrator',
                            'meu-plugin-config',
                            'abre_config');
    }

    function abre_config()
    {
        require 'plugin-com-menu-tpl.php';
    }