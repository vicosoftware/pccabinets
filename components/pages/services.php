
<?php 
$title_page_main = "Know more about our services";
$title_page_description = "We have more than 15 years of experience that will provide you with the best service, these are some of our services with pleasure we can offer you.";

require_once( $component['module'].'/title-page.php' );
?>

<section class="wrapper bg-light"><div class="container pt-0 pb-0">
    <div class="projects-overflow mt-md-10 mb-10 mb-lg-15">

        <?php // ITEMS (BEGIN) =========================================================================== ?>

        <?php 

            $objService = "";

            $jsonData = '{
                "companyName":"Precious Custom Cabinets",
                "items":[
                    {
                        "position":"left",
                        "title":"Fabrication",
                        "url_banner":"fabrication",
                        "url_altDesc":"Fabrication",
                        "description":"We have a trained team of cabinet builders in Los Angeles CA, who can help provide you with a variety of features to provide you with the best solutions for your custom closet and cabinets. We offer superior craftsmanship and are a California green cabinet manufacturer that can design and build the most affordable custom wardrobe organization options in Los Angeles CA."
                    },
                    {
                        "position":"right",
                        "title":"Installation",
                        "url_banner":"installation",
                        "url_altDesc":"Installation",
                        "description":"We have a great team and a great logistician for the installation of your cabinets, with the latest in technology, techniques and tools that will make your dream come true, without damaging your home, office or the place that you love so much and have worked for you to build and maintain. We have specialized personnel in painting and installation, with more than 15 years of experience we are the best option in Los Angeles CA."
                    },
                    {
                        "position":"left",
                        "title":"Remodeling",
                        "url_banner":"remodeling",
                        "url_altDesc":"Remodeling",
                        "description":"We can help transform your closet from a hectic, chaotic clutter into a custom, beautifully designed storage space. We have a world-class design team that can work directly with you to implement all of your ideas and your specific needs in your custom closet cabinets. We have the best technology and the best experience in California."
                    },
                    {
                        "position":"right",
                        "title":"Maintenance",
                        "url_banner":"maintenance",
                        "url_altDesc":"Maintenance",
                        "description":"It is important to hire the best team to be able to give the proper maintenance to your cabinets and closets, do not hesitate to contact us, we have more than 15 years of experience and we have the best equipment, specialized technicians and we have the best tools that will help you. your cabinets in top condition so they last longer and always look like new."
                    },
                    {
                        "position":"left",
                        "title":"Repair",
                        "url_banner":"repair",
                        "url_altDesc":"Repair",
                        "description":"Have your cabinets or closets been damaged? We have a great experience helping in the repair of different types of cabinets, we have the best technology, designers and a great team of technicians, who day by day do the best job to leave those damaged cabinets in completely renovated cabinets, so that they can look like new or with a new style or design. Our main objective is to fulfill your dreams."
                    },
                    {
                        "position":"right",
                        "title":"Refinishing & Refacing",
                        "url_banner":"refinishing",
                        "url_altDesc":"Refinishing & Refacing",
                        "description":"Want to give your kitchen a whole new look, but not interested in paying for a full wall of new cabinets? At Precious Custom Cabinets we have several methods including reconditioning, refinishing and remodeling (new design and cabinets). Retaining all the components of your existing cabinets and simply change the color or finish or replace all the cabinet doors and drawer fronts with new ones."
                    }
                ]
            }';

            $jsonData = json_decode($jsonData);
            //print_r($jsonData);
            
            $objService_footer = '
            <h5>Know more...</h5>
            <a href="index.php?page=about-us" class=" hover link-purple">About Us </a> |
            <a href="index.php?page=gallery-porfolio" class=" hover link-purple">Portfolio </a> |
            <a href="index.php?page=gallery-after-before" class=" hover link-purple">Befor & After </a> |
            <a href="index.php?page=gallery-inspiration" class=" hover link-purple">Inspiration </a>
            ';

            foreach ($jsonData->items as $item) {
                if( $item->position == "left" ){
                    $figure_position  = 'figure class="col-lg-8 col-xl-7 offset-xl-1 rounded"';
                    $divCard_position = 'class="project-details d-flex justify-content-center flex-column" style="right: 10%; bottom: 25%;"';
                    $dataCues_position= 'slideInRight';
                } else if( $item->position == "right" ){
                    $figure_position  = 'class="col-lg-7 offset-lg-5 col-xl-6 offset-xl-5 rounded"';
                    $divCard_position = 'class="project-details d-flex justify-content-center flex-column" style="left: 18%; bottom: 25%;"';
                    $dataCues_position= 'slideInLeft';
                }

                $objService .= '
                    <div class="project item"><div class="row">
                        <figure '.$figure_position.' data-cues="'.$dataCues_position.'" data-duration="1000" data-delay="100">
                            <img src="assets/img/pages/services/'.$item->url_banner.'.jpg" alt="'.$item->url_altDesc.'" class="service-box-img">
                        </figure>
                        <div '.$divCard_position.'>
                            <div    class="card shadow-lg rellax" data-cues="'.$dataCues_position.'" data-duration="1000" data-delay="250"
                                    data-rellax-speed="5" style="transform: translate3d(0px, 30px, 0px);">
                                    <div class="card-body">
                                        <div class="post-header">
                                            <!-- div class="post-category text-line text-purple mb-3">'.$jsonData->companyName.'</div -->
                                            <h2 class="post-title mb-3">'.$item->title.'</h2>
                                        </div>
                                        <div class="post-content">
                                            <p>'.$item->description.'</p>
                                            '.$objService_footer.'
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div></div>
                ';
            }

            echo $objService;
        ?>
    </div>
</div></section>