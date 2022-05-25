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
                        <h1 class="page-head-line">Change Requests
			
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->

<?php

include'connection.php';
	
	$sql = "SELECT * FROM request where status='pending'";
	$result = $conn->query($sql);
	
    echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>REQUEST NO</th>\n";
    echo "    <th>POLICY NO</th>\n";
    echo "    <th>REQUEST TYPE</th>\n";    

    echo "    <th>INPUT DATA</th>\n"; 
    echo "    <th>STATUS</th>\n"; 
    echo "    <th>CLIENT STATUS</th>\n";

    echo "    <th>IMAGE</th>\n";
    echo "    <th>UPDATE</th>\n";
    echo "  </tr>";

    
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {

		echo "<tr>\n";
		echo "    <td>".$row["request_id"]."</td>\n";
		echo "    <td>".$row["policy_no"]."</td>\n";
		echo "    <td>".$row["request_type"]."</td>\n";

		echo "    <td>".$row["request_data"]."</td>\n";
        echo "    <td>".$row["status"]."</td>\n";
        echo "    <td>"."<a href='clientStatus.php?client_id=".$row["policy_no"]. "'>Client Status</a>"."</td>\n";
//        echo $row['image'];
        // echo "    <td>".$row["image"]."</td>\n";
//        echo $row["request_type"];
        if ($row["request_type"] == 'policy extension'){
          
            echo "<td>"."<a href='download.php?img=".$row['image']."'>Download</a>"."</td>\n";
        }else{

            echo "<td disabled>-</td>\n";
        }

//        <a href="/images/myw3schoolsimage.jpg" download>


        echo "<td>"."<a href='updateRequest.php?request_id=".$row["request_id"]."&client_id=".$row["policy_no"]. "'>Update</a>"."</td>\n";
        // echo "    <td>".$row["update"]."</td>\n";


//         // if($row["agent_id"]== $username || "ahmed" == $username){
//
//             <label for="Change to" id="doc-label" class="hidden">Image
//             <input class="img hidden" id="doc" type="file" name="fileToUpload"> </br>
//             </label>
//            <br />


//                       <label for="Change to">Change to</label>
//                       <input type="text" id="Change to" name="change_to">

//                       <input type="submit" value="Submit">
//           </form>
//           </div>
//   </div>
//   </div>


//       </div>

//       <!-- /. WRAPPER  -->


//     <script src="assets/js/jquery-1.10.2.js"></script>
//       <script src="assets/js/bootstrap.js"></script>
//   <script>
//     $("#request").on("change",function(){
//       if(this.value === 'policy extension'){
//         $("#doc-label").addClass("show");
//         $("#doc-label").removeClass("hidden");
//         $("#doc").addClass("show");
//         $("#doc").removeClass("hidden");
//         $("#doc").attr("required");
//       }else{
//         $("#doc-label").addClass("hidden");
//         $("#doc-label").removeClass("show");
//         $("#doc").addClass("hidden");
//         $("#doc").removeClass("show");
//         $("#doc").removeAttr("required");
//       }
//     })
//   </script>


	}
	
	echo "</table>\n";

	} else {
    echo "0 results";
}
$conn->close();
?>	  	  
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->	
</body>
</html>
