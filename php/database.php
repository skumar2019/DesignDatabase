<?php

  $servername = "localhost";
  $username = "teamtwo5_design";
  $password = "XerxesDesign";
  $dbname = "teamtwo5_design";

  $query = $_GET['q'];

  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $sql = 'SELECT * FROM Data';
      
      print "<tr><th>Team Name</th><th>Team Number</th><th>Year</th><th>Robot Name</th><th>Drivetrain</th><th>Intake</th><th>Shooter</th><th>Special Info</th><th>Website</th></tr>";
      
      foreach ($conn->query($sql) as $row) {
        $appropriate = false;
        if(strpos($row['Team Name'], $query) > -1) {
          $appropriate = true;
        } elseif (strpos($row['Team Number'], $query) > -1) {
          $appropriate = true;
        } elseif (strpos($row['Year'], $query) > -1) {
          $appropriate = true;
        } elseif (strpos($row['Robot Name'], $query) > -1) {
          $appropriate = true;
        } elseif (strpos($row['Drivetrain'], $query) > -1) {
          $appropriate = true;
        } elseif (strpos($row['Intake'], $query) > -1) {
          $appropriate = true;
        }elseif (strpos($row['Shooter'], $query) > -1) {
          $appropriate = true;
        } elseif (strpos($row['Special Info'], $query) > -1) {
          $appropriate = true;
        } elseif (strpos($row['Website'], $query) > -1) {
          $appropriate = true;
        }
        if($appropriate) {
          print "<tr><td>";
          print $row['Team Name'] . "\t";
          print "</td><td>";
          print $row['Team Number'] . "\t";
          print "</td><td>";
          print $row['Year'] . "\t";
          print "</td><td>";
          print $row['Robot Name'] . "\t";
          print "</td><td>";
          print $row['Drivetrain'] . "\t";
          print "</td><td>";
          print $row['Intake'] . "\t";
          print "</td><td>";
          print $row['Shooter'] . "\t";
          print "</td><td>";
          print $row['Special Info'] . "\t";
          print "</td><td>";
          print $row['Website'] . "\t";
          print "</td></tr>";
        }
      }
   }
   catch (PDOException $e) {
     echo "Error: " . $e->getMessage();
   }      

$conn = null;  

?>

