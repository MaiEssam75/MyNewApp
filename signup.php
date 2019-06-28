<?php require "header.php";?>
<section class="">
<div class="container">

<form action="signup.inc.php" method="post">
<div class="FormEdit">
  <h2> Create a New Account </h2>
    <label for="user">User Name</label>
          <input type="text" name="usernameBox" placeholder="Your User Name"/>
    <label for="email">Email</label>
          <input type="email" name="emailBox" placeholder="Your Email"/>
    <label for="password">password</label>
          <input type="password" name="passwordBox" placeholder="Password" />
    <label for="cpassword"> confirm password</label>
          <input type="password" name="cpasswordBox" placeholder="Confirm Password" />
    <button type="submit" name="loginSubmit">Sign up</button>
        </form>
        </div>
        </div>
</section>
<?php require "footer.php";?>