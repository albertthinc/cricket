<?php /*%%SmartyHeaderCode:2195917095319853f5b86f9-12799092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9daffa2141539e885bf77adfe27c219a39670ace' => 
    array (
      0 => '../application/admin/views/templates/layout_popup.htm',
      1 => 1394181406,
      2 => 'file',
    ),
    '26b3ce3d76a5cc6561aec5339b57c8f964b77d38' => 
    array (
      0 => '../application/admin/views/templates/slides/edit.htm',
      1 => 1393931161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2195917095319853f5b86f9-12799092',
  'variables' => 
  array (
    'BASEURL' => 0,
    'INNER_TPL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5319853f704c38_46352243',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5319853f704c38_46352243')) {function content_5319853f704c38_46352243($_smarty_tpl) {?><link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<link href="/assets/css/admin_styles.css" rel="stylesheet" media="screen">
 <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <script src="/assets/scripts/vendors/jquery-1.9.1.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/scripts/bootstrapValidator.js"></script>

<script src="/assets/scripts/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<div class="container-fluid">
    <div class="row-fluid">
        <!--/span-->
        <div class="span12" id="content">
            <div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Slides - Add</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmSlides" action="/admin/slides/update/" enctype="multipart/form-data">    
                                    <input type="hidden" name="slide_id" value="3" />
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Slide Title</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="slide_title" name="slide_title" type="text" value="Slide Title 3">
					  </div>
					</div>
                                    
                                        <div class="control-group">
                                            <label class="control-label" for="selectError">Categories</label>
                                            <div class="controls form-group">
                                                <select class="form-control chzn-select span4" name="categories[]"  multiple="multiple">
                                                    <option value="">--Select--</option>
                                                  <option value="2">Category Title 2</option>
<option value="3" selected="selected">Category Title 3</option>

                                               </select>
                                            </div>
                                          </div>
                                    
                                        <div class="control-group">
                                            <label class="control-label" for="selectError">Service lines</label>
                                            <div class="controls form-group">
                                                <select class="form-control chzn-select span4" name="servicelines[]"  multiple="multiple">
                                                    <option value="">--Select--</option>
                                                  <option value="3" selected="selected">BAU</option>
<option value="4" selected="selected">EDM</option>
<option value="5">APAC</option>

                                               </select>
                                            </div>
                                          </div>
                                          
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Slide Thumbnail</label>
					  <div class="controls form-group">
						<input class="input-file uniform_on" id="thumbnail" name="thumbnail" type="file">
                                                <a href="/uploads/slides/3/thumb/CRS_WhatWeDo.jpg" target="_blank">View Image</a>                                                
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Slide Big Image</label>
					  <div class="controls form-group">
						<input class="input-file uniform_on" id="big_image" name="big_image" type="file">                                                
                                                <a href="/uploads/slides/3/bigimage/CRS_WhatWeDo_big.jpg" target="_blank">View Image</a>
					  </div>
					</div>	
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Website Link</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="website_link" name="website_link" type="text" value="">
					  </div>
					</div>
                                                                                
                                                                                <legend>English - EN</legend>
                                        <div class="well">
                                                <div class="control-group">
                                                    <label class="control-label" for="selectError">Slide English file</label>
                                                    <div class="controls form-group">
                                                          <input class="input-file uniform_on" id="slide_pptx_file" name="slide_pptx_file[EN]" type="file">                                                          
                                                    </div>
                                                  </div>
                                        </div>
                                                                                <legend>French - FR</legend>
                                        <div class="well">
                                                <div class="control-group">
                                                    <label class="control-label" for="selectError">Slide French file</label>
                                                    <div class="controls form-group">
                                                          <input class="input-file uniform_on" id="slide_pptx_file" name="slide_pptx_file[FR]" type="file">                                                          
                                                    </div>
                                                  </div>
                                        </div>
                                                                                

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Update</button>
					  <a href="/admin/servicelines/"><button type="button" class="btn">Cancel</button></a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<link href="/assets//scripts/vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="/assets//scripts/vendors/chosen.min.css" rel="stylesheet" media="screen">
<script src="/assets//scripts/vendors/chosen.jquery.min.js"></script>
<script src="/assets//scripts/vendors/jquery.uniform.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() { 
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();

	    $('#frmSlides').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
                    slide_title: {
			message: 'The slide title is not valid',
			validators: {
			    notEmpty: {
				message: 'The slide title is required and can\'t be empty'
			    }
			}
		    },
                    categories: {
			message: 'The category is not valid',
			validators: {
			    notEmpty: {
				message: 'The category is required and can\'t be empty'
			    }
			}
		    },
                    servicelines: {
			message: 'The service line is not valid',
			validators: {
			    notEmpty: {
				message: 'The service line is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script>
        </div>
    </div>
</div><?php }} ?>
