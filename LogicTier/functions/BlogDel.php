<?php include_once './ConnectDatabase.php';  ?>
    
    <?php
        $id = $_GET['id'];
        // sql to delete a record
        $sql = "DELETE FROM `blogPosts` WHERE `blogPosts`.`blogID` = $id";

        // use exec() because no results are returned
        $db_conn->exec($sql);
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
    ?>
