<?php /* Smarty version Smarty-3.1.16, created on 2014-04-09 18:53:11
         compiled from "..\application\admin\views\templates\content\pages\edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:12144534549bf171051-84405848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfae7201b78eb77ca11a8a2effaee8e751084500' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\content\\pages\\edit.htm',
      1 => 1396535462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12144534549bf171051-84405848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'parent_pages' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_534549bf1cf034_28781802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534549bf1cf034_28781802')) {function content_534549bf1cf034_28781802($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\function.html_options.php';
?><div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Edit Page</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <form class="form-horizontal" method="post" id="frmPages" action="/admin/content/pages/update/" enctype="multipart/form-data">
                    <input type="hidden" name="page_id" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->page_id;?>
" />
                    
                    <div class="control-group">
                        <label class="control-label" for="selectError">Parent page</label>
                        <div class="controls form-group">
                            <select class="form-control chzn-select span4" name="parent_id">
                                <option value="0">No Parent</option>
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['parent_pages']->value,'selected'=>$_smarty_tpl->tpl_vars['page']->value->parent_id),$_smarty_tpl);?>

                            </select>
                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label" for="focusedInput">Title</label>
                        <div class="controls form-group">
                            <input class="input-xlarge focused" id="title" name="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
">
                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label" for="focusedInput">Alias</label>
                        <div class="controls form-group">
                            <input class="input-xlarge focused" id="alias" name="alias" type="text" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->alias;?>
">
                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label" for="focusedInput">Meta Keywords</label>
                        <div class="controls form-group">
                            <textarea class="input-xlarge focused" style="width: 600px; height: 150px;" name="meta_keywords" id="meta_keywords"><?php echo $_smarty_tpl->tpl_vars['page']->value->meta_keywords;?>
</textarea>
                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label" for="focusedInput">Meta Description</label>
                        <div class="controls form-group">
                            <textarea class="input-xlarge focused" style="width: 600px; height: 150px;" name="meta_description" id="meta_description"><?php echo $_smarty_tpl->tpl_vars['page']->value->meta_description;?>
</textarea>
                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label" for="focusedInput">Header 1</label>
                        <div class="controls form-group">
                            <input class="input-xlarge focused" id="header1" name="header1" type="text" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->header1;?>
">
                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label" for="focusedInput">Header 2</label>
                        <div class="controls form-group">
                            <input class="input-xlarge focused" id="header2" name="header2" type="text" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->header2;?>
">
                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label" for="focusedInput">Page Content</label>
                        <div class="controls form-group">
                            <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="content" id="content"><?php echo $_smarty_tpl->tpl_vars['page']->value->content;?>
</textarea>
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label" for="selectError">Is External Link?</label>
                        <div class="controls form-group">
                            <select id="is_external_link" name="is_external_link" class="input-xlarge">
                                <option value="No" <?php if ($_smarty_tpl->tpl_vars['page']->value->is_external_link=="No") {?> selected="selected" <?php }?>>No</option>
                                <option value="Yes" <?php if ($_smarty_tpl->tpl_vars['page']->value->is_external_link=="Yes") {?> selected="selected" <?php }?>>  Yes</option>                                
                            </select>
                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label" for="focusedInput">Link</label>
                        <div class="controls form-group">
                            <input class="input-xlarge focused" id="link" name="link" type="text" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->link;?>
">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="selectError">Open in?</label>
                        <div class="controls form-group">
                            <select id="target" name="target" class="input-xlarge">
                                <option value="No" <?php if ($_smarty_tpl->tpl_vars['page']->value->target=="No") {?> selected="selected" <?php }?>>Same Window</option>
                                <option value="Yes" <?php if ($_smarty_tpl->tpl_vars['page']->value->target=="Yes") {?> selected="selected" <?php }?>>New Window</option>
                                
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="selectError">Status</label>
                        <div class="controls form-group">
                            <select id="status" name="status" class="input-xlarge">
                                <option value="Publish" <?php if ($_smarty_tpl->tpl_vars['page']->value->status=="Publish") {?> selected="selected" <?php }?>>Published</option>
                                <option value="Unpublish" <?php if ($_smarty_tpl->tpl_vars['page']->value->status=="Unpublish") {?> selected="selected" <?php }?>>Un-publish</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="/admin/content/pages/"><button type="button" class="btn">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen" />
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/bootstrap-wysihtml5.js" type="text/javascript"></script>


<script type="text/javascript">
    $(document).ready(function() { 
        $('.textarea').wysihtml5();
            
        $('#frmPages').bootstrapValidator({
            message: 'This value is not valid',
            fields: {
                title: {
                    message: 'The title is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The title is required and can\'t be empty'
                        }
                    }
                },
                alias: {
                    message: 'The alias is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The alias is required and can\'t be empty'
                        }
                    }
                }
            }
        });
    });
</script><?php }} ?>
