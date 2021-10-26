<?php
session_start();
include"db_con.php";
extract($_POST);
$student_email=$_SESSION['student_email'];
if($approval=='admit'){



 
    $update_query="update coaching_record set admission='approved.png',form_status='admitted' where email='$student_email'";


    $update_result=mysqli_query($con,$update_query);
    if($update_result)
    {
       
        echo "approved";
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
    // header("location://localhost/school/dashboard.php");
    
    }
    else{

        echo "approved error";
        // $_SESSION['success_info']="<script>swal('Not Registered, Try again..', 'Thank you', 'error');</script>";
        // header("location://localhost/whatsapp-web/login.php");
    }
   



}

if($approval=='reject'){



 
    $update_query="update coaching_record set admission='reject.png',form_status='update' where email='$student_email'";


    $update_result=mysqli_query($con,$update_query);
    if($update_result)
    {
       
        echo "rejected";
        // $query="select * from coaching_record where number='$sender_number' && name='$name'";
        // $result=mysqli_query($con,$query);
        // $row=mysqli_fetch_array($result);
       
    //     $_SESSION['profile_img']=$row['image'];
    // $_SESSION['name']=$row['name'];
    // $_SESSION['about']=$row['about'];
    // $q="update coaching_record set status='Online' where number='$sender_number'";
    // $result = mysqli_query($con,$q);
    // $_SESSION['success_info']="<script>swal('Registered', 'Thank you', 'success');</script>";
    // header("location://localhost/school/dashboard.php");
    
    }
    else{

        echo "reject error";
        // $_SESSION['success_info']="<script>swal('Not Registered, Try again..', 'Thank you', 'error');</script>";
        // header("location://localhost/whatsapp-web/login.php");
    }
   



}

?>