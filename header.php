<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tapswap.css">
    <title>header file</title>
    <style>
     
    </style>
</head>
<body>
<div class="nav_container" id="nav_container">
        <nav>
       
         <h1 class="nav_logo"><a href="./index.php"> Tapswap</a></h1>
         <img src="asset/hamburger.png" alt="hamburger" class="hamburger" id="hamburger_btn">
        <ul class="nav_links" id="toggle_nav_link_display">
            <li><a href="./header.php">about</a></li>
            <li><a href="./index.php">Blog</a></li>
          
            <li><a href="#footer_base">contact</a></li>
            <li><a href="tapswap.php">Features</a></li>
        </ul>
       
        </nav>
    </div>
    <script>
        const hamburger_btn = document.querySelector('#hamburger_btn');
        // console.log(hamburger_btn)
        const nav_links = document.querySelector('.nav_links');
        hamburger_btn.addEventListener('click',()=>{
            nav_links.classList.toggle('active_nav');
        })
       </script>
</body>
</html>