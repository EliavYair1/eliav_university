<?php get_header();

pageBanner(array(
  'title'=> 'All Programs',
  "photo"=>"https://images.unsplash.com/photo-1591779051696-1c3fa1469a79?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
  'subtitle'=> 'There is something for everyone have a look around'
  ));

?>


    <div class="container container--narrow page-section">
        <ul class="link-list min-list">
      <?php 
while(have_posts()){
    the_post();?>
<li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>


<?php }
echo paginate_links();

?>
</ul>

      </div>
<?php get_footer();?>