<!-- php 
    include ("headerfile.php");
    로 호출 가능
 -->

<!doctype html>
<html lang="ko">
<head>
	<meta charse = "utf-8">
	<title></title>
	<style>
	#Dicon{
	height : 100%;
	float : left;
	position : absolute;
	}
	header{
	padding : 10px 0;
	width : 100%;
	height : 100%;
	text-align : center;
	}
	nav{
	width: 100%;
	margin: 0px;
	padding : 15px 0;
	margin : 0px;
	background-color: #6600ff;
	border-radius: 5px;
	color : white;
	text-align: center;
	}
	#nv{
	width : 30%;
	height : 100%;
	border : 1px solid white;
	border-radius: 5px;
	display : inline-block;
	margin-left: 5px;
	}
	#nv:hover{
		background-color:#934dfc;
	}
	#nv:active{
		background-color: #2f0075;
	}
	#navblock{
		display: block;
		width: 100%;
	}
	#navText{
	text-align: center;
	color: white;
	padding: 20px 0;
	margin: 0;
	font-size: 20px;
	}
	#navText:hover{
		color:cadetblue;
	}
	#login{
	position : absolute;
	text-align : center;
	top : 80px;
	right : 10px;
	}
	#loginText{
	display : inline;
	text-align: inherit;
	}
	a{
		text-decoration: none;
	}
	</style>
</head>
<body>
<header>
<div id="Dicon"><a href="https://www.dongyang.ac.kr/dongyang/index.do#" ><img src="img/header/dicon.jpg"> </a></div>
<h1>DMU 맛집</h1>
<section id="login">
<p id = "loginText"><a href="8_matLogin.php" style="color: black;">로그인</a></p>
<p id = "loginText">|</p>
<p id = "loginText"><a href="9_matRegister.php" style="color: black;">회원가입</a></p>
</section>
</header>
<nav>
<section id="nv"><a href="4_matList.php" id="navblock"><p id ="navText">맛집 리스트</p></a></section>
<section id="nv"><a href="7_matReview.php" id="navblock"><p id ="navText">리뷰</p></a></section>
<section id="nv"><a href="3_matreport.php" id="navblock"><p id ="navText">맛집제보</p></a></section>
</nav>
</body>
</html>