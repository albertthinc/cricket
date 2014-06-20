<?php /* Smarty version Smarty-3.1.16, created on 2014-03-17 14:38:51
         compiled from "..\application\admin\views\templates\player_suspension\list.htm" */ ?>
<?php /*%%SmartyHeaderCode:62995326bba34f99b4-86026950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a42630e6052b2ef41b40d29083f656beccdbb4da' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\player_suspension\\list.htm',
      1 => 1394695732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62995326bba34f99b4-86026950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'suspensions' => 0,
    'item' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5326bba3579957_78048666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326bba3579957_78048666')) {function content_5326bba3579957_78048666($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Playe Suspensions</div>
			<a href="/admin/player_suspension/create/"><button class="btn btn-primary muted pull-right" style="margin-top: 7px;">Add New</button></a>
		</div>
            
		<div class="block-content collapse in">
			<div class="span12">
                                <?php if ($_smarty_tpl->tpl_vars['MESSAGE']->value!='') {?>
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

                                </div>
                                <?php }?>
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
					<thead>
						<tr>
							<th>Season</th>
							<th>Player</th>
							<th>Match</th>
                                                        <th>Effective From</th>
                                                        <th>Status</th>
							<th width="150">Action</th>
						</tr>
					</thead>
					<tbody>
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['suspensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['team_name'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['team_type_name'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['team_name'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['captain_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['contact_name'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
							<td>
								<a href="/admin/teams/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['team_id'];?>
"><button class="btn">Edit</button></a>
                                                                &nbsp;
                                                                <a data-href="/admin/teams/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['team_id'];?>
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
    })
    
</script><?php }} ?>
