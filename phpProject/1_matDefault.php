<?php
include ("headerfile.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #main{
            text-align: center;
            padding-top: 10px;
        }
        section{
            margin: 10px;
        }
        #rankbox,#centerbox,#reviewbox{
            display: inline-block;
            overflow: hidden;
        }
        #rankbox{
            width: 25%;
            height: 500px;
            text-align: center;
        }
        #rtext{
            font-size: 20px;
            margin: 2px;
            float: left;
            padding-left: 5px;
        }
        #rankblock{
            width: 90%;
            height: 90%;
            border: 1px solid black;
            border-radius: 10px;
            float: left;
            background-color: #888;
        }
        #centerblock{
            width: 95%;
            height: 43.5%;
            border: 1px solid black;
            border-radius: 10px;
            float: left;
            background-color: #888;
            margin-bottom: 0px;
        }
        #centerbox{
            width: 40%;
            height: 500px;
        }
        #reviewbox{
            width: 25%;
            height: 500px;
        }
    </style>
</head>
<body>
    <div id = "main">
        <section id="rankbox">
            <p id="rtext"><b>맛집랭킹</b></p>
            <section id="rankblock"></section>
        </section>
        <section id="centerbox">
            <p id="rtext"><b>123</b></p>
            <section id="centerblock"></section>
            <section id="centerblock"></section>
        </section>
        <section id="reviewbox">
            <p id="rtext"><b>리뷰</b></p>
            <section id="rankblock"></section>
        </section>
    </div>
</body>
</html>