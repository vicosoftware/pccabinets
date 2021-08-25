<footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-10">
        <div class="row gy-6 gy-lg-0">
            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <div class="widget" data-cues="slideInLeft" data-duration="600" data-delay="150">
                    <img class="mb-4 logo-footer" src="assets/img/logo-light-full.svg" srcset="assets/img/logo-light-full.svg 2x" alt=""/>
                    
                    <hr class="d-md-none mt-2 mb-5">

                    <?php include( $component['module'].'/social-media.php' ); ?>

                    <hr class="mt-2 mb-5">

                    <address><i class="fas fa-map-marker-alt"></i> 10600 Dolores Ave <br/> South Gate, CA, 90280, U.S.A.</address>
                </div>
            </div>

            <div class="col-lg-2 offset-lg-1 col-md-4 text-center text-lg-start">
                <div class="widget" data-cues="slideInDown" data-duration="600" data-delay="150">
                    <h4 class="widget-title mb-3 text-white">Company</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Portfolio</a></li>
                    </ul>
                </div>

                <hr class="d-md-none mt-5 mb-5">

                <div class="widget" data-cues="slideInDown" data-duration="600" data-delay="150">
                    <h4 class="widget-title mb-3 mt-md-5 text-white">Cabinetry</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">Kitchen</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Bathroom</a></li>
                        <li><a href="#">Custom Cabinets</a></li>
                    </ul>
                </div>
            </div>

            <hr class="d-md-none mt-5 mb-0">

            <div class="col-lg-2 col-md-4 text-center text-lg-start">
                <div class="widget" data-cues="slideInUp" data-duration="600" data-delay="150">
                    <h4 class="widget-title mb-3 text-white">Services</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">Installation</a></li>
                        <li><a href="#">Refinishing</a></li>
                        <li><a href="#">Maintenance</a></li>
                        <li><a href="#">Remodeling</a></li>
                        <li><a href="#">Repair</a></li>
                        <li><a href="#">Fabrication</a></li>
                    </ul>
                </div>
            </div>
            
            <hr class="d-md-none mt-5 mb-0">

            <div class="col-lg-3 col-md-4 text-center text-lg-start">
                <div class="widget" data-cues="slideInRight" data-duration="600" data-delay="150">
                    <?php include( $component['module'].'/sales-representative.php' ); ?>
                </div>
            </div>
        </div>

        <hr class="mt-5 mt-md-5 mb-5">

        <div class="d-md-flex align-items-center justify-content-center text-center" data-cues="slideInUp" data-duration="1500" data-delay="700">
            <p class="mb-2 mb-lg-0">© <?php echo date('Y'); ?> Precious Custom Cabinets. All rights reserved.</p>
        </div>
    </div>
</footer>