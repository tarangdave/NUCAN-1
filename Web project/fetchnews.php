<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','root','','nucanlogin');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

//chained PHP functions
$news = $mysqli->query("SELECT news_id, text, description, date, image FROM news WHERE club_id='RCNI'")->fetch_object()->product_name;
print $product_name;

$mysqli->close();
?>