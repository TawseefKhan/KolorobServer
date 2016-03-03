<?php
echo "<head>";


echo '<link rel="stylesheet" type="text/css"href="css/style.css">';
echo " <h3> KOLOROB</h3> ";
 echo "<link href='https://fonts.googleapis.com/css?family=Work+Sans:500,400,800' rel='stylesheet' type='text/css'>";

 echo "</head>";
session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['password']) ){

$username=$_SESSION['username'];

		if(isset($_POST['identifier_id'])) 				$identifier_id = $_POST['identifier_id'];
		if(isset($_POST['node_type'])) 				$node_type = $_POST['node_type'];
		
		//$additional_info
		if(isset($_POST['legal_aid_name_eng'])) 					$legal_aid_name_eng = $_POST['legal_aid_name_eng'];
		if(isset($_POST['legal_aid_name_ban'])) 					$legal_aid_name_ban = $_POST['legal_aid_name_ban'];
		if(isset($_POST['legal_aid_subcategory'])) 			$legal_aid_subcategory_name = $_POST['legal_aid_subcategory'];
		if(isset($_POST['contact_person_designation'])) $contact_person_designation = $_POST['contact_person_designation'];
		if(isset($_POST['contact_no'])) 				$contact_no = $_POST['contact_no'];
		if(isset($_POST['email_address'])) 				$email_address = $_POST['email_address'];
		if(isset($_POST['additional_info'])) 				$additional_info = $_POST['additional_info'];
		//if(isset($_POST['edtype'])) 					$edtype = $_POST['edtype'];
		//if(isset($_POST['shift'])) 						$shift = $_POST['shift'];
		//if(isset($_POST['hostel_facility'])) 			$hostel_facility = $_POST['hostel_facility'];
		//if(isset($_POST['transport_facility'])) 		$transport_facility = $_POST['transport_facility'];
		//if(isset($_POST['canteen_facility'])) 			$canteen_facility = $_POST['canteen_facility'];
		//if(isset($_POST['Playground'])) 				$playground = $_POST['Playground'];
		if(isset($_POST['website_link'])) 				$website_link = $_POST['website_link'];
		if(isset($_POST['fb_link'])) 					$fb_link = $_POST['fb_link'];
		if(isset($_POST['registered_with'])) 			$registered_with = $_POST['registered_with'];
		if(isset($_POST['registration_no'])) 			$registration_no = $_POST['registration_no'];
		if(isset($_POST['data_collector_name'])) 		$data_collector_name = $_POST['data_collector_name'];
		if(isset($_POST['date'])) 						$date = $_POST['date'];
		
                 if(isset($_POST['area']))                                               $area = $_POST['area'];
                if(isset($_POST['address']))                                               $address = $_POST['address'];
if(isset($_POST['road']))                                     $road = $_POST['road'];
if(isset($_POST['block']))                                     $block = $_POST['block'];
                if(isset($_POST['latitude']))                                               $latitude = $_POST['latitude'];
               if(isset($_POST['longitude']))                                               $longitude = $_POST['longitude'];
 if(isset($_POST['otime']))                                     
 $otime= $_POST['otime'];
                 if(isset($_POST['btime1']))                                     
$btime1 = $_POST['btime1'];
if(isset($_POST['btime2']))                                     
$btime2 = $_POST['btime2'];
if(isset($_POST['ctime']))                                    
 $ctime = $_POST['ctime'];
if(isset($_POST['adtime']))                                     
$adtime = $_POST['adtime'];
if(isset($_POST['landmark']))                                     
$landmark = $_POST['landmark'];



?>
<!DOCTYPE html>   
<head>  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"  />
</head>
</html>

<?php

//echo $xi_xii_stipend_facility;

require_once('connect.php');


//insert into legal_aid_service_provider table which is common for all



 




		 if(isset($_POST['reference_number']))
			{
				foreach ($_POST['reference_number'] as $key => $value) 
					{
            
							$reference_number = $_POST["reference_number"][$key];
							$query_id = "select count(serviceprovider_id) from kolorob.legal_aid_service_provider";
							$result_id = pg_query($query_id);
							$id_row = pg_fetch_assoc($result_id);
							$value = reset($id_row);
							$current_id = $identifier_id.++$value;
							$result1 = pg_query($dbconn,"insert into kolorob.legal_aid_service_provider values ($identifier_id,'$current_id','$reference_number',5,'$legal_aid_name_eng','$legal_aid_name_ban','$contact_person_designation','$contact_no','$email_address','$website_link','$fb_link','$registered_with','$registration_no','$data_collector_name','$date','$username','$additional_info',now(),'$node_type','$area','$address', '$latitude', '$longitude','$otime','$btime1','$ctime','$road','$block','$landmark','$btime2','$adtime');");
							//dump the result object
							//var_dump($result1); 

if(isset($_POST['free']))
{
	foreach ($_POST['free'] as $key => $value) 
        {
            
            $free = $_POST["free"][$key];
			$cost = $_POST["cost"][$key];
            $person_authority = $_POST["person_authority"][$key];
			$remark = $_POST["remark"][$key];
			$l_service_name = $_POST["l_service_name"][$key];

			//echo $course_name;
			//echo $duration; 
			//echo $admission_time;
			//echo $cost;
			//echo $l_service_name;
			//echo $l_service_name ;
			//if($course_type=='')

			$query_id = "select count(legal_advice_id) from kolorob.legal_aid_type_service_provider_legal_advice";
			$result_id = pg_query($query_id);
			$id_row = pg_fetch_assoc($result_id);
			$value = reset($id_row);
			$current_id = $identifier_id.++$value;
			$result2 = pg_query($dbconn,"insert into kolorob.legal_aid_type_service_provider_legal_advice values ('$current_id',$identifier_id,$reference_number,'$l_service_name','$free','$cost','$person_authority','$remark');");

		 }
}
  

		 
		 if(isset($_POST['s_free']))
		 {
			foreach ($_POST['s_free'] as $key => $value) 
				{
            
						$s_free = $_POST["s_free"][$key];
						$s_cost = $_POST["s_cost"][$key];
						$s_person_authority = $_POST["s_person_authority"][$key];
						$s_remark = $_POST["s_remark"][$key];
						$s_service_name = $_POST["s_service_name"][$key];

						//echo $course_name;
						//echo $duration; 
						//echo $admission_time;
						//echo $cost;
						//echo $s_service_name;
						//if($course_type=='')

						$query_id = "select count(s_id) from kolorob.legal_aid_type_service_provider_salishi";
						$result_id = pg_query($query_id);
						$id_row = pg_fetch_assoc($result_id);
						$value = reset($id_row);
						$current_id = $identifier_id.++$value;
						$result3 = pg_query($dbconn,"insert into kolorob.legal_aid_type_service_provider_salishi values ('$current_id',$identifier_id,$reference_number,'$s_service_name','$s_free','$s_cost','$s_person_authority','$s_remark');");

		 }
		 }


					}
			}
		 
		 
		 

  if($result1!=null) 
  {
    echo "<script type='text/javascript'> 
	alert('Data Successfully Added into Legal Aid table for node_id= $identifier_id!')
	</script>";

	echo '<script type="text/javascript">document.location="legal_aid.php";</script>';
  }
  else
  {
    echo "<script type='text/javascript'> alert('Wrong Input! Try Giving the input again!!!') </script>";
	//echo '<script type="text/javascript"> document.location="legal_aid.php";</script>';

  }

pg_close($dbconn); 
  
}
else{
		echo "<script type='text/javascript'> location.href = 'login_form.php'</script>";
	}

?>
