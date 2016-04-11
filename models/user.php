<?php //Array of registered users.
$users = [
    array("id" => 1, "login" => "alex", "password" => "password1", "full_name" => "Alexandro de Oliveira"),
    array("id" => 2, "login" => "thompson", "password" => "password2", "full_name" => "Ken Thompson"),
    array("id" => 3, "login" => "ritchie", "password" => "password3", "full_name" => "Dennis Ritchie"),
    array("id" => 4, "login" => "resig", "password" => "password4", "full_name" => "John Resig"),
    array("id" => 5, "login" => "brian", "password" => "password5", "full_name" => "Brian Fox"),
  ];
?> <!-- / End of Array. -->
 <!-- ============================================== -->
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
?> <!-- / End of function -->
 <!-- ============================================== -->