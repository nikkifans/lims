<!DOCTYPE html>
<html>
<head>
<?php
	session_start();
	include'connection.php';
	$policy_Number;
	$username = $_SESSION["username"];
?>
<style>
input[type=text], select {
    width: 100%;
    padding: 8px 12px;
    margin: 2px 0;
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

.dropbtn {
  background-color: #000000;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  z-index: 1;
  
}

.dropdown {
  position: relative;
  display: inline-block;
 
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.mx-3{
    /* margin-left:4px !important; */
    margin-right:14px !important;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client's Status</title>
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
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="index.php">Insurance</a>
            </div>
			<div class="dropdown">
			<div class="header-left">

            </div>
			

                 
  </div>
            <div class="header-right">
			
			<div></div>
			
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
									
										echo "welcome, ".$_SESSION["username"];
									 
								?>
								
                            <br />
                              
                            </div>
                        </div>

                    </li>    
                     
                </ul>

</div>

        </nav>
    <div>
    <div id="page-wrapper">
		    <div class="row">
        <div class="col-md-8">
       
        <!-- /. PAGE WRAPPER  -->
         
      <form action="insertHospital.php" method="post">
        </div>
        <div class="col-md-0">
                       <h3 class="page-head-line">Details of Hospitalisation
</div>     
        <input type="hidden" name="policy_id" value=<?php echo $client_id = $_GET["policy_id"]; ?> >
        <label for="watershedField">Name of Hospital*
          <input type="text" name="Name_of_Hospital" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" />
        </label><br>
    
        <label for="watershedField">Room category occupied*
            <br>
          <!-- <input type="text" name="Watershed" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= 'Mandatory. Please fill-out.'" /> -->
          <input type="radio" name="room_category_occupied" value="Yes" id="Yes"/> <label class="mx-3" for="Yes">Yes</label>
          <input type="radio" name="room_category_occupied" value="No" id="No"/> <label class="mx-3" for="No">No</label>
        </label><br>
      
        <label for="watershedField">Hospitalisation due to*
          <input type="text" name="Hospitalisation_due_to" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" />
        </label><br>
     
        <label for="watershedField">Date of Injury/Date of Delivery*
          <br>
          <input type="date" name="Date_of_Injury/Date_of_Delivery" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" />
        </label><br>
      
        <br>
        
        <label for="watershedField">Date of Admission*
        <br>
          <input type="date" name="Date_of_Admission" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" />
        </label><br>
      
        <!-- <label for="watershedField">Date of Discharge
          <input type="text" name="Date_of_Discharge" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" />
        </label><br> -->
      
        <!-- <label for="watershedField">Reported to Police* -->
          <!-- <input type="text" name="Reported_to_Police" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" />
        </label><br> -->
      


      <!--  -->

      <div>
        <!-- /. PAGE WRAPPER  -->
        <div class="col-md-0">
                       <h3 class="page-head-line">Details of Insured Person Hospitalised
</div>    
      
<label for="watershedField">Title*
            <br>
          <!-- <input type="text" name="Watershed" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= 'Mandatory. Please fill-out.'" /> -->
          <input type="radio" name="Title" value="Mr" id="Mr"/> <label class="mx-3" for="Mr">Mr</label>
          <input type="radio" name="Title" value="Ms" id="Ms"/> <label class="mx-3" for="Ms">Ms</label>
          <input type="radio" name="Title" value="Mrs" id="Mrs"/> <label class="mx-3" for="Mrs">Mrs</label>
        </label><br>
      
        <label for="watershedField">Name*
          <input type="text" name="Name" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" />
        </label><br>
      
          
        <label for="watershedField">Gender*
            <br>
          <!-- <input type="text" name="Watershed" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= 'Mandatory. Please fill-out.'" /> -->
          <input type="radio" name="gender" value="Male" id="Male"/> <label class="mx-3" for="Male">Male</label>
          <input type="radio" name="gender" value="Female" id="Female"/> <label class="mx-3" for="Female">Female</label>
          <input type="radio" name="gender" value="Others" id="Others"/> <label class="mx-3" for="Others">Others</label>
        </label><br>
      
           
        <label for="watershedField">Relationship with Primary Insured*
          <input type="text" name="Relationship_with_Primary_Insured" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" />
        </label><br>
      
        <label for="watershedField">Occupation*
          <input type="text" name="Occupation" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" />
        </label><br>
   
        <label for="watershedField">Address*
          <input type="text" name="Address" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" />
        </label><br>
      
        <label for="watershedField">Phone No*
        <br>
          <input type="number" name="Phone_No" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" />
        </label><br>
      
        <label for="watershedField">Email*
        <br>
          <input type="email" name="Email" required multiple placeholder="" id="watershedField" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" />
        </label><br>
        <button name="submit" class="btn btn-primary ml-" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
      </form>
        </div>
        </div>
        </div>

        
        


        
</body>
</html>

