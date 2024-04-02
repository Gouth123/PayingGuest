<?php

@include 'db_conn.php';

if(isset($_POST['submit'])){

//    $pgid = mysqli_real_escape_string($conn, $_POST['pg_id']);
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $contact = mysqli_real_escape_string($conn, $_POST['contact_no']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   $dateofbirth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
   $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
   $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
//    $pass = md5($_POST['password']);
//    $cpass = md5($_POST['cpassword']);
//    $user_type = $_POST['user_type'];

   $select = " SELECT * FROM paying_guests WHERE email = '$email' && contact_no = '$contact' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else

    //   if($pass != $cpass){
    //      $error[] = 'password not matched!';
      {
         $insert = "INSERT INTO paying_guests( pg_id, name,contact_no ,email, address ,gender, date_of_birth , occupation, nationality) VALUES('$pg_id','$name','$contact_no','$email','$address','$gender','$date_of_birth','$occupation','$nationality')";
         mysqli_query($conn, $insert);
         header('location:index.php? success= Registration Successfull');
      }
   }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Paying Guest</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Paying Guest</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <!-- <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+012 345 6789</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div> -->
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Paying Guest</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Services</a>
                                <a href="room.php" class="nav-item nav-link">Rooms</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.html" class="dropdown-item">Booking</a>
                                        <a href="team.html" class="dropdown-item">Our Team</a>
                                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            <!-- </div>
                            <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Paying Guest</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#"></a></li> -->
                            <li class="breadcrumb-item text-white active" aria-current="page">Paying Guest</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        <!-- <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Adult</option>
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Child</option>
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Booking End -->

        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Paying Guest</h6>
                    <h1 class="mb-5"> <span class="text-primary text-uppercase">Details</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/pg/pic1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/pg/pic2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/pg/pic3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/pg/pic5.jpg">
                            </div>
                        </div>
                    </div>
        <!-- <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                                <div class="row g-3"> -->
                                    <!-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="pg_id" placeholder="pg_id">
                                            <label for="pg_id">Pg id</label>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="contact" placeholder="Your number">
                                            <label for="contact">Your number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="address" id="message" style="height: 100px"></textarea>
                                            <label for="message">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1">
                                              <option value="1">Male</option>
                                              <option value="2">Female</option>
                                            </select>
                                            <label for="select1">Select gender</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="date" class="form-control datetimepicker-input" id="date" placeholder="date of birth"/>
                                            <label for="date">date of birth</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="occupation" placeholder="occupation">
                                            <label for="occupation">occupation</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nationality" placeholder="nationality">
                                            <label for="nationality">nationality</label>
                                        </div>
                                    </div> -->


                                    <!-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1">
                                              <option value="1">Adult 1</option>
                                              <option value="2">Adult 2</option>
                                              <option value="3">Adult 3</option>
                                            </select>
                                            <label for="select1">Select Adult</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select2">
                                              <option value="1">Child 1</option>
                                              <option value="2">Child 2</option>
                                              <option value="3">Child 3</option>
                                            </select>
                                            <label for="select2">Select Child</label>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select" id="select3">
                                              <option value="1">Room 1</option>
                                              <option value="2">Room 2</option>
                                              <option value="3">Room 3</option>
                                            </select>
                                            <label for="select3">Select A Room</label>
                                          </div>
                                    </div> -->


                                    <!-- <div class="col-12">
                                    <input type="submit" name="submit" value="register now" class="form-btn">
                                    </div>
                                </div>
                            </form>
                        </div> 
      
     </div> -->
 <style>
    /* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

input[type=email], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

input[type=date], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 80px;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container1 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  display: flex;
  gap: 1rem;
  flex-direction: column; 

}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 120%;
  margin-top: 6px;
  padding: 2px 80px;
}

/* .p11
{
  float: left;
  width: 120%;
  margin-top: 6px;
  padding: 2px 80px;
} */
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    </style>
<div class="col-lg-6">
    <div class="wow fadeInUp" data-wow-delay="0.2s">
        <form action="" method="post">
        <h3></h3>
        <?php
        if(isset($error)){
        foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
        };
    };
    
   ?>
            <div class="container1">
                <div class="row">
   <!-- <div class="row g-3">  -->
        <div class="col-md-10">
            <!-- <div class="form-floating"> -->
                    <div class="col-75">
                    <input type="text" name="name" required placeholder="Enter your name">
                    </div>
            </div>
        <!-- </div> -->
        <div class="col-md-10">
            <!-- <div class="form-floating"> -->
                    <div class="col-75">
                    <input type="text" name="number" required placeholder="Enter your number">
                    </div>
            </div>
        <!-- </div> -->
        <div class="col-md-10">
            <!-- <div class="form-floating"> -->
                    <div class="col-75">
                        <!-- <div class="p11"> -->
                    <input type="email" name="email" required placeholder="Enter your email">
                        <!-- </div> -->
                    </div>
            </div>
        <!-- </div> -->
        <div class="col-10">
            <!-- <div class="form-floating"> -->
                    <div class="col-75">
                    <input type="text" name="address" required placeholder="Enter your address">
                    </div>
            </div>
        <!-- </div>  -->
        <div class="col-md-6">
            <!-- <div class="form-floating"> -->
                    <div class="col-75">
                        <label>Gender</label>
                    <select name="gender">
                    <option value="gender">Male</option>
                    <option value="gender">Female</option>
                    </select>
                    </div>
                </div> 
        <!-- </div>  -->
         <div class="col-md-4">
            <!-- <div class="form-floating"> -->
            <label>Date of Birth</label>
                    <div class="col-67">
                    <input type="date" name="date" required placeholder="date of birth">
                    </div>
            <!-- </div> -->
         </div>
        <div class="col-md-10">
             <!-- <div class="form-floating">  -->
                    <div class="col-75">
                    <input type="text" name="occupation" required placeholder="Enter your occupation">
                    </div>
             </div>
        <!-- </div> -->
        <div class="col-md-10">
            <!-- <div class="form-floating">  -->
                    <div class="col-75">
                    <input type="text" name="nationality" required placeholder="Enter your nationality">
                    </div>
            </div>
        <!-- </div> -->
        <div class="col-10"> 
                    <div class="col-65">
                    <input type="submit" name="submit" value="register now" class="form-btn">
                    </div>
        <!-- <p>already have an account? <a href="login_form.php">login now</a></p> -->
        </div> 
                </div>
            </div>
        </form>
       
    <!-- </div>
</div> -->  
        </div>
    </div>
       <!-- Newsletter Start -->
       <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row justify-content-center">
            <div class="col-lg-10 border rounded p-1">
                <div class="border rounded text-center p-1">
                    <div class="bg-white rounded text-center p-5">
                        <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                            <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">reg</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Start -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <div class="bg-primary rounded p-4">
                        <a href="index.php"><h1 class="text-white text-uppercase mb-3">Paying Guest</h1></a>
                        <!-- <p class="text-white mb-0">
                            Download <a class="text-dark fw-medium" href="https://htmlcodex.com/hotel-html-template-pro">Paying Guest</a>
                        </p> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>8433997917</p>
                    <!-- <p class="mb-2"><i class="fa fa-phone-alt me-3"></i></p> -->
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>payingguest@example.com</p>
                    <!-- <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="row gy-5 g-4">
                        <div class="col-md-6">
                            <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                            <a class="btn btn-link" href="">About Us</a>
                            <a class="btn btn-link" href="">Contact Us</a>
                            <a class="btn btn-link" href="">Privacy Policy</a>
                            <a class="btn btn-link" href="">Terms & Condition</a>
                            <a class="btn btn-link" href="">Support</a>
                        </div>
                        <div class="col-md-6">
                            <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                            <a class="btn btn-link" href="">Food & Restaurant</a>
                            <a class="btn btn-link" href="">Spa & Fitness</a>
                            <a class="btn btn-link" href="">Sports & Gaming</a>
                            <a class="btn btn-link" href="">Event & Party</a>
                            <a class="btn btn-link" href="">GYM & Yoga</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Paying Guest</a>, All Right Reserved. 
                        
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div> -->
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Help</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
<?php
//  if (isset($_POST['submit'])) 
//  {
//          $pg_id=mysqli_real_escape_string($conn,$_POST['pg_id']);
//          $name=mysqli_real_escape_string($conn,$_POST['name']);
//          $contact_no=mysqli_real_escape_string($conn,$_POST['contact_no']);
//         $email=mysqli_real_escape_string($conn,$_POST['email']);
//          $address=mysqli_real_escape_string($conn,$_POST['address']);
//          $gender=mysqli_real_escape_string($conn,$_POST['gender']);
//          $date_of_birth=mysqli_real_escape_string($conn,$_POST['date_of_birth']);
//          $occupation=mysqli_real_escape_string($conn,$_POST['occupation']);
//         $nationality=mysqli_real_escape_string($conn,$_POST['nationality']);
//          $query=mysqli_query($conn,"INSERT INTO `paying_guests`(`pg_id`,`name`,`contact_no`,`email`, `address`,`gender`,`date_of_birth`,`occupation`,`nationality`) VALUES('$pg_id','$name','$contact_no','$email','$address','$gender','$date_of_birth','$occupation','$nationality')") or die(mysqli_error($conn));
//              if ($query==true) 
//              {
//                  echo'<script>alert("booked successfully")</script>';
//                 header("Location: payingguest.php");
//             }
//             else
//             {
//                  echo'<script>alert("Failed")</script>';
//                header("Location: payingguest.php");
//              }
        
//  }
?>