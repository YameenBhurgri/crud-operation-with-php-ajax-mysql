<?php
    $stu_id = $_POST['id'];
    $conn = mysqli_connect("localhost" , "root" ,"" ,"Ajax-series") or die("Connection failed");
    $sql = "SELECT * FROM ajax WHERE id = {$stu_id}";

    // run the query 
    $result = mysqli_query($conn , $sql) or die("Query Failed");

    
    if(mysqli_num_rows($result) > 0){
        $output =  '';
        while($row = mysqli_fetch_assoc($result)){
                $output .= "
                <tr>
                <td>First name</td>
                <td>
                    <input type='text'  id='edit-fname' value='{$row["first_name"]}'>
                    <input type='text'  id='edit-id' hidden value='{$row["id"]}'>
                </td>
                </tr>
    
            <tr>
                <td>Last name</td>
                <td><input type='text' id='edit-lname'value='{$row["last_name"]}'></td>
            </tr>
    
            <tr>
                <td></td>
                <td><input type='submit'  id='edit-submit' value='save'></td>
            </tr>";

            }            

        
        mysqli_close($conn);
        echo $output;
    }else{
            echo "<h2> No record Found </h2>";
    }


?>