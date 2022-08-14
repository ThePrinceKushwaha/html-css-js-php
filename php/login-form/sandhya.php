<!DOCTYPE html>
<head>
    <title>login page</title>
</head>
<body>
    <?php 
     $email=$password=$emailErr=$passErr="";
     if($_SERVER['REQUEST_METHOD']=='POST'){
        if($_POST("email")==""){
            $emailErr="Email should be entered";
            $err=1;
        }
        else{
            $email=test_input($_POST("email"));
            if(!preg_match("/^w+@[a-z]+\.[a-z]{2,3}$/",$email)){
                $emailErr="email pattern didnot match";
            }
        }
        if($_POST("password")==""){
            $passErr="password should be entered";
            $err=1;
        }
        else{
            $password=test_input($_POST("password"));
            if(!preg_match("/^[a-zA-Z]{2,15}$/",$password)){
                $passErr="email pattern didnot match";
                $err=1;
            }
        }
        if($err!=1){
            $servername = "localhost";
            $server_username = "root";
            $password = "";
            $conn = mysqli_connect($servername, $server_username, $password);
            if (!$conn) {
                die("Connection failed "); 
            }
            $sql = "CREATE DATABASE if not exists logdata";
            if (!mysqli_query($conn, $sql)) {
                 die("Error creating database ") ;
            }
            $dbname='logdata';
            $conn = mysqli_connect($servername, $server_username, $password,$dbname);
            $sql = "CREATE TABLE IF NOT EXISTS users (
                'id' INT(6) PRIMARY_KEY AUTO_INCREMENT NOT NULL;
                'email' VARCHAR(30) NOT NULL;
                'password' VARCHAR(30) NOT NULL;
                )";
            if(!mysqli_query($conn, $sql)){
                echo "Error creating table";
            }
            $sql="INSERT INTO users`(email`,`password`)
                  VALUES($email,$password);";
        }
     }
    ?>
    <form name="myform" method="POST" action="self" enctype="multipart/form-data" autocomplete="off">
        <label>Email:</label><input type="text" name="email" id="email">
        <?php echo"$emailErr"?>
        <label>Password:</label><input type="password" name="password" id="password">
        <?php echo"$passErr"?>
    </form>
    
</body>