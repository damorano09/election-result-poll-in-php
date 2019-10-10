<html>
<head>
<?php
 require "database.php";

$sql1 = "SELECT * FROM polling_unit WHERE polling_unit_number != ''";
$result1 = mysqli_query($conn, $sql1);
while($row1 = mysqli_fetch_assoc($result1)) {
   echo "Polling Unit Name: " . $row1["polling_unit_name"]. "<br>";
   echo "Polling Unit Number: " . $row1["polling_unit_number"]. "<br>";
   // echo "party_score: " . $row["party_score"]. "<br>"; 
   $primaryKey = $row1['uniqueid'];

   $sql = "SELECT party_abbreviation, party_score FROM announced_pu_results WHERE polling_unit_uniqueid = '$primaryKey'";
 $result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      //  echo "polling_unit_uniqueid: " . $row["polling_unit_uniqueid"]. "<br>";
       echo "party_abbreviation: " . $row["party_abbreviation"]. "<br>";
       echo "party_score: " . $row["party_score"]. "<br>"; 
    }
 } else {
    echo "0 results";
 }

 echo "<br/>";
 echo "<br/>";
}


//  $sql = 'SELECT polling_unit_uniqueid, party_abbreviation, party_score FROM announced_pu_results';
//  $result = mysqli_query($conn, $sql);

//  if (mysqli_num_rows($result) > 0) {
//     while($row = mysqli_fetch_assoc($result)) {
//        echo "polling_unit_uniqueid: " . $row["polling_unit_uniqueid"]. "<br>";
//        echo "party_abbreviation: " . $row["party_abbreviation"]. "<br>";
//        echo "party_score: " . $row["party_score"]. "<br>"; 
//     }
//  } else {
//     echo "0 results";
//  }
 mysqli_close($conn);
?>

</body>
</html>