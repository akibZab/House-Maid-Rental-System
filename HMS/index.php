<?php
session_start();

if(isset($_SESSION["username"])){
	header("Location: home.php");
	}
?>

<head>
<style>

.container{
	width: 550px;
    height: 700px;
    margin:auto;
	margin-top: 13%;
	padding-top: 1px;
	
}

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  padding-top: 30px;
  position: relative;
  z-index: 1;
  background: #568f62;
  max-width: 349px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #a9b7de;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  color: white;
}
.form button{
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #214a80;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #4270ad;
}

.form .submit-btn{
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #944000;
  width: 100%;
  border: 0;
  padding: 15px;
  color: black;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form a{
  color: white;
  font-size: 11px;
}
.form .submit-btn:hover,.form button:active,.form a:active,.form button:focus {
background: #820016;
color: white;
}
.form p{
  color: #faf7b6;
  font-size: 14px;
  margin-block-start: 0.2em;
  margin-block-end: 0.2em;
}
h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    color: white;
}

.imgs{
    margin-top: 0%;
    margin-left: 20%;
    weight: 40%;
    height: 40%;
}
body {
  background: url(clean3.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>
<!-- back navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="welcome.php"><i class="fa fa-home w3-margin-right"></i><h3><u><b>Home</b></u></h3></a>
  </div>
 </div>
 
<title>Login Page</title>
</head>
<!-- <img class="imgs" src="toko.png" alt="Login Logo"> -->
<div class="container">
	<div class="login-page">
	  <div class="form">
		<form class="login-form" action="login.php" method="POST">
		  <input type="text" name="username" id="" placeholder="username"/>
		  <input type="password" name="password" id="" placeholder="password" />
		  <button>login</button>
		</form>
    <h3>Don't have an account?</h3>
      <button class="submit-btn"><a href="register.php" style="text-decoration: none;"><p>Register Now<p></a></button>
	  </div>
	</div>
</div>










