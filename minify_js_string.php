<?php

/**
 * @author nucleom42
 * @version 0.1
 * @param string $js_string
 * @return string
 */

function minify_js_string( string $js_string ): string {
    //removing comments
    $js_string =
        preg_replace('/((\/{2}|\/\+).)|.(\+\/)/', '', $js_string);
    //one line
    return preg_replace('/(?<=[^a-zA-Z])\s+(?=[a-zA-Z])|(?<=[a-zA-Z])\s+(?=[^a-zA-Z])|(?<=[^a-zA-Z])\s+(?=[^a-zA-Z])/', '', $js_string);
}