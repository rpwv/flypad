<?php
/* Smarty version 3.1.31, created on 2018-08-10 16:23:25
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\ajax.chat.master.content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b6dbbfd754974_91343639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4c8ed984b92c66ce8c2d8aa70e746318876be63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\ajax.chat.master.content.tpl',
      1 => 1501706174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6dbbfd754974_91343639 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['online_friends']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
    <li class="feeds-item">
        <div class="data-container clickable small js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
">
            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
">
            <div class="data-content">
                <div class="pull-right flip">
                    <i class="fa fa-circle"></i>
                </div>
                <div><strong><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
</strong></div>
            </div>
        </div>
    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</ul><?php }
}
