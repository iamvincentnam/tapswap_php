
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
      :root {
    /* Colors */
    --white: #d0cfcf;
    --text-light: #dfdcb9;
    --extra-light: #faf5ff;
    --ultramarine:hsl(217, 28%, 15%);
    --ultramarine2: hsl(220, 28%, 28%);
    --gold: #f0b92c;
    --amber: #f7b900;
    --deep-gold: #ffda06;
    --silver: rgb(118, 118, 118);
    --grey-color: rgba(135, 134, 134, 0.348);
    --olive-green:#202e32;
    --olive-green-light: #85937a;
    --violet:#36244f;
    /* Layout and dimensions */
    --max-width: 1200px;
}  
footer {
color: var(--text-light);
font-family: 'open sans', sans-serif;
font-weight: 400;
font-size: 100%;
box-sizing: border-box;
/* background-color: hsl(216, 53%, 9%); */
background-image: linear-gradient(to left,var(--ultramarine), var(--ultramarine2),var(--ultramarine));
flex-direction: column;
justify-content: center;
align-items:flex-start;

padding: 0 1rem;
display: flex;
gap: 0;
min-height: 250px;

}

.footer-logo
{
 width:100%;
    
    }

footer .first-row-flex{
   gap: 0 4rem; 
   user-select: none;
justify-content: center;
align-items:center;
justify-content: flex-start;
padding: 0 1rem;
display: flex;
padding: 1rem;
font-weight: 800;
margin: 1rem 0;
line-height: 2;
border-bottom: 1px solid rgba(208, 207, 207, 0.096);
}
#department_of_physics{color: var(--olive-green);
background-color:var(--text-light);
border-radius: 5px;
padding:.5rem;
display: inline-block;
}
.second-row-flex
{
display: flex;
width: 100%;
flex-wrap: wrap;
justify-content:space-evenly;
align-items:start;
gap: 0 1.5rem;
box-sizing: border-box;
}
.second-row-flex .column ul
{
    list-style-type: none;
    text-align: left;
    line-height: 2;
    text-align: left !important;
    padding: 0;
    margin:0;
    
    
}

.column ul li
{
    
    margin: 0;
    padding: 0;
cursor: pointer;
transition: .1s ease-out all;
}


.column ul li:hover
{
color: var(--olive-green-light);
/* font-size: 16px; */
}


.second-row-flex .column
{
    /* border: 2px solid rgb(187, 19, 19); */
    flex: 1;

   width: 200px;
}

/* footer .rsu_logo{
    width: 30px;
    
} */
.second-row-flex  .footer_text {
/* border: 2px solid wheat; */
padding: 0;
 margin: 0;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    text-align: left;
  margin-bottom: 1rem;
}
.footer_text span
{
    /* display: inline-block; 
margin:-1.5rem  0 0 2rem; */
cursor: pointer;
}
.socials
{
 display: flex;
 justify-content: space-evenly;
 align-items: center;
 gap: 5px;
} 

html{scroll-behavior: smooth;}
footer .second-row-flex li{
   width: auto;
}
#go_top{font-size: 90%;
align-self: flex-end;
cursor: pointer;
width: 80px;
padding:5px 0;
height: 30px;
border: 1px solid silver;
text-align: center;
background-color: var(--text-light);
text-decoration: none;
color: var(--olive-green);
font-weight: 600;
margin-bottom: 1rem;
/* border-radius: 50%; */
}
@media screen and (max-width: 768px){

    footer .first-row-flex{
        gap: 0 1rem;
    text-align: left;
align-items: flex-end; 
justify-content: flex-start;}

.footer_text{
    justify-content:flex-start !important;
}
        .second-row-flex {
            width: 100%;
            flex: 1;
            flex-direction: column;
        }

        
footer .first-row-flex{
font-weight: 600;
}
#department_of_physics{
padding:.2rem;
}
}



    </style>
<footer id="footer_base">   
    <div class="footer-logo first-row-flex">
        <img src="asset/rsu_logo-removebg-preview.png " width="50px" alt="flyo logo footer" class="footer-logo-img">
        <span class="text">Rivers State University,   Port Harcourt. <span id="department_of_physics"> Department Of Physics</span></span>
      
  </div>
  <!-- <div class="column hr_column">
    <hr>
  </div> -->
 <div class="second-row-flex">
    <div class="column">
        <p class="footer_text">
           
            <span class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. autem.</span>
        </p>
    </div>

     <div class="column">

<p class="footer_text">
   <img src="asset/icon-phone.svg" alt="icon phone">
    <span class="text">+2330552057</span>
</p>
<p class="footer_text">
    <img src="asset/icon-email.svg" alt="">
    
    <span class="text">em@gmail.com</span>
</p>
     </div>

    
     <div class="column">
        <ul>
            <li>About Us</li>
            <li>Jobs</li>
            <li>Press</li>
            <li>Blog</li>
        </ul>
        <!-- <h5>About Us</h5>
        <span>Jobs</span>
        <span>Press</span>
        <span>Blog</span> -->
     </div>

     <div class="column">
        <!-- <h5>Contact Us</h5>
        <span>Terms</span>
        <span>Privacy</span> -->
        <ul>
            <li>Contact Us</li>
            <li>Terms</li>
            <li>Privacy</li>
            
        </ul>
      
     </div>

     <div class="column">
        <ul class="footer_text socials">
            <li>
                <a href="#">
                   <img src="asset/icon-email.svg" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="asset/icon-phone.svg" alt="">
                </a>
            </li>
    
            <li><a href="#"><img src="asset/icon-location.svg" alt=""></a></li> 
        </ul>
      
     </div>
</div>
<a href="#nav_container" id="go_top">Go to Top</a>
</footer>
</body>
</html>