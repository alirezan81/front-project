<?php

include 'config.php';
include 'lib/db.php';
include 'security.php';

if(!Authentication::check()){
    header("Location: index.php?p=login");
}else{
    Authentication::logout();
    header("Location: index.php");
}

?>