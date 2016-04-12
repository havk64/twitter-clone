<?php //Array of registered users.
$users = [
    array("id" => 1, "login" => "alex", "password" => "password1", "full_name" => "Alexandro de Oliveira", "img" => "img/Alexandro de Oliveira.jpg", "bio" => "Maecenas vitae posuere diam, vitae finibus leo. Vivamus tincidunt, nunc eget pretium lobortis, elit dolor convallis lorem, sed pellentesque lorem justo sed odio. Praesent cursus, orci at tristique laoreet, leo neque facilisis nibh, id blandit risus enim id massa. Phasellus malesuada odio ac arcu sagittis faucibus. Ut nisl purus, facilisis et justo sit amet, lacinia malesuada dolor. Phasellus euismod auctor purus, ac mattis justo elementum a. Duis interdum velit quis arcu egestas efficitur."),
    array("id" => 2, "login" => "thompson", "password" => "password2", "full_name" => "Ken Thompson", "img" => "img/ken-thompson.jpg", "bio" => "Maecenas vitae posuere diam, vitae finibus leo. Vivamus tincidunt, nunc eget pretium lobortis, elit dolor convallis lorem, sed pellentesque lorem justo sed odio. Praesent cursus, orci at tristique laoreet, leo neque facilisis nibh, id blandit risus enim id massa. Phasellus malesuada odio ac arcu sagittis faucibus. Ut nisl purus, facilisis et justo sit amet, lacinia malesuada dolor. Phasellus euismod auctor purus, ac mattis justo elementum a. Duis interdum velit quis arcu egestas efficitur."),
    array("id" => 3, "login" => "ritchie", "password" => "password3", "full_name" => "Dennis Ritchie", "img" => "img/ritchie.jpg", "bio" => "Maecenas vitae posuere diam, vitae finibus leo. Vivamus tincidunt, nunc eget pretium lobortis, elit dolor convallis lorem, sed pellentesque lorem justo sed odio. Praesent cursus, orci at tristique laoreet, leo neque facilisis nibh, id blandit risus enim id massa. Phasellus malesuada odio ac arcu sagittis faucibus. Ut nisl purus, facilisis et justo sit amet, lacinia malesuada dolor. Phasellus euismod auctor purus, ac mattis justo elementum a. Duis interdum velit quis arcu egestas efficitur."),
    array("id" => 4, "login" => "resig", "password" => "password4", "full_name" => "John Resig", "img" => "img/John Resig.jpg", "bio" => "Maecenas vitae posuere diam, vitae finibus leo. Vivamus tincidunt, nunc eget pretium lobortis, elit dolor convallis lorem, sed pellentesque lorem justo sed odio. Praesent cursus, orci at tristique laoreet, leo neque facilisis nibh, id blandit risus enim id massa. Phasellus malesuada odio ac arcu sagittis faucibus. Ut nisl purus, facilisis et justo sit amet, lacinia malesuada dolor. Phasellus euismod auctor purus, ac mattis justo elementum a. Duis interdum velit quis arcu egestas efficitur."),
    array("id" => 5, "login" => "brian", "password" => "password5", "full_name" => "Brian Fox", "img" => "img/brian-fox.jpg", "bio" => "Maecenas vitae posuere diam, vitae finibus leo. Vivamus tincidunt, nunc eget pretium lobortis, elit dolor convallis lorem, sed pellentesque lorem justo sed odio. Praesent cursus, orci at tristique laoreet, leo neque facilisis nibh, id blandit risus enim id massa. Phasellus malesuada odio ac arcu sagittis faucibus. Ut nisl purus, facilisis et justo sit amet, lacinia malesuada dolor. Phasellus euismod auctor purus, ac mattis justo elementum a. Duis interdum velit quis arcu egestas efficitur."),
  ];
?>

<?php //Defining the function to check the user information.
function userExists($login, $password, $users) 
  { // Function to check if the user is in the database.
      $ret = '';
      foreach ($users as $user)  {
          if($login == $user['login'] && $password == $user['password']){ //If user login succesfull. Return it outside of the loop.
            $ret = $user; //Can't return inside of loop. Assigning to a variable to return it later.
          }
      }
        return $ret; //Returning the variable.
  } 

function hasCookie($login, $users)
{
    $ret = '';
    foreach ($users as $user) {
        if ($login == $user['login']){
            $ret = $user;
        }
    }
    return $ret;
}

function getUser($id, $users) {
    $ret = '';
    foreach($users as $user) {
        if($id == $user["id"]) {
            $ret = $user;
        }
    }
    return $ret;
}
function showHide($status){
    return (isset($status)) ? array("hide" => "inline", "mystatuses"=>"/mystatuses.php") : array("hide" => "none", "mystatuses" => "");
}
?>
