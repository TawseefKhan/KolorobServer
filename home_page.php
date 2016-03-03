<?php
echo "<head>";


echo '<link rel="stylesheet" type="text/css"href="css/style.css">';
 echo "<link href='https://fonts.googleapis.com/css?family=Work+Sans:500,400,800' rel='stylesheet' type='text/css'>";
 echo "<title>Kolorob</title>";
echo " <tr> <td> <h3> KOLOROB</h3> </td> </tr>";
 echo "</head>";
echo "<head> <style type='text/css'>
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

    h3 {
margin-left:900px;
font-size:4em;  
color: #002266;

text-shadow:
      3px 3px 0 #888087,
     -1px -1px 0 #888087,  
      1px -1px 0 #888087,
      -1px 1px 0 #888087,
      1px 1px 0 #888087;


}
		</style> </head>";

session_start();

if((isset($_SESSION['username']) && isset($_SESSION['password']))){
		
		echo '<div class="container">';
			echo ' <div class="profile">';
		
				echo '<div class="menu_form">';
					echo "<a href='education.php'> <button class='menubtn'>EDUCATION </button> </a><br/>";
					echo "<a href='health_index.php'> <button class='menubtn'>  HEALTH </button> </a><br/>";
					echo "<a href='legal_aid.php'> <button class='menubtn'> LEGAL AID </button> </a><br/>";
					echo "<a href='job.php'> <button class='menubtn'> JOB EMPLOYMENT </button> </a><br/>";
					echo "<a href='financial_services_index.php'> <button class='menubtn'> FINANCIAL SERVICES </button> </a><br/>";
					echo "<a href='Entertainment_index.php'> <button class='menubtn'> ENTERTAINMENT </button> </a><br/><br/><br/>";
					echo "<a href='login_form.php'> <button class='menubtn'> BACK </button> </a><br/>";
					echo "<a href='add_user.php'> <button class='menubtn'> ADD USER </button> </a>";
				echo '</div>';

			echo '</div>';	
		echo "</div>";
		

}
else{
	
		echo "<script type='text/javascript'> location.href = 'login_form.php' </script>";
    
	}


?>
