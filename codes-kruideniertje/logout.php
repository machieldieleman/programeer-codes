<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: inloggen.php");
    exit();
}
session_destroy();
header("Location: inloggen.php");

?>