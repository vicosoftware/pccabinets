<?php
class SectionsModules {
    private $arr_custName = array();
    private $arr_custComment = array();
    private $arr_custAvatar = array();

    public $cust_name;
    public $cust_comment;
    public $cust_avatar;

    function __contruct() {

    }

    function __destruct() {
        
    }

    function setTestimonial(){
        array_push($this->arr_custName, $this->cust_name);
        array_push($this->arr_custComment, $this->cust_comment);
        array_push($this->arr_custAvatar, $this->cust_avatar);
    }

    function showTestimonial(){
        $head_testimonial = "";
        $body_testimonial = "";
        $foot_testimonial = "";

        $head_testimonial = '
        <section class="parallax wow fadeIn" data-stellar-background-ratio="0.5" style="background-image: url(\'assets/img/parallax/wood_1.jpg\')">
            <div class="opacity-light bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="swiper-slider-second swiper-container white-move">
                        <div class="swiper-wrapper">
        ';

        for( $i=0 ; $i<sizeof($this->arr_custName) ; $i++ ){
            $body_testimonial .= '
                <div class="swiper-slide">
                    <div class="row justify-content-center m-0">
                        <div class="col-12 col-lg-7 col-md-10">
                            <div class="media d-block d-md-flex text-center text-md-left align-items-center padding-15px-lr lg-padding-15px-lr width-100">
                                <img src="assets/img/social_media/'.$this->arr_custAvatar[$i].'.png" alt="" class="rounded-circle width-130px margin-50px-right lg-width-100px md-width-120px sm-width-100px sm-no-margin-right sm-margin-15px-bottom" />
                                <div class="media-body last-paragraph-no-margin">
                                    <p class="text-white-2 text-justify">
                                        '.$this->arr_custComment[$i].'
                                    </p>
                                    <span class="text-white-2 text-bold alt-font text-uppercase text-small margin-15px-top d-inline-block">
                                        <a href="https://www.yelp.com/biz/precious-custom-cabinets-south-gate" target="_blank" >
                                            <img src="assets/img/social_media/yelp.png" class="yelpIcon" alt="yelp precious custom cabinets" />
                                        </a>
                                        - '.$this->arr_custName[$i].'
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            ';
        }  

        $foot_testimonial = '
                        </div>
                        <div class="swiper-pagination d-none"></div>
                        <div class="swiper-button-next slider-long-arrow-white"></div>
                        <div class="swiper-button-prev slider-long-arrow-white"></div>
                    </div>
                </div>
            </div>
        </section>
        ';

        print $head_testimonial.$body_testimonial.$foot_testimonial;
    }
}
?>