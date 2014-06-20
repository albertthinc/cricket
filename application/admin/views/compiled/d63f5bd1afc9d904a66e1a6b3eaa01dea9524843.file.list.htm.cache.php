<?php /* Smarty version Smarty-3.1.16, created on 2014-03-17 14:38:45
         compiled from "..\application\admin\views\templates\team_players\list.htm" */ ?>
<?php /*%%SmartyHeaderCode:172795326bb9d585df5-02762201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd63f5bd1afc9d904a66e1a6b3eaa01dea9524843' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\team_players\\list.htm',
      1 => 1394863339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172795326bb9d585df5-02762201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'teams' => 0,
    'team_players' => 0,
    'item' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5326bb9d5bcad9_36480649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326bb9d5bcad9_36480649')) {function content_5326bb9d5bcad9_36480649($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\function.html_options.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Team Players</div>
			<a href="/admin/team_players/create/"><button class="btn btn-primary muted pull-right" style="margin-top: 7px;">Add New</button></a>
		</div>
            
		<div class="block-content collapse in">
			<div class="span12">
                                <?php if ($_smarty_tpl->tpl_vars['MESSAGE']->value!='') {?>
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

                                </div>
                                <?php }?>
                                <div class="row-fluid">
                                    <div class="control-group">
                                    <label class="control-label" for="selectError">Teams</label>
                                    <div class="controls form-group">
                                        <select class="form-control chzn-select span4" name="team_id" id="team_id">
                                            <option value="">Select</option>
                                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['teams']->value,'selected'=>$_REQUEST['team_id']),$_smarty_tpl);?>

                                        </select>
                                    </div>
                                  </div>
                                </div>

				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable" >
					<thead>
						<tr>
                                                        <th>Season</th>
							<th>Player Name</th>
							<th>Email ID</th>
							<th width="150">Action</th>
						</tr>
					</thead>
					<tbody id="playesrList">
                                            <?php if ($_smarty_tpl->tpl_vars['team_players']->value!='') {?>
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['team_players']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['season'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['player_name'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email_id'];?>
</td>
                                                    <td><a onclick="deleteteamplayer('<?php echo $_smarty_tpl->tpl_vars['item']->value['team_player_id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['item']->value['team_id'];?>
')" href="javascript:void(0)" ><button class="btn btn-primary">Delete</button></a></td>
                                                </tr>
                                                <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
                                                <tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">No data available in table</td></tr>
                                                <?php } ?>
                                            <?php } else { ?>
                                            <tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">No data available in table</td></tr>
                                            <?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- /block -->
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/DT_bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
bootstrap/js/bootstrap-confirmation.js"></script>
<script type="text/javascript">
    function deleteteamplayer(id, tid)
        {
            $.get("/admin/team_players/delete_teamplayer/"+id, function(data){
                alert(data);
                $("#team_id").trigger("change");
                return false;
            });
        }
    $(document).ready(function(){
        //$('[data-toggle="confirmation"]').confirmation({ "animation" : true, singleton : true });
        
        
        $("#team_id").change(function(){
            var selValue = $("option:selected", this).val();
            $("#playesrList tr").remove();
            $.getJSON( "/admin/team_players/team_players_list", { team_id: selValue } )
                .done(function( json ) {
                  if( json && json.length > 0 ) {
                      $.each(json, function(key, value){
                          $("#playesrList").append(
                            $("<tr>").append(
                                $("<td>").html(value.season),
                                $("<td>").html(value.player_name),
                                $("<td>").html(value.email_id),
                                $("<td>").html('<a onclick="deleteteamplayer('+"'"+value.team_player_id+"'"+')" href="javascript:void(0)" ><button class="btn btn-primary">Delete</button></a>')
                            )
                          )
                      })
                  } else {
                       $("#playesrList").append('<tr class="odd"><td valign="top" colspan="3" class="dataTables_empty">No data available in table</td></tr>')
                  }
                })
                .fail(function( jqxhr, textStatus, error ) {
                  var err = textStatus + ", " + error;
                  console.log( "Request Failed: " + err );
              });
        });
    });
    
</script><?php }} ?>
