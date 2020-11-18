<?php

include "core/base.php";
include "core/functions.php";

$id = $_GET['id'];
if (delete($id)){
    linkTo("index.php");
}