<?php 
$conf_arr = require( 'components/resources/config.php' ); 
require_once( 'assets/php/Mobile-Detect-2.8.34/Mobile_Detect.php' );
?>
<!doctype html>
    <html class="no-js" lang="en">
    <head>
        <?php require_once( $conf_arr['path_resource'].'/head.php' ); ?>
    </head>
    <body class="width-100">
        <header class="no-sticky">
            <?php require_once( $conf_arr['path_resource'].'/menu.php' ); ?>
        </header>

        <section class="p-0 full-screen">
            <div class="swiper-container swiper-vertical-pagination swiper-container-vertical">
                <?php 
                /** Items */
                require_once( $conf_arr['path_resource'].'/items.php' ); 
                /** Paginacion */ 
                ?>
                <div class="swiper-pagination swiper-pagination-vertical swiper-pagination-white"></div>    
            </div> 
        </section>
        
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>

        <?php require_once( $conf_arr['path_resource'].'/scripts.php' ); ?>
    </body>
</html>