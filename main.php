<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once('objects/base/Database/Database.php');
require_once ('objects/base/ActiveRecordBase/ActiveRecordBase.php');
require_once ('objects/model/Student.php');

$firstStudent = Student::create(
    [
        'name' =>'Evgeniy',
        'surname' => 'Nikitin',
        'groupa' => '321',
        'score' => '400',
        'email' => 'nikitin@gmail.com'
    ]
);

$secondStudent = Student::create(
    [
        'name' =>'Sergey',
        'surname' => 'Rodionov',
        'groupa' => '321702',
        'score' => '270',
        'email' => 'girz298@gmail.com'
    ]
);

$secondStudent->setName('Jora')->setSurname('Kipuatok');
$secondStudent->update();

$firstStudent->setName('Robert')->setScore('25');
$firstStudent->update();

$studentJora = Student::getFirstByScore('25');
var_dump($studentJora);
echo $studentJora->getName();

$students = Student::getAll();