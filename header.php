<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>training</title>

    <!--================================== Style For CSS Files ========================================-->

    <link rel="icon" href="assets/imgs/favicon.ico">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/hover.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<!-- Start Navbar -->
<body>
    <header>
        <nav class="">
            <div class="default row">
                <div class="logoImg col-1">
                    <img src="assets/imgs/9.jpg" style="width:80px;height:80px;border-radius:20px" alt="">
                </div>
                <div class="nav-links d-block col-5">
                    <ul class="d-flex justify-content-between list-unstyled">
                        <li class="nav-item nav-item1 ">
                            <a class="nav-link active" href="#">HOME</a>
                        </li>
                        <li class="nav-item nav-item1">
                            <a class="nav-link" href="#">CATERGORY</a>
                        </li>
                        <li class="nav-item nav-item1">
                            <a class="nav-link" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item nav-item1">
                            <a class="nav-link" href="#">CONTACT US</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <div class="signInRegiser">
                        <form action="" method="post">
                            <div class="inputBox">
                                <input type="text" name="email" placeholder="Your Email" autocomplete="true" require />
                                <input type="password" name="password" placeholder="Password" autocomplete="true"
                                    require />
                                <button type="submit" class="btn btn-info" name="loginSubmit">login </button>

                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                                    Sign Up
                                </button>
                            </div>
                        </form>
                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="modal-title" style="color:green">Create a New Account </h2>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="signup.inc.php" method="post">
                                            <!---Form starting---->
                                            <div class="row ">
                                                <!--- For Name---->
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label class="username">  User Name :</label> </div><br/>
                                                        <div class="col-8">
                                                            <input type="text" name="username" id="username"
                                                                placeholder="Enter your user Name"
                                                                class="form-control ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-----For email---->
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label class="mail">Email :</label></div>
                                                    <div class="col-8">
                                                        <input type="email" name="email" id="email"
                                                            placeholder="Enter your email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-----For Password and confirm password---->
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label class="pass">Password :</label></div>
                                                    <div class="col-8">
                                                        <input type="password" name="password" id="password"
                                                            placeholder="Enter your Password" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label class="cpass">confirm Password :</label></div>
                                                    <div class="col-8">
                                                        <input type="password" name="cpassword" id="cpassword"
                                                            placeholder="confirm Password" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-----------For Phone number-------->
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-4 ">
                                                        <label class="gender">Gender:</label>
                                                    </div>

                                                    <div class="col-4 male">
                                                        <input type="radio" name="gender" id="gender"
                                                            value="male">Male
                                                    </div>

                                                    <div class="col-4 female">
                                                        <input type="radio" name="gender" id="gender"
                                                            value="female">Female
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info" name="signupsave">Sign
                                            up</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                 </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal footer -->
                    </div>
                </div>
            </div>
        </nav>
    </header>