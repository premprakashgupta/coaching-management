<?php
session_start();

include "db_con.php";
// if(isset($_SESSION['email']))
// {
    $q="select * from coaching_record where admission='reject.png' order by id desc";
$result = mysqli_query($con,$q);
// print_r($result);
$num=mysqli_num_rows($result);
$output="";
for($i=0;$i<$num;$i++)
{
    $row=mysqli_fetch_array($result);

    // $image="'image/".$row['image']."'";
$output.="<tr><td>".$row['id']."</a></td><td>".$row['fname']." ".$row['lname']."</td><td><a href='student_detail.php?seen=unseen&email=".$row['email']."'>".$row['email']."</td></tr>";

}

 
// echo $output;
echo $output;

// }
// else{
//     echo "<li>Login First</li>";
// }



?>