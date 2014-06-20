<?php /* Smarty version Smarty-3.1.16, created on 2014-04-06 01:01:34
         compiled from "..\application\admin\views\templates\banners\pictures\list.htm" */ ?>
<?php /*%%SmartyHeaderCode:743953405a16e27f68-06895660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c9c215c2cc9f96e48c480d335572000550a374d' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\banners\\pictures\\list.htm',
      1 => 1395988598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '743953405a16e27f68-06895660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'bannerpictures' => 0,
    'item' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53405a16e70cc7_41605933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53405a16e70cc7_41605933')) {function content_53405a16e70cc7_41605933($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Pictures</div>
                        <span class="pull-right">
                            <a href="/admin/content/banners/"><button class="btn muted ">Back to Categories</button></a>&nbsp;
                            <a href="/admin/content/banners/upload_picture/?category_id=<?php echo $_REQUEST['category_id'];?>
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
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th width="200">Description</th>
                                                    <th>Status</th>
                                                    <th width="100">Created On</th>
                                                    <th width="150">Action</th>
						</tr>
					</thead>
                                        
					<tbody>
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bannerpictures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr>
                                                    <td><img src="/uploads/banners/<?php echo $_REQUEST['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['file_name'];?>
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
                                                            <a href="/admin/content/banners/picture_edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['banner_id'];?>
"><button class="btn">Edit</button></a>
                                                            &nbsp;
                                                            <a data-href="/admin/content/banners/picture_delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['banner_id'];?>
/?category_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['category_id'];?>
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
