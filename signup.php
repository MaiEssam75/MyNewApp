<?php require "header.php";?>
<main>
      <section class="signupform">
            <form action="signup.inc.php" method="post">
                  <h2>Create a New Account</h2><br/>
                  <label for="user">User Name</label>
                  <input type="text" name="usernameBox" placeholder="Your User Name" /><br/>
                  <label for="email">Email</label>
                  <input type="email" name="emailBox" placeholder="Your Email" /><br/>
                  <label for="password">password</label>
                  <input type="password" name="passwordBox" placeholder="Password" /><br/>
                  <label for="cpassword"> confirm password</label>
                  <input type="password" name="cpasswordBox" placeholder="Confirm Password" /><br/><br/><br/>
                  <button type="submit" class="btn" name="signupSubmit">Sign up</button>
            </form>
      </section>
</main>
<?php require "footer.php";?>