<?php
require "dbInfo.php";

// just if you do want php works without js but this in middle class html and make it form
/*if (isset($_GET['move'])){
    $btnMove=$_GET['move'];
    $query= "INSERT INTO `Moves` ( `move`) VALUES ( '$btnMove')";
    $connection->query($query);
}*/
    $btnMove=$_GET['move'];
    $query= "INSERT INTO `Moves` ( `move`) VALUES ( '$btnMove' )";
    $connection->query($query);
    print_r($_GET['move']);
    $connection->close();

