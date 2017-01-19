<?php

function each_true(array $arr, callable $callback){
    foreach ($arr as $key => $value) {
        if (!$callback($value)) {
            return false;
        }
    }
    return true;
}