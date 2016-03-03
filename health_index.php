<?php
echo "<head>";


echo '<link rel="stylesheet" type="text/css"href="css/style.css">';
 echo "<link href='https://fonts.googleapis.com/css?family=Work+Sans:500,400,800' rel='stylesheet' type='text/css'>";
  echo "<title>Kolorob</title>";
echo " <h3> <img src='css/kolorob_logo_small.png' alt='kolorob logo'/> KOLOROB</h3> ";
	echo " <style type='text/css'>
		li {  
  
list-style: none;  
color:#00008B;
  
}  

table, th, td {
  background-color:  #f5f5f0;
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
	color:#000080;
    padding: 5px;
}
h2 {
    color:#069;
}
		</style> </head>";
 echo "</head>";
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['password'])){

	echo "<a href='logout.php'> <button class='btn' > Logout </button> </a>";
	echo "<a href='home_page.php'> <button class='btn' >Back</button> </a>";

	?>

	<div class="content">
		<div class="form-section">
	<?php

	echo "<h2> Check Following Health Related Informations You want to submit and click submit button: </h2>";

	echo "<table style='margin:auto;'> <form method='post' action='health_form.php'>";
	echo "<tr> <td> Outdoor Doctors? </td>";
	echo "<td> <input type='checkbox' name='outdoor_checkbox'/> </td> </tr> ";

	echo "<tr> <td> Specialists? </td>";
	echo "<td> <input type='checkbox' name='specialist_checkbox'/> </td>";

	echo "<tr> <td> Vaccines? </td>";
	echo "<td> <input type='checkbox' name='vaccine_checkbox'/> </td>";

	echo "<tr> <td> Pharmacy? </td> ";
	echo "<td> <input type='checkbox' name='pharmacy_checkbox'/> </td>";
	echo "</table>";
	echo "</div>";
	echo "<button style='float:right;' class='btn' type='submit' name='submit_button'> Submit </button>";
	echo "</form> ";

	?>
		</div>
	<?php


}

else{
	echo "<script type='text/javascript'> location.href = 'login_form.php' </script>";
}

?>



