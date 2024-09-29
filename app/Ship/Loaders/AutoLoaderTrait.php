<?php

namespace App\Ship\Loaders;

use App\Ship\Foundation\Facades\Kocek;

trait AutoLoaderTrait
{
    // Using each component loader trait
    use ConfigsLoaderTrait;
    use LocalizationLoaderTrait;
    use MigrationsLoaderTrait;
    use ViewsLoaderTrait;
    use ProvidersLoaderTrait;
    use CommandsLoaderTrait;
    use AliasesLoaderTrait;
    use HelpersLoaderTrait;

    /**
     * To be used from the `boot` function of the main service provider.
     */
    public function runLoadersBoot(): void
    {
        $this->loadMigrationsFromShip();
        $this->loadLocalsFromShip();
        $this->loadViewsFromShip();
        $this->loadHelpersFromShip();
        $this->loadCommandsFromShip();
        $this->loadCommandsFromCore();

        // Iterate over all the containers folders and autoload most of the components
        foreach (Kocek::getAllContainerPaths() as $containerPath) {
            $this->loadMigrationsFromContainers($containerPath);
            $this->loadLocalsFromContainers($containerPath);
            $this->loadViewsFromContainers($containerPath);
            $this->loadHelpersFromContainers($containerPath);
            $this->loadCommandsFromContainers($containerPath);
        }
    }

    public function runLoaderRegister(): void
    {
        $this->loadConfigsFromShip();
        $this->loadOnlyShipProviderFromShip();

        foreach (Kocek::getAllContainerPaths() as $containerPath) {
            $this->loadConfigsFromContainers($containerPath);
            $this->loadOnlyMainProvidersFromContainers($containerPath);
        }
    }
}
