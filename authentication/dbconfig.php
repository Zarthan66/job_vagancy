<?php
    try {
        $con = new PDO('mysql:host=localhost;dbname=job_vacancy','root', '', array(PDO::ATTR_PERSISTENT => true));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    include_once 'database.php';
    $user = new Database($con);
?>