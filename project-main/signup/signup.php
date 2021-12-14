<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="flex-container">
      <div class="wrapper">
        <div class="title"><span>Sign Up</span></div>
        <form action="../login/register.php" method="POST">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="name" placeholder="Full Name" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <div class="row">
            <i class="fas fa-phone"></i>
            <input type="number" name="contact" placeholder="Mobile Number" required>
          </div>
          <div class="row">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email ID" required>
          </div>
          <div class="row">
            <i class="fas fa-id-card"></i>
            <input type="number" name="aadhar" placeholder="Aadhar Card Number" required>
          </div>

          <div class="row button">
            <input type="submit" value="Confirm">
          </div>
        </form>
      </div>
    </div>
    </div>

  </body>
</html>
