<?php
 session_start();

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
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Patrick+Hand&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body>
    <div class="container-fluid main_container">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 font-weight-bold">
                  
                  <li class="nav-item">
                    <a class="nav-link Notification" href="#">Notification</a>
                    <div class="notice position-absolute">
                        <table class="table table-hover table-primary table-striped text-center text-light ">
                            <thead><th colspan="2">Latest Notification</th><th></th></thead>
                            <tbody>
                                <tr><td>Today is holiday due to 5 september</td></tr>
                                <tr><td>Today is holiday due to 5 september</td></tr>
                                <tr><td>Today is holiday due to 5 september</td></tr>
                                <tr><td>Today is holiday due to 5 september</td></tr>
                                <tr><td>Today is holiday due to 5 september</td></tr>
                                <tr><td>Today is holiday due to 5 september</td></tr>
                                <tr><td>Today is holiday due to 5 september</td></tr>
                                <tr><td>Today is holiday due to 5 september</td></tr>
                                <tr><td>Today is holiday due to 5 september</td></tr>
                                <tr><td>Today is holiday due to 5 september</td></tr>
                            </tbody>
                        </table>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Btech_5th_sem_result.php">Result 5th Sem</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="admission_form.php">Admission</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>
          <main>
              <p class="user_name_p_tag alert alert-danger"><?php 
              if(isset($_SESSION['email']))
              {
                  echo "Hi, ".$_SESSION['email'];
              }
              else{
                  echo "Welcome in COACHING NAME,";
              }
              
              
              ?> </p>
              <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-12 order-1 d-flex justify-content-center align-items-center">
                      <div class="front_content px-2">
                        <h2>We promiss to give best Education <br> to your child</h2>
                      <span>professor - J. Sing</span>
                      <span>M.Sc (Mathematics)</span>
                      </div>
                      
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 order-2">
                      <div class="signup_login mx-auto mt-3" style="
                      <?php
                            if(isset($_SESSION['email']))
                            {
                                echo "display: none;";
                            }
                        
                        
                        ?>
                      
                      
                      ">
                          <h3>SignUp/Login</h3>
                          <div class="form-group">
                              <label for="email">Email : </label>
                              <input type="email" name="" id="email" class="form-control" autocomplete="off" require>
                          </div>

                          <div class="form-group">
                                    <label for="password">password : </label>
                                <input type="password" name="" id="password" class="form-control" require>
                            </div>

                          <div class="form-group">
                                    <label for="cpassword">Confirm password : </label>
                                <input type="password" name="" id="cpassword" class="form-control" require>
                            </div>
                            <div class="form-group">
                                
                            <input type="button" name="" id="submit" value="SUBMIT" class="btn btn-primary">
                        </div>
                        </div> 
                        <div class="approvel_reject mx-auto mt-3" style=" 
                        <?php
                            if(!isset($_SESSION['email']))
                            {
                                echo "display: none;";
                            }
                        
                        
                        ?>
                        
                        
                        ">
                            <div class="card">
                                <div class="card-body">
                                    <img src="image/<?php
                                    
                                    if(isset($_SESSION['approval']))
                            {
                                echo $_SESSION['approval'];
                            }
                            else
                            {
                                echo "login.png";
                            }
                                    
                                    
                                    
                                    
                                    ?>" alt="" class="img-fluid">
                                </div>
                                <div class="card-footer">
                                    <input type="button" value="Logout" id="logout" class="btn btn-danger">
                                </div>
                            </div>
                        </div>   
                      </div>
                  </div>
              </div>
          </main>
          <section class="dashboard">
              <h1 class="text-center my-5">ABOUT</h1>
                <h3 class="text-center">We have best education system which make learning easy for your child</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                        <div class="card card_one">
                            <div class="card-header">
                                <h2>Students</h2>
                            </div>
                            <div class="card-body d-flex justify-content-around align-items-center p-0">
                                <span><i class="fa fa-graduation-cap"></i></span>
                                <span class="font-weight-bold student_num">+100</span>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3"> 
                        <div class="card card_two">
                        <div class="card-header">
                            <h2>Teacher</h2>
                        </div>
                        <div class="card-body d-flex justify-content-around align-items-center p-0">
                            <span><i class="fa fa-chalkboard-teacher"></i></span>
                            <span class="font-weight-bold">+100</span>
                        </div>
                    </div>
                  </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3"> 
                        <div class="card card_three">
                        <div class="card-header">
                            <h2>Branches</h2>
                        </div>
                        <div class="card-body d-flex justify-content-around align-items-center p-0">
                            <span><i class="fa fa-building"></i></span>
                            <span class="font-weight-bold">+100</span>
                        </div>
                    </div></div>
                </div>
                <div class="Faculty w-1000 m-auto">
                    <h1 class="text-left my-5 px-2">Faculty</h1>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                            <div class="card h-auto">
                                <div class="card-body"><img src="image/pexels-anastasiya-gepp-1462630.jpg" alt="" class="img-fluid"></div>
                                <div class="card-header">Jessy Makew</div>
                                <div class="card-footer">M.Sc (Physics)</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                            <div class="card h-auto">
                                <div class="card-body"><img src="image/pexels-anastasiya-gepp-1462630.jpg" alt="" class="img-fluid"></div>
                                <div class="card-header">Jessy Makew</div>
                                <div class="card-footer">M.Sc (Physics)</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                            <div class="card h-auto">
                                <div class="card-body"><img src="image/pexels-anastasiya-gepp-1462630.jpg" alt="" class="img-fluid"></div>
                                <div class="card-header">Jessy Makew</div>
                                <div class="card-footer">M.Sc (Physics)</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toppers w-1000 m-auto">
                    

                    <section class="pt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <h3 class="mb-3">Toppers</h3>
                                </div>
                                <div class="col-6 text-right">
                                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                        <i class="fa fa-arrow-left"></i>
                                    </a>
                                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="image/pexels-anastasiya-gepp-1462630.jpg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="card-header">
                                                        <p>hi, <br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quasi magni, quidem impedit voluptates repellat quis iusto officia, expedita commodi repellendus. Iste voluptatem inventore dolore eum magni nihil dolores vel!</p>
                                                    </div>
                                                    <div class="card-footer h-auto">
                                                        <p> Navya jyoti (2020 batch)</p>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="image/pexels-anastasiya-gepp-1462630.jpg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="card-header">
                                                        <p>hi, <br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quasi magni, quidem impedit voluptates repellat quis iusto officia, expedita commodi repellendus. Iste voluptatem inventore dolore eum magni nihil dolores vel!</p>
                                                    </div>
                                                    <div class="card-footer h-auto">
                                                        <p> Navya jyoti (2020 batch)</p>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="image/pexels-anastasiya-gepp-1462630.jpg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="card-header">
                                                        <p>hi, <br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quasi magni, quidem impedit voluptates repellat quis iusto officia, expedita commodi repellendus. Iste voluptatem inventore dolore eum magni nihil dolores vel!</p>
                                                    </div>
                                                    <div class="card-footer h-auto">
                                                       <p> Navya jyoti (2020 batch)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="image/pexels-anastasiya-gepp-1462630.jpg" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="card-header">
                                                        <p>hi, <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quasi magni, quidem impedit voluptates repellat quis iusto officia, expedita commodi repellendus. Iste voluptatem inventore dolore eum magni nihil dolores vel!</p>
                                                    </div>
                                                    <div class="card-footer h-auto">
                                                        <p> Navya jyoti (2020 batch)</p>
                                                     </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
          </section>
    </div>
</body>
<footer class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col col1">
                <ul>
                    <li class="font-weight-bold"><a href=""><img src="image/Spiritual%20pretech%20Force.jpg" alt=""></a>Coaching Name</li>
                    <li><a href="">INDIA (national) / English </a></li>
                    <li><a href="">Help & Support</a></li>
                </ul>
            </div>
            <div class="col col2">
                <ul>
                    <li>Courses</li>
                    <li><a href="">IIT</a></li>
                    <li><a href="">JEE Mains</a></li>
                    <li><a href="">BHU</a></li>
                    <li><a href="">NDA</a></li>
                    <li><a href="">12th</a></li>
                    <li><a href="">11th</a></li>
                    <li><a href="">10th</a></li>
                    <li><a href="">9th</a></li>
                   
                </ul>
            </div>
            <div class="col col3">
                <ul>
                    <li>About</li>
                    <li><a href="">About us</a></li>
                    <li><a href="">How it works</a></li>
                    <li><a href="">Security</a></li>
                    <li><a href="">investor</a></li>
                    
                </ul>
            </div>
            <div class="col col4">
                                <ul>
                    <li>Terms</li>
                    <li><a href="">privacy policy</a></li>
                    <li><a href="">terms and conditions</a></li>
                    <li><a href="">copyright policy</a></li>
                    <li><a href="">code of conduct</a></li>
                    <li><a href="">fees and charges</a></li>
                   
                </ul>
            </div>
            <div class="col col5">
                                <ul>
                    <li>Apps</li>
                    <li><a href=""><img src="https://www.f-cdn.com/assets/main/en/assets/footer/app-store.svg" alt=""></a></li>
                    <li><a href=""><img src="https://www.f-cdn.com/assets/main/en/assets/footer/google-play.svg" alt=""></a></li>
                    <li>
                        <div class="row">
                            <div class="col"><a href="https://www.facebook.com/spiritualpretechforce" target="_blank" ><i class="fab fa-facebook"></i></a></div>
                            <div class="col"><a href=""><i class="fab fa-twitter"></i></a></div>
                            <div class="col"><a href="https://www.instagram.com/spiritual_pretech_force/" target="_blank" ><i class="fab fa-instagram"></i></a></div>
                            <div class="col"><a href="https://www.youtube.com/channel/UC8UM3hxAKThGt-Mz0AOSOxg" target="_blank" ><i class="fab fa-youtube"></i></a></div>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </div>
        <hr>
        <div class="row row2">
            <div class="col col1">52,768,197
Registered Users</div>
            <div class="col col2">
&nbsp; Total videos Posted
</div>
            <div class="col col3">coaching name ® is a registered Trademark of Web-development Technology Pty Limited (ACN 142 189 759)
Copyright ©  coaching name Technology Pty Limited (ACN 142 189 759)</div>
        </div>
    </div>
    </footer>
<script src="js/overall.js">
</script>
</html>