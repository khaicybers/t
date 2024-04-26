<?php
session_start();
//$_SESSION["name"] = "Hoàng Bảo Minh";
//$_SESSION["profile"] = [
//    "name" => "Bảo Minh",
//    "email" => "bminh@gmail.com"
//];
//print_r($_SESSION);
//unset($_SESSION['name']);
//unset($_SESSION['profile']);
//session_destroy();
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$profile = isset($_SESSION['profile']) ? $_SESSION['profile'] : '';

//?>
<h1>Hello: <?php echo $name;?></h1>
<h1>Profile</h1>
<h2>Profile Name: <?php echo $profile['name'] ;?></h2>
<h2>Profile Email: <?php echo $profile['email']; ?></h2>


