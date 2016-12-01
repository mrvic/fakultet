<?php
/**
 * Created by PhpStorm.
 * User: SkyLucy
 * Date: 4.11.2016.
 * Time: 0:58
 */

include 'mysql-config.php';

$sql = "SELECT * FROM mjesto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    //$row = $result->fetch_assoc();

    $fieldinfo=mysqli_fetch_fields($result);

    while($row = $result->fetch_assoc()) {
echo
"
Array
(\n";
        foreach ($fieldinfo as $fi){
echo "'".$fi->name."' => '".$row[$fi->name]."', \n";
        }
echo "'created_at' => NULL,
'updated_at' => NULL
)";

            /*
 'imeStud' => '$row[imeStud]',
 'prezStud' => '$row[prezStud]',
 'pbrRod' => '$row[pbrRod]',
 'pbrStan' => '$row[pbrStan]',
 'datRodStud' => '$row[datRodStud]',
 'jmbgStud' => '$row[jmbgStud]',
 'created_at' => '',
 'updated_at' => ''
 ),\n";
 */


        //echo $row["imeStud"];
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>