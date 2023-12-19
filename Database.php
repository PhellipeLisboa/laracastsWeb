<?php 

// Connect to database, prepare and execute a query
class Database {

    public $connection;


    public function __construct($config, $username = 'root', $password = '') {

        // dsn = data source name
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);   
    }

    
    public function query($query, $params = []) {
        

        // Preparing and executing the query
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        // Fetching all of the results
        return $statement;
    }
}