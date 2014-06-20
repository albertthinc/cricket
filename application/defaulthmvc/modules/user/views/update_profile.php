<?php $this->load->helper("form"); ?>

<main role="main">
    <div class="container-fluid">      
        <form action="/user/profile/update_information" method="POST" enctype="multipart/formd-data" id="frmLogin">
            <div class="row-fluid">
                <div class="span8 offset2">
                    <legend>Update Your Profile</legend>
                    <?php 
                    $message    =   $this->session->flashdata('errors');
                    if( !empty($message) ) : ?>
                    <div class="row-fluid">
                        <div class="span12 bgcolor">
                            <div class="alert alert-error">
                                <a href="#" class="close" data-dismiss="alert">×</a>
                                <?php echo $this->session->flashdata("errors"); ?>
                            </div>
                        </div>
                    </div>         
                    <?php endif; ?>
                    <div class="row-fluid">                           
                        <div class="span6 lightblue form-group">
                            <label>First Name</label>
                            <input type="text" class="span12" name="first_name" value="<?php echo $user_info->first_name ?>">    
                        </div><!--/span-->
                        <div class="span6 lightblue">
                            <label>Last Name</label>
                            <input type="text" class="span12" name="last_name" value="<?php echo $user_info->last_name ?>">    
                        </div><!--/span-->
                    </div><!--/row-->
                    <div class="row-fluid">
                        <div class="span6 bgcolor form-group">
                            <label>Gender</label>
                            <?php
                                $genders    =   array(
                                    ''  =>  "Select",
                                    'Male'  =>  'Male',
                                    'Female'    =>  'Female'
                                );
                                
                                echo form_dropdown('gender', $genders, $user_info->gender, ' class="span12"');
                            ?>
                        </div><!--/span-->
                        <div class="span6 bgcolor form-group">
                            <label>Date of Birth</label>
                            <input type="text" class="span12 focused datepicker" name="dob" placeholder="yyyy-mm-dd" value="<?php echo $user_info->dob ?>">    
                        </div><!--/span-->
                    </div><!--/row-->
                    <div class="row-fluid">
                        <div class="span12 bgcolor form-group">
                            <label>Address</label>
                            <input type="text" class="span12 input-mini" placeholder="Address 1" name="address1" value="<?php echo $user_info->address1 ?>">    
                            <input type="text" class="span12 input-mini" placeholder="Address 2" name="address2" value="<?php echo $user_info->address2 ?>">    
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6 bgcolor form-group">
                            <?php echo form_dropdown('city_id', $citiesList, $user_info->city_id, ' class="span12 chzn-select"'); ?>
                        </div><!--/span-->
                        <div class="span6 bgcolor form-group">
                            <?php echo form_dropdown('state_id', $statesList, $user_info->state_id, ' class="span12 chzn-select"'); ?>
                        </div><!--/span-->
                    </div><!--/row-->           
                    <div class="row-fluid">                        
                        <div class="span6 bgcolor form-group">
                            <?php echo form_dropdown('country_id', $countriesList, $user_info->country_id, ' class="span12 chzn-select"'); ?>
                        </div><!--/span-->
                        <div class="span6 bgcolor form-group">
                            <input type="text" class="span12 input-mini" name="pin_code" placeholder="Post Code" value="<?php echo $user_info->pin_code ?>">   
                        </div><!--/span-->
                    </div><!--/row-->
                    
                    <div class="row-fluid">
                        <div class="span12 bgcolor">
                            <label>Contact Information</label>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6 bgcolor">
                            <input type="text" class="span12 input-mini" placeholder="Home Phone" name="home_phone" value="<?php echo $user_info->home_phone ?>">   
                        </div><!--/span-->
                        <div class="span6 bgcolor form-group">
                            <input type="text" class="span12 input-mini" placeholder="Cell Phone" name="cell_phone" value="<?php echo $user_info->cell_phone ?>">    
                        </div><!--/span-->
                    </div><!--/row-->           
                    <div class="row-fluid">
                        <div class="span6 bgcolor">
                            <input type="text" class="span12 input-mini" placeholder="Work Phone" name="work_phone" value="<?php echo $user_info->work_phone ?>">   
                        </div><!--/span-->
                    </div><!--/row-->     
                    
                    <div class="row-fluid">
                        <div class="span12 bgcolor">
                            <label>Personal Information</label>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6 bgcolor">
                            <input type="text" class="span12 input-mini" placeholder="Native" name="native" value="<?php echo $user_info->native ?>">   
                        </div><!--/span-->
                        <div class="span6 bgcolor">
                            <input type="text" class="span12 input-mini" placeholder="Style" name="style" value="<?php echo $user_info->style ?>">    
                        </div><!--/span-->
                    </div><!--/row-->           
                    <div class="row-fluid">
                        <div class="spa12 bgcolor">
                            <textarea name="biography" placeholder="Biography" class="span12"><?php echo $user_info->biography ?></textarea>
                        </div><!--/span-->
                    </div><!--/row-->     
                    <div class="span4">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div><!--/span--> 
                </div><!--/span-->

                      
            </div><!--/row-->
        </form>
    </div><!--/.fluid-container-->
</main>
<link href="/assets/scripts/vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="/assets/scripts/vendors/chosen.min.css" rel="stylesheet" media="screen">
<script src="/assets/scripts/vendors/chosen.jquery.min.js"></script>

<link href="/assets/scripts/vendors/uniform.default.css" rel="stylesheet" media="screen">
<script src="/assets/scripts/vendors/jquery.uniform.min.js"></script>

<script src="/assets/scripts/vendors/bootstrap-datepicker.js"></script>

<script src="/assets/scripts/bootstrapValidator.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".uniform_on").uniform();
        $(".chzn-select").chosen();
        $(".datepicker").datepicker({
            format: "yyyy-mm-dd"
        });

        $('#frmLogin').bootstrapValidator({
            message: 'This email id is not valid',
            fields: {
                first_name: {
                    message: 'The first name is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The first name is required and can\'t be empty'
                        }
                    }
                },
                gender: {
                    message: 'The gender is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The gender is required and can\'t be empty'
                        }
                    }
                },
                dob: {
                    message: 'The date of birth is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The date of birth is required and can\'t be empty'
                        }
                    }
                },
                address1: {
                    message: 'The address1 is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The address1 is required and can\'t be empty'
                        }
                    }
                }
            }
        });
    });
</script>