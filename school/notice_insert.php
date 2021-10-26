<?php
include"db_con.php";
extract($_POST);
date_default_timezone_set('Asia/Kolkata');
$c_date = date('d-m-y');


    
    $insert_query="insert into coaching_notice (notice,c_date) values ('$notice','$c_date')";


    $insert_result=mysqli_query($con,$insert_query);
    if($insert_result)
    {
     
        echo "publish";
        // $query="select * from coaching_record where number='$sender_number' && name='$name'";
        // $result=mysqli_query($con,$query);
        // $row=mysqli_fetch_array($result);
       
    //     $_SESSION['profile_img']=$row['image'];
    // $_SESSION['name']=$row['name'];
    // $_SESSION['about']=$row['about'];
    // $q="update coaching_record set status='Online' where number='$sender_number'";
    // $result = mysqli_query($con,$q);
    // $_SESSION['success_info']="<script>swal('Registered', 'Thank you', 'success');</script>";
    // header("location://localhost/whatsapp-web/index.php");

    }
    else{

        echo "error";
        // $_SESSION['success_info']="<script>swal('Not Registered, Try again..', 'Thank you', 'error');</script>";
        // header("location://localhost/whatsapp-web/login.php");
    }
   


?>