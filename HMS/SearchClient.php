<!DOCTYPE html>

<html>
<head>
	<?php
	session_start();
	include'connection.php';
	
	$username = $_SESSION["username"];
?>
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
    <title>Search</title>

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
<body><div id="wrapper">
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
                        <h1 class="page-head-line">Search Results  			
						</h1>
						
						<div class= "searchBar">
		  <form action="SearchClient.php" method="post">
          <input type="text" name="key"><br>
          <input class="searchBtn" type="submit" value="SEARCH">
		  </br>
          </form>
	  </div>
						
						
						
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php
	   $key       = $_POST["key"];

	   ///////    SEARCHES IN CLIENTS
	   
       $sql="SELECT * FROM agent WHERE agent_id LIKE '%" . $key .  "%' OR name LIKE '%" . $key ."%' OR branch LIKE '%" . $key ."%'";  
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
				
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>Agent ID</th>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>PHONE</th>\n";
	echo "    <th>Location</th>\n";
	echo "    <th>Rate</th>\n";
	echo "    <th>Hire/Book</th>\n";
    echo "  </tr>";
   
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["agent_id"]."</td>\n";
		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "    <td>".$row["branch"]."</td>\n";
		echo "    <td>"."<a href='add_rate.php?agent_id=".$row["agent_id"]. "'>Rate Worker</a>"."</td>\n";
		echo "<td>"."<a href='claim.php?agent_id=".$row["agent_id"]. "'>Send Request</a>"."</td>\n"; 
		
	   }	 
	  }else{ echo"Nothing found in Agents Table";echo"<br>";  echo"<br>"; 
	  }
	  
$conn->close();
?>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    
    

	
</body>
</html>
