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
		//if(isset($_POST['job_name'])) 					$job_name = $_POST['job_name'];
		if(isset($_POST['job_subcategory'])) 			$job_subcategory_name = $_POST['job_subcategory'];
		if(isset($_POST['contact_person_designation'])) $contact_person_designation = $_POST['contact_person_designation'];
		if(isset($_POST['contact_no'])) 				$contact_no = $_POST['contact_no'];
		if(isset($_POST['email_address'])) 				$email_address = $_POST['email_address'];
	
		if(isset($_POST['website_link'])) 				$website_link = $_POST['website_link'];
		if(isset($_POST['fb_link'])) 					$fb_link = $_POST['fb_link'];
		if(isset($_POST['registered_with'])) 			$registered_with = $_POST['registered_with'];
		if(isset($_POST['registration_no'])) 			$registration_no = $_POST['registration_no'];
		if(isset($_POST['data_collector_name'])) 		$data_collector_name = $_POST['data_collector_name'];
		if(isset($_POST['date'])) 						$date = $_POST['date'];
		
	        if(isset($_POST['additional_info']))                            $additional_info = $_POST['additional_info'];
                if(isset($_POST['area']))                            $area = $_POST['area'];
                if(isset($_POST['address']))                            $address = $_POST['address'];
if(isset($_POST['road']))                                     $road = $_POST['road'];
if(isset($_POST['block']))                                     $block = $_POST['block'];
                if(isset($_POST['latitude']))                            $latitude = $_POST['latitude'];
	        if(isset($_POST['longitude'])) 				$longitude = $_POST['longitude'];
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
if(isset($_POST['jobname']))                                     
$jobname = $_POST['jobname'];
               



//echo $xi_xii_stipend_facility;
?>
<!DOCTYPE html>   
<head>  
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"  />
</head>
</html>

<?php
require_once('connect.php');


//insert into legal_aid_service_provider table which is common for all




 


  if(isset($_POST['reference_number']))
			{
				foreach ($_POST['reference_number'] as $key => $value) 
					{
            
							
							$reference_number = $_POST["reference_number"][$key];
							$query_id = "select count(serviceprovider_id) from kolorob.job_service_provider";
							$result_id = pg_query($query_id);
							$id_row = pg_fetch_assoc($result_id);
							$value = reset($id_row);
							$current_id = $identifier_id.++$value;
							$result1 = pg_query($dbconn,"insert into kolorob.job_service_provider values ('$identifier_id','$current_id',$reference_number,7,'$contact_person_designation','$contact_no','$email_address','$website_link','$fb_link','$registered_with','$registration_no','$data_collector_name','$date','$username','$additional_info',now(),'$node_type','$area','$address','$latitude','$longitude','$otime','$btime1','$ctime','$road','$block','$landmark','$btime2','$adtime','$jobname');");
						if(isset($_POST['names'])){
								foreach ($_POST['names'] as $key => $value) 
										{
											
											$names = $_POST["names"][$key];
											$news_source = $_POST["news_source"][$key];
											$remark = $_POST["remark"][$key];
											$job_types = $_POST["job_types"][$key];

											//echo $course_name;
											//echo $duration; 
											//echo $admission_time;
											//echo $cost;
											//echo $l_service_name;
											//echo $l_service_name ;
											//if($course_type=='')

											$query_id = "select count(job_id) from kolorob.job_type_service_provider";
											$result_id = pg_query($query_id);
											$id_row = pg_fetch_assoc($result_id);
											$value = reset($id_row);
											$current_id = $identifier_id.++$value;
											$result2 = pg_query($dbconn,"insert into kolorob.job_type_service_provider values ($current_id,'$identifier_id',$reference_number,'$names','$news_source','$remark','$job_types');");

										 }

								}
					}
			}

		 

  if($result1!=null) 
  {
    echo "<script type='text/javascript'> 
	alert('Data Successfully Added into Job Employment table for node_id= $identifier_id !')
	</script>";
	
echo '<script type="text/javascript">document.location="job.php";</script>';

  }
  else
  {
    echo "<script type='text/javascript'> alert('Wrong Input!') </script>"; 
	echo '<script type="text/javascript">document.location="job.php";</script>';
  }

pg_close($dbconn); 
  
}
else{
		echo "<script type='text/javascript'> location.href = 'login_form.php'</script>";
	}

?>
