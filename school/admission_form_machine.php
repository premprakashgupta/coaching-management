<?php
session_start();
include"db_con.php";
extract($_POST);
$count=1;
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y');
// echo $fname,$lname,$gender,$class_name,$stream,$mobile,$address;
if(!empty($fname) && !empty($lname) && !empty($gender) && isset($_SESSION['email']))
{

            $email=$_SESSION['email'];

            $query="select * from coaching_record where email='$email' && (form_status='update' or form_status='notSubmitted') && (submission_no < 3)";
        $result=mysqli_query($con,$query);
       
        $num=mysqli_num_rows($result);
        // echo $num;


            if($num==1)
            {

                $row=mysqli_fetch_array($result);
                if($row['submission_no']>0)
                 {
                    $count=$row['submission_no']+1;
                 }
                 else{
                     $count=1;
                 }


                $file_name=$_FILES['profile_picture_for_update']['name'];
                $extention = pathinfo($file_name,PATHINFO_EXTENSION);
                $valid_extention = array("jpg","jpeg","png");
                if(in_array($extention,$valid_extention))
                {
                    $new_name=$email.".".$extention;
                    $path = "upload/".$new_name;
                    if(move_uploaded_file($_FILES['profile_picture_for_update']['tmp_name'],$path)){
                        $update_query="update coaching_record set fname='$fname',lname='$lname',c_date='$dob',gender='$gender',class_name='$class_name',stream='$stream',mobile='$mobile',address='$address',admission='process.gif',cu_date='$date',seen='unseen',image='$path',form_status='submitted',submission_no='$count' where email='$email'";


                        $update_result=mysqli_query($con,$update_query);
                        
                            
                            if($update_result)
                            {
                            
                                echo "Form submited, Now reach on institute for approvel and fee submission.\n submission no. ".$count;
                                

                            }
                            else{

                                echo "insert error";
                            
                            }

                
                    }
                    else{
                        echo "File not move";
                    }
                }
                else{
                    echo "formate will be jpg,jpeg,png";
                }
                




























                
            
            
            }
            else{
                
                echo "Below are some problem occurs while submission of form \n1. one email one form \n2. your form is in process \n3. You have admitted to institute \n4. you exceed submission no 3 . \ncheck your status on the time of loging.";
            
            }



 }
else{
   

    echo " all field error or Login first";
}


?>