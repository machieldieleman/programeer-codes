<?php
include 'connection.php';
//session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="vakantie.css">
    <title>vakantie-huisjes</title>
</head>
<body>
<div class="achtergrond"></div>
<ul>
  <li><a class="homepage" href="homepage.php">Home</a></li>
  <li><a class="hotelpage" href="hotel.php?type=villa" <?= isset($_GET["type"]) && $_GET["type"] == "villa" ? "style='background-color: black;'" : "" ?>>villa's</a></li>
  <li><a class="hotelpage" href="hotel.php?type=hotel" <?= isset($_GET["type"]) && $_GET["type"] == "hotel" ? "style='background-color: black;'" : "" ?>>Hotels</a></li>
  <li><a class="bungalowpage" href="hotel.php?type=bungalow" <?= isset($_GET["type"]) && $_GET["type"] == "bungalow" ? "style='background-color: black;'" : "" ?>>Bungalows</a></li>
  <li><a class="loginpage" href="login.php">login</a></li>
  <li><a class="overzichtpage" href="overzicht.php">overzicht</a></li>
  <!-- <li><a class="contactpage" href="contact.php">Contact</a></li> -->
</ul>