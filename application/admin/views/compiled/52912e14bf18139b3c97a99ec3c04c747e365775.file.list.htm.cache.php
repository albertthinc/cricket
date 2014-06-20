<?php /* Smarty version Smarty-3.1.16, created on 2014-03-28 12:12:26
         compiled from "..\application\admin\views\templates\albums\photos\list.htm" */ ?>
<?php /*%%SmartyHeaderCode:24602533519d275f114-59326045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52912e14bf18139b3c97a99ec3c04c747e365775' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\albums\\photos\\list.htm',
      1 => 1395360784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24602533519d275f114-59326045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'albumpictures' => 0,
    'item' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_533519d281e2c2_20518900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533519d281e2c2_20518900')) {function content_533519d281e2c2_20518900($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Pictures</div>
                        <span class="pull-right">
                            <a href="/admin/albums/"><button class="btn muted ">Back to Albums</button></a>&nbsp;
                            <a href="/admin/albums/upload_picture/?album_id=<?php echo $_REQUEST['album_id'];?>
"><button class="btn btn-primary muted">Add New</button></a>
                        </span>
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
                                                    <th>Title</th>
                                                    <th>Title</th>
                                                    <th width="200">Short Description</th>
                                                    <th>Status</th>
                                                    <th width="100">Created On</th>
                                                    <th width="150">Action</th>
						</tr>
					</thead>
                                        
					<tbody>
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['albumpictures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr>
                                                    <td><img src="/uploads/albums/<?php echo $_REQUEST['album_id'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['item']->value['file_name'];?>
" width="100" /></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
                                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['created_on']);?>
</td>
                                                    <td>
                                                            <a href="/admin/albums/picture_edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo_id'];?>
"><button class="btn">Edit</button></a>
                                                            &nbsp;
                                                            <a data-href="/admin/albums/picture_delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo_id'];?>
/?album_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['album_id'];?>
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
