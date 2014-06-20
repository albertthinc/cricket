<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 10:34:10
         compiled from "../application/admin/views/templates/servicelines/add.htm" */ ?>
<?php /*%%SmartyHeaderCode:974124686531d47ca857de0-26115760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85d7d55f6c4a9bdd64f81b58163452c8eeef6e62' => 
    array (
      0 => '../application/admin/views/templates/servicelines/add.htm',
      1 => 1394427726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '974124686531d47ca857de0-26115760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d47ca863151_81602945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d47ca863151_81602945')) {function content_531d47ca863151_81602945($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new service line</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmServicelines" action="/admin/servicelines/add/">
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Service Line</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="serviceline" name="serviceline" type="text" value="">
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
					  <a href="/admin/servicelines/"><button type="button" class="btn">Cancel</button></a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() { 

	    $('#frmServicelines').bootstrapValidator({
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
