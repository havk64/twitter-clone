<?php
function listUsers(){
    $contents = file_get_contents('data/users.json');
    $parsed = json_decode($contents, true);
    return $parsed;
}
$users = listUsers();

function writeUsers($users){
    $fp = fopen('./data/test.json', 'w');
    $fwrite($fp, json_decode($users));
    fclose($fp);
}

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
function logged($status){
    return (isset($status)) ? array("hide" => "inline", "mystatuses"=>"/mystatuses.php", "profile" => "/mystatuses.php") : array("hide" => "none", "mystatuses" => "", "profile" => "/login.php");
}
?>
