<?php
    // 関数を定義
    function sum($a, $b) {
        $result = 0;
        for ($i = $a; $i <= $b; $i++) {
            $result = $result + $i;
        }
        print $result . PHP_EOL;
    }

    // 関数を呼び出し
    sum(1, 9);
    sum(1, 1000);
    sum(1000, 9999);
?>