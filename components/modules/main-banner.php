<?php if( isset($BANNER_TITLE) && $BANNER_TITLE != "" ) { ?>
    <section    class="d-none d-md-block wrapper image-wrapper bg-image bg-overlay text-white" 
                data-image-src="assets/img/pages/<?php echo $_GET['page']; ?>/main-banner.jpg" 
                style="background-image: url(&quot;assets/img/pages/<?php echo $_GET['page']; ?>/main-banner.jpg&quot;);" >
        <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-6 mx-auto">
                <div class="post-header">
                    <h1 class="display-1 mb-3 text-white"><?php echo $BANNER_TITLE; ?></h1>
                    <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18"><?php echo $BANNER_DESCRIPTION; ?></p>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section    class="d-block d-md-none wrapper image-wrapper bg-image bg-overlay text-white" 
                data-image-src="assets/img/pages/<?php echo $_GET['page']; ?>/main-banner-mobile.jpg" 
                style="background-image: url(&quot;assets/img/pages/<?php echo $_GET['page']; ?>/main-banner-mobile.jpg&quot;);" >
        <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-6 mx-auto">
                <div class="post-header">
                    <h1 class="display-1 mb-3 text-white"><?php echo $BANNER_TITLE; ?></h1>
                    <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18"><?php echo $BANNER_DESCRIPTION; ?></p>
                </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>