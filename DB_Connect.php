<?php
$con = mysqli_connect('localhost','root','1234','test');              
if (mysqli_connect_errno($con)){         
    echo "DB 연결 실패:" . mysqli_connect_error(); 
}else{         
    echo "DB 연결 성공<br />" ;	 
}

extract($_POST);
echo $name. '<br />';
echo $email. '<br />';
echo $phoneNumber. '<br />';
echo $password. '<br />';
echo $passwordCheck. '<br />';

if($password!=$passwordCheck){
    echo "<script>alert('비밀번호가 비밀번호 확인과 다릅니다.');</script>";
    echo "<script>location.href='sign_up.html'</script>";
}else{
    mysqli_query($con,"INSERT INTO joinmember (name,email,phoneNumber,password,passwordCheck) VALUES('$name','$email','$phoneNumber','$password','$passwordCheck')");

    mysqli_close($con);

    header("location: return.html");
}
// $q = "INSERT INTO joinmember(name,email,phoneNumber,password,passwordCheck) VALUES ('홍길동f','as@naver.com','14','kkd','kkd')";
// $mysqli->query($con, $q);
// $mysqli->close($con);
?>
