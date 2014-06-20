<?php /*%%SmartyHeaderCode:479706448531d8d126856a7-58205220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cff6c758a733fa448d1e799c240753146079743' => 
    array (
      0 => 'application/default/views/templates/layout_master.htm',
      1 => 1394428245,
      2 => 'file',
    ),
    '0e7d159adf8c3ebf2216e3526540b0d2e5b04296' => 
    array (
      0 => 'application/default/views/templates/slides/list.htm',
      1 => 1393593587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '479706448531d8d126856a7-58205220',
  'variables' => 
  array (
    'pageTitle' => 0,
    'BASEURL' => 0,
    'USERDATA' => 0,
    'controller' => 0,
    'INNER_TPL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d8d127b2109_06171449',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d8d127b2109_06171449')) {function content_531d8d127b2109_06171449($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>Slides - Presentation Creator</title>
    <!-- Bootstrap -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
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
  </head>
  <body>
	<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/slides/"><img src="/assets/images/rage_logo.png" /></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right custom-nav">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Albert Virgin V A&nbsp;  <i class="caret" style="margin-top:15px;"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <!--<li>
                                        <a tabindex="-1" href="/admin/dashboard/">Manage</a>
                                    </li>
                                    <li class="divider"></li>-->
                                    <li>
                                        <a tabindex="-1" href="/welcome/logout">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav custom-nav">
                                                        <li class="dropdown"  class="active" >
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Slides <b class="caret" style="margin-top:15px;"></b>
                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="/slides/">Download</a>
                                    </li>   
                                    <li>
                                        <a href="/admin/slides/">Upload</a>
                                    </li>
                                </ul>
                            </li>
                            <!--<li >
                                <a href="/showcase/">Showcase</a>
                            </li>-->
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 20px;">
            <div class="row-fluid">
               <style>
    .checkbox-inline {
        display: inline-block;
        padding-left: 20px;
        margin-bottom: 0;
        vertical-align: middle;
        font-weight: 400;
        cursor: pointer;
    }
    
    /* CSS: (StyleSheet) */

    #imgPreviewWithStyles {
        background: #222;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        padding: 15px;
        z-index: 999;
        border: none;
    }
    
    .previewslidescnt{
        width: 5000px; 
        display: block;
    }
    
    .preview_for_download_list li{
        width: 150px; 
        padding: 5px;
    }
    
    body.dragging, body.dragging * {
        cursor: move !important;
      }

      .dragged {
        position: absolute;
        z-index: 2000;
      }

      li.placeholder {
        position: relative;
        background-color: #F8F8F8 !important;
        border:1px #B2B2B2 dotted;  
        height: 100px !important; 
        margin: 12px 10px 0 0 !important;
        width: 150px !important;
      }
      li.placeholder:before {
        position: absolute;
      }

      ol.example li.placeholder {
        position: relative;
        /** More li styles **/
      }
      ol.example li.placeholder:before {
        position: absolute;
        /** Define arrowhead **/
      }

      #selectedslide li{
              /*height: 74px !important; */
      }
</style>

<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav serviceline_list">
                    <li data-id="3"><a href="#">BAU</a></li>
                    <li data-id="4"><a href="#">EDM</a></li>
                    <li data-id="5"><a href="#">APAC</a></li>
              </ul>
    </div>
</div>

<div class="span3" id="sidebar">
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse categories_list" style="margin-top: 15px;">
                <li data-id="2">
            <a href="/admin/dashboard/"><i class="icon-chevron-right"></i> Category Title 2</a>
        </li>        
                <li data-id="3">
            <a href="/admin/dashboard/"><i class="icon-chevron-right"></i> Category Title 3</a>
        </li>        
            </ul>
</div>
<div class="span9" id="content">
    <div class="row-fluid">
            <!-- block -->
            <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Slides</div>
                        <button type="button" class="btn muted pull-right btnDownload">Download</button>
                    </div>

                    <div class="block-content collapse in">
                        <div class="span12">
                             
                            <div  data-bind="foreach: slidesList">
                                <ul class="thumbnails" data-bind="foreach: $data, updateTableEachTimeItChanges : true">
                                  <li class="span3 well slidesli" title="" >
                                    <a href="#" data-bind="attr:{ 'href' : '/uploads/slides/'+($data.slide_id)+'/bigimage/'+($data.big_image) }" class="thumbnail thumbnail_show_preview">
                                      <img data-bind="attr:{ 'alt' : $data.slide_title, 'src' : '/uploads/slides/'+($data.slide_id)+'/thumb/'+($data.thumbnail) }" style="width: 260px; " />
                                    </a>
                                      <p>
                                          <strong><small data-bind="text: $data.slide_title"></small></strong>
                                          <br/>
                                         
                                          <div class="checkbox" style="padding-left: 0;" data-bind="foreach: ($data.languages).split(',')">
                                              <label class="checkbox-inline">
                                                  <input type="checkbox" data-bind="attr: { 'value' : $data+'_'+$parent.slide_id, checked : ($('.preview_for_download_list li[data-rel='+$data+'_'+$parent.slide_id+']').size() > 0) ? true : false}" class="chkLanguage" value=""> <span data-bind="text: $data"></span>
                                              </label>&nbsp;&nbsp;
                                          </div>
                                      </p>
                                  </li>
                                </ul>
                            </div>
                            <div data-bind="visible: slidesList().length == 0">
                                <center>No sildes found.</center>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /block -->
    </div>
</div>

 <div id="footer" style=" position: fixed; width: 100%; height: 180px; bottom: 0; display: none;">
    <div class="container well" style="overflow: auto; width: 95%; margin: 0; padding: 5px;">
      <div class="muted credit previewslidescnt">
          <ul class="thumbnails preview_for_download_list" id="selectedslide">
            
          </ul>
      </div>
    </div>
  </div>

<script src="/assets/bootstrap/js/bootstrap-confirmation.js"></script>
<script type="text/javascript" src="/assets/scripts/imgpreview.full.jquery.js"></script>

<script type="text/javascript" src="/assets/scripts/jquery-sortable.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="confirmation"]').confirmation({ "animation" : true, singleton : true })
    })
    
</script>

<script type="text/javascript">
    var slidesList = "";
    $(document).ready(function(){
         
       
        $('.slidesli').tooltip({ html: true })
        
        $(".serviceline_list li:first, .categories_list li:first").addClass("active");
        
        function AppViewModel() {
            var self       = this;
            self.slidesList     =   ko.observableArray();
            
            self.slidesListPreview     =   ko.observableArray();
            
            self.bindPreviewThumb = function(ele, data) {
               console.log(ele)
            }
            
            //get_slides_list($(".serviceline_list li:first").attr("data-id"), $(".categories_list li:first").attr("data-id"));
        }
        
        var viewModel = new AppViewModel();
        
        function get_slides_list(sid, cid) {
            $.ajax({
                type: "POST",
                dataType: "JSON",
                async: false,
                url: "/slides/filter_list",
                data: { "serviceline_id": sid, "category_id": cid }
              }).done(function( msg ) {                
                viewModel.slidesList(msg);
                
                $('.thumbnail_show_preview').imgPreview({
                    containerID: 'imgPreviewWithStyles',
                    imgCSS: {
                        width: 433,
                        height: 300
                    },
                    onShow: function(link){
                    },
                    onLoad: function(){
                    },
                    onHide: function(link){
                    }
                });  
            });
        }
        
        $(".serviceline_list li").on("click", function(e){
            e.preventDefault();
            
            $(".serviceline_list li").removeClass("active");
            $(this).addClass("active");
            
            get_slides_list($(this).attr("data-id"), $(".categories_list li.active").attr("data-id"));
        });
        
        $(".categories_list li").on("click", function(e){
            e.preventDefault();
            $(".categories_list li").removeClass("active");
            $(this).addClass("active");
            get_slides_list($(".serviceline_list li.active").attr("data-id"), $(this).attr("data-id"));
        });
        
        ko.bindingHandlers.updateTableEachTimeItChanges = {
            update: function(element) {    
                $(".chkLanguage").on("click", function(e){
                    $("#footer").show(); 

                    if( $(this).is(":checked") ) {
                        var image_url   =   $(this).parents("li").find("img").attr("src");
                        if( $(".preview_for_download_list li[data-rel='"+($(this).val())+"']").size() > 0 )
                        {
                            alert("This slide is already added");
                            return false;
                        }
                        $(".preview_for_download_list").append(
                                '<li class="well slidesli" data-rel="'+($(this).val())+'" data-toggle="confirmation" data-placement="top" data-original-title="" title=""><a href="#" class="thumbnail"><img src="'+image_url+'" style="width: 260px;" /></a></li>'
                                )
                    } else {
                        $(".preview_for_download_list li[data-rel='"+($(this).val())+"']").remove();
                    }

                    if( $(".preview_for_download_list li").size() == 0  ) {
                        $("#footer").hide();
                    } else {
                        $("#selectedslide").sortable("refresh");
                    }

                    $('[data-toggle="confirmation"] img').confirmation({ title: "Delete ?", "animation" : true, singleton : true, popout: true, onConfirm : function(){
                            var value = $(this).parents("li").attr("data-rel")
                            //remove prev li
                            $(this).parents("li").remove();

                            $(".chkLanguage[value="+value+"]").prop("checked", "")

                            if( $(".preview_for_download_list li").size() == 0  ) {
                                $("#footer").hide();
                            } else {
                                $("#selectedslide").sortable("refresh");
                            }
                            return false;
                    } })           

                })
            }    
        };
        
        

        ko.applyBindings(viewModel);
    })
    
    $(window).load(function(){
        
        $(".btnDownload").click(function(e){
            e.preventDefault();
            
            if( $(".preview_for_download_list li").size() == 0 ) 
            {
                alert("Please select atleast one slide");
                return false;
            }
            
            var files = [];
            $(".preview_for_download_list li").each(function(){
                files.push($(this).attr("data-rel"))
            })
            window.top.location.href    =   "/slides/mergeanddownload/?files="+files.join("|");
            return false;
        })
        
        $(".serviceline_list li:first").trigger("click");
        
        $('.thumbnail_show_preview').imgPreview({
            containerID: 'imgPreviewWithStyles',
            imgCSS: {
                width: 433,
                height: 300
            },
            onShow: function(link){
            },
            onLoad: function(){
            },
            onHide: function(link){
            }
        });        
        
        
        
        $("#selectedslide").sortable();
    })
</script>

            </div>
            <hr>
            <footer>
                <p>&copy; Rage Communications 2014</p>
            </footer>
        </div>
        <!--/.fluid-container-->

        <script type="text/javascript" src="/assets/scripts/knockout-3.0.0.js"></script>
  </body>
</html><?php }} ?>
