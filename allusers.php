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
    <script src="js/sticky_smart_header.js"></script>
</head>
<body>
<!--Begin main container-->
<div class="container">
<?php include("views/header.php"); ?>   <!-- Replacing the header with its Php partial -->

    <main>
                  <div><h1>
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
        <aside>
            <section>
                <h3 class="title">Dennis Ritchie</h3>
                <img src="img/ritchie.jpg" alt="Denns Ritchie">
                <p>Father of C language and Unix Operating System</p><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo harum dolorem quasi, officia earum velit libero fuga culpa quaerat sit in nam assumenda impedit tenetur sapiente suscipit architecto nostrum possimus.</p>
            </section>
            <section>
                <h3 class="title">Alexandro de Oliveira</h3>
                <img src="img/Alexandro%20de%20Oliveira.jpg" alt="Alexandro de Oliveira">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fugiat officia quam quis vero, ipsum reiciendis et debitis a harum. Nemo distinctio beatae quis delectus autem obcaecati vero hic dolore!</p>
            </section>
        </aside>
    </main>
    <div class="clearfix"></div>
    
    <?php include("views/footer.php") ?> <!-- Replacing the footer with its Php partial -->
    
</div>    <!--End main container-->
<div id="bottom-right">Be aware! This page is still in beta</div>
</body>
</html>