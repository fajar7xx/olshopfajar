<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "olshopfajar";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($con) . PHP_EOL;

?>