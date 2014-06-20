<?php /* Smarty version Smarty-3.1.16, created on 2014-03-07 12:52:28
         compiled from "../application/admin/views/templates/users/assign/list.htm" */ ?>
<?php /*%%SmartyHeaderCode:143575926531973b42836c6-88989042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b53589bda7f0d3999c9fc5978a86b91752cffe8' => 
    array (
      0 => '../application/admin/views/templates/users/assign/list.htm',
      1 => 1393925579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143575926531973b42836c6-88989042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'users' => 0,
    'item' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531973b42e5e76_09500626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531973b42e5e76_09500626')) {function content_531973b42e5e76_09500626($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/sites/presentationcreator.ragedev/public_html/application/admin/libraries/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/sites/presentationcreator.ragedev/public_html/application/admin/libraries/smarty/libs/plugins/modifier.date_format.php';
?><style>
    .higlight-error-row td{
        background-color: #eed3d7 !important;
    }
</style>

<div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Users - Site Users</div>
<!--                        <i class="icon-minus pull-right collapsecnt" style="margin-top: 10px; cursor: pointer;"></i>-->
                            <a href="/admin/users/assign/create/"><button class="btn btn-primary muted pull-right">Add New</button></a>   
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
							<th>Assigned To</th>
							<th>Assigned Users</th>
                                                        <th>Created On</th>
							<th width="200">Action</th>
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
						<tr >
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['full_name'];?>
</td>
                                                        <td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['users'],",","<br/>");?>
</td>
                                                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['modified_ts']);?>
</td>
							<td>
								<a href="/admin/users/assign/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['assigned_to_user_id'];?>
"><button class="btn">Edit</button></a>
                                                                &nbsp;
                                                                <a data-href="/admin/users/assign/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['assigned_to_user_id'];?>
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
