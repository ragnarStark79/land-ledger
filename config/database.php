<?php
$host = 'localhost'; // Database host
$dbname = 'vibrant_land_ledger'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

/**
 * Simple function to run queries with prepared statements
 * @param string $sql SQL query with placeholders
 * @param array $params Parameters for the prepared statement
 * @return array|false Result set or false on failure
 */
function executeQuery($sql, $params = []) {
    global $pdo;
    if (!$pdo) return false;
    
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    } catch(PDOException $e) {
        error_log("Query execution failed: " . $e->getMessage());
        return false;
    }
}
?>
