
<?php
session_start();
#echo $_SESSION['email'];
if(!isset($_SESSION['email'])){
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="SideMenu">
        <h1>USC Bank</h1>
        <nav>
            <a href="account.php" class="active"> <i class="fa fa-user"></i>  My Account</a>
            <a href="card.php"> <i class="fa fa-credit-card"></i>   Card Summary</a>
            <a href="transaction.php"> <i class="fa fa-laptop"></i>   Transactions</a>
        </nav>
    </div> 
    
    <div class="signout">
      <nav>
      <a href="../login/login.php" class="links"> Sign Out</a>
      </nav>
    </div>
    
  </body>
</html>
