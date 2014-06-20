<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 10:34:00
         compiled from "../application/admin/views/templates/categories/add.htm" */ ?>
<?php /*%%SmartyHeaderCode:121860074531d47c008e2e7-18229171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b3d3c62e7f636c17273e4bf4c4c5400b4759c81' => 
    array (
      0 => '../application/admin/views/templates/categories/add.htm',
      1 => 1394427804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121860074531d47c008e2e7-18229171',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d47c0097634_46597209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d47c0097634_46597209')) {function content_531d47c0097634_46597209($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new category</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmCategories" action="/admin/categories/add/">
					<div class="control-group ">
					  <label class="control-label" for="focusedInput">Category Title</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="category_title" name="category_title" type="text" value="">
					  </div>
					</div>

					<div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option value="Active">Active</option>
						  <option value="Inactive">Inactive</option>
						</select>
					  </div>
					</div>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Save</button>
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
