<!DOCTYPE html>

<html>
<head>
<style>

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	margin-left:2%;
	display:block;
	float: center;
}
.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	margin-left:0%;
	font-size:110%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.dis {
	pointer-events: none;
	cursor: default;
	color:#595959;
}
.searchBox{
    
    cursor: pointer;
	font-size: 85%;
	
}

</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clients</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php
	session_start();
	include'connection.php';
	$username = $_SESSION["username"];

	$sql = "SELECT `username` from hospital_login where username='$username' and type='claimsadmin'";
    
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
     
    }
    else {
	header("Location: clientHome.php");
    
   }	
?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="claimsHome.php">Insurance</a>
            </div>

            <div class="header-right">
			
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
									if(!isset($_SESSION["username"])){
										header("Location: index.php");
									}else {
										echo "welcome, ".$_SESSION["username"];
									}
								?>
                            <br />
                              
                            </div>
                        </div>

                    </li>


                 <li>
                      <a href="claimHeader.php"><i class="fa fa-users "></i>CLIENTS</a >  
                 </li> 
                 <!-- <li>
                      <a href="agent.php"><i class="fa fa-life-saver "></i>AGENTS</a>
                            
                 </li>   
                 <li>
                      <a href="policy.php"><i class="fa fa-pencil-square-o "></i>POLICY</a>
                          
                 </li>     
                 <li>
                      <a href="nominee.php"><i class="fa fa-heart "></i>NOMINEE</a>
                            
                 </li> 
                 <li>
                      <a href="payment.php"><i class="fa fa-credit-card "></i>PAYMENTS</a>
                            
                 </li>    
                    
                 <li>
                      <a href="requests.php"><i class="fa fa-envelope "></i>REQUESTS</a>
                            
                 </li>    
                 <li>
                      <a href="search_reinment.php"><i class="fa fa-money "></i>REINSTATEMENT</a>
                            
                 </li>   -->
                 <li>
                      <a href="claimClient.php"><i class="fa fa-money "></i>CLAIM</a>                            
                 </li>  
                </ul>
            </div>		
        </nav>
	
   
<!--  -->
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Claim Details 
						<!-- <button class="btn" align="center"> 
						<a href="addClient.php" class="btn">Add Client</a>
						</button> -->
						</h1>
                    </div>
                </div>
				
                <ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#pending" aria-controls="pending" role="tab" data-toggle="tab">Pending</a></li>
  <li role="presentation"><a href="#approve" aria-controls="approve" role="tab" data-toggle="tab">Approved</a></li>
  <li role="presentation"><a href="#decline" aria-controls="decline" role="tab" data-toggle="tab">Declined</a></li>
  
</ul>

<!-- Tab panes -->
<div class="tab-content">

<!-- Tab 1 -->
  <div role="tabpanel" class="tab-pane active" id="pending">
  <?php

$sql = "SELECT *,services.id as rid FROM services left join `client` on services.policy_number = client.client_id LEFT JOIN `plan` ON services.policy_number = plan.policy_id where services.status='pending'";
$result = $conn->query($sql);

echo "<table class=\"table\">\n";
echo "  <tr>\n";
echo "    <th>REQUEST NUMBER</th>\n";
echo "    <th>POLICY NUMBER</th>\n";
echo "    <th>POLICY TYPE</th>\n";
echo "    <th>NAME</th>\n";
echo "    <th>BIRTH DATE</th>\n";     
echo "    <th>PHONE</th>\n";
echo "    <th>ADDRESS</th>\n";    
echo "    <th>STATUS</th>\n";
echo "    <th>VIEW</th>\n";
echo "  </tr>";

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) 
{		 
    echo "<tr>\n";
    echo "    <td>".$row["rid"]."</td>\n";
    echo "    <td>".$row["policy_number"]."</td>\n";
    echo "    <td>".$row["plan_type"]."</td>\n";
    echo "    <td>".$row["name"]."</td>\n";		      
    echo "    <td>".$row["birth_date"]."</td>\n";
    echo "    <td>".$row["phone"]."</td>\n";
    echo "    <td>".$row["address"]."</td>\n"; 
    echo "    <td><strong class='text-capitalize'>".$row["status"]."</strong></td>\n";                        
    echo "    <td>"."<a href='claimDetails.php?client_id=".$row["client_id"]. "'>View</a>"."</td>\n";
    echo "  </tr>";
     
 }
 }
 echo "  </table>";
?>
</div>
<!-- Tab 2 -->
<div role="tabpanel" class="tab-pane" id="approve">
<?php

	$sql = "SELECT * FROM services left join `client` on services.policy_number = client.client_id LEFT JOIN `plan` ON services.policy_number = plan.policy_id where services.status='Approved'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>REQUEST NUMBER</th>\n";
    echo "    <th>POLICY NUMBER</th>\n";
    echo "    <th>POLICY TYPE</th>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>BIRTH DATE</th>\n";     
    echo "    <th>PHONE</th>\n";
	echo "    <th>ADDRESS</th>\n";    
	echo "    <th>STATUS</th>\n";
    echo "    <th>VIEW</th>\n";
    
    
	
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) 
    {		 
		echo "<tr>\n";
		echo "    <td>".$row["id"]."</td>\n";
		echo "    <td>".$row["policy_number"]."</td>\n";
		echo "    <td>".$row["plan_type"]."</td>\n";
        echo "    <td>".$row["name"]."</td>\n";		      
		echo "    <td>".$row["birth_date"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
        echo "    <td>".$row["address"]."</td>\n"; 
        echo "    <td><strong class='text-capitalize'>".$row["status"]."</strong></td>\n";                        
		echo "    <td>"."<a href='claimDetails.php?client_id=".$row["client_id"]. "'>View</a>"."</td>\n";
        echo "  </tr>";
         
	 }
	 }
     echo "  </table>";
?>
</div>
<!-- Tab 3 -->
<div role="tabpanel" class="tab-pane" id="decline">
<?php

	$sql = "SELECT * FROM services left join `client` on services.policy_number = client.client_id LEFT JOIN `plan` ON services.policy_number = plan.policy_id where services.status='Declined'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>REQUEST NUMBER</th>\n";
    echo "    <th>POLICY NUMBER</th>\n";
    echo "    <th>POLICY TYPE</th>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>BIRTH DATE</th>\n";     
    echo "    <th>PHONE</th>\n";
	echo "    <th>ADDRESS</th>\n";    
	echo "    <th>STATUS</th>\n";
    echo "    <th>VIEW</th>\n";
    
    
	
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) 
    {		 
		echo "<tr>\n";
		echo "    <td>".$row["id"]."</td>\n";
		echo "    <td>".$row["policy_number"]."</td>\n";
		echo "    <td>".$row["plan_type"]."</td>\n";
        echo "    <td>".$row["name"]."</td>\n";		      
		echo "    <td>".$row["birth_date"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
        echo "    <td>".$row["address"]."</td>\n"; 
        echo "    <td><strong class='text-capitalize'>".$row["status"]."</strong></td>\n";                        
		echo "    <td>"."<a href='claimDetails.php?client_id=".$row["client_id"]. "'>View</a>"."</td>\n";
        echo "  </tr>";
         
	 }
	 }
     echo "  </table>";
?>
</div>
</div>
                <!-- /. ROW  -->


            
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->
  

    
	   
    <script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</body>

</html>
