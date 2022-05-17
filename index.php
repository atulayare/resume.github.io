<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Choose Template</title>
</head>

<body class="back">
    <div class=" container mt-5">
        <h3 class="text-dark fs-2">Select Resume Template</h3>
        <form action=" validTemplate.php" method="POST" enctype="multipart/form-data">
            <div class="container m-5">
                <div class="row row-cols-1 row-cols-md-3  g-4">
                    <div class="col">
                        <div class="" style="width:12rem; height:23rem;">
                            <img src="./images/basic.jpg" class="card-img-top" style="width:200px;height:330px;"
                                alt="...">
                            <h4 class="card-title text-dark fs-2">Premium &nbsp;&nbsp;<input type="radio" id="template1"
                                    name="template" value="Template1"></h4>

                        </div>
                    </div>

                    <div class="col">
                        <div class="" style="width:12rem; height:23rem;">
                            <img src="./images/premium.jpg" class="card-img-top" style="width:200px;height:330px;"
                                alt="">

                            <h4 class="card-title text-dark fs-2">Basic &nbsp;&nbsp;<input type="radio" id="template2"
                                    name="template" value="Template2"></h4>

                        </div>
                    </div>

                    <div class="col">
                        <div class="" style="width:12rem; height:23rem;">
                            <img src="./images/pro.jpg" class="card-img-top" style="width:200px;height:330px;"
                                alt="...">
                            <h4 class="card-title text-dark fs-2">Profesional &nbsp;&nbsp;<input type="radio" id="template3"
                                    name="template" value="Template3"></h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3 d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit" name="submit">Proceed To start</button>
                </div>
            </div>
        </form>
    </div>

    <script src="cv.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>

<!-- <div class="card mx-1" style="width: 12rem;height:8rem;">
                    <img src="./images/amit.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <input type="radio" id="template3" name="template" value="Template3">
                    </div>
                </div> -->