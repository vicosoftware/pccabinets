<?php
class RelatedProd {
    public $service;
    
    private $imgpath;
    private $title;
    private $desc;
    private $link;

    public function __construct(){

    }
    /****************************************************************************
     * PRODUCTS
     ****************************************************************************/
    public function getKitchen(){
        $this->imgpath  = "assets/img/prod_rela/kitchen.jpg";
        $this->title    = "Kitchen";
        $this->desc     = "Add value and beauty to your home/office with beautiful and functional cabinets.";
        $this->link     = "principal.php?prod=kitchen";

        echo $this->printItem();
    }

    public function getBathroom(){
        $this->imgpath  = "assets/img/prod_rela/bathroom.jpg";
        $this->title    = "Bathroom";
        $this->desc     = "Add value and beauty to your home/office with beautiful and functional cabinets.";
        $this->link     = "principal.php?prod=bathroom";

        echo $this->printItem();
    }

    public function getEntertainment(){
        $this->imgpath  = "assets/img/prod_rela/entertaiment.jpg";
        $this->title    = "Entertainment";
        $this->desc     = "Add value and beauty to your home/office with beautiful and functional cabinets.";
        $this->link     = "principal.php?prod=entertainment";

        echo $this->printItem();
    }
    /****************************************************************************
     * SERVICES
     ****************************************************************************/
    public function getInstallation(){
        $this->imgpath  = "assets/img/prod_rela/installation.jpg";
        $this->title    = "Installation";
        $this->desc     = "Add value and beauty to your home/office with beautiful and functional cabinets.";
        $this->link     = "principal.php?prod=installation";

        echo $this->printItem();
    }

    public function getRefinishing(){
        $this->imgpath  = "assets/img/prod_rela/refinishing.jpg";
        $this->title    = "Refinishing & Refacing";
        $this->desc     = "Add value and beauty to your home/office with beautiful and functional cabinets.";
        $this->link     = "principal.php?prod=refinishing";

        echo $this->printItem();
    }

    public function getMaintenance(){
        $this->imgpath  = "assets/img/prod_rela/maintenance.jpg";
        $this->title    = "Maintenance & Repair";
        $this->desc     = "Add value and beauty to your home/office with beautiful and functional cabinets.";
        $this->link     = "principal.php?prod=maintenance";

        echo $this->printItem();
    }

    public function getFabrication(){
        $this->imgpath  = "assets/img/prod_rela/fabrication.jpg";
        $this->title    = "Fabrication";
        $this->desc     = "Add value and beauty to your home/office with beautiful and functional cabinets.";
        $this->link     = "principal.php?prod=fabrication";

        echo $this->printItem();
    }

    public function getRemodeling(){
        $this->imgpath  = "assets/img/prod_rela/remodeling.jpg";
        $this->title    = "Remodeling";
        $this->desc     = "Add value and beauty to your home/office with beautiful and functional cabinets.";
        $this->link     = "principal.php?prod=remodeling";

        echo $this->printItem();
    }

    public function printItem(){
        return '
        <div class="col-12 col-lg-3 col-md-6 banner-style3 px-0 wow fadeInUp">
            <figure class="bg-extra-dark-gray">
                <div class="banner-image bg-extra-dark-gray">
                    <img src="'.$this->imgpath.'" alt="" />
                </div>
                <figcaption class="d-flex flex-column justify-content-center align-items-center text-center">
                    <div class="text-large text-white-2 alt-font text-uppercase font-weight-600 margin-10px-bottom">
                        '.$this->title.'
                    </div>
                    <p class="text-light-gray width-80 mx-auto">
                        '.$this->desc.'
                    </p>
                    <a href="'.$this->link.'" class="btn btn-small btn-white font-weight-300 btn-rounded">
                        Know more <i class="ti-arrow-right"></i>
                    </a>
                </figcaption>
            </figure>
        </div>
        ';
    }
}
?>