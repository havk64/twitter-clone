<?php
include_once "models/user.php"; //Including information about registered users.
$cookie = hasCookie($_COOKIE['login'], $users);
if($cookie){
    $current_user = $cookie;
}
$home = "index.php";
$logged = logged($current_user);
$allusers = "allusers.php";
$maps = "maps.php";
$about = "Impossible-Octopus-Fitness/Impossible-Octopus-Fitness.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twitter clone</title>
    <link rel="icon" href="img/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/sticky_smart_header.js"></script>
    <script src="js/weather.js"></script>
</head>
<body>
<!--Begin main container-->
<div class="container">
<?php include("views/header.php"); ?> <!-- Replacing the header with its Php partial -->

    <main>
        <article>
           <div class="message"><h1>
                   <?php if($current_user): ?>
                   You already are logged in as:  <?php echo($current_user['full_name']); ?>
                   <?php else: ?>
                   Welcome, Guest!
                   <?php endif; ?>
                   </h1>
           </div>
            <section id="login">
               <!-- <label for="status"></label> <= In case we can use label for the form... --> 
                <form id="status" action="/add_user.php" method="POST" title="post" enctype="multipart/form-data">
                    <fieldset>
                      <legend>Signup</legend>
                       <!-- <textarea name="input" cols="30" rows="10" title="input"></textarea> -->
                        <label><input name="login" type="text">Choose your login name</label>
                        <label><input name="password" type="password">Enter your new password</label>
                        <label><textarea name="bio" id="bio" cols="30" rows="10"></textarea>Short Bio</label>
                        <label><input type="file" name="picture">Upload your profile Picture</label>
                        <button type="submit" name="submit" value="SEND">Send</button>
                    </fieldset> 
                </form>
            </section>
        </article>
        
        <?php include("views/aside.php");?> <!-- Replacing the aside with its Php partial -->
        
    </main>
    <div class="clearfix"></div>
    
    <?php include("views/footer.php") ?> <!-- Replacing the footer with its Php partial -->
</div>    <!--End main container-->
<div id="bottom-right">Be aware! This page is still in beta</div>
</body>
</html>