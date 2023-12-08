<?php
    $stud_id = $_POST['id'];
    $conn = mysqli_connect("localhost" , "root" , "" , "ajax-series") or die("Connection Failed");

    $sql = "DELETE FROM ajax WHERE id = {$stud_id}";
    if(mysqli_query($conn , $sql)){
        echo 1;
    }else{
        echo 0;
    }

?>