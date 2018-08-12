<?php
/* Smarty version 3.1.31, created on 2018-08-10 16:22:24
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\sign.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b6dbbc00deb68_57838219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee6dffa0a6ae1b2d358921bbc5d20177b6d006e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\sign.tpl',
      1 => 1501706174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sign_form.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5b6dbbc00deb68_57838219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container mt20">
    <div class="row">
        <!-- sign in/up form -->
        <?php $_smarty_tpl->_subTemplateRender('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- sign in/up form -->
    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
