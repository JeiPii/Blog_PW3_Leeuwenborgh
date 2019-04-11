<?php include_once './ConnectDatabase.php'; 
$id = $_GET['id'];
$title = $_GET['blogTitle'];
$inhoud = $_GET['blogText'];
?>

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

        <form action="" method="GET" id="editform">
            <div class="ButtonGroup">
                <input id="UpdateButton" type="submit" name="submit" value="update"/>
                <button id="TerugButton" type="submit" formaction="index.php">Terug</button>
            </div>
                <input type = "hidden" name = "id" value="<?php echo $_GET['id']; ?>" />
                <label for="title">Title</label><br>
                <input type="text" name="title" value="<?php echo $_GET['blogTitle']; ?>"><br>
                <label for="inhoud">Bericht</label>
                <textarea id="TextareaInhoud2" rows="4" cols="50" name="inhoud"><?php echo $_GET['blogText']; ?></textarea>
        </form>

        
    </body>
</html>

<?php

if($_GET['submit']) {
    $stmt = $db_conn->prepare("UPDATE posts SET title='$title' , inhoud='$inhoud' WHERE id='$id'");
    $stmt->execute();
}
    while($row = $stmt->fetch()){
    
    echo "<tr><th></th><td rowspan='2'><button class='button' style='vertical-align:middle' 
    onclick='window.location.href=`index.php`'>Terug</button></td></tr>";



    }
    echo "</table>";
    ?>


