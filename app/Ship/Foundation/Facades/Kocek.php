<?php

namespace App\Ship\Foundation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array getShipFoldersNames()
 * @method static array getShipPath()
 * @method static array getSectionContainerNames(string $sectionName)
 * @method static mixed getClassObjectFromFile($filePathName)
 * @method static string getClassFullNameFromFile($filePathName)
 * @method static array getSectionPaths()
 * @method static mixed getClassType($className)
 * @method static array getAllContainerNames()
 * @method static array getAllContainerPaths()
 * @method static array getSectionNames()
 * @method static array getSectionContainerPaths(string $sectionName)
 * @method static void verifyClassExist(string $className)
 *
 * @see \App\Ship\Foundation\Kocek
 */
class Kocek extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Kocek';
    }
}
