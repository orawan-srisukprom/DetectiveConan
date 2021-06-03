<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">   
</head>
<body>
<div id="header"><img id="logo" src="img/logo.jpg"></div>
    <?php 
     
        require('db.php');
        if (isset($_REQUEST['name'])){
            $name = stripcslashes($_REQUEST['name']);
            $name = mysqli_real_escape_string($con,$name);
            $MPassword = stripcslashes($_REQUEST['MPassword']);
            $MPassword = mysqli_real_escape_string($con,$MPassword);
            $email = stripcslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($con,$email);
            $phone = stripcslashes($_REQUEST['phone']);
            $phone = mysqli_real_escape_string($con,$phone);

        $query="INSERT INTO member(MPassword, email, phone) VALUE ('$MPassword',  '$email', '$phone')";
        $result = mysqli_query($con,$query);
        
        if($result){
            header("location:index.php");
        }
    }
        else {

    ?>
        <div class="form">
            <h1>Sign Up</h1>
            <form name="sign up" action ="" method ="post"><br>
                <input type="text" name="name" Placeholder="Username" required><br>
                <input type="email" name="email" Placeholder="Email" required><br>
                <input type="password" name="MPassword" Placeholder="Password" required><br>
                <input type="phone" name="phone" Placeholder="Phone" required><br>
                <input type="submit" name="submit"  value ="Sign Up">
            </form>
            <p>Click here to Login|<a href ="index.php">Login</a></p>
        </div>
        <?php }?>

</body>
</html>
