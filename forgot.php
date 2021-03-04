
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
    <!--/Customsize CSS-->
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
                        <h2 class="font-weight-bold mb-5 text-center">Forgot Password?</h2>
                        <div class="form-group">
                            <input type="text" name="Username" id="username" class="form-control rounded-pill" placeholder="Username">
                        </div>
                        <br>
                        OR
                        <br>
                         <div class="form-group">
                            <input type="text" name="Username" id="username" class="form-control rounded-pill" placeholder="Email">
                        </div>
                        <br>
                        <button type="submit" name="submit" class="btn  btn-block rounded-pill mt-3" onclick="alert('An email has been send to your inbox')">Send</button>
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
    
</body>
</html>