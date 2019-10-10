<?php

// PHP7 specific, fails fast, this file only 
// declare(strict_types=1); 
// // this file and all included/required files
//    error_reporting(-1); 
//    ini_set('display_errors', 'true');
//    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// remaining script goes here
// Include config file
require_once "database.php";
 
if(isset($_POST["submit"])){
$sql = "INSERT INTO announced_pu_results (polling_unit_uniqueid, party_abbreviation, party_score)
VALUES ('".$_POST["polling_unit_uniqueid"]."','PDP','".$_POST["pdp_score"]."')";

$sql1 = "INSERT INTO announced_pu_results (polling_unit_uniqueid, party_abbreviation, party_score)
VALUES ('".$_POST["polling_unit_uniqueid"]."','DPP','".$_POST["dpp_score"]."')";

$sql2 = "INSERT INTO announced_pu_results (polling_unit_uniqueid, party_abbreviation, party_score)
VALUES ('".$_POST["polling_unit_uniqueid"]."','ACN','".$_POST["acn_score"]."')";

$sql3 = "INSERT INTO announced_pu_results (polling_unit_uniqueid, party_abbreviation, party_score)
VALUES ('".$_POST["polling_unit_uniqueid"]."','PPA','".$_POST["ppa_score"]."')";

$sql4 = "INSERT INTO announced_pu_results (polling_unit_uniqueid, party_abbreviation, party_score)
VALUES ('".$_POST["polling_unit_uniqueid"]."','CDC','".$_POST["cdc_score"]."')";

$sql5 = "INSERT INTO announced_pu_results (polling_unit_uniqueid, party_abbreviation, party_score)
VALUES ('".$_POST["polling_unit_uniqueid"]."','JP','".$_POST["jp_score"]."')";

if (($conn->query($sql) === TRUE) && ($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE) && ($conn->query($sql5) === TRUE)){
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="" method="post">
                    <!-- <select name="pu" form="carform">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select> -->
                        <div class="form-group">
                            <label>PU uniqueid</label>
                            <input type="text" name="polling_unit_uniqueid" class="form-control" value="" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>PDP Score</label>
                            <input type="text" name="pdp_score" class="form-control" value="" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>DPP Score</label>
                            <input type="text" name="dpp_score" class="form-control" value="" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>ACN Score</label>
                            <input type="text" name="acn_score" class="form-control" value="" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>PPA Score</label>
                            <input type="text" name="ppa_score" class="form-control" value="" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>CDC Score</label>
                            <input type="text" name="cdc_score" class="form-control" value="" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>JP Score</label>
                            <input type="text" name="jp_score" class="form-control" value="" required>
                            <span class="help-block"></span>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>