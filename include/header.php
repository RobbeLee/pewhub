<?php
$_URL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$_ROOT = $_SERVER['DOCUMENT_ROOT'];
$_BRAND = "pewhub";
$_DATE = date('Y-m-d H:i:s');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip=$_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip=$_SERVER['REMOTE_ADDR'];
}
