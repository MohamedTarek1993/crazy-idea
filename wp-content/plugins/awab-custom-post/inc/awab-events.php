<?php
function awab_unversity_post_type_init()
{
    //client post type
    register_post_type('clients', array(
        'show_in_rest' => true,
      
        'supports' => array('title', 'thumbnail'),
        'public'   => true,
        'labels'   => array(
            'name'                 => esc_html__('Clients', 'awab-custom-posts'),
            'singular_name '     => esc_html__('Client', 'awab-custom-posts'),
            'add_new'              => esc_html__('Add New Clients', 'awab-custom-posts'),
            'add_new_item'          => esc_html__('Add New Client', 'awab-custom-posts'),
            'edit_item '          => esc_html__('Edit Client', 'awab-custom-posts'),
            'new_item  '          => esc_html__('New Client', 'awab-custom-posts'),
            'view_item  '          => esc_html__('View Client', 'awab-custom-posts'),
            'view_items '          => esc_html__('View Clients', 'awab-custom-posts'),
            'search_items'          => esc_html__('Search Clients', 'awab-custom-posts'),
            'edit_item '           => esc_html__('Edit Client', 'awab-custom-posts'),
            'not_found '          => esc_html__('Not Found Client', 'awab-custom-posts'),
            'item_updated '         => esc_html__('Update Client', 'awab-custom-posts'),
        ),
        'description' => esc_html__('This for add image for clients', 'awab-custom-posts'),
        'label' => esc_html__('Client', 'awab-custom-posts'),
        'menu_icon' => 'dashicons-businessperson',
        'menu_position'  => 20,
    ));

    //Skill post type
    register_post_type('skills', array(
        'show_in_rest' => true,
      
        'supports' => array('title'),
        'public'   => true,
        'labels'   => array(
            'name'                 => esc_html__('Skills', 'awab-custom-posts'),
            'singular_name '     => esc_html__('Skill', 'awab-custom-posts'),
            'add_new'              => esc_html__('Add New Skills', 'awab-custom-posts'),
            'add_new_item'          => esc_html__('Add New Skill', 'awab-custom-posts'),
            'edit_item '          => esc_html__('Edit Skill', 'awab-custom-posts'),
            'new_item  '          => esc_html__('New Skill', 'awab-custom-posts'),
            'view_item  '          => esc_html__('View Skill', 'awab-custom-posts'),
            'view_items '          => esc_html__('View Skills', 'awab-custom-posts'),
            'search_items'          => esc_html__('Search Skills', 'awab-custom-posts'),
            'edit_item '           => esc_html__('Edit Skill', 'awab-custom-posts'),
            'not_found '          => esc_html__('Not Found Skill', 'awab-custom-posts'),
            'item_updated '         => esc_html__('Update Skill', 'awab-custom-posts'),
        ),
        'description' => esc_html__('This for make and post Skills', 'awab-custom-posts'),
        'label' => esc_html__('Skill', 'awab-custom-posts'),
        'menu_icon' => 'dashicons-awards',
        'menu_position'  => 20,
    ));

    //versiio post type
    register_post_type('version', array(
        'show_in_rest' => true,
        
        'supports' => array('title',),
        'has_archive' => true,
        'public'   => true,
        'labels'   => array(
            'name'                 => esc_html__('Versions', 'awab-custom-posts'),
            'singular_name '     => esc_html__('Version', 'awab-custom-posts'),
            'add_new'              => esc_html__('Add New Versions', 'awab-custom-posts'),
            'add_new_item'          => esc_html__('Add New Version', 'awab-custom-posts'),
            'edit_item '          => esc_html__('Edit Version', 'awab-custom-posts'),
            'new_item  '          => esc_html__('New Version', 'awab-custom-posts'),
            'view_item  '          => esc_html__('View Version', 'awab-custom-posts'),
            'view_items '          => esc_html__('View Versions', 'awab-custom-posts'),
            'search_items'          => esc_html__('Search Versions', 'awab-custom-posts'),
            'edit_item '           => esc_html__('Edit Version', 'awab-custom-posts'),
            'not_found '          => esc_html__('Not Found Version', 'awab-custom-posts'),
            'item_updated '         => esc_html__('Update Version', 'awab-custom-posts'),
        ),
        'description' => esc_html__('This for make and post Versions', 'awab-custom-posts'),
        'label' => esc_html__('Vesion', 'awab-custom-posts'),
        'menu_icon' => 'dashicons-visibility',
        'menu_position'  => 20,
    ));

    //service post type
    register_post_type('service', array(
        'show_in_rest' => true,
       
        'supports' => array('title',),
        'has_archive' => true,
        'public'   => true,
        'labels'   => array(
            'name'                 => esc_html__('Services', 'awab-custom-posts'),
            'singular_name '     => esc_html__('Service', 'awab-custom-posts'),
            'add_new'              => esc_html__('Add New Services', 'awab-custom-posts'),
            'add_new_item'          => esc_html__('Add New Service', 'awab-custom-posts'),
            'edit_item '          => esc_html__('Edit Service', 'awab-custom-posts'),
            'new_item  '          => esc_html__('New Service', 'awab-custom-posts'),
            'view_item  '          => esc_html__('View Service', 'awab-custom-posts'),
            'view_items '          => esc_html__('View Services', 'awab-custom-posts'),
            'search_items'          => esc_html__('Search Services', 'awab-custom-posts'),
            'edit_item '           => esc_html__('Edit Service', 'awab-custom-posts'),
            'not_found '          => esc_html__('Not Found Service', 'awab-custom-posts'),
            'item_updated '         => esc_html__('Update Service', 'awab-custom-posts'),
        ),
        'description' => esc_html__('This for make and post Services', 'awab-custom-posts'),
        'label' => esc_html__('Services', 'awab-custom-posts'),
        'menu_icon' => 'dashicons-portfolio',
        'menu_position'  => 20,
    ));

    //package post type
    register_post_type('package', array(
        'show_in_rest' => true,
        
        'supports' => array('title',),
        'has_archive' => true,
        'public'   => true,
        'labels'   => array(
            'name'                 => esc_html__('Packages', 'awab-custom-posts'),
            'singular_name '     => esc_html__('Package', 'awab-custom-posts'),
            'add_new'              => esc_html__('Add New Packages', 'awab-custom-posts'),
            'add_new_item'          => esc_html__('Add New Package', 'awab-custom-posts'),
            'edit_item '          => esc_html__('Edit Package', 'awab-custom-posts'),
            'new_item  '          => esc_html__('New Package', 'awab-custom-posts'),
            'view_item  '          => esc_html__('View Package', 'awab-custom-posts'),
            'view_items '          => esc_html__('View Packages', 'awab-custom-posts'),
            'search_items'          => esc_html__('Search Packages', 'awab-custom-posts'),
            'edit_item '           => esc_html__('Edit Package', 'awab-custom-posts'),
            'not_found '          => esc_html__('Not Found Package', 'awab-custom-posts'),
            'item_updated '         => esc_html__('Update Package', 'awab-custom-posts'),
        ),
        'description' => esc_html__('This for make and post Packages', 'awab-custom-posts'),
        'label' => esc_html__('Packages', 'awab-custom-posts'),
        'menu_icon' => 'dashicons-products',
        'menu_position'  => 20,
    ));

    //team post type
    register_post_type('team', array(
        'show_in_rest' => true,
     
        'supports' => array('title',),
        'has_archive' => true,
        'public'   => true,
        'labels'   => array(
            'name'                 => esc_html__('Teams', 'awab-custom-posts'),
            'singular_name '     => esc_html__('Team', 'awab-custom-posts'),
            'add_new'              => esc_html__('Add New Member', 'awab-custom-posts'),
            'add_new_item'          => esc_html__('Add New Member', 'awab-custom-posts'),
            'edit_item '          => esc_html__('Edit Team', 'awab-custom-posts'),
            'new_item  '          => esc_html__('New Team', 'awab-custom-posts'),
            'view_item  '          => esc_html__('View Team', 'awab-custom-posts'),
            'view_items '          => esc_html__('View Teams', 'awab-custom-posts'),
            'search_items'          => esc_html__('Search Teams', 'awab-custom-posts'),
            'edit_item '           => esc_html__('Edit Team', 'awab-custom-posts'),
            'not_found '          => esc_html__('Not Found Team', 'awab-custom-posts'),
            'item_updated '         => esc_html__('Update Team', 'awab-custom-posts'),
        ),
        'description' => esc_html__('This for make and post Teams', 'awab-custom-posts'),
        'label' => esc_html__('Teams', 'awab-custom-posts'),
        'menu_icon' => 'dashicons-groups',
        'menu_position'  => 20,
    ));
}

add_action('init', 'awab_unversity_post_type_init');
