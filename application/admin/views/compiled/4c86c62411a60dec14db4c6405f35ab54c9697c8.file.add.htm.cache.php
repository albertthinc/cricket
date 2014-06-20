<?php /* Smarty version Smarty-3.1.16, created on 2014-03-17 17:58:09
         compiled from "..\application\admin\views\templates\match_types\add.htm" */ ?>
<?php /*%%SmartyHeaderCode:181495326ea59b03828-40691614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c86c62411a60dec14db4c6405f35ab54c9697c8' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\match_types\\add.htm',
      1 => 1394694570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181495326ea59b03828-40691614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'team_types' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5326ea59b18713_73988344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326ea59b18713_73988344')) {function content_5326ea59b18713_73988344($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\function.html_options.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new match type</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmMatchTypes" action="/admin/match_types/add/">
                                        <div class="control-group">
                                            <label class="control-label" for="selectError">Team Type</label>
                                            <div class="controls form-group">
                                                <select class="form-control chzn-select span4" name="team_type_id">
                                                    <option value="">Select</option>
                                                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['team_types']->value),$_smarty_tpl);?>

                                                </select>
                                            </div>
                                          </div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Match Type</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="match_type" name="match_type" type="text" value="">
					  </div>
					</div>      
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Match Type Code</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="match_type_code" name="match_type_code" type="text" value="">
					  </div>
					</div> 
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Description</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="description"></textarea>
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

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/bootstrap-wysihtml5.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() { 
            $('.textarea').wysihtml5();
            
	    $('#frmMatchTypes').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
                    match_type: {
			message: 'The match type is not valid',
			validators: {
			    notEmpty: {
				message: 'The match type is required and can\'t be empty'
			    }
			}
		    },
                    match_type_code: {
			message: 'The match type code is not valid',
			validators: {
			    notEmpty: {
				message: 'The match type code is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
