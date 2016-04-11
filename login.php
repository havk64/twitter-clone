<?php
$Home = "index.php";
$MyStatuses = "#";
$AllUsers = "allusers.html";
$maps = "maps.html";
$about = "Impossible-Octopus-Fitness/Impossible-Octopus-Fitness.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twitter clone</title>
    <link rel="icon" href="img/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="js/sticky_smart_header.js"></script>
</head>
<body>
<!--Begin main container-->
<div class="container">
<?php include("views/header.php"); ?>

    <main>
        <article>
            <section id="login">
               <!-- <label for="status"></label> <= In case we can use label for the form... --> 
                <form id="status" action="/index.php" method="POST" title="post">
                    <fieldset>
                      <legend>Login</legend>
                       <!-- <textarea name="input" cols="30" rows="10" title="input"></textarea> -->
                        <label><input name="login" type="text">Login</label>
                        <label><input name="password" type="password">Password</label>
                        <button type="submit" name="submit" value="SEND">Send</button>
                    </fieldset> 
                </form>
            </section>
        </article>
        
        <?php include("views/aside.php");?> 
        
    </main>
    <div class="clearfix"></div>
    
    <?php include("views/footer.php") ?>
    
</div>    <!--End main container-->
<div id="bottom-right">Be aware! This page is still in beta</div>
</body>
</html>