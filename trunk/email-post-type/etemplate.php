<?php
if ( !function_exists( 'add_action' ) ) {
    echo "This page cannot be called directly.";
    exit;
}

$labels_md_etemplate = array(
    'name'                => 'Шаблоны писем',
    'singular_name'       => 'Шаблон',
    'menu_name'           => 'Шаблоны писем',
    'all_items'           => 'Все шаблоны',
    'view_item'           => 'Просмотр шаблона',
    'add_new_item'        => 'Добавить новый шаблон',
    'add_new'             => 'Добавить новый',
    'edit_item'           => 'Редактировать шаблон',
    'update_item'         => 'Обновить шаблон',
    'search_items'        => 'Поиск',
    'not_found'           => 'Ничего не найдено',
    'not_found_in_trash'  => 'В корзине пусто',
);

$args_md_etemplate = array(
    'label'               => 'md_etemplate',
    'description'         => 'Шаблоны писем',
    'labels'              => $labels_md_etemplate,
    'supports'            => array( 'title', 'custom-fields', ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => false,
    'show_in_admin_bar'   => false,
    'menu_position'       => 25,
    'menu_icon'           => 'dashicons-media-document',
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => true,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
);

register_post_type( 'md_etemplate', $args_md_etemplate);
