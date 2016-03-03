<?php

$dbconn = pg_connect('host=localhost dbname=postgres user=postgres password=12345') or die('Could not connect:'.pg_last_error());

?>