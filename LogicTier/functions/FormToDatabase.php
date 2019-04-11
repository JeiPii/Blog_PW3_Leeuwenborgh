<?php 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL); 
        $title = $_POST["BlogTitle"];
        $text = $_POST["BlogText"];
        $tags = $_POST["BlogTags"];
        $type = $_POST["BlogType"];

try {   
        require_once './connectDatabase.php';

        $sql = "INSERT INTO `blogposts` (`blogID`, `userID`, `blogTitle`, `blogText`, `blogTags`, `blogType`, `blogDate`) VALUES (NULL, NULL, '$title', '$text', '$tags', '$type', CURRENT_TIMESTAMP);";
            if ($db_conn->query($sql))
        {
            echo "<script type= 'text/javascript'>console.log('New Record Inserted Successfully');</script>";
        }
            else
        {
            echo "<script type= 'text/javascript'>console.log('Data not successfully Inserted.');</script>";
        }
    
            $db_conn = null;
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
            catch(PDOException $e)
        {
            echo $e->getMessage();
        }; //Post finished

    ?>


