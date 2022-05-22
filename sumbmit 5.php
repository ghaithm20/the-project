<?php 

if((isset($_GET["d1"]))&&isset($_GET["d2"])){
    $d1=$_GET["d1"];
    $d2=$_GET["d2"];
    if(($d1=="u1")&&($d2=="p1")){
        echo "1";
    }
    else {
        echo "0";
    }
}