<?php

  $servername = "localhost";
  $username = "teamtwo5_design";
  $password = "XerxesDesign";
  $dbname = "teamtwo5_design";

  $teamName = strToLower($_GET['teamName']);
  $teamNumber = strToLower($_GET['teamNumber']);
  $year = strToLower($_GET['year']);
  $robotName = strToLower($_GET['robotName']);
  $driveTrain = strToLower($_GET['driveTrain']);
  $intake = strToLower($_GET['intake']);
  $shooter = strToLower($_GET['shooter']);
  $location = strToLower($_GET['location']);
  $sensors = strToLower($_GET['sensors']);
  $keywords = strToLower($_GET['keywords']);

  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $sql = 'SELECT * FROM Data';
      
      print "<tr><th>Team Name</th><th>Team Number</th><th>Year</th><th>Robot Name</th><th>Drivetrain</th><th>Intake</th><th>Shooter</th><th>Special Info</th><th>Website</th></tr>";
      
      foreach ($conn->query($sql) as $row) {
        $appropriate = false;
        if(strpos(strToLower($row['Team Name']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Team Number']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Year']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Robot Name']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Drivetrain']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Intake']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Shooter']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Special Info']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Website']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Rookie Year']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Location']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Motto']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Sponsors']), $query) > -1) {
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
          print "</td><td>";
          print $row['Rookie Year'] . "\t";
          print "</td><td>";
          print $row['Rookie Year'] . "\t";
          print "</td><td>";
          print $row['Location'] . "\t";
          print "</td><td>";
          print $row['Motto'] . "\t";
          print "</td><td>";
          print $row['Sponsors'] . "\t";
          print "</td></tr>";
        }
      }
   }
   catch (PDOException $e) {
     echo "Error: " . $e->getMessage();
   }      

$conn = null;  











  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $sql = 'SELECT * FROM Data';
      
      print "<tr><th>Team Name</th><th>Team Number</th><th>Year</th><th>Robot Name</th><th>Drivetrain</th><th>Intake</th><th>Shooter</th><th>Special Info</th><th>Website</th></tr>";
      
      foreach ($conn->query($sql) as $row) {
        $appropriate = false;
        if(strpos(strToLower($row['Team Name']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Team Number']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Year']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Robot Name']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Drivetrain']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Intake']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Shooter']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Special Info']), $query) > -1) {
          $appropriate = true;
        } elseif (strpos(strToLower($row['Website']), $query) > -1) {
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

