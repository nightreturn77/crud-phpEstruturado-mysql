<?php

session_start();
$_SESSION['index'] = 'view/form-client.php';

echo "<script> window.location.href = '../' </script>";