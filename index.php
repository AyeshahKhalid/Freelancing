<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <!-- responsive meta tag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- web icon -->
  <link rel="shortcut icon" href="images/logo5.png" type="image/x-icon" width="100%" height="100%">
  <!-- css style sheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>24seven</title>
</head>
<style>
  .modal-body {
    padding: 25px 40px;
  }

  .clearfix {
    display: flex;
    justify-content: space-between;

  }

  .signupbtn {
    width: 100%;
    padding: 10px 0px;
  }

  .form-group {
    padding: 5px 0px;
  }
</style>

<body>
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"> <img src="images/logo5.png" alt="logo"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <!-- <span class="navbar-toggler-icon"></span> -->
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-us">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonial">TESTIMONIALS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <button class="nav-link" id="Login-Btn">Login</button>
            <!-- The Modal -->
            <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <div class="modal-header">
                  <span class="close">&times;</span>
                  <h2>Login</h2>
                </div>
                <div class="modal-body">
                  <p>Please fill in this form to create an account.</p>
                  <hr>
                  <form action="" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" name="Full-name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="Email" aria-describedby="emailHelp"
                        placeholder="Enter email">

                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="Password" placeholder="Password">
                    </div>
                    <hr>
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
                    </p>

                    <div class="clearfix">
                      <button type="submit" class="signupbtn" name="loginn">Login</button>
                    </div>


                    <?php


// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("data.php");

// If form submitted, collect email and password from form
if (isset($_POST['loginn'])) {
  $name     = $_POST['Full-name'];
  $email    = $_POST['Email'];
  $password = $_POST['Password'];

    // Check if a user exists with given username & password
    $query = mysqli_query($conn, "SELECT `Full-name`, `Email`, `Password` FROM `signupform` WHERE `Full-name`='$name' and `Email`='$email' and `Password`='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($query);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

        $_SESSION["Full-name"] = $name;
        $_SESSION["Email"] = $email;
        $_SESSION["Password"] = $password;
        echo "Login Successfully";
        header("location: home.php");

    } else {
        echo "User email or password is not matched <br/><br/>";
    }
}
?>
                  </form>
                </div>
                <div class="modal-footer">
                  <h3>Modal Footer</h3>
                </div>
              </div>
              <!-- -------------------------model end-------------------------------- -->
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </section>

  </span>
  <!-- ---------------------Login form--------------------------------- -->


  <!---------------------banner section-------------------->

  <video width="100%" class="myMov" controls autoplay loop muted="true">
    <source src="images/mov1.mp4" type="video/mp4">
  </video>
  <section id="banner" class="banner">

    <div class="container">
      <div class="row ">
        <div class="col-md-12 banner">
          <div class="mytitle">
            <p class="promo-title">Find & Hire The Best<br>Freelancer for Your<br>Bussiness</p>
            <button class="play-btn Login-Btn"><a href="postjob.php"> &nbsp;&nbsp;&nbsp;Post a job
                &nbsp;&nbsp;</a></button>
            <button class="play-btn"><a href="DashboardsUserView.php"> &nbsp;Earn Money&nbsp;</a></button>
          </div>

        </div>
        <!-- <div class="col-md-6 text-center banner">
          <img src="images/men.png" class="image-fluid" alt="mens">
        </div> -->
      </div>
    </div>
  </section>


  <!-----------------------workdone section-------------------------->


  <section id="workdone">
    <div class="container text-center">
      <h1 class="title">How It Work</h1>
      <div class="row text-center">
        <div class="col-md-4 workdone">
          <img src="images/post.png" alt="" width="200px">
          <h4>Post a Job</h4>
          <p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within
            minutes. </p>
        </div>
        <div class="col-md-4 workdone">
          <img src="images/hire.png" alt="" width="300px">
          <h4>Hire Freelancer</h4>
          <p>Compare the Quotes you receive and hire the best freelance professionals for the job.</p>
        </div>
        <div class="col-md-4 workdone">
          <img src="images/save.png" alt="" width="300px">
          <h4>Payment Simplified</h4>
          <p>Pay hourly or fixed-price and receive invoices through Upwork. Pay for work you authorize.</p>
        </div>
      </div>
      <button type="button" class="btn btn-primary" onclick="window.location.href='Services.html';" target="_blank">See
        How 24seven Works</button>
    </div>
  </section>

  <!-----------------------service section-------------------------->


  <section id="services">
    <div class="container text-center">
      <h1 class="title">Explore the Market Place</h1>
      <div class="row text-center main">
        <div class="col-md-3 services">
          <img src="images/programming.png" alt="" width="100px">
          <h4>Programming & Development</h4>
        </div>
        <div class="col-md-3 services">
          <img src="images/writing.png" alt="" width="100px">
          <h4>Writing & Translation</h4>
        </div>
        <div class="col-md-3 services">
          <img src="images/art.png" alt="" width="100px">
          <h4>Design & Creative</h4>
        </div>
      </div>
      <div class="row text-center main">
        <div class="col-md-3 services">
          <img src="images/web.png" alt="" width="100px">
          <h4>Web, Mobile & Software Development</h4>
        </div>
        <div class="col-md-3 services">
          <img src="images/web.png" alt="" width="100px">
          <h4>Data Science & Analytics</h4>
        </div>
        <div class="col-md-3 services">
          <img src="images/web.png" alt="" width="100px">
          <h4>Sales & Marketing</h4>
        </div>
      </div>
      <button type="button" class="btn btn-primary" onclick="window.location.href='Services.html';" target="_blank"> All
        Services</button>
    </div>
  </section>
  <!----------------------about us------------------------->
  <section id="about-us">
    <div class="container">
      <h1 class="title text-center">WHY CHOOSE US?</h1>
      <div class="row">
        <div class="col-md-4 about-us">
          <ul>
            <li>
              <p class="user text-right"><b>Credibility</b><br>We verify Freelancers, publish their feedback scores and
                All-Time Transaction Data to help you identify time-tested professionals.</p>
              <!-- <img src="images/testimonials.png" alt="" class="about-img"> -->
            </li>
            <li>
              <p class="user text-right"><b>Security</b><br>We offer SafePay payment protection and your choice of
                preferred payment method for financial peace of mind.</p>
            </li>

          </ul>
        </div>
        <div class="col-md-4">
          <!-- <img src="images/mobile.png" class="image-fluid" alt="" width="100%"> -->
        </div>
        <div class="col-md-4">
          <ul>
            <li>

              <p class="user"><b>Value</b><br>We have the lowest fees in the industry, providing you with maximum value
                at minimum cost.</p>
            </li>
            <li>
              <p class="user"><b>Support</b><br>Our dedicated support team works 24/7 to resolve all of your queries
                over the phone or email, no matter where you are located.</p>
            </li>
            <!-- <li>
              <img src="images/testimonials.png" alt="" class="about-img">
              <p class="user"><b>Ayesha</b><br>Co-founder at xyz</p>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!---------------------Testimonial-------------------------->


  <section id="testimonial">
    <div class="container">
      <h1 class="title text-center">WHAT CLIENT SAY?</h1>
      <div class="row offset-1">
        <div class="col-md-5 testimonial">
          <img src="images/testimonials.png" alt="">
          <p class="user"><b>Ayesha</b><br>Co-founder at xyz</p>
          <p>Lorem ipsum dolor sit amet consectetur. Quo ducimus fugit ea eum vitae adipisci eligendi eos! Assumenda
            delectus suscipit porro tempore architecto. Rerum quasi molestiae earum!</p>
        </div>
        <div class="col-md-5 testimonial">
          <img src="images/testimonials.png" alt="">
          <p class="user"><b>Ayesha</b><br>Co-founder at xyz</p>
          <p>Lorem ipsum dolor sit amet consectetur. Voluptatum quas quod dolore, officiis numquam iste! Sed, nostrum
            sequi natus cumque corrupti nesciunt optio quasi quibusdam ipsam amet?</p>
        </div>
      </div>
    </div>
  </section>

  <!----------------------Social Media Section------------------------------->
  <section id="social-media">
    <div class="container text-center">
      <p>FIND US ON SOCIAL MEDIA</p>
      <div class="social-icon">
        <a href="#"><i class="fa fa-facebook " aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram " aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-whatsapp " aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
      </div>
    </div>
  </section>
  <!-- --------------------Footer section--------------------------- -->
  <section id="footer">
    <img src="images/wave3.png" class="footer-image" alt="">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-box">
          <img src="images/logo5.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis in itaque ullam perspiciatis tenetur officia
            maxime fugit unde aliquam hic quasi commodi nulla velit provident incidunt nisi, sunt dolor nihil.</p>
        </div>
        <div class="col-md-4 footer-box">
          <p><b>CONTACT US</b></p>
          <p><i class="fa fa-map-marker"></i>North Nazimabad, Karachi Pakistan.</p>
          <p><i class="fa fa-phone"></i>+92123456789</p>
          <p><i class="fa fa-envelope-o"></i>xyz@gmail.com</p>
        </div>
      </div>
      <hr>
      <p class="copyright"><i class="fa fa-copyright " aria-hidden="true"></i> Lorem ipsum dolor sit labore beatae! </p>
    </div>
    <div>
  </section>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <!-- -------------------login script---------------------- -->
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("Login-Btn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  //   <!-- ------------profile col2 section--------------- -->
// $(document).ready(function(){
// $("#next").click(function (){
//     $("#next").show();
// });
// });

  </script>
  <script src="app.js">   </script>
</body>

</html>