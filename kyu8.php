<?php
// Multiply
function multiply($a, $b) {
    return $a * $b;
}


echo multiply(3, 6);

// Convert a Boolean to a String
function booleanToString($b) {
    if ($b === true) {
        return "true";
    } else {
        if ($b === false) {
            return "false";
        }
    }
}

// Returning Strings
function greet($name) {
    return 'Hello, ' . $name . ' how are you doing today?';
}