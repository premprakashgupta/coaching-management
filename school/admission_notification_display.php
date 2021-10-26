<?php
session_start();

include "db_con.php";
// if(isset($_SESSION['email']))
// {
    $q="select * from coaching_record where admission='process.gif' order by id desc";
$result = mysqli_query($con,$q);
// print_r($result);
$num=mysqli_num_rows($result);
$output="";
$count=0;
for($i=0;$i<$num;$i++)
{
    $row=mysqli_fetch_array($result);
    if($row['seen']=='unseen')
    $count++;
    $row['submission_no']>1 ? $update="<span class='badge-success mr-2 badge-pill'>Updated</span>" : $update="";
    

    // $image="'image/".$row['image']."'";
// $output.="<tr><a href=student_detail_display.php?email=".$row['email']."> <td>".$row['cu_date']."</td><td>".$row['email']."</td></a></tr>";
$output.="<tr><td>".$update." ".$row['cu_date']."</td><td><a class='text-white font-weight-bold'  href=student_detail.php?seen=seen&email=".$row['email'].">".$row['email']."</a></td></tr>";

}
 
echo json_encode(array($output,$count));
// }
// else{
//     echo "<li>Login First</li>";
// }



?>