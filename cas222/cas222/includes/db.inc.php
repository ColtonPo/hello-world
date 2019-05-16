<?php
/**
 * Created by PhpStorm.
 * User: Colton
 * Date: 2/24/2019
 * Time: 1:19 PM
 */
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=coltonpo_pht_db', 'coltonpo_pht_user', 'myP4ssw0rd');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'includes/error.html.php';
    exit();
}
?>