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
    
    <?php include("views/footer.php") ?>
    
</div>    <!--End main container-->
<div id="bottom-right">Be aware! This page is still in beta</div>
</body>
</html>