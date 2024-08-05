<?php 
session_start();
if (!isset($_SESSION['player_name'])) {
    header("Location: login.php");
    exit();}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <style>
  @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap');

  @import url('https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap');
    body{position: relative;
      background-color: #dfdcb9;;
      height: 100vh;
    }
    .container{margin:10rem auto;
height:200px;
padding: 2rem;
/* border: 1px groove silver; */
display: flex;
justify-content: space-between;
flex-direction: column;
align-items: center;
}
    .container h1{text-align: center;
    font-size: 3rem;
color:   hsl(217, 28%, 16%);;
margin:0;

letter-spacing: 2px;}
.container h1 span{font-family: 'Tilt Prism', cursive;}
.container a {
text-decoration: none;
padding: 5px 20px;
color:  #dfdcb9;
border-radius: 15px;
font-weight: 600;
background-color:  hsl(217, 28%, 16%);
transition: background 100ms ease;
}
.container a:hover{
  border: 1px solid hsl(217, 28%, 16%);; 
  color: hsl(217, 28%, 16%);
  background:none !important;
}
#link_div
{
    /* border: 2px solid white; */
    width: 250px;
    max-width: 100%;
    height: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
<?php


if(isset($_SESSION['player_name'])):?>



    </style>
    <title><?php echo $_SESSION['player_name']; ?>!!  PAGE</title>
</head>
<body>
    <div class="container">
        
    <h1>WELCOME, <?php echo $name = $_SESSION['player_name']; ?> </h1>
<div id="link_div">
<a href="index.php"> Home</a>
<a href="tapswap.php">continue</a>
</div>
  
    </div>
    <?php  endif;  ?>
    
    


</body>
</html>
