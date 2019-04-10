<?php require_once './ConnectDatabase.php'; ?> 
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "2";
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <?php   
    $stmt = $db_conn->prepare("SELECT * FROM blogposts");
    $stmt->execute();?>
    <!-- <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Front-end/css/style.css">
    <script type="text/javascript" src="../../Front-end/js/script.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog JP</title>
</head>

<body>
    <h1>JP's Blog Yeah Boi</h1>
    <button onclick="OneHidyBoy()"id="addPost">Add Blog Post</button>
    <div id="customerFormComplete">
        <h1>Customer Form </h1>
            <form action="../LogicTier/functions/FormToDatabase.php" method="POST" id="formInput">
                <ol> <li>
                    <label for="title">Titel:</label>
                    <input type="text" name="BlogTitle">
                    <label for="text">Blog text:</label>
                    <input type="text" name="BlogText">
                    <label for="tags">Tags:</label>
                    <input type="text" name="BlogTags">
                    <label for="type">Wat type of:</label>
                    <input type="text" name="BlogType">
                    <input type="submit" value="Submit" id="send"></li>
                </ol>
            </form>
    </div><br />
    <div id="BlogTable">
        
        <?php 
        while($row = $stmt->fetch()){
            echo "<table id='BlogPostz'>";
            echo "&nbsp;<tr class='BID'><td>".$row["blogID"]."</td></tr>";
            echo "<tr class='Buser'><th>Made by:</th><td>".$row["userID"]."</td></tr><br />";
            echo "<tr class='Btitle'><td><b>".$row["blogTitle"]."</b></td></tr>";
            echo "<tr class='Btext'><td>".$row["blogText"]."</td></tr>";
            echo "<tr class='Btags'><th>Blog Tags:</th><td>".$row["blogTags"]."</td></tr>";
            echo "<tr class='Btype'><th>Blog typen:</th><td>".$row["blogType"]."<br /></td></tr>";
            echo "<tr class='Bdate'><th>Datum van publicatie:</th><td>".$row["blogDate"]."</td></tr>&nbsp;";
            //echo "<tr class='Bbutton'><td><button class='button' style='vertical-align:middle' onclick='window.location.href=`KlantenDetails.php?id=$id`'>Details</button></td></tr>";
        }
            echo"</table>"; 
        ?>
    </div>
</body>
</html>