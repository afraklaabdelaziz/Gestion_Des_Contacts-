<?php
class Database
{
    public $que;
    private $serverName = 'localhost';
    private $dbName = 'gestion_contacts_db';
    private $userName = 'root';
    private $password = '';
    public $result = array();
    public  $connection;
    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->serverName;dbname=$this->dbName", $this->userName, $this->password);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function insert($table, $array = array())
    {
        $key = implode(',', array_keys($array));
        $values = implode("','", $array);
        $insert = $this->connection->prepare("INSERT INTO $table($key)VALUES('$values')");
        $insert->execute();
    }
    public function delete($table, $id)
    {
        $delete = $this->connection->prepare("DELETE FROM $table WHERE id=$id");
        $delete->execute();
    }
    public function update($table, $arrayUp = array(), $id)
    {
        $args = array();

        foreach ($arrayUp as $key => $value) {
            $args[] = "$key = '$value'";
        }

        $sql = $this->connection->prepare("UPDATE  $table SET " . implode(',', $args) . " WHERE id = $id");
        $sql->execute();
    }
    public function select($table, $row = '*', $where = null)
    {
        if ($where != null) {
            $select = $this->connection->prepare("SELECT $row FROM $table WHERE $where");
        } else {
            $select = $this->connection->prepare("SELECT $row FROM $table");
        }
        $select->execute();
        while ($this->result[] = $select->fetch(PDO::FETCH_ASSOC)) :
        endwhile;
    }
}
$obj = new Database();
// $obj->select('user', '*');
// echo '<pre>';
// var_dump($obj);
// echo '</pre>';
