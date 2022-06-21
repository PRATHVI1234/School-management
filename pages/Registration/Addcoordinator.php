<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}

if(isset($_POST['submit'])){
	
	include('../../config/DbFunction.php');
	$obj=new DbFunction();
	$obj->create_coordinator($_POST['username'],$_POST['opt'],$_POST['password']);
	
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color: pink;
}
.container {
    padding: 50px;
  background-color: lightblue;
}

input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: orange;
  outline: none;
}
 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
</style>
<!-- Bootstrap Core CSS -->
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<form method="post">
  <div class="container">
  <center>  <h1>Registration</h1> </center>
  <hr>
  <label> Username </label> 
    <input type="text" name="username" placeholder= "username" size="15" required /> 
    <label> Password: </label>  
    <input type="password" name="password" placeholder="password" size="15"required /> 
    <div>
      </div>
    <label> 
    Type :
    </label>
    <select name="opt">
    <option value="coordinator">coordinator</option>
    <option value="parent">parent</option>
    <option value="teachers">teachers</option>
    </select>
    <br><br>
    <input type="submit" class="btn btn-primary" name="submit" value="Register"></button>
    </form>