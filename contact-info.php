<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Info</title>
</head>
<body>
    <?php
    $Fname = $_REQUEST['Fname'];
    $Lname = $_REQUEST['Lname'];
    $Email = $_REQUEST['Email'];
    $Message = $_REQUEST['Message'];
    
    echo("First name:" . $Fname);
    echo("<br/>Last name:" . $Lname);
    echo("<br/>Email:" . $Email);
    echo("<br/>Message:" . $Message);
    ?>
</body>
</html>