<?php include_once './ConnectDatabase.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Front-end/css/style.css">
    <script type="text/javascript" src="../../Front-end/js/script.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog update JP</title>
</head>
<body>


<table class="EduchainTable">
<?php

$id = $_GET['id'];

$stmt = $db_conn->prepare("SELECT * FROM blogposts WHERE blogID = $id");
$stmt->execute();
    
    while($row = $stmt->fetch()){
    
    echo "<tr><th></th><td rowspan='2'><button class='button' style='vertical-align:middle' 
    onclick='window.location.href=`index.php`'>Terug</button></td></tr>";



    }
    echo "</table>";
    ?>

    
</body>
</html>