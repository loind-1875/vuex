<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

if (!function_exists('uuid_str')) {
    function uuid_str($string)
    {
        return sprintf(
            '%s-%s',
            Str::uuid(),
            trim($string)
        );
    }
}
