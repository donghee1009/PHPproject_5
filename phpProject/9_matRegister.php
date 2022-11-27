<?php
include ("headerfile.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Cocoon</title>
  <style>
  
  section {
    text-align: center;
    }
  
  .idbox, .pwbox {
    width: 300px;
    height: 32px;
    font-size: 15px;
    outline: none;
    padding-left: 10px;
  }
  
  .buttonbox {
    height: 37px;
    background: #93DAFF;
    border: 0;
    outline: none;
  }
  
  .buttonbox:active {
    background: #00A5FF;
  }
    
  
  .buttonbox2 {
    width: 300px;
    height: 32px;
    font-size: 15px;
    border: 0;
    outline: none;
    padding-left: 10px;
    background: #FAEB78;
  }
  
  .buttonbox2:active {
    background:#FFC81E; 
  }
  
</style>
</head>
<body>
  <br><br><br>
  <section class="singupPage">
    <h1>회원가입 페이지</h1> <hr>
  </section>
  
  <section class="singupPage">
    <h4>맛집 추천 사이트에 오신 것을 환영합니다!</h4>
  </section>
 
  <section>
    <form name="login" method="post">

      <div style="width: 316px; margin: 0 auto;">
        <input type="text" class = "idbox" name="user_ID" placeholder="아이디(학번)" style="width: 229px;">
        <input type="button" class = "buttonbox" name="user_IDcheck" value="중복확인">
        <br><br>
        <input type="password" class = "pwbox" name="user_PW1" placeholder = "비밀번호"><br><br>
        <input type="password" class = "pwbox" name="user_PW2" placeholder = "비밀번호 재확인"><br><br>
        <input type="button" class = "buttonbox2" name="singup" value="회원가입">
      </div>
      </form>
   </section>
</body>
</html>
