<?php

namespace ChrisReedIO\JotformSDK;

use Illuminate\Support\Facades\App;
use JotForm;

class JotformSDK
{
    public static function api(): JotForm
    {
        return App::make(JotForm::class);
    }
}
