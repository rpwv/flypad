<?php
/* Smarty version 3.1.31, created on 2018-08-10 17:12:42
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\__feeds_comment.form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b6dc78a646cf6_01860621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aeb05597d2a47aa76667b2ccc17a45baf2240db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\__feeds_comment.form.tpl',
      1 => 1505419484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_emoji-menu.tpl' => 1,
  ),
),false)) {
function content_5b6dc78a646cf6_01860621 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="comment" data-handle="<?php echo $_smarty_tpl->tpl_vars['_handle']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
    <div class="comment-avatar">
        <a class="comment-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
);">
            </a>
    </div>
    <div class="comment-data">
        <div class="x-form comment-form">
            <textarea dir="auto" class="js_autosize js_mention js_post-comment" rows="1" placeholder='<?php echo __("Write a comment");?>
'></textarea>
            <div class="x-form-tools">
                <div class="x-form-tools-post js_post-comment">
                    <i class="fa fa-paper-plane-o"></i>
                </div>
                <div class="x-form-tools-attach">
                    <i class="fa fa-camera js_x-uploader" data-handle="comment"></i>
                </div>
                <div class="x-form-tools-emoji js_emoji-menu-toggle">
                    <i class="fa fa-smile-o fa-lg"></i>
                </div>
                <?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
        <div class="comment-attachments attachments clearfix x-hidden">
            <ul>
                <li class="loading">
                    <div class="loader loader_small"></div>
                </li>
            </ul>
        </div>
    </div>
</div><?php }
}
