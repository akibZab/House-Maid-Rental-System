<!-- Here this page shows workers their profile page -->
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
    <title>Worker's Status</title>
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
                	
                <a class="navbar-brand" href="home.php">IM cleaning serivce</a>
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
                      <a href="agent.php"><i class="fa fa-life-saver "></i>Workers</a>
                            
                 </li>   --> 
                 <li>
                      <a href="policy.php"><i class="fa fa-pencil-square-o "></i>Services</a>
                          
                 </li>     
                 <li>
                      <a href="manageprof.php"><i class="fa fa-credit-card "></i>Manage Profile</a>
                            
                 </li>
                  
                 <?php
                 $agent_id = $_SESSION["username"];
                    echo "<li>".
                        "<a href='ClaimReq.php?agent_id=$agent_id'><i class='fa fa-envelope'></i>Claim Request</a>"."</li>";
                    ?> 

                <?php
                    if ($_SESSION["username"]=="admin") {
                    echo '<li><a href="payment.php"><i class=" fa fa-envelope "></i>Payment</a></li>';
                    echo '<li><a href="client.php"><i class="fa fa-users "></i>CLIENTS</a ></li> ';
                    }
                    ?> 

                </ul>

            </div>
		

        </nav>
		 
		  
	
   
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Worker's Status</h1>
                    <div class="col-md-12">
                        <button class="btn" align="center"> 
                     <?php
						echo "<td>"."<a href='agentedit.php?agent_id=$username'>Edit</a>"."</td>\n";
					?>
						</button>
					</div>
                    
                
                <!-- /. ROW  -->
<?php

	
		
	$agent_id = $_SESSION["username"];
	
	            //   PRINTS CLIENT's info
	$sql = "SELECT * from agent where agent_id='$agent_id'";
	$result = $conn->query($sql);
	$policy_id = "";
	   
	while($row = $result->fetch_assoc()) {
?>
<?php
		echo "<label for=\"fname\">Worker ID</label>";
	    echo "<input disabled type=\"text\" agent_id=\"fname\" name=\"agent_id\" placeholder=\"Your id..\" value=\"$row[agent_id]\">";
		echo "<label for=\"fname\">NAME</label>";
	    echo "<input disabled type=\"text\" agent_id=\"fname\" name=\"name\" placeholder=\"Your Name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input disabled type=\"text\" agent_id=\"fname\" name=\"phone\" placeholder=\"Your Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"fname\">Branch</label>";
		echo "<input disabled type=\"text\" agent_id=\"fname\" name=\"branch\" placeholder=\"Your Branch..\" value=\"$row[branch]\">";
    }
		echo "<br>\n";

	    echo "<br>\n";

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
