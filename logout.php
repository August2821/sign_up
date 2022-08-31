<?php
session_start();
$_SESSION = array();
session_destroy();
?>
<script>
    alert("You've been logged out");
    location.replace('index.html');
</script>