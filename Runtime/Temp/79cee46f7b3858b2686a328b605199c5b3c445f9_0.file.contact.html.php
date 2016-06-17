<?php
/* Smarty version 3.1.29, created on 2016-06-17 10:40:13
  from "/home/pzr/workspace/blog_app/Home/View/contact.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5763630d141109_40183592',
  'file_dependency' => 
  array (
    '79cee46f7b3858b2686a328b605199c5b3c445f9' => 
    array (
      0 => '/home/pzr/workspace/blog_app/Home/View/contact.html',
      1 => 1428483902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5763630d141109_40183592 ($_smarty_tpl) {
?>
<!DOCTYPE HTML><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png">
<link rel="apple-touch-icon-precomposed" sizes="180x180" href="images/splash/splash-icon-big.png">
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" 	media="screen and (max-device-width: 320px)" />  
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen-six.png" media="(device-width: 375px)">
<link rel="apple-touch-startup-image" href="images/splash/splash-screen-six-plus.png" media="(device-width: 414px)">
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png" />
<link rel="apple-touch-startup-image" sizes="1024x748" href="images/splash/splash-screen-ipad-landscape" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)" />
<link rel="apple-touch-startup-image" sizes="768x1004" href="images/splash/splash-screen-ipad-portrait.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)" />
<link rel="apple-touch-startup-image" sizes="1536x2008" href="images/splash/splash-screen-ipad-portrait-retina.png"   media="(device-width: 768px)	and (orientation: portrait)	and (-webkit-device-pixel-ratio: 2)"/>
<link rel="apple-touch-startup-image" sizes="1496x2048" href="images/splash/splash-screen-ipad-landscape-retina.png"   media="(device-width: 768px)	and (orientation: landscape)	and (-webkit-device-pixel-ratio: 2)"/>

<title>Epsilon Mobile Framework - Version 2.0</title>

<link href="styles/style.css"     		 rel="stylesheet" type="text/css">
<link href="styles/framework.css" 		 rel="stylesheet" type="text/css">
<link href="styles/owl.theme.css" 		 rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"		 rel="stylesheet" type="text/css">
<link href="styles/font-awesome.css"	 rel="stylesheet" type="text/css">
<link href="styles/animate.css"			 rel="stylesheet" type="text/css">

<?php echo '<script'; ?>
 type="text/javascript" src="scripts/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="scripts/jqueryui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="scripts/framework.plugins.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="scripts/custom.js"><?php echo '</script'; ?>
>

</head>
<body> 

<div id="preloader">
	<div id="status">
    	<p class="center-text">
			Loading the content...
            <em>Loading depends on your connection speed!</em>
        </p>
    </div>
</div>
    
       
<div class="all-elements">
    <div class="snap-drawers">
        <!-- Left Sidebar -->
        <div class="snap-drawer snap-drawer-left">
            <a href="index.html"><i class="fa fa-home"></i>Home</a>
            <a href="page-features.html"><i class="fa fa-cog"></i>Features</a>
            <a href="page-media.html"><i class="fa fa-picture-o"></i>Media</a>
            <a href="page-blog.html"><i class="fa fa-pencil"></i>Blog</a>
            <a href="contact.html" class="selected-item"><i class="fa fa-envelope-o"></i>Contact</a>
            <a href="#"><i class="fa fa-facebook"></i>Like Us</a>
            <a href="#"><i class="fa fa-twitter"></i>Follow Us</a>
            <a href="#"><i class="fa fa-google-plus"></i>Follow us</a>
            <a href="#" class="show-share-bottom"><i class="fa fa-retweet"></i>Share</a>
            <a href="#" class="sidebar-close"><i class="fa fa-times"></i>Close</a>
        </div>
    </div>
    
    <div class="header">
        <a href="#" class="main-logo"></a>
        <a href="#" class="open-menu"><i class="fa fa-navicon"></i></a>
        <a href="#" class="open-call"><i class="fa fa-phone"></i></a>
        <a href="#" class="open-mail"><i class="fa fa-envelope-o"></i></a>
    </div> 
    
    <a href="#" class="footer-ball"><i class="fa fa-navicon"></i></a>
    
    <!-- Page Content-->
    <div id="content" class="snap-content">        
        <div class="maps-container">
            <iframe class="responsive-image maps" src="https://maps.google.com/?ie=UTF8&amp;ll=47.595131,-122.330414&amp;spn=0.006186,0.016512&amp;t=h&amp;z=17&amp;output=embed"></iframe>
        </div>

        <div class="content">
            <div class="decoration"></div>
            <div class="one-half-responsive">
                <h4>Send us an email!</h4>
                <p>Use the form to send us a message, it's AJAX and PHP powered and it's easy to use!</p>
                <div class="container no-bottom">
                    <div class="contact-form no-bottom"> 
                        <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                            <div class="big-notification green-notification">
                                <h3 class="uppercase">Message Sent </h3>
                                <a href="#" class="close-big-notification">x</a>
                                <p>Your message has been successfuly sent. Please allow up to 48 hours for a reply! Thank you!</p>
                            </div>
                        </div>

                        <form action="php/contact.php" method="post" class="contactForm" id="contactForm">
                            <fieldset>
                                <div class="formValidationError" id="contactNameFieldError">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Name is required!</p>
                                    </div>
                                </div>             
                                <div class="formValidationError" id="contactEmailFieldError">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Mail address required!</p>
                                    </div>
                                </div> 
                                <div class="formValidationError" id="contactEmailFieldError2">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Mail address must be valid!</p>
                                    </div>
                                </div> 
                                <div class="formValidationError" id="contactMessageTextareaError">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Message field is empty!</p>
                                    </div>
                                </div>   
                                <div class="formFieldWrap">
                                    <label class="field-title contactNameField" for="contactNameField">Name:<span>(required)</span></label>
                                    <input type="text" name="contactNameField" value="" class="contactField requiredField" id="contactNameField"/>
                                </div>
                                <div class="formFieldWrap">
                                    <label class="field-title contactEmailField" for="contactEmailField">Email: <span>(required)</span></label>
                                    <input type="text" name="contactEmailField" value="" class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                                </div>
                                <div class="formTextareaWrap">
                                    <label class="field-title contactMessageTextarea" for="contactMessageTextarea">Message: <span>(required)</span></label>
                                    <textarea name="contactMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
                                </div>
                                <div class="formSubmitButtonErrorsWrap">
                                    <input type="submit" class="buttonWrap button button-green contactSubmitButton" id="contactSubmitButton" value="SUBMIT" data-formId="contactForm"/>
                                </div>
                            </fieldset>
                        </form>       
                    </div>
                </div>
            </div>
            <div class="decoration hide-if-responsive"></div>
            <div class="one-half-responsive last-column">
                <div class="container no-bottom">
                    <h4>Contact Information</h4>
                    <p>
                        <strong>Postal Information</strong><br>
                        PO Box 16122 Collins Street West<br>
                        Victoria 8007 Australia
                    </p>
                    <p>
                        <strong>Envato Headquarters</strong><br>
                        121 King Street, Melbourne <br>
                        Victoria 3000 Australia
                    </p>
                    <p>
                        <strong>Contact Information:</strong><br>
                        <a href="#" class="contact-call"><i class="fa fa-phone"></i>Phone: + 123 456 7890</a>
                        <a href="#" class="contact-text"><i class="fa fa-comments"></i>Message: + 123 456 7890</a>
                        <a href="#" class="contact-mail"><i class="fa fa-envelope"></i>Email: mail@doamin.com</a>
                        <a href="#" class="contact-facebook"><i class="fa fa-facebook"></i>Fanpage: enabled.labs</a>
                        <a href="#" class="contact-twitter"><i class="fa fa-twitter"></i>Twitter: @iEnabled</a>
                    </p>
                </div>            
            </div>
            
            <div class="decoration"></div>
            
        </div>
        <!-- Page Footer-->
        <div class="footer">
            <p class="center-text">Copyright 2015. All rights reserved.</p>
            <div class="footer-socials half-bottom">
                <a href="#" class="footer-facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="footer-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="footer-transparent"></a>
                <a href="#" class="footer-share show-share-bottom"><i class="fa fa-share-alt"></i></a>
                <a href="#" class="footer-up"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>    
        
    </div>
    
    <div class="share-bottom">
        <h3>Share Page</h3>
        <div class="share-socials-bottom">
            <a href="">
                <i class="fa fa-facebook facebook-color"></i>
                Facebook
            </a>
            <a href="">
                <i class="fa fa-twitter twitter-color"></i>
                Twitter
            </a>
            <a href="">
                <i class="fa fa-google-plus google-color"></i>
                Google
            </a>

            <a href="">
                <i class="fa fa-pinterest-p pinterest-color"></i>
                Pinterest
            </a>
            <a href="sms:">
                <i class="fa fa-comment-o sms-color"></i>
                Text
            </a>
            <a href="">
                <i class="fa fa-envelope-o mail-color"></i>
                Email
            </a>
        </div>
        <a href="#" class="close-share-bottom">Close</a>
    </div>
    
</div>

</body>

<?php }
}
