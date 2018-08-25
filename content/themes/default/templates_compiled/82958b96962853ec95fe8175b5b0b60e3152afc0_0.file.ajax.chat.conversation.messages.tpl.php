<?php
/* Smarty version 3.1.31, created on 2018-08-25 16:17:40
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\ajax.chat.conversation.messages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b81812475e588_68322894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82958b96962853ec95fe8175b5b0b60e3152afc0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\ajax.chat.conversation.messages.tpl',
      1 => 1501706174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.chat.messages.tpl' => 1,
  ),
),false)) {
function content_5b81812475e588_68322894 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['conversation']->value['total_messages'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
<!-- see-more -->
<div class="alert alert-post see-more small js_see-more" data-id=<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
  data-get="messages">
    <span><?php echo __("Loading Older Messages");?>
</span>
    <div class="loader loader_small x-hidden"></div>
</div>
<!-- see-more -->
<?php }?>

<ul>
    <?php $_smarty_tpl->_subTemplateRender('file:ajax.chat.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('messages'=>$_smarty_tpl->tpl_vars['conversation']->value['messages']), 0, false);
?>

</ul><?php }
}
