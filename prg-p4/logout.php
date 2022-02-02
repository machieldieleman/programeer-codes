<?php
    include 'header.inc.php';
    unset($_SESSION['user']);
    header('Location: homepage.php');
?>