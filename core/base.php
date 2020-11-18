<?php

function con(){
    return mysqli_connect("localhost","root","","contact_app");
}


$info = array(
    "name" => "Contact App",
    "short-name" => "CA",
    "description" => "Contact App Project"
);


$url = "http://{$_SERVER["HTTP_HOST"]}/contact_app/";

date_default_timezone_set('Asia/Yangon');