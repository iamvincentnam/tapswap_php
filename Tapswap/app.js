
const earnings =  document.querySelector('#number_score');
let earningsCount =parseInt(earnings.textContent);
const tapswap_icon=document.querySelector('#tapswap_icon');
const numerator = document.querySelector('.numerator');
const denominator = parseInt(document.querySelector('.denominator').textContent);
const  progressIndicator=document.querySelector('.progress');

let count = parseInt(numerator.textContent);
let width=0;
progressIndicator.style.width=`${width}%`;
// let isCounting = true;
let incrementInterval;
let isPaused = false;

function startIncrementing() {
    incrementInterval = setInterval(() => {
        if (count < denominator) {
            count++;
            numerator.textContent = count;
            progressIndicator.style.width=`${count}%`;
            
        } else {
            clearInterval(incrementInterval);
        }

    }, 100);
}
//startIncrementing();
function stopIncrementing() {
    clearInterval(incrementInterval);
}

function handleTapSwapClick(){
    stopIncrementing();
    if(count!=0){
    earningsCount+=52;
    earnings.textContent=earningsCount;
    updateAchievementLevel(earningsCount);
    }
 //    console.log(earningsCount)
   if (count > 0) {
    
    count= Math.max( count-2, 0)
     /*this code here (below) checks to see if the largest value between the 'count -10' and 0 is zero i.e after subtracting count from 10. thus it returns the largest value.
     this would make count not to show a negative integer on the page*/
     numerator.textContent = count;
     progressIndicator.style.width=`${count}%`;
    //  audiofunc();
 };


 if(!isPaused){
     isPaused =true;
     setTimeout(() => {
         isPaused = false;
         startIncrementing();
     },1800);
 }

}

tapswap_icon.addEventListener('click',handleTapSwapClick);
startIncrementing();
//functionn below is for audio sound playing
function audiofunc(){
    const audioElement= document.createElement('audio');
  audioElement.id='audio-player';
  audioElement.src =' asset/timer_sound.wav';
  audioElement.play();
  }


const hierarchyNameElement= document.querySelector('.heirachyName');
const levelImageElement = document.querySelector('.level_img');


  let achievement_levels =[
   
    {
        level:'Silver',
        src:'asset/icons8-trophy-18-silver.png'
    },

    {
        level:'Gold',
        src:'asset/icons8-trophy-18-gold.png'
    },
    {
        level:'Platinum',
        src:'asset/icons8-trophy-20-diamond.png'
    }
    
    
  ];

  function updateAchievementLevel(level){
    let currentAchievement;
    
    if(level > 5000 && level < 10000){
      currentAchievement =achievement_levels[0];
    }
    else if(level >10000 && level < 50000){
        currentAchievement =achievement_levels[1];
    }
    else if(level >50000){
        currentAchievement =achievement_levels[2];
   
    }
    // else {
    //     currentAchievement =achievement_levels[3];
    // }
    if(currentAchievement){
         
        hierarchyNameElement.textContent=currentAchievement.level;
        levelImageElement.setAttribute('src',currentAchievement.src);
    }
    }
        
  
  const all_contents= document.querySelectorAll('.contents_container');
  const tabs = document.querySelectorAll( '.tab_btn');
  const tapswapIconCoin= document.getElementById('tapswap_icon');
//   console.log(tapswapIconCoin);
//   tapswapIconCoin.addEventListener('click',()=>{  });
    tabs.forEach((tab,index)=>{
      tab.addEventListener('click',(e)=>{
        tabs.forEach((tab=>tab.classList.remove('active')));
        tab.classList.add('active');
        all_contents.forEach((content)=>{
            content.classList.remove('active');
            all_contents[index].classList.add('active');
           
         });
      

      });
     
      });

      let statsCountInterval;
   
   function integerStatsFunc(){
    let integersInStatsSection = document.querySelectorAll('.integer');
    integersInStatsSection.forEach((value)=>{
       let  integer = parseInt(value.textContent);
       let statsCount= Math.floor(integer/ 1000)* 1000;
       value.textContent=numeral(statsCount).format('0,0') ;
        let incrementstep = Math.ceil((integer - statsCount) /50);
        let integerStatsInterval= setInterval(()=>{
            statsCount += incrementstep;

            if(statsCount >= integer){
                value.textContent = numeral(integer).format('0,0');
                clearInterval(integerStatsInterval);

            }else{
                  value.textContent = numeral(statsCount).format('0,0');
                }
        },100)
    
       });
   }



/* the code below shows or disappears the full or tappin guru refil tab by sliding it in from the bottom */
const boosters_fill = document.querySelector('#boosters_fill_container');
const boosters_fill_span = document.querySelector('.boosters_fill_span');
const boosters_fill_h1 = document.querySelector('.boosters_fill_h1');
const boost_container_child= document.querySelectorAll('.boost_container_child');
const boosters_fill_icon= document.querySelector('.boosters_fill_icon > img');


boost_container_child.forEach((each_boost)=>{
// console.log(each_boost)


function fulltank_display(){
    boosters_fill_span.textContent = 'Fill your energy to the max';
    boosters_fill_h1.textContent = 'Full Tank';
    boosters_fill_icon.src='asset/icons8-lightning-bolt-18.png'
}
function tapping_guru_display(){
    boosters_fill_span.textContent = 'Multiply your tap income by x5 for 20 seconds. Do not use energy while active.';
    boosters_fill_h1.textContent = 'Taping Guru';
    boosters_fill_icon.src='asset/icons8-fire-18.png'; 
}
each_boost.addEventListener('click',()=>{
    boosters_fill.classList.add('active');
    if(each_boost.classList.contains('full_tank')){
       fulltank_display();
    }else{     
tapping_guru_display();
    }
   

})
})


const close_btn_booster_fill= document.querySelector('#close');

const get_it_btn= document.querySelector('.boosters_fill_button');
get_it_btn.addEventListener('click',()=>{
    boosters_fill.classList.remove('active');
})

close_btn_booster_fill.addEventListener('click',()=>{
    boosters_fill.classList.remove('active');
    });
