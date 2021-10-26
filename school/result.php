<?php
$register_no=$_POST['registration_no'];
include "db_con.php";

    $q="select * from btech_5th_sem where registration_no='$register_no'";
$result = mysqli_query($con,$q);

// $num=mysqli_num_rows($result);
$row =mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="prem">
<!-- <meta http-equiv="refresh" content="30"> -->

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title>IRCTC-plateform | ticket counter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/indexstyle.css">
    <link rel="stylesheet" href="../fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="shortcut icon" href="image/facebook.png" />
    <style>
        .table tr td,.table_mark tr th{
            padding-left: 40px;
            word-wrap: break-word;
        }
        .container{
            background-color: lightyellow;
            text-transform: capitalize;
        }
        .table_mark{
            width: 90%;
            margin: 20px auto;
        }
        .table_mark tr td,.table_mark tr th{
            padding: 10px 20px;
        }
        .btable tr td{
                border: none !important;
        }
        
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="container  mx-auto my-5 p-5">
        <h1 class="text-center">BSEB RESULT,PATNA</h1>
        <h3 class="text-center">H R HIGH SCHOOL,MAIRWA</h3>

        <section>
            <table class="table ">
                <tr><td><b>Name : </b> <?php echo $row['sname'];?></td><td><b>Roll No.: </b> <?php echo $row['registration_no'];?></td></tr>
                <tr><td><b>Father's Name : </b><?php echo $row['fathername'];?></td><td><b>DOB: </b><?php echo $row['dob'];?></td></tr>
                <tr><td><b>school Name: </b><?php echo $row['collegename'];?></td><td><b>class : </b><?php echo $row['class'];?></td></tr>
            </table>
                <br>
                <table border="2px" class=" table_mark">
                    <thead>
                    <tr><th>Subject</th><th>Full Marks</th><th>Pass Marks</th><th>Obtained Marks</th></tr>
                    </thead>
                   
                    <tr><td>mathematics</td><td>Full Marks</td><td>Pass Marks</td><td><?php echo $row['math'];?></td></tr>
                    <tr><td>english</td><td>Full Marks</td><td>Pass Marks</td><td><?php echo $row['english'];?></td></tr>
                    <tr><td>hindi</td><td>Full Marks</td><td>Pass Marks</td><td><?php echo $row['hindi'];?></td></tr>
                    <tr><td>science</td><td>Full Marks</td><td>Pass Marks</td><td><?php echo $row['science'];?></td></tr>
                    <tr><td>social science</td><td>Full Marks</td><td>Pass Marks</td><td><?php echo $row['sscience'];?></td></tr>
                    <tr><td colspan="3" class="text-right font-weight-bold px-5">Total</td><td><?php echo $row['total'];?></td></tr>
                </table>
                <table class="table btable">
                <tr><td><b>Status : </b> <?php echo $row['status'];?></td><td></td></tr>
                <tr><td><b>Percentage : </b><?php echo $row['percentage'];?></td><td rowspan="3"></td></tr>
                <tr><td><b>Date of Result : </b> <?php echo $row['c_time'];?></td><td><b>digital signature </b> <br> Manish </td></tr>
                </table>
        </section>
    </div>
</body>
</html>