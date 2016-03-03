<?php
echo "<head>";


echo '<link rel="stylesheet" type="text/css"href="css/style.css">';
 echo "<link href='https://fonts.googleapis.com/css?family=Work+Sans:500,400,800' rel='stylesheet' type='text/css'>";

 echo "</head>";
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
	session_destroy();
	echo "<script type='text/javascript'> location.href = 'login_form.php'</script>";
}
?>