
<?php
/*
 * Template Name: home page
 * Template Post Type: post, page, product
 */
get_header();
?>
<style type="text/css">


/*
Theme Name: LearningWordPress
Author: LearnWebCode
Author URI: http://www.youtube.com/user/LearnWebCode
Version: 1.0
*/

@import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
@import url('https://fonts.googleapis.com/css?family=Scheherazade');
@import url('https://fonts.googleapis.com/css?family=Comfortaa');



html,
body {
    height: 100%;
    margin: 0;
    padding: 0;
}

.main{
    height: 100vh;
    min-height: 500px;
    width: 100%;
    text-align: center;
}
.intro{
    float: left;
    height: 100%;
    width: 100%;
    background-color: #2F2E2E;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.intro h1{
    margin-top: 17px;
    margin-bottom: 10px;
    text-align: center;
    font-size: 20px;
    font-family: 'Droid Arabic Kufi', serif;
    color: white;
    padding: 0;

}
.intro p{
    color: white;
    font-size: 13px;
    text-align: justify;
    text-align-last: center;
    font-family: 'Scheherazade', sans-serif;
    padding: 0 10px 0 10px;
    cursor: pointer; 
}


.logo{
    display: none;
    height: 100%;
    width: 38%;
    position: relative;
    background-color: #f6f6f6;

}
.logo img{
    max-height: 100%;  
    max-width: 100%; 
    width: 75%;
    height: auto;
    position: absolute;  
    top: 0;  
    bottom: 0;  
    left: 0;  
    right: 0;  
    margin: auto;
    transition: all .5s ease-in-out;

}
.logo img:hover{
    transform: scale(1.1);
    
}
.section{
    width: 100%;
    min-height: 860px;
    text-align: center;
    background-color: #006d65;
    color: white;
    font-family: 'Scheherazade', sans-serif;
    padding: 0;
    margin: 0;
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

.section-header{
    padding: 0;
    margin: 0;
    padding-top: 35px;
}
.section-header h2{
    margin-bottom: -5px;
}
.section-content{
    width: 100%;
    text-align: center;
    margin-top: 30px;

}
.section-content button{
    width: 100px;
    height: 30px;
    margin-top: 10px;
    background-color: #b51725;
    border: 3px solid white;
    color: white;
    font-size: 15px;
    cursor: pointer;
    margin-top: 40px;
}
.section-content button:hover{
    background-color: white;
    border: 3px solid #b51725;
    color: #b51725;
    font-size: 15px;
    transition: background-color .7s;
}
.img-div{
    width: 90%;
    height: auto;
    background-color: #2F2E2E;
    margin: 4px 4px;
    display: inline-block;
    
}
.img-div img{
    width: 100%;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.img-div h3 {
    padding: 0;
    margin: 0;
    text-align: center;
    font-size: 15px;
    
}
.section3{
    background-color: #F7F7F7;

}

.section3 .section-header h2
{
    color: #b51725;
}
.section3 .underline
{
    border-color: #b51725;
}
.section3 .section-content button{
    background-color: #F7F7F7;
    border: 3px solid #b51725;
    color: #b51725;
}
.section3 .section-content button:hover{
    background-color: #b51725;
    color: #F7F7F7;
    transition: background-color .7s;
}

.section3 .img-div img{
    height: 100%;
}


.social-links {
    padding: 0;
    font-size: 13px;
}

.social-links li {
    display: inline-block;
    margin-right: 15px;
}

.social-links li a:link,
.social-links li a:visited
{
    text-decoration: none;
    border: 0;
    color: #888;
    -webkit-transition: color 0.2s;
    transition: color 0.2s;
}

.social-links li a:link,
.social-links li a:visited {
    font-size: 15px;
}
.ion-social-facebook,
.ion-social-twitter,
.ion-social-youtube,
.ion-social-instagram{
    -webkit-transition: color 0.2s;
    transition: color 0.2s; 
}
.ion-social-facebook:hover {
    color: #3b5998;
}
.ion-social-twitter:hover {
    color: #00aced;
}
.ion-social-youtube:hover {
    color: #e52d27;
}
.ion-social-instagram:hover {
    color: #c13584;
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
    white-space: pre-wrap;       /* css-3 */
    word-wrap: break-word;       /* Internet Explorer 5.5+ */
    white-space: -webkit-pre-wrap; /* Newer versions of Chrome/Safari*/
    word-break: break-all;
    white-space: normal;
    margin-bottom: 30px;
}


@media only screen and (min-width: 300px) {
    .main{
        height: 100vh;
        min-height: 550px;
        width: 100%;
    }
    .logo{
        width: 100%;
        height: 20%;
        overflow: hidden;
        display: inline-block;
    }
    .logo img{
        max-height: 100%;
        height: 100%;
        width: auto;
        
    }
    .logo img:hover{
        transform: none;
    }
    .intro{
        width: 100%;
        height: 80%;
    }
    .intro h1{
        margin: 0;
        font-size: 25px;
    }
    .intro p{
        font-size: 15px;
        padding: 0 10px 0 10px;
    }
    .social-links{
        font-size: 17px;
        padding: 0;
    }
    .section{
        min-height: 1100px;;
        width: 100%;
        text-align: center;
        background-color: #006d65;
        color: white;
        font-family: 'Scheherazade', sans-serif;
        padding: 0;
        margin: 0;
        
    }

    .section h2{
        padding: 0;
        margin: 0;
        font-size: 20px;
        font-family: 'Droid Arabic Kufi', serif;

    }
    .section .hrr{
        margin: 0;
        padding: 0;
        width: 25%; 
        height: 2px;
        display: inline-block;
        background-color: white;

    }
    .section-header{
        padding: 0;
        margin: 0;
        padding-top: 15px;
    }
    .section-header h2{
        margin-bottom: -5px;
    }
    .section-content{
        width: 100%;
        text-align: center;
        margin-top: 30px;
    }
    .section-content button{
        width: 120px;
        height: 30px;
        margin-top: 10px;
        background-color: #b51725;
        border: 3px solid white;
        color: white;
        font-size: 12px;
        cursor: pointer;
        margin-top: 30px;
    }
    .section-content button:hover{
        background-color: white;
        border: 3px solid #b51725;
        color: #b51725;
        font-size: 12px;
        transition: background-color .7s;
    }
    .img-div{
        width: 280px;
        height: 280px;
        margin: 8px 8px;

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
    .section3{
        background-color: #F7F7F7;

    }

    .section3 .section-header h2
    {
        color: #b51725;
    }
    .section3 .section-header .hrr
    {
        background-color: #b51725;
    }
    .section3 .section-content button{
        background-color: #F7F7F7;
        border: 3px solid #b51725;
        color: #b51725;
    }
    .section3 .section-content button:hover{
        background-color: #b51725;
        color: #F7F7F7;
        transition: background-color .7s;
    }

    .section3 .img-div img{
        height: 100%;
    }

    .social-links li {
        display: inline-block;
        margin-right: 20px;
    }

    .social-links li a:link,
    .social-links li a:visited {
        font-size: 25px;
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
    .main{
        height: 100vh;
        min-height: 500px;
        width: 100%;
        text-align: center;
    }

    .intro h1{
        font-size: 25px;
    }
    .intro p{
        font-size: 17px;
        padding: 0 10px 0 10px;
    }
    .social-links li {
        display: inline-block;
        margin-right: 20px;
    }

    .social-links li a:link,
    .social-links li a:visited {
        font-size: 25px;
    }
    .section{
        min-height: 1150px;;        
    }

    .section h2{
        font-size: 20px;
        font-family: 'Droid Arabic Kufi', serif;

    }
 
    .section-content button{
        width: 150px;
        height: 40px;
        background-color: #006d65;
        font-size: 14px;
    }
    .section-content button:hover{
        background-color: white;
        border: 3px solid white;
        color: #006d65;
        font-size: 14px;
        transition: background-color .7s;
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
    .section3{
        background-color: #F7F7F7;

    }
    .section3 .section-content button{
        background-color: #F7F7F7;
        border: 3px solid #b51725;
        color: #b51725;
    }
    .section3 .section-content button:hover{
        background-color: #b51725;
        color: #F7F7F7;
        transition: background-color .7s;
        font-size: 14px;
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
    .intro h1{
        font-size: 40px;
    }
    .intro p{
        font-size: 20px;
    }
    .social-links li {
        display: inline-block;
        margin-right: 20px;
    }

    .social-links li a:link,
    .social-links li a:visited {
        font-size: 35px;
    }
    .section{
        min-height: 1450px;;        
    }
    .img-div{
        width: 400px;
        height: 400px;
        background-color: #2F2E2E;
        margin: 6px 6px;
        display: inline-block;

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
    .main{
        height: 100vh;
        min-height: 600px;
        width: 100%;
        text-align: center;
    }
    .intro{
        float: left;
        height: 100%;
        width: 62%;
        background-color: #2F2E2E;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .intro h1{
        margin-top: 0;
        margin-bottom: 0;
        text-align: center;
        font-size: 45px;
        font-family: 'Droid Arabic Kufi', serif;
        padding: 0;

    }
    span.title{
        transition: color .5s;

    }
    .intro h1 span:hover{
        color: #b51725;
        cursor: pointer;
    }
    .intro p{
        font-size: 22px;
        text-align: justify;
        text-align-last: center;
        padding: 0 20px 0 20px;
        cursor: pointer;

    }
    .logo{
        display: inline-block;
        height: 100%;
        width: 38%;
        position: relative;
        background-color: #f6f6f6;
        cursor: pointer;
    }
    .logo img{
        max-height: 100%;  
        max-width: 100%; 
        width: 75%;
        height: auto;
        position: absolute;  
        top: 0;  
        bottom: 0;  
        left: 0;  
        right: 0;  
        margin: auto;
        transition: all .5s ease-in-out;

    }
    .logo img:hover{
        transform: scale(1.1);

    }
    .section{
        min-height: 900px;  
    }

    .section h2{
        font-size: 25px;
    }
    .section-header h2{
        margin-bottom: -5px;
    }
    .section-content button{
        width: 170px;
        height: 50px;
        font-size: 20px;
    }
    .section-content button:hover{
        width: 170px;
        height: 50px;
        font-size: 20px;
    }
    .section3 .section-content button:hover{
        background-color: #b51725;
        color: #F7F7F7;
        transition: background-color .7s;
        font-size: 20px;
    }

    .img-div{
        width: 320px;
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
    .intro h1{
        font-size: 65px;
    }
    .intro p{
        color: white;
        font-size: 25px;
        
    }
     .social-links{
        font-size: 29px;
        cursor: pointer;
    }
    .section{
        min-height: 600px;
    }

    .section h2{
        font-size: 27px;
    }
    .section .hrr{
        width: 17%; 
    }
    .section-header{
        padding-top: 45px;
        padding-bottom: -10px;
    }
    .section-content button{
        font-size: 20px;
    }
    footer h1{
        font-size: 40px;
    }
    footer p{
        font-size: 16px;
    }
}
                </style>

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