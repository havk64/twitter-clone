<?php //Array of registered users.
$users = [
    array("id" => 1, "login" => "user1", "password" => "password1", "full_name" => "User 1"),
    array("id" => 2, "login" => "user2", "password" => "password2", "full_name" => "User 2"),
    array("id" => 3, "login" => "user3", "password" => "password3", "full_name" => "User 3"),
  ];
?> <!-- / End of Array. -->
 <!-- ============================================== -->
<?php
    function userExists($login, $password, $users) 
  { // Function to check if the user is in the database.
      $ret = '';
      foreach ($users as $user)  {
          if($login == $user['login']){ //If user is in the data base. Return it outside of the loop.
            $ret = $user; //Can't return inside of loop. Assigning to a variable to return it later.
          }
      }
        return $ret; //Returning the variable.
  }
?> <!-- / End of function -->
 <!-- ============================================== -->