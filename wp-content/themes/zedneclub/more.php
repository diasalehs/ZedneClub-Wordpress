<?php
/*
 * Template Name: more page
 * Template Post Type: post, page, product
 */
 
 get_header();  ?>

<?php 

  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

  $custom_args = array(
      'post_type' => 'post',
      'category_name' => 'village',
      'posts_per_page' => 9,
      'paged' => $paged
    );

  $custom_query = new WP_Query( $custom_args ); ?>
  <div class="container">
        <div class="nav" id="myTopnav">
            <ul>
              <li id="logo" ><a class="" href="http://localhost:8888/wordpress" ><img src="/wordpress/wp-content/themes/zedneclub/images/logo%20small1.png"></a></li>
              <li><a href="http://localhost:8888/wordpress/more" class="active">ُآخر المشاريع - قرى مهجرة</a></li>
              <li><a href="http://localhost:8888/wordpress/more-quotes">إقتباسات</a></li>
                <li class="icon" ><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
                
            </ul>
        </div>
        <div class="head" style="background-image: url('/wordpress/wp-content/themes/zedneclub/images/pattern.png') ;">
             <h1>آخر المشاريع - قرى مهجرة</h1>
        </div>
        <div class="">

      <div class="section">
            
            <div class="section-content">
              <?php if ( $custom_query->have_posts() ) : ?>

			    <!-- the loop -->
			    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
			    <div class="img-div">
                 <a href="<?php the_permalink(); ?>"> <img src="./images/1.jpg"></a>
                    <h3><?php the_title(); ?></h3>
                </div>
		
			    <?php endwhile; ?>
			    <!-- end of the loop -->

			    <!-- pagination here -->
			  

			  <?php wp_reset_postdata(); ?>

			  <?php else:  ?>
			    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			  <?php endif; ?>


                
            </div>
            <?php
			      if (function_exists(custom_pagination)) {
			        custom_pagination($custom_query->max_num_pages,"",$paged);
			      }
			    ?>
         
      </div>   
        </div>
    </div>
    </body>
    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "nav") {
            x.className += " responsive";
        } else {
            x.className = "nav";
        }
    }
    </script>
    <footer>
        <h1><a  href="mailto:zedneclub@gmail.com">zedneclub@gmail.com</a></h1>
        <p>zedneclub | 2017</p>
    </footer>
</html>
