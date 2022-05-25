                    
                
                <!-- /. ROW  -->
                <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $client_id = $_POST["client_id"];
}
	
		
		// $client_id = $_SESSION["username"];
	
	            //   PRINTS CLIENT's info
	$sql = "SELECT * from client where client_id='$client_id'";
	$result = $conn->query($sql);
	$policy_id = "";
    if ($result->num_rows > 0)
    {
     
	while($row = $result->fetch_assoc()) {
		$images = $row["image"];
?>

			<!-- <img class="profile-user-img img-responsive"  width="200px" height="200px" src="<?php echo "../project/uploads/".$images ?>" alt="User profile picture"> -->
<?php
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
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"nid\" placeholder=\"Your NID..\" value=\"$row[email_id]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"phone\" placeholder=\"Your Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"fname\">ADDRESS</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"address\" placeholder=\"Your Address..\" value=\"$row[address]\">";

		// echo "<label for=\"fname\">POLICY ID</label>";
		// echo "<input disabled type=\"text\" client_id=\"fname\" name=\"policy_id\" placeholder=\"policy id..\" value=\"$row[policy_id]\">";
		$policy_id = $row["policy_id"];
		$c_id      = $row["client_id"];
		$agent_id  = $row["agent_id"];
		
    }

		echo "<br>\n";

	    echo "<br>\n";
	
	            // PRINTS policy info
	
	$sql = "SELECT policy_id,term,health_status,system,payment_method,coverage, age_limit FROM policy where policy_id ='$policy_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>POLICY ID</th>\n";
    echo "    <th>TERM</th>\n";
    echo "    <th>TOTAL AMOUNT</th>\n";
    echo "    <th>PER MONTH</th>\n";
	echo "    <th>PAYMENT METHOD</th>\n";
    echo "    <th>COVERAGE</th>\n";
    echo "    <th>AGE LIMIT</th>\n";
    echo "  </tr>";
			
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["policy_id"]."</td>\n";
		echo "    <td>".$row["term"]."</td>\n";
		echo "    <td>".$row["health_status"]."</td>\n";
		echo "    <td>".$row["system"]."</td>\n";
		echo "    <td>".$row["payment_method"]."</td>\n";
		echo "    <td>".$row["coverage"]."</td>\n";
		echo "    <td>".$row["age_limit"]."</td>\n";
		
		
	}
	}
	?>
	</div>
	<?php
	
	echo "<br>\n";
	echo '<b>Policy Information</b>';
		            //   PRINTS AGEENTS INFO
	$sql = "SELECT agent_id, name ,branch, phone FROM agent where agent_id='$agent_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>AGENT ID</th>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>BRANCH</th>\n";
    echo "    <th>PHONE</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["agent_id"]."</td>\n";
		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["branch"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		
	}
	}
	
	echo "<br>\n";
	echo "<br>\n";
		echo '<b>Agent Information</b>';
	             // prints nominee infos 
	$sql = "SELECT * FROM nominee where client_id='$c_id'";
	$result = $conn->query($sql);
	
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
	
		
	}
	}
	echo "<br>\n";
	echo "<br>\n";
	echo '<b>Nominees</b>';
                       //prints payments 
	$sql = "SELECT * FROM payment where client_id='$c_id'";
	$result = $conn->query($sql);
	
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

		
	}
	}
	echo "<br>\n";
	echo "<br>\n";
	echo '<b>Payments</b>';
	echo "</table>\n";

	
	
	

echo "\n";

   
    }
    else{
        echo  "<h2>No Records Found</h2>";
    }
$conn->close();	
?>

