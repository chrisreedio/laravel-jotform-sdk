<?php

namespace ChrisReedIO\JotformSDK\Commands;

use Illuminate\Console\Command;

class JotformSDKCommand extends Command
{
    public $signature = 'laravel-jotform-sdk';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
