<!----------------------------------------------------database connection--------------------------------->

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myshop";

$con=mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    die("Connection to db failed:".mysqli_connect_error());
}
//echo "Connection to db successfdully";