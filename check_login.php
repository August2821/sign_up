<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
</head>
<body>
   <?php
   session_start();
   $con = mysqli_connect('localhost','root','1234','test');              
   if (mysqli_connect_errno($con)){         
       echo "DB 연결 실패:" . mysqli_connect_error(); 
   }else{         
       echo "DB 연결 성공<br />" ;	 
   } //db 연결
      
      //login.php에서 입력받은 email, password
      extract($_POST);
      $email. '<br />';
      $password. '<br />';
      
      $q = "SELECT * FROM joinmember WHERE email = '$email' AND password = '$password'";
      $result = mysqli_query($con,$q);
      $row = mysqli_fetch_array($result);
      

      //결과가 존재하면 세션 생성
      if ($row != null) {
         $_SESSION['email'] = $row['email'];
         $_SESSION['password'] = $row['password'];
         $_SESSION['name'] = $row['name'];
         echo "<script>location.replace('index.html');</script>";
         exit;
      }
      
      //결과가 존재하지 않으면 로그인 실패
      if($row == null){
         echo "<script>alert('로그인에 실패하였습니다.')</script>";
         echo "<script>location.replace('login.php');</script>";
         exit;
      }
      ?>
   </body>