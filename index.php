<?php 
include('view/header.php');
include('controller/db/connection.php');
session_start()
?>

<div class="container">


<?php
include('view/menu.php');
include($_SESSION['index']);


?>



</div>

<?php

include('view/footer/php');

