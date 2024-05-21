<?php





// -----------------

// Enable error reporting for debugging
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$config=require("./config.php");
$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->dbConnection();

class Databaseconnection
{
    public $connection;
    public function __construct($config)
    {
        $this->connection = mysqli_connect($config["host"], $config["root"], $config["password"], $config["database"]);

        if (!$this->connection) {
           echo throw new Exception("Connection failed: " . mysqli_connect_error());
            
        }else{
          echo  "";
        }
    }
    public function dbConnection()
    {
        return $this->connection;
    }
}








?>