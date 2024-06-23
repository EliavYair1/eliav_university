<?php 
// * cheat sheet 
// capability_type : Defines a singular and plural capability name for this post type. This is used to set custom capabilities for managing the post type.
// map_meta_cap : When set to true, this parameter will map the meta capabilities (like edit_post) to the correct primitive capabilities required for the current user.
// show_in_rest : When set to true, this makes the post type available in the WordPress REST API. This is useful for headless CMS setups or custom API endpoints.
// supports : Defines the features supported by the post type. Possible values include 'title', 'editor', 'excerpt', 'thumbnail', etc.
// rewrite : Allows customization of the permalink structure for the post type. The 'slug' parameter within 'rewrite' defines the base URL slug for the post type.
// has_archive : When set to true, enables an archive page for the post type.
// public : Determines whether the post type is publicly accessible. If set to true, it is visible on the site and accessible by queries.
// labels : An array of labels for the post type. These labels are used in the WordPress admin UI.
// menu_icon : Specifies a dashicon or custom URL for the post type's menu icon in the WordPress admin UI.
// show_ui : When set to true, displays the post type in the admin UI.
// ? end
function university_post_types() {



// Campus Post Type
register_post_type('campus', array(
  'capability_type'=>'campus',
  'map_meta_cap'=>true,
'show_in_rest' => true,
'supports' => array('title', 'editor', 'excerpt'),
'rewrite' => array('slug' => 'campuses'),
'has_archive' => true,
'public' => true,
'labels' => array(
  'name' => 'Campuses',
  'add_new_item' => 'Add New Campus',
  'edit_item' => 'Edit Campus',
  'all_items' => 'All Campuses',
  'singular_name' => 'Campus'
  ),
'menu_icon' => 'dashicons-location-alt'
  ));

// event post type
register_post_type('event',array(
  'capability_type'=>'event',
  'map_meta_cap'=>true,
'show_in_rest'=>true,
'supports'=> array('title','editor','excerpt'),
'rewrite'=>array("slug"=>'events'),
'has_archive'=>true,
'public'=> true,
'show_in_rest' => true,

'labels'=>array(
'name'=> "Events",
'add_new_item'=>'Add New Event',
'edit_item'=> 'Edit Event',
'all_items'=> 'All Events',
'singular_name'=> 'Event'
),
'menu_icon'=>"dashicons-calendar"
));

//progrem post type
register_post_type('program',array(
    'show_in_rest'=>true,
    'supports'=> array('title'),
    'rewrite'=>array("slug"=>'programs'),
    'has_archive'=>true,
    'public'=> true,
    'show_in_rest' => true,
    
    'labels'=>array(
    'name'=> "Programs",
    'add_new_item'=>'Add New Program',
    'edit_item'=> 'Edit Program',
    'all_items'=> 'All Programs',
    'singular_name'=> 'Program'
    ),
    'menu_icon'=>"dashicons-awards"
    ));

//professor post type
register_post_type('professor',array(
    'show_in_rest'=>true,
    'supports'=> array('title','editor',"thumbnail"),
    'public'=> true,
    'show_in_rest' => true,
    'labels'=>array(
    'name'=> "Professors",
    'add_new_item'=>'Add New Professor',
    'edit_item'=> 'Edit Professor',
    'all_items'=> 'All Professors',
    'singular_name'=> 'Professor'
    ),
    'menu_icon'=>"dashicons-welcome-learn-more"
    ));

//my note post type
register_post_type('note',array(
  'capability_type'=> 'note',
  'map_meta_cap'=>true,
    'show_in_rest'=>true,
    'supports'=> array('title','editor'),
    'public'=> false,
    'show_ui'=>true,
    'labels'=>array(
    'name'=> "Notes",
    'add_new_item'=>'Add New Note',
    'edit_item'=> 'Edit Note',
    'all_items'=> 'All Notes',
    'singular_name'=> 'Note'
    ),
    'menu_icon'=>"dashicons-welcome-write-blog"
    ));

//my like post type
register_post_type('like',array(
    'supports'=> array('title',),
    'public'=> false,
    'show_ui'=>true,
    'labels'=>array(
    'name'=> "Likes",
    'add_new_item'=>'Add New Like',
    'edit_item'=> 'Edit Like',
    'all_items'=> 'All Likes',
    'singular_name'=> 'Like'
    ),
    'menu_icon'=>"dashicons-heart"
    ));
}


    
add_action('init','university_post_types');

?>