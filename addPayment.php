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
    border:none;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border:none;
    padding:8px 0 !important;
}
tr{
    margin:8px !important;
    border:none;
}
/* tr:nth-child(even) {
    background-color: #dddddd;
} */
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Payment</title>
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
$uniqueId = time().'_'.mt_rand();
if(isset($_GET["client_id"])){
$client_id       = $_GET["client_id"];
}else{ $client_id="";
}
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Payment</h1>
						
                    
                

<form action="insertPayment.php" method="post">

Recipt No:     <input type="text" name="recipt_no" value="<?php echo"$uniqueId"; ?>" required><br>
Client Id:     <input type="text" name="client_id" value="<?php echo"$client_id"; ?>" required><br>

         
       
        
          
<table style="border:0px !important;width: 400px;px !important;">
    <tr>
        <td>
        Start Date:
        </td>
        <td>
        <input type="date" name="month" style ="width:177px;" required><br>
        </td>
    </tr>
    <tr>
        <td>Expiry Date:</td>
        <td>   <input type="date" name="due" style ="width:177px" required><br></td>
    </tr>
    <tr>
        <td>Amount:</td>
        <td><input type="number" name="amount" required><br></td>
    </tr>
    <tr>
        <td>Branch:</td>
        <td><input type="number" name="Branch" required><br></td>
    </tr>
</table>
Agent Id:      <input type="text" name="agent_id" value="<?php echo $_SESSION["username"]; ?>" required><br>

<input type="submit">
</form>
				

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->


</body>
</html>
