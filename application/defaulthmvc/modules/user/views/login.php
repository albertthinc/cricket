<main role="main">
    <div class="container">
        <div class="schedule">
            <div class="no-border-radius" style="margin-top: 30px;">
                <div class="row-fluid">
                    <center><?php echo $this->session->flashdata('errors'); ?></center>
                    <div class="span6 offset3">						
                        <form class="form-horizontal" name="frmLogin" action="/user/authenticate" id="frmLogin" method="POST">
                            <!-- Form Name -->
                            <legend>Login</legend>

                            <!-- Text input-->
                            <div class="control-group form-group">
                                <label class="control-label" for="textinput">Email ID</label>
                                <div class="controls">
                                    <input id="uname" name="uname" type="text" placeholder="Email ID" class="input-xlarge">
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="control-group form-group">
                                <label class="control-label" for="passwordinput">Password</label>
                                <div class="controls">
                                    <input id="passwd" name="passwd" type="password" placeholder="Password" class="input-xlarge">
                                    <p class="help-block"></p>
                                </div>
                            </div>


                            <!-- Button -->
                            <div class="control-group">
                                <label class="control-label" for="singlebutton"></label>
                                <div class="controls">
                                    <button type="submit" class="btn btn-medium btn-primary">Login</button>
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