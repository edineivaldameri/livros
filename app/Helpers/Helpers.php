<?php

if (!function_exists('isNight')) {
    function isNight(): bool
    {
        if ((date('H') >= 19 && date('H') <= 23) || (date('H') >= 0 && date('H') <= 6)) {
            return true;
        }
        return false;
    }
}
