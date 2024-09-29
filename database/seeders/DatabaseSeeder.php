<?php

namespace Database\Seeders;

use App\Ship\Loaders\SeederLoaderTrait;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use SeederLoaderTrait;

    public function run(): void
    {
        $this->runLoadingSeeders();
    }
}
