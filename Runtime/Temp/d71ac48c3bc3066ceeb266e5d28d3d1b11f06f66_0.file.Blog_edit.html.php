<?php
/* Smarty version 3.1.29, created on 2016-06-15 17:24:44
  from "/home/pzr/workspace/blog_app/Home/View/Blog_edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57611edc3e1675_24757721',
  'file_dependency' => 
  array (
    'd71ac48c3bc3066ceeb266e5d28d3d1b11f06f66' => 
    array (
      0 => '/home/pzr/workspace/blog_app/Home/View/Blog_edit.html',
      1 => 1465975220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57611edc3e1675_24757721 ($_smarty_tpl) {
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
	<table>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['rest']->value['id'];?>
</td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['rest']->value['title'];?>
</td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['rest']->value['content'];?>
</td>
		</tr>
		<tr>
			<td><a href="<?php echo U(array('url'=>(MODULE_NAME).('/Blog/edit'),'vars'=>('/id/').($_smarty_tpl->tpl_vars['rest']->value['id'])),$_smarty_tpl);?>
">EDIT</a></td>
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
