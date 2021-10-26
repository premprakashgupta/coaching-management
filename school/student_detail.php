<?php
session_start();
if($_SESSION['email']!='prem.com0011@gmail.com')
{
    header("location://localhost/school/index.php");
}
include"student_detail_display.php";


?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML, CSS, JavaScript">
      <meta name="author" content="prem">
    <!-- <meta http-equiv="refresh" content="30"> -->
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coaching Name</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/indexstyle.css">
        <link rel="stylesheet" href="../fontawesome-free-5.14.0-web/css/all.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="shortcut icon" href="image/facebook.png" />
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
<body>
    <div class="container student_detail">
        
        <table class="table table-stripped table-primary w-50 m-auto font-weight-bold">
            <thead><th colspan="2"><h1 class="text-center">STUDENT DETAILS</h1></th></thead>
            <tbody class="text-center tbody">
                <?php
            for($i=0;$i<$num;$i++)
{
    $row=mysqli_fetch_array($result);
?>
<tr><td colspan='2'><img src='<?php echo $row['image']?>' alt='' class='img-fluid w-25 d-block m-auto border-danger'></td></tr>
<tr><td>Name </td> <td><?php echo $row['fname'];$row['lname'];?></td></tr>
<tr><td>Date of Birth </td> <td><?php echo $row['c_date'];?></td></tr>
<tr><td>Address </td> <td><?php echo $row['address'];?></td></tr>
<tr><td>Mobile No. </td> <td><?php echo $row['mobile'];?></td></tr>
<tr><td>Email </td> <td><?php echo $row['email'];?></td></tr>
<tr><td>Gender </td> <td><?php echo $row['gender'];?></td></tr>
<tr><td>Class </td> <td><?php echo $row['class_name'];?></td></tr>
<tr><td>Stream </td> <td><?php echo $row['stream'];?></td></tr>
<tr><td>Batch </td> <td><?php echo $row['cu_date'];?></td></tr>
<?php
}
?>
            </tbody>
        </table>
        <div class="admit_btn text-right p-3">
            <input type="button" value="Reject" id="reject" class="btn btn-danger " 
	<?php
	if($row['admission']=='reject.png')
{echo "disabled";}

?>



>
            <input type="button" value="Admit" id="admit" class="btn btn-success"
<?php
	if($row['admission']=='approved.png')
{echo "disabled";}

?>


>
            
        </div>
    </div>
</body>
<script src="js/overall.js"></script>
</html>