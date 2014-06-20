<?php /* Smarty version Smarty-3.1.16, created on 2014-04-23 18:43:06
         compiled from "..\application\admin\views\templates\matchs\list.htm" */ ?>
<?php /*%%SmartyHeaderCode:274405357bc6276dff3-96592015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b4b62ad98135f65d94b12b859d3efd1fd36bac2' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\matchs\\list.htm',
      1 => 1397022903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274405357bc6276dff3-96592015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'matchs' => 0,
    'item' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5357bc6279e660_62601950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5357bc6279e660_62601950')) {function content_5357bc6279e660_62601950($_smarty_tpl) {?><style>
    .higlight-error-row td{
        background-color: #eed3d7 !important;
    }
</style>

<div class="row-fluid">
        <!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Matchs</div>
			<a href="/admin/matchs/create/"><button class="btn btn-primary muted pull-right">Add New</button></a>
		</div>
            
		<div class="block-content collapse in">
			<div class="span12">         
                                <?php if ($_smarty_tpl->tpl_vars['MESSAGE']->value!='') {?>
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

                                </div>
                                <?php }?>
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered example">
					<thead>
						<tr>
                                                    <th>Match Type</th>
                                                    <th>Season</th>
                                                    <th>Match Date</th>
                                                    <th>Venue</th>
                                                    <th>Start Time</th>
                                                    <th>Home Team</th>
                                                    <th>Visiting Team</th>
                                                    <th>Status</th>
                                                    <th width="150">Action</th>
						</tr>
					</thead>
                                        
					<tbody>
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['matchs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['match_type'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['season'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['match_date'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['venue_name'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['start_time'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['home_team_name'];?>
 <br/>
                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['umpire1_name'];?>

                                                        </td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['visiting_team_name'];?>
 <br/>
                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['umpire2_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
							<td>
                                                            <a href="/admin/matchs/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['match_id'];?>
"><button class="btn">Edit</button></a>
                                                            &nbsp;
                                                            <a data-href="/admin/matchs/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['match_id'];?>
" data-toggle="confirmation" data-placement="top" data-original-title="" title=""><button class="btn btn-primary">Delete</button></a>                                                                
							</td>
						</tr>
                                                <?php } ?>
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
    $(document).ready(function(){
        $('[data-toggle="confirmation"]').confirmation({ "animation" : true, singleton : true })
        
        $(".collapsecnt").on("click", function(e){
            if( $(this).hasClass("icon-minus") ) {
                $(this).parents(".navbar").next().stop().hide();
                $(this).removeClass("icon-minus").addClass("icon-plus");
            } else {
                $(this).parents(".navbar").next().stop().show();
                $(this).addClass("icon-minus").removeClass("icon-plus");
            }
        })
    })
    
</script><?php }} ?>
