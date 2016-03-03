
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
	$_SESSION['username'] = $username;
}
else $username = NULL;
if(isset($_POST['password'])) {
	$password = $_POST['password'];
	$_SESSION['password'] = $password;
}
else $password = NULL;

$query_user = "select * from kolorob.user where username='$username' and password='$password'";
$result_user = pg_query($query_user);
$num_result_user = pg_num_rows($result_user);


if($num_result_user>0) {
	echo "<script type='text/javascript'> location.href = 'home_page.php'</script>";
}

echo<<<endh

<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="./css/kolorob_logo.png" alt="Avatar" /> 
    </button>
    <div class="profile__form">
      <div class="profile__fields">
     <form  method='post' action='login_form.php'>
        <div class="field">
          <label for="username" class="label">Username</label>
          <input type="text"  name='username' id="username" class="input" />
        </div>
        <div class="field">
          <label for="password" class="label">Password</label>
          <input type="password" name='password' id="password" class="input" />
        </div>
        <div class="profile__footer">
          <button class="menubtn">Submit</button>
           </form >
        </div>
         
      </div>
     </div>
  </div>
</div>


endh;
 echo '<script src="js/index.js"></script>';
?>