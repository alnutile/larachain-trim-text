<?php

namespace SundanceSolutions\LarachainTrimText\Commands;

use Illuminate\Console\Command;

class LarachainTrimTextCommand extends Command
{
    public $signature = 'larachain-trim-text';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
