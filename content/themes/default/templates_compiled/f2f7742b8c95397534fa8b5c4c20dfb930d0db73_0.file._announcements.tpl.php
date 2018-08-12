<?php
/* Smarty version 3.1.31, created on 2018-08-10 16:30:47
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\_announcements.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b6dbdb7dd8db1_54550432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2f7742b8c95397534fa8b5c4c20dfb930d0db73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\_announcements.tpl',
      1 => 1501706174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6dbdb7dd8db1_54550432 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['announcement']->value['type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['announcement_id'];?>
">
		<button type="button" class="close pull-right flip js_announcment-remover"><span>&times;</span></button>
		<?php if ($_smarty_tpl->tpl_vars['announcement']->value['title']) {?><div class="title"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</div><?php }?>
		<?php echo $_smarty_tpl->tpl_vars['announcement']->value['code'];?>

	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
