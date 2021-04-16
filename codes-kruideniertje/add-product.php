<?php
include 'connection.php';

if(isset($_SESSION["user"])) {
    if($_SESSION["user"]["role"] != "admin") {
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: inloggen.php");
    exit();
}
if($_POST) {
    $barcode = $_POST["code"];
    $description = $_POST["description"];
    $group_id = $_POST["group"];
    $unit = $_POST["unit"];
    $supplier = $_POST["supplier"];
    $price = $_POST["price"];
    $stock= $_POST["stock"];
    if(empty($barcode) || empty($description) || empty($group_id) || empty($unit) || empty($supplier) || empty($price) || empty($stock)) {
        #Send error-message
    } else {
        $sql = "INSERT INTO articles (code, description, unit, supplier, price, stock, group_id) VALUES ('$barcode', '$description', '$unit', '$supplier', '$price', '$stock', '$group_id')";
        mysqli_query($conn, $sql);
        header("Location: adminpanel.php");

    }

}
?>
