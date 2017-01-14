<?php

class Student extends ActiveRecordBase
{
    public static function getTableName()
    {
        return 'students';
    }

    public $fields = [
        'id' => '', // Actualy the first column should be named 'id' and auto_inc !!!
        'name' => '',
        'surname' => '',
        'groupa' => '',
        'score' => '',
        'email' => '',
    ];

    //
    //  GETTERS START
    //
    public function getName()
    {
        return $this->fields['name'];
    }

    public function getSurname()
    {
        return $this->fields['surname'];
    }

    public function getGroup()
    {
        return $this->fields['groupa'];
    }

    public function getScore()
    {
        return $this->fields['score'];
    }

    public function getEmail()
    {
        return $this->fields['email'];
    }

    //
    //  SETTERS START
    //
    public function setName($name)
    {
        $this->fields['name'] = $name;
        return $this;
    }

    public function setSurname($surname)
    {
        $this->fields['surname'] = $surname;
        return $this;
    }

    public function setScore($score)
    {
        $this->fields['score'] = $score;
        return $this;
    }

    public function setGroup($group)
    {
        $this->fields['groupa'] = $group;
        return $this;
    }

    public function setEmail($email)
    {
        $this->fields['email'] = $email;
        return $this;
    }

    //
    //  GET BY METHODS START
    //
    public static function getById($id)
    {
        return self::get('id', $id);
    }

    public static function getFirstByName($name)
    {
        return self::get('name', $name);
    }

    public static function getFirstByScore($score)
    {
        return self::get('score', $score);
    }
}