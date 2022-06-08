<?php include'connection.php'; ?>
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

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Request
						<!-- <button class="btn" style="text-align:center">  -->
                        <!-- <a href="echo "logout.php"" class="btn btn-danger" title="Logout">Logout</a> -->
                        <!-- <a href="logout.php" class="btn btn-danger" title="Logout">Logout</a> -->

                        <!-- </button> -->
                        <a href="logout.php" class="btn btn-danger" title="Logout">Logout</a>
						</h1> 
        
                        
                           						
<?php
   

	    $request= $_POST["request"];
		$change_to = $_POST["change_to"];
        $policy_no = $_POST["policy_no"];
        $status = 'pending';  
        $uploadedImage;         
        // lims/reciptes/
//here
if(!empty($_FILES["fileToUpload"]["name"] && !empty($_FILES["fileToUpload"]["tmp_name"])))
{
        $uploadedImage =  "/lims/reciptes/".basename($_FILES["fileToUpload"]["name"]);
		$target_dir = "/lims/reciptes/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a act
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "Image Uploaded Successfully- " . $check["mime"] . "."; echo '</br>';
				$uploadOk = 1;
			} else {
				echo "File is not an image."; echo '</br>';
				$uploadOk = 0;
			}
		
		// Check file size
		$uploadOk == 1;
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";  echo '</br>';
		// if everything is ok, try to upload file
		} else {
            $destination_path = getcwd().DIRECTORY_SEPARATOR;
            $file_type = $request === 'address' ? 'address' : 'receipt';
            $target_path = $destination_path .'reciptes/'.$file_type.$policy_no.".".$imageFileType;
//    @move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path);
            
           $target_path2 = 'reciptes/'.$file_type.$policy_no.".".$imageFileType;


            if (@move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {         
                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }			 
		}
        $sql = "INSERT INTO request "."(request_type,request_data,status,policy_no,image)"." VALUES('$request', '$change_to','$status','$policy_no','$target_path2')";
}
else{
    $uploadedImage ='';
    $sql = "INSERT INTO request "."(request_type,request_data,status,policy_no)"." VALUES('$request', '$change_to','$status','$policy_no')";
}

	
	if ($conn->query($sql) === true) {
        echo '</br>';echo "New Request ADDED";  echo '</br>';
		}
        else
        {
		  echo "Error: " . $sql . "<br>" . $conn->error;  echo '</br>';
		}
	
	
?>		

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
