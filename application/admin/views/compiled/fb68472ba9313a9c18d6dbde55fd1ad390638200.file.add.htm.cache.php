<?php /* Smarty version Smarty-3.1.16, created on 2014-03-15 11:34:47
         compiled from "..\application\admin\views\templates\team_players\add.htm" */ ?>
<?php /*%%SmartyHeaderCode:203845323ed7f7b2f25-58650123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb68472ba9313a9c18d6dbde55fd1ad390638200' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\team_players\\add.htm',
      1 => 1394863221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203845323ed7f7b2f25-58650123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'teams' => 0,
    'players' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5323ed7f7cb949_36462198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5323ed7f7cb949_36462198')) {function content_5323ed7f7cb949_36462198($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\function.html_options.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new team player</div>
		</div>
		<div class="block-content collapse in">
                    <div class="span12">
                        <form class="form-horizontal" method="post" id="frmTeams" action="/admin/team_players/add/">
                            
                            <div class="control-group ">
                                <label class="control-label" for="focusedInput">Season</label>
                                <div class="controls form-group">
                                      <input class="input-xlarge focused" id="season" name="season" type="text" value="">
                                </div>
                              </div>
                            
                            <div class="control-group">
                                <label class="control-label" for="selectError">Teams</label>
                                <div class="controls form-group">
                                    <select class="form-control chzn-select span4" name="team_id">
                                        <option value="">Select</option>
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['teams']->value),$_smarty_tpl);?>

                                    </select>
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label" for="selectError">Player</label>
                                <div class="controls form-group">
                                    <select class="form-control chzn-select span4" name="user_id">
                                        <option value="">Select</option>
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['players']->value),$_smarty_tpl);?>

                                    </select>
                                </div>
                            </div>

                            <div class="form-actions">
                              <button type="submit" class="btn btn-primary">Save</button>
                              <a href="/admin/team_players/"><button type="button" class="btn">Cancel</button></a>
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

<script type="text/javascript">
	$(document).ready(function() { 
            $(".chzn-select").chosen();
            
	    $('#frmTeams').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
                    season: {
			message: 'The season is not valid',
			validators: {
			    notEmpty: {
				message: 'The season is required and can\'t be empty'
			    }
			}
		    },
		    team_id: {
			message: 'The team is not valid',
			validators: {
			    notEmpty: {
				message: 'The team is required and can\'t be empty'
			    }
			}
		    },
                    user_id: {
			message: 'The player is not valid',
			validators: {
			    notEmpty: {
				message: 'The player is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
