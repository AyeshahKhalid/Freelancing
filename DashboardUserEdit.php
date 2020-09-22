<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/logo5.png" type="image/x-icon" width="100%" height="100%">
  <title>DashboardUserEdit</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
body{
  background-color: #d4d7d9;
}
  .head {
    background-color: #360236;
    color: snow;
    padding: 100px 50px;
  }
  .profile {
    position: relative;
    top: -80px;
    background-color: white;
    padding: 30px 20px;
    box-shadow: 2px 2px 5px ;
  }
</style>

<body>
  <div class="head">
    <h1>
      <p class="text-center">Find & Hire The Best Freelancer for Your Bussiness</p>
    </h1>
  </div>
  <!-------------------------------Porfolio section--------------------------------------->
  <section id="profile">
    <div class="container">
      <div class="row offset-1">
        <div class="col-md-3 profile">
          <p class="text-center">
          <img src="images/testimonials.png" width="180px" alt=""></p>
          <!-- ----------form------------ -->
          <form action="" method="post">
         <p class="text-center"><a href="DashboardsUserView.php"><input type="button" class="btn btn-primary" value="View Profile"></a></p>
        </div>
        <div class="col-md-7 profile">
          name <br>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Your Professional Headline">
            <p class="text-right"><small>Total 15 Character</small></p>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Enter Profile Summary</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <p class="text-right"><button class="btn btn-primary">Save</button></p>
          </form>
          
        </div>
      </div>
    </div>
  </section>
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