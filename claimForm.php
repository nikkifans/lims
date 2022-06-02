<!DOCTYPE html>
<html>
<head>
<?php
	session_start();
	include'connection.php';
	$policy_Number;
	$username = $_SESSION["username"];
?>
<style>
input[type=text], select {
    width: 100%;
    padding: 8px 12px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

.dropbtn {
  background-color: #000000;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  z-index: 1;
  
}

.dropdown {
  position: relative;
  display: inline-block;
 
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.mx-3{
    /* margin-left:4px !important; */
    margin-right:14px !important;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client's Status</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	
            <div class="navbar-header">
                	
               <!-- <a class="navbar-brand" href="index.php">Insurance</a> -->
            </div>
			<div class="dropdown">
			<div class="header-left">

            </div>
			

                 
  </div>
            <div class="header-right">
			
			<div></div>
			
                 <a href="<?php echo "logout.php" ?>" class="btn btn-danger" title="Logout">Logout</a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                
								  <?php
									
										echo "welcome, ".$_SESSION["username"];
									 
								?>
								
                            <br />
                              
                            </div>
                        </div>

                    </li>    
                     
                </ul>

</div>

        </nav>
		
   
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		    <div class="row">
        <div class="col-md-8">
        <h1 class="page-head-line">Policy Details</h1>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Personal Info</a></li>
  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Policy Info</a></li>
  <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Services</a></li>
  <!-- <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Agent Info</a></li> -->
  <!-- <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Nominee Info</a></li> -->
  <!-- <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Payment Info</a></li> -->
  
</ul>

<!-- Tab panes -->
<div class="tab-content">

<!-- Tab 1 -->
  <div role="tabpanel" class="tab-pane active" id="home">
  <?php
		if($_SERVER["REQUEST_METHOD"] == "GET"){
    	$client_id = $_GET["client_id"];
		}
	
		
		// $client_id = $_SESSION["username"];
	
	            //   PRINTS CLIENT's info
		$sql = "SELECT * from client where client_id='$client_id'";
		$result = $conn->query($sql);
		$policy_id = "";
   
    if ($result->num_rows === 0)
    {
    echo "<h2>No Records Found!</h2>";
    }

		while($row = $result->fetch_assoc()) {
			$images = $row["image"];	     
      $_SESSION['policyno'] = $row["client_id"];       
       
			echo "<label for=\"fname\">POLICY NUMBER</label>";
			echo "<input disabled type=\"text\" client_id=\"fname\" name=\"client_id\" placeholder=\"Your id..\" value=\"$row[client_id]\">";
			echo "<label for=\"fname\">FULL NAME</label>";
			echo "<input disabled type=\"text\" client_id=\"fname\" name=\"name\" placeholder=\"Your Name..\" value=\"$row[name]\">";
			echo "<label for=\"fname\">GENDER</label>";
			echo "<input disabled type=\"text\" client_id=\"fname\" name=\"sex\" placeholder=\"Your Gender..\" value=\"$row[sex]\">";
			echo "<label for=\"fname\">BIRTH DATE</label>";
			echo "<input disabled type=\"text\" client_id=\"fname\" name=\"birth_date\" placeholder=\"Your Birth Date..\" value=\"$row[birth_date]\">";
			echo "<label for=\"fname\">MARITIAL STATUS</label>";
			echo "<input disabled type=\"text\" client_id=\"fname\" name=\"marital_status\" placeholder=\"Your Maritial Status..\" value=\"$row[marital_status]\">";
			//echo "<label for=\"fname\">EMAIL ID</label>";
			// echo "<input disabled type=\"text\" client_id=\"fname\" name=\"nid\" placeholder=\"Your NID..\" value=\"$row[email_id]\">";
       //echo "<input disabled type=\"text\" client_id=\"fname\" name=\"nid\" value=''\"\">";
			echo "<label for=\"fname\">PHONE</label>";
			echo "<input disabled type=\"text\" client_id=\"fname\" name=\"phone\" placeholder=\"Your Phone..\" value=\"$row[phone]\">";
			echo "<label for=\"fname\">ADDRESS</label>";
			echo "<input disabled type=\"text\" client_id=\"fname\" name=\"address\" placeholder=\"Your Address..\" value=\"$row[address]\">";

			// echo "<label for=\"fname\">POLICY ID</label>";
			// echo "<input disabled type=\"text\" client_id=\"fname\" name=\"policy_id\" placeholder=\"policy id..\" value=\"$row[policy_id]\">";
			$policy_id = $row["client_id"];
			$c_id      = $row["client_id"];
			$agent_id  = $row["agent_id"];
			
		}
	?>
  </div>
<!-- end - tab -->

<!-- Tab 2 -->
  <div role="tabpanel" class="tab-pane" id="profile">
		<?php
				$sql = "SELECT * FROM plan where policy_id ='$policy_id'";        
				$result = $conn->query($sql);
        echo "<br>";
        echo '<h2>Policy Information</h2>';
        // echo "<br>";
        echo "<br>";
				echo "<table class=\"table\">\n";
				echo "  <tr>\n";
				echo "    <th>POLICY ID</th>\n";
				echo "    <th>SUM INSURED</th>\n";
				echo "    <th>PLAN TYPE</th>\n";
				echo "    <th>PLAN AMOUNT</th>\n";
				echo "    <th>TOTAL AMOUNT</th>\n";
			 
				echo "  </tr>";
						
				if ($result->num_rows > 0 && $policy_id!=="") {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					
					echo "<tr>\n";
					echo "    <td>".$row["policy_id"]."</td>\n";
					echo "    <td>".$row["sum_insured"]."</td>\n";
					echo "    <td>".$row["plan_type"]."</td>\n";
					echo "    <td>".$row["plan_amount"]."</td>\n";
					echo "    <td>".$row["total_amount"]."</td>\n";
				 
					echo "    </tr>";
					
				  }
        }

        echo "</table>\n";

?>
  </div>
<!-- end - tab -->

<!-- Tab 3 -->
<div role="tabpanel" class="tab-pane" id="tab3">
    
        <!-- /. PAGE WRAPPER  -->       	
	<div class="wrapper">     
    <!-- <br>
    <br>
    <br>
    <br> -->
   <div class="row">
     <div class="col-md-6"> 
     <div class="col-md-12">
                        <h1 class="page-head-line">Services</h1>
        </div>   
    <form action="insertClaim.php" method="post">
      <ul>
        <li>
            <p><strong>Diagnostics Services:</strong></p>
            <input type="hidden" name="policy_id" value="<?php echo $client_id ?>">
            <input type="hidden" name="total_amount" value="0" id="h-total-amount">
            <input type="checkbox" data-name="X-ray" data-amount="300" name="x_ray" value="300" id="xray"/> <label class="mx-3" for="xray">X-ray</label>        
            <input type="checkbox" data-name="MRI-scan" data-amount="6000" name="mri_scan" value="6000" id="mri_scan"/> <label class="mx-3" for="mri_scan">MRI-scan</label>        
            <input type="checkbox" data-name="ct_scan" data-amount="3000" name="ct_scan" value="3000" id="ct_scan"/> <label class="mx-3" for="ct_scan">CT-scan</label>        
            <input type="checkbox" data-name="ultra_sound" data-amount="1250" name="ultra_sound" value="1250" id="ultra_sound"/> <label class="mx-3" for="ultra_sound">Ultra-Sound</label>
        </li>
        <br>
        <li>
            <p><strong>Emergency:</strong></p>
        
            <input type="checkbox" data-name="heartattack" data-amount="20000" name="heartattack" value="20000" id="heartattack"/> <label class="mx-3" for="heartattack">Heart Attack</label>

        
            <input type="checkbox" data-name="brainstroke" data-amount="20000" name="brainstroke" value="20000" id="brainstroke"/> <label class="mx-3" for="brainstroke">Brain Stroke</label>

        
            <input type="checkbox" data-name="accident" data-amount="15000" name="accident" value="15000" id="accident"/> <label class="mx-3" for="accident">Accident</label>

        </li>
        <br>
		<li>
            <p><strong>General:</strong></p>
        
            <input type="checkbox" data-name="cuts" data-amount="1400" name="cuts" value="1400" id="cuts"/> <label class="mx-3" for="cuts">Cuts</label>

        
            <input type="checkbox" data-name="Consultancy" data-amount="500" name="Consultancy" value="500" id="Consultancy"/> <label class="mx-3" for="Consultancy">Consultancy</label>

        
            <input type="checkbox" data-name="burns" data-amount="1500" name="burns" value="1500" id="burns"/> <label class="mx-3" for="burns">Burns</label>


            <input type="checkbox" data-name="Fractures" data-amount="3550" name="Fractures" value="3550" id="Fractures"/> <label class="mx-3" for="Fractures">Fractures</label>

        </li>
        <br>
		<li>
            <p><strong>Maternity:</strong></p>
        
            <input type="checkbox" data-name="maternity" data-amount="35000" name="maternity" value="35000" id="maternity"/> <label class="mx-3" for="maternity">Maternity</label>
        </li>
        <br>	      
    </ul>

    <div class="col-md-6">
    <button name="submit" class="btn btn-primary ml-" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </div>
    </form>
    </div>
     <div class="col-md-6">
     <h1 class="page-head-line">Charges for selected services</h1>
     <table>
       <thead>
       <tr>
         <th>Service</th>
         <th>Amount</th>
       </tr>
       </thead>
       <tbody id="tbody">
       
       </tbody>
      <tfoot>
        <tr>
          <th>Total</th>
          <th class="text-right px-3" id="amount-total">0</th>
        </tr>
      </tfoot>
     </table>
     </div>
   </div>
   
  </div>

</div>
         
<!-- end - tab -->

<!-- Tab 4 -->
  <div role="tabpanel" class="tab-pane" id="settings">
<?php
$sql = "SELECT * FROM nominee where client_id='$client_id'";
$result = $conn->query($sql);
echo "<br>\n";
echo "<br>\n";
echo '<b>Nominees</b>';
echo "<br>\n";
echo "<br>\n";
echo "<table class=\"table\">\n";
  echo "  <tr>\n";
  echo "    <th>NAME</th>\n";
  echo "    <th>GENDER</th>\n";
  echo "    <th>BIRTH DATE</th>\n";
echo "    <th>RELATIONSHIP</th>\n";
echo "    <th>PRIORITY</th>\n";
  echo "    <th>PHONE</th>\n";
  echo "  </tr>";

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
  
  echo "<tr>\n";
  echo "    <td>".$row["name"]."</td>\n";
  echo "    <td>".$row["sex"]."</td>\n";
  echo "    <td>".$row["birth_date"]."</td>\n";
  echo "    <td>".$row["relationship"]."</td>\n";
  echo "    <td>".$row["priority"]."</td>\n";
  echo "    <td>".$row["phone"]."</td>\n";
  $nominee_id = $row["nominee_id"];
  echo "  </tr>";
 
  
}
}
echo "  </table>";

?>
  </div>
<!-- end - tab -->
  
<!-- Tab 5-->
  <div role="tabpanel" class="tab-pane" id="tab5">
<?php
$sql = "SELECT * FROM payment where client_id='$client_id'";
$result = $conn->query($sql);
echo "<br>\n";
echo "<br>\n";
echo '<b>Payments</b>';
echo "<br>\n";
echo "<br>\n";
echo "<table class=\"table\">\n";
  echo "  <tr>\n";
  echo "    <th>RECIPT NO</th>\n";
  echo "    <th>CLIENT ID</th>\n";
  echo "    <th>MONTH</th>\n";
  echo "    <th>AMOUNT</th>\n";
echo "    <th>DUE</th>\n";
  echo "    <th>FINE</th>\n";
  echo "  </tr>";

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
  
  echo "<tr>\n";
  echo "    <td>".$row["recipt_no"]."</td>\n";
  echo "    <td>".$row["client_id"]."</td>\n";
  echo "    <td>".$row["month"]."</td>\n";
  echo "    <td>".$row["amount"]."</td>\n";
  echo "    <td>".$row["due"]."</td>\n";
  echo "    <td>".$row["fine"]."</td>\n";
  echo "  </tr>";
  
}
}

echo "</table>\n";

?>
  </div>
  <!--end - tab  -->
</div>
        </div>
        <!-- <div class="col-md-4">
        <h1 class="page-head-line">Change Request</h1>
        <form action="insertRequest.php" method="post">
        <label for="policyno">Policy No</label>
					<input type="hidden" id="policyno" name="policy_no" value="<?php echo $_SESSION['policyno'] ?>">
        <label for="Request Type">Choose your Request:</label>
					<select name="request" id="request">
						<option value="marital status">Change Marital Status</option>
						<option value="email id">Email ID</option>
						<option value="phone">Phone</option>
						<option value="address">Address</option>
						<option value="nominee name">Nominee Name</option>
						<option value="nominee gender">Nominee Gender</option>
						<option value="nominee dob">Nominee Birth Date</option>
						<option value="nominee relationship">Nominee Relationship</option>
						<option value="nominee priority">Nominee Priority</option>
						<option value="nominee phone">Nominee Phone</option>
            <option value="nominee aadhar">Nominee Aadhar</option>
					</select>
			
					<label for="Change to">Change to</label>
					<input type="text" id="Change to" name="change_to">
			
					<input type="submit" value="Submit">
        </form>
        </div> -->
</div>
</div>
                 

    </div>
	
    <!-- /. WRAPPER  -->

   
  <script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.js"></script>
<script>
  var total = 0;

  function addServiceAmountRow(elementThis,elementId){

  var rowId = "tr"+elementId;
  var serviceName = $(elementThis).data('name');
  var serviceAmount = $(elementThis).data('amount');
  
  if(elementThis.checked) {
  var tableRow = '<tr id="'+rowId+'"><td>'+serviceName+'</td><td class="text-right">'+serviceAmount+'</td></tr>';
  $("#tbody").append(tableRow);
  total += Number(serviceAmount);  
  }else{
    $("#"+rowId).remove();     
    total -= Number(serviceAmount);
  }   
  $("#amount-total").html(total);
  $("#h-total-amount").val(total);
  }


// xray
// $("#xray").on("change",'',function(){
//   addServiceAmountRow(this,"xray")
// })
// // xray
// $("#mri_scan").on("change",function(){
//   addServiceAmountRow(this,"mri_scan")
// })

$(document).on("change",'input[type=checkbox]',function(){
  var elementId = $(this).attr('id');
  addServiceAmountRow(this,elementId);
});

</script>

</body>
</html>
