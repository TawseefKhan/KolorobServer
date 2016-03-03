<?php

echo "<head>";


echo '<link rel="stylesheet" type="text/css"href="css/style.css">';
 echo "<link href='https://fonts.googleapis.com/css?family=Work+Sans:500,400,800' rel='stylesheet' type='text/css'>";
 echo "<title>Kolorob</title>";
 echo "</head>";
session_start();
require_once('connect.php');

if(isset($_POST['username'])) {
	$username = $_POST['username'];
}
else $username = NULL;

if(isset($_POST['password'])) {
	$password = $_POST['password'];
}
else $password = NULL;

$query_user = "insert into kolorob.user values('$username','$password');";
if($username!=NULL && $password!=NULL) $result_user = pg_query($query_user);
else $result_user = NULL;

if($result_user!=NULL && $username!=NULL && $password!=NULL) {
	echo "<script type='text/javascript'> alert('Successfully Added!!') </script>";
}

echo<<<endh

<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="./css/kolorob_logo.png" alt="Avatar" /> 
    </button>
    <div class="profile__form">
      <div class="profile__fields">
     <form  method='post' action='add_user.php'>
        <div class="field">
          <label for="username" class="label">Username</label>
          <input type="text"  name='username' id="username" class="input" />
        </div>
        <div class="field">
          <label for="password" class="label">Password</label>
          <input type="password" name='password' id="password" class="input"  />
        </div>
        <div class="profile__footer">
          <button class="menubtn">Add User</button>
           </form >
        </div>
         
      </div>
     </div>
  </div>
</div>


endh;


echo '<script src="js/index.js"></script>';
?>