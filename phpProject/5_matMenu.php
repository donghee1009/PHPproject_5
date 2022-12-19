<?php
include ("headerfile.php");
?>

<!doctype html>
<html lang="ko">
<head>
    <style>
        #list{
            width: 720px;
            height: 480px;
            border: solid 1px black;
        }
        #center{
            display: flex;
            justify-content: center;
            padding-top: 10px;
        }
        #buttonL{
            width: 100px;
            height: 280px;
            border-bottom: solid 1px black;
            border-top: solid 1px black;
            border-right: solid 1px black;
        }
        #button{
            width: 100px;
            height: 40px;
            background-color:  white;
        }
    </style>
</head>
<body>
    <div id="center">
        <div id="list">
        </div>
        <div id="buttonL">
            <button id="button">한식</button>
            <button id="button">일식</button>
            <button id="button">중식</button>
            <button id="button">카페</button>
            <button id="button">술집</button>
            <button id="button">패스트푸드</button>
            <button id="button">기타</button>
        </div>
    </div>
</body>
</html>