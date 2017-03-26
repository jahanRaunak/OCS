<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  
  <link rel ="stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <style>
    
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

.page_heading { border-bottom:solid 1px #dedede; font-size:20px; font-weight:normal; margin:0 0 5px 0;  padding:10px 0 10px 0; color:#54bf83; }
.history { font-size:11px; color:#ccc; display:block; text-align:right;}

    .well{
     background-color: #b2dfdb;
    }
    
    
    .row.content {height: 550px}
    
   
    .sidenav {
      padding-top: 20px;
      background-color: Black;
      height: 100%;
      color:SeaShell;
    }
    
  
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    
    
   
  </style>
</head>
<body>

  <header class="banner" role="banner" style="padding: 0px;margin:0;">
    
  <div class="container-fluid" style="padding: 0px; margin:0;">
    
       <div class="col-sm-12">
         <!--<img src="b.jpg" width="100%" height="75">-->
       </div>
    
  </div>
</header>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    
      <a class="navbar-brand" href="#">
<img style="max-width:100px; margin-top: -7px;"
             src="a.jpg">

      </a>
    </div>
    
      <ul class="nav navbar-nav">
        <li><a href="home.php" style="color:#b2dfdb">Home</a></li>
        <li><a href="imp1.php" style="color:#b2dfdb">Important Dates</a></li>
        <li><a href="faq.php" style="color:#b2dfdb">FAQ</a></li>
        <li><a href="contact.php" style="color:#b2dfdb">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin_login.php" style="color:#b2dfdb"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
           <li><a href="register.php" style="color:#b2dfdb"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="logout.php" style="color:#b2dfdb"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>



      </ul>
    
  </div>
</nav>

  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <div class="well" style="background-color:#b2dfdb;">
            <p style="color:Crimson;"><span class="glyphicon glyphicon-hand-right"></span>GUIDELINES</p><hr>
       
        <p><a href="impins.php" style="color:blue;"><span class="glyphicon glyphicon-chevron-right"></span>Important Instructions</a></p>     
            
   
      </div>
      <div class="well">
     <p style="color:DarkMagenta;"><span class="glyphicon glyphicon-hand-right"></span>ACHIEVEMENTS</p><hr>

     <li><p style="color:DeepPink;"> Re-Accredited by NAAC</p></li>
     <li><p style="color:DeepPink;"> Accredited by NBA</p></li>
     <li><p style="color:DeepPink;"> Ranked 2nd among the top colleges in Kerala</p></li>
        </div>
    </div>
    <div class="col-sm-8 text-left"> 
     <br>
<h3>WELCOME  <?php  if(isset($_SESSION['name'])){echo $_SESSION['name'];}?></h3><hr>
<h4><center>Enter Your Preferences</center></h4>
<br>
  <form class="form-horizontal" action="pref1.php" method='post'>
  
    <div class="form-group">
      <label class="control-label col-sm-3" for="pref1">Preference1 :</label>
      <div class="col-sm-6">
        
    <select class="form-control" id="Pref1" name="Pref1">
      <option value="0">CS</option>
      <option value="1">IT</option>
     
     
    </select>
  
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-3" for="pref2">Preference2 :</label>
      <div class="col-sm-6">
        
    <select class="form-control" id="Pref2" name="Pref2">
        <option value="0">CS</option>
        <option value="1">IT</option>
        </select>
  
      </div>
    </div>
   
    
   
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success" name="submit">Submit</button>

        <br><br>

        <h4><pre><strong>Note:</strong>The Last Value Of Preference Will Be Considered</pre></h4>

      </div>

     
    
  </form>
</div>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p style="color:Crimson;"><span class="glyphicon glyphicon-globe"></span>NEWS</p>
        <hr>
        <marquee style="color:blue;height: 180px;" direction="up" scrolldelay="10" scrollamount="5" behavior="alternate">

            <div>CAT 2017 - Candidates can change the wrong entries regarding reservation/Creamy Layer Status. For details see notice on the website.<br><br><br></div>
            <div>Candidates can contact admin in case of any discrepancies.<br><br><br></div>

          </div>Payment Option is available in Candidate Home Page.<br><br><br></div>

          <div>Candidates are advised to go through the prospectus and get acquainted with the courses offered and fee structure of each course before applying.<br><br> </div>



        </marquee>
      </div>
        
     


      <div class="well">
        <p style="color:DarkMagenta;"><span class="glyphicon glyphicon-hand-right"></span>IMPORTANT LINKS</p>
        <hr>
        <a href="showlastrank1.php" style="color:red;"><span class="glyphicon glyphicon-chevron-right"></span>Show Last Rank-2016</a>
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
  $rank=$_SESSION["Rank"];
   $pref1 = $_POST['Pref1'];
  $pref2 = $_POST['Pref2'];
 


  if($pref1==$pref2)
    echo "<script>alert('Please Enter Different Preferences')</script>";
  else
  {
  //INSERTING DATA TO DATABASE
  $query = "UPDATE pref SET Pref1='$pref1',Pref2='$pref2' WHERE Rank='$rank'";
  if (mysqli_query($conn, $query)) 
  {
       echo "<script>alert('Preferences Entered Successfully.')</script>";
  }  
  }
  
}

?>
</html>
