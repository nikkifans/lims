<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
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
.searchBar {
	float: auto;
	cursor: pointer;
	width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 30px;
    box-sizing: border-box;
	
}


</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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


<!--  -->
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
                        <h1 class="page-head-line">Home Page
						
						</h1>


			
		<!-- /. SEARCH  -->
        
	  <div class= "searchBar">
		  <form action="search.php" method="post">
          <input type="text" name="key" style="margin:auto;"><br>
          <input class="searchBtn" type="submit" value="SEARCH" style="align-item: center">
		  </br>
          </form>
	  </div>

		<!-- /. SEARCH  -->
				
				<br>
				<br>
				
				<!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="#">
                                <i class="fa fa-user fa-5x"></i>
                                <h5>
								<?php
				                     $sql = "SELECT count(*) AS c FROM client";
	                                 $result = $conn->query($sql);
		
	                                 while($row = $result->fetch_assoc()) {
				                     echo "Total clients: ";
	                                 echo $row["c"];
	                                 }
				                     ?>
								</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="#">
							 <i class="fa fa-dollar fa-5x"></i>
                                <h5>
		                             <?php
				                     $sql = "SELECT count(*) AS c FROM payment";
	                                 $result = $conn->query($sql);
		
	                                 while($row = $result->fetch_assoc()) {
				                     echo "Payment Records: ";
	                                 echo $row["c"];
	                                 }
				                     ?>
                                
								</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="#">
                               <i class="fa fa-user-md fa-5x"></i>
                                <h5>
								<?php
				                     $sql = "SELECT count(*) AS c FROM agent";
	                                 $result = $conn->query($sql);
		
	                                 while($row = $result->fetch_assoc()) {
				                     echo "Total agents: ";
	                                 echo $row["c"];
	                                 }
				                     ?>
								</h5>
                            </a>
                        </div>
                    </div>

                </div>
		

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->




</body>
</html>
