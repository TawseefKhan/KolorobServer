<?php
echo "<head>";


echo '<link rel="stylesheet" type="text/css"href="css/style.css">';
 echo "<link href='https://fonts.googleapis.com/css?family=Work+Sans:500,400,800' rel='stylesheet' type='text/css'>";


echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> '; 
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



function addRowSpecialist(tableID) { 

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
        cell2.innerHTML = "<input type='text' name='specialist_type[]'>";

        var cell3 = row.insertCell(2);
        cell3.innerHTML = "<input type='number' name='specialist_fees[]' />";

        var cell4 = row.insertCell(3);
        cell4.innerHTML =  "<input type='text' name='specialist_remarks[]' />";

        var cell5 = row.insertCell(4);
        cell5.innerHTML =  "<input type='hidden' name='specialist_checkbox' value='1' />";
		
        }

function addRowVaccine(tableID) { 

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
        cell2.innerHTML = "<input type='text' name='vaccine_name[]'>";

        var cell3 = row.insertCell(2);
        cell3.innerHTML = "<input type='text' name='vaccine_fees[]' />";

        var cell4 = row.insertCell(3);
        cell4.innerHTML =  "<input type='text' name='vaccine_remarks[]' />";

        var cell5 = row.insertCell(4);
        cell5.innerHTML =  "<input type='hidden' name='vaccine_checkbox' value='1' />";
		
        }

function addRowPharmacy(tableID) { 

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
        cell2.innerHTML = "<input type='text' name='ph_fees[]'>";

        var cell3 = row.insertCell(2);
        cell3.innerHTML = "<input type='text' name='ph_doctor_name[]' />";

        var cell4 = row.insertCell(3);
        cell4.innerHTML =  "<input type='text' name='ph_time[]' />";

        var cell5 = row.insertCell(4);
        cell5.innerHTML = "<select name='ph_no_degree[]'> <option value='yes'> Yes </option> <option value='no'> No </option> </select>";

        var cell6 = row.insertCell(5);
        cell6.innerHTML = "<select name='ph_lmaf[]'> <option value='yes'> Yes </option> <option value='no'> No </option> </select>";

        var cell7 = row.insertCell(6);
        cell7.innerHTML =  "<select name='ph_mbbs[]'> <option value='yes'> Yes </option> <option value='no'> No </option> </select>";

        var cell8 = row.insertCell(7);
        cell8.innerHTML =  "<input type='text' name='ph_specialist[]'/> ";

        var cell9 = row.insertCell(8);
        cell9.innerHTML =  "<input type='text' name='ph_additional[]'/> ";

        var cell10 = row.insertCell(9);
        cell10.innerHTML =  "<input type='text' name='ph_doc_additional[]'/> ";


        var cell11 = row.insertCell(10);
        cell11.innerHTML =  "<input type='hidden' name='pharmacy_checkbox' value='1' />";
		
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
	echo "<a href='health_index.php'> <button class='btn'>Back</button> </a>";


	require_once('connect.php');

	$username=$_SESSION['username'];

	//..................variables

	//basic arrays
	$reference_number = array();

	//specialist arrays
	$specialist_type = array();
	$specialist_fees = array();
	$specialist_remarks = array();



	//vaccine arrays
	$vaccine_name = array();
	$vaccine_fees = array();
	$vaccine_remarks = array();



	//pharmacy form
	$ph_fees = array();
	$ph_doctor_name = array();
	$ph_time = array();
	$ph_no_degree = array();
	$ph_lmaf = array();
	$ph_mbbs = array();
	$ph_specialist = array();
	$ph_additional = array();
	$ph_doc_additional = array();



	//...........................DATA COLLECTION..........................//

	//..................values came from health index

	if(isset($_POST['outdoor_checkbox'])) {
		$outdoor_doctors = 1;
	}
	else $outdoor_doctors = NULL;

	if(isset($_POST['specialist_checkbox'])) {
		$specialist_checkbox = 1;
	}
	else {
		$specialist_checkbox = NULL;
	}

	if(isset($_POST['vaccine_checkbox'])) {
		$vaccine_checkbox = 1;
	}
	else {
		$vaccine_checkbox = NULL;
	}

	if(isset($_POST['pharmacy_checkbox'])) {
		$pharmacy_checkbox = 1;
	}
	else {
		$pharmacy_checkbox = NULL;
	}







	//...................values came from health forms

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
if(isset($_POST['landmark'])) $landmark = $_POST['landmark'];
	else $landmark = NULL;
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




	//data collector info
	if(isset($_POST['data_name'])) $data_name = $_POST['data_name'];
	else $data_name = NULL;
	if(isset($_POST['data_date'])) $data_date = $_POST['data_date'];
	else $data_date = NULL;





	//service info
	if(isset($_POST['outdoor_fees'])) $outdoor_fees = $_POST['outdoor_fees'];
	else $outdoor_fees = NULL;
	if(isset($_POST['outdoor_free'])) $outdoor_free = $_POST['outdoor_free'];
	else $outdoor_free = NULL;
	if(isset($_POST['outdoor_doctor_fee'])) $outdoor_doctor_fee = $_POST['outdoor_doctor_fee'];
	else $outdoor_doctor_fee = NULL;
	if(isset($_POST['outdoor_emergency_fee'])) $outdoor_emergency_fee = $_POST['outdoor_emergency_fee'];
	else $outdoor_emergency_fee = NULL;
	if(isset($_POST['outdoor_remarks'])) $outdoor_remarks = $_POST['outdoor_remarks'];
	else $outdoor_remarks = NULL;

	if(isset($_POST['amb_fees'])) $amb_fees = $_POST['amb_fees'];
	else $amb_fees = NULL;
	if(isset($_POST['amb_remarks'])) $amb_remarks = $_POST['amb_remarks'];
	else $amb_remarks = NULL;
	if(isset($_POST['mat_fees'])) $mat_fees = $_POST['mat_fees'];
	else $mat_fees = NULL;
	if(isset($_POST['mat_remarks'])) $mat_remarks = $_POST['mat_remarks'];
	else $mat_remarks = NULL;





	//specialist info
	if(isset($_POST['specialist_type'])){
		foreach ($_POST['specialist_type'] as $key => $value) {
			array_push($specialist_type, $value);
		}
	}

	if(isset($_POST['specialist_fees'])){
		foreach ($_POST['specialist_fees'] as $key => $value) {
			array_push($specialist_fees, $value);
		}
	}

	if(isset($_POST['specialist_remarks'])){
		foreach ($_POST['specialist_remarks'] as $key => $value) {
			array_push($specialist_remarks, $value);
		}
	}




	//vaccine info
	if(isset($_POST['vaccine_name'])){
		foreach ($_POST['vaccine_name'] as $key => $value) {
			array_push($vaccine_name, $value);
		}
	}

	if(isset($_POST['vaccine_fees'])){
		foreach ($_POST['vaccine_fees'] as $key => $value) {
			array_push($vaccine_fees, $value);
		}
	}

	if(isset($_POST['vaccine_remarks'])){
		foreach ($_POST['vaccine_remarks'] as $key => $value) {
			array_push($vaccine_remarks, $value);
		}
	}




	//pharmacy info
	if(isset($_POST['ph_fees'])){
		foreach ($_POST['ph_fees'] as $key => $value) {
			array_push($ph_fees, $value);
		}
	}

	if(isset($_POST['ph_doctor_name'])){
		foreach ($_POST['ph_doctor_name'] as $key => $value) {
			array_push($ph_doctor_name, $value);
		}
	}

	if(isset($_POST['ph_time'])){
		foreach ($_POST['ph_time'] as $key => $value) {
			array_push($ph_time, $value);
		}
	}

	if(isset($_POST['ph_no_degree'])){
		foreach ($_POST['ph_no_degree'] as $key => $value) {
			array_push($ph_no_degree, $value);
		}
	}

	if(isset($_POST['ph_lmaf'])){
		foreach ($_POST['ph_lmaf'] as $key => $value) {
			array_push($ph_lmaf, $value);
		}
	}

	if(isset($_POST['ph_mbbs'])){
		foreach ($_POST['ph_mbbs'] as $key => $value) {
			array_push($ph_mbbs, $value);
		}
	}

	if(isset($_POST['ph_specialist'])){
		foreach ($_POST['ph_specialist'] as $key => $value) {
			array_push($ph_specialist, $value);
		}
	}
if(isset($_POST['ph_additional'])){
		foreach ($_POST['ph_additional'] as $key => $value) {
			array_push($ph_additional, $value);
		}
	}
	if(isset($_POST['ph_doc_additional'])){
		foreach ($_POST['ph_doc_additional'] as $key => $value) {
			array_push($ph_doc_additional, $value);
		}
	}


	//..................................DATA INSERTION..............................//


	//node table
	for($i=0; $i<sizeof($reference_number); $i++){
		$query_insert_node_table = "insert into kolorob.h_node values('$node_id', '$name', '$data_name', '$data_date', '$designation', 
			'$contact', '$email', '$additional','$website', '$facebook', '$regis_with', '$regis_number',
			'$username','$reference_number[$i]','$name_bn', now(), '$node_type','$area','$address','$lat','$long',2,'$otime','$btime1','$ctime','$landmark',
'$road','$block','$btime2','$adtime');";
		if($node_id!=NULL) $result_insert_node_table = pg_query($query_insert_node_table);
	}
	if($node_id!=NULL && $result_insert_node_table!=NULL) echo "<script type='text/javascript'> alert('Successfully Added!') </script>";
	else if($node_id!=NULL && $result_insert_node_table==NULL) echo "<script type='text/javascript'> alert('Wrong Input!')location.reload(); </script>";


	//service table
	for($i=0; $i<sizeof($reference_number); $i++) {
		$query_insert_service_table = "insert into kolorob.h_service values('$node_id','$amb_fees','$mat_fees','$amb_remarks','$mat_remarks','$outdoor_fees',
		'$outdoor_free','$outdoor_doctor_fee','$outdoor_emergency_fee','$outdoor_remarks','$reference_number[$i]');";
		if ($node_id != NULL && $amb_fees && $outdoor_fees) $result_insert_service_table = pg_query($query_insert_service_table);
	}



	//specialist table
	for($j=0; $j<sizeof($reference_number); $j++) {
		for ($i = 0; $i < sizeof($specialist_type); $i++) {
			$query_insert_specialist_table = "insert into kolorob.h_specialist(node_id, specialist_type, specialist_fees, specialist_remarks,ref_num)
				values('$node_id','$specialist_type[$i]','$specialist_fees[$i]','$specialist_remarks[$i]','$reference_number[$j]');";
			if ($node_id != NULL && $specialist_checkbox == 1) $result_insert_specialist_table = pg_query($query_insert_specialist_table);
		}
	}



	//vaccine table
	for($j=0; $j<sizeof($reference_number); $j++) {
		for ($i = 0; $i < sizeof($vaccine_name); $i++) {
			$query_insert_vaccine_table = "insert into kolorob.h_vaccine
				values('$node_id', '$vaccine_name[$i]','$vaccine_fees[$i]','$vaccine_remarks[$i]','$reference_number[$j]');";
			if ($node_id != NULL && $vaccine_checkbox == 1) $result_insert_vaccine_table = pg_query($query_insert_vaccine_table);
		}
	}



	//pharmacy table
	for($j=0; $j<sizeof($reference_number); $j++) {
		for ($i = 0; $i < sizeof($ph_doctor_name); $i++) {
			$query_insert_pharmacy_table = "insert into kolorob.h_pharmacy (node_id,pharmacy_fee,pharmacy_doctor_name,pharmacy_time,pharmacy_no_degree,
			pharmacy_lmaf,pharmacy_mbbs,pharmacy_specialist,pharmacy_remarks,pharmacy_doc_remarks, ref_num) values('$node_id','$ph_fees[$i]', '$ph_doctor_name[$i]',
			'$ph_time[$i]', '$ph_no_degree[$i]', '$ph_lmaf[$i]', '$ph_mbbs[$i]','$ph_specialist[$i]','$ph_additional[$i]','$ph_doc_additional[$i]',
			'$reference_number[$j]');";
			if ($node_id != NULL && $pharmacy_checkbox == 1) $result_insert_pharmacy_table = pg_query($query_insert_pharmacy_table);
		}
	}

	//.................................HTML FORM....................................//
	
	echo "<head> <style type='text/css'>
li {  
  
list-style: none;  
color:#00008B;
  
}  

th, td {
    padding: 2px;
}
h2 {
    color:#069;
    margin-top:0px;
}
		</style> </head>";

?>
	
<div class="content">
<form method='post' action='health_form.php'>

	<div class="form-section">
		<h2> Node Info </h2> 
		<table class="form-table">
			<tr> <td width="30%"> Node ID: </td> <td width="70%"> <input type='number' name='node_id'/> </td> </tr>
			<tr> <td> Node Type: </td> <td> <select name='node_type'> <option value='node'> Node </option> <option value='way'> Way </option> </select> </td> </tr>
		</table>  
	</div>

	<div class="form-section">
		<h2> Reference Number for Health </h2>
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
			<tr> <td width="30%"> Name: </td> <td width="70%"> <input type='text' name='name'/> </td> </tr>
			<tr> <td> Name (বাংলা): </td> <td> <input type='text' name='name_bn'/> </td> </tr>
			<tr> <td> Contact Person's Designation:(বাংলা) </td> <td> <input type='text' name='designation'/> </td> </tr>
			<tr> <td> Contact No (official): </td> <td> <input type='number' name='contact'/> </td> </tr>
			<tr> <td> Email (official): </td> <td> <input type='email' name='email'/> </td> </tr>
			<tr> <td> Additional Info:(বাংলা) </td> <td> <input type='text' name='additional'/> </td> </tr>
<tr> <td> LandMark:(বাংলা) </td> <td> <input type='text' name='landmark'/> </td> </tr>
			<tr> <td> Website Link: </td> <td> <input type='url' name='website'/> </td> </tr>
			<tr> <td> Facebook Link: </td> <td> <input type='url' name='facebook'/> </td> </tr>
			<tr> <td> Registered With: </td> <td> <input type='text' name='regis_with'/> </td> </tr>
			<tr> <td> Registration Number: </td> <td> <input type='text' name='regis_number'/> </td> </tr>

			<tr> <td> Area: </td> <td> <select name='area'> <option value='Paris Road'> Paris Road </option> <option value='Baunia Badh'> Baunia Badh </option> </select> </td> </tr>
			<tr> <td> Address:(বাংলা) </td> <td> <input type='text' name='address'/> </td> </tr>
<tr> <td> Road/Line:(বাংলা) </td> <td> <input type='text' name='road'/> </td> </tr>
<tr> <td> Block: </td> <td> <input type='text' name='block'/> </td> </tr>
			<tr> <td> Latitude: </td> <td> <input type='text' name='lat'/> </td> </tr>
			<tr> <td> Longitude: </td> <td> <input type='text' name='long'/> </td> </tr>
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
			<tr> <td width="30%"> Data Collector's Name: </td> <td width="70%"> <input type='text' name='data_name'/> </td> </tr>
			<tr> <td> Date: </td> <td> <input type='date' name='data_date'/> </td> </tr>
		</table>
	</div>

	<?php 
		//outdoor doctors form
		if($outdoor_doctors!=0 ){
		//if(true){
	?>
	<div class="form-section">
		<h2> Applicable for Medical Services(Outdoor Doctors) </h2> 
		<table class="form-table">
			<tr>
			   <th> FEES </th>
			   <th> FREE </th>
			   <th> Outdoor Doctor Fee </th>
			   <th> Emergency Fee </th>
			   <th> Remarks </th>
			</tr>
			<tr>
			   <td> <input type='text' name='outdoor_fees'/> </td>
			   <td>
			      <select name='outdoor_free'>
			         <option value='yes'> Yes </option>
			         <option value='no'> No </option>
			      </select>
			   </td>
			   <td> <input type='text' name='outdoor_doctor_fee'/> </td>
			   <td> <input type='text' name='outdoor_emergency_fee'/> </td>
			   <td> <input type='text' name='outdoor_remarks'/> </td>
			   <td> <input type='hidden' name='outdoor_doctors' value='1'/> </td>
			</tr>
		</table>
	</div>
	<div class="form-section">
		<h2> Applicable for Medical Services(Special) </h2>
		<table class="form-table">
		   <tr>
		      <th> Types of Services </th>
		      <th> Fees/Expenses </th>
		      <th> Remarks/FOP </th>
		   <tr>
		      <td> Ambulance </td>
		      <td> <input type='text' name='amb_fees'/> </td>
		      <td> <input type='text' name='amb_remarks'/> </td>
		   </tr>
		   <tr>
		      <td> Maternity Facility </td>
		      <td> <input type='text' name='mat_fees'/> </td>
		      <td> <input type='text' name='mat_remarks'/> </td>
		   </tr>
		   <td> <input type='hidden' name='outdoor_doctors' value='1'/> </td>
		</table>
	</div>
	<?php
		}
		//specialist form
		if($specialist_checkbox==1){
		//if(true){
	?>
	<div class="form-section">
		<h2>  Applicable for Medical Services(Specialists)  </h2>
		<INPUT type="button" value="Add Row" onClick="addRowSpecialist('specialist')" />
		<INPUT type="button" value="Delete Row" onClick="deleteRow('specialist')" />
		<TABLE  class="pushed-table"  border="1" >
		   <thead>
		      <tr>
		         <th>Checkbox</th>
		         <th>Type of Specialists</th>
		         <th>Fees</th>
		         <th>Remarks</th>
		      </tr>
		   </thead>
		   <tbody id="specialist" required> </tbody>
		</TABLE>
	</div>

	<?php
		}
		//vaccines form
		if($vaccine_checkbox==1){
		//if(true){
	?>
	<div class="form-section">
		<h2> Applicable for Medical Services(Vaccines) </h2>
		<INPUT type="button" value="Add Row" onClick="addRowVaccine('vaccine')" />
    	<INPUT type="button" value="Delete Row" onClick="deleteRow('vaccine')" />
           
        <TABLE class="table-pushed" border="1" >
            <thead>
                <tr>
                	<th>Checkbox</th>
                    <th>Type of Services</th>
                    <th>Fees</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody id="vaccine" required> </tbody>
        </TABLE>
	</div>
	<?php 
		}

		//pharmacy form
		if($pharmacy_checkbox==1){
		//if(true){
	?>
	<div class="form-section">
		<h2> Applicable for Medical Services(Pharmacy) </h2>
		<INPUT type="button" value="Add Row" onClick="addRowPharmacy('pharmacy')" />
    	<INPUT type="button" value="Delete Row" onClick="deleteRow('pharmacy')" />
        <TABLE class="table-pushed" border="1" >
            <thead>
                <tr>
                	<th>Checkbox</th>
                    <th>Fees/Free</th>
                    <th>Doctor's Name</th>
                    <th>Time</th>
                    <th>No Degree</th>
                    <th>LMAF</th>
                    <th>MBBS</th>
                    <th>Specialist</th>
                    <th>Pharmacy Remarks </th>
                    <th>Additional Doctor Information </th>
                </tr>
            </thead>
            <tbody id="pharmacy" required> </tbody>
        </TABLE>
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
	echo "<script type='text/javascript'> location.href = 'login_form.php'</script>";
}

?>
