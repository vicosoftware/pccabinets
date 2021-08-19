<?php //META TAGS======================================================== ?>
<?php //General ?>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

<?php //Prevents page view from being cached ?>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="-1" />

<?php //SEO Meta tags Graph data ?>
<link rel="image_src" type="image/jpg" href="img_path" />

<title><?php echo $seo_data['title']; ?></title>
<meta name='description'    content="<?php echo $seo_data['description']; ?>" />
<meta name='keywords'       content="<?php echo $seo_data['keywords']; ?>" />
<meta name='author'         content="<?php echo $seo_data['author']; ?>" />

<!-- meta property="fb:app_id" content="121858558284" /-->
<meta property='og:locale'       content="en_US"/>
<meta property='og:site_name'    content="<?php echo $component['company_name']; ?>"/>
<meta property='og:url'          content="<?php echo $seo_data['url']; ?>" />
<meta property='og:type'         content="<?php echo $seo_data['type']; ?>" />
<meta property='og:title'        content="<?php echo $seo_data['title_sm']; ?>" />
<meta property='og:description'  content="<?php echo $seo_data['description']; ?>" />
<meta property='og:image'        content="<?php echo $seo_data['image_1']; ?>" />
<meta property='og:image'        content="<?php echo $seo_data['image_2']; ?>" />
<meta property='og:image'        content="<?php echo $seo_data['image_3']; ?> " />
<meta property="og:image:width"  content="500" />
<meta property="og:image:height" content="500" />

<meta name="twitter:card"        content="summary_large_image" />
<meta name="twitter:site"        content="@pcustomcabinets" />
<meta name="twitter:title"       content="<?php echo $seo_data['title_sm']; ?>" />
<meta name="twitter:description" content="<?php echo $seo_data['description']; ?>" />
<meta name="twitter:image"       content="<?php echo $seo_data['image_1']; ?>" />

<?php //FAVICON======================================================== ?>

<link rel="shortcut icon" href="assets/img/favicon.svg">
<link rel="apple-touch-icon" href="assets/img/favicon.svg">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon.svg">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon.svgq">

<?php //STYLESHEET======================================================== ?>

<link rel="stylesheet" href="assets/css/plugins.css">
<link rel="stylesheet" href="assets/css/style.css">

<?php 
$stylesheet_version = '<link rel="stylesheet" href="assets/css/global_style.css?v"'.$fileVersion.' />';

echo $stylesheet_version;
?>