<?php /* Smarty version Smarty-3.1.16, created on 2014-03-05 14:02:45
         compiled from "../application/admin/views/templates/categories/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:6843215335316e12d7146f4-97206966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '502b429529858b55afdab5b789008eda3f523ba2' => 
    array (
      0 => '../application/admin/views/templates/categories/edit.htm',
      1 => 1393320631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6843215335316e12d7146f4-97206966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5316e12d761ac5_28837829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5316e12d761ac5_28837829')) {function content_5316e12d761ac5_28837829($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Categories - Update</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmCategories" action="/admin/categories/update/">
                                    <input type="hidden" name="category_id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->category_id;?>
" />
					<div class="control-group ">
					  <label class="control-label" for="focusedInput">Category Title</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="category_title" name="category_title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->category_title;?>
">
					  </div>
					</div>

					<div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option <?php if ($_smarty_tpl->tpl_vars['category']->value->status=="Active") {?> selected <?php }?>>Active</option>
						  <option <?php if ($_smarty_tpl->tpl_vars['category']->value->status=="Inactive") {?> selected <?php }?>>Inactive</option>
						</select>
					  </div>
					</div>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Update</button>
					  <a href="/admin/categories/"><button type="button" class="btn">Cancel</button></a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() { 

	    $('#frmCategories').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
		    category_title: {
			message: 'The category title is not valid',
			validators: {
			    notEmpty: {
				message: 'The category title is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
