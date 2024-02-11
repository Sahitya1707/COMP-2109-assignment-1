<?php
/**
 * Template Name: Homepage 
 * Template Post type: page
 */
get_header();
?>
<main class="home-page">

    <section class="landing-page" style="background-image:url('<?php the_field('home_image');?>">
            <div class="landing-page-content">   
                <p class="home-title">

                <?php the_field('home_title'); ?>

                </p>
                <h1 class="intro">
                    <?php the_field('intro'); ?>
                </h1>
                <h1 class="role">
                    <?php the_field('role'); ?>
                </h2>
                <a href="<?php 
                the_field('about_me');
                ?>">
                <button class="home-button">
                About Me
                </button></a>
            </div>
     </section>
     <section class="skills">
        <div class="heading-design-section">
            <h1 class="section-heading">
                <?php the_field("skills_head"); ?>
            </h1>
            <span class="vertical-design">

            </span>
        </div> 
        <div class="skills-items">
            <div class="skill-content">
                <img src="
                <?php the_field('skill_one_img'); ?>
                " alt="" class="skill-content-img">
                <p class="skill-content-text">
                    <?php 
                    the_field('skill_one');
                    ?>
                </p>
            </div>
            <div class="skill-content">
                <img src="
                <?php the_field('skill_two_img'); ?>
                " alt="" class="skill-content-img">
                <p class="skill-content-text">
                    <?php 
                    the_field('skill_two');
                    ?>
                </p>
            </div>
            <div class="skill-content">
                <img src="
                <?php the_field('skill_three_img'); ?>
                " alt="" class="skill-content-img">
                <p class="skill-content-text">
                    <?php 
                    the_field('skill_three');
                    ?>
                </p>
            </div>
            <div class="skill-content">
                <img src="
                <?php the_field('skill_four_img'); ?>
                " alt="" class="skill-content-img">
                <p class="skill-content-text">
                    <?php 
                    the_field('skill_four');
                    ?>
                </p>
            </div>
            <div class="skill-content">
                <img src="
                <?php the_field('skill_five_img'); ?>
                " alt="" class="skill-content-img">
                <p class="skill-content-text">
                    <?php 
                    the_field('skill_five');
                    ?>
                </p>
            </div>
            <div class="skill-content">
                <img src="
                <?php the_field('skill_six_img'); ?>
                " alt="" class="skill-content-img">
                <p class="skill-content-text">
                    <?php 
                    the_field('skill_six');
                    ?>
                </p>
            </div>
            <div class="skill-content">
                <img src="
                <?php the_field('skill_seven_img'); ?>
                " alt="" class="skill-content-img">
                <p class="skill-content-text">
                    <?php 
                    the_field('skill_seven');
                    ?>
                </p>
            </div>
            <div class="skill-content">
                <img src="
                <?php the_field('skill_eight_img'); ?>
                " alt="" class="skill-content-img">
                <p class="skill-content-text">
                    <?php 
                    the_field('skill_eight');
                    ?>
                </p>
            </div>
            <div class="skill-content">
                <img src="
                <?php the_field('skill_nine_img'); ?>
                " alt="" class="skill-content-img">
                <p class="skill-content-text">
                    <?php 
                    the_field('skill_nine');
                    ?>
                </p>
            </div>
            <!-- <div class="skill-content">
                <img src="
                <?php the_field('skill_10'); ?>
                " alt="" class="skill-content-img">
                <p class="skill-content-text">
                    <?php 
                    the_field('skill_10');
                    ?>
                </p>
            </div> -->
           
           
          
        </div>
      
     </section>
       <section class="projects">
               <div class="heading-design-section">
                    <h1 class="section-heading">
                        <?php the_field("project_title"); ?>
                    </h1>
                    <span class="vertical-design">

                    </span>
          


            </div> 
          <div class="my-projects-list">
              
                <div class="individual-project">
                    <img src="<?php the_field('project_one_img');?>" alt="" class="individual-project-img">
                    <div>
                        <p class="individual-project-name">
                           <?php the_field('project_one_name');?>
                        </p>
                        <a href="<?php the_field('project_one_url'); ?>" target="_blank" class="individual-project-link">
                        <button>
                            Look Into It
                        </button>


                        </a>
                    </div>
                </div>
                <div class="individual-project">
                    <img src="<?php the_field('project_two_img');?>" alt="" class="individual-project-img">
                    <div>
                        <p class="individual-project-name">
                           <?php the_field('project_two_name');?>
                        </p>
                        <a href="<?php the_field('project_two_url'); ?>" target="_blank" class="individual-project-link">
                        <button>
                            Look Into It
                        </button>


                        </a>
                    </div>
                </div>
                <div class="individual-project">
                    <img src="<?php the_field('project_three_img');?>" alt="" class="individual-project-img">
                    <div>
                        <p class="individual-project-name">
                           <?php the_field('project_three_name');?>
                        </p>
                        <a href="<?php the_field('project_three_url'); ?>" target="_blank" class="individual-project-link">
                        <button>
                            Look Into It
                        </button>


                        </a>
                    </div>
                </div>
                <div class="individual-project">
                    <img src="<?php the_field('project_four_img');?>" alt="" class="individual-project-img">
                    <div>
                        <p class="individual-project-name">
                           <?php the_field('project_four_name');?>
                        </p>
                        <a href="<?php the_field('project_four_url'); ?>" target="_blank" class="individual-project-link">
                        <button>
                            Look Into It
                        </button>


                        </a>
                    </div>
                </div>
                <div class="individual-project">
                    <img src="<?php the_field('project_five_img');?>" alt="" class="individual-project-img">
                    <div>
                        <p class="individual-project-name">
                           <?php the_field('project_five_name');?>
                        </p>
                        <a href="<?php the_field('project_five_url'); ?>" target="_blank" class="individual-project-link">
                        <button>
                            Look Into It
                        </button>


                        </a>
                    </div>
                </div>
                <div class="individual-project">
                    <img src="<?php the_field('project_six_img');?>" alt="" class="individual-project-img">
                    <div>
                        <p class="individual-project-name">
                           <?php the_field('project_six_name');?>
                        </p>
                        <a href="<?php the_field('project_six_url'); ?>" target="_blank" class="individual-project-link">
                        <button>
                            Look Into It
                        </button>


                        </a>
                    </div>
                </div>
               

            </div>
        </section>
</main>

<?php 

 get_footer();
?>