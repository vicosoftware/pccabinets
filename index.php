<?php 
  //INCLUDE AND REQUIERE
  require_once( 'components/config/global-variables.php' );

  $component = require_once( 'components/config/global-setup.php' );
  $seo_data = require_once( 'components/config/seo-meta.php' );
  
  $social_media = require_once( 'components/config/social-media.php' );
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
      require_once( $component['module'].'/main-slider.php' );


      //SECTION - MODULE[ CONTACT-US ]
      require_once( $component['module'].'/contact-us.php' );
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