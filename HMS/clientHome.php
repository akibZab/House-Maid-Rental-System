<!DOCTYPE html>
<html>
<head>
<?php
	session_start();
	include'connection.php';
	
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
.button {
    background-color: #94bff7;
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
	background-color: #94bff7;
	float: right;
	color:white;
	text-decoration:none;	
}
.searchBar {
	float: auto;
	cursor: pointer;
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
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
        <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0; background-color: #2c4891;">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="clientHome.php">IM cleaning service</a>
            </div>
            <div class="header-right">
			
                 <a href="<?php echo "logout.php" ?>" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

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
                    <!-- <li>
                      <a href="claim.php"><i class="fa fa-cube"></i>CLAIM</a >  
                 </li> -->
                 <li>
                      <a href="pendingRequest.php"><i class="fa fa-cube"></i>Pending Request</a >  
                 </li>
                 <li>
                      <a href="ClientPayment.php"><i class="fa fa-money"></i>Add Payment</a >  
                 </li>
                 <li>
                      <a href="searchINT.php"><i class="fa fa-cube"></i>Search Workers</a >  
                 </li>
                 <li>
                      <a href="complaints.php"><i class="fa fa-cube"></i>File Complaints</a >  
                 </li>
                 

                
                

                </ul>

            </div>
		

        </nav>
		 
		  
	
   
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Client's Status</h1>
                    <div class="col-md-12">
                    <button class="btn" align="center"> 
                    <?php
						echo "<td>"."<a href='ClientEdit.php?client_id=$username'>Edit</a>"."</td>\n";
					?>
					</button></div>
                    
                
                <!-- /. ROW  -->
<?php

	
		
	$client_id = $_SESSION["username"];
	
	            //   PRINTS CLIENT's info
	$sql = "SELECT * from client where client_id='$client_id'";
	$result = $conn->query($sql);
	$policy_id = "";
	   
	while($row = $result->fetch_assoc()) {
?>
<?php
		echo "<label for=\"fname\">CLIENT ID</label>";
	    echo "<input disabled type=\"text\" client_id=\"fname\" name=\"client_id\" placeholder=\"Your id..\" value=\"$row[client_id]\">";
		echo "<label for=\"fname\">NAME</label>";
	    echo "<input disabled type=\"text\" client_id=\"fname\" name=\"name\" placeholder=\"Your Name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">GENDER</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"sex\" placeholder=\"Your Gender..\" value=\"$row[sex]\">";
		echo "<label for=\"fname\">BIRTH DATE</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"birth_date\" placeholder=\"Your Birth Date..\" value=\"$row[birth_date]\">";
		echo "<label for=\"fname\">MARITIAL STATUS</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"marital_status\" placeholder=\"Your Maritial Status..\" value=\"$row[marital_status]\">";
		echo "<label for=\"fname\">NID</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"nid\" placeholder=\"Your NID..\" value=\"$row[nid]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"phone\" placeholder=\"Your Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"fname\">ADDRESS</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"address\" placeholder=\"Your Address..\" value=\"$row[address]\">";
		echo "<label for=\"fname\">POLICY ID</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"policy_id\" placeholder=\"policy id..\" value=\"$row[policy_id]\">";
		$policy_id = $row["policy_id"];
		$c_id      = $row["client_id"];
		$agent_id  = $row["agent_id"];
		
    }
		echo "<br>\n";

	    echo "<br>\n";

	
	
	
	             
                       //prints payments 
	$sql = "SELECT * FROM payment where client_id='$c_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>RECIPT NO</th>\n";
    echo "    <th>CLIENT ID</th>\n";
    echo "    <th>MONTH</th>\n";
    echo "    <th>AMOUNT</th>\n";
	echo "    <th>DUE</th>\n";
    echo "    <th>FINE</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["recipt_no"]."</td>\n";
		echo "    <td>".$row["client_id"]."</td>\n";
		echo "    <td>".$row["month"]."</td>\n";
		echo "    <td>".$row["amount"]."</td>\n";
		echo "    <td>".$row["due"]."</td>\n";
		echo "    <td>".$row["fine"]."</td>\n";

		
	}
	}
	echo "<br>\n";
	echo "<br>\n";
	echo '<b>Payments</b>';
	echo "</table>\n";

	
	
	

echo "\n";


$conn->close();	
?>

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
