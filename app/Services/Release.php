<?php

namespace App\Services;

class Release
{
    public static function version(): string
    {
        return basename(base_path()) . '_v';
    }
}
