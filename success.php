<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to LifestyleStore</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </header>
        
        <div class="container" style="min-height: 500px">
            <p style="font-size: 200%"> Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item. </p>
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

