<?php
/* Smarty version 3.1.29, created on 2016-06-17 19:18:09
  from "/home/pzr/workspace/blog_app/Home/View/page_blog.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5763dc7113c3b2_66203548',
  'file_dependency' => 
  array (
    'f120a233405b7924ce2ae20ac093f0be8deaef98' => 
    array (
      0 => '/home/pzr/workspace/blog_app/Home/View/page_blog.html',
      1 => 1466162286,
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
function content_5763dc7113c3b2_66203548 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home/pzr/workspace/blog_app/Think/Core/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/pzr/workspace/blog_app/Think/Core/Smarty/plugins/modifier.date_format.php';
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
            <?php
$_from = $_smarty_tpl->tpl_vars['rest']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                <div class="blog-post">
                    <!-- <a class="blog-post-image" href="#"><img src="<?php echo __PUBLIC__;?>
/images/pictures/3ww.jpg" alt="img"></a> -->
                    <h3 class="blog-post-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</h3>
                    <p class="blog-post-text">
                       <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['v']->value['content']),80,'...',true);?>

                    </p>
                    <p class="blog-post-date"><i class="fa fa-calendar"></i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['created'],"
%m/%d/%G %T");?>
</p>
                    <p class="blog-post-more"><a href="#">Read More<i class="fa fa-angle-right"></i></a></p>
                </div>
                <div class="decoration"></div>
            <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
            </div>
<?php echo $_smarty_tpl->tpl_vars['show']->value;?>

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
               <!--  <div class="widget container">
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
                </div> -->
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
