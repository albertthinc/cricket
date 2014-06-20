<?php /* Smarty version Smarty-3.1.16, created on 2014-03-30 09:48:19
         compiled from "..\application\admin\views\templates\match_types\list.htm" */ ?>
<?php /*%%SmartyHeaderCode:942353379b0b5c2923-15134058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebcf71d99629c5c7b0c1d2052bc4e1a8e8c380fb' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\match_types\\list.htm',
      1 => 1394740224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '942353379b0b5c2923-15134058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'match_types' => 0,
    'item' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53379b0b616933_50863996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53379b0b616933_50863996')) {function content_53379b0b616933_50863996($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Match Types</div>
			<a href="/admin/match_types/create/"><button class="btn btn-primary muted pull-right">Add New</button></a>
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
                                                        <th>Team Type</th>
                                                        <th>Match Type</th>
                                                        <th>Type Code</th>
							<th>Status</th>
							<th>Created On</th>
							<th width="150">Action</th>
						</tr>
					</thead>
                                        
					<tbody>
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['match_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['team_type'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['match_type'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['match_type_code'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['match_status'];?>
</td>
                                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['created_on']);?>
</td>
                                                    <td>
                                                            <a href="/admin/match_types/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['match_type_id'];?>
"><button class="btn">Edit</button></a>
                                                            &nbsp;
                                                            <a data-href="/admin/match_types/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['match_type_id'];?>
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
