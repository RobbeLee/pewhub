<?php

/*

Mike Schaatsbergen - 2018

A file filled with the most used functions

Table Of Contents:
- Appearance @ line 14

*/

function clear($value) {
    return mysqli_real_escape_string($value);
}

function escape($value) {
    return htmlspecialchars($value);
}

function getTheme($dir) {
    if (!isset($_COOKIE['theme'])) {
        return '<link rel="stylesheet" href="/pewhub/assets/css/dark/default.css">';
    }
    return '<link rel="stylesheet" href="/pewhub/assets/css/'.escape($_COOKIE['theme']).'/default.css">';
}