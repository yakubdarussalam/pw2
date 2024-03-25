<?php
class Connection
{
    private $hostname = "";
    private $user = "";
    private $pwd = "";
    private $dbName = "pw2";
    public $connection;
    public function __construct($host, $user, $pwd, $db)
    {
        $this->hostname = $host;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->dbName = $db;
        $this->connection = new mysqli($this->hostname, $this->user, $this->pwd, $this->dbName);
        if (!$this->connection) {
            die ("Connection failed: " . mysqli_connect_error());
        }
    }
}