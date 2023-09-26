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

/*==========================*/

.image {
    position: relative;
    width: 400px;
    left: 300px;
    top: 100px;
}
.imageee {
    position: relative;
    width: 400px;
    left: 800px;
    bottom: 125px;
    height: 230px;
}
.image__img {
    display: block;
    width: 100%;
}
.image__img2 {
    display: block;
    width: 100%;
    height: 230px;
}

.image__overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    color: #ffffff;
    font-family: 'Quicksand', sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.25s;
}

.image__overlay--blur {
    backdrop-filter: blur(5px);
}

/*.image__overlay--primary {
    background: #009578;
}*/

.image__overlay > * {
    transform: translateY(20px);
    transition: transform 0.25s;
}

.image__overlay:hover {
    opacity: 1;
}

.image__overlay:hover > * {
    transform: translateY(0);
}

.image__title {
    font-size: 2em;
    font-weight: bold;
}

.image__description {
    font-size: 1.25em;
    margin-top: 0.25em;
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
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: #2c4891;">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="clienHome.php">IM Cleaning Service</a>
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
<div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">payment method</h1>
<a href="https://www.bkash.com/app/">
<div class="image">
    <img class="image__img" src="bkash.jpg" alt="Bricks">
    <div class="image__overlay image__overlay--primary">
        <div class="image__title">Bkash</div>
        <p class="image__description">
            Click here to pay
        </p>
    </div>
</div>
</a>

<a href="https://nagad.com.bd/">
<div class="imageee">
    <img class="image__img2" src="nogod.jpg" alt="Bricks">
    <div class="image__overlay image__overlay--primary">
        <div class="image__title">Nogod</div>
        <p class="image__description">
            Click here to pay
        </p>
    </div>
</div>
</a>
    
<h1>To use Bkash: </h1>
<p style="font-size: 20px; font-family: cursive;">
    1. go into the link<br>
    2. sign into an acount<br>
    3. enter agent phone number<br>
    4. enter cash amount<br>
    5. enter your pin<br>
    6. submit your Tnx id into the box
</p><br>
<h1>To use Nogod: </h1>
<p style="font-size: 20px; font-family: cursive;">
    1. go into the link<br>
    2. sign into an acount<br>
    3. enter agent phone number<br>
    4. enter cash amount<br>
    5. enter your pin<br>
    6. submit your Tnx id into the box
</p><br>

<form action="" method="post">

<b>Tnx ID :</b>
<input type="text" name="Name"><br>
<input type="submit">
</form>