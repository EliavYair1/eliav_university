<!-- <?php 

function greet($name,$color){
    echo "<p>hi my name is $name and my favorite color is $color</p>";
}

greet("eliav","red");
greet("mimi","pink");
?>

<h1><?php blogInfo('name'); ?></h1>
<p><?php blogInfo('description') ?></p>

 -->

 <!-- <?php 
 $names = array('eliav','mimi','yahli','nehori');
$count = 0;
 
while ($count < count($names)) {
echo "<li>hi my name is $names[$count]</li>";
$count++;
 }


 ?> -->
 <!-- <li><?php echo $count ?></li> -->
 <!-- <p>hi my name is <?php echo $names[1] ?></p> -->


 <?php 
// functions the start with 'the" echoing the content on the page.
// functions the start with 'get" returning without displaying the content on the page.
// for example:
the_title();
get_the_title();
the_id();
get_the_id();

?>


// ? get_page- is a method Retrieves an array of pages .
// ? get_the_id() : method that return the id of the current page.
// ? wp_list_pages: Filters the HTML output of the pages to list.
// ? body_class() : gives a class with info about the current page(id of the page, page title ect...)
// ? wp_nav_menu : creates you a dynamic menu to display from the appearance > Menus bar
// ? get_post_type() ; Retrieves the post type of the current post or of a given post.