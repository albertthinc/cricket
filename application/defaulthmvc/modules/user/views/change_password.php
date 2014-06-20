<main role="main">
    <div class="container">
        <div class="schedule">
            <div class="no-border-radius" style="margin-top: 30px;">
                <div class="row-fluid">
                    
                    <div class="span6 offset3">						
                        <center><?php echo $this->session->flashdata('errors'); ?></center>
                        <form class="form-horizontal" name="frmLogin" action="/user/profile/update_password" id="frmLogin" method="POST">
                            <!-- Form Name -->
                            <legend>Change Password</legend>

                            <!-- Text input-->
                            <div class="control-group form-group">
                                <label class="control-label" for="textinput">Old Password</label>
                                <div class="controls">
                                    <input id="old_password" name="old_password" type="password" placeholder="" class="input-xlarge">
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="control-group form-group">
                                <label class="control-label" for="passwordinput">New Password</label>
                                <div class="controls">
                                    <input id="new_password" name="new_password" type="password" placeholder="Password" class="input-xlarge">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            
                            <!-- Password input-->
                            <div class="control-group form-group">
                                <label class="control-label" for="passwordinput">Confirm Password</label>
                                <div class="controls">
                                    <input id="confirm_password" name="confirm_password" type="password" placeholder="Password" class="input-xlarge">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            
                            <!-- Button -->
                            <div class="control-group">
                                <label class="control-label" for="singlebutton"></label>
                                <div class="controls">
                                    <button type="submit" class="btn btn-medium btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="/assets/scripts/bootstrapValidator.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#frmLogin').bootstrapValidator({
            message: 'This email id is not valid',
            fields: {
                old_password: {
                    message: 'The email id is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The email id is required and can\'t be empty'
                        }
                    }
                },
                new_password: {
                    validators: {
                        notEmpty: {
                            message: 'The new password is required and can\'t be empty'
                        },
                        identical: {
                            field: 'confirm_password',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
                confirm_password: {
                    validators: {
                        notEmpty: {
                            message: 'The confirm password is required and can\'t be empty'
                        },
                        identical: {
                            field: 'new_password',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                }
            }
        });
    });
</script>