<?php

/**
 * Template Name: Single Post Template
 * Template Post Type: Post
 */
get_header();
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
// ?>
<main class="single-blog-post">
    <section class="blog-content" >
        <div class="content-one">
            
            <img src="<?php echo $featuredImg[0]; ?>" alt="Post Featured Image" class="featured-img">

            <h1 class="blog-heading">
                <?php the_title(); ?>
            </h1>
            <p>
                <?php the_field('blog_introduction') ?>
            </p>
            <h1 class="blog-subheading">
                <?php the_field('blog_heading_1'); ?>
            </h1>
            <p>
                <?php the_field('blog_content_1') ?>
            </p>
            <h1 class="blog-subheading">
                <?php the_field('blog_heading_2'); ?>
            </h1>
            <p>
                <?php the_field('blog_content_2') ?>
            </p>
            <div class="additional-link">
            <a href="<?php the_field('url_1');?>" class="">
            <p>
                <?php the_field('url_1_text'); ?>
            </p>
            </a>
            <a href="<?php the_field('url_2');?>" class="additional-link">
            <p>
                <?php the_field('url_2_text'); ?>
            </p>
            </a>
            </div>
            <div class="blog-details">

             <p>
                Writing Details: <br/> Written On:
                <?php
                echo get_the_date()
            
                ?>
                <p>
                    Written By: <?php the_field('author'); ?>
                </p>
                <p>
                    Post Related to: <?php
                echo the_category(',','',get_the_ID());
            
                ?>
                </p>
                <p>
                  <?php
                echo the_tags();
                ?>
                </p>
            </p>
            </div>
        </div>

       
    </section>

    <!-- I want to create this dyanamically but didnot knew how to do it wordpress so using static data -->
        <section class="other-blogs-section">
            <h1>You May Like</h1>
            <div class="other-blogs">
                <article class="other-blog-article">
                
                    <img src="https://imageio.forbes.com/specials-images/imageserve/61d52d4e3a76ed81ac034ea8/The-10-Tech-Trends-That-Will-Transform-Our-World/960x0.jpg?height=399&width=711&fit=bounds" alt="" class="other-blog-img">
                    <div class="other-blog-text-content">
                        <h1 class="other-blog-heading">How Internet Works</h1>
                    <p class="other-blog-short-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ut minima facilis adipisci dicta natus. Eum consequuntur quam mollitia quo totam!
                    </p>
                    <button class="other-blog-button">Read More</button>
                    </div>
                </article>
                <article class="other-blog-article">
                
                    <img src="https://imageio.forbes.com/specials-images/imageserve/61d52d4e3a76ed81ac034ea8/The-10-Tech-Trends-That-Will-Transform-Our-World/960x0.jpg?height=399&width=711&fit=bounds" alt="" class="other-blog-img">
                    <div class="other-blog-text-content">
                        <h1 class="other-blog-heading">How Internet Works</h1>
                    <p class="other-blog-short-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ut minima facilis adipisci dicta natus. Eum consequuntur quam mollitia quo totam!
                    </p>
                    <button class="other-blog-button">Read More</button>
                    </div>
                </article>
            </div>
        </section>
</main>
<?php

    get_footer();
?>