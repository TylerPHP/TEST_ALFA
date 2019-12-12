<?php

$a = [1, 2, [[9, 10, [11]], 7, 8], 3, 5];

function go($array)
{
    foreach ($array as $key) {
        if (!is_array($key)) {
            $val = $key * 2;
            echo $val . "\r\n";
        } else {
            go($key);
        }
    }
}

go($a);