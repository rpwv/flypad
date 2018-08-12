<?php
/* Smarty version 3.1.31, created on 2018-08-10 16:53:18
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\ajax.posts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b6dc2feae0c19_73428956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03a57a71f7ff0a5a36f2dff5038378f96b032bac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\ajax.posts.tpl',
      1 => 1501706174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 2,
  ),
),false)) {
function content_5b6dc2feae0c19_73428956 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_get']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
			<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		</ul>

		<!-- see-more -->
		<div class="alert alert-post see-more js_see-more <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>js_see-more-infinite<?php }?>" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-filter="<?php echo $_smarty_tpl->tpl_vars['_filter']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"<?php }?>>
			<span><?php echo __("More Stories");?>
</span>
			<div class="loader loader_small x-hidden"></div>
		</div>
		<!-- see-more -->
	<?php } else { ?>
		<div class="text-center x-muted">
			<i class="fa fa-newspaper-o fa-4x"></i>
			<p class="mb10"><strong><?php echo __("No posts to show");?>
</strong></p>
		</div>
	<?php }
} else { ?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
	<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }
}
}
