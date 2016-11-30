<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>My Super Awesome Donut Shop</title>
    <style type="text/css">
        .footer {
            background-color: #f5f5f5;
            height: 60px;
            width: 100%;
            margin-top: 40px;
        }

        .col-md-4 {
            margin-top: 40px
        }
    </style>
</head>
<body>
<?php
require 'utils.php';
$donuts = getMyDonuts('json/donuts2.json');
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <img alt="Logo" src="images/logo.png" style="width: 100px">
        </div>
        <ul class="nav navbar-nav">
            <li style="margin-top: 16px; margin-left: 10px"><h3><strong>DONUTS2!!!!</strong></h3></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-top: 16px; margin-right: 10px">
            <li><a href="#" class="btn btn-default" style="margin-right: 20px">Login</a></li>
            <li><a href="#" class="btn btn-default">Sign up</a></li>
        </ul>

    </div>
</nav>

<div class="container">
    <div class="row">
        <?php displayMyDonuts($donuts); ?>
    </div>
    <div class="clearfix"></div>
</div>

<footer class="footer">
    <div class="container">
        <p style="margin: 20px 0;" class="text-muted">&copy; Enjoy our yummy donuts now for <?php echo date('d/m/Y'); ?></p>
    </div>
</footer>
</body>
</html>