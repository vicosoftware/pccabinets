<header class="wrapper bg-soft-primary">
    <nav class="navbar center-nav transparent position-absolute navbar-expand-lg navbar-dark ">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <?php // LEFT MENU (LOGO) *************************************************************** ?>
            <div class="navbar-brand w-100">
                <a href="index.php">
                    <img class="logo-dark" src="assets/img/logo.svg" style="width: 200px;" srcset="assets/img/logo@2x.png 2x" alt="" />
                    <img class="logo-light" src="assets/img/logo-light.svg" style="width: 200px;" srcset="assets/img/logo-light@2x.png 2x" alt=""  />
                </a>
            </div>

            <?php // CENTER MENU *************************************************************** ?>
            <div class="navbar-collapse offcanvas-nav">
                <div class="offcanvas-header d-lg-none d-xl-none">
                    <div style="text-align: left;">
                        <img src="assets/img/logo-symbol-light.svg" srcset="assets/img/logo-symbol-light@2x.png 2x" alt="" style="width: 90%; margin-bottom: 10px;" />
                        <img src="assets/img/logo-light.svg" srcset="assets/img/logo-light@2x.png 2x" alt="" style="width: 90%;" />
                    </div>
                    <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item d-none d-md-block"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Cabinetry</a>
                        <ul class="dropdown-menu mega-menu mega-menu-img">
                            <li class="mega-menu-content">
                                <ul class="row row-cols-1 row-cols-lg-4 gx-0 gx-lg-4 gy-lg-2 list-unstyled">
                                    <li class="col">
                                        <a class="dropdown-item" href="index.php">
                                            <figure class="rounded lift d-none d-lg-block">
                                                <img src="assets/img/menu/prod-kitchen.jpg" srcset="assets/img/menu/prod-kitchen@2x.jpg 2x" alt="" class="img-shadow-bg">
                                            </figure>
                                            <span class="d-lg-none">Kitchen</span>
                                        </a>                                        
                                    </li>
                                    <li class="col">
                                        <a class="dropdown-item" href="index.php">
                                            <figure class="rounded lift d-none d-lg-block">
                                                <img src="assets/img/menu/prod-bathroom.jpg" srcset="assets/img/menu/prod-bathroom@2x.jpg 2x" alt="" class="img-shadow-bg">
                                            </figure>
                                            <span class="d-lg-none">Bathroom</span>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="dropdown-item" href="index.php">
                                            <figure class="rounded lift d-none d-lg-block">
                                                <img src="assets/img/menu/prod-entertainment.jpg" srcset="assets/img/menu/prod-entertainment@2x.jpg 2x" alt="" class="img-shadow-bg">
                                            </figure>
                                            <span class="d-lg-none">Entertainment</span>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a class="dropdown-item" href="index.php">
                                            <figure class="rounded lift d-none d-lg-block">
                                                <img src="assets/img/menu/prod-cabinets.jpg" srcset="assets/img/menu/prod-cabinets@2x.jpg 2x" alt="" class="img-shadow-bg">
                                            </figure>
                                            <span class="d-lg-none">Custom Cabinets</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link has-submenu" href="#">Gallery <span class="sub-arrow"></span></a>
                        <ul class="dropdown-menu sm-nowrap hide-animation" style="width: auto; display: none; top: auto; left: 0px; margin-left: 0px; margin-top: 0px; min-width: 10rem; max-width: 25rem;">
                            <li class="nav-item"><a class="dropdown-item" href="#">Portfolio</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#">Before & After</a></li> <!-- https://authenticcustomcabinetry.com/gallery/ -->
                            <li class="nav-item"><a class="dropdown-item" href="#">Inspiration</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                </ul>
            </div>

            <?php // RIGHT MENU *************************************************************** ?>
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                    <!-- PHONE CALL -->
                    <li class="nav-item d-none d-md-block">
                        <a href="tel:+13233041929" class="nav-link icon btn btn-circle btn-red btn-md rounded-pill" style="border: 2px solid #FFFFFF; background-color: #e74c3c !important; color: #FFFFFF !important;"><i class="uil uil-phone-volume"></i></a>
                    </li>
                    <!-- TEXT -->
                    <li class="nav-item d-none d-md-block">
                        <a href="sms:+13233041929&body=Hello, could you help me with an estimate?" class="nav-link icon btn btn-circle btn-red btn-md rounded-pill" style="border: 2px solid #FFFFFF; background-color: #9b59b6 !important; color: #FFFFFF !important;"><i class="fas fa-sms"></i></a>
                    </li>
                    <!-- MORE LINKS -->
                    <li class="nav-item">
                        <a class="nav-link icon btn btn-circle btn-primary btn-md rounded-pill" data-toggle="offcanvas-info" style="border: 2px solid #FFFFFF; background-color: #f1c40f !important; color: #FFFFFF !important;"><i class="fas fa-headset"></i></a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php 
    // RIGHT CANVAS *************************************************************** 
    require_once( $component['module'].'/right-navbar.php' );
    ?>
</header>