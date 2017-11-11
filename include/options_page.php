<?php




add_action('acf/init', 'my_acf_init');

function my_acf_init() {
    
    if (function_exists('acf_add_options_page')) {

        // IMPORT
        //__________________________________________________________________________________________________________________

        acf_add_options_sub_page(array(
            'page_title' => 'Опции раздела',
            'menu_title' => 'Опции раздела',
            'capability' => 'edit_posts',
            'parent_slug' => 'edit.php?post_type=blog',
        ));


        // THEME SETTINGS
        //__________________________________________________________________________________________________________________

        // acf_add_options_page(array(
        //     'page_title'     => 'Theme Settings',
        //     'menu_title' => 'Theme Settings',
        //     'menu_slug'  => 'theme-settings',
        //     'capability' => 'edit_posts',
        //     'position'      => 40,
        //     'redirect'       => false,
        // ));

    }
        
}























