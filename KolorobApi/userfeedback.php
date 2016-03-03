<?php  
//$json=$_GET ['json'];
$json = file_get_contents('php://input');
$obj = json_decode($json);
//echo $json;

//Save
$dbconn = = pg_connect('host=localhost dbname=kolorob user=postgres password=12345') or die('Could not connect:'.pg_last_error());
$username = $_POST["username"];
      $age = $_POST["age"];
       $contactno = $_POST["contactno"];
        $categoryid = $_POST["categoryid"];
        $subcategoryid = $_POST["subcategoryid"];
        $issuetype = $_POST["issuetype"];
        $issuedetails = $_POST["issuedetails"];
  //perform the insert using pg_query
$result = pg_query($dbconn, "INSERT INTO kolorob.user_feedback(username,age,contactno,categoryid,subcategoryid,issuetype,issuedetails,time)
                  VALUES('$username', '$age', '$contactno',' $categoryid','$subcategoryid',' $issuetype',' $issuedetails',now();");

//dump the result object
var_dump($result);

// Closing connection
pg_close($dbconn);
?>

//
  //$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts)); 
  ?>
