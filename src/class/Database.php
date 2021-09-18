<?php

class Database
{
    private static $_instance = null;
    private $_pdo;
    private $_query;
    private $_error = false;
    private $_results;

    private function __construct()
    {
        try {
            $this->_pdo = new PDO("mysql:host=localhost;dbname=nkspa", "root", "");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new Database();
        }
        return self::$_instance;
    }


    public function query($sql, $params = array())
    {
        $this->_error = false;
        $this->_query = $this->_pdo->prepare($sql);
        if ($this->_query) {
            $x = 1;
            if (count($params)) {
                foreach ($params as $param) {
                    $this->_query->bindValue($x, $param);
                    $x++;
                }
            }

            if ($this->_query->execute()) {
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
            } else {
                $this->_error = true;
            }
        }
        return $this;
    }


    public function insert($table, $fields = array())
    {
        if (count($fields)) {
            $keys = array_keys($fields);
            $values = null;

            $x = 1;
            foreach ($fields as $field) {
                $values .= "?";
                if ($x < count($fields)) {
                    $values .= ", ";
                }
                $x++;
            }
            $sql = "INSERT INTO " . $table . " (`" . implode('`, `', $keys) . "`) VALUES ({$values})";

            if (!$this->query($sql, $fields)->getError()) {
                return true;
            }
            return false;
        }
    }


    public function update($table, $id, $fields)
    {
        $set = "";

        $x = 1;
        foreach ($fields as $name => $value) {
            $set .= "{$name} = ?";
            if ($x < count($fields)) {
                $set .= ", ";
            }
            $x++;
        }
        $sql = "UPDATE {$table} SET {$set} WHERE id = {$id}";
        if (!$this->query($sql, $fields)->getError()) {
            return true;
        }
        return false;
    }


    public function getError()
    {
        return $this->_error;
    }


    public function getResults()
    {
        return $this->_results;
    }

    public function getFirst()
    {
        return $this->getResults()[0];
    }
}

?>