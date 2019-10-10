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
$sql = "INSERT INTO polling_unit (polling_unit_number, polling_unit_name)
VALUES ('".$_POST["polling_unit_number"]."','".$_POST["polling_unit_name"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
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
                        <div class="form-group">
                            <label>Polling Unit Number</label>
                            <input type="text" name="polling_unit_number" class="form-control" value="" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Polling Unit Name</label>
                            <input type="text" name="polling_unit_name" class="form-control" value="" required>
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