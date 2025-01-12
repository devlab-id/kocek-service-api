<?php

namespace App\Containers\AppSection\Documentation\Tasks;

use App\Containers\AppSection\Documentation\Exceptions\NoDocTypesFoundException;
use App\Ship\Abstracts\Tasks\Task as AbstractTask;

class GetAllDocsTypesTask extends AbstractTask
{
    /**
     * @throws NoDocTypesFoundException
     */
    public function run(): array
    {
        if (!$configTypes = config('documentation.types')) {
            throw new NoDocTypesFoundException();
        }

        $types = [];
        foreach ($configTypes as $key => $value) {
            $types[] = $key;
        }

        // NOTE: type names must be the same as in the objects property (`public static $type = 'private';`)
        return $types;
    }
}
