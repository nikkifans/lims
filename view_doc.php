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
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Policy</title>

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
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">VIEW DOCUMENT</h1>
                    </div>
                    
<?php

include'connection.php';
	
	// $sql = "SELECT shared_location FROM client where client_id='$client_id'";
	// $result = $conn->query($sql);

    $sql = "SELECT shared_location FROM client where request_id=$request_id";         

        $result = $conn->query($sql);
        $record = $result->fetch_assoc();
        
        $shared_location= $record["shared_location"];
//   include'connection.php';
	
//   $sql = "SELECT * FROM request where status='image'";
//   $result = $conn->query($sql);
//    $sql = "SELECT * FROM `image` WHERE 1";
//    $mq = mysql_query($sql) or die ("not working query");
//    $row = mysql_fetch_array($mq) or die("line 44 not working");
//    $s=$row['photo'];
//    $a = $row['shared_location'];
   echo $shared_location;

   echo '<img src="'.$shared_location.'" alt="HTML5 Icon" style="width:250px;height:250px">';
   ?>
                </div>
                
                <!-- /. ROW  -->

	  	  
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->	
</body>
</html>
