<?php
// Database configuration for XAMPP MySQL
$host = 'localhost'; // XAMPP MySQL server
$dbname = 'vibrant_land_ledger'; // Replace with your database name
$username = 'root'; // Default XAMPP MySQL username
$password = ''; // Default XAMPP MySQL password (empty by default)

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error
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
