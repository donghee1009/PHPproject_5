<?php
include ("headerfile.php");
?>
<!doctype html>
<html lang="ko">
<head>
    <style>
        #main1{
            margin: auto;
            width: 1000px;
            flex-wrap: wrap;
            height: 320px;
            text-align: center;
        }
        #namebox{
            text-align: center;
        }
        #text{
            font-size: 20px;
        }
        #imgbox{
            display: inline-block;
            width: 300px;
            height: 250px;
            border: 1px solid black;
            margin: auto;
        }
        #main{
            margin: auto;
            width: 1000px;
            flex-wrap: wrap;
            height: 720px;
        }
        #mtext{
            font-size: 25px;
            padding: 5px;
            margin: 0px;
            float: left;
        }
        #stext{
            font-size: 18px;
            padding: 5px;
            margin: 0px;
            float: left;
        }
        .star {
            float: left;
            position: relative;
            font-size: 2rem;
            color: #ddd;
            }
        .star input {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            opacity: 0;
            cursor: pointer;
            }
        .star span {
            width: 0;
            position: absolute; 
            left: 0;
            color: red;
            overflow: hidden;
            pointer-events: none;
        }
        #revbox{
            width: 480px;
            height: 160px;
        }
    </style>
</head>
<body>
    <div id="main1">
        <div id="namebox">
        <p id="text">가게 이름</p>
        </div>
        <div id="imgbox"></div>
        <div id="imgbox"></div>
        <div id="imgbox"></div>
    </div>
    <div id="main">
        <br>
        <p id="mtext">x건의 평가</p><br><br><br>
        <p id="mtext">x.x점&nbsp;</p>
        <span class="star">
            ★★★★★
            <span>★★★★★</span>
        </span><br><br><br>
        <p id="mtext">평점 및 리뷰&nbsp;</p>
        <span class="star">
            ★★★★★
            <span>★★★★★</span>
        </span><br><br><br>
        <form>
        <p><textarea id="revbox"></textarea></p>
        <input type="submit">
        </form><br>
        <hr>
        <span class="star">
            ★★★★★
            <span>★★★★★</span>
        </span>
        <p id="stext">4.0</p><br><br>
        <p id="mtext">123</p>
        <br><br><hr>
        <span class="star">
            ★★★★★
            <span>★★★★★</span>
        </span>
        <p id="stext">4.0</p><br><br>
        <p id="mtext">123</p>
        <br><br><hr>
    </div>
</body>
</html>