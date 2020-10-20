<?php
    /*
     * Plugin Name: Meu Primeiro Plugin
     * Plugin URI: https://www.google.com.br
     * Description: Este é um lindo plugin desenvolvido por mim
     * Version: 0.0.1
     * Author: Henrique Pereira
     * Author URI: https://github.com/CelticSlash
     * License: CC BY
     */

     //Gancho de filtro altera funcionalidade existente
     //Gancho de ação adiciona uma nova funcionalidade

     add_filter('login_errors', 'altera_msg_login');

     function altera_msg_login()
     {
         return 'Credenciais Inválidas.';
     }