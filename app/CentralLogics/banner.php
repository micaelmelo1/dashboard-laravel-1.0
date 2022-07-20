<?php

namespace App\CentralLogics;

use App\Models\Banner;

class BannerLogic
{
    public static function get_banners()
    {
        return Banner::latest()->get();
    }
}
