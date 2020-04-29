<?php

$host = '127.0.0.1';
$db   = 'totlxelq_dsglab';
$user = 'totlxelq_dsglab';
$pass = 'n=4OvC&~[vYp';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    $query = "SELECT campo1, campo2 FROM table_test";
    
    $stmt = $pdo->query($query);
    
    echo "<h1>Tabella Test</h1>";
    
    while ($row = $stmt->fetch())
    {
        echo $row['campo1'] . " | ";
        echo $row['campo2'] . " <br/>";
    }     
     
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
