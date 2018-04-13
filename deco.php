<?php
session_start();

session_destroy();


$cookieEnd = time()-60*60*24;
setcookie("id1", "", $cookieEnd);
setcookie("id2", "", $cookieEnd);
setcookie("id3", "", $cookieEnd);
setcookie("id4", "", $cookieEnd);

header('location: index.php');
