<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 15:29:49
         compiled from "../application/admin/views/templates/slides/list.htm" */ ?>
<?php /*%%SmartyHeaderCode:220976761531d8d151468b9-67455454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3d287057720e2b71941bb6cc509549f1c4af63' => 
    array (
      0 => '../application/admin/views/templates/slides/list.htm',
      1 => 1393569448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220976761531d8d151468b9-67455454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'slidesList' => 0,
    'item' => 0,
    'timestamp' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d8d151ba340_00818473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d8d151ba340_00818473')) {function content_531d8d151ba340_00818473($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/sites/presentationcreator.ragedev/public_html/application/admin/libraries/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/sites/presentationcreator.ragedev/public_html/application/admin/libraries/smarty/libs/plugins/modifier.date_format.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Slides</div>
			<a href="/admin/slides/create/"><button class="btn btn-primary muted pull-right">Add New</button></a>
		</div>
            
		<div class="block-content collapse in">
			<div class="span12">
                                <?php if ($_smarty_tpl->tpl_vars['MESSAGE']->value!='') {?>
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

                                </div>
                                <?php }?>
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
					<thead>
                                            <tr>
                                                <th>Slide Thumbnail</th>
                                                <th>Slide Title</th>
                                                <th>Categories</th>
                                                <th>Service Lines</th>
                                                <th>Languages</th>
                                                <th>Status</th>
                                                <th>Created On</th>
                                                <th width="150">Action</th>
                                            </tr>
					</thead>
                                        
					<tbody>
                                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slidesList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                            <tr>
                                                <td><img src="/uploads/slides/<?php echo $_smarty_tpl->tpl_vars['item']->value['slide_id'];?>
/thumb/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumbnail'];?>
?time=<?php echo $_smarty_tpl->tpl_vars['timestamp']->value;?>
" width="100" /></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['slide_title'];?>
</td>
                                                <td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['categories'],",","<br/>");?>
</td>
                                                <td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['servicelines'],",","<br/>");?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['languages'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
                                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['created_on']);?>
</td>
                                                <td>
                                                        <a href="/admin/slides/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['slide_id'];?>
"><button class="btn">Edit</button></a>&nbsp;
                                                        <a data-href="/admin/slides/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['slide_id'];?>
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
