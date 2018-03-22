<?php
date_default_timezone_set('Asia/Taipei');

$mysqli = new mysqli('localhost', 'abc', 'admin', 'ba_test');

$mysqli->query("SET NAMES utf8");

if(! isset($_SESSION)){
    session_start();
}