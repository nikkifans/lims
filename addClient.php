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
    <title>Add Client</title>
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
<?php include 'header.php'; 
$uniqueId  = time();
$uniqueId2 = time().'-'.mt_rand();

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Client</h1>
						
                                    

<form action="insertClient2.php" method="post" enctype="multipart/form-data">
Policy ID*       <input type="text" name="client_id" value="<?php echo"$uniqueId"; ?>" required><br>
Client Password* <input type="text" name="client_password" required><br>
Name*            <input type="text" name="name" required><br>
Upload Document*		     <input class="img" type="file" name="fileToUpload"/ required> </br>
Gender*          <input type="text" name="sex" required><br><br>
<div class="row">
    <div class="col-md-3"> Birth Date*    <input type="Date" name="birth_date" required><br></div>
    <div class="col-md-3"> National ID*   <input type="number" name="nid" required><br></div>
</div>
Marital Status*  <input type="text" name="maritial_status" required><br>
Phone*           <input type="text" name="phone" required><br>
Address*         <input type="text" name="address" required><br>
<!-- Policy ID:       <input type="text" name="policy_id" required><br> -->
Agent ID:        <input type="text" name="agent_id" value="<?php echo $_SESSION["username"]; ?>" required><br>

<h3>Nominee Information </h3>

Nominee ID*    <input type="text" name="nominee_id" value="<?php echo"$uniqueId2"; ?>" required> <br>
Name*          <input type="text" name="nominee_name" required><br>
Gender*        <input type="text" name="nominee_sex" required><br>
<div class="row">
    <div class="col-md-3"> Birth Date*    <input type="Date" name="nominee_birth_date" required><br></div>
    <div class="col-md-3"> National ID*   <input type="number" name="nominee_nid" required><br></div>
</div>

Relationship*  <input type="text" name="nominee_relationship" required><br>
Priority*      <input type="text" name="priority" required><br>
Phone*         <input type="number" name="nominee_phone" required><br><br>


<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<!--  -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Child 1 Information
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" r ole="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <!-- Policy ID       <input type="text" name="client_id" value="<?php echo"$uniqueId"; ?>" ><br> -->
<!-- Client Password <input type="text" name="client_password" ><br> -->
Name:          <input type="text" name="child1_name" ><br>
Gender:        <input type="text" name="child1_gender" ><br>
<div class="row">
    <div class="col-md-3"> Birth Date   <input type="Date" name="child1_birth_date" ><br></div>
    <div class="col-md-3"> National ID   <input type="number" name="child1_national_id" ><br></div>
</div>
Relationship:  <input type="text" name="child1_relationship" ><br>
Priority:      <input type="text" name="child1_priority" ><br>
Phone:         <input type="number" name="child1_phone" ><br>
<!-- Policy ID:       <input type="text" name="policy_id" ><br> -->
Agent ID:        <input type="text" name="agent_id" value="<?php echo $_SESSION["username"]; ?>" ><br>
      </div>
    </div>
  </div>
<!--  -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Child 2 Information
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      <!-- Nominee ID*    <input type="text" name="nominee_id" value="<?php echo"$uniqueId2"; ?>" > <br> -->
Name:          <input type="text" name="child2_name" ><br>
Gender:        <input type="text" name="child2_gender" ><br>
<div class="row">
    <div class="col-md-3"> Birth Date   <input type="Date" name="child2_birth_date" ><br></div>
    <div class="col-md-3"> National ID   <input type="number" name="child2_national_id" ><br></div>
</div>
Relationship:  <input type="text" name="child2_relationship" ><br>
Priority:      <input type="text" name="child2_priority" ><br>
Phone:         <input type="number" name="child2_phone" ><br
      </div>
    </div>
  </div>
  <!--  -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Father Information
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
      Name:          <input type="text" name="father_name" ><br>
Gender:        <input type="text" name="father_gender" ><br>
<div class="row">
    <div class="col-md-3"> Birth Date   <input type="Date" name="father_birth_date" ><br></div>
    <div class="col-md-3"> National ID   <input type="number" name="father_national_id" ><br></div>
</div>
Relationship:  <input type="text" name="father_relationship" ><br>
Priority:      <input type="text" name="father_priority" ><br>
Phone:         <input type="number" name="father_phone" ><br>
      </div>
    </div>
  </div>
<!--  -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
        Mother Information
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
      Name:          <input type="text" name="mother_name" ><br>
Gender:        <input type="text" name="mother_gender" ><br>
<div class="row">
    <div class="col-md-3"> Birth Date   <input type="Date" name="mother_birth_date" ><br></div>
    <div class="col-md-3"> National ID   <input type="number" name="mother_national_id" ><br></div>
</div>
Relationship:  <input type="text" name="mother_relationship" ><br>
Priority:      <input type="text" name="mother_priority" ><br>
Phone:         <input type="number" name="mother_phone" ><br>
      </div>
    </div>
  </div>
      </div>
      <input type="submit">
</div>
</div>
</div>



</form>
				
				

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    
<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.js"></script>

</body>
</html>
