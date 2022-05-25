<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
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
    <title>Insert Payment</title>
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
<?php include'connection.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Payment Details
						 
						</h1>
                    
<?php
//     [sum_insured] => 500000
//     [client_id] => 1652852596
//     [plan_amount] => 2000
//     [total_amount] => 2637
//     [adults] => 1
//     [children] => 1
//     [plan_type] => Silver plan
//     [Compassion_Visit] => 188
//     [air_ambulance_cover] => 149

 
		
		
        $sum_insured = $_POST['sum_insured'];
        $client_id = $_POST['client_id'];
        $plan_amount = $_POST['plan_amount'];
        $total_amount = $_POST['total_amount'];
        $adults = $_POST['adults'];
        $children = $_POST['children'];
        $plan_type = $_POST['plan_type'];
        $compassion = isset($_POST['compassion']) ? $_POST['compassion'] : 0;
        $ambulance = isset($_POST['ambulance']) ? $_POST['ambulance'] : 0;
	    $sql = "INSERT INTO plan (`policy_id`, `sum_insured`, `plan_type`, `plan_amount`, `adults`, `children`, `compassion_visit`, `ambulance_cover`, `total_amount`) "."VALUES('$client_id','$sum_insured', '$plan_type','$plan_amount', '$adults', '$children', '$compassion','$ambulance','$total_amount')";
	
	if ($conn->query($sql) === true) {			         
            header("Location: clientStatus.php?client_id=$client_id");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
?>

             </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

</body>
</html>
