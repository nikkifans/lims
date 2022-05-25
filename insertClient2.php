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
    <title>Insert Client</title>
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
<?php include'connection.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Insert Client
						<button class="btn" align="center"> 
                        <a href="addclient.php" class="btn">Add Client</a>
                        </button>
						</h1>
                                				
				
<?php
	    $client_id       = $_POST["client_id"];
		$client_password = $_POST["client_password"];
		$name            = $_POST["name"];
		$sex             = $_POST["sex"];
		$birth_date      = $_POST["birth_date"];
		$maritial_status = $_POST["maritial_status"];
		$nid             = $_POST["nid"];
		$phone           = $_POST["phone"];
		$address         = $_POST["address"];
		// $policy_id       = $_POST["policy_id"];
		$agent_id        = $_POST["agent_id"];
		
		
		
		$nominee_id              = $_POST["nominee_id"];
		$nominee_name            = $_POST["nominee_name"];
		$nominee_sex             = $_POST["nominee_sex"];
		$nominee_birth_date      = $_POST["nominee_birth_date"];
		$nominee_nid             = $_POST["nominee_nid"];
		$nominee_relationship    = $_POST["nominee_relationship"];
		$priority                = $_POST["priority"];
		$nominee_phone           = $_POST["nominee_phone"];


		// $child1_nominee_id              = $_POST["child1_nominee_id"];
		$child1_name                    = $_POST["child1_name"];
		$child1_gender                  = $_POST["child1_gender"];
		$child1_birth_date              = $_POST["child1_birth_date"];
		$child1_national_id             = $_POST["child1_national_id"];
		$child1_relationship            = $_POST["child1_relationship"];
		$child1_priority                = $_POST["child1_priority"];
		$child1_phone                   = $_POST["child1_phone"];
		

		// $child2_nominee_id              = $_POST["child2_nominee_id"];
		$child2_name                    = $_POST["child2_name"];
		$child2_gender                  = $_POST["child2_gender"];
		$child2_birth_date              = $_POST["child2_birth_date"];
		$child2_national_id             = $_POST["child2_national_id"];
		$child2_relationship            = $_POST["child2_relationship"];
		$child2_priority                = $_POST["child2_priority"];
		$child2_phone                   = $_POST["child2_phone"];

		// $father_nominee_id              = $_POST["father_nominee_id"];
		$father_name                    = $_POST["father_name"];
		$father_gender                  = $_POST["father_gender"];
		$father_birth_date              = $_POST["father_birth_date"];
		$father_national_id             = $_POST["father_national_id"];
		$father_relationship            = $_POST["father_relationship"];
		$father_priority                = $_POST["father_priority"];
		$father_phone                   = $_POST["father_phone"];

		// $mother_nominee_id              = $_POST["mother_nominee_id"];
		$mother_name                    = $_POST["mother_name"];
		$mother_gender                  = $_POST["mother_gender"];
		$mother_birth_date              = $_POST["mother_birth_date"];
		$mother_national_id             = $_POST["mother_national_id"];
		$mother_relationship            = $_POST["mother_relationship"];
		$mother_priority                = $_POST["mother_priority"];
		$mother_phone                   = $_POST["mother_phone"];
		
		
		$profileImage = basename($_FILES["fileToUpload"]["name"]);
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a act
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				// echo "Cliensts profile picture uploaded- " . $check["mime"] . "."; echo '</br>';
				$uploadOk = 1;
			} else {
				// echo "File is not an image."; echo '</br>';
				$uploadOk = 0;
			}
		
		// Check file size
		$uploadOk == 1;
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			// echo "Sorry, your file was not uploaded.";  echo '</br>';
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			//	echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				// echo "Sorry, there was an error uploading your file.";   echo '</br>';
			}
		}
		
	$sql = "INSERT INTO client (`client_id`, `client_password`, `name`, `sex`, `birth_date`, `marital_status`, `nid`, `phone`, `address`, `agent_id`, `image`, `child1_name`, `child1_gender`, `child1_birth_date`, `child1_national_id`, `child1_relationship`, `child1_priority`, `child1_phone`, `child2_name`, `child2_gender`, `child2_birth_date`, `child2_national_id`, `child2_relationship`, `child2_priority`, `child2_phone`, `father_name`, `father_gender`, `father_birth_date`, `father_national_id`, `father_relationship`, `father_priority`, `father_phone`, `mother_name`, `mother_gender`, `mother_birth_date`, `mother_national_id`, `mother_relationship`, `mother_priority`, `mother_phone`) "."VALUES('$client_id', '$client_password', '$name', '$sex', '$birth_date', '$maritial_status', '$nid', '$phone', '$address', '$agent_id','$profileImage', '$child1_name', '$child1_gender', '$child1_birth_date', '$child1_national_id', '$child1_relationship', '$child1_priority', '$child1_phone', '$child2_name', '$child2_gender', '$child2_birth_date', '$child2_national_id', '$child2_relationship', '$child2_priority', '$child2_phone', '$father_name', '$father_gender', '$father_birth_date', '$father_national_id', '$father_relationship', '$father_priority', '$father_phone', '$mother_name', '$mother_gender', '$mother_birth_date', '$mother_national_id', '$mother_relationship', '$mother_priority', '$mother_phone')";
	
	if ($conn->query($sql) === true) {
			// echo "New Client ADDED";  echo '</br>';
			
		} else {
			// echo "Error: " . $sql . "<br>" . $conn->error;  echo '</br>';
		}
		
		
		
		/// NOMINEE BEING ADDED
   $sql = "INSERT INTO nominee (`nominee_id`, `client_id`, `name`, `sex`, `birth_date`, `nid`, `relationship`, `priority`, `phone`)"."VALUES('$nominee_id', '$client_id', '$nominee_name', '$nominee_sex', '$nominee_birth_date', '$nominee_nid', '$nominee_relationship','$priority', '$nominee_phone')";
	
	if ($conn->query($sql) === true) {
			// echo "New Nominee ADDED";  echo '</br>';
        header("Location: planSelection.php?client_id=$client_id");
		} else {
			// echo "Error: " . $sql . "<br>" . $conn->error;  echo '</br>';
		}		
      ?>


			

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
