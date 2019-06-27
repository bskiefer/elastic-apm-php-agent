<?php

function getDefault(&$var, $key, $default = '')
{
    if (is_array($var) && isset($key)) {
        return isset($var[$key]) ? $var[$key] : $default;
    }

    return isset($var) ? $var : $default;
}
