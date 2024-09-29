<?php

namespace App\Ship\Generator;

use App\Ship\Generator\Commands\ActionGenerator;
use App\Ship\Generator\Commands\ConfigurationGenerator;
use App\Ship\Generator\Commands\ContainerApiGenerator;
use App\Ship\Generator\Commands\ContainerGenerator;
use App\Ship\Generator\Commands\ContainerWebGenerator;
use App\Ship\Generator\Commands\ControllerGenerator;
use App\Ship\Generator\Commands\EventGenerator;
use App\Ship\Generator\Commands\EventListenerGenerator;
use App\Ship\Generator\Commands\ExceptionGenerator;
use App\Ship\Generator\Commands\JobGenerator;
use App\Ship\Generator\Commands\MailGenerator;
use App\Ship\Generator\Commands\MiddlewareGenerator;
use App\Ship\Generator\Commands\MigrationGenerator;
use App\Ship\Generator\Commands\ModelFactoryGenerator;
use App\Ship\Generator\Commands\ModelGenerator;
use App\Ship\Generator\Commands\NotificationGenerator;
use App\Ship\Generator\Commands\PolicyGenerator;
use App\Ship\Generator\Commands\ReadmeGenerator;
use App\Ship\Generator\Commands\RepositoryGenerator;
use App\Ship\Generator\Commands\RequestGenerator;
use App\Ship\Generator\Commands\RouteGenerator;
use App\Ship\Generator\Commands\SeederGenerator;
use App\Ship\Generator\Commands\ServiceProviderGenerator;
use App\Ship\Generator\Commands\SubActionGenerator;
use App\Ship\Generator\Commands\TaskGenerator;
use App\Ship\Generator\Commands\TestFunctionalTestGenerator;
use App\Ship\Generator\Commands\TestTestCaseGenerator;
use App\Ship\Generator\Commands\TestUnitTestGenerator;
use App\Ship\Generator\Commands\TransformerGenerator;
use App\Ship\Generator\Commands\ValueGenerator;
use Illuminate\Support\ServiceProvider;

class GeneratorsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands($this->getGeneratorCommands());
        }
    }

    private function getGeneratorCommands(): array
    {
        // add your generators here
        return $generatorCommands = [
            ActionGenerator::class,
            ConfigurationGenerator::class,
            ContainerGenerator::class,
            ContainerApiGenerator::class,
            ContainerWebGenerator::class,
            ControllerGenerator::class,
            EventGenerator::class,
            EventListenerGenerator::class,
            ExceptionGenerator::class,
            JobGenerator::class,
            ModelFactoryGenerator::class,
            MailGenerator::class,
            MiddlewareGenerator::class,
            MigrationGenerator::class,
            ModelGenerator::class,
            NotificationGenerator::class,
            PolicyGenerator::class,
            ReadmeGenerator::class,
            RepositoryGenerator::class,
            RequestGenerator::class,
            RouteGenerator::class,
            SeederGenerator::class,
            ServiceProviderGenerator::class,
            SubActionGenerator::class,
            TestFunctionalTestGenerator::class,
            TestTestCaseGenerator::class,
            TestUnitTestGenerator::class,
            TaskGenerator::class,
            TransformerGenerator::class,
            ValueGenerator::class,
        ];
    }
}
