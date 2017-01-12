<?php

$con=mysqli_connect("localhost","root","","fakultet");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM dvorana";
$result=mysqli_query($con,$sql);

// Associative array
while($row=mysqli_fetch_assoc($result)){
printf ("%s (%s)<br>",$row["oznDvorana"],$row["kapacitet"]);
}
// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>