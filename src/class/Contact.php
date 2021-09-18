<?php

require_once("Database.php");

class Contact {
    const TABLE_NAME = 'contact';  
    private $_db;
    

    public function create($fields = array())
    {
        $this->_db = Database::getInstance();         
        if(!$this->_db->insert(self::TABLE_NAME, $fields)){
            throw new Exception("Message not sent, please try again");
        }
    }
}

?>
