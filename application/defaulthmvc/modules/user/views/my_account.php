<main role="main">
    
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