<?php
    $con = mysqli_connect("localhost", "root", "", "banksystem");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System | Transfer History</title>
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
<body style="background-color: #fff" onload="loader()">

<div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:#7FB3D5; opacity:1;">
            <img  height="90"src="./images/icon2.png">
            &nbsp;
            <div class="navbar-brand font-weight-bold " id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:black;font-family: 'Lemonada', cursive; font-size: 30px;">
                &nbsp;Basic Banking System
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color:pink; ">
                <li class="nav-item">
                        <a class="nav-link " href="index.php" style="color:black;font-weight:1em;">
                            <div style="padding-right:0px;" >

                            </div>
                            <span style="padding-right:20px; font-family: 'Lemonada', cursive; font-size: 15px;" >&nbsp;&nbsp;Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewallcustomers.php" style="color:black;font-weight:1em; font-family: 'Lemonada', cursive; font-size: 15px;">
                            <div style="padding-left:20px;" >

                            </div>
                            View All Customers
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    <div>

<div class="usertable">

    <h3 class="font-weight-bold"style="text-align:center;color:black;font-family: 'Lemonada', cursive; letter-spacing: 3px;font-size:2.2em;padding:3%;">All Transfers</h3>
    <table id="myTable" style="border: 7px solid #34495E;">
          <tr style='font-size: 20px; letter-spacing:1.5px; text-align:center; align-content: center; border-collapse: collapse; margin:auto; border-color:#01abd9;'>
            <th style="background-color: #D6EAF8; border: 5px solid #01abd9 ;">Transfer ID</th>
            <th style="background-color: #D6EAF8; border: 5px solid #01abd9 ;">Sender</th>
            <th style="background-color: #D6EAF8; border: 5px solid #01abd9 ;">Receiver</th>
            <th style="background-color: #D6EAF8; border: 5px solid #01abd9 ;">Amount</th>

          </tr>
          <?php
        $sql = "SELECT * FROM `transfer` ORDER BY transfer_id DESC LIMIT 10";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post' action = 'acustomer.php'>";
            echo "<td style='font-size: 20px; letter-spacing:0.5px;'>". $row['transfer_id'] . "</td>
            <td style='font-size: 20px; letter-spacing:0.5px;'>". $row['sender'] . "</td>
            <td style='font-size: 20px; letter-spacing:0.5px;'>". $row['receiver'] . "</td>
            <td style='font-size: 20px; letter-spacing:0.5px;'>". $row['amount'] . "</td>";
            echo "</form>";
         echo  "</tr>";
        }
        ?>
    </table>
</div>
<br><br>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
setTimeout(function(){$('#loading').hide();}, 3000);
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>


</html>
