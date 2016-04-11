<?php
if(isset($_COOKIE['login'])):
    setcookie('login', '', time()-7000000, '/');
endif;
header("location: index.php");
exit();
?>