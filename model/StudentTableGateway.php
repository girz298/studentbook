<?php


class StudentTableGateway{

    private $pdo;
    public $result;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function isPostClear(){
        if ($_GET['action'] == "delete") $this->removeTable();
        foreach ($_POST as $key => $value){
            if ($value === "") return true;
        }
        return false;
    }

    public function addData(){
        $statement = $this->pdo->prepare("INSERT INTO students(name, surname, groupa, score, email)
    VALUES(?, ?, ?,?,?)");

        $statement->execute(array_values($_POST));



    }

    public function getTable(){
         $result = $this->pdo-> query("SELECT * from students") -> fetchAll();
        return $result;
    }

//    public function checkData(){
//        if (count(preg_match("/^[а-яёЁА-я]{3,10}&/", $_POST['name']))>0) {return true;}
//        else return false;
//    }

    public function addStudent(Student $student){
    }

    private function removeTable(){
        $this->pdo->query("DELETE from students");
    }





}