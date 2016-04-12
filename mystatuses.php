<?php
include_once "models/user.php"; //Including information about registered users.
include_once "models/status.php"; //Including statuses information.
$cookie = hasCookie($_COOKIE['login'], $users); //Assigning the variable to check if has cookie.
$current_user = array("id" => 0, "name" => "Jokerman", "img" => "http://jpgfun.com/view/joker_man_dark_knight_joker_1dhldhukf.jpg", "bio" => "The department of of Justice describes him as “the most wanted computer criminal in United States history.” His exploits were detailed in two movies: Freedom Downtime and Takedown. He started out exploiting the Los Angeles bus punch card system to get free rides. Then, like Apple co-founder Steve Wozniak, dabbled in phone phreaking. Although there were numerous offenses, Mitnick was ultimately convicted for breaking into the Digital Equipment Corporation’s computer network and stealing software.Today, Mitnick has been able to move past his role as a black hat hacker and become a productive member of society. He served five years, about 8 months of it in solitary confinement, and is now a computer security consultant, author and speaker.");
if($cookie){
    $current_user = $cookie;
}

$home = "index.php";
$logged = logged($current_user);
$allusers = "allusers.php";
$maps = "maps.html";
$about = "Impossible-Octopus-Fitness/Impossible-Octopus-Fitness.php";
$name = ($current_user['name']); //Full Name of user that post this status.
$img = $current_user['img']; //Image of this same user.
$bio = $current_user['bio']; // The id of actual status.
$id = $current_user['id']; // The actual status.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile page</title>
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
                   if($current_user['id'] != 0 ){
                       echo("Welcome to your profile page, " . $name);
                   } else {
                       echo("Can't be possible to access this page without login!");
                      ?></h1>
                       <p><?php echo('( Are you a Hacker? &#128561; )');
                   } ?></p>
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
