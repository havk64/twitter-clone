<?php 
include_once "models/user.php"; //Including information about registered users.
include_once "models/status.php"; //Including information about registered users.
?>
 
<?php //Assigning some variables
$Login = $_POST['login']; //Assigning a shorter variable to Post login params.
$Password = $_POST['password']; //The same for Post password params.
$check = userExists($Login, $Password, $users); //Assigning the variable to check authentication.
$cookie = hasCookie($_COOKIE['login'], $users); //Assigning the variable to check if has cookie.
?>
 <!-- ============================================== -->
 
<?php //Control flow for authentication.
$show = '';    
if(isset ($Login)) //If the user tried to login.
{
    if($check) { //If the login was made successfully.
            setcookie("login", $_POST['login']);
            $current_user = $check;
            $message = "<h1>Hello, " . $current_user['full_name'] . "</h1><br>";
    } else { //If the user isn't in the database.
        $message = "Hello, there!<br>(User not found or wrong credentials)";
        $show = True;
    }
} elseif($cookie) {
    $current_user = $cookie;
    $message = "<h1>Hello, " . $current_user['full_name'] . "</h1><br>(Has Cookie!)";
}
else { //If user don't tried to login.
    $message = "<p>Hello, there!<br>(No login information - no cookie too.)</p>";
    $show = '';
}

// Setting variables for navbar.
$home = "index.php";
$mystatuses = "#";
$allusers = "allusers.php";
$maps = "maps.php";
$about = "Impossible-Octopus-Fitness/Impossible-Octopus-Fitness.php";
?> 
 <!-- ============================================== -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Description" content="A Twitter Clone Project for Holberton School by Alexandro de Oliveira">
    <meta name="keywords" content="Unix, Software Engineer, havk64, brasil, san francisco, holberton school, C language, Go language, Ruby, Python, Javascript, Handlebars, Deep Learning, Web Development">
    <title>Twitter clone</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="img/favicon.ico">
    <script src="js/post_a_status.js"></script>
    <script src="js/reply.js"></script>
    <script src="js/toggle.js"></script>
    <script src="js/sticky_smart_header.js"></script>
    <script src="js/all_images_data.js"></script>
    <script src="js/load_more.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/handlebars-v4.0.4.js"></script> <!-- Handlebars script -->
    <script src="js/task5.js"></script>
    <script src="js/weather.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Tells the browser the width of screen -->
</head>
<body>
<!--Begin main container-->
<div class="container">
<?php include("views/header.php"); ?>   <!-- Replacing the header with its Php partial -->

    <main>

        <article id="article">
            <div class="seeMore" style="display:
            <?php 
                         if( $show ) { // It's going to show "Invalid Credentials" if needed.
                             echo("block;");
                         } else {
                             echo("none;"); //Otherwise will be hidden.
                         }
                     ?>">Invalid credentials</div>
             <div><?php
                 echo($message);
             ?></div>
             <br>
              <p><?php /* ===>>> Code of previous task(4). Left for grade purposes. <<<==
                    if(isset ($_POST['login'])) 
                  {
                      	echo("<h1>" . "Hello, " . $_POST['login'] . "</h1>");
                        echo( "Your rot13'd login is: " . str_rot13($_POST['login']). '<br>');
                        echo( "The lengh of your login is: " . strlen($_POST['login']));
                  } 
                  else { 
                      echo("Hello, there!");
                  }*/ 
                  ?></p>
                  <p><?php/* echo($_COOKIE['login'].' '. $cookie['login']. $_COOKIE)*/ ?></p>
                  <br>
                  <p>  
                       <?php 
                      $id = (isset ($current_user)) ? $current_user['full_name'] : 'undefined';
                      echo("Current user is: ". $id );/*
                       if(!isset($_COOKIE['login'])) { // Checking for cookies for debugging purposes. <<<=
                           echo "Cookie named '" . $_COOKIE['login'] . "' is not set!";
                       } else {
                           echo "Cookie '" . $_COOKIE['login'] . "' is set!<br>";
                           echo "Value is: " . $_COOKIE['login'];
                       }*/
                       ?>
                  </p>
                  <br>
                  
           <a id="show-hide">Post a status</a>
            <section id="form">
               <!-- <label for="status"></label> <= In case we can use label for the form... --> 
                <form id="status" action="POST" method="post" title="post">
                    <fieldset>
                      <legend>Post</legend>
                       <textarea name="input" cols="30" rows="10" title="input"></textarea>
                        <label><input name="checkbox" type="checkbox">include location</label>
                        <button type="submit" value="SEND">Post</button>
                    </fieldset> 
                </form>
            </section>
            <!-- >>> Old location of first statuses <<< -->
            <!-- >>> ...substituted by Handlebars template <<< -->
            <!-- >>> Old location of first statuses <<< --> 
                
                <div> <!-- Beginning of Php content -->
               <?php foreach ($statuses as $status) { 
    $user = $status['user_id'];
    $userdata = getUser($user, $users);
    $name = $userdata['full_name'];
    $img = $userdata['img'];
    $id = $status['id'];
    $stat = $status['status'];
                    ?>
                   <section> <!-- Section of PHP Content -->
                   <h1><?php echo( $name );?></h1>
                   <img src="<? echo($img);?>"alt="<?echo($name);?>">
                   <p>in 02/05/2016</p>
                   <p><?echo($stat);?></p>
                   <div class="clearfix"></div>
                   <a data-index="<?echo($id);?>" class="replyLink">Reply</a>
                   <form id="<?echo($id);?>" action="POST" method="post" class="reply">
                       <fieldset>
                       <textarea name="input">   
                       </textarea>
                       <label><input name="checkbox" type="checkbox">include location</label>
                        <button type="submit" value="SEND">Post</button>
                       </fieldset>
                   </form>
                   </section>        <!-- / End of Php template -->
                   <? } ?>
                   <? echo("End of Php content!");?>
                    <!-- Replacing old statuses content with php template -->
                    
                </div>
            <!-- End of Statuses -->
                      <?echo("Beginning of JSON content");?>
                      
                       <div id="extrastatuses"></div>
                       <div id="template"></div>
                       
        </article>
        <?php include("views/aside.php");?> <!-- Replacing the aside with its Php partial -->

    </main>
    
    <?php include("views/footer.php") ?> <!-- Replacing the footer with its Php partial -->
    
</div>    <!--End main container-->
<div id="bottom-right">Attention! This page is in development</div>
</body>
</html>

