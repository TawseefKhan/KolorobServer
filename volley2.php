<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $username = $_POST['username'];
 $userage = $_POST['userage'];
 $usercontact = $_POST['usercontact'];
$issuetype = $_POST['issuetype'];
 $issuedetails = $_POST['issuedetails'];
 $nodeid = $_POST['nodeid'];
 $categoryid = $_POST['categoryid'];

 require_once('connect.php');
 
$result2 = pg_query($dbconn,"INSERT INTO kolorob.user_feedbackv2 (username,contactno,issuetype,issuedetails,nodeid,catiid,feedback_time,userage) VALUES ('$username','$usercontact','$issuetype','$issuedetails','$nodeid','$categoryid',now(),'$userage' );");
 
 
 if($result2!=null) {
 echo "Successfully submitted feedback";
 }else{
 echo "Please enter information carefully!";
 
 }
 }else{
echo 'error';
}
