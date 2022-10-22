<?php
include_once("../../../config/db.class.php");
include_once("../../../model/user.php");
$user = new User("tester23","123","The Tester","NO.223","223","1233@gmail.com");
$read = $user->Update(8);


?>