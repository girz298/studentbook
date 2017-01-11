<?php

class Student{

    public $name;
    public $surName;
    public $groupa;
    public $score;
    public $email;


    function __construct($name, $surName, $groupa, $score, $email)
    {
        $this->name = $name;
        $this->surName = $surName;
        $this->groupa = $groupa;
        $this->score = $score;
        $this->email= $email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * @param mixed $surName
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;
    }

    /**
     * @return mixed
     */
    public function getGroupa()
    {
        return $this->groupa;
    }

    /**
     * @param mixed $groupa
     */
    public function setGroupa($groupa)
    {
        $this->groupa = $groupa;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }




}