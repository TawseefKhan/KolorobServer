<?php
echo "<head>";


echo '<link rel="stylesheet" type="text/css"href="css/style.css">';
 echo "<link href='https://fonts.googleapis.com/css?family=Work+Sans:500,400,800' rel='stylesheet' type='text/css'>";
  echo "<title>Kolorob</title>";
echo " <h3> <img src='css/kolorob_logo_small.png' alt='kolorob logo'/> KOLOROB</h3> ";
 echo "</head>";
session_start();
if((isset($_SESSION['username']) && isset($_SESSION['password'])) ){

echo "<a href='logout.php'> <button class ='btn'> Logout </button> </a>";
echo "<a href='home_page.php'> <button class='btn'>Back</button> </a>";

//$username=$_SESSION['username'];

?>


<!DOCTYPE html>   
<head>  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"  />
<title>Kolorob Webform</title>  
  
<!---<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>---->

<SCRIPT language="javascript">

function addRow(tableID) { 

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
        cell2.innerHTML = "<input type='text'  name='names[]' />";

        var cell3 = row.insertCell(2);
        cell3.innerHTML =  "<input type='text'  name='news_source[]' />";
		
		var cell4 = row.insertCell(3);
        cell4.innerHTML =  "<input type='text'  name='remark[]' />";
		
		
		
	if(tableID != 'dataTable7')
		{
			var cell5 = row.insertCell(4);
			cell5.innerHTML = "<input type='hidden' name='job_types[]' value='"+tableID+"'/>";
		}
	else
		{
			var cell5 = row.insertCell(4);
			cell5.innerHTML =  "<input type='text'  name='job_types[]'/>";
		}
    
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
	
		function addRow1(tableID) { 

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
        cell2.innerHTML = "<input type='number'  name='reference_number[]' value='1' min='1' max='19'/>";
        }

    function deleteRow1(tableID) {
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
	


</SCRIPT> 

<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
<style>  
  
li {  
  
list-style: none;  
color:#00008B;
  
}  

table, th, td {
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
h2 {
    color:#069;
}

  
</style>  
  
</head>  
  
<body>  

    <div class="content">
    <form name="job" action="insert_job.php" method="POST" > 

        <div class="form-section">
            <h2>Enter data into Job Employment table</h2> 
            <table class="form-table">
                <tr>
                    <td width="30%">Node ID</td>
                    <td width="70%"><input type="number" name="identifier_id"/></td>
                </tr>
                <tr>
                    <td>Node Type</td>
                    <td><select name='node_type'> <option value='node'> Node </option> <option value='way'> Way </option> </select></td>
                </tr>
                <tr>
                    <td>Select Area</td>
                    <td><select name='area'> <option value='Paris Road'> Paris Road </option> <option value='Baunia Badh'>Baunia Badh </option> </select></td>
                </tr>
 <tr>
                    <td>Name of Job (বাংলা)</td>
                    <td><input type="text" name="jobname"/></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"/></td>
                </tr>
<tr>
            <td>Road/Line:(বাংলা):</td>
            <td><input type="text" name="road"/></td>
        </tr>
 <tr>
            <td>Block:</td>
            <td><input type="text" name="block"/></td>
        </tr>
                <tr>
                        <td>Latitude</td>
                        <td><input type="number" name="latitude" step="0.000000001"/></td>
                    </tr>
                    <tr>
                        <td>Longitude</td>
                        <td><input type="number" name="longitude" step="0.000000001"/></td>
                    </tr>
<tr> <td> Opening Time: </td> <td> <input type="time" name="otime"/> </td> </tr>
<tr> <td> Break Time(from): </td> <td> <input type="time" name="btime1"/> </td> </tr>
<tr> <td> Break Time(to): </td> <td> <input type="time" name="btime2"/> </td> </tr>
<tr> <td> Closting Time: </td> <td> <input type="time" name="ctime"/> </td> </tr>
<tr> <td> Additional Details about time (বাংলা): </td> <td> <input type="text" name="adtime"/> </td> </tr>
  <tr>
            <td>Landmark (বাংলা): </td>
            <td><input type="text" name="landmark"/></td>
        </tr>
            </table>
        </div>

        <div class="form-section">
            <h2>Subcategory Reference Number(1-19):</h2>
            <INPUT type="button" value="Add Row" onClick="addRow1('dataTable8')" />
            <INPUT type="button" value="Delete Row" onClick="deleteRow1('dataTable8')" />
            <TABLE class="pushed-table" border="1" >
                <thead>
                    <tr>
                        <th>Checkbox</th>
                        <th>Reference Number</th>
                    </tr>
                </thead>
                <tbody id="dataTable8" required></tbody>
            </TABLE>

            <table class="form-table">
                <tr>
                    <td width="30%">Contact Person's Designation</td>
                    <td width="70%"><input type="text" name="contact_person_designation"/></td>
                </tr>
                <tr>
                    <td>Contact No</td>
                    <td><input type="tel" name="contact_no"/></td>
                </tr>
                <tr>
                    <td>Email(*****@****.***)</td>
                    <td><input type="email" name="email_address"/></td>
                </tr>
                <tr>
                    <td>Additional Info</td>
                    <td><input type="text" name="additional_info"/></td>
                </tr>
                <tr>
                    <td>Website Link(http://www.******.***)</td>
                    <td><input type="url" name="website_link" /></td>
                </tr>
                <tr>
                    <td>Facebook Link(http://www.facebook.com/****)</td>
                    <td><input type="url" name="fb_link"/></td>
                </tr>
                <tr>
                    <td>Registered With</td>
                    <td><input type="text" name="registered_with"/></td>
                </tr>
                <tr>
                    <td>Registration Number</td>
                    <td><input type="text" name="registration_no"/></td>
                </tr>
                <tr>
                    <td>Data Collector's Name</td>
                    <td><input type="text" name="data_collector_name"/></td>
                </tr>
                <tr>
                    <td>Date(MM/DD/YYYY)</td>
                    <td><input type="date" name="date"/></td>
                </tr>
            </table>
        </div>

        <div class="form-section">
            <h2>Day Laborer</h2>
            <INPUT type="button" value="Add Row" onClick="addRow('day_laborer')" />
            <INPUT type="button" value="Delete Row" onClick="deleteRow('day_laborer')" />
           
            <TABLE class="pushed-table" border="1" >
                <thead>
                    <tr>
                        <th>Checkbox</th>
                        <th>Names</th>
                        <th>Job News Sources</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody id="day_laborer" required></tbody>
            </TABLE>
        </div>

        <div class="form-section">
            <h2>Self-employed/Handicrafts</h2>
            <INPUT type="button" value="Add Row" onClick="addRow('self_handicraft')" />
            <INPUT type="button" value="Delete Row" onClick="deleteRow('self_handicraft')" />
           
            <TABLE class="pushed-table" border="1" >
                <thead>
                    <tr>
                        <th>Checkbox</th>
                        <th>Names</th>
                        <th>Job News Sources</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody id="self_handicraft" required></tbody>
            </TABLE>
        </div>

        <div class="form-section">
            <h2>Small Jobs/Factory/Garments:</h2>
            <INPUT type="button" value="Add Row" onClick="addRow('small_jobs')" />
            <INPUT type="button" value="Delete Row" onClick="deleteRow('small_jobs')" />
            <TABLE class="pushed-table" border="1" >
                <thead>
                    <tr>
                        <th>Checkbox</th>
                        <th>Names</th>
                        <th>Job News Sources</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody id="small_jobs" required></tbody>
            </TABLE>
        </div>

        <div class="form-section">
            <h2>Official Jobs:</h2>
            <INPUT type="button" value="Add Row" onClick="addRow('official_jobs')" />
            <INPUT type="button" value="Delete Row" onClick="deleteRow('official_jobs')" />
           
            <TABLE class="pushed-table" border="1" >
                <thead>
                    <tr>
                        <th>Checkbox</th>
                        <th>Names</th>
                        <th>Job News Sources</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody id="official_jobs" required></tbody>
            </TABLE>
        </div>

        <div class="form-section">
            <h2>Job Abroad:</h2>
            <INPUT type="button" value="Add Row" onClick="addRow('job_abroad')" />
            <INPUT type="button" value="Delete Row" onClick="deleteRow('job_abroad')" />
           
            <TABLE class="pushed-table" border="1" >
                <thead>
                    <tr>
                        <th>Checkbox</th>
                        <th>Names</th>
                        <th>Job News Sources</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody id="job_abroad" required></tbody>
            </TABLE>
        </div>

        <div class="form-section">
            <h2>Other Jobs:</h2>
            <INPUT type="button" value="Add Row" onClick="addRow('dataTable7')" />
            <INPUT type="button" value="Delete Row" onClick="deleteRow('dataTable7')" />
               
            <TABLE class="pushed-table" border="1" >
                <thead>
                    <tr>
                        <th>Checkbox</th>
                        <th>Free/Costs</th>
                        <th>Responsible Person/Authority</th>
                        <th>Remark</th>
                        <th>Name of the Issue</th>
                    </tr>
                </thead>
                <tbody id="dataTable7" required></tbody>
            </TABLE>
        </div>

   <button style="float:right;" class='btn' type='submit'> Submit </button>
	</form>
</div>

</body>  
  
</html>

<?php

}

else{
		echo "<script type='text/javascript'> location.href = 'login_form.php'</script>";
	}

?>

