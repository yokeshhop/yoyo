<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>MaxproLive</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png">
<meta name="robots" content="noindex">
     <style>   *{

        font-family: 'Ubuntu', sans-serif;
         }
 .box1 {

         display: inline-block;
         border:2px solid black;
         text-align:center;
         align-items:center;
         margin:10px;
         background-color:#FDEBD0;
         border-radius:1.5rem;
         text-align:center;
         margin-left:-.7rem;
         margin-right:.8rem;

         }
         
         .container {Width:100%;
margin-left:.6rem;}

         .box1:hover{
             background-color: #92DCA1;
			 border-color:white;
			 border:4px solid white;
         }

         body {
                       text-align:center;
         align-items:center;
         background-image:url("https://images.hdqwalls.com/download/abstract-simple-background-4k-lp-1366x768.jpg");
         }

         .box1 a {

         text-decoration: none;
         color: black;
         line-height:10px ;
         background-color:red;
         }

         input:focus{

         transition: cubic-bezier(0.075, 0.82, 0.165, 1);
                    border-color:red;
         }

         h1 {

         font-family:: Georgia, 'Times New Roman', Times, serif;
         }

         #brand{

         text-decoration:none;
         color: white;
         }

         select{
             text-align: center;
         width:40%;
         height:38px;
         border: 1.5px solid yellow;
            border-radius:1rem;margin-left:-1.2rem;
         }

         option{
                 line-height:35px ;
                 border: 1px solid black;
                 border-radius:1.5rem;
                 font-size:18px;

         }
         
         .dropdown {margin-left:-1.4rem;
         }

           input{

         width:40%;
         height:38px;
         border: 1.5px solid yellow;
         text-align: center;
            border-radius:1rem;
            font-size:18px;
            margin-left:-1.4rem;
         }
         
		 input:hover{

         border:4px solid black;
         }

         .con   {

           display:flexbox;
           width:100%;
           margin:15px;
         margin:10px;
         text-align: center;


         }

         .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  width:100%;
  border-radius:1rem;
  background-color:orangered;
  font-size: 16px;
  border: none;
  cursor: pointer;

}

.dropdown {
  position: relative;
  display: inline-block;
  width: :80% ;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 100%;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}


         @media only screen and (max-width: 768px) {
 select, input, .drpbtn , .dropdown{
    width:85%;
  }

  .
}



$fuschia: #ff0081;
$button-bg: $fuschia;
$button-text-color: #fff;
$baby-blue: #f8faff;

body{
  font-size: 16px;
  font-family: 'Helvetica', 'Arial', sans-serif;
  text-align: center;
  background-color: $baby-blue;
}
.bubbly-button{
  font-family: 'Helvetica', 'Arial', sans-serif;
  display: inline-block;
  font-size: 1em;
  padding: 1em 2em;
  margin-top: 100px;
  margin-bottom: 60px;
  -webkit-appearance: none;
  appearance: none;
  background-color: $button-bg;
  color: $button-text-color;
  border-radius: 4px;
  border: none;
  cursor: pointer;
  position: relative;
  transition: transform ease-in 0.1s, box-shadow ease-in 0.25s;
  box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);
  
  &:focus {
    outline: 0;
  }
  
  &:before, &:after{
    position: absolute;
    content: '';
    display: block;
    width: 140%;
    height: 100%;
    left: -20%;
    z-index: -1000;
    transition: all ease-in-out 0.5s;
    background-repeat: no-repeat;
  }
  
  &:before{
    display: none;
    top: -75%;
    background-image:  
      radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle,  transparent 20%, $button-bg 20%, transparent 30%),
    radial-gradient(circle, $button-bg 20%, transparent 20%), 
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle,  transparent 10%, $button-bg 15%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%);
  background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%, 10% 10%, 18% 18%;
  //background-position: 0% 80%, -5% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 85% 30%;
  }
  
  &:after{
    display: none;
    bottom: -75%;
    background-image:  
    radial-gradient(circle, $button-bg 20%, transparent 20%), 
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle,  transparent 10%, $button-bg 15%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%),
    radial-gradient(circle, $button-bg 20%, transparent 20%);
  background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 10% 10%, 20% 20%;
  //background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;
  }
 
  &:active{
    transform: scale(0.9);
    background-color: darken($button-bg, 5%);
    box-shadow: 0 2px 25px rgba(255, 0, 130, 0.2);
  }
  
  &.animate{
    &:before{
      display: block;
      animation: topBubbles ease-in-out 0.75s forwards;
    }
    &:after{
      display: block;
      animation: bottomBubbles ease-in-out 0.75s forwards;
    }
  }
}


@keyframes topBubbles {
  0%{
    background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;
  }
    50% {
      background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 90% 30%;}
 100% {
    background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%, 50% 40%, 65% 10%, 90% 20%;
  background-size: 0% 0%, 0% 0%,  0% 0%,  0% 0%,  0% 0%,  0% 0%;
  }
}

@keyframes bottomBubbles {
  0%{
    background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%, 70% -10%, 70% 0%;
  }
  50% {
    background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%, 105% 0%;}
 100% {
    background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%, 110% 10%;
  background-size: 0% 0%, 0% 0%,  0% 0%,  0% 0%,  0% 0%,  0% 0%;
  }
}
	
	

</style>
<script src="https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/lazysizes.min.js"></script>
</head>
<body>

<div id="jtvh1">
<a id="brand" href="#">
<h1>Maxpro Live [ JIO ]</h1>
</a>
</div>          
</div><a  type="button" href="./login.php" style="background-color:white; text-decoration:none; margin-top:-.3rem; margin-bottom:-.1rem;" class="bubbly-button">One Time Login</a><div class="con" ><br>
    <div class="dropdown">
  <button class="dropbtn">Select Plateform</button>
  <div class="dropdown-content">
  
<a href="./index.php">JIO TV</a>
<a href="./zee5.php"> ZEE5</a>
  <a href="./sony.php">SONY LIV</a>
  <a href="https://snehstream.herokuapp.com/22730/MaxproLive%28LocalHost%29.m3u">Localhost M3U</a>
  </div>
</div> <br> <br>

 <form>
     <input id="search" type="search" placeholder="Search"/>
 </form>
</div>
<div id="content">
<div class="container">

<div class="box1">
<a href="play.php?c=Aastha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Aastha</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=Aastha_Bhajan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Bhajan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Aastha Bhajan</p>
</div>
</a>
</div>


<div class="box1">
<a href="play.php?c=Sanskar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanskar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sanskar</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=Satsang_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Satsang_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Satsang TV</p>
</div>
</a>
</div>


<div class="box1">
<a href="play.php?c=Arihant_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Arihant_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Arihant TV</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=Divya_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Divya_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Divya TV</p>
</div>
</a>
</div>


<div class="box1">
<a href="play.php?c=Sadhna" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sadhna</p>
</div>
</a>
</div>


<div class="box1">
<a href="play.php?c=Colors_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors HD</p>
</div>
</a>
</div>


<div class="box1">
<a href="play.php?c=Sony_SAB" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony SAB</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=And_TV_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/And_TV_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">And TV HD</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=Sony_SAB_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony SAB HD</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=Rishtey" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Rishtey</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Anmol" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Anmol</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Pal" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pal.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Pal</p>
</div>
</a>
</div>



<div class="box1">
<a href="play.php?c=Sony_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_HD.png">
<div class="card-body">
<p class="card-text">Sony HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_TV_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_TV_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_TV_HD.png">
<div class="card-body">
<p class="card-text">Zee TV HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Max_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Max_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Max_HD.png">
<div class="card-body">
<p class="card-text">Sony Max HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Cinema_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema_HD.png">
<div class="card-body">
<p class="card-text">Zee Cinema HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Six_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Six_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Six_HD.png">
<div class="card-body">
<p class="card-text">Sony Six HD</p>
</div>
</a>
</div>


<div class="box1">
<a href="play.php?c=Colors_Cineplex" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Cineplex.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Cineplex</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Pix_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Pix HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Max_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SET_MAX.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Max SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_MAX2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_MAX2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony MAX2</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=And_Pictures_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/And_Pictures_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">And Pictures HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Cinema</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=B4U_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text">B4U Movies</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=Aaj_Tak" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aaj_Tak.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aaj_Tak.png">
<div class="card-body">
<p class="card-text">Aaj Tak</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=IBN_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/IBN_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News 18 India</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=India_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">India TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=NDTV_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text">NDTV India</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Classic" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Classic.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Bollywood</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=NDTV_Good_Times" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_Good_Times.png" style="height: 120px">
<div class="card-body">
<p class="card-text">GOOD TiMES</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Business" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Business.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Business</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CNBC_Tv18_Prime_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Tv18_Prime_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">CNBC Tv18 Prime HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=NDTV_Profit" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_Profit.png" style="height: 120px">
<div class="card-body">
<p class="card-text">NDTV Profit</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CNBC_Awaaz" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Awaaz.png" style="height: 120px">
<div class="card-body">
<p class="card-text">CNBC Awaaz</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=India_Science" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_Science.png" style="height: 120px">
<div class="card-body">
<p class="card-text">India Science</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_01" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_01.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 01</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_02" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_02.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 02</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_03" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_03.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 03</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=Zee_Marathi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Marathi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Marathi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Marathi_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Marathi_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Marathi HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Kannada_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Kannada HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Kannada</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Comedy_Central_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Comedy Central HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Gujarati" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Gujarati.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Gujarati</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Bangla</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Bengali_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Bengali_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Bengali HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Epic_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Epic_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Epic</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Infinity_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Infinity HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Yuva" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Yuva.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Yuva</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=PTC_Punjabi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PTC Punjabi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ID" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ID.PNG" style="height: 120px">
<div class="card-body">
<p class="card-text">Investigation Discovery</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD India</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_National" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_National.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD National</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Dabangg" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dabangg.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Dabangg</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Tamil_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Tamil_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Tamil HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Madhya_Pradesh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Madhya_Pradesh.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Madhya Pradesh</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Rajasthan_Jaipur" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajasthan_Jaipur.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Rajasthan (Jaipur)</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Cineplex" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Cineplex.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Cineplex</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Pix_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Pix HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Max_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SET_MAX.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Max SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_MAX2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_MAX2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony MAX2</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=And_Pictures_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/And_Pictures_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">And Pictures HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Cinema</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=B4U_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text">B4U Movies</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Classic" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Classic.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Bollywood</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Cricket" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket.png">
<div class="card-body">
<p class="card-text">Jio Cricket HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Cricket_English" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_English.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_English.png">
<div class="card-body">
<p class="card-text">Jio Cricket English HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_HD.png">
<div class="card-body">
<p class="card-text">Colors HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Times_NOW" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_NOW.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_NOW.png">
<div class="card-body">
<p class="card-text">Times NOW</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Times_Now_Navbharat" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_Now_Navbharat.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_Now_Navbharat.png">
<div class="card-body">
<p class="card-text">Times Now Navbharat</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ten_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_HD.png">
<div class="card-body">
<p class="card-text">Ten 1 HD</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=BBC_Marathi" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Marathi.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Marathi.png">
<div class="card-body">
<p class="card-text">BBC Marathi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ABP_News_India" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_News_India.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_News_India.png">
<div class="card-body">
<p class="card-text">ABP News India</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ten2_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten2_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten2_HD.png">
<div class="card-body">
<p class="card-text">Ten 2 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CNN_NEWS_18" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNN_NEWS_18.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNN_NEWS_18.png">
<div class="card-body">
<p class="card-text">CNN NEWS 18</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=MTV_HD_Plus" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_HD_Plus.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_HD_Plus.png">
<div class="card-body">
<p class="card-text">MTV HD Plus</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=MTV_Beats_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_Beats_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_Beats_HD.png">
<div class="card-body">
<p class="card-text">MTV Beats HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Republic_TV" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Republic_TV.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Republic_TV.png">
<div class="card-body">
<p class="card-text">Republic TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Mastiii" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mastiii.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mastiii.png">
<div class="card-body">
<p class="card-text">Mastiii</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ABP_Majha" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Majha.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Majha.png">
<div class="card-body">
<p class="card-text">ABP Majha</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nick_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nick Hindi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TV9_Karnataka" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Karnataka.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TV9 Karnataka</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Pogo_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Pogo Hindi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Polimer_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Polimer News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TV9_Telugu_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Telugu_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TV9 Telugu News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Cartoon_Network_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Cartoon Network Hindi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Discovery_HD_World" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_HD_World.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Discovery HD World</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ABP_Ananda" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Ananda.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ABP Ananda</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_BBC_Earth_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony BBC Earth HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=History_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">History TV18 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TLC_HD_World" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TLC_HD_World.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TLC HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Food_Food" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Food_Food.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Food Food</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=Bhojpuri_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhojpuri_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Bhojpuri Cinema</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Enterr_10" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Enterr_10.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Enterr 10</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Action" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Action.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Action</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Cinemalu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinemalu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Cinemalu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Anmol_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Anmol Cinema</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=IBN_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/IBN_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News 18 India</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=India_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">India TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=NDTV_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text">NDTV India</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Times_Now_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_Now_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Times Now World</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=NDTV_24x7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_24x7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">NDTV 24x7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ETV Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Public_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Public_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Public TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=24_Ghanta_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/24_Ghanta_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">24 Ghanta TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sakshi_tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sakshi_tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sakshi tv</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Suvarna_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Suvarna_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Suvarna News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=NTV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NTV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">NTV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Thanthi_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Thanthi_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Thanthi TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News 24</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TV9_Maharashtra" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Maharashtra.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TV9 Maharashtra</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=BTV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BTV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">BTV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_24_Taas" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_24_Taas.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee 24 Taas</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Newslive" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Newslive.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Newslive</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ten3_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten3_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ten 3 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Sports" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Sports.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Sports HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Dsports_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dsports_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Eurosport HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Cricket_1_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_1_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Cricket 1 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football 1 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football 2 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football_3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football 3 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football_4" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_4.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football 4 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ten_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ten 1</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ten_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ten 2</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ten_3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ten 3</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Six_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Six_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Six SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zing" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zing.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zing</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=9XM" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/9XM.png" style="height: 120px">
<div class="card-body">
<p class="card-text">9XM</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=E_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/E_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text">E 24</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=B4U_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text">B4U Music</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zoom" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zoom.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ZOOM</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=MTV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">MTV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=9X_Jalwa" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/9X_Jalwa.png" style="height: 120px">
<div class="card-body">
<p class="card-text">9X Jalwa</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Public_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Public_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Public Music</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jaya_Max" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_Max.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jaya Max</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sangeet_Bhojpuri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Bhojpuri.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sangeet Bhojpuri</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=PTC_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PTC Music</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sangeet_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sangeet Bangla</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=sonic_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/sonic_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sonic Hindi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Yay_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Yay Hindi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nickelodeon" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nickelodeon.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nickelodeon</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nick_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nick Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Pogo_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Pogo Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CN_HD_English" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_English.png" style="height: 120px">
<div class="card-body">
<p class="card-text">CN HD+ English</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Cartoon_Network_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Cartoon Network Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nick_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nick Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Discovery_Kids_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Kids_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Discovery Kids 2</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nick_Junior" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Junior.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nick Junior</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Animal_Planet_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Animal Planet HD World</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Travel_XP_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Travel XP HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Animal_Planet_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Animal Planet Hindi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Discovery_Channel_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Discovery Channel Hindi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=History_18_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">History TV18 HD Hindi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Discovery_Science" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Science.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Discovery Science</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Events" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Events.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Events HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Discovery_Channel_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Discovery Channel Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Discovery_Channel_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">D Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=History_18_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">History TV18 HD Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=History_18_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">History TV18 HD Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Animal_Planet_English" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_English.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Animal Planet English</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Samara_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samara_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Samara News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Discovery_Channel_Bengali" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Bengali.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Discovery Channel Bengali</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Travel_XP_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Travel XP Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_BBC_Earth_HD_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony BBC Earth HD Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Discovery" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Discovery</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_BBC_Earth_HD_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony BBC Earth HD Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ayush_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ayush_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ayush TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Desi_Channel" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Desi_Channel.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Desi Channel</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Travel_XP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Travel XP HD Hindi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TLC_English" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TLC_English.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TLC English</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_Abhiruchi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Abhiruchi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ETV Abhiruchi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TLC_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TLC_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TLC Hindi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sadhguru_Television" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhguru_Television.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sadhguru Television HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kaumudy_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kaumudy_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kaumudy TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CNBC_Tv_18" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Tv_18.png" style="height: 120px">
<div class="card-body">
<p class="card-text">CNBC Tv 18</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ET_Now" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ET_Now.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ET Now</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ET_Now_Swadesh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ET_Now_Swadesh.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ET Now Swadesh</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Bhakti_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhakti_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Bhakti TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sri_Sankara" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Sankara.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sri Sankara</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SaiTV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SaiTV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sai TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Peace_of_Mind" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Peace_of_Mind.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Peace of Mind</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=mh1_Shraddha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/mh1_Shraddha.png" style="height: 120px">
<div class="card-body">
<p class="card-text">mh1 Shraddha</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Lakshya_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Lakshya_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Lakshya TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sri_Venkateshwar_Bhakti" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Venkateshwar_Bhakti.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sri Venkateshwar Bhakti</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=Paras_tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Paras_tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Paras tv</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Angel_TV_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Angel_TV_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Angel TV HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CVR_OM_Spiritual" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_OM_Spiritual.png" style="height: 120px">
<div class="card-body">
<p class="card-text">CVR OM Spiritual</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Aradhana_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aradhana_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Aradhana TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jinvani_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jinvani_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jinvani TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=PTC_Simran" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Simran.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PTC Simran</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Shubh_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shubh_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shubh TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sai_Leela" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sai_Leela.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sai Leela</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Hindu_Dharmam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hindu_Dharmam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Hindu Dharmam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Subhavartha_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Subhavartha_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Subhavartha TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Divya_Vani" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Divya_Vani.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Divya Vani</p>
</div>
</a>
</div>

<div class="box1">
<a href="play.php?c=Rujumargam_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rujumargam_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mercy TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Calvary" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Calvary.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Calvary</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_04" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_04.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 04</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_05" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_05.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 05</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_06" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_06.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 06</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_07" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_07.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 07</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_08" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_08.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 08</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_09" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_09.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 09</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_10" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_10.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 10</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_11" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_11.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 11</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_12" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_12.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 12</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Cricket_4_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_4_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Cricket 4 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_13" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_13.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 13</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_14" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_14.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 14</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_15" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_15.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 15</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_16" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_16.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 16</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_17" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_17.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 17</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_18" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_18.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 18</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_19" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_19.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 19</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_20" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_20.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 20</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_21" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_21.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 21</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swayam_Prabha_22" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_22.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swayam Prabha 22</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=evidya_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PM e Vidya 01</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=evidya_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PM e Vidya 02</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=evidya_3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PM e Vidya 03</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=evidya_4" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_4.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PM e Vidya 04</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=evidya_5" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_5.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PM e Vidya 05</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=evidya_6" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_6.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PM e Vidya 06</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=evidya_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PM e Vidya 07</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Raj_Pariwar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Pariwar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Raj Pariwar</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Bihar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bihar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Bihar</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Uttar_Pradesh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Uttar_Pradesh.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Uttar Pradesh</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jaya_TV_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_TV_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jaya TV HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Mazavali_Manorama_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mazavali_Manorama_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mazavali Manorama HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=MK_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MK_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">MK TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Super" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Super.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Super</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vendhar_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vendhar_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vendhar TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sanjha_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanjha_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sanjha TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Anjan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Anjan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Anjan TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=GarvPunjabi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GarvPunjabi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Garv Punjabi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=JUSPunjabi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/JUSPunjabi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">JUSPunjabi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Arre" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Arre.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Arre HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Peppers_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Peppers_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Peppers TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sarthak_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sarthak_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Odisha</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Flower_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Flower_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Flower TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Mazhavil_Manorama" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mazhavil_Manorama.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mazhavil Manorama</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Bangla</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Puthu_Yugam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Puthu_Yugam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Puthu Yugam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Saam_Tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Saam_Tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Saam Tv</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Oriya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Oriya.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Oriya</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jonack" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jonack.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jonack</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Rang" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rang.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Rang</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Rengoni" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rengoni.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Rengoni</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ETV Plus</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Marathi_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Marathi_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Marathi SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Sahayadri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sahayadri.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Sahayadri</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_aath" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_aath.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony aath</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Aakaash_bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aakaash_bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Aakash Aath</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Malayalam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Malayalam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Malayalam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Dangal" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dangal.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Dangal</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Oriya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Oriya.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Oriya</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Polimer_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Polimer TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Raj_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Raj TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Makkal_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Makkal_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Makkal TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kairali_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kairali TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Captain_tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Captain_tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Captain tv</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_urdu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_urdu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD urdu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Saptagiri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Saptagiri.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Saptagiri</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD9_chandana_kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD9_chandana_kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD9 chandana (kannada)</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Girnar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Girnar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Girnar</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Punjabi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Punjabi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Punjabi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Kashir" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kashir.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Kashir</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nepal_one" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nepal_one.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nepal one</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD13_Guwahati_NE" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD13_Guwahati_NE.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD13 Guwahati NE</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Amrita_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Amrita_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Amrita TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kairali_People_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_People_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kairali News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD5_Podhigai" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD5_Podhigai.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD5 Podhigai</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vasanth_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vasanth_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vasanth TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Salaam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Salaam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Salaam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kasturi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kasturi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kasturi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kairali_WE_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_WE_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kairali WE TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vissa_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vissa_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vissa TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Maiboli" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maiboli.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Maiboli</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TheQIndia" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TheQIndia.png" style="height: 120px">
<div class="card-body">
<p class="card-text">The Q</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TheQ_Kahaniyan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TheQ_Kahaniyan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">The Q Kahaniyan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Andy_Haryana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Andy_Haryana.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Andy Haryana</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Dishum_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dishum_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Dishum TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Namma_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Namma_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Namma TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Rangamanch" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rangamanch.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Rangamanch</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Dillagi_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dillagi_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Dillagi TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Dhamaal_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dhamaal_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Dhamaal TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Talkies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Talkies.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Talkies</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=J_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/J_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text">J Movies</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Bangla_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Bangla Cinema</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ETV Cinema</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Fakt_Marathi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Fakt_Marathi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Fakt Marathi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Pitaara" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pitaara.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Pitaara</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Maha_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maha_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Maha Movies</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Raj_Digital_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Digital_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Raj Digital Plus</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=PTC_Punjabi_Gold" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi_Gold.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PTC Punjabi Gold </p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Oscar_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Osar_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Oscar Movies</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Indradhanu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Indradhanu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Indradhanu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Amaar_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Amaar_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Amaar Cinema</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ABN_Andhra_Jyothi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABN_Andhra_Jyothi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ABN Andhra Jyothi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_Nation" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Nation.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News Nation</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kanak_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kanak_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kanak News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=India_news" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_news.png" style="height: 120px">
<div class="card-body">
<p class="card-text">India news</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Puthiya_Thalimurai" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Puthiya_Thalimurai.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Puthiya Thalimurai</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_BIHAR" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_BIHAR.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News18 BIHAR</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Dighvijay_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dighvijay_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Dighvijay TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Kalinga" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kalinga.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Kalinga</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_News_Gujarati" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_News_Gujarati.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News18 Gujarati</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Tez" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tez.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Good News Today</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Asianet_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Asianet News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_BBC_Earth_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony BBC Earth SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_Kannada_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Kannada_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News18 Kannada News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News7_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News7_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News7 Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DY_365" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DY_365.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DY 365</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=IBN_Lokmat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/IBN_Lokmat.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News18 Lokmat</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Pratidin_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pratidin_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Pratidin Time</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Tv_9_Gujarat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tv_9_Gujarat.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Tv 9 Gujarat</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_RAJASTHAN" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_RAJASTHAN.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News18 RAJASTHAN</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_Bangla_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Bangla_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News18 Bangla News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_State_UK_UP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_State_UK_UP.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News State UK UP</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_18_Assam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Assam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News 18 Assam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ABP_Asmita" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Asmita.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ABP Asmita</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Prag_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prag_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Prag News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_MP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_MP.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News18 MP</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kashish_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kashish_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kashish News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=V6_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/V6_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">V6 News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_Andhra_pradesh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Andhra_pradesh.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ETV Andhra pradesh</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_18_Tamilnadu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Tamilnadu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News 18 Tamilnadu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Manorama_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manorama_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Manorama News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Mathrubhumi_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mathrubhumi_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mathrubhumi News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=India_Today" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_Today.png" style="height: 120px">
<div class="card-body">
<p class="card-text">India Today</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TV_5_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TV 5 Kannada</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Sports" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sports.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Sports</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=MK_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MK_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text">MK Music</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Music_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Music_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Music India</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Tunes_6" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tunes_6.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Tunes 6</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Raj_Music_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Raj Music Kannada</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ramdhenu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ramdhenu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ramdhenu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Raj_Musix" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Musix.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Raj Musix</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=PTC_Chak_De" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Chak_De.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PTC Chak De</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=9X_Tashan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/9X_Tashan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">9X Tashan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sahana_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sahana_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sahana Music</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=PTC_DHOL_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_DHOL_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PTC DHOL TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=mh1_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/mh1_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text">mh1 (Music)</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sangeet_Marathi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Marathi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sangeet Marathi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=9x_Jhakaas" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/9x_Jhakaas.png" style="height: 120px">
<div class="card-body">
<p class="card-text">9x Jhakaas</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Only_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Only_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Only Music</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=PBN_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PBN_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PBN Music</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Raj_Music_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Raj Music Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Brit_Asia" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Brit_Asia.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Brit Asia</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kappa_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kappa_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kappa TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=PEACE_MUSIC" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PEACE_MUSIC.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PEACE MUSIC</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Raj_Music_Malayalam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Malayalam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Raj Music Malayalam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Steelbird_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Steelbird_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Steelbird Music</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=10_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/10_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">10 TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_News_MP_Chattisgarh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News_MP_Chattisgarh.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee News MP Chattisgarh</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=IBC24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/IBC-24.png" style="height: 120px">
<div class="card-body">
<p class="card-text">IBC24</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=VTV_Gujarati" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/VTV_Gujarati.png" style="height: 120px">
<div class="card-body">
<p class="card-text">VTV Gujarati</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TV_5_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TV 5 News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Exclusive" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Exclusive.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Exclusive HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Hi_Dost" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hi_Dost.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Hi Dost!</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Assam_Talks" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Assam_Talks.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Assam Talks</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_Time_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Time_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News Time TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Purvaiya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Purvaiya.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Purvaiya</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Prameya_News_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prameya_News_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Prameya News 7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CVR_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">CVR News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Rajasthan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Rajasthan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Rajasthan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_UP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_UP.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News18 UP</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_News_Oriya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_News_Oriya.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News18 Oriya</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=T_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/T_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">T News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sandesh_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sandesh_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sandesh News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Prajaa_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prajaa_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Prajaa TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jaya_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jaya Plus</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Malai_Murasu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Malai_Murasu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Malai Murasu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Media_One_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Media_One_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Media One TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_24_Kalak" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_24_Kalak.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee 24 Kalak</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=BBC_World_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_World_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">BBC World News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_Telangana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telangana.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ETV Telangana</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kalinga_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kalinga_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kalinga TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Janam_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Janam_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Janam TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=India_News_UP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_UP.png" style="height: 120px">
<div class="card-body">
<p class="card-text">India News UP</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_18_Kerala" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Kerala.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News 18 Kerala</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Maha_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maha_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Maha News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=HM_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/HM_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">HM TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=sonic_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/sonic_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">sonic Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Cartoon_Network_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Cartoon Network Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Discovery_Kids_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Kids_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Discovery Kids Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Kisan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kisan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD Kisan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_Life" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Life.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ETV Life</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=InGoa24x7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/InGoa24x7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">In Goa 24x7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vanitha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vanitha.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vanitha</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CVR_Health" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_Health.png" style="height: 120px">
<div class="card-body">
<p class="card-text">CVR Health</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Discovery_Turbo" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Turbo.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Discovery Turbo</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_BBC_Earth_HD_English" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_English.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony BBC Earth HD English</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Boogle_Bollywood" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Boogle_Bollywood.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Boogle Bollywood</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Propex_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Propex_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Propex TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sakhi_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sakhi_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">testii</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CNBC_Bazaar_MNO" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Bazaar_MNO.png" style="height: 120px">
<div class="card-body">
<p class="card-text">CNBC Bazaar (MNO)</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Disha_tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Disha_tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Disha tv</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vedic_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vedic_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vedic TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Darshan_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Darshan_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Darshan 24</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Bhaktisagar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhaktisagar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Bhaktisagar 2</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ishwar_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ishwar_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ishwar TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Channel_Win" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_Win.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Channel Win</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nambikkai" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nambikkai.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nambikkai</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Harekrsna" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Harekrsna.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Hare krsna</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Garv_Swaminarayan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Garv_Swaminarayan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swar Shree</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Shubhsandesh_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shubhsandesh_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shubhsandesh TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Shalom" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shalom.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shalom</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Tulja_Bhavani" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tulja_Bhavani.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Tulja Bhavani</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sarv_Dharam_Sangam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sarv_Dharam_Sangam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sarv Dharam Sangam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Lord_Buddha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sharnam_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sharnam TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=GarvGurbani" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GarvGurbani.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Garv Punjabi Gurbani</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Fateh_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Fateh_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Fateh TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Valambhakti" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Valambhakti.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Valam TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Om_Shanti" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Om_Shanti.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Om Shanti</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kartavya_Tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kartavya_Tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kartavya TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Hamari_Sanskruti_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hamari_Sanskruti_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Hamari Sanskruti</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=JUSOne" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/JUSOne.png" style="height: 120px">
<div class="card-body">
<p class="card-text">JUSOne</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Soham_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Soham_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Soham TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Awakening" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Awakening.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Awakening</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SRMD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SRMD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">SRMD HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Hare_Krsna_music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hare_Krsna_music.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Hare Krsna Music</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=evidya_8" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/_evidya_8.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PM e Vidya 08</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=evidya_9" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/_evidya_9.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PM e Vidya 09</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=evidya_10" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_10.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PM e Vidya 10</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=evidya_11" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_11.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PM e Vidya 11</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=evidya_12" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_12.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PM e Vidya 12</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 1</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 2</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 3</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_4" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_4.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 4</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_5" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_5.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 5</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_6" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_6.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 6</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_8" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_8.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 8</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_9" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_9.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 9</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_10" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_10.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 10</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_11" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_11.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 11</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_12" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_12.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 12</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_13" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_13.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 13</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_14" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_14.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 14</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_15" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_15.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 15</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Gujarat_16" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_16.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Gujarat 16</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Gulistan_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gulistan_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Gulistan News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jan TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Raj_News_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Raj News Kannada</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=GSB_Worldwide" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GSB_Worldwide.png" style="height: 120px">
<div class="card-body">
<p class="card-text">G S B Worldwide</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ashtavinayak" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ashtavinayak</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_Urdu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Urdu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News18 Urdu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=India_News_Haryana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Haryana.png" style="height: 120px">
<div class="card-body">
<p class="card-text">India News Haryana</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=India_News_Rajasthan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Rajasthan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">India News Rajasthan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=GS_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GS_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">GS TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=MBC" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MBC.png" style="height: 120px">
<div class="card-body">
<p class="card-text">MBC</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sahara_Samay_Bihar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sahara_Samay_Bihar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sahara Samay Bihar</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_SANGAM" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_SANGAM.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Hindustan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST14_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST14_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST14 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Hindi_Khabar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hindi_Khabar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Hindi Khabar</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zee_Punjabi_HP_Haryana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Punjabi_HP_Haryana.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee Punjabi HP Haryana</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=First_India_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/First_India_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">First India News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News11" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News11.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News11</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=RPLUS" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/RPLUS.png" style="height: 120px">
<div class="card-body">
<p class="card-text">R Plus</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SAHARA_SAMAY_MP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SAHARA_SAMAY_MP.png" style="height: 120px">
<div class="card-body">
<p class="card-text">SAHARA SAMAY MP</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Captain_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Captain_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Captain News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=I_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/I_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">I News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_X" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_X.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News X</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Mirror_Now" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mirror_Now.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mirror Now</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=India_News_MP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_MP.png" style="height: 120px">
<div class="card-body">
<p class="card-text">India News MP</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sathiyam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sathiyam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sathiyam TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Naxatra_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Naxatra_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Naxatra News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Living_Foodz" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Living_Foodz.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zee UP UK</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CNN" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNN.png" style="height: 120px">
<div class="card-body">
<p class="card-text">CNN</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Chardikla_Time_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Chardikla_Time_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Chardikla Time TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sudarshan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sudarshan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sudarshan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=JK_24x7_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/JK_24x7_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">JK 24x7 News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=AL_Jazeera" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AL_Jazeera.png" style="height: 120px">
<div class="card-body">
<p class="card-text">AL Jazeera</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=PTC_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PTC News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Taaza_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Taaza_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Taaza TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Onkar_Only_Truth" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Onkar_Only_Truth.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Onkar Only Truth</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Live_Today" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Live_Today.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Live Today</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sahara_Samay_Rastriya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sahara_Samay_Rastriya.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sahara Samay Rastriya</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Mh_One_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mh_One_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mh One News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Janta_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Janta_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Janta TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ETV_Haryana_and_HP_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Haryana_and_HP_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News18 Haryana and HP News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Total_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Total_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Total TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST1_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST1_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST1 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST2_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST2_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST2 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SAHARA_SAMAY_UP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SAHARA_SAMAY_UP.png" style="height: 120px">
<div class="card-body">
<p class="card-text">SAHARA SAMAY UP</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Wion" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Wion.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Wion</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Bhaarat_Samachar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_Samachar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Bharat Samachar</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=K_News_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/K_News_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text">K News India</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=North_East_Live" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/North_East_Live.png" style="height: 120px">
<div class="card-body">
<p class="card-text">North East Live</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Samachar_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Samachar Plus</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Samay_Rajasthan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samay_Rajasthan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Samay Rajasthan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Raj_News_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Raj News Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=dw" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/dw.png" style="height: 120px">
<div class="card-body">
<p class="card-text">dw</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Loksabha_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Loksabha_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sansad TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Madhimugam_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Madhimugam_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Madhimugam TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_Rajyasabha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajyasabha.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sansad TV HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TV_5_Monde" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_Monde.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TV5 Monde</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Win_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Win_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Win TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Mantavya_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mantavya_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mantavya News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=4_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/4_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">4 TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_1_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_1_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News 1 India</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=MK_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MK_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">MKN</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=APN_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/APN_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">APN News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jaihind_tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jaihind_tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jaihind tv</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jeevan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jeevan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jeevan TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TV_100" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_100.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TV 100</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Bansal_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bansal_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Bansal News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=India_Voice" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_Voice.png" style="height: 120px">
<div class="card-body">
<p class="card-text">India Voice</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=A1_TV_Rajasthan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/A1_TV_Rajasthan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">A1 TV Rajasthan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=INH_24x7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/INH_24x7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">INH 24x7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=GoodNews_Channel" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GoodNews_Channel.png" style="height: 120px">
<div class="card-body">
<p class="card-text">GoodNews Channel</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_India_24_X_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_India_24_X_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News India 24x7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Living_India_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Living_India_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Living India News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SMBC_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SMBC_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">SMBC TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sadhna_News_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna_News_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sadhna News Plus</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Channel_News_Asia_International" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_News_Asia_International.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Channel News Asia International</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Goa365" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Goa365.png" style="height: 120px">
<div class="card-body">
<p class="card-text">GOA 365</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=France_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/France_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text">France 24</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Raj_News_Malayalam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Malayalam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Raj News Malayalam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Prime_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prime_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Prime News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Euro_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Euro_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Euro News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=PrudentHD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PrudentHD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Prudent</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Khabar_Fast" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Khabar_Fast.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Khabar Fast</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swadesh_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swadesh_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swadesh News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=JUS24x7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/JUS24x7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">JUS 24x7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=RDX_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/RDX_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">RDX Goa</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CVR_English" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_English.png" style="height: 120px">
<div class="card-body">
<p class="card-text">CVR English</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DNN" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DNN.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DNN</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jantantra" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jantantra.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jantantra</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Raj_News_24x7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_24x7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Raj News&nbsp;24x7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Yay_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Yay Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Yay_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Yay Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nickelodeon_Jr" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nickelodeon_Jr.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nickelodeon Jr.</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CN_HD_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">CN HD+ Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=CN_HD_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">CN HD+ Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DD_bharati" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_bharati.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DD bharati</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Care_World" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Care_World.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Care World</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Insight_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Insight.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Insight HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Prime_Asia_Tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prime_Asia_Tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Prime Asia HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Star_Plus_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Plus_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Star Plus HD IP</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Star_Utsav" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Utsav.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Star Utsav HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Asianet" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Asianet HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Star_Vijay" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Vijay.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Star Vijay HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Star_Jalsha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Jalsha.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Star Jalsha HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Maa_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maa_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Maa TV HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Maa_Gold" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maa_Gold.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Maa Gold HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Star_Bharat_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Bharat_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Star Bharat HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Asianet_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Asianet Plus HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Star_Pravah" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Pravah.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Star Pravah HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Suvarna" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Suvarna.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Suvarna HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Suvarna_Plus_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_Suvarna_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Suvarna Plus HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Star_Gold_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Gold_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Star Gold HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jalsa_Movies_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jalsa_Movies_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jalsha Movies HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Maa_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maa_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Maa Movies HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Movies_OK" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Movies_OK.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Movies OK HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Asianet_Movies_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_Movies_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Asianet Movies HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Star_Sports_Select_HD_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Sports_Select_HD_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Star Sports Select HD1</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Star_Sports_HD_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Sports_HD_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Star Sports 1</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Star_Sports_HD_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Sports_HD_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Star Sports 2</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Star_Sports_3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Sports_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Star Sports Hindi 1</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Star_Sports_Select_HD_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Sports_Select_HD_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Star Sports Select HD2</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nick_Malayalam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Malayalam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nick Malayalam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nick_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nick Bangla</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nick_Marathi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Marathi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nick Marathi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sonic_Malayalam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Malayalam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sonic Malayalam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sonic_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sonic Bangla</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sonic_Marathi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Marathi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sonic Marathi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Digishala" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Digishala.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Digishala</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Top_Tutor" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Top_Tutor.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Top Tutor</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Gyan_Brikshya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gyan_Brikshya.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Gyan Brikshya</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Manipur_Educational_Channel" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manipur_Educational_Channel.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Lairik</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TV_Teacher" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_Teacher.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TV Teacher</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Utkarsh_Primary" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Primary.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Utkarsh Primary</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Utkarsh_Middle" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Middle.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Utkarsh HSBTE</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Utkarsh_Secondary" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Secondary.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Utkarsh Secondary</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Utkarsh_Higher" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Higher.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Utkarsh Higher</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Meluha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Meluha.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Meluha</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Home_Learning_Gujarat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Home_Learning_Gujarat.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Home Learning Gujarat Standard-9</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=KITE_Victers" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/KITE_Victers.png" style="height: 120px">
<div class="card-body">
<p class="card-text">KITE VICTERS</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Parmarth_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Parmarth_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Parmarth TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Cricket_2_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_2_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Cricket 2 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Esports_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Esports_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">JioGames HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Cricket_3_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Cricket 3 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Gujarati_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Gujarati_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Gujarati Cinema</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Marathi_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Marathi_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Marathi SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Bangla_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Bangla_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Bangla SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Kannada_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Kannada SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=VH1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/VH1.png" style="height: 120px">
<div class="card-body">
<p class="card-text">VH1</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=MTV_Beats_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_Beats_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">MTV Beats SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Akal_Academy_Group" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Akal_Academy_Group.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Akal Academy Group</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=IMS_School" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/IMS_School.png" style="height: 120px">
<div class="card-body">
<p class="card-text">IMS Schools Grade 1 - 8</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Argus_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Argus_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Argus News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Amma" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Amma.png" style="height: 120px">
<div class="card-body">
<p class="card-text">AMMA TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Moon_Tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Moon_Tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Moon TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Birla_Brainiacs" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Birla_Brainiacs.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Birla Brainiacs</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vedant_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vedant_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vedant TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Haryanvi_Hits" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Haryanvi_Hits.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Haryanvi Hits</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=MI_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MI_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">MI TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Gyanvani_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gyanvani_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Gyanvani 1</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Chardham_Darshan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Chardham_Darshan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Chardham Darshan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Tute" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tute.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Tute</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Punjab_School_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Punjab_School_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Punjab School TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=AAS_Vidyalaya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AAS_Vidyalaya.png" style="height: 120px">
<div class="card-body">
<p class="card-text">AAS Vidyalaya CBSE NCERT</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Khandoba_Majha_Jejuri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Khandoba_Majha_Jejuri.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Khandoba Majha, Jejuri</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DharmGranth_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DharmaGranth_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Dharm Granth TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=P_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/P_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">P News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Malnadu_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Malnadu_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Malanadu TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ABSTAR_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABSTAR_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">AB Star News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sanatan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanatan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sanatan TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Express_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Express_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Express TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Express_TV_Shikshana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Express_TV_Shikshana.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Express Shikshana</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jigyasa_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jigyasa_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jigyasa TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=35mm" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/35mm.png" style="height: 120px">
<div class="card-body">
<p class="card-text">35mm</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sristi_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sristi_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sristi TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Himshiksha_Elementary" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Elementary.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Himshiksha Elementary</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Himshiksha_Higher" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Higher.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Himshiksha Higher</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Himshiksha_Vocational" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Vocational.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Himshiksha Vocational</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=AP_BIE_ARTS" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AP_BIE_ARTS.png" style="height: 120px">
<div class="card-body">
<p class="card-text">AP-BIE-ARTS</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=AP_BIE_SCIENCE" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AP_BIE_SCIENCE.png" style="height: 120px">
<div class="card-body">
<p class="card-text">AP-BIE-SCIENCE</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=AP_CIE_SIVE" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AP_CIE_SIVE.png" style="height: 120px">
<div class="card-body">
<p class="card-text">AP-CIE-SIVE</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Atmadarshan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Atmadarshan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Atmadarshan TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sanskrit" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanskritam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sanskrit</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Lokmanch_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Lokmanch_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Lokmanch News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Lifology" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Lifology.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Lifology</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Samachar_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Samachar 24</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=FTV_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/FTV_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">FTV HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=InWild_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/InWild_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">InWild HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ZooMoo_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ZooMoo_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ZooMoo HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Smithsonian_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Smithsonian_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Smithsonian HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Bangla_Bhakti" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bangla_Bhakti.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Bangla Bhakti</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ken_Kerelam_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ken_Kerelam_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ken TV Keralam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Manav_Dharam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manav_Dharam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Manav Dharam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=MPNews" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MP_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">MP News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ishvani_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ishvani_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ishvani TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Divyaang_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Divyang_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Divyang News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Tara_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tara_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Tara TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Medha_Secondary" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Medha_Secondary.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Medha Secondary</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Omnicuris" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Omnicuris.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Omnicuris</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=India_Ahead" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_Ahead.png" style="height: 120px">
<div class="card-body">
<p class="card-text">India Ahead</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Real_News_Kerala" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Real_News_Kerala.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Real News Kerala</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Madha_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Madha_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Madha TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Rongeen_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rongeen_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Rongeen TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=C_News_Bharat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/C_News_Bharat.png" style="height: 120px">
<div class="card-body">
<p class="card-text">C News Bharat</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Gyanvani_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gyanvani_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Gyanvani 2</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=PTD_Chhattisgarrh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTD_Chhattisgarrh.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PTD Chhattisgarrh</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Samveda" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samveda.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Samveda</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ESG" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ESG.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ESG TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=BVTV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BVTV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">BVTV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Badakhabar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Badakhabar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Badakhabar</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Haryana_Beats" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Haryana_Beats.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Haryana Beats</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Prime_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prime_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Prime TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SSV_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SSV_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">SSV TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=FM_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/FM_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">FM News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=IND_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/IND_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text">IND 24</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ANN_Kashmir" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ANN_Kashmir.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ANN News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Shri_Hingulambika_Devi_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shri_Hingulambika_Devi_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shri Hingulambika Devi Temple</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Shri_Mangal_Dev_Grah_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shri_Mangal_Dev_Grah_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shri Mangal Dev Grah Temple</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SKY_12" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SKY_12.png" style="height: 120px">
<div class="card-body">
<p class="card-text">SKY 12</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=24hrs_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/24hrs_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">24Hrs TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=BBC_Gujarati" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Gujarati.png" style="height: 120px">
<div class="card-body">
<p class="card-text">BBC News Gujarati</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Anaadi_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Anaadi_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Anaadi TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Live_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Live_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Live 7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Punjab1_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Punjab1_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Punjab1 TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=N5TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/N5TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">N5TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ND24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ND24.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ND 24</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ek_Onkar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ek_Onkar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ek Onkar</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TV9_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TV9 Bangla</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Luxe_Tv_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Luxe_Tv_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">LUXE TV HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Mezzo_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mezzo_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mezzo Live HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Hosanna_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hosanna_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Hosanna TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=V24_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/V24_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">V24 TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Purnima_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Purnima_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Purnima TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Bharat_AtoZ" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_AtoZ.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Bharat AtoZ</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sanskrit_Ganga_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanskrit_Ganga_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sanskrit Ganga</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Hornbill_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hornbill_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Hornbill TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=T_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/T_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TTV News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=NK_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NK_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">NK TV 24x7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DPK_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DPK_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DPK News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Buletin_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Buletin_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Buletin India</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Aryan_TV_National" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aryan_TV_National.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Aryan TV National</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Channel_Vision" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_Vision.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Channel Vision</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Dadabhagwan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dadabhagwan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Dada Bhagwan Foundation</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Doinandin" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Doinandin.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Doinandin</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Zorins_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zorins_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Zorins TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Naaptol" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Naaptol.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Naaptol</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=LWA" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/LWA.png" style="height: 120px">
<div class="card-body">
<p class="card-text">LWA</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vande_Tripura" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Tripura.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Vande Tripura</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Express_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Express_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Express News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ten_4_HD_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_4_HD_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ten 4 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ten_4_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_4_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ten 4</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Bharat_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Bharat News TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SamacharExpressTV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SamacharExpressTV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Samachar Express TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=VISVAS" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/VISVAS.png" style="height: 120px">
<div class="card-body">
<p class="card-text">VISVAS</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Yeshuaa" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Yeshuaa.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Yeshuaa TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Dada_Bhagwan_Foundation_Gujarati" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dada_Bhagwan_Foundation_Gujarati.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Dada Bhagwan Foundation Gujarati</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=VRLive" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/VRLive.png" style="height: 120px">
<div class="card-body">
<p class="card-text">VR Live</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=KPNews" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/KPNews.png" style="height: 120px">
<div class="card-body">
<p class="card-text">KP News 24x7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Satta_Express" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Satta_Express.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sattaxpress News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Mangalmaylive" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mangalmaylive.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mangalmay Live</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Shri_Amarnath_Shrine_Board" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shri_Amarnath_Shrine_Board.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shri Amarnathji Shrine Board</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Anand_Barta" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Anand_Barta.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ananda Barta</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DA_News_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DA_News_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DA News Plus</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Pasand" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pasand.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Pasand</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Studio_Yuva_Alpha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Studio_Yuva_Alpha.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Studio Yuva Alpha</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_World_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_World_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News World India</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jan_Setu_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jan_Setu_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jan Setu News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football_5" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_5.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football 5 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football_6" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_6.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football 6 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=DTV_Bharat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DTV_Bharat.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DTV Bharat</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=NEWS_24_MPCG" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NEWS_24_MPCG.png" style="height: 120px">
<div class="card-body">
<p class="card-text">NEWS 24 MPCG</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football 7 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football_8" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_8.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football 8 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Swarlasika" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swarlasika.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Swaralasika Sangeetalaya</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Green_Chillies_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Green_Chillies_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Green Chillies</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Devam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Devam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Devam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=AAS_Vidyalaya_State_Boards" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AAS_Vidyalaya_State_Boards.png" style="height: 120px">
<div class="card-body">
<p class="card-text">AAS Vidyalaya State Boards</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=India_At_Dubai_Expo" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_At_Dubai_Expo.png" style="height: 120px">
<div class="card-body">
<p class="card-text">India At Dubai Expo</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST3_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST3_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST3 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST4_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST4_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST4 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST5_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST5_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST5 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST6_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST6_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST6 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST7_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST7_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST7 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST8_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST8_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST8 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ABP_Ganga" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Ganga.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ABP Ganga</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kalaignar_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kalaignar TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kalaignar_Seithigal_" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_Seithigal_.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kalaignar Seithigal </p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Hare_Krsna_Pravachan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hare_Krsna_Pravachan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Hare Krsna Pravachan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Highbrow" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Highbrow.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Highbrow</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=LordShri_Vitthal" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/LordShri_Vitthal.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Lord Shri Vitthal Rukmini</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Animal_Planet_HD_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_HD_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Animal Planet HD Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Rajyoga_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rajyoga_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Rajyoga TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Rajyoga_Malayalam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rajyoga_Malayalam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Rajyoga Malayalam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=GovindDevji_Jaipur" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GovindDevji_Jaipur.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mandir Shri Govinddevji-Jaipur</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Dagdusheth_Pune" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dagdusheth_Pune.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Dagdusheth Ganpati - Pune</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nimbark" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nimbark.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nimbark TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Click_Life" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Click_Life.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Click Life</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nick_HD_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_HD_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nick HD+</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ambabai_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ambabai_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ambabai Temple-Kolhapur</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST9_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST9_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST9 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=VR_360" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/VR_360.png" style="height: 120px">
<div class="card-body">
<p class="card-text">PTC VR</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football_Hindi_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Hindi_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football Hindi HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football_Tamil_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Tamil_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football Tamil HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football_Malayalam_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Malayalam_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football Malayalam HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Football_Bangali_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Bangali_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Football Bengali HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST10_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST10_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST10 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=God_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/God_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">God TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sonic_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sonic Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sonic_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sonic Kannada</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nick_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nick Kannada</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Tripura_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tripura_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Headlines Tripura</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Twenty_Four_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TWENTY_FOUR_NEWS.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Twenty Four News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TV9_Bharatvarsh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Bharatvarsh.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TV9 Bharatvarsh</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Tehzeeb_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEHZEEB_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Tehzeeb TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kolkata_Live" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kolkata_LIVE.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kolkata Live</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Aastha_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Aastha Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Aastha_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Aastha Tamil</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Aastha_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Aastha Kannada</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Surya_Samachar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Samachar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Surya Samachar</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Surya_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Surya Cinema</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Surya_Bhakti" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Bhakti.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Surya Bhakti</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ctvn_Akd_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CTVN_AKD_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ctvn Akd Plus</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Calcutta_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Calcutta_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Calcutta News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Total_Tv_Haryana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Total_Tv_Haryana.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Total Tv Haryana</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kolkata_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kolkata_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kolkata TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sanjh_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Global_Sanjh.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Global Sanjh</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Bflix_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bflix_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Bflix Movies</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=iLove" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/iLove.png" style="height: 120px">
<div class="card-body">
<p class="card-text">iLove</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ABZY_Dhakad" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Dhakad.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ABZY Dhakad</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ABZY_Cool" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Cool.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ABZY Cool</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ABZY_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ABZY Movies</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Udupi_Krishna_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Udupi_Krishna_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sh Krishna Matta Adamaru Paryaya UDUPI</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sugran" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sugran.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sugran</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Studio_One" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Studio_One.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Studio One</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Box_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Box_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Box Cinema</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nireekshana_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nireekshana_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nireekshana TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Prarthana_Bhawan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prarthana_Bhawan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Prarthana Bhawan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Manoranjan_Grand" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Grand.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Manoranjan Grand</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Manoranjan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Manoranjan TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Manoranjan_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Manoranjan Movies</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Khusboo_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Khusboo_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Khushboo TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Hanuman_Mahavir_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hanuman_Mahavir_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mahavir Mandir Patna</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Vignesh_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vignesh_TV.PNG" style="height: 120px">
<div class="card-body">
<p class="card-text">Vignesh TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Insync" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Insync.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Insync</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ANB_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ANB_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ANB News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Omkareshwar_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Omkareshwar_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shri Omkareshwar Mandir</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=StarTell" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/StarTell.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Stars Tell</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ABP_Sanjha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Sanjha.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ABP Sanjha</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Wellness_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Wellness_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Wellness</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Lokshahi_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Lokshahi_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Lokshahi News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Dsports" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dsports.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Eurosport</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=B4U_Kadak" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Kadak.png" style="height: 120px">
<div class="card-body">
<p class="card-text">B4U Kadak</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=B4U_Bhojpuri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Bhojpuri.png" style="height: 120px">
<div class="card-body">
<p class="card-text">B4U Bhojpuri</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TV_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TV Bangla</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Manjari_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manjari_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Manjari TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=HHDL" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/HHDL.png" style="height: 120px">
<div class="card-body">
<p class="card-text">HHDL</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Iskon_Temples_New" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Iskon_Temples_New.png" style="height: 120px">
<div class="card-body">
<p class="card-text">ISKCON Darshan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sri_Patna_Sahib" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Patna_Sahib.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Takht Sri Patna Sahib - Patna</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Infinity_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Infinity SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Comedy_Central_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Comedy Central SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=RT_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/RT_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">RT TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Wah" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Wah.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Wah</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=NHK_World_Japan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NHK_World_Japan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">NHK World Japan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Reporter_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Reporter_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Reporter TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SongDew_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SongDew_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">SongDew TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Shani_Shingnapur" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shani_Shingnapur.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shani Shingnapur</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Prati_Shirdi_Saibaba" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prati_Shirdi_Saibaba.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Prati Shirdi Saibaba</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ganga_Darshan_Varanasi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ganga_Darshan_Varanasi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ganga Darshan Varanasi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ashtavinayak_Ozar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak_Ozar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ashtavinayak Ozar</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SVBC2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">SVBC2</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ichhapuran_Balaji_Rajasthan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ichhapuran_Balaji_Rajasthan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ichhapuran Balaji Rajasthan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Iskon_Girgaon" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Iskon_Girgaon.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Iskon Girgaon</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Ashtavinayak_Ranjangaon" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak_Ranjangaon.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ashtavinayak Ranjangaon</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Karani_Mata_Rajasthan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Karani_Mata_Rajasthan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Karani Mata Rajasthan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Mahalaxmi_Mumbai" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mahalaxmi_Mumbai.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mahalaxmi Mumbai</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Babulnaath_Mumbai" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Babulnaath_Mumbai.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Babulnaath Mumbai</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Mumbadevi_Mumbai" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mumbadevi_Mumbai.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Mumbadevi Mumbai</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=1Sports" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/1Sports.png" style="height: 120px">
<div class="card-body">
<p class="card-text">1Sports</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Santvani" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Santvani.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Santvani</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nandighosha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nandighosha.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Nandighosha</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_KIDS.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio KIDS</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=BBC_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">BBC News Hindi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TIME8" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TIME8.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TIME8</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Velukkudi_Discourses" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Velukkudi_Discourses.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Velukkudi Discourses</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Krishna_Vani" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Krishna_Vani.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Krishna Vani</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Wah_Punjabi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Wah_Punjabi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Wah Punjabi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=YTV_INDIA" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/YTV_INDIA.png" style="height: 120px">
<div class="card-body">
<p class="card-text">YTV India</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Rishtey_Cineplex" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey_Cineplex.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Rishtey Cineplex</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=9_Bharat_Samachar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/9_Bharat_Samachar.png" style="height: 120px">
<div class="card-body">
<p class="card-text">9 Bharat Samachar</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Shemaroo_MarathiBana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shemaroo_MarathiBana.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shemaroo MarathiBana</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Balle_Balle_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Balle_Balle_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Balle Balle TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Shiksha_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shiksha_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shiksha TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Janapriyam_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Janapriyam_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Janapriyam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_Only" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Only.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News Only</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Gurkebaani" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gurkebaani.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Gurkibani</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Moti_Doongri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Moti_Doongri.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shree Ganesh - Moti Doongri Jaipur</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Daijiworld_TV_24X7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Daijiworld_TV_24X7.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Daijiworld TV 24x7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=History_TV18_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_TV18_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">History TV18 SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST11_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST11_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST11 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Cineplex_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Color_Cineplex_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Cineplex HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Nakoda_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nakoda_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shri Jain Nakoda Parshwanath Tirth</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Bhoomi_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhoomi_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">BHOOMI 24x7</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kannur_one" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kannur_one.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kannur One</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_J" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_J.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News J</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST13_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST13_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST13 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Network_10" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Network_10.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Network 10</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sony_Pix_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Pix SD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=World_Punjab" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/World_Punjab.png" style="height: 120px">
<div class="card-body">
<p class="card-text">World  Punjabi</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Surya_Bhojpuri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Bhojpuri.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Surya Bhojpuri</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=RadheKrishna_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/RadheKrishna_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">RadheKrishna TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Samachar_Today" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_Today.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Samachar Today</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sangat_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sangat_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sangat TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Subharti" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Subharti.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Subharti</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Shiksha_Darshan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shiksha_Darshan.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Shiksha Darshan</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=AB_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AB_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">AB News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_First" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_First.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News First</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=MY_ZEN_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MY_ZEN_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">MY ZEN HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=HitsIndia_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/HitsIndia_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">HITS HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Kannada_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Kannada Cinema</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Colors_Cineplex_Bollywood" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Cineplex_Bollywood.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Colors Cineplex Bollywood</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Hoopla_Kids_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hoopla_Kids_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Hoopla Kidz TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Aakash_EduTV_NEET" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aakash_EduTV_NEET.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Aakash EduTV NEET</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Harpal_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Harpal_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Harpal TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SVBC" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC.png" style="height: 120px">
<div class="card-body">
<p class="card-text">SVBC</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Aakash_EduTV_JEE" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aakash_EduTV_JEE.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Aakash EduTV JEE</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News11_Bharat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News11_Bharat.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News11 Bharat</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=STV_Haryana_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/STV_Haryana_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">STV Haryana News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=NL_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NL_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">NL TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_Time_Assam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Time_Assam.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News Time Assam</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SVBC3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC3.png" style="height: 120px">
<div class="card-body">
<p class="card-text">SVBC3</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=SVBC4" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC4.png" style="height: 120px">
<div class="card-body">
<p class="card-text">SVBC4</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Punjab_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Punjab_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Punjab Plus</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kenson_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kenson_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kenson News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=7X_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/7X_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text">7X Music</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Dreamworks" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dreamworks.png" style="height: 120px">
<div class="card-body">
<p class="card-text">DreamWorks</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=E_NBCU" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/E_NBCU.png" style="height: 120px">
<div class="card-body">
<p class="card-text">E!</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=TEST15_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST15_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">TEST15 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Pogo_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Pogo Telugu</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Kripa_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kripa_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Kripa TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Sansad_TV_RajyaSabha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sansad_TV_RajyaSabha.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sansad TV Rajya Sabha</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jivan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jivan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jivan TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Sports_1_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Sports_1_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Sports 1 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Sports_2_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Sports_2_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Sports 2 HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Tribe_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tribe_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Tribe TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Padhega_Bharat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Padhega_Bharat.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Padhega Bharat</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Today_24_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Today_24_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Today 24 News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=News_Flash" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Flash.png" style="height: 120px">
<div class="card-body">
<p class="card-text">News Flash</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Pulse_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pulse_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Pulse 24</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=GBN24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GBN24.png" style="height: 120px">
<div class="card-body">
<p class="card-text">GBN24</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=VK_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/VK_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text">VK News</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=ENB" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ENB.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Express News Bharat</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Adhyatam_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Adhyatam_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Adhyatam TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Aaj_Ki_Baat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aaj_Ki_Baat.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Aaj Ki Baat Gujarati</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Namasthe_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Namasthe_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Namasthe TV</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Cricket_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Cricket Hindi HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Cricket_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Cricket Tamil HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Cricket_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Cricket Telugu HD</p>
</div>
</a>
</div>
<div class="box1">
<a href="play.php?c=Jio_Cricket_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Jio Cricket Kannada HD</p>
</div>
</a>
</div>



</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
              <script>
$(document).ready(function(){
  $("input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".box1").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

var animateButton = function(e) {

  e.preventDefault;
  //reset animation
  e.target.classList.remove('animate');
  
  e.target.classList.add('animate');
  setTimeout(function(){
    e.target.classList.remove('animate');
  },700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
  bubblyButtons[i].addEventListener('click', animateButton, false);
}

</script>

</body></html>