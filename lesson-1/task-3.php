<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // При нестрогом сравнении аботает неявное приведение типов. '05' приводится к числу 5.
    var_dump((int)'012345');     // Явное приведение строки к числу.
    var_dump((float)123.0 === (int)123.0); // Строгое сравнение сравнивает типы данных.
    var_dump((int)0 === (int)'hello, world'); // Если строку приводить к числовому типу, то результат будет 0.
?>