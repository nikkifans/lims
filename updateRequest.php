<!DOCTYPE html>

<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 10px 13px;
    margin: 3px 0;
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
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Payment</title>

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

// 	$sql = "SELECT agent_id FROM agent WHERE agent_id = '$username'";
// 	$result = $conn->query($sql);
// 	if ($result->num_rows > 0) {
     
//     }
//     else {
// 	header("Location: clientHome.php");
    
//    }	
?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="index.php">Insurance</a>
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


                 <!-- <li>
                      <a href="client.php"><i class="fa fa-users "></i>CLIENTS</a >  
                 </li> 
                 <li>
                      <a href="agent.php"><i class="fa fa-life-saver "></i>AGENTS</a>
                            
                 </li>   s
                 <li>
                      <a href="policy.php"><i class="fa fa-pencil-square-o "></i>POLICY</a>
                          
                 </li>     
                 <li>
                      <a href="nominee.php"><i class="fa fa-heart "></i>NOMINEE</a>
                            
                 </li> 
                 <li>
                      <a href="payment.php"><i class="fa fa-credit-card "></i>PAYMENTS</a>
                            
                 </li>    
                     -->
                 <li>
                      <a href="requests1.php"><i class="fa fa-envelope "></i>REQUESTS</a>
                            
                 </li>    
                 <!-- <li>
                      <a href="search_reinment.php"><i class="fa fa-money "></i>REINSTATEMENT</a>
                            
                 </li>  
                 <li>
                      <a href="claimClient.php"><i class="fa fa-money "></i>CLAIM</a>                            
                 </li>   -->
                </ul>
            </div>		
        </nav>
	
   


        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update Request
						
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
	
<?php 
	
include'connection.php';
	
	
	$id = "";
	if($_SERVER["REQUEST_METHOD"] == "GET")
    {
		
		$request_id = $_GET["request_id"];
        $client_id = $_GET["client_id"];
        
         
        echo "<br />";
         

        // get request data
        $sql = "SELECT request_type,request_data FROM request where request_id=$request_id";         

        $result = $conn->query($sql);
        $record = $result->fetch_assoc();
        
        $requestType = $record["request_type"];
        $requestData =  $record["request_data"];

        $sql = "UPDATE ";

        switch($requestType) {
            case 'marital status':
                $sql.="client SET marital_status = '$requestData'";
                break;
                case 'email id':
                    $sql.="client SET email_id = '$requestData'";
                    break;
                 case 'phone':
                    $sql.="client SET phone = '$requestData'";
                    break;
                 case 'address':
                    $sql.="client SET address = '$requestData'";
                    break;
                 case 'nominee name':
                    $sql.="nominee SET name = '$requestData'";
                    break;
                 case 'nominee gender':  
                    $sql.="nominee SET sex = '$requestData'";
                    break;
                 case 'nominee dob':
                    $sql.="nominee SET birth_date = '$requestData'";
                    break;
                 case 'nominee relationship':
                     $sql.="nominee SET relationship = '$requestData'";
                    break;
                 case 'nominee priority':
                    $sql.="nominee SET priority = '$requestData'";
                    break;
                 case 'nominee phone':
                    $sql.="nominee SET phone = '$requestData'";
                    break;
                 case 'nominee aadhar':
                    $sql.="nominee SET aadharr_number = '$requestData'";
                    break;
                case 'policy extension':
                        $sql.="client SET shared_location = '$requestData'";
                        $sql2 = 'UPDATE payment SET expiry_date = DATE_ADD(expiry_date, INTERVAL 1 YEAR)';
                        $conn->query($sql2);
                        break;
        }

        $sql .= " where client_id = '$client_id'";


        if ($conn->query($sql) === true) {
			 echo "New record updated successfully";
            $sql = "UPDATE request set status = 'completed'  where request_id='$request_id'";
            if($conn->query($sql)=== true){
                //header('Location: requests.php');
                echo "<br />";
                echo "Go back to Requests - <a href='requests1.php' class='btn'>Requests</a>";
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
    </div>
</body>
</html>