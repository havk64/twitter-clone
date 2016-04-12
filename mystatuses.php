<?php
include_once "models/user.php"; //Including information about registered users.
include_once "models/status.php"; //Including statuses information.
$cookie = hasCookie($_COOKIE['login'], $users); //Assigning the variable to check if has cookie.
if($cookie){
    $current_user = $cookie;
}

$home = "index.php";
$showhide = showHide($current_user);
$allusers = "allusers.php";
$maps = "maps.html";
$about = "Impossible-Octopus-Fitness/Impossible-Octopus-Fitness.php";
$name = $current_user['full_name']; //Full Name of user that post this status.
$img = $current_user['img']; //Image of this same user.
$bio = $current_user['bio']; // The id of actual status.
$id = $current_user['id']; // The actual status.
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
                       echo("Welcome to your profile page, " . $current_user['full_name']);
                   }
                   ?></h1>
           </div>
           <article>
                   <section> <!-- Section of PHP Content -->
                   <h1><?php echo( $name );?></h1>
                   <img src="<?php echo($img);?>"alt="<?php echo($name);?>">
                   <p>User id: <?php echo($id);?></p>
                   <p><?php echo($bio);?></p>
                   <div class="clearfix"></div>
                   </section>        <!-- / End of Php template -->
                              <div>
                                  <h1>Your statuses:</h1>
                              </div>
                              <?php
               foreach($statuses as $status){
                   if($id == $status['user_id']){?>
                       <section>
                           <h3><?php echo("Uid: ".$status['id']);?></h3>
                           <p><?php echo("Posted on: ".$status['date']);?></p>
                           <p><?php echo($status['status']);?></p>
                       </section> 
                 <?php  }
               }
               ?>
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
