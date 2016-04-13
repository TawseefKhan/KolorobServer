<?php
include("init.php");

function cleanStr($str){
	return  pg_escape_string($str);
}

//save
if(isset($_POST["question"]))
{

	if($_POST["service"]=="create_new"){
		$temp = $db->select("select service_center_id from kolorob.service_center where service_center_name = '" . cleanStr($_POST["service_new"]) . "'");
		if(isset($temp[0]))
		{
			$sid = $temp[0]["service_center_id"];
		}
		else{	
			$db->insert("service_center", array("service_center_name"=>cleanStr($_POST["service_new"])));
			$sid=$db->lastInsertId("kolorob.service_center_service_center_id_seq");
		}

	}
	else{
		$sid = $_POST["service"];
	}


	$db->insert("service_center_data", array("qexplain"=>cleanStr($_POST["question"]), "qanswer"=>cleanStr($_POST["answer"]), "service_center_id"=> $sid,"service_center_name"=> $_POST["service_new"]));
}




$S_data = $db->select("select * from kolorob.service_center");

?>

<html>
<head>
	<title>input kolorob</title>
</head>
<body>

	<form style="width:500px; display:table; margin:auto; border:1px solid; padding:10px;" action="index.php" Method="post">
		<select name="service">
			<option value="create_new">Create New</option>
			<?php
			foreach ($S_data as $value) {
				?>
				<option value="<?php echo $value["service_center_id"]; ?>"><?php echo $value["service_center_name"]; ?></option>
			<?php
			}
			?>
			
		</select>
		<p style="display:inline;">OR</p>
		<input type="text" value="none" name="service_new"/>
		<p>Question</p>
		<textarea style="width:100%;" name="question"></textarea>
		<p>Answer</p>
		<textarea style="width:100%;" name="answer"></textarea>

		<input type="submit" />
	</form>
<pre>
	<?php
		var_dump($db->select("select * from kolorob._service_center"));
	?>
</pre>
<?php
	echo "<pre>";
    var_dump( $db->errorInfo() );
    echo "</pre>";
?>
</body>
</html>
