<?php /* Smarty version Smarty-3.1.16, created on 2014-03-31 01:52:48
         compiled from "..\application\admin\views\templates\users\roles\list.htm" */ ?>
<?php /*%%SmartyHeaderCode:891953387d18e699e5-93847699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87e01f6b9b6dafb4a78d4d567571593f484d6305' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\users\\roles\\list.htm',
      1 => 1394644316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '891953387d18e699e5-93847699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'user_groups' => 0,
    'item' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53387d18e953d4_13343268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53387d18e953d4_13343268')) {function content_53387d18e953d4_13343268($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">User Groups</div>
			<a href="/admin/users/roles/create/"><button class="btn btn-primary muted pull-right">Add New</button></a>
		</div>
            
		<div class="block-content collapse in">
			<div class="span12">
                                <?php if ($_smarty_tpl->tpl_vars['MESSAGE']->value!='') {?>
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">X</button>
                                    <?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

                                </div>
                                <?php }?>
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
					<thead>
						<tr>
							<th>Group Name</th>
                                                        <th>Status</th>
                                                        <th>Created On</th>
							<th width="150">Action</th>
						</tr>
					</thead>
                                        
					<tbody>
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['group_name'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['group_status'];?>
</td>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['created_on']);?>
</td>
							<td>
								<a href="/admin/users/roles/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['group_id'];?>
"><button class="btn">Edit</button></a>
                                                                &nbsp;
                                                                <a data-href="/admin/users/roles/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['group_id'];?>
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
