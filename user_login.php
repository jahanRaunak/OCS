<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <style>
   
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    

    .row.content {height: 550px}
    
   
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    

    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    
   
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    
      <a class="navbar-brand" href="a.jpg">Logo</a>
    </div>
    
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.html">Home</a></li>
        <li><a href="#">Important Dates</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
           <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="login2.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>


      </ul>
    
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <div class="well">
            <h3>
                Guidelines
            </h3>
       
        <p><a href="#">Important Instructions</a></p>     
      </div>
      <div class="well">
     <p><a href="#">Current Events</a></p>
      </div>
    </div>
<div class="col-sm-8 text-left">
<br>
  <form class="form-horizontal" action="user_login.php" method='post'>
    <div class="form-group">
      <label class="control-label col-sm-3" for="User_Id">Rank :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="User_Id" name="Rank" placeholder="Enter rank">
      </div>
    </div>
	
	
   
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-3">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" name="submit" class="btn btn-success">Login</button>

      </div>

     
  </form>
</div>
</div>

    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>News</p>
      </div>
      <div class="well">
        <p>Important Links</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright @2017  CUSAT Mini Project</p>
</footer>

</body>

<?php

// Create connection
$conn = mysqli_connect("localhost","root","","ocs");

// Check connection
if (mysqli_connect_errno())
{
 echo "MySQLi Connection was not established: " . mysqli_connect_error();
}

if (isset($_POST['submit'])){
	$_SESSION['rank']=$_POST['Rank'];
   $Rank = $_POST['Rank'];
   
  
 if($Rank==''){
  
 echo "<script>alert('Please Enter All The Fields')</script>";
 exit();
 
 } 
  
 $check_pass = "select * From register where Rank='$Rank' ";
 $result_pass = mysqli_query($conn, $check_pass) or die (mysqli_error($conn));
 
  if (mysqli_num_rows($result_pass) > 0){
  
  echo"<script>window.open('alloted.php','_self')</script>";
  
  exit();
  }
  
  
  
  
}
?>
</html>
