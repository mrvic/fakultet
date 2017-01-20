<html>
<head>
     <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css" />
</head>
<body>

<?php
include 'dbconn.php';

//eader("Content-Type: text/html; charset=ISO-8859-1"); // Riješava problem prikazivanja upitnih znakova unutar crnih kvadrata umjesto slova ž...

$data = $_GET['id'];

//$query = "SELECT DISTINCT oznDvorana, oznVrstaDan, sat, sifPred FROM rezervacija WHERE oznDvorana = '".$data."' "; - Početni query

//$query = "SELECT * FROM rezervacija WHERE oznDvorana = '".$data."' ORDER BY CASE WHEN oznVrstaDan = 'PO' THEN 1 WHEN oznVrstaDan = 'UT' THEN 2 WHEN oznVrstaDan = 'SR' THEN 3 WHEN oznVrstaDan = 'CE' THEN 4 WHEN oznVrstaDan = 'PE' THEN 5 END ASC"; - Sortiranje dana u tjednu bez JOIN-a

$query = "SELECT rezervacija.oznDvorana, rezervacija.sifPred, rezervacija.sat, rezervacija.oznVrstaDan, pred.nazPred, pred.sifPred FROM rezervacija JOIN pred ON rezervacija.sifPred = pred.sifPred  WHERE oznDvorana = '".$data."' ORDER BY CASE WHEN oznVrstaDan = 'PO' THEN 1 WHEN oznVrstaDan = 'UT' THEN 2 WHEN oznVrstaDan = 'SR' THEN 3 WHEN oznVrstaDan = 'CE' THEN 4 WHEN oznVrstaDan = 'PE' THEN 5 END ASC, sat ASC"; // <-


$result = mysqli_query($conn, $query);

echo '<div class="info-box">';  
echo '<a class="button" href="index.php"><div class="head"><i class="fa fa-long-arrow-left arrow" aria-hidden="true"><tag class="htext">Povratak na index</tag></i></div></a>';
echo '<div class="hbody"><p>Dvorana '.$data.'</p></div>';
echo '<div class="body">';
$search  = array('?', '&auml;', '&ouml;', '&amp;', '&uuml;', '&lt;', '&gt;', '&quot;');
$replace = array('č', 'ć', 'š', 'ž', 'đ', 'c', 's', 'd', 'z');


while ($row = mysqli_fetch_assoc($result)) 
{ 
    $dan = $row['oznVrstaDan'];
    //$naziv = $row['nazPred'];
   
    $naziv = str_replace($search, $replace, $row['nazPred']);      
    switch($dan)
      {
        case "PO":
        echo "<td>Ponedjeljak,";
            break;
        case "SR":
        echo "<td>Srijeda, ";
        break;
      }
      
      
    echo date('s:i', $row['sat']).", ".$naziv."</td>";
      switch($dan)
      {
        case "PO":
        echo "<td>Ponedjeljak, ".date('s:i', $row['sat']).", ".$naziv."</td>";
        break;

        case "UT":
        echo "<td>Utorak, ".date('s:i', $row['sat']).", ".$naziv."</td>";
        break;

        case "SR":
        echo "<td>Srijeda, ".date('s:i', $row['sat']).", ".$naziv."</td>";
        break;

        case "CE":
        echo "<td>Četvrtak, ".date('s:i', $row['sat']).", ".$naziv."</td>";
        break;

        case "PE":
        echo "<td>Petak, ".date('s:i', $row['sat']).", ".$naziv."</td>";
        break;
      }
       
        echo '<br>';
        

} 

if(empty($naziv))
{
    echo '<div class="empty">Nema rezervacije</div>';
}


echo '</div>';
echo '</div>';

?>

</body>
</html>