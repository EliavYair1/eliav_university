<?php

  get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
     ?>
    

    <div class="container container--narrow page-section">
        <?php 
$theParentPageId = wp_get_post_parent_id(get_the_id()); 

        // getting the parent id of the current page.
     if ($theParentPageId) {?>
<div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParentPageId)?>" ><i class="fa fa-home" aria-hidden="true">
          </i> Back to <?php echo get_the_title($theParentPageId);?> </a> <span class="metabox__main"><?php the_title() ?></span>
        </p>
      </div>
     <?php 
     }
        ?>
 <?php 
//  we've checked if the page is a child of some other page by setting a variable
// ? get_page- is a method Retrieves an array of pages .
 $testArray = get_pages(array(
  'child_of'=> get_the_id()
 ));
//  if the there is a parent id or of the page has a parent display the following menu if not don't display anything.
 if ($theParentPageId or $testArray) { ?>
   <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($theParentPageId) ?>"><?php echo get_the_title($theParentPageId) ?></a></h2>
        <ul class="min-list">
<?php 
if ($theParentPageId) {
$findChildrenOf = $theParentPageId;
}else{
  $findChildrenOf = get_the_id();
}
wp_list_pages(array('title_li'=> NULL,'child_of'=>  $findChildrenOf,
'sort_column'=> 'menu_order'
));
?>
        </ul>
      </div> 

 
   <?php }?>

   <div class="generic-content">
       <?php the_content() ?>
      </div>
    </div>



<?php }

get_footer();
?>

