<?php
class FooterPrevNext {
    public $service;
    
    private $title;
    private $previous;
    private $next;

    public function __construct(){

    }

    private function setPage( $type ){
        switch( $type ){
            case "kitchen":         $this->title = "Kitchen & Cabinets";        break;
            case "bathroom":        $this->title = "Bathroom & Cabinets";       break;
            case "entertainment":   $this->title = "Entertainment & Cabinets";  break;
            case "installation":    $this->title = "Installation";              break;
            case "refinishing":     $this->title = "Refinishing & Refacin";     break;
            case "maintenance":     $this->title = "Maintenance & Repair";      break;
            case "fabrication":     $this->title = "Fabrication";               break;
            case "remodeling":      $this->title = "Remodeling";                break;
        }
    }
    public function setPrevious( $type ){
        $this->setPage( $type );
        $this->previous = '
        <div class="blog-nav-link blog-nav-link-prev text-extra-dark-gray">
            <span class="text-medium-gray text-extra-small text-uppercase d-none d-md-block">Previous</span>
            <a href="principal.php?prod='.$type.'" >
                <i class="ti-arrow-left blog-nav-icon"></i>
                '.$this->title.'
            </a>
        </div>
        ';
    }

    public function setNext( $type ){
        $this->setPage( $type );
        $this->next = '
        <div class="blog-nav-link blog-nav-link-next text-extra-dark-gray">    
            <span class="text-medium-gray text-extra-small text-uppercase d-none d-md-block">Next</span>
            <a href="principal.php?prod='.$type.'" >
                <i class="ti-arrow-right blog-nav-icon"></i>
                '.$this->title.'
            </a>
        </div>
        ';
    }

    public function printFooter(){
        echo '
        <div class="width-45 text-left">
            '.$this->previous.'
        </div>
        <div class="width-10 text-center">
            <a href="#" class="blog-nav-link blog-nav-home"><i class="ti-layout-grid2-alt"></i></a>
        </div>
        <div class="width-45 text-right">
            '.$this->next.'
        </div>
        ';
    }
    //principal.php?prod=portfolio
    //<a href="principal.php?prod='.$this->link.'">
}
?>