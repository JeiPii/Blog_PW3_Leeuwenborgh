<?php
//Heredoc
$html = <<<OUTPUT
        <div id="CustomerTableDiv">
        <table id="BlogPostz" class="BlogTable">
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>E-mail</th>
                <th>Details</th>
            </tr>
OUTPUT;

    while($row = $stmt->fetch()){
    $id= $row["customerID"];
    $html .= "<tr><td>" .$row["customerID"]."</td><td>" .$row["firstname"]. "</td><td>" .$row["lastname"]. "</td><td>" .$row["email"]."</td><td><button class='button' style='vertical-align:middle' onclick='window.location.href=`customerinfo.php?id=$id`'>Details</button></td></tr>";
}
    $html .= "</table>";

        echo $html;
?>