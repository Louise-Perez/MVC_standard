<?php


/**
 * Permet de sécuriser une chaine de caractère 
 * @param $string
 * @return void
 */
function str_secu($string) {
    return trim(htmlspecialchars($string));
}

?>