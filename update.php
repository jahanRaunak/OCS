<?php

// Create connection
$conn = mysqli_connect("localhost","root","","ocs");

// Check connection
if (mysqli_connect_errno())
{
 echo "MySQLi Connection was not established: " . mysqli_connect_error();
}

if(isset($_POST['submit']))
{  $at = $_POST['in'];

   $id = $_POST['on'];
  
           
   if($id='yes'){
	  // $check_pass = "select * From round1 where Rank='$at' ";
 //$result_pass = mysqli_query($conn, $check_pass) or die (mysqli_error($conn));
// if (mysqli_num_rows($result_pass) > 0){
   $query = "update round1 set Auto_upgrade='1' WHERE Rank='$at'";
    
   
   $result = mysqli_query($conn, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   
}}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="update.php" method="POST">
		 ENTER rank :  <input  type="text" name="in" />
 auto upgradation :  <input  type="text" name="on" />
<input type="submit" name="submit" value="submit" style="float:centre;"/>

</form>

<?php


 require'connection.php';
if(isset($_POST['submit']))
{  $at = $_POST['in'];

$a=mysql_query("select * from round1 where Rank='$at' ");
$count=0;
while($rec=mysql_fetch_row($a))
{

$count++;
//echo "<tr style='background-color:$color'><td>$rec[0]<td>$rec[1]<td>$rec[2]<td>$rec[3] ";
echo "\n";
if($rec[1]>0)
	echo "cs alloted";
if($rec[2]>0)
	echo "<h4>waiting list in cs is $rec[2]</h4>"; 
if($rec[4]>0)
	echo "<p>waiting list in it is $rec[4]</p>"; 


}

}
?>


    </body>


</html>
