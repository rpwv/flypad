<?php
/* Smarty version 3.1.31, created on 2018-08-24 04:23:52
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\ajax.lightbox.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b7f8858cea902_49873388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac54e7fc44756356a25b9225a86989e57e684ba6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\ajax.lightbox.tpl',
      1 => 1509636698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post_photo.tpl' => 1,
  ),
),false)) {
function content_5b7f8858cea902_49873388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('post', $_smarty_tpl->tpl_vars['photo']->value['post']);
?>

<div class="lightbox-post" data-id="<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {
echo $_smarty_tpl->tpl_vars['post']->value['post_id'];
} else {
echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];
}?>">
	<div class="js_scroller js_scroller-lightbox" data-slimScroll-height="100%">

        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_lightbox'=>true), 0, false);
?>


	</div>
</div><?php }
}
