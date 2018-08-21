<?php
/* Smarty version 3.1.31, created on 2018-08-14 16:24:07
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\blogs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b730227c01145_08030643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89b2a11a8b82cd7f4eba49fc90d797b10b84f902' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\blogs.tpl',
      1 => 1509949426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 4,
    'file:__feeds_article.tpl' => 1,
    'file:__feeds_post.comments.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5b730227c01145_08030643 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\sngine\\Script\\includes\\libs\\Smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
            <!-- side panel -->
            <div class="col-xs-12 visible-xs-block offcanvas-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <!-- side panel -->

            <!-- content panel -->
            <div class="col-xs-12 offcanvas-mainbar">
                <div class="blogs-wrapper">
                    <h2><?php echo __("Recent");?>
 <b><?php echo __("Articles");?>
</b></h2>
                    <?php if ($_smarty_tpl->tpl_vars['articles']->value) {?>
                        <ul class="row">
                            <!-- articles -->
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_0_saved = $_smarty_tpl->tpl_vars['article'];
?>
                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_iteration'=>$_smarty_tpl->tpl_vars['article']->iteration), 0, true);
?>

                            <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <!-- articles -->
                        </ul>

                        <!-- see-more -->
                        <div class="alert alert-post see-more js_see-more" data-get="articles">
                            <span><?php echo __("More Articles");?>
</span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                        <!-- see-more -->
                    <?php } else { ?>
                        <!-- no articles -->
                        <div class="text-center x-muted">
                            <i class="fa fa-newspaper-o fa-4x"></i>
                            <p class="mb10"><strong><?php echo __("No articles to show");?>
</strong></p>
                        </div>
                        <!-- no articles -->
                    <?php }?>
                </div>
            </div>
            <!-- content panel -->
        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "article") {?>
            <!-- side panel -->
            <div class="col-xs-12 visible-xs-block offcanvas-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </div>
            <!-- side panel -->

            <!-- content panel -->
            <div class="col-xs-12 offcanvas-mainbar">
                <div class="row">
                    <!-- left panel -->
                    <div class="col-md-8 mb20">
                        <div class="article-wrapper">
                            <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</h3>
                            
                            <div class="mb20">
                                <div class="post-avatar">
                                    <a class="post-avatar-picture rounded" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_picture'];?>
);">
                                    </a>
                                </div>
                                <div class="post-meta">
                                    <div class="pull-right flip">
                                        <?php if ($_smarty_tpl->tpl_vars['article']->value['manage_post']) {?>
                                            <a class="article-meta-counter" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/edit/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                                                <i class="fa fa-pencil-square-o fa-fw"></i> <?php echo __("Edit");?>

                                            </a>
                                        <?php }?>
                                        <a class="article-meta-counter" href="#article-comments">
                                            <i class="fa fa-comments-o fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['article']->value['comments'];?>

                                        </a>
                                        <div class="article-meta-counter" data-toggle="modal" data-url="posts/who_likes.php?post_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                                            <i class="fa fa-thumbs-o-up fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['article']->value['likes'];?>

                                        </div>
                                        <div class="article-meta-counter">
                                            <i class="fa fa-eye fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['article']->value['article']['views'];?>

                                        </div>
                                    </div>
                                    <div>
                                        <!-- post author name -->
                                        <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_id'];?>
">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>
</a>
                                        </span>
                                        <?php if ($_smarty_tpl->tpl_vars['article']->value['post_author_verified']) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['article']->value['user_type'] == "user") {?>
                                            <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                                            <?php } else { ?>
                                            <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                                            <?php }?>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['article']->value['user_subscribed']) {?>
                                        <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Pro User");?>
' class="fa fa-bolt fa-fw pro-badge"></i>
                                        <?php }?>
                                        <!-- post author name -->
                                    </div>
                                    <div class="post-time">
                                        <?php echo __("Posted");?>
 <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb20">
                                <a href="https://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-social-icon btn-facebook" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-social-icon btn-twitter" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-social-icon btn-google" target="_blank">
                                    <i class="fa fa-google"></i>
                                </a>
                                <a href="http://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-social-icon btn-vk" target="_blank">
                                    <i class="fa fa-vk"></i>
                                </a>
                                <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-social-icon btn-linkedin" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="http://www.tumblr.com/share/link?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-social-icon btn-tumblr" target="_blank">
                                    <i class="fa fa-tumblr"></i>
                                </a>
                                <a href="http://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-social-icon btn-reddit" target="_blank">
                                    <i class="fa fa-reddit"></i>
                                </a>
                                <a href="http://pinterest.com/pin/create/button/?url=http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-social-icon btn-pinterest" target="_blank">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a href="http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="btn btn-sm btn-social-icon btn-odnoklassniki" target="_blank">
                                    <i class="fa fa-odnoklassniki"></i>
                                </a>
                            </div>

                            <div class="article-text">
                                <?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_text'];?>

                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['article']->value['article']['parsed_tags']) {?>
                                <div class="article-tags">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value['article']['parsed_tags'], 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                            <li>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/hashtag/<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</a>
                                            </li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                            <?php }?>
                        </div>
                        <!-- post footer -->
                        <div class="post-footer" id="article-comments">
                            <!-- comments -->
                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['article']->value), 0, false);
?>

                            <!-- comments -->
                        </div>
                        <!-- post footer -->
                    </div>
                    <!-- left panel -->

                    <!-- right panel -->
                    <div class="col-md-4">
                        <div class="articles-widget-header">
                            <div class="articles-widget-title"><?php echo __("Read More");?>
</div>
                        </div>
                        <!-- articles -->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->iteration++;
$__foreach_article_2_saved = $_smarty_tpl->tpl_vars['article'];
?>
                            <div class="post-media list">
                                <a class="post-media-image" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
">
                                    <div style="padding-top: 50%; background-image:url('<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
');"></div>
                                </a>
                                <div class="post-media-meta">
                                    <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</a>
                                    <div class="text mb5"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['text_snippet'],100);?>
</div>
                                    <div class="info">
                                        <?php echo __("By");?>
 
                                        <span class="js_user-popover pr10" data-type="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_id'];?>
">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>
</a>
                                        </span>
                                        <i class="fa fa-clock-o pr5"></i><span class="js_moment pr10" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span>
                                        <i class="fa fa-comments-o pr5"></i><span class="pr10"><?php echo $_smarty_tpl->tpl_vars['article']->value['comments'];?>
</span>
                                        <i class="fa fa-eye pr5"></i><span class="pr10"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['views'];?>
</span>
                                    </div>
                                </div>
                            </div>
                        <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        <!-- articles -->
                    </div>
                    <!-- right panel -->
                </div>
            </div>
            <!-- content panel -->
        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "edit") {?>
            <!-- side panel -->
            <div class="col-sm-4 col-md-2 offcanvas-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </div>
            <!-- side panel -->

            <!-- content panel -->
            <div class="col-sm-8 col-md-10 offcanvas-mainbar">
                <!-- content -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="mt5">
                            <strong><?php echo __("Edit Article");?>
</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="js_ajax-forms form-horizontal" data-url="posts/article.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
                            <div class="form-group">
                                <label class="col-md-2 control-label">
                                    <?php echo __("Title");?>

                                </label>
                                <div class="col-md-10">
                                    <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">
                                    <?php echo __("Content");?>

                                </label>
                                <div class="col-md-10">
                                    <textarea name="text" class="form-control js_wysiwyg"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['text'];?>
</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">
                                    <?php echo __("Cover");?>

                                </label>
                                <div class="col-md-10">
                                    <?php if ($_smarty_tpl->tpl_vars['article']->value['article']['cover'] == '') {?>
                                        <div class="x-image">
                                            <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                                <span>×</span>
                                            </button>
                                            <div class="loader loader_small x-hidden"></div>
                                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                            <input type="hidden" class="js_x-image-input" name="cover" value="">
                                        </div>
                                    <?php } else { ?>
                                        <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['cover'];?>
')">
                                            <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                                <span>×</span>
                                            </button>
                                            <div class="loader loader_small x-hidden"></div>
                                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                            <input type="hidden" class="js_x-image-input" name="cover" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['cover'];?>
">
                                        </div>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">
                                    <?php echo __("Tags");?>

                                </label>
                                <div class="col-md-10">
                                    <input class="form-control" name="tags" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['tags'];?>
">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary"><?php echo __("Publish");?>
</button>
                                </div>
                            </div>
                            
                            <!-- error -->
                            <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                            <!-- error -->

                        </form>
                    </div>
                </div>
                <!-- content -->
            </div>
            <!-- content panel -->
        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "new") {?>
            <!-- side panel -->
            <div class="col-sm-4 col-md-2 offcanvas-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </div>
            <!-- side panel -->

            <!-- content panel -->
            <div class="col-sm-8 col-md-10 offcanvas-mainbar">
                <!-- content -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="mt5">
                            <strong><?php echo __("Write New Article");?>
</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="js_ajax-forms form-horizontal" data-url="posts/article.php?do=create">
                            <div class="form-group">
                                <label class="col-md-2 control-label">
                                    <?php echo __("Title");?>

                                </label>
                                <div class="col-md-10">
                                    <input class="form-control" name="title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">
                                    <?php echo __("Content");?>

                                </label>
                                <div class="col-md-10">
                                    <textarea name="text" class="form-control js_wysiwyg"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">
                                    <?php echo __("Cover");?>

                                </label>
                                <div class="col-md-10">
                                    <div class="x-image">
                                        <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                            <span>×</span>
                                        </button>
                                        <div class="loader loader_small x-hidden"></div>
                                        <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                        <input type="hidden" class="js_x-image-input" name="cover">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">
                                    <?php echo __("Tags");?>

                                </label>
                                <div class="col-md-10">
                                    <input class="form-control" name="tags">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary"><?php echo __("Publish");?>
</button>
                                </div>
                            </div>
                            
                            <!-- error -->
                            <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                            <!-- error -->

                        </form>
                    </div>
                </div>
                <!-- content -->
            </div>
            <!-- content panel -->
        <?php }?>
    </div>


</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
