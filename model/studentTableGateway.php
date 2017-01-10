<?php


class StudentTableGateway{

    private $pdo;
    public $result;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getTable(){
         $result = $this->pdo-> query("SELECT *from pot") -> fetchAll();
        return $result;
    }

    public function addStudent(Student $student){

    }





}