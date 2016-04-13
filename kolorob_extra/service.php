<?php
include("init.php");

if(isset($_GET["update"])){

	//update it
	if(isset($_POST["update"])){
		$arr = array(
			"service_center_name" => pg_escape_string($_POST["name"])
			);
		$db->update("kolorob.service_center",$arr, "service_center_id = " . $_POST["id"]);
	}

	//get the update for pick
	$updateData = $db->select("select * from kolorob.service_center where service_center_id = " . $_GET["update"]);
	if(isset($updateData[0]))
		$updateData = $updateData[0];
	else
		unset($updateData);
}
elseif(isset($_GET["addnew"])){
	//insert it
	$arr = array(
			"service_center_name" => pg_escape_string($_POST["name"])
		);
	$db->insert("kolorob.service_center", $arr);

}
elseif(isset($_GET["delete"])){
	$db->delete("kolorob.service_center", "service_center_id = " . $_GET["delete"]);
}




?>

<html>
<head>
	<title>Service Input</title>
</head>
<body>
<div class="width:1200px; display:table; margin:auto;">
	<h2>Add</h2>
	<form method="post" action="service.php?addnew=1">
		<input style="width:200px;"  name="name" type="text" />
		<input value="add" type="submit"/>
	</form>

	<?php if(isset($updateData)) {?>

	</br></br></br></br>
	<h2>Edit</h2>
	<form method="post" action="service.php?update=1">
		<input name="id" type="hidden" value="<?php echo $updateData["service_center_id"]?>"/>
		<input style="width:200px;" name="name" type="text" value="<?php echo $updateData["service_center_name"]?>" />
		<input name="update" type="submit" value="Update"/>
	</form>	
	<?php } ?>

	
	</br></br></br></br>

	<h2>Table</h2>
	<table border="1" style="width:100%">
		<thead>
			<tr>
				<th>id</th>
				<th>service</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$services = $db->select('select * from kolorob.service_center');
				foreach ($services as $service) {

			?>	<tr>
					<td><?php echo $service["service_center_id"]?></td>
					<td><?php echo $service["service_center_name"]?></td>
					<td>
						<a href="service.php?update=<?php echo  $service["service_center_id"]?>">Edit</a>
						<a href="service.php?delete=<?php echo  $service["service_center_id"]?>">Delete</a>
					</td>
				</tr>

			<?php
				}
			?>
			
		</tbody>
	</table>
</div>

<?php
	echo "<pre>";
    var_dump( $db->errorInfo() );
    echo "</pre>";
?>


</body>
</html>






