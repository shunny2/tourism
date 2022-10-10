<?php

function formatText($text) {
    if (strlen($text) > 150)
        return substr($text, 0, 150) . "...";
    else 
        return $text;
}
