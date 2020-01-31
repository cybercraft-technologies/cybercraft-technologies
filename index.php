<html>
<head>
    <title>
        CYBERCRAFT TECHNOLOGIES|Crafting Creativities...
    </title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/animations.css">
    <link href="styles/services.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/loader.png">
    <script type="text/javascript" src="javascript/effects.js">
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
</head>
<body onload="preloader()">
<div id="loader" class="animated zoomIn">
    <img src="img/loader1.png" style="width:300px;height:300px;border-radius:75px;"><br>
</div>
<div class=bg>
    <img src="img/bg1.jpeg">
    <img src="img/bg2.jpeg">
    <img src="img/bg3.jpg">
    <img src="img/bg4.jpg">
</div>

<div class=rel id="main">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php include('navigation.php'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php include('header.html'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="contentmain-wrapper">
                        <div class="contentmain" data-aos="zoom-in">
                            <h1>CRAFTING CREATIVITY...</h1>
                            <p align=justify>CYBERCRAFT is crafting a world of creativity.
                                Our skilled craftsmen of various areas will make your brain and imaginations compete.
                                Innovative works and astonishing designs from your most trusted craftsmen is now at your
                                fingertips.
                                To create attractive ads and make your business shoot up.
                                To make your tasks done, to manage your ventures by an innovative web application.
                                To manifest your skills, talents, opinions... by an attractive blog. And so and so...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div clas="col-sm-12">
                    <br><br>
                    <div class="annote animated flip">WHY CYBERCRAFT?</div>
                    <br><br>
                    <?php include('merits.html'); ?>
                </div>
            </div>
            <div class="row">
                <div clas="col-sm-12">
                    <div class="contentmain-wrapper">
                        <div class="contentmain" data-aos="zoom-in">
                            <h1>WHO WE ARE?</h1>
                            <p align=justify>CYBERCRAFT is a team of dedicated, skilled craftsmen from various corners of skills.
                                The diversity that we maintain in the skill set of our team makes
                                CyberCraft a fully equipped team to craft creativity in the cyber world.
                                It includes a team of web designers, developers, graphic designers, content writers, etc..
                                Each of us is excellently talented in our fields and quality assured by reputed institutions and our official.
                                This gives CyberCraft ever a difference from others
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div clas="col-sm-12">
                    <br><br>
                    <div class="annote animated headShake">OUR SERVICES</div>
                    <br><br><br><br>
                    <?php include('services.html');?>
                    <br><br>
                </div>
            </div>
        </div>
    </main>
       <?php include_once("footer.html");?>
</div>


</body>
</html>
