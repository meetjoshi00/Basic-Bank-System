<?php
session_start();
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"banksystem");
if(!$con){
    die("Connection failed");

}
$_SESSION['user']=$_POST['user'];
$_SESSION['sender']=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer & Transfer Details</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script>
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    <link rel="icon" height="50px" href="./images/icon.png">
</head>
<style media="screen">
  @import url('https://fonts.googleapis.com/css2?family=Lemonada:wght@600&display=swap');
</style>
<body style="background-color: black;" onload="loader()">
<!-- loader for splash screen -->
<div id="loading">
    <div class="wrapper flex-center">
        <div class="container">
            <div class="container-dot dot-a">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-b">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-c">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-d">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-e">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-f">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-g">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-h">
            <div class="dot"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:#7FB3D5; opacity:1;"> <!--#7FB3D5, #60105B-->
            <img  height="90"src="./images/icon2.png">
            &nbsp;
            <div class="navbar-brand font-weight-bold " id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:#60105B;font-family: 'Lemonada', cursive; font-size: 30px;">
                &nbsp;Basic Banking System
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color:pink; ">
                <li class="nav-item">
                        <a class="nav-link " href="index.php" style="color:#60105B;font-weight:1em;">
                            <div style="padding-right:0px;" >

                            </div>
                            <span style="padding-right:20px; font-family: 'Lemonada', cursive; font-size: 15px;" >&nbsp;&nbsp;Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewallcustomers.php" style="color:#60105B;font-weight:1em; font-family: 'Lemonada', cursive; font-size: 15px;">
                            <div style="padding-left:20px;" >

                            </div>
                            View All Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transferhistory.php" style="color:#60105B;font-weight:1em; font-family: 'Lemonada', cursive; font-size: 15px;">
                            <div style="padding-left:20px;" >

                            </div>
                            Transfer History
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    <div>



<div class="acustomer" style="margin:2%; ">
<div class="row">
    <div class="col-sm" style="padding:1% 3%;">

    <img  height="50" src="" alt="" style="display:inline;">&nbsp;
    <div style="padding-top:2%;display:inline;"><h4 class="font-weight-bold" style="color:#f0fff0;font-size:2em;;display:inline;margin:10px 5px 0px 5px;padding-top:1%; font-family: 'Lemonada', cursive; letter-spacing:1.5px;">Customer/Sender:</h4>
    </div>
        <br><br>
        <div style="font-size:1.2em;">
        <?php
        if (isset($_SESSION['user']))
        {
          $user=$_SESSION['user'];
          $result=mysqli_query($con,"SELECT * FROM customers WHERE Name='$user'");
          while($row=mysqli_fetch_array($result))
          {
            echo "<p style='color:#D9EEF1;'><b class='font-weight-bold' style='color:#f0fff0;'>User ID</b> &nbsp;: ".$row['customer_id']."</p><br>";
            echo "<p name='sender' style='color:#D9EEF1;'><b class='font-weight-bold'style='color:#f0fff0;'>Name&nbsp;&nbsp;</b>&nbsp;&nbsp;: ".$row['name']."</p><br>";
            echo "<p style='color:#D9EEF1;'><b class='font-weight-bold' style='color:#f0fff0;'>Email Address</b> : ".$row['email']."</p><br>";
            echo "<p style='color:#D9EEF1;'><b class='font-weight-bold' style='color:#f0fff0;'>Total Balance</b>&nbsp; :&nbsp;<b>&#8377;</b> ".$row['current_balance']."</p>";
          }
        }
      ?>
      </div>
    </div>
    <div class="col-sm" style="padding:1% 3%;">
        <div >
                    <form action="transfer.php" method="POST">

                    <img  height="50" src="" alt="" style="display:inline;">&nbsp;
                    <div style="padding-top:2%;display:inline;">
                    <span class="font-weight-bold" style="color:#f0fff0;font-size:1.8em;line-height:1em;display:inline;margin:10px 5px 0px 5px;padding-top:1%; font-family: 'Lemonada', cursive; letter-spacing:1.5px;">Tranfer the money:</span>
                    </div><br><br>
                    <b style="font-size:1.2em;color:#f0fff0;">Sender:</b> <span style="font-size:1.2em;"><input id="myinput" name="sender" disabled type="text" style="width:40%;border:none; border-radius: 30px; background-color: #F9EBEA;" value='<?php echo "$user";?>'></input></span>

                        <br><br><br>
                        <b style="font-size:1.2em; color:#f0fff0;">Reciever:</b>
                <select name="reciever" style="border-radius: 30px; background-color: #F9EBEA;" id="dropdown" required>
                    <option>Name</option>
                <?php
                $db = mysqli_connect("localhost", "root", "", "bank");
                $res = mysqli_query($db, "SELECT * FROM customers WHERE Name!='$user'");
                while($row = mysqli_fetch_array($res)) {
                    echo("<option> "."  ".$row['name']."</option>");
                }
                ?>
                </select>
                <br><br><br>
                        <b style="font-size:1.2em;color:#f0fff0; ">Amount &#8377;:</b>
                        <input name="amount" style="border-radius: 30px; background-color: #F9EBEA;"type="number" style="width:35%;" min="100" required>
                        <br><br><br>
                        <button id="transfer"  name="transfer" style="border-radius: 20px; background-color: #01abd9; border-color:#1B4F68 ;" class="btn btn-default" ><b>Transfer</b></button>
                        </form>
        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
setTimeout(function(){$('#loading').hide();}, 3000);
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>
</html>
