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
        <li class="active"><a href="admin_login.php" style="color:#b2dfdb"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
           <li><a href="register.php" style="color:#b2dfdb"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="login2.php" style="color:#b2dfdb"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>



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
  <form class="form-horizontal" action="dummyshow.php" method='post'>
    
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" name="submit" class="btn btn-info btn-block">Show Admitted Students.</button>
      </div>
      </div>

      
    
  </form>




<?php

// Create connection
$conn = mysqli_connect("localhost","root","","ocs");

// Check connection
if (mysqli_connect_errno())
{
 echo "MySQLi Connection was not established: " . mysqli_connect_error();
}


if (isset($_POST['submit'])){

 $sql = "SELECT * FROM round1 WHERE Payment='1' AND Auto_upgrade='0'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
 {
   
    while($row = mysqli_fetch_array($result))
    {
        
        for($j=1;$j<=3;$j+=2)
        {
            if($row[$j]==1)
            {

                $x=($j-1)/2;

                $query1 = "SELECT * FROM register WHERE Rank=$row[0]";
                $result1 = mysqli_query($conn, $query1);

               if (mysqli_num_rows($result1) > 0)
                 {
                     $row1 = mysqli_fetch_array($result1);
                     $query2 = "INSERT INTO admitted_std (Rank, Name, A_branch) VALUES ('$row1[0]', '$row1[1]', '$x')";

                    if (mysqli_query($conn, $query2)) 
                    {
                     echo "successful";
                    } 
                  } 


                 break;

 
               
            }
        }
    }
    
}
 else {
    echo "0 results";
}



            $sql = "SELECT * FROM round2 WHERE Payment='1' AND Auto_upgrade='0'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
 {
   
    while($row = mysqli_fetch_array($result))
    {
       
        for($j=1;$j<=3;$j+=2)
        {
            if($row[$j]==1)
            {

                $y=($j-1)/2;

                $query1 = "SELECT * FROM register WHERE Rank=$row[0]";
                $result1 = mysqli_query($conn, $query1);

               if (mysqli_num_rows($result1) > 0)
                 {
                     $row1 = mysqli_fetch_array($result1);
                      $query2 = "INSERT INTO admitted_std (Rank, Name, A_branch) VALUES ('$row1[0]', '$row1[1]', '$y')";
                    if (mysqli_query($conn, $query2)) 
                     {
                         echo "";
                      } 
                  } 

                  break;
               

 
                
            }
        }
    }
    
}
 else {
    echo "0 results";
}




  //INSERTING DATA TO DATABASE
  $query3 = "SELECT * FROM admitted_std";
  $result3 = mysqli_query($conn, $query3);

if (mysqli_num_rows($result3) > 0)
 {?>
   <div class="bs-example">
   <table class="table table-striped">
   <thead>
    <tr>
      <th>Rank</th>
      <th>Name</th>
      <th>Allotted Branch</th>
     
    </tr>
  </thead><tbody>

  <?php
    while ($row3 = mysqli_fetch_assoc($result3))
        {

            if($row3['A_branch']==0)
              $x="CS";
            else
              $x="IT";

            echo '<tr>
                                      
                                      <td >'.$row3['Rank'].'</td>
                                       <td >'.$row3['Name'].'</td>
                                        <td >'.$x.'</td>
                                     
                                    
                                </tr>';

} ?>
</tbody></table></div>
<?php
  
}


 

}

?>




















      
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
</html>
