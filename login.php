<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'; ?>">
<style>
    body {
        font-family: "Raleway", sans-serif;
        background: url("<?php echo base_url().'assets/css/magic.jpg'; ?>") no-repeat;
        background-size: cover;
    }
    .background {
        height: 100vh;
        display: flex;
        align-items: center;
    }
    .text {
        margin-left: 10%;
        font-weight: 400;
    }
    .box {
        margin-left: 35%;
        background-color: rgba(255, 255, 255, 0.5);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    .text h1 {
        font-size: 70px;
        color: #fff;
        font-weight: 500;
    }
    .text p {
        font-size: 20px;
        color: white;
        font-weight: 700;
    }
    .text p a {
        color: white;
        font-weight: 700;
    }
    .form {
        color: black;
    }
    input {
        margin: 20px 0;
        padding: 10px;
        background: transparent;
        border: none;
        outline: none;
        color: black;
        font-family: 'Raleway', sans-serif;
        font-size: 22px;
        width: 100%;
        box-sizing: border-box;
    }
    .button {
        background: transparent;
        border: 1px solid white;
        color: black;
        font-size: 18px;
        width: 100%;
    }
    .button:hover {
        background: #fff;
        color: #000;
    }
    .btn-center {
        text-align: center;
    }
    .invalid-feedback {
        color: red;
        font-weight: 400;
    }
</style>
</head>
<body>

<div class="background">
    <div class="text">
        <h1 class="h3 mb-3 font-weight-normal text-center" style="color: white;">Please sign in</h1>
        <p>NO ACCOUNT? <a href="register.php">register</a></p>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-pinterest"></a>
    </div>
    <form class="box" action="<?php echo base_url() . 'index.php/auth/login'; ?>" method="post" name="frm" id="frm">
        <?php
            $msg = $this->session->flashdata('msg');
            if(!empty($msg)) {
        ?>
        <div class="alert alert-danger">
            <?php echo $msg; ?>
        </div>
        <?php } ?>

        <label for="email" class="sr-only">Email address</label>
        <input type="text" id="email" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : ''; ?>" placeholder="Email address" value="<?php echo set_value('email'); ?>">
        <p class="invalid-feedback"><?php echo form_error('email'); ?></p>

        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : ''; ?>" placeholder="Password">
        <p class="invalid-feedback"><?php echo form_error('password'); ?></p>
        <div class="btn-center">
            <input type="submit" class="button btn btn-primary" value="Login">
        </div>
    </form>
</div>

</body>
</html>
