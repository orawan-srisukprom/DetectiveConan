<?php

 session_start();
 require('db.php');
	$query="SELECT count(*) as c from member ";
	$res=mysqli_query($con,$query) or die("Can't Execute Query...");
    $row=mysqli_fetch_assoc($res);
?>

<html>
    <head>
        <title>home page</title>
        <link rel="stylesheet" type="text/css" href="home.css">
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
        
            <h2> DETECTIVE CONAN</h2>
            <div id="num-member">
                <h3>Member</h3>
                <p><?=$row['c'] ?></p>
                
            </div>
            <div class = "content">  
                <div>
                    <h4>Contents</h4>
                    <ul id="list-content">
                        <li><a href="#case">Case Closed</a></li>
                        <li><a href="#character">Characters</a> </li>
                        <li><a href="#plot">Plot</a> </li>
                        <li><a href="#set">Setting</a> </li>
                    </ul>
                </div>         
                <p><img id="poster" src="img/ConanMovie10-Poster02.jpg"> </p>
            </div> 

            <p class="descript">Detective Conan is a Japanese manga and anime series written and illustrated by Gosho Aoyama 
                since January 19, 1994 and got serialized in Shogakukan's Weekly Shonen Jump. Due to legal considerations the title has been renamed to 
                Case Closed. The series follows Shinichi Kudo, a prodigious young detective who was inadvertently transformed into a child after being 
                poisoned by two men in black. <br><br>

                Funimation Entertainment licensed the anime series for North American broadcast in 2003 under the name Case Closed with the characters given
                Americanized names. The anime series came on Cartoon Network as part of their Adult Swim programming block and was discontinued due to low
                ratings. The manga has been licensed by Viz Media in North America and uses Funimation's renamed character names.
                
            </p>
            <h2 id="case">Case Closed</h2>
            <p class="descript">The title Detective Conan has been changed into "Case Closed" due to legal considerations. 
                The series follows Jimmy Kudo, renamed from Shinichi Kudo, who has been drugged by two men in black and has shrunk into a kid, 
                taking on the moniker Conan Edogawa. It is the same as the original series, only with the characters renamed. 
                Viz uses the Americanized names in their mangas. The names are not based on any great detectives or puns, 
                but attempt to retain the sound and pattern of the original (i.e, initial letters are the same).</p>

            <h2 id="character">Characters</h2>
            <p class="descript">Detective Conan has a large amount of characters, if suspects and victims are counted. 
                Almost each major character has a dark memory about past events that have happened. Even some of them have memories concerning what 
                happened in the Black Organization. The beginning starts with friendships of a new start which later grows to trusts, informational, 
                heavy drama, past revelations etc.<br><br>

                Even if the series contains such a large amount of characters, many of them remain unknown and questionable, such as whether scarred 
                Akai is really Shūichi Akai or Subaru Okiya, what the name of the Black Organization is, what the real names of the members of the 
                Black Organization are except Vermouth, and the most popular of all: who the boss of the Black Organization is.<br><br>

                The character names are based on the detective novels that Gosho liked as a child, some seiyu's or from his assistants. For example: 
                It is known that Conan Edogawa is based on Sir Arthur Conan Doyle and Edogawa Rampo, and Kazuha Tōyama is based on the Edo period 
                police detective Toyama Kagemoto alias Toyama no Kin-san, and Kazuha comes from one of Gosho Aoyama's assistants
            
            </p>

            <h2 id="plot">Plot</h2>
            <p class="descript">The story goes about the 17-year-old high school prodigy Shinichi Kudo also known as the Savior of the Japanese 
                Police Department  who frequently helps the police force solving complicated cases. 
                After the incident at the famed theme park named Tropical Land at the roller coaster, he was investigating one of the two suspicious 
                looking men that where been seen as suspects at the incident. He got attacked by one of them who's code-name is Gin and his partner 
                named named Vodka. After hitting Shinichi knock-out Gin gave him a drug which is later known as APTX 4869 that was meant to kill him. 
                The poison has in fact a rare side-effect which transform Shinichi into a body into that of a child instead of killing him.<br><br>
            
                After the crucial incident, Shinichi went home and adopted the name Conan Edogawa after being put under pressure by his childhood friend Ran. 
                Shinichi managed to hide his secret identity to the ones he cared to investigate the Black Organization, but some of them figured out who 
                he really is and a member of the Black Organization either. He pretends to be a child to gather evidence to apprehend the secret organization 
                to get the antidote to transform back into his original body. Conan enrolls his former school the Teitan Elementary school and form the
                Detective Boys with his three other classmates: Ayumi Yoshida, Genta Kojima, and Mitsuhiko Tsuburaya. Conan also stays at the detective 
                agency of a moronic detective Kogoro Mori which is Ran's father. He gained fame as the Sleeping Kogoro , 
                after getting help from Conan using the gadgets invented by Hiroshi Agasa, Shinichi's neighbor.<br><br>

                Later a girl named Shiho Miyano flees from the Black Organization after taking in her own creation and currently stays at Agasa's house.
                The Black Organization is still searching for her and tries to annihilate her for her escape from the organization and her betrayal for 
                leaving it.
            
            
            </p>
            <h2 id="set">Settings</h2>
            <p class="descript"> The series has been set in a large town located in Tokyo, Japan named "Beika City" after Sherlock Holmes' flat on 
                "Baker Street". The spots in the town are named after famous detectives created by mystery novelists, such as a cafe in the series 
                based on Dame Agatha Christie's "Hercule Poirot" and many others. Not only that, there are also names based on the places where Sherlock 
                Holmes and his companion John H. Watson visit. The series can also be almost comparable of Sherlock Holmes battle with Arsene Lupin, 
                which originally the name of Sherlock Holmes has been changed in Herlock Sholmes to prevent copyright claims, because of the battle 
                between Conan and Kaitou Kid.</p>

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