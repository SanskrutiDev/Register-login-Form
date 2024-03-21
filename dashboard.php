<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'; ?>">
    <style>
        body {
            background-image: url("<?php echo base_url().'assets/css/mmmm.gif'; ?>");
            background-size: cover;
        }
        .welcome-text {
            width: 200px; /* Adjust width as needed */
        }
    </style>
</head>
<body>
    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><i>Harry Potter</i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <div class="col-md-6 text-right text-white welcome-text">
                         <h2>Welcome to The Hogward </h2>
                        <a href="<?php echo base_url().'index.php/auth/logout'; ?>" class="nav-item text-white">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>
