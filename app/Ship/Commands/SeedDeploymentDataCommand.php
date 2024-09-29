<?php

namespace App\Ship\Commands;

use App\Ship\Abstracts\Commands\ConsoleCommand;
use Illuminate\Support\Facades\Config;

class SeedDeploymentDataCommand extends ConsoleCommand
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'kocek:seed-deploy';

    /**
     * The console command description.
     */
    protected $description = 'Seed data for initial deployment.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(): void
    {
        $this->call('db:seed', [
            '--class' => Config::get('kocek.seeders.deployment'),
        ]);

        $this->info('Deployment Data Seeded Successfully.');
    }
}
