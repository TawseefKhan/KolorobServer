<?php
echo "<head>";


echo '<link rel="stylesheet" type="text/css"href="css/style.css">';
 echo "<link href='https://fonts.googleapis.com/css?family=Work+Sans:500,400,800' rel='stylesheet' type='text/css'>";
  echo "<title>Kolorob</title>";
	echo "<h3> <img src='css/kolorob_logo_small.png' alt='kolorob logo'/> KOLOROB</h3> ";
 echo "</head>";
session_start();

if((isset($_SESSION['username']) && isset($_SESSION['password']))){
	
?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<!-- java scripting started -->


<SCRIPT language="javascript">
function addRowTheatre(tableID) { 

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
        var element2 = document.createElement("input");
        element2.type = "select";
        var list = "<select name=\"theatre_event_type[]\">" +
          "<option value=\"Street Show\">Street Show<\/option>" +
          "<option value=\"Musical Show\">Musical Show<\/option>"+
          "<option value=\"Drama Show\">Drama Show<\/option>" +
          "<option value=\"Others\">Others<\/option>" +
          "<\/select>";
        cell2.appendChild(element2);
        cell2.innerHTML = list;

        var cell3 = row.insertCell(2);
        cell3.innerHTML = "<input type='date' name='theatre_event_date[]' />";

        var cell4 = row.insertCell(3);
        cell4.style.width = '300px';
        var element_a = document.createElement("input");
        element_a.type= "checkbox";
        element_a.name = "theatre_event_fee_ffp[]";
        element_a.value = "true";
        cell4.appendChild(element_a);
        cell4.children[0].insertAdjacentHTML('afterend','Free for poor<br>');

        var element_b = document.createElement("input");
        element_b.type= "checkbox";
        element_b.name = "theatre_event_fee_foc[]";
        element_b.value = "true";
        cell4.appendChild(element_b);
        cell4.insertAdjacentHTML('beforeend','Free of cost<br><br>');

        var element_c = document.createElement("input");
        element_c.type= "text";
        element_c.name = "theatre_event_fee[]";
        element_c.placeholder = "Enter cost";
        cell4.appendChild(element_c);

        //hidden stuffs
        var element_a1 = document.createElement("input");
        element_a1.type= "hidden";
        element_a1.name = "theatre_event_fee_ffp[]";
        element_a1.value = "false";
        cell4.appendChild(element_a1);

        var element_b1 = document.createElement("input");
        element_b1.type= "hidden";
        element_b1.name = "theatre_event_fee_foc[]";
        element_b1.value = "false";
        cell4.appendChild(element_b1);



        var cell5 = row.insertCell(4);
        cell5.innerHTML =  "<input type='text' name='theatre_remarks[]' />";

        var cell6 = row.insertCell(5);
        cell6.innerHTML =  "<input type='hidden' name='theatre_checkbox' value='1' />";		
        }

function addRowMusic(tableID) { 

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
        var element2 = document.createElement("input");
        element2.type = "select";
        var list = "<select name=\"music_type[]\">" +
          "<option value=\"Bangla\">Bangla<\/option>" +
          "<option value=\"English\">English<\/option>"+
          "<option value=\"Hindi\">Hindi<\/option>" +
          "<option value=\"Instrumental\">Instrumental<\/option>" +
          "<\/select>";
        cell2.appendChild(element2);
        cell2.innerHTML = list;

        var cell3 = row.insertCell(2);
        cell3.innerHTML = "<input type='text' name='music_remarks[]' />";

        var cell4 = row.insertCell(3);
        cell4.innerHTML = "<input type='hidden' name='music_checkbox' value='1' />";		
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


</SCRIPT>

<!-- java scripting finished -->


<?php

	echo "<a href='logout.php'> <button class ='btn'> Logout </button> </a>";
	echo "<a href='Entertainment_index.php'> <button class ='btn'>Back</button> </a> <br/> <br/> <br/>";

	$db = pg_connect('host=localhost dbname=kolorob user=postgres password=12345');

	$username=$_SESSION['username'];

	//..................variables
	$reference_number = array();

	//theatre arrays
	$theatre_event_type = array();
	$theatre_event_fee = array();
	$theatre_event_fee_ffp = array();
	$theatre_event_fee_foc = array();
	$theatre_event_date = array();
	$theatre_remarks = array();



	//music arrays
	$music_type = array();
	$music_remarks = array();


	//...........................DATA COLLECTION..........................//

	//..................values came from entertainment index

	if(isset($_POST['field_checkbox'])) {
		$field_checkbox = 1;
	}
	else $field_checkbox = NULL;

	if(isset($_POST['shishupark_checkbox'])) {
		$shishupark_checkbox = 1;
	}
	else {
		$shishupark_checkbox = NULL;
	}

	if(isset($_POST['park_checkbox'])) {
		$park_checkbox = 1;
	}
	else {
		$park_checkbox = NULL;
	}

	if(isset($_POST['theatre_checkbox'])) {
		$theatre_checkbox = 1;
	}
	else {
		$theatre_checkbox = NULL;
	}

	if(isset($_POST['music_checkbox'])) {
		$music_checkbox = 1;
	}
	else {
		$music_checkbox = NULL;
	}

	if(isset($_POST['ngo_checkbox'])) {
		$ngo_checkbox = 1;
	}
	else {
		$ngo_checkbox = NULL;
	}

	if(isset($_POST['fitnessbeauty_checkbox'])) {
		$fitnessbeauty_checkbox = 1;
	}
	else {
		$fitnessbeauty_checkbox = NULL;
	}

	if(isset($_POST['centre_checkbox'])) {
		$centre_checkbox = 1;
	}
	else {
		$centre_checkbox = NULL;
	}

	if(isset($_POST['bookshop_checkbox'])) {
		$bookshop_checkbox = 1;
	}
	else {
		$bookshop_checkbox = NULL;
	}


	//...................values came from entertainment forms

	//node info
	if(isset($_POST['node_id'])) $node_id = $_POST['node_id'];
	else $node_id = NULL;
	if(isset($_POST['node_type'])) $node_type = $_POST['node_type'];
	else $node_type = NULL;

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


	//=====================dynamic stuff here =====================


	//FIELD
	if(isset($_POST['field_event_cost'])) $field_event_cost = $_POST['field_event_cost'];
	else $field_event_cost = NULL;
	if(isset($_POST['field_event_cost_ffp'])) $field_event_cost_ffp = 'true';
	else $field_event_cost_ffp = 'false';
	if(isset($_POST['field_event_cost_foc'])) $field_event_cost_foc = 'true';
	else $field_event_cost_foc = 'false';

	if(isset($_POST['playground_cost'])) $playground_cost = $_POST['playground_cost'];
	else $playground_cost = NULL;
	if(isset($_POST['playground_cost_ffp'])) $playground_cost_ffp = 'true';
	else $playground_cost_ffp = 'false';
	if(isset($_POST['playground_cost_foc'])) $playground_cost_foc = 'true';
	else $playground_cost_foc = 'false';

	if(isset($_POST['field_remarks'])) $field_remarks = $_POST['field_remarks'];
	else $field_remarks = NULL;
	

	//SHISHU PARK
	if(isset($_POST['shishupark_entry_fee'])) $shishupark_entry_fee = $_POST['shishupark_entry_fee'];
	else $shishupark_entry_fee = NULL;
	if(isset($_POST['shishupark_entry_fee_ffp'])) $shishupark_entry_fee_ffp = 'true';
	else $shishupark_entry_fee_ffp = 'false';
	if(isset($_POST['shishupark_entry_fee_foc'])) $shishupark_entry_fee_foc = 'true';
	else $shishupark_entry_fee_foc = 'false';

	if(isset($_POST['ride_fee'])) $ride_fee = $_POST['ride_fee'];
	else $ride_fee = NULL;
	if(isset($_POST['ride_fee_ffc'])) $ride_fee_ffc = 'true';
	else $ride_fee_ffc = 'false';
	if(isset($_POST['ride_fee_foc'])) $ride_fee_foc = 'true';
	else $ride_fee_foc = 'false';

	if(isset($_POST['shishupark_additional_fee'])) $shishupark_additional_fee = $_POST['shishupark_additional_fee'];
	else $shishupark_additional_fee = NULL;
	if(isset($_POST['shishupark_additional_fee_ffc'])) $shishupark_additional_fee_ffc = 'true';
	else $shishupark_additional_fee_ffc = 'false';
	if(isset($_POST['shishupark_additional_fee_foc'])) $shishupark_additional_fee_foc = 'true';
	else $shishupark_additional_fee_foc = 'false';

	if(isset($_POST['shishupark_remarks'])) $shishupark_remarks = $_POST['shishupark_remarks'];
	else $shishupark_remarks = NULL;

	//PARK
	if(isset($_POST['park_entry_fee'])) $park_entry_fee = $_POST['park_entry_fee'];
	else $park_entry_fee = NULL;
	if(isset($_POST['park_entry_fee_ffc'])) $park_entry_fee_ffc = 'true';
	else $park_entry_fee_ffc = 'false';
	if(isset($_POST['park_entry_fee_foc'])) $park_entry_fee_foc = 'true';
	else $park_entry_fee_foc = 'false';

	if(isset($_POST['park_facilities'])) $park_facilities = $_POST['park_facilities'];
	else $park_facilities = NULL;
	if(isset($_POST['park_facilities_ffc'])) $park_facilities = 'true';
	else $park_facilities_ffc = 'false';
	if(isset($_POST['park_facilities_foc'])) $park_facilities_foc = 'true';
	else $park_facilities_foc = 'false';

	if(isset($_POST['park_remarks'])) $park_remarks = $_POST['park_remarks'];
	else $park_remarks = NULL;
	

	//THEATRE [add / delete row]
	
			if(isset($_POST['theatre_event_type'])){
				foreach ($_POST['theatre_event_type'] as $key => $value) {
					array_push($theatre_event_type, $value);
				}
			}
			if(isset($_POST['theatre_event_fee'])){
				foreach ($_POST['theatre_event_fee'] as $key => $value) {
					array_push($theatre_event_fee, $value);
				}
			}
			if(isset($_POST['theatre_event_fee_ffp'])){
				foreach ($_POST['theatre_event_fee_ffp'] as $key => $value) {
					array_push($theatre_event_fee_ffp, $value);
				}
			}
			
			if(isset($_POST['theatre_event_fee_foc'])){
				foreach ($_POST['theatre_event_fee_foc'] as $key => $value) {
					array_push($theatre_event_fee_foc, $value);
				}
			}

			if(isset($_POST['theatre_event_date'])){
				foreach ($_POST['theatre_event_date'] as $key => $value) {
					array_push($theatre_event_date, $value);
				}
			}
			if(isset($_POST['theatre_remarks'])){
				foreach ($_POST['theatre_remarks'] as $key => $value) {
					array_push($theatre_remarks, $value);
				}
			}


	//MUSICAL BAND [add / delete row]
	if(isset($_POST['music_type'])){
		foreach ($_POST['music_type'] as $key => $value) {
			array_push($music_type, $value);
		}
	}

	if(isset($_POST['music_remarks'])){
		foreach ($_POST['music_remarks'] as $key => $value) {
			array_push($music_remarks, $value);
		}
	}


	//NGO
	if(isset($_POST['play_materials'])) $play_materials = $_POST['play_materials'];
	else $play_materials = NULL;
	if(isset($_POST['play_materials_ffp'])) $play_materials_ffp = 'true';
	else $play_materials_ffp = 'false';
	if(isset($_POST['play_materials_foc'])) $play_materials_foc = 'true';
	else $play_materials_foc = 'false';

	if(isset($_POST['books'])) $books = $_POST['books'];
	else $books = NULL;
	if(isset($_POST['books_ffp'])) $books_ffp = 'true';
	else $books_ffp = 'false';
	if(isset($_POST['books_foc'])) $books_foc = 'true';
	else $books_foc = 'false';

	if(isset($_POST['media'])) $media = $_POST['media'];
	else $media = NULL;
	if(isset($_POST['media_ffp'])) $media_ffp = 'true';
	else $media_ffp = 'false';
	if(isset($_POST['media_foc'])) $media_foc = 'true';
	else $media_foc = 'false';

	if(isset($_POST['drama'])) $drama = $_POST['drama'];
	else $drama = NULL;
	if(isset($_POST['drama_ffp'])) $drama_ffp = 'true';
	else $drama_ffp = 'false';
	if(isset($_POST['drama_foc'])) $drama_foc = 'true';
	else $drama_foc = 'false';

	if(isset($_POST['ngo_remarks'])) $ngo_remarks = $_POST['ngo_remarks'];
	else $ngo_remarks = NULL;


	//FITNESS / BEAUTY
	if(isset($_POST['fitnessbeauty_type'])) $fitnessbeauty_type = $_POST['fitnessbeauty_type'];
	else $fitnessbeauty_type = NULL;
	if(isset($_POST['year_of_establishment'])) $year_of_establishment = $_POST['year_of_establishment'];
	else $year_of_establishment = NULL;
	if(isset($_POST['num_workers'])) $num_workers = $_POST['num_workers'];
	else $num_workers = NULL;
	if(isset($_POST['fitnessbeauty_offers'])) $fitnessbeauty_offers = $_POST['fitnessbeauty_offers'];
	else $fitnessbeauty_offers = NULL;
	if(isset($_POST['fitnessbeauty_offer_details'])) $fitnessbeauty_offer_details = $_POST['fitnessbeauty_offer_details'];
	else $fitnessbeauty_offer_details = NULL;
	if(isset($_POST['fitnessbeauty_service_type'])) $fitnessbeauty_service_type = $_POST['fitnessbeauty_service_type'];
	else $fitnessbeauty_service_type = NULL;
	if(isset($_POST['fitnessbeauty_service_details'])) $fitnessbeauty_service_details = $_POST['fitnessbeauty_service_details'];
	else $fitnessbeauty_service_details = NULL;
	

	//CENTRE
	if(isset($_POST['centre_cost'])) $centre_cost = $_POST['centre_cost'];
	else $centre_cost = NULL;
	if(isset($_POST['centre_cost_ffp'])) $centre_cost_ffp = 'true';
	else $centre_cost_ffp = 'false';
	if(isset($_POST['centre_cost_foc'])) $centre_cost_foc = 'true';
	else $centre_cost_foc = 'false';

	if(isset($_POST['num_members'])) $num_members = $_POST['num_members'];
	else $num_members = NULL;
	if(isset($_POST['centre_offers'])) $centre_offers = $_POST['centre_offers'];
	else $centre_offers = NULL;
	if(isset($_POST['centre_offer_details'])) $centre_offer_details = $_POST['centre_offer_details'];
	else $centre_offer_details = NULL;
	if(isset($_POST['centre_service_details'])) $centre_service_details = $_POST['centre_service_details'];
	else $centre_service_details = NULL;
	if(isset($_POST['centre_service_type'])) $centre_service_type = $_POST['centre_service_type'];
	else $centre_service_type = NULL;
	if(isset($_POST['centre_num_instruments'])) $centre_num_instruments = $_POST['centre_num_instruments'];
	else $centre_num_instruments = NULL;
	
	//BOOK SHOP
	if(isset($_POST['borrow_cost'])) $borrow_cost = $_POST['borrow_cost'];
	else $borrow_cost = NULL;
	if(isset($_POST['lending_allowed'])) $lending_allowed = $_POST['lending_allowed'];
	else $lending_allowed = NULL;
	
	if(isset($_POST['membership_cost'])) $membership_cost = $_POST['membership_cost'];
	else $membership_cost = NULL;
	if(isset($_POST['membership_cost_ffp'])) $membership_cost_ffp = 'true';
	else $membership_cost_ffp = 'false';
	if(isset($_POST['membership_cost_foc'])) $membership_cost_foc = 'true';
	else $membership_cost_foc = 'false';

	if(isset($_POST['bookshop_offers'])) $bookshop_offers = $_POST['bookshop_offers'];
	else $bookshop_offers = NULL;
	if(isset($_POST['bookshop_offer_details'])) $bookshop_offer_details = $_POST['bookshop_offer_details'];
	else $bookshop_offer_details = NULL;


	//..................................DATA INSERTION..............................//

	//ent_serviceprovider table
	for($i=0; $i<sizeof($reference_number); $i++) 
	{
		$query_insert_ent_serviceprovider_table = "insert into kolorob.ent_serviceprovider values('$node_id','$reference_number[$i]', '$name','$name_bn','$data_name', '$data_date', '$designation', 
			'$contact', '$email', '$additional','$website', '$facebook', '$regis_with', '$regis_number',
			'$username', now(), '$node_type','$area','$address','$lat','$long',3,'$otime','$btime1','$ctime','$road','$block','$landmark','$btime2','$adtime');";
		if($node_id!=NULL) $result_insert_ent_serviceprovider_table = pg_query($query_insert_ent_serviceprovider_table);
	   //FIELD
		
		if($node_id!=NULL && $field_checkbox==1 && $reference_number[$i]==1) 
			{	
				$query_insert_ent_field_table =  "insert into kolorob.ent_field values('$node_id','$reference_number[$i]','$field_event_cost','$playground_cost','$field_remarks','$field_event_cost_ffp','$field_event_cost_foc','$playground_cost_ffp','$playground_cost_foc');";
				$result_insert_ent_field_table = pg_query($query_insert_ent_field_table);
				$field_checkbox=NULL;
				continue;

			}
	//SHISHU PARK
		
		if($node_id!=NULL && $shishupark_checkbox==1&& $reference_number[$i]==12) 
			{
				$query_insert_ent_shishupark_table =  "insert into kolorob.ent_shishupark values('$node_id','$reference_number[$i]','$shishupark_entry_fee','$ride_fee','$shishupark_additional_fee', '$shishupark_remarks','$shishupark_entry_fee_ffp','$shishupark_entry_fee_foc','$ride_fee_ffc','$ride_fee_foc','$shishupark_additional_fee_ffc','$shishupark_additional_fee_foc');";
				$result_insert_ent_shishupark_table = pg_query($query_insert_ent_shishupark_table);
				$shishupark_checkbox=NULL;
				continue;

			}
	//PARK
		
		if($node_id!=NULL && $park_checkbox==1&& $reference_number[$i]==9) 
			{	
				$query_insert_ent_park_table =  "insert into kolorob.ent_park values('$node_id','$reference_number[$i]','$park_entry_fee','$park_facilities','$park_remarks','$park_entry_fee_ffc','$park_entry_fee_foc','$park_facilities_ffc','$park_facilities_foc');";
				$result_insert_ent_park_table = pg_query($query_insert_ent_park_table);
				$park_checkbox=NULL;
				continue;

			}
	//THEATRE
		if($node_id!=NULL && $theatre_checkbox==1 && $reference_number[$i]==7)
			{

			for($k=0; $k<sizeof($theatre_event_type); $k++)
				{
				$query_insert_ent_theatre_table = "insert into kolorob.ent_theatre(node_id,ent_sub_category_id,event_type,event_fee,event_date,remarks,event_fee_ffp,event_fee_foc) values('$node_id','$reference_number[$i]','$theatre_event_type[$k]','$theatre_event_fee[$k]','$theatre_event_date[$k]','$theatre_remarks[$k]','$theatre_event_fee_ffp[$k]','$theatre_event_fee_foc[$k]');";
	
		//echo $query_insert_table; die();

		 		$result_insert_ent_theatre_table = pg_query($query_insert_ent_theatre_table);
		 		}
		 	$theatre_checkbox=NULL;
		 	continue;
			}

	//MUSIC
		if($node_id!=NULL && $music_checkbox==1 && $reference_number[$i]==8)
			{
			for($j=0; $j<sizeof($music_remarks); $j++)
				{
				$query_insert_ent_musical_group_table = "insert into kolorob.ent_musical_group(node_id,ent_sub_category_id,remarks,music_type)
				values('$node_id','$reference_number[$i]','$music_remarks[$j]','$music_type[$j]');";
				//echo $query_insert_table;die();
		
				$result_insert_ent_musical_group_table = pg_query($query_insert_ent_musical_group_table);	
				//echo $query_insert_table;die();
				}
		 	$music_checkbox=NULL;
		 	continue;
			}

	//NGO
		
		if($node_id!=NULL && $ngo_checkbox==1 && $reference_number[$i]==6) 
			{
				$query_insert_ent_ngo_table =  "insert into kolorob.ent_ngo values('$node_id','$reference_number[$i]','$play_materials','$books','$media','$drama','$ngo_remarks','$play_materials_ffp','$play_materials_foc','$books_ffp','$books_foc','$media_ffp','$media_foc','$drama_ffp','$drama_foc');";
			    $result_insert_ent_ngo_table = pg_query($query_insert_ent_ngo_table);
				$ngo_checkbox=NULL;
				continue;
			}
	//FITNESSBEAUTY
	//insert to database
		if($node_id!=NULL && $fitnessbeauty_checkbox==1 && ($reference_number[$i]==15 || $reference_number[$i]==17 || $reference_number[$i]==18))
			{
	
				$query_insert_ent_fitnessbeauty_table =  "insert into kolorob.ent_fitnessbeauty values('$node_id','$reference_number[$i]','$year_of_establishment','$num_workers','$fitnessbeauty_offers','$fitnessbeauty_offer_details','$fitnessbeauty_service_type','$fitnessbeauty_type');";
				$result_insert_ent_fitnessbeauty_table = pg_query($query_insert_ent_fitnessbeauty_table);
				$fitnessbeauty_checkbox=NULL;
				continue;

			}

	//trainingCENTRE
		if($node_id!=NULL && $centre_checkbox==1 && ($reference_number[$i]==2 || $reference_number[$i]==5 || $reference_number[$i]==13
			|| $reference_number[$i]==14 || $reference_number[$i]==19 || $reference_number[$i]==20 || $reference_number[$i]==21))
			{

				$query_insert_ent_centre_table =  "insert into kolorob.ent_centre values('$node_id','$reference_number[$i]','$centre_cost','$num_members','$centre_offers','$centre_offer_details','$centre_service_type','$centre_num_instruments','$centre_cost_ffp','$centre_cost_foc';";
				$result_insert_ent_centre_table= pg_query($query_insert_ent_centre_table);
				$centre_checkbox=NULL;
				continue;

			}

	//BOOK SHOP
		
		if($node_id!=NULL && $bookshop_checkbox==1 && $reference_number[$i]==16) 
			{
				$query_insert_ent_bookshop_table =  "insert into kolorob.ent_bookshop values('$node_id','$reference_number[$i]','$borrow_cost','$lending_allowed','$membership_cost','$bookshop_offers','$bookshop_offer_details','$membership_cost_ffp','$membership_cost_foc');";
				$result_insert_ent_bookshop_table= pg_query($query_insert_ent_bookshop_table);
				$bookshop_checkbox=NULL;
			continue;

			}
 echo 'reference_number';
	}
	if($node_id!=NULL && $result_insert_ent_serviceprovider_table!=NULL) echo "<script type='text/javascript'> alert('Successfully Added!') </script>";
	else if($node_id!=NULL && $result_insert_ent_serviceprovider_table==NULL) echo "<script type='text/javascript'> alert('Wrong Input!')location.reload(); </script>";
	


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
		</style> </head>";





?>
<div class="content">
<form method='post' enctype='multipart/form-data' action='Entertainment_forms.php'>

	<div class="form-section">
		<table class="form-table">
		   <tbody>
		      <tr>
		         <td width="30%">
		            <h2> Node Info </h2>
		         </td>
		      </tr>
		      <tr>
		         <td> Node ID: </td>
		         <td> <input name="node_id" type="number"> </td>
		      </tr>
		      <tr>
		         <td> Node Type: </td>
		         <td>
		            <select name="node_type">
		               <option value="node"> Node </option>
		               <option value="way"> Way </option>
		            </select>
		         </td>
		      </tr>
		   </tbody>
		</table>
	</div>

	<div class="form-section">
		<h2> Reference Number for Entertainment </h2>
		<input value="Add Row" onclick="addRowReference('reference')" type="button">
		<input value="Delete Row" onclick="deleteRow('reference')" type="button">
		<table class="pushed-table" border="1">
		   <thead>
		      <tr>
		         <th>Checkbox</th>
		         <th>Reference Number</th>
		      </tr>
		   </thead>
		   <tbody id="reference" required=""> </tbody>
		</table>
	</div>

	<div class="form-section">
		<h2> Basic Information </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <td width="30%"> Name: </td>
		         <td> <input name="name" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Name (Bangla): </td>
		         <td> <input name="name_bn" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Contact Person's Designation: </td>
		         <td> <input name="designation" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Contact No (official): </td>
		         <td> <input name="contact" type="number"> </td>
		      </tr>
		      <tr>
		         <td> Email (official): </td>
		         <td> <input name="email" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Additional Info: </td>
		         <td> <input name="additional" type="text"> </td>
		      </tr>
<tr> <td> LandMark:(বাংলা) </td> <td> <input type='text' name='landmark'/> </td> </tr>
		      <tr>
		         <td> Website Link: </td>
		         <td> <input name="website" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Facebook Link: </td>
		         <td> <input name="facebook" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Registered With: </td>
		         <td> <input name="regis_with" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Registration Number: </td>
		         <td> <input name="regis_number" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Area: </td>
		         <td>
		            <select name="area">
		               <option value="Paris Road"> Paris Road </option>
		               <option value="Baunia Badh"> Baunia Badh </option>
		            </select>
		         </td>
		      </tr>
		      <tr>
		         <td> Address: </td>
		         <td> <input name="address" type="text"> </td>
		      </tr>
<tr> <td> Road/Line:(বাংলা) </td> <td> <input type='text' name='road'/> </td> </tr>
<tr> <td> Block: </td> <td> <input type='text' name='block'/> </td> </tr>
		      <tr>
		         <td> Latitude: </td>
		         <td> <input name="lat" type="text"> </td>
		      </tr>
		      <tr>
		         <td> Longitude: </td>
		         <td> <input name="long" type="text"> </td>
		      </tr>
tr> <td> Opening Time: </td> <td> <input type='time' name='otime'/> </td> </tr>
<tr> <td> Break Time (from): </td> <td> <input type='time' name='btime1'/> </td> </tr>
<tr> <td> Break Time (to): </td> <td> <input type='time' name='btime2'/> </td> </tr>
<tr> <td> Closting Time: </td> <td> <input type='time' name='ctime'/> </td> </tr>
<tr> <td> Additional Time info:(বাংলা) </td> <td> <input type='text' name='adtime'/> </td> </tr>
		   </tbody>
		</table>
	</div>

	<div class="form-section">
		<h2> Data Collector's Part </h2>
		<table class="form-table">
		   <tbody>
		      <tr>
		         <td width="30%"> Data Collector's Name: </td>
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
		if($field_checkbox!=0 ){
	?>

	<div class="form-section">
		<h2> Applicable for Entertainment (Field) </h2>
		<table class="form-table vertical-colored">
		   <tbody>
		      <tr>
		         <th width="30%"> EVENT COST </th>
		         <th> PLAYGROUND COST </th>
		         <th> Remarks </th>
		      </tr>
		      <tr>
		         <td> <input name="field_event_cost_ffp" value="checked" type="checkbox">Free for poor<br>
		            <input name="field_event_cost_foc" value="checked" type="checkbox">Free of cost<br>	
		            Enter cost: 
		            <input name="field_event_cost" type="text">
		         </td>
		         <td> 
		            <input name="playground_cost_ffp" value="checked" type="checkbox">Free for poor<br>
		            <input name="playground_cost_foc" value="checked" type="checkbox">Free of cost<br>	
		            Enter cost: 
		            <input name="playground_cost" type="text"> 
		         </td>
		         <td> <input name="field_remarks" type="text"> </td> 
		      </tr>
		   </tbody>
		</table>
		<input name="field_checkbox" value="1" type="hidden"> 
	</div>

	<?php
		}
		if($shishupark_checkbox!=0 ){
	?>

	<div class="form-section">
		<h2> Applicable for Entertainment (SHISHU PARK) </h2>
		<table class="form-table vertical-colored">
		   <tbody>
		      <tr>
		         <th width="30%"> ENTRY FEE </th>
		         <th> RIDE FEE </th>
		         <th> ADDITIONAL FEE </th>
		         <th> Remarks </th>
		      </tr>
		      <tr>
		         <td> <input name="shishupark_entry_fee_ffp" value="checked" type="checkbox">Free for poor<br>
		            <input name="shishupark_entry_fee_foc" value="checked" type="checkbox">Free of cost<br>	
		            Enter cost: 
		            <input name="shishupark_entry_fee" type="text"> 
		         </td>
		         <td> 
		            <input name="ride_fee_ffc" value="checked" type="checkbox">Free for poor<br>
		            <input name="ride_fee_foc" value="checked" type="checkbox">Free of cost<br>	
		            Enter cost: 
		            <input name="ride_fee" type="text"> 
		         </td>
		         <td> 
		            <input name="shishupark_additional_fee_ffc" value="checked" type="checkbox">Free for poor<br>
		            <input name="shishupark_additional_fee_foc" value="checked" type="checkbox">Free of cost<br>	
		            Enter cost: 
		            <input name="shishupark_additional_fee" type="text"> 
		         </td>
		         <td> <input name="shishupark_remarks" type="text"> </td>
		      </tr>
		   </tbody>
		</table>
		<input name="shishupark_checkbox" value="1" type="hidden">
	</div>

	<?php
		}
		if($park_checkbox!=0 ){
	?>

	<div class="form-section">
		<h2> Applicable for Entertainment (PARK) </h2>
		<table class="form-table vertical-colored">
		   <tbody>
		      <tr>
		         <th width="30%"> ENTRY FEE </th>
		         <th> FACILITIES </th>
		         <th> Remarks </th>
		      </tr>
		      <tr>
		         <td><input name="park_entry_fee_ffc" value="checked" type="checkbox">Free for poor<br>
		            <input name="park_entry_fee_foc" value="checked" type="checkbox">Free of cost<br>	
		            Enter cost:  
		            <input name="park_entry_fee" type="text"> 
		         </td>
		         <td><input name="park_facilities_foc" value="checked" type="checkbox">Free for poor<br>
		            <input name="park_facilities_foc" value="checked" type="checkbox">Free of cost<br>	
		            Enter cost:  
		            <input name="park_facilities" type="text"> 
		         </td>
		         <td> <input name="park_remarks" type="text"> </td>
		      </tr>
		   </tbody>
		</table>
		<input name="park_checkbox" value="1" type="hidden">
	</div>

	<?php
		}
		if($theatre_checkbox==1){
	?>
	<div class="form-section">
		<h2> Applicable for Entertainment (Theatre) </h2>
		<input value="Add Row" onclick="addRowTheatre('theatre')" type="button">
		<input value="Delete Row" onclick="deleteRow('theatre')" type="button">
		<table class="pushed-table" border="1">
		   <thead>
		      <tr>
		         <th>Checkbox</th>
		         <th>Type of event</th>
		         <th>Event date</th>
		         <th>Fees</th>
		         <th>Remarks</th>
		      </tr>
		   </thead>
		   <tbody id="theatre"> </tbody>
		</table>
	</div>

	<?php
		}
		if($music_checkbox==1){
	?>

	<div class="form-section">
		<h2> Applicable for Entertainment (Musical Band) </h2>
		<input value="Add Row" onclick="addRowMusic('music')" type="button">
		<input value="Delete Row" onclick="deleteRow('music')" type="button">
		<table class="pushed-table" border="1">
		   <thead>
		      <tr>
		         <th>Checkbox</th>
		         <th>Type of music</th>
		         <th>Remarks</th>
		      </tr>
		   </thead>
		   <tbody id="music"> </tbody>
		</table>
	</div>

	<?php
		}
		if($ngo_checkbox!=0 ){
	?>

	<div class="form-section">
		<h2> Applicable for Entertainment (NGO) </h2>
		<table class="form-table vertical-colored">
		   <tbody>
		      <tr>
		         <th width="30%"> PLAY MATERIALS </th>
		         <th> BOOKS </th>
		         <th> MEDIA </th>
		         <th> DRAMA </th>
		         <th> Remarks </th>
		      </tr>
		      <tr>
		         <td> 
		            <input name="play_materials_ffp" value="checked" type="checkbox">Free for poor<br>
		            <input name="play_materials_foc" value="checked" type="checkbox">Free of cost<br>	
		            <input name="play_materials" placeholder="Enter cost" type="text"> 
		         </td>
		         <td> 
		            <input name="books_ffp" value="checked" type="checkbox">Free for poor<br>
		            <input name="books_foc" value="checked" type="checkbox">Free of cost<br>	
		            <input name="books" placeholder="Enter cost" type="text"> 
		         </td>
		         <td> 
		            <input name="media_ffp" value="checked" type="checkbox">Free for poor<br>
		            <input name="media_foc" value="checked" type="checkbox">Free of cost<br>	
		            <input name="media" placeholder="Enter cost" type="text"> 
		         </td>
		         <td> 
		            <input name="drama_ffp" value="checked" type="checkbox">Free for poor<br>
		            <input name="drama_foc" value="checked" type="checkbox">Free of cost<br>
		            <input name="drama" placeholder="Enter cost" type="text"> 
		         </td>
		         <td> <input name="ngo_remarks" type="text"> </td>
		      </tr>
		   </tbody>
		</table>
		<input name="ngo_checkbox" value="1" type="hidden">
	</div>

	<?php
		}
		if($fitnessbeauty_checkbox==1){
	?>

	<div class="form-section">
		<h2> Applicable for Entertainment (Parlor or Gym) </h2>
		<table class="form-table vertical-colored">
		   <tbody>
		      <tr>
		         <th width="30%"> Type </th>
		         <th> Year of establishment </th>
		         <th> Number of workers </th>
		         <th> Offers </th>
		         <th> Offer details </th>
		         <th> Remarks </th>
		         <th> Service type </th>
		      </tr>
		      <tr>
		         <td>
		            <select name="fitnessbeauty_service_type">
		               <option value="Gents">Gents</option>
		               <option value="Ladies">Ladies</option>
		            </select>
		         </td>
		         <td> <input name="year_of_establishment" type="number"> </td>
		         <td> <input name="num_workers" type="text"> </td>
		         <td> <input name="fitnessbeauty_offers" type="text"> </td>
		         <td> <input name="fitnessbeauty_offer_details" type="text"> </td>
		         <td> <input name="fitnessbeauty_service_details" type="text"> </td>
		         <td>
		            <select name="fitnessbeauty_type">
		               <option value="Parlour">Parlour</option>
		               <option value="Gym">Gym</option>
		            </select>
		         </td>
		      </tr>
		   </tbody>
		</table>
		<input name="fitnessbeauty_checkbox" value="1" type="hidden">
	</div>

	<?php
		}
		if($centre_checkbox==1){
	?>

	<div class="form-section">
		<h2> Applicable for Entertainment (Shop and Training Centre) </h2>
		<table class="form-table vertical-colored">
		   <tbody>
		      <tr>
		         <th width="30%"> Cost </th>
		         <th> Number of members </th>
		         <th> Offers </th>
		         <th> Offer details </th>
		         <th> Remarks </th>
		         <th> Service type </th>
		         <th> Number of instruments </th>
		      </tr>
		      <tr>
		         <td><input name="centre_cost_ffp" value="checked" type="checkbox">Free for poor<br>
		            <input name="centre_cost_foc" value="checked" type="checkbox">Free of cost<br>	
		            <input name="centre_cost" placeholder="Enter cost" type="text"> 
		         </td>
		         <td> <input name="num_members" type="text"> </td>
		         <td> 	
		            <input name="centre_offers" value="1" type="radio">Yes
		            <input name="centre_offers" value="0" type="radio">No
		         </td>
		         <td> <input name="centre_offer_details" type="text"> </td>
		         <td> <input name="centre_service_details" type="text"> </td>
		         <td> <input name="centre_service_type" type="text"> </td>
		         <td> <input name="centre_num_instruments" type="text"> </td>
		      </tr>
		   </tbody>
		</table>
		<input name="centre_checkbox" value="1" type="hidden">
	</div>

	<?php
		}
		if($bookshop_checkbox){
	?>

	<div class="form-section">
		<h2> Applicable for Entertainment (Book shop) </h2>
		<table class="form-table vertical-colored">
		   <tbody>
		      <tr>
		         <th width="30%"> Cost of borrowing </th>
		         <th> Lending allowed </th>
		         <th> Membership cost </th>
		         <th> Offers </th>
		         <th> Remarks </th>
		      </tr>
		      <tr>
		         <td> <input name="borrow_cost" type="text"> </td>
		         <td>
		            <input name="lending_allowed" value="1" type="radio">Yes
		            <input name="lending_allowed" value="0" type="radio">No
		         </td>
		         <td><input name="membership_cost_ffp" value="checked" type="checkbox">Free for poor<br>
		            <input name="membership_cost_foc" value="checked" type="checkbox">Free of cost<br>	 
		            <input name="membership_cost" placeholder="Enter cost" type="text"> 
		         </td>
		         <td> 
		            <input name="bookshop_offers" value="1" type="radio">Yes
		            <input name="bookshop_offers" value="0" type="radio">No
		         </td>
		         <td> <input name="bookshop_offer_details" type="text"> </td>
		      </tr>
		   </tbody>
		</table>
		<input name="bookshop_checkbox" value="1" type="hidden">
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
