<?php
/* Smarty version 3.1.31, created on 2018-08-25 16:17:38
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\__feeds_conversation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b818122e12009_64728201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d9dffe0e1303a208742a20b7f2a0d70adf06d1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\__feeds_conversation.tpl',
      1 => 1509980352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b818122e12009_64728201 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="feeds-item <?php if (!$_smarty_tpl->tpl_vars['conversation']->value['seen']) {?>unread<?php }?>" data-last-message="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['last_message_id'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['conversation']->value['multiple_recipients']) {?>
        <a class="data-container js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['ids'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture_left'];?>
" data-multiple="true" data-cid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
"  data-name-list="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_list'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
">
            <div class="data-avatar">
                <div class="left-avatar" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture_left'];?>
')"></div>
                <div class="right-avatar" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture_right'];?>
')"></div>
            </div>
            <div class="data-content">
                <?php if ($_smarty_tpl->tpl_vars['conversation']->value['image'] != '') {?>
                    <div class="pull-right flip">
                        <img class="data-img" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['conversation']->value['image'];?>
" alt="">
                    </div>
                <?php }?>
                <div><span class="name"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
</span></div>
                <div class="text">
                    <?php if ($_smarty_tpl->tpl_vars['conversation']->value['message'] != '') {?>
                        <?php echo $_smarty_tpl->tpl_vars['conversation']->value['message_orginal'];?>

                    <?php } else { ?>
                        <i class="fa fa-picture-o"></i> <?php echo __("photo");?>

                    <?php }?>
                </div>
                <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['time'];?>
</div>
            </div>
        </a>
    <?php } else { ?>
        <a class="data-container js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['ids'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture'];?>
" data-multiple="false" data-cid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
" data-name-list="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_list'];?>
"  href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
">
            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture'];?>
" alt="">
            <div class="data-content">
                <?php if ($_smarty_tpl->tpl_vars['conversation']->value['image'] != '') {?>
                    <div class="pull-right flip">
                        <img class="data-img" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['conversation']->value['image'];?>
" alt="">
                    </div>
                <?php }?>
                <div><span class="name"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
</span></div>
                <div class="text">
                    <?php if ($_smarty_tpl->tpl_vars['conversation']->value['message'] != '') {?>
                        <?php echo $_smarty_tpl->tpl_vars['conversation']->value['message_orginal'];?>

                    <?php } else { ?>
                        <i class="fa fa-picture-o"></i> <?php echo __("photo");?>

                    <?php }?>
                </div>
                <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['time'];?>
</div>
            </div>
        </a>
    <?php }?>
</li><?php }
}
