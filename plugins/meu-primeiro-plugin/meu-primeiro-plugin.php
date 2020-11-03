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

     add_action('wp_head', 'colocar_og_tags');

     function colocar_og_tags()
     {
         if(is_single())
         {
            $dados_do_post = get_post(get_the_ID());

            $nome_do_site = get_bloginfo();

            $titulo = $dados_do_post->post_title;

            $resumo = $dados_do_post->post_excerpt;

             echo " \n\n\n
                    <meta property='og:title' content='" .$titulo. "'>\n
                    <meta property='og:site_name' content='" .$nome_do_site."'>\n
                    <meta property='og:url' content='" .get_permalink()."'>\n
                    <meta property='og:description' content='" .$resumo."'>\n
                    \n\n\n";
         }
     }
