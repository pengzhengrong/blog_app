<?php
/* Smarty version 3.1.29, created on 2016-06-07 10:04:09
  from "/home/pzr/workspace/blog_app/Home/View/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57562b991f6f68_75186779',
  'file_dependency' => 
  array (
    'cc29028cf434f8841e016d10216dfa6f99d3bab2' => 
    array (
      0 => '/home/pzr/workspace/blog_app/Home/View/index.html',
      1 => 1465264636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57562b991f6f68_75186779 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//Ddiv XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Ddiv/xhtml1-transitional.ddiv">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color: yellow">
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</body>
<?php echo '<script'; ?>
 type="text/javascript">
	// alert(1);
<?php echo '</script'; ?>
>
</html>
<?php }
}