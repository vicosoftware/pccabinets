<?php
$detect = new Mobile_Detect;
$mobile = "";

if( $detect->isMobile() || $detect->isTablet() ){ $mobile = "_mobile"; }

$items =  array();

array_push( $items, array(
    "back_img"      => "assets/img/main_gallery/kitchen".$mobile.".jpg",
    "title_prod"    => "Kitchen",
    "short_desc"    => "Refinishing and Refacing",
    "href"          => "principal.php?prod=kitchen"
));
array_push( $items, array(
    "back_img"      => "assets/img/main_gallery/bathroom".$mobile.".jpg",
    "title_prod"    => "Bathroom",
    "short_desc"    => "Renovations and New Designs",
    "href"          => "principal.php?prod=bathroom"
));
array_push( $items, array(
    "back_img"      => "assets/img/main_gallery/entertainment".$mobile.".jpg",
    "title_prod"    => "Entertainment",
    "short_desc"    => "Comfortable, Style and Elegant",
    "href"          => "principal.php?prod=entertainment"
));
array_push( $items, array(
    "back_img"      => "assets/img/main_gallery/installation".$mobile.".jpg",
    "title_prod"    => "Installation",
    "short_desc"    => "Precious CC Solutions",
    "href"          => "principal.php?prod=installation"
));
array_push( $items, array(
    "back_img"      => "assets/img/main_gallery/repair".$mobile.".jpg",
    "title_prod"    => "Maintenance",
    "short_desc"    => "Precious CC Solutions",
    "href"          => "principal.php?prod=maintenance"
));
array_push( $items, array(
    "back_img"      => "assets/img/main_gallery/maintenance".$mobile.".jpg",
    "title_prod"    => "Remodeling",
    "short_desc"    => "Precious CC Solutions",
    "href"          => "principal.php?prod=remodeling"
));


/*************************************************************************************************************
 * CALL IMAGES
 *************************************************************************************************************/
for( $i=0 ; $i<sizeof($items) ; $i++ ){
    showItem( $items[$i] );
}

/*************************************************************************************************************
 * FUNCTIONS
 *************************************************************************************************************/
function showItem( $item ){
    echo '
    <div class="swiper-wrapper">
        <div class="swiper-slide cover-background" style="background-image: url(\''.$item['back_img'].'\')">
            <div class="full-screen width-100 position-relative">
                <div class="slider-typography text-left">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-bottom padding-100px-lr sm-padding-30px-lr">
                            <div class="swiper-bottom-content bg-deep-pink width-500px padding-30px-all margin-50px-left md-no-margin-left sm-width-90 sm-padding-20px-all">
                                <h4 class="sm-margin-5px-bottom">
                                    <a href="'.$item['href'].'" class="font-weight-600 text-white-2 alt-font text-white-2-hover text-shadow">
                                        '.$item['title_prod'].'
                                    </a>
                                </h4>
                                <span class="alt-font text-uppercase text-small text-white-2 font-weight-600">
                                    '.$item['short_desc'].'
                                </span>
                                <div class="box-arrow">
                                    <a href="'.$item['href'].'" class="linkMenu">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    ';
}
?>