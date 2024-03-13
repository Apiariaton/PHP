<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Form Submission Response: </br></h1>
<?php

$restrictedNames = array("Admin1","Admin2");

$fullName = (isset($_REQUEST['fullName']) and !in_array($_REQUEST['fullName'],$restrictedNames)) ? $_REQUEST['fullName'] : "undefined";
$age = isset($_REQUEST['age']) ? $_REQUEST['age'] : "undefined";

echo "<p1>"."Full Name:  ".$fullName."</p1> </br>"; 
echo "<p1>"."Age:  ".$age."</p1> </br>";



?>

    
</body>
</html>

