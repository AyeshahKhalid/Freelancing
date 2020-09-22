<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatApp</title>
    <link rel="shortcut icon" href="images/logo5.png" type="image/x-icon" width="100%" height="100%">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<style>
    .navbar {
        background-color: dodgerblue;
    }

    .format {
        background: #b1ceeb;
        margin: 10px 0px;
        border: none;
        padding: 5px 20px;

    }

    .namehead {
        background: #1772ce;
    }

    .image-user {
        border-radius: 100%;
        width: 50px;
    }

    .inline-user {
        display: inline;
        padding: 10px 10px;
        background: #c7c5e9;
    }

    .foot-format {
        background-color: ghostwhite;
        width: 80%;
        margin: 10px 0px;
        padding: 5px 20px;
    }

    .body-height {
        height: 485px;
    }
</style>

<body>
    <nav class="navbar justify-content-between">
        <a class="navbar-brand"><img src="images/logo5.png" width="50px" alt=""></a>
        <form class="form-inline">
            <button class="btn " type="submit">Search</button>
        </form>
    </nav>
    <!-- ------------------------Bodyhead------------------------------- -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 namehead">
                <form>
                    <input class="format" type="search">
                    <button class="format"><span class="iconify" data-icon="ant-design:search-outlined"
                            data-inline="false"></span></button>
                </form>
            </div>
            <div class="col-md-6" style="background-color: #c2c6ce; opacity: .5 ;">
                <p>Welcome</p>
            </div>
            <div class="col-md-3 namehead">
                <p class="text-white">Profile</p>
            </div>
        </div>
    </div>
    <!-- ---------------------------Body------------------------------------ -->
    <div class="container-fluid ">
        <div class="row body-height">
            <div class="col-md-3 inline-user">
                <img src="images/testimonials.png" class="image-user inline-user" alt="">
                <p class="inline-user">Online User</p>
                <hr>
            </div>
            <div class="col-md-6" style="background-color: #f1f2f5;">
                <p>Welcome</p>
            </div>
            <div class="col-md-3 inline-user">
                <p>Profile</p>
            </div>
        </div>
    </div>
    <!-- -------------------------------Footer------------------------------ -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 namehead">

            </div>
            <div class="col-md-6" style="background-color: #c2c6ce; opacity: .5 ;">
                <form>
                    <input class="foot-format" type="search">
                    <button><span class="iconify" data-icon="carbon:send" data-inline="false"></span></button>
                    <button><span class="iconify" data-icon="ion:document-attach-outline"
                            data-inline="false"></span></button>
                </form>
            </div>
            <div class="col-md-3 namehead">
                <p class="text-white">Profile</p>
            </div>
        </div>
    </div>
</body>

</html>