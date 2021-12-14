<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_transaction.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>

    <div class="SideMenu">
      <h1>USC Bank</h1>
      <nav>
        <!-- <a href="http://192.168.1.145:59087/home/account.html" class="active"> <i class="fa fa-user"></i>  My Account</a>
        <a href="http://192.168.1.145:59087/home/card.html"> <i class="fa fa-credit-card"></i>   Card Summary</a>
        <a href="http://192.168.1.145:59087/home/transaction.html"> <i class="fa fa-laptop"></i>   Transactions</a> -->
        <a href="account.php" class="active"> <i class="fa fa-user"></i>  My Account</a>
        <a href="card.php"> <i class="fa fa-credit-card"></i>   Card Summary</a>
        <a href="transaction.php"> <i class="fa fa-laptop"></i>   Transactions</a>
        <a href="../login/login.php" class="links"> Sign Out</a>
      </nav>
    </div>

    <div>
      <h4 style="text-align:center;" >The content of Transactions page goes here</h4><br>
      <div style="text-align:center" id="cards"><br>
              <center>
              <?php
              $con=mysqli_connect('localhost','root','','test');
              session_start();
                  $res = mysqli_query($con,"select * from transactions");
                  echo "<div class=\"col-md-6 offset-md-3 c table-responsive\"><table class=\"table table-striped table-dark \" border=\"1\"><thead class=\"\"><tr><th>cno</th><th>tdate</th><th>ttime</th><th>purpose</th><th>amount</th></tr></thead>";
                  while ($row=mysqli_fetch_array($res))
                  {
                    echo "<tbody><tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr></tbody>";
                  }
                  echo "</table></div>";
              ?>
              </center>
            </div>
    </div>
  </body>
</html>
