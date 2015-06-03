<?php
if ( !function_exists( 'add_action' ) ) {
    echo "This page cannot be called directly.";
    exit;
}


function md_wpet_metaboxes_init() {
    $meta = new MD_YAMF_Metabox('md_etemplate', 'Шаблон', 'md_etemplate_data', 'normal');
    $meta->add_meta_field([
        'name' => 'md_wpet_template',
        'label' => 'Текст шаблона',
        'type' => 'textarea',
        'before' => '<div class="row">',
        'after' => '</div>',
        'options' => [
            'rows' => '25',
        ]
    ]);
    $meta->fire();
}
add_action('MD_YAMF_run_md_etemplate', 'md_wpet_metaboxes_init');
