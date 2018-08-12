<?php
/* Smarty version 3.1.31, created on 2018-08-10 16:13:32
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\_widget.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b6db9ac5a1254_50219792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9efb11d532a592f8ecf7d0b83e7507a1b6d1b5f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\_widget.tpl',
      1 => 1501706174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6db9ac5a1254_50219792 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgets']->value) {?>
<!-- Widgets -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
?>
	<div class="panel panel-default panel-widget">
	    <div class="panel-heading">
	        <strong><?php echo $_smarty_tpl->tpl_vars['widget']->value['title'];?>
</strong>
	    </div>
	    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['widget']->value['code'];?>
</div>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<!-- Widgets -->
<?php }
}
}
