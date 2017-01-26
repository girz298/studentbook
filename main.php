<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once('objects/base/Database/Database.php');
require_once('objects/base/ActiveRecordBase/ActiveRecordBase.php');
require_once('objects/model/Student.php');
require_once('libs/functions.php');

if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    Student::dropTable();
    header("Location: /");
    die();
}

function testing()
{
    $firstStudent = Student::create(
        [
            'first_name' => 'Evgeniy',
            'surname' => 'Nikitin',
            'group_id' => '321',
            'score' => '400',
            'email' => 'nikitin@gmail.com'
        ]
    );

    $secondStudent = Student::create(
        [
            'first_name' => 'Sergey',
            'surname' => 'Rodionov',
            'group_id' => '321702',
            'score' => '270',
            'email' => 'girz298@gmail.com'
        ]
    );

    $secondStudent
        ->setName('Jora')
        ->setSurname('Kipuatok')
        ->update();

    $firstStudent
        ->setName('Robert')
        ->setScore('25')
        ->update();

    $studentJora = Student::getFirstByScore('25');
    var_dump($studentJora);
    echo $studentJora->getName();
}

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = $_GET['action'];
}


switch ($action) {
    case 'add':
        if (count($_POST) === 6 && each_true($_POST, function ($arr, $key, $value) {
                return $value !== '' ? true : false;
            })
        ) {
            $student = Student::create(
                [
                    'first_name' => $_POST['name'],
                    'surname' => $_POST['surname'],
                    'group_id' => $_POST['group'],
                    'score' => $_POST['score'],
                    'email' => $_POST['email']
                ]
            );
            if ($student !== 0) {
                header('Location: /');
                die();
            }
        } else {
            echo 'Bad Request!';
        }
        break;
    case 'remove':
        if (isset($_GET['id'])) {
            Student::getById($_GET['id'])->remove();
        }
}

$students = Student::getAll();