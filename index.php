<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to LifestyleStore</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body style="padding-top: 40px;">
        <?php
        // put your code here
        ?>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="text-warning">Login to make a purchase</h3>
                    </div>
                    <div class="modal-body">
                        
                        <form>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control input-lg" id="email" name="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Enter password">
                                
                            </div>
                            <div>
                                <a href="#" id="forgot_password_link">Forgot password</a>
                            </div>
                            <div>
                            <label><input type="checkbox">  Remember me</label>
                            </div>
                            <div>
                            <button class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        
                    </div>
                    <div class="modal-footer" id="modal_footer">
                        <p style="font-weight: bold">Don't have an account?<a href="#" id="Register_link">Register</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                    <h2>We sell lifestyle.</h2>
                    <p>Flat 40% off on premium brands.</p>
                    <a href="products.php"><button type="button" class="btn btn-danger btn-lg active">Shop Now!</button></a>
                </div>
            </div>
        </div>
        
        <footer>
            <div class="container">
                <center>
                    <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
                </center>
            </div>
        </footer>
        
        
    </body>
</html>
