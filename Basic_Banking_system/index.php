<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script>
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">

    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    <link rel="icon" height="50px" href="./images/icon.png">
    <script src="index.js"></script>
</head>
<style media="screen">
  @import url('https://fonts.googleapis.com/css2?family=Lemonada:wght@600&display=swap');
  /* start of footer */

  footer{
    background: transparent;
    padding: 50px 0;
  }
a.view{
  text-decoration: none;
  color: #6C5F8D;
}
a.view:hover{
  color: #B3ABC8;
}

</style>
<body  style="background-color: #F4ECF7 ;" onload="loader()">
<!--#F4ECF7 -->
    <div class="hero-content">
    <div class="container-fluid myclass" style="padding:0px; margin:0px; ">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:#7FB3D5; opacity:1;">
            <img style="border-radius: 0px;" height="90" src="./images/icon2.png">
            &nbsp;
            <div style="font-family: 'Lemonada', cursive; font-size: 30px;" class="navbar-brand font-weight-bold animated" id="title" style="color:black;font-size:2em; ">
                &nbsp;Basic Banking System
            </div>
            <!-- <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color:pink; ">
                    <li class="nav-item">
                        <a class="nav-link" href="viewallcustomers.php" style="color:black;font-weight:1em; font-family: 'Lemonada', cursive; font-size: 15px;">
                            <div style="padding-left:20px;" >
                            </div>
                            View All Customers
                        </a>
                    </li>
                </ul>
            </div> -->
        </nav>

    <div>

        <div class="row" style="margin:0px; padding:0px;" >
          <div class="col-sm">
              <img id="square" class="slideInLeft animated" height="430"src="./images/money-transfer.svg" alt="" style="align-self: flex-end;">
          </div>
            <div class="col-sm font-weight-bold typing_effect" style="padding-left:15px;color:black;font-size:2.2em;text-align:center;justify-content: center;">
             <p class="slideInRight animated"  style="margin:30% auto; letter-spacing: 3px; font-family: 'Lemonada', cursive; font-size: 30px; text-shadow: 2px 3px pink;">-> A simple banking system developed to tranfer money. <br> A smarter way to transfer money.<br><a class="view" href="viewallcustomers.php">-> View All Customers</a></p>
              <!--class="zoomIn animated" -->
            </div>
        </div>

    </div>
</div>

<!-- <footer>
<div class="footer-container">
<div class="left-col">
<h3 style="color: black; padding-top: 150px;">Web Banking</h3>
<p id="footer-para" style="color: black;">A simple banking system developed to tranfer money.</p>
<div class="links">
  <a href="viewallcustomers.php">View All Customers</a>
</footer> -->

<footer class="black">
  <p style="letter-spacing: 0.1rem; background-color: black; padding-top:30px; padding-bottom: 47px; margin-bottom:-150px; text-align: center;">@Basic Banking System</p>
</footer>


<script>
setTimeout(function(){$('#loading').hide();}, 100);
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>
</html>
