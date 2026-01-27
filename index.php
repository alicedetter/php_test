<!DOCTYPE html>
<?php 
    require_once("func.php");



    if(isset($_POST['btn'])){
        $url=$_POST['url'];
        $desc=$_POST['desc'];
        $sql="INSERT INTO linx(url, description) VALUES ('$url', '$desc')";
        $result=mysqli_query($conn, $sql);
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php
    if(isLevel(100)){
        echo "Välkommen, " . $_SESSION['user'] . "!"; ?>
    <form action="index.php" method="post">
        <input type="text" name="url" id="url" placeholder="Skriv url inklusive https://">
        <input type="text" name="desc" id="desc" placeholder="Beskrivning">
        <input type="submit" value="Lägg till" name="btn">
    </form>

 <?php 
    $sql="SELECT * FROM linx ORDER BY firstshown DESC";
    $result=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
        echo "<p><a href='" . $row['url'] . "'>" . $row['description'] . "</a></p>";
    }
 
 }else{ ?>
 <h2>Du måste logga in!</h2>
 <a href="login.php">Login</a>
  <?php }  ?>

</body>
</html>