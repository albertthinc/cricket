<?php /* Smarty version Smarty-3.1.16, created on 2014-03-30 09:35:06
         compiled from "..\application\admin\views\templates\matchs\add.htm" */ ?>
<?php /*%%SmartyHeaderCode:20951533797f2f0db27-88356791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3618cb18bc1f5cce5296744ac578fbda8df0642' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\matchs\\add.htm',
      1 => 1394747992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20951533797f2f0db27-88356791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'match_types' => 0,
    'venues' => 0,
    'teams' => 0,
    'umpires' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_533797f30fc708_39250198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533797f30fc708_39250198')) {function content_533797f30fc708_39250198($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\function.html_options.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new match</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmMatchs" action="/admin/matchs/add">
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Match Type</label>
					  <div class="controls form-group">
                                              <select class="form-control chzn-select" name="match_type_id">
                                                  <option value=''>--Select--</option>
                                                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['match_types']->value),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Season</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="season" name="season" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Match Date</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused datepicker" id="match_date" name="match_date" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Ground</label>
					  <div class="controls form-group">
                                              <select class="form-control chzn-select" name="venue_id">
                                                  <option value=''>--Select--</option>
                                                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['venues']->value),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Start Time</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="start_time" name="start_time" type="text" value="">
					  </div>
					</div>
                                        <div class='row-fluid'>
                                            <div class="control-group span5 alpha">
                                                <label class="control-label" for="selectError">Home Team</label>
                                                <div class="controls form-group">
                                                    <select class="form-control chzn-select" name="home_team_id">
                                                        <option value=''>--Select--</option>
                                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['teams']->value),$_smarty_tpl);?>

                                                   </select>
                                                </div>
                                              </div>

                                              <div class="control-group span6">
                                                <label class="control-label" for="selectError">Umpire 1</label>
                                                <div class="controls form-group">
                                                    <select class="form-control chzn-select" name="umpire1_id">
                                                        <option value=''>--Select--</option>
                                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['umpires']->value),$_smarty_tpl);?>

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
                                                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['teams']->value),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    
                                        <div class="control-group span6">
					  <label class="control-label" for="selectError">Umpire 2</label>
					  <div class="controls form-group">
                                              <select class="form-control chzn-select" name="umpire2_id">
                                                  <option value=''>--Select--</option>
                                                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['umpires']->value),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    </div>
                                        
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
                                              <select class="form-control" name="status">
                                                  <option value="Active">Active</option>
                                                  <option value="Inactive">Inactive</option>
                                             </select>
					  </div>
					</div>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Save</button>
					  <a href="/admin/players/"><button type="button" class="btn">Cancel</button></a>
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
