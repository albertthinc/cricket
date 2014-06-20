<?php /* Smarty version Smarty-3.1.16, created on 2014-03-17 14:38:27
         compiled from "..\application\admin\views\templates\venues\list.htm" */ ?>
<?php /*%%SmartyHeaderCode:184675326bb8b692dd1-93589797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01fcc8ea710340a9cabb05ecd71bf46f1d0a112c' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\venues\\list.htm',
      1 => 1394550013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184675326bb8b692dd1-93589797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'venues' => 0,
    'item' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5326bb8b6b98a1_46883758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326bb8b6b98a1_46883758')) {function content_5326bb8b6b98a1_46883758($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Venues</div>
			<a href="/admin/venues/create/"><button class="btn btn-primary muted pull-right">Add New</button></a>
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
                                                        <th>Venue</th>
                                                        <th width="200">Address</th>
							<th>Status</th>
							<th width="100">Created On</th>
							<th width="150">Action</th>
						</tr>
					</thead>
                                        
					<tbody>
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['venues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['venue_name'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['venue_address'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
                                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['created_on']);?>
</td>
                                                    <td>
                                                            <a href="/admin/venues/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['venue_id'];?>
"><button class="btn">Edit</button></a>
                                                            &nbsp;
                                                            <a data-href="/admin/venues/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['venue_id'];?>
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
