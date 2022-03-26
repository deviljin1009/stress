<?php
    $servername = 'us-cdbr-east-05.cleardb.net';
    $dbname = 'heroku_57e179459b82376';
    $username = 'be93f11c0a5adf';
    $password = '6da0a3ca';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>
