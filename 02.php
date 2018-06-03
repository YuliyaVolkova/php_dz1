<?php
const TOTAL = 80;
const MARKERS = 23;
const PENCILS = 40;
const X = TOTAL - MARKERS - PENCILS;
echo "Дана задача: На школьной выставке " . TOTAL . " рисунков. ",
MARKERS, " из них выполнены фломастерами, " . PENCILS . " карандашами, ",
"а остальные — красками.<br>Сколько рисунков, выполненных красками, ",
"на школьной выставке?<br>";
echo "Решение: красками нарисованы: " . TOTAL . " - " . MARKERS . " - ",
    PENCILS, " = " . X . " рисунков.";
