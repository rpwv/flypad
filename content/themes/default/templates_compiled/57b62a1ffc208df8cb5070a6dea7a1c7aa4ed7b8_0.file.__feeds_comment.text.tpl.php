<?php
/* Smarty version 3.1.31, created on 2018-08-11 05:37:06
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\__feeds_comment.text.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b6e7602196618_96963038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57b62a1ffc208df8cb5070a6dea7a1c7aa4ed7b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\__feeds_comment.text.tpl',
      1 => 1505419484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6e7602196618_96963038 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="comment-replace">
    <div class="comment-text js_readmore" dir="auto"><?php echo $_smarty_tpl->tpl_vars['_comment']->value['text'];?>
</div>
    <div class="comment-text-plain hidden"><?php echo $_smarty_tpl->tpl_vars['_comment']->value['text_plain'];?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['_comment']->value['image'] != '') {?>
        <span class="text-link js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_comment']->value['image'];?>
">
            <img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_comment']->value['image'];?>
">
        </span>
    <?php }?>
</div>
<?php }
}
