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
<?php include 'header.php'; 
?>
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
        }

        // $test = "UPDATE client SET $requestType = '$requestData'" 

//        $sql = "select * from request WHERE client_id = '$client_id'";
//        print $sql;
//

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
    </div>
</body>
</html>