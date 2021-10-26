<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML, CSS, JavaScript">
      <meta name="author" content="prem">
    <!-- <meta http-equiv="refresh" content="30"> -->
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coaching Name | Admission Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/indexstyle.css">
        <link rel="stylesheet" href="../fontawesome-free-5.14.0-web/css/all.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="shortcut icon" href="image/facebook.png" />
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Patrick+Hand&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body>
    <div class="container-fluid admission_container">
        <div class="form">
            <section>
                <h1>Admission Form</h1>
              
                <div class="d-flex justify-content-between align-items-center">  <p>Enter your admission information below</p>  <span>coaching name</span></div>
            </section>
<hr>
<form id="submit_form_photo">
            <section>
               
                <h3>Name : </h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group"><input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" autocomplete="off"></div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group"><input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" autocomplete="off"></div>
                    </div>
                </div>
                <h3>Date of Birth : </h3>
                <div class="form-group">
                    <input type="text" name="dob" id="dob" class="form-control w-auto" placeholder="DD-MM-YYYY">
                </div>
                <h3>Gender : </h3>
                <div class="form-group">
                    <div class="male">
                    <input type="radio" name="gender"   value="male">Male</div>
                    <div class="female">
                    <input type="radio" name="gender"   value="female">female</div>
                    <div class="other">
                    <input type="radio" name="gender"   value="other">Decline to answer</div>
                </div>
                <h3>Choose your class : </h3>
                <input type="number" name="class_name" id="class_name" min="9" max="12" value="9" class="form-control w-auto">
                <h3>choose your stream : </h3>
                <div><input type="radio" name="stream" value="Mathematics">Mathematics</div>
                <div><input type="radio" name="stream" value="Biology">Biology</div>
                <div><input type="radio" name="stream" value="All">All</div>
                <h3>Mobile Number : </h3>
                <input type="text" name="mobile" id="mobile" placeholder="+91 1234567890" class="form-control w-auto" autocomplete="off">
                <h3>profile photo :</h3>
                <input type="file" name="profile_picture_for_update" id="">
                <h3>Address : </h3>
                <textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="Mention your full address" autocomplete="off"></textarea>

            </section>
            <hr>
            <section>
                <div class="form-group"><input type="submit" value="Send"  class="btn-primary btn float-right"></div>
            </section>
            </form>
        </div>
        <div class="note">
            <p> <span class="text-success font-weight-bold">Note :</span> After sending Admission form, you have to reach on coaching center for approval of admission and fee submission</p>
            <p><span class="text-danger font-weight-bold">Warning : </span> If you can't paid your fee within 3 bussiness day from form submission,
                 your form will be reject.</p>
        </div>
    </div>

    </body>
    <script src="js/overall.js"></script>
    </html>