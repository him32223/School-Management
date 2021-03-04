<?php
    include'include/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!--Data tables-->
    <link rel="stylesheet" href="datatables/datatables.min.css">
    <!--/Data tables-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Home</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        main{
            min-height: 75rem;
            padding-top: 4.5rem;
        }
        section{
            padding: 80px 0;
        }
        \['lokmjhj[
        m  gvfc']
   
        .card-body{
            text-align: center;
        }
        .card-body a{
            color: rgb(126, 124, 124);
        }
        .navbar-brand{
            font-size: 25px;
        }
        @media screen {
            .card{
                margin-bottom: 40px;
            }
        }
    </style>
</head>
<body>
    <!--Admin Part-->
    <?php if($_SESSION['Permission']=='admin'){?>
            <!--Navigation bar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-2">
                <div class="container">
                    <a class="navbar-brand" href="#">School  Management System</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link text-uppercase" href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['Permission']?> <span class="sr-only">(current)</span></a>
                        </li>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link text-uppercase" href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['Username']?> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown active">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-cog"></i>&nbsp;Action
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" onclick="window.location.href='login new.php'">Logout</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                </div>
            </nav>
            <!--/Navigation bar-->
            <style>

            </style>
            <main>
                <div class="container">
                    <section>
                        <h1 class="font-weight-light text-center"><i class="fas fa-tachometer-alt"></i> Dashboard</h1><hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                      <i class="fa fa-users mb-3" style="font-size: 80px;"></i>
                                      <h2><a href="">Student Details</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-user-tie mb-3" style="font-size: 80px;"></i>
                                        <h2><a href="">Staff Details</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-clipboard-check  mb-3" style="font-size: 80px;"></i>
                                      <h2><a href="">Student Registration</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                      <i class="fa fa-users mb-3" style="font-size: 80px;"></i>
                                      <h2><a href="">Staff Registration</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-chart-line mb-3" style="font-size: 80px;"></i>
                                        <h2><a href="">Student attendance</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-chart-line  mb-3" style="font-size: 80px;"></i>
                                      <h2><a href="">Staff attendance</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                      <i class="fas fa-bookmark mb-3" style="font-size: 80px;"></i>
                                      <h2><a href="">Student leave application (0)</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="far fa-bookmark mb-3" style="font-size: 80px;"></i>
                                        <h2><a href="">Staff leave application (0)</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-search-dollar mb-3" style="font-size: 80px;"></i>
                                      <h2><a href="">Student tution fee payment</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
    <?php }else{?>
    <!--/Admin Part-->


    <!--User Part-->
            <!--Navigation bar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-2">
                <div class="container">
                    <a class="navbar-brand" href="#">School  Management System</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link text-uppercase" href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['Permission']?> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown active">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-cog"></i>&nbsp;Action
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" onclick="window.location.href='login new.php'">Logout</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                </div>
            </nav>
            <!--/Navigation bar-->
    <main>
        <div class="container">
            <section>
                <h1 class="font-weight-light text-center"><i class="fas fa-tachometer-alt"></i> Dashboard</h1><hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                              <i class="fa fa-users mb-3" style="font-size: 80px;"></i>
                              <h2><a href="">Student Details</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-chart-line mb-3" style="font-size: 80px;"></i>
                                <h2><a href="">Student attendance</a></h2>
                            </div>
                        </div>
                    </div>

                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <i class="far fa-bookmark mb-3" style="font-size: 80px;"></i>
                                <h2><a href="">Staff leave application (0)</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-search-dollar mb-3" style="font-size: 80px;"></i>
                              <h2><a href="">Tution fees payment</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php }?>
    <!--/User Part-->

    <!--Jquery & Bootstrap Js & Data tables JS-->
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="datatables/datatables.min.js"></script>
    <!--/Jquery & Bootstrap Js  & Data tables JS-->
   
</body>
</html>
