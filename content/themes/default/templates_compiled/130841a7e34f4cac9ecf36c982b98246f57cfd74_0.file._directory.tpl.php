<?php
/* Smarty version 3.1.31, created on 2018-08-10 16:05:53
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\_directory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b6db7e1c648f6_97388711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '130841a7e34f4cac9ecf36c982b98246f57cfd74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\_directory.tpl',
      1 => 1509825410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6db7e1c648f6_97388711 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="directory-intro">
        <h2><?php echo __("Be Connected");?>
</h2>
        <p class="mt20">
            <?php echo __("Discover new people, create new connections and make new friends");?>

        </p>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/posts" class="panel-directory">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/newsfeed.png">
                <div class="title"><?php echo __("News Feed");?>
</div>
                <p>
                    <?php echo __("See what everyone’s up to and what’s on their minds");?>

                </p>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/users" class="panel-directory">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/users.png">
                <div class="title"><?php echo __("Users");?>
</div>
                <p>
                    <?php echo __("Help friends know you better and show them what you have in common");?>

                </p>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/pages" class="panel-directory">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/pages.png">
                <div class="title"><?php echo __("Pages");?>
</div>
                <p>
                    <?php echo __("Never miss a thing out! Keep in touch with your fans and customers");?>

                </p>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/groups" class="panel-directory">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/groups.png">
                <div class="title"><?php echo __("Groups");?>
</div>
                <p>
                    <?php echo __("Communicate and collaborate with the people who share your interests");?>

                </p>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/events" class="panel-directory">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/events.png">
                <div class="title"><?php echo __("Events");?>
</div>
                <p>
                    <?php echo __("Members can organize community events for online and offline doings");?>

                </p>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory/games" class="panel-directory">
                <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/directory/photos.png">
                <div class="title"><?php echo __("Games");?>
</div>
                <p>
                    <?php echo __("Playing games always fun, Play with the people who share your interests");?>

                </p>
            </a>
        </div>
    </div>
</div><?php }
}
