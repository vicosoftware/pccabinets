<?php 
/***********************************************************************************************************************
 * LOCAL VARIABLE
 ***********************************************************************************************************************/ 
$totalSlide = 3;

/***********************************************************************************************************************
 * FULL SCREEN BANNER
 ***********************************************************************************************************************/?>
<section class="p-0 full-screen position-relative wow fadeIn">
    <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
    <div class="container position-relative full-screen">
        <div class="slider-typography text-center"><div class="slider-text-middle-main"><div class="slider-text-middle">
            <h1 class="alt-font text-uppercase text-white-2 font-weight-700 width-75 sm-width-90 mx-auto margin-35px-bottom">
                MAINTENANCE & REPAIR
            </h1>
            <span class="text-large text-very-light-gray font-weight-300 width-95 mx-auto margin-25px-bottom d-block sm-width-85 fsp-2">
                THE BEST STYLE WITH THE BEST QUALITY
            </span>
            <?php
            /**************************************************
             *  SOCIAL MEDIA
             **************************************************
            <div class="social-icon-style-5-light padding-20px-top sm-no-padding-top">
                <ul class="margin-20px-tb large-icon">
                    <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                    <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                    <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i><span></span></a></li>
                    <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i><span></span></a></li>
                </ul>
            </div>
            **************************************************/
            ?>
        </div></div></div>
    </div>
    <div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100">
        <div class="swiper-wrapper">
            <?php
            for( $i=1 ; $i<=$totalSlide ; $i++ ){
                echo "<div class=\"swiper-slide cover-background full-screen\" style=\"background-image:url('assets/img/banner/service_".$_GET['prod']."_".$i.".jpg');\"></div>";
            }
            ?>
        </div>
        <div class="swiper-pagination swiper-auto-pagination d-none"></div>
    </div>
</section>
<?php 
/***********************************************************************************************************************
 * MAIN SLOGAN
 ***********************************************************************************************************************/ ?>
<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-10 mx-auto text-center">
                <div class="alt-font text-medium-gray margin-15px-bottom text-uppercase text-small md-margin-5px-bottom">
                    Precious Custom Cabinets
                </div>
                <h5 class="alt-font font-weight-600 text-extra-dark-gray m-0">
                    Finally !!!, you can find in the same place the best quality and the best service in our wide variety of products and services
                </h5>
            </div>
        </div>
    </div>
</section>
<?php 
/***********************************************************************************************************************
 * RECENTS WORKS
 ***********************************************************************************************************************/ ?>
<section class="wow fadeIn p-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 lightbox-portfolio">
                <div id="justified" class="justified-gallery">
                    <?php
                    $recentWorks =  array();

                    $product    = "maintenance";
                    $pic_title  = "Precious Custom Cabinets";
                    $pic_total  = 25;

                    for( $i=1 ; $i<=$pic_total ; $i++ ){
                        echo '
                        <div class="wow fadeInUp">
                            <a href="assets/img/gallery/'.strtolower($product).'/pic_'.$i.'.jpg" class="gallery-link" title="'.$pic_title.' - '.$product.'">
                                <img src="assets/img/gallery/'.strtolower($product).'/pic_'.$i.'.jpg" alt="'.$pic_title.'">
                            </a>
                        </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
/***********************************************************************************************************************
 * GALLERY LINK
 ***********************************************************************************************************************/ ?>
<section class="wow fadeIn parallax big-section" data-stellar-background-ratio="0.5" style="background-image: url('assets/img/parallax/wood_2.jpg')">
    <div class="opacity-light bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 col-md-10 mx-auto">
                <div class="bg-white padding-nine-all text-center">
                    <div class="alt-font text-medium-gray margin-15px-bottom text-uppercase text-small">
                        About Precious Custom Cabinets
                    </div>
                    <h5 class="font-weight-600 alt-font text-extra-dark-gray">
                        We know that your home or office is something special and our goal is to help you achieve it.
                    </h5>
                    <p>
                        Since January 2005, our only goal has been to help our clients create new designs, which are unique, modern and creative, which make it a special place like our clients.
                    </p>
                    <!--a href="portfolio-full-width-image-gallery.html" class="btn btn-small btn-dark-gray margin-10px-top sm-no-margin-top">
                        Explore Photography
                    </a-->
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
/***********************************************************************************************************************
 * WE ARE THE BEST OPTION
 ***********************************************************************************************************************/ ?>
<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-7 mx-auto text-center">
                <i class="fas fa-quote-left icon-small text-deep-pink d-block margin-25px-bottom sm-margin-15px-bottom"></i>
                <h5 class="alt-font text-extra-dark-gray font-weight-600">
                    We are the best option, our mission is to make the best custom cabinets for your homes, to make a unique style for your loved ones or for those moments where you share time with your friends.
                </h5>
                <span class="text-uppercase text-extra-small alt-font letter-spacing-3 text-medium-gray">
                    Arturo Dondiego
                </span>
            </div>
        </div>
    </div>
</section>
<?php 
/***********************************************************************************************************************
 * TESTIMONIAL
 * backparallax -> 1920x1100
 * imgTestimonial -> 300x300
 ***********************************************************************************************************************/

$secModule->cust_name    = "Carol H., Costa Mesa CA.";
$secModule->cust_avatar  = "user";
$secModule->cust_comment = "Arturo and his crew were very professional and courteous.  Did their job in a timely manner. We were very pleased with the outcome.  They even offered to clean our vents and fix little things here and there around the house .  Their prices were reasonable.  I would highly recommend.";
$secModule->setTestimonial();

$secModule->cust_name    = "Adel P., Covina, CA.";
$secModule->cust_avatar  = "yelp_adel";
$secModule->cust_comment = "I had the best experience with these guys!  No job too small, they brought my kitchen back to life. I was a bit sceptical at first but Arthuro walked me through the entire process and invited me to his warehouse to see everything.  Their workers are nice and professional!  Hard working group of guys!  I would definitely use them again for other cabinetry work!  I'm not one to write reviews but they were fantastic!  Thank you!!";
$secModule->setTestimonial();

$secModule->cust_name    = "Richard D., Downey, CA";
$secModule->cust_avatar  = "user";
$secModule->cust_comment = "We got 3 estimates for kitchens and this was in line with all 3 but what set them apart was their attention to detail, professionalism and quality of work. Art, answered all our questions and offered ideas for designing our kitchen. We are so happy with his work. Our friends have already contacted him for work.";
$secModule->setTestimonial();

$secModule->cust_name    = "Dennis C., Los Angeles, CA";
$secModule->cust_avatar  = "user";
$secModule->cust_comment = "Working with Arturo was a dream. He was very helpful the whole time. He gave me a very reasonable price and delivered on all aspects. The quality and professionalism from him and his crew were much better than the big name companies. He not only designed and installed my kitchen cabinets, but he designed my bathrooms as well.";
$secModule->setTestimonial();

$secModule->cust_name    = "Jeffery A., Kailua, HI";
$secModule->cust_avatar  = "yelp_jeffery";
$secModule->cust_comment = "Arturo and his guys were great to deal with from the beginning. Attention to detail exceeded my expectations. Our kitchen and built in seating and bathroom vanity turned out beautiful. They do great work. These guys are fair and honest.";
$secModule->setTestimonial();

$secModule->cust_name    = "Emma D., Tustin, CA";
$secModule->cust_avatar  = "yelp_emma";
$secModule->cust_comment = "I had been wanting to give my kitchen a \"facelift\" for a long time but was hesitant due to the horror stories I had heard.  Then Precious Cabinets came along.  I was so pleased with the work that was done on my kitchen!  Albert had been referred to me by a friend and I couldn't be happier.  The communication was great the entire way through and they were true to their word on the timing of the entire project.";
$secModule->setTestimonial();

$secModule->cust_name    = "Joyce T., Redondo Beach, CA";
$secModule->cust_avatar  = "user";
$secModule->cust_comment = "I have used Arturo twice now, to do each of my bathroom remodels.  He did an amazing job, I can't say enough good things about his work, and craftsmanship.  Beautiful finish, great design and always finished on time.";
$secModule->setTestimonial();

$secModule->showTestimonial();

?>          
<?php 
/***********************************************************************************************************************
 * RELATED WORK
 ***********************************************************************************************************************/ ?>
 <section class="wow fadeIn pb-0">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                <div class="position-relative overflow-hidden w-100">
                    <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">OTHER RELATED PRODUCTS AND SERVICES</span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            /** PRINT 4 ITEMS IN RELATED PRODUCTS */
            include_once( "components/controller/sec_relatedProd.php" );
            $ob_related = new RelatedProd();
            
            $ob_related->getInstallation();
            $ob_related->getRefinishing();
            $ob_related->getFabrication();
            $ob_related->getRemodeling();
            ?>
        </div>
    </div>
</section>
<?php 
/***********************************************************************************************************************
 * FOOTER OTHER SECTIONS
 ***********************************************************************************************************************/ ?>
<section class="p-0 border-top border-color-medium-gray wow fadeIn">
    <div class="container-fluid p-0">
        <div class="row justify-content-between align-items-center no-gutters padding-30px-lr md-padding-15px-lr">
            <?php
            /** ADD PREVIOUS AND NEXT IN THE FOOTER */
            include_once( "components/controller/sec_footerPrevNext.php" );
            $ob_prevNext = new FooterPrevNext();

            $ob_prevNext->setPrevious("refinishing");
            $ob_prevNext->setNext("fabrication");
            $ob_prevNext->printFooter();
            ?>
        </div>
    </div>
</section>