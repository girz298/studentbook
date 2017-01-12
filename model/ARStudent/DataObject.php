<?php
/**
 * Created by PhpStorm.
 * User: doctor
 * Date: 13.01.17
 * Time: 0:50
 */
class DataObject
{

    public static $tableName = '';

    public static $fields = [];

    public static function create($data)
    {
        $query = 'INSERT INTO ' . static::$tableName . '(';
        foreach ($data as $key => $value) {
            $query .= $key . ',';
        }
        $query = rtrim($query, ",");
        $query .= ') VALUES (';
        foreach ($data as $key => $value) {
            $query .= '\'' . $value . '\'' . ',';
        }
        $query = rtrim($query, ",");
        $query .= ')';
        return 0;
    }

    public static function get($field, $value)
    {
        $className = static::class;
        $querry = 'SELECT * from ' . static::$tableName . ' WHERE ' . $field . '=' . $value;

        return new $className(/*result*/);
    }

}