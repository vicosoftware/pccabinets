<?php 
$title_page_main = "Inspiration";
$title_page_description = "Take some inspiration to help you realize your dream";

require_once( $component['module'].'/title-page.php' );
?>

<section id="lightbox" class="wrapper bg-light">
    <div class="container py-10">
        <div class="grid grid-view gy-10 light-gallery-wrapper">
            <div class="isotope-filter filter mb-10">
                <p>Filter:</p>
                <ul>
                    <li><a class="filter-item active" data-filter="*">All</a></li>
                    <li><a class="filter-item" data-filter=".kitchen">Kitchen</a></li>
                    <li><a class="filter-item" data-filter=".bathroom">Bathroom</a></li>
                    <li><a class="filter-item" data-filter=".entertainment">Entertainment</a></li>
                    <li><a class="filter-item" data-filter=".custom-cabinets">Custom Cabinets</a></li>
                </ul>
            </div>

            <?php
            $galleryItems = "";

            $imgPath = "assets/img/gallery/inspiration/";
            $imgDescription = "Inspiration";

            $imgPath_array = pathToArray( $imgPath );
            //print_r($imgPath_array);

            foreach ($imgPath_array as $item) {
                $title = explode("-", $item);

                if( $title[0] == "custom" ){
                    $galleryItems .= '
                    <div class="item col-lg-4 col-md-6 col-12 '.$title[0].'-'.$title[1].'">
                        <figure class="lift rounded mb-4"><a href="'.$imgPath.$item.'" class="lightbox"><img src="'.$imgPath.$item.'" srcset="'.$imgPath.$item.'" alt="'.ucfirst($title[0]).', '.$imgDescription.'" /></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <div class="post-category text-line mb-3 text-purple">'.ucfirst($title[0]).' '.ucfirst($title[1]).'</div>
                            <h3 class="post-title">'.$imgDescription.'</h3>
                        </div>
                        </div>
                    </div>
                    ';
                } else {
                    $galleryItems .= '
                    <div class="item col-lg-4 col-md-6 col-12 '.$title[0].'">
                        <figure class="lift rounded mb-4"><a href="'.$imgPath.$item.'" class="lightbox"><img src="'.$imgPath.$item.'" srcset="'.$imgPath.$item.'" alt="'.ucfirst($title[0]).', '.$imgDescription.'" /></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <div class="post-category text-line mb-3 text-purple">'.ucfirst($title[0]).'</div>
                            <h3 class="post-title">'.$imgDescription.'</h3>
                        </div>
                        </div>
                    </div>
                    ';
                }
            }
            ?>
            <div class="row gx-md-10 gy-10 gy-md-13 isotope" style="position: relative; height: 3751.64px;">
                <?php echo $galleryItems; ?>
            </div>
        </div>
    </div>
</section>