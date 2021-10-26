<?php
    session_start();
    if($_SESSION['email']!='prem.com0011@gmail.com')
    {
        header("location://localhost/school/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML, CSS, JavaScript">
      <meta name="author" content="prem">
    <!-- <meta http-equiv="refresh" content="30"> -->
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coaching Name - dashboard</title>
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
    <div class="container-fluid p-3 teacher_dashboard">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h4 class="d-flex justify-content-between align-items-center "><span class="notice_count"></span><span>Admission Notifications</span></h4>
                <div class="admission_notification">
                    <table class="table table-primary">
                        <thead><th>Date and Time</th><th>Name</th></thead>
                        <tbody class="tbody">
                            
                        </tbody>
                    </table>
                </div>
                

            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 ">
                <div class="search d-flex justify-content-between align-items-center">
                    <input type="text" name="" id="search_input" placeholder="search roll number"> <i class="fa fa-search"></i>
                </div>
                <div class="search_detail bg-white">
                   
            
                </div>
                <div class="student_name bg-white p-3 my-3">
                    <h3></h3><h3 class='student_mob'></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
               
                
            </div>
        </div>



        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 reciept">
                <h3>Reciept Generate</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="rstudent_name" placeholder="Student Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="rstudent_class" placeholder="Class">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="rstudent_fee" placeholder="Fees">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="rstudent_month" placeholder="Month">
                </div>
                <div class="form-group">
                    <input type="button" class="btn btn-primary" id="generate" value="Generate">
                </div>
                <h3>Rejected Form</h3>
                <div class="rejected_form">
                    <table class="table table-primary">
                        <thead><th>id</th><th>Name</th><th>Email</th></thead>
                        <tbody class="tbody">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h3>Announcement Here</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="notice" placeholder="Notifications">
                </div>
                <div class="form-group">
                    <input type="button" class="btn btn-primary" id="publish" value="PUBLISH">
                </div>

                <h3 class="d-flex justify-content-around align-items-center"><span class="student_num">60</span><span>Student List</span></h3>
                <div class="studen_list">
                    <table class="table table-primary">
                        <thead><th>Roll No.</th><th>Name</th><th>Email</th></thead>
                        <tbody class="tbody">
                            <tr><td><a href="#">19105109004</a></td> <td>prem prakash</td></tr>
                            <tr><td>19105109004</td> <td>prem prakash</td></tr>
                            <tr><td>19105109004</td> <td>prem prakash</td></tr>
                            <tr><td>19105109004</td> <td>prem prakash</td></tr>
                            <tr><td>19105109004</td> <td>prem prakash</td></tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group px-3 ">
    <input type="button" value="Logout" id="dashboard_logout" class="btn btn-danger">
    </div>
</body>
<script src="js/overall.js"></script>
</html>