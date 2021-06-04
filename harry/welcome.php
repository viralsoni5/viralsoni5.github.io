
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body >
    

<div class="bg">

<?php

$uname = "veeral" ;
$pass = "veeral" ;
$uname = "panthor";

session_start ();

if(isset($_SESSION ['uname'])){
    ?>
<div class="welcome">

<?php echo "<h1> <b> Welcome " .$_SESSION[ 'uname']." </h1> ";   ?>
</div>

<div class="goodluck">
<?php echo "<a href = 'yhi.php'> <B>Good Luck </a> <br>"; ?>
</div>

<div class="logout">


<?php echo "<a href = 'logout.php' name = logout value = logout > Logout </a>  <br>"; ?> </div>

<?php
}
 else{

    if($_POST['uname'] == $uname && $_POST['pass'] == $pass){
$_SESSION['uname'] =$uname;

echo "<script> location.href='Welcome.php' </script>";
    }


else {
    
    echo "<script> username or password is incorrect!! </script>";
echo "<script> location.href='index.php' </script>";

}
}

?>


</div>

<style>



.welcome{
    font-size: 75px;
    text-align: center;
   

    padding: 16px 32px;
}

.goodluck  {
    font-size: 145px;
  
  
    padding: 16px 32px;
     ;
   
}

a{

    text-decoration: none;
    color: black;
}
.logout  {
    
    display: block;
  
  background-color :#1A73E8 ;
 
 
  color: #fff;
 
  border-radius: 3.5rem;

  transition: transform .2s; /* Animation */
  margin:50px;
  cursor: pointer;
margin-left: 320px;
margin-right: 320px;
  text-align: center;
  font-size: 145px;
}


.goodluck{
    text-align: center;
    transition: transform .2s; /* Animation */
}

body{
    background-color: #74FFEE;
  
}

.logout:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
.goodluck:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>


</body>
</html>