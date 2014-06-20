<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 10:34:07
         compiled from "../application/admin/views/templates/languages/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:2007081332531d47c7d49076-97663962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7bc6e40934fd644201ff8c694259b77eaf9920a' => 
    array (
      0 => '../application/admin/views/templates/languages/edit.htm',
      1 => 1394427769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2007081332531d47c7d49076-97663962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d47c7d7d266_46798787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d47c7d7d266_46798787')) {function content_531d47c7d7d266_46798787($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Edit language</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmLanguages" action="/admin/languages/update/">
                                    <input type="hidden" name="language_id" value="<?php echo $_smarty_tpl->tpl_vars['language']->value->language_id;?>
" />
					<div class="control-group ">
					  <label class="control-label" for="focusedInput">Language</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="language" name="language" type="text" value="<?php echo $_smarty_tpl->tpl_vars['language']->value->language;?>
">
					  </div>
					</div>
                                    
					<div class="control-group ">
					  <label class="control-label" for="focusedInput">Language Code</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="language_code" name="language_code" type="text" value="<?php echo $_smarty_tpl->tpl_vars['language']->value->language_code;?>
">
					  </div>
					</div>

					<div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option <?php if ($_smarty_tpl->tpl_vars['language']->value->status=="Active") {?> selected <?php }?>>Active</option>
						  <option <?php if ($_smarty_tpl->tpl_vars['language']->value->status=="Inactive") {?> selected <?php }?>>Inactive</option>
						</select>
					  </div>
					</div>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Update</button>
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
