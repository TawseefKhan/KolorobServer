<?php

echo "<head>";

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> '; 
echo '<link rel="stylesheet" type="text/css"href="css/style.css">';
 echo "<link href='https://fonts.googleapis.com/css?family=Work+Sans:500,400,800' rel='stylesheet' type='text/css'>";
  echo "<title>Kolorob</title>";
echo " <h3> <img src='css/kolorob_logo_small.png' alt='kolorob logo'/> KOLOROB</h3> ";
 echo "</head>";
session_start();

if((isset($_SESSION['username']) && isset($_SESSION['password']))){

?>

<!-- java scripting started -->


<SCRIPT language="javascript">

function addRowReference(tableID) { 

        var temp=tableID;
		var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var cell1 = row.insertCell(0);
        var element1 = document.createElement("input");
        element1.type = "checkbox";
        element1.name="chkbox[]";
        cell1.appendChild(element1);

        var cell2 = row.insertCell(1);
        cell2.innerHTML = "<input type='number' name='reference_number[]'>";
		
        }


function deleteRow(tableID) {
        try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        for(var i=0; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if(chkbox != '' && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
            }
        }
        }catch(e) {
            alert(e);
        }
		
    }
</SCRIPT>

<!-- java scripting finished -->

<?php 

	echo "<a href='logout.php'> <button class='btn'> Logout </button> </a>";
	echo "<a href='financial_services_index.php'> <button class='btn'>Back</button> </a> <br/> <br/> <br/>";

	require_once('connect.php');

	$username=$_SESSION['username'];



	//..................DATA COLLECTION....................//

	//..................variables

	//basic arrays
	$reference_number = array();

	//..................values came from financial service index

	if(isset($_POST['transaction_checkbox'])) {
		
		$transaction_checkbox = 1;

		if(isset($_POST['bkash_checkbox'])) {
		$bkash_checkbox = 1;
		}
		else {
			$bkash_checkbox = NULL;
		}

		if(isset($_POST['dbbl_checkbox'])) {
		$dbbl_checkbox = 1;
		}
		else {
			$dbbl_checkbox = NULL;
		}

		if(isset($_POST['surecash_checkbox'])) {
		$surecash_checkbox = 1;
		}
		else {
			$surecash_checkbox = NULL;
		}

		if(isset($_POST['mobicash_checkbox'])) {
		$mobicash_checkbox = 1;
		}
		else {
			$mobicash_checkbox = NULL;
		}

		if(isset($_POST['hundi_checkbox'])) {
		$hundi_checkbox = 1;
		}
		else {
			$hundi_checkbox = NULL;
		}

		if(isset($_POST['ucash_checkbox'])) {
		$ucash_checkbox = 1;
		}
		else {
			$ucash_checkbox = NULL;
		}

		if(isset($_POST['mycash_checkbox'])) {
		$mycash_checkbox = 1;
		}
		else {
			$mycash_checkbox = NULL;
		}

	}
	else $transaction_checkbox = NULL;

	if(isset($_POST['loan_checkbox'])) {
		$loan_checkbox = 1;
	}
	else {
		$loan_checkbox = NULL;
	}

	if(isset($_POST['payment_checkbox'])) {
		$payment_checkbox= 1;
	}
	else {
		$payment_checkbox = NULL;
	}

	if(isset($_POST['tax_checkbox'])) {
		$tax_checkbox = 1;
	}
	else {
		$tax_checkbox = NULL;
	}

	if(isset($_POST['bill_checkbox'])) {
		$bill_checkbox = 1;
	}
	else $bill_checkbox = NULL;

	if(isset($_POST['tution_checkbox'])) {
		$tution_checkbox = 1;
	}
	else {
		$tution_checkbox = NULL;
	}

	if(isset($_POST['social_checkbox'])) {
		$social_checkbox= 1;
	}
	else {
		$social_checkbox = NULL;
	}

	if(isset($_POST['insurance_checkbox'])) {
		$insurance_checkbox = 1;
	}
	else {
		$insurance_checkbox = NULL;
	}





	//...................values came from financial services forms

	//node info
	if(isset($_POST['node_id'])) $node_id = $_POST['node_id'];
	else $node_id = NULL;
	if(isset($_POST['node_type'])) $node_type = $_POST['node_type'];
	else $node_type = NULL;
	

	//reference number array
	if(isset($_POST['reference_number'])){
		foreach ($_POST['reference_number'] as $key => $value) {
			array_push($reference_number, $value);
		}
	}

	//basic info
	if(isset($_POST['name'])) $name = $_POST['name'];
	else $name = NULL;
	if(isset($_POST['name_bn'])) $name_bn = $_POST['name_bn'];
	else $name_bn = NULL;
	if(isset($_POST['designation'])) $designation = $_POST['designation'];
	else $designation = NULL;
	if(isset($_POST['contact'])) $contact = $_POST['contact'];
	else $contact = NULL;
	if(isset($_POST['email'])) $email = $_POST['email'];
	else $email = NULL;
	if(isset($_POST['additional'])) $additional = $_POST['additional'];
	else $additional = NULL;
	if(isset($_POST['website'])) $website = $_POST['website'];
	else $website = NULL;
	if(isset($_POST['facebook'])) $facebook = $_POST['facebook'];
	else $facebook = NULL;
	if(isset($_POST['regis_with'])) $regis_with = $_POST['regis_with'];
	else $regis_with = NULL;
	if(isset($_POST['regis_number'])) $regis_number = $_POST['regis_number'];
	else $regis_number = NULL;

	if(isset($_POST['area'])) $area = $_POST['area'];
	else $area = NULL;
	if(isset($_POST['address'])) $address = $_POST['address'];
	else $address = NULL;
	if(isset($_POST['road'])) $road= $_POST['road'];
	else $road = NULL;
if(isset($_POST['block'])) $block = $_POST['block'];
	else $block = NULL;
	if(isset($_POST['lat'])) $lat = $_POST['lat'];
	else $lat = NULL;
	if(isset($_POST['long'])) $long = $_POST['long'];
	else $long = NULL;
	if(isset($_POST['otime'])) $otime = $_POST['otime'];
	else $otime = NULL;
	if(isset($_POST['btime1'])) $btime1 = $_POST['btime1'];
	else $btime1 = NULL;
if(isset($_POST['btime2'])) $btime2 = $_POST['btime2'];
	else $btime2 = NULL;
	if(isset($_POST['ctime'])) $ctime = $_POST['ctime'];
	else $ctime = NULL;
if(isset($_POST['adtime'])) $adtime = $_POST['adtime'];
	else $adtime = NULL;
if(isset($_POST['landmark'])) $landmark = $_POST['landmark'];
	else $landmark = NULL;



	//data collector info
	if(isset($_POST['data_name'])) $data_name = $_POST['data_name'];
	else $data_name = NULL;
	if(isset($_POST['data_date'])) $data_date = $_POST['data_date'];
	else $data_date = NULL;




	//transaction info
	if(isset($_POST['service_name_transaction'])) $service_name_transaction = $_POST['service_name_transaction'];
	else $service_name_transaction = NULL;
	if(isset($_POST['service_name_transaction_yn'])) $service_name_transaction_yn = $_POST['service_name_transaction_yn'];
	else $service_name_transaction_yn = NULL;
	if(isset($_POST['costs_transaction'])) $costs_transaction = $_POST['costs_transaction'];
	else $costs_transaction = NULL;
	if(isset($_POST['remarks_transaction'])) $remarks_transaction = $_POST['remarks_transaction'];
	else $remarks_transaction = NULL;
	if(isset($_POST['service_name_provider'])) $service_name_provider = $_POST['service_name_provider'];
	else $service_name_provider = NULL;




	//loan info
	if(isset($_POST['service_name_loan'])) $service_name_loan = $_POST['service_name_loan'];
	else $service_name_loan = NULL;
	if(isset($_POST['service_name_loan_yn'])) $service_name_loan_yn = $_POST['service_name_loan_yn'];
	else $service_name_loan_yn = NULL;
	if(isset($_POST['costs_loan'])) $costs_loan = $_POST['costs_loan'];
	else $costs_loan = NULL;
	if(isset($_POST['remarks_loan'])) $remarks_loan = $_POST['remarks_loan'];
	else $remarks_loan = NULL;





	//payment info
	if(isset($_POST['service_name_payment'])) $service_name_payment = $_POST['service_name_payment'];
	else $service_name_payment = NULL;
	if(isset($_POST['service_name_payment_yn'])) $service_name_payment_yn = $_POST['service_name_payment_yn'];
	else $service_name_payment_yn = NULL;
	if(isset($_POST['costs_payment'])) $costs_payment = $_POST['costs_payment'];
	else $costs_payment = NULL;
	if(isset($_POST['remarks_payment'])) $remarks_payment = $_POST['remarks_payment'];
	else $remarks_payment = NULL;





	//tax info
	if(isset($_POST['service_name_tax'])) $service_name_tax = $_POST['service_name_tax'];
	else $service_name_tax = NULL;
	if(isset($_POST['service_name_tax_yn'])) $service_name_tax_yn = $_POST['service_name_tax_yn'];
	else $service_name_tax_yn = NULL;
	if(isset($_POST['costs_tax'])) $costs_tax = $_POST['costs_tax'];
	else $costs_tax = NULL;
	if(isset($_POST['remarks_tax'])) $remarks_tax = $_POST['remarks_tax'];
	else $remarks_tax = NULL;




	//bill info
	if(isset($_POST['service_name_bill'])) $service_name_bill = $_POST['service_name_bill'];
	else $service_name_bill = NULL;
	if(isset($_POST['service_name_bill_yn'])) $service_name_bill_yn = $_POST['service_name_bill_yn'];
	else $service_name_bill_yn = NULL;
	if(isset($_POST['costs_bill'])) $costs_bill = $_POST['costs_bill'];
	else $costs_bill = NULL;
	if(isset($_POST['remarks_bill'])) $remarks_bill = $_POST['remarks_bill'];
	else $remarks_bill = NULL;




	//tution info
	if(isset($_POST['service_name_tution'])) $service_name_tution = $_POST['service_name_tution'];
	else $service_name_tution = NULL;
	if(isset($_POST['service_name_tution_yn'])) $service_name_tution_yn = $_POST['service_name_tution_yn'];
	else $service_name_tution_yn = NULL;
	if(isset($_POST['costs_tution'])) $costs_tution = $_POST['costs_tution'];
	else $costs_tution = NULL;
	if(isset($_POST['remarks_tution'])) $remarks_tution = $_POST['remarks_tution'];
	else $remarks_tution = NULL;




	//social info
	if(isset($_POST['service_name_social'])) $service_name_social = $_POST['service_name_social'];
	else $service_name_social = NULL;
	if(isset($_POST['service_name_social_yn'])) $service_name_social_yn = $_POST['service_name_social_yn'];
	else $service_name_social_yn = NULL;
	if(isset($_POST['costs_social'])) $costs_social = $_POST['costs_social'];
	else $costs_social = NULL;
	if(isset($_POST['remarks_social'])) $remarks_social = $_POST['remarks_social'];
	else $remarks_social = NULL;




	//insurance info
	if(isset($_POST['service_name_insurance'])) $service_name_insurance = $_POST['service_name_insurance'];
	else $service_name_insurance = NULL;
	if(isset($_POST['service_name_insurance_yn'])) $service_name_insurance_yn = $_POST['service_name_insurance_yn'];
	else $service_name_insurance_yn = NULL;
	if(isset($_POST['costs_insurance'])) $costs_insurance = $_POST['costs_insurance'];
	else $costs_insurance = NULL;
	if(isset($_POST['remarks_insurance'])) $remarks_insurance = $_POST['remarks_insurance'];
	else $remarks_insurance = NULL;





//............................DATA INSERTION.................................//

	//node table
	for($i=0; $i<sizeof($reference_number); $i++){
		$query_insert_f_node_table = "insert into kolorob.f_node values('$node_id', '$name', '$data_name', '$data_date', '$designation',
		 '$contact', '$email', '$additional','$website', '$facebook', '$regis_with', '$regis_number','$username',
		 '$reference_number[$i]','$name_bn', now(), '$node_type','$area','$address','$lat','$long',6,'$otime','$btime1','$ctime','$road','$block','$landmark','$btime2','$adtime');";
		if($node_id!=NULL) $result_insert_f_node_table = pg_query($query_insert_f_node_table);
	}
	if($node_id!=NULL && $result_insert_f_node_table!=NULL) echo "<script type='text/javascript'> alert('Successfully Added!') </script>";
	else if($node_id!=NULL && $result_insert_f_node_table==NULL) echo "<script type='text/javascript'> alert('Wrong Input!') </script>";




	//transaction table
	for($j=0; $j<sizeof($reference_number); $j++) {
		if (isset($_POST['node_id']) && isset($_POST['service_name_transaction'])) {
			for ($i = 0; $i < sizeof($_POST['service_name_transaction']); $i++) {
				$query_service = "insert into kolorob.f_money_transaction values('$node_id', '$service_name_transaction[$i]', '$service_name_transaction_yn[$i]', '$costs_transaction[$i]', '$remarks_transaction[$i]','$service_name_provider[$i]','$reference_number[$j]');";
				$result_service = pg_query($query_service);
			}
		}
	}

	
	// loan table
	for($j=0; $j<sizeof($reference_number); $j++) {
		if (isset($_POST['node_id']) && isset($_POST['service_name_loan'])) {
			for ($i = 0; $i < sizeof($_POST['service_name_loan']); $i++) {
				$query_service = "insert into kolorob.f_loan values('$node_id', '$service_name_loan[$i]', '$service_name_loan_yn[$i]', '$costs_loan[$i]', '$remarks_loan[$i]','$reference_number[$j]');";
				$result_service = pg_query($query_service);
			}
		}
	}


	// payment table
	for($j=0; $j<sizeof($reference_number); $j++) {
		if (isset($_POST['node_id']) && isset($_POST['service_name_payment'])) {
			for ($i = 0; $i < sizeof($_POST['service_name_payment']); $i++) {
				$query_service = "insert into kolorob.f_payment_documents values('$node_id', '$service_name_payment[$i]', '$service_name_payment_yn[$i]', '$costs_payment[$i]', '$remarks_payment[$i]','$reference_number[$j]');";
				$result_service = pg_query($query_service);
			}
		}
	}


	// tax table
	for($j=0; $j<sizeof($reference_number); $j++) {
		if (isset($_POST['node_id']) && isset($_POST['service_name_tax'])) {
			for ($i = 0; $i < sizeof($_POST['service_name_tax']); $i++) {
				$query_service = "insert into kolorob.f_tax values('$node_id', '$service_name_tax[$i]', '$service_name_tax_yn[$i]', '$costs_tax[$i]', '$remarks_tax[$i]','$reference_number[$j]');";
				$result_service = pg_query($query_service);
			}
		}
	}


	// bill table
	for($j=0; $j<sizeof($reference_number); $j++) {
		if (isset($_POST['node_id']) && isset($_POST['service_name_bill'])) {
			for ($i = 0; $i < sizeof($_POST['service_name_bill']); $i++) {
				$query_service = "insert into kolorob.f_bills values('$node_id', '$service_name_bill[$i]', '$service_name_bill_yn[$i]', '$costs_bill[$i]', '$remarks_bill[$i]','$reference_number[$j]');";
				$result_service = pg_query($query_service);
			}
		}
	}


	// tution table
	for($j=0; $j<sizeof($reference_number); $j++) {
		if (isset($_POST['node_id']) && isset($_POST['service_name_tution'])) {
			for ($i = 0; $i < sizeof($_POST['service_name_tution']); $i++) {
				$query_service = "insert into kolorob.f_tution values('$node_id', '$service_name_tution[$i]', '$service_name_tution_yn[$i]', '$costs_tution[$i]', '$remarks_tution[$i]','$reference_number[$j]');";
				$result_service = pg_query($query_service);
			}
		}
	}


	// social table
	for($j=0; $j<sizeof($reference_number); $j++) {
		if (isset($_POST['node_id']) && isset($_POST['service_name_social'])) {
			for ($i = 0; $i < sizeof($_POST['service_name_social']); $i++) {
				$query_service = "insert into kolorob.f_social values('$node_id', '$service_name_social[$i]', '$service_name_social_yn[$i]', '$costs_social[$i]', '$remarks_social[$i]','$reference_number[$j]');";
				$result_service = pg_query($query_service);
			}
		}
	}


	// social table
	for($j=0; $j<sizeof($reference_number); $j++) {
		if (isset($_POST['node_id']) && isset($_POST['service_name_insurance'])) {
			for ($i = 0; $i < sizeof($_POST['service_name_insurance']); $i++) {
				$query_service = "insert into kolorob.f_insurance values('$node_id', '$service_name_insurance[$i]', '$service_name_insurance_yn[$i]', '$costs_insurance[$i]', '$remarks_insurance[$i]','$reference_number[$j]');";
				$result_service = pg_query($query_service);
			}
		}
	}


	//.................................HTML FORM....................................//
	
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
		</style>  </head>";



	
?>
<div class="content">
<form method='post' action='financial_services_forms.php'>
	<div class="form-section">
		<h2> Node Info </h2>
		<table class="form-table">
		   <tr>
		      <td  width="30%"> Node ID: </td>
		      <td  width="70%"> <input type='text' name='node_id'/> </td>
		   </tr>
		   <tr>
		      <td> Node Type: </td>
		      <td>
		         <select name='node_type'>
		            <option value='node'> Node </option>
		            <option value='way'> Way </option>
		         </select>
		      </td>
		   </tr>
		</table>
	</div>

	<div class="form-section">
		<h2> Reference Number for Financial Services </h2>
		<INPUT type="button" value="Add Row" onClick="addRowReference('reference')" />
    	<INPUT type="button" value="Delete Row" onClick="deleteRow('reference')" />
        
        <TABLE class="pushed-table" border="1" >
            <thead>
                <tr>
                	<th>Checkbox</th>
                    <th>Reference Number</th>
                </tr>
            </thead>
            <tbody id="reference" required> </tbody>
        </TABLE>
	</div>


	<div class="form-section">
		<h2> Basic Information </h2>
		<table class="form-table">
		   <tr>
		      <td width="30%"> Name: </td>
		      <td width="70%"> <input type='text' name='name'/> </td>
		   </tr>
		   <tr>
		      <td> Name Bangla: </td>
		      <td> <input type='text' name='name_bn'/> </td>
		   </tr>
		   <tr>
		      <td> Contact Person's Designation: </td>
		      <td> <input type='text' name='designation'/> </td>
		   </tr>
		   <tr>
		      <td> Contact No (official): </td>
		      <td> <input type='tel' name='contact'/> </td>
		   </tr>
		   <tr>
		      <td> Email (official): </td>
		      <td> <input type='email' name='email'/> </td>
		   </tr>
		   <tr>
		      <td> Additional Info: </td>
		      <td> <input type='text' name='additional'/> </td>
		   </tr>
<tr> <td> LandMark:(বাংলা) </td> <td> <input type='text' name='landmark'/> </td> </tr>
		   <tr>
		      <td> Website Link: </td>
		      <td> <input type='url' name='website'/> </td>
		   </tr>
		   <tr>
		      <td> Facebook Link: </td>
		      <td> <input type='url' name='facebook'/> </td>
		   </tr>
		   <tr>
		      <td> Registered With: </td>
		      <td> <input type='text' name='regis_with'/> </td>
		   </tr>
		   <tr>
		      <td> Registration Number: </td>
		      <td> <input type='text' name='regis_number'/> </td>
		   </tr>
		   <tr>
		      <td> Area: </td>
		      <td>
		         <select name='area'>
		            <option value='Paris Road'> Paris Road </option>
		            <option value='Baunia Badh'> Baunia Badh </option>
		         </select>
		      </td>
		   </tr>
		  <tr> <td> Address:(বাংলা) </td> <td> <input type='text' name='address'/> </td> </tr>
<tr> <td> Road/Line:(বাংলা) </td> <td> <input type='text' name='road'/> </td> </tr>
<tr> <td> Block: </td> <td> <input type='text' name='block'/> </td> </tr>
		   <tr>
		      <td> Latitude: </td>
		      <td> <input type='text' name='lat'/> </td>
		   </tr>
		   <tr>
		      <td> Longitude: </td>
		      <td> <input type='text' name='long'/> </td>
		   </tr>
<tr> <td> Opening Time: </td> <td> <input type='time' name='otime'/> </td> </tr>
<tr> <td> Break Time (from): </td> <td> <input type='time' name='btime1'/> </td> </tr>
<tr> <td> Break Time (to): </td> <td> <input type='time' name='btime2'/> </td> </tr>
<tr> <td> Closting Time: </td> <td> <input type='time' name='ctime'/> </td> </tr>
<tr> <td> Additional Time info:(বাংলা) </td> <td> <input type='text' name='adtime'/> </td> </tr>
		</table>
	</div>


	<div class="form-section">
		<h2> Data Collector's Part </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <td  width="30%"> Data Collector's Name: </td>
		         <td> <input name="data_name" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Date: </td>
		         <td> <input name="data_date" type="date"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php
		if($transaction_checkbox==1 && $bkash_checkbox==1){
	?>

	<div class="form-section">
		<h2> Money Transaction (Bkash) </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs(বাংলা) </th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> Money Send: </td>
		         <td> <input name="service_name_transaction[]" value="Money Send" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Bkash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Money Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Money receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Bkash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Remittance Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Remittance Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Bkash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> DPS/Savings: </td>
		         <td> <input name="service_name_transaction[]" value="DPS/Savings" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Bkash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Salary Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Salary Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Bkash" type="hidden"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php 
		}

		if($transaction_checkbox==1 && $dbbl_checkbox==1){

	?>

	<div class="form-section">
		<h2> Money Transaction (DBBL) </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs (বাংলা)</th>
		         <th> Remarks (বাংলা)</th>
		      </tr>
		      <tr>
		         <td> Money Send: </td>
		         <td> <input name="service_name_transaction[]" value="Money Send" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="DBBL" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Money Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Money receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="DBBL" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Remittance Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Remittance Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="DBBL" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> DPS/Savings: </td>
		         <td> <input name="service_name_transaction[]" value="DPS/Savings" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="DBBL" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Salary Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Salary Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="DBBL" type="hidden"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php
		}
		if($transaction_checkbox==1 && $surecash_checkbox==1){
	?>

	<div class="form-section">
		<h2> Money Transaction (Sure Cash) </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs(বাংলা) </th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> Money Send: </td>
		         <td> <input name="service_name_transaction[]" value="Money Send" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Sure Cash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Money Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Money receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Sure Cash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Remittance Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Remittance Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Sure Cash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> DPS/Savings: </td>
		         <td> <input name="service_name_transaction[]" value="DPS/Savings" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Sure Cash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Salary Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Salary Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Sure Cash" type="hidden"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php 
		}
		if($transaction_checkbox==1 && $surecash_checkbox==1){
	?>

	<div class="form-section">
		<h2> Money Transaction (Mobi Cash) </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs(বাংলা) </th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> Money Send: </td>
		         <td> <input name="service_name_transaction[]" value="Money Send" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Mobi Cash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Money Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Money receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Mobi Cash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Remittance Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Remittance Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Mobi Cash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> DPS/Savings: </td>
		         <td> <input name="service_name_transaction[]" value="DPS/Savings" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Mobi Cash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Salary Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Salary Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Mobi Cash" type="hidden"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php 
		}
		if($transaction_checkbox==1 && $hundi_checkbox==1){
	?>

	<div class="form-section">
		<h2> Money Transaction (Hundi) </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs (বাংলা)</th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> Money Send: </td>
		         <td> <input name="service_name_transaction[]" value="Money Send" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Hundi" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Money Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Money receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Hundi" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Remittance Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Remittance Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Hundi" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> DPS/Savings: </td>
		         <td> <input name="service_name_transaction[]" value="DPS/Savings" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Hundi" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Salary Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Salary Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Hundi" type="hidden"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php 
		}	
		if($transaction_checkbox==1 && $ucash_checkbox==1){
	?>

	<div class="form-section">
		<h2> Money Transaction (Ucash) </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs(বাংলা) </th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> Money Send: </td>
		         <td> <input name="service_name_transaction[]" value="Money Send" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Ucash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Money Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Money receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Ucash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Remittance Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Remittance Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Ucash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> DPS/Savings: </td>
		         <td> <input name="service_name_transaction[]" value="DPS/Savings" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Ucash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Salary Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Salary Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="Ucash" type="hidden"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php 
		}
		if($transaction_checkbox==1 && $mycash_checkbox==1){
	?>

	<div class="form-section">
		<h2> Money Transaction (MyCash) </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs(বাংলা) </th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> Money Send: </td>
		         <td> <input name="service_name_transaction[]" value="Money Send" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="MyCash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Money Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Money receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="MyCash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Remittance Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Remittance Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="MyCash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> DPS/Savings: </td>
		         <td> <input name="service_name_transaction[]" value="DPS/Savings" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="MyCash" type="hidden"> </td>
		      </tr>
		      <tr>
		         <td> Salary Receive: </td>
		         <td> <input name="service_name_transaction[]" value="Salary Receive" type="hidden"> </td>
		         <td>
		            <select name="service_name_transaction_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_transaction[]" type="text"> </td>
		         <td> <input name="remarks_transaction[]" type="text"> </td>
		         <td> <input name="service_name_provider[]" value="MyCash" type="hidden"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php
		}
		if($loan_checkbox==1){
	?>

	<div class="form-section">
		<h2> Loan </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs(বাংলা) </th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> Microcredit: </td>
		         <td> <input name="service_name_loan[]" value="Microcredit" type="hidden"> </td>
		         <td>
		            <select name="service_name_loan_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_loan[]" type="text"> </td>
		         <td> <input name="remarks_loan[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Big Loan: </td>
		         <td> <input name="service_name_loan[]" value="Big Loan" type="hidden"> </td>
		         <td>
		            <select name="service_name_loan_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_loan[]" type="text"> </td>
		         <td> <input name="remarks_loan[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Personal Loan: </td>
		         <td> <input name="service_name_loan[]" value="Personal Loan" type="hidden"> </td>
		         <td>
		            <select name="service_name_loan_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_loan[]" type="text"> </td>
		         <td> <input name="remarks_loan[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Business Loan: </td>
		         <td> <input name="service_name_loan[]" value="Business Loan" type="hidden"> </td>
		         <td>
		            <select name="service_name_loan_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_loan[]" type="text"> </td>
		         <td> <input name="remarks_loan[]" type="text"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php
		}
		if($payment_checkbox==1){
	?>

	<div class="form-section">
		<h2> Payment Documents </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs(বাংলা) </th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> TT/DD: </td>
		         <td> <input name="service_name_payment[]" value="TT/DD" type="hidden"> </td>
		         <td>
		            <select name="service_name_payment_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_payment[]" type="text"> </td>
		         <td> <input name="remarks_payment[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Pay Order: </td>
		         <td> <input name="service_name_payment[]" value="Pay Order" type="hidden"> </td>
		         <td>
		            <select name="service_name_payment_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_payment[]" type="text"> </td>
		         <td> <input name="remarks_payment[]" type="text"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php
		}
		if($tax_checkbox==1){
	?>

	<div class="form-section">
		<h2> Tax </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs(বাংলা) </th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> Income Tax: </td>
		         <td> <input name="service_name_tax[]" value="Income Tax" type="hidden"> </td>
		         <td>
		            <select name="service_name_tax_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_tax[]" type="text"> </td>
		         <td> <input name="remarks_tax[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Land Tax: </td>
		         <td> <input name="service_name_tax[]" value="Land Tax" type="hidden"> </td>
		         <td>
		            <select name="service_name_tax_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_tax[]" type="text"> </td>
		         <td> <input name="remarks_tax[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Business Tax: </td>
		         <td> <input name="service_name_tax[]" value="Business Tax" type="hidden"> </td>
		         <td>
		            <select name="service_name_tax_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_tax[]" type="text"> </td>
		         <td> <input name="remarks_tax[]" type="text"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php
		}
		if($bill_checkbox==1){
	?>

	<div class="form-section">
		<h2> Bills </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs(বাংলা) </th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> WASA: </td>
		         <td> <input name="service_name_bill[]" value="WASA" type="hidden"> </td>
		         <td>
		            <select name="service_name_bill_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_bill[]" type="text"> </td>
		         <td> <input name="remarks_bill[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> DESCO: </td>
		         <td> <input name="service_name_bill[]" value="DESCO" type="hidden"> </td>
		         <td>
		            <select name="service_name_bill_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_bill[]" type="text"> </td>
		         <td> <input name="remarks_bill[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> GAS: </td>
		         <td> <input name="service_name_bill[]" value="GAS" type="hidden"> </td>
		         <td>
		            <select name="service_name_bill_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_bill[]" type="text"> </td>
		         <td> <input name="remarks_bill[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Telephone/Mobile: </td>
		         <td> <input name="service_name_bill[]" value="Telephone/Mobile" type="hidden"> </td>
		         <td>
		            <select name="service_name_bill_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_bill[]" type="text"> </td>
		         <td> <input name="remarks_bill[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Internet: </td>
		         <td> <input name="service_name_bill[]" value="Internet" type="hidden"> </td>
		         <td>
		            <select name="service_name_bill_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_bill[]" type="text"> </td>
		         <td> <input name="remarks_bill[]" type="text"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php
		}
		if($tution_checkbox==1){
	?>

	<div class="form-section">
		<h2> Tution and Other Fees </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs(বাংলা) </th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> School/College/University: </td>
		         <td> <input name="service_name_tution[]" value="School/College/University" type="hidden"> </td>
		         <td>
		            <select name="service_name_tution_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_tution[]" type="text"> </td>
		         <td> <input name="remarks_tution[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Job Circular Payment: </td>
		         <td> <input name="service_name_tution[]" value="Job Circular Payment" type="hidden"> </td>
		         <td>
		            <select name="service_name_tution_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_tution[]" type="text"> </td>
		         <td> <input name="remarks_tution[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Admission Test Fees: </td>
		         <td> <input name="service_name_tution[]" value="Admission Test Fees" type="hidden"> </td>
		         <td>
		            <select name="service_name_tution_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_tution[]" type="text"> </td>
		         <td> <input name="remarks_tution[]" type="text"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php
		}
		if($social_checkbox==1){
	?>

	<div class="form-section">
		<h2> Social Benefits </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs(বাংলা) </th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> Older Benefits: </td>
		         <td> <input name="service_name_social[]" value="Older Benefits" type="hidden"> </td>
		         <td>
		            <select name="service_name_social_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_social[]" type="text"> </td>
		         <td> <input name="remarks_social[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Handicapped Benefits: </td>
		         <td> <input name="service_name_social[]" value="Handicapped Benefits" type="hidden"> </td>
		         <td>
		            <select name="service_name_social_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_social[]" type="text"> </td>
		         <td> <input name="remarks_social[]" type="text"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php
		}
		if($insurance_checkbox==1){
	?>

	<div class="form-section">
		<h2> Insurance </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <th width="30%"> Service Name </th>
		         <th> </th>
		         <th> Yes/No </th>
		         <th> Costs(বাংলা) </th>
		         <th> Remarks(বাংলা) </th>
		      </tr>
		      <tr>
		         <td> Life Insurance: </td>
		         <td> <input name="service_name_insurance[]" value="Life Insurance" type="hidden"> </td>
		         <td>
		            <select name="service_name_insurance_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_insurance[]" type="text"> </td>
		         <td> <input name="remarks_insurance[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Vehicle Insurance: </td>
		         <td> <input name="service_name_insurance[]" value="Vehicle Insurance" type="hidden"> </td>
		         <td>
		            <select name="service_name_insurance_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_insurance[]" type="text"> </td>
		         <td> <input name="remarks_insurance[]" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Property Insurance: </td>
		         <td> <input name="service_name_insurance[]" value="Property Insurance" type="hidden"> </td>
		         <td>
		            <select name="service_name_insurance_yn[]">
		               <option value="yes"> Yes </option>
		               <option value="no"> No </option>
		            </select>
		         </td>
		         <td> <input name="costs_insurance[]" type="text"> </td>
		         <td> <input name="remarks_insurance[]" type="text"> </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<?php
		}
	?>
<button style="float:right;" class='btn' type='submit'> Submit </button>
	
</form>
</div>

<?php

}

else{
	echo "<script type='text/javascript'> location.href = 'login_form.php' </script>";
}
