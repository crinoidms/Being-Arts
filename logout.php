<?php
session_start();

$_SESSION['come_from'] = $_SERVER['HTTP_REFERER'];

unset($_SESSION['user']);
unset($_SESSION['cart']);
unset($_SESSION['love']);

header("Location: ". $_SESSION['come_from']);