<!-- Agent 7-->



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
    <title>Edit Client</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

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
                 <li>
                      <a href="pendingRequest.php"><i class="fa fa-cube"></i>Pending Request</a >  
                 </li>
                 <li>
                      <a href="ClientPayment.php"><i class="fa fa-money"></i>Add Payment</a >  
                 </li>
                 <li>
                      <a href="searchINT.php"><i class="fa fa-cube"></i>Search Workers</a >  
                 </li>

                </ul>

            </div>
		

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"> Edit Your Information
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php 

	$id = "";
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$client_id = $_GET["client_id"];
		
		
	}
		$sql = "SELECT * from client where client_id='$client_id'";
	$result = $conn->query($sql);
	   
	while($row = $result->fetch_assoc()) {
?>
<?php
	echo '<form action="updateClient.php" method="post">';
		echo "<label for=\"fname\">CLIENT ID</label>";
	    echo "<input type=\"text\" client_id=\"fname\" name=\"client_id\" placeholder=\"Your id..\" value=\"$row[client_id]\">";
		echo "<label for=\"fname\">NAME</label>";
	    echo "<input type=\"text\" client_id=\"fname\" name=\"name\" placeholder=\"Your Name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">GENDER</label>";
		echo "<input type=\"text\" client_id=\"fname\" name=\"sex\" placeholder=\"Your Gender..\" value=\"$row[sex]\">";
		echo "<label for=\"fname\">BIRTH DATE</label>";
		echo "<input type=\"text\" client_id=\"fname\" name=\"birth_date\" placeholder=\"Your Birth Date..\" value=\"$row[birth_date]\">";
		echo "<label for=\"fname\">MARITIAL STATUS</label>";
		echo "<input type=\"text\" client_id=\"fname\" name=\"marital_status\" placeholder=\"Your Maritial Status..\" value=\"$row[marital_status]\">";
		echo "<label for=\"fname\">NID</label>";
		echo "<input type=\"text\" client_id=\"fname\" name=\"nid\" placeholder=\"Your NID..\" value=\"$row[nid]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input type=\"text\" client_id=\"fname\" name=\"phone\" placeholder=\"Your Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"fname\">ADDRESS</label>";
		echo "<input type=\"text\" client_id=\"fname\" name=\"address\" placeholder=\"Your Address..\" value=\"$row[address]\">";
		echo "<label for=\"fname\">POLICY ID</label>";
		echo "<input type=\"text\" client_id=\"fname\" name=\"policy_id\" placeholder=\"policy id..\" value=\"$row[policy_id]\">";	
    }
		echo "<br>\n";
			echo "<input type=\"submit\" value=\"UPDATE\">";
			echo "</form>\n";
			echo "</div>\n";
			echo "\n";
            ?>
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>