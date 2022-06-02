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
                	
                <a class="navbar-brand" href="claimsHome.php">Insurance</a>
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
			echo "<label for=\"fname\">EMAIL ID</label>";
			// echo "<input disabled type=\"text\" client_id=\"fname\" name=\"nid\" placeholder=\"Your NID..\" value=\"$row[email_id]\">";
            echo "-";
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
						
				if ($result->num_rows > 0) {
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
  
   <div class="row">     
     <div class="col-md-6">
     <h4 class="page-head-line">Charges for selected services</h4>
      
     <?php
             $array_ignore_keys = array('submit','policy_id','total_amount');

             $sql = "SELECT * FROM services where policy_number='$client_id'";
             $result = $conn->query($sql);
             if ($result->num_rows > 0) {               
                echo "<table>\n";
                echo "<thead>\n";
                echo "<tr>\n";
                echo "  <th>Service</th>\n";
                echo "  <th>Amount</th>\n";
                echo "</tr>\n";
                echo "</thead>\n";
                echo "<tbody>\n";
                while($row = $result->fetch_assoc()) {  

                  $services = unserialize($row["services"]);
                   if($services !== false){
                    foreach($services as $key => $service){
                      echo "<tr>\n";
                      if(!in_array($key,$array_ignore_keys)){
                          echo "<td>".$key."</td>";
                          echo "<td class='text-right px-3'>".$service."</td>";                                                          
                      }     
                      echo "</tr>\n";                                          
                  }
                  }                  
                    echo "<tfoot>\n";
                    echo "<tr>\n";
                    echo "<th>Total</th>\n";
                    echo "<th class='text-right px-3' id='amount-total'>".$row["total_amount"]."</th>\n";
                    echo "</tr>\n";
                    echo "<tfoot>\n";
                }

                echo "</tbody>\n";                   
                echo "</table>\n";
            }


     ?>
     <br>

<!-- hospital -->
<h4 class="page-head-line">Hospital Details</h4>
<?php
$sql = "SELECT * FROM  hospital_details where policy_number='$client_id'";
$result = $conn->query($sql);
echo "<br>\n";
echo "<br>\n";
echo '<b>DETAILS OF HOSPITALISATION</b>';
echo "<br>\n";
echo "<table class=\"table\">\n";
echo "  <tr>\n";
echo "    <th>Name_of_Hospital</th>\n";
echo "    <th>Room_category_occupied</th>\n";
echo "    <th>Hospitalisation_due_to</th>\n";
echo "      <th>Date_of_Injury_Date_of_Delivery</th>\n";
echo "      <th>Date_of_Admission</th>\n";
echo "    <th>Date_of_Discharge</th>\n";
echo "    <th>Reported_to_Police</th>\n";
echo "  </tr>";

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
  
  echo "<tr>\n";
  echo "    <td>".$row["Name_of_Hospital"]."</td>\n";
  echo "    <td>".$row["Room_category_occupied"]."</td>\n";
  echo "    <td>".$row["Hospitalisation_due_to"]."</td>\n";
  echo "    <td>".$row["Date_of_Injury_Date_of_Delivery"]."</td>\n";
  echo "    <td>".$row["Date_of_Admission"]."</td>\n";
  echo "    <td>".$row["Date_of_Discharge"]."</td>\n";
  echo "    <td>".$row["Reported_to_Police"]."</td>\n";
//   $nominee_id = $row["nominee_id"];
  echo "  </tr>";
 
  
}
}
echo "  </table>";

// table 2
echo '<b>DETAILS OF INSURED PERSON HOSPITALISED</b>';
echo "<br>\n";
echo "<table class=\"table\">\n";
echo "  <tr>\n";
echo "    <th>Title</th>\n";
echo "    <th>Name</th>\n";
echo "    <th>Gender</th>\n";
echo "      <th>Relationship_with_Primary_Insured</th>\n";
echo "      <th>Occupation</th>\n";
echo "    <th>Address</th>\n";
echo "    <th>Phone_No</th>\n";
echo "    <th>Email</th>\n";
echo "    <th>policy_number</th>\n";
echo "  </tr>";

$sql = "SELECT * FROM  hospital_details where policy_number='$client_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
  
  echo "<tr>\n";
  echo "    <td>".$row["Title"]."</td>\n";
  echo "    <td>".$row["Name"]."</td>\n";
  echo "    <td>".$row["Gender"]."</td>\n";
  echo "    <td>".$row["Relationship_with_Primary_Insured"]."</td>\n";
  echo "    <td>".$row["Occupation"]."</td>\n";
  echo "    <td>".$row["Address"]."</td>\n";
  echo "    <td>".$row["Phone_No"]."</td>\n";
  echo "    <td>".$row["Email"]."</td>\n";
  echo "    <td>".$row["policy_number"]."</td>\n";
//   $nominee_id = $row["nominee_id"];
  echo "  </tr>";
 
  
}
}
echo "  </table>";


?>

<a href="approveClaim.php?client_id=<?php echo $client_id ?>" name="Approve" class="btn btn-primary ml-" type="submit" id="contact-Approve" data-Approve="...Sending">Approve</a>
<a href="declineClaim.php?client_id=<?php echo $client_id ?>" name="Decline" class="btn btn-danger ml-" type="submit" id="contact-Decline" data-Decline="...Sending">Decline</a>

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
echo "      <th>RELATIONSHIP</th>\n";
echo "      <th>PRIORITY</th>\n";
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
 

</body>
</html>
