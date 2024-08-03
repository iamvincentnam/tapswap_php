
<?php 
require_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="tapswap.css">
    <title>welcome Page</title>
    <style>
        @import url(https://fonts.google.com/specimen/Raleway);
        @import url(https://fonts.google.com/specimen/Open+Sans);
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
        
    </style>
</head>



<body>
    <!-- <div class="nav_container">
        <nav>
       
         <h1 class="nav_logo"><a href="./index.php"> Tapswap</a></h1>
         <img src="asset/hamburger.png" alt="hamburger" class="hamburger" id="hamburger_btn">
        <ul class="nav_links" id="toggle_nav_link_display">
            <li><a href="./header.php">about</a></li>
            <li><a href="./index.php">Blog</a></li>
          
            <li><a href="./tapswap.php">contact</a></li>
            <li><a href="#">Features</a></li>
        </ul>
       
        </nav>
    </div> -->
    <section id="heroPageSection_container">
<div class="content">
    <p class="subtitle">Hello,</p>
    <h1 class="title">You're Welcome to <span>Tapswap</span></h1>
    <p class="description">
        Web3.0 is the third generation of web technology, focusing on decentralized applications (Dapps). <br>Web3.0 extensively uses blockchain technology, adopting token-based economics, and emphasizes machine learning and artificial intelligence.
        Web3.0 aims to dismantle the centralized control of the web, bringing changes to every aspect of society.
    </p>
    <div class="action_btn">
        <a href="./login.php" class="link_to_log_in"><button class="continue">Continue</button></a> 
    </div>
</div>
<div class="tapswap_hero">
   <img src="asset/bot_image.png" alt="tap_swap_icon"> 
</div>

    </section>
    <?php require_once('footer.php'); ?>
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