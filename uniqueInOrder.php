<?php

// Функция unique_in_order, которая принимает в качестве аргумента последовательность и возвращает список элементов без каких-либо элементов с одинаковым значением рядом друг с другом и сохраняет исходный порядок элементов.
// Function unique_in_order which takes as argument a sequence and returns a list of items without any elements with the same value next to each other and preserving the original order of elements.

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