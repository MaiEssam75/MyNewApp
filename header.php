<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>training</title>
    <!--====================== Style For CSS Files =============-->
    <link rel="icon" href="assets/imgs/favicon.ico">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<!-- Start Navbar -->
<body>
    <header>
        <nav>
            <div class="default ">
                <div class="logoImg ">
                    <img src="assets/imgs/9.jpg" style="width:80px;height:80px;border-radius:20px" alt="">
                </div>

                <div class="nav-links ">
                    <ul>
                        <li class="nav-item nav-item1 ">
                            <a class="nav-link active" href="index.php">HOME</a>
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

                <div class="signInRegiser">
                    <form action="login.inc.php" method="post">
                            <input type="text" name="email" placeholder="Your Email" autocomplete="true" require />
                            <input type="password" name="password" placeholder="Password" autocomplete="true" require />
                            <button type="submit" class="btn " name="loginSubmit">login </button>
                    </form>  
                    <form action="signup.php" method="post">
                    <button type="submit" class="btn " name="loginSubmit">SignUp </button>
                    </form>
                       
                </div>
            </div>
        </nav>
    </header>