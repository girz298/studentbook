<?php

require_once ('DataObject.php');

class Student extends DataObject
{
    public static $tableName = 'students';

    public function __construct($dataArr)
    {
        self::create($dataArr);
        foreach ($dataArr as $key => $value){
            $this->fieldsConstr[$key] = $value;
        }
    }

    private $fieldsConstr = [
        'name' => '',
        'surname' => '',
        'groupa' => '',
        'score' => '',
        'email' => '',
    ];

    public function getName()
    {
        return $this->fieldsConstr['name'];
    }

    public function setName($name)
    {
        return $this->fieldsConstr['name'] = $name;
    }

    public static function getByName( )
    {
        return self::get('name', $name);
    }
}