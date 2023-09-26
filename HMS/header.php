<?php
	session_start();
	include'connection.php';
	$username = $_SESSION["username"];
	$sql = "SELECT agent_id FROM agent WHERE agent_id = '$username'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
     
    }
    else {
	header("Location: clientHome.php");
   }
	
?>


<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0; background-color: #2c4891;">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="index.php">IM cleaning serivce</a>
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
                        <div class="user-img-div" style="background-color: #38375e;">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php
									if(!isset($_SESSION["username"])){
										header("Location: index.php");
									}else {
										echo "welcome, ".$_SESSION["username"];
									}
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
                    echo '<li><a href="report.php"><i class="fa fa-users "></i>Complaints</a ></li> ';
                    }
                    ?>              
                     
                </ul>

            </div>
		

        </nav>
		 
		  
	
   