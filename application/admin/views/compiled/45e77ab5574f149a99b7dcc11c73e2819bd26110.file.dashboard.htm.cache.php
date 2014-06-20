<?php /* Smarty version Smarty-3.1.16, created on 2014-04-23 18:42:56
         compiled from "..\application\admin\views\templates\dashboard.htm" */ ?>
<?php /*%%SmartyHeaderCode:258265357bc5844cb25-73784948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45e77ab5574f149a99b7dcc11c73e2819bd26110' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\dashboard.htm',
      1 => 1397022903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258265357bc5844cb25-73784948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USERDATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5357bc584586f4_26349420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5357bc584586f4_26349420')) {function content_5357bc584586f4_26349420($_smarty_tpl) {?>
<div class="row-fluid">
    <?php if (in_array(1,$_smarty_tpl->tpl_vars['USERDATA']->value['user_info']['groups_assigned'])) {?>
     <div class="span12" id="content">
          <!-- morris stacked chart -->
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Slides Downloads</div>
                        
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <div id="hero-graph" style="height: 230px;"></div>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
     </div>
    <?php }?>
    
    <div class="span6" id="content">
          <!-- morris stacked chart -->
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Top Categories - Number of Slides</div>
                        
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <div id="hero-slides" style="height: 230px;"></div>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
     </div>
    <div class="span6" id="content" style="margin-left: 20px;">
          <!-- morris stacked chart -->
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Top Service Lines - Number of Slides</div>
                        
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <div id="hero-servicelines" style="height: 230px;"></div>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
     </div>
    
</div>

<link rel="stylesheet" href="/assets/scripts/vendors/morris/morris.css">
<script src="/assets/scripts/vendors/raphael-min.js"></script>
<script src="/assets/scripts/vendors/morris/morris.min.js"></script>
        

<script type="text/javascript">
    /*var downloads_graph = [], category_slides_count = [], servicelines_slides_count = [];
    $(document).ready(function(){
         if( $("#hero-graph").size() > 0 ) {
            $.ajax({
                type: "POST",
                dataType: "JSON",
                async: false,
                url: "/admin/dashboard/monthly_growth"
              }).done(function( data ) {
                downloads_graph =   data;
            });
            // Morris Area Chart
            Morris.Line({
                element: 'hero-graph',
                data: downloads_graph,
                xkey: 'created_date',
                xLabels: "month",
                ykeys: ['number_of_downloads'],
                labels: ['Downloads']
            });
        }
        
        if( $("#hero-slides").size() > 0 ) {
            
            $.ajax({
                type: "POST",
                dataType: "JSON",
                async: false,
                url: "/admin/dashboard/slide_categories"
              }).done(function( data ) {
                category_slides_count =   data;
            });

            // Morris Bar Chart
            Morris.Bar({
                element: 'hero-slides',
                data: category_slides_count,
                xkey: 'category',
                ykeys: ['number_of_slides'],
                labels: ['Number of Slides'],
                barRatio: 0.4,
                xLabelMargin: 10,
                hideHover: 'auto',
                barColors: ["#3d88ba"]
            });
        }
        
        if( $("#hero-servicelines").size() > 0 ) {
            $.ajax({
                type: "POST",
                dataType: "JSON",
                async: false,
                url: "/admin/dashboard/slide_servicelines"
              }).done(function( data ) {
                servicelines_slides_count =   data;
            });
             // Morris Donut Chart
            Morris.Donut({
                element: 'hero-servicelines',
                data: servicelines_slides_count,
                colors: ["#0099C6", "#AAAA11", "#E67300", "#8B0707", "#3B3EAC" ,"#B77322" , "#16D620", "#DC3912", "#990099"],
                formatter: function (y) { return y + "%" }
            });
        }
        
        
    })    */
</script>
<?php }} ?>
