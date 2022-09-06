<?php
function uniqueInOrder($iterable)
{
    $arr = str_split($iterable);
    $save_arr = [];
    $temp_storage = '';

    foreach ($arr as $v) {
        if ($v != $temp_storage) {
            $save_arr[] = $v;
        }
        $temp_storage = $v;
    }
    return $save_arr;
} 
var_dump(uniqueInOrder("AAAABBBCCDAABBB"));
