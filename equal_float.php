<?php
CONST EPSILON =0.00001;

$x = 0.123456;
$y = 0.123456;

var_dump(abs($x - $y) < EPSILON);