<?php

function esc_str($str) {
    $esc_str = htmlentities($str, ENT_QUOTES, "UTF-8");
    return $esc_str;
}

function get_new_token() {
    $new_token = bin2hex(random_bytes(32));
    return $new_token;
}