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

if (!function_exists('getImage')) {
    function getImage($image)
    {
        return config('media.image') . $image;
    }
}

if (!function_exists('getImageOther')) {
    function getImageOther($image)
    {
        return asset(config('media.client.other') . $image);
    }
}

if (!function_exists('getImageMain')) {
    function getImageMain($image)
    {
        return asset(config('media.client.main') . $image);
    }
}

if (!function_exists('getShortDetail')) {
    function getShortDetail($detail)
    {
        return strlen($detail) > 200 ? substr($detail, 0, 300) . '...' : $detail;
    }
}

if (!function_exists('getDateCreated')) {
    function getDateCreated($date)
    {
        return \Carbon\Carbon::parse($date)->toDateString();
    }
}

if (!function_exists('parseLink')) {
    function parseLink($item)
    {
        return $item->slug . '-' . $item->id;
    }
}
