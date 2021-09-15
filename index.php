<?php 
  //INCLUDE AND REQUIERE
  require_once( 'components/config/global-variables.php' );
  require_once( 'components/config/functions.php' );

  //LINKS PARA SOCIAL MEDIA
  $social_media = require_once( 'components/config/social-media.php' );

  //CONFIGURACION GLOBAL DEL SITIO
  $component = require_once( 'components/config/global-setup.php' );

  //VALIDA LAS PAGINAS QUE SE ENCUENTRAS DADAS DE ALTA
  $page_data = require_once( 'components/config/page-data.php' );

  //CREA EL SEO POR MEDIO DE LA VALIDACION DE LAS PAGINAS ($component / $page_data)
  $seo_data = require_once( 'components/config/seo-meta.php' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once( $component['resource'].'/head.php' ); ?>
</head>

<body>
  <div class="content-wrapper">

    <?php 
      // SECTION - REQUIERE MODULES
      require_once( $component['module'].'/menu.php' );      

      //SECTION - MODULE[ LOAD-PAGE ]
      if( isset($_GET['page']) ){
        if( in_array($_GET['page'], $page_data) ){      
          //SECTION - MAIN BANNER   
          require_once( $component['module'].'/main-banner.php' );
          //SECTION - LOADING PAGE
          require_once( $component['page'].'/'.$_GET['page'].'.php' );
        } else {
          require_once( $component['page'].'/404.php' );
        }
      } else {
        require_once( $component['module'].'/main-slider.php' );
        require_once( $component['page'].'/index.php' );
      }

      //SECTION - MODULE[ CONTACT-US ]
      require_once( $component['module'].'/contact-us.php' );

      //SECTION - MODULE[ CONTACT-US ]
      require_once( $component['module'].'/google-map.php' );
    ?>
  </div>

  <?php 
  //SECTION - FOOTER
  require_once( $component['module'].'/footer.php' );

  //SCRIPT - LOADING PROGRESS
  require_once( $component['module'].'/loading-progress.php' );

  //SCRIPT
  require_once( $component['resource'].'/scripts.php' ); 
  ?>  
</body>

</html>