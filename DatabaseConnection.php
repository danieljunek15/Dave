<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sociaal_dave_database';
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>