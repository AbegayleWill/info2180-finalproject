<?php

$host= "localhost";

$username= "admin@project2.com";

$password = "password123";

$db_name = "bugme";

$conn = mysqli_connect($sname, $email, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}