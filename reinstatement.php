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
                	
                <a class="navbar-brand" href="requesthome.php">Insurance</a>
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
<!-- <ul class="nav nav-tabs" role="tablist">
  <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Payment Info</a></li>
</ul> -->

<!-- Tab panes -->
<div class="tab-content">

  
<!-- Tab 5-->
  <!-- <div role="tabpanel" class="tab-pane" id="tab5"> -->
<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
$client_id = $_GET["client_id"];

}
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $client_id = $_POST["client_id"];
  
  }
  $sql = "SELECT payment.recipt_no,payment.client_id,payment.start_date,payment.amount,payment.expiry_date,payment.fine, payment.agent_id,plan.total_amount,client.due_amount,plan.sum_insured FROM `payment` left JOIN plan on payment.client_id = plan.policy_id LEFT JOIN `client` ON payment.client_id = client.client_id where payment.client_id='$client_id'";
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
  echo "    <th>ANNUAL PAYMENT</th>\n";
  echo "    <th>START DATE</th>\n";
  echo "    <th>TOTAL AMOUNT</th>\n";
  echo "    <th>EXPIRY DATE</th>\n";
  echo "    <th>FINE</th>\n";
  echo "    <th>DUE AMOUNT</th>\n";

  echo "  </tr>";

if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc()) {

    $date=date_create($row["start_date"]);
    date_add($date,date_interval_create_from_date_string("365 days"));
    $expiry_date =  date_format($date,"Y-m-d");
    $expiry_secs  =  strtotime($expiry_date) - strtotime(date("Y-m-d"));
    $expiry_date =  $expiry_secs / 86400;
    // echo $expiry_date;

  echo "<tr>\n";
  echo "    <td>".$row["recipt_no"]."</td>\n";
  echo "    <td>".$row["client_id"]."</td>\n";
  echo "    <td>".$row["total_amount"]."</td>\n";
  echo "    <td>".$row["start_date"]."</td>\n";
  echo "    <td>".$row["sum_insured"]."</td>\n";
  echo "    <td>".$row["expiry_date"]."</td>\n";
  echo "    <td>".$row["fine"]."</td>\n";
  // echo "    <td>".$expiry_date."</td>\n";
  echo "    <td>".$row["total_amount"]."</td>\n";
  echo "  </tr>";
  
}
}

echo "</table>\n";

?>
  <!-- </div> -->
  <!--end - tab  -->
</div>
                 

    </div>
    <div class="col-md-4">
      <?php
    $sql = "SELECT client_id from client where client_id='$username'";
	$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
		if($username == $row["client_id"]){

//            $sql1 = "SELECT  DATE_ADD('start date', INTERVAL 90 DAY) AS due_date,amount AS due_amount FROM payment WHERE  client_id = 1511986023 order by 'start date' DESC LIMIT 1";
// //            $sql1 = "SELECT * from client";

//            $result1 = $conn->query($sql1);
//            while($row1 = $result1->fetch_assoc()) {
//                echo $row1['due_date'];
//            }

//            echo "testttt";
// //            echo $result1;

            ?>
<!--   todo   here           -->
            <?php
             $sql = "SELECT payment.expiry_date,plan.total_amount FROM `payment` left JOIN plan on payment.client_id = plan.policy_id LEFT JOIN `client` ON payment.client_id = client.client_id where payment.client_id='$client_id'";
            //$sql = "SELECT  DATE_ADD(`start_date`, INTERVAL 90 DAY) AS due_date,amount AS due_amount FROM payment WHERE  client_id = '$client_id' order by `start_date` DESC LIMIT 1";
//             $sql = "SELECT payment.client_id, DATE_ADD(payment.start_date, INTERVAL 90 DAY) AS due_date,client.due_amount AS due_amount FROM payment LEFT JOIN client ON client.client_id = payment.client_id WHERE  payment.client_id = '$client_id' order by payment.start_date DESC LIMIT 1";
            $result = $conn->query($sql);
            // if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $due_date =  $row['expiry_date'];
                $due_amount = $row['total_amount'];
            
// //
//             }else{
//               $due_date =  "NA";
//               $due_amount = "NA";
//             }

            ?>



<!--   todo   here           -->




<h1 class="page-head-line">Due Details</h1>
        <form action="insertRequest.php" method="post">
        <!-- <label for="policyno">Policy No</label> -->
					<input type="hidden" id="policyno" name="policy_no" value="<?php echo $_SESSION['policyno'] ?>">
			
                    <label for="Select Amount Paid">Due Amount</label>
					<input type="text" disabled id="Select Amount Paid" name="select_amount_paid" value="<?php echo $due_amount ?>">
          <!-- $_SESSION['policyno'] = $row["client_id"];        -->
       
                    <!-- <br></br>
                      <label for="Request Type">Premium Plan</label>
					<select name="request" id="request">
						<option value="Gold">Gold</option>
						<option value="Platinum">Platinum</option>
						<option value="Silver">Silver</option>
            <option value="nominee aadhar">Nominee Aadhar</option> -->
					<!-- </select> -->
<br></br>
					<label for="Generated Due Date">Generated Due Date</label>
					<input type="text"  disabled id="Generated Due Date" name="generated_due_date" value="<?php echo $due_date ?>" >

					<!-- <input type="submit" value="Submit"> -->
        </form>
    <?php
			// echo "welcome you have successfully logeed in";
			// $_SESSION["username"] = $username;		
			// header("Location: policy_servicing.php");
		}
    }
    ?>
    </div>
    </div>	
    </div>
    <!-- /. WRAPPER  -->

   
  <script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.js"></script>


</body>
</html>
