<?php

namespace Khurram554\MediaLibrary\SpatieMediaManager\Commands;

use Illuminate\Console\Command;

class SpatieMediaManagerCommand extends Command
{
    public $signature = 'spatie-media-manager';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
