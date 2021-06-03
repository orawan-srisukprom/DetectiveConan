<html>
    <head>
        <title>conan the movies</title>
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="stylesheet" type="text/css" href="movie.css">
        <script src="movie.js" type="text/javascript"></script>
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
        <h2>Movie 24 : The Scarlet Bullet</h2>
        <div class="movie24">
            <div class="movie-slide">
                <img class="mySlides" src="img/m24-5.jpg" >
                <img class="mySlides dis-non" src="img/m24.jpg" >
                <img class="mySlides dis-non" src="img/m24-1.jpg" >
                <img class="mySlides dis-non" src="img/m24-2.jpg" >
                <img class="mySlides dis-non" src="img/m24-3.jpg" >
                <img class="mySlides dis-non" src="img/m24-4.jpg" >
              
                <button class="botton-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="botton-right" onclick="plusDivs(1)">&#10095;</button>
              </div>
        </div>
        <h2>Movie 1 - 23</h2>
        <div class="all-movie">
            <div class="movie">
            <?php
                for($i=1; $i<24;$i++){

                    $imagesDir = 'img/';
                    
                    $images = $imagesDir .'m'. $i . '.jpg';
                    // print $images;
                    echo "<img src='$images'>";

                }

            ?>
            

            </div>
        </div>


       

    </body>
</html>
<!-- https://www.detectiveconanworld.com/wiki/Characters -->