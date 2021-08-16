<?php 
$conf_arr = require( 'components/resources/config.php' ); 
require_once( 'assets/php/Mobile-Detect-2.8.34/Mobile_Detect.php' );
require_once( 'components/controller/sections_modules.php' );

$secModule = new SectionsModules();
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <?php require_once( $conf_arr['path_resource'].'/head_main.php' ); ?>
    </head>
    <body>
        <header>
            <?php 
            /***********************************************************************************************************************
             * NAVBAR MENU
             ***********************************************************************************************************************/ ?>
            <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light background-transparent white-link navbar-expand-lg">
                <?php require_once( $conf_arr['path_resource'].'/menu_main.php' ); ?>
            </nav>
            <?php 
            /***********************************************************************************************************************
             * RIGHT MENU
             ***********************************************************************************************************************/ 
            require_once( $conf_arr['path_resource'].'/right_menu.php' ); ?>
        </header>
        <?php 
        /***********************************************************************************************************************
         * CONTENT
         ***********************************************************************************************************************/ 
        include_once( 'components/views/'.$_GET['prod'].'.php' ); ?>
        <?php 
        /***********************************************************************************************************************
         * FOOTER SECTION
         ***********************************************************************************************************************/ ?>
        <footer class="footer-classic-dark bg-extra-dark-gray padding-five-bottom sm-padding-30px-bottom">
            <?php require_once( $conf_arr['path_resource'].'/footer_main.php' ); ?>
        </footer>
        <?php 
        /***********************************************************************************************************************
         * SCRIPTS 
         ***********************************************************************************************************************/ ?>
        <?php require_once( $conf_arr['path_resource'].'/script_main.php' ); ?>
    </body>
</html>