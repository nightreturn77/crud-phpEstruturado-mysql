<?php

session_start();
$_SESSION['index'] = 'view/form-login.php';

echo "<script> window.location.href = '../' </script>";
