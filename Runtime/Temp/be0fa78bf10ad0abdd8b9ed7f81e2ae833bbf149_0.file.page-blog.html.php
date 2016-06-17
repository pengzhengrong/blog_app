<?php
/* Smarty version 3.1.29, created on 2016-06-17 16:04:12
  from "/home/pzr/workspace/blog_app/Home/View/page-blog.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5763aefc018053_79673219',
  'file_dependency' => 
  array (
    'be0fa78bf10ad0abdd8b9ed7f81e2ae833bbf149' => 
    array (
      0 => '/home/pzr/workspace/blog_app/Home/View/page-blog.html',
      1 => 1466150607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Common/header.html' => 1,
    'file:Common/loader.html' => 1,
    'file:Common/left.html' => 1,
  ),
),false)) {
function content_5763aefc018053_79673219 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"blog"), 0, false);
?>

</head>
<body>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/loader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="all-elements">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="header">
        <a href="#" class="main-logo"></a>
        <a href="#" class="open-menu"><i class="fa fa-navicon"></i></a>
        <a href="#" class="open-call"><i class="fa fa-phone"></i></a>
        <a href="#" class="open-mail"><i class="fa fa-envelope-o"></i></a>
    </div>

    <a href="#" class="footer-ball"><i class="fa fa-navicon"></i></a>

    <!-- Page Content-->
    <div id="content" class="snap-content">
        <div class="header-clear"></div>
        <div class="content">

            <div class="blog-posts">
                <div class="blog-post">
                    <a class="blog-post-image" href="#"><img src="<?php echo __PUBLIC__;?>
/images/pictures/3ww.jpg" alt="img"></a>
                    <h3 class="blog-post-title">Blog Post Title</h3>
                    <p class="blog-post-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquam est
                        ut volutpat auctor. Suspendisse finibus libero risus, eu vulputate velit
                        tempor et. In eget nunc aliquam, sagittis risus vitae, pharetra enim.
                    </p>
                    <p class="blog-post-date"><i class="fa fa-calendar"></i>20/01/2015</p>
                    <p class="blog-post-more"><a href="#">Read More<i class="fa fa-angle-right"></i></a></p>
                </div>
                <div class="decoration"></div>
                <div class="blog-post">
                    <a class="blog-post-image" href="#"><img src="<?php echo __PUBLIC__;?>
/images/pictures/5ww.jpg" alt="img"></a>
                    <h3 class="blog-post-title">Blog Post Title</h3>
                    <p class="blog-post-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquam est
                        ut volutpat auctor. Suspendisse finibus libero risus, eu vulputate velit
                        tempor et. In eget nunc aliquam, sagittis risus vitae, pharetra enim.
                    </p>
                    <p class="blog-post-date"><i class="fa fa-calendar"></i>20/01/2015</p>
                    <p class="blog-post-more"><a href="#">Read More<i class="fa fa-angle-right"></i></a></p>
                </div>
            </div>
            <div class="blog-sidebar">
                <div class="decoration hide-if-responsive"></div>
                <div class="widget container">
                    <h4>Looking for something?</h4>
                    <p>
                        An input field you can connect to your needs and use as a search field.
                    </p>
                    <input class="blog-search" type="text" value="Search here...">
                </div>
                <div class="decoration"></div>
                <div class="widget container">
                    <h4>Recent Works</h4>
                    <p>
                        You can link this to be a gallery or link it to act like a normal anchor
                        to redirect your users to the specific post you want.
                    </p>
                    <ul class="gallery square-thumb blog-gallery">
                        <li><a href="#"><img src="<?php echo __PUBLIC__;?>
/images/pictures/1s.jpg" alt="img"/></a></li>
                        <li><a href="#"><img src="<?php echo __PUBLIC__;?>
/images/pictures/2s.jpg" alt="img"/></a></li>
                        <li><a href="#"><img src="<?php echo __PUBLIC__;?>
/images/pictures/3s.jpg" alt="img"/></a></li>
                        <li><a href="#"><img src="<?php echo __PUBLIC__;?>
/images/pictures/4s.jpg" alt="img"/></a></li>
                    </ul>
                </div>
                <div class="widget container">
                    <h4>Categories</h4>
                    <p>
                        Your categories styled up to look nice and clean!
                    </p>
                    <div class="one-half">
                        <ul class="blog-category">
                            <li><a href="#"><i class="fa fa-angle-right"></i>Category 1</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Category 2</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Category 3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Category 4</a></li>
                        </ul>
                    </div>
                    <div class="one-half last-column">
                        <ul class="blog-category">
                            <li><a href="#"><i class="fa fa-angle-right"></i>Category 1</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Category 2</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Category 3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Category 4</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
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
