<?php /* Smarty version Smarty-3.1.16, created on 2014-04-05 11:58:44
         compiled from "..\application\admin\views\templates\players\list.htm" */ ?>
<?php /*%%SmartyHeaderCode:26742533fa29cdcf163-71062416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d0f552cba50462929e85d4444cfef3f2249348d' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\players\\list.htm',
      1 => 1395092178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26742533fa29cdcf163-71062416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
    'players' => 0,
    'item' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_533fa29cebed37_93795311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533fa29cebed37_93795311')) {function content_533fa29cebed37_93795311($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\modifier.date_format.php';
?><style>
    .higlight-error-row td{
        background-color: #eed3d7 !important;
    }
</style>

<div class="row-fluid">
        <!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Users</div>
			<a href="/admin/players/create/"><button class="btn btn-primary muted pull-right">Add New</button></a>
		</div>
            
		<div class="block-content collapse in">
			<div class="span12">         
                                <?php if ($_smarty_tpl->tpl_vars['MESSAGE']->value!='') {?>
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">X</button>
                                    <?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

                                </div>
                                <?php }?>
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered example">
					<thead>
						<tr>
                                                    <th>Name</th>
                                                    <th>Email ID</th>
                                                    <th>State</th>
                                                    <th>City</th>
                                                    <th>Status</th>
                                                    <th>Created On</th>
                                                    <th width="150">Action</th>
						</tr>
					</thead>
                                        
					<tbody>
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['players']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
</td>							
                                                        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['email_id']!='') {?><?php echo $_smarty_tpl->tpl_vars['item']->value['email_id'];?>
<?php } else { ?>NA<?php }?></td>
                                                        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['state_name']!='') {?><?php echo $_smarty_tpl->tpl_vars['item']->value['state_name'];?>
<?php } else { ?>NA<?php }?></td>
                                                        <td><?php if ($_smarty_tpl->tpl_vars['item']->value['city_name']!='') {?><?php echo $_smarty_tpl->tpl_vars['item']->value['city_name'];?>
<?php } else { ?>NA<?php }?></td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['created_on']);?>
</td>
							<td>
                                                            <a href="/admin/players/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
"><button class="btn">Edit</button></a>
                                                            &nbsp;
                                                            <a data-href="/admin/players/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
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
