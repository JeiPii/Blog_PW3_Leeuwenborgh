<?php 
require_once 'ConnectDatabase.php';

$stmt = $db_conn->prepare("SELECT * FROM blogposts");
$stmt->execute();

while($row = $stmt->fetch()){
    echo "<table>";
    echo "<tr><th>Blog nummer:</th><td>".$row["blogID"]."</td></tr>";
    echo "<tr><th>User nummer:</th><td>".$row["userID"]."</td></tr>";
    echo "<tr><th>Blog Titel:</th><td>".$row["blogTitle"]."</td></tr>";
    echo "<tr><th>Blog Text:</th><td>".$row["blogText"]."</td></tr>";
    echo "<tr><th>Blog Tags:</th><td>".$row["blogTags"]."</td></tr>";
    echo "<tr><th>Blog typen:</th><td>".$row["blogType"]."</td></tr>";
    echo "<tr><th>Datum van publicatie:</th><td>".$row["blogDate"]."</td></tr>";
}
echo"</table>";
?>