<?php

function count_unique($list) {
    $cnt = 0;
    for ($i = 0; $i < count($list); $i++) {
        if ($list[$i] != 1) {
            ++$cnt;
        }
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$i] == $list[$j]) {
                $list[$j] = 1;
            }
        }
    }
    return $cnt;
}

function cnt_fraction($n) {
    $fl = array();
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $i + 1; $j <= $n; $j++) {
            $f = $i / $j;
            if ($f < 1) {
                $fl[] = $f;
            }
        }
    }
    return count_unique($fl);
}

echo "output:" . cnt_fraction(6);
