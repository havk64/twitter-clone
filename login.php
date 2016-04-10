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
        <header id="header"> <!-- Start of Header -->
        <div class="logo">
            <img src="img/logo.png" alt="Logo"/>
            <p>Likable Stats</p>
        </div>

        <ul class="top-menu">
            <li><a href="#">Edit my profile</a></li>
            <li><a href="#">Logout</a></li>
        </ul>

       <!-- <div class="clearfix"></div> replacing for use flexbox -->

        <div class="outer-menu-container">
            <ul class="main-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">My statuses</a></li>
                <li><a href="#">All users</a></li>
                <li><a href="maps.html">Maps</a></li>
                <li><a href="Impossible_Octopus_Fitness.html">About</a></li>
            </ul>
        </div>
        <button id="all-images" type="submit" value="Send">All images on this pages</button>
        
        

    </header>   <!-- End of Header -->

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
    <footer id="footer">
        <div class="footer-left" id="hulk">
            &copy; 2016 Lovable Stats.             
               <ul class="footer-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">My statuses</a></li>
                <li><a href="allusers.html">All users</a></li>
                <li><a href="maps.html">Maps</a></li>
                <li><a href="Impossible_Octopus_Fitness.html">About</a></li>
            </ul>
        </div>
        <div class="footer-center">
        <p>Made for a Holberton School Project, by Alexandro de Oliveira</p>
        </div>
        <div class="footer-right"> 
            <a href="https://github.com/havk64"><img src="img/octopus-github.png" height="20px" alt="Github" /></a>
            <a href="https://twitter.com/havk64"><img src="img/twitter.png" height="20px" alt="Github" /></a>
            <a href="https://www.linkedin.com/in/alexandroliveira"><img src="img/linkedin.png" height="25px" alt="Github" /></a>
        </div>
    
        <!--Always clear after a float -->
        <div class="clearfix"></div>
    </footer> 
</div>    <!--End main container-->
<div id="bottom-right">Be aware! This page is still in beta</div>
</body>
</html>