<?php

$arr = array(
    array(1, 2, array('aaaa')),
    array(4, 8, array('bbbb')),
    array(3, 1, array('cccc')),
    array(3, 2, array('cccc')),
    array(2, 1, array('dddd')),
    array(2, 2, array('dddd')),
);

//print_r($arr);
usort($arr, "ucmpsort");
print_r($arr);

function ucmpsort($a, $b) {
    if ($a[0] == $b[0]) {
        if ($a[1] > $b[1]) {
            return 1;
        } elseif ($a[1] < $b[1]) {
            return -1;
        } else {
            return 0;
        }
    } elseif ($a[0] > $b[0]) {
        return 1;
    } else {
        return -1;
    }
}
