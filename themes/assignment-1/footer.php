   <footer class="footer">
      <!-- <section class="top-footer">
        <div class="first widget-area">
          <a href="<?php echo esc_url( home_url() );?>">
            <?php dynamic_sidebar( 'footer-widget-area-one' ); ?>
          </a>
        </div>

        <div class="second quarter widget-area">
          <?php dynamic_sidebar( 'footer-widget-area-two' ); ?>
        </div>

        <div class="third widget-area">
          <?php dynamic_sidebar( 'footer-widget-area-three' ); ?>
        </div>

        <div class="fourth widget-area">
          <?php dynamic_sidebar( 'footer-widget-area-four' ); ?>
        </div> -->
         <section class="footer-content">
            
            <div class="content-footer-one">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo esc_url(home_url('wp-content/uploads/2024/02/logo.png')); ?>" alt="header logo" class="logo">
                </a>
                    <p class="copyright">&copy; <?php echo date('Y');  ?>  <?php 
                    
                        // Start and capture output buffering
                        ob_start();

                        // Output the sidebar content directly into the buffer
                        dynamic_sidebar('footer-widget-area-first');

                        // Extract text content without HTML tags, and output it in a <p> tag
                        echo  esc_html(strip_tags(ob_get_clean())) ;
   
                        ?>
                    </p>
                </div>
                <div class="content-footer-two">
                
                    <p class="">
                            <?php 
                            // Start and capture output buffering
                            ob_start();

                            // Output the sidebar content directly into the buffer
                            dynamic_sidebar('footer-widget-area-second');

                            // Extract text content without HTML tags, and output it in a <p> tag
                            echo  esc_html(strip_tags(ob_get_clean())) ;
                        ?>
                        
                    </p>
                    <ul class="my-site">
                        <a href="https://github.com/Sahitya1707">
                        <li>Github</li></a>
                        <a href="https://www.linkedin.com/in/sahitya-neupane-3b0697212/">
                        <li>Linkedin</li>
                        </a>
                        <a href="https://mobile.twitter.com/Sahitya80266287">
                        <li>Twitter</li>
                        </a>
                    </ul>
                </div>
        </section>
      </section>
    </footer>
  </body>
</html>