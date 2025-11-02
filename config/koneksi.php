<?php 
$host = "localhost";  //127.0.0.1
$port = 3306;
$username = "root";
$password = "";
$database = "pemweb";

//MYSQL handsake
$koneksi = new mysqli($host, $username, $password, $database, $port);

//Control handler
if($koneksi){
    echo "";
}else{
    echo "Koneksi mati";
    die;
}

?>