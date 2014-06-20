<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 10:34:12
         compiled from "../application/admin/views/templates/servicelines/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:2096547574531d47cc701864-56615723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30bc8c44f0ba84af8b0f752b7727bbfb7bcdbe01' => 
    array (
      0 => '../application/admin/views/templates/servicelines/edit.htm',
      1 => 1394427735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096547574531d47cc701864-56615723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'serviceline' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d47cc742796_76512833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d47cc742796_76512833')) {function content_531d47cc742796_76512833($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Edit service line</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmServiceline" action="/admin/servicelines/update/">
                                    <input type="hidden" name="serviceline_id" value="<?php echo $_smarty_tpl->tpl_vars['serviceline']->value->serviceline_id;?>
" />
					<div class="control-group ">
					  <label class="control-label" for="focusedInput">Service Line</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="serviceline" name="serviceline" type="text" value="<?php echo $_smarty_tpl->tpl_vars['serviceline']->value->serviceline;?>
">
					  </div>
					</div>                                   
					

					<div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option <?php if ($_smarty_tpl->tpl_vars['serviceline']->value->status=="Active") {?> selected <?php }?>>Active</option>
						  <option <?php if ($_smarty_tpl->tpl_vars['serviceline']->value->status=="Inactive") {?> selected <?php }?>>Inactive</option>
						</select>
					  </div>
					</div>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Update</button>
					  <a href="/admin/servicelines/"><button type="button" class="btn">Cancel</button></a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() { 

	    $('#frmServiceline').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
                    serviceline: {
			message: 'The service line is not valid',
			validators: {
			    notEmpty: {
				message: 'The service line is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
