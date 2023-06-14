<?php

$string = 'My name is Mohammed';

$first = substr($string, 0, 2);
$last = substr($string, -2, 2);
echo '<pre>';

echo "First 2 chars are ($first)";
echo "last 2 chars are ($last)";

if (strtolower($first) == strtolower($last)) {
    echo "The first and last 2 chars are similar!";
}
echo '<pre>';

