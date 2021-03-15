<?php
class database{

    public $dbname="students";
    public $host="localhost";
    public $password="";
    public $user="root";
    public $conn;


    function __construct(){
        $this->conn= new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);

        try{

        }catch(PDOException $ex){
            var_dump($ex->getMessage());
        }
    }

    function getDBConnection(){
        return $this->conn;
    }


    function insertUser($tablename, $cols ,$vals){
        $data= $this->conn->query("INSERT INTO $tablename $cols VALUES $vals");
    }

    function updateUser($tablename, $changes ,$whereCon){
        $data= $this->conn->query("UPDATE $tablename SET $changes WHERE $whereCon");
    }

    function deleteUser($tablename, $whereCon){
        $data= $this->conn->query("DELETE from $tablename WHERE $whereCon");
    }

    function getAllData($tablename){
        $data= $this->conn->query("SELECT * FROM $tablename");
        $result=$data->fetchAll();
        return $result;
    }

    function getcerData($tablename, $col, $whereCon){
        $data= $this->conn->query("SELECT $col FROM $tablename WHERE $whereCon");
        $result=$data->fetchAll();
        return $result;
    }

}

?>