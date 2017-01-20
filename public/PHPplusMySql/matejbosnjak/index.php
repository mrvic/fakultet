<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

include 'dbconn.php';

$data_per_page=10; 

if (isset($_GET["page"])) 
	{ 
		$page  = $_GET["page"]; 
	} 
else 
	{ 
		$page=1; 
	}

$start_from = ($page-1) * $data_per_page; 


$sql = "SELECT * FROM dvorana LIMIT $start_from, $data_per_page"; 
//$sql = "SELECT * FROM dvorana"; 
$rs_result = mysqli_query($conn, $sql); 
echo '<div class="wrap">';
echo '<div class="headindex">Popis dvorana</div>';

echo '<div class="cent">';

while ($row = mysqli_fetch_assoc($rs_result)) 
{ 

	$id = $row['oznDvorana'];            
    echo '<a class="oznaka" href="rezervacija.php?id='.$id.'">'.$id.'</a><br>';       
     
} 

echo '</div>';

 // Paginacija

$sql = "SELECT oznDvorana FROM dvorana"; 
$result = mysqli_query($conn, $sql); 
$total_records = mysqli_num_rows($result);  //Broj rekorda
$total_pages = ceil($total_records / $data_per_page); 
echo '<div class="footer">';
echo "<a class ='larrow' href='index.php?page=1'>".'F'."</a> "; // Idi na 1. stranicu 

for ($i=1; $i<=$total_pages; $i++) 
{ 
            echo "<a class='num' href='index.php?page=".$i."'>".$i."</a> "; 
}

echo "<a class='rarrow' href='index.php?page=$total_pages'>".'L'."</a> "; //Idi na zadnju stranicu
echo '</div>';
?>


</body>
</html>
