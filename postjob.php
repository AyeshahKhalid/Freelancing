<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/logo5.png" type="image/x-icon" width="100%" height="100%">
  <title>Postjob</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- css style sheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="background-color: #d2b7e4;">
  <div id="bckgrnd"></div>
  <Section id="postjob">
    <img src="images/logo5.png" alt="" width="15%">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class=" text-white" style="font-weight: 600;">Tell us what you need done</h1>
          <p class="text-white">Contact skilled freelancers within minutes. View profiles, ratings, portfolios and chat
            with
            them. Pay the freelancer only when you are 100% satisfied with their work.</p>
        </div>
      </div>
      
      <div class="row jobinfo">
        <div class="col-md-12">
          <?php
          session_start();
          include_once("data.php");
          echo "<b><i> Hello ".$_SESSION["Full-name"]."!</i></b>";
          ?><br><br>
          <form action="" method="post">
            <!-- give your job a title -->
            <div class="form-group">
              <label for="formGroupExampleInput">Give your job a title</label>
              <input type="text" name="Posttitle" class="form-control">
            </div>
            <!-- Describe the job in detail< -->
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Describe the job in detail</label>
              <textarea class="form-control" name="Postdesc" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <p>What work do you need to get done?</p>
            <div class="form-group">

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Postfield" id="inlineRadio1"
                  value="Programming & Development">
                <label class="form-check-label" for="inlineRadio1">Programming & Development</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Postfield" id="inlineRadio2"
                  value="Writing & Translation">
                <label class="form-check-label" for="inlineRadio1">Writing & Translation</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Postfield" id="inlineRadio3"
                  value="Design & Creative">
                <label class="form-check-label" for="inlineRadio1">Design & Creative</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Postfield" id="inlineRadio4"
                  value="Web, Mobile & Software Development">
                <label class="form-check-label" for="inlineRadio1">Web, Mobile & Software Development</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Postfield" id="inlineRadio5"
                  value="Data Science & Analytics">
                <label class="form-check-label" for="inlineRadio1">Data Science & Analytics</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Postfield" id="inlineRadio6"
                  value="Sales & Marketing">
                <label class="form-check-label" for="inlineRadio1">Sales & Marketing</label>
              </div>
            </div>
            <div>
            <h6>How do you want to pay for this job?</h6>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select name="Postmoney" class="custom-select">
                  <option selected>Select...</option>
                  <option value="Under $250">Under $250</option>
                  <option value="$250 to $500">$250 to $500</option>
                  <option value="$500 to $1000">$500 to $1000</option>
                </select>
              </div>
              </div>
              <button type="submit" class="btn btn-primary" name="postmyproject">Yes, Post My Project</button>
              <?php
    include_once("data.php");
    if(isset($_POST['postmyproject'])) {
        $posttitle    = $_POST['Posttitle'];
        $postdesc   = $_POST['Postdesc'];
        $postfield = $_POST['Postfield'];
        $postmoney = $_POST['Postmoney'];
            // Insert user data into database
            $query   = mysqli_query($conn, "INSERT INTO `postajob`(`Posttitle`, `Postdesc`, `Postfield`, `Postmoney`) VALUES ('$posttitle','$postdesc','$postfield','$postmoney')");

            // check if user data inserted successfully.
            if ($query) {
              $_SESSION["Posttitle"] = $posttitle;
              $_SESSION["Postdesc"] = $postdesc ;
              $_SESSION["Postfield"] = $postfield;
              $_SESSION["Postmoney"] = $postmoney;
                echo "<br/><br/>Project Posted successfully.";
            } else {
                echo "Registration error. Please try again." . mysqli_error($conn);
            } 
    }
    ?>

          </form>
        </div>
      </div>
    </div>
  </Section>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="app.js"></script>

</html>