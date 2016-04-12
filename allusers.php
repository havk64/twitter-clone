<?php
include_once "models/user.php"; //Including information about registered users.
$cookie = hasCookie($_COOKIE['login'], $users); //Assigning the variable to check if has cookie.
if($cookie){
    $current_user = $cookie;
}
$home = "index.php";
$mystatuses = "allusers.php";
$allusers = "allusers.php";
$maps = "maps.html";
$about = "Impossible-Octopus-Fitness/Impossible-Octopus-Fitness.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twitter clone</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="img/favicon.ico">
    <script src="js/sticky_smart_header.js"></script>
    <script src="js/weather.js"></script>
</head>
<body>
<!--Begin main container-->
<div class="container">
<?php include("views/header.php"); ?>   <!-- Replacing the header with its Php partial -->

    <main>
                  <div style="margin-top:50px;"><h1>
                   <?php
                   if($current_user){
                       echo("You are currently logged in as: " . $current_user['full_name']);
                   }
                   ?></h1>
           </div>
        <article>
            <h2>About Us</h2>
            <p>
                Lovable Stats is an online stats agregator built to be loved by developers and everyday users. We guarantee no hassles and easily readable stats.
            </p>
            <p>
                We love humans and that's why we have taken the effort to build stats and translate stats from other statistics sites for your use. We output the stats in two formats.
            </p>

                <ul>
            <li>
                Noob Stats
            </li>
            <li>
                Total Geek Stats
            </li>
        </ul>
        </article>
        <?php include("views/aside.php");?> <!-- Replacing the aside with its Php partial -->
    </main>
    <div class="clearfix"></div>
    
    <?php include("views/footer.php") ?> <!-- Replacing the footer with its Php partial -->
    
</div>    <!--End main container-->
<div id="bottom-right">Be aware! This page is still in beta</div>
</body>
</html>
