<?php
session_start();
extract($_POST);
include "db_con.php";
// if(isset($_SESSION['email']))
// {
    $q="select * from coaching_record where (email='$search_input' or id='$search_input') and admission='approved.png'";
$result = mysqli_query($con,$q);
// print_r($result);
$num=mysqli_num_rows($result);
// }
// else{
//     echo "<li>Login First</li>";
// }
if($num==1)
{
    $output="";
    $month = array("jan", "feb", "march","apr", "may", "jun","july", "aug", "sept","oct", "nov", "dece");
    $row=mysqli_fetch_array($result);
        for($i=0;$i<12;$i++)
    {
        
        $row[$month[$i]]=='paid' ? $paid_unpaid='paid' : $paid_unpaid='unpaid';
        // $image="'image/".$row['image']."'";
    $output.="<span class=".$paid_unpaid.">".$month[$i]."</span>";
    $mobile=$row['mobile'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    
    }
    
    
    
    
     
    echo json_encode(array($output,$mobile,$fname,$lname));
    
}
else{
    echo "error";
}
?>