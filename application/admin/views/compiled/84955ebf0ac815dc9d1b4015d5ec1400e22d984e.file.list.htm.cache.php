<?php /* Smarty version Smarty-3.1.16, created on 2014-03-31 01:55:52
         compiled from "..\application\admin\views\templates\albums\list.htm" */ ?>
<?php /*%%SmartyHeaderCode:549153387dd0987f24-65324762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84955ebf0ac815dc9d1b4015d5ec1400e22d984e' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\albums\\list.htm',
      1 => 1395351492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '549153387dd0987f24-65324762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'albums' => 0,
    'item' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53387dd0a39c44_53985900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53387dd0a39c44_53985900')) {function content_53387dd0a39c44_53985900($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Albums</div>
			<a href="/admin/albums/create/"><button class="btn btn-primary muted pull-right">Add New</button></a>
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
                                                    <th width="100">Image</th>
                                                    <th>Title</th>
                                                    <th width="200">Short Description</th>
                                                    <th>Status</th>
                                                    <th width="100">Created On</th>
                                                    <th width="220">Action</th>
						</tr>
					</thead>
                                        
					<tbody>
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr>
                                                    <td><img src="/uploads/albums/<?php echo $_smarty_tpl->tpl_vars['item']->value['album_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['preview_image'];?>
" width="100" onerror="this.src='/uploads/albums/noimage.jpg'" /></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['short_description'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
                                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['created_on']);?>
</td>
                                                    <td>
                                                            <a href="/admin/albums/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['album_id'];?>
"><button class="btn">Edit</button></a>
                                                            &nbsp;
                                                            <a data-href="/admin/albums/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['album_id'];?>
" data-toggle="confirmation" data-placement="top" data-original-title="" title=""><button class="btn btn-primary">Delete</button></a>                                                                
                                                            &nbsp;
                                                            <a href="/admin/albums/pictures/?album_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['album_id'];?>
"><button class="btn">Upload</button></a>
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
