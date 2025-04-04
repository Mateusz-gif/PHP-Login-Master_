<?php
session_start();
if (!isset($_SESSION['Active']) || $_SESSION['Active'] == false) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Secure Page</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
