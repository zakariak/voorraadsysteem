<?php
function loadView($viewPath, $vars = [])
{
  // extract the given variable
    extract($vars);
    // load view file
    include APP_PATH . '/views/' . $viewPath . '.php';
}

function getDbConnection()
{
    static $connection = null;
    // return connection when already exists
    if ($connection !== null) {
        return $connection;
    }
    // database settings
    $host = 'localhost';
    $dbname = 'toolsforever';
    $username = 'root';
    $password = '';
    // create connection
    try {
        $connection = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        throw new Exception('Connection failed: ' . $e->getMessage());
    }
    return $connection;
}
?>
