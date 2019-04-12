<?php include_once './ConnectDatabase.php';
error_reporting(1); 
$id = $_GET['id'];
$title = $_GET['title'];
$inhoud = $_GET['inhoud'];
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
        <div class="UpdateDiv">
            <form action="" method="GET" id="editform">
                    <input type = "hidden" name = "id" value="<?php echo $_GET['id']; ?>" />
                    <label for="title">Title:</label><br />
                    <input type="text" id="InputFieldTitle" name="title" value="<?php echo $_GET['title']; ?>"><br />
                    <label for="inhoud">Bericht:</label><br />
                    <textarea id="TextareaInhoud2" rows="4" cols="50" name="inhoud"><?php echo $_GET['inhoud']; ?></textarea>
                    
                    <div class="ButtonGroup">
                    <input id="UpdateButton" type="submit" name="submit" value="update"/>
                    <button id="TerugButton" type="submit" name="back" formaction="index.php">Terug</button>
                    </div>
            </form>
        </div>
    </body>
</html>

<?php


if($_GET['submit']) {
    $id = $_GET['id'];
    $title = $_GET['title'];
    $inhoud = $_GET['inhoud'];

    $stmt = $db_conn->prepare("UPDATE `blogPosts` SET `blogTitle` = '$title', `blogText` = '$inhoud' WHERE `blogPosts`.`blogID` = '$id' "); 
    $stmt->execute();
    
    function Redirect($url, $permanent = false)
    {
        if (headers_sent() === false)
            {
                header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
            }

        exit();
    }

    Redirect('index.php', false);
}
    echo "</table>";
    ?>


