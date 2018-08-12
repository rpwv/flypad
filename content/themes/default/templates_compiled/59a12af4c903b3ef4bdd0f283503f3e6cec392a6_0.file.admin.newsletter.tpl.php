<?php
/* Smarty version 3.1.31, created on 2018-08-11 08:05:20
  from "C:\xampp\htdocs\sngine\Script\content\themes\default\templates\admin.newsletter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b6e98c06f2f99_76814787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59a12af4c903b3ef4bdd0f283503f3e6cec392a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngine\\Script\\content\\themes\\default\\templates\\admin.newsletter.tpl',
      1 => 1506460028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6e98c06f2f99_76814787 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-paper-plane-o pr5 panel-icon"></i>
        <strong><?php echo __("Newsletter");?>
</strong>
    </div>
    <div class="panel-body">

        <!-- Newsletter -->
        <form class="js_ajax-forms form-horizontal" data-url="admin/newsletter.php">

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Subject");?>

                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="subject">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Message");?>

                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="10" name="message"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Is HTML");?>

                </label>
                <div class="col-sm-9">
                    <label class="switch" for="is_html">
                        <input type="checkbox" name="is_html" id="is_html">
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("The message will be sent as HTML instead of plain text");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Send to");?>

                </label>
                <div class="col-sm-9">
                    <select class="form-control" name="to">
                        <option value="all"><?php echo __("All Users");?>
</option>
                        <option value="active"><?php echo __("Active Users");?>
</option>
                        <option value="inactive"><?php echo __("Inactive Users");?>
</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                    <?php echo __("Test Message");?>

                </label>
                <div class="col-sm-9">
                    <label class="switch" for="is_test">
                        <input type="checkbox" name="is_test" id="is_test">
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("The message will sent to Website Email only");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary"><?php echo __("Send");?>
</button>
                </div>
            </div>

            <!-- success -->
            <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
            <!-- error -->

        </form>
        <!-- Newsletter -->
        
    </div>
</div><?php }
}
