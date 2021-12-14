<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="flex-container">
      <div class="wrapper">
        <div class="title"><span>Sign In</span></div>
        <form action="../login/validate.php" method="POST">
                      <div class="row">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" placeholder="Email or Phone" required>
                      </div>
                      <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                      </div>
                      <div class="pass"><a href="#">Forgot password?</a></div>
                      <div class="row button">
                        <input type="submit" value="Continue">
                      </div>
                      <?php
                if(isset($_GET['msg']))
                {
                  ?>
                  <span style="color:red">Login failed! Please enter correct details</span>
                  <?php
                }
              ?>
                      <div class="signup-link">Not a member? <a href="../signup/signup.php">Signup now</a></div>
        </form>
      </div>

    <div class="side">
      <div class="text">
      <h1>Welcome to USC Bank</h1>
      <h4>Log in to access your account</h4>
      </div>
    </div>
    </div>

  </body>
</html>
