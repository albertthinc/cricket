<main role="main">
    <div class="container">
        <div class="schedule">
            <div class="well well-sm no-border-radius">
                <div class="row-fluid">
                    <?php echo $this->session->flashdata('errors'); ?>
                    <form name="frmLogin" action="user/authenticate" id="frmLogin" method="POST">
                        <h4 class="form-signin-heading">Login</h4>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email ID</label>
                            <div class="col-lg-5">
                                <input type="text" name="uname" class="form-control">
                            </div>
                            <small class="help-block col-lg-offset-3 col-lg-9" style="display: none;"></small></div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Password</label>
                            <div class="col-lg-5">
                                <input type="password" name="passwd" class="form-control">
                            </div>
                            <small class="help-block col-lg-offset-3 col-lg-9" style="display: none;"></small></div>    
                        <button type="submit" class="btn btn-medium btn-primary">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<script src="/assets/scripts/bootstrapValidator.js"></script>
<script type="text/javascript">
    $(document).ready(function() { 
        
        $('#frmLogin').bootstrapValidator({
            message: 'This email id is not valid',
            fields: {
                uname: {
                    message: 'The email id is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The email id is required and can\'t be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                passwd: {
                    message: 'The email id is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The title is required and can\'t be empty'
                        }
                    }
                }
            }
        });
    });
</script>