<?php
echo "<head>";


echo '<link rel="stylesheet" type="text/css"href="css/style.css">';
 echo "<link href='https://fonts.googleapis.com/css?family=Work+Sans:500,400,800' rel='stylesheet' type='text/css'>";
  echo "<title>Kolorob</title>";
echo " <h3> <img src='css/kolorob_logo_small.png' alt='kolorob logo'/> KOLOROB</h3> ";
 echo "</head>";
session_start();
if((isset($_SESSION['username']) && isset($_SESSION['password']) )){

echo "<a href='logout.php'> <button class='btn'>Log Out</button> </a>";
echo "<a href='home_page.php'> <button class='btn'>Back </button> </a>";

$username=$_SESSION['username'];

?>
<!DOCTYPE html>   
<head>  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"  />
<title>Kolorob Webform</title>  
 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

  
<!---<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<link href="jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="jquery.min.js"></script>
  <script src="jquery-ui.min.js"></script>---->

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
        cell2.innerHTML = "<input type='text' name='course_name[]'>";

        var cell3 = row.insertCell(2);
        cell3.innerHTML = "<input type='text' name='duration[]'>";

        var cell4 = row.insertCell(3);
        cell4.innerHTML = "<select name='admission_time[]'><option value='Not Available'>Not Available</option><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option><option value='Anytime'>Anytime</option></select>";
		
		
		
		var cell5 = row.insertCell(4);
        cell5.innerHTML =  "<input type='text'  name='cost[]' />";
		
		if(tableID!='dataTable7')
		{
			var cell6 = row.insertCell(5);
			cell6.innerHTML =  "<input type='hidden'  name='course_type[]' value='"+tableID+"'/>";
		}
		else
		{
			var cell6 = row.insertCell(5);
			cell6.innerHTML =  "<input type='text'  name='course_type[]'/>";
		
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
        cell2.innerHTML = "<input type='number'  name='reference_number[]' value='1' min='1' max='26'/>";
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

th, td {
    padding: 2px;
}
h2 {
    color:#069;
}

  
</style>  
  
</head>  
 
<body>  
<div class="content">
<form name="education" action="insert.php" method="POST" > 
<div class="form-section">
    <h2>Enter data into education table</h2>   
    <table class="form-table">
        <tr>
            <td width="40%">Node ID: </td>
            <td width="60%"><input type="number" name="identifier_id"/></td>
        </tr>
        <tr>
            <td>Node Type:</td>
            <td><select name='node_type'> <option value='node'> Node </option> <option value='way'> Way </option> </select></td>
        </tr>
        <tr>
            <td>Institution Name:(ENGLISH)</td> 
            <td><input type="text" name="edu_name_eng"/></td>
        </tr>
        <tr>
            <td>Institution Name:(বাংলা)</td>
            <td><input type="text" name="edu_name_ban"/></td>
        </tr>
        <tr>
            <td>Select Area:</td>
            <td>
                <select name="area">
                    <option value="Paris Road">Paris Road</option>
                    <option value="Baunia Badh">Baunia Badh</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Address (বাংলা):</td>
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
            <td>Latitude:</td>
            <td><input type="number" name="lattitude" step="0.000000001"/></td>
        </tr>
        <tr>
            <td>Longitude:</td>
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


  
<!----?php 
$db = pg_connect('host=localhost dbname=kolorob_shoaib user=postgres password=shoaib');
$query_id1 = "select * from kolorob.education_subcategory";
$result_id2 = pg_query($query_id1);
  
echo "<select name='edu_subcategory'>";
while ($id_row1 = pg_fetch_assoc($result_id2)) 
  {
   echo "<option value='". $id_row1['edu_subcategory_name'] ."'>".$id_row1['edu_subcategory_name']."</option>";
  }
echo "</select>";
?>---->
<div class="form-section">
    <h2>Subcategory Reference Number(1-26):</h2>

    <div class="sub-table">
        <INPUT type="button" value="Add Row" onClick="addRow1('dataTable8')" />
        <INPUT type="button"  value="Delete Row" onClick="deleteRow1('dataTable8')" />
                       
        <TABLE  border="1" >
            <thead>
                <tr>
                    <th>Checkbox</th>
                    <th>Reference Number</th>
                </tr>
            </thead>
            <tbody id="dataTable8" required></tbody>
        </TABLE>
    </div>

    <table class="form-table">
        <tr>
            <td width="40%">Contact Person's Designation:(বাংলা) </td>
            <td width="60%"><input type="text" name="contact_person_designation"/></td>
        </tr>
        <tr>
            <td>Contact No:</td>
            <td><input type="number" name="contact_no"/></td>
        </tr>
        <tr>
            <td>Email(*****@****.***):</td>
            <td><input type="email" name="email_address"/></td>
        </tr>
        <tr>
            <td>Select a Education Type:</td>
            <td>
                <select name="edtype">
                    <option value="Co-education">Co-education</option>
                    <option value="Boys">Boys</option>
                    <option value="Girls">Girls</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Select a Shift:</td>
            <td>
                <select name="shift">
                    <option value="Double Shift">Double Shift</option>
                    <option value="Morning Shift">Morning Shift</option>
                    <option value="Day Shift">Day Shift</option>
                    <option value="Tripple Shift">Tripple Shift</option>
                    <option value="Night Shift">Night Shift</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Select a Hostel Facility:</td>
            <td>
                <select name="hostel_facility">
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Select a Transport Facility:</td>
            <td>
                <select name="transport_facility">
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Select a Canteen Facility:</td>
            <td>
                <select name="canteen_facility">
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Playground:</td>
            <td>
                <select name="Playground">
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Website Link(http://www.******.***):</td>
            <td><input type="url" name="website_link" /></td>
        </tr>
        <tr>
            <td>Facebook Link(http://www.facebook.com/****):</td>
            <td><input type="url" name="fb_link"/></td>
        </tr>
        <tr>
            <td>Registered With:</td>
            <td><input type="text" name="registered_with"/></td>
        </tr>
        <tr>
            <td>Registration Number:</td>
            <td><input type="text" name="registration_no"/></td>
        </tr>
        <tr>
            <td>Data Collector's Name:</td>
            <td><input type="text" name="data_collector_name"/></td>
        </tr>
        <tr>
            <td>Date(MM/DD/YYYY):</td>
            <td><input type="date" name="date"/></td>
        </tr>
        <tr>
            <td>Additional Info/ Remark: </td>
            <td><input type="text" name="additional_info"/></td>
        </tr>

    </table>
</div>



<div class="form-section">
    <h2>Tuition Fee Details: </h2>
    <table class="tution-fees">
        <tr>
           <th> Level </th>
           <th> Free(Yes/No) </th>
           <th> Stipend speciality </th>
           <th> Stipend type </th>
           <th> Stipend details (বাংলা) </th>
           <th> Max fee(BDT)</th>
           <th> Min fee(BDT)</th>
           <th> Coaching fee(BDT) (***-***) </th>
           <th> Additional Yearly fee(BDT)</th>
        </tr>
        <tr>
            <td>Pre-school:</td>
            <td>
               <select name="pre_school_free">
                  <option value=""></option>
                  <option value="No">No</option>
                  <option value="Yes">Yes</option>
               </select>
            </td>
            <td>
               <select name="pre_school_stipend_speciality">
                  <option value="No">Not Available</option>
                  <option value="free_for_handicapped">Free for handicapped</option>
                  <option value="free_for_orphan">Free for orphan</option>
                  <option value="free_for_poor">Free for poor</option>
                  <option value="all">All</option>
               </select>
            </td>
            <td>
               <select name="pre_school_stipend_type">
                  <option value="No">Not Available</option>
                  <option value="food">Food</option>
                  <option value="books">Books</option>
                  <option value="money">Money</option>
                  <option value="others">Others</option>
               </select>
            </td>
            <td><input type='text' name='pre_school_stipend_details'/> </td>
            <td><input type='number' name='pre_school_max_fee' step="0.01" min="0"/> </td> 
            <td><input type='number' name='pre_school_min_fee' step="0.01" min="0"/> </td> 
            <td><input type='text' name='pre_school_coaching_fee'/> </td>  
            <td><input type='text' name='pre_school_additional_fee'/> </td>  
        </tr>
        <tr>
           <td>I-V:</td>
           <td>
              <select name="i_v_free">
                 <option value=""></option>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
              </select>
           </td>
           <td>
              <select name="i_v_stipend_speciality">
                 <option value="No">Not Available</option>
                 <option value="free_for_handicapped">Free for handicapped</option>
                 <option value="free_for_orphan">Free for orphan</option>
                 <option value="free_for_poor">Free for poor</option>
                 <option value="all">All</option>
              </select>
           </td>
           <td>
              <select name="i_v_stipend_type">
                 <option value="No">Not Available</option>
                 <option value="food">Food</option>
                 <option value="books">Books</option>
                 <option value="money">Money</option>
                 <option value="others">Others</option>
              </select>
           </td>
           <td><input type='text' name='i_v_stipend_details'/> </td>
           <td><input type='number' name='i_v_max_fee' step="0.01" min="0"/> </td>
           <td><input type='number' name='i_v_min_fee' step="0.01" min="0"/> </td>
           <td><input type='text' name='i_v_coaching_fee' /> </td>
           <td><input type='text' name='i_v_additional_fee'/> </td>
        </tr>
        <tr>
           <td>VI-X:</td>
           <td>
              <select name="vi_x_free">
                 <option value=""></option>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
              </select>
           </td>
           <td>
              <select name="vi_x_stipend_speciality">
                 <option value="No">Not Available</option>
                 <option value="free_for_handicapped">Free for handicapped</option>
                 <option value="free_for_orphan">Free for orphan</option>
                 <option value="free_for_poor">Free for poor</option>
                 <option value="all">All</option>
              </select>
           </td>
           <td>
              <select name="vi_x_stipend_type">
                 <option value="No">Not Available</option>
                 <option value="food">Food</option>
                 <option value="books">Books</option>
                 <option value="money">Money</option>
                 <option value="others">Others</option>
              </select>
           </td>
           <td><input type='text' name='vi_x_stipend_details'/> </td>
           <td><input type='number' name='vi_x_max_fee' step="0.01" min="0"/> </td>
           <td><input type='number' name='vi_x_min_fee' step="0.01" min="0"/> </td>
           <td><input type='text' name='vi_x_coaching_fee' /> </td>
           <td><input type='text' name='vi_x_additional_fee' /> </td>
        </tr>
        <tr>
           <td>XI-XII:</td>
           <td>
              <select name="xi_xii_free">
                 <option value=""></option>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
              </select>
           </td>
           <td>
              <select name="xi_xii_stipend_speciality">
                 <option value="No">Not Available</option>
                 <option value="free_for_handicapped">Free for handicapped</option>
                 <option value="free_for_orphan">Free for orphan</option>
                 <option value="free_for_poor">Free for poor</option>
                 <option value="all">All</option>
              </select>
           </td>
           <td>
              <select name="xi_xii_stipend_type">
                 <option value="No">Not Available</option>
                 <option value="food">Food</option>
                 <option value="books">Books</option>
                 <option value="money">Money</option>
                 <option value="others">Others</option>
              </select>
           </td>
           <td><input type='text' name='xi_xii_stipend_details'/> </td>
           <td><input type='number' name='xi_xii_max_fee' step="0.01" min="0"/> </td>
           <td><input type='number' name='xi_xii_min_fee' step="0.01" min="0"/> </td>
           <td><input type='text' name='xi_xii_coaching_fee' /> </td>
           <td><input type='text' name='xi_xii_additional_fee'/> </td>
        </tr>
        <tr>
           <td>University:</td>
           <td>
              <select name="uni_free">
                 <option value=""></option>
                 <option value="No">No</option>
                 <option value="Yes">Yes</option>
              </select>
           </td>
           <td>
              <select name="uni_stipend_speciality">
                 <option value="No">Not Available</option>
                 <option value="free_for_handicapped">Free for handicapped</option>
                 <option value="free_for_orphan">Free for orphan</option>
                 <option value="free_for_poor">Free for poor</option>
                 <option value="all">All</option>
              </select>
           </td>
           <td>
              <select name="uni_stipend_type">
                 <option value="No">Not Available</option>
                 <option value="food">Food</option>
                 <option value="books">Books</option>
                 <option value="money">Money</option>
                 <option value="others">Others</option>
              </select>
           </td>
           <td><input type='text' name='uni_stipend_details'/> </td>
           <td><input type='number' name='uni_max_fee' step="0.01" min="0"/> </td>
           <td><input type='number' name='uni_min_fee' step="0.01" min="0"/> </td>
           <td><input type='text' name='uni_coaching_fee' /> </td>
           <td><input type='text' name='uni_additional_fee'/> </td>
        </tr>
    </table>

    <h4>Total Number of </h4>
    <p>
        Students:<input type="number" name="total_students" min="0" value='0'/>
        &nbsp; &nbsp; 
        Teachers:<input type="number" name="total_teachers" min="0" value='0'/>
        &nbsp; &nbsp; 
        Classes:<input type="number" name="total_classes" min="0" value='0'/>
    </p>
</div><!--form section ends-->


<div class="form-section trainings">
    <h2>Computer Training:</h2>
    <INPUT type="button" value="Add Row" onClick="addRow('Computer_Training')" />
    <INPUT type="button" value="Delete Row" onClick="deleteRow('Computer_Training')" />
    <TABLE  border="1" >
       <thead>
          <tr>
             <th>Checkbox</th>
             <th>Course name</th>
             <th>Duration</th>
             <th>Admission time</th>
             <th>Cost</th>
          </tr>
       </thead>
       <tbody id="Computer_Training" required></tbody>
    </TABLE>
    <h2>Handicraft Training:</h2>
    <INPUT type="button" value="Add Row" onClick="addRow('Handicraft_Training')" />
    <INPUT type="button" value="Delete Row" onClick="deleteRow('Handicraft_Training')" />
    <TABLE  border="1" >
       <thead>
          <tr>
             <th>Checkbox</th>
             <th>Course name</th>
             <th>Duration</th>
             <th>Admission time</th>
             <th>Cost</th>
          </tr>
       </thead>
       <tbody id="Handicraft_Training" required></tbody>
    </TABLE>
    <h2>Vocational Training:</h2>
    <INPUT type="button" value="Add Row" onClick="addRow('Vocational_Training')" />
    <INPUT type="button" value="Delete Row" onClick="deleteRow('Vocational_Training')" />
    <TABLE  border="1" >
       <thead>
          <tr>
             <th>Checkbox</th>
             <th>Course name</th>
             <th>Duration</th>
             <th>Admission time</th>
             <th>Cost</th>
          </tr>
       </thead>
       <tbody id="Vocational_Training" required></tbody>
    </TABLE>
    <h2>Boutique Training:</h2>
    <INPUT type="button" value="Add Row" onClick="addRow('Boutique_Training')" />
    <INPUT type="button" value="Delete Row" onClick="deleteRow('Boutique_Training')" />
    <TABLE  border="1" >
       <thead>
          <tr>
             <th>Checkbox</th>
             <th>Course name</th>
             <th>Duration</th>
             <th>Admission time</th>
             <th>Cost</th>
          </tr>
       </thead>
       <tbody id="Boutique_Training" required></tbody>
    </TABLE>
    <h2>Language Training:</h2>
    <INPUT type="button" value="Add Row" onClick="addRow('Language_Training')" />
    <INPUT type="button" value="Delete Row" onClick="deleteRow('Language_Training')" />
    <TABLE  border="1" >
       <thead>
          <tr>
             <th>Checkbox</th>
             <th>Course name</th>
             <th>Duration</th>
             <th>Admission time</th>
             <th>Cost</th>
          </tr>
       </thead>
       <tbody id="Language_Training" required></tbody>
    </TABLE>
    <h2>Coaching  Training:</h2>
    <INPUT type="button" value="Add Row" onClick="addRow('Coaching_Training')" />
    <INPUT type="button" value="Delete Row" onClick="deleteRow('Coaching_Training')" />
    <TABLE  border="1" >
       <thead>
          <tr>
             <th>Checkbox</th>
             <th>Course name</th>
             <th>Duration</th>
             <th>Admission time</th>
             <th>Cost</th>
          </tr>
       </thead>
       <tbody id="Coaching_Training" required></tbody>
    </TABLE>
    <h2>Paramedical Training:</h2>
    <INPUT type="button" value="Add Row" onClick="addRow('Paramedical_Training')" />
    <INPUT type="button" value="Delete Row" onClick="deleteRow('Paramedical_Training')" />
    <TABLE  border="1" >
       <thead>
          <tr>
             <th>Checkbox</th>
             <th>Course name</th>
             <th>Duration</th>
             <th>Admission time</th>
             <th>Cost</th>
          </tr>
       </thead>
       <tbody id="Paramedical_Training" required></tbody>
    </TABLE>
    <h2>Others :</h2>
    <INPUT type="button" value="Add Row" onClick="addRow('dataTable7')" />
    <INPUT type="button" value="Delete Row" onClick="deleteRow('dataTable7')" />
    <TABLE border="1">
       <thead>
          <tr>
             <th>Checkbox</th>
             <th>Course name</th>
             <th>Duration</th>
             <th>Admission time</th>
             <th>Cost</th>
             <th>Training Name</th>
          </tr>
       </thead>
       <tbody id="dataTable7" required></tbody>
    </TABLE>


</div>


<div class="form-section">


<h2> Result Details: </h2>
<table>
   <tr>
      <th> Name of Exam. </th>
      <th> Number of Students </th>
      <th> Passed </th>
      <th> Golden(A+) </th>
      <th> A+ </th>
   </tr>
   <tr>
      <td>PEC:</td>
      <td><input type='number' name='pec_students' min="0" value='0'/> </td>
      <td><input type='number' name='pec_passed' min="0" value='0'/> </td>
      <td><input type='number' name='pec_golden' min="0" value='0'/> </td>
      <td><input type='number' name='pec_normal' min="0" value='0'/> </td>
      </td> 
   </tr>
   <tr>
      <td>JSC:</td>
      <td><input type='number' name='JSC_students' min="0" value='0'/> </td>
      <td><input type='number' name='JSC_passed' min="0" value='0'/> </td>
      <td><input type='number' name='JSC_golden' min="0" value='0'/> </td>
      <td><input type='number' name='JSC_normal' min="0" value='0'/> </td>
   </tr>
   <tr>
      <td>SSC:</td>
      <td><input type='number' name='SSC_students' min="0" value='0'/> </td>
      <td><input type='number' name='SSC_passed' min="0" value='0'/> </td>
      <td><input type='number' name='SSC_golden' min="0" value='0'/> </td>
      <td><input type='number' name='SSC_normal' min="0" value='0'/> </td>
   </tr>
   <tr>
      <td>HSC:</td>
      <td><input type='number' name='HSC_students' min="0" value='0'/> </td>
      <td><input type='number' name='HSC_passed' min="0" value='0'/> </td>
      <td><input type='number' name='HSC_golden' min="0" value='0'/> </td>
      <td><input type='number' name='HSC_normal' min="0" value='0'/> </td>
   </tr>
   <tr>
      <td>SSC(VOC):</td>
      <td><input type='number' name='SSC_v_students' min="0" value='0'/> </td>
      <td><input type='number' name='SSC_v_passed' min="0" value='0'/> </td>
      <td><input type='number' name='SSC_v_golden' min="0" value='0'/> </td>
      <td><input type='number' name='SSC_v_normal' min="0" value='0'/> </td>
   </tr>
   <tr>
      <td>HSC(VOC):</td>
      <td><input type='number' name='HSC_v_students' min="0" value='0'/> </td>
      <td><input type='number' name='HSC_v_passed' min="0" value='0'/> </td>
      <td><input type='number' name='HSC_v_golden' min="0" value='0'/> </td>
      <td><input type='number' name='HSC_v_normal' min="0" value='0'/> </td>
   </tr>
   <tr>
      <td>Alim:</td>
      <td><input type='number' name='Alim_students' min="0" value='0'/> </td>
      <td><input type='number' name='Alim_passed' min="0" value='0'/> </td>
      <td><input type='number' name='Alim_golden' min="0" value='0'/> </td>
      <td><input type='number' name='Alim_normal' min="0" value='0'/> </td>
   </tr>
   <tr>
      <td>Fazil:</td>
      <td><input type='number' name='Fazil_students' min="0" value='0'/> </td>
      <td><input type='number' name='Fazil_passed' min="0" value='0'/> </td>
      <td><input type='number' name='Fazil_golden' min="0" value='0'/> </td>
      <td><input type='number' name='Fazil_normal' min="0" value='0'/> </td>
   </tr>
   <tr>
      <td>Kamil:</td>
      <td><input type='number' name='Kamil_students' min="0" value='0'/> </td>
      <td><input type='number' name='Kamil_passed' min="0" value='0'/> </td>
      <td><input type='number' name='Kamil_golden' min="0" value='0'/> </td>
      <td><input type='number' name='Kamil_normal' min="0" value='0'/> </td>
   </tr>
   <tr>
      <td>A-Level:</td>
      <td><input type='number' name='a_level_students' min="0" value='0'/> </td>
      <td><input type='number' name='a_level_passed' min="0" value='0'/> </td>
      <td><input type='number' name='a_level_golden' min="0" value='0'/> </td>
      <td><input type='number' name='a_level_normal' min="0" value='0'/> </td>
   </tr>
   <tr>
      <td>O-Level:</td>
      <td><input type='number' name='o_level_students' min="0" value='0'/> </td>
      <td><input type='number' name='o_level_passed' min="0" value='0'/> </td>
      <td><input type='number' name='o_level_golden' min="0" value='0'/> </td>
      <td><input type='number' name='o_level_normal' min="0" value='0'/> </td>
   </tr>
</table>

</div>
<button style="float:right;" class='btn' type='submit' name='submit_button'> Submit </button>
</form>
</div><!--Content ends-->


<!----<li>Enter Training:</li><li><input type="text" name="course_provided" /></li><br /><br />--->
<!---<input type="checkbox" name="course_check_list[]" value="Computer Training">Computer Training<br />
<input type="checkbox" name="course_check_list[]" value="Handicraft Training">Handicraft Training<br />
<input type="checkbox" name="course_check_list[]" value="Vocational Training">Vocational Training<br />
<input type="checkbox" name="course_check_list[]" value="Boutique Training">Boutique Training<br />
<input type="checkbox" name="course_check_list[]" value="Language Training">Language Training<br />
<input type="checkbox" name="course_check_list[]" value="Coaching  Training">Coaching  Training<br />
<input type="checkbox" name="course_check_list[]" value="Paramedical Training">Paramedical Training<br />
<input type="checkbox" name="course_check_list[]" value="Others ">Others (Please Specify):<br /><br />-->



</body>  
 
</html>  
<?php

}

else{
		echo "<script type='text/javascript'> location.href = 'login_form.php'</script>";
	}

?>



