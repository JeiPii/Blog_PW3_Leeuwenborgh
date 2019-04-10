<?php
//Heredoc
$html = <<<OUTPUT
        <div id="CustomerTableDiv">
        <table id="BlogPostz">

OUTPUT;

    while($row = $stmt->fetch()){
    $id= $row["blogID"];
    $html .= "&nbsp;<tr class='BID'><td>".$row["blogID"]."</td></tr>""<tr class='Buser'><th>Made by:</th><td>".$row["userID"]."</td></tr><br />""<tr class='Btitle'><td><b>".$row["blogTitle"]."</b></td></tr>""<tr class='Btext'><td>".$row["blogText"]."</td></tr>""<tr class='Btags'><th>Blog Tags:</th><td>".$row["blogTags"]."</td></tr>""<tr class='Btype'><th>Blog typen:</th><td>".$row["blogType"]."<br /></td></tr>""<tr class='Bdate'><th>Datum van publicatie:</th><td>".$row["blogDate"]."</td></tr>&nbsp;""<tr class='Bbutton'><td><button class='button' style='vertical-align:middle' onclick='window.location.href=`KlantenDetails.php?id=$id`'>Details</button></td></tr>";
}
    $html .= "</table>";

        echo $html;
?>