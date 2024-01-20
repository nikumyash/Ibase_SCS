<?php
    $connection = mysqli_connect("localhost","root","","SCS_php");
    if(mysqli_connect_errno()){
        echo "Error:-". mysqli_connect_error();
    }
?>