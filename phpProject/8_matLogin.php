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
    width: 300px;
    height: 32px;
    font-size: 15px;
    border: 0;
    outline: none;
    padding-left: 10px;
    background: #93DAFF;
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
  
  .human {
    width: 130px;
    hegiht: 130px; 
    object-fit: cover;
  }
  
</style>
</head>
<body>
  <br><br><br>
  
  <section class="singupPage">
    <h2>로그인</h2> <br>
  </section>
 
  <section>
    <form name="login" method="post">
    
    <img class = "human" src="img/login/free-icon-user-8924586.png" ><br><br>
    
      <div style="width: 316px; margin: 0 auto;">
        <input type="text" class = "idbox" name="user_ID" placeholder="아이디(학번)">
        <br><br>
        <input type="password" class = "pwbox" name="user_PW1" placeholder = "비밀번호"><br><br>
        <input type="button" class = "buttonbox" name="singin" value="로그인"><br><br>
        <a href="9_matRegister.php"><input type="button" class = "buttonbox2" name="singup" value="회원가입"></a>
      </div>
      </form>
   </section>
</body>
</html>
