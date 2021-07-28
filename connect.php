<?php include("header.php"); ?>
<?php
$server = "";
$user = "";
$password = "";
$db = "";

$connection = mysqli_connect($server, $user, $password, $db);

if(!$connection) {
    die ("<h1>Connection failed</h1>" . mysqli_connect_error($connection));
}

?>