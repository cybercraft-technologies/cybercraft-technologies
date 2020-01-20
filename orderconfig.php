<?php
  include 'config.php';
 ?>
<html>
  <head>
    <title>
      CYBERCRAFT TECHNOLOGIES|Crafting Creativities...
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/loader.png">
    <script type="text/javascript">
      var myVar;

      function preloader() {
        myVar = setTimeout(showPage, 3000);
      }

      function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("main").style.display = "block";
      }

      document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
    <style>
      .ordercontentwrapper{
        text-align: center;
      }
      .ordercontent{
        width: 100%;
        background:#077fff;
        color: #020082;
        opacity: .79;
        top: 600;
        padding: 1%;
        align-self: center;
        display: inline-block;
        text-align: center;
        vertical-align: top;
        }
        .ordercontent img{
          border-radius: 50%
        }
      </style>
  </head>
  <body onload="preloader()">
    <div id="loader"><center>
      <img src="img/loader.png" style="width:300px;height:300px;border-radius:75px;"><br>
    </div>

    <div class=bg>
      <img src="img/bg1.jpeg">
      <img src="img/bg2.jpeg">
      <img src="img/bg3.jpg">
      <img src="img/bg4.jpg">
    </div>
    <div class=rel>
      <div style="display:none;" id="main" class="animate-bottom">

        <?php include('navigation.php');?>

        <div class=header style="height:50px">
          <center><br>
        </div>


        <div class=ordercontentwrapper>
          <div class="ordercontent">
            <center>
                <div class="container">
                  <div class="row" style="padding:5px;">
                    <div class="col-sm-12">
                      <font face=sofia size=7 color=#fff>Please Confirm and request a tender!</font><br><br><br>
                    </div>
                  </div>
                  <div class="row" style="padding:5px;">
                    <div class="col-sm-2">
                      <form action="orderconfig.php" method="post">
                          Name*
                    </div>
                    <div class="col-sm-10">
                      <input type="text" id=input class="form-control" name="name" placeholder="  Name" required>
                    </div>
                  </div>
                  <div class="row" style="padding:5px;">
                    <div class="col-sm-2">
                        Address*
                    </div>
                    <div class="col-sm-10">
                      <textarea id=input class="form-control" name="address" placeholder="  Address" required></textarea>
                    </div>
                  </div>
                  <div class="row" style="padding:5px;">
                    <div class="col-sm-2">
                        Mobile*
                    </div>
                    <div class="col-sm-10">
                      <input type="number" id=input class="form-control" name="mobile" placeholder="  Mobile" required>
                    </div>
                  </div>
                  <div class="row" style="padding:5px;">
                    <div class="col-sm-2">
                        Email*
                    </div>
                    <div class="col-sm-10">
                      <input type="email" id=input class="form-control" name="email" placeholder="  Email" required>
                    </div>
                  </div>
                  <div class="row" style="padding:5px;">
                    <div class="col-sm-2">
                        Task*
                    </div>
                    <div class="col-sm-10">
                      <select id=input class="form-control" name="task" required>
                        <option >Graphics Designing</option>
                        <option>Web Designing</option>
                      </select>
                    </div>
                  </div>
                  <div class="row" style="padding:5px;">
                    <div class="col-sm-2">
                        Task Details*
                    </div>
                    <div class="col-sm-10">
                      <textarea id=input class="form-control" name="taskdetails" placeholder="Task details" required></textarea>
                      <font color=red>TIP:Give us a description on project you need.
                         Like functions to be added to your project,colour combinations,uses...
                         If something is unclear our executive will reach you through the above given email and mobile numbers.</font>
                    </div>
                  </div>
                  <div class="row" style="padding:5px;">
                    <div class="col-sm-12"><br><br>
                        <center>By clicking on the button "Request Tender", You certifies you accept <a href="#"><font color=red>Terms and Conditions</font></a> of CyberCraft<br>
                          <input type="submit" id=button name="proceed" value="Request Tender">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="reset" id=button name="reset" value="Reset">
                        </form>
                    </div>
                  </div>
                </div>
            </center>
          </div>
        </di
        v>
      </div>
    </div>

    <?php include('footer.php')?>
  </body>
  </html>
