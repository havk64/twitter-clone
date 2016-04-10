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
    <!--Begin header container-->
    <header id="header">
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
                <li><a href="#">Home</a></li>
                <li><a href="#">My statuses</a></li>
                <li><a href="allusers.html">All users</a></li>
                <li><a href="maps.html">Maps</a></li>
                <li><a href="Impossible-Octopus-Fitness/Impossible-Octopus-Fitness.html">About</a></li>
            </ul>
        </div>
        <button id="all-images" type="submit" value="Send">All images on this pages</button>
        
        

    </header>   <!--End header container-->

    <main>

        <article id="article">
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
                <div class="hidden">
                    <section>		             
                     <h1>Alexandro de Oliveira</h1>		
                     <img src="img/Alexandro%20de%20Oliveira.jpg" alt="Alexandro de Oliveira">		
                             
                     <p>in 02/05/2016</p>		
                     <p>		
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quaerat ullam nihil inventore sint. Quae laudantium animi, odio adipisci placeat, delectus, at vitae eveniet voluptates et iure facere nulla, voluptatum?		
                     </p>		
                     <div class="clearfix"></div>		
                             <a data-index="1" class="replyLink" href="#/">Reply</a>		
                     <form id="1" action="POST" method="post" class="reply">		
                         <fieldset>		
                            <textarea name="input"></textarea>		
                             <label><input name="checkbox" type="checkbox">include location</label>		
                             <button type="submit" value="SEND">Post</button>		
                         </fieldset> 		
                     </form>		
                                 </section>		
                                 <section>		
                     <h1>Ken Thompson</h1> <!-- Put your photo here -->		
                     <img src="img/ken-thompson.jpg" alt="Ken Thompson">		
                     <p>in 02/05/2016</p>		
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero suscipit qui necessitatibus ad fugit voluptatum assumenda vel iusto, adipisci quam! Explicabo totam officia blanditiis. Reprehenderit animi dolorem odit hic voluptatibus.</p>		
                     <div class="clearfix"></div>		
                             <a data-index="2" class="replyLink" href="#/">Reply</a>		
                     <form id="2" action="POST" method="post" class="reply">		
                         <fieldset>		
                            <textarea name="input"></textarea>		
                             <label><input name="checkbox" type="checkbox">include location</label>		
                             <button type="submit" value="SEND">Post</button>		
                         </fieldset> 		
                     </form>		
                                 </section>		
                             <section>		
                     <h1>Dennis Ritchie</h1> <!-- Put your photo here -->		
                     <img src="img/ritchie.jpg" alt="Dennis Ritchie">		
                     <p>in 02/05/2016</p>		
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero suscipit qui necessitatibus ad fugit voluptatum assumenda vel iusto, adipisci quam! Explicabo totam officia blanditiis. Reprehenderit animi dolorem odit hic voluptatibus.</p>		
                     <div class="clearfix"></div>		
                             <a data-index="3" class="replyLink" href="#/">Reply</a>		
                     <form id="3" action="POST" method="post" class="reply">		
                         <fieldset>		
                            <textarea name="input"></textarea>		
                             <label><input name="checkbox" type="checkbox">include location</label>		
                             <button type="submit" value="SEND">Post</button>		
                         </fieldset> 		
                     </form>		
                                 </section>		
                                 <section>		
                     <h1>John Cochran</h1>		
                     <img src="img/tiwAAnkn.jpg" alt="John Cochran">		
                                
                     <p>in 02/05/2016</p>		
                     <p>		
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quaerat ullam nihil inventore sint. Quae laudantium animi, odio adipisci placeat, delectus, at vitae eveniet voluptates et iure facere nulla, voluptatum?		
                     </p>		
                     <div class="clearfix"></div>		
                         <a data-index="4" class="replyLink" href="#/">Reply</a>		
                     <form id="4" action="POST" method="post" class="reply">		
                         <fieldset>		
                            <textarea name="input"></textarea>		
                             <label><input name="checkbox" type="checkbox">include location</label>		
                             <button type="submit" value="SEND">Post</button>		
                         </fieldset> 		
                     </form>		
                                 </section>		
                                 <section>		
                     <h1>John Resig</h1>		
                     <img src="img/John%20Resig.jpg" alt="John Resig">		
                     <p>in 02/05/2016</p>		
                             
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero suscipit qui necessitatibus ad fugit voluptatum assumenda vel iusto, adipisci quam! Explicabo totam officia blanditiis. Reprehenderit animi dolorem odit hic voluptatibus.</p>		
                     <div class="clearfix"></div>		
                                 <a data-index="5" class="replyLink" href="#/">Reply</a>		
                     <form id="5" action="POST" method="post" class="reply">		
                         <fieldset>		
                            <textarea name="input"></textarea>		
                             <label><input name="checkbox" type="checkbox">include location</label>		
                             <button type="submit" value="SEND">Post</button>		
                         </fieldset> 		
                     </form>		
                                 </section>		
                             <section>		
                     <h1>Alexandro de Oliveira</h1>		
                     <img src="img/Alexandro%20de%20Oliveira.jpg" alt="Alexandro de Oliveira">		
                             
                     <p>in 02/05/2016</p>		
                     <p>		
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quaerat ullam nihil inventore sint. Quae laudantium animi, odio adipisci placeat, delectus, at vitae eveniet voluptates et iure facere nulla, voluptatum?		
                     </p>		
                     <div class="clearfix"></div>		
                             <a data-index="6" class="replyLink" href="#/">Reply</a>		
                     <form id="6" action="POST" method="post" class="reply">		
                         <fieldset>		
                            <textarea name="input"></textarea>		
                             <label><input name="checkbox" type="checkbox">include location</label>		
                             <button type="submit" value="SEND">Post</button>		
                         </fieldset> 		
                     </form>		
                                 </section>		
                                 <section>		
                     <h1>Ken Thompson</h1> <!-- Put your photo here -->		
                     <img src="img/ken-thompson.jpg" alt="Ken Thompson">		
                     <p>in 02/05/2016</p>		
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero suscipit qui necessitatibus ad fugit voluptatum assumenda vel iusto, adipisci quam! Explicabo totam officia blanditiis. Reprehenderit animi dolorem odit hic voluptatibus.</p>		
                     <div class="clearfix"></div>		
                             <a data-index="7" class="replyLink" href="#/">Reply</a>		
                     <form id="7" action="POST" method="post" class="reply">		
                         <fieldset>		
                            <textarea name="input"></textarea>		
                             <label><input name="checkbox" type="checkbox">include location</label>		
                             <button type="submit" value="SEND">Post</button>		
                         </fieldset> 		
                     </form>		
                                 </section>		
                             <section>		
                     <h1>Dennis Ritchie</h1> <!-- Put your photo here -->		
                     <img src="img/ritchie.jpg" alt="Dennis Ritchie">		
                     <p>in 02/05/2016</p>		
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero suscipit qui necessitatibus ad fugit voluptatum assumenda vel iusto, adipisci quam! Explicabo totam officia blanditiis. Reprehenderit animi dolorem odit hic voluptatibus.</p>		
                     <div class="clearfix"></div>		
                             <a data-index="8" class="replyLink" href="#/">Reply</a>		
                     <form id="8" action="POST" method="post" class="reply">		
                         <fieldset>		
                            <textarea name="input"></textarea>		
                             <label><input name="checkbox" type="checkbox">include location</label>		
                             <button type="submit" value="SEND">Post</button>		
                         </fieldset> 		
                     </form>		
                                 </section>		
                                 <section>		
                     <h1>John Cochran</h1>		
                     <img src="img/tiwAAnkn.jpg" alt="John Cochran">		
                             
                     <p>in 02/05/2016</p>		
                     <p>		
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quaerat ullam nihil inventore sint. Quae laudantium animi, odio adipisci placeat, delectus, at vitae eveniet voluptates et iure facere nulla, voluptatum?		
                     </p>		
                     <div class="clearfix"></div>		
                         <a data-index="9" class="replyLink" href="#/">Reply</a>		
                     <form id="9" action="POST" method="post" class="reply">		
                         <fieldset>		
                            <textarea name="input"></textarea>		
                             <label><input name="checkbox" type="checkbox">include location</label>		
                             <button type="submit" value="SEND">Post</button>		
                         </fieldset> 		
                     </form>		
                                 </section>		
                                 <section>		
                     <h1>John Resig</h1>		
                     <img src="img/John%20Resig.jpg" alt="John Resig">		
                     <p>in 02/05/2016</p>		
                             
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero suscipit qui necessitatibus ad fugit voluptatum assumenda vel iusto, adipisci quam! Explicabo totam officia blanditiis. Reprehenderit animi dolorem odit hic voluptatibus.</p>		
                     <div class="clearfix"></div>		
                                 <a data-index="10" class="replyLink" href="#/">Reply</a>		
                     <form id="10" action="POST" method="post" class="reply">		
                         <fieldset>		
                            <textarea name="input"></textarea>		
                             <label><input name="checkbox" type="checkbox">include location</label>		
                             <button type="submit" value="SEND">Post</button>		
                         </fieldset> 		
                     </form>		
                                 </section>
                </div>
            <!-- End of Hidden html content -->
                      
                       <div id="extrastatuses"></div>
                       <div id="template"></div>
                       
        </article>
        <aside>
              <p id="pweather">It's <span id="weather">an unknown weather</span> today!</p>
              <button id="upweather" type="button">Update the Weather</button>
            <section>
                <h2 class="title">Dennis Ritchie</h2>
                <img src="img/ritchie.jpg" alt="Dennis Ritchie">
                <p>Father of C language and Unix Operating System - </p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo harum dolorem quasi, officia earum velit libero fuga culpa quaerat sit in nam assumenda impedit tenetur sapiente suscipit architecto nostrum possimus.</p>
            </section>

            <div class="clearfix"></div>

            <section>
                <h2 class="title">Alexandro de Oliveira</h2>
                <img src="img/Alexandro%20de%20Oliveira.jpg" alt="Alexandro de Oliveira">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fugiat officia quam quis vero, ipsum reiciendis et debitis a harum. Nemo distinctio beatae quis delectus autem obcaecati vero hic dolore!</p>
            </section>
            
        </aside>
    </main>
    <div class="clearfix"></div>
    <footer id="footer">
        <div class="footer-left">
                     
               <ul class="footer-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">My statuses</a></li>
                <li><a href="allusers.html">All users</a></li>
                <li><a href="maps.html">Maps</a></li>
                <li><a href="Impossible-Octopus-Fitness/Impossible-Octopus-Fitness.html">About</a></li>
            </ul>
        </div>
        <div class="footer-center"><p>Made for a Holberton School Project, by Alexandro de Oliveira</p></div>
        <div class="footer-right">
            <a href="https://github.com/havk64"><img src="img/octopus-github.png" height="20px" alt="Github" /></a>
            <a href="https://twitter.com/havk64"><img src="img/twitter.png" height="20px" alt="Github" /></a>
            <a href="https://www.linkedin.com/in/alexandroliveira"><img src="img/linkedin.png" height="25px" alt="Github" /></a>
        </div>
    </footer> 
</div>    <!--End main container-->
<div id="bottom-right">Attention! This page is in development</div>
</body>
</html>

