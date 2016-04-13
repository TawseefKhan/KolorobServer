<?php
include("init.php");
global $db;

function print_service_center($id=0){
	global $db;
	$s = $db->select("select * from kolorob.service_center");
	?>
		<select style="width:200px;" name="service_center_id">
			<option value="0">Select Option</option>
			<?php foreach ($s as $ss) {
				$d = "";
				if($id == $ss["service_center_id"])
					$d = "selected";
			?>
			<option <?php echo $d; ?> value="<?php echo $ss["service_center_id"]; ?>"><?php echo $ss["service_center_name"]; ?></option>
			<?php } ?>
		</select>
	<?php
}

if(isset($_GET["update"])){
	//update it
	if(isset($_POST["update"])){
		$arr = array(
			"service_center_id" => $_POST["service_center_id"],
			"qexplain" => pg_escape_string($_POST["qexplain"]),
			"qanswer" =>  pg_escape_string($_POST["qanswer"]),
			"cat_id" =>  pg_escape_string($_POST["cat_id"]),
			);
		$db->update("kolorob.service_center_data",$arr, "qid = " . $_POST["id"]);
	}

	//get the update for pick
	$updateData = $db->select("select * from kolorob.service_center_data where qid = " . $_GET["update"]);
	if(isset($updateData[0]))
		$updateData = $updateData[0];
	else
		unset($updateData);
}
elseif(isset($_GET["addnew"])){

	//insert it
	$arr = array(
		"service_center_id" => $_POST["service_center_id"],
		"qexplain" =>  pg_escape_string($_POST["qexplain"]),
		"qanswer" =>  pg_escape_string($_POST["qanswer"]),
		"cat_id" =>  pg_escape_string($_POST["cat_id"]),
		);
	global $db;
	$db->insert("kolorob.service_center_data", $arr);

}
elseif(isset($_GET["delete"])){
	$db->delete("kolorob.service_center_data", "qid = " . $_GET["delete"]);
}
?>

<html>
<head>
	<title>Data Input</title>

	<style type="text/css">
		.box{min-width: 600px; display: table; margin:auto; overflow: hidden; padding: 10px; border: 2px solid;}
	</style>
</head>
<body>
<div class="width:1200px; display:table; margin:auto;">
	<div class="box">
	<h2>Add</h2>
	<form method="post" action="data.php?addnew=1">
		<?php print_service_center(); ?>
		<p>qexplain</p>
		<textarea style="width:100%;" name="qexplain"></textarea>
		<p>qanswer</p>
		<textarea style="width:100%;" name="qanswer"></textarea>
		<p>Category</p>
		<input style="width:200px;"  name="cat_id" type="text" value="4" />

		<input value="add" type="submit"/>
	</form>
</div>
	<?php if(isset($updateData)) {?>

	</br></br></br></br>
	<div class="box">
	<h2>Edit</h2>
	<form method="post" action="data.php?update=1">
		<input name="id" type="hidden" value="<?php echo $updateData["qid"]?>"/>
		<?php print_service_center($updateData["service_center_id"]); ?>
		<p>qexplain</p>
		<textarea style="width:100%;" name="qexplain"><?php echo $updateData["qexplain"]?></textarea>
		<p>qanswer</p>
		<textarea style="width:100%;" name="qanswer"><?php echo $updateData["qanswer"]?></textarea>
		<p>Category Id</p>
		<input style="width:200px;"  name="cat_id" type="text" value="<?php echo $updateData["cat_id"]?>" />

		<input name="update" type="submit" value="Update" />
	</form>	
</div>
	<?php } ?>

	
	</br></br></br></br>


	<h2>Table</h2>
	<table border="1" style="width:100%">
		<thead>
			<tr>
				<th>qid</th>
				<th>service_center_id</th>
				<th>service_center_name</th>
				<th>qexplain</th>
				<th>qanswer</th>
				<th>cat_id</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$services = $db->select('select * from kolorob._service_center');
				foreach ($services as $service) {

			?>	<tr>
					<td><?php echo $service["qid"]?></td>
					<td><?php echo $service["service_center_id"]?></td>
					<td><?php echo $service["service_center_name"]?></td>
					<td><?php echo $service["qexplain"]?></td>
					<td><?php echo $service["qanswer"]?></td>
					<td><?php echo $service["cat_id"]?></td>
					<td>
						<a href="data.php?update=<?php echo  $service["qid"]?>">Edit</a>
						<a href="data.php?delete=<?php echo  $service["qid"]?>">Delete</a>
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






