<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 10:32:57
         compiled from "..\application\admin\views\templates\teams\edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:1621253213c015df1e3-39916889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '607d08b9e8ec3878c27e68a4a19d789197608b7f' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\teams\\edit.htm',
      1 => 1394686931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1621253213c015df1e3-39916889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'team_details' => 0,
    'team_types' => 0,
    'captains' => 0,
    'contactusers' => 0,
    'venues' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53213c01621672_97872731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53213c01621672_97872731')) {function content_53213c01621672_97872731($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\function.html_options.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new team</div>
		</div>
		<div class="block-content collapse in">
                    <div class="span12">
                        <form class="form-horizontal" method="post" id="frmTeams" action="/admin/teams/update/">
                            <input type="hidden" name="team_id" value="<?php echo $_smarty_tpl->tpl_vars['team_details']->value->team_id;?>
" />
                            <div class="control-group">
                                <label class="control-label" for="selectError">Team Type</label>
                                <div class="controls form-group">
                                    <select class="form-control chzn-select span4" name="team_type_id">
                                        <option value="">Select</option>
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['team_types']->value,'selected'=>$_smarty_tpl->tpl_vars['team_details']->value->team_type_id),$_smarty_tpl);?>

                                    </select>
                                </div>
                              </div>

                            <div class="control-group ">
                              <label class="control-label" for="focusedInput">Team Name</label>
                              <div class="controls form-group">
                                    <input class="input-xlarge focused" id="team_name" name="team_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['team_details']->value->team_name;?>
">
                              </div>
                            </div>
                            
                            <div class="control-group ">
                              <label class="control-label" for="focusedInput">Abbreviation</label>
                              <div class="controls form-group">
                                    <input class="input-xlarge focused" id="abbreviation" name="abbreviation" type="text" value="<?php echo $_smarty_tpl->tpl_vars['team_details']->value->abbreviation;?>
">
                              </div>
                            </div>
                            
                            <div class="control-group ">
                              <label class="control-label" for="focusedInput">Short Name</label>
                              <div class="controls form-group">
                                    <input class="input-xlarge focused" id="team_short_name" name="team_short_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['team_details']->value->team_short_name;?>
">
                              </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label" for="selectError">Captain</label>
                                <div class="controls form-group">
                                    <select class="form-control chzn-select span4" name="captain">
                                        <option value="">Select</option>
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['captains']->value,'selected'=>$_smarty_tpl->tpl_vars['team_details']->value->captain_id),$_smarty_tpl);?>

                                    </select>
                                </div>
                              </div>
                            
                            <div class="control-group">
                                <label class="control-label" for="selectError">Contact Person</label>
                                <div class="controls form-group">
                                    <select class="form-control chzn-select span4" name="contact">
                                        <option value="">Select</option>
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['contactusers']->value,'selected'=>$_smarty_tpl->tpl_vars['team_details']->value->contact_id),$_smarty_tpl);?>

                                    </select>
                                </div>
                              </div>
                            
                            <div class="control-group">
                                <label class="control-label" for="selectError">Home Ground</label>
                                <div class="controls form-group">
                                    <select class="form-control chzn-select span4" name="venue_id">
                                        <option value="">Select</option>
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['venues']->value,'selected'=>$_smarty_tpl->tpl_vars['team_details']->value->venue_id),$_smarty_tpl);?>

                                    </select>
                                </div>
                              </div>
                            
                            <div class="control-group ">
                                <label class="control-label" for="focusedInput">Description</label>
                                <div class="controls form-group">
                                      <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="description"><?php echo $_smarty_tpl->tpl_vars['team_details']->value->description;?>
</textarea>
                                </div>
                              </div>   

                            <div class="control-group">
                              <label class="control-label" for="selectError">Status</label>
                              <div class="controls form-group">
                                    <select id="status" name="status" class="input-xlarge">
                                      <option value="Active" <?php if ($_smarty_tpl->tpl_vars['team_details']->value->status=="Active") {?> selected <?php }?>>Active</option>
                                      <option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['team_details']->value->status=="Inactive") {?> selected <?php }?>>Inactive</option>
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

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/chosen.min.css" rel="stylesheet" media="screen">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/chosen.jquery.min.js"></script>

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/bootstrap-wysihtml5.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() { 
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();
            
	    $('#frmTeams').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
		    team_type_id: {
			message: 'The team type is not valid',
			validators: {
			    notEmpty: {
				message: 'The team type is required and can\'t be empty'
			    }
			}
		    },
                    team_name: {
			message: 'The team name is not valid',
			validators: {
			    notEmpty: {
				message: 'The team name is required and can\'t be empty'
			    }
			}
		    },
                    abbreviation: {
			message: 'The abbreviation is not valid',
			validators: {
			    notEmpty: {
				message: 'The abbreviation is required and can\'t be empty'
			    }
			}
		    },
                    team_short_name: {
			message: 'The team short name is not valid',
			validators: {
			    notEmpty: {
				message: 'The team short name is required and can\'t be empty'
			    }
			}
		    },
                    captain: {
			message: 'The captain is not valid',
			validators: {
			    notEmpty: {
				message: 'The captain is required and can\'t be empty'
			    }
			}
		    },
                    contact: {
			message: 'The contact is not valid',
			validators: {
			    notEmpty: {
				message: 'The contact is required and can\'t be empty'
			    }
			}
		    },
                    venue_id: {
			message: 'The venue is not valid',
			validators: {
			    notEmpty: {
				message: 'The venue is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
