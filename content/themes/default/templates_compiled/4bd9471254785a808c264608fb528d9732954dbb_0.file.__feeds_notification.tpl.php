<?php
/* Smarty version 3.1.31, created on 2018-08-25 16:15:01
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\__feeds_notification.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b818085246d84_81254624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bd9471254785a808c264608fb528d9732954dbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\__feeds_notification.tpl',
      1 => 1501706174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b818085246d84_81254624 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="feeds-item <?php if (!$_smarty_tpl->tpl_vars['notification']->value['seen']) {?>unread<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['notification']->value['notification_id'];?>
">
    <a class="data-container" href="<?php echo $_smarty_tpl->tpl_vars['notification']->value['url'];?>
">
        <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['notification']->value['user_picture'];?>
" alt="">
        <div class="data-content">
            <div><span class="name"><?php echo $_smarty_tpl->tpl_vars['notification']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['notification']->value['user_lastname'];?>
</span></div>
            <div><i class="fa <?php echo $_smarty_tpl->tpl_vars['notification']->value['icon'];?>
 pr5"></i> <?php echo $_smarty_tpl->tpl_vars['notification']->value['message'];?>
</div>
            <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['notification']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['notification']->value['time'];?>
</div>
        </div>
    </a>
</li><?php }
}
