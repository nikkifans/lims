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
.wrapper-card{
background-color:#ffffff;
padding:16px;
margin:0 auto;
}
.wrapper-blue{
    background-color:skyblue;
    color:#fff;     
}
.mybtn{
    margin:o auto;
    text-align:center;
}
.plan-wrapper{
    /* display:flex;
    justify-content: center; */

    padding:10px 32px;
}
.payment-box{
   margin-left:24px;

}
.right{
    text-align:right;
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
    <link rel="stylesheet" href="assets/css/slider.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include 'header.php'; 
$uniqueId  = time();
$uniqueId2 = time().'-'.mt_rand();
if(isset($_GET['client_id'])){
    $client_id = $_GET['client_id'];
}else{
    header("Location: addClient.php");
}
// $client_id = $_GET['client_id'];

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row ">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Client</h1>												
                    </div>

                    <div class="col-md-12">
                        <h2>Choose your sum insured</h2>
                        <div class="range-slider">
                            <input type="text" class="js-range-slider" value="" />
                        </div>
                        <hr>
                        <div class="extra-controls form-inline">
                            <div class="form-group">
                                <input type="text" class="js-input-from form-control" value="0" />
                                <input type="text" class="js-input-to form-control" value="0" />    
                            </div>
                        </div>
                    </div>
                </div>    

<form action="insertPlan.php" method="post">
    <input type="hidden" name="sum_insured"  id="sum_insured">
    <input type="hidden" name="client_id" value="<?php echo $client_id?>">
    <input type="hidden" name="plan_amount" id="plan_amount">
    <input type="hidden" name="total_amount" id="total_amount">
<div class="row">
<div class="col-md-2">
      <h3><label>Number of Adults</label></h3>
      <select class="custom-select" name="adults" id="adults">
        <option value="0">0</option> 
        <option value="1">1</option>
        <option value="2">2</option>         
      </select>    
</div>
<div class="col-md-2">
<h3><label>Number of Children</label></h3>
      <select class="custom-select" name="children" id="children">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
       </select>
</div>
</div>

            <div class="row plan-wrapper">
                    <h2>Here are your plan options</h2>
                   
                    <div class="col-md-8 row wrapper-card">
                       <!-- set amount on plan selection -->
                    
                    <div class="col-md-4" id="basicbox">
                        <input type="checkbox" name="plan_type" class="cb-element" value="Silver plan" id="basicplan" />   
                       
                            <h2>Silver Plan - <span class="text-primary" id="basicamount"></span></h2>
                            <ul>
                                <li>Hospital Daily cash:₹ 200</li>
                                <li>Claim upto - 60%</li>
                                <li>Vaccination benefit: NA</li>
                            </ul>
                            <div class="plan-wrapper">
                                <a href="#" class="mybtn text-center btn btn-primary">Select This Plan</a>
                            </div>   
                    </div>


                        <div class="col-md-4" id="edgebox">
                                <div>
                                    <input type="checkbox" name="plan_type" class="cb-element" value="gold plan" id="edgeplan" />   
                                </div>
                        
                                <h2>Gold Plan - <span class="text-primary" id="edgeamount"></span></h2>
                                <ul>
                                    <li>Hospital Daily cash:₹ 500</li>
                                    <li>Claim upto - 80%</li>
                                    <li>Vacation benefit:Upto ₹5k</li>
                                </ul>
                                <div class="plan-wrapper">
                                    <a href="#" class="mybtn text-center btn btn-primary">Select This Plan</a>
                                </div>                            
                        </div>           
                        
                        <div class="col-md-4" id="diamondbox">
                                <div>
                                    <input type="checkbox" class="cb-element" name="plan_type" value="diamond plan" id="diamondplan" />   
                                </div>
                        
                                <h2>Diamond Plan - <span class="text-primary" id="diamondamount"></span></h2>
                                <ul>
                                    <li>Hospital Daily cash:₹ 1000</li>
                                    <li>Claim upto - 100%</li>
                                    <li>Vacation benefit:Upto ₹8k</li>
                                </ul>
                                <div class="plan-wrapper">
                                    <a href="#" class="mybtn text-center btn btn-primary">Select This Plan</a>
                                </div>                            
                        </div> 
                        
            </div>
            
           
            </div>

            <div class="row plan-wrapper">
                    <h2>Add-ons</h2>
                        <div class="col-md-6 row wrapper-card">
                          
                            <div class="col-md-5" id="add1box">
                            <input type="checkbox" name="compassion" class="cb-element" value="188" id="add1" />
                                <h2>Compassion Visit</h2>
                                <h2 class="text-warning">₹188</h2>
                                <hr>
                                <ul>
                                    <li><storng>20</strong> visit cash</li>
                                </ul>
                                <div class="plan-wrapper">
                                    <a href="#" class="mybtn text-center btn btn-warning">Choose Plan</a>
                                </div>   
                         </div>
                         
                        <div class="col-md-6" id="add2box">
                        <input type="checkbox" name="ambulance" class="cb-element" value="149" id="add2" />   
                            <h2>Air Ambulance Cover</h2>
                            <h2 class="text-warning">₹149</h2>
                            <hr>
                            <ul>
                                <li><storng>5</strong> visits</li>
                                <li><storng>2</strong> Ambulance Cover</li>                                                                 
                            </ul>
                            <div class="plan-wrapper">
                            <a href="#" class="mybtn text-center btn btn-warning">Choose Plan</a>
                            </div>                            
                        </div>  
                                              
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-4 payment-box">
                        <h3>Total Amount Payment</h3>

                        <table>
                        <tr>
                                <td><span id="plan"></span> Plan Amount</td>
                                <td class="right"><span id="planAmount" class="right">0</span></td>
                            </tr>
                            <tr>
                                <td>Children</td>
                                <td class="right"><span id="childrenAmount" class="right">0</span></td>
                            </tr>
                            <tr>
                                <td>Adults</td>
                                <td class="right"><span id="adultsAmount" class="right">0</span></td>
                            </tr>
                            <tr>
                                <td>Compassion Visit</td>
                                <td class="right"><span id="compassion" class="right">0</span></td>
                            </tr>
                            <tr>
                                <td>Air Ambulance Cover</td>
                                <td class="right"><span id="ambulance" >0</span></td>
                            </tr>
                            <tr>
                                <th>Final Amount</th>
                                <th class="right"><span id="total" class="right">0</span></th>
                            </tr>
                        </table>                        
                    </div>
                    <div class="col-md-12"></div>
                    <div class="plan-wrapper col-md-3 mx-auto text-center">
                        <input type="submit" class="mybtn text-center btn btn-primary" value="Submit Details">                   
                    </div>
                   
                    </div>
                   
                    </form>
        </div>
        <!-- /. PAGE WRAPPER  -->

      
    </div>
    <!-- /. WRAPPER  -->

   
    
<script src="assets/js/jquery-1.10.2.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="assets/js/slider.js"></script>

<script>
    var basicValue = document.querySelector('.js-input-to').value;     

    var total = 0;
 
    $('#basicbox').click(function ()     
    {
        $(this).find('input[type=checkbox]').prop("checked", !$(this).find('input[type=checkbox]').prop("checked"));
        $("#edgebox").find('input[type=checkbox]').prop("checked", false);
        $("#diamondbox").find('input[type=checkbox]').prop("checked", false);
        $(this).toggleClass('wrapper-blue');
        $('#edgebox').removeClass('wrapper-blue');
        $('#diamondbox').removeClass('wrapper-blue');
        if($(this).find('input[type=checkbox]').prop("checked")){                 
            $("#planAmount").html(Number($("#basicamount").text()));  
            $("#plan_amount").val(Number($("#basicamount").text())); 
            $("#plan").html("Silver");
            updateTotalAmount();
        }
    });

    $('#edgebox').click(function ()     
    {
        $(this).find('input[type=checkbox]').prop("checked", !$(this).find('input[type=checkbox]').prop("checked"));
        $("#basicbox").find('input[type=checkbox]').prop("checked", false);
        $("#diamondbox").find('input[type=checkbox]').prop("checked", false);
        $(this).toggleClass('wrapper-blue');
        $('#basicbox').removeClass('wrapper-blue');
        $('#diamondbox').removeClass('wrapper-blue');
        if($(this).find('input[type=checkbox]').prop("checked")){                                  
            $("#planAmount").html(Number($("#edgeamount").text()));
            $("#plan_amount").val(Number($("#edgeamount").text())); 
            $("#plan").html("Gold"); 
            updateTotalAmount();           
        }
    });

    $('#diamondbox').click(function ()     
    {
        $(this).find('input[type=checkbox]').prop("checked", !$(this).find('input[type=checkbox]').prop("checked"));
        $("#basicbox").find('input[type=checkbox]').prop("checked", false);
        $("#edgebox").find('input[type=checkbox]').prop("checked", false);
        $(this).toggleClass('wrapper-blue');
        $('#basicbox').removeClass('wrapper-blue');
        $('#edgebox').removeClass('wrapper-blue');
        if($(this).find('input[type=checkbox]').prop("checked")){                                    
            $("#planAmount").html(Number($("#diamondamount").text()));
            $("#plan_amount").val(Number($("#diamondamount").text())); 
            $("#plan").html("Diamond");   
            updateTotalAmount();        
        }
    });

    $('#add1box').click(function ()     
    {
        $(this).find('input[type=checkbox]').prop("checked", !$(this).find('input[type=checkbox]').prop("checked"));
        $(this).toggleClass('wrapper-blue');
        if($(this).find('input[type=checkbox]').prop("checked")){
                $("#compassion").html("188");  
                updateTotalAmount();     
        }
        else{
            $("#compassion").html("0");   
            updateTotalAmount(); 
        }
    });

    $('#add2box').click(function ()     
    {
        $(this).find('input[type=checkbox]').prop("checked", !$(this).find('input[type=checkbox]').prop("checked"));
        $(this).toggleClass('wrapper-blue');
        if($(this).find('input[type=checkbox]').prop("checked")){
            $("#ambulance").html("149");  
            updateTotalAmount();           
        }
        else{
            $("#ambulance").html("0");   
            updateTotalAmount(); 
        }
        
    }); 

    $("#adultsAmount").html(Number($("#adults").val())*200);
    $("#childrenAmount").html(Number($("#children").val())*200);

    $("#adults").on("change",function(){         
        $("#adultsAmount").html(Number($(this).val())*200);
        updateTotalAmount();
    })

    $("#children").on("change",function(){         
        $("#childrenAmount").html(Number($(this).val())*100);
        updateTotalAmount();
    })

    // TODO - GRAND TOTAL PENDING
    function updateTotalAmount(){
//  childrenAmount  compassion ambulance total
        var planamount = $("#planAmount").text();
        var childrenAmount = $("#childrenAmount").text();
        var adultsAmount = $("#adultsAmount").text();
        var compassion = $("#compassion").text();
        var ambulance = $("#ambulance").text();
        var totalAmount = Number(planamount) + Number(childrenAmount) + Number(adultsAmount) + Number(compassion) + Number(ambulance);
        var total = $("#total").text(totalAmount);
         $("#total_amount").val(totalAmount);
    }
    updateTotalAmount();
</script>
</body>
</html>
