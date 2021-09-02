<?php

if( isset($_GET['page']) ){
    if( in_array($_GET['page'], $page_data) ){    
        //PAGE STYLE

        switch( $_GET['page'] ){
            case 'services':
                $SEO_TITLE = $component['company_name'].' | Services';
                $SEO_TITLE_SM = $component['company_name_sm'].' | Services';
                $SEO_DESCRIPTION = 'Our great experience can provide you the best service';
                $SEO_KEYWORDS = 'Custom Cabinets, Solutions, Fabrication, Installation, Remodeling, Maintenance, Repair, Refinishing, Refacing';
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