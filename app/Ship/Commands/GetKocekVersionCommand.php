<?php

namespace App\Ship\Commands;

use App\Ship\Abstracts\Commands\ConsoleCommand;
use App\Ship\Foundation\Kocek;

class GetKocekVersionCommand extends ConsoleCommand
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'kocek';

    /**
     * The console command description.
     */
    protected $description = 'Display the current Kocek version.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info(Kocek::VERSION);
    }
}
