<?php
/*
 * Template Name: more quotes
 * Template Post Type: post, page, product
 */
 
 get_header();  ?>
<style type="text/css">

@import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
@import url('https://fonts.googleapis.com/css?family=Scheherazade');
@import url('https://fonts.googleapis.com/css?family=Comfortaa');


html,
body {
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: 'Droid Arabic Kufi', serif;
    color: red;
}
.main{
    min-height: 100vh;
}
.head{
    height: 150px;
    width: 100%;
    text-align: center;
    padding-top: 70px;
}
#headsection2{
    background-image: url('/images/redpattern.png') ;
}
.head h1{
    margin: 0px 0px;
    text-align: center;
    font-size: 12px;
    font-family: 'Droid Arabic Kufi', serif;
    color: white;
    padding: 0;
    position: relative;
    padding-top: 57px;
    display: inline-block;
}

.nav{
    position: fixed;
    top: 0;
    width: 100%;
    height: 70px;
    z-index: 99;
    background-color: #F7F7F7;
    overflow: hidden;

}
.nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.nav li:not(:nth-child(2)) {
    float: right;
    border-left: 1px solid #006d65;
    cursor: pointer;

}
.nav li {
    float: right;
    cursor: pointer;

}
#navsection2 li{
    border-left: #b51725;
}
.nav li:first-child {
    border-left: none;
}


.nav li:first-child a{
    padding: 0;
    height: 70px;
}
.nav li:first-child{
    padding: 0;
    padding-right: 138px;
    padding-left: 26px;
}
#navsection2 li a{
    color: #b51725;

}
.nav li a {
    display: block;
    color: #006d65;
    text-align: center;
    padding: 20px 20px;
    text-decoration: none;
}
.nav li a img{
    height: 70px;
}
.nav li a:hover {
    background-color: #2F2E2E;
    color: white;
}
 #navsection2 li a:hover {
    color: white;
}
.nav li:first-child:hover a{
    background-color: #F7F7F7;
}
.icon{
    font-size: 15px;
    display: none;
}
 .active {
    background-color: #006d65;
    color: white !important;
}
#navsection2 .active {
    background-color: #b51725;
}
.section{
    width: 100%;
    min-height: 100px;
    text-align: center;
    background-color: #F7F7F7;
    color: white;
    font-family: 'Scheherazade', sans-serif;
    padding: 0;
    margin: 0;
    padding-bottom: 30px;
}

.section h2{
    padding: 0;
    margin: 0;
    font-size: 15px;
    font-family: 'Droid Arabic Kufi', serif;
    text-align: center;
  
}
.underline {
    border-bottom: 2px solid white; 
    padding-bottom: 10px;
}

.section-content{
    width: 100%;
    text-align: center;
    padding-top: 30px;

}
.img-div{
    width: 90%;
    height: auto;
    background-color: #2F2E2E;
    margin: 4px 4px;
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
}
.img-div img{
    width: 100%;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.img-div h3{
    padding: 0;
    margin: 0;
    text-align: center;
    font-size: 15px;
    
}
.pagination {
    display: inline-block;
    margin-top: 40px;
    font-family: 'Droid Arabic Kufi', serif;
}

.pagination a {
    color: black;
    padding: 4px 8px;
    text-decoration: none;
}

.pagination a.active {
    background-color: #006d65;
    color: white;
}

.pagination a:hover {
    background-color: #b51725;
    color: white;
}

footer{
    padding: 0 50 0 50;
    width: 100%;
    height: 151px;
    background-color: #b51725;
    color: white;
    text-align: center;
    padding-top: 80px;
    font-family: 'Comfortaa', cursive;
    font-size: 10px;
}
footer:hover{
    background-color: hsla(355, 77%, 40%, 0.9);

}
footer a{
    text-decoration: none;
    color: white;
    display: inline-block;
    cursor: pointer;

}
footer h1{
    margin: 0;
    padding: 0;
    font-size: 17px;
    white-space: pre-wrap;       
    word-wrap: break-word;      
    white-space: -webkit-pre-wrap; 
    word-break: break-all;
    white-space: normal;
    margin-bottom: 30px;
}

@media only screen and (min-width: 300px) {
    .nav li:not(:first-child):not(:last-child) {
        display: none;
    }   
    .nav li:first-child{
        padding-right: 3px;
    }
    .responsive li{
        float: none !important;
        display: block !important;
        border-left: 0 !important;
    }
     .responsive li a{
        text-align: right;
    }
    
    .responsive {
        height: 210px;
        text-align: left;
    }
    .icon{
        display: block;
        position: absolute;
        top: 1;
        left: 2px;
        z-index: 99999;
        border-left: 0 !important;
        padding: 0;
        margin: 0;
    }
    .head h1{
        font-size: 16px;
    }
   .img-div{
        width: 280px;
        height: 280px;
        margin: 8px 8px;

    }
 
    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }
    .img-div img{
        width: 100%;
        height: 90%;
        
    }
    .img-div h3{
        padding: 0;
        margin: -13px;
        text-align: center;
        font-size: 18px;

    }
    footer{
        padding: 0 50 0 50;
        width: 100%;
        height: 151px;
        background-color: #b51725;
        color: white;
        text-align: center;
        padding-top: 80px;
        font-family: 'Comfortaa', cursive;
    }
    footer:hover{
            background-color: hsla(355, 77%, 40%, 0.9);

    }
    footer a{
        text-decoration: none;
        color: white;
        display: inline-block;
        cursor: pointer;

    }
    footer h1{
        margin: 0;
        padding: 0;
        font-size: 20px;
        margin-bottom: 30px;
    }
    footer p{
        font-size: 12px;
    }
    
}

@media only screen and (min-width: 350px) {
     .section{
        min-height: 100px;;        
    }
    .img-div{
        width: 300px;
        height: 300px;
        background-color: #2F2E2E;
        margin: 6px 6px;
        display: inline-block;
    }
 
    .img-div h3{
        padding: 0;
        margin: -12px;
        text-align: center;
        font-size: 20px;

    }
    .head h1{
        font-size: 20px;
        padding-top: 55px;
    }
    footer h1{
        margin: 0;
        padding: 0;
        font-size: 25px;
        margin-bottom: 30px;
    }
    footer p{
        font-size: 12px;
    }
}



@media only screen and (min-width: 500px) {

    .section{
        min-height: 100px;;        
    }
    .img-div{
        width: 400px;
        height: 400px;
        background-color: #2F2E2E;
        margin: 6px 6px;
        display: inline-block;

    }
    .head h1{
        font-size: 25px;
        position: relative;
        padding-top: 47px;
    }

    footer h1{
        margin: 0;
        padding: 0;
        font-size: 35px;
        margin-bottom: 30px;
    }
    footer p{
        font-size: 15px;
    }

}

@media only screen and (min-width: 768px) {
    .nav{
        background: rgba(255, 255, 255, 0.94) ;
    }
   .nav li:first-child{
        padding: 0;
        padding-right: 26px;
        padding-left: 26px;
    }
    .section{
        min-height: 100px;  
    }
    .nav li:not(:last-child){
        display: block !important;
    }
    .icon{
        display: none !important;
    }
   .head h1{
        font-size: 30px;
        position: relative;
       padding-top: 45px;
    }
    .img-div{
        width: 28%;
        height: 320px;
        background-color: #2F2E2E;
        margin: 6px 6px;
        display: inline-block;

    }
    .img-div img{
        height: 85%;
    }
    .img-div h3{
        margin: -10px;
        text-align: center;
        font-size: 25px;
    }

    footer:hover{
            background-color: hsla(355, 77%, 40%, 0.9);

    }
    footer h1{
        font-size: 40px;
    }
    footer p{
        font-size: 16px;
    }
    .social-links li {
        display: inline-block;
        margin-right: 25px;
    }

    .social-links li a:link,
    .social-links li a:visited {
        font-size: 39px;
    }

}
@media only screen and (min-width: 1000px) {

    footer h1{
        font-size: 40px;
    }
    footer p{
        font-size: 16px;
    }
}
                </style>
<?php 

  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

  $custom_args = array(
      'post_type' => 'post',
      'category_name' => 'quote',
      'posts_per_page' => 9,
      'paged' => $paged
    );

  $custom_query = new WP_Query( $custom_args ); ?>
        
        <div class="container">
        <div class="nav" id="navsection2">
            <ul>
              <li id="logo" ><a class="" href="http://localhost:8888/wordpress" ><img src="/wordpress/wp-content/themes/zedneclub/images/logo%20small1.png"></a></li>
              <li><a href="http://localhost:8888/wordpress/more" >ُآخر المشاريع - قرى مهجرة</a></li>
              <li><a href="http://localhost:8888/wordpress/more-quotes" class="active">إقتباسات</a></li>
                <li class="icon" ><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
                
            </ul>
        </div>
        <div class="head" id="headsection2"  style="background-image: url('/wordpress/wp-content/themes/zedneclub/images/redpattern.png') ;">
             <h1>إقتباسات</h1>
        </div>
        <div class="">

      <div class="section">
             <div class="section-content">
              <?php if ( $custom_query->have_posts() ) : ?>

                <!-- the loop -->
                <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                <div class="img-div">
                    <img src="./images/1.jpg"></a>
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
        var x = document.getElementById("navsection2");
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
