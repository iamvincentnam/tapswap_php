<?php 
session_start();
require_once('access/session.php');
$page_title = "Tapswap ";
require_once('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="asset/tapswap_icon_img.PNG.crdownload" type="image/icon">
    <link rel="stylesheet" href="./tapswap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <title>Tapswap UI</title>
    <style>
        
#boosters_fill_container{
    border-radius: 20px 20px 0 0;
    z-index: 10;
font-family: sans-serif;
color: #fff;
position: absolute;
left:0;
right: 0;
margin: 0;
bottom: -80%;
background-color:  rgba(3, 3, 5, 0.859);
transition: bottom 0.5s ease-in-out;
    /* border: 5px solid rgb(252, 239, 0); */
    padding: 0;
    height:80%;
    width: var(--tapswap_content_container_width);
}
#boosters_fill_container #close{
    margin: 1rem 1.5rem;
    padding: 0;
    position: absolute;
    font-size: 1.3rem;
    font-weight: 600;
    cursor: pointer;
  right: 0;
 top: 0;
}
#boosters_fill_container #close:active{transform: scale(.86);
}
#boosters_fill_container .boosters_fill{
padding: 0 1rem;
display: flex;
margin: 0;
align-items: center;
justify-content: space-around;
flex-direction: column;
height: 100%;
}
#boosters_fill_container .boosters_fill_h1{
    font-size: 2rem;
    margin: 0;
    font-family: sans-serif;
    padding: 0;
}
#boosters_fill_container.active {
    bottom: 0;
     /* Slide in to fill half of the container */
}
.boosters_fill .boosters_fill_icon{
    width: 80px;
    height: 80px;
    /* border: 1px solid white; */
    justify-content: center;
    display: flex;
    align-items: center;
    border-radius: 10px;
    background-color:  rgba(34, 34, 34, 0.621);;

}
#boosters_fill_container .boosters_fill_icon img{transform: scale(2);}
#boosters_fill_container .boosters_fill button{
background-color: rgb(86, 13, 111);
font-size: 1rem;
color: #fff;
border: none;
border-radius: 10px;
width: 100%;
padding:.9rem .7rem;
font-weight: 600;
cursor: pointer;}
.boosters_fill button:hover{
    opacity: .8;
}
.boosters_fill .free_div{
    /* border: 2px solid red; */
gap: 0 10px;
 width: 80px;
 height: 40px;
 margin: 0;
 padding: 0;
 display: flex;
 align-items: center;
    /* font-size: 40px; */
    
}

#boosters_fill_container .boosters_fill .free{ 
    font-size: 16px;
    font-weight: 800;
}
#boosters_fill_container .boosters_fill_span {
font-weight: 800;
font-size: 80%;
text-align: center;
font-family: sans-serif;
color: rgb(102, 102, 102);
letter-spacing: 0;
}
    </style>
</head>
<body>
    <!-- <nav>
       <a hrexamf="./login_page.html" class="hompage_link"> <img src="asset/hamburger.png" alt="" class="hamburger"></a> 
    </nav> -->
    <div id="container" >

        <!--1st container child to be referenced by #ref-->
        <div class="contents_container ref_container">
            <h2>0 Referrals</h2>
            <div id="invite_div">
                <p class="invite_link_title">My invite link:</p>
            
                <button class="invite_btn">copy</button>
            </div>
            <p class="my_referals">My Referals:</p>
            <span class="referalnotes">You don't have any referals</span>

        </div>

          <!--2nd container child to be referenced by #task-->
        <div class="contents_container"  id="book_content">
            <h2><cite>Things Fall Apart</cite> </h2>
            <p>The story of Okonkwo folows how he rose from poverty to become a respected  and wealthy warrior in the land of Umoufia, A lower Nigerian Tribe that is part of the consortum of nine connected villages. He is haunted by the actions of Unoka, his lazy, coward father who died in debt.He has a 12 year old son, Nwoye but he (Okonkwo) is not proud of him as Nwoye is less manly in his eyes.
            </p>
        </div>
 <!--third container child to be referenced by #tap-->
 <div class="contents_container active">
    <div id="number_score">
        50
    </div>
    <div id="heirachy"><img src="asset/icons8-trophy-18-bronze.png" alt="throphy icon" class="level_img"> <span class="heirachyName">Bronze</span> </div>
    <div id="tapswap_icon">
        <!-- <span>T</span> -->
        <img src="./asset/tapswap_coin.png" alt="tapswap_icon" >
    </div>
    <div id="counter_div">
        <img src="asset/icons8-lightning-bolt-18.png" alt="lightening">
        <span class="numerator">0</span>
        <span class="slash">/</span>
        <span class="denominator">100</span>
        
    </div>
    <div id="progress_bar">
         <div class="progress">
         </div>
    </div>
   </div>
        <!--4th container child to be referenced by #boost-->
        <div class="contents_container">
            <div class="figure_div">
                <span class="totalBalance">Your share balance</span>
            <h2>825 <span></span> 110</h2>
               </div>
               <div class="line"></div>
               <div class="figure_div">
                
                <p class="boosters_parapgraph">Your daily boosters:

                </p>
                <div class="boost_container">
                    <div class="boost_container_child tapping_guru">
                        <span><img src="asset/icons8-rocket-18.png" alt="lightning"></span>
                        <span>Tapping Guru <br> 3/3</span>
                    </div>
                    <div class="boost_container_child  full_tank">
                        <span><img src="asset/icons8-lightning-bolt-18.png" alt="lightning"></span>
                        <span>Full Tank <br> 3/3</span>
                    </div>
                </div>
                <p class="boosters_parapgraph">Boosters:</p>
                
               </div>

               <div class="figure_div booster_figure_div">
                <div class="boosters_container">
                    <img src="asset/icons8-rocket-18.png" alt="Rocket">
                    <div>Boost <br> 0.5 Ton</div>
                </div>
                <div class="boosters_container">
                    <img src="asset/icons8-fire-18.png" alt="fire_boost">
                    <div>Multi tap</div>
                </div>
                <div class="boosters_container">
                    <img src="asset/icons8-battery-18.png" alt="battery">
                    <div>Energy Limit</div>
                </div>
                
               </div>

               
        </div>

        <!--5th container child to be referenced by #stats-->
        <div class="contents_container stats_content">
            <div class="figure_div">
                <span class="totalBalance">Total Share Balance</span>
               <div class="total_balance_div">
                 <img src="asset/icons8-coin-24.png" alt="coin">
                    <h2>171.758 <span></span>T</h2>
               </div>
          
               </div>
            
            <div class="line"></div>
           
           <div class="figure_div">
            <span>Total Touches:</span>
                <p class="integer">184684870914</p>
           </div>
           <div class="figure_div">
            <span>Total Players:</span>
                <p class="integer">48757562</p>
           </div> 
           <div class="figure_div">
            <span>Daily users:</span>
                <p class="integer">18480708</p>
           </div>
           <div class="figure_div">
            <span>Online players:</span>
            <p class="integer">458303</p>
           </div>
        </div>

        <div id="footer">
            
            <div class="options tab_btn" id="ref">
                <span><img src="./asset/icons8-cat-18.png" alt="ref"></span>
            <span>Ref</span>
            </div>
            <div class="options tab_btn" id="task">
                <span><img src="./asset/icons8-check-18.png" alt="task"></span>
                <span>Task</span></div>
            <div class="options tab_btn active" id="tap">
                <span><img src="./asset/icons8-coin-18.png" alt="tap"></span>
            <span>Tap</span>
            </div>
            <div class="options tab_btn" id="boost">
                <span><img src="./asset/icons8-fire-18.png" alt="boost"></span>
            <span>Boost</span>
            </div>
            <div class="options tab_btn" id="Stats">
                <span><img src="./asset/icons8-bar-chart-18.png" alt="stats"></span>
            <span>Stats</span>
            </div>
        </div>
        <div id="boosters_fill_container">
            <p id="close">X</p>
            <div class="boosters_fill">
                <div class="boosters_fill_icon">
                    <img src="asset/icons8-lightning-bolt-18.png" alt="lightning_bolt">
                </div>
                <h1 class="boosters_fill_h1">
                    Full Tank
                </h1>
                <span class="boosters_fill_span">
                    Fill your energy to the max
                </span>
                
               
                <div class="free_div">
                    <img src="asset/icons8-coin-24.png" alt="">
                    <p class="free"
                    >Free</p>
                </div>
                <button class="boosters_fill_button">
                    Get It!.
                </button>
            
               </div>
            <p id="watermark" class="golden_bg_source">
                 @iamvincentnam</p>
        </div>
        </div>
        
    <?php require_once('footer.php') ?>
<script src="./app.js"></script>


</body>
</html>