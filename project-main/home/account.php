<?php
$con=mysqli_connect('localhost','root','','test');
session_start();

if(!isset($_SESSION['email'])){
  header("Location: login.php");
}
if(isset($_GET['del_task'])){
  $id=$_GET['del_task'];
  $query="DELETE FROM cards WHERE cno=$id";
  $result=mysqli_query($con,$query);
  if($result){
    echo "<script>alert('card Deleted')</script>";
  }
}
{

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_account.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  </head>
  <body>

    <div class="SideMenu">
      <h1>USC Bank</h1>
      <nav>
        <!-- <a href="http://192.168.1.145:59087/home/account.html" class="active"> <i class="fa fa-user"></i>  My Account</a>
        <a href="http://192.168.1.145:59087/home/card.html"> <i class="fa fa-credit-card"></i>   Card Summary</a>
        <a href="http://192.168.1.145:59087/home/transaction.html"> <i class="fa fa-laptop"></i>   Transactions</a> -->
        <a href="../home/account.php" class="active"> <i class="fa fa-user"></i>  My Account</a>
        <a href="../home/card.php"> <i class="fa fa-credit-card"></i>   Card Summary</a>
        <a href="../home/transaction.php"> <i class="fa fa-laptop"></i>   Transactions</a>
        <a href="../login/login.php" class="links"> Sign Out</a>
      </nav>
    </div>

    <div class="TopNav">
      <ul>
        <li class="nav_links"><a onclick="document.getElementById('maindiv').innerHTML=document.getElementById('pd').innerHTML;">Personal Details</a></li>
        <li class="nav_links"><a onclick="document.getElementById('maindiv').innerHTML=document.getElementById('cards').innerHTML;">Cards</a></li>
        <li class="nav_links"><a onclick="document.getElementById('maindiv').innerHTML=document.getElementById('ac').innerHTML;">Add Card</a></li>
      </ul>
    </div>
    <div style="text-align:center; " id="account">
      <h2>MY ACCOUNT</h2><br>
      <h3 style="color:Violet">Click top navigation fields to view your credit card information</h3>
    </div>
    
    <div style="text-align:center; " id="maindiv"></div>

    <div style="text-align:center; visibility:hidden;" id="pd">
        <div class="row">
            <div class="column" style="float: left; width: 50%; padding: 10px;">
                <h3><i>Personal Details<i></h3><br>
                <?php
                    $res = mysqli_query($con,"select name,contact,email from user where email='".$_SESSION['email']."'");
                    $res = mysqli_fetch_array($res);
                ?>
                <p>Name:<?php print_r($res[0]); ?></p><br>
                <p>Contact:<?php print_r($res[1]);?></p><br>
                <p>Email:<?php print_r($res[2]);?></p><br><br>
                <div>
                <b class="red">
                      <?php
                          if(isset($_GET["error"])){
                              echo "<p style='color:red'>".$_GET['error']."</p>";
                          }
                      ?>
                          </b>
                </div>
            </div>
            <div class="column" style="float: left; width: 50%; padding: 10px;">
              <h3><i>Change Password:<i></h3>
              
              <form method="POST" action="pd.php">
                  <label for="op">Old Password</label><br>
                  <input type="password" id="op" name="op" placeholder="Old password" style="width: 60%;
                            padding: 9px 14px;
                            margin: 6px 0;
                            box-sizing: border-box;
                            border: none;
                            border-bottom: 2px solid black;"><br>     

                  <label for="np">New Password</label><br>
                  <input type="password" id="np" name="np" placeholder="New password" style="width: 60%;
                            padding: 9px 14px;
                            margin: 6px 0;
                            box-sizing: border-box;
                            border: none;
                            border-bottom: 2px solid black;"><br>

                  <label for="np">Re-enter New Password</label><br>
                  <input type="password" id="np" name="rnp" placeholder="Re-enter" style="width: 60%;
                            padding: 9px 14px;
                            margin: 6px 0;
                            box-sizing: border-box;
                            border: none;
                            border-bottom: 2px solid black;"><br><br>

                  <input type="submit" value="Submit" style="background-color: #555555;; border: none;color: white;padding: 15px 32px;
                  text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;">
                </form> 
              </div>
            </div>
            </div>
            <div style="text-align:center;  visibility:hidden;" id="cards">
              <h3>Cards</h3><br>
              <center>
              <?php
                  $res = mysqli_query($con,"select * from cards where email='".$_SESSION['email']."'");
                  echo "<div class=\"col-md-6 offset-md-3 c table-responsive\"><table class=\"table table-striped table-dark \" border=\"5px solid black\" border-collapse=\"collapse\">
                  
                  <thead class=\"\"><tr><th>aadhar</th><th>name</th><th>card no</th><th>cvv</th><th>expiry</th><th>action</th></tr></thead>";
                  while ($row=mysqli_fetch_array($res))
                  {
                    echo "<tbody><tr><td>$row[Aadhar]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]/$row[6]</td>
                          <td>" . "<a style=\"color:red\" href=" . "account.php?del_task=$row[cno]>" . "Remove card</a></td></tr></tbody>";
                  }
                  echo "</table></div>";
              ?>
              </center>
            </div>
            <div style="text-align:center; visibility:hidden;" id="ac">
              
              <form method="POST" action="addcard.php">
                  <label for="aadhar">AADHAR:</label><br>
                  <input type="text" id="aadhar" name="aadhar" placeholder="AADHAR NO" style="width: 40%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: none;
                            border-bottom: 2px solid black;"><br>     
                  <label for="aadhar">EMAIL:</label><br>
                  <input type="text" id="email" name="email" placeholder="EMAIIL" style="width: 40%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: none;
                            border-bottom: 2px solid black;"><br>
                  <label for="cardname">NAME ON CARD:</label><br>
                  <input type="text" id="lname" name="lname" placeholder="Card Name" style="width: 40%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: none;
                            border-bottom: 2px solid black;"><br>

                  <label for="cardno">CARD NUMBER</label><br>
                  <input type="number" id="lnum" name="lnum" placeholder="Card Number" style="width: 40%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: none;
                            border-bottom: 2px solid black;"><br>

                  <label for="cvv">CVV</label><br>
                  <input type="number" id="cvv" name="cvv" placeholder="CVV" style="width: 40%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: none;
                            border-bottom: 2px solid black;"><br>
                  <div class="row">
                    <div class="column" style="float: left; width: 50%; padding: 10px;">
                          <label for="mon">EXP/MONTH:</label><br>
                          <select name="mon" id="month" style="width:70px; padding:10px;">
                            
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          
                          </select><br>
                    </div>
                    <div class="column" style="float: right; width:50%; padding: 2px;">
                          <label for="year">EXP/YEAR:</label><br>
                          <select name="year" id="year" style="width:70px; padding:10px;">
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                          
                          </select>
                    </div>
                  </div>
                  <br><br>
                  <input type="submit" value="Submit"  style="background-color: #555555; border: none;color: white;padding: 15px 32px;
                  text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;">

                     
            </form>
              
         
    </div>
    
    


    <!-- <div class="signout">
      <nav>
      <a href="../login/login.html" class="links"> Sign Out</a>
      </nav>
    </div> -->

  </body>
</html>
