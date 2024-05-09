<?php 
session_start();
session_destroy();
echo "<script> alert('لقد قمت بتسجيل الخروج !'); location.assign('index.php'); </script>" ;

?>