<?php get_header();

pageBanner(array(
  'title'=> 'All Events',
  "photo"=>"https://images.unsplash.com/photo-1591779051696-1c3fa1469a79?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
  'subtitle'=> 'See whats going on in our world'
  ));

?>



    <div class="container container--narrow page-section">
      <?php 

    while(have_posts()){
the_post();

get_template_part('template-parts/content-event');

 }
echo paginate_links();

?>
<hr class="section-break">
<p>Looking for a recap of past events <a href="<?php echo site_url("/past-events"); ?>">Check out our past Event archive</a> </p>

      </div>
<?php get_footer();?>