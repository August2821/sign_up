<?php
session_start();
if(!isset($_SESSION['email'])) {
    echo "<script>location.replace('login.php');</script>";            
}

else {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $name = $_SESSION['name'];
} 
?>
<body>
    <div class="base">
        <h2><?php echo "안녕하세요, $name 님";?></h2>
        <button type="button" class="btn" onclick="location.href='logout.php'">
            LOGOUT
        </button>
    </div>
</body>