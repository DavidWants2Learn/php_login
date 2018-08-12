<?php

echo 'Connection.php';

class connection
{
    public $host;
    public $username;
    public $password;
    public $dbname;

    public $connection;

    public $firstname;
    public $lastname;

    function __construct($data)
    {
        //database connection
        $this->host = localhost;
        $this->username = root;
        $this->password = root;
        $this->dbname = mata_data;

        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }

        $this->firstname = mysqli_real_escape_string($this->connection, $data['fname']);
        $this->lastname = mysqli_real_escape_string($this->connection, $data['lname']);
    }

    public function AddToDB()
    {
        $firstName = $this->firstname;
        $lastName = $this->lastname;

        $sql = "INSERT INTO persons (firstname, lastname) VALUES ('$firstName', '$lastName')";
        if ($this->connection->query($sql) === TRUE) {
            echo "Row added successfully.";
        } else {
            echo "Error adding row: " . $this->connection->error;
        }
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->connection->close();
    }
}