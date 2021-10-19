<div class="offcanvas-info text-inverse">
    <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-info-close" aria-label="Close"></button>

    <div style="text-align: center; margin-bottom: 20px;">
        <img src="assets/img/logo-symbol-light.svg" srcset="assets/img/logo-symbol-light@2x.png 2x" alt="" style="width: 100%; margin-bottom: 10px;" />
        <img src="assets/img/logo-light.svg" srcset="assets/img/logo-light@2x.png 2x" alt="" style="width: 100%;" />
    </div>

    <hr class="mt-5 mt-md-5 mb-5">

    <?php include( $component['module'].'/sales-representative.php' ); ?>

    <div class="widget">
        <h4 class="widget-title text-white mb-3"><i class="fas fa-map-marker-alt"></i> Location</h4>
        <address> 10600 Dolores Ave <br /> South Gate, CA, 90280 </address>

        <iframe style="border-radius: 10px;" src="<?php echo $component['google_src']; ?>" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" class="google-maps"></iframe>
    </div>

    <div class="widget">
        <h4 class="widget-title text-white mb-3"><i class="fas fa-icons"></i> Follow Us</h4>
        <nav class="nav social social-white">
            <?php include( $component['module'].'/social-media.php' ); ?>
        </nav>
    </div>
</div>