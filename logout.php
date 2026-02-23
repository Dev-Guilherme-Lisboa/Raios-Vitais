<?php
include('header.php');
session_destroy();
print($_SESSION['Cliente']);
header('Location: index.php')
?>