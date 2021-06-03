<?php 
session_start();
require('db.php');
?>
<html>
    <head>
        <title>LOG IN</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
            
    </head>
    <body>
    <div id="header"><img id="logo" src="img/logo.jpg"></div>
    

    <div class="container">
            <?php 
            if(!isset($_SESSION["uid"])){?>
            <div class="col-sm-4" >
            <br/><br/><br/>
            
                <h1>Log In</h1>
                
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="text" class="form-control" id="username"  name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label><br>
                        <input type="password" class="form-control" id="username" name="MPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Log in</button><br/>
                    <a id="si-up" href="signup.php"> sign up </a> or
                    <a id="si-up" href="home.php"> HOME  </a>

                </form>
            </div>
                
                
            <?php } 
            else {?>
                <h1>Success!!</h1><br/>
                <a href="/logout.php"> log out </a>
            <?php } ?>
        
    </div>
    </body>
</html>