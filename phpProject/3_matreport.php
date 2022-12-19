<?php
include ("headerfile.php");
?>
<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #center{
            width: 1080px;
            height: 1080px;
            margin: auto;
        }
        #ptext{
            font-size: 20px;
            margin-bottom: 5px;
        }
        #in{
            width: 250px;
            height: 20px;
            background-color: #e2e2e2;
        }
        .star {
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
        #sel{
            font-size: 18px;
            height: 30px;
        }
        #revbox{
            width: 480px;
            height: 160px;
        }
        #filebox{
            width: 500px;
            height: 600px;
            display: inline-block;
            float: left;
        }
    </style>
</head>
<body>
    <div id ="center">
        <form>
            <p id="ptext">맛집 이름</p>
            <input id="in" type="text" name="name">
            <p id="ptext">음식 분야</p>
            <select id="sel">
                <option value="kr">한식</option>
                <option value="jp">일식</option>
                <option value="ch">중식</option>
                <option value="bev">커피/음료</option>
                <option value="ff">패스트푸드</option>
                <option value="bar">술집</option>
                <option value="etc">기타</option>
            </select><br>
            <p id="ptext" style="display: inline;">개인적인 평점 및 리뷰</p>
            <span class="star">
                ★★★★★
                <span>★★★★★</span>
                <input type="range" oninput="drawStar(this)" value="1" step="1" min="1" max="5">
            </span>
            <script>
                const drawStar = (target) => {
                document.querySelector(`.star span`).style.width = `${target.value * 19}%`;
                }
            </script><br>
            <p><textarea id="revbox"></textarea></p>
            <div id="filebox">
                <p id="ptext">메뉴판</p>
                <input type="file" id="Inputimage" name="menufile" accept="image/*">
                <img style="width: 500px;" id="previewImage" src="https://dummyimage.com/500x500/ffffff/000000.png&text=preview+image">
            </div>
            <div id="filebox">
            <p id="ptext">음식사진</p>
            <input type="file" id="Inputimage" name="menufile" accept="image/*">
            <img style="width: 500px;" id="previewImage" src="https://dummyimage.com/500x500/ffffff/000000.png&text=preview+image">
            </div>
            <input type="submit">
        </form>
    </div>
</body>
</html>
