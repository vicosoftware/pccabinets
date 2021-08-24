<?php
$social_media_data = "";

if(isset( $social_media )){
    if( $social_media['yelp'] != "" ){ $social_media_data .= '<a href="'.$social_media['yelp'].'" target="_blank"><i class="fab fa-yelp"></i></a>'; }
    if( $social_media['twitter'] != "" ){ $social_media_data .= '<a href="'.$social_media['twitter'].'" target="_blank"><i class="fab fa-twitter"></i></a>'; }
    if( $social_media['facebook'] != "" ){ $social_media_data .= '<a href="'.$social_media['facebook'].'" target="_blank"><i class="fab fa-facebook-f"></i></a>'; }
    if( $social_media['dribbble'] != "" ){ $social_media_data .= '<a href="'.$social_media['dribbble'].'" target="_blank"><i class="fab fa-dribbble"></i></a>'; }
    if( $social_media['instagram'] != "" ){ $social_media_data .= '<a href="'.$social_media['instagram'].'" target="_blank"><i class="fab fa-instagram"></i></a>'; }
    if( $social_media['youtube'] != "" ){ $social_media_data .= '<a href="'.$social_media['youtube'].'" target="_blank"><i class="fab fa-youtube"></i></a>'; }
    if( $social_media['tiktok'] != "" ){ $social_media_data .= '<a href="'.$social_media['tiktok'].'" target="_blank"><i class="fab fa-tiktok"></i></a>'; }

    if( $social_media_data != "" ){
        echo '<nav class="nav social social-white justify-content-between justify-content-md-start">';
        echo $social_media_data;
        echo '</nav>';
    }
}
?>