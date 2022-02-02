<?php
    include 'header.inc.php';
    if(!isset($_SESSION['user'])||!isset($_GET['id'])){
        header('Location: login.php');
        exit();
    }
    if($_POST){
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $number_persons = $_POST['number_persons'];
        $remarks = $_POST['remarks'];
        if(empty($start_date)||empty($end_date)||empty($number_persons)){
            echo 'Vul alle velden in';
        }
        else{
            $house_id = $_GET['id'];
            $user_id = $_SESSION['user']['id']; 
            $sql = "INSERT INTO bookings (start_date, end_date, number_persons, remarks, house_id, user_id, status) 
            VALUES ('$start_date','$end_date','$number_persons','$remarks','$house_id','$user_id','waiting')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo 'gelukt';
            }
            else{
                echo mysqli_error($conn);
            }
        }
    }
?>
<div class='detail'>
<form method="POST" action="">
    <label>start-datum</label><br>
    <input type='date' name="start_date"/><br>
    <label>eind-datum</label><br>
    <input type='date' name="end_date"/><br>
    <label>aantal-personen</label><br>
    <input type='number' name="number_persons"/><br>
    <label>opmerkingen</label><br>
    <textarea name="remarks"></textarea>
    <input type="submit"/>
</form>
</div>