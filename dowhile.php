<?php
    $count = 0;
    $number = 0;

    do {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
        $count++;
    } while ($number != 9);

    print '9が出るまで' . $count . '回かかった。' . PHP_EOL;
?>
