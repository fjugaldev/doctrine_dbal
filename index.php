<?php 
require __DIR__ . '/vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();
//..
$connectionParams = array(
    'dbname' => 'supermercados_rey',
    'user' => 'root',
    'password' => 'root',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

$sql = "SELECT * FROM node";
$stmt = $conn->query($sql); // Simple, but has several drawbacks
echo "<pre>";
var_dump($stmt->fetchAll());
echo "</pre>";