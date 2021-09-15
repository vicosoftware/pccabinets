<?php
//DATA
if( isset($_GET['page']) ){
    if( in_array($_GET['page'], $page_data) ){    
        //PAGE STYLE
        switch( $_GET['page'] ){
            case 'services':
                $SEO_TITLE = $component['company_name'].' | Services';
                $SEO_TITLE_SM = $component['company_name_sm'].' | Services';
                $SEO_DESCRIPTION = 'Our great experience can provide you the best service';
                $SEO_KEYWORDS = 'Custom Cabinets, Solutions, Fabrication, Installation, Remodeling, Maintenance, Repair, Refinishing, Refacing';

                $BANNER_TITLE = 'Services';
                $BANNER_DESCRIPTION = 'Our great experience can provide you the best service';
            break;

            case 'cab-kitchen':
                $SEO_TITLE = $component['company_name'].' | Kitchens';
                $SEO_TITLE_SM = $component['company_name_sm'].' | Kitchens';
                $SEO_DESCRIPTION = 'Our great experience can provide you the best service';
                $SEO_KEYWORDS = 'Custom Cabinets, Solutions, Fabrication, Installation, Remodeling, Maintenance, Repair, Refinishing, Refacing';

                $BANNER_TITLE = 'Kitchens';
                $BANNER_DESCRIPTION = 'Our great experience can provide you the best service';
            break;

            case 'cab-bathroom':
                $SEO_TITLE = $component['company_name'].' | Bathrooms';
                $SEO_TITLE_SM = $component['company_name_sm'].' | Bathrooms';
                $SEO_DESCRIPTION = 'Our great experience can provide you the best service';
                $SEO_KEYWORDS = 'Custom Cabinets, Solutions, Fabrication, Installation, Remodeling, Maintenance, Repair, Refinishing, Refacing';

                $BANNER_TITLE = 'Bathrooms';
                $BANNER_DESCRIPTION = 'Our great experience can provide you the best service';
            break;

            case 'cab-entertainment':
                $SEO_TITLE = $component['company_name'].' | Entertainments';
                $SEO_TITLE_SM = $component['company_name_sm'].' | Entertainments';
                $SEO_DESCRIPTION = 'Our great experience can provide you the best service';
                $SEO_KEYWORDS = 'Custom Cabinets, Solutions, Fabrication, Installation, Remodeling, Maintenance, Repair, Refinishing, Refacing';

                $BANNER_TITLE = 'Entertainments';
                $BANNER_DESCRIPTION = 'Our great experience can provide you the best service';
            break;

            case 'cab-custom-cabinets':
                $SEO_TITLE = $component['company_name'].' | Custom Cabinets';
                $SEO_TITLE_SM = $component['company_name_sm'].' | Custom Cabinets';
                $SEO_DESCRIPTION = 'Our great experience can provide you the best service';
                $SEO_KEYWORDS = 'Custom Cabinets, Solutions, Fabrication, Installation, Remodeling, Maintenance, Repair, Refinishing, Refacing';

                $BANNER_TITLE = 'Custom Cabinets';
                $BANNER_DESCRIPTION = 'Our great experience can provide you the best service';
            break;

            case 'gallery-porfolio':
                $SEO_TITLE = $component['company_name'].' | Gallery - Portfolio';
                $SEO_TITLE_SM = $component['company_name_sm'].' | Gallery - Portfolio';
                $SEO_DESCRIPTION = 'Our great experience can provide you the best service';
                $SEO_KEYWORDS = 'Custom Cabinets, Solutions, Fabrication, Installation, Remodeling, Maintenance, Repair, Refinishing, Refacing';

                $BANNER_TITLE = 'Gallery - Portfolio';
                $BANNER_DESCRIPTION = 'Our great experience can provide you the best service';
            break;

            case 'gallery-after-before':
                $SEO_TITLE = $component['company_name'].' | Gallery - Before & After';
                $SEO_TITLE_SM = $component['company_name_sm'].' | Gallery - Before & After';
                $SEO_DESCRIPTION = 'Our great experience can provide you the best service';
                $SEO_KEYWORDS = 'Custom Cabinets, Solutions, Fabrication, Installation, Remodeling, Maintenance, Repair, Refinishing, Refacing';

                $BANNER_TITLE = 'Gallery - Before & After';
                $BANNER_DESCRIPTION = 'Our great experience can provide you the best service';
            break;

            case 'gallery-inspiration':
                $SEO_TITLE = $component['company_name'].' | Gallery - Inspiration';
                $SEO_TITLE_SM = $component['company_name_sm'].' | Gallery - Inspiration';
                $SEO_DESCRIPTION = 'Our great experience can provide you the best service';
                $SEO_KEYWORDS = 'Custom Cabinets, Solutions, Fabrication, Installation, Remodeling, Maintenance, Repair, Refinishing, Refacing';

                $BANNER_TITLE = 'Gallery - Inspiration';
                $BANNER_DESCRIPTION = 'Our great experience can provide you the best service';
            break;

            case 'about-us':
                $SEO_TITLE = $component['company_name'].' | About us';
                $SEO_TITLE_SM = $component['company_name_sm'].' | About us';
                $SEO_DESCRIPTION = 'Our great experience can provide you the best service';
                $SEO_KEYWORDS = 'Custom Cabinets, Solutions, Fabrication, Installation, Remodeling, Maintenance, Repair, Refinishing, Refacing';

                $BANNER_TITLE = 'About us';
                $BANNER_DESCRIPTION = 'Our great experience can provide you the best service';
            break;
        }

        $SEO_SML_IMG_1 = $component['company_url'].'assets/img/social-media-share/'.$_GET['page'].'.jpg';
        $SEO_SML_IMG_2 = $component['company_url'].'assets/img/social-media-share/'.$_GET['page'].'.jpg';
        $SEO_SML_IMG_3 = $component['company_url'].'assets/img/social-media-share/'.$_GET['page'].'.jpg';
    } else {
        //404 PAGE NOT FOUND
        $SEO_TITLE = $component['company_name'].' | Welcome';
        $SEO_TITLE_SM = $component['company_name_sm'].' | Welcome';
        $SEO_DESCRIPTION = 'We bring solutions to make life easier';
        $SEO_KEYWORDS = 'Custom Cabinets, Solutions';

        $SEO_SML_IMG_1 = $component['company_url'].'assets/img/social-media-share/welcome-precious-custom-cabinets.jpg';
        $SEO_SML_IMG_2 = $component['company_url'].'assets/img/social-media-share/welcome-precious-custom-cabinets.jpg';
        $SEO_SML_IMG_3 = $component['company_url'].'assets/img/social-media-share/welcome-precious-custom-cabinets.jpg';
    }
} else {
    //WELCOME PAGE
    $SEO_TITLE = $component['company_name'].' | Welcome';
    $SEO_TITLE_SM = $component['company_name_sm'].' | Welcome';
    $SEO_DESCRIPTION = 'We bring solutions to make life easier';
    $SEO_KEYWORDS = 'Custom Cabinets, Solutions';

    $SEO_SML_IMG_1 = $component['company_url'].'assets/img/social-media-share/welcome-precious-custom-cabinets.jpg';
    $SEO_SML_IMG_2 = $component['company_url'].'assets/img/social-media-share/welcome-precious-custom-cabinets.jpg';
    $SEO_SML_IMG_3 = $component['company_url'].'assets/img/social-media-share/welcome-precious-custom-cabinets.jpg';
}

//SEO STUCTURE
return array(
    'url' => "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
    'title' => $SEO_TITLE,
    'title_sm' => $SEO_TITLE_SM,
    'image_1' => $SEO_SML_IMG_1,
    'image_2' => $SEO_SML_IMG_2,
    'image_3' => $SEO_SML_IMG_3,
    'type' => "article",
    'description' => $SEO_DESCRIPTION,
    'keywords' => $SEO_KEYWORDS,
    'author' => "Omar Vicente Villalobos Castro"
);