<?php


class StudentTableGateway{

    private $pdo;
    public $result;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function isPostClear(){
        foreach ($_POST as $key => $value){
            if ($value === "") return true;
        }
        return false;
    }

    public function getTable(){
         $result = $this->pdo-> query("SELECT *from pot") -> fetchAll();
        return $result;
    }

    public function checkData(){
        if (count(preg_match("/^[а-яёЁА-я]{3,10}&/", $_POST['name']))>0) {return true;}
        else return false;
    }

    public function addStudent(Student $student){



    }





}