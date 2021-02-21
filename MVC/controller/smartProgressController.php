<?php

if(isset($_POST["pako"])){
    echo "hola";
}else{
    require_once("./MVC/model/smartProgressModel.php");
    //$day = requestDayTable();
    require_once("./MVC/view/smartProgressView.php");
}