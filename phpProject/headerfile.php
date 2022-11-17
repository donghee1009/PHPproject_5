<!-- php 
    include ("headerfile.php");
    로 호출 가능
 -->

<!doctype html>
<html lang="ko">
<head>
	<meta charse = utf-8">
	<title></title>
	<style>
	#Dicon{
	height : 100%;
	algin : center;
	float : left;
	position : absolute;
	}
	header{
	padding : 10px 0;
	width : 100%;
	height : 100%;
	border : 1px solid black;
	text-align : center;
	}
	nav{
	width: 100%;
	margin: 0px;
	padding : 15px 0;
	border : 1px solid black;
	margin : 0px;
	background-color: #6600ff;
	color : white;
	}
	#nv{
	width : 32%;
	height : 100%;
	border : 1px solid white;
	display : inline-block;
	margin-left: 5px;
	text-decotation: none;
	text-decotation-line: none;
	}
	#navText{
	text-align: center;
	text-decotation: none;
	text-decotation-line: none;
	color: white;
	}
	#login{
	align : bottom;
	position : absolute;
	text-align : center;
	top : 90px;
	right : 10px;
	}
	#loginText{
	display : inline;
	}
	</style>
</head>
<body>
<header>
<div id="Dicon"><a href="https://www.dongyang.ac.kr/dongyang/index.do#" ><img src="img/header/dicon.jpg"> </a></div>
<h1>DMU 맛집</h1>
<section id="login">
<p id = "loginText">로그인</p>
<p id = "loginText">|</p>
<p id = "loginText">회원가입</p>
</section>
</header>
<nav>
<section id="nv"><a href="4_matList.php"><p id ="navText">맛집 리스트</p></a></section>
<section id="nv"><a href="7_matReview.php"><p id ="navText">리뷰</p></a></section>
<section id="nv"><a href="3_matreport.php"><p id ="navText">맛집제보</p></a></section>
</nav>
</body>
</html>