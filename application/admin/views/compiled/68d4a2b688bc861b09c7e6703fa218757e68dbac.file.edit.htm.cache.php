<?php /* Smarty version Smarty-3.1.16, created on 2014-03-17 18:02:37
         compiled from "..\application\admin\views\templates\matchs\edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:180735326eb656c0b95-15335547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68d4a2b688bc861b09c7e6703fa218757e68dbac' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\matchs\\edit.htm',
      1 => 1394703294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180735326eb656c0b95-15335547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'match' => 0,
    'match_types' => 0,
    'venues' => 0,
    'teams' => 0,
    'umpires' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5326eb6570ceb0_20876600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326eb6570ceb0_20876600')) {function content_5326eb6570ceb0_20876600($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\function.html_options.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Edit match</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmMatchs" action="/admin/matchs/update">
                                    <input type='hidden' name='match_id' value='<?php echo $_smarty_tpl->tpl_vars['match']->value->match_id;?>
' />
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Match Type</label>
					  <div class="controls form-group">
                                              <select class="form-control chzn-select" name="match_type_id">
                                                  <option value=''>--Select--</option>
                                                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['match_types']->value,'selected'=>$_smarty_tpl->tpl_vars['match']->value->match_type_id),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Season</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="season" name="season" type="text" value="<?php echo $_smarty_tpl->tpl_vars['match']->value->season;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Match Date</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused datepicker" id="match_date" name="match_date" type="text" value="<?php echo $_smarty_tpl->tpl_vars['match']->value->match_date;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Ground</label>
					  <div class="controls form-group">
                                              <select class="form-control chzn-select" name="venue_id">
                                                  <option value=''>--Select--</option>
                                                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['venues']->value,'selected'=>$_smarty_tpl->tpl_vars['match']->value->venue_id),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Start Time</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="start_time" name="start_time" type="text" value="<?php echo $_smarty_tpl->tpl_vars['match']->value->start_time;?>
">
					  </div>
					</div>
                                        <div class='row-fluid'>
                                            <div class="control-group span5 alpha">
                                                <label class="control-label" for="selectError">Home Team</label>
                                                <div class="controls form-group">
                                                    <select class="form-control chzn-select" name="home_team_id">
                                                        <option value=''>--Select--</option>
                                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['teams']->value,'selected'=>$_smarty_tpl->tpl_vars['match']->value->home_team_id),$_smarty_tpl);?>

                                                   </select>
                                                </div>
                                              </div>

                                              <div class="control-group span6">
                                                <label class="control-label" for="selectError">Umpire 1</label>
                                                <div class="controls form-group">
                                                    <select class="form-control chzn-select" name="umpire1_id">
                                                        <option value=''>--Select--</option>
                                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['umpires']->value,'selected'=>$_smarty_tpl->tpl_vars['match']->value->umpire1_id),$_smarty_tpl);?>

                                                   </select>
                                                </div>
                                              </div>
                                        </div>
                                    <div class='row-fluid'>
                                        <div class="control-group span5 alpha">
					  <label class="control-label" for="selectError">Visiting Team</label>
					  <div class="controls form-group">
                                              <select class="form-control chzn-select" name="visiting_team_id">
                                                  <option value=''>--Select--</option>
                                                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['teams']->value,'selected'=>$_smarty_tpl->tpl_vars['match']->value->visiting_team_id),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    
                                        <div class="control-group span6">
					  <label class="control-label" for="selectError">Umpire 2</label>
					  <div class="controls form-group">
                                              <select class="form-control chzn-select" name="umpire2_id">
                                                  <option value=''>--Select--</option>
                                                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['umpires']->value,'selected'=>$_smarty_tpl->tpl_vars['match']->value->umpire2_id),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    </div>
                                        
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
                                              <select class="form-control" name="status">
                                                  <option value="Active" <?php if ($_smarty_tpl->tpl_vars['match']->value->status=="Active") {?> selected <?php }?>>Active</option>
                                                  <option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['match']->value->status=="Inactive") {?> selected <?php }?>>Inactive</option>
                                             </select>
					  </div>
					</div>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Update</button>
					  <a href="/admin/matchs/"><button type="button" class="btn">Cancel</button></a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/chosen.min.css" rel="stylesheet" media="screen">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/chosen.jquery.min.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/jquery.uniform.min.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/bootstrap-datepicker.js"></script>

<script type="text/javascript">
	$(document).ready(function() { 
            
            $(".chzn-select").chosen();            
            $(".datepicker").datepicker({
                format: "yyyy-mm-dd"
            });
            
	    $('#frmMatchs').bootstrapValidator({
		message: 'This value is not valid',
		fields: { 
		    match_type_id: {
			message: 'The match type is not valid',
			validators: {
			    notEmpty: {
				message: 'The match type is required and can\'t be empty'
			    }
			}
		    },
                    season: {
                        validators: {
                            notEmpty: {
                                message: 'The season is required and can\'t be empty'
                            }
                        }
                    },
                    match_date: {
                        validators: {
                            notEmpty: {
                                message: 'The match date is required and can\'t be empty'
                            }
                        }
                    },
                    venue_id: {
                        validators: {
                            notEmpty: {
                                message: 'The ground name is required and can\'t be empty'
                            }
                        }
                    },
                    start_time: {
			message: 'The start time is not valid',
			validators: {
			    notEmpty: {
				message: 'The start time is required and can\'t be empty'
			    }
			}
		    },
                    home_team_id: {
			message: 'The home team is not valid',
			validators: {
			    notEmpty: {
				message: 'The home team is required and can\'t be empty'
			    }
			}
		    },
                    umpire1_id: {
			message: 'The umpire 1 is not valid',
			validators: {
			    notEmpty: {
				message: 'The umpire 1 is required and can\'t be empty'
			    }
			}
		    },
                    visiting_team_id: {
			message: 'The visiting team is not valid',
			validators: {
			    notEmpty: {
				message: 'The visiting team is required and can\'t be empty'
			    }
			}
		    },
                    umpire2_id: {
			message: 'The umpire 2 is not valid',
			validators: {
			    notEmpty: {
				message: 'The umpire 2 is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
