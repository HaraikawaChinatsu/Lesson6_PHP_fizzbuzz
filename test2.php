<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    $count = count($fruits);         // 配列の中身の数を$countへ代入
    for ($i = 0; $i < $count; $i++) {
        print $i . '番目: ' . $fruits[$i] . PHP_EOL;
    }

    // 変数の初期化
    $number = 0;

    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
    }
?>