    <!--Begin header container-->
    <header id="header">
        <div class="logo">
            <img src="img/logo.png" alt="Logo"/>
            <p>Likable Stats</p>
        </div>

        <ul class="top-menu">
           <li><a href="/login.php">Login</a></li>
            <li><a href="<?php echo($logged['profile']);?>">Edit my profile</a></li>
            <li><a href="/logout.php">Logout</a></li>
        </ul>

       <!-- <div class="clearfix"></div> replacing for use flexbox -->

        <div class="outer-menu-container">
            <ul class="main-menu">
                <li><a href="<?php echo($home);?>">Home</a></li>
                <li style="display:<?php echo($logged['hide']);?>"><a href="<?php echo($logged['mystatuses']);?>">My statuses</a></li>
                <li><a href="<?php echo ($allusers)?>">All users</a></li>
                <li><a href="<?php echo($maps)?>">Maps</a></li>
                <li><a href="<?php echo($about)?>">About</a></li>
            </ul>
        </div>
        <button id="all-images" type="submit" value="Send">All images on this pages</button>
        
        

    </header>   <!--End header container-->