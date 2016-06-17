<?php
/* Smarty version 3.1.29, created on 2016-06-16 16:09:02
  from "/home/pzr/workspace/blog_app/Home/View/Blog_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57625e9e1c6019_20567094',
  'file_dependency' => 
  array (
    '4771032659e89767441c92f62d342159cde92120' => 
    array (
      0 => '/home/pzr/workspace/blog_app/Home/View/Blog_index.html',
      1 => 1466064518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57625e9e1c6019_20567094 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//Ddiv XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Ddiv/xhtml1-transitional.ddiv">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color: gray">

<div class="category">
	<?php
$_from = $_smarty_tpl->tpl_vars['cates']->value;
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
		<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

	<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
</div>

<!-- <table>
<?php
$_from = $_smarty_tpl->tpl_vars['rest']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>

<td><a href="<?php echo U(array('url'=>(MODULE_NAME).('/Blog/edit'),'vars'=>('/id/').($_smarty_tpl->tpl_vars['v']->value['id'])),$_smarty_tpl);?>
">EDIT</a></td>
<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
?>
</tr>
</table> -->

</body>
<?php echo '<script'; ?>
 type="text/javascript">
	// alert(1);
<?php echo '</script'; ?>
>
</html>
<?php }
}
