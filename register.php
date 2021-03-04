<?php
	include_once('include/data.php');
    if(isset($_POST['register'])){
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
  	$Name=$_POST['Name'];
  	$Age=$_POST['Age'];
  	$Gender=$_POST['Gender'];
  	$Address=$_POST['Address'];
  	$Phone=$_POST['Phone_number'];
  	$Query="INSERT INTO `tb_login`(Name,Age,Gender,Address,Email,Phone_number)
  	Values('$Name','$Age','$Gender','$Address','$Email','$Phone')";
  		if($result=mysqli_query($conn,$Query)){
  			$login_query="INSERT INTO `tb-login`(Username,Password) Values
  			('$Username','$Password')";
  				if($login_result=mysqli_query($conn,$login_query)){
  					echo"<script>window.location.href='login.php';
  					alert('Successfully Register');</script>";

  				}else{
  					echo"<script>alert('Fails to Register Login');</script>";
  				}
  		}else{
  			echo "<script>alert('Fails to Register User');</script>";
  		}


    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>School Management | Login</title>
    <!--Customsize CSS-->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        section{
            position: relative;
            min-height: 100vh;
            background: #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        section .container{
            position: relative;
            width: 800px;
            height: 500px;
            background-color: white;
            overflow: hidden;
            border-radius: 20px;
        }
        section .container .user{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
        }
        section .container .user .img-box{
            position: relative;
            width: 50%;
            height: 100%;
            transition: 0.5s;
        }
        section .container .user .img-box img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover ;
        }
        section .container .user .form-container{
            position: relative;
            width: 50%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            transition: 0.5s;
        }
        form{
            width: 350px;
        }
        @media only screen and (max-width: 600px) {
            section .container{
                max-width: 400px;
            }
            section .container .img-box{
                display: none;
            }
            section .container .form-container{
               width: 100%;
            }
            section .container .user .form-container{
               width: 100%;
            }
        }
        .btn{
            background-color: #2ed573 !important;
            color: white;
        }
        .field-icon {
            float: right;
            margin-right: 20px;
            margin-top: -25px;
            position: relative;
            z-index: 2;
        }
        .dimback{
            background-color: #000;
        }
        .dim{
            opacity: 0.6;filter: alpha(opacity=60);
        }
        #loading{
            position: fixed;
            z-index: 9999;
            width: 100%;
            height: 100vh;
            background: #fff url(image/Rolling-1s-200px.gif)no-repeat center;
        }
    </style>
    </head>
<body onload="loader()">
    <!--Pre loader-->
    <div id="loading"></div>
    <!--Pre loader-->
    <section>
        <div class="container">
            <div class="user login-container">
                <div class="img-box dimback">
                    <img src="image/avel-chuklanov-DUmFLtMeAbQ-unsplash.jpg" class="dim"  alt="" srcset="">
                </div>
                <div class="form-container">
                    <!--form-->
                    <form action="login new.php" method="post">
                        <h2 class="font-weight-bold mb-5 text-center">Welcome</h2>
                        <div class="form-group">
                            <input type="text" name="Username" id="username" class="form-control rounded-pill" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="Password" id="password" class="form-control rounded-pill" placeholder="Password" required>
                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span style="float: right;margin-right: 10px;"><a href="" title="Forgot Password">Forgot Password ?</a></span>
                        </div><br>
                        <button type="submit" name="submit" class="btn  btn-block rounded-pill mt-3">Login</button>
                    </form>
                    <!--/form-->
                </div>
            </div>
        </div>
    </section>
    <!--Jquery & Bootstrap Js-->
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--/Jquery & Bootstrap Js-->
    <script>
        // show & hide password
        $(document).ready(function(){
            $('.toggle-password').click(function(){
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr('type') == 'password') {
                    input.attr('type','text');
                }else{
                    input.attr('type','password');
                }
            });
            $('#username').keyup(function(){
                $('#username').focus();
            })
            $('#password').keyup(function(){
                $('#password').focus();
            })
        });
        // Pre loader
        var preloader = document.getElementById("loading");
        function loader(){
            setTimeout(function(){
                preloader.style.display = 'none';
            },1000);
            return false;
        }
    </script>
</body>
</html>