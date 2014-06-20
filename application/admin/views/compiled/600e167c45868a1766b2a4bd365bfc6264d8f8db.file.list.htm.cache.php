<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 13:58:27
         compiled from "../application/admin/views/templates/users/master/list.htm" */ ?>
<?php /*%%SmartyHeaderCode:580908973531d77ab75d2e4-29616320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '600e167c45868a1766b2a4bd365bfc6264d8f8db' => 
    array (
      0 => '../application/admin/views/templates/users/master/list.htm',
      1 => 1394426115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '580908973531d77ab75d2e4-29616320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'siteusers' => 0,
    'item' => 0,
    'users' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d77ab809de9_24035295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d77ab809de9_24035295')) {function content_531d77ab809de9_24035295($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/sites/presentationcreator.ragedev/public_html/application/admin/libraries/smarty/libs/plugins/modifier.date_format.php';
?><style>
    .higlight-error-row td{
        background-color: #eed3d7 !important;
    }
</style>

<div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">New User Requests</div>
                        <i class="icon-minus pull-right collapsecnt" style="margin-top: 10px; cursor: pointer;"></i>
		</div>
            
		<div class="block-content collapse in">
			<div class="span12">
                                <?php if ($_smarty_tpl->tpl_vars['MESSAGE']->value!='') {?>
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

                                </div>
                                <?php }?>
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered example" >
					<thead>
						<tr>
							<th>Name</th>
							<th>Group Name</th>
							<th>Email ID</th>
                                                        <th>Status</th>
                                                        <th>Logged On</th>
							<th width="200">Action</th>
						</tr>
					</thead>
                                        
					<tbody>
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['siteusers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status']=="Rejected") {?> class="higlight-error-row" <?php }?>>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['group_name'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email_id'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['created_on']);?>
</td>
							<td>
								<a href="/admin/users/master/siteuseredit/<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
"><button class="btn">Approve</button></a>
                                                                &nbsp;
                                                                <a data-href="/admin/users/master/siteuserdelete/<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" data-toggle="confirmation" data-placement="top" data-original-title="" title=""><button class="btn btn-primary">Reject</button></a>                                                                
							</td>
						</tr>
                                                <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- /block -->
        
        <!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Users</div>
			<a href="/admin/users/master/create/"><button class="btn btn-primary muted pull-right">Add New</button></a>
		</div>
            
		<div class="block-content collapse in">
			<div class="span12">                                
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered example">
					<thead>
						<tr>
							<th>Name</th>
							<th>Group Name</th>
							<th>Email ID</th>
                                                        <th>Status</th>
                                                        <th>Registered On</th>
							<th width="150">Action</th>
						</tr>
					</thead>
                                        
					<tbody>
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['group_name'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email_id'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['created_on']);?>
</td>
							<td>
								<a href="/admin/users/master/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['admin_id'];?>
"><button class="btn">Edit</button></a>
                                                                &nbsp;
                                                                <a data-href="/admin/users/master/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['admin_id'];?>
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
