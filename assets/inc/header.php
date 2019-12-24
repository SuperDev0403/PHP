<?php
//include global variables
global $seotitle;
global $seoDesc;
global $seoKeywords;

?>


<!DOCTYPE html>
<html class="no-js">

<head>
    <meta name="robots" content=""index,follow" />
    <meta name="google-site-verification" content="v1F8tQ031gFu64R4-KQFbOuRwEATgadRUEDaG-sIp0Y" />

    
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        
        
        <title><?php echo $seotitle; ?></title>
        <meta name="description" content="<?php echo $seoDesc; ?>">
        <meta name="keywords" content="<?php echo $seoKeywords; ?>">
        <meta name="author" content="Zach Mainello & Jacky Jin">

  
  
            <link rel="shortcut icon" href="/assets/images/favicon.png">
            <link rel="apple-touch-icon" href="/assets/images/favicon.png">
            <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicon.png">
            <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicon.png">
            <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicon.png">


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/animations.css">
	<link rel="stylesheet" href="/assets/css/font-awesome.css">
	<link rel="stylesheet" href="/assets/css/main.css" class="color-switcher-link">
	<script src="/assets/js/vendor/modernizr-2.6.2.min.js"></script>
	
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127561457-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127561457-1');
</script>


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '310733446209056'); 
 
fbq('track', 'PageView');

fbq('track', 'Contact');


</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=310733446209056&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->



</head>

<body>


	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
 
    <?php inc('menu'); ?>
