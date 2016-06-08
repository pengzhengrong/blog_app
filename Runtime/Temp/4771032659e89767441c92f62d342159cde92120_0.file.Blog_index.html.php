<?php
/* Smarty version 3.1.29, created on 2016-06-08 11:29:48
  from "/home/pzr/workspace/blog_app/Home/View/Blog_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5757912ce7f8f8_78949668',
  'file_dependency' => 
  array (
    '4771032659e89767441c92f62d342159cde92120' => 
    array (
      0 => '/home/pzr/workspace/blog_app/Home/View/Blog_index.html',
      1 => 1465356587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5757912ce7f8f8_78949668 ($_smarty_tpl) {
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
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<table>
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
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
<?php $_smarty_tpl->tpl_vars["vars"] = new Smarty_Variable(array(('id-').($_smarty_tpl->tpl_vars['v']->value['id'])), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "vars", 0);?>
<!-- <td><a href="<?php echo U(array('url'=>'/Blog/index/p/2'),$_smarty_tpl);?>
">EDIT</a></td> --><!--  $vars=array('id'=>$v['id'])} -->

<td><a href="<?php echo U(array('url'=>(MODULE_NAME).('/Blog/index'),'vars'=>$_smarty_tpl->tpl_vars['vars']->value),$_smarty_tpl);?>
">EDIT</a></td>
<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
</tr>
</table>

</body>
<?php echo '<script'; ?>
 type="text/javascript">
	// alert(1);
<?php echo '</script'; ?>
>
</html>
<?php }
}
