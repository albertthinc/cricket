<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 10:34:04
         compiled from "../application/admin/views/templates/languages/add.htm" */ ?>
<?php /*%%SmartyHeaderCode:1251220059531d47c4d569b2-55463200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd334ee804560cecb17228402f6762cc999cbe98' => 
    array (
      0 => '../application/admin/views/templates/languages/add.htm',
      1 => 1394427775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1251220059531d47c4d569b2-55463200',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d47c4d652e2_98048994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d47c4d652e2_98048994')) {function content_531d47c4d652e2_98048994($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new language</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmLanguages" action="/admin/languages/add/">
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Language</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="language" name="language" type="text" value="">
					  </div>
					</div>
                                    
					<div class="control-group ">
					  <label class="control-label" for="focusedInput">Language Code</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="language_code" name="language_code" type="text" value="">
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
					  <a href="/admin/languages/"><button type="button" class="btn">Cancel</button></a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() { 

	    $('#frmLanguages').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
                    language: {
			message: 'The langauge is not valid',
			validators: {
			    notEmpty: {
				message: 'The language is required and can\'t be empty'
			    }
			}
		    },
		    language_code: {
			message: 'The langauge code is not valid',
			validators: {
			    notEmpty: {
				message: 'The language code is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
