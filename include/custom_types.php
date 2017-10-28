<?php 

add_action('init', 'register_post_blog');
function register_post_blog(){
    register_post_type('blog', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Блог', // основное название для типа записи
            'singular_name'      => 'Блог', // название для одной записи этого типа
            'add_new'            => 'Добавить запись', // для добавления новой записи
            'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование записи', // для редактирования типа записи
            'new_item'           => 'Новая запись', // текст новой записи
            'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
            'search_items'       => 'Искать запись', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Записи', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_ui'             => true, 
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-book',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => array('title', 'editor',  'thumbnail','excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array('language'),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}



// хук для регистрации
add_action('init', 'create_taxonomy_lang');
function create_taxonomy_lang(){
    // заголовки
    $labels = array(
        'name'              => 'Язык',
        'singular_name'     => 'Язык',
        'search_items'      => 'Искать язык',
        'all_items'         => 'Все языки',
        'parent_item'       => 'Родительский язык',
        'parent_item_colon' => 'Родительский язык:',
        'edit_item'         => 'Редактировать язык',
        'update_item'       => 'Обновить язык',
        'add_new_item'      => 'Добавить язык',
        'new_item_name'     => 'Новое название языка',
        'menu_name'         => 'Языки',
    ); 
    // параметры
    $args = array(
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => $labels,
        'description'           => '', // описание таксономии
        'public'                => true,
        'publicly_queryable'    => true, // равен аргументу public
        'show_in_nav_menus'     => true, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => true, // равен аргументу show_ui
        'hierarchical'          => true,
        'update_count_callback' => '',
        'rewrite'               => true,
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities'          => array(),
        'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
        'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
        '_builtin'              => false,
        'show_in_quick_edit'    => null, // по умолчанию значение show_ui
    );
    register_taxonomy('language', array('blog'), $args );
}

// хук для регистрации
add_action('init', 'create_taxonomy_cat');
function create_taxonomy_cat(){
    // заголовки
    $labels = array(
        'name'              => 'Категори блога',
        'singular_name'     => 'Категори блога',
        'search_items'      => 'Искать категорию',
        'all_items'         => 'Все категории',
        'parent_item'       => 'Родительская категория',
        'parent_item_colon' => 'Родительская категория:',
        'edit_item'         => 'Редактировать категорию',
        'update_item'       => 'Обновить категорию',
        'add_new_item'      => 'Добавить категорию',
        'new_item_name'     => 'Новое название категории',
        'menu_name'         => 'Категории',
    ); 
    // параметры
    $args = array(
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => $labels,
        'description'           => '', // описание таксономии
        'public'                => true,
        'publicly_queryable'    => true, // равен аргументу public
        'show_in_nav_menus'     => true, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => true, // равен аргументу show_ui
        'hierarchical'          => true,
        'update_count_callback' => '',
        'rewrite'               => true,
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities'          => array(),
        'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
        'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
        '_builtin'              => false,
        'show_in_quick_edit'    => null, // по умолчанию значение show_ui
    );
    register_taxonomy('categoryes', array('blog'), $args );
}



add_action('init', 'register_post_teacher');
function register_post_teacher(){
    register_post_type('teacher', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Преподаватели', // основное название для типа записи
            'singular_name'      => 'Преподаватели', // название для одной записи этого типа
            'add_new'            => 'Добавить препода', // для добавления новой записи
            'add_new_item'       => 'Добавить препода', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование преподавателя', // для редактирования типа записи
            'new_item'           => 'Новий препод', // текст новой записи
            'view_item'          => 'Смотреть препода', // для просмотра записи этого типа.
            'search_items'       => 'Искать препода', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Преподаватели', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_ui'             => true, 
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => array('title', 'editor',  'thumbnail','excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array('language'),
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
} 



