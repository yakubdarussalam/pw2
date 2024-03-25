<?php
require_once "connection.php";

class dbConnection extends Connection
{
    public $host = "localhost";
    public $user = "root";
    public $pwd = "[][]";
    public $dbName = "pw2";



    function __construct()
    {
        parent::__construct($this->host, $this->user, $this->pwd, $this->dbName);
    }



    public function view($table)
    {

        $select = "SELECT * FROM " . $table . " ";
        $result = $this->connection->query($select);
        $list = array();
        while ($row = $result->fetch_array()) {
            $list[] = $row;
        }
        return $list;
    }


    public function save($table, $field = '')
    {

        $insert = "INSERT INTO " . $table . "(" . implode(",", array_keys($field)) . ") VALUES

('" . implode("','", array_values($field)) . "')";
        $result = $this->connection->query($insert);
        if ($result) {
            return true;
        } else {
            return false;
        }

    }


    public function selectWhere($table, $where)
    {

        $condition = "";
        $list = array();
        foreach ($where as $key => $value) {
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $select = "SELECT * FROM " . $table . " WHERE " . $condition;
        $result = $this->connection->query($select);
        while ($row = $result->fetch_array()) {
            $list[] = $row;
        }
        return $list;
    }



    public function update($table, $field, $where)
    {

        $query = "";
        $condition = "";
        foreach ($field as $key => $value) {
            $query .= $key . "='" . $value . "', ";
        }
        $query = substr($query, 0, -2);
        foreach ($where as $key => $value) {
            $condition .= $key . "='" . $value . "', AND";
        }
        $condition = substr($condition, 0, -5);
        $update = "UPDATE " . $table . " SET " . $query . " WHERE " . $condition . " ";
        $result = $this->connection->query($update);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function delete($table, $where)
    {
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = rtrim($condition, " AND ");

        $delete = "DELETE FROM " . $table . " WHERE " . $condition;
        $result = $this->connection->query($delete);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}//End Class Database


