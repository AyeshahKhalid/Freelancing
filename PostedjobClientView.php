<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/logo5.png" type="image/x-icon" width="100%" height="100%">
  <title>PostedjobClientView</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
  .jobposted {
    box-shadow: 1px 1px 5px;
    margin: 20px 0px;
    padding: 20px 0px;
    background-color: white;
  }

  .head {
    background-color: #360236;
    color: snow;
    padding: 50px 50px;
  }

  body {
    margin: 0;
    padding: 0;
  }

  hr {
    background-color: #b1afb1;
  }

  .money {
    position: absolute;
    top: 20px;
    left: 80%;
  }

  .format {
    padding: 0px 30px;
  }
</style>

<body style="background-color: #e9d3e9;">
  <div class="head">
    <h1>
      <p class="text-center">Find & Hire The Best Freelancer for Your Bussiness</p>
    </h1>
  </div>
  <!-------------------------------Porfolio section--------------------------------------->
  <section id="jobposted">
    <div class="container">
      <!-- ----------------------ProjectDetail section---------------------------------- -->
      <div class="row offset-1">
        <div class="col-md-11 jobposted ">
          <h5 class="format">Project Detail</h5>
          <h5>
            <p class="text-right money format">
              <?php
              session_start();
              include_once("data.php");
               echo $_SESSION["Postmoney"];
              ?>
          </h5>
          </p>
          <hr>
          <p class="format">
            <?php
             
             echo  "<b> ".$_SESSION["Posttitle"]. "</b><br>";
             echo $_SESSION["Postdesc"];
            ?>
          </p>
          <h6 class="format">Skills Required</h6>
         <p class="format"> <?php
          echo $_SESSION["Postfield"];
          ?></p>
        </div>
      </div>
      <!-- ----------------------------Bid section------------------------------------- -->
      <div class="row offset-1">
        <div class="col-md-11 jobposted">
          <h5 class="format">Proposals</h5>
          <h5>
            <p class="text-right money format"><i><b>24seven</b></i>
          </h5>
          </p>
          <hr>
          <p class="format">
           <a href="DashboardClientView.php"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident voluptates natus error? Natus quas
            sapiente vero deleniti saepe? Optio recusandae ipsa inventore sit tempora ea nulla rerum enim iusto.
            Dignissimos!</a>
          </p>
        </div>
      </div>
      <!-- ---------------------------Bid section end----------------------------------- -->
    </div>
  </section>
  <!-- -----------------------------------Porfoliio section end--------------------------- -->
</body>
<script src="app.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
</script>

</html>