<!DOCTYPE html>
<?php
require_once("func.php");

if(isset($_POST['btn'])){
    $user=$_POST['user'];
    $pass=md5($_POST['pass']);
    $sql="SELECT * FROM users WHERE (username='$user' AND password='$pass')";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['user']=$user;
        $_SESSION['namn']=$row['realname'];
        $_SESSION['level']=$row['userlevel'];
        //Do stuff if inloggad!
    }else{
        session_destroy();
        //Do stuff if felaktig inloggning
    }
    header("Location: index.php");
    exit();
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="login.php" method="post">
        <input type="text" name="user" id="user" placeholder="Användarnamn" required>
        <input type="password" name="pass" id="pass" placeholder="Lösenord" required>
        <input type="submit" value="Logga in" name="btn">
</form>
</body>
</html>