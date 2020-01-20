<html>
<head>
  <title>Navigation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <style>
    * {box-sizing: border-box;}

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    #navbar {
        overflow: visible;
        background: rgba(255,255,255,0);
        padding: 20px 15px;
        transition: 0.4s;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 99;
        border: none;
    }

    #navbar a {
        float: left;
        color: #ffffff;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
    }

    #navbar #logo {
        font-family: 'Poppins', sans-serif;
        font-size: 35px;
        font-weight: bold;
        transition: all 1s ease;
    }

    #navbar a#logo:hover{
        background: none;
    }

    #navbar a:hover {
        background-color: #ddd;
        color: black;
    }

    #navbar a.active {
        background-image: linear-gradient(#b54b70,#713361);
        color: white;
    }

    @media screen and (max-width: 580px) {
        #navbar {
            padding: 20px 10px !important;
        }
        #navbar a {
            float: none;
            display: block;
            text-align: left;
        }
        li{
            padding-right: 10px;
        }
    }@media (max-width: 768px) {
        nav.navbar {
            background: lightgray;
        }
  </style>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" id="logo"><img src="img/loader1.png" style="width:9em;height:8em"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="www.cybercraft-technologies.in" class="active">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="index.php#craftingcreativity">Crafting Creativity</a></li>
            </ul>
          </li>
          <li><a href="index.php#whycybercraft">Why CyberCraft?</a></li>
          <li><a href="#">Get in touch</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <script>
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
          if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
              document.getElementById("navbar").style.padding = "20px 10px";
              document.getElementById("logo").style.fontSize = "25px";
              document.getElementById('logo').innerHTML="CyberCraft Technologies";
              document.getElementById("navbar").style.backgroundColor="rgba(113, 51, 97,0.5)";
          } else {
              document.getElementById("navbar").style.overflow="visible";
              document.getElementById("navbar").style.padding = "20px 15px";
              document.getElementById("logo").style.fontSize = "35px";
              document.getElementById('logo').innerHTML='<img src="img/loader1.png" style="width:9em;height:8em">';
              document.getElementById("navbar").style.backgroundColor="rgba(255,255,255,0)";

          }
      }
  </script>

</body>
</html>
