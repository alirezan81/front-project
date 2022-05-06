<?php

include 'config.php';
include 'lib/db.php';
include 'security.php';

if(!Authentication::check()){
    header("Location: login.php");
}else{
    Authentication::logout();
    header("Location: catalog.php");
}

?>