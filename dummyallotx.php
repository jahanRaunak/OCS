<!DOCTYPE html>
<html>
<body>
<div>
  <form method='post' action='dummyallotx.php'>

 
<input type="submit" name="submit" value="allotx">
    
    
  
    
  </form>
</div>
</body>




<?php

// Create connection
$conn = mysqli_connect("localhost","root","","sample");

// Check connection
if (mysqli_connect_errno())
{
 echo "MySQLi Connection was not established: " . mysqli_connect_error();
}


if (isset($_POST['submit'])){
  

  $row[0]=1;
  //INSERTING DATA TO DATABASE
  $query = "SELECT name FROM atable WHERE mob=$row[0]";
  $result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0)
 {
   
     while($row = mysqli_fetch_assoc($result)) 
     {
        echo $row['name'];
     }
  
}
  
 
  
}

?>

</html>