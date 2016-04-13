<?php
include("init.php");

$S_data = $db->select("select * from _service_center");

ob_clean();
echo json_encode($S_data);
exit();