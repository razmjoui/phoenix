<?php

namespace RazmE;


class RazmnixElementorPostType
{

    public function __construct()
    {
        add_action('init' , [$this , 'register_post_types']);
    }

    public function register_post_types()
    {

        $this->register_post_type('razmnixmega' , 'Mega Menu'  );
        $this->register_post_type('razmnixheader' , 'Header');
        $this->register_post_type('razmnixfooter' , 'Footer');

    }

    private function register_post_type($post_type , $label )
    {
        $labels = [
            'name'               => __($label , 'razmnix') ,
            'singular_name'      => __($label , 'razmnix') ,
//            'menu_name'          => __($label , 'razmnix') ,
//            'name_admin_bar'     => __($label , 'razmnix') ,
            'add_new'            => __('Add New' , 'razmnix') ,
//            'add_new_item'       => __('Add New  ' , 'razmnix') . $label ,
//            'new_item'           =>  __('New ' , 'razmnix') . $label ,
//            'edit_item'          => __('Edit ' , 'razmnix') . $label ,
//            'view_item'          => __('View ' , 'razmnix') . $label ,
//            'all_items'          => __('All ' , 'razmnix') . $label ,
//            'search_items'       => __('Search ' , 'razmnix') . $label ,
            'not_found'          => __('Not found' , 'razmnix') ,
            'not_found_in_trash' => __('Not found in Trash' , 'razmnix') ,
        ];

        $args = [
            'labels'             => $labels ,
            'public'             => true ,
            'show_in_menu'          => 'themes.php',
//            'publicly_queryable' => true ,
//            'show_ui'            => true ,
//            'show_in_menu'       => true ,
//            'query_var'          => true ,
            'rewrite'            => ['slug' => $post_type] ,
            'capability_type'    => 'post' ,
            'has_archive'        => true ,
//            'hierarchical'       => false ,
//            'menu_position'      => null ,
            'supports'           => ['title'] ,
        ];

        register_post_type($post_type , $args);
    }

}