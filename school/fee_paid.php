<?php
session_start();
extract($_POST);
include "db_con.php";

if($month_name!='' && $search_input!='')
{
    $uq="update coaching_record set $month_name='paid' where email='$search_input' or id='$search_input'";
    $uresult = mysqli_query($con,$uq);
    // print_r($result);
    if($uresult)
    echo "paid";
    else
    echo "error";
}

?>