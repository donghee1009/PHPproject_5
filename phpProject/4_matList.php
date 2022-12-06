<?php
include ("headerfile.php");
?>
<!doctype html>
<html lang="ko">
<head>
	<style>
	#main{
	align-items: center;
	margin-top: 10px;
	}
    #menuBox{
       margin: auto;
       width: 1300px;
       height: 720px;
        }
   #line1,#line2{
      width: 1280px;
      height: 360px;
      padding-bottom: 5px;
   }
    #kr,#jp,#ch,#ff,#bar,#blc{
    display: inline-block;
    text-align: center;
    width: 398px;
    height: 350px;
    border: 2px solid blue;
    text-align: center;
    float:left;
    }
    #bev,#etc{
      width: 398px;
      height: 170px;
      border: 1px solid blue;
      padding-bottom: 5px;
    }
    #ltext{
       color: white;
       font-size: 18px;
       line-height:300px;
       text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
       margin: 0px;
       padding: 0px;
    }
    #dtext{
       line-height:150px;
       text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
       color:white;
    }
    #kr{
      background-image: url(img/matList/krback.jpg);
      background-size: cover;
      background-position: center;
    }
    #jp{
      background-image: url(img/matList/jpback.jpg);
      background-size: cover;
      background-position: center;
    }#ch{
      background-image: url(img/matList/chback.jpg);
      background-size: cover;
      background-position: center;
    }
    #ff{
      background-image: url(img/matList/ffback.jpg);
      background-size: cover;
      background-position: center;
    }#bar{
      background-image: url(img/matList/barback.jpg);
      background-size: cover;
      background-position: center;
    }#bev{
      background-image: url(img/matList/bevback.jpg);
      background-size: cover;
      background-position: center;
    }
    </style>
</head>
<body>
<div id ="main">
   <div id ="menuBox">
         <a href="5_matMenu.php"><section id ="kr"><p id ="ltext">한식</p></section></a>
         <a href="5_matMenu.php"><section id ="jp"><p id ="ltext">일식</p></section></a>
         <a href="5_matMenu.php"><section id ="ch"><p id ="ltext">중식</p></section></a>
         <div id="blc">
            <a href="5_matMenu.php"><div id ="bev"><p id ="dtext">커피/음료</p></div></a>
            <a href="5_matMenu.php"><div id ="etc"><p id ="dtext">기타</p></div></a>
         </div>
         <a href="5_matMenu.php"><div id="ff"><p id ="ltext">패스트푸드</p></div></a>
         <a href="5_matMenu.php"><div id="bar"><p id ="ltext">술집</p></div></a>
</div>
</div>
</body>
</html>