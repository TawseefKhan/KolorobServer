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

th, td {
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
		</style>
</head>";
session_start();

if((isset($_SESSION['username']) && isset($_SESSION['password']))){


	echo "<a href='logout.php'> <button  class='btn'> Logout </button> </a>";
	echo "<a href='home_page.php'> <button  class='btn'>Back</button> </a></br>";




	?>

<div class="content">
<form method='post' action='financial_services_forms.php'>
	<div class="form-section money-transaction">
		<h2>Check Following Financial Services Related Informations You want to submit: </h2>

		<div class="item">
			<h4><input type='checkbox' name='transaction_checkbox'/> Money Transaction?</h4>
			<div class="options"> 
				<span><input type='checkbox' name='bkash_checkbox'/> Bkash</span>
				<span><input type='checkbox' name='dbbl_checkbox'/> DBBL Mobile Banking</span>
				<span><input type='checkbox' name='surecash_checkbox'/> Sure Cash</span>
				<span><input type='checkbox' name='mobicash_checkbox'/> Mobi Cash</span>
				<span><input type='checkbox' name='hundi_checkbox'/> Hundi</span>
				<span><input type='checkbox' name='ucash_checkbox'/> Ucash</span>
				<span><input type='checkbox' name='mycash_checkbox'/> My Cash</span>
			</div>
		</div>

		<div class="item">
			<h4><input type='checkbox' name='loan_checkbox'/> Loans?</h4>
		</div>

		<div class="item">
			<h4><input type='checkbox' name='payment_checkbox'/> Payment Documents?</h4>
		</div>

		<div class="item">
			<h4><input type='checkbox' name='tax_checkbox'/> Tax?</h4>
		</div>

		<div class="item">
			<h4><input type='checkbox' name='bill_checkbox'/> Bills?</h4>
		</div>

		<div class="item">
			<h4><input type='checkbox' name='tution_checkbox'/> Tution and Other Fees?</h4>
		</div>

		<div class="item">
			<h4><input type='checkbox' name='social_checkbox'/> Social Benefits?</h4>
		</div>

		<div class="item">
			<h4><input type='checkbox' name='insurance_checkbox'/> Insurance?</h4>
		</div>
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
