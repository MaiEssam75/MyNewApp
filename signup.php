<?php require "header.php";?>
<main>
      <section class="signupform">
            <form action="signup.inc.php" method="post" id="validateform" name="signupform"onsubmit="return validateform()">
                  <h1 style="color:green;border-bottom:1px solid #f1f0ea;padding-bottom:20px;text-align: center">Create a New Account</h1><br/>
                  <p id='error'></p>
                 <h4> User Name : </h4>
                  <input type="text" name="usernameBox" onsubmit="return validateform()" placeholder="Your User Name" required/><br/>
                  <h4> Email : </h4>
                  <input type="email" name="emailBox" onsubmit="" placeholder="Your Email" required/><br/>
                  <h4> password :  </h4>
                  <input type="password" name="passwordBox"onsubmit="return matchpass()" placeholder="Password" required /><br/>
                  <h4> confirm password : </h4>
                  <input type="password" name="cpasswordBox"onsubmit="return matchpass()" placeholder="Confirm Password" required/><br/><br/><br/>
                  <button type="submit" class="btn"style="margin-left: 50px;width: 400px;margin-bottom: 30Spx;" name="signupSubmit">Sign up</button>
            </form>
      </section>
</main>
<?php require "footer.php";?>