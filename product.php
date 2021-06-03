<?php
    session_start();
?>
<html>
    <head>
        <title>shopping</title>
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="stylesheet" type="text/css" href="movie.css">
        <link rel="stylesheet" type="text/css" href="product.css">
        <script src="movie.js" type="text/javascript"></script>
        <script src="contactus.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="header"><img id="logo" src="img/logo.jpg"> </div>
        <div class="top-menu">
            <ul id="nav-menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="author.html">Author</a> </li>
                <li><a href="character.html">Character</a> </li>
                <li><a href="movie.php">Conan The Movies</a> </li>
                <li><a href="product.php">Product</a> </li>
                <li id="logout"><a href="logout.php">Log out / Log in</a> </li>
            </ul>
        </div>
        <div id="back">
            <div class="all-product">
                <h2>All Product</h2>
                <?php
                    if (!isset($_SESSION["uid"]))
                        {
                            for($i=1; $i<13;$i++){
                                $imagesDir = 'img/';
                                $images = $imagesDir .'p'. $i . '.jpg';
                                echo "<img src='$images'>";  
                            }
                    }
                    else 
                    {
                        $price = array(0,1840,1840,1100,510,640,810,710,320,720,830,625,850);
                        for($i=1; $i<13;$i++){
                            $imagesDir = 'img/';                   
                            $images = $imagesDir .'p'. $i . '.jpg';
                            echo "<div><img src='$images'> <p><span>member $price[$i] Bath</span></p></div>";
                            
                    }}
                ?>
            </div>
        </div>

        <h2 id="sp">Special Product</h2>
        <div class="movie24">
            <div class="movie-slide">
                <img class="mySlides" src="img/CN20.jpg" >
                <img class="mySlides dis-non" src="img/CN17.jpg" >
                <img class="mySlides dis-non" src="img/CN18.jpg" >
                <img class="mySlides dis-non" src="img/CN19.jpg" >
                <img class="mySlides dis-non" src="img/CN-price.jpg" >
              
                <button class="botton-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="botton-right" onclick="plusDivs(1)">&#10095;</button>
            </div>
        </div>

        <div class="contact">
            <h2>Contact Us</h2>
            <form method="POST">
                Name: <input type="text" name="name" id="name"/><br>
                Email: <input type="text" name="email" id="email" /><br>
                Messenger:  <input type="text" name="message" id="message" /><br>
                <input type="submit" value="send" onclick="sendMail()" />
                <input type="reset" value="reset">
            </form>
        </div>
    </body>
</html>