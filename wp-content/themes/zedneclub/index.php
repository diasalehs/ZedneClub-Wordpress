
<?php
/*
 * Template Name: home page
 * Template Post Type: post, page, product
 */
get_header();
?>
    <div class="main">
        <div class="logo">
            <img src="./wp-content/themes/zedneclub/images/logo.png">
        </div>
        <div class="intro">
            <h1><span class="title">نادي زدني </span></h1>
            <p>
فريق نادي زدني الشبابي وببساطة اجتمعنا من مختلف مناطق الوطن على هم واحد وهو النهوض بمستوانا الثقافي والمعرفي وتعميق وعينا تجاه أنفسنا وقضايانا حاملين هم الإنسان الفلسطيني خاصة والعربي عامة.
<br>
ومن منتصف عام 2010 بدأ الفريق يترجم الكثير من أفكاره على أرض الواقع عبر صالونات ثقافية ومجموعة من الدورات وورش العمل وغيرها من الوسائل، متكئاً على العمل التطوعي والجماعي، مؤكداً على استقلاليته من خلال رفض أي تمويل مشروط سواءً من جهات داخلية أو خارجية، مؤمناً بالمواطنة الكاملة والتي تعني عدم التمييز بين الفلسطينيين لاعتبارات (الجنس، الدين، الانتماء السياسي، العائلة، المنطقة السكنية.. الخ ).
            </p>
               
                    <ul class="social-links">
                        <li style="margin-right:0px;"><a target="_blank" href="https://www.instagram.com/zedneclub/"><i class="ion-social-instagram" ></i></a></li>
                        
                        <li ><a target="_blank" href="https://www.youtube.com/user/ZedneTube"><i class="ion-social-youtube"></i></a></li>
                        <li ><a target="_blank" href="https://twitter.com/zedneclub"><i class="ion-social-twitter"></i></a></li>
                        <li ><a target="_blank" href="https://www.facebook.com/zedni/"><i class="ion-social-facebook"></i></a></li>

                    </ul>



        </div>
       

    </div> <!---------End Main section -->
    
      <div class="section section2">
            <div class="section-header">
                <h2><span class="underline">آخر المشاريع - قرى مهجرة</span></h2>
            </div>
            <div class="section-content">
          
                <?php query_posts('cat=2&showposts=3'); while (have_posts()) : the_post(); ?>
                <div class="img-div">
                 <a href="<?php the_permalink(); ?>"> <img src="./images/1.jpg"></a>
                    <h3><?php the_title(); ?></h3>
                </div>
                <?php endwhile; ?>
                
                
                <div>
                    <button id="section1more">عرض المزيد</button>
                </div>
            </div>

      </div>    
         <div class="section section3">
            <div class="section-header">
                
                <h2><span class="underline">اقتباسات </span></h2>
            </div>
            <div class="section-content">
               <?php query_posts('cat=3&showposts=3'); while (have_posts()) : the_post(); ?>
                <div class="img-div">
                 <a > <img src="./images/1.jpg"></a>
                    <h3><?php the_title(); ?></h3>
                </div>
                <?php endwhile; ?>
              
                <div>
                    <button id="section2more" >عرض المزيد</button>
                </div>
            </div>

      </div>  
      

  

<script type="text/javascript">
    document.getElementById("section1more").onclick = function () {
        location.href = "http://localhost:8888/wordpress/more/";
    };
     document.getElementById("section2more").onclick = function () {
        location.href = "http://localhost:8888/wordpress/more-quotes/";
    };
</script>
</html>

  <?php  
get_footer();

?>