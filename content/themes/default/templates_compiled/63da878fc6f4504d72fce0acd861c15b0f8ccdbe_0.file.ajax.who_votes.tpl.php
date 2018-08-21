<?php
/* Smarty version 3.1.31, created on 2018-08-14 16:23:47
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\ajax.who_votes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b730213bdfec0_31581392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63da878fc6f4504d72fce0acd861c15b0f8ccdbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\ajax.who_votes.tpl',
      1 => 1509633276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
  ),
),false)) {
function content_5b730213bdfec0_31581392 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 class="modal-title"><?php echo __("People who voted for this option");?>
</h5>
</div>
<div class="modal-body">
    <?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </ul>

        <?php if (count($_smarty_tpl->tpl_vars['users']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
        <!-- see-more -->
        <div class="alert alert-info see-more js_see-more" data-get="voters" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            <span><?php echo __("See More");?>
</span>
            <div class="loader loader_small x-hidden"></div>
        </div>
        <!-- see-more -->
        <?php }?>
    <?php } else { ?>
        <p class="text-center text-muted">
            <?php echo __("No people voted for this");?>

        </p>
    <?php }?>
    
</div>
<?php }
}
