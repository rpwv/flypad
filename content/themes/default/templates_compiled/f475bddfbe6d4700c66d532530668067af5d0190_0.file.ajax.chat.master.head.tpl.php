<?php
/* Smarty version 3.1.31, created on 2018-08-10 16:23:25
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\ajax.chat.master.head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b6dbbfd613856_05337486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f475bddfbe6d4700c66d532530668067af5d0190' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\ajax.chat.master.head.tpl',
      1 => 1501706174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6dbbfd613856_05337486 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['offline']->value) {?>

    <div class="chat-head-title">
        <i class="fa fa-user-secret"></i>
        <?php echo __("Offline");?>

    </div>

<?php } else { ?>

    <div class="chat-head-title">
        <i class="fa fa-circle"></i>
        (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)
    </div>

<?php }
}
}
