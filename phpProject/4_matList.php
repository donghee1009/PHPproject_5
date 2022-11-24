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
       width: 1200px;
       height: 720px;
       border: 1px solid black;
        }
    #kr,#jp,#ch,#ff,#bar,#blc{
    display: inline-block;
    text-align: center;
    float: left;
    }
    
    #kr,#jp,#ch,#ff,#bar,#blc{
       padding: 0px;
       margin:0px;
       width: 398px;
       height: 350px;
       border: 1px solid blue;
    }
    #bev,#etc{
       display:inline-block;
       width: 398px;
       height: 174px;
       border: 1px solid blue;
    }
    #ltext{
       font-size: 18px;
       line-height:300px;
    }
    #dtext{
       line-height:150px;
    }
    </style>
</head>
<body>
<div id ="main">
    <div id ="menuBox">
    	<section id ="kr"><p id ="ltext">한식</p></section>
    	<section id ="jp"><p id ="ltext">일식</p></section>
    	<section id ="ch"><p id ="ltext">중식</p></section>
    	<div id ="blc">
        	<div id ="bev"><p id ="dtext">커피/음료</p></div>
        	<div id ="etc"><p id ="dtext">기타</p></div>
    	</div>
    	<section id ="ff"><p id ="ltext">패스트푸드</p></section>
    	<section id ="bar"><p id ="ltext">술집</p></section>
</div>
</div>
</body>
</html>