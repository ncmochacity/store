<?php

function add_tags($text) {
    $text = str_replace("\r\n", "\n", $text);
    //convert windows
    $text = str_replace("\r", "\n", $text);
    //convert mac
    //Unix uses "\n" to make a new line
    $paragraphs = explode("\n\n", $text);
    //explode function splits $text into an array and store them in $paragraphs
    $text = '';
    foreach ($paragraphs as $p) {
        $p = ltrim($p); // trims whit space from the left side of the paragraph
        $first_char = substr($p, 0, 1); //gets the first character beginning at index 0,end at index 1
        if ($first_char == '*') {
            $p = '<ul>' . $p . '</li></ul>';
            $p = str_replace("*", '<li>', $p);
            $p = str_replace("\n", '</li>', $p);
        } else {
            $p = '<p>' . $p . '</p>';
        }
        $text .=$p;
    }
    return $text;
}

?>