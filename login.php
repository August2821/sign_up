<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
</head>
<body>
  <form method="post" action="check_login.php">
    <h2>Login</h2>
    <div class="emailForm">
      <input type="text" name="email" placeholder="email">
    </div>
    <div>
      <input type="password" name="password" placeholder="password">
    </div>
    <button type="submit" class="btn" onclick="button()">
      LOGIN
    </button>
    <div>
      <a href="sign_up.html">회원가입</a>
    </div>
  </form>
</body>
</html>