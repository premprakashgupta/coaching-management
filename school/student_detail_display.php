<?php

$email=$_GET['email'];
$_SESSION['student_email']=$email;
$seen=$_GET['seen'];
include "db_con.php";
// if(isset($_SESSION['email']))
// {
    $q="select * from coaching_record where email='$email'";
$result = mysqli_query($con,$q);
// print_r($result);
$num=mysqli_num_rows($result);
// }
// else{
//     echo "<li>Login First</li>";
// }

if($seen=='seen')
{
    $uq="update coaching_record set seen='$seen' where email='$email'";
    $uresult = mysqli_query($con,$uq);
    // print_r($result);

}

?>