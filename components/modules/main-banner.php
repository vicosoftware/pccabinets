<?php
switch( $_GET['page'] ){
    case "services":
        $mainBanner_title = 'Services';
        $mainBanner_description = 'Our great experience can provide you the best service';
    break;
}

?>
<section    class="wrapper image-wrapper bg-image bg-overlay text-white" 
            data-image-src="assets/img/<?php echo $_GET['page']; ?>/main-banner.jpg" 
            style="background-image: url(&quot;assets/img/<?php echo $_GET['page']; ?>/main-banner.jpg&quot;);" >
    <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
        <div class="row">
            <div class="col-md-10 col-lg-6 mx-auto">
            <div class="post-header">
                <h1 class="display-1 mb-3 text-white"><?php echo $mainBanner_title; ?></h1>
                <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18"><?php echo $mainBanner_description; ?></p>
            </div>
            </div>
        </div>
    </div>
</section>