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
                	
                <a class="navbar-brand" href="index.php">Insurance</a>
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

<?php
$sql = "SELECT * FROM client where client_id='$client_id'";
$result = $conn->query($sql);
echo "<br>\n";
echo "<br>\n";
echo '<b>Payments</b>';
echo "<br>\n";
echo "<br>\n";
echo "<table class=\"table\">\n";
  echo "  <tr>\n";
  echo "    <th>DUE AMOUNT</th>\n";
  echo "  </tr>";

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
  
  echo "<tr>\n";
  echo "    <td>".$row["due_amount"]."</td>\n";
  echo "  </tr>";
  
}
}

echo "</table>\n";
 
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

        </div>
        <div class="col-md-4">
        <h1 class="page-head-line">Due Details</h1>
        <form action="insertRequest.php" method="post">
        <!-- <label for="policyno">Policy No</label> -->
					<input type="hidden" id="policyno" name="policy_no" value="<?php echo $_SESSION['policyno'] ?>">
			
                    <label for="Select Amount Paid">Enter Transaction ID</label>
					<input type="text" id="Select Amount Paid" name="select_amount_paid">
                    <br></br>
                    <label for="Request Type">Choose amount paid</label>
					<select name="request" id="request">
						<option value="500">500</option>
						<option value="1,000">1,000</option>
						<option value="1,500">1,500</option>
						<option value="2,000">2,000</option>
						<option value="2,500">2,500</option>
						<option value="3,000">3,000</option>
						<option value="3,500">3,500</option>
						<option value="4,000">4,000</option>
						<option value="4,500">4,500</option>
						<option value="5,000">5,000</option>
            <!-- <option value="nominee aadhar">Nominee Aadhar</option> -->
					</select>
<br></br>
					<label for="Generated Due Date">Generated Due Date</label>
					<input type="text" id="Generated Due Date" name="generated_due_date">
			
					<input type="submit" value="Submit">
        </form>
        </div>
</div>
</div>
                 

    </div>
	
    <!-- /. WRAPPER  -->

   
  <script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.js"></script>

    <?php 
	
include'connection.php';
	
	
	$id = "";
	if($_SERVER["REQUEST_METHOD"] == "GET")
    {
		
		$request_id = $_GET["request_id"];
        $client_id = $_GET["client_id"];
         
        echo "<br />";
         

        // get request data
        $sql = "SELECT amount,transaction_id FROM request where request_id=$request_id";         

        $result = $conn->query($sql);
        $record = $result->fetch_assoc();
        
        $amount = $record["amount"];
        $transaction_id =  $record["transaction_id"];

        $sql = "UPDATE ";


        switch($requestType) {
            case '500':
                $sql.="client SET due_date = '$requestData'";
                break;
                case '1,000':
                    $sql.="client SET due_date = '$requestData'";
                    break;
                    case '1,500':
                        $sql.="client SET due_date = '$requestData'";
                        break;
                        case '2,000':
                            $sql.="client SET due_date = '$requestData'";
                            break;
                            case '2,500':
                                $sql.="client SET due_date = '$requestData'";
                                break;
                                case '3,000':
                                    $sql.="client SET due_date = '$requestData'";
                                    break;
                                    case '3,500':
                                        $sql.="client SET due_date = '$requestData'";
                                        break;
                                        case '4,000':
                                            $sql.="client SET due_date = '$requestData'";
                                            break;
                                            case '4,500':
                                                $sql.="client SET due_date = '$requestData'";
                                                break;
                                                case '5,000':
                                                    $sql.="client SET due_date = '$requestData'";
                                                    break;
        }

        $sql.= " WHERE client_id = '$client_id'";
        print $sql;


        if ($conn->query($sql) === true) {
			echo "New record updated successfully";
            $sql = "UPDATE request set status = 'completed'  where request_id='$request_id'";
            if($conn->query($sql)=== true){
                header('Location: requests.php');
            }
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
        
         // $result = $conn->query($sql);
         // // update client info
         // $sql = " request_data =  where request_type='$request_id'";
        //  $sql = "SELECT * 
        //  CASE
        //     WHEN request_type = "marital_status" THEN SET request_data WHERE request_id='$request_id'" 
              
        // $sql="INSERT into client request_type=request_data where request_id='$request_id'";
         


        // //change status
        // $sql = "UPDATE request set status = 'completed'  where request_id='$request_id'";
	}
?>



</body>
</html>
