<?php
/**
 * Template Name: About Page
 * Template Post type: page
 * 
 */
    get_header();
  
?>
<main class="about-page">
    
  <section class="about">
    <div class="about-content">
        <h1>
<?php 
the_field('about_me_title');
?>

        </h1>
        <div class="about-paragraph">
            <p>
                <?php
               the_field('paragraph_one');
?>
            </p>
            <p>

             <?php
               the_field('paragraph_two');
?>
            </p>
            </p>
            <p>
               <?php
               the_field('paragraph_three');
?>
            </p>
            </p>
            <p>



               <?php
               the_field('paragraph_four');
?>
          
            </p>
        </div>
    </div>
    <div class="about-img">
    <img src="
    <?php the_field('about_img');?>
    " alt="" class="about-img">
</div>
  </section>


</main>

<?php
get_footer();


?>