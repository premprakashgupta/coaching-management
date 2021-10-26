<?php
session_start();

include "db_con.php";
// if(isset($_SESSION['email']))
// {
    $q="select * from coaching_notice  order by id desc";
$result = mysqli_query($con,$q);
// print_r($result);
$num=mysqli_num_rows($result);
$output="";
for($i=0;$i<$num;$i++)
{
    $row=mysqli_fetch_array($result);

    // $image="'image/".$row['image']."'";
$output.="<tr><td>".$row['c_date']."</td><td>".$row['notice']."</td></tr>";

}

 
echo $output;
// }
// else{
//     echo "<li>Login First</li>";
// }



?>