<?php

echo "<head>";


echo '<link rel="stylesheet" type="text/css"href="css/style.css">';
 echo "<link href='https://fonts.googleapis.com/css?family=Work+Sans:500,400,800' rel='stylesheet' type='text/css'>";
  echo "<title>Kolorob</title>";
 echo " <h3> <img src='css/kolorob_logo_small.png' alt='kolorob logo'/> KOLOROB</h3> ";


	echo "<head> <style type='text/css'>
		li {  
  
list-style: none;  
color:#00008B;
  
}  

table, th, td {
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
session_start();

if((isset($_SESSION['username']) && isset($_SESSION['password']))){

	echo "<a href='logout.php'> <button class='btn'> Logout </button> </a>";
	echo "<a href='home_page.php'> <button class='btn'>Back</button> </a>";

?>
<div class="content">
<form method='post' action='Entertainment_forms.php'>

	<div class="form-section">
		<h2> Check Following Entertainment Related Informations You want to submit </h2>
		<table>
		   <form method="post" action="Entertainment_forms.php"></form>
		   <tbody>
		      <tr>
		         <td> <input name="field_checkbox" type="checkbox"> </td>
		         <td> Field </td>
		      </tr>
		      <tr>
		         <td> <input name="shishupark_checkbox" type="checkbox"> </td>
		         <td> Shishu Park </td>
		      </tr>
		      <tr>
		         <td> <input name="park_checkbox" type="checkbox"> </td>
		         <td> Park </td>
		      </tr>
		      <tr>
		         <td> <input name="theatre_checkbox" type="checkbox"> </td>
		         <td> Theatre group </td>
		      </tr>
		      <tr>
		         <td> <input name="music_checkbox" type="checkbox"> </td>
		         <td> Musical band </td>
		      </tr>
		      <tr>
		         <td> <input name="ngo_checkbox" type="checkbox"> </td>
		         <td> NGO </td>
		      </tr>
		      <tr>
		         <td> <input name="fitnessbeauty_checkbox" type="checkbox"> </td>
		         <td> Beauty parlor or Gym </td>
		      </tr>
		      <tr>
		         <td> <input name="centre_checkbox" type="checkbox"> </td>
		         <td> Shops and training centres </td>
		      </tr>
		      <tr>
		         <td> <input name="bookshop_checkbox" type="checkbox"> </td>
		         <td> Book shop </td>
		      </tr>
		   </tbody>
		</table>
	</div>
	<button style="float:right;" class='btn' type='submit' name='submit_button'> Submit </button>
</form>
</div>

<?php



}

else{
	echo "<script type='text/javascript'> location.href = 'login_form.php' </script>";
}

?>



