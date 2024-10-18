<?php

$value = $_GET['value'];

$data = ['Chocolate', 'Coconut', 'Strawberry', 'Vanilla'];

foreach ($data as $d) {
    if (str_starts_with(mb_strtolower($d), mb_strtolower($value))) {
        echo "<option>$d</option>";
    }
}

