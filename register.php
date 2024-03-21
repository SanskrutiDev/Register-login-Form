<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'; ?>">
    <style>
        body {
            background-image: url("<?php echo base_url().'assets/css/p.jpg'; ?>");
            background-size: cover;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
        $msg = $this->session->flashdata ('msg');
        if($msg != "")  {
            echo " <div class='alert alert-success'>$msg</div>";

        }

?>

    <div class="col-md-6">
        <div class="card mt-4">
            <div class="card-header">
                Register Here
            </div>
            <form action="<?php echo base_url().'index.php/Auth/register'; ?>" name="register" method="post">
                <div class="card-body register">
                    <p class="card-text">Please fill in your details.</p>
                    
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" value="<?php echo set_value('first_name'); ?>" class="form-control <?php echo form_error('first_name') ? 'is-invalid' : ''; ?>" placeholder="First name">
                        <div class="invalid-feedback"><?php echo strip_tags(form_error('first_name')); ?></div>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" value="<?php echo set_value('last_name'); ?>" class="form-control <?php echo form_error('last_name') ? 'is-invalid' : ''; ?>" placeholder="Last name">
                        <div class="invalid-feedback"><?php echo strip_tags(form_error('last_name')); ?></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control <?php echo form_error('email') ? 'is-invalid' : ''; ?>" placeholder="Email">
                        <div class="invalid-feedback"><?php echo strip_tags(form_error('email')); ?></div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" value="<?php echo set_value('phone'); ?>" class="form-control <?php echo form_error('phone') ? 'is-invalid' : ''; ?>" placeholder="Phone">
                        <div class="invalid-feedback"><?php echo strip_tags(form_error('phone')); ?></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>" class="form-control <?php echo form_error('password') ? 'is-invalid' : ''; ?>" placeholder="Password">
                        <div class="invalid-feedback"><?php echo strip_tags(form_error('password')); ?></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">REGISTER NOW</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
