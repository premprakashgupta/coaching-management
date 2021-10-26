<?php
session_start();
include"db_con.php";
extract($_POST);

if($email=='prem.com0011@gmail.com' && $password=='123456')
{
    $_SESSION['email']='prem.com0011@gmail.com';
    echo "dashboard";
}
else{

    if(!empty($email) && !empty($password) && !empty($cpassword)){


        $query="select * from coaching_record where email='$email'";
        $result=mysqli_query($con,$query);
    // if($result)
    // echo "ss";
    // else
    // echo "ff";
    
        $num=mysqli_num_rows($result);
    // echo $num;
    
    
    if($num<1)
    {
        
                    $insert_query="insert into coaching_record (email,password,cpassword,form_status,submission_no) values ('$email','$password','$cpassword','notSubmitted','0')";
    
    
                    $insert_result=mysqli_query($con,$insert_query);
                    if($insert_result)
                    {
                                        $_SESSION['email']=$email;
                                        echo "registered";
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
       
    }
    else{
    
                    $query="select * from coaching_record where email='$email' && password='$password'";
                    $loginresult=mysqli_query($con,$query);
                    $num=mysqli_num_rows($loginresult);
                    if($loginresult){
                                    if($num==1){
                                                $row=mysqli_fetch_array($loginresult);
                                                $_SESSION['email']=$email;
                                                $_SESSION['approval']=$row['admission'];
                                                echo "hello you are loged in";
                                            //        $_SESSION['profile_img']=$row['image'];
                                            //    $_SESSION['name']=$row['name'];
                                            //    $_SESSION['about']=$row['about'];
                                            
                                            //    $q="update coaching_record set status='Online' where number='$sender_number'";
                                            //    $result = mysqli_query($con,$q);
                                            //    $_SESSION['success_info']="<script>swal('login', 'Thank you', 'success');</script>";
                                            //    // echo "swal('login', 'Thank you', 'success');";
                                            //       header("location://localhost/whatsapp-web/index.php");
    
                    }
                    else{
                        // $_SESSION['success_info']="<script>swal('Number already registered !!', 'Thank you', 'warning');</script>";
                        // header("location://localhost/whatsapp-web/login.php");
                        echo "error";
                    }
    
    
    }
    else{
        // $_SESSION['success_info']="<script>swal('Login failed..', 'Thank you', 'error');</script>";
        //     header("location://localhost/whatsapp-web/login.php");
        echo "error";
       
    }
    
    
    
       
    }
    
    
    }
    else{
        //  $_SESSION['success_info']="<script>swal('Check all details again !!', 'Thank you', 'error');</script>";
        // header("location://localhost/whatsapp-web/login.php");
    
        echo "error";
    }
    

}

?>