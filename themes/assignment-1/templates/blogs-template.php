<?php
/**
 * Template Name: Blogs Template
 * Template Post type: page
 * 
 */
    get_header();
  
?>
<main class="blog-page">
   <section class="blogs">
  
<?php
      // The Query
      $the_query = new WP_Query(array(
         'post_type' => 'post', // Fetch posts of type 'post'
         'posts_per_page' => -1, // Display all posts
      ));

      // The Loop
      if ($the_query->have_posts()) {
        
         while ($the_query->have_posts()) {
             echo '<article class="blog-single-page-content">';
            $the_query->the_post();
                if (has_post_thumbnail()) {
                  $featured_image_url = get_the_post_thumbnail_url();
                  echo '<img src="' . esc_url($featured_image_url) . '" alt="' . get_the_title() . '" class="blog-page-single-img">';
            }
            echo '<div class="blog-page-single-content">';
            
            // Display post title with permalink
            echo '
            <h2 class="blog-page-single-heading">' .get_the_title();  
            echo '</h2>';
            echo '<a href="' . get_permalink() . '">' . '<button> Read More </button>' . '</a>';
            // echo '
            // <button>Read More</button>
            // ';
            // Display featured image
        

            // Display introduction (excerpt)
            // echo '<div class="introduction">' . get_the_excerpt() . '</div>';

            echo '</div>';
             echo '</article>';
         }
        
         wp_reset_postdata(); // Restore original Post Data
      } else {
         echo '<p>No posts found.</p>';
      }
?>

</section>
</main>
<?php

   get_footer();
  
?>